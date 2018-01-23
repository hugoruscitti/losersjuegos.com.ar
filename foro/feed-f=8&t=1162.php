<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1162" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-31T18:39:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1162</id>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2011-05-31T18:39:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5599#p5599</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5599#p5599"/>
<title type="html"><![CDATA[Re: Problemas con la libreria SDL_Net]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5599#p5599"><![CDATA[
vale me sirve de ayuda.. lo que me comentas aunque ahora esto de internet lo dejo de banda veo que tengo un problemas mas gordo...<br /><br />estoy intentando solucionarlo.. os dejo el caso por si a alguien se le ocurre algo...<br /><br />Mi juego es un hibrido... se conecta tcp a un servidor.. el cliente crea una linia udp que el servidor la recibe y se la envia al cliente.. osea cada cliente se conecta tcp con el servidor y udp con 1 linea de escuchca a cada cliente...<br /><br />el caso esque si los clientes son localhost way.. al ser por lan no se ven.<br /><br />veo que la IPaddress que creo siempre me da como host=0; osea no me da la ip me sale el 0.. creo que ahi esta el problema que nose porque me da 0 al crear esa variable.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Mar May 31, 2011 6:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-05-31T11:05:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5598#p5598</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5598#p5598"/>
<title type="html"><![CDATA[Re: Problemas con la libreria SDL_Net]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5598#p5598"><![CDATA[
Hola vib. Nunca he utilizado SDL_Net así que no entiendo muy bien todo lo que dices en tu post, pero hace un tiempo programé un pequeño chat con las librerías de sockets de python y me funcionaba perfectamente si lo ejecutaba todo dentro de un solo equipo (IP:127.0.0.1 ) o si lo ejecutaba todo dentro de la red local utilizando IPs privadas (192.168.1.X) pero fallaba en el momento en que uno de los clientes se intentaba conectar desde otra red y por lo tanto tenia que utilizar la IP pública. Creo que ésto es lo que te ocurre a ti así que te comento.<br /><br />Cuando utilizas un router tienes dos redes: de router para adentro tienes tu red privada con tus ordenadores de casa y usando IPs 192.168.1.X, y de router para afuera tienes la red pública que básicamente es Internet. Los router utilizan un sistema llamado NAT que hace lo siguiente: el equipo PC1 quiere enviar un paquete, éste llevará por ejemplo la siguiente información &lt;IPorigen=PC1 ; PORTorigen=2000&gt; el router recibe ese paquete y lo modifica dejándolo así &lt;IPorigen=Router ; PORTorigen=3400&gt; y en una tabla interna apunta que todos los paquetes que reciba dirigidos al puerto 3400 debe reenviarlos a PC1 ; 2000.<br /><br />Verás entonces que cuando deseas utilizar la red pública los paquetes no llevan ni la IP correcta ni el PORT correcto, sino que ambos han sido modificados.<br /><br />Ésto no supone un problema cuando la comunicación se produce con un servidor de Internet, ya que éstos no utilizan NAT. En éste caso si te quieres comunicar con el servidor con IP=SERVER1 en el puerto 80 simplemente incluirás éstos datos en los campos de IPdestino y PORTdestino y puesto que el NAT solo modifica los campos de origen el paquete llegará correctamente a su destino. A su vez el servidor responderá a los datos de origen que aparezcan en el paquete, éstos si han sido modificados pero en cualquier caso se corresponden con la IP de tu router y el puerto que él halla decidido asignar por lo tanto los paquetes de respuesta llegarán correctamente a tu router y el sabrá reenviarlos a tu PC.<br /><br />El problema viene a la hora de comunicar dos equipos que usen NAT ya que ninguno de los dos sabrá a que IP y puerto debe dirigirse realmente.<br /><br />Para solucionar ésto la mayoría de aplicaciones P2P (peer to peer) como Skype utilizan intermediarios no NATeados de tal manera que la comunicación no se produce realmente de forma directa entre los dos clientes sino a través de una especie de servidor.<br /><br />De forma más casera algunos routers permiten configurar manualmente el NAT, es decir, configurar manualmente que puerto asignará el router a un determinado proceso ejecutándose en una determinada IP. Ésto hay que hacerlo para poder jugar a algunos juegos en red así que a lo mejor te suena el proceso.<br /><br />Espero haberte ayudado.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mar May 31, 2011 11:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2011-05-30T19:39:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5595#p5595</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5595#p5595"/>
<title type="html"><![CDATA[Problemas con la libreria SDL_Net]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1162&amp;p=5595#p5595"><![CDATA[
Hola a todos! como veis soy nuevo en el foro... pero no tanto en la web que me ha servido de mucha ayuda!<br /><br />Llevo unas semanas trabajando con mi projecto final de curso y lo tengo realmente muy muy guapo..<br />un juego 2d en c++ online.<br /><br />El juego ya esta echo y todo funciona de maravilla.... ahora el tema esque de hacerlo localhost.. me va de maravilla el problema lo tengo cuando quiero assignarlo para que puedas entrar desde la ip publica....<br /><br />No entiendo muy bien.<br />Cuando conecto el servidor utilizando<br />SDLNet_ResolveHost(&amp;serverIP, NULL, GAME_PORT);<br />no me contecta al puerto libre que le digo...<br />ejemplo:<br />En el ruter he abierto el puerto 30,000 .<br />game_port 30,000<br />le digo que se conecte<br />devuelvo el valor de serverIP.port y me devuelve un puerto diferente... siempre que conecto con el 30,000 me devuelve un puerto diferente pero siempre el mismo...<br />Me conecto a X puerto, y me devuelve un puerto diferente pero al asignar siempre el mismo...<br /><br />Eso ya no lo entiendo.<br /><br />2n<br />Los clientes.. simplemente les digo que se conecte al servidor... de momento uso la ip privada...<br />y el puerto que se conecta los clientes es el 0... siempre.<br /><br />Estoy a cuadros....<br /><br />Haber si me podeis echar un cablecito para poder conectarme al servidor con ip publica...<br />Pq si intento conectar directamente a mi ip publica... paff fallo de segmentacion &quot; me imagino que es porque no ve un puerto o algo&quot;<br />ni idea<br /><br />gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Lun May 30, 2011 7:39 pm</p><hr />
]]></content>
</entry>
</feed>