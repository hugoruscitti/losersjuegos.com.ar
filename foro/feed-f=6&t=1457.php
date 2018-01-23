<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1457" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-05-14T01:12:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1457</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-14T01:12:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6754#p6754</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6754#p6754"/>
<title type="html"><![CDATA[Re: Optimizacion con DirtyRectangles SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6754#p6754"><![CDATA[
Bueno eso de limpiar los ratros que deja el sprite del personaje (ya sea nave, carro, humano, etc..) se puede solucionar haciendo un rectangulo de color del fondo, asi; de este modo limpiamos el rastro. Ahora no se; quiza haya mejores formas de hacerlo pero, yo prefiero hacer un rectangulo de 'x' color que ocupe toda la pantalla:<br /><dl class="codebox"><dt>Code: </dt><dd><code>void ClrscSdl( SDL_Surface* Screen ){<br />   SDL_Rect PosScr;<br />   PosScr.x = 0;<br />   PosScr.y = 0;<br />   PosScr.w = Screen -&gt; w;<br />   PosScr.h = Screen -&gt; h;<br />   SDL_FillRect( Screen, &amp;PosScr, SDL_MapRGB( Screen -&gt; format, 0, 0, 0) );<br />   return;<br />}<br /></code></dd></dl><br />Y asi llamo una vez por ciclo en el loop principal a la funcion <span style="font-weight: bold">ClrscSdl</span> y le mando la superficie principal. Claro si el juego tiene un fondo que se compone de imagnes, sprites, etc... creo que al dibujar el mismo fondo se resolveria el problema.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Lun May 14, 2012 1:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kingwar]]></name></author>
<updated>2012-05-06T01:39:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6717#p6717</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6717#p6717"/>
<title type="html"><![CDATA[Re: Optimizacion con DirtyRectangles SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6717#p6717"><![CDATA[
<img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_surprised.gif" alt=":o" title="Surprised" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mad.gif" alt=":x" title="Mad" /> <br /><br />¿que estas estudiando (como profesion)?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_neutral.gif" alt=":|" title="Neutral" /> <br /><br />recomendaciones (que vendrian siendo mejor obligaciones)...<br />&quot;Buenas practicas de programacion&quot;<br />*los nombres de funciones no deben estar todos en mayuscula<br />*NO declarar variables globales solo a caso de muerte propia sino se hace<br />*no utilizar sentencias goto<br />*los nombres de variables no deben estar todos en mayuscula a menos que sean CONSTANTES y de ser así si el lenguaje lo dispone explicitarlos como tal.<br />*comprobar si las inicializaciones fueron correctas.<br />*... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2414">kingwar</a> — Dom May 06, 2012 1:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mcmakia.696]]></name></author>
<updated>2012-04-24T17:20:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6696#p6696</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6696#p6696"/>
<title type="html"><![CDATA[Optimizacion con DirtyRectangles SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1457&amp;p=6696#p6696"><![CDATA[
hola, yo de nuevo.jejeje.lo que pasa es que ya tengo los conocimientos minimos para hacer un juego al menos respetable.pero para lograr eso necesito optimizar el dibujado en pantalla de los sprites que se mueven.eh pillado en ejemplos del foro la tecnica dirtyrectangles y eh tratado de estudiarla pero no logro entenderla por que tiene cosas un poco avanzadas para mi.si es posible,quiero que me den un ejemplo sencillo o alguna pagina o que modifiquen el codigo que puse aqui. entendere mejor el ejemplo si las funciones no estan separadas del proceso principal.finjence en el codigo que les dejo, todas las funciones y datos estan declaradas globalmente, exepto la funcion TECLADO():<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />//LIBRERIAS<br />#include &lt;stdio.h&gt;<br />#include &lt;SDL.h&gt;<br /><br />void TECLADO();<br /><br />//SUPERFICIES<br />SDL_Surface *PANTALLA;<br />SDL_Surface *FONDO;<br />SDL_Surface *PJ;<br /><br />//EVENTOS<br />SDL_Event EVENTO;<br /><br />//RECTANGULOS<br />SDL_Rect FONDO_R;<br />SDL_Rect PJ_R;<br /><br />//VARIABLES GLOBALES<br />bool SALIR = false;<br />char TITULO&#91;&#93;=&quot;PRUEBA DE OPTIMIZACION #1&quot;;<br />int VEL = 3;<br />int VEL_X = 0; <br />int VEL_Y = 0;<br />const int PJ_ALTO = 50;<br />const int PJ_ANCHO = 50;<br /><br />int main(int argc, char *argv&#91;&#93;) <br />{<br /><br />   SDL_Init( SDL_INIT_VIDEO );<br />   SDL_WM_SetCaption( TITULO, NULL );<br />   PANTALLA = SDL_SetVideoMode(640,480,24,SDL_SWSURFACE| SDL_DOUBLEBUF);<br />   FONDO = SDL_LoadBMP(&quot;fondo.bmp&quot;);<br />   PJ = SDL_LoadBMP(&quot;pj.bmp&quot;);<br /><br />   //UBICACION DEL PJ<br />   PJ_R.x = 0;<br />   PJ_R.y = 0;<br />   PJ_R.w = PJ_ALTO;<br />   PJ_R.h = PJ_ANCHO;<br /><br />   //UBICACION DEL FONDO<br />   FONDO_R.x = PJ_R.x;<br />   FONDO_R.y = PJ_R.y;<br />   FONDO_R.w = FONDO-&gt;w;<br />   FONDO_R.h = FONDO-&gt;h;<br />   <br />   while( SALIR == false )<br />    {<br />      while( SDL_PollEvent( &amp;EVENTO ) )<br />        {<br /><br />         //EVENTOS DEL TECLADO<br />         TECLADO();<br />         if( EVENTO.type == SDL_QUIT ){ SALIR = true; }<br />         if(EVENTO.key.keysym.sym == SDLK_ESCAPE ){ SALIR = true;}<br /><br />      }//FIN WHILE #2<br /><br />      PJ_R.x += VEL_X;<br />      PJ_R.y += VEL_Y;<br /><br />      if(PJ_R.x&lt;0)PJ_R.x=0;<br />      if(PJ_R.x+50&gt;640)PJ_R.x-= VEL_X;<br />      if(PJ_R.y&lt;0)PJ_R.y=0;<br />      if(PJ_R.y+50&gt;480)PJ_R.y-= VEL_Y;<br />      <br />      SDL_BlitSurface(FONDO,NULL,PANTALLA,&amp;FONDO_R);<br />      SDL_BlitSurface(PJ,NULL,PANTALLA,&amp;PJ_R);<br />      SDL_Flip(PANTALLA);<br />      <br /><br />   }//FIN WHILE #1<br /><br />   SDL_FreeSurface(FONDO);<br />   SDL_FreeSurface(PJ);<br />   SDL_Quit ();<br />return 0;<br />}<br /><br />/*****************************/<br /><br />void TECLADO(){<br /><br />if( EVENTO.type == SDL_KEYDOWN )<br />    {<br />        switch( EVENTO.key.keysym.sym )<br />        {<br />            case SDLK_UP: VEL_Y -= VEL; break;<br />            case SDLK_DOWN: VEL_Y += VEL; break;<br />            case SDLK_LEFT: VEL_X -= VEL; break;<br />            case SDLK_RIGHT: VEL_X += VEL; break;<br />      }<br />    }<br />    <br />    else if( EVENTO.type == SDL_KEYUP )<br />    {<br />        switch( EVENTO.key.keysym.sym )<br />        {<br />            case SDLK_UP: VEL_Y += VEL; break;<br />            case SDLK_DOWN: VEL_Y -= VEL; break;<br />            case SDLK_LEFT: VEL_X += VEL; break;<br />            case SDLK_RIGHT: VEL_X -= VEL; break;<br />      }<br />    }<br /><br />}<br /><br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2569">mcmakia.696</a> — Mar Abr 24, 2012 5:20 pm</p><hr />
]]></content>
</entry>
</feed>