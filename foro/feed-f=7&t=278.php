<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=278" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-09T15:24:15+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=278</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-09T15:24:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1103#p1103</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1103#p1103"/>
<title type="html"><![CDATA[Problemas con SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1103#p1103"><![CDATA[
Geo, gracias por tu respuesta, ya estaba empezando a pensar si nadie iva a responder al ver aumentar las lecturas sin ninguna respuesta; y lo de que lo pusiera dos veces se debio a que no estaba del todo seguro de en que apartado poner la pregunta y lo de borrar una pregunta no lo controlaba del todo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mié Abr 09, 2008 3:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-04-09T13:08:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1102#p1102</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1102#p1102"/>
<title type="html"><![CDATA[Problemas con SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1102#p1102"><![CDATA[
Por favor procuren abrir un tema sólo una vez, este tema está repetido en:<br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=280">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=280</a><!-- m --><br />(donde ya respondí <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Abr 09, 2008 1:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-05T09:13:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1083#p1083</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1083#p1083"/>
<title type="html"><![CDATA[Problemas con SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=278&amp;p=1083#p1083"><![CDATA[
Hola, he instalado en mi compilador (dev-c++) la libreria SDL_ttf, descargandola del sitio oficial, poniendo en el directorio lib del compilador los archivos (en el caso de esta libreria el archivo) contenido en la carpeta lib de la libreria, el include dentro de include/sdl del compilador, y poniendo en los parametros del linker -ISDL_ttf, mientras compile sin usar la libreria (estando el parametro del linker e incluido de .h, &quot;SDL/SDL_ttf.h&quot;) no me da error, pero nada mas intentar inicializar SDL_ttf me da un error como que no estan declaradas las funciones, pero sinembargo no me da ningun error si defino un puntero de tipo fuente &quot;TTF_Font *fuente;&quot; (sin las comillas, claro).<br /><br />¿Como puedo solucionar esto? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br /><br />Los errores que me da son:<br /><br />  [Linker error] undefined reference to `TTF_Quit' <br />  [Linker error] undefined reference to `TTF_Init' <br />  ld returned 1 exit status <br /> C:\Documents and Settings\admin\Mis documentos\3EL\Makefile.win [Build Error]  [3EL.exe] Error 1 <br /><br /><br />Y:<br /><br />Compilador: Default compiler<br />Building Makefile: &quot;C:\Documents and Settings\admin\Mis documentos\3EL\Makefile.win&quot;<br />Ejecutando  make...<br />make.exe -f &quot;C:\Documents and Settings\admin\Mis documentos\3EL\Makefile.win&quot; all<br />gcc.exe -c 3EL.c -o 3EL.o -I&quot;C:/Dev-Cpp/include&quot;    -mwindows<br /><br />gcc.exe 3EL.o 3EL_private.res -o &quot;3EL.exe&quot; -L&quot;C:/Dev-Cpp/lib&quot; -lmingw32 -lSDLmain -lSDL -lSDL_image -lSDL_mixer -ISDL_ttf -ISDL_net  -mwindows <br /><br />3EL.o(.text+0xb8):3EL.c: undefined reference to `TTF_Quit'<br />3EL.o(.text+0xc2):3EL.c: undefined reference to `TTF_Init'<br />collect2: ld returned 1 exit status<br /><br />make.exe: *** [3EL.exe] Error 1<br /><br />Ejecución Terminada<br /><br /><br />¿Como puedo solucionar esto?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Abr 05, 2008 9:13 am</p><hr />
]]></content>
</entry>
</feed>