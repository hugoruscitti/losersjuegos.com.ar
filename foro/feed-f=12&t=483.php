<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=483" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-12T07:45:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=483</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-03-12T07:45:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2265#p2265</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2265#p2265"/>
<title type="html"><![CDATA[Personaje animado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2265#p2265"><![CDATA[
Podrías colocar un pequeño retardo antes de tomar la acción respondiendo a las teclas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue Mar 12, 2009 7:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-10T18:12:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2256#p2256</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2256#p2256"/>
<title type="html"><![CDATA[Personaje animado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2256#p2256"><![CDATA[
Buenas Carlos:<br /><br />Mi problema era(y es) que yo tngo los tiles de las animaciones en las ocho direcciones y quiero que se mueva en diagonal si pulso las dos teclas adecuadas, pero cuando lo hago, se carga primero una de las direcciones y luego la diagonal.<br /><br />Gracias por la ayuda.<br /><br />PD: escribir nunca esta de más<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Mar 10, 2009 6:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Carlos Guevara Moscol]]></name></author>
<updated>2009-03-10T17:03:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2255#p2255</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2255#p2255"/>
<title type="html"><![CDATA[Ayuda a la orden!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2255#p2255"><![CDATA[
Hola juanxo, espero comprendas que no puedo entender del todo el problema que estas experimentando, me gustaria que nos dieras mas detalle de este mismo para ver que solucion podemos darle.<br /><br />Mira, necesito saber cosas como a que velocidad se ejecuta tu juego, o mas especificamente con que frecuencia se actualiza la pantalla de tu juego porque en un juego comun y corriente se estila llevar una frecuencia de entre 30 y 50 FPS (frames per second o cuadros por segundo) con lo cual cada cuadro tiene una duracion de entre 20 ms y 33,34 ms. ahora si tu problema es que al pulsar (arriba) +(derecha) se ejecutan 2 movimientos, te comento que realmente eso es lo que ocurre siempre en los juegos mas comunes, lo que pasa es que ese &quot;primer cuadro&quot; (el que hace el movimiento que no esperamos o no queremos que haga) dura unos instantes, es cuestion de milisegundos, por lo que muchas veces no lo notamos.<br /><br />Por lo tanto, si tu problema es que se ven 2 movimientos, entonces hay que enfocarnos en eso, en &quot;¿por que se ven 2 movimientos?&quot; si normalmente el primero deberia ser tan rapido que no lo veriamos.<br /><br />Espero dejarme entender :S, el verdadero problema no es que hay 2 movimientos sino el que &quot;vemos los 2&quot; cuando no deberiamos ver el primero.<br /><br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> para esto yo veo 2 posibles causas... la primera es que tu frecuencia de muestreo es muy lenta (menos de 20 FPS) por lo que nuestro ojo tiene tiempo para notar ese primer cuadro, o primer movimiento.<br />Y la segunda es que tu personaje se desplaza mucho en cada ciclo, asi por mas que no veamos el primer cuadro si vemos que el personaje se ha desplazado en una direccion que no es la que esperabamos al comienzo y recien a partir de ahi se mueve en diagonal.<br /><br />Es por eso que te digo que necesitamos mas detalles, por favor dinos cada cuanto tiempo se actualiza tu juego, cuanto se desplaza tu personaje en cada ciclo de la animacion, y cualquier otro dato que te paresca relevante. Si esas no son las causas la cosa es mas complicada y tendriamos que examinar mas a fondo tu codigo, aunque en una primera ojeada que le he hecho al codigo que colgaste no encuentro error alguno. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> espero que todo te salga bien y que respondas tmb <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />PD: perdon si escribo demasiado pero asi soy yo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Saludos y muchos Exitos!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1896">Carlos Guevara Moscol</a> — Mar Mar 10, 2009 5:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-11T18:20:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2096#p2096</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2096#p2096"/>
<title type="html"><![CDATA[Personaje animado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2096#p2096"><![CDATA[
Si, si entiendo que es complicado que se pulsen las dos justo a la vez, pero quería saber si existía posibilidad de conseguir evitarlo.A lo mejor ralentizandolo un poco con un reloj o algún detector que salte si se pulsan los dos a la vez para evitar que se vaya a la derecha??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Feb 11, 2009 6:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-11T15:55:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2095#p2095</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2095#p2095"/>
<title type="html"><![CDATA[Re: Personaje animado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2095#p2095"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />El problema es que cuando hago las diagonales, primero me hace un movimiento hacia el lado y luego hace la diagonal.<br />el movimiento y todo lo demás me funciona bien, lo que pasa es que hace ese &quot;doble movimiento&quot;.<br /><br />¿Cómo podría evitarse esto?¿Quizás haciendo un key2?<br /></div></blockquote><br />Pues no se si lo he entendido bien, pero a mí me parece de lo más normal que primero vaya hacia un lado y luego en diagonal ya que es difícil pulsar las dos teclas en el mismo ciclo (porque dura muy poco).<br /><br />No se me ocurre como evitarlo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Feb 11, 2009 3:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-11T13:24:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2094#p2094</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2094#p2094"/>
<title type="html"><![CDATA[Personaje animado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=483&amp;p=2094#p2094"><![CDATA[
Hola a todos!! Estoy aprendiendo a usar tiles y para ello estoy tratando de hacer un soldado con espada animado,pudiendo moverse en 8 direcciones(norte,sur,este,oeste y diagonales).El problema es que cuando hago las diagonales, primero me hace un movimiento hacia el lado y luego hace la diagonal.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        key=pygame.key.get_pressed&#40;&#41;<br />        for e in pygame.event.get&#40;&#41;:<br />            if e.type==QUIT:<br />                sys.exit&#40;&#41;<br />            elif key&#91;K_RETURN&#93;:<br />                contador=-1<br />                Ataques&#40;screen,contador,orientacion,pos_image,pos_x,pos_y&#41;<br />            elif key&#91;K_RIGHT&#93; and key&#91;K_UP&#93;:<br />                contador=-1<br />                orientacion=&quot;noreste&quot;<br />                pos_x,pos_y,flagDerecha=CarreraNE&#40;screen,contador,pos_image2,pos_x,pos_y,flagDerecha&#41;<br />            elif key&#91;K_RIGHT&#93; and key&#91;K_DOWN&#93;:<br />                contador=-1<br />                orientacion=&quot;sureste&quot;<br />                pos_x,pos_y=CarreraSE&#40;screen,contador,pos_image2,pos_x,pos_y&#41;<br />            elif key&#91;K_LEFT&#93; and key&#91;K_UP&#93;:<br />                contador=-1<br />                orientacion=&quot;noroeste&quot;<br />                pos_x,pos_y=CarreraNO&#40;screen,contador,pos_image2,pos_x,pos_y&#41;<br />            elif key&#91;K_LEFT&#93; and key&#91;K_DOWN&#93;:<br />                contador=-1<br />                orientacion=&quot;suroeste&quot;<br />                pos_x,pos_y=CarreraSO&#40;screen,contador,pos_image2,pos_x,pos_y&#41;<br />            elif key&#91;K_RIGHT&#93;:<br />                contador=-1                <br />                pos_x,pos_y=CarreraDer&#40;screen,contador,pos_image2,pos_x,pos_y&#41;<br />                orientacion=&quot;este&quot;<br />            elif key&#91;K_LEFT&#93;:<br />                contador=-1<br />                orientacion=&quot;oeste&quot;<br />                pos_x,pos_y=CarreraIzq&#40;screen,contador,pos_image2,pos_x,pos_y&#41;<br />            elif key&#91;K_DOWN&#93;:<br />                contador=-1<br />                orientacion=&quot;sur&quot;<br />                pos_x,pos_y=CarreraAbj&#40;screen,contador,pos_image2,pos_x,pos_y&#41;<br />            elif key&#91;K_UP&#93;:<br />                contador=-1<br />                orientacion=&quot;norte&quot;<br />                pos_x,pos_y=CarreraArba&#40;screen,contador,pos_image2,pos_x,pos_y&#41;</code></dd></dl><br /><br />el movimiento y todo lo demás me funciona bien, lo que pasa es que hace ese &quot;doble movimiento&quot;.<br /><br />¿Cómo podría evitarse esto?¿Quizás haciendo un key2?<br /><br />Gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Feb 11, 2009 1:24 pm</p><hr />
]]></content>
</entry>
</feed>