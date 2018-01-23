<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=965" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-06T02:08:57+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=965</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-01-06T02:08:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4710#p4710</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4710#p4710"/>
<title type="html"><![CDATA[Re: Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4710#p4710"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />jeje, hay cosas para las que no soy bueno explicando, creo que queda mejor con una ejemplo.<br />tengo un punto en la coordenada X=100, Y=100 establezco un centro en cX=50,cY=100, quiero rotarlo 20 grados, primero<br />llevo el centro al origen, por que la operacion seno esta con referencia al origen del plano cartesiano, para eso resto X-cY e -Y+cX<br />lo que da X1=50, X1=0, ahora aplico X2=distancia_euclideana(X1,Y1)*coseno(20), y2=distancia_euclideana(X1,Y1)*seno(20), pero ese punto quedo en el primer cuadrante y no lo podemos poner así para representarlo en la pantalla, entonces se revierte la operación, quedando Xf=X2+cX, Yf=-Y2+cY y ese es el punto que se dibuja según las coordenadas de la pantalla.<br />Verifiqué las operaciones, pero si hay un error comentenlo.<br />Este método solo funciona para un punto a la misma altura que su centro.<br /></div></blockquote><br />Como?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" />  gloool, solo bromeo, ya me quedo mas claro con la explicación de <span style="font-weight: bold">Kaiser</span> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />tengo conocimientos de fisica, en el colegio fui el unico que escogio hacer el examen de bachiderato de Fisica en el area de ciencias en un colegio tecnico (en los colegios tecnicos solo se fisica en 4to año, en los colegios academicos se da Fisica desde 4to hasta 6to año)... no lo pasé a la primera, pero en la convocatoria lo pase <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />gracias por la explicacion <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Ene 06, 2011 2:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-04T01:02:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4695#p4695</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4695#p4695"/>
<title type="html"><![CDATA[Re: Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4695#p4695"><![CDATA[
jeje, hay cosas para las que no soy bueno explicando, creo que queda mejor con una ejemplo.<br />tengo un punto en la coordenada X=100, Y=100 establezco un centro en cX=50,cY=100, quiero rotarlo 20 grados, primero<br />llevo el centro al origen, por que la operacion seno esta con referencia al origen del plano cartesiano, para eso resto X-cY e -Y+cX<br />lo que da X1=50, X1=0, ahora aplico X2=distancia_euclideana(X1,Y1)*coseno(20), y2=distancia_euclideana(X1,Y1)*seno(20), pero ese punto quedo en el primer cuadrante y no lo podemos poner así para representarlo en la pantalla, entonces se revierte la operación, quedando Xf=X2+cX, Yf=-Y2+cY y ese es el punto que se dibuja según las coordenadas de la pantalla.<br />Verifiqué las operaciones, pero si hay un error comentenlo.<br />Este método solo funciona para un punto a la misma altura que su centro.<br /><br />Para facilitar las cosas y no estar pensando en esto siempre que queramos rotar o mover, tengo una biblioteca de funciones para hacer transformaciones geométricas, ya que todo se simplifica multiplicando por matrices de transformación, me ha sido muy útil.<br />Si alguien la quiere diganlo para que la busque y la suba a algún lado.<br /><br />Edito: Acabo de ver el post de caiser, eso es lo que quise decir jeje, y pues esta explicación puede servir para implementar el código<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ene 04, 2011 1:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-01-04T00:54:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4694#p4694</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4694#p4694"/>
<title type="html"><![CDATA[Re: Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4694#p4694"><![CDATA[
Jajaja, la verdad que puede resultar un poco lioso si no se está familiarizado, se necesitan algunos conocimientos básicos de matemáticas/física:<br /><br />Imagina una gráfica normal y corriente, el origen está situado abajo a la izquierda, los valores del eje X (eje horizontal) crecen hacia la derecha y los valores del eje Y (eje vertical) crecen hacia arriba. Éste es el sistema más común para representar coordenadas.<br /><br /><img src="http://gpinch.sourceforge.net/images/curvas_compuestas.png" alt="Imagen" /><br /><br />SDL en cambio utiliza un sistema distinto, el origen está situado arriba a la izquierda, los valores del eje X (eje horizontal) crecen hacia la derecha y los valores del eje Y (eje vertical) crecen hacia abajo.<br /><br /><img src="http://razonartificial.com/wp-content/uploads/2010/08/Diagrama1.png" alt="Imagen" /><br /><br />Aquí te dejo una imagen de los cuadrantes de un plano cartesiano:<br /><br /><img src="http://3.bp.blogspot.com/_e6ns2w7oOIs/SrQs9011ZeI/AAAAAAAACTo/lDJAiBk3euA/s400/Cuadrantes+Plano+cartesiano.JPG" alt="Imagen" /><br /><br />Como ves el primer caso (caso común) se corresponde con el primer cuadrante, en cambio el caso de SDL se &quot;parece&quot; al cuarto cuadrante con la diferencia de que en el cuarto cuadrante los valores de Y crecen hacia arriba y en el caso de SDL crecen hacia abajo, pero eso se soluciona multiplicando por -1 los valores del eje Y, de ahí que carlostex diga que hay que restar y multiplicar por -1, ya que restar y multiplicar por -1 es equivalente a sumar, pero es necesario multiplicar por -1 para &quot;dar la vuelta&quot; al eje Y.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mar Ene 04, 2011 12:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-01-03T21:47:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4692#p4692</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4692#p4692"/>
<title type="html"><![CDATA[Re: Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4692#p4692"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />El problema esta en como manejas las coordenadas de la pantalla.<br />Supongo que sabrás que el origen esta arriba a la izquierda y las son positivas hacia abajo y hacia la derecha.Pero cuando usas operadores que trabajan sobre un plano cartesiano tienes que tomar en cuenta que en el plano no se puede representar la pantalla, lo mas cercano es el cuarto cuadrante pero sus posiciones en y con negativas, con la coordenada en x no hay problema pero para y tienes que restar una contante para situar el objeto donde tu quieras en la pantalla y multiplicarlo por -1<br /></div></blockquote><br /><br />¿¡Qué!?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> no entendi naa xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Ene 03, 2011 9:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tras]]></name></author>
<updated>2010-12-21T00:40:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4627#p4627</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4627#p4627"/>
<title type="html"><![CDATA[Re: Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4627#p4627"><![CDATA[
<blockquote class="uncited"><div><br />En el libro de sdl que hay en esta web hay una explicación de las coordenadas de la pantalla, y cuestiones geométricas.<br /></div></blockquote><br /><br />Si lo vi , lo estoy leyendo para recordar todos estos temas   <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />  .<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2044">Tras</a> — Mar Dic 21, 2010 12:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-20T01:49:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4622#p4622</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4622#p4622"/>
<title type="html"><![CDATA[Re: Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4622#p4622"><![CDATA[
Si eso es inherente, es cierto que para comenzar con juegos no necesitas mucha matemática, pero fíjate como el querer hacer rotar un cuerpo requiere de ciertos conocimientos de geometría y para cosas un tanto mas complejas se requieren de conocimientos de cálculo y física para juegos mas reales.<br />En el libro de sdl que hay en esta web hay una explicación de las coordenadas de la pantalla, y cuestiones geométricas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Dic 20, 2010 1:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tras]]></name></author>
<updated>2010-12-20T01:20:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4621#p4621</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4621#p4621"/>
<title type="html"><![CDATA[Re: Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4621#p4621"><![CDATA[
Cierto ese era uno de los problemas , gracias por la indicación, la verdad es que no estoy muy puesto es coordenadas y las mates aplicadas a los gráficos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  , me va a tocar leer un poco sobre el tema  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> .<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2044">Tras</a> — Lun Dic 20, 2010 1:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-19T21:35:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4620#p4620</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4620#p4620"/>
<title type="html"><![CDATA[Re: Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4620#p4620"><![CDATA[
El problema esta en como manejas las coordenadas de la pantalla.<br />Supongo que sabrás que el origen esta arriba a la izquierda y las son positivas hacia abajo y hacia la derecha.Pero cuando usas operadores que trabajan sobre un plano cartesiano tienes que tomar en cuenta que en el plano no se puede representar la pantalla, lo mas cercano es el cuarto cuadrante pero sus posiciones en y con negativas, con la coordenada en x no hay problema pero para y tienes que restar una contante para situar el objeto donde tu quieras en la pantalla y multiplicarlo por -1<br /><br />En tu codigo tienes:<br /><dl class="codebox"><dt>Code: </dt><dd><code>x =(840/2)+(length * cos (angle));<br />        y = (680/2)+(length * sin (angle));</code></dd></dl><br /><br />y debería ser:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>x =(840/2)+(length * cos (angle));<br />        y = (680/2)-(length * sin (angle));</code></dd></dl><br /><br />lo mismo con la luna.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Dic 19, 2010 9:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tras]]></name></author>
<updated>2010-12-16T16:52:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4607#p4607</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4607#p4607"/>
<title type="html"><![CDATA[Rotacion, error con la posicion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=965&amp;p=4607#p4607"><![CDATA[
Hola a todos.<br /><br />Tengo un código de ejemplo que estoy realizando para practicar con sdl ya que hace mucho tiempo que no las uso, el caso es que el código consta de tres imágenes, la primera es la central ( el sol ) la segunda rota sobre la primera ( la tierra ) con estas dos imágenes no tengo ningún problema pero con la tercera si  ( la luna ) que rota sobre la segunda  ( la tierra ).<br /><br />El problema con la luna es que no consigo que rote sobre la tierra en un circulo perfecto.<br /><br />El codigo de la tierra rotando sobre el sol es este <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> x =(840/2)+(length * cos (angle));<br />        y = (680/2)+(length * sin (angle));<br />   imagen_earth.x = x;<br />   imagen_earth.y = y;</code></dd></dl><br /><br />Uso el seno y coseno para trazar el circulo alrededor del sol.Para trazar el circulo alrededor de  la tierra uso esto.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>imagen_moon.x = (imagen_earth.x+42)+(length1 * cos ( angle ));<br />   imagen_moon.y = (imagen_earth.y+42)+ ( length1 * sin ( angle ));</code></dd></dl><br /><br />Es decir le sumo 42 a la posición de la tierra y después con length trazo el radio , pero no consigo que el movimiento de la luna sobre la tierra  sea circular.<br />La imagen de la tierra tiene un tamaño de 84px por eso uso 42 para intentar hallar el centro de la imagen y atraves de length hacer el radio.<br /><br />Espero que se entienda el problema y que me puedan echar una mano en esto.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2044">Tras</a> — Jue Dic 16, 2010 4:52 pm</p><hr />
]]></content>
</entry>
</feed>