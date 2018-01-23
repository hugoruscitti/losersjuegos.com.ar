<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=361" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-08-10T00:25:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=361</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-08-10T00:25:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1602#p1602</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1602#p1602"/>
<title type="html"><![CDATA[Hilos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1602#p1602"><![CDATA[
Hola, tengo unas pequeñas consultas para terminar el servidor de partidas en red:<br /><br />- Seria posible, de algun modo, probar el servidor usando telnet o algo asi, es mas que nada para poder ir comprobando que el servidor funciona mientras voy acabandolo y mientras hago la parte cliente en el juego que se conectara al servidor, pues aun tengo que hacer la parte cliente.<br /><br />- Como podria evitar que al usar printf el texto fuera al archivo que crea SDL para ello, y asi el texto se muestre en el modo texto, es porque el servidor lo estoi haciendo en modo texto ya que no necesita mostrar ninguna imagen pues solo se ocupa de atender a los jugadores que se conecten, y asi sin imagenes ocupa menos memoria, por ello para las cuatro o cinco lineas que tenga que mostrar lo veo mas comodo y mejor que lo haga con texto por consola.<br /><br />-  He estado mirando el enlace y lo que ha escrito hugoruscitti y tengo algunas preguntas para tenerlo todo claro, segun he estado viendo lo de el socket set solo me permite ver si hay algun socket que este generando un evento (¿con la funcion de check solo puedo ver cuantos sockets estan &quot;generando eventos&quot;?, pero entonces lo unico para lo que sirve es para descartar el comprobar socket por socket si esta generando eventos pues no aporta ninguna informacion mas, ¿esa funcion no hace nada mas que decir cuantos sockets estan generando eventos, para usar esa funcion no es mejor comprobar directamente socket por socket con la ready?); y con la funcion ready ¿solo se puede saber si un socket esta generando eventos, no se podria saber cual socket esta generando eventos por que se halla desconectado o por que envie datos de forma directa sin tener que comprobarlos uno a uno?<br /><br />- ¿Como puedo diferenciar cuando un socket genera eventos por que envia datos, porque lee datos, o por que se halla desconectado o perdido la conexion?, ¿que el cliente este leeyendo datos genera un evento o no y simplemente se mantiene el cliente a la espera de recivir datos sin que el servidor sepa que esta esperando?, ¿la dexconesion es cuando hay un error leeyendo datos enviados por el cliente verdad?, ¿si el servidor intenta leer datos del cliente antes de que este los envie, se mantiene a la espera o da error directamente?<br /><br />- Al conectar con el cliente, lo unico que se del cliente es un socket que devuelve la funcion de SDL al conectarme con el cliente, pero ¿como puedo saber la ip? la parte de a partir del numero de 32 bits sacar cada byte de la ip se como es, lo que no se es como tener ese numero de 32 bits a partir de el socket con el que el servidor se comunica con el cliente; y una ultima cosa, como puedo saber la ip del ordenador donde esta ejecutandose el servidor, porque lo intente pero claro, obtenia 0.0.0.0 y estoi segure que esa no es mi direccion ip ni en internet y en la red local, jeje, ¿podria obtener ademas de la direccion de red local (en caso que este en una red local) del ordenador donde se ejecute el servidor, la ip del ordenador visto desde internet?<br /><br />- Esto es una duda que no es que necesite resolverla para terminar el servidor de partidas pero si alguien la sabe estaria bien, ¿cuando un ordenador esta en una red local,  para conectar con el desde internet, se conecta solo con la direccion del router, o hay que mandarle informacion al router de la ip del area local con la que se quiere conectar?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Ago 10, 2008 12:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-08-07T21:28:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1599#p1599</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1599#p1599"/>
<title type="html"><![CDATA[Hilos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1599#p1599"><![CDATA[
Gracias por esta ayuda con los sockets y la atencion a varios clientes a la vez, voy a leer la documentacion del enlace y si consigo poner mi servidor a funcionar atendiendo a varios clientes de forma simultanea me puedo ocupar  despues, una vez que sepa hacerlo bien tras probarlo haciendo mi servidor, de hacer algun ejemplo, por como dices que no tienes tiempo, mas sencillo que todo un servidor completo, algo que sea mas generico por si lo quieres meter en la seccion de ejemplos. Te avisare cuando tenga un ejemplo y ya me diras como subirlo o si te lo mando por correo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Ago 07, 2008 9:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-08-07T20:04:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1596#p1596</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1596#p1596"/>
<title type="html"><![CDATA[Hilos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1596#p1596"><![CDATA[
Cuando un programa servidor requiere atender a varios clientes al mismo<br />tiempo se suele usar una función llamada &quot;select&quot;. Básicamente te permite<br />atender a todos los clientes en base a los eventos que se generan entre<br />ellos y tu programa, algo muy similar a lo que ocurre con los eventos de<br />ventana para un aplicación habitual de SDL.<br /><br />En SDL_net no hay una función &quot;select&quot;, pero en su lugar han incluido<br />&quot;Socket Set&quot; que cumplen la misma función, en la página de documentación<br />de SDL_net hay varios ejemplos de esto:<br /><br />    <!-- m --><a class="postlink" href="http://jcatki.no-ip.org:8080/SDL_net/SDL_net.html#SEC40">http://jcatki.no-ip.org:8080/SDL_net/SDL_net.html#SEC40</a><!-- m --><br /><br />lamentablemente no tengo ejemplos (ni tiempo para hacerlos) con respeto<br />a este tema, pero seguramente con un poco de paciencia puedas tenerlo<br />funcionando.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ago 07, 2008 8:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-08-07T01:45:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1591#p1591</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1591#p1591"/>
<title type="html"><![CDATA[Hilos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=361&amp;p=1591#p1591"><![CDATA[
Hola, necesito manejar hilos para una pequeña aplicacion, he pensado en usar SDL para que pueda ser portable, pero en los manuales que tengo lo unico que he encontrado es hacer que una funcion se repita cada x tiempo y yo lo que necesito es que se ejecute una sola vez, pero ademas poder usar la misma funcion en varios hilos (no me agrada la idea de copiar y pegar varias veces una misma funcion para poder usarla en diferentes hilos) y todo esto lo necesito porque estoi haciendo un juego que se pueda jugar en red (para no conectar todos los jugadores entre si todos con todos he pensado en hacer otro programa que lo ejecute solo uno y haga de servidor), y para ello estoi haciendo tambien otro programa que sera el que haga de servidor, como iniciar la escucha y la conexion con el cliente lo tengo ya manejado, la cuestion es que necesito que se puedan conectar al servidor varios jugadores a la vez, y se me ha ocurrido que una vez iniciada la escucha y tener una conexion pendiente, iniciar la conexion con el cliente en un hilo y la funcion de ese hilo se encargue de &quot;atender a dicho jugador&quot;, mientras el hilo principal sigue a la escucha y otros hilos atienden a los otros jugadores.<br /><br />Esa es una de las soluciones que se me ocurrio, otra seria que cada j¡jugador solo pueda enviar un buffer al servidor y este le responda con otro y finalize la conexion con dicho jugador para atender a los demas, pero he pensado que eso ralentizaria demasiado el funcionamiento del servidor por tener que atenderlos de uno en uno y realizando una conexion y desconexion por cada consulta de los jugadores.<br /><br />Uso SDL_net.<br /><br />¿Como puedo solucionar esto?, ¿sabeis de algunbuen manual sobre hilos en SDL?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Ago 07, 2008 1:45 am</p><hr />
]]></content>
</entry>
</feed>