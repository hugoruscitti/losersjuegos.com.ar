<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=241" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-02-18T21:02:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=241</id>
<entry>
<author><name><![CDATA[John]]></name></author>
<updated>2008-02-18T21:02:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=907#p907</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=907#p907"/>
<title type="html"><![CDATA[Animos para un novato SDL &amp; C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=907#p907"><![CDATA[
<img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  Cierto! Oops! fallo mio!<br /> <blockquote class="uncited"><div><br />python<br /></div></blockquote><br /><br />era la ultima versión que compile, por desgracia era la 2.4 la que enlazaba con pygame.<br /><br />Ningún problema! Estoy con tus ejemplos del mono y es increible lo fácil que es usar pygame  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br /><br />Gracias de nuevo!!<br /><br />Salu2!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1817">John</a> — Lun Feb 18, 2008 9:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-18T19:30:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=906#p906</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=906#p906"/>
<title type="html"><![CDATA[Animos para un novato SDL &amp; C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=906#p906"><![CDATA[
<blockquote><div><cite>John escribió:</cite><br />He compilado la 2.5.1 de python y me he bajado un .deb de pygame<br /></div></blockquote><br /><br />Seguramente sea mejor utilizar la versión que incluye Debian, <br />incluso &quot;etch&quot; que es estable trae el paquete de pygame. Puede<br />que al instalar python-2.5 el comando &quot;python&quot; siga invocando<br />a la versión 2.4 y tengas algún tipo de inconsistencia con eso. Ten<br />en cuenta que el archivo /usr/bin/python es un enlace simbólico<br />al ejecutable de python que usa tu sistema (en mi caso 2.5).<br /><br /><br /><blockquote><div><cite>John escribió:</cite><br />Python sin problemas pero al cargar el modulo pygame me sale esto<br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br /><br /><blockquote class="uncited"><div>&gt;&gt;&gt; import pygame<br />Traceback (most recent call last):<br />  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;<br />ImportError: No module named pygame<br />&gt;&gt;&gt;<br /></div></blockquote><br /><br />He instalado 2 veces pygame y nada, y cualquier juego de python tanto los ejemplos de la web no van a causa de que no se carga pygame claro está.<br /><br /><br />Alguna sugerencia?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <br /><br />Salu2</div></blockquote><br /><br />sip, es como si no estuviera instalado pygame, intenta consultarle<br />a dpkg si el programa está instalado:<br /><br />   dpkg -L python-pygame<br /><br />en caso contrario intenta nuevamente con &quot;apt-get install -f&quot; o <br />&quot;apt-get install python-pygame&quot;. No te recomiendo compilarlo<br />por tu cuenta, tiene varias dependencias como SDL y lleva mucho<br />tiempo.<br /><br />Saludos.<br /><br />PD: no hay gran diferencia si usas python2.4... si por ahí pasa tu<br />      preocupación.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Feb 18, 2008 7:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[John]]></name></author>
<updated>2008-02-18T19:11:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=905#p905</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=905#p905"/>
<title type="html"><![CDATA[Animos para un novato SDL &amp; C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=905#p905"><![CDATA[
Ey hugo ! Tengo un pequeño problema ya que con el 'apt'<br />me instalaba una versión antigua de python y pygame <br /><br />He compilado la 2.5.1 de python y me he bajado un .deb de pygame<br /><br />Python sin problemas pero al cargar el modulo pygame me sale esto<br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br /><br /><blockquote class="uncited"><div><br />&gt;&gt;&gt; import pygame<br />Traceback (most recent call last):<br />  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;<br />ImportError: No module named pygame<br />&gt;&gt;&gt;<br /></div></blockquote><br /><br />He instalado 2 veces pygame y nada, y cualquier juego de python tanto los ejemplos de la web no van a causa de que no se carga pygame claro está.<br /><br /><br />Alguna sugerencia?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <br /><br />Salu2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1817">John</a> — Lun Feb 18, 2008 7:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[John]]></name></author>
<updated>2008-02-18T16:01:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=903#p903</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=903#p903"/>
<title type="html"><![CDATA[Animos para un novato SDL &amp; C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=903#p903"><![CDATA[
Para nada Hugo! Buena idea.<br />Es más, en tu video que por cierto ya vi hace un tiempo (esta genial el video  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  ) decias que el python era una herramienta potente y demás, pero claro yo estaba empeñado en C++ . Supongo que habrá que dejarlo por algún tiempo. Mientras tanto estoy bajandome manuales de python y pygame ( hay un montón de informacion eso es cierto) LO mejor de todo es que no hay que estar compilando todo el rato xD<br /><br />Asi que nada, sigo tu recomendación!<br /><br />Gracias y salu2!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1817">John</a> — Lun Feb 18, 2008 4:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-18T14:42:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=902#p902</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=902#p902"/>
<title type="html"><![CDATA[Animos para un novato SDL &amp; C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=902#p902"><![CDATA[
Mi sugerencia seguramente no te va a resultar muy util... pero yo te<br />animaría a que pruebes &quot;python&quot; y &quot;pygame&quot; para comenzar a hacer juegos,<br />desde que conocí estas herramientas encontré que hacer juegos puede ser<br />mucho mas divertido: tu proyecto de juego avanza mucho mas rápido y no<br />tienes esa sensación de 'atascarte' o tener que 'reescribir' las bases<br />del programa.<br /><br />Hace unos meses grabamos un video al respecto:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/videos/python_y_pygame_cafeconf_2007/python_y_pygame_cafeconf_2007.php">http://www.losersjuegos.com.ar/referenc ... f_2007.php</a><!-- m --><br /><br />Ademas ten en cuenta que Python ha crecido de manera significativa dentro<br />de los sistemas GNU/Linux, gran parte de los programadores de aplicaciones<br />lo eligen como lenguaje principal para sus programas. Así que aprender<br />python ahora puede ser super-práctico para formar parte de los equipos<br />de programación de casi cualquier proyecto de software libre.<br /><br />Te dejo un tutorial rápido para conocer algo de python:<br /><br />    <!-- m --><a class="postlink" href="http://usuarios.lycos.es/arturosa/pag/documentacion/pythoninstantaneo.html">http://usuarios.lycos.es/arturosa/pag/d ... taneo.html</a><!-- m --><br /><br />para comenzar a programar solo escribe &quot;python&quot; en un terminal y listo, ya<br />puedes escribir código de prueba sin mediar con un compilador.<br /><br />Por último te comento que para instalar python y pygame en Debian GNU/Linux solo<br />tienes que ejecutar el comando:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>apt-get install python python-pygame</code></dd></dl><br /><br />Saludos.<br /><br />PD: Los mensajes de foro &quot;largos&quot; son siempre &quot;bienvenidos&quot;...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Feb 18, 2008 2:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[John]]></name></author>
<updated>2008-02-18T00:12:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=898#p898</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=898#p898"/>
<title type="html"><![CDATA[Animos para un novato SDL &amp; C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=241&amp;p=898#p898"><![CDATA[
Hola a todos !<br /><br />Pues si,  llevo 1 semana que he vuelto otra vez a echarle mano a C++ y SDL.<br /><br />Por un lado me ha venido bien, porque voi recordando cosas de programación y de SDL también. <br /><br />Deje hace tiempo un juego de una nave (queria darle movimientos de aceleración, rotacion, enemigos, sonidos, IA increible, luces, pista de baile, confeti pero me di cuenta que no tenia la mente abierta para realizar todo lo que queria plasmar una pena...  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <br /><br />Lo deje, y lo deje con una ventana con su fondo del espacio (muy chulo jaja ^^ ) y una nave amateur xD con el gimp ¡ojo! que me quedó muy bién!  la nave se movia con las flechas pero muy mal. <br />No podia rotar. Una pena <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Actualmente llevo ya 1 semana con SDL y C++ y voi la mar de bién. El código es más limpio, voi mirando codigos para entender el como la gente piensa al realizar un juego.<br /><br />Ahora estoy con las Clases en C++ .<br /><br />Como mi juego es de naves tipo Asteroids, y es el primero con el que empezé SDL ( nose si será mejor con un pong, un arkanoid) pero es pensar el como debo programar los movimientos de las naves enemigas o la física de un &quot;simple&quot; pong y no tengo ni idea. Supongo  que es algo que le ocurrirá a todo el múndo al empezar no?<br /><br /><br />Alguna sugerencia? Aparte de dedicarle horas  ^^<br />Sry por si el post es muy largo pero son tantas las cosas que le vienen a uno en la cabeza que no sabe como plasmarlo en la pantalla <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><br />Salu2!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1817">John</a> — Lun Feb 18, 2008 12:12 am</p><hr />
]]></content>
</entry>
</feed>