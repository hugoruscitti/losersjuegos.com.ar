<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=509" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-17T19:28:22+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=509</id>
<entry>
<author><name><![CDATA[eduard_zaraki]]></name></author>
<updated>2009-03-17T19:28:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2297#p2297</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2297#p2297"/>
<title type="html"><![CDATA[Python Pygames - ayuda con movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2297#p2297"><![CDATA[
Muchisimas gracias por sus respuestas... <br /><br />Juanxo... Por un par de semanas estare un poco ocupado pues estoy terminando este semestre en la uni, pero tenlo por seguro q checare los sprites. le eché una ojeada a las guias de &quot;graficos y animaciones&quot; y &quot;automatas y animaciones&quot; y se ven bastante bien... el semestre pasado vi teoria de automatas y fuera del analisis de gramaticas jamas pense en este uso para las transiciones de estados  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  y a pesar de q guardare el pdf, este será pa un poco mas tarde y mientras tanto empezare suave como dices, para no frustrarme  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br /><br />hugoruscitti... con respecto al juego en si, se supone q todo esta dentro de un bucle infinito [&quot;while true:&quot;] y ese actualizar_animacion() se llama una vez por personaje dentro de ese bucle?<br /><br />ah y vi q estaba la documentacion traducida pero no pude bajarla  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" />  no se si sera un problema con mi conexion  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" />  pero me bajare cuando pueda la version en ingles pues no tengo gran problema con el ingles. <br /><br />De nuevo, muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2082">eduard_zaraki</a> — Mar Mar 17, 2009 7:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-03-14T15:40:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2281#p2281</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2281#p2281"/>
<title type="html"><![CDATA[Re: Python Pygames - ayuda con movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2281#p2281"><![CDATA[
<blockquote><div><cite>eduard_zaraki escribió:</cite><br />1. ¿de alternar esas imagenes, debo hacer un sleep() o<br />delay() para q se pueda apreciar el movimiento?<br /></div></blockquote><br /><br />Es recomendable no usar delay o sleep dentro de la animaciones, porque si<br />bien resuelven el tema de la velocidad, sleep o delay harán que todo el<br />juego funcione mucho mas lento. Cuando usas estas funciones le indicas al<br />programa que se detenga por completo una determinada cantidad de milisegundos.<br /><br />Entonces, imagina que tienes 5 personajes, si todos llaman a la función<br />&quot;sleep&quot; o &quot;delay&quot;, entonces el juego parecerá muy lento.<br /><br />Una solución es tener dos variables para administrar la velocidad de<br />animación, por ejemplo una variable contador y otra con la velocidad de la<br />animación:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def actualizar_animacion&#40;self&#41;:<br />    self.contador_de_cuadros += 1<br /><br />    if self.contador_de_cuadros &gt; velocidad_de_animacion:<br />        self.contador_de_cuadros = 0<br />        self.cargar_al_siguiente_cuadro&#40;&#41;<br /></code></dd></dl><br /><br />La variable &quot;velocidad_de_animacion&quot; tiene que se un número indicando la<br />lentitud de la animación, si esta vale 50, se necesitará ejecutar 51 veces<br />este código para avanzar la animación.<br /><br />Lo bueno de esta forma es que no tendrás que detener la velocidad completa<br />del juego, y las animaciones podrán correr de manera independiente dentro<br />de la escena.<br /><br /><br /><br /><blockquote><div><cite>eduard_zaraki escribió:</cite><br />2. ¿las funciones delay() o sleep() aceptan valores decimales? es decir, no quisiera poner sleep(1) porque 1 segundo entre cada transicion me parece excesivo, y seria mejor si fuese sleep(0.5) o un valor intermedio entre cero y uno.. (puse delay y sleep porque no recuerdo si las dos funciones estan en python o solo una de ellas [es q solia trabajar en C++ y alli estaban ambas])<br /></div></blockquote><br /><br /><br />Si, las funciones están en el módulo &quot;time&quot; de pygame. Observa que el<br />argumento que reciben está medido en milisegundos, por lo que un segundo<br />se especifica con el número 1000.<br /><br />En losersjuegos hemos realizado una traducción de toda la documentación:<br /><br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/traducciones/pygame">http://www.losersjuegos.com.ar/traducciones/pygame</a><!-- m --><br /><br /><br /><blockquote><div><cite>eduard_zaraki escribió:</cite><br />Nota: iba a poner los sprites q hice en paint para probar estos moviientos pero no supe como subir las imagenes al post directo desde la pc y no a traves de algun link a imageshack o alguna de esas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /><br /></div></blockquote><br /><br />si, tienes que utilizar algún servicio que almacene la imagen y te permita<br />acceder a ella a través de un link.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Mar 14, 2009 3:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-14T15:09:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2280#p2280</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2280#p2280"/>
<title type="html"><![CDATA[Python Pygames - ayuda con movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2280#p2280"><![CDATA[
Buenas:<br />Yo no es que sea un experto en python-pygame(hombre algo se xD) pero creo que si puedo aconsejarte que no te preocupes demasiado de detalles tan pequeños, y menos al principio, ya que te llevarán mucho tiempo y realmente te frustrarás si no lo consigues(cosa que por otro lado es probable).<br /><br />Preocupate de momento por que se mueva de manera mas o menos natural en las cuatro direcciones, para lo cual te pueden venir bien los ejemplos en la web de <a href="http://www.losersjuegos.com.ar/referencia/articulos/grilla" class="postlink">Grilla</a> y <a href="http://www.losersjuegos.com.ar/referencia/articulos/automatas" class="postlink">Automatas y animaciones</a><br /><br />Por cierto, si no quieres perder tiempo haciendo tus propios sprites puedes recurrir a numerosas paginas de recursos gratuitos. Tienes varios ejemplos <a href="http://www.losersjuegos.com.ar/links" class="postlink">aquí</a> y <a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=496&amp;highlight=sprites" class="postlink">aquí</a><br /><br />Espero que estos pequeños ejemplos te ayuden y te orienten<br /><br />PD: si eres nuevo en esto de la programacion juegos, en la seccion referencia de la pagina principal hay varios articulos bastante buenos sobre como empezar.<br /><br />En pygame existe delay, pero se le pasa como parametro un numero de <span style="font-weight: bold">milesimas</span>, no de segundos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Mar 14, 2009 3:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eduard_zaraki]]></name></author>
<updated>2009-03-14T14:22:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2279#p2279</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2279#p2279"/>
<title type="html"><![CDATA[Python Pygames - ayuda con movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=509&amp;p=2279#p2279"><![CDATA[
Hola gente, muchos saludos y mis mejores deseos a la comunidad de los videojuegos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />Estoy aprendiendo (desde hace poco) a trabajar en Python y el desarrollo de juegos a traves de Pygame, hasta ahora solo se lo basico y deberia seguir practicando python antes de meterme a fondo con pygames pero no pude evitar hacerme unas preguntas sobre el movimiento de los sprites.<br /><br />digamos q cargo una imagen de fondo: &quot;mapa1.PNG&quot; y digamos q cargo un sprite q seria mi personaje y como está de frente seria &quot;personaje_frente.png&quot;. Cuando se presiona una tecla de movimiento, por ejemplo K_RIGHT  el personaje debe cambiar de sprite a uno q este mirando a la derecha &quot;personaje_derecha.png&quot;. y si sigo presionando esa tecla deberia moverse a la derecha PERO... como el personaje es humano y no un circulo o cualquier sprite q no necesite movimiento de pies, se deben alternar png`s a uno q levante el pie derecho, q esten a la misma posicion, q levante el pie izquierdo, q vuelvan a estar en la misma posicion y asi sucesivamente. <br /><br />&quot;personaje_derecha.png&quot; -&gt; &quot;personaje_derecha_PieDerecho.png&quot;-&gt; &quot;personaje_derecha.png&quot; -&gt; &quot;personaje_derechaPieIzquierdo.png&quot;<br /><br />y el movimiento se ve mas humano pues uno ve como se mueven los pies.<br /><br />Mis dudas son: <br /><br />1. ¿de alternar esas imagenes, debo hacer un sleep() o delay() para q se pueda apreciar el movimiento?<br /><br />2. ¿las funciones delay() o sleep() aceptan valores decimales? es decir, no quisiera poner sleep(1) porque 1 segundo entre cada transicion me parece excesivo, y seria mejor si fuese sleep(0.5) o un valor intermedio entre cero y uno.. (puse delay y sleep porque no recuerdo si las dos funciones estan en python o solo una de ellas [es q solia trabajar en C++ y alli estaban ambas])<br /><br />----------------------------------------------------------------------------<br />tomando la pregunta 1, seria asi?:<br /><br />def MoverX(self,aumentoX)<br />    self.posX += aumentoX<br /><br />y al invocar en el &quot;main&quot; ese metodo para un objeto seria:<br /><br />personaje.MoverX(3)<br />sleep(0.4)<br />-------------------------------------------------------------------------------<br /><br />que otras condiciones como estas deberia tomar en cuenta para el movimiento de los sprites. (todavia no me he puesto a ver las colisiones <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> )<br /><br />Nota: iba a poner los sprites q hice en paint para probar estos moviientos pero no supe como subir las imagenes al post directo desde la pc y no a traves de algun link a imageshack o alguna de esas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br /><br />de antemano, gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2082">eduard_zaraki</a> — Sab Mar 14, 2009 2:22 pm</p><hr />
]]></content>
</entry>
</feed>