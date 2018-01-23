<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1115" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-27T22:35:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1115</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-04-27T22:35:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1115&amp;p=5459#p5459</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1115&amp;p=5459#p5459"/>
<title type="html"><![CDATA[Re: Biblioteca para reproducir vídeo en SFML]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1115&amp;p=5459#p5459"><![CDATA[
buenas rafa,<br /><br />el proyecto del que hablas parece usar algo que está pegando fuerte últimamente: <a href="http://www.cmake.org/" class="postlink">CMAKE</a>. Es un metalenguaje que te permite crear proyectos para varios Compiladores e IDE<br /><br />si no te aclaras con los tutoriales que hay por la página, vuelve e intentaremos ayudarte en lo que sea.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Abr 27, 2011 10:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RafaG]]></name></author>
<updated>2011-04-17T11:52:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1115&amp;p=5412#p5412</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1115&amp;p=5412#p5412"/>
<title type="html"><![CDATA[Biblioteca para reproducir vídeo en SFML]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1115&amp;p=5412#p5412"><![CDATA[
Hola, hace poco encontré una biblioteca para reproducir vídeo con SFML, el problema es que no se como utilizarla (en Visual C++ 2010), es decir, me imagino que tendré que incluir el archivo de encabezado (Movie.h) pero no se que más hacer con el resto de los archivos.<br /><br />Estos son algunos de los archivos que hay:<br /><dl class="codebox"><dt>Code: </dt><dd><code>sfeVideo<br />     deps <br />          headers<br />               libavcodec, libavdecive, etc.<br />          macosx_binaries<br />          windows_binaries<br />               muchos archivos con extensión .dll y .dll.a<br /><br />     include<br />          Movie.h<br />     rsrc<br />          Info.plist<br />     sample<br />          main.cpp<br />     scr<br />          Movie.cpp<br />          Movie_audio.cpp<br />          Movie_audio.h<br />          Movie_video.cpp<br />          Movie_video.h<br />          utils.cpp<br />          utils.h<br />      CMakeLists<br /></code></dd></dl><br /><br />Cuando compilo (incluyendo el archivo Movie.h) me da este error:<br /><dl class="codebox"><dt>Code: </dt><dd><code>1&gt;------ Operación Generar iniciada: proyecto: SFML Video, configuración: Debug Win32 ------<br />1&gt;  main.cpp<br />1&gt;main.obj : error LNK2019: símbolo externo &quot;public: virtual __thiscall sfe::Movie::~Movie(void)&quot; (??1Movie@sfe@@UAE@XZ) sin resolver al que se hace referencia en la función _main<br />1&gt;main.obj : error LNK2019: símbolo externo &quot;public: __thiscall sfe::Movie::Movie(void)&quot; (??0Movie@sfe@@QAE@XZ) sin resolver al que se hace referencia en la función _main<br />1&gt;c:\users\rafa\documents\visual studio 2010\Projects\SFML Video\Debug\SFML Video.exe : fatal error LNK1120: 2 externos sin resolver<br />========== Generar: 0 correctos, 1 incorrectos, 0 actualizados, 0 omitidos ==========<br /></code></dd></dl><br /><br /><br />¿Qué debo hacer para que funcione?<br />A quien le interese descargarla, aquí está el blog del autor: <a href="http://ceylow.wordpress.com/2010/11/08/playing-movies-with-sfml-and-ffmpeg/" class="postlink">http://ceylow.wordpress.com/2010/11/08/playing-movies-with-sfml-and-ffmpeg/</a><br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2204">RafaG</a> — Dom Abr 17, 2011 11:52 am</p><hr />
]]></content>
</entry>
</feed>