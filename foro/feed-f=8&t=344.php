<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=344" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-06-20T08:10:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=344</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-06-20T08:10:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=344&amp;p=1512#p1512</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=344&amp;p=1512#p1512"/>
<title type="html"><![CDATA[Rect]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=344&amp;p=1512#p1512"><![CDATA[
Hola, no estoy seguro de haber comprendido tu problema, quizás deberías hacer el mensaje más extenso, pegando todo el código si fuera necesario. De esta manera, será más fácil que obtengas una mejor ayuda.<br />Lo que he deducido es que al cambiar la anchura y la altura del rectángulo, no afecta al blit. Eso es normal, puesto que es así como funciona blit. Si le pasas un rectángulo como coordenada de destino solo tiene en cuenta la posición de la esquina superior izquierda sin fijarse ni en la anchura ni en la altura del rectángulo. Según la <a href="http://www.pygame.org/docs/ref/surface.html#Surface.blit" class="postlink">documentación de pygame</a>: &quot;A Rect can also be passed as the destination and the topleft corner of the rectangle will be used as the position for the blit. The size of the destination rectangle does not effect the blit.&quot;<br />Si lo que quieres es imprimir sólo un trozo de la imagen, puedes pasar otro rectángulo en el parámetro de área de blit. Ese rectángulo representa el área de la superficie de la imagen que quieres imprimir.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Vie Jun 20, 2008 8:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Necrozard]]></name></author>
<updated>2008-06-19T22:02:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=344&amp;p=1511#p1511</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=344&amp;p=1511#p1511"/>
<title type="html"><![CDATA[Rect]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=344&amp;p=1511#p1511"><![CDATA[
Hola, bueno estaba probando como hacer una animacion con una grilla en pygame, pero el final se me vino un inconveniente. Hice lo siguiente:<br /><br />self.img = pygame.image.load ...<br />self.rect = self.img.get_rect()<br /><br />y en el loop principal lo bliteo... screen.blit(clase.img,clase.rect)<br /><br />pero al cambiar el parámetro width o height no me hace caso :S<br /><br />como hago? gracias desde ya!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1944">Necrozard</a> — Jue Jun 19, 2008 10:02 pm</p><hr />
]]></content>
</entry>
</feed>