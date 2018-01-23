<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=403" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-11-15T17:43:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=403</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2008-11-15T17:43:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=403&amp;p=1741#p1741</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=403&amp;p=1741#p1741"/>
<title type="html"><![CDATA[Problema con SDL_Color]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=403&amp;p=1741#p1741"><![CDATA[
bueno respondiendome (cosa que es muy rara ) <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" />  <br />lo are por si alguien mas tiene alguna duda sobre el mismo problema...<br />encontre cual era el error (segundo) con respecto a lo  de la siguiente manera...<br /><blockquote class="uncited"><div><br />Aprovechando el post tambien tengo un error simple creo yo (por desgracia no he podido entender por que..)...<br />tengo una funcion en una clase que recive como parametro la url de un archivo y dos variables mas...<br />de la siguiente forma:<br />Código:<br />void clasea::cargaimg( char *url, int zoom, int alpha )<br /><br />y al pasarle como parametro la url desde otra clase y obviamente creado el objeto tambien... de la siguiente manera:<br />Código:<br />objeto.cargaimg( &quot;.http://losersjuegos.com.ar/foro/img/juego.gif&quot;, 0, 1);<br /><br />al compilar me tira el siguiente error:<br />Código:<br /> aviso: conversión obsoleta de una constante de cadena a ‘char*’<br /><br />y nueva mente solo meda el error en linux cuando lo compilo en window$ no tira ese error...<br />sera que estoy haciendo algo mal?<br /></div></blockquote><br />encontre (por suerte mia y despues de unos 1000 intentos..) que simple mente devia de poner de la siguiente manera la funcion:<br /><dl class="codebox"><dt>Code: </dt><dd><code>void clasea::cargaimg&#40; const char *url, int zoom, int alpha &#41; </code></dd></dl><br />y al pasarle el texto como cadena normal se resolvia el problema...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Sab Nov 15, 2008 5:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2008-11-13T18:05:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=403&amp;p=1739#p1739</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=403&amp;p=1739#p1739"/>
<title type="html"><![CDATA[Problema con SDL_Color]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=403&amp;p=1739#p1739"><![CDATA[
Tengo un problema al compilar unas variables SDL_Color...<br />al insertarle un valor de 3 dígitos a una variable me da error...<br />hago esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>PauseBGColor.r = 999;</code></dd></dl><br />y al compilar me sale esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>aviso: entero grande truncado implícitamente al tipo unsigned</code></dd></dl><br />y cuando en vez de darle un valor de 3 dígitos le doy uno de 1 (valor 0) dígito... no me sale ese aviso...<br />debo seguir compilando sin prestarle atención a ese aviso? o que debo de hacer para que no me de ese aviso?<br />compilo con el g++ 4.1 en ubuntu... y por alguna extraña razón cuando lo hago en window$ no me da ese error... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br />Aprovechando el post tambien tengo un error simple creo yo (por desgracia no he podido entender por que..)...<br />tengo una funcion en una clase que recive como parametro la url de un archivo y dos variables mas...<br />de la siguiente forma:<br /><dl class="codebox"><dt>Code: </dt><dd><code>void clasea::cargaimg&#40; char *url, int zoom, int alpha &#41;</code></dd></dl><br />y al pasarle como parametro la url desde otra clase y obviamente creado el objeto tambien... de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>objeto.cargaimg&#40; &quot;.http://losersjuegos.com.ar/foro/img/juego.gif&quot;, 0, 1&#41;;</code></dd></dl><br />al compilar me tira el siguiente error:<br /><dl class="codebox"><dt>Code: </dt><dd><code> aviso: conversión obsoleta de una constante de cadena a ‘char*’</code></dd></dl><br />y nueva mente solo meda el error en linux cuando lo compilo en window$ no tira ese error...<br />sera que estoy haciendo algo mal?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Nov 13, 2008 6:05 pm</p><hr />
]]></content>
</entry>
</feed>