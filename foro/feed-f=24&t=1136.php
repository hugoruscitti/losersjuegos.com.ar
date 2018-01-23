<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1136" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-04T18:13:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1136</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-04T18:13:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1136&amp;p=5490#p5490</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1136&amp;p=5490#p5490"/>
<title type="html"><![CDATA[Re: Atributos de Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1136&amp;p=5490#p5490"><![CDATA[
Lo que ocurre es que el atributo color<br />espera recibir un objeto color y no una tupla.<br /><br />Estos son algunos ejemplo de cómo cambiar<br />los colores:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />a = pilas.actores.Texto&#40;&quot;Hola&quot;&#41;<br />a.color = pilas.colores.rojo<br />a.color = pilas.colores.verde<br />a.color = pilas.colores.azul<br />a.color = pilas.colores.Color&#40;10, 100, 200&#41;</pre><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié May 04, 2011 6:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-04T16:38:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1136&amp;p=5489#p5489</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1136&amp;p=5489#p5489"/>
<title type="html"><![CDATA[Atributos de Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1136&amp;p=5489#p5489"><![CDATA[
<span style="font-weight: bold">Buenos Dias Chicos!!</span><br /><br />Estoy trabajando con el actor Texto, y quiero hacer varias cosas con él. tal como cambiarle el color y la fuente..<br /><br />pero cuando le doy: <br /><pre class="prettyprint">texto.color = &#40;0,0,0&#41;</pre> por ejemplo, <br /><br />me aparece lo siguiente:<br /><pre class="prettyprint">File &quot;/home/carla/pilas/pilas/actores/texto.py&quot;, line 45, in definir_color<br />    self._actor.definir_color&#40;color&#41;<br />  File &quot;/home/carla/pilas/pilas/motores/motor_sfml.py&quot;, line 123, in definir_color<br />    self.SetColor&#40;sf.Color&#40;*k.obtener_componentes&#40;&#41;&#41;&#41;<br />AttributeError: &#39;tuple&#39; object has no attribute &#39;obtener_componentes&#39;</pre><br /><br />que pasará??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mié May 04, 2011 4:38 pm</p><hr />
]]></content>
</entry>
</feed>