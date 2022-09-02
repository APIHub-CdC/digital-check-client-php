# digital-check-client-php

<p>API Digital Checks.<p> <p>A través de datos como correo electrónico, número telefónico y dirección IP, proporciona un score de riesgo de fraude de originación y a la vez obtiene información relevante para mejor conocimiento del perfil de riesgo del usuario.</p><br/><img src='https://github.com/APIHub-CdC/imagenes-cdc/blob/master/circulo_de_credito-apihub.png' height='37' width='160'/><br/>

## Requisitos

PHP >= 7.2
### Dependencias adicionales
- Composer [vea como instalar][1]
- Se debe contar con las siguientes dependencias de PHP:
    - ext-curl
    - ext-mbstring
```sh
# RHEL distros
yum install php-mbstring
yum install curl

# Debian distros
apt-get install php-mbstring
apt-get install php-curl
```

## Instalación

Ejecutar: `composer install`

## Guía de inicio

### Paso 1. Generar llave y certificado

- Se tiene que tener un contenedor en formato PKCS12.
- En caso de no contar con uno, ejecutar las instrucciones contenidas en **lib/Interceptor/key_pair_gen.sh** o con los siguientes comandos.

**Opcional**: Para cifrar el contenedor, colocar una contraseña en una variable de ambiente.
```sh
export KEY_PASSWORD=your_password
```
- Definir los nombres de archivos y alias.
```sh
export PRIVATE_KEY_FILE=pri_key.pem
export CERTIFICATE_FILE=certificate.pem
export SUBJECT=/C=MX/ST=MX/L=MX/O=CDC/CN=CDC
export PKCS12_FILE=keypair.p12
export ALIAS=circulo_de_credito
```
- Generar llave y certificado.
```sh
#Genera la llave privada.
openssl ecparam -name secp384r1 -genkey -out ${PRIVATE_KEY_FILE}
#Genera el certificado público.
openssl req -new -x509 -days 365 \
    -key ${PRIVATE_KEY_FILE} \
    -out ${CERTIFICATE_FILE} \
    -subj "${SUBJECT}"
```
- Generar contenedor en formato PKCS12.
```sh
# Genera el archivo pkcs12 a partir de la llave privada y el certificado.
# Deberá empaquetar la llave privada y el certificado.
openssl pkcs12 -name ${ALIAS} \
    -export -out ${PKCS12_FILE} \
    -inkey ${PRIVATE_KEY_FILE} \
    -in ${CERTIFICATE_FILE} -password pass:${KEY_PASSWORD}
```

### Paso 2. Cargar el certificado dentro del portal de desarrolladores

 1. Iniciar sesión.
 2. Dar clic en la sección "**Mis aplicaciones**".
 3. Seleccionar la aplicación.
 4. Ir a la pestaña de "**Certificados para @tuApp**".
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/applications.png">
    </p>
 5. Al abrirse la ventana, seleccionar el certificado previamente creado y dar clic en el botón "**Cargar**":
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/upload_cert.png">
    </p>

### Paso 3. Descargar el certificado de Círculo de Crédito dentro del portal de desarrolladores

 1. Iniciar sesión.
 2. Dar clic en la sección "**Mis aplicaciones**".
 3. Seleccionar la aplicación.
 4. Ir a la pestaña de "**Certificados para @tuApp**".
    <p align="center">
        <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/applications.png">
    </p>
 5. Al abrirse la ventana, dar clic al botón "**Descargar**":
    <p align="center">
        <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/download_cert.png">
    </p>
 > Es importante que este contenedor sea almacenado en la siguiente ruta:
 > **/path/to/repository/lib/Interceptor/keypair.p12**
 >
 > Así mismo el certificado proporcionado por Círculo de Crédito en la siguiente ruta:
 > **/path/to/repository/lib/Interceptor/cdc_cert.pem**
- En caso de que no se almacene así, se debe especificar la ruta donde se encuentra el contenedor y el certificado. Ver el siguiente ejemplo:
```php
$password = getenv('KEY_PASSWORD');
$this->signer = new KeyHandler(
    "/example/route/keypair.p12",
    "/example/route/cdc_cert.pem",
    $password
);
```
 > **NOTA:** Solamente en caso de que el contenedor se haya cifrado, debe colocarse la contraseña en una variable de ambiente e indicar el nombre de la misma, como se ve en la imagen anterior.

 
### Paso 4. Modificar URL y credenciales

 Modificar la URL y las credenciales de acceso a la petición en ***test/Api/DigitalCheckApiTest.php***, como se muestra en el siguiente fragmento de código:

```php
...
public  function setUp():  void {

  $this->username =  "";
  $this->password =  "";
  $this->apiKey   =  "";

  $apiUrl            =  "";
  $keystorePassword  =  "";
  $keystore          =  "";
  $cdcCertificate    =  "";

  $signer  =  new KeyHandler($keystore, $cdcCertificate, $keystorePassword);
  $events  =  new MiddlewareEvents($signer);
  
  $handler  = HandlerStack::create();
  $handler->push($events->add_signature_header('x-signature'));
  $handler->push($events->verify_signature_header('x-signature'));
  
  $this->config =  new Configuration();
  $this->config->setHost($apiUrl);

  $this->httpClient =  new HttpClient([
    'handler'  =>  $handler
  ]);
}
...
 ```
 
### Paso 3. Capturar los datos y realizar la petición

> **NOTA:** Los datos de la siguiente petición son solo representativos.

```php
...
public  function testGetReporte()  {

    $requestPayload = new  RequestData();
    $requestPayload->setFolioOtorgante("323323");
    $requestPayload->setFolioConsulta("232323");
    $requestPayload->setIp("192.168.1.1");
    $requestPayload->setEmail("myemail@server.com");
    $requestPayload->setPhone("5510000000");

    $response = null;

    try  {
        $client = new ApiClient($this->httpClient, $this->config);
        $response  =  $client->fullfraud($this->apiKey,$this->username, $this->password, $requestPayload);
        print("\n".$response);
        
    }  catch  (ApiException $exception)  {
        print("\nThe HTTP request failed, an error occurred: ".($exception->getMessage()));
        print("\n".$exception->getResponseObject());
    }

    $this->assertNotNull($response);
}
...
```

## Pruebas unitarias

Para ejecutar las pruebas unitarias:
```sh
./vendor/bin/phpunit
```
[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

---
[CONDICIONES DE USO, REPRODUCCIÓN Y DISTRIBUCIÓN](https://github.com/APIHub-CdC/licencias-cdc)

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
