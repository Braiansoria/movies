Instalación
Después de descargar el proyecto entramos a este.

  $ cd nombreRepositorio
Ejecutamos el siguiente comando, instalamos el composer

  $ composer install
-En caso contrario podemos instalar el composer de LARAVEL COLLECTIVE:

  $ composer require "laravelcollective/html":"^5.3.0"
Modificamos el nombre del archivo .env.example. por .env y agregamos nuestras credenciales. -OJO: Cuando subimos al repositorio o cuando en ocasiones se descarga el proyecto de laravel no contiene el .env , para eso seguimos la especificaciones de esta linea.

Por ultimo solo debemos generar una key para nuestra app(Application Key)

   $ php artisan key:generate
-Esto aumentara en el 'APP_KEY=' de nuestro .env

Para migrar la base de datos (seleccionamos Mysql,Sqlite..etc), migramos.

  $ php artisan migrate
Listo ya podemos ejecutar el proyecto Cinema.

  $ php artisan serve
