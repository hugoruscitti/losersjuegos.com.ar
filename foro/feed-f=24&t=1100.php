<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1100" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-25T22:14:30+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1100</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-25T22:14:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5343#p5343</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5343#p5343"/>
<title type="html"><![CDATA[Re: Actor Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5343#p5343"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br />ahhh no me has contestado lo de la fuente... se puede cambiar la fuente del texto??<br /></div></blockquote><br /><br />por ahora no se puede, pero voy a dar de alta el ticket para repararlo en breve. es el ticket #115<br /><br /><!-- m --><a class="postlink" href="http://www.dev-losersjuegos.com.ar/issues/115">http://www.dev-losersjuegos.com.ar/issues/115</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Mar 25, 2011 10:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-03-25T17:02:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5340#p5340</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5340#p5340"/>
<title type="html"><![CDATA[Re: Actor Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5340#p5340"><![CDATA[
Saludos <span style="font-weight: bold">Carlachacon</span>,<br />No entiendo por qué creas una función (dev_texto) para cambiar la posicion del texto, ya que lo puedes hacer así:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br /><br /><br />palabra = pilas.actores.Texto&#40;&quot;Rueda1&quot;, x = -100, y = 200&#41;<br />palabra.centro = &#40;&#39;izquierda&#39;,&#39;centro&#39;&#41;<br /><br />                                                                                                       <br />pilas.ejecutar&#40;&#41;</pre><br /><br />y si quieres automatizar pasos puedes hacerlo así (con una clase):<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br /><br />from pilas.actores import Texto<br /><br /># clase dev_texto<br /># heredamos de la clase &quot;Texto&quot; a &quot;dev_texto&quot;<br />class dev_texto&#40;Texto&#41;:<br /><br />    def __init__&#40;self, texto = &quot;texto&quot;, x=0, y=0, color = pilas.colores.blanco&#41;:<br />        Texto.__init__&#40;self, texto = texto, x=x, y=y&#41;<br />        <br />        self.escala = 1<br />        self.centro = &#40;&#39;izquierda&#39;,&#39;centro&#39;&#41;<br />    <br /><br />palabra = dev_texto&#40;&quot;Bienvenido&quot;, x = -100, y = 200&#41;<br /><br /># tambien se puede escribir esto:<br /># palabra.definir_texto&#40;&quot;cambiamos texto&quot;&#41;<br /><br />                                                                                                        <br />pilas.ejecutar&#40;&#41;</pre><br /><br /><br />Solo son sugerencias y espero que te ayuden.<br /><br />Saludos y comenta que te parecen.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Vie Mar 25, 2011 5:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-25T15:58:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5339#p5339</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5339#p5339"/>
<title type="html"><![CDATA[Re: Actor Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5339#p5339"><![CDATA[
<span style="font-weight: bold">Hola hugo</span><br /><br />trabajando con el actor Texto y con lo que te comenté en mi post anterior, me di cuenta que hay un bug.<br /><br />resulta que yo defino una función para que me devuelva el actor texto en una posición, y luego poder cambiarle Sólo el contenido, algo asi:<br /><pre class="prettyprint">def dev_texto&#40;x,y&#41;:<br />        word = pilas.actores.Texto&#40;&#41;<br />        word.x = x<br />        word.y = y<br />        word.escala = 3<br />        word.centro = &#40;&#39;izquierda&#39;,&#39;centro&#39;&#41;<br />        return word</pre><br /><br />luego lo que hago es:<br /><pre class="prettyprint">palabra = self.dev_texto&#40;-100,200&#41;<br />        palabra.definir_texto&#40;&quot;Rueda1&quot;&#41;</pre><br /><br /><br />peeeero que pasa? cuando lo ejecuto el texto cambia de centro y aparece en otra posición.<br /><br />entonces si luego de definir_texto le coloco de nuevo: <pre class="prettyprint">palabra.centro = &#40;&#39;izquierda&#39;,&#39;centro&#39;&#41;</pre>.<br /><br /><br />te lo cuento para que sepas y lo tengas en cuenta para la próxima versión de Pilas...<br /><br />ahhh no me has contestado lo de la fuente... se puede cambiar la fuente del texto??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Vie Mar 25, 2011 3:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-24T22:12:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5338#p5338</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5338#p5338"/>
<title type="html"><![CDATA[Re: Actor Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5338#p5338"><![CDATA[
Lo mas sencillo es llamar al método &quot;definir_texto&quot; en el<br />objeto actor creado, te muestro un ejemplo:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br /><br />texto = pilas.actores.Texto&#40;&quot;Bienvenido.&quot;&#41;<br /><br />def cuando_pulsa_el_boton&#40;&#41;:<br />    texto.definir_texto&#40;&quot;Has pulsado el boton&quot;&#41;<br /><br />b = pilas.actores.Boton&#40;y=-100&#41;<br />b.conectar_presionado&#40;cuando_pulsa_el_boton&#41;<br />                                                                                                        <br />pilas.avisar&#40;&quot;Pulsa el boton para que cambie el texto.&quot;&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br /><!-- m --><a class="postlink" href="http://www.dev-losersjuegos.com.ar/issues/107">http://www.dev-losersjuegos.com.ar/issues/107</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Mar 24, 2011 10:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-24T14:42:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5336#p5336</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5336#p5336"/>
<title type="html"><![CDATA[Re: Actor Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5336#p5336"><![CDATA[
oootra pregunta Hugo!<br /><br />para que me respondas ambas...<br /><br />Cómo hago para que el texto tenga una Fuente distinta a la que trae?? eso se puede cambiar??? como lo hago?<br /><br />Thanks!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Jue Mar 24, 2011 2:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-24T14:30:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5335#p5335</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5335#p5335"/>
<title type="html"><![CDATA[Actor Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1100&amp;p=5335#p5335"><![CDATA[
<span style="font-weight: bold">Hola Hugo!!!</span><br /><br />tenia días sin escribirte! y es que había estado tranquila programando, peeeero ahora se me presenta algo, quizás es una tontería pero no he conseguido como hacerlo.<br /><br />la cuestión es que yo muestro un texto en pantalla, y quiero que cuando presiono un botón ese texto cambie. <br />eso lo hice, peeeero me muestra un texto sobre otro... ¿cómo hago para SÓLO actualizar el texto?<br /><br />saludos!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Jue Mar 24, 2011 2:30 pm</p><hr />
]]></content>
</entry>
</feed>