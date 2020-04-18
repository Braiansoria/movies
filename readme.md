<h1> Movies </>


<p> Bienvenido a la instalacion del proyecto Movies, la siguiente es una descripcion de como instalarlo.</p>

<h2> Paso 1 </h2>

<p> Clonamos el proyecto desde el boton "Clone of download" y en nuestra consola de github, debemos entrar a la carpeta del proyecto con el comando.<br>

    $ cd Movies

</p>

<h2> Paso 2 </h2>

<p> Dentro de la carpeta del proyecto ejecutamos el siguiente comando, instalando el composer.

    $ composer intall
</p>

<h2> Paso 3 </h2>

<p> Ejecutaremos el comando , composer update, el cual traera todos los archivos y carpetas que el proyecto clonado no posee.
    
    $ composer update
</p>

<h2> Paso 4 </h2>

<p> Modificamos el nombre del archivo .env.example. por .env, o bien podemos copiar todo el conenido del .env.example y copiarlo dentro de un archivo .env nuevo, -OJO: Cuando subimos al repositorio o cuando en ocasiones se descarga el proyecto de laravel no contiene el .env , para eso seguimos la especificaciones de esta linea. </p>

<h2> Paso 5 </h2>

<p> Por ultimo solo debemos generar una key para nuestra app con el comando php artisan key:generate o simplemente k:g en nuestra consola, la manera de comprobar que se ejecuto nuestra key, es verificandolo dentro de nuestro archivo .env,ya que aumentara el 'APP_KEY='.

 
    
    $ php artisan key:generate
</p>

<h2> Paso 6 </h2>

<p>Para migrar la base de datos (Mysql,Sqlite,phpmyadmin,etc..), migramos con el comando.

    $ php artisan migrate
  
  </p>
  
<h2> Paso 7 </h2>

<p>Listo ya podemos ejecutar el proyecto Movies.

      $ php artisan serve
</p>

