<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=1080" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-17T21:31:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=1080</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-03-17T21:31:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5264#p5264</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5264#p5264"/>
<title type="html"><![CDATA[Re: Tenemos resaltador de syntaxis!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5264#p5264"><![CDATA[
<span style="font-weight: bold"><span style="text-decoration: underline">Dios te bendiga Hugo</span></span>, yo estaba maldito ya con el famoso color &quot;verde <span style="font-style: italic">le vomite</span>&quot; xD... un alivio a la vista, casi como mirar chicas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> &lt;3<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Mar 17, 2011 9:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-16T18:06:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5257#p5257</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5257#p5257"/>
<title type="html"><![CDATA[Re: Tenemos resaltador de syntaxis!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5257#p5257"><![CDATA[
Es cierto, estába tan apurado que ni cuenta me di... es cierto, tiene<br />que ser un poco mas genérico.<br /><br />Ahora puse dos nuevos elementos, &quot;codigo&quot; y &quot;ncodigo&quot;, el primero colorea<br />código en cualquier lenguaje y el segundo hace lo mismo pero colocando<br />el número de linea a la izquierda del código.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Mar 16, 2011 6:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-03-16T16:25:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5256#p5256</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5256#p5256"/>
<title type="html"><![CDATA[Re: Tenemos resaltador de syntaxis!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5256#p5256"><![CDATA[
buenas Hugo:<br /><br />Está genial el plugin, creo que es algo que facilita enormemente la legibilidad del código, además de que es más bonito, que eso siempre gusta.<br /><br />Voy a echarle un vistazo a lo que comentas de los problemillas, a ver si puedo arreglar algo.<br /><br />Otra cosa. Sugerencias:<br />- En vez de que sea un tag de python para todos los lenguajes, no se podría hacer algo que fuera más genérico, como [source], o cambiar [&quot;code&quot;][/&quot;code&quot;], aunque supongo que eso sería más dificil<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Mar 16, 2011 4:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-15T23:29:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5249#p5249</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5249#p5249"/>
<title type="html"><![CDATA[Tenemos resaltador de syntaxis!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1080&amp;p=5249#p5249"><![CDATA[
Saludos, como había visto que teníamos mucho código en python<br />(principalmente), agregué un complemento para el foro que permite colorear<br />sintaxis.<br /><br />Este complemento se activa escribiendo en los mensajes algo<br />cómo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;python&#93;codigo&#91;/python&#93;</code></dd></dl><br /><br />y entonces el código sale coloreado con la sintaxis de python, por<br />ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;&#91;python&#93;<br />pilas.iniciar()<br />pilas.fondos.Pasto()<br /><br /># Genera un texto que dice &quot;bienvenido a pilas&quot;<br />saludo = pilas.actores.Texto(&quot;¡Bienvenido a pilas!&quot;)<br /><br /># Realiza una animacion<br />saludo.escala = 0.1<br />saludo.escala = &#91;1&#93;<br />saludo.rotacion = &#91;360&#93;<br />&#91;/python&#93;</code></dd></dl><br /><br /><br />Se mostrará en el mensaje cómo:<br /><br /><pre class="prettyprint">pilas.iniciar&#40;&#41;<br />pilas.fondos.Pasto&#40;&#41;<br /><br /># Genera un texto que dice &quot;bienvenido a pilas&quot;<br />saludo = pilas.actores.Texto&#40;&quot;¡Bienvenido a pilas!&quot;&#41;<br /><br /># Realiza una animacion<br />saludo.escala = 0.1<br />saludo.escala = [1]<br />saludo.rotacion = [360]</pre><br /><br />Esto facilita un poco mas la lectura del código, y creo que<br />hace mas agradable el aspecto del sitio.<br /><br />También existe la posibilidad de mostrar los números<br />de linea, solo que hay que escribir &quot;npython&quot; en lugar de &quot;python&quot;.<br /><br /><pre class="prettyprint linenums">pilas.iniciar&#40;&#41;<br />pilas.fondos.Pasto&#40;&#41;<br /><br /># Genera un texto que dice &quot;bienvenido a pilas&quot;<br />saludo = pilas.actores.Texto&#40;&quot;¡Bienvenido a pilas!&quot;&#41;<br /><br /># Realiza una animacion<br />saludo.escala = 0.1<br />saludo.escala = [1]<br />saludo.rotacion = [360]</pre><br /><br />Es decir, con numeros cada 5 lineas (no pude modificarlo<br />para que muestre el numero en cada linea).<br /><br />Ah, por cierto, esta directiva nueva también sirve para otros<br />lenguajes, por ejemplo lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;python&#93;<br />int main(void)<br />{<br />    printf(&quot;Hola mundo\n&quot;);<br />}<br />&#91;/python&#93;<br /></code></dd></dl><br /><br />Aparece correctamente coloreado aunque sea código en C:<br /><br /><pre class="prettyprint">int main&#40;void&#41;<br />{<br />    printf&#40;&quot;Hola mundo\n&quot;&#41;;<br />}</pre><br /><br /><br />En fin, espero que les guste. Si quieren ver de dónde tomé el<br />código que colorea vean el siguiente proyecto:<br /><br /><!-- m --><a class="postlink" href="http://code.google.com/p/google-code-prettify">http://code.google.com/p/google-code-prettify</a><!-- m --><br /><br />¿alguno de ustedes sabe como hacer para que todas las lineas de código<br />muestren la numeración?, porque traté de hacer eso, pero siempre me<br />muestra en número de linea cada 5...<br />    printf(&quot;Hola mundo\n&quot;);<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Mar 15, 2011 11:29 pm</p><hr />
]]></content>
</entry>
</feed>