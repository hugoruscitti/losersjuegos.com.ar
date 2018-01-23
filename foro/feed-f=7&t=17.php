<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=17" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-12-16T02:25:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=17</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2007-12-16T02:25:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=747#p747</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=747#p747"/>
<title type="html"><![CDATA[Problemas con Code::blocks]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=747#p747"><![CDATA[
Para que puedas hacer funcionar el Ogre con code blocks necesitas NO usar el Code::blocks 1.2 o menores....<br />Necesariamente tienes que usar el CodeBlocks Nightly... y lo puedes descargar de <a href="http://forums.codeblocks.org/index.php?board=20.0" class="postlink">http://forums.codeblocks.org/index.php?board=20.0</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Dom Dic 16, 2007 2:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eNano]]></name></author>
<updated>2007-12-14T22:21:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=745#p745</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=745#p745"/>
<title type="html"><![CDATA[Trabajar con CODE::BLOCKS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=745#p745"><![CDATA[
Por el amor de Dios no entiendo NAAADAAA!!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> <br /><br />Cómo #@%$ hago para que Ogre ande con CodeBlocks?<br />No se absolutamente nada de C++, solamente de programación amateur (blit3d, vb, flash, maxscript)<br />Seguí exactamente los pasos de la página de Ogre e instalé todo según los links, pero no tengo idea si CodeBlocks sabe dónde instalé Ogre.<br />Cuando abro un archivo de ejemplo y hago click derecho sobre algún un #include, por ejemplo el de ogre.h, y le digo que abra ese archivo me responde que no existe. Obviamente cuando quiero ejecutar el programa me llena la pantalla de renglones rojos diciendo que no tiene la mas remota idea de qué le hablo.<br />Cómo hago para configurar las rutas de los recursos de Ogre para poder hacer un programa desde CodeBlocks?<br />Mil gracias por cualquier respuesta. (por mas tonta que parezca, acuerdense que no se nada!)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1860">eNano</a> — Vie Dic 14, 2007 10:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2006-10-03T21:26:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=62#p62</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=62#p62"/>
<title type="html"><![CDATA[Re: Trabajar con CODE::BLOCKS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=62#p62"><![CDATA[
<blockquote><div><cite>chapulin escribió:</cite><br />holas soy nuevo en la programacion de videojuegos con SDL y estuve leyendo el articulo de RCAF sobre creacion de videojuegos ( muy bueno por cierto , ademas me dio animos para iniciar/continuar mi  camino de programador de videojuegos ... gracias) y quisiera bajarme  el code::blocks, pero quisiera saber si este trae ya las librerias que dice al crear proyecto dentro de el, por ejemplo sale: <br /><br />crear proyectos :<br /><br /> OPEN_GL<br /> OGRE_3D<br /> IRRILITCH<br /> SDL<br /><br />entonces quisiera saber si trae estas librerias incorporadas para crear proyectos con el...<br /><br />de antemano gracias y siguan con articulos tan buenos...<br />saludos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /></div></blockquote><br /><br />Eso de crear proyectos para diferentes bibliotecas y/o engines, son solo plantillas, que muestran el código básico para trabajar con una de esas herramientas, es decir, son el &quot;Hola Mundo&quot; de cada una de las bibliotecas.<br /><br />Code::Blocks es solo la IDE (Entorno de Desarrollo Integrado), aunque hay una pack que trae el compilador Mingw32,  el cual viene con las librerías estandard de C/C++. <br /><br />Del listado que nombraste solo trae OpenGL.<br /><br />Para usar los Engines  Ogre 3D o  Irrlicht, necesitas instalarlo por tu cuenta, lo mismo para la biblioteca SDL. En todo caso todo esto se resume en copiar los .h (header files) a la carpeta include  y las librerias .a (para enlace estático) en la carpeta lib del compilador.<br /><br />Existen unas versiones Nightly Builds de Code::Blocks (<a href="http://forums.codeblocks.org/index.php?board=20.0" class="postlink">http://forums.codeblocks.org/index.php?board=20.0</a>), que salen casi diaramente, tienen muchas mejores en la IDE. <br /><br />Recomiendo usarlas =)<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Mar Oct 03, 2006 9:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[chapulin]]></name></author>
<updated>2006-10-03T19:16:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=58#p58</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=58#p58"/>
<title type="html"><![CDATA[Trabajar con CODE::BLOCKS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=17&amp;p=58#p58"><![CDATA[
holas soy nuevo en la programacion de videojuegos con SDL y estuve leyendo el articulo de RCAF sobre creacion de videojuegos ( muy bueno por cierto , ademas me dio animos para iniciar/continuar mi  camino de programador de videojuegos ... gracias) y quisiera bajarme  el code::blocks, pero quisiera saber si este trae ya las librerias que dice al crear proyecto dentro de el, por ejemplo sale: <br /><br />crear proyectos :<br /><br /> OPEN_GL<br /> OGRE_3D<br /> IRRILITCH<br /> SDL<br /><br />entonces quisiera saber si trae estas librerias incorporadas para crear proyectos con el...<br /><br />de antemano gracias y siguan con articulos tan buenos...<br />saludos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=36">chapulin</a> — Mar Oct 03, 2006 7:16 pm</p><hr />
]]></content>
</entry>
</feed>