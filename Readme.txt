En el composer.json de la aplicación hay que añadir
"require":
{
      "php": ">=5.3.2",
      "acavero/mpwarfwk": "dev-devel"
}

Para pedir la dependencia del framework a github.
Tras esto, con un composer update bajará el framework y ya se podrá utilizar.

Se incluyen dos dumps de bases de datos con los contenidos que se han usado para hacer las pruebas tanto en "producción" como en desarollo.
Se importa con  mysql -u mysql_user -p DATABASE < backup.sql.
En la carpeta dumps están los dumps de las bases de datos.

El /index es el índice del framework, ahí están los 2 método que se han implementado como pruebas.
El HelloController y el UserController.
El HelloControler saluda, se accede a él con url/hello/salute/param1/param2/paramN... y saludará.
El UserController es el que accede a la base de datos, tiene los metodos findAll, findUserByName, deleteUserByName, insertUser.
El método insertUser permite insertar un usuario, tanto por sólo nombre como por nombre y apellido.

A la hora de implementar el framework, en el archivo EnviromentConfiguration de la aplicación definimos el entorno en el que estamos.
En el RouteConfiguration definiremos las rutas. Y en el ServiceConfiguration los servicios.
Las templates tienen que ir dentro de una carpeta Templates.
