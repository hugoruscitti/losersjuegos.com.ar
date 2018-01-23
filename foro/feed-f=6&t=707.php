<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=707" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-03-23T16:47:25+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=707</id>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2010-03-23T16:47:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3309#p3309</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3309#p3309"/>
<title type="html"><![CDATA[rendimiento de SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3309#p3309"><![CDATA[
Hola<br /><br />Bueno, parece que se ha solucionado añadiendo flag SDL_ANYFORMAT al crear la pantalla.<br /><br />Ahora, tanto en Linux como windows va más rápido.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Mar Mar 23, 2010 4:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-03-21T23:36:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3308#p3308</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3308#p3308"/>
<title type="html"><![CDATA[rendimiento de SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3308#p3308"><![CDATA[
Buenas carleto:<br /><br />Googleando un poco he visto que quizás el problema se deba a la sincronización vertical de tu monitor. Quizás windows lo desactive en las aplicaciones en modo ventana.<br /><br /><a href="http://foros.3dgames.com.ar/software.30/317678.que-es-sincronizacion-vertical.html" class="postlink">sincronizacion vertical</a><br /><br />Pero no parece ser ningún fallo de tu código.<br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Mar 21, 2010 11:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2010-03-21T21:00:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3307#p3307</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3307#p3307"/>
<title type="html"><![CDATA[rendimiento de SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=707&amp;p=3307#p3307"><![CDATA[
Hola a todos<br /><br />Hasta ahora estaba haciendo algunas pequeñas cosillas con SDL en un ordenador con windows. Ahora, uno de esos pequeños programas lo compilé bajo Linux y me dio la impresión de que iba mucho más lento, así que armé el siguiente programa para comprobar:<br /><br />El mismo código, sin tocar nada, lo he compilado tanto en windows como linux, en el mismo ordenador (tengo los dos sistemas instalados). El ordenador es un Intel core 2 quad con 4 GB de RAM y una gráfica integrada Intel (sí, necesito una mejor).<br /><br />El rendimiento del programa me sorprendió:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;SDL/SDL.h&gt;<br />#include &lt;iostream&gt;<br /><br />using namespace std;<br /><br />int main&#40;int argc, char** argv&#41;<br />&#123;<br />   SDL_Surface *pantalla, *fondo, *pelota, *tmp;<br />   SDL_Rect pos_pelota, pos_anterior;<br />   SDL_Event eventos;<br />   bool salir;<br />   int ciclos, t_inicial;<br />   int velx, vely;<br />   <br />   if&#40;SDL_Init&#40;SDL_INIT_VIDEO&#41; &lt; 0&#41;&#123;<br />      cout &lt;&lt; &quot;No se puede iniciar SDL&quot; &lt;&lt; endl;<br />      cout &lt;&lt; &quot;Error SDL: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />      return 1;<br />   &#125;<br />   <br />//   pantalla = SDL_SetVideoMode&#40;640, 480, 24, SDL_HWSURFACE | SDL_DOUBLEBUF&#41;;<br />   pantalla = SDL_SetVideoMode&#40;640, 480, 24, SDL_HWSURFACE | SDL_DOUBLEBUF | SDL_FULLSCREEN&#41;;<br />   if&#40;pantalla == NULL&#41;&#123;<br />      cout &lt;&lt; &quot;Error creando la pantalla&quot; &lt;&lt; endl;<br />      cout &lt;&lt; &quot;Error SDL: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />      SDL_Quit&#40;&#41;;<br />      return 1;<br />   &#125;<br />   <br />   tmp = SDL_LoadBMP&#40;&quot;.http://losersjuegos.com.ar/foro/fondo.bmp&quot;&#41;;<br />   fondo = SDL_DisplayFormat&#40;tmp&#41;;<br />   SDL_FreeSurface&#40;tmp&#41;;<br /><br />   tmp = SDL_LoadBMP&#40;&quot;.http://losersjuegos.com.ar/foro/bola.bmp&quot;&#41;;<br />   pelota = SDL_DisplayFormat&#40;tmp&#41;;<br />   SDL_FreeSurface&#40;tmp&#41;;<br />   SDL_SetColorKey&#40;pelota, SDL_SRCCOLORKEY, SDL_MapRGB&#40;pelota-&gt;format, 255, 0, 255&#41;&#41;;<br />   <br />   pos_pelota.x = 0;<br />   pos_pelota.y = 0;<br />   pos_pelota.w = pelota-&gt;w;<br />   pos_pelota.h = pelota-&gt;h;<br />   pos_anterior = pos_pelota;<br />   <br />   SDL_BlitSurface&#40;fondo, NULL, pantalla, NULL&#41;;<br />   <br />   salir = false;<br />   <br />   velx = 3;<br />   vely = 3;<br />   <br />   cout &lt;&lt; endl &lt;&lt; &quot;--- Midiendo FPS ---&quot; &lt;&lt; endl;<br />   <br />   ciclos = 0;<br />   t_inicial = SDL_GetTicks&#40;&#41;;<br />   <br />   while&#40;!salir&#41;&#123;<br />      while&#40;SDL_PollEvent&#40;&amp;eventos&#41;&#41;&#123;<br />         if&#40;eventos.type == SDL_QUIT&#41; salir = true;<br />         if&#40;eventos.type == SDL_KEYDOWN&#41; salir = true;<br />      &#125;<br />      <br />      SDL_BlitSurface&#40;fondo, &amp;pos_anterior, pantalla, &amp;pos_anterior&#41;;<br />      SDL_BlitSurface&#40;pelota, NULL, pantalla, &amp;pos_pelota&#41;;<br />      SDL_Flip&#40;pantalla&#41;;<br />      <br />      pos_anterior = pos_pelota;<br />      <br />      pos_pelota.x += velx;<br />      pos_pelota.y += vely;<br />      <br />      if&#40;pos_pelota.x &lt; 0 || pos_pelota.x &gt; &#40;pantalla-&gt;w - pelota-&gt;w&#41;&#41; velx *= -1;<br />      if&#40;pos_pelota.y &lt; 0 || pos_pelota.y &gt; &#40;pantalla-&gt;h - pelota-&gt;h&#41;&#41; vely *= -1;<br />      <br />      ciclos++;<br />      if&#40;&#40;SDL_GetTicks&#40;&#41; - t_inicial&#41; &gt;= 1000&#41;&#123;<br />         cout &lt;&lt; &quot;FPS: &quot; &lt;&lt; ciclos &lt;&lt; endl;<br />         ciclos = 0;<br />         t_inicial = SDL_GetTicks&#40;&#41;;<br />      &#125;<br />   &#125;<br />   <br />   SDL_FreeSurface&#40;fondo&#41;;<br />   SDL_FreeSurface&#40;pelota&#41;;<br />   SDL_Quit&#40;&#41;;<br />   cout &lt;&lt; &quot;--- Fin de la ejecución ---&quot; &lt;&lt; endl &lt;&lt; endl;<br />   return 0;<br />&#125;<br /></code></dd></dl>Linux: Tanto en modo pantalla completa como ventana, anda alrededor de los 100 FPS.<br /><br />Windows: Pantalla completa igual que con linux. En modo ventana muy rápido, más de 1000 FPS, casi ni se ve la pelota.<br /><br />Entonces mi duda es ¿Por qué esa diferencia? ¿Qué hay mal en el código?<br /><br />A ver si me orientáis un poco<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Dom Mar 21, 2010 9:00 pm</p><hr />
]]></content>
</entry>
</feed>