<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=694" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-02-19T13:33:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=694</id>
<entry>
<author><name><![CDATA[djkemical]]></name></author>
<updated>2010-02-19T13:33:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3266#p3266</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3266#p3266"/>
<title type="html"><![CDATA[Re: Algun tuto sobre colisiones entre Sprites?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3266#p3266"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br /><blockquote><div><cite>djkemical escribió:</cite>Me gustaria ver algun tutorial de colisiones entre Sprites para empezar.<br /></div></blockquote><br /><br />¿algún lenguaje en particular?, yo te podría comentar<br />algo acerca de las colisiones con python y pygame.</div></blockquote>Es en Python con pygame, estoy empezando, y me gustaria crear alguna animacion o juego como el que expusiste en la conferencia, se crear el movimientl y tal, pero lo unico que no se son las colisiones.<br />Muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2145">djkemical</a> — Vie Feb 19, 2010 1:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-02-18T18:04:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3265#p3265</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3265#p3265"/>
<title type="html"><![CDATA[Re: Algun tuto sobre colisiones entre Sprites?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3265#p3265"><![CDATA[
<blockquote><div><cite>djkemical escribió:</cite><br />Me gustaria ver algun tutorial de colisiones entre Sprites para empezar.<br /></div></blockquote><br /><br />¿algún lenguaje en particular?, yo te podría comentar<br />algo acerca de las colisiones con python y pygame.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Feb 18, 2010 6:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-02-18T09:12:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3262#p3262</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3262#p3262"/>
<title type="html"><![CDATA[Algun tuto sobre colisiones entre Sprites?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3262#p3262"><![CDATA[
No me conozco ningún libro de esta temática, pero puedes mirar:<br /><br />Sacado de <!-- m --><a class="postlink" href="http://www.gamedev.net/reference/articles/article735.asp">http://www.gamedev.net/reference/articl ... cle735.asp</a><!-- m --><br /><dl class="codebox"><dt>Code: </dt><dd><code>// Object-to-object bounding-box collision detector:<br />short int Sprite_Collide&#40;sprite_ptr object1, sprite_ptr object2&#41; &#123;<br />  <br />    int left1, left2;<br />    int right1, right2;<br />    int top1, top2;<br />    int bottom1, bottom2;<br /><br />    left1 = object1-&gt;x;<br />    left2 = object2-&gt;x;<br />    right1 = object1-&gt;x + object1-&gt;width;<br />    right2 = object2-&gt;x + object2-&gt;width;<br />    top1 = object1-&gt;y;<br />    top2 = object2-&gt;y;<br />    bottom1 = object1-&gt;y + object1-&gt;height;<br />    bottom2 = object2-&gt;y + object2-&gt;height;<br /><br />    if &#40;bottom1 &lt;top2&gt; bottom2&#41; return&#40;0&#41;;<br /><br />    if &#40;right1 &lt;left2&gt; right2&#41; return&#40;0&#41;;<br /><br />    return&#40;1&#41;;<br /><br />&#125;;</code></dd></dl><br /><br />Si buscabas algo más avanzado, puedes mirar:<br /><!-- m --><a class="postlink" href="http://www.gamedev.net/reference/programming/features/2dRotatedRectCollision/">http://www.gamedev.net/reference/progra ... Collision/</a><!-- m --><br /><br />Estos tratan de colisión por rectángulo, pero también podrías buscar información sobre colisión por círculos y por píxel.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Feb 18, 2010 9:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[djkemical]]></name></author>
<updated>2010-02-17T11:12:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3257#p3257</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3257#p3257"/>
<title type="html"><![CDATA[Algun tuto sobre colisiones entre Sprites?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=694&amp;p=3257#p3257"><![CDATA[
Buenas.<br />Sabeis alguno de donde puedo sacar documentacion o algun libro?<br />Me gustaria ver algun tutorial de colisiones entre Sprites para empezar.<br />Muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2145">djkemical</a> — Mié Feb 17, 2010 11:12 am</p><hr />
]]></content>
</entry>
</feed>