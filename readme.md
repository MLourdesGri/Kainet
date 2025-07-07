Para poder correr el proyecto, es necesario contar con algunas herramientas instaladas: PHP, Composer, MySQL, Node.js y Angular CLI.

En el caso del **backend**, primero se debe clonar el repositorio y ubicarse dentro de la carpeta del proyecto backend. Luego se instalan las dependencias con Composer(composer install). Una vez hecho esto, se necesita crear un archivo .env a partir del archivo .env.example. Esto se puede hacer copiándolo y ejecutando el comando php artisan key:generate para generar la clave de la aplicación.

Dentro del archivo .env hay que configurar los datos de conexión a la base de datos. Específicamente, hay que completar el nombre de la base de datos, el usuario y la contraseña que se vayan a usar. La base de datos debe existir previamente, por lo que hay que crearla de forma manual con el nombre que se haya indicado.

Luego, se ejecutan las migraciones para crear las tablas necesarias en la base de datos con el comando php artisan migrate. Además, como el proyecto incluye seeders para cargar datos base, ejecutar también php artisan db:seed para que esos datos se inserten automáticamente.

Una vez configurado todo esto, se puede iniciar el servidor del backend con php artisan serve.

Para ejecutar el comando solicitado en consola:
php artisan crear:posicion {idEmpresa} {idProducto} {fechaEntrega} {moneda} {precio}

En cuanto al **frontend**, también se debe clonar el repositorio correspondiente y ubicarse en la carpeta del proyecto frontend. Allí se instalan las dependencias(npm install), y luego se puede levantar la aplicación con ng serve. El frontend está preparado para consumir el servicio de listado de posiciones que expone el backend. También incluye una página para cargar nuevas posiciones, que al finalizar redirige automáticamente al listado.
