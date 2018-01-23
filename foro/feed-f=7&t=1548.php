<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1548" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-08T01:25:28+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1548</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-09-08T01:25:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7059#p7059</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7059#p7059"/>
<title type="html"><![CDATA[Re: Compilacion Cruzada en Windows a Linux con Cygwin]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7059#p7059"><![CDATA[
No es por nada, pero creo que te seria mucho mas simple instalar una distribución Linux, o hacer visualización a eso...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Sep 08, 2012 1:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jaisiero]]></name></author>
<updated>2012-09-07T17:55:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7057#p7057</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7057#p7057"/>
<title type="html"><![CDATA[Compilacion Cruzada en Windows a Linux con Cygwin]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1548&amp;p=7057#p7057"><![CDATA[
Hola de nuevo, <br />volviendo con el tema de siempre ahora estoy intentando realizar un cross-compiling desde <span style="font-weight: bold">Windows</span> a <span style="font-weight: bold">Linux</span>. Me he descargado el <span style="font-weight: bold">Setup de Cygwin</span> de su página y varios paquetes ensenciales como <span style="font-weight: bold">make, gcc, gcc-mingw, binutils, ... </span><br /><br /><br />Pero no consigo encontrar un compilador configurado para hacerlo de forma cruzada. Debería ser algo así como <span style="font-weight: bold">i386-linux-gcc</span> y <span style="font-weight: bold">x86_64-linux-gcc</span>. <br /><br />metamod-p.sourceforge.net/cross-compiling.on.windows.for.linux.html <br /><br />En un enlace de Sourceforge existe un compilador en un fichero comprimido <span style="font-weight: bold">metamod-p-1.19p32</span> que intento instalar mediante <span style="font-weight: bold">http://losersjuegos.com.ar/foro/configure</span>, <span style="font-weight: bold">make install</span> en la carpeta raiz de <span style="font-weight: bold">Cygwin</span> pero me da error: <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>for i in metamod stub_plugin trace_plugin wdmisc_plugin; do \ <br />        make -C $i install || exit; \ <br />done <br />/bin/sh: gcc-linux: no se encontró la orden <br />/bin/sh: gcc-linux: no se encontró la orden <br />make&#91;1&#93;: se ingresa al directorio `/metamod-p-1.19p32/metamod' <br />gcc-linux -ggdb3 -Wall -Wno-unknown-pragmas   -DOPT_TYPE=&quot;\&quot;debugging\&quot;&quot; -D__METAMOD_BUILD__  -fPIC -I. -I.http://losersjuegos.com.ar/foro/metamod -I.http://losersjuegos.com.ar/foro/hlsdk/engine -I.http://losersjuegos.com.ar/foro/hlsdk/common -I.http://losersjuegos.com.ar/foro/hlsdk/pm_shared -I.http://losersjuegos.com.ar/foro/hlsdk/dlls -I.http://losersjuegos.com.ar/foro/hlsdk -o debug.linux_i386/api_hook.o -c api_hook.cpp <br />/bin/sh: gcc-linux: no se encontró la orden <br />Makefile:264: recipe for target `debug.linux_i386/api_hook.o' failed <br />make&#91;1&#93;: *** &#91;debug.linux_i386/api_hook.o&#93; Error 127 <br />make&#91;1&#93;: se sale del directorio `/metamod-p-1.19p32/metamod' <br />Makefile:16: recipe for target `install' failed <br />make: *** &#91;install&#93; Error 2 <br /></code></dd></dl><br /><br />Agradezco toda ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2651">Jaisiero</a> — Vie Sep 07, 2012 5:55 pm</p><hr />
]]></content>
</entry>
</feed>