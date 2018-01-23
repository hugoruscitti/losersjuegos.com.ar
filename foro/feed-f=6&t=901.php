<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=901" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-10-05T02:44:35+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=901</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-10-05T02:44:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4236#p4236</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4236#p4236"/>
<title type="html"><![CDATA[Re: [SDL] control del framerate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4236#p4236"><![CDATA[
<blockquote><div><cite>baigos escribió:</cite><br />es cuestión de seguir probando cosas, capaz mezclo todo y veo si puedo viajar en el tiempo a 88 millas por hora, pero necesito una conexion de 1 gigobit, cosa que no tengo porque basicamente soy pobre. DOOCC, Marrtiiii,DOOOCC!!<br /></div></blockquote><br /><br />jaja gracioso.<br /><br />Bueno no se si te hallas fijado que tu juego consume demaciados recursos, eso no es normal pues es un juego en 2D.<br />y lo que te consume muchos recursos es ese while que se esta ejecutando hasta que pase el tiempo minimo.<br />para la computadora no es bueno, pues un while que no hace algo es una perdida de procesador, lo que puedes hacer es poner un SDL_Delay, con el tiempo que falta para que se cumpla el tiempo que tu quieres, eso hace que el procesador deje de atender tu programa lo cual es bueno, de esa forma veras una reduccion brutal en el consumo del procesador para tu juego.<br />Haora que metodo usar ese es el detalle, y el que tu dices es lo que yo uso, si le pongo 60 ago una operacion para ver cuanto debe durar un frame para que 60 pasen en un segundo, y me ha funcionado muy bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Oct 05, 2010 2:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-10-04T18:07:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4229#p4229</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4229#p4229"/>
<title type="html"><![CDATA[Re: [SDL] control del framerate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4229#p4229"><![CDATA[
gracias che, y sdl_framerate alguien usó?<br /><br />y despues vi que SGE -un framework que funciona sobre SDL- tiene una función de delay más precisa:<br />Uint32 sge_Delay(Uint32 ticks)<br /><br /><!-- m --><a class="postlink" href="http://www.digitalfanatics.org/cal/sge/docs/misc.html">http://www.digitalfanatics.org/cal/sge/docs/misc.html</a><!-- m --><br /><br />es cuestión de seguir probando cosas, capaz mezclo todo y veo si puedo viajar en el tiempo a 88 millas por hora, pero necesito una conexion de 1 gigobit, cosa que no tengo porque basicamente soy pobre. DOOCC, Marrtiiii,DOOOCC!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Lun Oct 04, 2010 6:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-10-04T15:26:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4228#p4228</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4228#p4228"/>
<title type="html"><![CDATA[Re: [SDL] control del framerate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4228#p4228"><![CDATA[
Hay varias formas, pero en principio sería útil que utilices<br />aquella que mejor se adapte a tu juego.<br /><br />Aquí hay un artículo que analiza varias formas de implementar<br />el manejo de tiempo, lástima que está solamente en<br />inglés:<br /><br /><!-- m --><a class="postlink" href="http://gafferongames.com/game-physics/fix-your-timestep/">http://gafferongames.com/game-physics/f ... -timestep/</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Oct 04, 2010 3:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-10-04T13:46:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4225#p4225</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4225#p4225"/>
<title type="html"><![CDATA[[SDL] control del framerate]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=901&amp;p=4225#p4225"><![CDATA[
Mire usted sr don patron, enquisiera saber cual método conviene usar para controlar bien bien el framerate. <br /><br />El que ando usando es el que usa la mayoría, de tener dos funciones que controlan el timer para el inicio (que se ejecuta al inicio del game loop) y otra que devuelve la resta del tiempo actual menos el inicial del loop (currenttime). <br />Y despues se ejecuta al final del gameloop un while o un do while que espera que un contador que almacena el currentime tenga cierta cantidad de milisegundos.<br />La condición que uso es que llegue a 17 ms (el redondeo de hacer regla de 3 simple, si 60 cuadros los hago en 1000 ms, 1 cuadro lo dibujaré en 1000/60 = (aprox) 16,66).<br /><br />Lo que no se si esto es lo mejor. Otra solución era usar la librería SDL_framerate que trae el SDL_gfx, pero no se que tal funciona.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Lun Oct 04, 2010 1:46 pm</p><hr />
]]></content>
</entry>
</feed>