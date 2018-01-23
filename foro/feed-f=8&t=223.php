<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=223" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-01-14T00:44:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=223</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-01-14T00:44:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=223&amp;p=828#p828</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=223&amp;p=828#p828"/>
<title type="html"><![CDATA[Problemas de compilacion (c++ con gcc y kate)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=223&amp;p=828#p828"><![CDATA[
Espero te sirva: <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?p=827#827">http://www.losersjuegos.com.ar/foro/vie ... ?p=827#827</a><!-- m --><br /><br />Perdón por no contestar primero en este que estaba antes, pero vi el otro antes <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Ene 14, 2008 12:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kittie4man]]></name></author>
<updated>2008-01-09T15:01:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=223&amp;p=813#p813</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=223&amp;p=813#p813"/>
<title type="html"><![CDATA[Problemas de compilacion (c++ con gcc y kate)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=223&amp;p=813#p813"><![CDATA[
Hola a todos!<br /><br />Les comento mi problema.<br />Tengo un proyecto con archivos .cpp  (por costumbre) y .h.<br />El problema esta en que cuando compilo me genera errores por la importación de las otras fuentes.<br />Por ej.:<br />En el &quot;main.cpp&quot; necesito importar archivos como el &quot;mouse.h&quot;, &quot;engine.h&quot;, etc.<br />Ahora bien, si lo hago desde el .cpp, importando los cpp (por ej. engine.cpp) me tira un error de que no encuentra el tipo, como si no reconociera el tipo de dato (objeto cEngine).<br />Si lo hago importando los .h me dice que no encuentra el método al cual estoy llamando.<br />Calculo que debe pasar por un tema de compilación mas que nada, pero soy relativamente nuevo en linux, y mas nuevo en gcc.<br />Cuando compilo lo hago así:<br />    g++ -o ejecutable main.cpp -lSDL -lSDL_ttf -lSDL_image<br /><br />Solo compilo el main.cpp y nada mas.<br />Esto andaba bien, hasta que agregue unas cabeceras. Estas ultimas que agregue las habia probado (y andaban) en otro proyecto aparte (tipo de prueba).<br /><br />Si alguien entendió mi problema y puede darme una respuesta se lo agradecería mucho.<br /><br />Salu2<br />JuanPablo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1866">kittie4man</a> — Mié Ene 09, 2008 3:01 pm</p><hr />
]]></content>
</entry>
</feed>