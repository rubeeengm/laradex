---


---

<h1 id="laradex">LaraDex</h1>
<ul>
<li>Laravel 5.8</li>
<li>Laravel Collective</li>
<li>HTML</li>
<li>Bootstrap</li>
<li>Blade PHP</li>
<li>Vue.js</li>
<li>MySQL</li>
</ul>
<h3 id="despliegue-de-entrenadores">Despliegue de entrenadores</h3>
<p><img src="https://firebasestorage.googleapis.com/v0/b/laradex-2bcb4.appspot.com/o/Screenshot_2019-05-05_23-56-06.png?alt=media&amp;token=d3e82587-182c-4a49-a187-6585166368fb" alt="enter image description here"></p>
<h3 id="modificación--y-eliminación-de-la-información-del-entrenador">Modificación  y eliminación de la información del entrenador</h3>
<p><img src="https://firebasestorage.googleapis.com/v0/b/laradex-2bcb4.appspot.com/o/Screenshot_2019-05-05_23-56-25.png?alt=media&amp;token=633ae7d3-f162-4995-ad87-b2bc6bb396c7" alt="enter image description here"></p>
<h3 id="visualización-de-pokemons-asociados-al-entrenador">Visualización de pokemons asociados al entrenador</h3>
<p><img src="https://firebasestorage.googleapis.com/v0/b/laradex-2bcb4.appspot.com/o/Screenshot_2019-05-05_23-56-31.png?alt=media&amp;token=1e4529e2-db83-4ce9-9b3c-15ab8ba3267d" alt="enter image description here"></p>
<h3 id="modal-para-añadir-pokemons">Modal para añadir pokemons</h3>
<p><img src="https://firebasestorage.googleapis.com/v0/b/laradex-2bcb4.appspot.com/o/Screenshot_2019-05-05_23-58-02.png?alt=media&amp;token=cd8cfdfc-3539-4d2a-95ed-df48c5c9d9f3" alt="enter image description here"></p>
<h3 id="configuración-del-proyecto">Configuración del proyecto</h3>
<p>Desde una terminal ejecutamos lo siguiente:</p>
<ol>
<li>
<p>Moverse a la carpeta del directorio</p>
<pre><code>	cd laradex
</code></pre>
</li>
<li>
<p>Instalar las dependencias del proyecto</p>
<pre><code>	composer install
</code></pre>
</li>
<li>
<p>Hacemos la configuración del archivo .env</p>
<pre><code>	cp .env.example .env
	php artisan key:generate
</code></pre>
</li>
<li>
<p>Configuramos el nombre de la base de datos, usuario y contraseña del gestor MySQL en el archivo <strong>.env</strong><br>
<img src="https://firebasestorage.googleapis.com/v0/b/laradex-2bcb4.appspot.com/o/Screenshot_2019-05-06_01-26-57.png?alt=media&amp;token=30be64f3-8eb5-464e-8d56-a983162b9051" alt="enter image description here"></p>
</li>
<li>
<p>Entramos al gestor de y <strong>solo creamos la base de datos</strong></p>
<pre><code>	create database laradex_development
</code></pre>
</li>
<li>
<p>Regresamos a la terminal y ejecutamos las migraciones</p>
<pre><code>	php artisan migrate --seed
</code></pre>
</li>
<li>
<p>Ejecutamos el servidor</p>
<pre><code>	php artisan serve
</code></pre>
</li>
</ol>

