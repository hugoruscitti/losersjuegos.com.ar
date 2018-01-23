<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1098" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-24T20:59:28+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1098</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-03-24T20:59:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5337#p5337</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5337#p5337"/>
<title type="html"><![CDATA[Re: [c++] Problemilla con time]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5337#p5337"><![CDATA[
la respuesta está clara, en su idioma, el inglés xD<br /><br />No ahora en serio, puedes hacer casi cualquier pregunta y acabará dándote resultados. Para tu pregunta use &quot;c++ get date&quot; y en el segundo enlace estaba...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 24, 2011 8:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-24T03:16:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5331#p5331</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5331#p5331"/>
<title type="html"><![CDATA[Re: [c++] Problemilla con time]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5331#p5331"><![CDATA[
jojojo al final me lo has dado resuelto, solo he tenido que cambiar el tm_mday que estaba usando por el tm_yday. Ahora sigo teniendo el mismo error cada 1 de enero, pero tocando un par de cosillas puedo hacer que el error practicamente no perjudique al programa, asi que, lo doy por resuelto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />gracias de nuevo juanxo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />PD: Aunque no lo parezca soy un fiel amante de google, pero no sabia como preguntarle esto XDDD <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Mar 24, 2011 3:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-03-24T00:16:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5327#p5327</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5327#p5327"/>
<title type="html"><![CDATA[Re: [c++] Problemilla con time]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5327#p5327"><![CDATA[
<blockquote class="uncited"><div><br />Me estoy comiendo la cabeza pero no hay manera, no encuentro una solucion para que funcione cuando cuando cambia de mes, igual me estoy complicando la vida, aver si me podeis hechar una manito <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /></div></blockquote><br /><br />No te comas la cabeza, usa Google!! xD<br /><br />Esta vez no te lo voy a dar hecho, porque así te sirve de aprendizaje, y porque es demasiado tarde como para ponerse a ello ahora:<br /><br /><a href="http://www.cplusplus.com/reference/clibrary/ctime/tm/" class="postlink">Aquí</a> tienes un enlace a una estructura que contiene casi todos los datos que tu necesitas, en especial cosas como yday (día del año o cosas así) y con <a href="http://www.cplusplus.com/reference/clibrary/ctime/localtime/" class="postlink">esto</a> pasas de la estructura de time_t básica, que supongo que es lo que estás usando a la estructura que te he comentado antes.<br /><br />Ahora te toca a tí, juntarlo todo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 24, 2011 12:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-23T23:00:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5325#p5325</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5325#p5325"/>
<title type="html"><![CDATA[[c++] Problemilla con time]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1098&amp;p=5325#p5325"><![CDATA[
Buuenas estoy intentando hace un codigo que haga lo siguiente: <br />-Al pulsar un boton, guarde el momento(dia, hora y minuto) en que se pulso.<br />-Mostrar un contador que empieze desde 24:00 y valla bajando segun valla pasando el tiempo. <br /><br />De momento tengo esto:<br /><pre class="prettyprint">while&#40;!done&#41;<br />{<br />if&#40;botonPulsado&#41;<br />{<br />diaPulsacion = dia_actual&#40;&#41;; //Guarda un int con el dia actual en el momento de presionar el boton<br />horaPulsacion = hora_actual&#40;&#41;; //Guarda un int con la hora actual en el momento de presionar el boton<br />minutoPulsacion = minuto_actual&#40;&#41;; //Guarda un int con el minuto actual en el momento de presionar el boton<br />}<br /><br />diaActual = dia_actual&#40;&#41;; //Guarda un int con el dia actual<br />horaActual = hora_actual&#40;&#41;; //Guarda un int con la hora actual<br />minutoActual = minuto_actual&#40;&#41;; //Guarda un int con el minuto actual<br /><br />minutosActualesTotales = &#40;diaActual*24*60&#41;+&#40;horaActual*60&#41;+minutoActual; //Paso todo a minutos para poder operar con las horas y dias<br />minutosPulsacionTotales = &#40;diaPulsacion*24*60&#41;+&#40;horaPulsacion*60&#41;+minutoPulsacion; <br /><br />minutosDesdeLaPulsacion = minutosActualTotales - minutosCreacionTotales; //Introduzco en esta variable los minutos que han pasado desde que pulse el boton<br /><br />minutosContadorTotales = 1440 - minutosDesdeLaPulsacion; //Aqui van los minutos del contador, 1440 son los minutos que tienen 24 horas.<br /><br />horasRestantes = minutosContadorTotales/60;<br />minutosRestantes = minutosContadorTotales%60;<br /><br />printf&#40;&quot;%d:%d\n&quot;, horasRestantes, minutosRestantes&#41;;<br />}</pre><br />Hasta aqui todo bien, pulso el boton y comienza a bajar el contador, el problema llega cuando cambia el mes, que la variable diaActual pasa de 30 o 31 a 1 y se vuelve loco al hacer esta operacion: minutosActualesTotales = (diaActual*24*60)+(horaActual*60)+minutoActual;<br /><br />Me estoy comiendo la cabeza pero no hay manera, no encuentro una solucion para que funcione cuando cuando cambia de mes, igual me estoy complicando la vida, aver si me podeis hechar una manito <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Mar 23, 2011 11:00 pm</p><hr />
]]></content>
</entry>
</feed>