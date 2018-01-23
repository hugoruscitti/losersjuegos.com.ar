<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2014-10-22T14:51:54+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12</id>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2014-10-22T14:51:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Idea de juego en nube (es dificil describir en una frase]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320"><![CDATA[
Esta idea que tuve hace algo más de un año por los estudios me esta llevando más tiempo del esperado pero también por falta de conocimientos, y sobre eso venia a consultar por este foro. Hasta ahora lo que habia hecho siempre eran cosas muy sencillas, en local para el usuario que ejecuta el juego, sin red de por medio ni multi jugador, y tener que controlar la posición, variación, colisión de multiples objetos. Por un lado tengo que si actualizo las posiciones en el momento que interactua el navegador con el servidor para pedir información o indicar acciones seguramente el servidor tarde más en responder al suario las consultas y se repitan a ritmo anormal segun cada navegador pida algo, y pense en la actualización de los objetos, simulacón, movimiento, estado, etc; dejarlo en manos de un proceso fuera de lo que es la comunicacion entre navegador y servidor que continuamente se ejecute y realice el trabajo de si un objeto tiene aceleración calcular la velocidad que le corresponde segun el tiempo transcurrido desde la ultima actualización, segun en que estado este el automata lo actualice al que corresponda luego, cambie la posición, calcule colisiones y actualice los estados, etc; y pensnado en eso se me ha presentado un problema que me imagino se resolvera con mucha matematica de geometria en el espacio pero que es bastante nuevo para mi. ¿Y si una vez calculada, por ejemplo, la posicion nueva que le corresponde a los objetos, resulta que en un punto intermedio entre ese calculo y el anterior, deberian haber colisionado? Por ejemplo un objeto que en el ciclo anterior del bucle se calcula que esta en (0, 0) y en el siguiente se calcula que esta en (2, 2) y por otro lado otro objeto que esta en (2, 0) en el ciclo anterior y en el siguiente esta en (0, 2) y obviamente deberian haber colisionado en (1, 1) suponiendo en el ejemplo que llevan misma velocidad aunque en diferente dirección. ¿Como se puede tener esto en cuenta al ir recalculando cada objeto? Aprovecho además para preguntar si conocen motores de fisica 3D que haga este tipo de calculos.<br /><br />El juego lo que es la parte grafica sera en 2D pero quiero qe en lo que es los objetos y la logica cuente ya con el eje z aunque solo se usen por ahora el x e y para los objetos tenerlos preparados para una vez este este listo poder reutilizar código para un intento de 3D cambiando unicamente la aprte de la interfaz, sin tocar la logica. Para soportar mejor multiples jugadores de la forma mas masiva que pueda habia pensado en usar REST en lugar de Websocket para así no gastar el maximo de conexiones que soporte el servidor ycon REST intercambiar el estado de los objetos JavaScript y Python.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Mié Oct 22, 2014 2:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-13T18:58:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9260#p9260</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9260#p9260"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9260#p9260"><![CDATA[
<blockquote><div><cite>Ezequiel Pereira escribió:</cite><br />Pues quiero seguir haciendo videojuegos luego de este.<br />Tambien vere Cocos2D-X, no lo conozco pero si veo que me sirve mejor que SDL empezare a usarlo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /></div></blockquote><br /><br />Creeme, no te vas a arrepentir. Cocos2D-X esta basado en el mismo estilo de diseño de <a href="http://cocos2d.org" class="postlink">Cocos2D para Python</a>, tienes muchas cosas ya hechas y listas para que los desarrolladores las usen (como bien supe cuando experimente con Cocos2D para Python), con SDL y con SFML tienes que armar un motor alrededor de ambas librerías, pero con Cocos tienes muchas funcionalidades implementadas que te van a ser útiles (desde transiciones de escenas, pasando por interpolaciones, física y detección de colisiones (gracias a box2D o Chipmunk), cargado de mapas hechos con Tiled, etc.), así que no terminas reinventando la rueda.<br /><br />Algo más, y para que conste así los demás foristas tengan en consideración esta herramienta en particular, es que puedes llevar tu juego a varias plataformas. Así cualquier juego que hayas escrito para GNU lo puedes llevar a iOS o viceversa con unos cambios mínimos en el código fuente. Y con la reciente preferencia de los usuarios por los dispositivos móviles sobre las computadoras de escritorio (o consolas como la OUYA) puede ser provechoso.<br /><br />Oh, y ademas, Cocos2D-X muy usado para el desarrollo de juegos, y es mantenido por asiáticos, así que puedes esperar un motor de suprema calidad xd.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Jul 13, 2013 6:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-07-13T13:21:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9259#p9259</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9259#p9259"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9259#p9259"><![CDATA[
Gracias shackra por las recomendaciones y disculpa los problemas que tuviste para compilar  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> .<br />Leere el libro que parece interesante, pues quiero seguir haciendo videojuegos luego de este.<br />Tambien vere Cocos2D-X, no lo conozco pero si veo que me sirve mejor que SDL empezare a usarlo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> .<br /><br />Y con lo de CMake, nunca me gusto Make ni CMake pero como son varios archivos a compilar, quiza si deba usarlo.<br /><br />Aprovechare estos días que mi computadora esta en reparación y los profesores de secundaria (Uruguay) estan de paro bastante para leer tranquilamente.<br /><br />Saludos y gracias de nuevo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> .<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Sab Jul 13, 2013 1:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-11T16:55:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9252#p9252</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9252#p9252"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9252#p9252"><![CDATA[
Buen proyecto, el asunto es que no puedo compilarlo xd.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;/tmp/Encamón&#93; ~&gt; g++ Encamón.cpp <br />Encamón.cpp:4:23: error fatal: SDL_image.h: No existe el fichero o el directorio<br /> #include &lt;SDL_image.h&gt;<br />                       ^<br />compilación terminada.<br />jorge &#91;/tmp/Encamón&#93; ~&gt; </code></dd></dl><br /><br />Porque tampoco puedo ejecutarlo xd.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;/tmp/Encamón&#93; ~&gt; http://losersjuegos.com.ar/foro/Encamón <br />http://losersjuegos.com.ar/foro/Encamón: error while loading shared libraries: libSDL_image-1.2.so.0: wrong ELF class: ELFCLASS64<br />jorge &#91;/tmp/Encamón&#93; ~&gt; <br /></code></dd></dl><br /><br />Pero el paquete de cuya propiedad es esa cabezera esta instalada en mi sistema!<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;/tmp/Encamón&#93; ~&gt; find /usr/include/ -name SDL_image.h <br />/usr/include/SDL/SDL_image.h<br />jorge &#91;/tmp/Encamón&#93; ~&gt; pacman -Qo /usr/include/SDL/SDL_image.h<br />/usr/include/SDL/SDL_image.h es propiedad de sdl_image 1.2.12-3<br />jorge &#91;/tmp/Encamón&#93; ~&gt; pacman -Qi sdl_image<br />Nombre            : sdl_image<br />Versión           : 1.2.12-3<br />Descripción       : A simple library to load images of various formats as SDL surfaces<br />Arquitectura      : x86_64<br />URL               : http://www.libsdl.org/projects/SDL_image/<br />Licencias         : custom<br />Grupos            : Nada<br />Provee            : Nada<br />Depende de        : sdl&gt;=1.2.13  libpng  libjpeg&gt;=7  libtiff  zlib<br />Dep. opcionales   : Nada<br />Requerido por     : gource-git  mlt  naev  python2-pygame  redeclipse  tmw  vdrift  vdrift-data  vlc  wesnoth<br />Opcional Para   : Nada<br />En conflicto con    : Nada<br />Reemplaza a         : Nada<br />Tamaño instalado :  93,00 KiB<br />Empaquetador      : Eric Belanger &lt;eric@archlinux.org&gt;<br />Fecha de compilación : dom 28 abr 2013 00:53:39 CST<br />Fecha de instalación : mié 08 may 2013 16:49:53 CST<br />Motivo de la instalación: Instalado como dependencia de otro paquete<br />Script de instalación: No<br />Validado Por   : Firma<br /><br />jorge &#91;/tmp/Encamón&#93; ~&gt; uname -a<br />Linux abril 3.9.9-1-LIBRE #1 SMP PREEMPT Sat Jul 6 02:03:42 UYT 2013 x86_64 GNU/Linux<br /></code></dd></dl><br /><br />Acá la información de mi compilador!<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;~&#93; ~&gt; pacman -Qi gcc<br />Nombre            : gcc<br />Versión           : 4.8.1-1<br />Descripción       : The GNU Compiler Collection - C and C++ frontends<br />Arquitectura      : x86_64<br />URL               : http://gcc.gnu.org<br />Licencias         : GPL  LGPL  FDL  custom<br />Grupos            : base-devel<br />Provee            : Nada<br />Depende de        : gcc-libs=4.8.1-1  binutils&gt;=2.23  libmpc  cloog<br />Dep. opcionales   : Nada<br />Requerido por     : boost-build  dkms-libre  gcc-fortran  ghc  libreoffice-sdk<br />Opcional Para   : Nada<br />En conflicto con    : Nada<br />Reemplaza a         : Nada<br />Tamaño instalado : 76599,00 KiB<br />Empaquetador      : Allan McRae &lt;allan@archlinux.org&gt;<br />Fecha de compilación : vie 31 may 2013 07:24:26 CST<br />Fecha de instalación : mié 05 jun 2013 11:59:30 CST<br />Motivo de la instalación: Instalado explícitamente<br />Script de instalación: Sí<br />Validado Por   : Firma<br /><br />jorge &#91;~&#93; ~&gt; <br /></code></dd></dl><br /><br />En fin. Veo que estas programando en C++ y sin embargo, no aprovechas las programación orientada a objetos (que es una mejora en relación a C (Si quires mejorar tu C++ como yo, te recomiendo leer el libro Pensar en C Vol. 1[1] (también existe un volumen 2!))), y también veo que no aprovechas las nuevas tecnologias como Cocos2D-X[2] (No te preocupes, ademas de dispositivos mobiles, tambien puedes compilar para computadoras de escritorio con GNU, Windows o MacOs[3]). En fin, es mi recomendación antes de que continues con el proyecto y se haga enorme (apuesto que cuando hablas de &quot;se me hace complicado&quot; es por culpa de la programación funcional que debes usar con SDL!) <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br />[1] http://www.etnassoft.com/biblioteca/pensar-en-c-plus-plus/<br />[2] http://www.cocos2d-x.org/projects/cocos2d-x/wiki/About_Us<br />[3] http://www.cocos2d-x.org/boards/6/topics/29771<br /><br /><span style="font-weight: bold">EDITO:</span><br /><br />me fije que existe un archivo .sh que se llama compile, así que lo use y trate de correr el juego compilado, pero...<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge &#91;/tmp/Encamón&#93; ~&gt; http://losersjuegos.com.ar/foro/compile.sh <br />jorge &#91;/tmp/Encamón&#93; ~&gt; http://losersjuegos.com.ar/foro/Encamón <br />data/rooms/0/pers.so: wrong ELF class: ELFCLASS32<br />jorge &#91;/tmp/Encamón&#93; ~&gt; <br /></code></dd></dl><br /><br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br /><span style="font-weight: bold">EDITO 2:</span><br /><br />Re-compile las salas, todo lo que esta en &quot;.http://losersjuegos.com.ar/foro/Encamón/data/rooms&quot; y pues, ya funciona el juego xd.<br /><br /><img src="http://img.ctrlv.in/img/51dee276a03d6.png" alt="Imagen" /><br /><br />Me da la impresión que debes aprender a usar <a href="https://es.wikipedia.org/wiki/CMake" class="postlink">CMake</a> para que no sea tan... dificil compilar todo el proyecto cuando el usuario lo necesita!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Jul 11, 2013 4:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-06-05T01:35:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9240#p9240</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9240#p9240"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9240#p9240"><![CDATA[
<blockquote><div><cite>Ezequiel Pereira escribió:</cite><br />Un ejemplo de Pokémon seria: Un gimnasio con unas barreras eléctricas en donde se necesita vencer a otros entrenadores para abrirlas y llegar al lider.<br />Si para eso tengo que modificar todo el código del juego, me volvería loco <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> .<br /></div></blockquote><br /><br />Bueno, eso depende, la librería que utilizas para leer esos archivos es exclusiva de linux <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Jun 05, 2013 1:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-06-04T10:57:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9239#p9239</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9239#p9239"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9239#p9239"><![CDATA[
Gracias barajas por los enlaces, cada tanto visito WikiDex para darme una idea  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> .<br /><blockquote><div><cite>Barajas escribió:</cite><br />Eso no es del todo cierto, o no entendí muy bien lo de las salas....<br /></div></blockquote><br /><br />Las salas usan un pequeño objeto compartido para que se le pueda dar más &quot;vida&quot; sin tener que editar todo el juego.<br />Un ejemplo de Pokémon seria: Un gimnasio con unas barreras eléctricas en donde se necesita vencer a otros entrenadores para abrirlas y llegar al lider.<br />Si para eso tengo que modificar todo el código del juego, me volvería loco  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> .<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Mar Jun 04, 2013 10:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-06-04T05:42:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9237#p9237</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9237#p9237"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9237#p9237"><![CDATA[
Bueno, por algo se empieza <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Te recomiendo que leas estos artículos en la wiki de pokemon sobre como se calculan algunas variables:<br /><a href="http://es.pokemon.wikia.com/wiki/Da%C3%B1o" class="postlink">http://es.pokemon.wikia.com/wiki/Da%C3%B1o</a><br /><a href="http://es.pokemon.wikia.com/wiki/Experiencia" class="postlink">http://es.pokemon.wikia.com/wiki/Experiencia</a><br /><br />(créeme, siempre que veo las formulas me quedo con cara de WTF XD )<br /><br /><blockquote class="uncited"><div><br />Esta hecho para Linux, no creo que funcione en otro sistema porque usa librerías para las salas<br /></div></blockquote><br /><br />Eso no es del todo cierto, o no entendí muy bien lo de las salas.... <br /><br /><br />Si no he respondido últimamente es que estoy en trabajando en un proyecto personal, y espero poder mostrarlo (en no más de dos meses) XD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Jun 04, 2013 5:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-06-01T21:38:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9236#p9236</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9236#p9236"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Encamón - Proyecto de &quot;Pokémon&quot; libre]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3023&amp;p=9236#p9236"><![CDATA[
Desde el verano estoy trabajando cuando puedo en un videojuego que sea como los de Pokémon pero libre.<br />Tengo algo hecho pero cada tanto se me dificulta seguir porque me complica así que se me ocurrió pedir gente aquí interesada en hacerlo además de mi.<br /><br /><a href="https://docs.google.com/file/d/0B9fGBUPoau1_Y0FibEpvRzViODA/edit?usp=sharing" class="postlink">Programa (Esta compilado en Linux i386 de 32 bits)</a><br /><br />Controles:<br />Flechas del teclado - Mover al personaje (Solo horizontal y vertical)<br />Barra espaciadora - Hablar con el personaje en frente<br />Enter - Menú:<br />* Arriba/Abajo - Moverse entre las opciones<br />* Barra espaciadora - Seleccionar opción<br />* Enter - Salir del menú<br /><br />Varios detalles:<br />- Se llama &quot;Encamón&quot;, el nombre lo hice partiendo de &quot;Encapsulated Monsters&quot; (El tilde en la &quot;O&quot; es para que la pronunciación sea más linda)<br />- No usa bloques al caminar como los juegos tradicionales de Pokémon, sino que la forma de caminar intenta ser más bien como la de la saga de Pokémon Ranger.<br />- Los gráficos son hechos por mi, no esperen que sean muy lindos<br />- Esta programado por mi, no esperen código muy prolijo<br />- Esta hecho para Linux, no creo que funcione en otro sistema porque usa librerías para las salas<br />- Las colisiones son un poco brutas<br />- La opción guardado del menú no indica que se guardo pero si funciona<br /><br />¿Que tal?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Sab Jun 01, 2013 9:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-05-13T23:38:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9231#p9231</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9231#p9231"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: PyBox, un editor de cajas de colisiones.]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9231#p9231"><![CDATA[
Lo estoy usando en un pequeño proyecto que tengo, iré agregando características conforme las necesite <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun May 13, 2013 11:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2013-05-11T05:51:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9230#p9230</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9230#p9230"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: PyBox, un editor de cajas de colisiones.]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9230#p9230"><![CDATA[
waaaa, muy bueno!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab May 11, 2013 5:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-05-07T17:55:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9229#p9229</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9229#p9229"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: PyBox, un editor de cajas de colisiones.]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9229#p9229"><![CDATA[
Bien, después de un poco de trabajo estos días, aquí la versión 0.0.2.<br /><img src="https://dl.dropboxusercontent.com/u/55583026/images/pybox_0_0_2.png" alt="Imagen" /><br /><br />Y aquí el repositorio en github: <a href="https://github.com/BF-Osvaldo/PyBox" class="postlink">https://github.com/BF-Osvaldo/PyBox</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar May 07, 2013 5:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-05-03T01:27:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9228#p9228</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9228#p9228"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • PyBox, un editor de cajas de colisiones.]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3020&amp;p=9228#p9228"><![CDATA[
Estos últimos días he estado trabajando en un juego en SDL, pero me di cuenta de que necesitare un editor de cajas de colisiones, así que, como tenia prisa, me puse a crear uno, les presento PyBox 0.0.1<br /><br />[url]youtu.be/grEt8KPXXSM[/url]<br /> <a href="http://www.youtube.com/v/youtu.be/grEt8KPXXSM"></param><param target="_blank"><strong>object</strong></a> <br /><br />Todo esta escrito usando Pygame, (la gui es por parte de este proyecto: <a href="http://code.google.com/p/pgu/" class="postlink">http://code.google.com/p/pgu/</a>)<br /><br />De momento para descargarlo, Aun falta reparar un par de cosas (los dos primeros menús no tienen una función clara... XD )<br /><br />Liberare el código fuente cuando alcance la versión 0.0.5. Pero si alguien lo necesita, solo pregunte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie May 03, 2013 1:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2013-03-10T21:39:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9174#p9174</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9174#p9174"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Idea de juego en nube (es dificil describir en una frase]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9174#p9174"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br />muy interesante, pero como dicen &quot;dicho al hecho hay mucho trecho&quot;. No intento desanimarte al contrario todo estucha fantástico y espero verlo, dependerá eso de ti <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /></div></blockquote><br /><br />Ya, me imagino, como cualquier cosa, hay que ponerse ha hacerlo. Ahora mismo ya tengo la parte que va en el navegador acabada en el sentido que esta lista para comenzar a hacer pruebas, en vacio supera los 200 y 300 FPS, y con el websocket de ejemplo de ping pude probar al menos la aprte de la comunicación y que ejecute lo que reciva del servidor. En Erlang tengo ya hecho un servidor sencillo de archivos estaticos por HTTP y HTTPS, para servir el archivo de la terminal tonta, y ahora como ya más o menos vi como usar el SSL (al crear el servidor sencillo HTTPS) puedo adentrarme a programar un websocket, pues la parte del SSL es identica a la que ya tengo.<br /><br />De resto, ojala tenga buen rendimiento cuando tenga lo suficiente para las primeras pruebas.<br /><br /><blockquote><div><cite>Barajas escribió:</cite><br />La ventaja del 2D es que consumen menos recursos, los archivos que utilizas son mas pequeños (en teoría) lo que se traduce en menores tiempos de carga, es más fácil definir algunas cosas  y son menos difíciles<br /></div></blockquote><br /><br />Exactamente, por eso preferi empezar por 2D, eso y que al estar la mayor parte del peso en el servidor (empezare usando canvas 2D como no todas las tarjetas soportan WebGL, entre ellas la mia, y esta aun un tanto experimental. Tambien, aunque Erlang pueda paralelizar y distribuir si consigo alguna biblioteca en Erlang para aceleración por hardware seguramente ridna mejor.<br /><br /><blockquote><div><cite>Barajas escribió:</cite><br />Nuevamente, me disculpo por la tardanza en la respuesta.<br /></div></blockquote><br /><br />No pasa nada por tardar <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Gracias por tu opinion <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Dom Mar 10, 2013 9:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-03-10T07:49:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9172#p9172</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9172#p9172"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Re: Idea de juego en nube (es dificil describir en una frase]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9172#p9172"><![CDATA[
Disculpa la tardanza, en mi opinión todo parece muy interesante, pero como dicen &quot;dicho al hecho hay mucho trecho&quot;. No intento desanimarte al contrario todo estucha fantástico y espero verlo, dependerá eso de ti <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br /><blockquote><div><cite>jhg escribió:</cite><br />Y poco mas que comentar, que seria empezar con juegos en 2D, ya teniendo un juego se podria ver mejor el rendimiento de todo e intentar optimizarlo para poder soportar juegos que necesiten mas potencia, etc; o intentar pasar al 3D.<br /></div></blockquote><br /><br />La ventaja del 2D es que consumen menos recursos, los archivos que utilizas son mas pequeños (en teoría) lo que se traduce en menores tiempos de carga, es más fácil definir algunas cosas  y son menos difíciles de hacer que los juegos en 3D. Además, tienen el plus que cuando dominas su lógica, pasar a 3D es mucho más sencillo. <br /><br />Nuevamente, me disculpo por la tardanza en la respuesta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Mar 10, 2013 7:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2013-03-05T20:59:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9168#p9168</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9168#p9168"/>
<title type="html"><![CDATA[Propuestas de desarrollo y concursos • Idea de juego en nube (es dificil describir en una frase)]]></title>

<category term="Propuestas de desarrollo y concursos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=12" label="Propuestas de desarrollo y concursos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9168#p9168"><![CDATA[
Hola, llevo bastante tiempo sin pasarme por los foros entre el ciclo que ya acabe y cinco meses trabajando para un negrero amante de pagar poco y la ilegalidad (una larga historia), y vengo con una idea que comentarles a ver que opinan, si tienen ideas o sugerencias, y hablarlo un poco.<br /><br />He pensado en crear un servidor de juegos (para multiples juegos, no solo uno, tipo steam por hacer una anologia, o google play, etc; aunque no sea exactamente igual), la idea que luego el servidor funcione siempre y sin cortes ni siquiera para actualizaciones, etc; pero ademas que se pudiera jugar desde el ordenador propio de uno, o cuando no lo tenga a mano poder jugar desde otro ordenador pero sin instalaciones, pues cuando el ordenador no es de uno no siempre se puede estar instalando cosas, y que fuese multiplataforma los juegos. Además, pues, si son juegos online obviamente hay que evitar que se pueda toquetear demasiado, cosas que lo mismo en un juego de una persona da igual y hasta resulta interesante y queda como truco etc, pues en un juego multijugador pues lo mismo no hace tanta gracia que uno juegue limpiamente y aparezca uno en plan dar un click y pierdes asi por la cara.<br /><br />La idea basicamente viene a ser eso, y que el código sea software libre, y hasta pense en que hubiese juegos que ademas de libres sean gratis y otros de pago o con opciones premium de pago, para intentar darles rentabilidad a los juegos libres tambien. He pensado en tener en el navegador unicamente una especie de terminal tonto, 3 canvas para dibujar lo que le mande el servidor (con canvas 2D porque el webgl aun no es compatible con todas las tarjetas graficas, al menos no con la mia en mi linux mint probandolo desde chromium y desde firefox) (3 canvas para poder tener controles en primer plano y no estar todo el rato redibujando y lo mismo con el fondo y asi en el del medio poder dibujar solo lo que mas cambie, la idea es mejorar el rendimiento), el navegador los eventos de teclado y raton los envia al servidor de igual forma que recibe del servidor que tiene que hacer. La comunicación he pensado hacerla con WebSockets (estube probandolos con el servidor websocket de una aplicacion de ping que encontre y la verdad que parece buena la velocidad lograda). Para los graficos, he pensado tanto el enviar desde el servidor que puntos son los que han cambiado (esto es parecido a lo que hace VNC por lo que estuve leyendo en wikipedia) o en enviar la información de que imagenes o formas dibujar y que lo haga el navegador. Para el servidor, aunque tengo mas experiencia con php y python (en python con django) he pensado en hacerlo en erlang ya que asi podria por ejemplo actualizarlo en caliente aunque estubieran jugando en ese momento y tiene hilos propios en vez de los del sistema, con lo que los limites del sistema para evitar bombas fork o limites propios del hardware no le afectan, y que es facil conectar varias maquinas a ejecutar el servidor como un cluster.<br /><br />Hasta ahora unicamente tengo hecho la terminal tonta web donde se jugaria, y estoy usando el servidor de un ejemplo de ping con websocket que vi para hacer pruebas. La velocidad del websocket como ya dije parece buena por lo menos de momento, aun solo capturo y envio los eventos de raton y teclado aunque seria interesante capturar y enviar tambien los eventos touch para mejor compatibilidad con los moviles. En la terminal tonta tengo hechas funciones para descargar las imagenes desde javascript y el audio, y algunas funciones para dibujar el canvas de forma un poco optimizada, por ejemplo tengo una funcion para dibujar un trayecto a partir de un array de arrays que indiquen los puntos, una funcion para dibujar puntos, etc, y sigo intentando mejorar el rendimiento lo mas posible. Tambien hice unas funciones envoltorio para dibujar imagenes en el canvas que comprueba que esten ya descargadas, para evitar errores de javascript que pudieran parar todo el funcionamiento de la web.<br /><br />Del servidor, aun no lo he empezado (llevo solo dos dias con esta idea), pero estoy ya mirando como podria montar el servidor con SSL para que fuesen websockets seguros.<br /><br />Y poco mas que comentar, que seria empezar con juegos en 2D, ya teniendo un juego se podria ver mejor el rendimiento de todo e intentar optimizarlo para poder soportar juegos que necesiten mas potencia, etc; o intentar pasar al 3D.<br /><br />¿La idea que os parece?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Mar Mar 05, 2013 8:59 pm</p><hr />
]]></content>
</entry>
</feed>