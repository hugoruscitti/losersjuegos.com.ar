<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1102" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-14T04:56:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1102</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-04-14T04:56:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5409#p5409</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5409#p5409"/>
<title type="html"><![CDATA[Re: Rotacion de Actor segun posicion del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5409#p5409"><![CDATA[
Si, hay otra forma de hacer lo mismo, pero requiere que tengas<br />la última versión del repositorio.<br /><br />Básicamente, la otra solución sería tener una función<br />que se ejecute cada X milisegundos, y que en cada<br />ejecución vea la posición del mouse y cambie la rotación<br />del actor:<br /><br /><pre class="prettyprint">import pilas                                                                                            <br /><br />pilas.iniciar&#40;usar_motor=&#39;pygame&#39;&#41;<br /><br />b = pilas.actores.Nave&#40;&#41;<br /><br />def mover_nave&#40;&#41;:<br />    x, y = pilas.motor.obtener_posicion_del_mouse&#40;&#41;<br />    b.rotacion = 90 -pilas.utils.obtener_angulo_entre&#40;&#40;b.x, b.y&#41;, &#40;x, y&#41;&#41;<br /><br /><br />pilas.ejecutar_cada&#40;0.05, mover_nave&#41;<br />pilas.ejecutar&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Abr 14, 2011 4:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-04-12T16:53:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5404#p5404</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5404#p5404"/>
<title type="html"><![CDATA[Re: Rotacion de Actor segun posicion del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5404#p5404"><![CDATA[
Que tal hugo, el codigo que pusiste funciona, pero a la hora de probarlo a mi me genera un retardo en el movimiento del personaje, depues de probarlo un poco.<br /><br />Habia otra manera de obtener el mismo resultado con otro codigo?, y si tambien se puede aplicar a las señales de la flechas de telado? <br /><br /><br />Es decir, estoy trantado hacer que mi personaje se direccione segun la posicion de controlador ( sea mouse o teclado)<br /><br />desde ya muchas Gracias!!!<br /><br />Excelente trabajo!!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Mar Abr 12, 2011 4:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-30T16:55:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5354#p5354</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5354#p5354"/>
<title type="html"><![CDATA[Re: Rotacion de Actor segun posicion del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5354#p5354"><![CDATA[
<blockquote><div><cite>eka escribió:</cite><br />PD: lei que SFML es mucho mas rapido que SDL, es asi? Conviene usar pySFML sobre PyGame con Pilas?<br /></div></blockquote><br /><br />Sí, efectivamente es mas rápido usar SFML en pilas, por eso es la biblioteca<br />que se elige automáticamente cuando las dos están disponibles.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Mar 30, 2011 4:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eka]]></name></author>
<updated>2011-03-30T15:50:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5353#p5353</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5353#p5353"/>
<title type="html"><![CDATA[Re: Rotacion de Actor segun posicion del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5353#p5353"><![CDATA[
Buenisimo el ejemplo muchas gracias!<br /><br />PD: lei que SFML es mucho mas rapido que SDL, es asi? Conviene usar pySFML sobre PyGame con Pilas?<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2406">eka</a> — Mié Mar 30, 2011 3:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-30T15:31:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5352#p5352</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5352#p5352"/>
<title type="html"><![CDATA[Re: Rotacion de Actor segun posicion del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5352#p5352"><![CDATA[
Hola Eka, bienvenido.<br /><br />Para hacer que un actor rote segun la posición del<br />mouse podrías usar la función &quot;obtener_angulo_entre&quot; que<br />escribo a continuación en un ejemplo.<br /><br /><pre class="prettyprint">import pilas<br />import math<br />pilas.iniciar&#40;&#41;<br /><br />def obtener_angulo_entre&#40;punto_a, punto_b&#41;:<br />    &#40;x, y&#41; = punto_a<br />    &#40;x1, y1&#41; = punto_b<br />    return math.degrees&#40;-math.atan2&#40;y1 - y, x1 -x&#41;&#41;<br /><br /><br />nave = pilas.actores.Nave&#40;&#41;<br /><br />def mover_la_nave&#40;evento&#41;:<br />    posicion_del_mouse = &#40;evento.x, evento.y&#41;<br />    posicion_de_la_nave = &#40;nave.x, nave.y&#41;<br />    nave.rotacion = 90 + obtener_angulo_entre&#40;posicion_de_la_nave, posicion_del_mouse&#41;                           <br /><br /><br />pilas.eventos.mueve_mouse.conectar&#40;mover_la_nave&#41;<br /><br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />El ejemplo muestra una nave que al mover el mouse comienza a rotar, incluso<br />si pulsas el teclado mientras mueves el mouse observarás que la nave<br />respeta las dos órdenes.<br /><br />En cuanto tenga un tiempo libre voy a colocar esa función de rotación dentro<br />de pilas, para que sea mas sencilla utilizarla... Ah, también voy a escribir<br />algo del evento pycamp, donde trabajamos un montón en pilas...<br /><br />Contanos si el ejemplo te sirve, o si quieres que te ayudemos en algo más.<br />Gracias por usar pilas !!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Mar 30, 2011 3:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eka]]></name></author>
<updated>2011-03-30T09:31:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5351#p5351</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5351#p5351"/>
<title type="html"><![CDATA[Rotacion de Actor segun posicion del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1102&amp;p=5351#p5351"><![CDATA[
Holas! Soy nuevo en el foro, pero visito la pagina  desde hace mucho.<br /><br />Pilas version Python<br /><br />Queria saber como hacer que un actor rote segun la posicion del cursor del mouse.<br /><br />Gracias por Pilas!<br /><br />Saludos<br /><br />Eka<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2406">eka</a> — Mié Mar 30, 2011 9:31 am</p><hr />
]]></content>
</entry>
</feed>