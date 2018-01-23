<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1525" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-27T04:16:35+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1525</id>
<entry>
<author><name><![CDATA[xRodak]]></name></author>
<updated>2012-07-27T04:16:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6972#p6972</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6972#p6972"/>
<title type="html"><![CDATA[Re: [Pygame] Error al salir del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6972#p6972"><![CDATA[
A mi me funciona dicho script tanto en IDLE como en Eclipse (otro IDE), intenta volver a instalar python, o busca otra versión, &gt;=2.7 he leído que son las buenas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2631">xRodak</a> — Vie Jul 27, 2012 4:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jota_sk]]></name></author>
<updated>2012-07-27T00:21:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6966#p6966</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6966#p6966"/>
<title type="html"><![CDATA[Re: [Pygame] Error al salir del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6966#p6966"><![CDATA[
Una pregunta. Me he instalado el Ninja-IDE, he vuelto a escribir todo lo que tenía antes que me funcionaba pero que me tiraba el error que he comentado antes. Ahora le doy &quot;ejecutar archivo&quot; donde en teoria (creo) deberia ejecutarme el codigo que tengo escrito en el archivo, pero me dice &quot;fallo al inciar&quot; Que hago mal? O como puedo probar todo lo que programa?<br /><br />EDITO: Creo que es algo del programa porque con este simple codigo me dice lo mismo<br /><br /><pre class="prettyprint">a = 1<br />b = 2<br />while a &lt; b:<br />    print a * b</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2634">Jota_sk</a> — Vie Jul 27, 2012 12:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jota_sk]]></name></author>
<updated>2012-07-26T12:52:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6958#p6958</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6958#p6958"/>
<title type="html"><![CDATA[Re: [Pygame] Error al salir del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6958#p6958"><![CDATA[
Si, si que es el tutorial del pong. Por algo he de empezar. Pues ahora mismo voy a probar el ninja-IDE para probarlo y si no me convence probare otros. Gracias por la respuesta. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2634">Jota_sk</a> — Jue Jul 26, 2012 12:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-07-26T03:13:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6955#p6955</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6955#p6955"/>
<title type="html"><![CDATA[Re: [Pygame] Error al salir del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6955#p6955"><![CDATA[
Buenas.<br /><br />Estuve un buen tiempo haciendo un par de pruebas para lograr simular tu error pero no encontraba nada, hasta que se me ocurrió ir directo al código que estás usando tú, ya que yo también seguí ese tutorial hace mucho tiempo (por lo menos me parece que es el mismo. Es el juego pong, no?) y por suerte conservaba aún el código. Al momento de abrirlo, solo por perezoso, en lugar de abrirlo con mi IDE de siempre, lo abrí con el IDE default de python, IDLE. Y cuando lo ejecuté me dio exactamente el mismo error que a ti. La cosa es bastante simple, resulta que IDLE es un IDE que nunca se terminó de desarrollar y aún tiene algunos bugs por ahí. Yo te recomendaría usar algún otro IDE como el que uso yo, NINJA-IDE que me sienta muy bien. Aunque te es bueno probar vários para ver con cual se te hace mas cómodo trabajar. A mi me gusta NINJA-IDE porque es bastante completo, pero te aseguro que hay otros muy buenos por ahí.<br /><br />Ah! y un detallito. No hace falta poner el 0 en sys.exit(), si no le pones nada o si le pasa None se pone por default en 0, osea una salida exitosa.<br /><br />Suerte en todo y bienvenido al mundo de python <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Jue Jul 26, 2012 3:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jota_sk]]></name></author>
<updated>2012-07-25T14:43:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6953#p6953</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6953#p6953"/>
<title type="html"><![CDATA[[Pygame] Error al salir del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1525&amp;p=6953#p6953"><![CDATA[
Hola. Me estoy iniciando en python y pygame. Y estoy siguiendo tutoriales para ir aprendiendo. Hasta ahora en conseguido crear una venta, poner un fondo, y poner un sprite. Pero al intentar cerrar la ventana me sale error.<br />He puesto este codigo y me dice error cuando pulso la X para cerrar ventana. Si no pulso X el &quot;juego&quot; se inicia correctamente y no me imprime ningún error en pantalla<br /> Cuando pulso la X para cerrar me sale el siguiente error:<br /><pre class="prettyprint">Traceback &#40;most recent call last&#41;:<br />  File &quot;C:\Users\Jota\Python\Pong\pong.py&quot;, line 59, in &lt;module&gt;<br />    main&#40;&#41;<br />  File &quot;C:\Users\Jota\Python\Pong\pong.py&quot;, line 50, in main<br />    sys.exit&#40;0&#41;<br />SystemExit: 0</pre><br /><br />y en esas lineas tengo el siguiente codigo:<br /><br /><pre class="prettyprint">while True:<br />for eventos in pygame.event.get&#40;&#41;:<br />if eventos.type == QUIT:<br />sys.exit&#40;0&#41;<br /><br />screen.blit&#40;background_image, &#40;0,0&#41;&#41;<br />screen.blit&#40;bola.image, bola.rect&#41;<br />pygame.display.flip&#40;&#41;<br />return 0<br /><br />if __name__ == &#39;__main__&#39;:<br />pygame.init&#40;&#41;<br />main&#40;&#41;</pre><br /><br />tengo importados los modulos pygame y sys<pre class="prettyprint">import pygame<br />import sys<br />from pygame.locals import *</pre><br /><br />Actualmente estoy utilizando pygame, me recomiendan que aprenda con pygame o que empiece con pilas? Que lo he descubierto gracias a esta pagina<br /><br />Os aclaro que no tengo mucha idea, de programación se poco HTML, CSS, poco de javascript y PHP. Y como podreis ver de lo poco que se es de programación web.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2634">Jota_sk</a> — Mié Jul 25, 2012 2:43 pm</p><hr />
]]></content>
</entry>
</feed>