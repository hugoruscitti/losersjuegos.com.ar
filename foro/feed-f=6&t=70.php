<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=70" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-03-20T00:13:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=70</id>
<entry>
<author><name><![CDATA[CristianGC]]></name></author>
<updated>2007-03-20T00:13:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=248#p248</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=248#p248"/>
<title type="html"><![CDATA[Problema con SDL_ttf en debian]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=248#p248"><![CDATA[
Muchas gracias Geo, agregue la instruccion y todo funciona bien.<br />me estaba volviendo loco.<br />Saludos y gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=937">CristianGC</a> — Mar Mar 20, 2007 12:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2007-03-19T20:37:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=247#p247</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=247#p247"/>
<title type="html"><![CDATA[Problema con SDL_ttf en debian]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=247#p247"><![CDATA[
Todo está correcto, es sólo que te falta una cosa: <span style="font-weight: bold">actualizar la pantalla</span> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<br /><br />Agrega esta instrucción justo después de que terminas de escribir el texto, o en el ciclo en el que esperas a que se presione una tecla (en este caso el código se ejecutará repetidamente, innecesario en tu caso pero allí iría si hubiera cambios en pantalla):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Flip&#40; screen &#41;;<br /></code></dd></dl><br /><br />Saludos,<br />JJ (Geo).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Mar 19, 2007 8:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CristianGC]]></name></author>
<updated>2007-03-19T19:12:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=246#p246</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=246#p246"/>
<title type="html"><![CDATA[Problema con SDL_ttf en debian]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=70&amp;p=246#p246"><![CDATA[
Hola, que tal me llamo Cristian este es mi primer mensaje. les cuento lo que me paso, venia usando dev-c++ sobre windows y este programa que cuestra texto por pantalla funciona bien, cuando lo pase a linux pude compilarlo bien,  pero al ejecutar me abre la ventana de sdl y no muestra el texto. supongo que el problema estara con la libreria sdl_ttf. <br />aca les pongo el makefile que use sobre linux<br /><br />#Makefile#<br />CCP=g++<br />CC=gcc<br />INCLUDE=-I&quot;/usr/include/SDL&quot; -I&quot;/usr/include&quot; -D_REENTRANT<br />LIB=-L/usr/lib -lSDLmain -lSDL -lSDL_ttf -lpthread<br />FLAGS=-Wall -O2 -ggdb3<br /><br />ejecutable: main.o <br />        $(CCP) $(FLAGS) -o ejecutable main.o $(LIB)<br />main.o: main.cpp <br />        $(CCP) $(FLAGS) -c main.cpp -o main.o <br />clean:<br />        $(RM) ejecutable main.o<br /><br /><br />//y el programa<br />//main.cpp<br />#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_ttf.h&gt;<br />#include &lt;string.h&gt;<br /><br />SDL_Rect rectangulo;<br />SDL_Surface *screen,*ttext;<br /><br />char msg[6];<br /><br />struct colores {<br />  int r;<br />  int g;<br />  int b;<br />} RGB[5]; <br /><br />void dibu(int size, int color, char *texto, int y, int x)<br />{   <br />    TTF_Font *fuente;<br />    SDL_Color fgcolor;<br />    <br />    fuente = TTF_OpenFont(&quot;aa.ttf&quot;,size);<br />    fgcolor.r=RGB[color].r;<br />    fgcolor.g=RGB[color].g;<br />    fgcolor.b=RGB[color].b;<br />    <br />    sprintf(msg,&quot;%s&quot;,texto);<br />    ttext = TTF_RenderText_Blended(fuente,msg,fgcolor);<br />    <br />    rectangulo.y=y;<br />rectangulo.x=x;<br />rectangulo.w=ttext-&gt;w;<br />rectangulo.h=ttext-&gt;h;<br />    SDL_BlitSurface(ttext,NULL,screen,&amp;rectangulo);<br />    TTF_CloseFont(fuente);     <br />}<br /><br />int main(int argc, char *argv[]){<br /><br />  RGB[0].r=255;<br />  RGB[0].g=0;<br />  RGB[0].b=0;<br /><br />  RGB[1].r=0;<br />  RGB[1].g=255;<br />  RGB[1].b=0;<br /> <br />  RGB[2].r=0;<br />  RGB[2].g=0;<br />  RGB[2].b=255;<br /><br />  RGB[3].r=255;<br />  RGB[3].g=255;<br />  RGB[3].b=0;<br /><br />  RGB[4].r=255;<br />  RGB[4].g=128;<br />  RGB[4].b=0;<br /><br />  SDL_Event event;<br />  int done = 0;<br /><br />if (SDL_Init(SDL_INIT_VIDEO) &lt; 0) {<br />printf(&quot;No se pudo iniciar SDL: %s\n&quot;,SDL_GetError());<br />return 1;<br />}<br /><br />screen = SDL_SetVideoMode(330,600,24,SDL_HWSURFACE|SDL_DOUBLEBUF);<br />if (screen == NULL) {<br />                printf(&quot;No se puede inicializar el modo gráfico: %s\n&quot;,SDL_GetError());<br />return 1;<br />}<br /><br />atexit(SDL_Quit);<br /><br />if (TTF_Init() &lt; 0) {<br />printf(&quot;No se pudo iniciar SDL_ttf: %s\n&quot;,SDL_GetError());<br />return 1;<br />}<br /><br />atexit(TTF_Quit);<br /><br /><br />  while(!done){<br /><br />   dibu(60, 0, &quot;C&quot;, 70, 80);<br />   dibu(60, 1, &quot;u&quot;, 70, 120);<br />   dibu(60, 2, &quot;b&quot;, 70, 153);<br />   dibu(60, 3, &quot;i&quot;, 70, 188);<br />   dibu(60, 4, &quot;s&quot;, 70, 201);<br />   dibu(15, 2, &quot;Cristian Coronel&quot;, 150, 95);<br />   dibu(16, 4, &quot;Presione cualquier tecla para comenzar&quot;, 500, 10);<br /><br />   SDL_BlitSurface(ttext,NULL,screen,&amp;rectangulo);    <br />   SDL_FreeSurface(ttext);<br />   while(done == 0) {<br />while ( SDL_PollEvent(&amp;event) ) {<br />if ( event.type == SDL_KEYDOWN ) <br />done = 1;<br />}<br />        }<br />    }<br />  return 0;<br />}<br /><br />Si alguien me puede dar una mano.<br />Saludos y gracias.[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=937">CristianGC</a> — Lun Mar 19, 2007 7:12 pm</p><hr />
]]></content>
</entry>
</feed>