<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=556" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-05-09T00:48:17+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=556</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-05-09T00:48:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2534#p2534</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2534#p2534"/>
<title type="html"><![CDATA[Guardar máscara de imagen en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2534#p2534"><![CDATA[
Buenas Hugo, gracias por la ayuda.<br />No, yo tengo definido como colorkey el color de fondo, asi que ya no hay problemas.<br />Probaré lo del Gimp<br /><br />Muchas Gracias<br />Juanxo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab May 09, 2009 12:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-05-07T23:23:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2528#p2528</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2528#p2528"/>
<title type="html"><![CDATA[Guardar máscara de imagen en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2528#p2528"><![CDATA[
Si, si sale toda la imagen blanca estaríamos ante una<br />superficie completamente colisionable.<br /><br />Aparentemente, para la función &quot;pygame.mask.from_surface&quot;<br />hay dos tipos de transparencia para generar una mascara.<br /><br /><br />1 - si la imagen tiene transparencia incorporada, también<br />llamado canal alpha, entonces la función interpreta uno a uno<br />todos los pixels e identifica como no colisionables a los pixels<br />mas transparentes. <br /><br />2 - si a la imagen se le ha aplicado la función &quot;set_colorkey&quot; entonces<br />interpretará como no colisionable a los pixels que coincidan con<br />el color clave.<br /><br /><br />Por lo que me dices, tu imagen tiene definido como color clave<br />el color negro, por lo tanto solo se identifica como no colisionable<br />lo que está en color negro...<br /><br />Tal vez te resulte mas útil abrir la imagen con un programa como<br />Gimp y aplicar transparencia usando un canal alpha. Al menos<br />para mí es lo mas sencillo.<br /><br />Otra posibilidad es que nos muestres la imagen original, y vemos<br />otra forma de resolverlo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue May 07, 2009 11:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-05-07T07:55:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2527#p2527</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2527#p2527"/>
<title type="html"><![CDATA[Guardar máscara de imagen en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2527#p2527"><![CDATA[
Vaya @#€%&amp;<br /><br />Muchas gracias hugo, la verdad es que no parecía tan dificil una vez que lo ves.<br />Ahora mi problema es el siguiente, toda la imagen es colisionable jajajajaj<br /><br />EDITO: He conseguido solucionar el problema, mas o menos.<br />Lo que hice fue crearme una imagen de superficie, poniendo negro todo el lo que fuera del color del fondo, y mas tarde tendré que usar esa imagen como mask.<br /><br />Es algo guarro, pero no hay otra manera de hacerlo si la Mask me sale todo blanco(todo colisiona) no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue May 07, 2009 7:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-05-07T03:12:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2526#p2526</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2526#p2526"/>
<title type="html"><![CDATA[Guardar máscara de imagen en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2526#p2526"><![CDATA[
Saludos, he buscado en la documentación de pygame pero no<br />encontré una función para hacer eso...<br /><br />Aún así, como a mí también me interesaba &quot;ver&quot; la máscara<br />de una superficie, escribí esta función que construye<br />una superficie en blanco y negro a partir de una máscara<br />de colisión.<br /><br />Cabe aclarar que se puede optimizar mucho, pero es irrelevante<br />ahora, esto es solo ilustrativo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def make_surface_from_mask&#40;mask&#41;:<br />    &quot;&quot;&quot;<br />    Genera una nueva superficie representando una mascara de bits.<br />    &quot;&quot;&quot;<br />    white = &#40;255, 255, 255&#41;<br />    black = &#40;0, 0, 0&#41;<br /><br />    width, height = mask.get_size&#40;&#41;<br /><br />    # inicia una superficie completamente negra.<br />    surface = pygame.surface.Surface&#40;&#40;width, height&#41;&#41;<br />    surface.fill&#40;black&#41;<br /><br />    # imprime en blanco los bits colisionables.<br />    for x in range&#40;width&#41;:<br />        for y in range&#40;height&#41;:<br />            if mask.get_at&#40;&#40;x, y&#41;&#41;:<br />                surface.set_at&#40;&#40;x, y&#41;, white&#41;<br /><br />    return surface<br /></code></dd></dl><br /><br />también dejo un código de ejemplo que puede servir para<br />probar la función:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />screen = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br /><br /># carga la imagen original.<br />image = pygame.image.load&#40;'example.png'&#41;<br /><br /># genera la mascara y la superficie en blanco y negro.<br />mask = pygame.mask.from_surface&#40;image&#41;<br />mask_surface = make_surface_from_mask&#40;mask&#41;<br /><br /># Genera el archivo con la mascara de &quot;example.png&quot;<br /># y la guarda en el disco.<br />pygame.image.save&#40;mask_surface, &quot;mascara.bmp&quot;&#41;<br /></code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue May 07, 2009 3:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-05-06T23:04:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2523#p2523</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2523#p2523"/>
<title type="html"><![CDATA[Guardar máscara de imagen en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=556&amp;p=2523#p2523"><![CDATA[
Buenas a todos:<br />Estoy haciendo ejemplillos para ver un poco todo sobre scroll, colisiones y demás, y tengo un problema.<br /><br />El problema es que el personaje que manejo, choca de manera inverosimil con los enemigos, así que quería probar con colisiones de máscaras. Pero antes me gustaria ver la máscara que tiene asociada mi personaje.<br /><br />Se que mediante el comando x.image.get_mask() se puede obtener la máscara de una imagen y me preguntaba si existe la posibilidad de guardar esa imagen como mapa de bits para luego poder verla y modificarla.<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié May 06, 2009 11:04 pm</p><hr />
]]></content>
</entry>
</feed>