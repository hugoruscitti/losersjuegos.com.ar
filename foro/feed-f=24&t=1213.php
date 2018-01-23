<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1213" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-21T01:34:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1213</id>
<entry>
<author><name><![CDATA[cosarara97]]></name></author>
<updated>2011-07-21T01:34:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5741#p5741</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5741#p5741"/>
<title type="html"><![CDATA[Re: Hacer explotar lista]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5741#p5741"><![CDATA[
Anda, pues si, funciona <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />  (Ahora me toca entender como funciona, que =P)<br />Exactamente es esto:<br /><pre class="prettyprint">lista_de_bombas = [bomba_1, bomba_2, bomba_3]<br /><br />def cuando_colisionan&#40;protagonista, bomba&#41;:<br />    for bomba in lista_de_bombas:<br />        bomba.explotar&#40;&#41;</pre><br /><br />Muchas gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2469">cosarara97</a> — Jue Jul 21, 2011 1:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Aborgna]]></name></author>
<updated>2011-07-21T00:37:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5740#p5740</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5740#p5740"/>
<title type="html"><![CDATA[Re: Hacer explotar lista]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5740#p5740"><![CDATA[
¿No se puede hacer con un blucle for?<br /><br />for bomba in lista_de_bombas:<br />    explotar bomba<br /><br />O algo asi. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2440">Aborgna</a> — Jue Jul 21, 2011 12:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cosarara97]]></name></author>
<updated>2011-07-21T00:03:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5739#p5739</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5739#p5739"/>
<title type="html"><![CDATA[Hacer explotar lista]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1213&amp;p=5739#p5739"><![CDATA[
Estoy intentando completar un poco el juego aceituna vs bombas, y mi idea era que al chocar con una bomba, explotaran todas y apareciera un magnifico mensaje de Game Over en pantalla  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_twisted.gif" alt=":twisted:" title="Twisted Evil" /><br />El problema está en que yo en lugar de tener que escribir &quot;explota la bomba_1, explota la bomba_2, explota la bomba_3&quot; (pero escrito en python), quiero decirle al programa que quiero que haga explotar todas las bombas de la lista.<br />En este caso no lo necesito para nada, porque solo hay 3 bombas y puedo escribir una linea para cada una, pero si hubiera creado 25 bombas ya sería otra cosa.<br />Así que, por curiosidad, ¿Hay algún modo de hacer explotar todos los objetos de una lista? En este caso es explotar, pero también se podría aplicar a aprender una habilidad, etc.<br /><br />Gracias por adelantado  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2469">cosarara97</a> — Jue Jul 21, 2011 12:03 am</p><hr />
]]></content>
</entry>
</feed>