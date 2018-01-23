<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=696" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-03-03T16:50:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=696</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2010-03-03T16:50:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3282#p3282</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3282#p3282"/>
<title type="html"><![CDATA[SDL_net enviar un entero]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3282#p3282"><![CDATA[
Como te han dicho, el enviar un entero supone un problema por en que sentido leera los bytes del entero la maquina que los reciva y como lo hace la que lo envia.<br /><br />Entre las opciones esta la de pasar el numero a texto, no lo recomiendo pues tendrias un byte por cada cifra del numero. Otra opcion es que en lugar de enviar un entero lo que envies sea una cadena de caracteres cuyos bytes sean los bytes del entero de forma que antes de enviarlo tendras que con un char y una operacion a nivel de bytes and obtener 8 bits del entero, desplazar el entero 8 bits, el char enviarlo o concatenarlo en una cadena de caracteres para enviarlos todos los bytes juntos, y asi obtener cada byte del entero. Esa cadena de bytes antes de enviarla se convierte a una cadena de tipo void, para no enviar chars sino datos simplemente, sin criterio alguno de si es texto, numeros o que es (de hay que al llamar a la funcion strlen delante de p-&gt;data este (char *), por como strlen recive una cadena de caracteres). Al recivir el paquete UDP, teniendo todos los bytes del entero tendras que en un entero inicializado a cero ir realizando la operacion a nivel de bits or e ir desplazando 8 bits para volver a tener el entero.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mié Mar 03, 2010 4:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2010-02-22T21:54:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3270#p3270</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3270#p3270"/>
<title type="html"><![CDATA[SDL_net enviar un entero]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3270#p3270"><![CDATA[
En teoria es posible enviar un entero, pero no es recomendable.<br /><br />Un entero es representado como una serie de bits, agrupados en paquetes de 8 bits llamados bytes. Algunas maquinas interpretan la serie de bytes leyendo de izquierda a derecha mientras que otras computadoras lo hacen al revez. (1)<br /><br />Esto plantea un grave problema, pues si envias un numero, la maquina que recibe el mensaje puede interpretarlo como otro.<br />Una solucion simple seria enviar el numero pasado a texto, y en la maquina que recibe el mensaje reintepretarlo a numero.<br /><br />Saludos<br /><br />(1) Esta diferenciacion entre maquinas se conoce como little endian y big endian. Puedes buscar una definicion mucho mas precisa de la que yo esboce en la wikipedia.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Lun Feb 22, 2010 9:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2010-02-22T19:13:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3269#p3269</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3269#p3269"/>
<title type="html"><![CDATA[SDL_net enviar un entero]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=696&amp;p=3269#p3269"><![CDATA[
Hola buenas a todos, mi problema es el siguiente:<br /><br />El ejemplo que tengo de envio de datos usando la estructura UDPpacket es el siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>UDPsocket sd;<br />IPaddress srvadd;<br />UDPpacket *p;printf&#40;&quot;Fill the buffer\n&gt;&quot;&#41;;<br /><br />...<br /><br />scanf&#40;&quot;%s&quot;, &#40;char *&#41;p-&gt;data&#41;;<br /> <br />p-&gt;len = strlen&#40;&#40;char *&#41;p-&gt;data&#41; + 1;<br />SDLNet_UDP_Send&#40;sd, -1, p&#41;; /* This sets the p-&gt;channel */</code></dd></dl><br /><br />En este ejemplo lo que enviamos son cadenas de texto.<br /><br />¿Es posible enviar tipos de datos enteros (int), o hay que hacer uso de las funciones sprintf, atoi ... para convertir el entero a cadena y viceversa?<br /><br />Mucha gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Lun Feb 22, 2010 7:13 pm</p><hr />
]]></content>
</entry>
</feed>