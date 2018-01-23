<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=952" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-03T07:01:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=952</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-03T07:01:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=952&amp;p=4540#p4540</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=952&amp;p=4540#p4540"/>
<title type="html"><![CDATA[Re: Simplificando el manejo de eventos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=952&amp;p=4540#p4540"><![CDATA[
Ese es el sistema que Juan y Yo implementamos para manejar eventos y las habilidades, pues le podemos pasar el evento y un objeto genérico, y dentro de la funcion definida se maneja el evento junto con el objeto, y el administrador de eventos llama a las funciones cuando se produce el tipo de evento.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Dic 03, 2010 7:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-03T02:52:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=952&amp;p=4539#p4539</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=952&amp;p=4539#p4539"/>
<title type="html"><![CDATA[Simplificando el manejo de eventos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=952&amp;p=4539#p4539"><![CDATA[
Buenas, esta tarde me la pasé investigando el sistema de eventos<br />y buscando una manera de hacerlo mas simple. Y creo que me<br />salió bien: ahora es mucho mas simple!!!<br /><br />A partir de ahora, si queremos decirle a pilas<br />que invoque a una función cuando se mueve el mouse<br />le podemos decir así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def mueve(evento):<br />   print evento<br /><br />pilas.eventos.mueve_mouse.conectar(mueve)<br /></code></dd></dl><br /><br />El argumento evento, es como un diccionario, pero un poquito especial<br />porque te permite acceder a sus atributos usando la sintaxis &quot;evento.x&quot;, donde<br />x en este caso puede ser &quot;dx&quot;,&quot;dy&quot;, &quot;x&quot; o &quot;y&quot;. Pero para otros<br />eventos puede ser la tecla que ha pulsado el usuario o cualquier otra cosa....<br /><br />Subí los cambios al repositorio y actualicé el manual, cualquier cosa me<br />avisan...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Dic 03, 2010 2:52 am</p><hr />
]]></content>
</entry>
</feed>