
# Aplicación de Visor de Cartas usando CakePHP con MVC
Este ejemplo de visor de cartas se usará para orientar en:

* Uso del Fraemwork PHP
* Identificación de las diferencias entre el código Spaguetti y el código que usa el patrón MVC

## Para utilizar el repositorio de Ejemplo
1. Clonar el repositorio
2. Copiar los archivos en su directorio del Servidor HTTP elegido (htdocs en Apache XAMPP)
3. Para editar el código se puede usar [Visual Studio  Code](https://code.visualstudio.com/)

## Método de instalación de CakePHP
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

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
