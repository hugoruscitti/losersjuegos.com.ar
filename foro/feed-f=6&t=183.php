<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=183" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-10-25T16:09:14+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=183</id>
<entry>
<author><name><![CDATA[fernandoc]]></name></author>
<updated>2007-10-25T16:09:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=652#p652</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=652#p652"/>
<title type="html"><![CDATA[SDL consume demasiados recursos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=652#p652"><![CDATA[
Muchisimas gracias por la respuesta! es impresionante como cambio la aplicacion despues de agregar el SDL_Delay(1); <br /><br />En un principio voy a usar esto, pero el link que me pasaste es muy interesante. Cuando la aplicacion este un poco mas desarrollada, seguramente use lo del Framerate fijo.<br /><br />Nuevamente, muchas gracias por la respuesta.<br /><br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1836">fernandoc</a> — Jue Oct 25, 2007 4:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-10-25T04:34:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=651#p651</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=651#p651"/>
<title type="html"><![CDATA[SDL consume demasiados recursos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=651#p651"><![CDATA[
En realidad no es problema de SDL, lo que sucede es que tu aplicación se está llevando toda la atención por parte del procesador. Recuerda que tu aplicación corre en un ambiente multitarea y el procesador debe atender otros procesos.<br /><br />La solución es usar la función SDL_Delay() y esperar un cantidad x de ms, para así dejar &quot;respirar&quot; a la CPU. De esta manera puede atender al resto de procesos que se encuentran en la cola.<br /><br />Solo para probar, en una primera etapa, coloca lo siguiente al final de tu Game Loop, y verás la diferencia en el administrador de procesos.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Delay&#40;1&#41;;<br /></code></dd></dl><br /><br />Aunque esta no es la forma correcta, ya que estarías limitando el framerate de tu juego. Cuando sea usa framerate fijo, se suele esperar una cantidad x de ms (la cual es variable).<br /><br />Más detalles sobre la implementación de framerate fijo, lo puedes ver en un articulo que escribí hace un par de meses atrás. Te daré la dirección exacta:<br /><br /><!-- m --><a class="postlink" href="http://www.blogrcaf.com/wiki/doku.php?id=tutoriales:guia_sdl_para_videojuegos#framerate_fijo">http://www.blogrcaf.com/wiki/doku.php?i ... erate_fijo</a><!-- m --><br /><br />Ojo, que existen mas formas de abordar la solución de este problema.<br /><br />Por último, puedes probar a calcular los FPS (en el mismo artículo explico como hacerlo) que obtienes en tu máquina. Es claro que usando OpenGL los FPS aumentan considerablemente.<br /><br /><!-- m --><a class="postlink" href="http://www.blogrcaf.com/wiki/doku.php?id=tutoriales:guia_sdl_para_videojuegos#calcular_frames_por_segundo">http://www.blogrcaf.com/wiki/doku.php?i ... or_segundo</a><!-- m --><br /><br />Saludos y Suerte!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Jue Oct 25, 2007 4:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-10-25T01:02:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=650#p650</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=650#p650"/>
<title type="html"><![CDATA[SDL consume demasiados recursos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=650#p650"><![CDATA[
Hola, probablemente no estes haciendo nada mal. SDL suele consumir mucha CPU (yo llego al 100%). <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> <br />Si tu programa resulta muy complicado, y realmente es inusable debido a la lentitud; te sugiero que cambies de API como OpenGL, que es muchisimo mas rapido.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Jue Oct 25, 2007 1:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[fernandoc]]></name></author>
<updated>2007-10-24T15:45:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=646#p646</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=646#p646"/>
<title type="html"><![CDATA[SDL consume demasiados recursos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=183&amp;p=646#p646"><![CDATA[
Hola, tengo una pregunta sobre la SDL.<br /><br />Estoy haciendo una aplicacion (en Visual C++) que dibuja figuras geometricas, uso superficies SDL_HWSURFACE para cada figura y el comando SDL_BlitSurface para enviar la superficie con la figura dibujada a pantalla.<br /><br />El problema es que cuando ejecuto la aplicacion, y veo el monitor de recursos de XP, el uso de CPU está casi al 60%, y luego de cerrar la aplicacion, al 1% (como normalmente siempre está)<br /><br />La PC donde estoy corriendo la aplicación es un Pentium IV, 3.0 GHZ con 512 mb de RAM, asique no creo que sea un problema de rendimiento de la PC.<br /><br />La idea de esta aplicacion es hacer algunas cosas más que dibujar figuras, pero si cuando estoy dibujando, ya está el procesador al 60%, no quiero pensar que va a pasar cuando haga algo más!<br /><br />Me da la impresión de que debo estar haciendo algo mal con la SDL, pero no entiendo que.<br /><br />Agradezco cualquier ayuda. Muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1836">fernandoc</a> — Mié Oct 24, 2007 3:45 pm</p><hr />
]]></content>
</entry>
</feed>