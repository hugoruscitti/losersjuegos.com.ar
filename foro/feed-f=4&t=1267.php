<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1267" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-09-08T21:30:00+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1267</id>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-08T21:30:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5918#p5918</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5918#p5918"/>
<title type="html"><![CDATA[Re: Nuevo juego: Tres en Raya]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5918#p5918"><![CDATA[
Unos amigos míos en la universidad también desarrollaron un tres en raya con el algoritmo minimax. Sin embargo yo quería algo más sencillo que pudiese crear por mi mismo en poco tiempo. Al final decidí implementar una ia que siga las normas más básicas del tres en raya: si puedes hacer tres en raya en el próximo turno, hazlo y si no puedes hacerlo asegurate de que tu oponente tampoco puede hacer tres en raya en su próximo turno. Si tu oponente tampoco puede hacer tres en raya en su próximo turno mueve la primera ficha a la primera casilla que esté vacía. Básicamente es como jugar contra un niño pequeño xD. Cuando termine el tema de la comunicación en red me plantearé mejorar la ia, por ahora tengo a medio desarrollar un método que detecta cuando el oponente está colocando sus fichas de tal forma que en el próximo turno se asegure un tres en raya y bloquee la posibilidad de que se llegue a dar ésta situación a la vez que la misma ia intenta colocar sus fichas de ésta manera. Pero tal vez en lugar de continuar por ese lado implemente el minimax, todo depende del tiempo que tenga libre xD.<br /><br />Un saludo y muchas gracias por probar el juego y comentar!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue Sep 08, 2011 9:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-09-08T20:18:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5917#p5917</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5917#p5917"/>
<title type="html"><![CDATA[Re: Nuevo juego: Tres en Raya]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5917#p5917"><![CDATA[
Si, ya lo estuve jugando y me di cuenta de eso, es interesante esa forma de jugar, pero mas aun la forma en la que se implementa la IA, hice un tres en raya que tenia IA, use min-max para la busqueda de las jugadas, sin embargo en ese tipo de juego supongo que la implemenetación sera diferente pero se puede implementar, por lo que estuve jugando usaste un algoritmo simple en que se baso?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Sep 08, 2011 8:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-08T10:09:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5914#p5914</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5914#p5914"/>
<title type="html"><![CDATA[Re: Nuevo juego: Tres en Raya]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5914#p5914"><![CDATA[
Hola carlostex. Mucha gente juega al 3 en raya llenando el tablero de fichas hasta que uno gana o no caben más fichas, en cuyo caso es necesario limpiar el tablero y empezar de nuevo. Yo tengo otra forma de jugar, cada jugador solo tiene 3 fichas. Primero las fichas están fuera del tablero y los jugadores deben irlas introduciendo por turnos, una vez que un jugador tiene sus 3 fichas en el tablero entonces puede elegir una de ellas y moverla a una casilla que esté vacía, así el tablero nunca se llena de fichas y es posible seguir jugando hasta que uno de los dos gane.<br /><br />Siento no haber incluido instrucciones, añadire una pantalla de instrucciones o un pdf cuando tenga el juego totalmente terminado.<br /><br />Por si sirve de ayuda para mover las fichas hay que hacer clic en la ficha que quieres mover y luego clic en la casilla donde quieres poner la ficha. Si ya has seleccionado una ficha para moverla y quieres anular la selección simplemente haz clic fuera del tablero (sobre el fondo metálico). Si intentas mover la ficha a una casilla que ya esté ocupada también se anulará la selección.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue Sep 08, 2011 10:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-09-08T06:04:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5913#p5913</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5913#p5913"/>
<title type="html"><![CDATA[Re: Nuevo juego: Tres en Raya]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5913#p5913"><![CDATA[
por que solo me permite usar tres fichas?<br /><br />x o x<br />x x o<br />o o x<br /><br />El tablero anterior es ganador para las 'x' y se usaron mas de 3 fichas por jugador<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Sep 08, 2011 6:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-07T19:56:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5911#p5911</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5911#p5911"/>
<title type="html"><![CDATA[Nuevo juego: Tres en Raya]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1267&amp;p=5911#p5911"><![CDATA[
Ya he finalizado los modos Un Jugador y Dos Jugadores de mi tres en raya.<br /><br />Podéis descargarlo del siguiente repositorio: <a href="https://bitbucket.org/cesardc/tresenraya" class="postlink">https://bitbucket.org/cesardc/tresenraya</a><br /><br />Mañana espero implementarle la conexión por red local y dejarlo ya terminado.<br /><br />Espero que a alguien le resulten útiles el módulo de IA y el de red.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mié Sep 07, 2011 7:56 pm</p><hr />
]]></content>
</entry>
</feed>