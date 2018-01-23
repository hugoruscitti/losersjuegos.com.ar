<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=29" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-03-05T21:18:06+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=29</id>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2013-03-05T21:18:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9169#p9169</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9169#p9169"/>
<title type="html"><![CDATA[HTML5 y Javascript • Re: Organizar tu sitio web(Duda)]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9169#p9169"><![CDATA[
mvc, si te refieres con eso a movelo-vista-controlador, no tiene que ver tanto con como organices tu código sino con el funcionamiento de las webs dinamicas, y por el ejemplo que pusistes parece más una web dinamica (digo por el index.htm), por lo que hay el mvc no tiene nada que ver.<br /><br />mvc es que por ejemplo, usando django para crear una web dinamica, los datos estan en la base de datos, la logica y funcionamiento en los script python y la representación en las plantillas. En este ejemplo, al usar django para poner el ejemplo, tiene su estructura para funcionar, ahi si tienes que almodarte o usar otro con el que estes mas comodo, pero los archivos staticos puedes organizarlos dentro del directorio de archivos staticos a tu gusto, y las plantillas igual.<br /><br />Si por ejemplo usas php directamente para tu web pues podrias por ejemplo hacer que en el directorio app esten los scripts php de las aplicaciones, como tu comentabas, y luego tener un directorio template con plantillas para esas app, y que cada app tenga unicamente codigo php, acceda a los datos de la base de datos y cargue la plantilla y devuelva la respuesta al cliente, y seguirias usando mvc ya que mantienes datos, presentacion y funcionamiento separados.<br /><br />De resto, como ya te comentaron, no es obligatorio seguir el mvc y en especial si ves que es desfavorable para algo en concreto que estes haciendo pues no lo uses y donde lo veas mas favorable usalo. Por ejemplo, en las empresas que he visto yo funcionar sus webs con django el mvc permitia que el programador se ocupara unicamente de eso, programar y tenian un diseñador que hacia las plantillas, ni el programador se rompia la cabeza con codigo python o programando o viendo como habia que tratar los datos, ni el programador se rompia la cabeza con el css, escoger colores, ver donde colocar los datos, o navegando entre codigo HTML.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Mar Mar 05, 2013 9:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-02-23T23:48:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9160#p9160</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9160#p9160"/>
<title type="html"><![CDATA[HTML5 y Javascript • Re: Organizar tu sitio web(Duda)]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9160#p9160"><![CDATA[
Cada quien utiliza lo que le funciona.<br /><br /><blockquote><div><cite>Kyrian escribió:</cite><br />no me gusta mucho el mvc, pues lo siento que me tengo que amoldar a el<br /></div></blockquote> <br /><br />Me remito a lo anterior. Si no hay necesidad de utilizar mvc o no es obligatorio, no lo utilices. Es más como una sugerencia de como diseñar el software, y tiene ventajas y desventajas como todos los patrones de diseño.<br /><br />Pero, utilízalo si es el único que sirve para resolver el problema...<br /><br />Espero que mi opinión te sea útil.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Feb 23, 2013 11:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2013-02-23T21:01:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9159#p9159</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9159#p9159"/>
<title type="html"><![CDATA[HTML5 y Javascript • Organizar tu sitio web(Duda)]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9159#p9159"><![CDATA[
Hola gente como estamos, ando un poco desorientado en cuetion a la organización de mis archivos, yo antes lo organizaba de esta manera<br /><br />MiProyecto<br />|<br />|----index.html<br />|----css  (Aqui colocaba todo mi css)<br />|----js   (las herramientas javascript que necesite cargar, como le jquery el melonjs, etc)<br />|----app (y pues las aplicaciones que este desarrollando)<br /><br />pero veo ahora que hay mvc ya sea python, ruby, perl, etc, nodejs que te organizan las carpetas, no me gusta mucho el mvc, pues lo siento que me tengo que amoldar a el(bueno quiero creer que estoy equivacado por no saber esto) pero mi duda es como es la organizacion de los archivos y carpetas, si haces un sitio web con nodejs, javascript, por que e visto que luego ustedes lo organizan con un archivo index.py o app.py y arriba sus carpetas como es eso?, espero puedan orientarme tantito, de antemano muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Sab Feb 23, 2013 9:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[will21]]></name></author>
<updated>2013-02-13T15:27:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3000&amp;p=9129#p9129</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3000&amp;p=9129#p9129"/>
<title type="html"><![CDATA[HTML5 y Javascript • Juegos en HTML5 Tutorial 4]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3000&amp;p=9129#p9129"><![CDATA[
<span style="font-size: 150%; line-height: 116%;">Hola a todos, hoy traigo la cuarta parte del tutorial de juegos en html5, para este ocasion el juego se vera asi:</span><br /><br /><img src="http://4.bp.blogspot.com/-g-uHPNNnBL0/URupeiDh5NI/AAAAAAAAAbo/FpR9JPol1Uk/s1600/space+invaders2.jpg" alt="Imagen" /><br /><br /><img src="http://4.bp.blogspot.com/-x54p88d09rU/URupcwtNHvI/AAAAAAAAAbg/4noeKhuMf00/s1600/space+invaders.jpg" alt="Imagen" /><br /><br /><span style="font-size: 150%; line-height: 116%;">En este tutorial introduje enemigos que van saliendo de manera aleatoria, y nuestro objetivo sera dispararles para que no nos toquen o sino perderemos y tendremos que volver a empezar. Ademas agregue una pantalla al inicio, lo cual hace que el usuario tenga que dar click para que el juego inice (lo mas normal en un juego web). Espero les guste y les dejo el link</span><br /><br /><a href="http://www.hacerjuegos.net/2013/02/juegos-en-html5-tutorial-4.html" class="postlink">http://www.hacerjuegos.net/2013/02/juegos-en-html5-tutorial-4.html</a><span style="font-size: 150%; line-height: 116%;">Hola a todos, hoy traigo la cuarta parte del tutorial de juegos en html5, para este ocasion el juego se vera asi:</span><br /><br />[img]http<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3089">will21</a> — Mié Feb 13, 2013 3:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[will21]]></name></author>
<updated>2013-02-04T20:42:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2993&amp;p=9121#p9121</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2993&amp;p=9121#p9121"/>
<title type="html"><![CDATA[HTML5 y Javascript • Juegos en HTML5 Tutorial 3]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2993&amp;p=9121#p9121"><![CDATA[
<span style="font-size: 150%; line-height: 116%;">Hola a todos, hoy traigo la tercera parte de programación de juegos en html5, espero les guste, quiero recordar que el objetivo es obtener algo asi:</span><br /><br /><img src="http://3.bp.blogspot.com/-jb1nuulH2Lk/UQlrpVZoDEI/AAAAAAAAAWc/GfTm0sn4eSo/s1600/space.jpg" alt="Imagen" /><br /><br /><span style="font-size: 150%; line-height: 116%;">Para este tutorial explicare el loop principal, el metodo que detecta el teclado y el metodo que desplaza el fondo. Tambien subire el codigo para el que lo quiera ver completo.</span><br /><br /><span style="font-size: 150%; line-height: 116%;"><a href="http://www.hacerjuegos.net/2013/02/juegos-en-html5-tutorial-3.html" class="postlink">http://www.hacerjuegos.net/2013/02/juegos-en-html5-tutorial-3.html</a></span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3089">will21</a> — Lun Feb 04, 2013 8:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[will21]]></name></author>
<updated>2013-01-30T19:17:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2992&amp;p=9118#p9118</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2992&amp;p=9118#p9118"/>
<title type="html"><![CDATA[HTML5 y Javascript • Juegos HTML5 Tutorial 2]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2992&amp;p=9118#p9118"><![CDATA[
<span style="font-size: 150%; line-height: 116%;">Hola a todos, primero disculpas por la tardanza, pero aqui les traigo la segunda parte del tutorial de programacion de juegos, esta vez el objetivo sera crear algo asi<br /><br /><img src="http://3.bp.blogspot.com/-jb1nuulH2Lk/UQlrpVZoDEI/AAAAAAAAAWc/GfTm0sn4eSo/s1600/space.jpg" alt="Imagen" /><br /><br />Tendremos una nave que se podra mover por todo el escenario, el fondo se desplazara automaticamente (no se puede apreciar en la imagen) y la nave podra hacer un disparo (se dispara con z). Lo interesante es que con este tutorial se practicara, colisiones, el loop del juego y deteccion del teclado.<br /><br />Asi que los invito al sitio del tutorial  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <a href="http://www.hacerjuegos.net/2013/01/juegos-en-html5-tutorial-2.html" class="postlink">http://www.hacerjuegos.net/2013/01/juegos-en-html5-tutorial-2.html</a></span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3089">will21</a> — Mié Ene 30, 2013 7:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-01-29T01:16:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2991&amp;p=9117#p9117</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2991&amp;p=9117#p9117"/>
<title type="html"><![CDATA[HTML5 y Javascript • Re: Tetris HTML5]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2991&amp;p=9117#p9117"><![CDATA[
Se ve bastante bien <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Ene 29, 2013 1:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[will21]]></name></author>
<updated>2013-01-28T17:02:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2991&amp;p=9116#p9116</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2991&amp;p=9116#p9116"/>
<title type="html"><![CDATA[HTML5 y Javascript • Tetris HTML5]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2991&amp;p=9116#p9116"><![CDATA[
<span style="font-size: 150%; line-height: 116%;">Hola a todos, hoy quiero compartir un tetris desarrollado en html5, es sencillo pero tiene muy buena jugabilidad,espero les guste,<br />les dejo algunas imagenes:</span><br /><br /><img src="http://k44.kn3.net/EDFD4C1A6.png" alt="Imagen" /><br /><br /><img src="http://k44.kn3.net/C0C1A5774.png" alt="Imagen" /><br /><br /><span style="font-size: 150%; line-height: 116%;">Para jugarlo se puede hacer desde mi blog <a href="http://www.hacerjuegos.net/2013/01/tetris-html5.html" class="postlink">http://www.hacerjuegos.net/2013/01/tetris-html5.html</a>, si llegaran a tener algun problema, entonces ingresen a la pagina donde esta colgado directamente el juego <a href="http://www.intelygames.com/tetris/" class="postlink">http://www.intelygames.com/tetris/</a></span><br /><br />Gracias a todos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3089">will21</a> — Lun Ene 28, 2013 5:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-01-28T02:50:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1431&amp;p=9115#p9115</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1431&amp;p=9115#p9115"/>
<title type="html"><![CDATA[HTML5 y Javascript • Re: Javascript no tiene el monopolio sobre HTML5!]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1431&amp;p=9115#p9115"><![CDATA[
jaja, sí.<br /><br />Por cierto: ¿Qué opinas de Brython? <!-- m --><a class="postlink" href="http://www.brython.info/index_en.html">http://www.brython.info/index_en.html</a><!-- m --> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Ene 28, 2013 2:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[will21]]></name></author>
<updated>2013-01-04T02:08:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2984&amp;p=9095#p9095</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2984&amp;p=9095#p9095"/>
<title type="html"><![CDATA[HTML5 y Javascript • Desarrollo de juegos HTML5 tutorial 1]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2984&amp;p=9095#p9095"><![CDATA[
Hola a todos, este es el primer tutorial de una serie que realizare, y que ayudaran a conocer puntos claves del desarrollo de juegos en HTML5; para esta primera parte me enfocare en dar una introducción a la etiqueta &lt;canvas&gt; que es la que permite dibujar en el navegador y permitira asignar parte grafica a los juegos.<br /><br />Primero comentar que esta etiqueta fue desarrollada por Apple para su navegador Safari. Despues la W3C (World Wide Web Consortium) empezo a trabajar con un grupo de empresas entre las que estaba el mismo Apple y decidio adoptar canvas para el lanzamiento de la siguiente version de HTML, es decir HTML5.<br /><br /><span style="font-weight: bold">¿Y que se puede hacer con canvas?</span><br /><br />Basicamente lo que permite canvas es dibujar poligonos de multiples formas, asignarles colores, degradados y mostrar imagenes, todo esto directamente en el navegador, sin necesidad de plugins como flash. <br /><br />Todo lo anterior parece genial, pero canvas todavia esta en proceso de desarrollo, y tiene algunos inconvenientes, por ejemplo, si dibujamos una linea, no existe un metodo que permita borrar solamente esa linea, para ello tendriamos que borrar todo canvas, o recurrir a otro metodo que permite borrar una seccion cualquiera, pero solo en forma de rectangulo. Tampoco es cuestion de alarmase, ya existen librerias que facilitan mucho todo ese trabajo.<br /><br /><span style="font-weight: bold">El primer dibujo, un rectangulo azul</span><br /><br />Lo primero es crear la etiqueta canvas y asignarle un id de la siguiente forma<br /><br /><pre class="prettyprint">&lt;canvas id=&quot;canvas&quot; width=&quot;300&quot; height=&quot;300&quot;&gt;&lt;/canvas&gt;</pre><br /><br />Despues es cuestion de agregar el siguiente codigo javascript, en medio de la etiqueta head:<br /><br /><pre class="prettyprint">var canvas = document.getElementById&#40;&quot;canvas&quot;&#41;;<br />var ctx = canvas.getContext&#40;&quot;2d&quot;&#41;;            <br />ctx.fillStyle = &quot;blue&quot;;<br />ctx.fillRect&#40;30, 30, 100, 100&#41;;</pre><br /><br />Como se puede observar lo primero que se hace es obtener el elemento canvas por medio de su id, luego sea crea una variable llamada ctx (canvas context), y se le asigna el metodo getContext(), esta variable es la que permite dibujar.<br /><br />Seguidamente se le asigna un color a ctx y se llamada el metodo fillRect; los dos primeros numeros, son la ubicacion del rectangulo y los dos siguientes el ancho y el alto. El rectangulo se veria asi:<br /><br /><img src="http://3.bp.blogspot.com/-Zjqf-ZgUyTM/UOYPlzHxVVI/AAAAAAAAAQc/EndJOJgW4N4/s1600/canvas3.PNG" alt="Imagen" /><br /><br /><span style="font-weight: bold">Agregar una imagen</span><br /><br />Para desarrollar un juego con una buena interfaz grafica es necesario utilizar imagenes, de modo que voy a agregar una imagen de mario bros que estara almacenada en una carpeta, esto se puede hacer de la siguiente manera:<br /><br /><pre class="prettyprint">var canvas = document.getElementById&#40;&quot;canvas&quot;&#41;;<br />var ctx = canvas.getContext&#40;&quot;2d&quot;&#41;; <br />var imagen = new Image&#40;&#41;;<br />imagen.src = &#39;Styles/Images/mario.jpeg&#39;;<br /><br />imagen.onload = function &#40;&#41; {<br />      ctx.drawImage&#40;imagen, 30, 30, 80, 130&#41;;<br />}</pre><br /><br />Las primeras dos lineas de codigo son iguales que si fueramos a dibujar un rectangulo, luego lo que necesitamos hacer es crear un objeto de tipo Image, a ese objeto le asignamos la ruta de la imagen por medio de la propiedad src.<br /><br />Luego es necesario asignar el metodo .onload, el cual se ejecutara una vez la imagen este cargada, esta parte es indispensable o sino la imagen no se cargaria en algunos navegadores. Al final se veria asi:<br /><br /><img src="http://1.bp.blogspot.com/-gn9J8jwJLNk/UOYWOaBYR2I/AAAAAAAAARE/_HYkUwHy8hE/s1600/canvas6.PNG" alt="Imagen" /><br /><br />Y eso es todo por hoy, un pequeña introduccion al elemento canvas, espero que haya sido de utilidad. Si quieren saber mas pueden visitar mi pagina <!-- m --><a class="postlink" href="http://www.hacerjuegos.net">http://www.hacerjuegos.net</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3089">will21</a> — Vie Ene 04, 2013 2:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[will21]]></name></author>
<updated>2013-01-04T01:54:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1431&amp;p=9094#p9094</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1431&amp;p=9094#p9094"/>
<title type="html"><![CDATA[HTML5 y Javascript • Re: Javascript no tiene el monopolio sobre HTML5!]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1431&amp;p=9094#p9094"><![CDATA[
Que interesante, no lo sabia, pero igual me quedan mis dudas acerca del soporte, imaginate todos los problemas con ie para soportar adecuadamente html5 y css3, no me quiero ni imaginar con otro &quot;plugin&quot; adicional, igual gracias por la nota<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3089">will21</a> — Vie Ene 04, 2013 1:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[will21]]></name></author>
<updated>2013-01-04T01:51:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1490&amp;p=9093#p9093</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1490&amp;p=9093#p9093"/>
<title type="html"><![CDATA[HTML5 y Javascript • Re: [Tutorial] Mi primer juego en HTML5]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1490&amp;p=9093#p9093"><![CDATA[
Muchas gracias por compartirlo, me sera de utilidad en algunos aspectos, ahora q estoy construyendo un space invaders jejeje<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3089">will21</a> — Vie Ene 04, 2013 1:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drimboo]]></name></author>
<updated>2012-07-05T19:44:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1508&amp;p=6895#p6895</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1508&amp;p=6895#p6895"/>
<title type="html"><![CDATA[HTML5 y Javascript • www.drimboo.com - Busca colaboradores]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1508&amp;p=6895#p6895"><![CDATA[
Saludos cordiales,<br /><br />soy cofundador de <!-- m --><a class="postlink" href="http://www.drimboo.com">http://www.drimboo.com</a><!-- m -->, una start-up que plantea el desarrollo de una plataforma web en HTML5 orientado a dispositivos móviles donde, por sus características de la propuesta de valor, los juegos/mini-juegos tendrán un papel muy relevante.<br /><br />Nos gustaría generar una red de desarrolladores de juegos en HTML5 formado por profesionales y empresas que se dediquen a este tipo de negocio, así como un conjunto de programadores independientes/amateurs con buenas ideas y ganas de empezar a llevar a cabo desarrollos dentro del sector.<br /><br />Para lo programadores independientes, ofrecemos la posibilidad de conseguir notoriedad dentro del sector ya que nuestra plataforma pretende acceder a un numero elevado de usuarios a nivel nacional e internacional con una propuesta de valor sustancialmente diferente a la típica plataforma web de mini-juegos y port tanto, permitir el acceso a un segmento diferente de clientes, así como una fórmula REAL de monetizar los desarrollos hechos. Los ingresos generados por cada juego se repartirán de la forma pactada entre la plataforma y el propio desarrollador del juego. Nuestro objetivo es generar una estrategia win-win con los desarrolladores de forma muy transparente.<br /><br />Además, nuestra red de desarrolladores permitirá generar networking entre desarrolladores amateurs y profesionales.<br /><br />Si estás interesado en nuestra propuesta, estás trabajando en el desarrollo de juegos en HTML5 y te gustaría poder sacarle un beneficio real, nos gustaría conocerte! Enviános un email a <!-- e --><a href="mailto:info@drimboo.com">info@drimboo.com</a><!-- e -->. Contactaremos contigo para explicarte en detalle nuestra propuesta y, potencialmente, poder cerrar un acuerdo fructífero para ambos. <br /><br />Hasta pronto!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2629">drimboo</a> — Jue Jul 05, 2012 7:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-06-11T00:21:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1490&amp;p=6850#p6850</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1490&amp;p=6850#p6850"/>
<title type="html"><![CDATA[HTML5 y Javascript • [Tutorial] Mi primer juego en HTML5]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1490&amp;p=6850#p6850"><![CDATA[
Hola, como prometí acabo de realizar un tutorial de html5 basado en puro código funcional y probado (en firefox y chrome).<br /><br />Pueden descárgalos aquí : <a href="http://db.tt/KZx798xV" class="postlink">http://db.tt/KZx798xV</a><br /><br />El código esta comentado lo mejor que pude para hacerlo lo mas fluido posible explicando los puntos principales. Los tutoriales van desde lo mas básico hasta gestión de colisiones simples, todo lo necesario para crear un pequeño juego <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Los puntos que cubren son:<br /><br /><span style="font-weight: bold">t1</span> : <span style="font-style: italic">Creando nuestro lienzo... y HOLA MUND0</span><br /><span style="font-weight: bold">t2</span> : <span style="font-style: italic">Cargamos una imagen de fondo</span><br /><span style="font-weight: bold">t3</span> : <span style="font-style: italic">Un objeto de tipo Sprite</span><br /><span style="font-weight: bold">t4</span> : <span style="font-style: italic">Gestión -básica- del teclado</span><br /><span style="font-weight: bold">t5</span> : <span style="font-style: italic">Moviendo la nave</span><br /><span style="font-weight: bold">t6</span> : <span style="font-style: italic">Agregamos una nave enemiga</span><br /><span style="font-weight: bold">t7</span> : <span style="font-style: italic">¡¡¡COLISIONES!!!</span><br /><span style="font-weight: bold">t8</span> : <span style="font-style: italic">Grupos de colisiones</span><br /><span style="font-weight: bold">t9</span> : <span style="font-style: italic">Más grupos de colisiones, agregando varios enemigos y disparos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /></span><br /><br /><br />Esperen la segunda  y tercera parte (Audio y Animaciones respectivamente <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> )<br />Acepto criticas y sugerencias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Jun 11, 2012 12:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-06-06T05:08:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1484&amp;p=6831#p6831</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1484&amp;p=6831#p6831"/>
<title type="html"><![CDATA[HTML5 y Javascript • Re: Pequeño juego en HTML5]]></title>

<category term="HTML5 y Javascript" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=29" label="HTML5 y Javascript"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1484&amp;p=6831#p6831"><![CDATA[
<blockquote><div><cite>Mightygaver escribió:</cite><br />En un tiempo, a ver si vuelvo a pillarle gusto a programar en horas libres y me animo a presentar alguna proposición de proyecto, o bien a colaborar en alguno de los vuestros, si es que queréis aceptar a este paquete XD.<br /></div></blockquote><br /><br />¡¡¡Me parece perfecto!!!<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Jun 06, 2012 5:08 am</p><hr />
]]></content>
</entry>
</feed>