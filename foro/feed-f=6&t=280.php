<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=280" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-12T05:33:22+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=280</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-04-12T05:33:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1128#p1128</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1128#p1128"/>
<title type="html"><![CDATA[Problema usando SDL_ttf por primera vez.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1128#p1128"><![CDATA[
<blockquote><div><cite>lacabra25 escribió:</cite><br />Geo gracias, poniendo el las opciones del linker la direccion pude compilar sin que diera ningun error, y solo me queda una pequeña duda: ¿porque la libreria ttf no la encuentra si no se le pone la direccion y las demas como sdl y image o mixer las encuentra con solo poner -ISDL_image, -ISDLmain o -ISDL_mixer?<br /></div></blockquote><br />Primero, se necesita la ruta completa porque el enlazador no reconoció en qué directorio buscar el archivo SDL_ttf.lib<br />Segundo, el archivo SDL_ttf.lib que bajaste fué creado con Visual C++, en Linux (con el compilador GCC) normalmente dichos archivos se llaman libNOMBRELIBRERIA.a, y es con el parámetro -lNOMBRE_LIBRERIA que indicas que se debe enlazar la librería adecuada. Así, -lSDL_image indica que se debe enlazar con el archivo libSDL_image.a. Te comento lo de Linux porque Dev-C++ hace uso del compilador MinGW, que es un port del compilador GCC presente en todos los Linux (y en otros sistemas *nix).<br /><br />Otra opción, quizá más sencilla: renombra el archivo SDL_ttf.lib a libSDL_ttf.a y utiliza el parámetro -lSDL_ttf para enlazar con esta librería, yo también lo he hecho de esta forma, debe funcionar (si no ha habido algún cambio &quot;extraño&quot; en las versiones de los compiladores <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Abr 12, 2008 5:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-10T15:08:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1111#p1111</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1111#p1111"/>
<title type="html"><![CDATA[Problema usando SDL_ttf por primera vez.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1111#p1111"><![CDATA[
Geo gracias, poniendo el las opciones del linker la direccion pude compilar sin que diera ningun error, y solo me queda una pequeña duda: ¿porque la libreria ttf no la encuentra si no se le pone la direccion y las demas como sdl y image o mixer las encuentra con solo poner -ISDL_image, -ISDLmain o -ISDL_mixer?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Abr 10, 2008 3:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-04-10T07:54:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1108#p1108</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1108#p1108"/>
<title type="html"><![CDATA[Problema usando SDL_ttf por primera vez.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1108#p1108"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br />para mayor seguridad, agrega el archivo SDL_ttf.lib buscándolo con la opción &quot;Agregar librería u objeto&quot; dentro de &quot;Opciones Adicionales de línea de comando:&quot; en &quot;Opciones de proyecto&quot;.<br /></div></blockquote><br />A mi me ha dado problemas al sólo poner SDL_ttf.lib, por alguna razón el enlazador falla si no se le indica la ruta completa, si agregas el archivo SDL_ttf.lib de esta forma, se indicará la ruta relativa http://losersjuegos.com.ar/foro/.http://losersjuegos.com.ar/foro/.http://losersjuegos.com.ar/foro/archivoslib/SDL_ttf.lib (o algo así), y el enlazador lo encontrará sin problemas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue Abr 10, 2008 7:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-09T16:05:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1104#p1104</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1104#p1104"/>
<title type="html"><![CDATA[Problema usando SDL_ttf por primera vez.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1104#p1104"><![CDATA[
Geo, probe a poner la extension .lib, pero no funciona, ¿hay otra solucion posible?, ¿cual es la causa de que no funcione, el error que da el compilador no es de no encontrar el archivo, pone undefineed, que puede causarlo?<br /><br />Errores:<br /><br />  [Linker error] undefined reference to `TTF_Quit' <br />  [Linker error] undefined reference to `TTF_Init' <br />  ld returned 1 exit status <br /> C:\Documents and Settings\admin\Mis documentos\3EL 0.0.0.0\Makefile.win [Build Error]  [3EL.exe] Error 1<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mié Abr 09, 2008 4:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-04-09T12:48:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1101#p1101</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1101#p1101"/>
<title type="html"><![CDATA[Problema usando SDL_ttf por primera vez.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1101#p1101"><![CDATA[
Tienes problemas al enlazar con SDL_ttf.<br /><br />Lo más probable es que tu archivo para enlazar se llame SDL_ttf.lib y no libSDL_ttf.a, así que, en los parámetros al enlazador (linker), debes sustituir <span style="font-weight: bold">-lSDL_ttf</span> por <span style="font-weight: bold">SDL_ttf.lib</span>, o, para mayor seguridad, agrega el archivo SDL_ttf.lib buscándolo con la opción &quot;Agregar librería u objeto&quot; dentro de &quot;Opciones Adicionales de línea de comando:&quot; en &quot;Opciones de proyecto&quot;.<br /><br />Suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Abr 09, 2008 12:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-07T19:05:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1092#p1092</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1092#p1092"/>
<title type="html"><![CDATA[Problema usando SDL_ttf por primera vez.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=280&amp;p=1092#p1092"><![CDATA[
Hola, he instalado en mi compilador (dev-c++) la libreria SDL_ttf, descargandola del sitio oficial, poniendo en el directorio lib del compilador los archivos (en el caso de esta libreria el archivo) contenido en la carpeta lib de la libreria, el include dentro de include/sdl del compilador, y poniendo en los parametros del linker -ISDL_ttf, mientras compile sin usar la libreria (estando el parametro del linker e incluido de .h, &quot;SDL/SDL_ttf.h&quot;) no me da error, pero nada mas intentar inicializar SDL_ttf me da un error como que no estan declaradas las funciones, pero sinembargo no me da ningun error si defino un puntero de tipo fuente &quot;TTF_Font *fuente;&quot; (sin las comillas, claro).<br /><br />¿Como puedo solucionar esto?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> , gracias de antemano por toda la ayuda posible, porque necesito dejar instalar SDL_ttf de una vez para poder escribir texto como puntuaciones y similares en mis juegos.<br /><br />Los errores que me da son:<br /><br />[Linker error] undefined reference to `TTF_Quit'<br />[Linker error] undefined reference to `TTF_Init'<br />ld returned 1 exit status<br />C:\Documents and Settings\admin\Mis documentos\3EL\Makefile.win [Build Error] [3EL.exe] Error 1<br /><br /><br />Y:<br /><br />Compilador: Default compiler<br />Building Makefile: &quot;C:\Documents and Settings\admin\Mis documentos\3EL\Makefile.win&quot;<br />Ejecutando make...<br />make.exe -f &quot;C:\Documents and Settings\admin\Mis documentos\3EL\Makefile.win&quot; all<br />gcc.exe -c 3EL.c -o 3EL.o -I&quot;C:/Dev-Cpp/include&quot; -mwindows<br /><br />gcc.exe 3EL.o 3EL_private.res -o &quot;3EL.exe&quot; -L&quot;C:/Dev-Cpp/lib&quot; -lmingw32 -lSDLmain -lSDL -lSDL_image -lSDL_mixer -ISDL_ttf -ISDL_net -mwindows<br /><br />3EL.o(.text+0xb8):3EL.c: undefined reference to `TTF_Quit'<br />3EL.o(.text+0xc2):3EL.c: undefined reference to `TTF_Init'<br />collect2: ld returned 1 exit status<br /><br />make.exe: *** [3EL.exe] Error 1<br /><br />Ejecución Terminada<br /><br /><br />¿Como puedo solucionar esto?, gracias de antemano por toda la ayuda posible, porque necesito dejar instalar SDL_ttf de una vez para poder escribir texto como puntuaciones y similares en mis juegos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Lun Abr 07, 2008 7:05 pm</p><hr />
]]></content>
</entry>
</feed>