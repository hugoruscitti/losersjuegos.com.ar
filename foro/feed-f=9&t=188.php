<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=188" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-11-08T16:46:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=188</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2007-11-08T16:46:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=677#p677</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=677#p677"/>
<title type="html"><![CDATA[Re: ¿Como hacer colisiones mas realistas? (Pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=677#p677"><![CDATA[
Muchas gracias Hugo. Esto es lo que estaba buscando, me ha sido de gran ayuda.<br /><br />También dije: <blockquote><div><cite>dvd escribió:</cite><br />Estaría bien si [...] en vez de utilizar rectángulos se pudiesen utilizar circunferencias etc..<br /></div></blockquote><br />He encontrado una solución para eso:<br />El código ese funciona con rectángulos, pero una circunferencia se puede descomponer en rectángulos de una manera mas o menos realista. En esta figura se muestra como sería el rectángulo de la imagen (rojo) y como con solo 3 (verdes) se puede aumentar considerablemente el realismo.<br /><img src="http://ciberia.ya.com/dvddvddvd/circumenrect.png" alt="Imagen" /><br /><br />Para trabajar mejor con estos 3 rectángulos podemos ponerlos en una lista y alinearlos al centro de la circunferencia. Os muestro mi ejemplo:<br />(en el def __init__(): del sprite)<br /><dl class="codebox"><dt>Code: </dt><dd><code>startpos = &#40;50,50&#41;<br />rect1 = pygame.Rect &#40;&#40;0,0,23,11&#41;&#41;<br />rect2 = pygame.Rect &#40;&#40;0,0,19,19&#41;&#41;<br />rect3 = pygame.Rect &#40;&#40;0,0,11,23&#41;&#41;<br />self.rectangulos = &#91;rect1, rect2, rect3&#93;<br />self.rectangulos&#91;0&#93;.center = startpos<br />self.rectangulos&#91;1&#93;.center = startpos<br />self.rectangulos&#91;2&#93;.center = startpos</code></dd></dl><br /><br />Y hacer una modificación en la función &quot;colision_de_grupos&quot; para que se compruebe si colisionan los 3 rectángulos:<br /><dl class="codebox"><dt>Code: </dt><dd><code>def colision_de_grupos&#40;sprite, group&#41;:<br />   crashed = &#91;&#93;<br />   <br />   for sprite_in_group in group:<br />      for rectangulo in sprite.rectangulos:<br />         if rectangulo.colliderect&#40;sprite_in_group.rect&#41;:<br />            crashed.append&#40;sprite_in_group&#41;<br />            break<br />   return crashed</code></dd></dl><br /><br /><br />Igualmente daré un vistazo a &quot;PixelPerfect&quot; que parece interesante para situaciones mas complicadas.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Nov 08, 2007 4:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-11-05T19:16:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=663#p663</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=663#p663"/>
<title type="html"><![CDATA[Re: ¿Como hacer colisiones mas realistas? (Pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=663#p663"><![CDATA[
<blockquote><div><cite>dvd escribió:</cite><br />Ya que con lo que he visto solo puedo hacer colisiones con rectángulos y eso limita bastante el realismo...<br /></div></blockquote> Las colisiones en pygame pueden ser tan complejas como desees, en principio<br />los grupos detectan colisiones entre cajas, pero esto no siempre tiene que ser<br />así. Por ejemplo, en el juego de nombre Shaolin tube que modificar este<br />aspecto de las colisiones para que los golpes entre personajes sean mas<br />&quot;realistas&quot;:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20071105/collision.png" alt="Imagen" /><br /><br />En la imágen puedes observar que el rectángulo de colision del personaje de<br />pelo azúl es mas pequeño que el rectángulo que representa la imágen. Esta<br />personalización de las colisiones es solo un ejemplo, se pueden hacer muchas<br />otras cosas.<br /><br />Entonces, ¿que puedes hacer para &quot;personalizar&quot; las colisiones de tu juego?.<br />Hay muchas formas, una podría ser: &quot;crear una nueva función similar a<br />'spritecollide' pero que verifique colisiones de otra forma'.<br /><br />Observa el siguiente ejemplo, es la función que utilizo en el juego que mencioné:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def colision_de_grupos&#40;sprite, group&#41;:<br />    crashed = &#91;&#93;<br />    spritecollide = sprite.rect_colision.colliderect<br /><br />    for s in group:<br />        if spritecollide&#40;s.rect_colision&#41;:<br />            crashed.append&#40;s&#41;<br /><br />    return crashed<br /></code></dd></dl><br /><br />Esta función es muy similar a &quot;spritecollide&quot;, recibe un sprite y un grupo,<br />evalúa si existen colisiones y devuelve una lista de todos los elementos que<br />colisionan con el argumento 'sprite'.<br /><br />Si quieres otro ejemplo puedes observar el proyecto &quot;PixelPerfect&quot; de John<br />Eriksson:<br /><br />   <!-- m --><a class="postlink" href="http://arainyday.se/projects/python/PixelPerfect/">http://arainyday.se/projects/python/PixelPerfect/</a><!-- m --><br /><br />John también escribe una función similar a 'spritecollide', pero agrega una<br />rutína que verifica colisiones en base a los píxeles de una imagen (en<br />realidad, usando una máscara de la imagen).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 05, 2007 7:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2007-11-04T15:21:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=658#p658</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=658#p658"/>
<title type="html"><![CDATA[¿Como hacer colisiones mas realistas? (Pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=188&amp;p=658#p658"><![CDATA[
Hola, me gustaría saber si se podrían hacer colisiones mas complejas. Ya que con lo que he visto solo puedo hacer colisiones con rectángulos y eso limita bastante el realismo. Estaría bien si se pudiese hacer algo así como una máscara para elegir las zonas que pueden colisionar, o si en vez de utilizar rectángulos se pudiesen utilizar circunferencias etc..<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Nov 04, 2007 3:21 pm</p><hr />
]]></content>
</entry>
</feed>