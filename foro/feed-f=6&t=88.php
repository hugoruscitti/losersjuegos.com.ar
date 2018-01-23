<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=88" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-06-04T04:58:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=88</id>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-06-04T04:58:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=336#p336</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=336#p336"/>
<title type="html"><![CDATA[Novatisimo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=336#p336"><![CDATA[
Desde aquí puedes descargar los archivos necesarios de la API SDL_gfx, lista para usar con el compilador MinGW:<br /><br /><!-- m --><a class="postlink" href="http://www.blogrcaf.com/utilidades_programacion/sdl/SDL_gfx-2.0.16.zip">http://www.blogrcaf.com/utilidades_prog ... 2.0.16.zip</a><!-- m --><br /><br />Y por último acá puedes ver un tutorial que explica como instalar el compilador MinGW y la IDE Code::Blocks.<br /><br /><!-- m --><a class="postlink" href="http://www.blogrcaf.com/2007/03/21/preparando-el-entorno-para-desarrollar-videojuegos/">http://www.blogrcaf.com/2007/03/21/prep ... deojuegos/</a><!-- m --><br /><br />y la creación de un proyecto:<br /><br /><!-- m --><a class="postlink" href="http://www.blogrcaf.com/2007/05/21/creacion-de-un-proyecto-con-codeblocks/">http://www.blogrcaf.com/2007/05/21/crea ... odeblocks/</a><!-- m --><br /><br />Espero que te sirvan de ayuda.<br /><br />S2.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Lun Jun 04, 2007 4:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2007-06-04T01:49:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=335#p335</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=335#p335"/>
<title type="html"><![CDATA[Que novatada...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=335#p335"><![CDATA[
Perdonen la pregunta de novato <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> ... Pero, hace poco me encontre con esta web, y asi conocí SDL_gfx, Ahora mi problema es como lo instalo en el Devcpp o de donde lo descargo algo así como un paquete o algo parecido:?:  ...<br />de antemano gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Lun Jun 04, 2007 1:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-05-17T04:05:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=308#p308</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=308#p308"/>
<title type="html"><![CDATA[Novatisimo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=308#p308"><![CDATA[
El parámetro para el linker es:<br /><br /><span style="font-weight: bold">-lSDLmain</span><br /><br />Como mínimo deberían existir las tres siguientes opciones (el orden es importante):<br /><br /><span style="font-weight: bold">-lmingw32<br />-lSDLmain<br />-lSDL</span><br /><br />(Ojo que la primera letra es una &quot;ele&quot; no &quot;i&quot;)<br /><br />S2!<br /><br /><span style="font-weight: bold">PD:</span> Dev-C++ es solo la IDE, el compilador es GCC.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Jue May 17, 2007 4:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kilroy]]></name></author>
<updated>2007-05-16T23:52:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=307#p307</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=307#p307"/>
<title type="html"><![CDATA[Novatisimo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=88&amp;p=307#p307"><![CDATA[
Que tal.<br /><br />Soy nuevo en eso de SDL y nunca habia utilizado el DEV -C++ como compilador, se que esta prgunta ya la han de haber hecho anteriormente pero la verdad que ya me harté y no se como solucionarla. Resulta que ya seguí al pie de la letra las instrucciones para instalar la libreri SDL per a la hora de compilar el compilador me devuelve un error que dice &quot;cannot find -ISDL main&quot;<br />&quot;Id returnen 1 exit status&quot; ya hice todo la como dice en el tutorial de esta comunidad pero no he logrado que funcione. Espero me pueda ayudar alguien. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1447">kilroy</a> — Mié May 16, 2007 11:52 pm</p><hr />
]]></content>
</entry>
</feed>