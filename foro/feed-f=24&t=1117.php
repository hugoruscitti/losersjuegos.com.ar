<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1117" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-26T03:24:34+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1117</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-04-26T03:24:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5452#p5452</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5452#p5452"/>
<title type="html"><![CDATA[Re: Colisiones en un juego de peleas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5452#p5452"><![CDATA[
lo que pasa es que cada programador por lo general aplica distintas tecnicas, cuando recién se empieza se aplican las sencillas, es posible que puedas encontrar mas información es libros especializados de programación de videojuegos, hay una serie que se llama programing videogames all in one, son varios libros. esto de las máscaras es algo que se me ocurrió, por que era sencillo y elegante, claro que ya existia, pero la que uso en el video es una implementación mia. y asi muchos programadores lo hacen, lo que podrias hacer es ideartelas para hacer la mascara y detectar coliciones en poligonos arbitriarios, también te podria pasar el condigo con el que yo lo hago. otra cosa que te recomiendo es leer mucho, no de un tema en específico, busca libros de videojuegos o videojuegos ya hechos y averigua como resuleven el problema qute tiene.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Abr 26, 2011 3:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[borgo66]]></name></author>
<updated>2011-04-25T18:45:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5447#p5447</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5447#p5447"/>
<title type="html"><![CDATA[Re: Colisiones en un juego de peleas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5447#p5447"><![CDATA[
Gracias por responder, y tan rapido, quisiera saber algo sobre eso de las mascaras para manejar colisiones, asi que si me pasáras mas informacion o alguna pagina, tutorial , etc estare muy agradecido.<br />Por otro lado lo que hice por ahora es crear para mi personaje un atributo rect para determinadas partes del cuerpo y acualízo sus posiciones tomando como referencia el atributo rect.center &quot;nativo&quot; (por decirlo de alguna manera) que se obtiene con el metodo get_rect ,para despues comprobar con colliderect si en deterninado frame de mi animacion hay alguna colision de determinado rect y si la hay, cambio el estado del personaje.<br />Si tienen informacion sobre este tipo de juegos les agradeceria muchisimo que la publicara en el foro o la web porque no se suele encontrar en libros ni en google<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2420">borgo66</a> — Lun Abr 25, 2011 6:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-04-19T04:41:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5417#p5417</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5417#p5417"/>
<title type="html"><![CDATA[Re: Colisiones en un juego de peleas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5417#p5417"><![CDATA[
Hola, antes que algo, la pregunta no es tonta, en videojuegos hay tantos tipos y cada uno tiene sus problemas y soluciones<br />distintas, y no todos sabemos sobre todas las clases de juegos que hay.<br />Pasando a tu duda, las imagenes que manejas supongo que son del personaje parado, pateando o algo asi, a menos que tu personaje tenga una imagen para cada extremidad sirve lo que dices. se podria definir una mascara de colicion para cada imagen, esto es, definir un poligono que encierre la imagen de cada posición de tu personaje, manejar esto podria ser un poco tedioso si estas empezando, pero definir cuadrados independientes para que tomen la forma del personaje funciona también.<br />mira te dejo un video de como se ve la mascara es de un videojuego que hice, el sistema de coliciones maneja esas mascaras y detecta si existe una colición de las lineas, este metodo es tan preciso como el numero de caras tenga el poligono, es similar a lo del personaje de lucha, tiene una forma arbitraria y la mascara sirve bien.<br /><a href="http://www.youtube.com/watch?v=PEA3LELNJWE" class="postlink">http://www.youtube.com/watch?v=PEA3LELNJWE</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Abr 19, 2011 4:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[borgo66]]></name></author>
<updated>2011-04-18T20:54:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5416#p5416</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5416#p5416"/>
<title type="html"><![CDATA[Colisiones en un juego de peleas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1117&amp;p=5416#p5416"><![CDATA[
Hola a todos soy nuevo en el foro y llevo un par de meses con pygame, y les consulto para saber si conocen alguna tecnica mas avanzada para colisionar sprites que el simple colliderect, mi idea era la de crear varios rects para cada sprite: uno para la cabeza de mi personaje, otro para el puño, otro para el torso,pies,etc y asi poder comprobar si colisiona determinada parte con otra y de esta manera <br />cambiar el estado del personaje (espero se entienda lo que digo). Disculpen si es muy tonto lo que pregúnto pero estoy recien empezando con pygame y esto de programar juegos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2420">borgo66</a> — Lun Abr 18, 2011 8:54 pm</p><hr />
]]></content>
</entry>
</feed>