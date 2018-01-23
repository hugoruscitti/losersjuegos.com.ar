<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=1221" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-03-12T17:17:22+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=1221</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-03-12T17:17:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=6572#p6572</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=6572#p6572"/>
<title type="html"><![CDATA[Re: Borrador de guia de instalacion en windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=6572#p6572"><![CDATA[
Hola, disculpa la demora al responder...<br /><br />La linea correcta para ocultar el mouse es la siguiente:<br /><br /><pre class="prettyprint">pilas.mundo.motor.ocultar_puntero_del_mouse&#40;&#41;</pre><br /><br />Voy a corregir el tutorial en breve, porque creo que está mal ahí.<br /><br />Por cierto, la versión 0.55 es un poquito vieja, te recomiendo bajar <br />la versión nueva (0.66) desde el sitio pypi:<br /><br /><!-- m --><a class="postlink" href="http://pypi.python.org/pypi/pilas/0.66">http://pypi.python.org/pypi/pilas/0.66</a><!-- m --><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 12, 2012 5:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mopatar1]]></name></author>
<updated>2012-03-09T11:34:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=6569#p6569</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=6569#p6569"/>
<title type="html"><![CDATA[Re: Borrador de guia de instalacion en windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=6569#p6569"><![CDATA[
Hola, soy nuevo en esto y estoy probando el juego Aceituna vs Bombas en windows con la versión 0.55 y me falla el paso pilas.mundo.motor.ocultar_puntero_del_mouse(), aunque si me va con pilas.actores.CursorDisparo()<br /><br />El mensaje es el siguiente:<br /><br />Python 2.6.6 (r266:84297, Aug 24 2010, 18:46:32) [MSC v.1500 32 bit (Intel)] on<br />win32<br />Type &quot;help&quot;, &quot;copyright&quot;, &quot;credits&quot; or &quot;license&quot; for more information.<br />&gt;&gt;&gt; import pilas<br />&gt;&gt;&gt; pilas.iniciar()<br />&gt;&gt;&gt; protagonista = pilas.actores.Aceituna()<br />&gt;&gt;&gt; protagonista.aprender(pilas.habilidades.SeguirAlMouse)<br />&gt;&gt;&gt; pilas.motor.ocultar_puntero_del_mouse()<br />Traceback (most recent call last):<br />  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;<br />AttributeError: 'module' object has no attribute 'motor'<br />&gt;&gt;&gt;<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2588">mopatar1</a> — Vie Mar 09, 2012 11:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-08-14T01:41:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5831#p5831</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5831#p5831"/>
<title type="html"><![CDATA[Re: Borrador de guia de instalacion en windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5831#p5831"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />Ocultar el mouse es algo que me quedo pendiente, es un bug... lo voy a habilitar en cuanto tenga un minutito<br />y voy a actualizar el paquete para windows.<br /></div></blockquote><br /><br />Listo, ahí agregué la función para ocultar el<br />puntero del mouse.<br /><br />Puedes ocultar el puntero con esta sentencia:<br /><br /><pre class="prettyprint">pilas.mundo.motor.ocultar_puntero_del_mouse&#40;&#41;</pre><br /><br />o directamente usando el actor ``CursorDisparo``, cómo<br />muestra este ejemplo:<br /><br /><pre class="prettyprint">import pilas                                                                    <br />pilas.iniciar&#40;&#41;<br /><br />pilas.actores.CursorDisparo&#40;&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br /><br />Estos cambios, y muchos mas, están en la nueva versión 0.55 de<br />pilas:<br /><br /><!-- m --><a class="postlink" href="http://pypi.python.org/pypi/pilas/0.55">http://pypi.python.org/pypi/pilas/0.55</a><!-- m --><br /><br />¿Podrías decirme si funciona bien en windows?, necesito<br />ayuda para probar pilas en ese sistema...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 14, 2011 1:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-08-13T19:54:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5828#p5828</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5828#p5828"/>
<title type="html"><![CDATA[Re: Borrador de guia de instalacion en windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5828#p5828"><![CDATA[
<blockquote><div><cite>pedro_soto escribió:</cite><br />lo de los motores me indica que solo esta disponible qt y qtgl, espero y me puedas ayudar o de plano pues no hay alternativa que solo usar linux para el uso de pilas?<br /></div></blockquote><br /><br />Hola Pedro, el motor pygame esta deshabilitado por ahora.... resulta que ahora solo estan disponibles<br />los motores qt y qtgl, al menos hasta dentro de unos dias, cuando espero poder afirmar la API y que sea<br />solida. Recien ahi me pondre a habilitar pygame nuevamente.<br /><br />Ocultar el mouse es algo que me quedo pendiente, es un bug... lo voy a habilitar en cuanto tenga un minutito<br />y voy a actualizar el paquete para windows.<br /><br />Me ayudarias con algunas puebas si te envio un instalador nuevo?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ago 13, 2011 7:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pedro_soto]]></name></author>
<updated>2011-08-13T18:08:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5827#p5827</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5827#p5827"/>
<title type="html"><![CDATA[Re: Borrador de guia de instalacion en windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5827#p5827"><![CDATA[
Buen Día, he intentado hacer los tutoriales de la documentación que subes a la pagina del proyecto y lamentablemente, no logro hacer que funcionen, de hecho creo que están desactualizados porque no puedo hacer que corra el motor pygame.<br /><br />de hecho hay algunas sentencias como, pilas.motor.esconder__puntero_mouse, o algo asi que ya no funcionan.<br /><br />He instalado pilas el martes y lo he intentado por todos lados hasta el dia de hoy y nomas no he logrado encontrar en donde esta la funcion para esconder el mouse.<br /><br />lo de los motores me indica que solo esta disponible qt y qtgl, espero y me puedas ayudar o de plano pues no hay alternativa que solo usar linux para el uso de pilas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2476">pedro_soto</a> — Sab Ago 13, 2011 6:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-07-28T23:17:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5790#p5790</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5790#p5790"/>
<title type="html"><![CDATA[Borrador de guia de instalacion en windows]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1221&amp;p=5790#p5790"><![CDATA[
Saludos, les dejo un boceto de la guia de instalacion de pilas en<br />windows por si alguno de ustedes me puede ayudar a hacer pruebas:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/incoming/descargas/20110728/instalar_pilas_52_en_windows.pdf">http://www.losersjuegos.com.ar/incoming ... indows.pdf</a><!-- m --><br /><br />Mi idea es seguir con pruebas, y luego ir actualizando la página y las guias de instalación.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jul 28, 2011 11:17 pm</p><hr />
]]></content>
</entry>
</feed>