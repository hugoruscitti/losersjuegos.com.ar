<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1449" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-13T18:57:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1449</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-04-13T18:57:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1449&amp;p=6663#p6663</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1449&amp;p=6663#p6663"/>
<title type="html"><![CDATA[Re: ayuda con música en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1449&amp;p=6663#p6663"><![CDATA[
El sistema de audio está sufriendo de algunos cambios...<br /><br />Por ahora podrías hacer lo siguiente para detener la música:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />pygame.mixer.music.stop()</code></dd></dl><br /><br />En cuanto pueda implementar los cambios vas<br />a poder hacer &quot;musica.detener()&quot; y pygame ya no va<br />a ser necesario...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Abr 13, 2012 6:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TalaRoberto]]></name></author>
<updated>2012-04-13T18:32:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1449&amp;p=6659#p6659</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1449&amp;p=6659#p6659"/>
<title type="html"><![CDATA[ayuda con música en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1449&amp;p=6659#p6659"><![CDATA[
Hola buenas<br />Soy nuevo en esto y quisiera saber si se puede parar una música por que la puedo iniciar pero no pararla.<br />musica= pilas.sonidos.cargar('algo.mp3')<br />musica.reproducir()<br />musica.detener o parar (), ¿seria posible algo así? <br />Gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2596">TalaRoberto</a> — Vie Abr 13, 2012 6:32 pm</p><hr />
]]></content>
</entry>
</feed>