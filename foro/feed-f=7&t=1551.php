<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1551" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-10-30T01:34:50+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1551</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-10-30T01:34:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7173#p7173</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7173#p7173"/>
<title type="html"><![CDATA[Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7173#p7173"><![CDATA[
hoguera, publicamos una versión de pilas para mac, esto debería resolver el problema:<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=23&amp;t=1567">viewtopic.php?f=23&amp;t=1567</a><!-- l --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Oct 30, 2012 1:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-28T20:01:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7121#p7121</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7121#p7121"/>
<title type="html"><![CDATA[Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7121#p7121"><![CDATA[
¿Que errores te muestra?, ¿nos podrías adjuntar el texto que se imprime?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Sep 28, 2012 8:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[HoGueRa]]></name></author>
<updated>2012-09-27T19:14:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7120#p7120</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7120#p7120"/>
<title type="html"><![CDATA[Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7120#p7120"><![CDATA[
Hola,<br />avance bien instalando git y box2d, pero al querer instalar pybox2d me surgieron errores al segir los pasos descriptos, estoy investigando el porque de los errores te mantengo al tanto. saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2654">HoGueRa</a> — Jue Sep 27, 2012 7:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-20T17:56:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7105#p7105</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7105#p7105"/>
<title type="html"><![CDATA[Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7105#p7105"><![CDATA[
Buenisimo, el siguiente paso es instalar &quot;git&quot;, y &quot;box2d&quot;:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>brew install box2d<br />brew install git</code></dd></dl><br /><br />luego, instalar pybox2d siguiendo las instrucciones de la página. Hay varios pasos<br />opcionales, dado que ya tienes xcode y homebrew:<br /><br /><!-- m --><a class="postlink" href="https://code.google.com/p/pybox2d/wiki/BuildingfromSource">https://code.google.com/p/pybox2d/wiki/ ... fromSource</a><!-- m --><br /><br />Por último, queda descargar pilas desde el repositorio e instalarlo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>git clone http://github.com/hugoruscitti/pilas<br />cd pilas<br />git submodule init<br />git submodule update<br />cd lanas<br />git submodule init<br />git submodule update<br />cd ..<br />sudo python setup.py install<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 20, 2012 5:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[HoGueRa]]></name></author>
<updated>2012-09-18T00:07:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7091#p7091</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7091#p7091"/>
<title type="html"><![CDATA[Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7091#p7091"><![CDATA[
Hola,<br />Gracias por responder, ya tengo instalado xcode, ahora instalo homebrew, espero los siguientes pasos.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2654">HoGueRa</a> — Mar Sep 18, 2012 12:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-16T13:54:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7089#p7089</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7089#p7089"/>
<title type="html"><![CDATA[Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7089#p7089"><![CDATA[
Buenas!!,<br /><br />Si, pilas funciona perfecto en macos, solo que aún no terminé de pasar la<br />guia de instalación en la web. ¿De casualidad tienes instalado xcode y homebrew?, son<br />los dos pasos iniciales:<br /><br /><!-- m --><a class="postlink" href="https://developer.apple.com/xcode/">https://developer.apple.com/xcode/</a><!-- m --><br /><!-- m --><a class="postlink" href="http://mxcl.github.com/homebrew/">http://mxcl.github.com/homebrew/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Sep 16, 2012 1:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[HoGueRa]]></name></author>
<updated>2012-09-15T23:09:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7088#p7088</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7088#p7088"/>
<title type="html"><![CDATA[Instalación de Pila en MACOS X 10.7.4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7088#p7088"><![CDATA[
Hola, me gustaría saber si alguien instalo PILAS en una mac y si me puede guiar.<br />Gracias<br /><br />Saludos.<br /><br />HoGueRa<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2654">HoGueRa</a> — Sab Sep 15, 2012 11:09 pm</p><hr />
]]></content>
</entry>
</feed>