<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=25&amp;t=1350" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-12-13T17:32:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=25&amp;t=1350</id>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-12-13T17:32:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6270#p6270</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6270#p6270"/>
<title type="html"><![CDATA[Re: Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6270#p6270"><![CDATA[
Sip, efectivamente hay estaba el problema, estaba usando el pilas de  <!-- m --><a class="postlink" href="http://pypi.python.org">http://pypi.python.org</a><!-- m -->.<br /><br />Ya instale el pilas del repos y todo bien, ya me funciona el metodo terminar(), gracias Hugo!<br /><br />Voy a ver si logro solucionar de una vez lo del modo survival porque al parecer no es lo de las tareas como yo pensaba, aunque tengo en mente otras cosas que tambien podrian provocar del desbordamiento de objetos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Mar Dic 13, 2011 5:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-12-13T13:57:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6268#p6268</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6268#p6268"/>
<title type="html"><![CDATA[Re: Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6268#p6268"><![CDATA[
mmmm... que raro... ¿estás utilizando una copia del repositorio no?:<br /><br />    <!-- m --><a class="postlink" href="http://pilas-engine.com.ar/doc/tutoriales/pilas_desde_repositorio/pilas_desde_repositorio.rst">http://pilas-engine.com.ar/doc/tutorial ... itorio.rst</a><!-- m --><br /><br />Por cierto, recién hice un cambio para que se eliminen todas las<br />tareas al cambiar de escena (con eso pilas pasaría a la versión 0.64). Pero<br />solo lo subí al respositorio, no a <!-- m --><a class="postlink" href="http://pypi.python.org">http://pypi.python.org</a><!-- m --> (por el momento).<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Dic 13, 2011 1:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-12-13T05:10:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6265#p6265</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6265#p6265"/>
<title type="html"><![CDATA[Re: Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6265#p6265"><![CDATA[
El error persiste, instalé nuevamente pilas mediante el setuptools y &quot;python setup.py install&quot; y todo bien, se actualizo a la version 0.63 pero el error al invocar al metodo terminar() persiste. Pero fue curioso porque en vez de invocar tarea.terminar() invoque tarea.eliminar() y se detuvo exitosamente la tarea <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> . Voy a realizar las modificaciones en el juego a ver que tal.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Mar Dic 13, 2011 5:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-12-12T19:18:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6259#p6259</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6259#p6259"/>
<title type="html"><![CDATA[Re: Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6259#p6259"><![CDATA[
uh, bug mio.... recién lo arreglé, ahora tendría que existir la función terminar:<br /><br /> <!-- m --><a class="postlink" href="http://www.dev-losersjuegos.com.ar/redmine/issues/24">http://www.dev-losersjuegos.com.ar/redmine/issues/24</a><!-- m --><br /><br />Ahora voy a hacer lo de destruir las tareas al cambiar de escena, me parece una muy buena idea.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Dic 12, 2011 7:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-12-12T17:53:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6257#p6257</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6257#p6257"/>
<title type="html"><![CDATA[Re: Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6257#p6257"><![CDATA[
Hola Hugo, me alegra que te halla gustado jeje.<br /><br />Bueno estuve probando lo que me dices de capturar el retorno de la función y cuando le hago el &quot;tarea.terminar()&quot; me salta un error de que no existe tal metodo para esa instancia:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>self.tarea = pilas.mundo.agregar_tarea_siempre(0.5, self.funcion)<br />.<br />.<br />.<br />.<br />self.tarea.terminar()<br />AttributeError: 'Tarea' object has no attribute 'terminar'</code></dd></dl><br /><br />Con lo de la escena, pareciera que me hubieras leido la mente jeje, seria bueno que al invocar pilas.mundo.definir_escena(escena) y pasar a otra escena, se destruya por completo la escena anterior (actores, tareas, todo!) para que no presente conflictos con la siguiente y poder trabajar desde cero con la escena actual. Ademas de que asi se evita la tarea de borrar y detener todos los procesos manualmente.<br /><br />Y por supuesto que puedes ponerlo en la pagina man, el juego es software libre y esta hecho 100% en pilas jeje <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Lun Dic 12, 2011 5:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-12-12T02:27:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6253#p6253</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6253#p6253"/>
<title type="html"><![CDATA[Re: Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6253#p6253"><![CDATA[
programx, mis felicitaciones, la verdad que me pareció un juegazo!<br /><br />Estoy jugando desde hace un rato, y estoy impresionado... los efectos, la lógica, la<br />ambientación, esta genial!.<br /><br />Me gustaría dar una mano reparando bug de pilas, ví que mencionabas un problema<br />usando la función &quot;ejecutar_siempre&quot;, ¿probaste si capturando el retorno de la función<br />podés deternerla?:<br /><br /><!-- m --><a class="postlink" href="http://readthedocs.org/docs/pilas/en/latest/tareas.html#eliminar-tareas">http://readthedocs.org/docs/pilas/en/la ... nar-tareas</a><!-- m --><br /><br />igual, estába pensando, tal vez pilas debería eliminar todas las tareas cuando cambia<br />de una escena a otra no?.<br /><br />PD: ¿puedo incluir algunas capturas y un link a tu juego desde la página de pilas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Dic 12, 2011 2:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-12-11T04:02:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6247#p6247</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6247#p6247"/>
<title type="html"><![CDATA[Re: Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6247#p6247"><![CDATA[
Gracias Mightygaver! que bueno que te gusto!.<br /><br />Si, mi intension fue poner un ambientado azul-futurista del lado del jugador y uno verdoso-alienigena del lado del los invasores jeje. Y la musica me parece que encaja perfectamente con este ambientado.<br /><br />Bueno el error de relentizado es cuando llevas un rato jugando el modo survival, y ese error de logica es precisamente el desbordamiento de objetos que mensione arriba, ya que uso un &quot;pilas.mundo.agregar_tarea_siempre(tiempo, invasores_disparan)&quot; para que los invasores disparen cada cierto tiempo, pero el problema esta en que este metodo no se puede detener (al menos yo no encontre la manera) y tuve que improvisar un poco, por lo tanto, cuando juegas varias veces, se llama de nuevo a ese metodo y junto con las otras llamadas que siguen activas de las partidas que jugaste anteriormente...., sucede esto, salen cientos de lasers de todos lados y siguen saliendo aun cuando cambio de escena!.<br /><br />Espero que alguien me eche una mano con este problema (bueno creo que ese es el problema jeje).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Dom Dic 11, 2011 4:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-12-10T11:20:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6246#p6246</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6246#p6246"/>
<title type="html"><![CDATA[Re: Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6246#p6246"><![CDATA[
Me gustó mucho programx, enhorabuena <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />La inmersión en el juego es muy buena, la música de fondo es perfecta y la verdad que me impresionó mucho el arte y los efectos que lograste. Lo pasé bueno jugando un rato <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />Por otro lado me encontré con algún error, aunque apenas me encontré con el error de rendimiento que mencionas sino con errores más bien de lógica. Cuando acabas la escena en la que estás disparando a las naves extraterrestres el juego parece que se queda en ese estado y siguen apareciendo disparos por la pantalla y los items que caen del cielo.<br /><br />Ah! Yo instalé pilas ahora mismo en mi máquina desde la utilidad <span style="font-style: italic">pip</span> igual eso tiene algo que ver.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab Dic 10, 2011 11:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-12-09T18:32:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6241#p6241</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6241#p6241"/>
<title type="html"><![CDATA[Presentando Alien Attack!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1350&amp;p=6241#p6241"><![CDATA[
Bueno estoy de vuelta con Alien Attack. Este es un juego que empece hace unos meses y por falta de tiempo no lo habia terminado pero ya esta listo, con unos cuantos errores pero jugable jeje. Lo pueden descargar en <a href="https://bitbucket.org/program_x/alien-attack/downloads" class="postlink">https://bitbucket.org/program_x/alien-attack/downloads</a>. Los errores estan en el modo survival, uno es el problema de ralentizacion a medida que juegas y otro un desbordamiento de objetos cuando has jugado varias partidas en este modo, lo mejor es cerrar la ventana y volver abrirla, aunque se borraran los puntajes (quizas mas adelante ponga la opcion de escribir los puntajes en un archivo).<br /><br />Creo que estos problemas son debido a que no encuentro la manera de &quot;matar&quot; por completo el metodo &quot;pilas.mundo.agregar_tarea_siempre&quot;, es decir, por mas que termine una escena siempre van a estar ejecutandose, asi que tuve que improvisar un poco para detenerlos. Lo utilicé bastante, al igual que el actor Temporizador.<br /><br />Por lo demas, funciona muy bien. Hechenle una ojeada y me dicen a ver que tal les parecio jeje  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Vie Dic 09, 2011 6:32 pm</p><hr />
]]></content>
</entry>
</feed>