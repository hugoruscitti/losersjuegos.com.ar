<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=794" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-24T19:34:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=794</id>
<entry>
<author><name><![CDATA[JMP]]></name></author>
<updated>2010-07-24T19:34:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3520#p3520</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3520#p3520"/>
<title type="html"><![CDATA[Re: Problema para refrescar la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3520#p3520"><![CDATA[
Tiene razón hugoruscitti ha sido un fallo tonto con los corchetes<br /><br />muchas gracias por la ayuda<br /><br />Así quedaria<br /><dl class="codebox"><dt>Code: </dt><dd><code>    while (!salir)<br />    {<br />          Draw_scene();<br />          if (SDL_PollEvent(&amp;event))<br />          {<br />            if (event.type==SDL_QUIT)<br />            {<br />              salir = true;<br />            }<br />          }<br />    }</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2295">JMP</a> — Sab Jul 24, 2010 7:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-07-24T15:49:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3519#p3519</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3519#p3519"/>
<title type="html"><![CDATA[Re: Problema para refrescar la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3519#p3519"><![CDATA[
Buenas, ¿como estás?.<br /><br />Por lo que veo tu programa tiene un pequeño error de sintáxis, y ese<br />es el responsable de que el juego no funcione.<br /><br />Tienes lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>while (!salir)<br />              sentencia;<br /><br />              mas sentencias....<br /></code></dd></dl><br /><br />Pero si bien has identado respecto del margen, no definiste un bloque con llaves. Eso<br />hace que el compilador de C piense que tu bucle es solamente ejecutar esa<br />sentencia que está debajo del <span style="font-weight: bold">while</span>, y no todas las sentencias de mas abajo.<br /><br />En otras palabras, el compilador piensa que tienes algo como esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>bool salir = false;<br /><br />while (!salir)<br />          Draw_scene(screen);  //screen = SDL_SetVideoMode(height,width,n_bites,SDL_HWSURFACE);<br />          <br />if (SDL_PollEvent(&amp;event))<br />{<br />    if (event.type==SDL_QUIT)<br />        salir = true;<br />}<br /></code></dd></dl><br /><br />donde solamente hay que ejecutar &quot;Draw_scene&quot; muchas, muchas veces.<br /><br />Por eso, la solución es abrir un paréntesis ni bien inicia al bloque de <span style="font-weight: bold">while</span> y cerrarlo<br />casi al final el programa.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Jul 24, 2010 3:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-24T14:43:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3518#p3518</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3518#p3518"/>
<title type="html"><![CDATA[Re: Problema para refrescar la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3518#p3518"><![CDATA[
buenas JMP:<br /><br />podrías comentar un poco más el problema? Da algun error, sale directamente, se queda todo negro?  y si puedes, enseñanos el codigo de nave.draw <br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Jul 24, 2010 2:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[JMP]]></name></author>
<updated>2010-07-24T11:28:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3517#p3517</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3517#p3517"/>
<title type="html"><![CDATA[Problema para refrescar la pantalla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=794&amp;p=3517#p3517"><![CDATA[
Estoy empezando con SDL y C++ y estoy teniendo un problema para poder refrescar se cala cuando lo ejecuto,<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Rect rectangulo;<br />void Draw_scene (SDL_Surface *screen)<br />{<br />     <br />     rectangulo.x=nave.getx();<br />     rectangulo.y=nave.gety();<br />     rectangulo.w=nave.getw();<br />     rectangulo.h=nave.geth();<br />     SDL_FillRect (screen, &amp;rectangulo, SDL_MapRGB(screen-&gt;format, 0, 0, 0));<br /><br />     nave.setx(100);<br />     nave.sety(100);<br />     nave.draw(screen);<br />     <br />     SDL_Flip(screen);<br />     <br />}</code></dd></dl><br />esta la uso para que cambie el dibujo y la meto dentro del game loop<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>...<br />    bool salir = false;<br />    while (!salir)<br />          Draw_scene(screen);  //screen = SDL_SetVideoMode(height,width,n_bites,SDL_HWSURFACE);<br />          <br />          if (SDL_PollEvent(&amp;event))<br />          {<br />            if (event.type==SDL_QUIT)<br />            {<br />               salir = true;<br />          }<br />          <br />    }<br />...</code></dd></dl><br />Me hace un dibujo y se cala<br /><br />Gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2295">JMP</a> — Sab Jul 24, 2010 11:28 am</p><hr />
]]></content>
</entry>
</feed>