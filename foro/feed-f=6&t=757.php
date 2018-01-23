<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=757" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-25T05:25:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=757</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-07-25T05:25:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3525#p3525</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3525#p3525"/>
<title type="html"><![CDATA[Re: Algun manual de Allego bueno?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3525#p3525"><![CDATA[
El documento que mencionas es bastante bueno, aunque si mal no recuerdo está incompleto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" />.<br /><br />Sobre el código que no entiendes, en la <a href="http://alleg.sourceforge.net/stabledocs/en/alleg009.html#SCREEN_W" class="postlink">documentación de Allegro te explica</a>:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#define SCREEN_W;<br />#define SCREEN_H;<br /></code></dd></dl><br /><br />Global defines that return the width and height of the screen, or zero if the screen has not been initialised yet. Example:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>          char buf&#91;100&#93;;<br />          ...<br />          uszprintf(buf, sizeof(buf),<br />                    &quot;The screen size is %d x %d pixels&quot;,<br />                    SCREEN_W, SCREEN_H);<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Jul 25, 2010 5:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vojok]]></name></author>
<updated>2010-07-22T22:49:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3463#p3463</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3463#p3463"/>
<title type="html"><![CDATA[Algun manual de Allego bueno?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3463#p3463"><![CDATA[
puede que alla quedado medio abandonado ,pero la verdad me parece mas facil que SDL y que SFML ( del ultimo no me meti mucho a investigar ) y lo que necesito no es nada del otro mundo lo unico que quiero es hacer un juego RPG que puedas tirar martillos o piedras y al golpear te saque vida y subas de LEVEL  osea no es nada complicado Creo yo ,pero no se si allegro permite usar Sprite con extencion .PNG y lo que veo que puede llegar a complicarme la vida seria la parte de hacerlo ONLINE pero x el momento no pienso en eso solo quiero crear a un personaje que pueda tirar las cosas que agarra del suelo y se le ponga en una mochila eso es lo unico que quiero crear,pero no encuentro ningun manual que explique bien.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2242">vojok</a> — Jue Jul 22, 2010 10:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-22T08:13:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3457#p3457</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3457#p3457"/>
<title type="html"><![CDATA[Algun manual de Allego bueno?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3457#p3457"><![CDATA[
buenas voiok:<br /><br />el principal problema que le veo a Allegro es que ha quedado un poco abandonado por lo que se. Personalmente te recomiendo SFML, que está más actualizada y en mi opinion bastante bien estructurada.<br /><br />De todas formas, en la seccion de libros de LosersJuegos creo que tenías un manual de Allegro<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jul 22, 2010 8:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vojok]]></name></author>
<updated>2010-07-22T03:48:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3456#p3456</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3456#p3456"/>
<title type="html"><![CDATA[Algun manual de Allego bueno?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=757&amp;p=3456#p3456"><![CDATA[
HOla,estoy iniciando en la creacion de juegos y empese con allego pero el manual que me baje de internet esta mal explicado ejemplo me pone:<br />x=SCREEN_W/2;<br />    y=SCREEN_H/2; <br /><br />if (x&lt;0&gt;SCREEN_W-nave-&gt;w)    x=x_anterior;<br />        if (y&lt;0&gt;SCREEN_H-nave-&gt;h) y=y_anterior; <br /><br />y no me explica nada de que es ese SCREEN_W-nave-&gt;w  ni nada de eso y explica otras cosas y la verdad que no me sirve si no me explica esas cosas me paso lo mismo con la funcion BLIT no me explica para que funciona cara parametro,alguien sabe de algun manual que este bien explicado el que yo estaba leyendo era el de DANIEL ACUña Norambuena ,pero como dije no esta bien explicado ,si alguien me puede ayudar diciendome algun manual o algo para aprender a programar en allego se lo agradeceria muchisimo<br /><br />PD:Mi conocimientos son de C++<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2242">vojok</a> — Jue Jul 22, 2010 3:48 am</p><hr />
]]></content>
</entry>
</feed>