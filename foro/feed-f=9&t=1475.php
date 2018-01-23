<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1475" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-10T03:56:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1475</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-09-10T03:56:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=7070#p7070</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=7070#p7070"/>
<title type="html"><![CDATA[Re: Problema de &quot;velocidad con los frames&quot;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=7070#p7070"><![CDATA[
Kaiser, eres un genio!<br />Me acabas de resolver una duda que no sabia que tenia!!<br /><br />gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Sep 10, 2012 3:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Whiterat]]></name></author>
<updated>2012-05-26T15:14:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6781#p6781</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6781#p6781"/>
<title type="html"><![CDATA[Re: Problema de &quot;velocidad con los frames&quot;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6781#p6781"><![CDATA[
Muchas gracias por la aclaración Kaiser, estaba empezando a desesperar. Ahora el programa funciona perfectamente.<br />También dar las gracias por la celeridad y la amabilidad con la que habéis respondido. Espero poder mostrar algún proyecto pronto! Sin duda alguna con estas ayudas no va a ser dentro de mucho haha!<br /><br />Un saludo y gracias una vez mas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2614">Whiterat</a> — Sab May 26, 2012 3:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2012-05-26T08:39:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6779#p6779</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6779#p6779"/>
<title type="html"><![CDATA[Re: Problema de &quot;velocidad con los frames&quot;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6779#p6779"><![CDATA[
Tu &quot;problema&quot; se conoce como rebote de teclado y no es que hayas hecho algo mal en el código sino que es una característica heredada del sistema operativo. Si abres un bloc de notas y pulsas la tecla &quot;a&quot; verás como aparece una a, luego se produce una pequeña pausa y finalmente comienzan a escribirse muchas a's muy rápido. Todo esto puede configurarse desde las opciones de teclado del sistema, por lo que no es que sea un error, es una característica incluida a propósito por los desarrolladores para facilitarnos la vida a la hora de escribir texto, pero como ves puede ser un poco molesto a la hora de jugar. Este comportamiento se aplica a todas las teclas incluidas las flechas de dirección, el espacio, el intro, el tabulador, etc.<br /><br />Para evitar el rebote de teclado en tu juego debes crear cuatro flags (booleanos) llamados, por ejemplo, &quot;arriba&quot;, &quot;abajo&quot;, &quot;derecha&quot; e &quot;izquierda&quot;. En tu código cuando detectes que has pulsado una tecla debes poner el flag correspondiente a True, y cuando detectes que la has soltado lo pones a False. A continuación mueves el personaje en función del estado de los flags y no de las teclas que estén pulsadas.<br /><br />Bienvenido a la comunidad y espero seguir viéndote por aquí, a ver que juegos chulos nos traes dentro un tiempo xD.<br /><br />Un saludo y espero haberte ayudado!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Sab May 26, 2012 8:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Whiterat]]></name></author>
<updated>2012-05-26T00:39:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6778#p6778</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6778#p6778"/>
<title type="html"><![CDATA[Problema de &quot;velocidad con los frames&quot;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1475&amp;p=6778#p6778"><![CDATA[
Hola,<br />soy nuevo en esto de programar y lo he empezado mas que nada como hobby. Tras mucho pelear con tutoriales y foros (este entre otros) he conseguido hacer un mapa con una imagen que se va moviendo por el (sin cámara, sin sprites, sin nada) pero al mover la imagen a través del mapa noto que va un poco a tirones. No se si eso es por el sistema de coordenadas que uso, si por que el codigo es demasiado largo o simplemente que son imaginaciones mías. Por eso recurro a vosotros.l<br /><br />El programa esta pensado para que a cada vuelta del loop se calculen las nuevas coordenadas de la imagen, se redibujen todos los tiles y se muestre todo por pantalla.<br /><br />No se si es necesario decirlo pero utilizo el lenguaje C con  la libreria SDL para Windows.<br /><br />Muchas gracias de antemano<br /><br />A continuación adjunto el código:<br /><pre class="prettyprint">#include &lt;iostream&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_image.h&gt;<br /><br />const int ALTO_PANT = 630;<br />const int ANCHO_PANT = 630;<br />const int BPP_PANT = 24;<br />const int VELOCIDAD = 10;<br /><br /><br /><br />typedef class personaje<br />{<br />        public:<br />               int x;<br />               int y;<br />               SDL_Surface *ima;<br />}Personaje;<br /><br />SDL_Surface * iniciar_sdl &#40;const char *nombreventana&#41;;<br />void iniciar_personaje &#40;Personaje *personaje&#41;;<br />void imprimir_personaje &#40;Personaje *personaje, SDL_Surface * screen&#41;;<br />void cargar_imagenes&#40;Personaje *personaje&#41;;<br />void mover_personaje&#40;Personaje *personaje&#41;;<br />void imprimir_imagen&#40;SDL_Surface *screen,SDL_Surface *personaje,int x,int y&#41;;<br />void dibujar_mapa&#40;SDL_Surface* screen&#41;;<br /><br /><br />int main &#40;int argc, char *argv[]&#41;<br />{<br />    SDL_Surface * screen;<br />    SDL_Event event;<br />    Personaje personaje;<br />    int done=0;<br />    int salir=0;<br />    int repeticiones;<br />    int i;<br />    <br />    screen=iniciar_sdl&#40;&quot;Programa pito&quot;&#41;;<br />    <br />    <br />    cargar_imagenes&#40;&amp;personaje&#41;;<br />    iniciar_personaje &#40;&amp;personaje&#41;;<br />    imprimir_personaje &#40;&amp;personaje, screen&#41;;<br />    dibujar_mapa&#40;screen&#41;;<br />    SDL_Flip&#40;screen&#41;;<br /><br />    <br />    while&#40;!done&#41;<br />    {<br />        mover_personaje&#40;&amp;personaje&#41;;<br />        dibujar_mapa&#40;screen&#41;;<br />        imprimir_personaje &#40;&amp;personaje, screen&#41;;<br />        SDL_Flip&#40;screen&#41;;<br />       while &#40;SDL_PollEvent &#40;&amp; event&#41;&#41;<br />{<br />if &#40;event.type == SDL_QUIT&#41;<br />salir = 1;<br /><br />if &#40;event.type == SDL_KEYDOWN&#41;<br />{<br />if &#40;event.key.keysym.sym == SDLK_ESCAPE&#41;<br />salir = 1;<br />}<br /><br /><br />}<br />    }<br />    <br />    SDL_FreeSurface&#40;screen&#41;;<br />    SDL_FreeSurface&#40;personaje.ima&#41;;<br />    SDL_Quit&#40;&#41;;<br />    return 0;<br />}<br /><br />SDL_Surface * iniciar_sdl &#40;const char *nombreventana&#41;<br />{<br />            SDL_Surface * screen;<br />            <br />            if &#40;SDL_Init&#40;SDL_INIT_VIDEO&#41;&lt;0&#41;<br />            std::cout &lt;&lt; &quot;Error: &quot; &lt;&lt; SDL_GetError&#40;&#41;;<br />            <br />            screen = SDL_SetVideoMode &#40;ALTO_PANT,ANCHO_PANT,BPP_PANT,SDL_HWSURFACE&#41;;<br />            if &#40;screen==NULL&#41;<br />            std::cout &lt;&lt; &quot;Error: &quot; &lt;&lt; SDL_GetError&#40;&#41;;<br />            <br />           SDL_WM_SetCaption &#40;nombreventana, NULL&#41;;<br />            SDL_ShowCursor &#40;SDL_DISABLE&#41;;<br />            <br />            return screen; <br />}<br /><br />void iniciar_personaje &#40;Personaje * personaje&#41;<br />{<br />     personaje-&gt;x = 250;<br />     personaje-&gt;y = 250; <br />}<br /><br />void cargar_imagenes&#40;Personaje *personaje&#41;<br />{<br />    personaje-&gt;ima=IMG_Load&#40;&quot;c:/personaje.png&quot;&#41;;<br />    if &#40;personaje-&gt;ima == NULL&#41;<br />    std::cout &lt;&lt;&quot;Error: &quot; &lt;&lt; SDL_GetError&#40;&#41;;    <br />}<br /><br />void mover_personaje&#40;Personaje *personaje&#41;<br />{<br />     SDL_Event event;   <br />    <br />     Uint8 *key = SDL_GetKeyState&#40;NULL&#41;;<br />     if &#40;key[SDLK_UP]&#41;{personaje-&gt;y-=VELOCIDAD;}<br />     if &#40;key[SDLK_DOWN]&#41;{personaje-&gt;y+=VELOCIDAD;}<br />     if &#40;key[SDLK_LEFT]&#41;{personaje-&gt;x-=VELOCIDAD;}<br />     if &#40;key[SDLK_RIGHT]&#41;{personaje-&gt;x+=VELOCIDAD;}<br />         <br />}<br /><br />void imprimir_personaje&#40;Personaje *personaje, SDL_Surface *screen&#41;<br />{<br />     int x = personaje-&gt;x;<br />     int y = personaje -&gt;y;<br />     imprimir_imagen &#40;screen,personaje-&gt;ima,x,y&#41;;<br />}<br /><br />void imprimir_imagen&#40;SDL_Surface *screen,SDL_Surface *personaje,int x,int y&#41;<br />{<br />     SDL_Rect rDest;<br />     rDest.x=x;<br />     rDest.y=y;<br />     SDL_BlitSurface &#40;personaje,NULL,screen,&amp;rDest&#41;;<br />}<br /><br />void dibujar_mapa&#40;SDL_Surface* screen&#41;<br />{<br />    SDL_Rect rectOrigen = {704,32,63,63};<br />    SDL_Rect rectDestino = {0,0,63,63};<br />    int m,n;<br />   <br />    SDL_Surface *tile=IMG_Load&#40;&quot;C:/Tile.png&quot;&#41;;<br />    for &#40;m=0;m&lt;10;m++&#41;<br />    {<br />        for &#40;n=0;n&lt;10;n++&#41;<br />        {<br />            rectDestino.x=m*63;<br />            rectDestino.y=n*63;<br />            SDL_BlitSurface&#40;tile,&amp;rectOrigen,screen,&amp;rectDestino&#41;;<br />        }<br />    }<br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2614">Whiterat</a> — Sab May 26, 2012 12:39 am</p><hr />
]]></content>
</entry>
</feed>