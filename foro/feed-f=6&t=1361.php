<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1361" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-02-11T20:04:06+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1361</id>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2012-02-11T20:04:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6513#p6513</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6513#p6513"/>
<title type="html"><![CDATA[Re: PROBLEMA ILOGICO...  No available video device]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6513#p6513"><![CDATA[
este tema viejo... pero por si alguien tiene el problema comento como lo solucione...<br /><br />a pygame, resulto que por alguna extraña razon (desconozco)... solo me ejecutba los codigos que tenian resoluciones mayores a 480x340.... (lo digo desconozco el porque)...<br /><br />y con SDL, que lo utilizaba con C (no con python, perdon por no decirlo)... el problema estaba en la compilacion... casi siempre uso los makefile, y con $ make compilo... pero resulta que si el makefile tenia algun contenido como este (los marcados en rojo):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>CFLAGS=`sdl-config --cflags` -Wall -ggdb3<br />LDFLAGS=`sdl-config --cflags` -lSDL_image<br />CC = g++<br /><br />all: ejemplo<br />ejemplo: ejemplo1.o ejemplo2.o<br /><br />clean:<br />   $(RM) *.o ejemplo<br /></code></dd></dl><br /><br />me tiraba ese error, debia dejarlo asi (sacar 2 cosas y cambiar las LDFLAGS y CFLAGS):<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>CFLAGS=`sdl-config --cflags` -Wall -g<br />LDFLAGS=-lSDL -lSDL_image<br /><br />ejemplo: ejemplo1.o ejemplo2.o<br /><br />clean:<br />   $(RM) *.o ejemplo<br /></code></dd></dl><br /><br />tambien desconosco el porque... solo se que si me compiladaba de la forma 2 me andaba... de la forma 1 no.... (creo que el problema era G++, con GCC si compilaba bien...)<br />en fin gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Sab Feb 11, 2012 8:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-01-10T19:10:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6393#p6393</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6393#p6393"/>
<title type="html"><![CDATA[Re: PROBLEMA ILOGICO...  No available video device]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6393#p6393"><![CDATA[
yo soy exusuario de Trisquel, tambien de la version 4. Es extraño tu problema... no te faltara alguna dependencia, porque puede que el kernel funcione bien con tu hardware, pero quizas SDL/Pygame requiere algo en medio del kernel y tu software para funcionar...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Ene 10, 2012 7:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2011-12-22T06:50:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6309#p6309</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6309#p6309"/>
<title type="html"><![CDATA[Re: PROBLEMA ILOGICO...  No available video device]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6309#p6309"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br />¿Tendrá algo que ver con el kernel?<br /><br /><br /> ¿Estás usando paquetes precompilados o compilaste SDL?<br /></div></blockquote><br /><br />Si creo que es el kernel relacionado a la parte de input y output de estos dispositivos...<br />Los paquetes los compile yo, siguiendo un orden que encontré por la pagina de &quot;loser juegos&quot;...<br /><br /><blockquote><div><cite>Geo escribió:</cite><br />¿Has checado con otros usuarios de Trisquel?<br /></div></blockquote><br /><br />La verdad he preguntado a la lista general... pero nadie me ha respondido nada...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Jue Dic 22, 2011 6:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-12-21T06:13:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6296#p6296</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6296#p6296"/>
<title type="html"><![CDATA[Re: PROBLEMA ILOGICO...  No available video device]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6296#p6296"><![CDATA[
¿Tendrá algo que ver con el kernel? ¿Estás usando paquetes precompilados o compilaste SDL?<br />¿Has checado con otros usuarios de Trisquel?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Dic 21, 2011 6:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2011-12-19T17:52:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6286#p6286</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6286#p6286"/>
<title type="html"><![CDATA[PROBLEMA ILOGICO...  No available video device]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1361&amp;p=6286#p6286"><![CDATA[
Hola gente... bueno antes que nada quiero saber si a alguno le ocurrió esto, y de casualidad (sin esperar milagros) sabe como arreglarlo...<br /><br />el tema es el siguiente, me pasa con pygame y SDL, al escribir el código, (lo que sea) y compilar en caso de SDL me compila... pero al querer ejecutar me tira este error:<br /><br /><blockquote class="uncited"><div><br />No available video device<br /></div></blockquote><br /><br />En pygame me pasa algo similar... al querer correr un programa (con libreria pygame) me tira problema en cualquier parte que tenga:<br /><blockquote class="uncited"><div><br />a- mixer<br />b- video<br /></div></blockquote><br /><br />alguno sabe porque?... mis drivers supuestamente estan... veo y escucho con el sistema en general, es mas que obvio que mis targetas andan... mmm... bueno sino a usar C+QT! ja saludos!<br /><br />EDITO:<br />utilizo trisquel 5... antes que nada... con el trisquel 4 no me ocurría esto, pero no voy a volver al 4...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Lun Dic 19, 2011 5:52 pm</p><hr />
]]></content>
</entry>
</feed>