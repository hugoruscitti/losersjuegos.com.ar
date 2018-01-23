<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=658" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-11-23T21:53:22+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=658</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-11-23T21:53:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=658&amp;p=3050#p3050</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=658&amp;p=3050#p3050"/>
<title type="html"><![CDATA[Problemas con valores negativos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=658&amp;p=3050#p3050"><![CDATA[
Ten en cuenta que la funcion:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int SDL_BlitSurface&#40;SDL_Surface *src, SDL_Rect *srcrect, SDL_Surface *dst, SDL_Rect *dstrect&#41;;<br /></code></dd></dl><br /><br />altera el argumento <span style="font-weight: bold">dstrect</span> cuando se imprime<br />en pantalla para que este argumento indique lo<br />que efectivamente se imprimió. Por ejemplo si el<br />rectángulo tiene las coordenadas [-10, -10, 50, 50], la<br />función seguramente alterará tu rectángulo indicando que<br />no imprimió en las zonas negativas, y te retorna [0, 0, 50, 50].<br /><br />Este es un extracto de la documentación de la<br />función, ahí comenta<br />cómo altera el último argumento:<br /><br /><blockquote class="uncited"><div><br />This performs a fast blit from the source surface to the destination surface.<br /><br />The width and height in srcrect determine the size of the copied rectangle. Only the position is used in the dstrect (the width and height are ignored). Blits with negative dstrect coordinates will be clipped properly.<br /><br />If srcrect is NULL, the entire surface is copied. If dstrect is NULL, then the destination position (upper left corner) is (0, 0).<br /></div></blockquote><br /><br />entonces, como recomendación. No utilices el mismo<br />rectángulo para los dos argumentos, es preferible que<br />hagas un nuevo rectángulo de copia para el último<br />argumento y luego descartarlo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 23, 2009 9:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-11-23T19:22:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=658&amp;p=3049#p3049</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=658&amp;p=3049#p3049"/>
<title type="html"><![CDATA[Problemas con valores negativos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=658&amp;p=3049#p3049"><![CDATA[
Hola amigos:<br /><br />Bueno, ahora estoy haciendo una prueba, donde el personaje entre por un túnel, el cual puede estar ubicado en un lado de la pantalla, es decir, en la parte izquierda, derecha, arriba o abajo, y cuando el personaje entre por el túnel saldrá por el mismo túnel pero esta vez por el lado opuesto de la pantalla, es decir, si entre por el túnel en el lado derecho saldrá por el túnel en el lado izquierdo de la pantalla.<br /><br />para hacer esto, cuando las coordenadas X en pantalla de mi variable tipo SDL_Rect de mi personaje, para el caso de derecha a izquierda, si esta sobrepasa el ancho de la pantalla entonces yo le asigno el valor -32, para que se ubique un poco antes del valor 0 de la pantalla y entonces a partir de este nuevo punto comience a dibujarse hasta entrar en escena una vez mas.<br /><br />La cuestión esta en cuando utilizo la función <br />SDL_BlitSurface()<br />y la paso la variable SDL_Rect de pantalla de mi caracter, este lo toma bien, pero cuando esta función termina el valor de X se vuelve 0, y el personaje reaparece en pantalla de un tirón, que puede ser esto y como podré solucionarle.<br /><br />alguien tiene para mi un consejo.<br /><br />saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Lun Nov 23, 2009 7:22 pm</p><hr />
]]></content>
</entry>
</feed>