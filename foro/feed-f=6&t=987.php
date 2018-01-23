<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=987" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-21T05:04:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=987</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-01-21T05:04:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4814#p4814</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4814#p4814"/>
<title type="html"><![CDATA[Re: Mantener tecla pulsada en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4814#p4814"><![CDATA[
También puedes configurar SDL para que repita los eventos de teclas cuando se mantienen pulsadas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>// Permite repetir teclas<br />SDL_EnableKeyRepeat( SDL_DEFAULT_REPEAT_DELAY, SDL_DEFAULT_REPEAT_INTERVAL );<br /></code></dd></dl><br />Esto lo haces antes del ciclo principal de tu juego. El primer parámetro indica cuánto tiempo esperar a partir de la primera vez que se presiona la tecla para empezar la repetición de eventos, el segundo indica cada cuánto tiempo emitir nuevamente los eventos. El tiempo se indica en milisegundos, los valores por defecto (los que usé en el ejemplo) son 500 y 30, respectivamente.<br /><br />Otra forma, es que no lo manejes por eventos, sino que obtengas el estado de todo el teclado y revises si cada tecla está siendo pulsada o no:<br /><dl class="codebox"><dt>Code: </dt><dd><code>Uint8* keystate = SDL_GetKeyState( NULL );<br />if ( keystate&#91; SDLK_RETURN &#93; ) ejecutar_codigo();<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Ene 21, 2011 5:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2010-12-29T11:22:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4654#p4654</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4654#p4654"/>
<title type="html"><![CDATA[Re: Mantener tecla pulsada en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4654#p4654"><![CDATA[
Hola, lo que sucede es que cuando se presiona una tecla (o se libera) se produce un evento en SDL keydown (o keyup) pero solo cuando la tecla es presionada o liberada.<br /><br />Si la tecla es presionada (un evento es generado) y luego se la retiene presionada, no habra nuevos eventos.<br /><br />La solucion mas simple seria escribir algo asi (en pseudo codigo)<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>//Los eventos NO controlan la posicion, sino que controlan la velocidad<br />velocidad = 0;<br /><br />while(ejecuta)<br />    {<br />     ...<br />    if (evento.type == SDL_KEYDOWN)<br />        {<br />         if(evento.key.keysym.sym == SDLK_UP and velocidad == 0)<br />              {<br />               //Se presiono la tecla correcta y dado que la velocidad era 0<br />               //se interpreta que el jugador quiere comenzarse a mover<br />                velocidad = 5; <br />              }<br />         }<br />    else if(evento.type == SDL_KEYUP)<br />        {<br />         if(evento.key.keysym.sym == SDLK_UP and velocidad != 0)<br />             {<br />               //Se libero la tecla y dado se estaba moviendo (velocidad != 0)<br />               //se interpreta que el jugador quiere dejarse de mover<br />                 velocidad = 0<br />             }<br />        }<br /><br />      ....<br />     //Este pseudo codigo indica como se actualiza la nueva posicion<br />     //Si el jugador nunca presiono la tecla keyup, velocidad sera igual a 0<br />     //y el jugador no se movera<br />      posicionNueva = posicionActual + velocidad;<br />}<br />     <br /></code></dd></dl><br /><br />Por supuesto esto puede hacerse mas elaborado como por ejemplo hacer que la tecla Up aumente la velocidad (de 0 pasa a 5), mientras que la tecla Down la reduzca (de 0 a -5).<br />Pero eso dependera del juego que estes haciendo.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mié Dic 29, 2010 11:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-29T03:45:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4652#p4652</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4652#p4652"/>
<title type="html"><![CDATA[Re: Mantener tecla pulsada en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4652#p4652"><![CDATA[
ha ok, no recuerdo ahora muy bien si al poner event.type == SDL_KEYDOWN solo se testea cuando se presiona, pero estoy casi seguro, por que he checado un programa que tengo, y cuando se que tengo que hacer una animación cuando la tecla esta apretada por tiempo indefinido no uso la técnica del polling, testeo directamente el estado del teclado en ese momento.<br />eso lo logras con la función:<br /><br />key=SDL_GetKeyState(NULL);<br /><br />donde key es un vector de esta forma:<br /><br /> Uint8 *key;<br /><br />solo contiene ceros y unos, si quieres checar una tecla pones if (k(SDLK_UP)){...}<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Dic 29, 2010 3:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2010-12-29T03:01:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4651#p4651</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4651#p4651"/>
<title type="html"><![CDATA[Re: Mantener tecla pulsada en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4651#p4651"><![CDATA[
Vos sabes que sigue funcionando de la misma manera, o sea si mantengo la tecla apretada ejecuta una sola vez<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Mié Dic 29, 2010 3:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-29T02:17:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4650#p4650</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4650#p4650"/>
<title type="html"><![CDATA[Re: Mantener tecla pulsada en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4650#p4650"><![CDATA[
No veo el por que dibujas cuando al tecla se suelta, que es lo que quisiste hacer, por eso no funciona y no lo hará de esa forma.<br />la parte del código que se encarga de dibujar nunca debe estar dentro de las condiciones de los eventos, pues solo estas limitando dibujar cuando se produce uno, y en general en un juego se siguen corriendo las animaciones se produzcan o no eventos. <br />Yo lo pondría así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>while(ejecuta)<br />    {<br />        miPersonaje.dibujarImagen(pantalla);<br />        while(SDL_PollEvent(&amp;evento))<br />        {<br />             if(evento.type == SDL_QUIT)<br />             {<br />                 ejecuta = false;<br />             }<br />          <br />             if (evento.type == SDL_KEYDOWN)<br />             {<br />                    if(evento.key.keysym.sym == SDLK_UP)<br />                    {<br />                         val = val+5;<br />                         rectangulo.x = miPersonaje.getX();<br />                         rectangulo.y = miPersonaje.getY();<br />                          rectangulo.h = miPersonaje.getAltura();<br />                          rectangulo.w = miPersonaje.getAncho();<br />                          SDL_FillRect(pantalla,&amp;rectangulo,SDL_MapRGB(pantalla-&gt;format,0,0,0));<br />                          miPersonaje.setY(miPersonaje.getY()+val);<br />                         miPersonaje.dibujarImagen(pantalla);<br />                    }<br />            }<br />            <br />                    <br /><br />                    <br />                <br />            }<br />            SDL_Flip(pantalla);   <br />       }<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Dic 29, 2010 2:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2010-12-29T01:58:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4649#p4649</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4649#p4649"/>
<title type="html"><![CDATA[Mantener tecla pulsada en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=987&amp;p=4649#p4649"><![CDATA[
Estoy retomando todo este tema del SDL, y siento que se me olvidaron algunas cosas, y una de ellas es esta. Mi problema es que estoy volviendo a hacer un juego de Pong (ya habia hecho un thread sobre una version anterior), y tengo problemas cuando mantengo apretada la tecla, es decir, si apreto la tecla el frame se mueve, pero si mantengo la tecla apretada no se mueve, como puedo hacer para solucionarlo?<br /><br />El codigo que tengo hasta el moment es este:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>    while(ejecuta)<br />    {<br />        miPersonaje.dibujarImagen(pantalla);<br />        while(SDL_PollEvent(&amp;evento))<br />        {<br />        if(evento.type == SDL_QUIT)<br />         {<br />          ejecuta = false;<br />         }<br />          else<br />          {<br />           if (evento.type == SDL_KEYDOWN)<br />           {<br />            if(evento.key.keysym.sym == SDLK_UP)<br />            {<br />                val = val+5;<br /><br />            }<br />           }<br />            if (evento.type == SDL_KEYUP)<br />           {<br />            if(evento.key.keysym.sym == SDLK_UP)<br />            {<br />                rectangulo.x = miPersonaje.getX();<br />                rectangulo.y = miPersonaje.getY();<br />                rectangulo.h = miPersonaje.getAltura();<br />                rectangulo.w = miPersonaje.getAncho();<br />                SDL_FillRect(pantalla,&amp;rectangulo,SDL_MapRGB(pantalla-&gt;format,0,0,0));<br />                miPersonaje.setY(miPersonaje.getY()+val);<br />                miPersonaje.dibujarImagen(pantalla);<br /><br />                SDL_Flip(pantalla);           }<br />            }<br />         }<br />       }<br />    }<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Mié Dic 29, 2010 1:58 am</p><hr />
]]></content>
</entry>
</feed>