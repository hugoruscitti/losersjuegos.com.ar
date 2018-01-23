<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=1085" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-18T04:28:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=1085</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-03-18T04:28:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5279#p5279</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5279#p5279"/>
<title type="html"><![CDATA[Re: ayuda con commit de mercurial! ;(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5279#p5279"><![CDATA[
cool, gracias por el dato :3<br />como no voy a usar el <span style="font-style: italic">progress</span> y la salida coloreada (es la salida u output, no?)? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Mar 18, 2011 4:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-18T01:10:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5275#p5275</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5275#p5275"/>
<title type="html"><![CDATA[Re: ayuda con commit de mercurial! ;(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5275#p5275"><![CDATA[
Ten en cuenta que cada commit viaja con el nombre de usuario<br />que lo hace.<br /><br />Así que me recomendación es que crees un archivo llamado .hgrc en tu<br />directorio &quot;home&quot;, indicand tu nombre.<br /><br />Por ejemplo, en tu caso sería un archivo llamado /home/shackra/.hgrc, con el<br />siguiente contenido:<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;ui&#93;                                                                                                    <br />username = Shakra &lt;shackra@gmail.com&gt;<br />verbose = True<br /><br />&#91;extensions&#93;<br />progress =<br />color =<br /><br /></code></dd></dl><br /><br />Es decir, en username pones tu nombre completo y una dirección de correo, ni idea<br />si esa es tú dirección, es solo un ejemplo. Y luego en &quot;extensions&quot; tienes cosas<br />opcionales, cómo imprimir comandos en colores y mostrar una barra de progreso en comandos<br />como push o pull.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Mar 18, 2011 1:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-03-17T22:55:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5272#p5272</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5272#p5272"/>
<title type="html"><![CDATA[Re: ayuda con commit de mercurial! ;(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5272#p5272"><![CDATA[
hmmm... no, olvidadlo, ya pude xD (commit -u shackra &amp;&amp; push, eso funciono para mi).<br /><br />saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Mar 17, 2011 10:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-03-17T22:46:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5271#p5271</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5271#p5271"/>
<title type="html"><![CDATA[ayuda con commit de mercurial! ;(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1085&amp;p=5271#p5271"><![CDATA[
hola <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />sucede que deseo hacer un <span style="font-weight: bold">commit</span> a mi preciado repositorio de ejemplos de PySFML (yeah, nuevos ejemplos muy educativos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> ) <span style="font-weight: bold">push</span> no sirve para <span style="font-style: italic">subir</span> actualizar los ficheros como por ejemplo el fichero <span style="font-style: italic">ejemplo7/ejemplo7.py</span> ni remueve <span style="font-style: italic">ejemplo7.py~</span> y <span style="font-style: italic">ejemplo7.pyc</span> que están dentro de esa carpeta, con <span style="font-weight: bold">remove</span> claro esta, aun así necesito hacer el <span style="font-weight: bold">commit</span> pero no puedo, sale el siguiente mensaje de error:<br /><br /><pre class="prettyprint"><span style="color: #000000">jorge@abril:~/Gamer&#39;s Dreams/DEMOS/PySFML/ejemplos-pysfml$ hg commit<br />abort: no username supplied &#40;see &quot;hg help config&quot;&#41;</span></pre><br /><br />lo mejor de todo es que ese comando no me dice nada significativo, sé que están esos ficheros de configuración (<span style="font-style: italic">&lt;repo&gt;/.hg/hgrc</span>), lo que no sé es como escribir la configuración en él para hacer mi deseado <span style="font-weight: bold">commit</span>, aquí el fichero:<br /><br /><pre class="prettyprint">[paths]<br />default = <!-- m --><a class="postlink" href="https://bitbucket.org/shackra/ejemplos-pysfml">https://bitbucket.org/shackra/ejemplos-pysfml</a><!-- m --></pre><br /><br />¿alguna ayuda para ayudar a otros? :O<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Mar 17, 2011 10:46 pm</p><hr />
]]></content>
</entry>
</feed>