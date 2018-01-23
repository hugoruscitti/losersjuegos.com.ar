<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=746" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-23T00:44:50+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=746</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-23T00:44:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3465#p3465</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3465#p3465"/>
<title type="html"><![CDATA[Dejar de captar eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3465#p3465"><![CDATA[
logico, en realidad sdl guarda una cola de eventos (no se si estas familiarizado con las colas) y si solo lo haces una vez, funciona, pero en cuanto tiene mas de un evento, solo quitaria el evento de la cabeza, dejando los demas en la cola<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jul 23, 2010 12:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RafaG]]></name></author>
<updated>2010-07-22T17:50:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3462#p3462</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3462#p3462"/>
<title type="html"><![CDATA[Dejar de captar eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3462#p3462"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />si he entendido bien, cuando tu pulsas para entrar en Juego, se siguen guardando las pulsaciones. El tema seria vaciar la cola de eventos antes de volver al menu.<br /><br />A grandes rasgos, seria hacer un while (SDL_PollEvent(&amp;event)) al final del juego para vaciar la cola de eventos<br /><br />PS: perdona por lo de SDL_GetEvent (el nombre creo que es de SFML, la cual te recomiendo) SDL_GetEvent = SDL_PollEvent(&amp;event))<br /></div></blockquote><br /><br />Bien, se solucionó, gracias por tu ayuda. Interesante lo de SFML, me informaré.<br /><br />Hay una cosa que no he logrado comprender, al principio escribí SDL_PollEvent(&amp;event) sin el <span style="font-weight: bold">while</span>. Y no funcionó. No entiendo por qué, al fin y al cabo lo único que hace el while es llamar a la función SDL_PollEvent(), ¿no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2204">RafaG</a> — Jue Jul 22, 2010 5:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-22T16:44:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3461#p3461</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3461#p3461"/>
<title type="html"><![CDATA[Dejar de captar eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3461#p3461"><![CDATA[
si he entendido bien, cuando tu pulsas para entrar en Juego, se siguen guardando las pulsaciones. El tema seria vaciar la cola de eventos antes de volver al menu.<br /><br />A grandes rasgos, seria hacer un while (SDL_PollEvent(&amp;event)) al final del juego para vaciar la cola de eventos<br /><br />PS: perdona por lo de SDL_GetEvent (el nombre creo que es de SFML, la cual te recomiendo) SDL_GetEvent = SDL_PollEvent(&amp;event))<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jul 22, 2010 4:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RafaG]]></name></author>
<updated>2010-07-22T12:46:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3460#p3460</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3460#p3460"/>
<title type="html"><![CDATA[Dejar de captar eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3460#p3460"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />buenas rafa:<br /><br />no se como lo tendras organizado, pero si lo tienes mediante clases tipo Screen (algo típico), con tus funciones de Actualizar, Inicializar, Salir, etc para cada tipo de pantalla, lo que puedes hacer al salir de cada menu es vaciar la cola de eventos con el SDL_GetEvent()<br /></div></blockquote><br /><br />He buscado en mis manuales y en Internet y esa función parece no existir.<br /><br />Aquí está el ejecutable con el código (para Windows): <a href="http://www.megaupload.com/?d=YSBU74A0" class="postlink">http://www.megaupload.com/?d=YSBU74A0</a><br /><br />Y aquí el código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />#include &lt;SDL&gt;<br /><br />void Juego&#40;&#41;;<br />void Cargar&#40;&#41;;<br />void Salir&#40;&#41;;<br /><br />void Mover&#40;&#41;;<br />void Imprimir&#40;&#41;;<br /><br />SDL_Surface *pantalla, *personaje,*flecha, *menu;<br />SDL_Rect PosPersonaje,PosFlecha,PosMenu;<br />SDL_Event evento;<br />Uint8 *tecla=SDL_GetKeyState&#40;NULL&#41;;<br />int OpcionSeleccionada=1;<br />int done=0;<br />int presionado=0;<br /><br />int main &#40; int argc, char** argv &#41;<br />&#123;<br />    Cargar&#40;&#41;;<br />    SDL_BlitSurface&#40;menu,NULL,pantalla,&amp;PosMenu&#41;;<br />    SDL_BlitSurface&#40;flecha,NULL,pantalla,&amp;PosFlecha&#41;;<br />    SDL_Flip&#40;pantalla&#41;;<br />    while &#40;1&#41;<br />    &#123;<br />        while &#40;SDL_WaitEvent&#40;&amp;evento&#41;&#41;<br />        &#123;<br />            if &#40;evento.type==SDL_KEYDOWN&#41;<br />            &#123;<br />                if &#40;evento.key.keysym.sym==SDLK_UP&#41;<br />                &#123;<br />                    if &#40;OpcionSeleccionada==1&#41;<br />                    &#123;<br />                        OpcionSeleccionada=2;<br />                        PosFlecha.y=205;<br />                        break;<br />                    &#125;<br />                    if &#40;OpcionSeleccionada==2&#41;<br />                    &#123;<br />                        OpcionSeleccionada=1;<br />                        PosFlecha.y=100;<br />                        break;<br />                    &#125;<br />                &#125;<br />                if &#40;evento.key.keysym.sym==SDLK_DOWN&#41;<br />                &#123;<br />                    if &#40;OpcionSeleccionada==1&#41;<br />                    &#123;<br />                        OpcionSeleccionada=2;<br />                        PosFlecha.y=205;<br />                        break;<br />                    &#125;<br />                    if &#40;OpcionSeleccionada==2&#41;<br />                    &#123;<br />                        OpcionSeleccionada=1;<br />                        PosFlecha.y=100;<br />                        break;<br />                    &#125;<br /><br />                &#125;<br />                if &#40;evento.key.keysym.sym==SDLK_RETURN&#41;<br />                &#123;<br />                    if &#40;OpcionSeleccionada==1&#41;<br />                    &#123;<br />                        Juego&#40;&#41;;<br />                        done=0;<br />                    &#125;<br />                    if &#40;OpcionSeleccionada==2&#41;<br />                    &#123;<br />                        Salir&#40;&#41;;<br />                    &#125;<br />                &#125;<br /><br />                if &#40;evento.key.keysym.sym==SDLK_ESCAPE &amp;&amp; presionado==0&#41;<br />                &#123;<br />                    Salir&#40;&#41;;<br />                &#125;<br />                break;<br />            &#125;<br /><br />            SDL_PumpEvents&#40;&#41;;<br />            tecla=SDL_GetKeyState&#40;NULL&#41;;<br />            if &#40;tecla&#91;SDLK_ESCAPE&#93;==0&#41;<br />            &#123;<br />                presionado=0;<br />            &#125;<br /><br />        &#125;<br /><br />        SDL_BlitSurface&#40;menu,NULL,pantalla,&amp;PosMenu&#41;;<br />        SDL_BlitSurface&#40;flecha,NULL,pantalla,&amp;PosFlecha&#41;;<br />        SDL_Flip&#40;pantalla&#41;;<br />    &#125;<br />    return 0;<br />&#125;<br /><br />void Cargar&#40;&#41;<br />&#123;<br />    if &#40;SDL_Init&#40;SDL_INIT_VIDEO&#41;&lt;0&#41;<br />    &#123;<br />        cerr &lt;&lt; &quot;Error: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />        exit&#40;1&#41;;<br />    &#125;<br /><br />    atexit&#40;SDL_Quit&#41;;<br /><br />    pantalla=SDL_SetVideoMode&#40;350,350,24,SDL_HWSURFACE | SDL_DOUBLEBUF&#41;;<br />    if &#40;pantalla==NULL&#41;<br />    &#123;<br />        cerr &lt;&lt; &quot;Error: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />        exit&#40;1&#41;;<br />    &#125;<br /><br />    personaje=SDL_LoadBMP&#40;&quot;PSN.bmp&quot;&#41;;<br />    if &#40;personaje==NULL&#41;<br />    &#123;<br />        cerr &lt;&lt; &quot;Error: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt;endl&gt;w/2&#41;;<br />    PosPersonaje.y=175-&#40;personaje-&gt;h/2&#41;;<br /><br />    flecha=SDL_LoadBMP&#40;&quot;FL.bmp&quot;&#41;;<br />    if &#40;flecha==NULL&#41;<br />    &#123;<br />        cerr &lt;&lt; &quot;Error: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />        exit&#40;1&#41;;<br />    &#125;<br />    PosFlecha.x=46;<br />    PosFlecha.y=100;<br /><br />    menu=SDL_LoadBMP&#40;&quot;MN.bmp&quot;&#41;;<br />    if &#40;menu==NULL&#41;<br />    &#123;<br />        cerr &lt;&lt; &quot;Error: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />        exit&#40;1&#41;;<br />    &#125;<br />    PosMenu.x=0;<br />    PosMenu.y=0;<br /><br />&#125;<br /><br />void Salir&#40;&#41;<br />&#123;<br />    SDL_FreeSurface&#40;pantalla&#41;;<br />    SDL_FreeSurface&#40;menu&#41;;<br />    SDL_FreeSurface&#40;flecha&#41;;<br />    SDL_FreeSurface&#40;personaje&#41;;<br />    exit&#40;1&#41;;<br />&#125;<br /><br />void Juego&#40;&#41;<br />&#123;<br />    while &#40;done==0&#41;<br />    &#123;<br />        Mover&#40;&#41;;<br />        Imprimir&#40;&#41;;<br />        SDL_Delay&#40;10&#41;;<br />    &#125;<br />&#125;<br /><br />void Mover&#40;&#41;<br />&#123;<br />    SDL_PumpEvents&#40;&#41;;<br />    tecla=SDL_GetKeyState&#40;NULL&#41;;<br />    if &#40;tecla&#91;SDLK_UP&#93;&#41;<br />    &#123;<br />        PosPersonaje.y-=10;<br />    &#125;<br />    if &#40;tecla&#91;SDLK_DOWN&#93; &amp;&amp; PosPersonaje.y&lt;350-34&#41;<br />    &#123;<br />        PosPersonaje.y+=10;<br />    &#125;<br />    if &#40;tecla&#91;SDLK_RIGHT&#93;&amp;&amp; PosPersonaje.x&lt;350-34&#41;<br />    &#123;<br />        PosPersonaje.x+=10;<br />    &#125;<br />    if &#40;tecla&#91;SDLK_LEFT&#93;&#41;<br />    &#123;<br />        PosPersonaje.x-=10;<br />    &#125;<br />    if &#40;tecla&#91;SDLK_ESCAPE&#93;==1&#41;<br />    &#123;<br />        presionado=1;<br />        done=1;<br />    &#125;<br />&#125;<br /><br />void Imprimir&#40;&#41;<br />&#123;<br />    SDL_FillRect&#40;pantalla,NULL,0&#41;;<br />    SDL_BlitSurface&#40;personaje,NULL,pantalla,&amp;PosPersonaje&#41;;<br />    SDL_Flip&#40;pantalla&#41;;<br />&#125;<br /></code></dd></dl><br /><br />Si movéis el personaje hacia abajo, se siguen camptando los eventos del menú, y por lo tanto aparecerá seleccionada otra opción. En mi caso no es &quot;peligroso&quot; para el juego, pero estaría bien saber como solucionar esto para otra ocasión.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2204">RafaG</a> — Jue Jul 22, 2010 12:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-21T22:53:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3450#p3450</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3450#p3450"/>
<title type="html"><![CDATA[Dejar de captar eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3450#p3450"><![CDATA[
buenas rafa:<br /><br />no se como lo tendras organizado, pero si lo tienes mediante clases tipo Screen (algo típico), con tus funciones de Actualizar, Inicializar, Salir, etc para cada tipo de pantalla, lo que puedes hacer al salir de cada menu es vaciar la cola de eventos con el SDL_GetEvent()<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Jul 21, 2010 10:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[RafaG]]></name></author>
<updated>2010-07-21T13:43:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3444#p3444</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3444#p3444"/>
<title type="html"><![CDATA[Dejar de captar eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=746&amp;p=3444#p3444"><![CDATA[
Hola, estoy haciendo un juego en C++ con SDL y tengo un problema con los eventos.<br /><br />En mi juego hay un menú, y para capturar los eventos en el menú uso SDL_WaitEvent(). Una vez puesto lo que es el juego, con la opción &quot;Jugar&quot; del menú que he mencionado, el personaje se puede desplazar por la pantalla, para esto obtengo el estado directamente del teclado (tecla[SDLK_x]).<br /><br />El problema es que cuando estoy en el juego (en el menú no, en la parte donde el jugador se desplaza) se siguen captando las presiones de tecla del menú. Por lo tanto, si el usuario aprieta la flecha hacia arriba durante el juego (para mover al personaje), cuando regrese al menú automáticamente se apretará la tecla.<br /><br />He probado cambiando SDL_WaitEvent() por SDL_PollEvent(), no conseguí nada, y también probé a acceder directamente al estado del teclado, pero me daba problemas al intentar salir de un bucle con <span style="font-weight: bold">break</span>.<br /><br />En el manual que leí de SDL, SDL_PollEvent() guardaba los eventos en una lista, pero no sabía que SDL_WaitEvent() tambien lo hiciese...<br /><br />¿Cómo lo soluciono?<br />Gracias, espero haberme explicado bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2204">RafaG</a> — Mié Jul 21, 2010 1:43 pm</p><hr />
]]></content>
</entry>
</feed>