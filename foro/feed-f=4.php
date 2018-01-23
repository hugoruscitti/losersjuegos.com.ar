<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-08-23T05:26:31+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4</id>
<entry>
<author><name><![CDATA[Ricx-Dark]]></name></author>
<updated>2013-08-23T05:26:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9272#p9272</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9272#p9272"/>
<title type="html"><![CDATA[Videojuegos • Re: Rendimiento con SDL baja ¿Que pasa? o ¿Que puedo hacer?]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9272#p9272"><![CDATA[
Hola!, Bueno ya pude arreglar el error,<br />y estaba en BPP que yo colocaba 24<br />y tenia que colocarlo en 32 ya que las<br />y imágenes eran *.png, ademas, tuve que<br />colocar SDL_DisplayFormatAlpha()----&gt;gracias a carleto.<br /> (Yo utilizaba SDL_DisplayFormat la cual no copiaba la transparencia)<br />XD Muchas gracias a todos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3129">Ricx-Dark</a> — Vie Ago 23, 2013 5:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2013-08-19T17:41:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9271#p9271</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9271#p9271"/>
<title type="html"><![CDATA[Videojuegos • Re: Rendimiento con SDL baja ¿Que pasa? o ¿Que puedo hacer?]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9271#p9271"><![CDATA[
Hola<br /><br />Puede ser que el problema lo tengas al cargar las imágenes, hace mucho que no uso SDL, pero revisando código que tengo por ahí y la documentación, diría que tienes que usar la función SDL_DisplayFormat después de cargar cada imagen para convertir la imagen al formato de pantalla. Si no lo haces, esa conversión se hace cada vez que la dibujas.<br /><br />Un trozo de código que encontré de un juego que hice hace mucho:<br /><pre class="prettyprint">//  Carga una imagen de un archivo y la retorna<br />//  Recibe la ruta del archivo a cargar<br />SDL_Surface *CargarImagen&#40;char *ruta&#41;<br />{<br />SDL_Surface *img_tmp, *img;<br /><br />img_tmp = IMG_Load&#40;ruta&#41;;<br /><br />img = SDL_DisplayFormatAlpha&#40;img_tmp&#41;;<br />SDL_FreeSurface&#40;img_tmp&#41;;<br />return img;<br />}</pre><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Lun Ago 19, 2013 5:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ricx-Dark]]></name></author>
<updated>2013-08-19T00:06:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9270#p9270</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9270#p9270"/>
<title type="html"><![CDATA[Videojuegos • Re: Rendimiento con SDL baja ¿Que pasa? o ¿Que puedo hacer?]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9270#p9270"><![CDATA[
Hola  shackra,<br />sobre lo que me dijiste ya lo he intentado.<br />por ejemplo lo que es el fondo y el piso lo muestro antes del <br />while y luego las otras imágenes. ok bien corre bien, pero, hay<br />un problema y es que en el caso del personaje que es una imagen que se<br />mueve mancha(por decirlo asi) las imágenes de atras (en este caso el fondo y el piso)<br />ya que estas imágenes no se actualizaron con las demás<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3129">Ricx-Dark</a> — Lun Ago 19, 2013 12:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-08-18T20:38:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9269#p9269</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9269#p9269"/>
<title type="html"><![CDATA[Videojuegos • Re: Rendimiento con SDL baja ¿Que pasa? o ¿Que puedo hacer?]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9269#p9269"><![CDATA[
el problema ésta acá:<br /><br /><blockquote><div><cite>Ricx-Dark escribió:</cite><br /><pre class="prettyprint">while&#40;Salir==false&#41;{<br />        SDL_BlitSurface&#40;Fondo, NULL, Ventana, NULL&#41;;<br />        SDL_BlitSurface&#40;Estrellas[Cont], NULL, Ventana, NULL&#41;;               //     Si no muestro<br />        SDL_BlitSurface&#40;Galaxia, NULL, Ventana, &amp;RectGalaxia&#41;;             //        algunas de<br />        SDL_BlitSurface&#40;PlanetaRojo, NULL, Ventana, &amp;RectPlanetaRojo&#41;;//     estas imagenes<br />        SDL_BlitSurface&#40;LensFlare, NULL, Ventana, NULL&#41;;                      //   dejando solamente<br />        SDL_BlitSurface&#40;PlanetaAzul, NULL, Ventana, &amp;RectPlanetaAzul&#41;;//    a Fondo y Jugador<br />        SDL_BlitSurface&#40;Plano2Alfa, NULL, Ventana, NULL&#41;;                    //   el juego corre bien<br />        SDL_BlitSurface&#40;Scene, &amp;RectScene[0], Ventana, NULL&#41;;<br />        SDL_BlitSurface&#40;Scene, &amp;RectScene[1], Ventana, &amp;RectScene[2]&#41;;<br />        SDL_BlitSurface&#40;Jugador, NULL, Ventana, &amp;RectJugador&#41;;<br />//···</pre><br /></div></blockquote><br /><br />Aunque aun estoy leyendo <span style="font-style: italic">Pensar en C++</span> de Bruce Eckel, se nota que ahí estas dibujando en la pantalla el 100% de las imágenes de forma innecesaria <span style="font-weight: bold">por cada frame</span>, y la operación de pintado de sprites e imágenes en la pantalla es algo costosa en cuanto a rendimiento, según se por mi experiencia ¿Te imaginas el gasto en rendimiento si tratas de dibujar 60 veces por segundo una imagen?<br /><br />Lo que necesitas es implementar la técnica de <a href="http://stackoverflow.com/a/78085" class="postlink">rectangulos sucios</a>, que pinta única y exclusivamente las áreas de una imagen que fueron ensuciadas por otra (digamos, el piso debe ser redibujado en ciertas áreas porque el héroe de tu juego pasó por ahí), la cosa es, que no estoy seguro si SDL tiene implementada la técnica y te puede dar la API para que hagas tu respectiva labor, porque yo no uso SDL, claro. Tendrás que investigar un poco en Internet, quizás las siguientes palabras claves en un buscador te lleven a alguna parte: <span style="font-style: italic">sdl dirty rectangles</span><br /><br />Por otra parte, aunque no esta mal del todo, estas mezclando C con C++, SDL fue pensado, creo yo, para programación procedural (un ejemplo de esto es la sentencia <span style="font-style: italic">SDL_Flip(Ventana);</span> en tu código fuente), no sé si esto ha cambiado en <a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=6&amp;t=3029" class="postlink">SDL 2</a>, pero seria más practico y bonito que SDL fuera orientado a objetos (para tener sentencias en forma de <span style="font-style: italic">Ventana.SDL_Flip();</span>)... en fin.<br /><br />Solamente trata de no dibujar el 100% de todas las imágenes en cada <span style="font-style: italic">frame</span> de tu juego, y deberías experimentar una mejora en el rendimiento <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Ago 18, 2013 8:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ricx-Dark]]></name></author>
<updated>2013-08-07T18:32:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9265#p9265</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9265#p9265"/>
<title type="html"><![CDATA[Videojuegos • (Solucion) Rendimiento con SDL ¿Que pasa? o Que puedo hacer?]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3028&amp;p=9265#p9265"><![CDATA[
Hola!<br />soy nuevo en esta pagina y estoy aqui para ver si me pueden ayudar<br />con un problema que tengo con SDL <br />he estado un tiempo programando con SDL y mayormente haciendo<br />pruebas, mayormente con pocas imágenes, ahora que estoy haciendo<br />un nivel estoy colocando mas imágenes y se ve como  si tuviera lag<br />y las imagenes no pesan mucho, entre todas las imagenes pesan unos<br />4mb <br />aqui coloco mi codigo aver si me ayudan Porfa! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><pre class="prettyprint">#include &lt;iostream&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_image.h&gt;<br /><br />using namespace std;<br /><br />#define Ancho 1280<br />#define Alto 768<br />#define BPP 24<br /><br />SDL_Surface *Ventana, *Fondo, *Galaxia, *PlanetaRojo, *LensFlare, *PlanetaAzul, *Plano2Alfa, *Scene, *Jugador;<br />SDL_Surface *Estrellas[6];<br />SDL_Rect RectGalaxia, RectPlanetaRojo, RectPlanetaAzul, RectJugador;<br />SDL_Rect RectScene[3];<br />SDL_Event Event;<br />Uint8 *Teclado;<br /><br />int main&#40;&#41;{<br />    bool Salir=false;<br />    int Cont=0, i=0;<br /><br />    atexit&#40;SDL_Quit&#41;;<br /><br />    if&#40;SDL_Init&#40;SDL_INIT_VIDEO&#41;&lt;0&#41;{<br />        cout&lt;&lt;&quot;Error al iniciar SDL. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;;<br />        exit&#40;1&#41;;<br />    }<br /><br />    SDL_WM_SetCaption&#40;&quot;PruebaNivelPiloto v1&quot;,NULL&#41;;<br /><br />    Ventana=SDL_SetVideoMode&#40;Ancho, Alto, BPP, SDL_HWSURFACE | SDL_DOUBLEBUF&#41;;<br />    if&#40;Ventana==NULL&#41;{<br />        cout&lt;&lt;&quot;No se pudo iniciar el modo de video. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;;<br />        exit&#40;1&#41;;<br />    }<br /><br />    Fondo=IMG_Load&#40;&quot;MundoPiloto/Fondo0.png&quot;&#41;;<br />    if&#40;Fondo==NULL&#41;{<br />        cout&lt;&lt;&quot;No se ha podido cargar la imagen &#39;Fondo0.png&#39;.Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;;<br />        exit&#40;1&#41;;<br />    }<br /><br />    Estrellas[0]=IMG_Load&#40;&quot;MundoPiloto/StarsA1.png&quot;&#41;;<br />    Estrellas[1]=IMG_Load&#40;&quot;MundoPiloto/StarsA2.png&quot;&#41;;<br />    Estrellas[2]=IMG_Load&#40;&quot;MundoPiloto/StarsA3.png&quot;&#41;;<br />    Estrellas[3]=IMG_Load&#40;&quot;MundoPiloto/StarsB1.png&quot;&#41;;<br />    Estrellas[4]=IMG_Load&#40;&quot;MundoPiloto/StarsB2.png&quot;&#41;;<br />    Estrellas[5]=IMG_Load&#40;&quot;MundoPiloto/StarsB3.png&quot;&#41;;<br />    for&#40;int i=0;i&lt;=5;i++&#41;{<br />        if&#40;Estrellas[i]==NULL&#41;{<br />            cout&lt;&lt;&quot;No se ha podido cargar alguna imagen de las estrellas.Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;;<br />            exit&#40;1&#41;;<br />        }<br />    }<br /><br />    Galaxia=IMG_Load&#40;&quot;MundoPiloto/Galaxia.png&quot;&#41;;<br />    if&#40;Galaxia==NULL&#41;{<br />        cout&lt;&lt;&quot;No se ha podico cargar la imagen &#39;Galaxia.png&#39;. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;;<br />        exit&#40;1&#41;;<br />    }<br /><br />    PlanetaRojo=IMG_Load&#40;&quot;MundoPiloto/PlanetaRojo.png&quot;&#41;;<br />    if&#40;PlanetaRojo==NULL&#41;{<br />        cout&lt;&lt;&quot;No se ha podido cargar &#39;PlanetaRojo.png&#39;. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;&lt;&lt;endl;<br />        exit&#40;1&#41;;<br />    }<br /><br />    LensFlare=IMG_Load&#40;&quot;MundoPiloto/LensFlare.png&quot;&#41;;<br />    if&#40;LensFlare==NULL&#41;{<br />        cout&lt;&lt;&quot;No se ha podido cargar la imagen &#39;LensFlare.png&#39;. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;&lt;&lt;endl;<br />        exit&#40;1&#41;;<br />    }<br /><br />    PlanetaAzul=IMG_Load&#40;&quot;MundoPiloto/PlanetaAzul.png&quot;&#41;;<br />    if&#40;PlanetaAzul==NULL&#41;{<br />        cout&lt;&lt;&quot;No se ha podido cargar la imagen &#39;PlanetaAzul.png&#39;. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;&lt;&lt;endl;<br />        exit&#40;1&#41;;<br />    }<br /><br />    Plano2Alfa=IMG_Load&#40;&quot;MundoPiloto/Plano2Alfa.png&quot;&#41;;<br />    if&#40;Plano2Alfa==NULL&#41;{<br />        cout&lt;&lt;&quot;No se ha podido cargar la imagen &#39;Plano2Alfa.png&#39;. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;&lt;&lt;endl;<br />        exit&#40;1&#41;;<br />    }<br /><br />    Scene=IMG_Load&#40;&quot;MundoPiloto/Scene.png&quot;&#41;;<br />    if&#40;Scene==NULL&#41;{<br />        cout&lt;&lt;&quot;No se ha podido cargar &#39;Scene.png&#39;. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;&lt;&lt;endl;<br />        exit&#40;1&#41;;<br />    }<br /><br />    Jugador=IMG_Load&#40;&quot;MundoPiloto/Jugador.png&quot;&#41;;<br />    if&#40;Jugador==NULL&#41;{<br />        cout&lt;&lt;&quot;No se ha podido cargar la imagen &#39;Jugador.png&#39;. Error: &quot;&lt;&lt;SDL_GetError&#40;&#41;&lt;&lt;endl;<br />        exit&#40;1&#41;;<br />    }<br /><br />    RectGalaxia.x=194;<br />    RectGalaxia.y=45;<br />    RectPlanetaRojo.x=12;<br />    RectPlanetaRojo.y=43;<br />    RectPlanetaAzul.x=818;<br />    RectPlanetaAzul.y=214;<br />    RectScene[0].x=0;<br />    RectScene[0].y=0;<br />    RectScene[0].w=Ancho;<br />    RectScene[0].h=Alto;<br />    RectScene[1].x=0;<br />    RectScene[1].y=0;<br />    RectScene[1].w=0;<br />    RectScene[1].h=Alto;<br />    RectScene[2].x=Ancho;<br />    RectScene[2].y=0;<br />    RectScene[2].h=Alto;<br />    RectScene[2].w=Ancho;<br />    RectJugador.x=20;<br />    RectJugador.y=120;//120<br /><br />    while&#40;Salir==false&#41;{<br />        SDL_BlitSurface&#40;Fondo, NULL, Ventana, NULL&#41;;<br />        SDL_BlitSurface&#40;Estrellas[Cont], NULL, Ventana, NULL&#41;;               //     Si no muestro<br />        SDL_BlitSurface&#40;Galaxia, NULL, Ventana, &amp;RectGalaxia&#41;;             //        algunas de<br />        SDL_BlitSurface&#40;PlanetaRojo, NULL, Ventana, &amp;RectPlanetaRojo&#41;;//     estas imagenes<br />        SDL_BlitSurface&#40;LensFlare, NULL, Ventana, NULL&#41;;                      //   dejando solamente<br />        SDL_BlitSurface&#40;PlanetaAzul, NULL, Ventana, &amp;RectPlanetaAzul&#41;;//    a Fondo y Jugador<br />        SDL_BlitSurface&#40;Plano2Alfa, NULL, Ventana, NULL&#41;;                    //   el juego corre bien<br />        SDL_BlitSurface&#40;Scene, &amp;RectScene[0], Ventana, NULL&#41;;<br />        SDL_BlitSurface&#40;Scene, &amp;RectScene[1], Ventana, &amp;RectScene[2]&#41;;<br />        SDL_BlitSurface&#40;Jugador, NULL, Ventana, &amp;RectJugador&#41;;<br /><br />        i++;<br />        if&#40;i==2&#41;{<br />            if&#40;Cont&lt;5&#41; Cont++;<br />            else Cont=0;<br />            i=0;<br />        }<br /><br />        SDL_Flip&#40;Ventana&#41;;<br /><br />        Teclado=SDL_GetKeyState&#40;NULL&#41;;<br />        if&#40;Teclado[SDLK_RIGHT] &amp;&amp; &#40;RectJugador.x+Jugador-&gt;w&#41;&lt;=Ancho&#41;{<br />            RectJugador.x+=10;<br />            RectScene[0].x+=10;<br />            RectScene[0].w-=10;<br />            RectScene[1].w=RectScene[0].x;<br />            RectScene[2].x-=10;<br /><br />            if&#40;RectScene[0].x&gt;=Ancho&#41;{<br />                RectScene[0].x=0;<br />                RectScene[0].y=0;<br />                RectScene[0].w=Ancho;<br />                RectScene[0].h=Alto;<br />                RectScene[1].x=0;<br />                RectScene[1].y=0;<br />                RectScene[1].w=0;<br />                RectScene[1].h=Alto;<br />                RectScene[2].x=Ancho;<br />                RectScene[2].y=0;<br />                RectScene[2].h=Alto;<br />                RectScene[2].w=Ancho;<br />            }<br />        }<br />        if&#40;Teclado[SDLK_LEFT] &amp;&amp; RectJugador.x&gt;=0&#41; {<br />            RectJugador.x-=10;<br />            RectScene[0].x-=10;<br />            RectScene[0].w+=10;<br />            RectScene[1].w=RectScene[0].x;<br />            RectScene[2].x+=10;<br />        }<br />        if&#40;Teclado[SDLK_UP] &amp;&amp; &#40;RectJugador.y+Jugador-&gt;h&gt;=520&#41;&#41; RectJugador.y-=10;<br />        if&#40;Teclado[SDLK_DOWN] &amp;&amp; &#40;RectJugador.y+Jugador-&gt;h&lt;=Alto&#41;&#41; RectJugador.y+=10;<br /><br />        if&#40;RectScene[0].x+Scene-&gt;w&lt;=0&#41; RectScene[0].x=Ancho;<br />        if&#40;RectScene[1].x+Scene-&gt;w&lt;=0&#41; RectScene[1].x=Ancho;<br /><br />        while&#40;SDL_PollEvent&#40;&amp;Event&#41;&#41;{<br />            switch&#40;Event.type&#41;{<br />                case&#40;SDL_KEYDOWN&#41;:{<br />                    if&#40;Event.key.keysym.sym==SDLK_ESCAPE&#41; Salir=true;<br />                }<br />                break;<br /><br />                case&#40;SDL_KEYUP&#41;:{<br />                    if&#40;Event.key.keysym.sym==SDLK_RIGHT&#41; RectJugador.x-=10;<br />                    if&#40;Event.key.keysym.sym==SDLK_LEFT&#41; RectJugador.x+=10;<br />                }<br />                break;<br /><br />                case&#40;SDL_QUIT&#41;: Salir=true;<br />                break;<br />            }<br />        }<br />    }<br /><br />    SDL_FreeSurface&#40;Fondo&#41;;<br />    for&#40;int i=0;i&lt;5;i++&#41;{<br />        SDL_FreeSurface&#40;Estrellas[i]&#41;;<br />    }<br /><br />    return&#40;0&#41;;<br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3129">Ricx-Dark</a> — Mié Ago 07, 2013 6:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-04-15T03:37:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9207#p9207</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9207#p9207"/>
<title type="html"><![CDATA[Videojuegos • Re: recomendarme en mi futuro como programador]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9207#p9207"><![CDATA[
Consume menos recursos, por eso era utilizado incluso en juegos de SuperNES ya que no requería tanto como graficos 3D<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Abr 15, 2013 3:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2013-04-14T07:02:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9204#p9204</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9204#p9204"/>
<title type="html"><![CDATA[Videojuegos • Re: recomendarme en mi futuro como programador]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9204#p9204"><![CDATA[
Muchas gracias!!!! le echare un ojo haber si cuando me vaya a poner con el tema lo puedo entender bien <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />Una ultima pregunta...en tema de recursos de coste....sale mas a cuenta hacer este efecto de 2.5D o hacer este efecto directamente con graficos 3D?<br />Quiza sea muy tonta la pregunta pero es que no tengo ni idea..<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Dom Abr 14, 2013 7:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-04-14T06:07:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9203#p9203</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9203#p9203"/>
<title type="html"><![CDATA[Videojuegos • Re: recomendarme en mi futuro como programador]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9203#p9203"><![CDATA[
EL problema con eso es que la información la vas a encontrar en ingles mayormente.<br /><br />Aquí un buen lugar donde empezar: <a href="http://www.gameproducer.net/2011/09/18/illustrated-newbies-guide-to-isometric-game-development/" class="postlink">http://www.gameproducer.net/2011/09/18/illustrated-newbies-guide-to-isometric-game-development/</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Abr 14, 2013 6:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2013-04-13T22:15:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9202#p9202</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9202#p9202"/>
<title type="html"><![CDATA[Videojuegos • Re: recomendarme en mi futuro como programador]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9202#p9202"><![CDATA[
No 3D puro por ahora no me quiero meter..<br />Es exactamente lo que me decias un buen ejemplo era Diablo tambien! :p<br /><br />El problema es que nose como empezar para aprender a programar de esta manera de 2,5D o las otras maneras que has dicho.<br /><br />Conoces algun truco? o algun lugar que pueda encontrar informacion?<br /><br />Busque un poco por encima en google con los nombres que me indicaste algun tutorial pero no di con nada de uso :S<br /><br />edit:<br />Aunque con esta manera, tambien da la sensacion de profundidad? viendo objetos reducir su tamaño/angulo ?<br />Y las imagenes creadas?tendrian de ser 3d igualmente? o con sprites 2d se puede conseguir ese efecto tambien?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Sab Abr 13, 2013 10:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-04-13T19:36:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9201#p9201</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9201#p9201"/>
<title type="html"><![CDATA[Videojuegos • Re: recomendarme en mi futuro como programador]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9201#p9201"><![CDATA[
<blockquote><div><cite>vib escribió:</cite><br />La pregunta es, como de dificil me seria adaptarme a programar para 3d? aunque no es bien bien lo que me refiero, me explico.<br /><br />Hay juegos estilo warcraft o league of legends etc, que tiene un modo de juego 2D pero su diseño de graficos son en 3D<br /><br />Yo quiero aprender a hacer ese estilo de juegos, que tengan una modalidad 2D pero que los graficos pues tengan mas perfeccion y sean 3D.<br /><br />Yo la mayoria de cosas las estoy haciendo con vista desde arriba &quot;estilo juego tibia o age of empires&quot; como de dificultat me seria tranformar los graficos de los juegos que hecho a un 3D como he comentado? tendria de canviar muchos algoritmos? o solo carga de imagenes...fisicas?<br /></div></blockquote><br /><br />Es posible sin saber 3D, los sprites al final seria 2D, pero darían esa sensación, por ejemplo, el modo de juego de Diablo, se utiliza una técnica conocida como &quot;isometricos/vista isometrica&quot; o 2.5D.<br /><br />Si te interesa hacerlo 3D autentico, te recomiendo buscar un buen engine para ahorrarte trabajo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Abr 13, 2013 7:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2013-04-13T15:04:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9200#p9200</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9200#p9200"/>
<title type="html"><![CDATA[Videojuegos • Re: recomendarme en mi futuro como programador]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9200#p9200"><![CDATA[
Gracias por la respuesta...<br />Tenia una pequeña duda que llevo tiempo queriendo conocer una respuesta.<br /><br />Como he dicho mi programacion para juegos ha sido con c++-sdl pero todo son juegos 2D puros.<br /><br />La pregunta es, como de dificil me seria adaptarme a programar para 3d? aunque no es bien bien lo que me refiero, me explico.<br /><br />Hay juegos estilo warcraft o league of legends etc, que tiene un modo de juego 2D pero su diseño de graficos son en 3D<br /><br />Yo quiero aprender a hacer ese estilo de juegos, que tengan una modalidad 2D pero que los graficos pues tengan mas perfeccion y sean 3D.<br /><br />Yo la mayoria de cosas las estoy haciendo con vista desde arriba &quot;estilo juego tibia o age of empires&quot; como de dificultat me seria tranformar los graficos de los juegos que hecho a un 3D como he comentado? tendria de canviar muchos algoritmos? o solo carga de imagenes...fisicas?<br /><br />Luego hay algun libre que se centre mas a aprender este tipo de juegos que son asi mas convinados? porque mire openGL pero todo los ejemplos y tal, eran un 3D puro rollo counter o world of warcraft.<br /><br />Graciaas ;D<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Sab Abr 13, 2013 3:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-04-13T03:26:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9199#p9199</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9199#p9199"/>
<title type="html"><![CDATA[Videojuegos • Re: recomendarme en mi futuro como programador]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9199#p9199"><![CDATA[
<blockquote><div><cite>vib escribió:</cite><br />La cosa esque quiero empezar hacer cosas para que el publico las pueda valorar y bueno..nunca se sabe....<br />El problema que creo tener esque en c++ es un lenguaje para sacar juegos ya tochos...nO? hablo desde la ingorancia..<br /></div></blockquote><br /><br />Eso es verdad, pero si es para PC principalmente y de forma &quot;profesional&quot; (muchos estudios grandes lo usan), puedes ver como ejemplo el código el Quake engine, o el Ogre3D;<br /><br /><blockquote><div><cite>vib escribió:</cite><br />La verdad esque en c++ sdl tengo bastante conocimiento y me gustaria saber si este lenguaje o mis codigos, los podria adaptar facilmente ha hacer juegos pues para moviles..sin tener problemas con las diferentes modelos de moviles &quot;me refiero a tirar por android&quot;<br /></div></blockquote><br /><br />Android por naturaleza funciona con Java (conozco un proyecto para hacerlos con pygame, pero eso es más un traductor a java <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> ), mientras que si te decides por iOS, en ese caso se necesitas aprender objetive-c.<br /><br />La ventaja de Android es la cantidad de documentación, pero recuerda, que al ser un sistema muy diversificado no es razonable esperar que un juego funcione en el 100% de los teléfonos, pero si en un 80-99%  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Solo puedo desearte éxito y suerte <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Abr 13, 2013 3:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2013-04-12T17:10:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9196#p9196</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9196#p9196"/>
<title type="html"><![CDATA[Videojuegos • recomendarme en mi futuro como programador]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3013&amp;p=9196#p9196"><![CDATA[
Hola buenas!!! despues de acabar mi ultimo proyecto me vinieron en mente muchas dudas, os comento:<br /><br />Yo de lenguajes conozco c# y c++<br />Con respecto a juegos llevo varios años usando c++ con SDL.<br />Ahora recientemente acabe un pequeño motor 2d y un editor de mapas 2d usando c++ SDL.<br /><br />La cosa esque quiero empezar hacer cosas para que el publico las pueda valorar y bueno..nunca se sabe....<br />El problema que creo tener esque en c++ es un lenguaje para sacar juegos ya tochos...nO? hablo desde la ingorancia..<br /><br />La verdad esque en c++ sdl tengo bastante conocimiento y me gustaria saber si este lenguaje o mis codigos, los podria adaptar facilmente ha hacer juegos pues para moviles..sin tener problemas con las diferentes modelos de moviles &quot;me refiero a tirar por android&quot;<br /><br />Ya que hacer juegos para android son sencillos y creo que abarcaria mas publico..que hacer un juego en c++ con el mismo diseño pero que tengas de descargarlo y solo poder jugar desde el pc.. para eso preferia meterme hacer un juego para pc mucho mas tocho pero claro 1r quiero saber donde estoy.<br /><br />Esa es mi duda...<br />Me planteo pasarme a java y aprender android..pero..me da rabia que mi motorcito que he invertido muchas horas no le diera ningun tipo de uso...nunca he tocado java pero sabeis si me seria mucho problema o como podria hacerlo de manera rapida y sin demasiada complicacion para que mi motor fuera compatible en java=?<br /><br />Mi motor es simplemente clases y funciones que a la hora de programar me facilita en tema interno del juego asi solo pensando en la jugavilidad del juego...Habiendo hecho toda la parte de fisicas, impresion por capas etc etc<br /><br />Mil Gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Vie Abr 12, 2013 5:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2013-04-03T18:31:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1367&amp;p=9195#p9195</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1367&amp;p=9195#p9195"/>
<title type="html"><![CDATA[Videojuegos • Re: Les presento ayni !!!]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1367&amp;p=9195#p9195"><![CDATA[
Tenemos una nueva versión!!!<br /><br /> <a href="http://www.youtube.com/v/NR3fs-XHQbw"></param><param target="_blank"><strong>object</strong></a> <p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Abr 03, 2013 6:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2013-03-16T22:19:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3010&amp;p=9182#p9182</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3010&amp;p=9182#p9182"/>
<title type="html"><![CDATA[Videojuegos • Re: Mi proyecto personal.]]></title>

<category term="Videojuegos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=4" label="Videojuegos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3010&amp;p=9182#p9182"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br />En estos días he estado ocupado con un pequeño proyecto personal para poder dominar mejor SDL en c++, y poner a prueba unas utilidades que he creado.  El objetivo es crear un juego del genero bullet hell.<br /><br />He estado investigando, y creando patrones, entre otras cosas interesantes. Pero lo realmente laborioso es el hacer los niveles, por lo cual invente un pequeño formato XML para poder hacerlos.<br /><br />Pueden ver todo lo que he dicho en este vídeo:<br /><a href="http://youtu.be/ctiKdoZcqEQ" class="postlink">http://youtu.be/ctiKdoZcqEQ</a><br /><br />Quisiera oír sus comentarios, y si además, también si hay algún tipo de enemigos que les gustaría ver.<br /></div></blockquote><br /><br />Muy bueno, me ha gustado un montón, proyectos como éste hace que me entre el gusanillo de meterme a fondo con los juegos, lástima de la falta de tiempo...  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Sab Mar 16, 2013 10:19 pm</p><hr />
]]></content>
</entry>
</feed>