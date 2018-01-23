<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1164" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-31T21:25:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1164</id>
<entry>
<author><name><![CDATA[kerveros]]></name></author>
<updated>2011-05-31T21:25:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1164&amp;p=5600#p5600</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1164&amp;p=5600#p5600"/>
<title type="html"><![CDATA[problema con coordenadas en actores de un grupo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1164&amp;p=5600#p5600"><![CDATA[
Hola a todos.<br /><br />estoy haciendo un juego que utiliza una cuadricula de 8x8 para posicionar los actores en la escena, para facilitar mi trabajo hice la siguiente función para traducir posiciones tipo (7,3) en su respectivo par de coordenadas x y en pilas.<br /><dl class="codebox"><dt>Code: </dt><dd><code>def coord(cx,cy):<br />            x = -355 + (50*(cx-1))<br />            y = 195 - (50*(cy-1))<br />            return (x,y)<br /></code></dd></dl><br /><br />Supongo que habrán mejores formas de hacerlo, esa fue la que se me ocurrio, la funcion trabaja perfecto con actores individuales, pero cuando quiero aplicarla a un grupo de actores empieza mi problema<br /><br />este seria un ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>enterprise.x, enterprice.y = coord(5,6)<br /></code></dd></dl> <br /><br />el actor es posicionado en el punto que quiero sobre la cuadricula, y cuando lo miro en modo depuracion las coordenadas que aparecen son por ejemplo (-136, 98).<br /><br />pero cuando hago lo mismo con un actor de un grupo asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>kbop&#91;5&#93;.x, kbop&#91;5&#93;.y = coord(5,6)<br /></code></dd></dl><br /><br />El actor debería aparecer sobre el actor enterprise, pero no aparece mucho mas arriba y en el modo de depuración aparecen las coordenadas (5,6) y no (-136, 98).<br /><br />Podrían decirme si estoy haciendo algo mal o a que creen que se deba este comportamiento?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2444">kerveros</a> — Mar May 31, 2011 9:25 pm</p><hr />
]]></content>
</entry>
</feed>