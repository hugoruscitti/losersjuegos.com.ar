<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=989" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-24T18:05:45+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=989</id>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-06-24T18:05:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=5686#p5686</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=5686#p5686"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=5686#p5686"><![CDATA[
Aquí tengo un ejemplo escrito en python de como usar opencv con sfml para poder probarlo. Al parecer la cam genera imágenes BGR de 8 bits sin signo con y SFML usa RGBA de 8 sin signo para las imágenes. El algoritmo para la conversión de BGR a RGBA (BGR2U8C4) que he escrito es aritmético y bueno, lo he hecho lo mejor que pude. Podéis usar el algoritmo para pilas, obviamente escrito en C/C++.<br />Como pilas también usa pygame para dibujar es más fácil pasar de BGR a RGB, que se puede hacer usando la API de opencv. En el cookbook de openvc se puede ver perfectamente como se hace.<br /><br /><a href="http://dl.dropbox.com/u/33405568/testcam.py" class="postlink">http://dl.dropbox.com/u/33405568/testcam.py</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Vie Jun 24, 2011 6:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-02-14T01:00:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=5093#p5093</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=5093#p5093"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=5093#p5093"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />la normal para C si funciona, pero no puedo importar las bibliotecas en python, ya cambié directorios y nada.<br />Se supone que es import cv y si lo importa, pero cuando quiero llamar a una función me dice que no esta definida<br /></div></blockquote><br /><br />instalaste OpenCV para C antes de la versión para Python?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Feb 14, 2011 1:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-21T21:39:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4825#p4825</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4825#p4825"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4825#p4825"><![CDATA[
la normal para C si funciona, pero no puedo importar las bibliotecas en python, ya cambié directorios y nada.<br />Se supone que es import cv y si lo importa, pero cuando quiero llamar a una función me dice que no esta definida<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Ene 21, 2011 9:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-01-21T19:02:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4822#p4822</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4822#p4822"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4822#p4822"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />intenté instalar opencv para python pero en ni una de las dos versiones(1 y 2.1).<br /></div></blockquote><br /><br />Um... voy a tratar de investigarlo, yo vi algunas demos de opencv y<br />me pareció interesante para agregar a pilas.<br /><br />El tema de la instalación no lo pude ver bien, porque<br />no tengo webcam en este equipo. Pero por lo visto<br />se instaló bien, en archlinux usé este comando:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo pacman -S opencv<br /></code></dd></dl><br /><br />Y luego, para python hay varios paquetes que se pueden instalar<br />usando el comando easy_install:<br /><br /><br /><!-- m --><a class="postlink" href="http://pypi.python.org/pypi?%3Aaction=search&amp;term=opencv&amp;submit=search">http://pypi.python.org/pypi?%3Aaction=s ... mit=search</a><!-- m --><br /><br />¿no te funcionó la instalación de opencv para python o la original?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ene 21, 2011 7:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-21T06:37:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4816#p4816</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4816#p4816"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4816#p4816"><![CDATA[
Pues lo pensaba hacer en python para que sea un módulo de pilas, la cosa es añadir opencv a pilas, intenté instalar opencv para python pero en ni una de las dos versiones(1 y 2.1) pude hacer que funcione. Por eso pensaba algo mas simple para la captura del vídeo ya que como sabrás procesar el vídeo para detectar el señuelo es fácil.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Ene 21, 2011 6:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-01-21T03:59:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4813#p4813</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4813#p4813"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4813#p4813"><![CDATA[
Qué tal, ya ando de regreso después de varias semanas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />El año pasado desarrollé un proyecto que hace precisamente lo que se menciona: aplicaciones interactivas (juegos) controlados mediante la mano. Para realizar el seguimiento de la mano utilicé precisamente un marcador por simplificar en gran medida la tarea de procesamiento, utilicé OpenCV para algunas tareas de procesamiento sencillas, para la captura del video utilicé videoInput, que me ayudó bastante pues me pareció mucho más robusta que la captura con OpenCV. Las aplicaciones las hice con SDL y una con Visual Basic <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />. Claro, todo lo trabajé en Windows, no se si se Carlos esté pensando en que la aplicación pueda ser multiplataforma.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Ene 21, 2011 3:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-01-06T00:43:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4708#p4708</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4708#p4708"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4708#p4708"><![CDATA[
carlostex: esa funcionalidad de Pygame, hasta donde sé, aun esta en desarrollo :-/, mejor usa OpenCV! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Ene 06, 2011 12:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-02T23:40:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4677#p4677</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4677#p4677"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4677#p4677"><![CDATA[
Si, bueno, resulta que pensando un poco en el como hacerlo si voy a requerir opencv para python, no se que tan grande es y como se podría distribuir, como hai que capturar video, es mas fácil hacerlo con esa biblioteca. Todavía tengo que repasar python así que me va a llevar algunos dias.<br /><br />Edito:<br /><br />He intentado instalar opencv con soporte para python, la verdad es que la compilación tarda y se requieren de muchas dependencias, lo que necesito es poder capturar video, y obtener frame por frame para poder procesarlo si existe una biblioteca que pueda hacer eso ya no necesitaría opencv, vi en otro post que Hugo comento que pygame parece soportar captura de video, alguien ha probado algo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Ene 02, 2011 11:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-01-02T21:53:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4674#p4674</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4674#p4674"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4674#p4674"><![CDATA[
wow, esta genial la idea, seria buenisimo que pilas tuviera esta capacidad<br />ya que se abriria una nueva forma de interaccion con los juegos.<br /><br />buenisimo !.<br /><br /><br />saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Dom Ene 02, 2011 9:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-31T14:55:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4659#p4659</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4659#p4659"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4659#p4659"><![CDATA[
así es, usé opencv en el curso, pero para detectar el señuelo en la mano no se requiere, es proceso es simple, si después se podría hacer que no se use un señuelo y detecte la mano como tal, si habría que usar opencv e investigar, por que eso no lo vi, pero opencv facilita muchas cosas, en todo caso, existe opencv para python. Me inclino mas a la idea de implementarlo para pilas en python.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Dic 31, 2010 2:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-31T14:10:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4658#p4658</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4658#p4658"/>
<title type="html"><![CDATA[Re: Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4658#p4658"><![CDATA[
Buenisimo, es interesante... en un conferencia de python ví algo<br />similar a esto:<br /><br /><!-- m --><a class="postlink" href="http://www.youtube.com/watch?v=pqXSWRN6Lhw">http://www.youtube.com/watch?v=pqXSWRN6Lhw</a><!-- m --><br /><!-- m --><a class="postlink" href="http://vimeo.com/8830264">http://vimeo.com/8830264</a><!-- m --><br /><!-- m --><a class="postlink" href="http://vimeo.com/4028271">http://vimeo.com/4028271</a><!-- m --><br /><br />La biblioteca es opencv, reconoce rostros, interpreta y procesa imágenes.<br /><br />¿Tú usarías esa biblioteca?.<br /><br />PD: no está de mas decir que me gustaría mucho que fuera en python y así<br />la incluimos en pilas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Dic 31, 2010 2:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-31T01:04:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4655#p4655</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4655#p4655"/>
<title type="html"><![CDATA[Videojuegos usando un humano como control]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=989&amp;p=4655#p4655"><![CDATA[
Hola, bueno el titulo parece el anuncio de el famoso dispositivo kinekt que creo que ha dejado a muchos impactados y seguro que se les a pasado por la cabeza hacer un pequeño juego que se controle con las manos o con cualquier parte del cuerpo.<br />En un principio es algo muy sencillo y mi propuesta es hacer un pequeño juego, ya sea pong, briks, tres en raya que se controle con las manos, yo haría la parte de visión artificial, pues lleve un curso en la facultad.<br />La idea es usar un pequeño señuelo o marcador en la mano o en el dedo, de esta forma es mas sencillo por que para detectar la mano habría que investigar mas y es un proceso un poco mas elaborado, pero la idea del marcador es fácil de implementar y buena para experimentar.<br />Que piensan?, ideas acerca del tipo de juego son bienvenidas, así como colaboración para escribir el código.<br />estoy pensando que podría usar python de esa forma podría hacer el motor de visión e implementarlo a pilas, o bien hacer en C++ un juego integrado, pero bueno que les parece.<br /><br />Feliz año a todos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Dic 31, 2010 1:04 am</p><hr />
]]></content>
</entry>
</feed>