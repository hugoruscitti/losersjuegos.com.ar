<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=166" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-01-15T06:30:45+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=166</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-01-15T06:30:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=842#p842</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=842#p842"/>
<title type="html"><![CDATA[Problema con Allegro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=842#p842"><![CDATA[
¿Qué compilador usas? Cámbialo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> (o instala correctamente Allegro).<br /><br />En Linux compila sin problemas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Ene 15, 2008 6:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[wellingtom]]></name></author>
<updated>2008-01-14T14:32:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=830#p830</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=830#p830"/>
<title type="html"><![CDATA[Problema con Allegro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=830#p830"><![CDATA[
hello!<br /><br />oye, a mi me pasó lo mismo, lo categoricé como inresolvible, ó nunca supe resolver el problema, ahora tal vez si podría, pero no quise aprender allegro, porque descubrí a SDL...<br />en fin, tu error, no es de sintax, (el compilador ni siquiera ha evaluado tu codigo) el error es del linker. Como tu dices, no puede encontrar &quot;pc.h&quot;, por lo tanto, aborta la compilación, y te saca ese error... si intentaras ir contra la marea, y corregir ese error (localizando el archivo pc.h), lo que obtendrás es, u otro error similar, pero con otro archivo diferente, o muchos errores que lo que harán es confundirte...<br />no dices cuál es tu compilador, sis eso casi no se te puede ayudar, aunque<br /><br />c:\archivos de programa\<span style="color: red">microsoft visual studio\vc98</span>\include\allegro\platform\aldjgpp.h(19)<br /><br />aqui de ultimo hay algo que puede ayudarte, (no lo que está en inglés)<br />más abajo.... xD<br /><br /><!-- m --><a class="postlink" href="http://my.opera.com/Bycho/blog/">http://my.opera.com/Bycho/blog/</a><!-- m --><br /><br />(el codigo que sale, te puede servir para el compilador dev-c++)<br />(pero como yo lo odio, preferí aprender otra cosa)<br /><br />saludos,,,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1861">wellingtom</a> — Lun Ene 14, 2008 2:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sette]]></name></author>
<updated>2007-09-27T01:00:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=563#p563</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=563#p563"/>
<title type="html"><![CDATA[Problema con Allegro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=166&amp;p=563#p563"><![CDATA[
Hola amigos soy nuevo, estoy aca para ver si me pueden ayudar a resolver este problema, que debe ser muy común porque cuando lo busque en google aparecieron muchos temas...pero ninguno tenia la solución (también hay que recalcar que estaban todos en ingles y yo no entiendo mucho)<br /><br />El codigo es este:<br /><br />#include &quot;allegro.h&quot;<br />#include &quot;stdio.h&quot;<br />#include &quot;math.h&quot;<br />main()<br />{<br />allegro_init();<br />install_keyboard();<br />install_timer();<br />set_gfx_mode(GFX_AUTODETECT,320,200,0,0);<br />do{<br />putpixel(screen,rand()%320,rand()%200,rand()%255);<br />}while(!keypressed());<br /><br />}END_OF_MAIN();<br /><br />El error que me tira es este:<br /><br />Compiling...<br />programa1.cpp<br />c:\archivos de programa\microsoft visual studio\vc98\include\allegro\platform\aldjgpp.h(19) : fatal error C1083: Cannot open include file: 'pc.h': No such file or directory<br />Error executing cl.exe.<br /><br />Text1.exe - 1 error(s), 0 warning(s)<br /><br />Dice que no puede abrir &quot;pc.h&quot; o algo asi<br /><br />Si alguien me puede ayudar con este problema se lo agradeceria mucho, nos vemos suerte!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1821">sette</a> — Jue Sep 27, 2007 1:00 am</p><hr />
]]></content>
</entry>
</feed>