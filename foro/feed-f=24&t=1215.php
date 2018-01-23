<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1215" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-22T03:24:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1215</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-07-22T03:24:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1215&amp;p=5750#p5750</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1215&amp;p=5750#p5750"/>
<title type="html"><![CDATA[Re: pilas.mundo.agregar_tarea]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1215&amp;p=5750#p5750"><![CDATA[
Si, es por la forma en la que indicas la función bomba_retrasada.<br /><br />En realidad, no tienes que llamarla con los (). El código correcto<br />tendría que ser:<br /><br /><pre class="prettyprint">pilas.mundo.agregar_tarea&#40;5, bomba_retrasada&#41;</pre><br /><br />Ten en cuenta que quité los ( ) al final de la función. Esto es así<br />porque la función &quot;agregar_tarea&quot; espera el nombre de una<br />función, pero no la invocación.<br /><br />Voy a mejorar ahora mismo el código de pilas para que lo<br />indique bien, sin dar un error tan raro...<br /><br />Mil gracias por el dato, cualquier consulta o dudas avisanos<br />así vamos mejorando pilas entre todos.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Jul 22, 2011 3:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cosarara97]]></name></author>
<updated>2011-07-22T00:06:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1215&amp;p=5748#p5748</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1215&amp;p=5748#p5748"/>
<title type="html"><![CDATA[pilas.mundo.agregar_tarea]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1215&amp;p=5748#p5748"><![CDATA[
Hola! Otro problema :S<br />Tengo este codigo:<br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br /><br />def bomba_retrasada&#40;&#41;:<br />    bomba_3 = pilas.actores.Bomba&#40;x=0, y=200&#41;<br /><br />bomba_1 = pilas.actores.Bomba&#40;x=-200, y=0&#41;<br />bomba_2 = pilas.actores.Bomba&#40;x=200, y=0&#41;<br />pilas.mundo.agregar_tarea&#40;5, bomba_retrasada&#40;&#41;&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br />Lo que yo pensaba que haría era hacer aparecer 2 bombas, y al cabo de unos segundos una 3ª... pero no lo hace <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> (porque el agregar_tarea hace esto, no?)<br />Lo he guardado como bomba.py, lo ejecuto, aparece la ventana un segundo con las 3 bombas y se cierra. En el terminal aparece este error:<br /><pre class="prettyprint">Traceback &#40;most recent call last&#41;:<br />  File &quot;bomba.py&quot;, line 12, in &lt;module&gt;<br />    pilas.ejecutar&#40;&#41;<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.50-py2.7.egg/pilas/__init__.py&quot;, line 214, in ejecutar<br />    mundo.ejecutar_bucle_principal&#40;ignorar_errores&#41;<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.50-py2.7.egg/pilas/mundo.py&quot;, line 68, in ejecutar_bucle_principal<br />    pilas.motor.ejecutar_bucle_principal&#40;self, ignorar_errores&#41;<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.50-py2.7.egg/pilas/motores/motor_sfml.py&quot;, line 446, in ejecutar_bucle_principal<br />    mundo._realizar_actualizacion_logica&#40;ignorar_errores&#41;<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.50-py2.7.egg/pilas/mundo.py&quot;, line 72, in _realizar_actualizacion_logica<br />    self.actualizar_simuladores&#40;&#41;<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.50-py2.7.egg/pilas/mundo.py&quot;, line 139, in actualizar_simuladores<br />    self.tareas.update&#40;1/60.0&#41;<br />  File &quot;/usr/local/lib/python2.7/dist-packages/pilas-0.50-py2.7.egg/pilas/tareas.py&quot;, line 49, in update<br />    function&#40;*params&#41;<br />TypeError: &#39;NoneType&#39; object is not callable</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2469">cosarara97</a> — Vie Jul 22, 2011 12:06 am</p><hr />
]]></content>
</entry>
</feed>