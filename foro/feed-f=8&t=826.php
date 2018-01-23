<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=826" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-16T08:08:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=826</id>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-16T08:08:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3754#p3754</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3754#p3754"/>
<title type="html"><![CDATA[Re: ¿Cuales son los Nº de colores en python ?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3754#p3754"><![CDATA[
graCias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Lun Ago 16, 2010 8:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ºNIÑO_HEOREº]]></name></author>
<updated>2010-08-16T04:35:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3753#p3753</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3753#p3753"/>
<title type="html"><![CDATA[Re: ¿Cuales son los Nº de colores en python ?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3753#p3753"><![CDATA[
<span style="color: #0000FF">orale grasias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />  por la a ayuda ya abri el paint y estoy viendo esos valores  de color verde ,rojo y azul   <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> </span><br /><img src="http://akvis.com/img/articles/ciencia-luz-color/paint.gif" alt="Imagen" /><br /><br /><span style="color: #400080">import sys<br />from PySFML import sf<br /><br />window = sf.RenderWindow(sf.VideoMode(640, 480), &quot;    Porfin pude <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" />&quot;)<br />event = sf.Event()<br /><br /># colores<br />colorx = sf.Color(95, 13, 115)<br />colorc = sf.Color(255, 255, 0)<br /><br />window.SetFramerateLimit(60)<br /><br /># Creando el mensaje en pantalla<br />mensaje = sf.String(&quot;        Grasias camarada <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" />!!!&quot;)<br />mensaje.SetColor(colorc)<br /><br />quit = False<br /><br />while not quit:<br /> window.Clear(colorx)<br /> window.Draw(mensaje)<br /> window.Display()<br /><br />while window.GetEvent(event):<br />   <br /> quit = True</span><br /><br />window.Close()<br />///////////////////////////////////////////////<br /><span style="color: #FF0000">grasias porfin pude saver de donde poner esos colores numericos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> jaja</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2312">ºNIÑO_HEOREº</a> — Lun Ago 16, 2010 4:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-15T20:46:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3737#p3737</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3737#p3737"/>
<title type="html"><![CDATA[Re: ¿Cuales son los Nº de colores en python ?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3737#p3737"><![CDATA[
Buenas, ¿como estas?.<br /><br />Te comento como cambiar el color de fondo de la ventana, casi lo<br />mismo tienes que hacer para cambiar el color de cualquier otra<br />cosa.<br /><br />Los colores están compuestos por 3 componentes, rojo, verde y azúl. Así<br />que para elegir un color solamente tienes que combinar estas 3<br />componentes.<br /><br />En SFML para crear un color puedes usar el objeto Color e indicarle<br />las componentes como números entre 0 y 255.<br /><br />Por ejemplo puedes usar una sentencia como la que sigue:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>mi_color = sf.Color(0, 255, 0)<br /></code></dd></dl><br /><br />Donde el primer componente es la tonalidad del color rojo (0 en este<br />caso, el segundo es la componente verde (255 es el máximo) y la<br />componente azúl (0).<br /><br /><br />Luego, mas adelante en el código, donde dice &quot;window.Clear(blanco)&quot; podrías<br />cambiarlo por:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>window.Clear(mi_color)<br /></code></dd></dl><br /><br />Te recomiendo que pruebes distintos valores en la sentencia &quot;mi_color = sf.Color....&quot;, así<br />vas a poder jugar con los colores y obtener distintos resultados.<br /><br />Otra buena idea es abrir algún programa de dibujo, ir a la paleta de colores<br />y ver cómo se identifican los colores usando los valores RGB (rojo, verde azul).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 15, 2010 8:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ºNIÑO_HEOREº]]></name></author>
<updated>2010-08-15T19:19:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3736#p3736</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3736#p3736"/>
<title type="html"><![CDATA[¿Cuales son los Nº de colores en python ?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=826&amp;p=3736#p3736"><![CDATA[
<span style="font-size: 150%; line-height: 116%;">Hola soy algo novato para el python  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />  <br />y quisiera saber como cambiar el color a otro ,mm yasea el color de fondo en azul a verde ,o cambiar en otro color las letras mm, por ejemplo este pequeño codigos que agare de ejemplo de Como istalar PySFML del autor Hugo Ruscitti</span><br /><span style="color: #404000">import sys<br />from PySFML import sf<br /> <br />window = sf.RenderWindow(sf.VideoMode(640, 480), &quot;Hola&quot;)<br />event = sf.Event()<br /> <br /># colores<br />blanco = sf.Color(250, 250, 250)<br />negro = sf.Color(0, 0, 0)<br /><br />window.SetFramerateLimit(60)<br /> <br /># Creando el mensaje en pantalla<br />mensaje = sf.String(&quot;Hola Losersjuegos !!!&quot;)<br />mensaje.SetColor(negro)<br /><br />quit = False<br /> <br />while not quit:<br />    window.Clear(blanco)<br />    window.Draw(mensaje)<br />    window.Display()<br /> <br />    while window.GetEvent(event):<br />        if event.Type == sf.Event.Closed:<br />            quit = True<br /> <br />window.Close()</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2312">ºNIÑO_HEOREº</a> — Dom Ago 15, 2010 7:19 pm</p><hr />
]]></content>
</entry>
</feed>