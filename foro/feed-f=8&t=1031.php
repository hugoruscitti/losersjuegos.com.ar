<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1031" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-29T06:59:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1031</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-29T06:59:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1031&amp;p=4940#p4940</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1031&amp;p=4940#p4940"/>
<title type="html"><![CDATA[Re: Librerias en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1031&amp;p=4940#p4940"><![CDATA[
Cuando haces un include el precompilador copia el código del include y lo pega al archivo donde se llamo al include.<br />Así como lo estás pensando esta bien, tienes un archivo engine.h en el llamas a audio.h, graficos.h, etc. en engine.h podrás usar todo las funciones que tengas en esos archivos y supongamos que engine.h es incluido en el archivo game.h en el archivo game.h podras hacer uso de las funciones de engine.h y de todas la bibliotecas que ya incluiste, por lo que esto puede causar problemas por que el compilador no dejará que definas dos veces una función o clase, para eso se usan las directivas del precompilador.<br />en todos los include que tengas pones los siguiente. (por ejemplo el archivo audio.h)<br />#ifndef AUDIO_H<br />#define AUDIO_H<br /><br />tu código<br /><br />#endif<br /><br />a cada archivo le pones un define que tu quieras así evitas duplicar definiciones.<br />y por ultimo eso de los namespace no sirve para esto, los namespace sirven para evitar que los nombres de funciones o clases se repitan un ejemplo burdo: supón que creas una función que se llame cout para imprimir un texto en tu juego pero claro dependiendo de las mañas de cada programador pone al principio <dl class="codebox"><dt>Code: </dt><dd><code>use namespace std</code></dd></dl> esto puede crear un conflicto de nombres(suponiendo que el compilador detectó una ambigüedad que le impidió sobrecargar las funciones).<br />La manera de resolverlo es que tu declares un espacio de nombres que contenga esa función, de hecho lo recomendable es declarar un espacio de nombres para todo tu engine.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ene 29, 2011 6:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-29T05:50:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1031&amp;p=4938#p4938</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1031&amp;p=4938#p4938"/>
<title type="html"><![CDATA[Librerias en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1031&amp;p=4938#p4938"><![CDATA[
Basicamente para mi futuro juego, tengo decidido realizar un pequeño engine grafico, pero me surgio la duda acerca de como puedo en un solo archivo header realizar el llamado a varios headers al mismo tiempo, es decir, que cuando yo llamo a la liberia engine.h, al mismo tiempo esta este inocando a la libreria audio.h, video.h, etc. y de esta manera poder generar objetos con todas las clases que estas librerias a las que llamo mediante engine.h, creo que se puede realizar mediante el uso de namespaces pero no estoy muy seguro, si alguno me puede dar una mano le estaria agradecido.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Sab Ene 29, 2011 5:50 am</p><hr />
]]></content>
</entry>
</feed>