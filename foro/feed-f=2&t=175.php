<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=175" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-10-20T20:54:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=175</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2007-10-20T20:54:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=639#p639</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=639#p639"/>
<title type="html"><![CDATA[Expansión 1: Lanzamiento de misil]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=639#p639"><![CDATA[
El tiro de una circunferencia puede servir para juegos de pelotas y cosas parecidas pero si lo que queremos lanzar es un misil, no basta solo con el código anterior. Para darle un mínimo de realismo, la dirección del misil tiene que ser la misma que el vector velocidad. Esto se puede conseguir añadiendo unas lineas al código, en bucle principal (Repasar el punto 3.4: De coordenadas cartesianas a polares):<br /><dl class="codebox"><dt>Code: </dt><dd><code>angulo = atan&#40; -velocidad&#91;1&#93; / velocidad&#91;0&#93;&#41;<br />centro_original = proyectil_rect.center<br />proyectil = pygame.transform.rotate &#40; proyectil_original, degrees&#40;angulo&#41;&#41;<br />proyectil_rect = proyectil.get_rect&#40;&#41;<br />proyectil_rect.center = centro_original</code></dd></dl><br /><br />Y hacer una copia al cargar la imagen:<br /><dl class="codebox"><dt>Code: </dt><dd><code>proyectil_original = proyectil.copy&#40;&#41;</code></dd></dl><br /><br />El código completo quedaría así:<br /><img src="http://ciberia.ya.com/dvddvddvd/misil.png" alt="Imagen" /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import *<br />from math import sin, cos, atan, radians, degrees<br /><br />gravedad = 0.2<br />velocidad_inicial = 12.5<br />angulo_inicial = 45<br />posicion_inicial = &#91;50, 550&#93;<br /><br />def main&#40;&#41;:<br />   pygame.init&#40;&#41;<br />   screen = pygame.display.set_mode &#40;&#40;800,600&#41;&#41;<br />   proyectil = pygame.image.load&#40;&quot;misil.png&quot;&#41;.convert_alpha&#40;&#41;<br />   proyectil_original = proyectil.copy&#40;&#41; # Hace una copia de la imagen proyectil<br />   proyectil_rect = proyectil.get_rect&#40;&#41;<br />   <br />   proyectil_rect.center = posicion_inicial<br />   <br />   velocidad_inicial_x = cos&#40;radians&#40;angulo_inicial&#41;&#41; * velocidad_inicial<br />   velocidad_inicial_y = sin&#40;radians&#40;angulo_inicial&#41;&#41; * velocidad_inicial<br />   velocidad_x = +velocidad_inicial_x<br />   velocidad_y = -velocidad_inicial_y<br />   velocidad = &#91;velocidad_x, velocidad_y&#93;<br />   <br />   clock = pygame.time.Clock&#40;&#41;<br />   while True:<br />      clock.tick&#40;60&#41;<br />      <br />      # Da el angulo en radianes de la direccion del vector velocidad<br />      angulo = atan&#40; -velocidad&#91;1&#93; / velocidad&#91;0&#93;&#41;<br />      # Se guarda la situcion del centro de la imagen<br />      centro_original = proyectil_rect.center<br />      # Gira la imagen el angulo obtenido<br />      proyectil = pygame.transform.rotate &#40; proyectil_original, degrees&#40;angulo&#41;&#41;<br />      # Modifica el rectangulo respecto a las nuevas dimensiones de la imagen<br />      proyectil_rect = proyectil.get_rect&#40;&#41;<br />      # Situa el centro del rectangulo donde estaba antes de ser girado<br />      proyectil_rect.center = centro_original<br />      <br />      velocidad&#91;1&#93; += gravedad<br />      proyectil_rect.center = &#91;proyectil_rect.center&#91;0&#93; + velocidad&#91;0&#93;, proyectil_rect.center&#91;1&#93; + velocidad&#91;1&#93;&#93;<br />      <br />      screen.fill&#40;&#40;0,0,0&#41;&#41;<br />      screen.blit &#40;proyectil, proyectil_rect&#41;<br />      pygame.display.update&#40;&#41;<br /><br />if __name__ == '__main__': main&#40;&#41;<br /></code></dd></dl><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Oct 20, 2007 8:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2007-10-16T14:45:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=608#p608</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=608#p608"/>
<title type="html"><![CDATA[Información y programación del tiro parabólico (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=608#p608"><![CDATA[
<blockquote><div><cite>julen26 escribió:</cite><br />Realmente interesante y útil para repasar un poco sobre el tema. Bueno para los que no saben aún mucho sobre ello (cada vez tenemos programadores mas jovenes <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> ). No programo en Python pero es útil para cualquiera, sea cual sea el método.<br /></div></blockquote><br />Me alegro de ello <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br /><blockquote><div><cite>julen26 escribió:</cite><br />Yo creo que sería algo interesante comentar algo mas sobre la gravedad ademas de solamente mencionarla (al mismo tiempo que la fricción, podrías extenderlo mas adelante siendo mas detallado).<br /></div></blockquote><br />Tienes razón ese tema se tiene que tener en cuenta, y lo tenia en mente cuando hice el articulo, pero como tu bien has dicho sería una extensión del articulo, el cual lo hice con la intención de ser básico. Pero no descarto, cuando tenga tiempo, explicar la fricción con el aire y desviación del proyectil por acción del viento (como pasa en el juego de los gusanos).<br /><br /><blockquote><div><cite>julen26 escribió:</cite><br />Algo como que la gravedad actúa también con la masa del objeto haciendo que la gravedad afecte de manera diferente al objeto, el realismo en los juegos es una buena opción.<br /></div></blockquote><br />Cuidado! esta frase puede confundir, es cierto que la gravedad tiene relación con la masa pero estos casos se dan en la gravitación universal. En la Tierra si dos cuerpos no caen a la misma velocidad no es por que tengan diferente masa sino por que hay una fricción con el aire que por lo general frena mas al que tiene menos masa, aunque depende mas de la forma.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Oct 16, 2007 2:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[julen26]]></name></author>
<updated>2007-10-15T20:35:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=602#p602</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=602#p602"/>
<title type="html"><![CDATA[Información y programación del tiro parabólico (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=602#p602"><![CDATA[
Realmente interesante y útil para repasar un poco sobre el tema. Bueno para los que no saben aún mucho sobre ello (cada vez tenemos programadores mas jovenes <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> ). No programo en Python pero es útil para cualquiera, sea cual sea el método.<br /><br />Todo esta muy bien explicado, al menos no creo que nadie tuviera problemas para endenderlo. Yo creo que sería algo interesante comentar algo mas sobre la gravedad ademas de solamente mencionarla (al mismo tiempo que la fricción, podrías extenderlo mas adelante siendo mas detallado).<br />Algo como que la gravedad actúa también con la masa del objeto haciendo que la gravedad afecte de manera diferente al objeto, el realismo en los juegos es una buena opción.<br /><br />suerte!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br /><br />saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1416">julen26</a> — Lun Oct 15, 2007 8:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2007-10-15T15:09:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=601#p601</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=601#p601"/>
<title type="html"><![CDATA[Información y programación del tiro parabólico (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=175&amp;p=601#p601"><![CDATA[
INTRODUCCIÓN<br />En este articulo se explican levemente conceptos básicos de física para luego entender el código (en Python + Pygame) del lanzamiento de un proyectil simple (piedra, bala redonda de cañón...).<br /><br />CONCEPTOS BÁSICOS<br />0 Conceptos básicos en python:<br />Esta sección da información de Python que es útil para programar lo que se explica en este documento.<br />X**Y = X elevado a Y.  Por ejemplo: 2 ** 3 = 2*2*2<br />sqrt(X) = raíz cuadrada de X. Por ejemplo: sqrt(9) = 3 (ya que 3**2 = 9)<br />radians(A) Devuelve el ángulo A pasado de grados a radianes<br />degrees(A) Devuelve el ángulo A pasado de radianes a grados<br /><br />La tangente, el seno, el coseno... trabaja con el ángulo en radianes.<br />sin(A) = seno de A<br />cos(A) = coseno de A<br />tan(A) = tangente de A<br />atan(A) = arcotangente de A<br /><br />Para utilizar estas funciones hace falta importarlas del modulo math. Por ejemplo:<br />from math import sqrt, radians, cos<br /><br />1 La velocidad:<br />Es el desplazamiento en un cierto incremento de tiempo. Por ejemplo: km/h, m/s (Sistema internacional)... Pero para programar utilizaremos las unidades de píxeles / tiempo que tarda un ciclo del bucle.<br />Por lo tanto, si la velocidad es 0, el cuerpo estará quieto.<br /><br />2 Aceleración:<br />Es el incremento de velocidad en un cierto incremento de tiempo. Por ejemplo: m/s^2 (S.I.). Pero para programar utilizaremos las unidades de píxeles / tiempo que tarda un ciclo del bucle^2.<br />Por lo tanto, si la aceleración es 0, la velocidad se mantiene constante, pudiendo ser o no 0.<br /><br />3 Vectores:<br />Para hacer cálculos con la velocidad, la aceleración... es conveniente utilizar los vectores que son segmentos orientados que determinan la intensidad(modulo) y la dirección. Pueden dar la información del punto de aplicación (donde empieza), aunque puede no darse este dato y considerar el punto 0 sin importar su ubicación en el plano (vector libre).<br />Los datos del vector se pueden dar de dos maneras:  en coordenadas polares o en coordenadas cartesianas.<br /><br />3.1 En coordenadas polares:<br />Para ello es necesario el modulo (intensidad) y el ángulo que va al contrario de las agujas del reloj empezando desde donde se situaría la aguja cuando son las 3h.<br /><img src="http://ciberia.ya.com/dvddvddvd/coordenadas%20polares.png" alt="Imagen" /><br />El ángulo puede darse en radianes o grados. Dependiendo del caso ara falta uno o otro. La relación que tienen es: una circunferencia tiene 360 grados o 2*pi radianes.<br /><br />3.2 En coordenadas cartesianas:<br />Para ello es necesario dos ejes (ya que estamos en 2 dimensiones) de coordenadas. Un eje esta en posición horizontal (x) y el otro en vertical (y). El vector se descompone en la suma de dos vectores que tienen la misma dirección que los ejes de coordenadas y empiezan en un punto 0.  Por ejemplo, si tenemos un “vector x” de modulo 3 unidades y un “vector y” de 2 unidades el vector se representaría:<br /><img src="http://ciberia.ya.com/dvddvddvd/vector%20coordenadas%20cartesianas.png" alt="Imagen" /><br />Para dar estos datos de una forma mas simple se pueden dar dentro de un paréntesis con dos valores en el que, por convenio, el primer dato es el modulo del “vector x” y el segundo el del “vector y”. Por ejemplo, con los mismos datos de antes:  V = (3, 2)<br /><br />3.3 De coordenadas polares a cartesianas:<br />Si se representa un vector dadas las coordenadas polares y luego los ejes horizontal y vertical, utilizando rectas paralelas obtenemos un triangulo rectángulo (Con un ángulo recto (90º) ).<br /><img src="http://ciberia.ya.com/dvddvddvd/triangulo%20rectangulo.png" alt="Imagen" /><br />Una vez tenemos esto, el “lado y” es la componente “vector y” del vector. Y el “lado x”, “vector x”. Para obtener la longitud de estos lados se utiliza el seno y el coseno. En Python:<br />cos(a) = x / M  --&gt;  x = cos(a) * M<br />sin(a) = y / M  --&gt;  y = sin(a) * M<br /><br />3.4 De coordenadas cartesianas a polares:<br />Una vez representada la suma de las dos componentes del vector, utilizando rectas paralelas obtenemos el triangulo rectángulo (imagen anterior).<br />Para obtener el ángulo se utiliza la tangente. En Python:<br />tan(a) = y / x  --&gt;  a = atan( y / x)<br />Para obtener el módulo se utiliza el teorema de Pitágoras. En Python:<br />M**2 = x**2 + y**2  --&gt;  M = sqrt(x**2 + y**2)<br /><br />4 Elegir el punto de referencia y convenio de signos:<br />Para hacer los calculo con los componentes de los vectores (velocidad x, gravedad...) hay que ponerles signos dependiendo del sentido que tengan. Por ejemplo: si tiramos una piedra hacia arriba, la gravedad y la “velocidad y” (inicial) están en el mismo eje (el “y”) pero tienen sentidos  contrario por lo tanto uno será positivo y otro negativo.<br />En las pantallas, el punto 0 se toma en la esquina superior izquierda. El “eje x” es positivo hacia la derecha. El “eje y” es positivo hacia abajo. Si tomamos esto como referencia, una velocidad o aceleración hacia arriba es negativa, hacia abajo es positiva, hacia la izquierda es negativa y hacia la derecha, positiva.<br /><br />6 Tiro parabólico:<br />Es el lanzamiento de un proyectil(por ejemplo una piedra, una pelota... ya que si fuera algo como un misil autopropulsado, la cosa se complica mas). El movimiento se puede descomponer en dos movimientos rectilíneos, uno horizontal y otro vertical (por esa razón se trabaja con las componentes del vector). Si se considera nula la fricción con el aire, el movimiento horizontal no tiene aceleración, por lo tanto es un movimiento rectilíneo uniforme. En el movimiento vertical actúa la fuerza de la gravedad que crea una aceleración constante, por lo tanto es un movimiento rectilíneo uniformemente acelerado.<br />En el tiro parabólico la velocidad tiene un cierto ángulo sobre la recta horizontal, si el ángulo fuese 0 se le llama tiro horizontal y si fuese de 90º se le llama tiro vertical.<br /><br />CÓDIGO:<br />(Proyectil utilizado: <img src="http://ciberia.ya.com/dvddvddvd/bolap.png" alt="Imagen" /> )<br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import *<br />from math import sin, cos, radians<br /><br /># Aceleracion que produce la fuerza de la gravedad<br />gravedad = 0.2<br /><br /># Vector velocidad en coordenadas polares<br />velocidad_inicial = 12.5 # Modulo &#40;unos 63 m/s&#41;<br />angulo_inicial = 45 # Direccion<br /><br /># El punto donde comienza el movimiento el proyectil<br />posicion_inicial = &#91;50, 550&#93;<br /><br />def main&#40;&#41;:<br />   pygame.init&#40;&#41;<br />   screen = pygame.display.set_mode &#40;&#40;800,600&#41;&#41; # Define una pantalla con resolucion de 800x600<br />   proyectil = pygame.image.load&#40;&quot;bolap.png&quot;&#41;.convert_alpha&#40;&#41; # Carga la imagen<br />   proyectil_rect = proyectil.get_rect&#40;&#41; # Crea una superficie a partir de la imagen<br />   <br />   proyectil_rect.center = posicion_inicial # Situa el proyectil en su posicion inicial<br />   <br />   # Pasa de coordenadas polares a coordenadas cartesianas<br />   velocidad_inicial_x = cos&#40;radians&#40;angulo_inicial&#41;&#41; * velocidad_inicial<br />   velocidad_inicial_y = sin&#40;radians&#40;angulo_inicial&#41;&#41; * velocidad_inicial<br />   <br />   # Pone signo a las velocidades dependiendo de su direccion <br />   velocidad_x = +velocidad_inicial_x<br />   velocidad_y = -velocidad_inicial_y<br />   <br />   velocidad = &#91;velocidad_x, velocidad_y&#93; # Crea una lista con las dos componentes del vector<br />   <br />   clock = pygame.time.Clock&#40;&#41; # Se utiliza para limitar los fotogramas por segundos<br />   while True:<br />      clock.tick&#40;10&#41; # Limita la ejecucion a 10 fotogramas por segundo<br />      velocidad&#91;1&#93; += gravedad # Incrementa la velocidad con el valor de la gravedad,<br />      #                          que solo actua en la componente &quot;y&quot; &#40;acelera el cuerpo&#41;<br />      <br />      # Incrementa la posicion del cuerpo sumandole las componentes de la velocidad<br />      # Funciana igual utilizando un metodo o otro<br />      #proyectil_rect.move_ip&#40;velocidad&#91;0&#93;, velocidad&#91;1&#93;&#41;<br />      proyectil_rect.center = &#91;proyectil_rect.center&#91;0&#93; + velocidad&#91;0&#93;, proyectil_rect.center&#91;1&#93; + velocidad&#91;1&#93;&#93;<br />      <br />      <br />      # Descomentado imprime un fondo negro pero sin imprimirlo se puede apreciar mejor el movimiento<br />      #screen.fill&#40;&#40;0,0,0&#41;&#41;<br />      <br />      screen.blit &#40;proyectil, proyectil_rect&#41; # Imprime la imagen del proyectil en su posicion<br />      pygame.display.update&#40;&#41; # Actualiza la pantalla<br /><br />if __name__ == '__main__': main&#40;&#41; # Ejecuta la funcion<br /></code></dd></dl><br /><br />David Ramírez<br /><br />Se que este articulo no es perfecto así que espero vuestras críticas para poder mejorarlo entre todos. Por ejemplo: si alguna parte no quedó clara, no les pareció bien la estructura del articulo...<br />Y si tienen alguna duda les invito a postearla. Yo intentaré responderles pero si no puedo, también lo leerán otras personas que a lo mejor si pueden hacerlo.<br /><br />Espero que les haya resultado interesante y/o útil.<br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Oct 15, 2007 3:09 pm</p><hr />
]]></content>
</entry>
</feed>