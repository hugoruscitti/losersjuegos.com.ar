<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=716" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-04-15T03:21:43+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=716</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-04-15T03:21:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3338#p3338</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3338#p3338"/>
<title type="html"><![CDATA[Teclas combinadas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3338#p3338"><![CDATA[
<blockquote><div><cite>RafaG escribió:</cite><br />En fín, ahora el problema es que si, por ejemplo, el jugador 1 mantiene su tecla apretada y el jugador 2 aprieta su tecla varias veces los puntos se les suman a los dos, algo injusto, creo que lo podré resolver solo, pero si se te ocurre alguna manera de arreglarlo dímelo.<br /></div></blockquote><br /><br />Tal vez puedas solucionar el tema de la pulsacion de teclas<br />indicando a SDL que no admita repeticiones:<br /><br />   <!-- m --><a class="postlink" href="http://www.libsdl.org/cgi/docwiki.cgi/SDL_EnableKeyRepeat">http://www.libsdl.org/cgi/docwiki.cgi/S ... eKeyRepeat</a><!-- m --><br /><br />aunque no se si funciona con las teclas Control...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Abr 15, 2010 3:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-04-14T11:15:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3336#p3336</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3336#p3336"/>
<title type="html"><![CDATA[Teclas combinadas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3336#p3336"><![CDATA[
la manera que se me ocurre para evitar eso es no usar el pygame.key....., sino manejar los eventos y unicamente incrementar el marcador cuando se pulsa la tecla, es decir, la primera vez que baja, y no si se mantiene pulsada<br /><br />ahora mismo no me acuerdo de como se hacia esto con pygame, pero creo que era algo de keydown y keyup o algo asi<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Abr 14, 2010 11:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RafaG]]></name></author>
<updated>2010-04-13T17:57:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3335#p3335</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3335#p3335"/>
<title type="html"><![CDATA[Teclas combinadas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3335#p3335"><![CDATA[
Ya se por qué no me detectaba las teclas combinadas, en mi juego uso la tecla Control, que es una tecla modificadora, por lo tanto, según he leido hay que usar una función especial:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDLMod SDL_GetModState&#40;void&#41;;</code></dd></dl><br />En lugar de:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_GetKeyState&#40;NULL&#41;;</code></dd></dl><br /><br />En fín, ahora el problema es que si, por ejemplo, el jugador 1 mantiene su tecla apretada y el jugador 2 aprieta su tecla varias veces los puntos se les suman a los dos, algo injusto, creo que lo podré resolver solo, pero si se te ocurre alguna manera de arreglarlo dímelo.<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2204">RafaG</a> — Mar Abr 13, 2010 5:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-04-12T19:43:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3333#p3333</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3333#p3333"/>
<title type="html"><![CDATA[Teclas combinadas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3333#p3333"><![CDATA[
buenas Rafa<br /><br />Para lo que tu quieres no te es necesario la ultima comprobación, debido a como has hecho (correctamente) los dos primeros casos<br /><br />Ten en cuenta que en caso de que se cumplan los dos a la vez, ya habrás entrado por los dos primeros if, por lo que ya habrás añadido correctamente los dos puntos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Abr 12, 2010 7:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RafaG]]></name></author>
<updated>2010-04-12T15:05:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3332#p3332</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3332#p3332"/>
<title type="html"><![CDATA[Teclas combinadas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=716&amp;p=3332#p3332"><![CDATA[
Hola, ¿qué tengo que hacer para trabajar con varias (dos) teclas combinadas a la vez?<br /><br />Estoy haciendo un juego de dos jugadores, consiste en apretar el mayor número de veces las teclas, el jugador 1 tiene que presionar la tecla Ctrl Izquierda y el segundo jugador Ctrl Derecha. Si los jugadores pulsan muy rápidamente las teclas seguramente coincidirán alguna vez, entonces para eso necesito trabajar con teclas combinadas.<br /><br />Vi cómo se hacía en el ejemplo &quot;Desplazamiento suave&quot;:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> if &#40;teclas &#91;SDLK_UP&#93; &amp;&amp; teclas &#91;SDLK_LEFT&#93;&#41; </code></dd></dl><br /><br />Pero cuando yo uso en mi juego eso no me funciona:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if &#40;teclas&#91;SDLK_LCTRL&#93;&#41;<br />&#123; <br />        puntos1++;<br />&#125;<br /><br />if &#40;teclas&#91;SDLK_RCTRL&#93;&#41;<br />&#123;<br />        puntos2++;<br />&#125;<br /><br />if &#40;teclas&#91;SDLK_LCTRL&#93; &amp;&amp; teclas&#91;SDLK_RCTRL&#93;&#41;<br />&#123;<br />         puntos1++;<br />          puntos2++;<br />&#125;<br /></code></dd></dl><br /><br />Me funciona teclas[SDLK_LCTRL] y teclas[SDLK_RCTRL] pero unidos no. A ver si me podéis ayudar o me decís otra manera para hacer lo que quiero.<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2204">RafaG</a> — Lun Abr 12, 2010 3:05 pm</p><hr />
]]></content>
</entry>
</feed>