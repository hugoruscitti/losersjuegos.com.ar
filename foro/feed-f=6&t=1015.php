<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1015" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-20T13:37:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1015</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-20T13:37:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4803#p4803</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4803#p4803"/>
<title type="html"><![CDATA[Re: SDL_Color error de sintaxi]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4803#p4803"><![CDATA[
aah ok, pensaba que se podia hacer igual una vez declarado. Muchas gracias juanxo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Ene 20, 2011 1:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-19T17:02:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4799#p4799</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4799#p4799"/>
<title type="html"><![CDATA[Re: SDL_Color error de sintaxi]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4799#p4799"><![CDATA[
si que cambia xD<br />en la primera estás declarando y dándole valor directamente al struct, por lo que si que te deja hacer lo de {}.<br />Una vez declarado, no puedes hacer la asignación con {}, ya tiene reservado un espacio de memoria y por eso te tira el error<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Ene 19, 2011 5:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-19T15:48:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4798#p4798</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4798#p4798"/>
<title type="html"><![CDATA[SDL_Color error de sintaxi]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1015&amp;p=4798#p4798"><![CDATA[
Buenas, tengo una dudilla aver si me la podrias resolver: <br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Color color = {89,89,89}; <br />color = {67,67,67};</code></dd></dl><br /><br />Lo que quiero hacer es cambiar el color a usar, pero en la segunda linea me tira error de sintaxi &quot;{&quot;, esto por que pasa? en principio deveria funcionar no? El codigo me funciona se pongo esto en vez de la segunda linea:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>color.r = 67;<br />color.g = 67;<br />color.b = 67;</code></dd></dl><br /><br />pero me parece raro que me funcione en la primera y no en la segunda, no cambia nada xdd<br />gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Ene 19, 2011 3:48 pm</p><hr />
]]></content>
</entry>
</feed>