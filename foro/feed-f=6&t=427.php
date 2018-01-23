<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=427" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-12-27T21:42:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=427</id>
<entry>
<author><name><![CDATA[killgt]]></name></author>
<updated>2008-12-27T21:42:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=427&amp;p=1834#p1834</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=427&amp;p=1834#p1834"/>
<title type="html"><![CDATA[Re: SDL y Recursos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=427&amp;p=1834#p1834"><![CDATA[
<blockquote><div><cite>killgt escribió:</cite><br />Primero saludar a todos los miembros de este foro que llevo tiempo leyendo pero hasta ahora no he tenido el placer de escribir.<br /><br />Me estreno aqui intentando resolver un pequeño problema que tengo con un proyecto:<br /><br />Estamos realizando un pequeño juego de plataformas entre un compañero de clase y yo, el problema es que el juego consume el 50% del procesador ( por que es doble nucleo, si no, el 100%)...<br /><br />La manera en la que limitamos a 60 fps es:<br /><br />do{<br />frametime=CurrentTime();<br />}while(frametime-tiempo2&lt;17);<br /><br />El caso es que haciendo esto, realmente lo que hace es esperar hasta que el tiempo desde la ultima vuelta sea 17, asi siempre se mantiene a 60 ciclos por segundo... el caso es que esa parte en la que se queda un bucle dando vueltas hasta que se cumple con ese tiempo... no es eficiente...<br /><br />¿Alguna idea? Gracias :3<br /></div></blockquote><br /><br />Bueno, lo he conseguido por mi propia cuenta, de todos modos resumo como lograrlo por si a alguien le surge la misma duda:<br /><br />Se debe de obtener el tiempo del inicio de ese ciclo, digamos que:<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>tinicio=CurrentTime&#40;&#41;;</code></dd></dl><br /><br />Y al final de la vuelta simplemente, realizamos un:<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if &#40;CurrentTime&#40;&#41;-tinicio&lt;17&#41;<br />SDL_Delay&#40;CurrentTime&#40;&#41;-tinicio&#41;;<br /></code></dd></dl><br /><br />Y asi limitamos a 60 fps (1000/60=17) y en lugar de consumir el 100% de los recursos que nos permita el SO, solo consumimos lo necesario. :3<br /><br />Resumiendo, un SDL_Delay, es mil veces mejor que un bucle <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br />Salu2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2042">killgt</a> — Sab Dic 27, 2008 9:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[killgt]]></name></author>
<updated>2008-12-27T20:18:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=427&amp;p=1833#p1833</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=427&amp;p=1833#p1833"/>
<title type="html"><![CDATA[SDL y Recursos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=427&amp;p=1833#p1833"><![CDATA[
Primero saludar a todos los miembros de este foro que llevo tiempo leyendo pero hasta ahora no he tenido el placer de escribir.<br /><br />Me estreno aqui intentando resolver un pequeño problema que tengo con un proyecto:<br /><br />Estamos realizando un pequeño juego de plataformas entre un compañero de clase y yo, el problema es que el juego consume el 50% del procesador ( por que es doble nucleo, si no, el 100%)...<br /><br />La manera en la que limitamos a 60 fps es:<br /><br />do{<br />frametime=CurrentTime();<br />}while(frametime-tiempo2&lt;17);<br /><br />El caso es que haciendo esto, realmente lo que hace es esperar hasta que el tiempo desde la ultima vuelta sea 17, asi siempre se mantiene a 60 ciclos por segundo... el caso es que esa parte en la que se queda un bucle dando vueltas hasta que se cumple con ese tiempo... no es eficiente...<br /><br />¿Alguna idea? Gracias :3<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2042">killgt</a> — Sab Dic 27, 2008 8:18 pm</p><hr />
]]></content>
</entry>
</feed>