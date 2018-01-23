<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1171" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-13T18:03:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1171</id>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-06-13T18:03:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5652#p5652</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5652#p5652"/>
<title type="html"><![CDATA[Re: [Resuelto]Fallo de ejecución en Windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5652#p5652"><![CDATA[
Resuelto. Cosa que he aprendido: sigue al pie de la letra, dentro de lo razonable, los tutoriales para enlazar bibliotecas. Hice caso al tutorial de SFML <!-- m --><a class="postlink" href="http://www.sfml-dev.org/tutorials/1.6/start-cb.php">http://www.sfml-dev.org/tutorials/1.6/start-cb.php</a><!-- m -->. Lo que estaba haciendo es enlazar las bibliotecas directamente de SFML porque creí que funcionaría igual.<br /><br />Si me permitís, pongo un vídeo del juego por el que he estado llorando porque no ejecutaba en Windows<br /><br /><a href="http://www.youtube.com/watch?v=7bYPyi0jrP8" class="postlink">http://www.youtube.com/watch?v=7bYPyi0jrP8</a><br /><br />P.D.: No sé como funciona la etiqueta &quot;youtube&quot;.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Lun Jun 13, 2011 6:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-06-13T12:36:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5651#p5651</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5651#p5651"/>
<title type="html"><![CDATA[Re: Fallo de ejecución en Windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5651#p5651"><![CDATA[
Bien hice cambios como poner la principales bibliotecas en los archivos include y lib de MinGW, y compilar el motor junto con el proyecto. Todo construido, todo sin quejas... hasta la hora de la ejecución.<br />Perdonad por la respuesta anterior acerca del número de retorno. El número de retorno siempre es -1073741819 (0xC0000005). Buscando por google acerca de este número de error no he encontrado de momento nada parecido.<br /><br />Siguiendo tirando del hilo (buscando por el valor hexadecimal) resulta ser una violación de acceso, ¿de qué? :S. Si en Linux todo andaba estupendamente y no he escrito código raro.<br /><br />Última noticia (Juanxo). Probé lo de hacer un main vacío, comentando todo el código. Sale el mismo error (0xC0000005).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Lun Jun 13, 2011 12:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-06-09T19:53:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5634#p5634</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5634#p5634"/>
<title type="html"><![CDATA[Re: Fallo de ejecución en Windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5634#p5634"><![CDATA[
Gracias Juanxo por molestarte. El número de error negativo siempre es alto, pero varía.<br />Voy a empezar como está estructurado el proyecto, de forma simple:<br /><br />/sources<br />/includes<br />/bangex/SFML<br />/bangex/Lua5.1<br />/bangex/chipmunk<br />/bangex/libphysfs<br /><br />Ok, en la carpeta base de bangex tengo la biblioteca dinámica del motor enlazado a cada una de las bibliotecas contenidas en las otras carpetas (con archivos de cabeceras y código fuente). El caso es que también el proyecto raíz necesita de algunas de esas bibliotecas dinámicas, porque de lo contrario se queja con funciones no definidas. A ver si me pueden dar alguna pista. Mientras tanto de momento ando probando individualmente cada una de las bibliotecas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Jue Jun 09, 2011 7:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-06-08T16:18:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5629#p5629</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5629#p5629"/>
<title type="html"><![CDATA[Re: Fallo de ejecución en Windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5629#p5629"><![CDATA[
pues sin ver nada es dificil decirte...<br />has probado a buscar el código de error en internet?<br /><br />prueba a hacer un main vacío, a ver si te sigue tirando el error<br /><br />información, información...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Jun 08, 2011 4:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-06-07T17:16:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5625#p5625</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5625#p5625"/>
<title type="html"><![CDATA[[Resuelto]Fallo de ejecución en Windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1171&amp;p=5625#p5625"><![CDATA[
Buenas, a ver si me pueden ayudar. El caso es que andaba haciendo un proyecto enteramente en Linux usando chipmunk physics, lua, libphysfs y SFML. Con estas 4 bibliotecas me monté un motor <a href="http://code.google.com/p/bangex/" class="postlink">http://code.google.com/p/bangex/</a>, que fué contruido sobre la marcha y falta documentarlo. El caso es que hay bibliotecas que lo usa el propio juego aparte del motor.<br />Al grano. El caso es que a la hora de construir las bibliotecas, el motor y ya por último, el juego, este falla sin más dando un número de retorno negativo alto que varía. El enlace a las bibliotecas (dinámicas) están hechas de forma relativa con el ejecutable, y en el caso del motor, también. Así que no sé que estoy haciendo mal. Si alguien me puede dar alguna pista, consejo o algo, lo agradecería mucho. El juego ejecuta bien en Linux.<br />Uso Codeblocks 10.05 con la última versión de MinGW, 20110530 (&quot;estable&quot;). Bibliotecas: SFML 1.6, lua5.1, chipmunk physiscs 5.3.4 y libphysfs 2.0.2. SO: Windows XP.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Mar Jun 07, 2011 5:16 pm</p><hr />
]]></content>
</entry>
</feed>