<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1406" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-02-15T14:43:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1406</id>
<entry>
<author><name><![CDATA[mcmakia.696]]></name></author>
<updated>2012-02-15T14:43:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6531#p6531</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6531#p6531"/>
<title type="html"><![CDATA[Re: Problemas con &quot;scrolling&quot; SDL,C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6531#p6531"><![CDATA[
Ohh gracias tio creo que me servira un poco ,pero me llevara un poco de tiempo entender y analizar como funciona. Arigatō¡¡¡<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2569">mcmakia.696</a> — Mié Feb 15, 2012 2:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2012-02-15T12:29:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6530#p6530</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6530#p6530"/>
<title type="html"><![CDATA[Re: Problemas con &quot;scrolling&quot; SDL,C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6530#p6530"><![CDATA[
Hola, solucionarte el código seria hacer mal a tu lógica y no hacerte pensar! jajaja,<br />tampoco tengo tiempo y no se mucho de SDL, pero acá tenes un ejemplo para descargarte que quizás te sirva (es un tanquesito que moves por la pantalla y hace scroll)<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/_media/referencia/ejemplos/scroll/scroll.tar.gz">http://www.losersjuegos.com.ar/_media/r ... oll.tar.gz</a><!-- m --><br /><br />esta en los ejemplos de esta misma web (tenes otros que pueden ser de tu interes)...<br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><br /><br />los ejemplos son bastantes claros en mi opinion (si entendes C y SDL aunque sea minimamente)... SALUDOS, espero que te sirva<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Mié Feb 15, 2012 12:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mcmakia.696]]></name></author>
<updated>2012-02-14T00:47:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6522#p6522</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6522#p6522"/>
<title type="html"><![CDATA[Problemas con &quot;scrolling&quot; SDL,C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1406&amp;p=6522#p6522"><![CDATA[
Hola.tengo un problema con este programa,lo que pasa es que quiero hacer un scroll,osea que la camara siga al pj pero no logro hacerlo &quot;bien&quot;.osea funciona, pero funciona mal,el &quot;TERRENO&quot; deja rastros en la pantalla y la camara no sigue al &quot;PJ&quot; como deberia.que pasa cual es el problema?.Aqui les dejo el codigo:<br /><br />*NOTA:no utilizo POO por que me enredo anunque si se utilizarla <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />#include &lt;SDL.h&gt;<br />#include &lt;SDL_image.h&gt;<br /><br />SDL_Surface *PANTALLA = NULL;<br />SDL_Surface *OJAG = NULL;<br />SDL_Surface *TERRENO = NULL;<br />SDL_Rect MURO;<br />SDL_Rect OJAG_R;<br />SDL_Rect TERRENO_R;<br />SDL_Rect CAMARA;<br />SDL_Event EVENTO;<br />int vel = 3;<br />int VELX, VELY;<br />bool FIN = false;<br /><br />/*******************************************/<br /><br />bool COLISION( SDL_Rect A, SDL_Rect B )<br />{<br />    //LOS LADOS DE LOS RECTANGULOS<br />    int leftA, leftB;<br />    int rightA, rightB;<br />    int topA, topB;<br />    int bottomA, bottomB;<br /><br />    //CALCULAR LOS LADOS DE LA RECTA A<br />    leftA = A.x;<br />    rightA = A.x + A.w;<br />    topA = A.y;<br />    bottomA = A.y + A.h;<br /><br />    //CALCULAR LOS LADOS DE LA RECTA B<br />    leftB = B.x;<br />    rightB = B.x + B.w;<br />    topB = B.y;<br />    bottomB = B.y + B.h;<br /><br />    //SI ALGUNO DE LOS LADOS DESDE A ESTAN FUERA DE B<br />    if( bottomA &lt;= topB ){ return false; }<br /><br />   if( topA &gt;= bottomB ){ return false; }<br /><br />    if( rightA &lt;= leftB ){ return false; }<br /><br />    if( leftA &gt;= rightB ){ return false; }<br /><br />    //SI NINGUNO DE LOS LADOS DESDE A ESTAN FUERA DE B<br />    return true;<br />}<br /><br />/***************************************/<br /><br />int main( int argc, char* args&#91;&#93; ){<br /><br />   SDL_Init(SDL_INIT_EVERYTHING);<br />   PANTALLA = SDL_SetVideoMode(800,600,24,SDL_SWSURFACE);<br />   OJAG = SDL_LoadBMP(&quot;pj_1.bmp&quot;);<br />   TERRENO = SDL_LoadBMP(&quot;terreno.bmp&quot;);<br />   <br /><br />   OJAG_R.x = 0;<br />   OJAG_R.y = 0;<br />   OJAG_R.w = OJAG-&gt;w;<br />   OJAG_R.h = OJAG-&gt;h;<br /><br />   TERRENO_R.x = 0;<br />   TERRENO_R.y = 0;<br />   TERRENO_R.w = TERRENO-&gt;w;<br />   TERRENO_R.h = TERRENO-&gt;h;<br /><br />   MURO.x = 90;<br />   MURO.y = 300;<br />   MURO.w = 400;<br />   MURO.h = 30;<br /><br />   CAMARA.x = 0;<br />   CAMARA.y = 0;<br />   CAMARA.w = 800;<br />   CAMARA.h = 600;<br /><br />   while( FIN == false )<br />    {<br />        <br />      <br /><br />        while( SDL_PollEvent( &amp;EVENTO ) )<br />        {<br />         <br />         if( EVENTO.type == SDL_QUIT ){ FIN = true; }<br />         <br /><br />         if( EVENTO.type == SDL_KEYDOWN )<br />         {<br />            switch( EVENTO.key.keysym.sym )<br />        {<br />            case SDLK_UP: VELY -= vel; break;<br />            case SDLK_DOWN: VELY += vel; break;<br />            case SDLK_LEFT: VELX -= vel; break;<br />            case SDLK_RIGHT: VELX += vel; break;<br />          <br />         <br />        }<br />         <br />         }<br /><br />         else if( EVENTO.type == SDL_KEYUP )<br />         {<br />        <br />            switch( EVENTO.key.keysym.sym )<br />        {<br />            case SDLK_UP: VELY += vel; break;<br />            case SDLK_DOWN: VELY -= vel; break;<br />            case SDLK_LEFT: VELX += vel; break;<br />            case SDLK_RIGHT: VELX -= vel; break;<br />        }<br />         }<br /><br />         if(EVENTO.key.keysym.sym == SDLK_ESCAPE){ FIN =1; }<br />         <br />        <br />      }<br /><br />      OJAG_R.x+= VELX;<br />      OJAG_R.y+= VELY;<br /><br />      if(OJAG_R.x&lt;=0){OJAG_R.x=0;}<br />      if(OJAG_R.y&lt;=0){OJAG_R.y=0;}<br />      if(OJAG_R.x+90&gt;=800){OJAG_R.x-= VELX;}<br />      if(OJAG_R.y+115&gt;=600){OJAG_R.y-= VELY;}<br /><br />      CAMARA.x = ( OJAG_R.x + 90  /2 ) - 800 /2;<br />      CAMARA.y = ( OJAG_R.y + 115 /2 ) - 600 /2;<br /><br />      if( CAMARA.x &lt; 0 ){ CAMARA.x = 0; }<br />      if( CAMARA.y &lt; 0 ){ CAMARA.y = 0; }<br />      if( CAMARA.x &gt; 3000 - CAMARA.w ){ CAMARA.x = 3000 - CAMARA.w; }<br />      if( CAMARA.y &gt; 3000 - CAMARA.h ){CAMARA.y = 3000 - CAMARA.h; }<br />   <br />      if( COLISION( OJAG_R,MURO) ){ OJAG_R.x -= VELX; }<br />      if( COLISION( OJAG_R,MURO) ){ OJAG_R.y -= VELY; }<br />      <br /><br />      //SDL_FillRect( PANTALLA, &amp;PANTALLA-&gt;clip_rect, SDL_MapRGB( PANTALLA-&gt;format, 0xFF, 0xFF, 0xFF ) );<br />      SDL_BlitSurface(TERRENO, NULL, PANTALLA, &amp;CAMARA);<br />      SDL_FillRect( PANTALLA, &amp;MURO, SDL_MapRGB( PANTALLA-&gt;format, 0x77, 0x77, 0x77 ) );<br />      SDL_BlitSurface(OJAG, NULL, PANTALLA, &amp;OJAG_R);<br />      <br />      SDL_Flip( PANTALLA );<br /><br />  <br />        <br />    }<br /><br />   SDL_FreeSurface(TERRENO);<br />   SDL_FreeSurface(OJAG);<br />   SDL_Quit();<br /><br />    return 0;<br />}<br /><br /><br /><br /><br /><br /><br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2569">mcmakia.696</a> — Mar Feb 14, 2012 12:47 am</p><hr />
]]></content>
</entry>
</feed>