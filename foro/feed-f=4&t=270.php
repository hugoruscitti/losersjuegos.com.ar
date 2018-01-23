<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=270" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-03-28T20:54:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=270</id>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-03-28T20:54:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1041#p1041</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1041#p1041"/>
<title type="html"><![CDATA[SDL trasparencias??? como....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1041#p1041"><![CDATA[
el codigo esta bien y funciona, el problema es COMO funciona. me intento epxlicar mejor <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /><br /><br />tengo la ventana vale, y cargo un personaje, con un fondo croma, digamos que rojo puro. lo animo y le hago andar (el fondo de la ventana es negro) y el personaje se mueve sin problemas por la pantalla, pero si meto otro objeto, pongamos una caja, la oclusion no la produce el personaje al pasar por encima, la produce el fondo SUPESTAMENTE trasparente antes de que el personaje llegue a estar sobre la caja en cuestion. pongo un ejemplo:<br /><br />tengo una imagen con un dibujo dentro. la imagen mide 200 pxls de ancho. el personaje mide 100pxls, esta centrado en la imagen, por lo que sobran 50 pxls de margen a cada lado. vale, el fondo de la imagen es un croma de color rojo por ejemplo. pongo la imagen en mi aplicacion y pongo otra estatica y la cargo a posteriori. cuando muevo la primera imagen, deberia ocultar la segunda cuando pasara por encima el personaje, pero no, la oculta lo que es el fondo &quot;trasparente&quot;, esos 50pxls de margen que tenia la imagen estan ocultando la otra imagen cuando supestamente no deberian aparecer porque estan en alpha...<br /><br />mi codigo entero seria un poco largo para poner, son basicamente dos clases: frame y sprite. tengo 'n' frames por cada sprite y al &quot;andar&quot; lo que hago es que el sprite vaya cargando los frames que le &quot;pertenecen&quot; por orden.<br /><br />podriais decir: bueno, pues no dejes margen... pero el aspecto visual queda horrendo cuando ves un cuadrado feo moviendose por la pantalla que hace desaparecer objetos sin siquiera estar tocandolos que misteriosamente cuando se ha alejado ese margen se van mostrando poco a poco... <br /><br />para ilustrar mi problema colgare en una web temporal la carpeta debug con las imagenes y eso y el ejecutable. manejarlo es sencillo: flechas de izquiera y derecha y para salir escape... he exagerado un poco lo que es el margen izquierdo para ejemplificar bien mi problema. <br /><br /><a href="http://maije2.iespana.es/videojuego/" class="postlink">http://maije2.iespana.es/videojuego/</a><br /><br />muchas gracias<br />atentamente<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Vie Mar 28, 2008 8:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-03-26T23:44:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1037#p1037</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1037#p1037"/>
<title type="html"><![CDATA[SDL trasparencias??? como....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1037#p1037"><![CDATA[
Hola, bueno si no me equivoco, la funcion que escribiste es correcta. El problema debe encontrarse en otro lado del codigo. Si tu codigo es pequeño, puedes postearlo para que lo podamos ver entre todos. Si tu codigo es demasiado grande, intenta crearte y postear un mini-ejemplo que reproduzca el error.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mié Mar 26, 2008 11:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-03-26T19:49:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1032#p1032</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1032#p1032"/>
<title type="html"><![CDATA[SDL trasparencias??? como....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=270&amp;p=1032#p1032"><![CDATA[
hola a tod@s. tengo un problema. hago caminar a mi personaje en una animacion pero cuando le pongo algun objeto mas peta, porque el fondo que supuestamente habia puesto como trasparente, se come al otro objeto cuando pasa por encima y eso no deberia pasar digo yo... uso SDL y la funcion para asignar alpha es <br /><br />SDL_SetColorKey(img, SDL_SRCCOLORKEY | SDL_RLEACCEL, SDL_MapRGB(img-&gt;format,255,0,0));<br /><br />que veis, el color alpha que le he puesto es un rojo puro. me gustaria saber que puedo hacer para que cuando pase por encima del objeto mi personaje no lo oculte una zona que deberia ser trasparente...<br /><br />tambien me gustaria saber si hay alguna forma de dar trasparencia no por un color sino por un rango de colores... como darle mas o menos exactitud (al igual que se hace por ejemplo en el adobe premiere cuando quieres hacer un alpha)<br /><br />muchas gracias de antemano<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Mié Mar 26, 2008 7:49 pm</p><hr />
]]></content>
</entry>
</feed>