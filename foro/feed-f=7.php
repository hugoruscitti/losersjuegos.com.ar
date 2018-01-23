<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-10-30T01:34:50+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-10-30T01:34:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7173#p7173</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7173#p7173"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7173#p7173"><![CDATA[
hoguera, publicamos una versión de pilas para mac, esto debería resolver el problema:<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=23&amp;t=1567">viewtopic.php?f=23&amp;t=1567</a><!-- l --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Oct 30, 2012 1:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-28T20:01:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7121#p7121</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7121#p7121"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7121#p7121"><![CDATA[
¿Que errores te muestra?, ¿nos podrías adjuntar el texto que se imprime?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Sep 28, 2012 8:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[HoGueRa]]></name></author>
<updated>2012-09-27T19:14:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7120#p7120</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7120#p7120"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7120#p7120"><![CDATA[
Hola,<br />avance bien instalando git y box2d, pero al querer instalar pybox2d me surgieron errores al segir los pasos descriptos, estoy investigando el porque de los errores te mantengo al tanto. saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2654">HoGueRa</a> — Jue Sep 27, 2012 7:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-20T17:56:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7105#p7105</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7105#p7105"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7105#p7105"><![CDATA[
Buenisimo, el siguiente paso es instalar &quot;git&quot;, y &quot;box2d&quot;:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>brew install box2d<br />brew install git</code></dd></dl><br /><br />luego, instalar pybox2d siguiendo las instrucciones de la página. Hay varios pasos<br />opcionales, dado que ya tienes xcode y homebrew:<br /><br /><!-- m --><a class="postlink" href="https://code.google.com/p/pybox2d/wiki/BuildingfromSource">https://code.google.com/p/pybox2d/wiki/ ... fromSource</a><!-- m --><br /><br />Por último, queda descargar pilas desde el repositorio e instalarlo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>git clone http://github.com/hugoruscitti/pilas<br />cd pilas<br />git submodule init<br />git submodule update<br />cd lanas<br />git submodule init<br />git submodule update<br />cd ..<br />sudo python setup.py install<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 20, 2012 5:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[HoGueRa]]></name></author>
<updated>2012-09-18T00:07:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7091#p7091</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7091#p7091"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7091#p7091"><![CDATA[
Hola,<br />Gracias por responder, ya tengo instalado xcode, ahora instalo homebrew, espero los siguientes pasos.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2654">HoGueRa</a> — Mar Sep 18, 2012 12:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-09-16T13:54:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7089#p7089</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7089#p7089"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Instalación de Pila en MACOS X 10.7.4]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7089#p7089"><![CDATA[
Buenas!!,<br /><br />Si, pilas funciona perfecto en macos, solo que aún no terminé de pasar la<br />guia de instalación en la web. ¿De casualidad tienes instalado xcode y homebrew?, son<br />los dos pasos iniciales:<br /><br /><!-- m --><a class="postlink" href="https://developer.apple.com/xcode/">https://developer.apple.com/xcode/</a><!-- m --><br /><!-- m --><a class="postlink" href="http://mxcl.github.com/homebrew/">http://mxcl.github.com/homebrew/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Sep 16, 2012 1:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[HoGueRa]]></name></author>
<updated>2012-09-15T23:09:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7088#p7088</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7088#p7088"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Instalación de Pila en MACOS X 10.7.4]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1551&amp;p=7088#p7088"><![CDATA[
Hola, me gustaría saber si alguien instalo PILAS en una mac y si me puede guiar.<br />Gracias<br /><br />Saludos.<br /><br />HoGueRa<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2654">HoGueRa</a> — Sab Sep 15, 2012 11:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-09-08T01:25:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7059#p7059</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7059#p7059"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Compilacion Cruzada en Windows a Linux con Cygwin]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7059#p7059"><![CDATA[
No es por nada, pero creo que te seria mucho mas simple instalar una distribución Linux, o hacer visualización a eso...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Sep 08, 2012 1:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jaisiero]]></name></author>
<updated>2012-09-07T17:55:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7057#p7057</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7057#p7057"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Compilacion Cruzada en Windows a Linux con Cygwin]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7057#p7057"><![CDATA[
Hola de nuevo, <br />volviendo con el tema de siempre ahora estoy intentando realizar un cross-compiling desde <span style="font-weight: bold">Windows</span> a <span style="font-weight: bold">Linux</span>. Me he descargado el <span style="font-weight: bold">Setup de Cygwin</span> de su página y varios paquetes ensenciales como <span style="font-weight: bold">make, gcc, gcc-mingw, binutils, ... </span><br /><br /><br />Pero no consigo encontrar un compilador configurado para hacerlo de forma cruzada. Debería ser algo así como <span style="font-weight: bold">i386-linux-gcc</span> y <span style="font-weight: bold">x86_64-linux-gcc</span>. <br /><br />metamod-p.sourceforge.net/cross-compiling.on.windows.for.linux.html <br /><br />En un enlace de Sourceforge existe un compilador en un fichero comprimido <span style="font-weight: bold">metamod-p-1.19p32</span> que intento instalar mediante <span style="font-weight: bold">http://losersjuegos.com.ar/foro/configure</span>, <span style="font-weight: bold">make install</span> en la carpeta raiz de <span style="font-weight: bold">Cygwin</span> pero me da error: <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>for i in metamod stub_plugin trace_plugin wdmisc_plugin; do \ <br />        make -C $i install || exit; \ <br />done <br />/bin/sh: gcc-linux: no se encontró la orden <br />/bin/sh: gcc-linux: no se encontró la orden <br />make&#91;1&#93;: se ingresa al directorio `/metamod-p-1.19p32/metamod' <br />gcc-linux -ggdb3 -Wall -Wno-unknown-pragmas   -DOPT_TYPE=&quot;\&quot;debugging\&quot;&quot; -D__METAMOD_BUILD__  -fPIC -I. -I.http://losersjuegos.com.ar/foro/metamod -I.http://losersjuegos.com.ar/foro/hlsdk/engine -I.http://losersjuegos.com.ar/foro/hlsdk/common -I.http://losersjuegos.com.ar/foro/hlsdk/pm_shared -I.http://losersjuegos.com.ar/foro/hlsdk/dlls -I.http://losersjuegos.com.ar/foro/hlsdk -o debug.linux_i386/api_hook.o -c api_hook.cpp <br />/bin/sh: gcc-linux: no se encontró la orden <br />Makefile:264: recipe for target `debug.linux_i386/api_hook.o' failed <br />make&#91;1&#93;: *** &#91;debug.linux_i386/api_hook.o&#93; Error 127 <br />make&#91;1&#93;: se sale del directorio `/metamod-p-1.19p32/metamod' <br />Makefile:16: recipe for target `install' failed <br />make: *** &#91;install&#93; Error 2 <br /></code></dd></dl><br /><br />Agradezco toda ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2651">Jaisiero</a> — Vie Sep 07, 2012 5:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-03-13T16:33:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1430&amp;p=6575#p6575</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1430&amp;p=6575#p6575"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • [Resuelto] PySFML no me compila en Parabola]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1430&amp;p=6575#p6575"><![CDATA[
Hola! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />les traigo una calamidad que se remonta al subforo de python de la libreria SFML. sucede que SFML para python no me compila!! seria casi redundante poner aqui los mensajes de error. Creo que lo mejor es que lean lo que lleva el tema en <!-- m --><a class="postlink" href="http://www.sfml-dev.org/forum/viewtopic.php?p=48027">http://www.sfml-dev.org/forum/viewtopic.php?p=48027</a><!-- m --><br /><br />uname -a<br /><dl class="codebox"><dt>Code: </dt><dd><code>Linux Abril 3.2.9-2-LIBRE #1 SMP PREEMPT Sat Mar 3 06:25:35 UTC 2012 x86_64 Intel(R) Core(TM) i3 CPU M 330 @ 2.13GHz GenuineIntel GNU/Linux</code></dd></dl><br /><br />cat /etc/parabola-release <br /><dl class="codebox"><dt>Code: </dt><dd><code>Parabola GNU/Linux-libre release</code></dd></dl><br /><br />Cualquier ayudita para solucionar semejante tortón, se aprecia de corazón! &lt;3<br />saludos!<br /><br /><span style="font-weight: bold">Edito:</span><br />Aquí esta la solución para distribuciones como Parabola GNU/Linux! <!-- m --><a class="postlink" href="https://aur.archlinux.org/packages.php?ID=62032">https://aur.archlinux.org/packages.php?ID=62032</a><!-- m --> yo mismo la termine haciendo xd<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Mar 13, 2012 4:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[madmonkey360]]></name></author>
<updated>2012-02-27T17:20:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6558#p6558</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6558#p6558"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Como se compila panda3D?]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6558#p6558"><![CDATA[
A vale gracias, pero aun asi me gustaria saber como se complia la version estable de panda 3D, mas que nada por saber que es lo que hacia mal o no consegui entender al traducir los textos para compilarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2550">madmonkey360</a> — Lun Feb 27, 2012 5:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Aborgna]]></name></author>
<updated>2012-02-26T22:54:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6557#p6557</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6557#p6557"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Como se compila panda3D?]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6557#p6557"><![CDATA[
No es necesario compilarlo para usarlo en Ubuntu 11.10, existen paquetes .deb pero el tema es que no para la version estable 1.7.2, sino que para la inestable 1.8.0.<br />Fijate <a href="http://www.panda3d.org/download.php?platform=ubuntu&amp;version=1.8.0&amp;sdk" class="postlink">acá</a> los paquetes &quot;panda3d1.8_1.8.0~oneiric&quot;.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2440">Aborgna</a> — Dom Feb 26, 2012 10:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[madmonkey360]]></name></author>
<updated>2012-02-26T21:52:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6556#p6556</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6556#p6556"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Como se compila panda3D?]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1423&amp;p=6556#p6556"><![CDATA[
Buenas queria preguntar si alguien me puede ayudar a compilar panda3D para la ultima version de ubuntu 11.10, es que no entiendo  ingles y con el traductor tampoco entiendo bien ninguno de los dos archivos de texto que trae dentro explicandote como hacerlo de dos formas distintas.<br /><br />Si alguien tiene tiempo para explicarme el proceso para compilarlo e istalarlor por favor que me ayude si no le es mucha molestia.<br /><br />Gracias por tomaros tiempo para leeros mi pregunta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2550">madmonkey360</a> — Dom Feb 26, 2012 9:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2012-02-11T20:18:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6514#p6514</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6514#p6514"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Instalar SDL error]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1349&amp;p=6514#p6514"><![CDATA[
hola (denuevo se que el tema es viejo pero respondo por si alguien tiene el problema y mi solucion lo ayuda)...<br />a mi tambien me dio ese problema... no se que distro usas pero seguro es alguna basada en debian, o alguna que esta basada en otra que se baso en debian...<br /><br />lo que hice para solucionarlo fue instalarlo de mis repos, si usas una distro debian los tenes como:<br />libsdl&lt;vercion&gt;debian<br />libsdl-mixer&lt;vercion&gt;<br />libsdl-image&lt;vercion&gt;<br /><br />pero con eso no me andaban algunas cosas... entonces depues baje los source y los hice paquetes DEB y actualice esos mismos... <br />como los haces?<br />es facil;<br />1- bajate el source... <br /><br />2- necesitas tener (si no los tenes instalalos):<br />autoconf<br />make<br />fakeroot<br />checkinstall<br /><br />y devscripts (por las dudas, contiene varias cosas utiles)<br />-- ANTES QUE NADA; su -c &quot;&lt;codigo&gt;&quot; es casi igual a; sudo &lt;codigo&gt;<br /><br />$su -c &quot;aptget install autoconf make fakeroot checkinstall devscripts&quot;<br /><br />3- descomprimi el source en una carpeta<br />3- terminal en la carpeta donde descomprimiste el source y pone:<br /><br />$ http://losersjuegos.com.ar/foro/configure &amp;&amp; make <br /><br />-- espera que termine (tarda un ratito segun que tan grande sea el source<br />y despues pone:<br /><br />$ su -c &quot;checkinstall&quot;<br /><br />-- te va a pedir una descripcion da enter enter enter... y listo te va a instalar el paquete nuevo... (no deberias tener problemas de dependendencia dado que fue empaquetado con las especificaciones y librerias de tu sistema)...<br /><br />eso es todo, despues proba compilar algun ejemplo...<br />es mas facil con make siempre...<br />saludos!<br /><br />$ su -c<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Sab Feb 11, 2012 8:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-01-10T19:01:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=6392#p6392</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=6392#p6392"/>
<title type="html"><![CDATA[Instalación de bibliotecas y herramientas • Re: Desarrollar aplicaciones sobre GNU/Linux]]></title>

<category term="Instalación de bibliotecas y herramientas" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=7" label="Instalación de bibliotecas y herramientas"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1275&amp;p=6392#p6392"><![CDATA[
si usaras Parabola, solo tendrías que hacer <span style="font-weight: bold">pacman -Ql <span style="font-style: italic">paquete</span></span> para saber la ubicación de cada archivo instalado por el paquete <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge@Abril:~$ pacman -Ql django | head -n30<br />django /etc/<br />django /etc/bash_completion.d/<br />django /etc/bash_completion.d/django<br />django /usr/<br />django /usr/bin/<br />django /usr/bin/django-admin.py<br />django /usr/lib/<br />django /usr/lib/python2.7/<br />django /usr/lib/python2.7/site-packages/<br />django /usr/lib/python2.7/site-packages/Django-1.3.1-py2.7.egg-info<br />django /usr/lib/python2.7/site-packages/django/<br />django /usr/lib/python2.7/site-packages/django/__init__.py<br />django /usr/lib/python2.7/site-packages/django/__init__.pyc<br />django /usr/lib/python2.7/site-packages/django/__init__.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/<br />django /usr/lib/python2.7/site-packages/django/bin/__init__.py<br />django /usr/lib/python2.7/site-packages/django/bin/__init__.pyc<br />django /usr/lib/python2.7/site-packages/django/bin/__init__.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/daily_cleanup.py<br />django /usr/lib/python2.7/site-packages/django/bin/daily_cleanup.pyc<br />django /usr/lib/python2.7/site-packages/django/bin/daily_cleanup.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/django-admin.py<br />django /usr/lib/python2.7/site-packages/django/bin/django-admin.pyc<br />django /usr/lib/python2.7/site-packages/django/bin/django-admin.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/__init__.py<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/__init__.pyc<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/__init__.pyo<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/gather_profile_stats.py<br />django /usr/lib/python2.7/site-packages/django/bin/profiling/gather_profile_stats.pyc<br />jorge@Abril:~$ <br /></code></dd></dl><br /><br />Pero bueno, no sé porque tanta gente usa APT-GET, creo que incluso se puede usar PACMAN en sistemas basados en Debian GNU/Linux (de esa familia recomiendo <a href="http://trisquel.info/es" class="postlink">Trisquel</a> porque respeta tu libertad!).<br /><br />saludos! :p<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Ene 10, 2012 7:01 pm</p><hr />
]]></content>
</entry>
</feed>