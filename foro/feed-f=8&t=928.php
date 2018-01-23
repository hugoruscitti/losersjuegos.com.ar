<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=928" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-22T14:31:43+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=928</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-11-22T14:31:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4451#p4451</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4451#p4451"/>
<title type="html"><![CDATA[Re: obtener un char por cada numero de un int]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4451#p4451"><![CDATA[
gracias juanxo por la ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Lun Nov 22, 2010 2:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-11-15T14:26:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4426#p4426</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4426#p4426"/>
<title type="html"><![CDATA[Re: obtener un char por cada numero de un int]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4426#p4426"><![CDATA[
se puede hacer iterativo con un while:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int numero = n;<br />vector&lt;char&gt; cadenaNum;<br /><br />while (numero &gt;= 10)<br />{<br />  cadenaNum.push_front(numero % 10)<br />  numero /= 10<br />}<br /><br />//Tenemos que añadir el ultimo número manualmente<br />cadena.push_front(numero % 10);<br /></code></dd></dl><br /><br />Si no recuerdo mal, vector no tiene un push_front porque es asquerosamente lento. Tienes varias opciones:<br />- Calcular el numero de cifras que va a tener el numero:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>cifras = 1;<br />while (numero_temp &gt;= 10)<br />{<br /> ++cifras;<br /> numero_temp /= 10;<br />}<br />cadenaNum.reserve(cifras);<br />for (int i = cifras -1; i &gt;= 0; ++i){<br />  cadenaNum&#91;i&#93; = numero % 10;<br />  numero = (numero &gt; 10) ? numero / 10 : numero;<br />}<br /></code></dd></dl><br /><br />- Almacenarlo con push_back (quedaría al reves) y luego darle la vuelta al vector<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Nov 15, 2010 2:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-11-15T13:52:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4424#p4424</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4424#p4424"/>
<title type="html"><![CDATA[obtener un char por cada numero de un int]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=928&amp;p=4424#p4424"><![CDATA[
Buenos dias, tengo una pequeña duda aver si me podeis ayudar con esto: <br /><br />Necesito mostrar en un array de caracteres un numero entero del que no se el valor. El problema es que si el numero entero es de mas de una cifra, no se como introducir cada una de las cifras en una casilla del array.<br /><br />He pensado en convertir el int a char y luego acceder a cada uno de los valores por separado, pero no se como hacerlo :S<br /><br />seria algo asi: <br /><dl class="codebox"><dt>Code: </dt><dd><code>if(numero &gt;= 0 &amp;&amp; numero &lt; 10 )<br />{<br />   char numero =numero convertido a char;<br />}<br />else if(numero &gt;= 10 &amp;&amp; numero &lt; 100)<br />{<br />   char numero1 = primera cifra convertida a char;<br />   char numero2 = segunda cifra convertida a char;<br />}<br />etc.</code></dd></dl><br /><br /><br />gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Lun Nov 15, 2010 1:52 pm</p><hr />
]]></content>
</entry>
</feed>