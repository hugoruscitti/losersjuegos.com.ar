<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1010" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-26T05:46:56+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1010</id>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-26T05:46:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4891#p4891</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4891#p4891"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4891#p4891"><![CDATA[
Reviviendo el thread, mas o menos he logrado armar una pequeña funcion que dependiendo de donde toque la pelotita la pelota irar para determinada posicion con determinada fuerza, lo que me interesa saber es para lograr rebotes mas reales y aleatorios como puedo implementar desde un punto de vista matematico el tema de los angulos???, es decir que calculo deberia hacer y utilizando que valores??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Mié Ene 26, 2011 5:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-24T01:10:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4849#p4849</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4849#p4849"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4849#p4849"><![CDATA[
He logrado mejorar els istema de colisiones, hasta el punto en que casi ya no tengo problemas con eso, ahora me estoy enfocando en la parte del rebote, mi idea basicamente es que si la pelota choca contra la parte superior o inferior de la barra teoricamente deberia tomar un angulo mucho mas abierto y al mismo tomar algo mas de velocidad, mientras que si choca contra la parte central reduce un poco la velocidad y hace un angulo algo mas cerrado, pero me preocupa que como decian por ahi, quien juega no tiene el control del angulo que va a tomar la pelota, como puedo hacer para que eso pase?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Lun Ene 24, 2011 1:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-18T20:37:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4788#p4788</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4788#p4788"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4788#p4788"><![CDATA[
el problema es que no manejas bien los casos de colisiones. Creo que lo mejor es que limpies un poco el código, porque con tanto getY, getAlto etc te lías:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int barra1_arriba = miBarra.getY();<br />int barra1_abajo = miBarra.getY() + miBarra.getAlto();<br />int barra1_izq = miBarra.getX();<br />int barra1_der = miBarra.getX() + miBarra.getAncho();<br /><br />... igual para la otra barra ...<br /></code></dd></dl><br /><br />tienes que ser consistente: no puedes tener en cuenta la velocidad en algunos casos y en otros no<br /><br />- haz diagramas para aclararte: yo veo 5 situaciones posibles a tener en cuenta<br /><a href="http://img16.imageshack.us/i/sinttulobzq.png/" class="postlink"><img src="http://img16.imageshack.us/img16/4117/sinttulobzq.png" alt="Imagen" /></a><br /><br />cada vez que veas que el código no funciona, comprueba estos 5 casos, y mira que tu ejemplo los maneje bien<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Ene 18, 2011 8:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-18T19:12:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4787#p4787</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4787#p4787"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4787#p4787"><![CDATA[
Vuelvo a un problema antiguo respecto de las colisiones, basicamente lo que me gustaria es si pueden ver el codigo de colision que estoy aplicando, ya que encuentro algunos errores que no puedo resolver<br /><br />el codigo es el siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>   if((miBarra.getY()&lt;(getY()+getAlto())) &amp;&amp; (miBarra.getY()+miBarra.getAlto()&gt;getY()+getAlto()))<br />   {<br />    if(!(getX()&lt;miBarra.getX()))<br />    {<br />     if(getX()+getVelX()&lt;miBarra.getX()+miBarra.getAnc())<br />     {<br />      Sirius::reproducirSonido(1);<br />      setVelX((-1)*getVelX());<br />     }<br />    }<br />   }<br /><br />   if ((miBarra2.getY()&lt;=getY()+getAlto()+getVelY())&amp;&amp;((miBarra2.getY()+miBarra2.getAlto())&gt;=getY()+getAlto()+getVelY()))//CHOCA CONTRA BARRA DER<br />   {<br />    if(!(getX()+getAnc()&gt;miBarra2.getX()+miBarra2.getAnc()))<br />    {<br />     if(getX()+getAnc()+getVelX()&gt;miBarra2.getX())<br />     {<br />      Sirius::reproducirSonido(1);<br />      setVelX((-1)*getVelX());<br />     }<br />    }<br />   }</code></dd></dl><br /><br />Un ejemplo de los problemas que estoy sufriendo es el siguiente:<br /><br /><a href="http://img199.imageshack.us/i/ejemplope.jpg/" class="postlink"><img src="http://img199.imageshack.us/img199/56/ejemplope.jpg" alt="Imagen" /></a><br /><br />Fijense que si engancho la pelotita por la parte superior la pelota queda picando dentro de la barrita, cuando deberia picar, ese es uno de los problemas que estoy teniendo, asi que bueno estaria bueno si se pueden fijar el codigo para hacerme algun comentario de que les aprece y si quieren realizar algun cambio pueden hacerlo con total libertad<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Mar Ene 18, 2011 7:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-15T20:50:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4775#p4775</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4775#p4775"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4775#p4775"><![CDATA[
Pues que yo recuerde pocos de estos juegos he visto que aumenten de velocidad, en mi opinión prefiero que se mantenga, pero la puedes aumentar cuando choca, o por el tiempo que ha estado corriendo el juego, no se te olvide aumentar también la velocidad de las barras, no tan rápido como la pelota pero que si permita poder alcanzar la bola.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ene 15, 2011 8:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-15T20:33:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4774#p4774</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4774#p4774"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4774#p4774"><![CDATA[
y que me dicen de los cambios en la velocidad de le pelota?, se podria realizar algun calculo ahi?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Sab Ene 15, 2011 8:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-15T13:29:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4773#p4773</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4773#p4773"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4773#p4773"><![CDATA[
ya solo por hacer hincapié en lo que te han comentado.. usa el efecto de espejo que te ha comentado Carlos, o algo que se le asemeje, como por ejemplo calcular cual es el vector del centro de la bola al centro de la pala, inviertes ese vector y ya tienes la velocidad de salida<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ene 15, 2011 1:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-01-15T13:22:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4772#p4772</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4772#p4772"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4772#p4772"><![CDATA[
Hola Pablo, lo primero es que debes tener en cuenta la zona de rebote para aplicar el cambio de signo a las velocidades de la pelota, por ejemplo si la pelota choca con la pared superior o inferior del campo de juego deberás cambiar el signo de la VelY pero no de la VelX, en cambio si la pelota choca con las palas deberás cambiar tanto la VelX como la VelY. El problema es que con éste cambio de signo la trayectoria de la pelota será siempre igual partida tras partida y el jugador no tendrá ninguna influencia sobre la trayectoria. Para solucionar ésto una forma sencilla es aplicar un pequeño incremento/decremento aleatorio en el ángulo de rebote al chocar con las palas, pero ésto sigue sin permitir que el jugador influya en la trayectoria de la pelota, por eso lo mejor que puedes hacer es aplicar el consejo de carlotex y tener en cuenta el movimiento de la pala en el momento del choque para modificar el ángulo de rebote. Otra técnica muy popular es determinar en que punto de la pala se ha producido el choque y en función de eso modificar el ángulo de rebote, por ejemplo si choca justo en el centro el ángulo de rebote será igual que el ángulo de incidencia, pero cuanto más hacia los extremos de la pala se produzca el choque mayor incremento/decremento se aplicará al ángulo de rebote<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Sab Ene 15, 2011 1:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-15T06:19:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4771#p4771</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4771#p4771"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4771#p4771"><![CDATA[
Bueno, aleatorio no creo que sea muy bueno, cuando jugaba este juego sabia que movimiento hacer para que la pelota valla por donde yo quiera, así es mas interesante pensar en estrategias para hacer perder al otro.<br />Lo que podrías hacer es tomar a la barra como un espejo, supón que la barra esa fija y la pela choca en ella con un ángulo de 30°, pues lo que arias es espejar ese ángulo, si pones como origen el punto donde choca solo seria cambiar el cuadrante.<br />pero si la barra se mueve puedes aumentar unos grados el angulo al espejar, un aumento en el mismo lado.<br />la facilidad con que hagas eso depende de la forma en la que hagas tu animaciones, también hice un juego que tiene un motor, y manejaba las velocidades como un vector, de esa forma creo que es mas facil , solo cambiar el angulo.<br />Solo es imaginarse las cosas y pensar un poco en la matemática para que salga.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ene 15, 2011 6:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-15T01:57:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4770#p4770</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4770#p4770"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4770#p4770"><![CDATA[
Prefecto! era eso, ahora tengo otro problema y es con respecto a los rebotes de la pelotita cuando se produce la colision, basicamente me fije en internet y en algunos libros y me recomendaban que cuando la pelota chocara contra algunas de las barras la direccion que deberia tomar seria la contraria a la direccion de la que proviene, lo que quiero decir es que si la pelota viene avanzando en sentido positivo de X, yo tengo que cambiar ese sentido cambiandole el signo al X para que vaya en sentido inverso<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>  if(getX()-10&lt;miBarra.getX()+miBarra.getAnc())<br />  {<br />   Sirius::reproducirSonido(1);<br />   setVelX((-1)*getVelX());<br />  }</code></dd></dl><br /><br />fijense en ese pedazo de codigo, si la pelota colisiona con la barra, simplemente lo que hago es cambiar el sentido de X, y la Y la mantengo igual, lo que hace que nada mas la pelota pueda tomar un rebote en forma de &quot; V &quot;,me fije en internet y algunos utilizan un random para el rebote de la pelotita, como seria eso??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Sab Ene 15, 2011 1:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-15T01:10:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4769#p4769</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4769#p4769"/>
<title type="html"><![CDATA[Re: Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4769#p4769"><![CDATA[
El tema es que tienes que tratar las 2 colisiones por separado. Te explico la situación de la imagen que has comentado, con respecto a tu código:<br /><br />primero compruebas si está a la altura de alguno de los dos palos( si, está a la altura del izquierdo)<br /><br />luego compruebas a ver si está a la izquierda del palo izquierdo, que en este caso es no<br />Compruebas si está a la derecha del palo derecho, y aquí sale el fallo, ya que si que está a la derecha.<br /><br />El tema sería separar las condiciones:<br /><br />- Está a la altura de la barra1? Y está a la izquierda de la barra 1? hay colision<br />- Si no está a la altura de la barra1, está a la altura de la barra2? Y está a su derecha? hay colision<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ene 15, 2011 1:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-15T00:57:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4768#p4768</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4768#p4768"/>
<title type="html"><![CDATA[Colisiones en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1010&amp;p=4768#p4768"><![CDATA[
Ultimamente estube haciendo un pequeño Pong en SDL y me encuentro ante un importante problema con las colisiones, basicamente el punto es que cada vez que la bola va hacia un lado de la pantalla en la cual del otro lado se encuentra posicionada la otra barra, se genera una colisione (en la imagen lo van a ver perfectamente)<br /><br /><a href="http://img121.imageshack.us/i/colision.jpg/" class="postlink"><img src="http://img121.imageshack.us/img121/1529/colision.jpg" alt="Imagen" /></a><br /><br />Este es el codigo que controla la colision, donde miBarra es la barra de la izquierda, miBarra2 es la de la derecha, y los demas metodos son propios del objeto pelota<br /><br />Como pueden ver en el codigo lo que estoy haciendo es verificar si la pelota se encuentra dentro del rango de alguna de las barras y si es asi verifico si choco contra alguna<br /><br />Sirius es el nombre de una clase que cree a modo de game engine<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> if((miBarra.getY()&lt;=getY() &amp;&amp; (miBarra.getY()+miBarra.getAlto())&gt;=getY()+getAlto())//CHOCA CONTRA BARRA<br />    || (miBarra2.getY()&lt;=getY())&amp;&amp;<br />    ((miBarra2.getY()+miBarra2.getAlto())&gt;=getY()+getAlto()))<br /> {<br />  if(getX()-10&lt;miBarra.getX()+miBarra.getAnc())<br />  {<br />   Sirius::reproducirSonido(1);<br />   setVelX((-1)*getVelX());<br />  }<br />  else<br />  {<br />   if(getX()+getAnc()+getVelX()+10&gt;miBarra2.getX())<br />   {<br />    Sirius::reproducirSonido(1);<br />    setVelX((-1)*getVelX());<br />   }<br />  }<br /> }</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Sab Ene 15, 2011 12:57 am</p><hr />
]]></content>
</entry>
</feed>