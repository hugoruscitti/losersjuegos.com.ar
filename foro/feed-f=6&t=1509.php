<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1509" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-10T01:38:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1509</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-09-10T01:38:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=7067#p7067</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=7067#p7067"/>
<title type="html"><![CDATA[Re: Duda con SDL ttf y el dilema de la reinventar la rueda]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=7067#p7067"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />Entonces, aprendí lo siguiente: si quiero que las funtes sean decorativas y super lindas<br /></div></blockquote><br /><br />Debías pedirle a tu diseñador gráfico que te las creara como una tipografía propiamente dicho?<br />supongo que eso es mejor que hacer tu propio sistema para manejar y mostrar tipografías xd<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Sep 10, 2012 1:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-11T19:22:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6907#p6907</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6907#p6907"/>
<title type="html"><![CDATA[Re: Duda con SDL ttf y el dilema de la reinventar la rueda]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6907#p6907"><![CDATA[
Muchas gracias. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Jul 11, 2012 7:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-07-11T00:40:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6905#p6905</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6905#p6905"/>
<title type="html"><![CDATA[Re: Duda con SDL ttf y el dilema de la reinventar la rueda]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6905#p6905"><![CDATA[
Buenas Barajas, es muy especial la pregunta, depende mucho te tu juego.<br /><br />Te comento una experiencia, en el videojuego Don Ceferino Hazaña implementé<br />mi propio sistema de fuentes, sin usar SDL ttf, al principio todo estaba super<br />bien, mi sistema funcionaba muy bien, hasta escribí un artículo al respecto:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/fuentes_graficas">http://www.losersjuegos.com.ar/referenc ... s_graficas</a><!-- m --><br /><br />El problema llegó cuando el juego se hizo mas conocido, y me llegaron consultas<br />de varias personas para que el juego fuera internacionalizable. El<br />problema de mi sistema de fuentes es que no tenía muchos caracteres que se<br />necesitaban  en ciertos idiomas, cómo las tildes invertidas del frances. Así que tuve<br />que modificar mucho mi sistema de fuentes, y luego me llegaron consultas de otras<br />personas y caracteres que seguían faltando y asi...<br /><br />Entonces, aprendí lo siguiente: si quiero que las funtes sean decorativas y super lindas, un<br />sistema de fuentes personalizado es una buena idea. Pero si quiero que sea flexible, internacionalizable<br />y sencillo, es mejor ir por SDL TTF.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jul 11, 2012 12:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-09T05:42:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6904#p6904</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6904#p6904"/>
<title type="html"><![CDATA[Duda con SDL ttf y el dilema de la reinventar la rueda]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1509&amp;p=6904#p6904"><![CDATA[
Hola.<br />Primero que nada. El nombre completo seria: Una duda con SDL_ttf y el hecho de crear nuestro propio sistema de fuentes gráficas, ¿Vale la pena o es reinventar la rueda?....<br /><br />Sinseramente es una duda que tengo sobre eso y me gustaria saber lo que opinan.<br /><br />De antemano gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Jul 09, 2012 5:42 am</p><hr />
]]></content>
</entry>
</feed>