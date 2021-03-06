
# Aplicación de Visor de Cartas usando CakePHP con MVC
Este ejemplo de visor de cartas se usará para orientar en:

* Uso del Fraemwork PHP
* Identificación de las diferencias entre el código Spaguetti y el código que usa el patrón MVC

## Para utilizar el repositorio de Ejemplo
1. Descargar e Instalar [Composer](https://getcomposer.org/doc/00-intro.md) o actualizar usando `composer self-update`. 
2. Clonar el repositorio y Copiar los archivos en su directorio del Servidor HTTP elegido (htdocs en Apache XAMPP)
3. Ejecutar `composer update`en el directorio del repositorio clonado. Esto instalará las dependencias del proyecto.
4. Para editar el código se puede usar [Visual Studio  Code](https://code.visualstudio.com/)

## Para crear un nuevo proyecto de CakePHP (Si clona este repositorio no hace falta crear uno nuevo)
CakePHP es un framework de desarrollo de aplicaciones web que usa el patrón MVC con FrontController
Para instalar:
1. Descargar [Composer](https://getcomposer.org/doc/00-intro.md) o actualizar usando `composer self-update`.
2. Ejecutar en consola `php composer.phar create-project --prefer-dist cakephp/app [app_name]`. 
3. Copiar los archivos en su directorio del Servidor HTTP elegido (htdocs en Apache XAMPP)
4. Acceder a `localhost/[nombre de la app]` y revisar el resultado.

Esto creará una estructura de directorios para crear la aplicación web.

## Base de Datos 
El directorio `bd`contiene un archivo sql con instrucciones en sql para crear la Base de Datos.
Además se debe realizar la siguiente configuración. El presente repositorio no realiza la configuración automaticamente ya que cada uno de ustedes tendrá su respectivo SGBD. usuario y contraseña.

## Configuración

Se debe editar el archivo `config/app.php` y configurar el eleento `DataSources`para que la aplicación tenga accesoa la Base de Datos.

```
'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',/*Esta línea funciona si el servidor es MySql, sino hay que colocar el driver adecuado al SGBD*/
            'persistent' => false,
            'host' => 'localhost', /*El servidor es local*/
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => 'my_app', /*Especificar su respectivo usuario*/
            'password' => 'secret',/*Especificar aquí su contraseña*/
            'database' => 'my_app',/*La base de datos se debe llamar 'bdcartas'*/
```
### Finalmente
Una vez configurada la BD y el archivo de configuración ya podrán acceder a la aplicación web.
Si acceden a http://localhost/CakePHPVisorCartas/ verán la página de inicio de CakePHP. Esta página se elimina en producción, pero en desarrollo es útil para verificar el estado de la conexión a la BD, entre otras cosas.

Para acceder a la aplicación web del visor de cartas deben invocar el *controlador* de Cartas a través de http://localhost/CakePHPVisorCartas/Cartas
Este *controlador* consultará al *modelo* el cual consultará a la BD creada y luego mostrará la vista en una página HTML así:
![](preview.png)
