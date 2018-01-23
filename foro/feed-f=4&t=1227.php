<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1227" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-08-07T03:53:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1227</id>
<entry>
<author><name><![CDATA[ClRg]]></name></author>
<updated>2011-08-07T03:53:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5816#p5816</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5816#p5816"/>
<title type="html"><![CDATA[Re: Tetris SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5816#p5816"><![CDATA[
Bueno primero que nada, gracias <span style="font-weight: bold">carlostex</span> por descargar y probar el juego. Ahora me quedo tranquilo de que anda en Linux. Con respecto a lo de las tablas ahora mismo me pongo a ver como solventar el problema. Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2393">ClRg</a> — Dom Ago 07, 2011 3:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-08-06T23:21:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5815#p5815</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5815#p5815"/>
<title type="html"><![CDATA[Re: Tetris SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5815#p5815"><![CDATA[
revise tu juego en ubuntu, compiló bien y funciona perfecto. <br />El comentario que te aria es sobre la forma en la que se definen las piezas veo que usas bastantes tablas para definir una pieza de 4 cuadritos, no me fije bien del método en el que haces para definir las piezas pero creo que se podría hacer mas sencillo, se me ocurre algo con lo que solo tengo que hacer una tabla que contenga la posición donde se dibuja cada cuadrito y así formar la pieza que quiera, es decir si formo la pieza cuadrada usa 4 cuadritos pues solo tengo que definir algo como:<br />{0,0},{0,20},{20,0},{20,20} lo que representa las posiciones x,y de cada cuadrito. por otro lado me parece bien como ordenaste el código tiene una buena estructura, sin embargo por la forma en la que tienes los archivos nombrados y separados esperaba ver los métodos de dibujado en el archivo media, pero veo que están dentro de la clase de los bloques, en esa clase esperaba ver solo los métodos para actualizar las posiciones, y detectar colisiones.<br />Con respecto al GamePlay es bueno, me gusta que usaste imágenes que aparenta ser de una paleta de colores al igual que el estilo de los marcadores, y el efecto de desvanecimiento de las lineas es interesante.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ago 06, 2011 11:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ClRg]]></name></author>
<updated>2011-08-06T17:55:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5814#p5814</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5814#p5814"/>
<title type="html"><![CDATA[Tetris SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1227&amp;p=5814#p5814"><![CDATA[
Hola a todos! Viendo por el foro vi varios remakes del tetris(muy buenos por cierto). Quisiera aportar con el mío que lo termine hace poco. Esta hecho en C++ con SDL.<br /><img src="http://www.subirimagentotal.com/out.php/i687_tetris-sdl.png" alt="Imagen" /><br />Actualmente estoy bajo Windows y no alcance a probarlo en Linux, así que si hay algún problema por favor comuníquenmelo para poder arreglarlo.<br /><br />Link de descarga: <a href="http://www.mediafire.com/?rlrragegisg35b2" class="postlink">http://www.mediafire.com/?rlrragegisg35b2</a> <br /><br />En Windows solo ejecutar &quot;Tetris SDL.exe&quot; para jugar. En Linux es necesario instalar SDL, SDL_mixer, SDL_ttf y SDL_image.<br /><br />Comenten cualquier duda, sugerencia, etc...SALUDOS! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2393">ClRg</a> — Sab Ago 06, 2011 5:55 pm</p><hr />
]]></content>
</entry>
</feed>