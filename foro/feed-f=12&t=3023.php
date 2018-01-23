<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=3023" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-07-13T18:58:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=3023</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-13T18:58:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9260#p9260</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9260#p9260"/>
<title type="html"><![CDATA[Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9260#p9260"><![CDATA[
<blockquote><div><cite>Ezequiel Pereira escribió:</cite><br />Pues quiero seguir haciendo videojuegos luego de este.<br />Tambien vere Cocos2D-X, no lo conozco pero si veo que me sirve mejor que SDL empezare a usarlo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /></div></blockquote><br /><br />Creeme, no te vas a arrepentir. Cocos2D-X esta basado en el mismo estilo de diseño de <a href="http://cocos2d.org" class="postlink">Cocos2D para Python</a>, tienes muchas cosas ya hechas y listas para que los desarrolladores las usen (como bien supe cuando experimente con Cocos2D para Python), con SDL y con SFML tienes que armar un motor alrededor de ambas librerías, pero con Cocos tienes muchas funcionalidades implementadas que te van a ser útiles (desde transiciones de escenas, pasando por interpolaciones, física y detección de colisiones (gracias a box2D o Chipmunk), cargado de mapas hechos con Tiled, etc.), así que no terminas reinventando la rueda.<br /><br />Algo más, y para que conste así los demás foristas tengan en consideración esta herramienta en particular, es que puedes llevar tu juego a varias plataformas. Así cualquier juego que hayas escrito para GNU lo puedes llevar a iOS o viceversa con unos cambios mínimos en el código fuente. Y con la reciente preferencia de los usuarios por los dispositivos móviles sobre las computadoras de escritorio (o consolas como la OUYA) puede ser provechoso.<br /><br />Oh, y ademas, Cocos2D-X muy usado para el desarrollo de juegos, y es mantenido por asiáticos, así que puedes esperar un motor de suprema calidad xd.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Jul 13, 2013 6:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-07-13T13:21:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9259#p9259</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9259#p9259"/>
<title type="html"><![CDATA[Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9259#p9259"><![CDATA[
Gracias shackra por las recomendaciones y disculpa los problemas que tuviste para compilar  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> .<br />Leere el libro que parece interesante, pues quiero seguir haciendo videojuegos luego de este.<br />Tambien vere Cocos2D-X, no lo conozco pero si veo que me sirve mejor que SDL empezare a usarlo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> .<br /><br />Y con lo de CMake, nunca me gusto Make ni CMake pero como son varios archivos a compilar, quiza si deba usarlo.<br /><br />Aprovechare estos días que mi computadora esta en reparación y los profesores de secundaria (Uruguay) estan de paro bastante para leer tranquilamente.<br /><br />Saludos y gracias de nuevo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> .<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Sab Jul 13, 2013 1:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-11T16:55:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9252#p9252</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9252#p9252"/>
<title type="html"><![CDATA[Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9252#p9252"><![CDATA[
Buen proyecto, el asunto es que no puedo compilarlo xd.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;/tmp/Encamón&#93; ~&gt; g++ Encamón.cpp <br />Encamón.cpp:4:23: error fatal: SDL_image.h: No existe el fichero o el directorio<br /> #include &lt;SDL_image.h&gt;<br />                       ^<br />compilación terminada.<br />jorge &#91;/tmp/Encamón&#93; ~&gt; </code></dd></dl><br /><br />Porque tampoco puedo ejecutarlo xd.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;/tmp/Encamón&#93; ~&gt; http://losersjuegos.com.ar/foro/Encamón <br />http://losersjuegos.com.ar/foro/Encamón: error while loading shared libraries: libSDL_image-1.2.so.0: wrong ELF class: ELFCLASS64<br />jorge &#91;/tmp/Encamón&#93; ~&gt; <br /></code></dd></dl><br /><br />Pero el paquete de cuya propiedad es esa cabezera esta instalada en mi sistema!<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;/tmp/Encamón&#93; ~&gt; find /usr/include/ -name SDL_image.h <br />/usr/include/SDL/SDL_image.h<br />jorge &#91;/tmp/Encamón&#93; ~&gt; pacman -Qo /usr/include/SDL/SDL_image.h<br />/usr/include/SDL/SDL_image.h es propiedad de sdl_image 1.2.12-3<br />jorge &#91;/tmp/Encamón&#93; ~&gt; pacman -Qi sdl_image<br />Nombre            : sdl_image<br />Versión           : 1.2.12-3<br />Descripción       : A simple library to load images of various formats as SDL surfaces<br />Arquitectura      : x86_64<br />URL               : http://www.libsdl.org/projects/SDL_image/<br />Licencias         : custom<br />Grupos            : Nada<br />Provee            : Nada<br />Depende de        : sdl&gt;=1.2.13  libpng  libjpeg&gt;=7  libtiff  zlib<br />Dep. opcionales   : Nada<br />Requerido por     : gource-git  mlt  naev  python2-pygame  redeclipse  tmw  vdrift  vdrift-data  vlc  wesnoth<br />Opcional Para   : Nada<br />En conflicto con    : Nada<br />Reemplaza a         : Nada<br />Tamaño instalado :  93,00 KiB<br />Empaquetador      : Eric Belanger &lt;eric@archlinux.org&gt;<br />Fecha de compilación : dom 28 abr 2013 00:53:39 CST<br />Fecha de instalación : mié 08 may 2013 16:49:53 CST<br />Motivo de la instalación: Instalado como dependencia de otro paquete<br />Script de instalación: No<br />Validado Por   : Firma<br /><br />jorge &#91;/tmp/Encamón&#93; ~&gt; uname -a<br />Linux abril 3.9.9-1-LIBRE #1 SMP PREEMPT Sat Jul 6 02:03:42 UYT 2013 x86_64 GNU/Linux<br /></code></dd></dl><br /><br />Acá la información de mi compilador!<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;~&#93; ~&gt; pacman -Qi gcc<br />Nombre            : gcc<br />Versión           : 4.8.1-1<br />Descripción       : The GNU Compiler Collection - C and C++ frontends<br />Arquitectura      : x86_64<br />URL               : http://gcc.gnu.org<br />Licencias         : GPL  LGPL  FDL  custom<br />Grupos            : base-devel<br />Provee            : Nada<br />Depende de        : gcc-libs=4.8.1-1  binutils&gt;=2.23  libmpc  cloog<br />Dep. opcionales   : Nada<br />Requerido por     : boost-build  dkms-libre  gcc-fortran  ghc  libreoffice-sdk<br />Opcional Para   : Nada<br />En conflicto con    : Nada<br />Reemplaza a         : Nada<br />Tamaño instalado : 76599,00 KiB<br />Empaquetador      : Allan McRae &lt;allan@archlinux.org&gt;<br />Fecha de compilación : vie 31 may 2013 07:24:26 CST<br />Fecha de instalación : mié 05 jun 2013 11:59:30 CST<br />Motivo de la instalación: Instalado explícitamente<br />Script de instalación: Sí<br />Validado Por   : Firma<br /><br />jorge &#91;~&#93; ~&gt; <br /></code></dd></dl><br /><br />En fin. Veo que estas programando en C++ y sin embargo, no aprovechas las programación orientada a objetos (que es una mejora en relación a C (Si quires mejorar tu C++ como yo, te recomiendo leer el libro Pensar en C Vol. 1[1] (también existe un volumen 2!))), y también veo que no aprovechas las nuevas tecnologias como Cocos2D-X[2] (No te preocupes, ademas de dispositivos mobiles, tambien puedes compilar para computadoras de escritorio con GNU, Windows o MacOs[3]). En fin, es mi recomendación antes de que continues con el proyecto y se haga enorme (apuesto que cuando hablas de &quot;se me hace complicado&quot; es por culpa de la programación funcional que debes usar con SDL!) <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br />[1] http://www.etnassoft.com/biblioteca/pensar-en-c-plus-plus/<br />[2] http://www.cocos2d-x.org/projects/cocos2d-x/wiki/About_Us<br />[3] http://www.cocos2d-x.org/boards/6/topics/29771<br /><br /><span style="font-weight: bold">EDITO:</span><br /><br />me fije que existe un archivo .sh que se llama compile, así que lo use y trate de correr el juego compilado, pero...<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;/tmp/Encamón&#93; ~&gt; http://losersjuegos.com.ar/foro/compile.sh <br />jorge &#91;/tmp/Encamón&#93; ~&gt; http://losersjuegos.com.ar/foro/Encamón <br />data/rooms/0/pers.so: wrong ELF class: ELFCLASS32<br />jorge &#91;/tmp/Encamón&#93; ~&gt; <br /></code></dd></dl><br /><br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br /><span style="font-weight: bold">EDITO 2:</span><br /><br />Re-compile las salas, todo lo que esta en &quot;.http://losersjuegos.com.ar/foro/Encamón/data/rooms&quot; y pues, ya funciona el juego xd.<br /><br /><img src="http://img.ctrlv.in/img/51dee276a03d6.png" alt="Imagen" /><br /><br />Me da la impresión que debes aprender a usar <a href="https://es.wikipedia.org/wiki/CMake" class="postlink">CMake</a> para que no sea tan... dificil compilar todo el proyecto cuando el usuario lo necesita!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Jul 11, 2013 4:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-06-05T01:35:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9240#p9240</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9240#p9240"/>
<title type="html"><![CDATA[Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9240#p9240"><![CDATA[
<blockquote><div><cite>Ezequiel Pereira escribió:</cite><br />Un ejemplo de Pokémon seria: Un gimnasio con unas barreras eléctricas en donde se necesita vencer a otros entrenadores para abrirlas y llegar al lider.<br />Si para eso tengo que modificar todo el código del juego, me volvería loco <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> .<br /></div></blockquote><br /><br />Bueno, eso depende, la librería que utilizas para leer esos archivos es exclusiva de linux <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Jun 05, 2013 1:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-06-04T10:57:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9239#p9239</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9239#p9239"/>
<title type="html"><![CDATA[Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9239#p9239"><![CDATA[
Gracias barajas por los enlaces, cada tanto visito WikiDex para darme una idea  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> .<br /><blockquote><div><cite>Barajas escribió:</cite><br />Eso no es del todo cierto, o no entendí muy bien lo de las salas....<br /></div></blockquote><br /><br />Las salas usan un pequeño objeto compartido para que se le pueda dar más &quot;vida&quot; sin tener que editar todo el juego.<br />Un ejemplo de Pokémon seria: Un gimnasio con unas barreras eléctricas en donde se necesita vencer a otros entrenadores para abrirlas y llegar al lider.<br />Si para eso tengo que modificar todo el código del juego, me volvería loco  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> .<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Mar Jun 04, 2013 10:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-06-04T05:42:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9237#p9237</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9237#p9237"/>
<title type="html"><![CDATA[Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9237#p9237"><![CDATA[
Bueno, por algo se empieza <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Te recomiendo que leas estos artículos en la wiki de pokemon sobre como se calculan algunas variables:<br /><a href="http://es.pokemon.wikia.com/wiki/Da%C3%B1o" class="postlink">http://es.pokemon.wikia.com/wiki/Da%C3%B1o</a><br /><a href="http://es.pokemon.wikia.com/wiki/Experiencia" class="postlink">http://es.pokemon.wikia.com/wiki/Experiencia</a><br /><br />(créeme, siempre que veo las formulas me quedo con cara de WTF XD )<br /><br /><blockquote class="uncited"><div><br />Esta hecho para Linux, no creo que funcione en otro sistema porque usa librerías para las salas<br /></div></blockquote><br /><br />Eso no es del todo cierto, o no entendí muy bien lo de las salas.... <br /><br /><br />Si no he respondido últimamente es que estoy en trabajando en un proyecto personal, y espero poder mostrarlo (en no más de dos meses) XD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Jun 04, 2013 5:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-06-01T21:38:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9236#p9236</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9236#p9236"/>
<title type="html"><![CDATA[Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9236#p9236"><![CDATA[
Desde el verano estoy trabajando cuando puedo en un videojuego que sea como los de Pokémon pero libre.<br />Tengo algo hecho pero cada tanto se me dificulta seguir porque me complica así que se me ocurrió pedir gente aquí interesada en hacerlo además de mi.<br /><br /><a href="https://docs.google.com/file/d/0B9fGBUPoau1_Y0FibEpvRzViODA/edit?usp=sharing" class="postlink">Programa (Esta compilado en Linux i386 de 32 bits)</a><br /><br />Controles:<br />Flechas del teclado - Mover al personaje (Solo horizontal y vertical)<br />Barra espaciadora - Hablar con el personaje en frente<br />Enter - Menú:<br />* Arriba/Abajo - Moverse entre las opciones<br />* Barra espaciadora - Seleccionar opción<br />* Enter - Salir del menú<br /><br />Varios detalles:<br />- Se llama &quot;Encamón&quot;, el nombre lo hice partiendo de &quot;Encapsulated Monsters&quot; (El tilde en la &quot;O&quot; es para que la pronunciación sea más linda)<br />- No usa bloques al caminar como los juegos tradicionales de Pokémon, sino que la forma de caminar intenta ser más bien como la de la saga de Pokémon Ranger.<br />- Los gráficos son hechos por mi, no esperen que sean muy lindos<br />- Esta programado por mi, no esperen código muy prolijo<br />- Esta hecho para Linux, no creo que funcione en otro sistema porque usa librerías para las salas<br />- Las colisiones son un poco brutas<br />- La opción guardado del menú no indica que se guardo pero si funciona<br /><br />¿Que tal?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Sab Jun 01, 2013 9:38 pm</p><hr />
]]></content>
</entry>
</feed>