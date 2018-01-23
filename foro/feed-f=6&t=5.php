<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=5" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2006-08-21T18:45:52+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=5</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2006-08-21T18:45:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=22#p22</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=22#p22"/>
<title type="html"><![CDATA[SDL - Control de tiempo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=22#p22"><![CDATA[
Saludos, perdón por mi demora; estaba realizando los cambios en el sitio web ...<br /><br /><blockquote><div><cite>Requeteguay escribió:</cite><br />De todas formas me inquieta un poco lo de los 100 ciclos por segundo. ¿Depende de la frecuencia de reloj o es independiente y sirve en todos los equipos con un margen de diferencia mínimo?<br /></div></blockquote><br /><br />Aquí se plantea una diferencia entre ciclos lógicos y gráficos. Los ciclos lógicos se ejecutarán 100 veces por segundo en todos los equipos (tal vez con márgenes de diferencia pequeños). En cambio los ciclos gráficos, los mas costosos en términos de recursos, se ejecutarán dependiendo del rendimiento del equipo: 100, 90, 80 cuadros ... etc. <br /><br />El controlador del bucle principal utiliza las funciones SDL_Delay y SDL_GetTicks. Lo cual indicaría que sus retornos y parámetros serán independientes del rendimiento del equipo que las ejecuta. <br /><br />Lamentablemente, existen algunas pequeñas imprecisiones cercanas a los 10 milisegundos producto de la planificación de los sistemas operativos multitareas como GNU o Windows. Por ejemplos, no siempre podremos asegurar que SDL_Delay (13) esperará exactamente 13 milisegundos, eso depende del Sistema operativo y su estado de procesos. <br /><br />Esto último lo podemos tratar nuevamente si no se ha entendió. Suena complicado al principio... <br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ago 21, 2006 6:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Requeteguay]]></name></author>
<updated>2006-08-18T15:20:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=18#p18</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=18#p18"/>
<title type="html"><![CDATA[SDL - Control de tiempo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=18#p18"><![CDATA[
Gracias por tu ayuda, Hugo.<br /><br />En cuanto lo pruebe te comento que tal ha ido...<br /><br />De todas formas me inquieta un poco lo de los 100 ciclos por segundo. ¿Depende de la frecuencia de reloj o es independiente y sirve en todos los equipos con un margen de diferencia mínimo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=5">Requeteguay</a> — Vie Ago 18, 2006 3:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2006-08-18T00:01:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=17#p17</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=17#p17"/>
<title type="html"><![CDATA[Re: SDL - Control de tiempo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=17#p17"><![CDATA[
<blockquote><div><cite>Requeteguay escribió:</cite><br />Estaba intentando dar un control de tiempo entre pulsaciones dentro del código del juego de Volleyball.<br /><br />¿Cómo podría plantear un control de los intervalos de tiempo entre teclas? Me explico: para golpear la pelota hay que pulsar la tecla UP, pero me gustaría que se pudiese pulsar después de pasados (cómo poco) 0,5 seg. contando desde la última pulsación de la tecla UP (sólo para esta acción, el control de tiempo no se daría con los otros botones).<br /></div></blockquote><br /><br />No estoy muy seguro de poder resolver esa inquietud. Aún así te comentaré algunas ideas:<br /><br />Se podría añadir una variable como contador en la estructura personaje. Esa variable representaría tu contador de tiempo; será algo limitado pero sencillo y fácil de implementar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>struct Personaje<br />&#123;<br />        int tiempo_desde_ultimo_salto;<br /><br />        &#91;...&#93; // otras variables en la estructura<br />&#125;;<br /></code></dd></dl><br /><br />En la sección de código que administra el inicio del &quot;salto&quot; de personaje se tendría que realizar un pequeño cambio para registrar el instante en que se produce el &quot;salto&quot;:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if &#40;control_pulso &#40;data-&gt;control, LEFT&#41;&#41;<br />&#123;<br />        data-&gt;tiempo_desde_ultimo_salto = 0;<br /><br />        personaje_cambiar_estado &#40;data, personaje_iniciar_izquierda,<br />                personaje_izquierda&#41;;<br />&#125;<br /></code></dd></dl><br /><br />Para que la variable &quot;tiempo_desde_ultimo_salto&quot; funcione como un contador de tiempo tendríamos que actualizar su valor regularmente.<br /><br />En el juego Volleyball, el bucle principal del programa llama regularmente a una serie de funciones clasificadas como lógicas, por ejemplo &quot;personaje_actualizar&quot;. Realizo este comentario porque, de querer implementar un contador, sería útil actualizarlo dentro de una función &quot;lógica&quot;, que será llamada regularmente (creo que 100 veces por segundo, si recuerdo bien):<br /><br />Así, para actualizar la variable podrías utilizar el siguiente cambio en la función &quot;personaje_actualizar&quot;:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void personaje_actualizar &#40;Personaje * data&#41;<br />&#123;<br /><br />        /* si esta función se ejecuta 100 veces por segundo, entonces<br />        cuando la variable 'tiempo_desde_ultimo_salto' vale 100 transcurrió<br />        1 segundo, cuando vale 200 transcurrieron 2 segundos ... */<br /><br />        if &#40;data-&gt;tiempo_desde_ultimo_salto % 100 == 0&#41;<br />        &#123;<br />                printf &#40;&quot;Desde el último salto transcurrieron: &quot;&#41;;<br />                printf &#40;&quot;%d segundos&quot;, data-&gt;tiempo_desde_ultimo_salto / 100&#41;;<br />                printf &#40;&quot;\n&quot;;<br />        &#125;<br /><br />        /* se aumenta el contador de tiempo */<br /><br />        data-&gt;tiempo_desde_ultimo_salto ++;<br />        data-&gt;estado &#40;data&#41;;<br />&#125;<br /></code></dd></dl><br /><br /><blockquote><div><cite>Requeteguay escribió:</cite><br />Siento hacer tantas preguntas ^^. Muchas gracias.<br /></div></blockquote><br /><br />Por favor, siempre son bienvenidas.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ago 18, 2006 12:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Requeteguay]]></name></author>
<updated>2006-08-16T19:18:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=16#p16</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=16#p16"/>
<title type="html"><![CDATA[SDL - Control de tiempo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=5&amp;p=16#p16"><![CDATA[
Hola Foro!<br /><br />Estaba intentando dar un control de tiempo entre pulsaciones dentro del código del juego de Volleyball.<br /><br />¿Cómo podría plantear un control de los intervalos de tiempo entre teclas? Me explico: para golpear la pelota hay que pulsar la tecla UP, pero me gustaría que se pudiese pulsar después de pasados (cómo poco) 0,5 seg. contando desde la última pulsación de la tecla UP (sólo para esta acción, el control de tiempo no se daría con los otros botones).<br /><br />Sé que en el contexto del juego de Volleyball suena raro pero estoy adaptando este código para un juego de beat 'm up, de ahí esas ideas tan extrañas, jeje.<br /><br />Siento hacer tantas preguntas ^^. Muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=5">Requeteguay</a> — Mié Ago 16, 2006 7:18 pm</p><hr />
]]></content>
</entry>
</feed>