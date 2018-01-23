<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=94" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-05-23T04:01:15+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=94</id>
<entry>
<author><name><![CDATA[Carlos_HP]]></name></author>
<updated>2007-05-23T04:01:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=94&amp;p=327#p327</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=94&amp;p=327#p327"/>
<title type="html"><![CDATA[Alguien me explica lo del triple buffering (uso Allegro)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=94&amp;p=327#p327"><![CDATA[
Bueno al final no necesité nada de los del triple buffering, usé una función que no conocía que se llama vsync();<br /><br /><blockquote class="uncited"><div><br />void vsync();<br />Espera a que empiece un retrazo vertical. El retrazo ocurre cuando el rayo de electrones de su monitor ha llegado a la parte inferior de la pantalla y está volviendo arriba para hacer otro barrido. Durante este corto periodo de tiempo la tarjeta de vídeo no manda datos al monitor, por lo que puede hacer cosas que de otra forma no podría, como alterar la paleta sin causar parpadeo (nieve). Sin embargo Allegro esperará automáticamente el retrazo vertical antes de alterar la paleta o hacer scroll por hardware, por lo que normalmente no debe preocuparse por esta función.<br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1375">Carlos_HP</a> — Mié May 23, 2007 4:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Carlos_HP]]></name></author>
<updated>2007-05-22T17:39:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=94&amp;p=325#p325</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=94&amp;p=325#p325"/>
<title type="html"><![CDATA[Alguien me explica lo del triple buffering (uso Allegro)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=94&amp;p=325#p325"><![CDATA[
Hola, estoy haciendo un juego de plataformas de Mario, y por ahora todo bien solo que la pantalla a veces se ve mal como si fuera lenta, y estube viendo algo sobre una tecnica llamada triplle buffering que sirve para reducir este efecto.<br /><br />Yo aprendi a penas hace poco a usar Allegro y nunca antes he programado juegos (ni programas muy complejos), creo que la tecnica que estoy usando es la del double buffering, primero leo teclas, realizo calculos, luego voy imprimiendo sobre un BITMAP llamado buffer y cuando ya pinte todo el buffer lo imprimo sobre la pantalla, entonces limpio el buffer y asi sigue el ciclo.<br /><br />Si alguien me pudiera explicar como emplear lo del triple buffering, se lo agradezco de antemano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1375">Carlos_HP</a> — Mar May 22, 2007 5:39 pm</p><hr />
]]></content>
</entry>
</feed>