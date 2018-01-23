<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1402" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-02-11T19:27:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1402</id>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2012-02-11T19:27:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6511#p6511</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6511#p6511"/>
<title type="html"><![CDATA[Re: Instanciar un programa dentro de otro.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6511#p6511"><![CDATA[
Como siempre <span style="font-weight: bold">hugoruscitti </span> de gran ayuda!!, muchas gracias era justo lo que precisaba!!<br /><br />Gracias!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Sab Feb 11, 2012 7:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-02-11T18:20:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6510#p6510</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6510#p6510"/>
<title type="html"><![CDATA[Re: Instanciar un programa dentro de otro.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6510#p6510"><![CDATA[
Hola diego!, hay varias formas de 'instanciar' un programa desde otro y que sean independientes.<br /><br />Yo te voy a comentar una forma, aunque no es la única.<br /><br />Existe un módulo llamado &quot;subprocess&quot;, que te permite ejecutar otros programas desde python, ya<br />sea que los otros programas sean python o no.<br /><br />Por ejemplo, imaginá que tengo un script llamado 'mi_juego.py' y lo quiero ejecutar desde<br />mi programa. Podría escribir algo así:<br /><br /><pre class="prettyprint">import subprocess<br /><br />programa = subprocess.Popen&#40;[sys.executable, &#39;mi_juego.py&#39;]&#41;<br /><br /># resto del programa...</pre><br /><br />Popen se encarga de ejecutar comando externos, y si no especificamos mas argumentos<br />van a correr en paralelo.<br /><br />Avisanos si esta forma de ejecutar procesos te funciona, sino tenemos otras...<br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Feb 11, 2012 6:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2012-02-11T15:38:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6509#p6509</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6509#p6509"/>
<title type="html"><![CDATA[Instanciar un programa dentro de otro.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1402&amp;p=6509#p6509"><![CDATA[
Buenas tengo el siguiente problema.. tengo una aplicación creada en pygtk, esta es un editor de juegos la que llama al motor del juego que esta creado con pygame, son dos aplicaciones separadas que funcionan independientemente, pero en este caso quiero que el editor pueda llamar al motor, o sea llamar a otra aplicación independiente, se que se puede en java, c++, pero no se como hacerlo en python. Ya que cuando importo la clase del motor y llamo al juego como cuando creas una clase, pasa que cuando cierro la ventana del juego se me cierra todo, o sea el juego y el editor (ya que estan corriendo en un mismo programa o hilo). Lo que quiero hacer en python es llamar a un programa nuevo desde otro, o sea como llamar a un main desde otro main, y que corran por caminos distintos, o sea si cierro uno al otro no le pase nada. En este caso es un programa que utiliza pygtk y el otro utiliza pygame, y ambos hechos en python.<br /><br />gracias!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Sab Feb 11, 2012 3:38 pm</p><hr />
]]></content>
</entry>
</feed>