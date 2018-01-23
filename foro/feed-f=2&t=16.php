<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=16" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-12T21:36:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=16</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-12T21:36:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=1147#p1147</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=1147#p1147"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=1147#p1147"><![CDATA[
Una pequeña pregunta sobre TCP e UDP, no se podria aprovechar la velocidad de UDP sin necesidad de que en los momentos en que se pierden los datos, esos datos ya se den por perdidos definitivamente, me refiero a que se podria con UDP saber si los paquetes de datos han llegado o se deben volver a enviar por segunda vez (¿cuantas posibilidades hay de que se pierdan los mismos datos dos o tres veces seguidas?), seria como:<br /><br />- enviar datos del juego<br />- esperar datos muy ligeros que confirmen la recepcion<br />- si no se recibe confirmacion mandar datos ligeros &quot;preguntando&quot; por la recepcion anterior<br />- Si no se recibe respuesta o la respuesta es que no se han recibido los datos anteriores se reenvian los datos nuevamente<br />- si se ha intentado reenviar los mismos datos 2, o3 (o las veces que uno quiera) se dan como perdidos los datos o la conexion como desconectada si no se recibe ninguna respuesta<br /><br />¿algo asi o similar seria posible para, aunque los datos se perdiera, poder saber si se han perdido y reenviarlos si hace falta? ¿si algo asi fuese posible, consumiria demasiado tiempo de ejecucion y restaria velocidad a UDP o no lo aria?<br />Esta propuesta y pregunta es por curiosidad, seria interesante poder contar con velocidad y almenos saber si los datos han llegado bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Abr 12, 2008 9:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugetto]]></name></author>
<updated>2007-04-13T20:39:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=261#p261</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=261#p261"/>
<title type="html"><![CDATA[Tutorial de Sockets linux window$]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=261#p261"><![CDATA[
Aqui os dejo un pequeño pero muy bien explicado manual de comunicación de sockets en linux y window$<br /><br /><a href="http://www.arrakis.es/~dmrq/beej/index.html" class="postlink">http://www.arrakis.es/~dmrq/beej/index.html</a><br /><br />Espero que os sea de utilidad <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1162">hugetto</a> — Vie Abr 13, 2007 8:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-02-22T02:26:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=181#p181</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=181#p181"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=181#p181"><![CDATA[
Normalmente se utiliza el procolo UDP para juegos de acción, como los Shooter 3D (FPS, First Person Shooter): Quake, Unreal Tournament, etc.<br /><br />Claramente UDP es un protocolo no orientado a la conexión, pero se puede implementar un sistema similar a TCP, la ventaja es que es mucho más rápido que TCP, así que cuando queramos hacer un juego donde queremos tener resultados rápidos de lo que pasa en el mundo, es mejor usar UDP, es posible que se pierdan datos, pero no es problema, se espera el siguiente paquete y así continuamos. <br /><br />Lo importante al usar el protocolo UDP es crear un buen paquete de datos para transmitir la información del juego, esto es un punto clave. <br /><br />Frecuentemente el protocolo TCP (orientado a la conexión) se utiliza cuando queremos una conexión segura y que no exista ningún tipo de pérdida de datos. Se utiliza en juegos como Starcraft, juegos de rol o estrategia, donde la velocidad no es un punto fuerte, pero si es critico el asunto de perder información durante el juego.<br /><br />También es posible implementar un sistema híbrido que utilice tanto el protocolo TCP como UDP.<br /><br />Es cierto que es mas fácil implementar un sistema TCP en nuestro juego, y para comenzar no está mal.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Jue Feb 22, 2007 2:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fénix]]></name></author>
<updated>2007-02-21T18:59:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=180#p180</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=180#p180"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=180#p180"><![CDATA[
Estoy intentado colgar el código en algun sitio XD. Ahora mismo no tengo ningún hosting pero no temais jeje. <br /><br />En cuanto a UDP y TCP... la verdad es que aún no tengo mucho dominio sobre ese tema. Ahora mismo estoy cursando la segunda parte de redes de computadores y la verdad es que entiendo los dos protocolos y también es cierto que UDP es bastante usado (como por ejemplo en el Starcraft) para juegos, aunque UDP no garantiza la entrega de los datos ya que es un protocolo no orientado a connexión.<br /><br />TCP te permite una conexión fiable y garantiza la entrega de los datos en el mismo orden en que se enviaron. Supongo que no es la mejor manera de hacer un juego online, pero bueno es un principio jeje ^^.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=595">Fénix</a> — Mié Feb 21, 2007 6:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cristian]]></name></author>
<updated>2007-02-21T14:34:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=179#p179</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=179#p179"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=179#p179"><![CDATA[
Esperamos pronto el codigo fuente <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />me pregunto, usaste el modelo TCP? porque no UDP para este tipo de juegos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=597">cristian</a> — Mié Feb 21, 2007 2:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fénix]]></name></author>
<updated>2007-02-21T13:58:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=178#p178</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=178#p178"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=178#p178"><![CDATA[
Esto forma parte del articulo que hice para una ampliación de una asignatura...allà va:<br /><br /><span style="font-weight: bold">El juego</span><br /><br /><span style="text-decoration: underline">Introducción</span><br /><br />El juego pertenece a la familia de juegos <span style="font-style: italic">arcade</span>, como por ejemplo el mítico <span style="font-style: italic">Space Invaders</span>. En el juego movemos a nuestro jugador representado como un quadrado y disparamos a nuestro contrincante tratando de adivinar su posición.<br /><br /><span style="text-decoration: underline">La libreria ''FuncionsXarxa.h''</span><br /><br />No entraré en detalles sobre la programación del videojuego a nivel de manipulación de sprites entre otras cosas. Solo me gustaria hacer referencia a una pequeña libreria que he hecho. En esta libreria hay una serie de funciones básicas para convertir el juego en un juego multijugador online.<br /><br />Tampoco explicaré demasiado la estructura interna de estas funciones, ja que entre otras cosas hay llamadas a funciones propias de SDL_net.<br /><br /><span style="font-style: italic">La función establirServidor(IPaddress *ip)<br /></span><br /><br />Esta función se encarga, tal y como dice su nombre, de crear el servidor. De esta manera conseguimos que otro jugador nos pueda enviar datos. El puntero ip del tipo de datos IPaddress nos servirá para guardar información referente a nuestro servidor.<br /><br />A continuación abrimos el socket del servidor, utilizando la dirección ip de la máquina asi como el puerto, para poder recibir peticiones de posibles usuarios.<br /><br /><span style="font-style: italic">La funcion enviarDades(char *host,char *dades)</span><br /><br />La siguiente función envia la cadena de caracteres al host correspondiente. Para poder enviar datos primero tenemos que crear una puerta de comunicación (un socket). Entonces intentamos abrir ese socket en esa dirección, especificando el puerto donde este &quot;escuchando&quot; el servidor (es decir, el puerto donde se ha abierto el socket del servidor). Si es posible comenzamos a enviar la información a través de ese socket. Al finalizar el envio lo cerramos.<br /><br /><span style="font-style: italic">La función rebreDades(TCPsocket server,char *message)</span><br /><br />Para recibir datos primero tenemos que comprovar que haya alguien que nos quiere enviar. Gracias al socket que hemos abierto en la función &quot;establirServidor&quot; podemos aceptar peticiones. Si decidimos aceptar una petición, tendremos que crear un nuevo sockets para poder recibir los datos. Finalmente estos datos se guardan en la variable message. Observemos como necesitamos dos sockets, uno para &quot;escuchar&quot; peticiones y otro para tratarlas.<br /><br /><span style="font-weight: bold"><br />Screenshots</span><br /><br /><img src="http://es.foratdecuc.net/david/AmpliacioSdlNet.jpg" alt="Imagen" /><br /><br /><span style="font-weight: bold">Codigo Fuente</span><br /><br />Aqui teneis el código fuente <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" />, los comentarios asi como algunos nombres estan en catalán, medio mezclado en castellano jeje, alguna duda ya sabéis:<br /><br /><!-- m --><a class="postlink" href="http://es.foratdecuc.net/david/panyuFont.zip">http://es.foratdecuc.net/david/panyuFont.zip</a><!-- m --><br /><br /><span style="font-weight: bold">Ejecutables</span><br /><br />Versión Windows: <!-- m --><a class="postlink" href="http://es.foratdecuc.net/david/panyuExe.zip">http://es.foratdecuc.net/david/panyuExe.zip</a><!-- m --><br /><br />Nota: Si no tenéis con quien jugar podéis provar el juego vosotros mismos.  Debereis indicar que quereis ser el jugador 2 y la dirección de vuestro rival es localhost.<br /><br /><span style="font-weight: bold">Fuentes</span><br /><br /><!-- m --><a class="postlink" href="http://www.libsdl.org">http://www.libsdl.org</a><!-- m --> &lt;- Informació sobre la llibreria SDL<br /><!-- m --><a class="postlink" href="http://es.wikipedia.org/wiki/Socket">http://es.wikipedia.org/wiki/Socket</a><!-- m --> &lt;- Informació sobre sockets<br /><br />W. Stallings (2004). Comunicaciones y redes de computadores, 7a Edición. Pearson Prentice Hall.<br /><br />Bien, eso es todo. No he colgado la parte que explica el modelo de comunaciones TCP/IP asi como una explicación sobre sockets. Si alguien esta muy interesado siempre puede consultar los enlaces que he puesto o preguntar alguna cosa.<br /><br />P.D. Perdonad los errores ortográficos, he traducido muy deprisa. Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=595">Fénix</a> — Mié Feb 21, 2007 1:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Lugus]]></name></author>
<updated>2007-02-19T19:29:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=177#p177</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=177#p177"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=177#p177"><![CDATA[
Holas!!!<br />Acabo de registrarme, me parece interesante el tema, voy a estudiar animacion digital, pero es demasiado caro, mientras tanto kiero aprender todo lo posible, soy adicto a las mujeres y tb me gustan muxo los juegos de pc, sobre todo de estrategia. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=641">Lugus</a> — Lun Feb 19, 2007 7:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fénix]]></name></author>
<updated>2007-02-16T11:06:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=176#p176</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=176#p176"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=176#p176"><![CDATA[
Está bien, en breve pubilcaré el codigo con algunas anotaciones <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" />.<br />De hecho ya lo tengo hecho, pero tengo que traducirlo al castellano, esta en catalán jeje.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=595">Fénix</a> — Vie Feb 16, 2007 11:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cristian]]></name></author>
<updated>2007-02-15T19:29:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=175#p175</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=175#p175"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=175#p175"><![CDATA[
Yo tambien acabo de registrarme y me interesa el asunto de redes en los juegos. Podrias publicar tu codigo fuente aca mismo y explicarlo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=597">cristian</a> — Jue Feb 15, 2007 7:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Fénix]]></name></author>
<updated>2007-02-15T12:16:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=172#p172</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=172#p172"/>
<title type="html"><![CDATA[Saludos!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=172#p172"><![CDATA[
Acabo de registrarme en el portal. Veo que esta mensaje es algo antiguo aunque me ha llamado la atención.<br /><br />Hace poco hice un pequeño juego con SDL en red, utilizando SDL_net. Si alguien esta interesado podria comentar un poco como hice el juego, asi como colgar el codigo fuente.<br /><br />Saludos!.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=595">Fénix</a> — Jue Feb 15, 2007 12:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2006-10-01T17:11:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=52#p52</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=52#p52"/>
<title type="html"><![CDATA[Juego en red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=16&amp;p=52#p52"><![CDATA[
Creo que sería interesante un artículo sobre los juegos en red. No hay muchos tutoriales o artículos de este tipo y yo, muchos también, soy bastante inexperto en este tipo de cosas. A ver si alguien se anima ^^.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Dom Oct 01, 2006 5:11 pm</p><hr />
]]></content>
</entry>
</feed>