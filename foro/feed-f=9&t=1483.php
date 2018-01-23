<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1483" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-12T05:01:39+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1483</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-09-12T05:01:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7078#p7078</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7078#p7078"/>
<title type="html"><![CDATA[Re: Me desaparece una parte del mapeado sin motivo aparente]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7078#p7078"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br />Un consejo, intenta hacer código mucho más &quot;limpio&quot; y con un poco más de orden...<br /></div></blockquote><br />Sera por eso que estaba sin contestar desde Junio esta pregunta?<br /><br />Algo que me gusta hacer cuando programo en Python es crear un modulo <span style="font-style: italic"><span style="font-weight: bold">util.py</span></span> donde coloco muchas cosas que luego usare en <span style="font-weight: bold"><span style="font-style: italic">main.py</span></span>, por supuesto, que si el proyecto es más grande, hago otros modulos con nombres más descriptivos y coloco el codigo en ellos a como corresponda.<br /><br />En tú caso, Whiterat, debes crear más headers para tu proyecto, quizas uno llamado <span style="font-weight: bold"><span style="font-style: italic">util.h</span></span> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Sep 12, 2012 5:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-09-12T04:48:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7076#p7076</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7076#p7076"/>
<title type="html"><![CDATA[Re: Me desaparece una parte del mapeado sin motivo aparente]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7076#p7076"><![CDATA[
Bueno, olvidando una serie de detalles... (muchos detalles  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />) , tu idea no esta del todo mal, pero... bueno, al final de la función &quot;imprimir_escenario&quot;<br /><br /><pre class="prettyprint">for &#40;columnes=horitzontal;columnes&lt;costMapa;columnes++&#41;<br />          {<br />              for &#40;files=vertical;files&lt;costMapa;files++&#41;<br />              {<br />                  <br />                  rectDestino.x=columnes*63-&#40;horitzontal*63&#41;;<br />                  rectDestino.y=files*63-&#40;vertical*63&#41;;<br />                  rectOrigen.x = &#40;mapa[files][columnes]&#41;;//+512;<br />                  rectOrigen.y = 32;<br />                  SDL_BlitSurface&#40;tile,&amp;rectOrigen,screen,&amp;rectDestino&#41;;<br />              }<br />          }<br />     //esta es la linea que he agregado, y que hace la magia <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />      SDL_Flip&#40;screen&#41;;<br />}</pre><br /><br />eso hace que se dibuje el fondo (debes &quot;actualizar&quot; una superficie cada vez que haces una operación sobre ella), eso mostrara tu fondo, pero creo que no es el único error <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Un consejo, intenta hacer código mucho más &quot;limpio&quot; y con un poco más de orden...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Sep 12, 2012 4:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-09-12T03:55:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7075#p7075</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7075#p7075"/>
<title type="html"><![CDATA[Re: Me desaparece una parte del mapeado sin motivo aparente]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=7075#p7075"><![CDATA[
Mi japones es mejor que mi C++, así que no te puedo ayudar de mucho si me pongo a leer el codigo. Como fuera, te iba a preguntar si estabas usando <a href="http://www.gamedev.net/topic/315404-sdl-scrolling/page__view__findpost__p__3021124" class="postlink"><span style="font-weight: bold">screen scrolling</span></a>, de no ser así, puede que sea problemas de memoria por tenes partes del mapa que no se ven, en memoria.<br /><br />Ah... y para el codigo fuente te recomiendo que uses Mercurial, acá te dejo un <a href="http://mercurial.selenic.com/wiki/SpanishTutorial" class="postlink">pequeño tutorial</a>, y tambien te invito a usar <a href="http://bitbukcet.org/" class="postlink">Bitbucket.org</a> como repositorio para tu codigo fuente!<br /><br />Quizas Barajas te pueda ayudar en ésto...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Sep 12, 2012 3:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Whiterat]]></name></author>
<updated>2012-06-02T04:13:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=6807#p6807</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=6807#p6807"/>
<title type="html"><![CDATA[Me desaparece una parte del mapeado sin motivo aparente]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1483&amp;p=6807#p6807"><![CDATA[
Buenas a todos,<br /><br />Tras horas de dura pelea con este programita me doy por vencido y recurro a los expertos a ver si pueden echar un poco de luz sobre este pobre individuo.<br /><br />De momento yo detecto dos problemas obvios, a saber:<br /><br />Como ya me pasaba anteriormente (y muy bien me resolvieron en este mismo foro, gracias una vez mas) el programa funciona a tirones. Yo he pensado que quizás es por que imprimo demasiadas cosas demasiadas veces encima de la pantalla, pero bueno, solo son suposiciones. Si alguien sabe como puedo solucionar este problema de... digamos &quot;FPS&quot; me haría un gran favor.<br /><br />Por otra parte, esta el misterioso suceso que me ha hecho estar rompiéndome la cabeza durante toda la tarde/noche. La cosa es que yo imprimo un mapa en la pantalla, y sobre este mapa imprimo dos casas. Ejecuto el programa y todo va como la seda (excepto por los tirones xD), pero al cabo de un lapso de tiempo, digamos un minuto mas o menos, las casas desaparecen por arte de magia. La cuestión es, por que desaparecen y como hacer que no lo hagan?<br /><br />Muchas gracias de antemano y un saludo a toda la comunidad.<br /><br />A continuación os adjunto el codigo y un zip con el programa y las imágenes (por si queréis reíros un rato de lo mal hecho que esta xD):<br /><br />(No se subirlo de otra forma)<br /><!-- m --><a class="postlink" href="http://d01.megashares.com/dl/8kUPgFu/Codigo.zip">http://d01.megashares.com/dl/8kUPgFu/Codigo.zip</a><!-- m --><br /><br /><br /><br /><pre class="prettyprint">#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_image.h&gt;<br />#include &lt;iostream&gt;<br /><br />const int costMapa=20;<br /><br />void imprimir_casa&#40;SDL_Surface*screen, int x, int y,int horitzontal,int vertical&#41;<br />{<br />     int acasa[3][4]={2,2,2,2,<br />                      2,2,2,2,<br />                      1,1,1,1};<br />                     <br />     SDL_Surface *casa;<br />     int files=0,columnes=0;<br />     <br />     casa=IMG_Load&#40;&quot;Tile.png&quot;&#41;;<br />     <br />     SDL_Rect sCasa={0,0,64,63};<br />     SDL_Rect dCasa={0,0,50,50};<br />     SDL_Rect sFinestra={1,908,30,38};<br />     SDL_Rect sPorta={94,1955,34,61};<br />     SDL_Rect sAdorno={159,1152,33,32};<br />     <br />     for&#40;columnes=0;columnes&lt;3;columnes++&#41;<br />     {<br />       for&#40;files=0;files&lt;4;files++&#41;<br />       {<br />         //Fijo las coordenadas de cada tile que forma la casa<br />         dCasa.x=&#40;files*63+x&#41;-&#40;horitzontal*63&#41;;<br />         dCasa.y=columnes*63+y-&#40;vertical*63&#41;;<br />         if&#40;acasa[columnes][files]==2&#41;<br />         {<br />         sCasa.x=640;<br />         sCasa.y=768;<br />         }<br />         if&#40;acasa[columnes][files]==1&#41;<br />         {<br />         sCasa.x=512;<br />         sCasa.y=833;<br />         }<br />         SDL_BlitSurface&#40;casa,&amp;sCasa,screen,&amp;dCasa&#41;;<br />         <br />         //Fijo las coordenadas del tile que forma el resalto del tejado<br />         if &#40;&#40;files==0 &amp;&amp; columnes==0&#41;||&#40;files==0 &amp;&amp; columnes==1&#41; &#41;<br />         {<br />                      dCasa.x=files*63+x-16-&#40;horitzontal*63&#41;;<br />                      dCasa.y=columnes*63+y-&#40;vertical*63&#41;;<br />                      SDL_BlitSurface&#40;casa,&amp;sCasa,screen,&amp;dCasa&#41;;<br />         }<br />         //Pongo ventanas<br />         if&#40;&#40;files==3 &amp;&amp; columnes==0&#41;||&#40;files==3 &amp;&amp; columnes==1&#41; &#41;<br />         {<br />                      dCasa.x=files*63+x+16-&#40;horitzontal*63&#41;;<br />                      dCasa.y=columnes*63+y-&#40;vertical*63&#41;;<br />                      SDL_BlitSurface&#40;casa,&amp;sCasa,screen,&amp;dCasa&#41;;<br />         }<br />         //Pongo ventana<br />         if &#40;&#40;files==0 &amp;&amp; columnes==2&#41;||&#40;files==3 &amp;&amp; columnes==2&#41;&#41;<br />         {<br />                       dCasa.x=files*63+x+17-&#40;horitzontal*63&#41;;<br />                       dCasa.y=columnes*63+y+7-&#40;vertical*63&#41;;;<br />                       SDL_BlitSurface&#40;casa,&amp;sFinestra,screen,&amp;dCasa&#41;;<br />         <br />         }<br />         //Pongo puerta;<br />         if &#40;files==1 &amp;&amp; columnes==2&#41;<br />         {<br />                       SDL_Rect sPorta={94,1955,34,61};<br />                       dCasa.x=files*63+x+17-&#40;horitzontal*63&#41;;<br />                       dCasa.y=columnes*63+y+2-&#40;vertical*63&#41;;;<br />                       SDL_BlitSurface&#40;casa,&amp;sPorta,screen,&amp;dCasa&#41;;<br />         <br />         }<br />         //Pongo flor;<br />         if &#40;files==2 &amp;&amp; columnes==2&#41;<br />         {<br />                       SDL_Rect sPorta={94,1955,34,61};<br />                       dCasa.x=files*63+x+17-&#40;horitzontal*63&#41;;<br />                       dCasa.y=columnes*63+y+35-&#40;vertical*63&#41;;;<br />                       SDL_BlitSurface&#40;casa,&amp;sAdorno,screen,&amp;dCasa&#41;;<br />         <br />         }<br />         <br />         <br />       }<br />     }  <br />}<br /><br /><br />void imprimir_escenario &#40;SDL_Surface *screen,SDL_Surface *tile,int horitzontal, int vertical&#41;<br />{<br />     int files,columnes;<br />     SDL_Rect rectOrigen = {896,32,63,63};<br />     SDL_Rect rectDestino = {0,0,63,63};<br />     int mapa[costMapa][costMapa]={7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,<br />                                   7,6,0,0,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,7,<br />                                   7,6,0,0,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,7,<br />                                   7,6,0,0,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,7,<br />                                   7,6,0,0,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,7,<br />                                   7,6,0,0,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,7,<br />                                   7,6,0,0,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,7,<br />                                   7,6,0,0,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,7,<br />                                   7,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7,<br />                                   7,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7,<br />                                   7,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,0,0,7,<br />                                   7,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,0,0,7,<br />                                   7,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,0,0,7,<br />                                   7,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,0,0,7,<br />                                   7,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,0,0,7,<br />                                   7,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,0,0,7,<br />                                   7,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,0,0,7,<br />                                   7,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7,<br />                                   7,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7,<br />                                   7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,};<br />                       <br />     for &#40;columnes=horitzontal;columnes&lt;costMapa;columnes++&#41;<br />          {<br />              for &#40;files=vertical;files&lt;costMapa;files++&#41;<br />              {<br />                  <br />                  rectDestino.x=columnes*63-&#40;horitzontal*63&#41;;<br />                  rectDestino.y=files*63-&#40;vertical*63&#41;;<br />                  rectOrigen.x = &#40;mapa[files][columnes]*64&#41;+512;<br />                  rectOrigen.y = 32;<br />                  SDL_BlitSurface&#40;tile,&amp;rectOrigen,screen,&amp;rectDestino&#41;;<br />              }<br />          }<br /><br />}<br /><br />int main &#40;int argc, char *argv[]&#41;<br />{<br />    SDL_Surface *screen,*ima,*tile;<br />    SDL_Rect rDest={250,250,10,10};<br />    SDL_Rect src={4,3,24,43};<br />    SDL_Event event;<br />    int done=0;<br />    int up=0,down=0,right=0,left=0;<br />    int horitzontal=0, vertical=0;<br />    <br />    int m,n;<br />    int i=0;<br /><br />    <br />    SDL_Init&#40;SDL_INIT_VIDEO&#41;;<br />    screen=SDL_SetVideoMode&#40;630,630,24,SDL_HWSURFACE&#41;;<br />    ima=IMG_Load&#40;&quot;personaje.png&quot;&#41;;<br />    tile=IMG_Load&#40;&quot;Tile.png&quot;&#41;;<br />    SDL_BlitSurface&#40;ima,NULL,screen,&amp;rDest&#41;;<br />    SDL_Flip&#40;screen&#41;;<br />    <br />    while &#40;done==0&#41;<br />    {<br />            if &#40;i&lt;4&#41;<br />                i++;<br />                else<br />                i=0;<br />          SDL_PollEvent&#40;&amp;event&#41;;<br />          Uint8 *key=SDL_GetKeyState&#40;NULL&#41;;<br />    <br />          imprimir_escenario&#40;screen,tile,horitzontal,vertical&#41;;<br />          imprimir_casa&#40;screen,252,63,horitzontal,vertical&#41;;<br />          imprimir_casa&#40;screen,944,315,horitzontal,vertical&#41;;<br />    <br />          SDL_BlitSurface&#40;ima,&amp;src,screen,&amp;rDest&#41;;<br />          SDL_Flip&#40;screen&#41;;<br /><br />    <br />           switch &#40;event.type&#41;<br />                {<br />                              case SDL_KEYUP:<br />                                   {<br />                                               if &#40;event.key.keysym.sym==SDLK_RIGHT&#41;<br />                                               {<br />                                               right=0;<br />                                               src.x=6;src.y=99;src.w=17;src.h=43;<br />                                               i=0;<br />                                               break;<br />                                               }<br />                                               if &#40;event.key.keysym.sym==SDLK_LEFT&#41;<br />                                               {<br />                                               left=0;<br />                                               src.x=6;src.y=51;src.w=17;src.h=43;<br />                                               i=0;<br />                                               break;<br />                                               }<br />                                               if &#40;event.key.keysym.sym==SDLK_UP&#41;<br />                                               {<br />                                               {src.x=4;src.y=147;src.w=24;src.h=43;}<br />                                               i=0;<br />                                               up=0;<br />                                               break;<br />                                               }<br />                                               if &#40;event.key.keysym.sym==SDLK_DOWN&#41;<br />                                               {<br />                                               down=0;<br />                                               src.x=4;src.y=3;src.w=24;src.h=43;<br />                                               i=0;<br />                                               break;<br />                                               }<br />                                   }<br />                              case SDL_KEYDOWN:<br />                                   {<br />                                               if &#40;event.key.keysym.sym==SDLK_RIGHT&#41;<br />                                               {<br />                                               right=1;<br />                                               if&#40;i==0&#41;{src.x=6;src.y=99;src.w=17;src.h=43;}<br />                                               if&#40;i==1&#41;{src.x=37;src.y=99;src.w=21;src.h=43;}<br />                                               if&#40;i==2&#41;{src.x=70;src.y=99;src.w=17;src.h=43;}<br />                                               if&#40;i==3&#41;{src.x=101;src.y=99;src.w=21;src.h=43;}<br />                                               break;<br />                                               }<br />                                               if &#40;event.key.keysym.sym==SDLK_LEFT&#41;<br />                                               {<br />                                               left=1;<br />                                               if&#40;i==0&#41;{src.x=6;src.y=51;src.w=17;src.h=43;}<br />                                               if&#40;i==1&#41;{src.x=37;src.y=51;src.w=21;src.h=43;}<br />                                               if&#40;i==2&#41;{src.x=70;src.y=51;src.w=17;src.h=43;}<br />                                               if&#40;i==3&#41;{src.x=101;src.y=51;src.w=21;src.h=43;} <br />                                               break;<br />                                               }<br />                                               if &#40;event.key.keysym.sym==SDLK_UP&#41;<br />                                               {<br />                                               up=1;<br />                                               if&#40;i==0&#41;{src.x=4;src.y=147;src.w=24;src.h=43;}<br />                                               if&#40;i==1&#41;{src.x=37;src.y=147;src.w=21;src.h=43;}<br />                                               if&#40;i==2&#41;{src.x=68;src.y=147;src.w=24;src.h=43;}<br />                                               if&#40;i==3&#41;{src.x=102;src.y=147;src.w=21;src.h=43;}<br />                                               break;<br />                                               }<br />                                               if &#40;event.key.keysym.sym==SDLK_DOWN&#41;<br />                                               {<br />                                               down=1;<br />                                               if&#40;i==0&#41;{src.x=4;src.y=3;src.w=24;src.h=43;}<br />                                               if&#40;i==1&#41;{src.x=37;src.y=3;src.w=21;src.h=43;}<br />                                               if&#40;i==2&#41;{src.x=68;src.y=3;src.w=24;src.h=43;}<br />                                               if&#40;i==3&#41;{src.x=102;src.y=3;src.w=21;src.h=43;}<br />                                               break;<br />                                               }                                         <br />                                   }<br />                              case SDL_QUIT:<br />                                   {<br />                                            done=1;<br />                                            break;<br />                                   }<br />                }<br />                if &#40;right==1 &amp;&amp; horitzontal&lt;costMapa-10&#41;<br />                horitzontal+=1;<br />                if &#40;left==1 &amp;&amp; horitzontal &gt;0&#41;<br />                horitzontal-=1;<br />                if &#40;up==1 &amp;&amp; vertical &gt;0&#41;<br />                vertical-=1;<br />                if &#40;down==1 &amp;&amp; vertical &lt; costMapa-10&#41;<br />                vertical+=1;<br />    }<br />    return 0;<br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2614">Whiterat</a> — Sab Jun 02, 2012 4:13 am</p><hr />
]]></content>
</entry>
</feed>