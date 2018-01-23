<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=404" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-11-26T22:20:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=404</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-11-26T22:20:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1767#p1767</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1767#p1767"/>
<title type="html"><![CDATA[Grupos de sprites en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1767#p1767"><![CDATA[
Muchas gracias!! siento contestar tan tarde, pero no me acababa de funcionar y tenía muy poco tiempo (no descubrí el error que tenía, comencé de nuevo xD). Ahora ya he conseguido que me funcione con el primer método aunque investigaré el otro porque puede ir bien dependiendo del caso.<br />Tuve problemas al eliminar solo algunos sprites, lo conseguí solucionar con el <span style="font-style: italic">.erase</span> de los vectores.<br /><br /><br /><blockquote><div><cite>lucesita escribió:</cite><br />y como consejo no uses el update, SDL soporta el famoso Doublebuffer<br /></div></blockquote> Bueno, en realidad me refería al método update, que suele tener las clases que hacen de sprite. Y que se encarga de actualizar la posición teniendo en cuenta la velocidad y todo eso...<br /><br />Saludos y gracias de nuevo. Sin saber hacer esto, no podía avanzar hacia casi ningún lado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Nov 26, 2008 10:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-11-18T15:36:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1744#p1744</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1744#p1744"/>
<title type="html"><![CDATA[Grupos de sprites en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1744#p1744"><![CDATA[
y si no quieres usar memoria dinamica:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface disparos&#91;50&#93;;<br /><br />for &#40;int i = 0; i &lt; 50; i++&#41;<br />&#123;<br />    disparos&#91;i&#93; = IMG_Load&#40;&quot;C:\myproject\tiritos.jpg&quot;&#41;<br />&#125;<br /></code></dd></dl><br /><br />recorres el array con un for... y lo mismo es para dibujar.<br /><dl class="codebox"><dt>Code: </dt><dd><code>for &#40;int i = 0; i &lt; 50; i++&#41;<br />&#123;<br />    if &#40;disparos&#91;i&#93; != NULL&#41;<br />       SDL_BlitSurface&#40;disparos&#91;i&#93;, NULL, screen, NULL&#41;;<br />&#125;<br /></code></dd></dl><br /><br />y como consejo no uses el update, SDL soporta el famoso Doublebuffer (que alguien con mas conocimiento te explique de que va esto)<br />pero masomenos vos dibujas en una superficie, mientras se muestra la anterior, una vez que dibujaste toda la superficie nueva le das al comando Flip (el que intercambia las superficies)<br />el comando es...<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Flip&#40;screen&#41;;<br /></code></dd></dl><br /><br />PD: espero te alla servido.<br /><br />PD2: espero no errar con el consejo que te di :$<br /><br />SAludos Lucesita<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Mar Nov 18, 2008 3:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[julen26]]></name></author>
<updated>2008-11-18T14:18:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1743#p1743</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1743#p1743"/>
<title type="html"><![CDATA[Grupos de sprites en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1743#p1743"><![CDATA[
Puedes usar vectores. Suponiendo que tienes una clase llamada CSprite:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;vector&gt;<br /><br />std::vector&lt;CSprite*&gt; SpriteList;</code></dd></dl><br /><br />Y para añadir elementos al vector simplemente haz:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SpriteList.push_back&#40;punteroSprite&#41;;</code></dd></dl><br /><br />Y para update y draw etc., puedes hacer algo asi sin preocuparte del tamaño que pueda tener el vector.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>//update<br />for &#40;unsigned int i = 0; i &lt; SpriteList.size&#40;&#41;; i++&#41; &#123;<br />    if &#40;SpriteList&#91;i&#93; != NULL&#41; &#123;<br />        SpriteList&#91;i&#93;-&gt;Update&#40;&#41;;<br />    &#125;<br />&#125;</code></dd></dl><br /><dl class="codebox"><dt>Code: </dt><dd><code>//draw<br />for &#40;unsigned int i = 0; i &lt; SpriteList.size&#40;&#41;; i++&#41; &#123;<br />    if &#40;SpriteList&#91;i&#93; != NULL&#41; &#123;<br />        SpriteList&#91;i&#93;-&gt;Draw&#40;&#41;;<br />    &#125;<br />&#125;</code></dd></dl><br /><br />Y para eliminarlos, mas de lo mismo (suponiendo que los sprites los creas en la memoria dinamica):<br /><dl class="codebox"><dt>Code: </dt><dd><code>for &#40;unsigned int i = 0; i &lt; SpriteList.size&#40;&#41;; i++&#41; &#123;<br />    if &#40;SpriteList&#91;i&#93; != NULL&#41; &#123;<br />        SpriteList&#91;i&#93;-&gt;Free&#40;&#41;;<br />        delete SpriteList&#91;i&#93;;<br />    &#125;<br />&#125;<br />SpriteList.clear&#40;&#41;;</code></dd></dl><br /><br />Saludos[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1416">julen26</a> — Mar Nov 18, 2008 2:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-11-14T19:34:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1740#p1740</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1740#p1740"/>
<title type="html"><![CDATA[Grupos de sprites en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=404&amp;p=1740#p1740"><![CDATA[
Hola, me gustaría saber como implementar grupos de sprites en C++ para poder trabajar sobre todos a la vez (update + draw). Mi problema es que no tengo mucho dominio con el lenguaje. Con Python haría una lista y luego la recorrería y haría el update y el draw con todos los elementos (clases) uno por uno. Pero, como he dicho antes, mi problema es que no se como implementarlo en C++. Ni siquiera con un número limitado de clases en la lista. Tampoco sé si ese es el mejor método de hacerlo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Vie Nov 14, 2008 7:34 pm</p><hr />
]]></content>
</entry>
</feed>