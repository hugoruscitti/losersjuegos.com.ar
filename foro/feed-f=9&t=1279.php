<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1279" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-09-25T19:10:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1279</id>
<entry>
<author><name><![CDATA[chon27]]></name></author>
<updated>2011-09-25T19:10:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5988#p5988</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5988#p5988"/>
<title type="html"><![CDATA[Re: Duda sobre cómo estructurar un juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5988#p5988"><![CDATA[
Muchas gracias carlostex, ahora sí lo entendí.<br /><br />El problema es que no sé mucho c++, y tan sólo por no ver que eran clases singleton (no lo conocía), me fallaba todo. Tampoco había usado nunca el polimorfismo, y mis primeros intentos me fallaban por esto también. Por fin he hecho funcionar mi propio código personalizado basándome en ese tutorial.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2501">chon27</a> — Dom Sep 25, 2011 7:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-09-25T05:08:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5976#p5976</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5976#p5976"/>
<title type="html"><![CDATA[Re: Duda sobre cómo estructurar un juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5976#p5976"><![CDATA[
Pero que es lo que no entendiste el código?<br />El código es bastante simple, no usa muchas cosas.<br />fíjate de la estructura de las fuentes que descargaste va asi:<br />manejador de estados(nucleo):<br />gamestate - Es la interfaz para definir cada estado del juego<br />gameengine - Controla la ejecución de juego <br /><br />Estados:<br />introstate - hereda de gamestate para definir la interfaz.<br />Es un estado del juego, la función draw se encarga de copiar la superficie de ese estado a la superficie que se muestra,<br />en la función de eventos se recibe como referencia la clase que lo contiene(al estado) que es gameengine, esto es para que <br />se puedan agregar mas estados. Los estado los contiene un vector, el estado que se muestra es el ultimo que se agrego todos los demás están pausados, y solo se actualiza en ultimo del vector. Como no se espera que hayan estados repetidos en el vector <br />las clases de los estados son singleton, pero eso se puede omitir para hacerlo mas simple, por que no pasaría nada grave.<br />si es importante que para eso sepas sobre polimorfismo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Sep 25, 2011 5:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[chon27]]></name></author>
<updated>2011-09-24T18:00:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5975#p5975</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5975#p5975"/>
<title type="html"><![CDATA[Re: Duda sobre cómo estructurar un juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5975#p5975"><![CDATA[
Gracias por la ayuda.<br /><br />En el primer artículo no llego a entenderlo del todo. No por el inglés, si no cómo funciona. Me bajé las fuentes y vi que todas las clases de estados que haya deben tener la misma estructura. Pero como dije, no termino de comprenderlo, ¿alguien me echa una mano?<br /><br />También miré el código del juego que me habéis recomendado, pero me ha liado más...<br /><br />Igualmente seguiré revisándolo a ver si consigo entenderlo y plasmarlo.<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2501">chon27</a> — Sab Sep 24, 2011 6:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2011-09-22T09:14:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5970#p5970</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5970#p5970"/>
<title type="html"><![CDATA[Re: Duda sobre cómo estructurar un juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5970#p5970"><![CDATA[
Hola<br /><br />Otra forma de organizarlo sería mediante &quot;escenas&quot;. El menú, el juego, los créditos, cada uno sería una escena, tan solo tendrías que tener un loop que va llamando a la escena actual e ir cambiando de escena cuando sea necesario.<br /><br />Soy muy malo explicándome, es más fácil de lo que parece, echa un vistazo al código del juego Don Ceferino (<!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/juegos/ceferino">http://www.losersjuegos.com.ar/juegos/ceferino</a><!-- m -->) ahí lo tienes implementado.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Jue Sep 22, 2011 9:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-09-22T04:39:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5969#p5969</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5969#p5969"/>
<title type="html"><![CDATA[Re: Duda sobre cómo estructurar un juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5969#p5969"><![CDATA[
Lo que dices de los estados del juego es buena forma de estructurarlo, tienes un estado pausa que muestra una pantalla por ejemplo, cuando esntras a ese estado se dibuja una pantalla diferente o bien, se agrega texto, etc.<br />Mira checa esto <a href="http://gamedevgeek.com/tutorials/managing-game-states-in-c/" class="postlink">http://gamedevgeek.com/tutorials/managing-game-states-in-c/</a> te puede servir de mucho.<br />Ahora esa es una forma de manejar estado, pero los niveles no son estados.<br />En los niveles seria bueno que comente que tipo de juego haces, supongamos que es el juego de aviones típico de disparar<br />lo que cambia en cada nivel es el mapa, supongamos que los enemigos son siempre los mismos, entonces al cambiar de nivel lo único que vas a cargar es el mapa, no tienes que hacer un código diferente o un loop diferente.<br />Ahora le agregamos que en cada nivel al enemigos diferentes, bueno lo que yo aria es crear un archivo de texto o alguna estructura que indique que enemigos se muestran en cada nivel, asi tienes un archivo para cada nivel, lo que vas hacer en en el loop es que vas a leer que enemigos vas a usar para ese nivel. <br />Esto se puede volver mas complejo, supongamos que tienes misiones, y cada nivel la mision es distinta, entonces tu archivo debe contener reglas y el el loop debes poder evaluarlas, incluso puede llegar a ser que tu arhivo sea mas parecido a un script pero para eso existen lenguajes que estan orientados a esto, pero esa es otra historia, es mas complejo cuando un juego se comporta muy diferente en cada nivel.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Sep 22, 2011 4:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[chon27]]></name></author>
<updated>2011-09-21T01:13:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5961#p5961</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5961#p5961"/>
<title type="html"><![CDATA[Duda sobre cómo estructurar un juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1279&amp;p=5961#p5961"><![CDATA[
Hola,<br />soy nuevo aquí. Me registré porque quería hacer mi primer videojuego con SDL/C++. Tras leerme un tutorial y hacer mi primer &quot;mini-juego&quot; solo, me han surgido dudas acerca de cómo estructurar un videojuego extenso.<br /><br />El juego que hice es muy simple y es sólo 1 nivel, por lo que está hecho en un simple fichero &quot;main.cpp&quot; ayudado de funciones y un par de clases. Entonces me pregunto, ¿que pasaría si mi juego constara de 20 fases, todas ellas diferentes o que necesiten un tratamiento personalizado? Si lo hiciera igual, quedaría un único archivo muy extenso y poco accesible.<br /><br />He pensado, que una forma de solucionar esto pudiera ser, crear 1 objeto por cada fase/nivel o estado de juego (pausa, menú, etc...). Cada objeto tiene su propia función loop() que cree, dibuje y trate todo el estado, entonces, desde el main.cpp, dentro del gameloop principal, llamo al loop que me convenga según el estado (si está en el nivel 1; nivel1.loop(), o en pausa; pausa.loop(), etc...).<br /><br />¿Es una forma correcta de hacerlo? ¿Hay otras formas más eficientes?<br />En fin, busco un poco de ayuda sobre el tema...<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2501">chon27</a> — Mié Sep 21, 2011 1:13 am</p><hr />
]]></content>
</entry>
</feed>