<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=156" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-09-17T18:30:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=156</id>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2007-09-17T18:30:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=539#p539</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=539#p539"/>
<title type="html"><![CDATA[Solucionado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=539#p539"><![CDATA[
Muchas gracias Hugo<br /><br />No te lo vas a creer, pero eso fue lo primero que probé, seguro que se me debió colar alguna letra <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> . He probado ahora y funciona sin problemas, si es que a veces se atasca uno en lo más tonto.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> <br /><br />Buscado he encontrado otra forma de hacerlo, a través del &quot;automake manager&quot;:<br /><!-- m --><a class="postlink" href="http://www.kdevelop.org/index.html?filename=3.4/faq.html#How_to_link_against_a_.so_library.3F">http://www.kdevelop.org/index.html?file ... library.3F</a><!-- m --><br /><br />Saludos a todos<br /><br />Ayer con las prisas se me olvidó: Tampoco me di cuenta de que me pedía un par de librerías para compilar el programa (libdirectfb-dev y libaa1-dev), cosa que no ocurría si compilaba desde consola el mismo código. Por eso pensaba que el error era que no enlazaba con SDL, pero cuando me di cuenta e instalé estas librerías y con al automake manager añadí SDL_ttf, pues sin problemas.<br /><br />Saludos de nuevo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Lun Sep 17, 2007 6:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-09-17T14:57:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=538#p538</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=538#p538"/>
<title type="html"><![CDATA[kdevelop y SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=538#p538"><![CDATA[
Saludos. No tengo mucha idea sobre Kdevelop, pero igual<br />conseguí instalar una versión del mismo y configurar<br />un proyecto para utilizar la biblioteca que<br />necesitas (SDL_ttf).<br /><br />Te comento los pasos que realicé:<br /><br />Inicie el programa y generé un nuevo proyecto basado<br />en la plantilla &quot;Simple SDL program&quot;:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20070917/plantilla.png" alt="Imagen" /><br /><br />Luego seleccioné el menú &quot;Project&quot; y la opción<br />&quot;Project Options&quot;. Apareció un cuadro de dialogo<br />donde tienes &quot;Configure options&quot; y una linea que<br />indica &quot;Linker Flags (LDFLAGS)&quot;:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20070917/bibliotecas.png" alt="Imagen" /><br /><br />en esta linea debes escribir &quot;-lSDL_ttf&quot; y luego<br />pulsar &quot;OK&quot;.<br /><br />Al menos así me ha funcionado correctamente con<br />el siguiente programa:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;SDL.h&quot;<br />#include &quot;SDL_ttf.h&quot;<br /><br />int main&#40;void&#41;<br />&#123;<br />    SDL_Init&#40;0&#41;;<br /><br />    if &#40;TTF_Init&#40;&#41; == -1&#41;<br />    &#123;<br />        printf&#40;&quot;Error: %s \n&quot;, TTF_GetError&#40;&#41;&#41;;<br />        return 1;<br />    &#125;<br />    else<br />        printf&#40;&quot;SDL TTF ha iniciado correctamente.\n&quot;&#41;;<br /><br />    TTF_Quit&#40;&#41;;<br />    SDL_Quit&#40;&#41;;<br />    return 0;<br />&#125;<br /></code></dd></dl><br /><br />Si bien el programa no hace nada &quot;útil&quot;, inicializa SDL_TTF<br />y funciona correctamente (al menos aquí).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Sep 17, 2007 2:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2007-09-15T20:13:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=536#p536</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=536#p536"/>
<title type="html"><![CDATA[kdevelop y SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=156&amp;p=536#p536"><![CDATA[
Hola a todos<br /><br />¿Usáis alguno kdevelop para desarrollar con SDL? He empezado ha hacerlo (hasta ahora todo lo que he hecho con SDL ha sido con un editor de textos y la linea de comandos para compilar) y me he encontrado con un problemilla, y es que el asistente te crea un proyecto básico SDL, pero si quiero usar SDL_ttf por ejemplo, no se como decirle que las incluya al compilar y, lógicamente, da error.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Sab Sep 15, 2007 8:13 pm</p><hr />
]]></content>
</entry>
</feed>