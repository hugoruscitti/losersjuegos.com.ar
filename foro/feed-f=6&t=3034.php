<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=3034" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-09-20T23:47:32+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=3034</id>
<entry>
<author><name><![CDATA[AlexRam]]></name></author>
<updated>2013-09-20T23:47:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9287#p9287</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9287#p9287"/>
<title type="html"><![CDATA[Re: Como ignorar pulsaciones de teclado?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9287#p9287"><![CDATA[
Saludos de nuevo.<br /><br />Con la novedad de que mi problemilla con los KEYDOWN ha sido resuelto.<br /><br />Me encontre con este hilo y la solución que da Hugo funciona de maravilla.<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=8&amp;t=894">viewtopic.php?f=8&amp;t=894</a><!-- l --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3132">AlexRam</a> — Vie Sep 20, 2013 11:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[AlexRam]]></name></author>
<updated>2013-09-20T06:06:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9286#p9286</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9286#p9286"/>
<title type="html"><![CDATA[Como ignorar pulsaciones de teclado?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9286#p9286"><![CDATA[
Bien, cada que presionamos una tecla se generan varios eventos KEYDOWN. Aunque lo hagamos por un periodo pequeñisimo de tiempo, aunque sea un ligero toquecito a la tecla, se genera más de un evento KEYDOWN.<br /><br />Lo que yo quiero hacer es que sólo se tome en cuenta un KEYDOWN y los demás que salen involuntariamente sean ignorados.<br />Como logro eso??<br /><br />En el juego que estoy elaborando, mi idea es que si presiono la tecla Z, el personaje se oculte. Si presiono Z otra vez se deberá desocultar. Pero debido al problema de los KEYDOWN repetidos, mi personaje se oculta y desoculta muchas veces seguidas pudiendo quedar finalmente oculto o no.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Perro(Sprite):<br />   def __init__(self):<br />      self.oculto=True<br />      self.salud=100<br /><br />   def ocultar(self):<br />      tecla=pygame.key.get_pressed()<br />      if tecla&#91;K_z&#93;:<br />            self.oculto=not self.oculto<br /></code></dd></dl><br /><br />Aunque ese no es todo el código, creo que es suficiente y se entiende.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3132">AlexRam</a> — Vie Sep 20, 2013 6:06 am</p><hr />
]]></content>
</entry>
</feed>