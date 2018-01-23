<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=881" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-30T14:30:49+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=881</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-11-30T14:30:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4520#p4520</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4520#p4520"/>
<title type="html"><![CDATA[Re: ¿colisiones?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4520#p4520"><![CDATA[
Para colisiones con el mapa (ya sea &quot;zona lenta&quot; o obstáculos) usaría una matriz de valores. Un valor por cada pixel o por cada tile dependiendo del detalle del juego.<br /><br />Pero para colisión coche a coche, probaría de usar esto:<br /><!-- m --><a class="postlink" href="http://www.gamedev.net/reference/programming/features/2dRotatedRectCollision/">http://www.gamedev.net/reference/progra ... Collision/</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Nov 30, 2010 2:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blogmaster765]]></name></author>
<updated>2010-10-04T03:49:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4223#p4223</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4223#p4223"/>
<title type="html"><![CDATA[Re: ¿colisiones?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4223#p4223"><![CDATA[
gracias ahi paso por halli y me fijo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2327">blogmaster765</a> — Lun Oct 04, 2010 3:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-10-04T01:53:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4222#p4222</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4222#p4222"/>
<title type="html"><![CDATA[Re: ¿colisiones?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4222#p4222"><![CDATA[
en la pagina de lazy foo hay muy buenos tutoriales sobre colisiones:<br /><!-- m --><a class="postlink" href="http://www.lazyfoo.net/SDL_tutorials/">http://www.lazyfoo.net/SDL_tutorials/</a><!-- m --><br /><br />y sino podes usar SGE, que es un framework para sdl que simplifica ese tipo de cosas. El road fighter remake usa esa libreria.<br /><br /><!-- m --><a class="postlink" href="http://www.digitalfanatics.org/cal/sge/">http://www.digitalfanatics.org/cal/sge/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Lun Oct 04, 2010 1:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-20T03:54:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4161#p4161</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4161#p4161"/>
<title type="html"><![CDATA[Re: ¿colisiones?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4161#p4161"><![CDATA[
OK,ese codigo es parte de un motor que estoy desarrollando, lo puedes descargar desde sourceforge con este comando:<br /><br />svn co <!-- m --><a class="postlink" href="https://tank-war.svn.sourceforge.net/svnroot/tank-war">https://tank-war.svn.sourceforge.net/svnroot/tank-war</a><!-- m --> tank-war <br /><br />En cuanto tenga tiempo, te explico mejor por si tienes dudas, esta implementado en los archivos: object.h que es usado por entity_base.h, la clase object depende de declaraciones hechas en geometry.h y math_extra.h<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Sep 20, 2010 3:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blogmaster765]]></name></author>
<updated>2010-09-20T03:25:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4160#p4160</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4160#p4160"/>
<title type="html"><![CDATA[Re: ¿colisiones?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4160#p4160"><![CDATA[
si estaria bueno ver tu codigo carlos aunque en la geometria nunca fui muy bueno pero tendre que hacerme bueno a la fuerza y con respecto a lo que dice adrigm77 es la misma formula que estado utilizando que compara los vertices de dos rectangulos o cuadrados<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2327">blogmaster765</a> — Lun Sep 20, 2010 3:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-20T00:52:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4155#p4155</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4155#p4155"/>
<title type="html"><![CDATA[Re: ¿colisiones?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4155#p4155"><![CDATA[
Bueno todo lo que ves en el motitor esta hecho de formas primitivas, y las mas pequeña es un pixel que es cuadrado, la idea es usar mascaras, con una buena resolucion que paresca curva pero que no reste velocidad, la idea principal que yo he usado es asociar un conjuno de puntos a una imagen, si la imagen es curva como en una buelta pues pones hay mas puntos, la union entre los puntos puede ser una recta, eso es por que es mas facil calcular si dos rectas colicionan, sin embargo puedes usar en algunas partes curvas, para detectar la colicion es lo mismo, pero nececitas describir muy bien la curva con una ecuacion, en libros de geometria te puedes inspirar. si quieres te puedo pasar mi condigo de como tengo implementado las coliciones.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Sep 20, 2010 12:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-09-19T19:00:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4139#p4139</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4139#p4139"/>
<title type="html"><![CDATA[Re: ¿colisiones?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4139#p4139"><![CDATA[
Normalmente los sprites suelen tener asociado un rect que es un rectángulo del tamaño del sprite que sirve para comprobar las colisiones, ejemplo, si algún área de ese rect está en contacto con el área de otro rect es que están colisionando, para saber en que parte justo están colisionando y tener más presición puedes usar máscaras. Yo no las he usado así que no te puedo ayudar con ellas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Dom Sep 19, 2010 7:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blogmaster765]]></name></author>
<updated>2010-09-19T04:10:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4136#p4136</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4136#p4136"/>
<title type="html"><![CDATA[¿colisiones?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=881&amp;p=4136#p4136"><![CDATA[
queria saber cuales eran las distintas formas para comprobar colisiones yo he estado utilizando la formula matematica que compara las pociciones de los vertices de dos 2 cuadrados .<br />bueno lo que yo estoy buscando es por ejemplo creo una pista de autos y quiero que el auto colisione cuando intente salir de la ruta considerando que la pista no tenga una figura primitiva(rectangulo,circulo.etc) alguna propuesta.....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2327">blogmaster765</a> — Dom Sep 19, 2010 4:10 am</p><hr />
]]></content>
</entry>
</feed>