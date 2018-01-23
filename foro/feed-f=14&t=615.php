<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=14&amp;t=615" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-09-01T08:47:54+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=14&amp;t=615</id>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2009-09-01T08:47:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2855#p2855</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2855#p2855"/>
<title type="html"><![CDATA[Etapa 4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2855#p2855"><![CDATA[
Hola,<br /><br />Acabo de terminar lo que faltaba de esta etapa. Incorpore un mensaje de Game Over. Creo que por ahora funciona, pero habria que testearlo un poco en el caso que se haga una linea en la ultima row y se pueda seguir el juego (aunque no por mucho, jeje).<br /><br />Saludos,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Mar Sep 01, 2009 8:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-08-23T20:48:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2842#p2842</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2842#p2842"/>
<title type="html"><![CDATA[Etapa 4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2842#p2842"><![CDATA[
<blockquote><div><cite>joksnet escribió:</cite><br />Bueno. Intente hacer una prueba, no demaciado exaustiva. No se si es la manera correcta de utilizar <span style="font-weight: bold">pygame.transform.chop</span>, pero me borra toda la visual_matrix. Lo vere mas tarde. Saludos,<br /></div></blockquote><br /><br />Buenisimo, estaba bien excepto por el tercer parámetro de<br />la función:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>- self.visual_matrix = pygame.transform.chop&#40;self.visual_matrix, pygame.Rect&#40;0, row * 20, 10 * 20, 20&#41;&#41;<br />+ self.visual_matrix = pygame.transform.chop&#40;self.visual_matrix, pygame.Rect&#40;0, row * 20, 0, 20&#41;&#41;<br /></code></dd></dl><br /><br />recién subí el cambio con esa modificación.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 23, 2009 8:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2009-08-23T16:18:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2841#p2841</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2841#p2841"/>
<title type="html"><![CDATA[Etapa 4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2841#p2841"><![CDATA[
Bueno. Intente hacer una prueba, no demaciado exaustiva. No se si es la manera correcta de utilizar <span style="font-weight: bold">pygame.transform.chop</span>, pero me borra toda la visual_matrix. Lo vere mas tarde. Saludos,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Dom Ago 23, 2009 4:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-08-22T06:17:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2840#p2840</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2840#p2840"/>
<title type="html"><![CDATA[Etapa 4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2840#p2840"><![CDATA[
Saludos, recién estoy viendo los cambios y están muy<br />bien. Ahora cuando se completa una linea se puede<br />ver en consola el numero de las lineas completas. Buenisimo.<br /><br />Con respecto a los siguientes pasos, voy a tratar de<br />escribir la documentación de cómo se podrían gestionar<br />las fichas en reposo para simplificarlo, a modo de propuesta.<br /><br />A grandes rasgos, lo<br />que necesitaríamos es redibujar la matriz visual solamente<br />cuando se realizan lineas, esto es fácil de hacer directamente sobre<br />una superficie de pygame. Es como plegar un papel, de<br />hecho creo que pygame tiene una función llamada crop<br />que podriamos usar para ello:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/traducciones/pygame/transform#chop">http://www.losersjuegos.com.ar/traducci ... sform#chop</a><!-- m --><br /><br />Bueno, mañana trataré de escribir el documento y te<br />aviso joksnet, es interesante tu consulta, pero tengo<br />que pensarla mejor...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ago 22, 2009 6:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2009-08-21T08:28:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2839#p2839</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2839#p2839"/>
<title type="html"><![CDATA[Etapa 4]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=615&amp;p=2839#p2839"><![CDATA[
Hola.<br /><br />Ya estamos muy cerca de tener un juego 100% jugable. Esta es la Etapa 4.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;_&#93; % Etapa 4<br />   : Aquí se implementan la creación de lineas y la asignación de puntaje.<br />   &#91;_&#93; permitir que el usuario pueda hacer lineas<br />   &#91;_&#93; hacer que las piezas bajen a una determinada velocidad.<br />   &#91;_&#93; aumentar la velocidad de caida de las piezas conforme avanza<br />   &#91;_&#93; implementar un contador del lineas<br />   &#91;_&#93; imprimir un mensaje de GameOver cuando llega a la parte superior.</code></dd></dl><br /><br />Yo acabo de comitear de una forma simple para verificar que hay lineas.<br /><br />Pero tengo una duda. Las piezas se van dibujando en <span style="font-style: italic">self.visual_matrix</span>, pero no se redibujan en cada vuelta. Por lo cual, como hariamos para UnDraw o remover lo dibujado y redibujar todo de nuevo. En ningun lugar almacenamos las posiciones de las piezas dibujadas, como para saber redibujarlo.<br /><br />Saludos,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Vie Ago 21, 2009 8:28 am</p><hr />
]]></content>
</entry>
</feed>