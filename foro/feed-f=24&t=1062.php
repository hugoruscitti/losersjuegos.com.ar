<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1062" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-24T15:58:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1062</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-02-24T15:58:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1062&amp;p=5132#p5132</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1062&amp;p=5132#p5132"/>
<title type="html"><![CDATA[Re: Alineación de texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1062&amp;p=5132#p5132"><![CDATA[
Buenas carla, ten en cuenta que todos los<br />actores tienen atributos de posición como izquierda, derecha<br />arriba o abajo. ¿podrías usar esas en tu caso?.<br /><br />Sino, otra forma, es cambiar el centro de la imagen, por<br />ejemplo, en esta imagen los centros de los personajes<br />son distintos pero estan posicionado en el mismo valor<br />&quot;y&quot;:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20110224/centros.png" alt="Imagen" /><br /><br />y el código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pingu.centro = ('centro', 'centro')<br />pingu2.centro = ('centro', 'abajo')<br />pingu.y = 0<br />pingu2.y = 0<br /></code></dd></dl><br /><br />Recuerda usar la tecla F8 para ver los centros de los textos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Feb 24, 2011 3:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-02-24T15:24:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1062&amp;p=5131#p5131</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1062&amp;p=5131#p5131"/>
<title type="html"><![CDATA[Alineación de texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1062&amp;p=5131#p5131"><![CDATA[
<span style="font-weight: bold">Buenos Dias muchachos</span><br /><br />espero que esten super bien...<br /><br />hoy les escribo para preguntar sobre la alineación de un texto, ya que necesito que me salga alineado hacia la izquierda y por más que le pongo las coordenadas, me lo pone alineado en el centro...<br /><br />es decir asi:<br />             pregunta uno<br />         siguiente pregunta <br />            pregunta 3.<br />a pesar de que los 3 tiene alineación de x iguales.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Jue Feb 24, 2011 3:24 pm</p><hr />
]]></content>
</entry>
</feed>