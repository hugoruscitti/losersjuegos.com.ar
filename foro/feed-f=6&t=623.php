<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=623" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-09-23T14:55:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=623</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-09-23T14:55:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2908#p2908</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2908#p2908"/>
<title type="html"><![CDATA[SDL me consume mucho procesador]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2908#p2908"><![CDATA[
No he probado nunca a dibujar imagenes tan grandes, pero puedes probar a dibujar las partes que hayan cambiado desde el último frame. Almacena las areas de las imágenes de los objetos que se hayan movido en un vector o algo así y dibuja solo aquellas pequeñas partes en las que había objetos antes, para no tener que dibujar tanto.<br /><br />Si dieses más detalles de tu programa a lo mejor podríamos encontrar una solución.<br /><br />Un saludo a todos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Sep 23, 2009 2:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2009-09-22T20:16:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2907#p2907</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2907#p2907"/>
<title type="html"><![CDATA[SDL me consume mucho procesador]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2907#p2907"><![CDATA[
Tarda 48 milisegundos en completar el bucle principal así que no entra en el if (frametime&lt;30)<br /><br />Se le va casi todo el tiempo cuando hace el SDL_Flip(screen) así que supongo que consumirá eso y no tiene solución.<br /><br />Muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Mar Sep 22, 2009 8:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-09-17T11:08:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2892#p2892</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2892#p2892"/>
<title type="html"><![CDATA[SDL me consume mucho procesador]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2892#p2892"><![CDATA[
Comprueba el tiempo del SDL_Delay.<br />En C++:<br /><dl class="codebox"><dt>Code: </dt><dd><code>std::cerr &lt;&lt; 30-frametime &lt;&lt; std::endl;<br />if &#40;frametime&lt;30&#41;<br />    SDL_Delay&#40;30-frametime&#41;;<br /></code></dd></dl><br /><br />Igualmente, un videojuego que estoy haciendo, creo recordar que también consume bastante procesador aunque no estoy en mi PC para combrobarlo.<br />Es SDL así que dibujar una imagen de 1024x768 a cada frame, le va a costar tiempo...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Sep 17, 2009 11:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2009-09-16T09:02:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2887#p2887</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2887#p2887"/>
<title type="html"><![CDATA[SDL me consume mucho procesador]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=623&amp;p=2887#p2887"><![CDATA[
Hola buenas, <br /><br />Estoy programando un pequeño juego con una resolucion de (1024 x 768) y en cuanto pongo en el loop game un SDL_BlitSurface() con la imagen de fondo, para que la valla actualizando continuamente, se me dispara el uso del procesador cerca del 50%.<br /><br />Ya le puse el control del tiempo pero como si nada.<br /><br />ResetTimeBase();<br /><br />frametime = CurrentTime();<br />      if (frametime&lt;30)<br />        SDL_Delay(30-frametime);<br /><br />Me gustaria saber si eso es normal o tiene alguna solución.<br /><br />Muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Mié Sep 16, 2009 9:02 am</p><hr />
]]></content>
</entry>
</feed>