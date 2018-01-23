<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1410" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-02-15T17:52:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1410</id>
<entry>
<author><name><![CDATA[Kainz]]></name></author>
<updated>2012-02-15T17:52:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6534#p6534</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6534#p6534"/>
<title type="html"><![CDATA[Re: Problemas SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6534#p6534"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />Me parece que esta linea puede estar dando problemas:<br /><br /><pre class="prettyprint">SDL_Surface *screen,txt;</pre><br /><br />No esto seguro, pero me parece que C++ entiende que la variable &quot;txt&quot; tiene<br />que ser un struct... y claramente lo que necesitas es que &quot;txt&quot; sea un puntero. <br /><br />¿Que tal si pruebas escribiendo esto:<br /><br /><pre class="prettyprint">SDL_Surface * screen;<br />SDL_Surface * txt;</pre><br /></div></blockquote><br />el caso es que es algo que me pasa muy a menudo, no se como no me he fijado: MUCHAS GRACIAS!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2486">Kainz</a> — Mié Feb 15, 2012 5:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-02-15T17:47:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6533#p6533</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6533#p6533"/>
<title type="html"><![CDATA[Re: Problemas SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6533#p6533"><![CDATA[
Me parece que esta linea puede estar dando problemas:<br /><br /><pre class="prettyprint">SDL_Surface *screen,txt;</pre><br /><br />No esto seguro, pero me parece que C++ entiende que la variable &quot;txt&quot; tiene<br />que ser un struct... y claramente lo que necesitas es que &quot;txt&quot; sea un puntero. <br /><br />¿Que tal si pruebas escribiendo esto:<br /><br /><pre class="prettyprint">SDL_Surface * screen;<br />SDL_Surface * txt;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Feb 15, 2012 5:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kainz]]></name></author>
<updated>2012-02-15T17:22:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6532#p6532</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6532#p6532"/>
<title type="html"><![CDATA[Problemas SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1410&amp;p=6532#p6532"><![CDATA[
este es el codigo que tengo <br /><dl class="codebox"><dt>Code: </dt><dd><code>//Lost in Castle <br />//Version 1.0 BETA<br />//Alejandro Martinez<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;iostream&gt;<br />#include &lt;stdio.h&gt;<br />#include &lt;SDL/SDL_image.h&gt;<br />#include &lt;SDL/SDL_ttf.h&gt;<br />#include &lt;SDL/SDL_mixer.h&gt;<br />#include &quot;recursos.h&quot;<br />int main ( int argc, char** argv ){<br />SDL_Color fgcolor;<br />fgcolor.r=200;<br />fgcolor.g=200;<br />fgcolor.b=10;<br /><br /><br />SDL_Event event;<br />SDL_Rect dest;<br />TTF_Font *fuente;<br />SDL_Surface *screen,txt;<br />SDL_Surface *UI;<br />SDL_Surface *tu;<br />int proceso =0;<br />int raza=3;<br />;<br />//razas: 1HUMANO,2ORCO,3ELFO<br />iniciar_sdl(); <br /><br />screen = SDL_SetVideoMode(800, 600, 32, SDL_HWSURFACE | SDL_ANYFORMAT | SDL_DOUBLEBUF);<br />       if ( !screen )<br />    {<br />        printf(&quot;Error 1x01: %s\n&quot;, SDL_GetError());<br /><br />    }<br />if (TTF_Init() &lt; 0) { <br />  printf(&quot;Error 1x02: %s\n&quot;,SDL_GetError()); <br />  return 1; <br /> } <br /> fuente=TTF_OpenFont(&quot;framd.ttf&quot;,20);<br />  void TTF_Close(TTF_Font *fuente);<br /> <br /><br />txt = TTF_RenderText_Solid(fuente,&quot;hola&quot;,fgcolor);<br />SDL_WM_SetCaption(&quot;Lost In Castle&quot;, NULL);<br />//////////////////////////////////////// <br />UI = IMG_Load (&quot;img/UI.png&quot;);<br />dest.x=0;<br />dest.y=500;<br />SDL_BlitSurface(UI, NULL, screen, &amp;dest); //copiamos img en screen<br />SDL_Flip(screen);<br /><br />while(!proceso){<br />                if(raza=3){<br />tu = IMG_Load (&quot;img/elfo.png&quot;);<br />dest.x=80;<br />dest.y=530;<br />SDL_BlitSurface(tu, NULL, screen, &amp;dest); //copiamos img en screen<br />SDL_Flip(screen);<br /> while(SDL_PollEvent(&amp;event)){<br />   if(event.type == SDL_KEYDOWN){<br />     if(event.key.keysym.sym == SDLK_ESCAPE){<br />                 SDL_Quit();<br />                 return 0;<br />                 }<br />                 }<br />                 }<br />                 }<br />    <br />}<br />}</code></dd></dl><br /><br />y este es mi maldito error que no se como solucionar T_T <br /><br /><blockquote class="uncited"><div><br />44 C:\Users\Alex\Desktop\Lost in castle\main.cpp no match for 'operator=' in 'txt = TTF_RenderText_Solid(fuente, ((const char*)&quot;hola&quot;), fgcolor)'<br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2486">Kainz</a> — Mié Feb 15, 2012 5:22 pm</p><hr />
]]></content>
</entry>
</feed>