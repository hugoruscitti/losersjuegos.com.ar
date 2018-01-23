<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=377" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-15T02:01:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=377</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-09-15T02:01:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=377&amp;p=1659#p1659</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=377&amp;p=1659#p1659"/>
<title type="html"><![CDATA[Sonido con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=377&amp;p=1659#p1659"><![CDATA[
Tendrías que inicializar el sistema de sonido, cargar los sonidos<br />y luego ir reproduciendo uno a uno.<br /><br />Para mostrar las imágenes no hay mucho secreto, podrías imprimir<br />la imagen en pantalla, comenzar a reproducir el sonido y luego<br />indicarle a pygame que aguarde unos segundos.<br /><br />Te dejo un programa de ejemplo que hace eso, aunque lo podrías<br />mejorar mucho:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br /><br /># inicializa el sistema de sonido.<br />pygame.mixer.init&#40;&#41;<br /><br /># inicializa la ventana.<br />screen = pygame.display.set_mode&#40;&#40;640, 480&#41;&#41;<br /><br /># carga y comienza a reproducir el sonido de voz.<br />pygame.mixer.music.load&#40;'hunter.mp3'&#41;<br />pygame.mixer.music.play&#40;&#41;<br /><br /># imprime el fondo de pantalla.<br />fondo = pygame.image.load&#40;'fondo.jpg'&#41;<br />screen.blit&#40;fondo, &#40;0, 0&#41;&#41;<br /><br /># muestra los cambios en pantalla.<br />pygame.display.flip&#40;&#41;<br /><br /># espera unos 5 segundos.<br />pygame.time.delay&#40;5000&#41;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Sep 15, 2008 2:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ingemar]]></name></author>
<updated>2008-09-14T23:08:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=377&amp;p=1658#p1658</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=377&amp;p=1658#p1658"/>
<title type="html"><![CDATA[Sonido con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=377&amp;p=1658#p1658"><![CDATA[
saludos a todos<br /><br />bueno mi problema es el siguiente:<br /><br />tengo 5 imagenes de una historia y quiero que amedida que las imagenes pasen que suene una voz que la va narrando (tambien tengo la voz) la pregunta es como hago para que esas 2 cosas funcionen a la vez y como reproducir el sonido de la voz<br /><br />GRACIAS DE ANTEMANO<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1911">ingemar</a> — Dom Sep 14, 2008 11:08 pm</p><hr />
]]></content>
</entry>
</feed>