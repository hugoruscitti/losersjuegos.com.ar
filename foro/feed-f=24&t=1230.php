<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1230" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-11-08T14:22:30+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1230</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-11-08T14:22:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6151#p6151</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6151#p6151"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6151#p6151"><![CDATA[
Hola eyscode!, muchas gracias por tus comentarios, y buenísimo<br />que estás investigando pilas...<br /><br />Estuve viendo el tema de las colisiones, y si, lo había cambiado<br />un poco y me había quedado un error en el manual. Recién lo<br />corregí:<br /><br />    <!-- m --><a class="postlink" href="http://readthedocs.org/docs/pilas/en/latest/colisiones.html">http://readthedocs.org/docs/pilas/en/la ... iones.html</a><!-- m --><br /><br />para acceder a la función 'agregar' ahora hay que escribrir<br />'pilas.mundo.colisiones.agregar'.<br /><br />En breve actualizo el archivo pdf, por ahora la versión mas nueva<br />está en HTML.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Nov 08, 2011 2:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eyscode]]></name></author>
<updated>2011-11-07T19:26:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6150#p6150</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6150#p6150"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6150#p6150"><![CDATA[
Que rápidas son las respuestas por aquí <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />, por cierto un saludo Hugo!!, y pues recién estoy dándole vueltas a tu engine, un poco mas liberado de los exámenes de la universidad. Respecto a lo de 'qtgl', si ya le hiciste el cambio en el repo, pues lo instalaré desde ahi <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> , y te cuento como me fue!<br /><br />Por cierto estaba leyendo el manual y haciendo todas las pruebas que hay en él, pero tuve un problema en colisiones, la función &quot;agregar&quot; aún esta en el modulo colisiones?, porque no me la reconoce, vi una clase Colisiones; para agregar colisiones tengo que instanciar esta clase? o qué?, la cuestión es que no he podido usar las colisiones como esta en el manual <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" />, no se si hay algún cambio respecto a como usar las colisiones y no lo hayan hecho presente en el manual... bueno eso es todo y desde ya que estoy probando Pilas, de verdad que les está quedando bárbaro! ... felicidades <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2512">eyscode</a> — Lun Nov 07, 2011 7:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-11-07T03:15:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6149#p6149</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6149#p6149"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6149#p6149"><![CDATA[
Buenas!!, recién apliqué un cambio en el repositorio<br />para que no se intente detectar opengl y que en la<br />función &quot;iniciar&quot; no haga falta poner 'qt'. Hice que<br />esta opción sea la opción por defecto.<br /><br />Voy a seguir investigando el tema, parece ser un problema<br />de pyopengl, pero no estoy seguro. Por favor, si puedes<br />instalar pilas desde el repositorio y avisarme estaría<br />super agradecido...<br /><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 07, 2011 3:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eyscode]]></name></author>
<updated>2011-11-06T21:49:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6148#p6148</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6148#p6148"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6148#p6148"><![CDATA[
Buenas, disculpen por revivir el tema, no se si estará solucionado o no, pero bueno también he intentado instalar pilas, le traía ganas de un tiempo ya, para salir un poco de pygame &gt;.&lt;, pero he tenido casi el mismo problema, pilas no me logra iniciar sin parámetros es decir, sin usar el &quot; usar_motor = 'qt' &quot;, cuando lo hago sin eso me sale la pantalla de la ventana de pilas en negro y en la consola solo dice muchas veces :<br /><br />Warning: &quot;&quot; failed to compile!<br />QGLShader: could not create shader<br /><br />Trabajo sobre Ubuntu 11.10, instale todo, creo que mi OpenGL esta bien o nosé que podría pasar u.u . Y pues no se si es un bug como dices Hugo, pero pilas no esta reconociendo automáticamente eso y pues se queda colgada y tengo que iniciarlo como dijo lukas :/<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2512">eyscode</a> — Dom Nov 06, 2011 9:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-09-29T15:13:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6005#p6005</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6005#p6005"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=6005#p6005"><![CDATA[
Mira por lo que pude probar no devuelve ningún tipo de error, solo se queda tildado y obliga a gnome a cerrar forzado la ventana por que el programa no responde, en la versión Mint LMDE anda 10 ptos, lo instale con el mismo tutorial para ubuntu.<br /><br />Saludos!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Jue Sep 29, 2011 3:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-09-28T02:48:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5997#p5997</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5997#p5997"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5997#p5997"><![CDATA[
Hola Lukas, ¿cómo estas?.<br /><br />Es raro que se tilde la ventana, el modo 'qt' se debería<br />activar solo si es que el equipo no tiene extensiones <br />de opengl.<br /><br />El modo 'qtgl' es mucho mas rápido que el modo 'qt', porque<br />'qtgl' trata de usar aceleración de video con opengl.<br /><br />Lo ideal sería que pilas detecte por si sola si el equipo<br />soporta opengl o no. Se supone que eso debería ser así, pero<br />por lo visto tiene algún bug:<br /><br />    <!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/changeset/6fcae6cc7435">https://bitbucket.org/hugoruscitti/pila ... cae6cc7435</a><!-- m --><br /><br />¿Te dá algún tipo de información cuando se tilda?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Sep 28, 2011 2:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-09-27T12:56:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5993#p5993</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5993#p5993"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5993#p5993"><![CDATA[
Tengo un problema similar en Linux mint, directamente no arranca el modo interactivo y se queda tildado, probe con el comando usar_motor=&quot;qt&quot; y funciona, pero mataría ver si se puede solucionar el arranque por defecto, o habrá que modificar directamente en modulo iniciar()?<br /><br />El motor qt tiene desventajas con respecto al por defecto?<br /><br />Saludos!!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Mar Sep 27, 2011 12:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mameyugo]]></name></author>
<updated>2011-09-19T08:12:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5951#p5951</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5951#p5951"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5951#p5951"><![CDATA[
buenas, soy nuevo en el foro, acabo de probar pilas y tampoco me iniciaba, pero solucione pasandole el parametro:<br /><pre class="prettyprint">pilas.iniciar&#40;usar_motor=&#39;pygame&#39;&#41;</pre><br />me contesto:<br />El motor multimedia seleccionado (pygame) no esta disponible<br />Las opciones de motores que puedes probar son 'qt' y 'qtgl'.<br />lo intente con:<br /><pre class="prettyprint">pilas.iniciar&#40;usar_motor=&#39;qt&#39;&#41;</pre><br />y funcionó!<br /><br />espero que te sea de ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2502">mameyugo</a> — Lun Sep 19, 2011 8:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-08-26T03:34:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5859#p5859</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5859#p5859"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5859#p5859"><![CDATA[
Acabo de instalar pilas en linux mint 11 y me va de lujo (aunque pierdo unos fps menos que en windows pero es minimo), solo tienes que seguir los pasos de instalacion en ubuntu 11:<br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/instalacion/ubuntu_11_04.rst">http://www.pilas-engine.com.ar/doc/tuto ... _11_04.rst</a><!-- m --><br />es lo mismo ya que mint esta basado en ubuntu, Suerte!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Vie Ago 26, 2011 3:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-08-12T21:50:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5825#p5825</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5825#p5825"/>
<title type="html"><![CDATA[Re: Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5825#p5825"><![CDATA[
Hace poco lanzamos una version nueva de pilas, ¿has usado el tutorial de la ultima version?<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/instalacion/ubuntu_11_04.rst">http://www.pilas-engine.com.ar/doc/tuto ... _11_04.rst</a><!-- m --><br /><br />no probé instalar pilas en linux mint, pero debería ser muy similar a instalar sobre<br />ubuntu.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ago 12, 2011 9:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nestor]]></name></author>
<updated>2011-08-12T21:17:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5824#p5824</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5824#p5824"/>
<title type="html"><![CDATA[Porblemas con instalación de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1230&amp;p=5824#p5824"><![CDATA[
Hola, he instalado pilas en Linux Mint 10 ( basado en Ubuntu 11.04) , lo he hecho tanto con easy_install como usando los fuentes; importa bien el modulo, pero al hacer pilas.iniciar() genera la ventana pero no termina de rellenarla, aparece solo el cuadro y en la consola de Python se ve el sguiente error:<br />Gtk-Message: (for origin information, set GTK_DEBUG): failed to retrieve property `GtkTreeView::odd-row-color' of type `GdkColor' from rc file value &quot;((GString*) 0xa9cc280)&quot; of type `GString'<br />Para salir hay que cancelar la sesión de Python.<br />Desde ya gracias por vuestra ayuda y felicitaciones a los creadores de este framework para creación de juegos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2477">Nestor</a> — Vie Ago 12, 2011 9:17 pm</p><hr />
]]></content>
</entry>
</feed>