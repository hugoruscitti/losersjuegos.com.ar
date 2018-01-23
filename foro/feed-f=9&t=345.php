<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=345" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-07-05T16:42:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=345</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2008-07-05T16:42:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=345&amp;p=1533#p1533</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=345&amp;p=1533#p1533"/>
<title type="html"><![CDATA[Eventos de SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=345&amp;p=1533#p1533"><![CDATA[
Bueno por aqui de regreso despues de mucho tiempo... Gracias por actibar mi cuenta..<br />Ahora estuve desarrollando un juego y voy muy adelantado.. pero aperecio un problema en diferentes secciones del juego (en tiempo de ejecucion) muere inexplicadamente, solo en pocas ocasiones termina en el mismo lugar que la anterior vez...<br />Revise todo el codigo y no encontre error en el... Solo me quedo una duda que no se, si ese; es el problema... Me refiero al manejo de eventos de SDL...<br />Tengo una clase una funcion dedicada al manejo del cierre de ventanas:<br /><dl class="codebox"><dt>Code: </dt><dd><code>int Eventos::Cierra&#40; void &#41;&#123;<br />       Uint8 *Keys;<br />   SDL_Event ExtSdl;<br />   Keys = SDL_GetKeyState&#40; NULL &#41;;<br />   if&#40; Keys&#91; SDLK_ESCAPE &#93; &#41;&#123;<br />      return -1;<br />   &#125;<br />   while&#40; SDL_PollEvent&#40; &amp;ExtSdl &#41; &#41;&#123;<br />      if&#40; ExtSdl.type == SDL_QUIT &#41;&#123;<br />         return -1;<br />      &#125;<br />   &#125;<br />   return 0;<br />&#125;</code></dd></dl><br /><br />Y para mover el personaje (nave en mi caso) uso:<br /><dl class="codebox"><dt>Code: </dt><dd><code>void Jugador::Mover&#40; void &#41;&#123;<br />Uint8 *KeyMov;<br />   KeyMov = SDL_GetKeyState&#40; NULL &#41;;<br />   PlayerOne.frame = 1;<br />   if&#40; KeyMov&#91; SDLK_LEFT &#93; &amp;&amp; PlayerOne.x &gt;= 10 &#41;&#123;<br />      PlayerOne.frame = 2;<br />      PlayerOne.x = PlayerOne.x - PlayerOne.Velocidad;<br />   &#125;<br />   if&#40; KeyMov&#91; SDLK_UP &#93; &amp;&amp; PlayerOne.y &gt;= 10 &#41;&#123;<br />      PlayerOne.y = PlayerOne.y - PlayerOne.Velocidad;<br />   &#125;<br />   if&#40; KeyMov&#91; SDLK_RIGHT &#93; &amp;&amp; PlayerOne.x &lt;= 745 &#41;&#123;<br />      PlayerOne.frame = 0;<br />      PlayerOne.x = PlayerOne.x + PlayerOne.Velocidad;<br />   &#125;<br />   if&#40; KeyMov&#91; SDLK_DOWN &#93; &amp;&amp; PlayerOne.y &lt;= 535 &#41;&#123;<br />      PlayerOne.y = PlayerOne.y + PlayerOne.Velocidad;<br />   &#125;<br />   if&#40; KeyMov&#91; SDLK_RIGHT &#93; &amp;&amp; KeyMov&#91; SDLK_LEFT &#93; &#41;&#123;<br />      PlayerOne.frame = 1;<br />   &#125;<br />&#125;</code></dd></dl><br /><br />Para Acceder a la clase de los eventos lo hago mediante objetos...<br />Aun no me queda claro el manejo de eventos mediante SDL tal vez ese es el error de mi juego...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Sab Jul 05, 2008 4:42 pm</p><hr />
]]></content>
</entry>
</feed>