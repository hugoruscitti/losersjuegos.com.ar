<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1148" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-17T15:34:32+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1148</id>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-17T15:34:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5551#p5551</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5551#p5551"/>
<title type="html"><![CDATA[Re: Preguntas sobre la Grilla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5551#p5551"><![CDATA[
<span style="font-weight: bold">Hola Hugo!</span><br /><br />te cuento que si logré utilizar la grilla para hacer un diccionario de botones.<br /><br />lo hice de esta manera: <br /><pre class="prettyprint">opciones = [elemento&#40;-250,-200, variables.grupo1, 0&#41;, elemento&#40;-100,-200,variables.grupo1, 1&#41;, elemento&#40;100,-200,variables.grupo1,2, True&#41;, elemento&#40;250,-200,variables.grupo1,3&#41;]</pre><br /><br />en donde elemento es la siguiente clase: <br /><pre class="prettyprint">class elemento&#40;Boton&#41;:<br />    def __init__&#40;self, x=0,y=0, grilla=&quot;null&quot;, numero=0, correcto=False&#41;:<br />        Boton.__init__&#40;self, x= x, y= y&#41;<br /><br />        grilla.definir_cuadro&#40;numero&#41;<br />        grilla.asignar&#40;self&#41;</pre><br /><br />saludos!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mar May 17, 2011 3:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-13T18:09:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5534#p5534</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5534#p5534"/>
<title type="html"><![CDATA[Re: Preguntas sobre la Grilla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5534#p5534"><![CDATA[
Buenas Carla, te comento, para los botones tendrias que<br />usar imagenes separadas... por ahora no tenemos soporte<br />para grillas en los botones.<br /><br />Segun recuerdo, la sentencia &quot;grilla.definir_cuadro(numero)&quot; modifica<br />la grilla pero no retorna nada... voy a pensar si hay alguna<br />forma de mejorar la funcion para que retorne algo y sea mas reutilizable, pero<br />en principio no retorna nada.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie May 13, 2011 6:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-13T15:53:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5532#p5532</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5532#p5532"/>
<title type="html"><![CDATA[Re: Preguntas sobre la Grilla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5532#p5532"><![CDATA[
disculpen, pero aclárenme algo:<br /><br />que devuelve <pre class="prettyprint">grilla.definir_cuadro&#40;numero&#41;</pre> ??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Vie May 13, 2011 3:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-13T15:32:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5530#p5530</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5530#p5530"/>
<title type="html"><![CDATA[Preguntas sobre la Grilla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1148&amp;p=5530#p5530"><![CDATA[
<span style="font-weight: bold">Buenos Dias Chicos!!</span><br /><br />en esta oportunidad les escribo ya que quisiera utilizar la grilla para tener unas imágenes que voy  necesitar en un juego, peeero lo que quiero hacer es un arreglo de botones, en donde a cada botón le quiero asignar un cuadro de la grilla. <br /><br />hasta los momentos solo he visto que utilizan la grilla para asignarla a un actor. <br /><br />lo que quiero hacer es algo asi como esto:<pre class="prettyprint">botones= {&#39;1&#39;: boton&#40;grilla.definir_cuadro&#40;1&#41;&#41;, &#39;2&#39;: boton&#40;grilla.definir_cuadro&#40;2&#41;&#41; }</pre><br /><br /><br />pudieran orientarme en esto por favor?!<br /><br />gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Vie May 13, 2011 3:32 pm</p><hr />
]]></content>
</entry>
</feed>