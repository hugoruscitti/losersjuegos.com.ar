<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=612" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-09-15T15:39:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=612</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-09-15T15:39:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=612&amp;p=2882#p2882</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=612&amp;p=2882#p2882"/>
<title type="html"><![CDATA[Programar para red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=612&amp;p=2882#p2882"><![CDATA[
Lo primero es saber si quieres que el juego se comunique de forma cliente-servidor, o de forma directa cliente-cliente (con cliente me estoy refiriendo al juego, obviamente si se usa TCP uno debera de hacer las veces de servidor y el otro conectarse a el), o en resumidas cuentas, como quieres que se comuniquen, tambien debes pensar si prefieres la seguridad de que lo que envias llegue (TCP) o si prefieres enviar datos lo mas rapido posible, aunque eso implique que algunos se pierdan (UDP). Despues debes mirar si vas a mantener en cada cliente todo el juego completo, y coordinar lo que sucede en uno en otro y viceversa, o si sera el servidor, o el cliente que haga de servidor, el que mantenga el control de todo el juego y los demas clientes solo recivan los datos necesarios para poder mostrar en pantalla el juego y reproducir los sonidos y demas y mandar al servidor las acciones que quieren realizar para que este las refleje en el juego de forma que el resto de cliente cuando reciva los datos del servidor vea reflejadas las acciones de los demas clientes (obviamente esta segunda opcion carga todo el peso de procesar el juego en el servidor y deja a los clientes encargados unicamente de mostrar los graficos, reproducir los sonidos, leer los eventos y enviar la orden correspondiente al servidor, y poco mas).<br /><br />En cuanto a lo de saber cuando se corta la conexion y temas relacionados, primero debes de pensar si vas a usar TCP o UDP, y para poder decirte es necesario que digas si estas programando directamente los sockets a partir de bibliotecas del sistema, si estas usando una biblioteca determinada y esos detalles para poder explicarte en consecuencia al modo en que lo estes programando.<br /><br />Yo hace unos mese que programe una biblioteca con funciones de red (para manejar TCP y UDP tanto con IPv4 como con IPv6) que esta bajo la licencia GPL, por lo que si quieres puedes utilizarla (el juego en que la uses deberia ser software libre que respete la licencia GPL) o ver el codigo fuente por si te sirve de ayuda. Desde la web en la que la tengo subida puedes descargarla y descargar tambien el codigo fuente: <a href="http://www.snl.ya.st/" class="postlink">http://www.snl.ya.st/</a>.<br /><br />Espero haber sido de ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mar Sep 15, 2009 3:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[FioreT]]></name></author>
<updated>2009-08-09T17:30:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=612&amp;p=2831#p2831</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=612&amp;p=2831#p2831"/>
<title type="html"><![CDATA[Programar para red]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=612&amp;p=2831#p2831"><![CDATA[
Hola gente, <br /><br />He estado haciendo algunas cositas con openGL y C++ y hasta el momento me ha ido bastante bien. Lo que me gustaría ahora es  poder hacer un juego en red. Pero no se como hacer para que los objetos que están en diferentes procesos coordinen su estado. Mas que nada los personajes que se mueven por la pantalla. Por el momento tengo un par de sockets que se tiran cadenas entre si, podría mandar comandos por ahí, pero no se como coordinar cuando se corta la conexión y ese tipo de cosas <br /><br />¿Existe alguna técnica para manejar todo esto? ¿Me podrían pasar algo para leer?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2131">FioreT</a> — Dom Ago 09, 2009 5:30 pm</p><hr />
]]></content>
</entry>
</feed>