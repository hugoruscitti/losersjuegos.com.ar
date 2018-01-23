<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1306" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-10T08:34:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1306</id>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2011-10-10T08:34:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6082#p6082</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6082#p6082"/>
<title type="html"><![CDATA[Re: Unas dudas sobre los estados]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6082#p6082"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />... en juegos 2D no representa ni un problema cargar las imágenes al momento que se requieres, además estados del juego no son muchos, pues mas bien son como menús, ni el juego mas complicado que conozco usa muchos menús, otra cosas es que el juego contenga muchos niveles pero eso es otra cosa y todo juego carga sus recursos antes de iniciar el nuevo nivel(el típico loading...). en mi opinion no creo que sea tan necesario preocuparse por si va a tardar en cargar a cada rato los estados una pantalla puede ocupar 2 Mg eso de bolada lo cargas desde el disco duro.<br /></div></blockquote><br /><br />Toda la razón <span style="color: #008000">carlostex</span>, sobre todo en el juego que yo haga, que suelen ser muy muy simples y sencillitos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br /><br />Más que nada preguntaba por curiosidad <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Lun Oct 10, 2011 8:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-10-08T01:20:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6073#p6073</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6073#p6073"/>
<title type="html"><![CDATA[Re: Unas dudas sobre los estados]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6073#p6073"><![CDATA[
<blockquote><div><cite>carleto escribió:</cite><br />Creo que lo mejor será crear una clase que se encargue de cargar/liberar los gráficos y demás e ir iniciando/liberando los estados a medida que se necesiten.<br /></div></blockquote><br /><br />Tu idea esta bien, ya que estas usando una clase que solo maneja gráficos, y estas especializando las clases, para el mantenimiento del código eso es muy bueno. Por otro lado en el ejemplo esta así por que el objetivo es dar una estructura de como manejar estado, no de como cargar los recursos eso es cosa aparte. <br />En este sentido hay que equilibrar, pues si se cargan todas las imágenes que se usaran durante el juego, este usara mucha memoria. en juegos 2D no representa ni un problema cargar las imágenes al momento que se requieres, además estados del juego no son muchos, pues mas bien son como menús, ni el juego mas complicado que conozco usa muchos menús, otra cosas es que el juego contenga muchos niveles pero eso es otra cosa y todo juego carga sus recursos antes de iniciar el nuevo nivel(el típico loading...). en mi opinion no creo que sea tan necesario preocuparse por si va a tardar en cargar a cada rato los estados una pantalla puede ocupar 2 Mg eso de bolada lo cargas desde el disco duro.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Oct 08, 2011 1:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2011-10-07T09:40:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6066#p6066</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6066#p6066"/>
<title type="html"><![CDATA[Re: Unas dudas sobre los estados]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6066#p6066"><![CDATA[
<blockquote><div><cite>kiketom escribió:</cite><br />Aqui tienes un pequeño ejemplo:<br /><br /><!-- m --><a class="postlink" href="http://www.box.net/shared/1axt5mir3yl1hir50ytl">http://www.box.net/shared/1axt5mir3yl1hir50ytl</a><!-- m --><br /></div></blockquote><br /><br />Le he estado echando un vistazo, aunque yo uso C++, entiendo que la idea es la misma.<br /><br />Se me ha ocurrido una modificación al código original que puse. Quitar las llamadas a iniciar y a limpiar en los métodos que meten, quitan o cambian a un nuevo estado. Y entonces hacer la iniciación de todos los estados al iniciar el motor y limpiar todos los estados al cerrar el motor.<br /><br />La pega que se me ocurre es, a parte del código extra, es que se están creando e iniciando todos los estados posibles, aunque luego durante la ejecución lo los vayamos a usar todos, en un juego complejo, con muchos estados, sería un &quot;desperdicio&quot; de memoria y tiempo.<br /><br />Creo que lo mejor será crear una clase que se encargue de cargar/liberar los gráficos y demás e ir iniciando/liberando los estados a medida que se necesiten.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Vie Oct 07, 2011 9:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-10-06T12:01:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6058#p6058</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6058#p6058"/>
<title type="html"><![CDATA[Re: Unas dudas sobre los estados]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6058#p6058"><![CDATA[
Aqui tienes un pequeño ejemplo:<br /><br /><!-- m --><a class="postlink" href="http://www.box.net/shared/1axt5mir3yl1hir50ytl">http://www.box.net/shared/1axt5mir3yl1hir50ytl</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Jue Oct 06, 2011 12:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-10-06T11:15:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6057#p6057</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6057#p6057"/>
<title type="html"><![CDATA[Re: Unas dudas sobre los estados]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6057#p6057"><![CDATA[
<blockquote><div><cite>carleto escribió:</cite><br />Hola<br /><br />Me picó un poco la curiosidad sobre lo que se habla de los estados en el enlace que pone <span style="color: #008000"><span style="font-weight: bold">carlostex </span></span>en esta conversación: <!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=9&amp;t=1279">viewtopic.php?f=9&amp;t=1279</a><!-- l --><br /><br />Así que estuve mirando el código. Hay algo que no me queda claro. En el gameengine, el método que se encarga de cambiar de estado es el siguiente:<br /><br /><pre class="prettyprint">void CGameEngine::ChangeState&#40;CGameState* state&#41; <br />{<br />// cleanup the current state<br />if &#40; !states.empty&#40;&#41; &#41; {<br />states.back&#40;&#41;-&gt;Cleanup&#40;&#41;;<br />states.pop_back&#40;&#41;;<br />}<br /><br />// store and init the new state<br />states.push_back&#40;state&#41;;<br />states.back&#40;&#41;-&gt;Init&#40;&#41;;<br />}</pre><br /><br />Según entiendo lo que hace es sacar de la lista el último estado (que sería el que está actualmente ejecutándose) y meter e iniciar el nuevo.<br /><br />En el mismo ejemplo, el Init() de un estado es así:<br /><pre class="prettyprint">void CMenuState::Init&#40;&#41;<br />{<br />SDL_Surface* temp = SDL_LoadBMP&#40;&quot;menu.bmp&quot;&#41;;<br /><br />bg = SDL_DisplayFormat&#40;temp&#41;;<br /><br />SDL_FreeSurface&#40;temp&#41;;<br /><br />printf&#40;&quot;CMenuState Init\n&quot;&#41;;<br />}</pre><br /><br />Por lo tanto, cada vez que se cambia de estado, se recargan las imágenes ¿No supondría esto una pérdida de rendimiento? Este ejemplo es sencillo, pero en un juego completo imagino que sí, habría que cargar esas imágenes en otra parte.<br /></div></blockquote><br /><br />En efecto el codigo hace lo que dices. Propuse esa gestión de estados del juego como un ejemplo. Pero perfectamente podrías cargar los recursos en la Clase que gestiona los estado gamemanager.py y luego usarlos en el estado que desees con self.parent.recurso .<br />No se si me he explicado correctamente <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />  <br /><br /><br /><blockquote><div><cite>carleto escribió:</cite><br />Y otra cosa, si, por ejemplo, yo creo un estado que es el juego en sí, y otro que es un menú que puede aparecer durante el juego y al salir del menú quiero que el juego esté dónde lo dejé. Si lo hago así, se reiniciaría a cada vez. Imagino que habría que hacer como comenté con las imágenes, iniciar el juego en otra parte.<br /><br />No sé si estoy en lo cierto con lo que comento, a ver si me aclaráis.<br />Saludos<br /></div></blockquote><br /><br />Para hacer eso en el estado del juego tendrias que llamar a pushState(menuState) para que dejara el estado del juego en &quot;pause&quot; y luego en menuState hacer un popState().<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Jue Oct 06, 2011 11:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2011-10-06T10:59:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6056#p6056</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6056#p6056"/>
<title type="html"><![CDATA[Unas dudas sobre los estados]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1306&amp;p=6056#p6056"><![CDATA[
Hola<br /><br />Me picó un poco la curiosidad sobre lo que se habla de los estados en el enlace que pone <span style="color: #008000"><span style="font-weight: bold">carlostex </span></span>en esta conversación: <!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=9&amp;t=1279">viewtopic.php?f=9&amp;t=1279</a><!-- l --><br /><br />Así que estuve mirando el código. Hay algo que no me queda claro. En el gameengine, el método que se encarga de cambiar de estado es el siguiente:<br /><br /><pre class="prettyprint">void CGameEngine::ChangeState&#40;CGameState* state&#41; <br />{<br />// cleanup the current state<br />if &#40; !states.empty&#40;&#41; &#41; {<br />states.back&#40;&#41;-&gt;Cleanup&#40;&#41;;<br />states.pop_back&#40;&#41;;<br />}<br /><br />// store and init the new state<br />states.push_back&#40;state&#41;;<br />states.back&#40;&#41;-&gt;Init&#40;&#41;;<br />}</pre><br /><br />Según entiendo lo que hace es sacar de la lista el último estado (que sería el que está actualmente ejecutándose) y meter e iniciar el nuevo.<br /><br />En el mismo ejemplo, el Init() de un estado es así:<br /><pre class="prettyprint">void CMenuState::Init&#40;&#41;<br />{<br />SDL_Surface* temp = SDL_LoadBMP&#40;&quot;menu.bmp&quot;&#41;;<br /><br />bg = SDL_DisplayFormat&#40;temp&#41;;<br /><br />SDL_FreeSurface&#40;temp&#41;;<br /><br />printf&#40;&quot;CMenuState Init\n&quot;&#41;;<br />}</pre><br /><br />Por lo tanto, cada vez que se cambia de estado, se recargan las imágenes ¿No supondría esto una pérdida de rendimiento? Este ejemplo es sencillo, pero en un juego completo imagino que sí, habría que cargar esas imágenes en otra parte.<br /><br />Y otra cosa, si, por ejemplo, yo creo un estado que es el juego en sí, y otro que es un menú que puede aparecer durante el juego y al salir del menú quiero que el juego esté dónde lo dejé. Si lo hago así, se reiniciaría a cada vez. Imagino que habría que hacer como comenté con las imágenes, iniciar el juego en otra parte.<br /><br />No sé si estoy en lo cierto con lo que comento, a ver si me aclaráis.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Jue Oct 06, 2011 10:59 am</p><hr />
]]></content>
</entry>
</feed>