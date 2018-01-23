<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=390" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-08-27T23:03:31+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=390</id>
<entry>
<author><name><![CDATA[rebach]]></name></author>
<updated>2009-08-27T23:03:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2846#p2846</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2846#p2846"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2846#p2846"><![CDATA[
@ carlostex  gracias por la idea cuando pase los examenes tengo interes en volver a mirarmelo un poco, sino lo entiendo mucho ya me pondre a preguntarte alguna duda jejeje<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2003">rebach</a> — Jue Ago 27, 2009 11:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-14T17:09:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2743#p2743</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2743#p2743"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2743#p2743"><![CDATA[
carlostex, no lo digo por nada en particular, pero creo que no conviene &quot;revivir&quot; post  tan viejos. Fijate que la fecha de la última respuesta es de hace 8 meses. Yo creo que si los post son tan viejos, es mejor que le mandes un mensaje privado, y en caso de que te conteste, pues entonces lo publicas o lo compartes con los demás. Más que nada porque yo creo, que a lo mejor me equivoco, que no va  a haber respuesta del autor del tema.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Jul 14, 2009 5:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2009-07-14T16:48:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2740#p2740</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2740#p2740"/>
<title type="html"><![CDATA[usar fps fijos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=2740#p2740"><![CDATA[
Hola, estoy aciendo un juego de unos tanques, tiene enemigos los cuales disparan cada determinado tiempo, asi que aver si te sirve el metodo que use, te cuento.<br />Tengo declarada una variable global que define cuantos fps corren, y uso un contador de tiempo, son dos funciones una resetea el tiempo en una varible a la que le llamo tiempo de inicio, y otra funcion que me debuelve cuanto tiempo transcurrio a partir de que resetee el tiempo, el codigo es el sig.<br /><dl class="codebox"><dt>Code: </dt><dd><code><br />void reset_time&#40;&#41;&#123;<br />   <br />   time_inicio=SDL_GetTicks&#40;&#41;;<br />&#125;<br /><br />Uint32 current_time&#40;&#41;&#123;<br />   time_actual=SDL_GetTicks&#40;&#41;;<br />   return time_actual-time_inicio;<br />   <br />   &#125;<br /></code></dd></dl><br /><br />el mecanismo es muy cencillo tomar el tiempo transcurrido desde que se inicio sdl en dos tiempos disintos, el ultimo valor tiempo sera mayor al primero si restar el ultimo al anterior vas a obtener el tiempo que transcurrio.<br />pues en mi bucle llamo a reset_time al inicio, y al final llamo a current_time, y lo sigo llamando dentro de un while, hasta que no trancurra determinado tiempo, en este caso, divido 1000/fps para obtener cuanto tiempo requiero esperar.<br />tambien manejo una variable llamda ciclos, cada siclo aumenta en cada vuelta del bucle, y por ejemplo, mis enemigos disparan cada 20 ciclos, y creo obtienes mas control del tiempo en el juegos, espero te sirva<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Jul 14, 2009 4:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-11-12T16:59:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1736#p1736</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1736#p1736"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1736#p1736"><![CDATA[
es raro que se te quede solo negra y no te tire errores...<br /><br />lo probe en 2 ordenadores bajo win, sin embargo nunca tuve el problema de la pantalla negra.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Mié Nov 12, 2008 4:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rebach]]></name></author>
<updated>2008-11-10T22:34:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1735#p1735</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1735#p1735"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1735#p1735"><![CDATA[
Si sale un error sera por la linia:<br />  <dl class="codebox"><dt>Code: </dt><dd><code>if&#40;&#40;lista == NULL&#41; &amp;&amp; &#40;contador &lt; 1000&#41;&#41;<br />         crearListaEnemis&#40;&amp;lista&#41;;</code></dd></dl><br /><br /> La idea es que no llegue a esa puntuacion porque antes se habra pasado de nivell, luchara contra enemigos mas fuertes o se canviara la nave, varias posibilidades para cuando el juego no ande tan verde.<br /><br /> Has probado de correr el juego en otro pc de win, hoy he hecho unas pruebas con otro ordenador, el tipico que no ha compilado nada en su vida  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> , al principio me he encontrado con algunos problemas de la libreria sdl vale las coloco todas pero despues me habria una ventana y se quedava en negro  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> . Ire probando pero no lo entiendo si tenia todas las librerias y ficheros..<br /><br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2003">rebach</a> — Lun Nov 10, 2008 10:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-11-10T17:30:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1734#p1734</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1734#p1734"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1734#p1734"><![CDATA[
otra pregunta... dime, cuando llegas a los 1000 puntos te tira algun error?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Lun Nov 10, 2008 5:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rebach]]></name></author>
<updated>2008-11-08T15:13:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1732#p1732</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1732#p1732"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1732#p1732"><![CDATA[
merci lucesita ya he podido compilar en windows me hice un lio con las librerias sdl_ttf ademas por google vi un post sobre que con mingw32 no se podia y eso me hizo desistir, al final era un problema de colocar en sdl_ttf.h en la carpeta correcta y renombrar la SDL_ttf.lib -&gt; SDL_ttf.a<br /><br />Eso si lo compile tal qual del codigo que he subido no he cambiado nada, no me ha dado ningun error de estructuras, que parametros has puesto para compilarlo?<br /><br />Tambien podemos ir mirando como mejorarlo, en win parece que se mantiene mas los 33fps aunque a lo mejor con dirty rectangles consiguiriamos mas fps. Miramos de mejorar los fps o los ataques y el movimiento de la nave?<br /><br /><br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2003">rebach</a> — Sab Nov 08, 2008 3:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-11-07T16:20:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1729#p1729</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1729#p1729"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1729#p1729"><![CDATA[
como decirtelo te lo digo<br /><br /><!-- e --><a href="mailto:lucastisera@gmail.com">lucastisera@gmail.com</a><!-- e --><br />es mi MSN y Correo<br /><br />pero creo que es mejor que se hable por aqui ya que siempre a alguien le puede ser de utilidad.<br /><br />las unicas librerias que utilize para compilarlo bajo win fue, SDL y SDL_ttf esas 2, el ide que use para compilar fue el CODEBLOCK, sin embargo para que me compile tuve que modificar<br /><dl class="codebox"><dt>Code: </dt><dd><code>prot = malloc&#40;sizeof&#40;Prot&#41;&#41;;</code></dd></dl><br />por esto<br /><dl class="codebox"><dt>Code: </dt><dd><code>prot = malloc&#40;16&#41;;</code></dd></dl><br /><br />es sobre el fichero main en la linea 50 <br /><br />Realmente no se que tiene, ni como trabaja el malloc pero a mi entender solo te reserva 4 bytes el malloc (sizeof(prot));<br />cuando en realidad te tendria que almacenar 4*4 (ATENCION ESTO ES LO QUE ME PARECE A MI, Tomenlo como leyenda urbana y si es posible comenten que es lo correcto)<br /><br />bueno haciendo esto que te dije y unas modificas pequenias, compila perfecto.<br /><br />las modificas que te digo, son sobre el puntero &quot;destino&quot; directamente los anule, por que me tiraban error <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> yo creo que deberias verlo vos, por que no me puse 100% con el codigo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Vie Nov 07, 2008 4:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rebach]]></name></author>
<updated>2008-11-06T22:04:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1726#p1726</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1726#p1726"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1726#p1726"><![CDATA[
Haha prolijo? Que significa. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> jeje <br /><br />Tienes que decirme como has podido compilarlo en windows, que librerias le has puesto al mingw32 y un par de ideas para ir mejorando el juego si tienes correo o msn dimelo y lo hablamos mucho mas rapido.<br /><br /><br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2003">rebach</a> — Jue Nov 06, 2008 10:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-11-06T17:16:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1725#p1725</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1725#p1725"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1725#p1725"><![CDATA[
BAsicamente, a mi la libreria SDL_ttf me la toma el mingw32, yo toy usando windos<br /><br />lo que m genera problema es la estructura que hiciste vos :$<br />y honestamente nu se por que me genera problema, jajajja<br /><br /><br />EDIT: lo anterior lo escribi apurado.<br /><br />basicamente con lo que tuve problema fue con el dimencionamiento de las estructuras, tu las haces dinamicas, y yo mas bien de malloc conozco nada y nada <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />vamos pude correr el juego modificando poca cosa... y a mi me mantiene todo a 33 FPS<br />no tengo el prblema que tu mencionas mas arriba<br /><br />EDIT 2:<br /><br />Por cierto me gusta tu estilo de porgramar <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> eres muy prolijo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Jue Nov 06, 2008 5:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rebach]]></name></author>
<updated>2008-11-05T16:54:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1722#p1722</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1722#p1722"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1722#p1722"><![CDATA[
Hola lucesita<br /><br />   Escogi C para hacerlo porque daba bastante versatilidad en llebarlo a muchas plataformas y luego no puedo compilarlo por la libreria SDL_ttf en win  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> . Ya tengo bastante hecho ya pensare en canviarme en C++ en futuros proyectos.<br /><br />   Te paso el codigo, si tienes cualquier duda, pregunta. Y si me ayudas arreglar la velocidad del juego te lo agradecere mucho hahha <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" /><br /><br /><a href="http://rapidshare.com/files/160925762/MyInvaders_0-01b.rar" class="postlink">http://rapidshare.com/files/160925762/MyInvaders_0-01b.rar</a><br /><br /><br /><br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2003">rebach</a> — Mié Nov 05, 2008 4:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-11-04T16:03:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1716#p1716</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1716#p1716"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1716#p1716"><![CDATA[
Y no has pensado en usar C++?<br /><br />a mi me interesa ver el codigo... si lo puedes subir <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />Exitos....<br /><br /><br />Saludos Lucesita<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Mar Nov 04, 2008 4:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rebach]]></name></author>
<updated>2008-10-18T01:21:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1703#p1703</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1703#p1703"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1703#p1703"><![CDATA[
Gracias dvd ya se ve mas claro el juego, dentro de poco &quot;acabare&quot; la parte funcional del juego, se crean varias naves, dispara las mata se añade puntuacion si se acaban vienen mas falta depurar recibir los disparos de las naves enemigas.<br /><br />Otra duda que tengo es al compilar en windows al sar la libreria SDL_ttf no me lo coge el mingw32 alguien sabe como podria compilarlo?<br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2003">rebach</a> — Sab Oct 18, 2008 1:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-10-16T19:55:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1702#p1702</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1702#p1702"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1702#p1702"><![CDATA[
Una solución sería limitar los FPS al mínimo que alcanza. En tu caso a 20 FPS (Cuando tengas bastante completado el juego puedes intentar optimizarlo).<br /><br />El proyecto está bien si empiezas. Pero mi consejo es que vayas paso por paso. Primero lo básico y luego ya intentarás hacer lo de las misiones y eso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Oct 16, 2008 7:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rebach]]></name></author>
<updated>2008-10-16T18:58:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1701#p1701</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1701#p1701"/>
<title type="html"><![CDATA[[Desarrollo] MyInvaders]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=390&amp;p=1701#p1701"><![CDATA[
Trasteando por alli vi como mover una nave por el fondo me gusto tanto que he ido ampliando eso hasta ahora, tengo bastante cosas hechas del juego empieza a verse jugable, y por ser mi primer juego me esta quedando bien, jeje.<br /><br />  Todo el mundo conoce el tipico Invaders antiguo... pues es como ese de momento me gustaria ponerle una historia y añadirle mas opociones como ir canviando de navee enemigos masa potentes misiones &quot;diferentes&quot;, como proteger otra nave, etc. <br /><br />  Estoy un poco verde con esto la idea es hacer el juego con C y SDL, que es lo que empiezo a &quot;dominar&quot;. Por otro lado si alguien le interesa el codigo lo subire aunque de momento le faltan un par de cosas que creo que son escenciales.<br /><br />  Segui el ejemplo de esta pagina web para hacer el bucle del juego y es util para ver en que parte el programa.. se &quot;atasca&quot;. Vereis he hecho a partir de una estructura de naves enemigas una funcion random para que vayan disparando cuando quieran, si alguien sabe otra forma para que no disparen &quot;todo&quot; el rato, weno el kit de la question es que cuando el juego maneja las naves y los disparos de la pantalla va a 20fps mientras cuando no hay disparos a mas de 30fps y cuando solo queda una nave va a 45fps asi que ya os podeis imaginar en el momento de jugarlo.. que varie tanto la velocidad no queda bien.<br /><br />  He pensado en hacerlo por tiempo, creeis que solucionara el problema? Como veis el proyecto? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> <br /><br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2003">rebach</a> — Jue Oct 16, 2008 6:58 pm</p><hr />
]]></content>
</entry>
</feed>