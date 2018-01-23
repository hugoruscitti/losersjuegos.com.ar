<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1125" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-29T09:39:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1125</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-04-29T09:39:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5465#p5465</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5465#p5465"/>
<title type="html"><![CDATA[Re: Mucho C ¿Cual elegir?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5465#p5465"><![CDATA[
te juro que la proxima vez que lea un perdon por molestar o perdon por mi inexperiencia o algo de eso voy donde sea que estés y te meto una colleja xD Deja de pedir perdón<br /><br />Bueno, a lo que ibamos:<br />Las dlls las carga el ejecutable al iniciarse, y siempre las busca en 2 sitios en Windows, en la carpeta del ejecutable, y en las carpetas contenidas en la variable de entorno PATH<br /><br />Así que o la copias junto con el ejecutable (solución que solo te sirve para ese proyecto, pero te haría más fácil la distribución) o te lo copias en C:\Windows\system32 (solución que te sirve para todos los proyectos, pero solo en tu ordenador, si quisieras distribuir el juego tendrías que copiar las dlls de nuevo al lado del ejecutable<br /><br />Hasta otra<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Abr 29, 2011 9:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-04-29T04:11:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5463#p5463</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5463#p5463"/>
<title type="html"><![CDATA[Re: Mucho C ¿Cual elegir?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5463#p5463"><![CDATA[
Perdon por la demora vole el disco duro jjajajajaj, bueno a lo de mi duda, pase los archivos *.a a la carpeta lib de MinGW y la carfeda SFML a include hasta ahi todo bien, compilo el programa y cero errores, pero cuando lo corro me sale un error que dice que no se encuentra libgcc_s_dw2-1.dll. Por cierto ¿los archivos dll que estan en mi carpeta lib donde van?, muchas gracias y perdon la molestia<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Vie Abr 29, 2011 4:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-04-26T06:56:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5453#p5453</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5453#p5453"/>
<title type="html"><![CDATA[Re: Mucho C ¿Cual elegir?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5453#p5453"><![CDATA[
buenas kyrian:<br /><br />has seguido <a href="http://www.sfml-dev.org/tutorials/1.6/start-cb.php" class="postlink">este</a> tutorial?<br />En caso de ser así, cuales son los fallos que te da?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Abr 26, 2011 6:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-04-26T03:00:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5451#p5451</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5451#p5451"/>
<title type="html"><![CDATA[Re: Mucho C ¿Cual elegir?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5451#p5451"><![CDATA[
Bueno ya baje lo que se necesita pero tengo un error al correr los programas que hago, primero que nada baje el Code::Blocks los dos archivos, ya despues me baje el SFML completo el que dice que tiene la documentación y archivos de mas. hasta ahi voy bien, veran veo que la instalación en el Code::Blocks dice que tengo que pasar los archivos a la carpeta lib del minGW  y crear una carpeta en include y pasar  la carpeta SFML y de ahi me voy settings y a compiler and debugger luego voy a search directories y agrego las carpetas pero no me corren los archivos, perdon por molestar tanto. y de antemano gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Mar Abr 26, 2011 3:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-04-25T19:32:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5448#p5448</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5448#p5448"/>
<title type="html"><![CDATA[Re: Mucho C ¿Cual elegir?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5448#p5448"><![CDATA[
Muchas gracias ya estoy descargando las cosas, el codeblocks junto con minGW y el SFML para el mismo a ver que sale<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Lun Abr 25, 2011 7:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-04-25T06:47:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5446#p5446</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5446#p5446"/>
<title type="html"><![CDATA[Re: Mucho C ¿Cual elegir?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5446#p5446"><![CDATA[
<blockquote><div><cite>Kyrian escribió:</cite><br />¿cual se usa de todo eso?<br /></div></blockquote><br /><br />Pues puedes usar todo o nada xD<br />En realidad, todo depende de que quieras hacer:<br /><br />QT: diseño de GUI. También hay gente que se crea sus propios widgets. Si tu plataforma es únicamente windows, en mi opinión son mejores los Winforms de C#<br />GTK: Más de lo mismo<br />MinGW: una copia &quot;barata&quot; del GCC de linux, es decir, un compilador de toda la vida<br />CYGWIN: Un intento de llevar toda la funcionalidad de la consola de unix a windows, pero tiene poco que ver con programación en sí<br />Yo te recomendaría C++ y como biblioteca principal SFML, que ya se encarga de bastantes cosas básicas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Abr 25, 2011 6:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-04-25T05:39:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5445#p5445</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5445#p5445"/>
<title type="html"><![CDATA[Mucho C ¿Cual elegir?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1125&amp;p=5445#p5445"><![CDATA[
<img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> Ya se soy una molestia andando pero me resulto una duda, ustedes tienen ejemplos de juegos hechos en c y c++, pero e visto que en internet, hay QT, GTK, MinGW, CYGWIN, GCC, me da vueltas la cabeza, ¿cual se usa de todo eso? veran ya estamos formando un grupo de desarrollo pero mi gente se esta inclinando con c y/o c++, claro sera desarrollo de juegos, desarrollo de aplicaciones visuales labels, textbox, combobox, etc. Me pueden ayudar.... Muchas gracias de antemano <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Lun Abr 25, 2011 5:39 am</p><hr />
]]></content>
</entry>
</feed>