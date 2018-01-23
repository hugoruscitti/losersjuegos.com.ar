<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=713" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-04-07T16:55:14+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=713</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-04-07T16:55:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3323#p3323</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3323#p3323"/>
<title type="html"><![CDATA[Control de tiempo en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3323#p3323"><![CDATA[
<blockquote><div><cite>RafaG escribió:</cite><br />[...] no lo usé porque quizá haría el juego un poco más lento [...]<br /></div></blockquote><br /><br />No te obsesiones con ese tipo de optimizaciones. Con SDL, la gran mayoría del tiempo, se está pintando la pantalla y resultarán insignificantes.<br /><br />Te aconsejo que primero hagas cosas que funcionen y luego intentes optimizar las partes más lentas.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Abr 07, 2010 4:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-04-05T13:04:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3322#p3322</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3322#p3322"/>
<title type="html"><![CDATA[Control de tiempo en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3322#p3322"><![CDATA[
el hecho de que los valores sean muy grandes no afecta al resultado:<br /><br />si un int son 32 bits, son 32 bits siempre, por muy grande que sea, lo que pasa es que quizás te puedas salir de rango<br />Además tratar con long (que creo que son las variables que utiliza SDL_Ticks es a lo sumo 1 o 2 instrucciones, así que muy lento no es xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Abr 05, 2010 1:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RafaG]]></name></author>
<updated>2010-04-05T12:39:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3321#p3321</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3321#p3321"/>
<title type="html"><![CDATA[Control de tiempo en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3321#p3321"><![CDATA[
Ya pensé en SDL_GetTicks del modo que tu dices, pero no lo usé porque quizá haría el juego un poco más lento debido a la resta tiempo_transcurrido=SDL_GetTicks()-inicio, si los valores son muy grandes...<br /><br />Pero si no queda otra, tendré que usar SDL_GetTicks().<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2204">RafaG</a> — Lun Abr 05, 2010 12:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-04-05T12:13:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3320#p3320</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3320#p3320"/>
<title type="html"><![CDATA[Control de tiempo en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3320#p3320"><![CDATA[
buenas rafaG:<br /><br />lo primero bienvenido a LosersJuegos. Vamos al lio:<br /><br />para lo que pretendes hacer te puedes apañar casi con SDL_GetTicks().<br />Cada frame, antes de entrar en la parte de actualización del juego, puedes calcular el tiempo que ha pasado entre cada actualización:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>tiempo_transcurrido = SDL_GetTicks&#40;&#41; - inicio;<br />juego.actualizar&#40;tiempo_transcurrido&#41;;<br />inicio = SDL_GetTicks&#40;&#41;;<br /></code></dd></dl><br /><br />dentro del actualizar, cada objeto tendra que tener alguna especie de contador e ir sumando el tiempo pasado en cada actualización. De esta manera, si el tiempo transcurrido es mayor que el tiempo entre cada animacion, cambiamos el sprite.<br /><br />Otra manera más simple de conseguirlo sería que cada objeto tuviese un contador de actualizaciones, y cada vez que llamasemos a actualizar dicho objeto, el contador incrementase, y si llegase a un numero concreto(10 por ejemplo), cambiamos la imagen y el contador vuelve  a 0.<br /><br />Para resumir<br />Opcion 1<br /><dl class="codebox"><dt>Code: </dt><dd><code>void Personaje::update&#40;int tiempo_transcurrido&#41;<br />&#123;<br />    mContador += tiempo_transcurrido;<br />    if &#40;mContador &gt;= TIEMPO_ENTRE_IMAGENES&#41;<br />    &#123;<br />          SiguienteImagen&#40;&#41;;<br />          mContador = 0;<br />    &#125;<br />&#125;<br /></code></dd></dl><br /><br />Opcion 2<br />[code]<br />void Personaje::update()<br />{<br />    mContador++;<br />    if (mContador &gt;= ACTUALIZACIONES_ENTRE_IMAGENES)<br />    {<br />          SiguienteImagen();<br />          mContador = 0;<br />    }<br />}<br /><br />El ultimo método parece más simple, y es más rapido de implementar, pero el problema es que si el ordenador es más rapido, las imagenes cambiaran antes, si es más lento, las imagenes cambiaran mas tarde<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Abr 05, 2010 12:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RafaG]]></name></author>
<updated>2010-04-05T11:37:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3319#p3319</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3319#p3319"/>
<title type="html"><![CDATA[Control de tiempo en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=713&amp;p=3319#p3319"><![CDATA[
Hola, estoy haciendo un juego en C++ y SDL, y esta duda nunca la consigo responder, tengo un sprite compuesto por dos imágenes, en una imagen aparece el personaje con la pierna derecha adelantada y en la otra imagen aparece con la pierna izquierda adelantada, este personaje se puede mover cuando presionas la tecla W y lógicamente, su imagen cambia para que parezca que mueve las piernas. El caso es que no sé que tengo que hacer para que cuando el jugador mantenga presionada la tecla W halla un tiempo mínimo de espera entre una imagen y otra.<br /><br />Para manejar el tiempo SDL nos da algunas funciones, pero ninguna me sirve, por ejemplo, SDL_Delay(x) no me sirve porque esta función no permitiría que el juego realizase otras operaciones, como mover a otros personajes. SDL_GetTicks() tampoco me sirve, y los timers tampoco me sirven.<br /><br />He visto muchos juegos con sprites formados por dos imágenes, pero no veo cómo controlan el tiempo mínimo entre una imagen y otra.<br /><br />A ver si me podéis decir como hacer lo que pido. Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2204">RafaG</a> — Lun Abr 05, 2010 11:37 am</p><hr />
]]></content>
</entry>
</feed>