<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=2971" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-12-29T21:53:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=2971</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-12-29T21:53:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9087#p9087</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9087#p9087"/>
<title type="html"><![CDATA[Re: Recomendaciones para depurar con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9087#p9087"><![CDATA[
Sí, pdb hace bien el trabajo, incluso buscando por ahí me encontré con una <a href="http://pythonconquerstheuniverse.wordpress.com/2009/09/10/debugging-in-python/" class="postlink">mini guiá para newbies</a>, es del 2009 y en inglés, pero sigue muy vigente!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Dic 29, 2012 9:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-12-14T13:25:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9042#p9042</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9042#p9042"/>
<title type="html"><![CDATA[Re: Recomendaciones para depurar con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9042#p9042"><![CDATA[
<blockquote><div><cite>orenji escribió:</cite><br />Así que mi consulta es ¿como hacen ustedes para revisar sus juegos y depurarlos? ¿que experiencias tienen? ¿que me recomiendan?<br /></div></blockquote><br /><br />Hola orenji !!!<br /><br />Es muy interesante tu consulta, en mi caso utilizo pudb:<br /><br /><!-- m --><a class="postlink" href="http://heather.cs.ucdavis.edu/~matloff/pudb.html">http://heather.cs.ucdavis.edu/~matloff/pudb.html</a><!-- m --><br /><!-- m --><a class="postlink" href="http://asmeurersympy.wordpress.com/2010/06/04/pudb-a-better-python-debugger/">http://asmeurersympy.wordpress.com/2010 ... -debugger/</a><!-- m --><br /><br />pero cambié los colores como dice el segundo link para que no se vea tan feo...<br /><br />Básicamente, en mi caso, uso un editor de textos y solo voy al depurador cuando quiero<br />ver algo puntual, una cosa que no entiendo o me desconcierta... Entiendo lo útil de poder<br />integrar todo en una misma herramienta, pero me siento mas cómodo usando varias herramientas<br />pequeñas y específicas. Por ejemplo, en lugar de pudb a veces uso simplemente pdb cerca del<br />lugar que quiero inspeccionar:<br /><br /><pre class="prettyprint">import pdb<br />pdb.set_trace&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Dic 14, 2012 1:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[orenji]]></name></author>
<updated>2012-12-13T20:47:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9040#p9040</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9040#p9040"/>
<title type="html"><![CDATA[Recomendaciones para depurar con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2971&amp;p=9040#p9040"><![CDATA[
Saludos compañeros.<br /><br />Desde ya les agradezco la ayuda que brindan aquí, gracias a este sitio puedo desarrollar mi habilidades de programación y encima hay documentación en español y un foro. La verdad todo un privilegio para principiantes. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />Sobre el tema del titulo me gustaría preguntarles que métodos usan ustedes o que recomiendan para depurar sus juegos en python con pygame.<br /><br />Por mi parte estoy usando <span style="font-weight: bold">geany</span>, para cosas pequeñas que hacia estaba bien para mi. Pero ahora me surge la necesidad de analizar mis juegos y necesito depurar.<br /><br />Busque información en google sobre depurar en python con geany y encontré un plugin llamado <span style="font-weight: bold">geanypdb</span> <a href="http://code.google.com/p/geanypdb/" class="postlink">http://code.google.com/p/geanypdb/</a>, lo instale y veo que en realidad es un front end, compatible con &quot;<span style="font-weight: bold">winpdb</span>&quot; y con &quot;<span style="font-weight: bold">Pdb</span>&quot;, en los repositorios de ubuntu 12.04 solo encontré &quot;<span style="font-weight: bold">winpd</span>b&quot; y no así &quot;<span style="font-weight: bold">Pdb</span>&quot;, pero si encontré &quot;<span style="font-weight: bold">Pydb</span>&quot; pensé si era este en realidad, así que probé instalarlo, pero cuando elijo en el plugins de geany la opción &quot;<span style="font-weight: bold">Pdb</span>&quot; este se &quot;estrella&quot; por decirlo de alguna manera  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> .<br /><br />Así que probé con &quot;winpdb&quot; este si funciona, pero al fin, resulta que tengo un IDE con un plugin (lanzador/front end) que llama a otro depurador con su propia GUI, y .... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" />  pienso que esto hace perder la gracia de un plugin, pues para eso cambio directamente de IDE y chau o ejecuto directamente &quot;winpdb&quot;. Pero bueno esa es otra historia.<br /><br />La cuestión es que cuando pruebo usar winpdb este tiene errores (y a veces también cierra el juego) con las funciones comunes de pygame como cargar una imagen y se hace infructuoso seguir el programa. A lo mejor esto es normal en los depuradores + pygame y el asunto es que no tengo experiencia en estas cosas.<br /><br />Así que mi consulta es ¿como hacen ustedes para revisar sus juegos y depurarlos? ¿que experiencias tienen? ¿que me recomiendan?<br /><br />Bueno eso es todo y les agradezco su ayuda, tiempo y  atención.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2653">orenji</a> — Jue Dic 13, 2012 8:47 pm</p><hr />
]]></content>
</entry>
</feed>