<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=25&amp;t=938" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-15T02:04:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=25&amp;t=938</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-15T02:04:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4589#p4589</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4589#p4589"/>
<title type="html"><![CDATA[Re: Asteroides, el primer juego hecho de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4589#p4589"><![CDATA[
<blockquote><div><cite>TucumetaL escribió:</cite><br />Ayer empece con Pilas, y parece estar muy bueno, pero he tenido un par de problemitas. <br />Uno fue con el juego este (Asteroides), apenas empieza y aparece el menu, y en la terminal empieza a mostrase &quot;pygame no permite cambiar la rotacion&quot; y se cuelga mostrando eso. La animacion de fondo del juego corre normalmente, se ve un asteroide pequeño que va volando.<br />Habra algun modo de solucionarlo?<br />Saludos<br /></div></blockquote><br /><br />Sí, hay un modo de solucionarlo. Pilas funciona con dos motores, uno es pygame y el otro es SFML. Lamentablemente<br />en tu equipo parece que solo tienes instalado pygame, por eso pilas elige esa biblioteca y no SFML.<br /><br />Lo malo de esto es que pilas no soporta muy bien a pygame (por ahora), así que te recomiendo<br />que por el momento busques usar SFML. En la web de pilas hay mucha información de cómo<br />instalar SFML.<br /><br />Ten en cuenta que una vez que instalas la biblioteca, el siguiente código tendría que<br />retornarte dos motores:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pilas<br />pilas.obtener_motores_disponibles()<br /></code></dd></dl><br /><br />En mi caso:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>({'pygame': &lt;class pilas.motores.motor_pygame.Pygame at 0x198b890&gt;,<br />  'pysfml': &lt;class pilas.motores.motor_sfml.pySFML at 0x198b2f0&gt;,<br />  'sfml': &lt;class pilas.motores.motor_sfml.pySFML at 0x198b2f0&gt;},<br /> 'sfml')<br /></code></dd></dl><br /><br />Es muy importante que aparezca SFML, si no es asi es porque necesitas<br />instalar SFML....<br /><br />Avisanos si puedes solucionario, por mi parte voy a ponerme a trabajar<br />en mejorar el soporte de pygame... asi funcionan las rotaciones...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Dic 15, 2010 2:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-14T01:57:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4585#p4585</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4585#p4585"/>
<title type="html"><![CDATA[Re: Asteroides, el primer juego hecho de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4585#p4585"><![CDATA[
El problema se parece al que avían detectado con los IDS, trata de ejecutar el programa desde la terminal y actualiza a la versión mas reciente.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Dic 14, 2010 1:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-13T20:11:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4583#p4583</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4583#p4583"/>
<title type="html"><![CDATA[Re: Asteroides, el primer juego hecho de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4583#p4583"><![CDATA[
No soy el más adecuado para tocar éste tema, pero creo que si puedes deberías dejar algo más de información sobre que IDE usas, que comandos has introducido para ejecutar el juego y que librerías tienes instaladas. Lo digo por que hace un tiempo se llevaron a cabo modificaciones importantes del código para mejorar la compatibilidad de Pilas, aumentando el número de IDEs soportados y separando la librería pygame de pysfml. Probablemente éstos cambios afecten al juego pero todavía no se haya actualizado su código. De hecho si se trata de modificar la rotación de un sprite utilizando pygame como motor base, éste lanza el aviso que mencionas. Trata de leer la documentación para ejecutar el juego usando pysfml y cuéntanos que tal.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Lun Dic 13, 2010 8:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TucumetaL]]></name></author>
<updated>2010-12-13T19:20:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4582#p4582</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4582#p4582"/>
<title type="html"><![CDATA[Re: Asteroides, el primer juego hecho de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4582#p4582"><![CDATA[
Ayer empece con Pilas, y parece estar muy bueno, pero he tenido un par de problemitas. <br />Uno fue con el juego este (Asteroides), apenas empieza y aparece el menu, y en la terminal empieza a mostrase &quot;pygame no permite cambiar la rotacion&quot; y se cuelga mostrando eso. La animacion de fondo del juego corre normalmente, se ve un asteroide pequeño que va volando.<br />Habra algun modo de solucionarlo?<br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2356">TucumetaL</a> — Lun Dic 13, 2010 7:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2010-11-23T20:27:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4458#p4458</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4458#p4458"/>
<title type="html"><![CDATA[Re: Asteroides, el primer juego hecho de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4458#p4458"><![CDATA[
¡Mis más sinceras felicitaciones Hugo! Se ve increiblemente bien.<br /><br />¡Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Nov 23, 2010 8:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lmorillas]]></name></author>
<updated>2010-11-23T12:46:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4457#p4457</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4457#p4457"/>
<title type="html"><![CDATA[Re: Asteroides, el primer juego hecho de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4457#p4457"><![CDATA[
Muy buena pinta. Echaremos un vistazo.<br /><br />Adaptaré el creador de ejecutables para windows para crear una versión ejecutable de tu juego. Así lo vemos con un ejemplo real.<br /><br />-- lm<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2338">lmorillas</a> — Mar Nov 23, 2010 12:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-22T23:44:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4456#p4456</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4456#p4456"/>
<title type="html"><![CDATA[Asteroides, el primer juego hecho de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=938&amp;p=4456#p4456"><![CDATA[
Saludos a todos, ayer comencé a escribir un minijuego con pilas y hoy<br />casi lo tengo listo... el nuevo juego se llama asteroides, y si bien tiene<br />algunas fallas se puede jugar y todo...<br /><br />Para descargarlo pueden utilizar mercurial y el siguiente comando:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>hg clone https://hugoruscitti@bitbucket.org/hugoruscitti/asteroides<br /></code></dd></dl><br /><br />o descargarlo directamente con un navegador desde su web:<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/asteroides">http://bitbucket.org/hugoruscitti/asteroides</a><!-- m --><br /><br />Estas son unas capturas del juego:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20101122/asteroides_1.png" alt="Imagen" /><br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20101122/asteroides_2.png" alt="Imagen" /><br /><br />si... si... me falta el contador de puntajes, pero resulta<br />que ya es hora de comer...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 22, 2010 11:44 pm</p><hr />
]]></content>
</entry>
</feed>