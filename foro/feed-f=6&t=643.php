<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=643" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-10-28T20:27:21+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=643</id>
<entry>
<author><name><![CDATA[Metalero]]></name></author>
<updated>2009-10-28T20:27:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=643&amp;p=3011#p3011</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=643&amp;p=3011#p3011"/>
<title type="html"><![CDATA[Liberar surface, despues de un return]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=643&amp;p=3011#p3011"><![CDATA[
Buenas, les vengo con otra dificultad que me encontre.<br /><br />Resulta que, en la libreria grafica que estoy haceindo, hay algunos efectos para aplicar en los sprites, como rotacion, zoom, volteo, trasnparecia, etc.<br /><br />La cosa, es que la funcion encargada de cada una de esas tareas, crea un superficie nueva, aplica el efecto a partir de la imagen original, y devuelve esa superficie (que luego es cargada en la imagen de pantalla)<br /><br />por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface *CSprite::set_angle&#40;double angulo, int smooth&#41;&#123;<br />  SDL_Surface *rotado;<br />  rotado = rotozoomSurface&#40;sprite, angulo, 1, smooth&#41;;<br />  return rotado;    <br />&#125;</code></dd></dl><br /><br />que luego desde otra parte hace:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>sprite  = set_angle&#40;selfangle&#91;0&#93;, int&#40;selfangle&#91;1&#93;&#41;&#41;;<br /></code></dd></dl><br /><br />Luego de cada frame, la imagen en pantalla la trasnformo de nuevo en la imagen original antes de volver a aplicarle los efectos.<br /><br />(Se que a simple vista parece una funcio que esta de mas, pero creanme que tiene logica lo que estoy haciendo XD)<br /><br />El problema es que cada vez que roto una imagen (o le hago cualquiero otro efecto), se crea una superficie nueva, llegando al punto en que el programa me consume 1 GB memoeria tras haber creado quichicientas superficies..<br /><br />Mi duda es, como hago para retornar la superficie, y luego liberarla, si la varaible no es global?<br /><br />[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2158">Metalero</a> — Mié Oct 28, 2009 8:27 pm</p><hr />
]]></content>
</entry>
</feed>