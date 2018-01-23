<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=1023" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-25T21:03:35+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=1023</id>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-01-25T21:03:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4883#p4883</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4883#p4883"/>
<title type="html"><![CDATA[Re: sistema de inventario, util para juegos point and click]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4883#p4883"><![CDATA[
<blockquote><div><cite>danielpuch escribió:</cite><br />Muchas gracias Pablo!!!... te estas convirtiendo en mi programador favorito, je je je...<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /><br /></div></blockquote><br /><br />jejeje, muchas gracias por que me consideras tu programador favorito, gracias, aunque en este foro existen tambien muchas<br />personas apasionadas por este mundo de la programacion y los videojuegos, algunas como Hugo Ruscitti <br />que inicio este proyecto y que he aprendido mucho de él.<br /><br />Saludos y abrazos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />Pablo Garrido<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mar Ene 25, 2011 9:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[danielpuch]]></name></author>
<updated>2011-01-25T20:50:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4882#p4882</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4882#p4882"/>
<title type="html"><![CDATA[Re: sistema de inventario, util para juegos point and click]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4882#p4882"><![CDATA[
Muchas gracias Pablo!!!... te estas convirtiendo en mi programador favorito, je je je...<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2372">danielpuch</a> — Mar Ene 25, 2011 8:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-01-25T18:05:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4878#p4878</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4878#p4878"/>
<title type="html"><![CDATA[sistema de inventario, util para juegos point and click]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1023&amp;p=4878#p4878"><![CDATA[
Saludos a Todos,<br />Acabo de subir al repositorio, el sistema de inventario para los juegos point and click.<br /><br />consiste en una cajita en la esquina inferior izquierda de la pantalla, en donde guardamos nuestros objetos recogidos.<br /><br />b.PNG<br /><br />nosotros lo que hacemos es agregar objetos en pantalla ,ejemplo, una llave, <br />para recogerla y agregarla al inventario debemos hacer click sobre ella.<br /><br />para ver que objetos tenemos en el inventario hacemos click en una cajita al inferior izquierdo de la pantalla,<br />se mostraran los objetos recogidos, para usarlos hacemos click sobre alguno, al hacer click<br />se ejecuta la función que nosotros le indiquemos.<br /><br />si estoy usando actualmente la llave, y quiero usar otro elemento anteriormente recogido,<br />presiono nuevamente la llave para desactivarla y hago click en el nuevo objeto a utilizar.<br /><br />en pilas funciona asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code><br /># primero creamos un cursor personalizado<br />mouse = cursor()<br /><br /># agregamos nuestra caja contenedora de objetos<br />herramientas = Inventory(- 280, - 210)<br /><br /># funcion a ejecutar<br />def imprimir_mensaje_1():<br />    print &quot;herramienta en uso: banana&quot;<br />    <br /># para agregar elementos en la pantalla que al hacer click se guarden en nuestro inventario los definimos así<br /># primer argumento: imagen normal<br /># segundo argumento: imagen inactiva<br /># x : pos en x<br /># y: pos en y<br /># funcion que se ejecutara cuando el elemento sea clickeado en el inventario<br /><br />herramientas.agregar_elemento(&quot;gui/banana.png&quot;,&quot;gui/banana_i.png&quot;, x= 100, y = 0, <br />                                               funcion = imprimir_mensaje_1)<br /></code></dd></dl><br /><br />PD: cuando el mouse pasa sobre un elemento que se puede recoger este cambia a una manito<br />      así se puede saber que elementos sirven y cuales no. -  las imágenes utilizads son solo de prueba<br /><br />Pruébenlo y me cuentan que les parece.<br /><br />directorio:<br />pilas/experimental/gui/<br /><br />Saludos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />Pablo Garrido<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mar Ene 25, 2011 6:05 pm</p><hr />
]]></content>
</entry>
</feed>