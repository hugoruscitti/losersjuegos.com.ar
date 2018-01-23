<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=217" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-01-10T21:36:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=217</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2008-01-10T21:36:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=817#p817</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=817#p817"/>
<title type="html"><![CDATA[SDL_gfx en Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=817#p817"><![CDATA[
Siquieres puedes descargarlas de esta web:<br /><a href="http://www.devpaks.org/" class="postlink">http://www.devpaks.org/</a><br />ahi estan los paquetes para devcpp y solo necesitas instalarlos y no olvides incluir al compilador los linker necesarios -lmingw32 -lSDLmain -lSDL -lSDL_image -lSDL_ttf -lSDL_gfx<br />y con eso deve funcionar...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Ene 10, 2008 9:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eldesiempre]]></name></author>
<updated>2007-12-28T13:29:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=792#p792</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=792#p792"/>
<title type="html"><![CDATA[SDL_gfx en Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=792#p792"><![CDATA[
Holaa !!<br />Gracias por tu respuesta pero he hecho lo que me has puesto.He descargado las librerias y he copiado las librerias y lo que me dijiste en el archivo del compilador pero aún así creo que sigue sin reconocerlas porque he intentado compilar el ejemplo de escalado y rotación de la zona de ejemplos y sigue dando errores con SDL_rotozoom.h y SDL/SDL.h por lo que creo que no he instalado bien las librerias.<br />Este ejemplo me resulta muy útil para poder hacer la rotación y reflexión y por ello me gustaría que me ayudaseis.<br /><br />Gracias por las molestias !!!!<br /><br />1 SALUDOOOO !!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1865">eldesiempre</a> — Vie Dic 28, 2007 1:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-12-27T18:05:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=791#p791</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=791#p791"/>
<title type="html"><![CDATA[SDL_gfx en Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=791#p791"><![CDATA[
Hola:<br /><br />Con SDL_gfx el asunto es un poco diferente, ya que tu mismo debes compilar el código para así generer la biblioteca .a, que debes enlazar a tu proyecto. Luego debes copiar los archivos de headers (*.h) a SDL, en la carpeta include de tu compilador.<br /><br />Hace bastante tiempo compilé esta biblioteca, y la puedes descargar lista para usar desde aquí:<br /><br /><!-- m --><a class="postlink" href="http://www.blogrcaf.com/utilidades_programacion/sdl/SDL_gfx-2.0.16.zip">http://www.blogrcaf.com/utilidades_prog ... 2.0.16.zip</a><!-- m --><br /><br />Solo debes copiar el contenido de lib en la carpeta lib del compilador, lo mismo con include. <br /><br />El resto de bibliotecas SDL y packs puedes encontrarlos acá:<br /><br /><!-- m --><a class="postlink" href="http://blogrcaf.com/wiki/doku.php?id=recursos:biblioteca_sdl">http://blogrcaf.com/wiki/doku.php?id=re ... ioteca_sdl</a><!-- m --><br /><br />Todos son compatibles con el compilar MinGW de Windows.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Jue Dic 27, 2007 6:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eldesiempre]]></name></author>
<updated>2007-12-27T11:23:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=789#p789</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=789#p789"/>
<title type="html"><![CDATA[SDL_gfx en Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=217&amp;p=789#p789"><![CDATA[
Hola a todos !!!<br />Gracias al tutorial de ésta web he podido instalar las librerias SDL básica, image y mixer para utilizarlas con el Dev-C++ pero necesitaría instalar la SDL_gfx debido a que he leído que con ella se puede dibujar polígonos para hacer posterirormente su reflexión.<br />La he intentado instalar de la misma forma que las anteriores pero no hay manera de que me la reconozca.Si alguien puede explicarme como hacerlo lo agradecería mucho.<br />La que yo tengo la descargué de ésta web pero no se si servirá.<br /><a href="http://www.ferzkopp.net/joomla/content/view/19/14/" class="postlink">http://www.ferzkopp.net/joomla/content/view/19/14/</a><br /><br />GRACIAS POR TODO !!!<br />FELICES FIESTAS !!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1865">eldesiempre</a> — Jue Dic 27, 2007 11:23 am</p><hr />
]]></content>
</entry>
</feed>