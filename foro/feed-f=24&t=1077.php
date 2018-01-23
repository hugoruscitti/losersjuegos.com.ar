<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1077" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-25T22:51:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1077</id>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-25T22:51:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5344#p5344</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5344#p5344"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5344#p5344"><![CDATA[
hola huguillo!!!<br /><br />disculpa tanta molestia pero al asignarle valor a la X, me sale lo siguiente:<br /><pre class="prettyprint">AttributeError: &#39;NoneType&#39; object has no attribute &#39;x&#39;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Vie Mar 25, 2011 10:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-25T22:06:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5342#p5342</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5342#p5342"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5342#p5342"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br /><span style="font-weight: bold">Hoooola</span><br /><br />les escribo para saber si uno podría cambiar la posición del diálogo... hay alguna forma??<br /></div></blockquote><br /><br />Si, podrías escribir:<br /><br /><pre class="prettyprint">dialogo.dialogo_actual.x = 200</pre><br /><br />donde 200 es la posicion que le quieres asignar al dialogo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Mar 25, 2011 10:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-25T20:25:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5341#p5341</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5341#p5341"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5341#p5341"><![CDATA[
<span style="font-weight: bold">Hoooola</span><br /><br />les escribo para saber si uno podría cambiar la posición del diálogo... hay alguna forma??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Vie Mar 25, 2011 8:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-21T19:16:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5310#p5310</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5310#p5310"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5310#p5310"><![CDATA[
probá los ejemplos del directorio: &quot;ejemplos&quot;, por citar alguno:<br /><br />dialogo_con_botones.py<br />dialogo_con_funciones.py<br />dialogo_con_preguntas.py<br /><br />por lo que ví en el mensaje de error te está faltando especificar el actor<br />en el diálogo. ¿que te retorna la función &quot;pilas.version()&quot;?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 21, 2011 7:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-21T18:41:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5308#p5308</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5308#p5308"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5308#p5308"><![CDATA[
Hola!<br /><br />ahora cuando utilizo el dialogo me aparece esto<br /><pre class="prettyprint">File &quot;/home/carla/instalacion_pilas/pilas/pilas/actores/dialogo.py&quot;, line 29, in iniciar<br />    self.avanzar_al_siguiente_dialogo&#40;&#41;<br />  File &quot;/home/carla/instalacion_pilas/pilas/pilas/actores/dialogo.py&quot;, line 61, in avanzar_al_siguiente_dialogo<br />    self._mostrar_o_ejecutar_siguiente&#40;siguiente&#41;<br />  File &quot;/home/carla/instalacion_pilas/pilas/pilas/actores/dialogo.py&quot;, line 51, in _mostrar_o_ejecutar_siguiente<br />    self.dialogo_actual.colocar_origen_del_globo&#40;actor.x, actor.arriba&#41;<br />AttributeError: &#39;NoneType&#39; object has no attribute &#39;x&#39;</pre><br /><br />que pasará?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 21, 2011 6:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-21T16:00:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5307#p5307</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5307#p5307"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5307#p5307"><![CDATA[
Te paso los comandos para actualizar pilas completo, seguramente<br />lo que faltaba era eliminar la versión anterior...<br /><br />Tienes que ejecutar estos comandos desde tu directorio<br />personal (home):<br /><br /><br /><pre class="prettyprint">mkdir -p instalacion_pilas<br />cd instalacion_pilas<br />mv pilas anterior_pilas<br /><br />sudo easy_install -m pilas<br />hg clone <!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas">http://bitbucket.org/hugoruscitti/pilas</a><!-- m --><br />cd pilas<br />sudo python setup.py develop</pre><br /><br />Lo que hacen estos comandos es mover la versión de pilas actual<br />a un directorio llamado &quot;anterior_pilas&quot;, luego desinstala pilas<br />de tu sistema (es donde dice -m pilas) y luego<br />descarga pilas desde cero y lo re-instala.<br /><br />Espero te funcione bien, comentanos como te fué.<br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 21, 2011 4:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-21T15:18:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5306#p5306</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5306#p5306"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5306#p5306"><![CDATA[
primero:<br />cuando ejecuto:<br /><pre class="prettyprint">import pilas<br />pilas.version&#40;&#41;</pre><br /><br />me aparece lo siguiente: <br /><span style="color: #0040BF">Traceback (most recent call last):<br />  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;<br />AttributeError: 'module' object has no attribute 'version'<br /></span><br /><br />y luego cuando le digo <pre class="prettyprint">sudo python setup.py develop</pre><br /><br />me aparece: <br /><pre class="prettyprint">running develop<br />install_dir /usr/local/lib/python2.6/dist-packages/<br />Checking .pth file support in /usr/local/lib/python2.6/dist-packages/<br />/usr/bin/python -E -c pass<br />TEST PASSED: /usr/local/lib/python2.6/dist-packages/ appears to support .pth files<br />running egg_info<br />writing requirements to pilas.egg-info/requires.txt<br />writing pilas.egg-info/PKG-INFO<br />writing top-level names to pilas.egg-info/top_level.txt<br />writing dependency_links to pilas.egg-info/dependency_links.txt<br />reading manifest file &#39;pilas.egg-info/SOURCES.txt&#39;<br />reading manifest template &#39;MANIFEST.in&#39;<br />writing manifest file &#39;pilas.egg-info/SOURCES.txt&#39;<br />running build_ext<br />Creating /usr/local/lib/python2.6/dist-packages/pilas.egg-link &#40;link to .&#41;<br />pilas 0.41 is already the active version in easy-install.pth<br />Installing pilas script to /usr/local/bin<br /><br />Installed /home/carla/instalacion_pilas/pilas<br />Processing dependencies for pilas==0.41<br />Searching for Box2D==2.0.2b1<br />Best match: Box2D 2.0.2b1<br />Processing Box2D-2.0.2b1-py2.6-linux-i686.egg<br />Box2D 2.0.2b1 is already the active version in easy-install.pth<br /><br />Using /usr/local/lib/python2.6/dist-packages/Box2D-2.0.2b1-py2.6-linux-i686.egg<br />Searching for distribute==0.6.14<br />Best match: distribute 0.6.14<br />Adding distribute 0.6.14 to easy-install.pth file<br />Installing easy_install script to /usr/local/bin<br />Installing easy_install-2.7 script to /usr/local/bin<br />Installing easy_install-2.6 script to /usr/local/bin<br /><br />Using /usr/lib/python2.6/dist-packages<br />Finished processing dependencies for pilas==0.41</pre><br /><br />por lo que creo que no me esta instalando la versión 0.43<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 21, 2011 3:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-21T15:05:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5305#p5305</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5305#p5305"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5305#p5305"><![CDATA[
primero intenta ejecutar el siguiente código desde el intérprete de python:<br /><br /><pre class="prettyprint">import pilas<br />pilas.version&#40;&#41;</pre><br /><br />Si te retorna '0.43' es porque ya se instaló solo al hacer &quot;pull y update&quot;.<br /><br />Sino, tienes que ejecutar este comando desde el directorio de donde<br />has hecho &quot;update&quot;:<br /><br /><pre class="prettyprint">sudo python setup.py develop</pre><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 21, 2011 3:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-21T14:52:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5304#p5304</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5304#p5304"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5304#p5304"><![CDATA[
ok! gracias!!<br /><br />cuando le doy <span style="color: #0000FF">hg update</span> lo que me sale es la lista de archivos modificados... como hago para terminarlos de instalar??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 21, 2011 2:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-21T14:46:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5303#p5303</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5303#p5303"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5303#p5303"><![CDATA[
Si, efectivamente es un bug en los cuadros de dialogo. Ahí lo corregí creando<br />un nuevo argumento para el objeto Dialogo, es así:<br /><br />Si quieres que el ejemplo funcione correctamente, hay que iniciar el objeto<br />dialogo con el argumento &quot;modo_automatico=False&quot;, <br /><br /><pre class="prettyprint">dialogo = pilas.actores.Dialogo&#40;modo_automatico=False&#41;</pre><br /><br />Esto le indica al dialogo que tú quieres mostrar u ocultar los<br />cuadros de dialogo de manera manual. Esto se ajusta mas<br />a lo que quieres hacer con los botones, porque la lógica de<br />los mensajes está gobernada por los botones y no por<br />un dialogo paso a paso.<br /><br />En definitiva, tienes que actualizar a la versión 0.43, puedes hacerlo<br />con el comando &quot;hg pull&quot; y luego &quot;hg update&quot; si has instalado pilas<br />desde un repositorio, o usando &quot;easy_install -U pilas&quot; (creo que esto<br />no estába andando muy bien, no lo recomiendo...)<br /><br />Si quieres ver los últimos cambios están indicandos en el repositorio:<br /><br />   <!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/changeset/a2008d2bd128">https://bitbucket.org/hugoruscitti/pila ... 008d2bd128</a><!-- m --><br /><br /><br />El código completo del ejemplo queda así:<br /><br /><pre class="prettyprint">import pilas                                                                                                                                                              <br />pilas.iniciar&#40;&#41;<br /><br /># Genera al personaje que habla<br />aceituna = pilas.actores.Aceituna&#40;x=-100&#41;<br /><br /># Se crean los dos botones.<br />b1 = pilas.actores.Boton&#40;x=100, y=50&#41;<br />b2 = pilas.actores.Boton&#40;x=100, y=-50&#41;<br /><br /># Generamos el administrador de los dialogos.<br />dialogo = pilas.actores.Dialogo&#40;modo_automatico=False&#41;<br /><br /># Ahora las acciones que vamos a ejecutar cuando<br /># se pulsan los botones.<br />def cuando_pulsa_el_boton&#40;texto&#41;:<br />    dialogo.decir&#40;aceituna, &quot;Has pulsado: &quot; + texto&#41;<br />    dialogo.iniciar&#40;&#41;<br /><br /># Y conectamos las funciones con los botones.<br />b1.conectar_presionado&#40;cuando_pulsa_el_boton, &quot;boton de arriba&quot;&#41;<br />b2.conectar_presionado&#40;cuando_pulsa_el_boton, &quot;boton de abajo&quot;&#41;<br /><br />pilas.avisar&#40;&quot;Pulsa alguno de los botones&quot;&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Mar 21, 2011 2:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-19T21:46:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5286#p5286</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5286#p5286"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5286#p5286"><![CDATA[
<span style="font-weight: bold">Hola Hugo!!!!</span><br /><br />te escribo ya que al ejecutar el ejemplo que colocaste encuentro un errorcito, y quisiera saber como podríamos corregirlo<br />prueba esto: <br />  1.- presiona el botón de arriba (te aparecerá el mensaje)<br />  2.- presiona el botón de abajo, sólo una vez (se quita el primer mensaje, peeeero aparece el mensaje nuevo, sino hasta que se le dá otro click)<br /><br />cómo pudiéramos arreglar esto?? osea que con un sólo click aparezca el mensaje correspondiente<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Sab Mar 19, 2011 9:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-03-15T16:15:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5243#p5243</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5243#p5243"/>
<title type="html"><![CDATA[Re: Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5243#p5243"><![CDATA[
<blockquote><div><cite>carlachacon escribió:</cite><br /><span style="font-weight: bold">Buenos Dias Chicos!!</span><br /><br />Hoy les escribo para preguntar una cosita con respecto al diálogo.<br /><br /><span style="font-weight: bold">Primero:</span> quiero utilizarlo en un personaje para que cuando alguien presione un botón él le diga algo... <br />tengo 3 botones (bien, mal , no respondio), entonces lo he estado utilizando de esta manera:<br /><br />Declaro:<br /><span style="color: #0000FF">dialogue = pilas.actores.Dialogo()<br />dialogue.iniciar()</span><br /><br />luego en la función del botón coloco estas lineas de código:<br /><span style="color: #0000FF">pilas.eventos.click_de_mouse.conectar(dialogue.avanzar_al_siguiente_dialogo)<br />    dialogue.decir(actor, Mensaje)</span><br /><br />peeeero lo que pasa es que cuando le doy la primera vez no sale nada, solo a la 2da o 3era. ¿que estoy haciendo mal?<br /></div></blockquote><br /><br />Creo que la forma mas sencilla es creando un dialogo<br />sin textos y que cada boton genere un mensaje y avance.. Por ejemplo,<br />este código tiene dos botones, cuando pulsas en uno de<br />ellos el personaje que está a la izquierda dice que botón se<br />ha pulsado:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20110315/dialogo_con_botones.png" alt="Imagen" /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pilas                                                                                                                                                              <br /><br />pilas.iniciar()<br /><br /># Genera al personaje que habla<br />aceituna = pilas.actores.Aceituna(x=-100)<br /><br /><br /># Se crean los dos botones.<br />b1 = pilas.actores.Boton(x=100, y=50)<br />b2 = pilas.actores.Boton(x=100, y=-50)<br /><br /><br /># Generamos el administrador de los dialogos.<br />dialogo = pilas.actores.Dialogo()<br /><br /><br /># Ahora las acciones que vamos a ejecutar cuando<br /># se pulsan los botones.<br /><br />def cuando_pulsa_el_boton(texto):<br />    dialogo.decir(aceituna, &quot;Has pulsado: &quot; + texto)<br />    dialogo.iniciar()<br /><br /><br /># Y conectamos las funciones con los botones.<br />b1.conectar_presionado(cuando_pulsa_el_boton, &quot;boton de arriba&quot;)<br />b2.conectar_presionado(cuando_pulsa_el_boton, &quot;boton de abajo&quot;)<br /><br /><br />pilas.avisar(&quot;Pulsa alguno de los botones&quot;)<br />pilas.ejecutar()<br /></code></dd></dl><br /><br /><blockquote><div><cite>carlachacon escribió:</cite><br /><span style="font-weight: bold">Otra pregunta que les tengo es la siguiente:</span><br />¿Por que en algunos métodos no puedo enviar como parámetros funciones con parámetros? (valga la redundancia)<br />ejemplo:<br /><span style="color: #0000FF">boton.conectar_presionado( press_button(mensaje) )</span> ==&gt; esto me revienta el programa... y así con otros métodos que pilas tiene.. lo pregunto ya que muchas veces uno quisiera hacer un método genérico que me sirva para varios botones por ejemplo, pero enviarle parámetros distintos.<br /><br />espero su respuesta...<br /></div></blockquote><br /><br />Se puede, solo que tienes que enviar el argumento separado por una coma:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>boton.conectar_presionado( press_button, mensaje )<br /></code></dd></dl><br /><br />porque si escribes &quot;press_botton(mensaje)&quot;, python cree que quieres<br />evaluar el resultado de llamar a &quot;press_botton&quot; y enviarselo al boton, algo que<br />en realidad no quieres....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Mar 15, 2011 4:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-15T15:10:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5242#p5242</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5242#p5242"/>
<title type="html"><![CDATA[Dialogo....]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1077&amp;p=5242#p5242"><![CDATA[
<span style="font-weight: bold">Buenos Dias Chicos!!</span><br /><br />Hoy les escribo para preguntar una cosita con respecto al diálogo.<br /><br /><span style="font-weight: bold">Primero:</span> quiero utilizarlo en un personaje para que cuando alguien presione un botón él le diga algo... <br />tengo 3 botones (bien, mal , no respondio), entonces lo he estado utilizando de esta manera:<br /><br />Declaro:<br /><span style="color: #0000FF">dialogue = pilas.actores.Dialogo()<br />dialogue.iniciar()</span><br /><br />luego en la función del botón coloco estas lineas de código:<br /><span style="color: #0000FF">pilas.eventos.click_de_mouse.conectar(dialogue.avanzar_al_siguiente_dialogo)<br />    dialogue.decir(actor, Mensaje)</span><br /><br />peeeero lo que pasa es que cuando le doy la primera vez no sale nada, solo a la 2da o 3era. ¿que estoy haciendo mal?<br /><br /><span style="font-weight: bold">Otra pregunta que les tengo es la siguiente:</span><br />¿Por que en algunos métodos no puedo enviar como parámetros funciones con parámetros? (valga la redundancia)<br />ejemplo:<br /><span style="color: #0000FF">boton.conectar_presionado( press_button(mensaje) )</span> ==&gt; esto me revienta el programa... y así con otros métodos que pilas tiene.. lo pregunto ya que muchas veces uno quisiera hacer un método genérico que me sirva para varios botones por ejemplo, pero enviarle parámetros distintos.<br /><br />espero su respuesta...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mar Mar 15, 2011 3:10 pm</p><hr />
]]></content>
</entry>
</feed>