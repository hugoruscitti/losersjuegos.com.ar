<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=903" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-10-06T08:48:02+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=903</id>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2010-10-06T08:48:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=903&amp;p=4241#p4241</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=903&amp;p=4241#p4241"/>
<title type="html"><![CDATA[Re: Problema con recortes de imagen en PySFML]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=903&amp;p=4241#p4241"><![CDATA[
Sorry por el doble post, pero pensé que en pilas habría una solución a esto, ya que debían usar recortes para los sprites, así que lo busqué y encontre la magnífica función SetSubRect()<br />Modifiqué el código para utilizarla:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        map_background = sf.Image()<br />        map_background.LoadFromFile(&quot;img/map_background.jpg&quot;)<br />        self.grass_sprite = sf.Sprite(map_background)<br />        self.grass_sprite.SetSubRect(sf.IntRect(0,0,64,64))<br />        self.path_sprite = sf.Sprite(map_background)<br />        self.path_sprite.SetSubRect(sf.IntRect(66,200,66+64,264))<br /></code></dd></dl><br /><br />Intentaré solucionar lo de los números mágicos, pero de momento me sirve para ir probando <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />De todas formas, si alguien conoce la razón por la que el primer código fallaba (o fallaba yo... XD), la verdad que me gustaría verlo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Mié Oct 06, 2010 8:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2010-10-05T21:18:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=903&amp;p=4240#p4240</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=903&amp;p=4240#p4240"/>
<title type="html"><![CDATA[Problema con recortes de imagen en PySFML]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=903&amp;p=4240#p4240"><![CDATA[
Bueno, hoy he sacado un ratito y me he puesto a empezar un pequeño proyectito de un mini-RPG, para ver a que puedo llegar <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />La cuestión, es que ha surgido un problema bastante extraño que no comprendo. Tengo el siguiente código Python, utilizando PySFML<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        map_background = sf.Image()<br />        map_background.LoadFromFile(&quot;img/map_background.jpg&quot;)<br />        grass_img = sf.Image()<br />        grass_img.Create(65,65)<br />        grass_img.Copy(map_background, 0, 0, sf.IntRect(0, 0, 65, 65))<br /></code></dd></dl><br /><br />Lo he estado probando y de repente termina el programa en Python sin mostrar ningún error, ni nada. A base de prints he localizado que donde falla es en el primer Copy(). Me temía que faltaban las llamadas a Create, pero a pesar de haberlos añadido no han solucionado nada en la versión Python. Lo que más me ha frustrado es que he probado con su &quot;equivalente&quot; en código C++ y sí que funciona...<br /><br />Aquí dejo el código C++:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>    sf::Image origen;<br />    if (!origen.LoadFromFile(&quot;img/map_background.jpg&quot;))<br />        return EXIT_FAILURE;<br /><br />    sf::Image grass;<br />    grass.Create(65,65);<br />    grass.Copy(Origen,0,0,sf::IntRect(0,0,65,65));<br /></code></dd></dl><br /><br />Si alguien me echa un cable le estaré agradecido <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Mar Oct 05, 2010 9:18 pm</p><hr />
]]></content>
</entry>
</feed>