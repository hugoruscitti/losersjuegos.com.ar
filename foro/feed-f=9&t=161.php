<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=161" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-10-01T20:47:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=161</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-10-01T20:47:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=583#p583</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=583#p583"/>
<title type="html"><![CDATA[Re: graciassss]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=583#p583"><![CDATA[
<blockquote><div><cite>josepil escribió:</cite><br />como hago para plasmar una flecha donde no se cuanto mide ni en donde va a estar te agradesco<br /></div></blockquote><br /><br />um..., no me queda muy claro. Si tienes una superficie siempre<br />podrás saber cuando mide, en todo caso utiliza como parámetros<br />los valores NULL y SDL calculará los tamaños por tí. Por ejemplo, <br />si quieres imprimir una superficie completa sobre otra puedes<br />escribir:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_BlitSurface&#40;personaje, NULL, pantalla, NULL&#41;;</code></dd></dl><br /><br />Si lo que quieres es imprimir la superficie en &quot;cualquier parte al azar&quot;, <br />por ejemplo en un juego de dados o disparos, lo que puedes utilizar<br />es la función &quot;rand&quot;. Hablamos alguna vez de esta función en el<br />foro, observa la siguiente dirección:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=44">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=44</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Oct 01, 2007 8:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[josepil]]></name></author>
<updated>2007-09-25T01:40:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=554#p554</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=554#p554"/>
<title type="html"><![CDATA[graciassss]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=554#p554"><![CDATA[
muchas graciassssssssssssssss me has sacado de una maxima bueno ahora si no es mucho abusar como hago para plasmar una flecha donde no se cuanto mide ni en donde va a estar te agradesco<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1819">josepil</a> — Mar Sep 25, 2007 1:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-09-24T16:00:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=550#p550</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=550#p550"/>
<title type="html"><![CDATA[Re: ayuda con imagenes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=550#p550"><![CDATA[
<blockquote><div><cite>josepil escribió:</cite><br />no se como mostrar solo un pedazo de la imagen<br /></div></blockquote><br /><br />Saludos, para mostrar solo una parte de alguna imagen puedes<br />utilizar el segundo parámetro de la función SDL_BlitSurface.<br /><br />En la siguiente dirección tienes un artículo al respecto, junto<br />con una función llamada &quot;imprimir&quot; que te permite hacer<br />todo este trabajo de manera mas sencilla:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/grilla/grilla.php">http://www.losersjuegos.com.ar/referenc ... grilla.php</a><!-- m --><br /><br /><blockquote><div><cite>josepil escribió:</cite><br />ademas cuando cambia el numero me queda como un hueco en la imagen de fondo yo lo arreglo volviendo a colocar el fondo y luego lanzando otra vez los dados pero la idea seria que esa mancha no se viera sino que fuera transparetne bueno por el momento en el desarrollo del programa me hace falta esto es por eso que les pido ayuda <br /><br />muchas gracias por su tiempo y su dispocicion<br /></div></blockquote><br /><br />No me queda muy claro el tema de la &quot;marca&quot;, ¿podrías adjuntar<br />una captura de pantalla sobre el problema?. De todas formas<br />cuando imprimes una superficie sobre otra, en realidad, estás<br />reemplazando los pixeles de una superficie por otra. Haces bien<br />en restaurar la región modificada imprimiendo nuevamente el<br />fondo de pantalla, se hace así en la mayoría de los casos.<br /><br />Con respeto a transparencias en SDL, tal vez te resulte útil<br />investigar la siguiente función:<br /><br />   <!-- m --><a class="postlink" href="http://docs.mandragor.org/files/Common_libs_documentation/SDL/SDL_Documentation_project_en/sdlsetcolorkey.html">http://docs.mandragor.org/files/Common_ ... orkey.html</a><!-- m --><br /><br />permite definir el color que será &quot;transparente&quot; al momento de<br />imprimir con Blit.<br /><br />Buena suerte y hasta pronto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Sep 24, 2007 4:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[josepil]]></name></author>
<updated>2007-09-24T12:22:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=549#p549</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=549#p549"/>
<title type="html"><![CDATA[ayuda con imagenes]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=161&amp;p=549#p549"><![CDATA[
bueno hola a todos quiero comentarles que empiezo a trabajar con esta libreria y me ah gustado bastante y en mi exploracion no eh logrado hacer alguans cosas que quisiera pero en estos dias me ah tocado ahcer un programa que muestre el tiro de dos dados en pantalla y la verdad no eh podido hacerlo que sea con una imagen qeu es la idea osea colocando los valores de 1 a 6 y luego mostrando los pedazos de la imagen que corresponden pero no se como mostrar solo un pedazo de la imagen, ademas cuando cambia el numero me queda como un hueco en la imagen de fondo yo lo arreglo volviendo a colocar el fondo y luego lanzando otra vez los dados pero la idea seria que esa mancha no se viera sino que fuera transparetne bueno por el momento en el desarrollo del programa me hace falta esto es por eso que les pido ayuda <br /><br />muchas gracias por su tiempo y su dispocicion<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1819">josepil</a> — Lun Sep 24, 2007 12:22 pm</p><hr />
]]></content>
</entry>
</feed>