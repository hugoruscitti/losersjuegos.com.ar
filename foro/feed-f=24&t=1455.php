<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1455" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-23T20:16:49+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1455</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-04-23T20:16:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1455&amp;p=6690#p6690</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1455&amp;p=6690#p6690"/>
<title type="html"><![CDATA[Re: Ayuda: creando un programa en terminal/consola]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1455&amp;p=6690#p6690"><![CDATA[
esta consulta va en esté foro? creo que no.<br />por otro lado, ya hace un tiempo estaba desarrollando un warhack, todo lo estaba haciendo con pygame, creo que por ahí tengo el código todavía xD. La mejor sugerencia que te puedo hacer es, usa un motor para juegos 2D, Pilas o PySFML o Pygame. Ya con ésto podrás manejar la entrada de datos por parte del usuario e ir presentarlé sucesos por pantalla al vuelo.<br /><br />También existe otra posibilidad y es usar <span style="font-weight: bold">select</span>, viene de manera nativa en Python, pero en windows solo es posible revisar si viene algo de <span style="font-style: italic">input</span> de sockets, no del stdin (del teclado, supongo) como en GNU u otros sistemas tipo UNIX.<br /><br />bueno, creo que sera mejor usar un motor para juegos 2D y emular ahí una &quot;terminal&quot;.<br /><br />saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Abr 23, 2012 8:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-04-22T22:22:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1455&amp;p=6687#p6687</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1455&amp;p=6687#p6687"/>
<title type="html"><![CDATA[Ayuda: creando un programa en terminal/consola]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1455&amp;p=6687#p6687"><![CDATA[
buenas.<br />hace un par de semanas empecé a jugar un juego llamado balzhur que es un MUD. Para los que no sepan, un MUD es un Multi User Dungeon (Calabozos mutiusuario) que son los antecesores de los MMORPG actuales puesto que son juegos con un entorno visual echo completamente por texto. Son juegos como en Dragons &amp; Dungeons (Dragones y calabozos) pero en una pc y con el servidor como narrador.<br />La cosa es que los programas Cliente que existen no me gustan, así que pensé: &quot;¿Por que no hago uno yo?&quot;. El problema está en como quiero hacer el cliente, puesto que quiero que se ejecute directamente en la terminal/consola del usuario, independientemente del SO; y tambien tiene que poder imprimir información en pantalla sin olvidar lo que el usuario estaba escribiendo en ese momento.<br />Modulos (estandar) para crear cosolas encontré dos: cmd y curses.<br />cmd está genial, pero no está hecho para que funcione de forma lineal, osea que hasta queel usuario no preciona la teca enter no pasa nada (o por lo menos así lo entendí), pero como se trata de un MUD, hay infomación que se esta constantemente actualizando y el usuario tiene que poder leerla al vuelo, no puede ser que no se entere de lo que sucede a su alrededor porque el programa espera su input. Por el otro lado, curses es perfecto, con la ecepción que está diseñado para que funcione en una ventana aparte de la consola del usuario, que a verdad está genial pero no es lo que busco.<br /><br />Así que mi pregunta es si saben de algún manual sobre como hacer un programa en terminal/consola; o si talves me lo pudieran explicar uds, aunque ahi se vuelve mas complicado. Lo que busco es como cambiar lo que está impreso en pantalla: no lo que se va a imprimir siguiente, para eso está print, sino que para cambiar lo que ya está impreso en pantalla. Eso y que las letras tengan color.<br /><br />Espero que se entienda, sinó me avisan y yo lo explico más a fondo.<br /><br />Saludos y gracias de antemano.<br /><br />PD: Para los que entiendan de MUDs no se preocupen, el progama incluiría Macros, timers, alias, posibemente triggers; sobre scripts no estoy seguro; y tendría un mapper escrito con pygame.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Dom Abr 22, 2012 10:22 pm</p><hr />
]]></content>
</entry>
</feed>