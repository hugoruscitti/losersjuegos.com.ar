<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1186" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-21T21:19:56+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1186</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-06-21T21:19:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1186&amp;p=5674#p5674</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1186&amp;p=5674#p5674"/>
<title type="html"><![CDATA[Re: Control de Piezas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1186&amp;p=5674#p5674"><![CDATA[
Hola Carla, recién subí un arreglo al repositorio (en el branch default) para<br />que puedas hacer lo que necesitas.<br /><br />El cambio es muy sencillo, ahora el ejemplo piezas puede recibir una<br />función para invocar cuando se termine el puzzle.<br /><br />Por ejemplo, este código:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;                                                                                                 <br /><br />def mi_funcion&#40;&#41;:<br />    pilas.avisar&#40;&quot;Hey, lo has logrado!!!&quot;&#41;<br /><br />p = pilas.ejemplos.Piezas&#40;filas=1, columnas=2, al_terminar=mi_funcion&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Produce un mensaje en pantalla cuando se completa todo el puzzle.<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20110621/captura.jpg" alt="Imagen" /><br /><br />Los cambios los vas a poder obtener haciendo &quot;pull&quot; del repositorio, o<br />agregando los cambios que hice en tu código:<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/changeset/550943244984">https://bitbucket.org/hugoruscitti/pila ... 0943244984</a><!-- m --><br /><br />Avisanos si te resulta de utilidad.<br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Jun 21, 2011 9:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-06-21T15:52:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1186&amp;p=5673#p5673</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1186&amp;p=5673#p5673"/>
<title type="html"><![CDATA[Control de Piezas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1186&amp;p=5673#p5673"><![CDATA[
<span style="font-weight: bold">Buenos Dias Chicos</span><br /><br />he estado trabajando con el ejemplo de Piezas, pero se me presenta un inconveniente, serian tan amables de ayudarme??<br /><br />lo que quiero es lo siguiente:<br />En PIEZAS agregué una variable llamada: terminado la cual toma como valores: True o False.<br /> y he invocado el ejemplo de la siguiente manera:<pre class="prettyprint">import IQ.piezas<br />Piezas = IQ.piezas.Piezas&#40;imagen,2,2&#41;</pre><br /><br />lo que quiero es que luego que se resuelva el rompecabezas, preguntar por la variable Terminado y hacer algo en el programa. <br /><br />espero su respuesta<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mar Jun 21, 2011 3:52 pm</p><hr />
]]></content>
</entry>
</feed>