<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=846" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-24T02:58:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=846</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-24T02:58:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3854#p3854</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3854#p3854"/>
<title type="html"><![CDATA[Re: Función para iniciar una ventana (a futuro)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3854#p3854"><![CDATA[
La solucion a eso es la inicilización de parametros como dice juanxo, opto por esa idea.y dudo que el usuario desee cambiar el tamaño de la pantalla cuando<br />ya esté incializada,.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ago 24, 2010 2:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-24T00:17:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3850#p3850</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3850#p3850"/>
<title type="html"><![CDATA[Re: Función para iniciar una ventana (a futuro)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3850#p3850"><![CDATA[
yo normalmente lo suelo tener como has comentado al final, y paso algunos parametros de estilo: alto, ancho, bpp y algun flag para indicar opciones adicionales (fullscreen, aceleracion hw). Además le doy valores por defecto a casi todos los elementos, y asi podemos evitar que la gente que empieza se preocupe de detalles<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Ago 24, 2010 12:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-23T23:49:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3847#p3847</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3847#p3847"/>
<title type="html"><![CDATA[Función para iniciar una ventana (a futuro)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=846&amp;p=3847#p3847"><![CDATA[
Buenas, hoy investigué alternativas para inicializar la biblioteca<br />y creo que va a ser necesario crear una función para abrir la<br />ventana principal.<br /><br />Resulta que hasta hora la versión de pilas creaba la ventana directamente<br />después de hacer import. Pero he notado que algunos parámetros<br />de inicialización se tienen que dar ahí y no después... Por ejemplo, el<br />tamaño de la ventana me gustaría que se pueda indicar al iniciar<br />el programa, sino es difícil cambiar el tamaño una vez que ha iniciado<br />la pantalla y se produce un efecto de parpadeo feo.<br /><br />mi idea de la función sería algo como:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pilas<br /><br />pilas.iniciar()<br /></code></dd></dl><br /><br />o bien indicando argumentos opcionales, como el area, si es pantalla completa<br />o los bpp:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pilas<br /><br />pilas.iniciar(ancho=320, alto=240, pantalla_completa=True)<br /></code></dd></dl><br /><br />Cualquiera de las dos formas se podrían utilizar libremente.<br /><br />En cuanto avance con esto les cuento.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ago 23, 2010 11:49 pm</p><hr />
]]></content>
</entry>
</feed>