<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=650" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-11-06T13:50:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=650</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-11-06T13:50:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=650&amp;p=3023#p3023</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=650&amp;p=3023#p3023"/>
<title type="html"><![CDATA[No se Detiene el SDL_timerID]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=650&amp;p=3023#p3023"><![CDATA[
Creo que el inconveniente está en que utilices un bucle<br />dentro de la función que ejecutas en el temporizador.<br /><br />Si mal no entendí, tu función &quot;callback&quot; nunca regresa... por<br />eso no puedes eliminarla.<br /><br />El proceso para crear temporizadores en SDL es ligeramente<br />distinto, la función &quot;callback&quot; que pides ejecutar en un intervalo<br />de tiempo tiene que hacer una sola cosa, pero retornar pronto, <br />no puede tener ciclos infinintos o algo así.<br /><br />Cuando ejecutas AddTimer con la función, SDL almacena<br />en un vector que<br />tiene que ejecutar tu función cada &quot;n&quot; milisegundos, esa tarea<br />de ejecutar una y otra vez tiene un identificador (el que<br />retorna AddTimer). Entonces, para deterner esa tarea, simplemente<br />tienes que llamar a RemoveTime con el identificador que tenías.<br /><br />Detener una tarea es simplemente decirle a SDL: &quot;no ejecutes<br />nuevamente esta función otra vez&quot;, y SDL quita la tarea de<br />su vector y no vuelve a llamar a tu función &quot;callback&quot;...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Nov 06, 2009 1:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-11-05T21:01:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=650&amp;p=3022#p3022</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=650&amp;p=3022#p3022"/>
<title type="html"><![CDATA[No se Detiene el SDL_timerID]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=650&amp;p=3022#p3022"><![CDATA[
Hola amigos:<br /><br />bueno he creado una función que es mi callback utilizando timers sobre SDL, ahora llamo a la función callback, dentro de ella existe un ciclo infinito que es el encargado de mover un caracter del juego por tiempo indefinido, cuando mando de destruir con el SDL_RemoveTimer el timer sigue en ejecución no como detenerlo.<br /><br />diganme amigos que debo hacer.<br /><br />saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Jue Nov 05, 2009 9:01 pm</p><hr />
]]></content>
</entry>
</feed>