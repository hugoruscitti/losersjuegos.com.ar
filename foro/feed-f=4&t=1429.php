<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1429" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-03-27T19:20:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1429</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-03-27T19:20:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6592#p6592</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6592#p6592"/>
<title type="html"><![CDATA[Re: Como hacer que salte mi personaje]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6592#p6592"><![CDATA[
<blockquote><div><cite>kaiser escribió:</cite><br />Por otro lado no tienes una función de salto propiamente dicha, cuando pulsas hacia arriba el PJ sube y cuando pulsas hacia abajo el PJ baja. Lo que deberías hacer es detectar si el PJ esta o no encima de una plataforma y mientras no lo esté hacer que baje.<br /></div></blockquote><br /><br />Es que eso mismo le dije yo a él en mi primer respuesta xD<br />ahora le toca ingeniarselas, porque ya le dimos algo de dirección al chico!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Mar 27, 2012 7:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2012-03-21T11:13:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6582#p6582</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6582#p6582"/>
<title type="html"><![CDATA[Re: Como hacer que salte mi personaje]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6582#p6582"><![CDATA[
Hace mucho que no uso SDL así que a lo mejor estoy metiendo la pata hasta el fondo. Cuando calculas VELX y VELY en función de las teclas que estás pulsando se lo aplicas a PJ_RECTA que es el rectángulo que contiene a PJ, creo que se lo deberías aplicar a PJ directamente no a su rectángulo, es decir, mover a PJ que es lo que ves en pantalla, con ese código no solo no deberías ver al PJ saltar sino que tampoco deberías ver como se mueve a dcha e izda. Por otro lado no tienes una función de salto propiamente dicha, cuando pulsas hacia arriba el PJ sube y cuando pulsas hacia abajo el PJ baja. Lo que deberías hacer es detectar si el PJ esta o no encima de una plataforma y mientras no lo esté hacer que baje.<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mié Mar 21, 2012 11:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mcmakia696]]></name></author>
<updated>2012-03-20T23:25:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6581#p6581</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6581#p6581"/>
<title type="html"><![CDATA[Re: Como hacer que salte mi personaje]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6581#p6581"><![CDATA[
Hola, aqui esta el codigo fuente.Lo que necesito es que mi personaje salte,intente hacer como me dijieron pero no funciono apenas veo el salto cuando presiono la tecla de salto jeje.fue un fracaso espero que me ayuden.<br /><br />NOTA: las dimensiones del PJ son 50x50 y la de la plataforma 800x150.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />#include &lt;SDL.h&gt;<br />#include &lt;stdio.h&gt;<br /><br />SDL_Surface *PANTALLA = NULL;<br />SDL_Surface *PJ = NULL;<br />SDL_Surface *PLAT = NULL;<br />SDL_Rect PJ_RECTA;<br />SDL_Rect PLAT_RECTA;<br />SDL_Rect FONDO_RECTA;<br />SDL_Event EVENTO;<br />char TITULO&#91;&#93;=&quot;Aplicacion de pruebas 20-03-2012-1&quot;;<br />bool SALIR = false;<br />int FONDO;<br />int VELX = 0;<br />int VELY = 0;<br />int VAR3 = 3;<br /><br />bool COLISION( SDL_Rect A, SDL_Rect B )<br />{<br />    //Lados de los rectangulos<br />    int leftA, leftB;<br />    int rightA, rightB;<br />    int topA, topB;<br />    int bottomA, bottomB;<br /><br />    //Calcular los lados del rectangulo A<br />    leftA = A.x;<br />    rightA = A.x + A.w;<br />    topA = A.y;<br />    bottomA = A.y + A.h;<br /><br />    //calcular los lados del rectangulo B<br />    leftB = B.x;<br />    rightB = B.x + B.w;<br />    topB = B.y;<br />    bottomB = B.y + B.h;<br /><br />    //Si alguno de los lados de A esta fuera de B<br />    if( bottomA &lt;= topB ){ return false; }<br />   if( topA &gt;= bottomB ){ return false; }<br />   if( rightA &lt;= leftB ){ return false; }<br />   if( leftA &gt;= rightB ){ return false; }<br /><br />    //Si ninguno de los lados de A esta fuera de B<br />    return true;<br />}<br /><br />int main( int argc, char* args&#91;&#93; )<br />{<br /><br />   SDL_Init( SDL_INIT_VIDEO );<br />   SDL_WM_SetCaption( TITULO, NULL );<br />   PANTALLA = SDL_SetVideoMode(800,600,24,SDL_HWSURFACE|SDL_DOUBLEBUF);<br />   PJ = SDL_LoadBMP(&quot;pj.bmp&quot;);<br />   PLAT = SDL_LoadBMP(&quot;plataforma.bmp&quot;);<br />   FONDO = SDL_MapRGB(PANTALLA-&gt;format, 0,0,0);<br /><br />   PJ_RECTA.x = 0;<br />   PJ_RECTA.y = 0;<br />   PJ_RECTA.w = PJ-&gt;w;<br />   PJ_RECTA.h = PJ-&gt;h;<br />   <br />   PLAT_RECTA.x = 0;<br />   PLAT_RECTA.y = 450;<br />   PLAT_RECTA.w = PLAT-&gt;w;<br />   PLAT_RECTA.h = PLAT-&gt;h;<br /><br />   FONDO_RECTA.x = 0;<br />   FONDO_RECTA.y = 0;<br />   FONDO_RECTA.w = PANTALLA-&gt;w;<br />   FONDO_RECTA.h = PANTALLA-&gt;h;<br /><br />   while( SALIR == false )<br />    {<br />        while( SDL_PollEvent( &amp;EVENTO ) )<br />        {<br />         if( EVENTO.type == SDL_QUIT ){ SALIR = true; }<br />            <br />         if( EVENTO.type == SDL_KEYDOWN )<br />    {<br />        <br />        switch( EVENTO.key.keysym.sym )<br />        {<br />            case SDLK_UP: VELY -= VAR3 ; break;<br />            case SDLK_DOWN: VELY += VAR3; break;<br />            case SDLK_LEFT: VELX -= VAR3; break;<br />            case SDLK_RIGHT: VELX += VAR3; break;<br />         <br />      }<br />   <br />   }<br />    <br /> <br />   else if( EVENTO.type == SDL_KEYUP )<br />   {<br />        switch( EVENTO.key.keysym.sym )<br />        {<br />            case SDLK_UP: VELY += VAR3; break;<br />            case SDLK_DOWN: VELY -= VAR3; break;<br />            case SDLK_LEFT: VELX += VAR3; break;<br />            case SDLK_RIGHT: VELX -= VAR3; break;<br />         <br />      }   <br />    }<br /><br />      if( EVENTO.key.keysym.sym == SDLK_ESCAPE ){ SALIR = true;}<br />      }<br /><br />      <br />      PJ_RECTA.x += VELX;<br />      PJ_RECTA.y += VELY;<br /><br />      if(PJ_RECTA.x &lt;0)PJ_RECTA.x -= VELX;<br />      if(PJ_RECTA.x +50 &gt;=801)PJ_RECTA.x -= VELX;<br />      if(PJ_RECTA.y &lt;0)PJ_RECTA.y -= VELY;<br />      if(PJ_RECTA.y +50 &gt;=601)PJ_RECTA.y -= VELY;<br /><br />      if(COLISION(PJ_RECTA,PLAT_RECTA)){ PJ_RECTA.x -= VELX; PJ_RECTA.y -= VELY; }<br /><br />      SDL_FillRect(PANTALLA, &amp;FONDO_RECTA, FONDO);<br />      SDL_BlitSurface(PJ, NULL, PANTALLA, &amp;PJ_RECTA);<br />      SDL_BlitSurface(PLAT, NULL, PANTALLA, &amp;PLAT_RECTA);<br />      SDL_Flip( PANTALLA );<br />      <br />      <br />        <br />    }<br />   <br />   SDL_FreeSurface(PJ);<br />   SDL_FreeSurface(PLAT);<br /><br />return 0;<br />}<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2589">mcmakia696</a> — Mar Mar 20, 2012 11:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mcmakia696]]></name></author>
<updated>2012-03-20T13:40:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6580#p6580</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6580#p6580"/>
<title type="html"><![CDATA[Re: Como hacer que salte mi personaje]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6580#p6580"><![CDATA[
Gracias a los dos por sus respuestas, me ayudaron, pero si quieren les puedo dar el codigo fuente del programa para que tengan una idea de como es la cuestion<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2589">mcmakia696</a> — Mar Mar 20, 2012 1:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-03-13T17:42:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6578#p6578</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6578#p6578"/>
<title type="html"><![CDATA[Re: Como hacer que salte mi personaje]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6578#p6578"><![CDATA[
En la pagina de losersjuegos hay un artículo llamado &quot;gravedad&quot;, seguramente te va a servir, fijate<br />que está casi al final de la siguiente página:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><br /><br />También vas a encontrar dos artículos que hacen saltar a personajes, aunque son un<br />poco mas elaborados:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/plataformas">http://www.losersjuegos.com.ar/referenc ... lataformas</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/un_juego_paso_a_paso">http://www.losersjuegos.com.ar/referenc ... aso_a_paso</a><!-- m --><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Mar 13, 2012 5:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-03-13T05:41:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6574#p6574</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6574#p6574"/>
<title type="html"><![CDATA[Re: Como hacer que salte mi personaje]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6574#p6574"><![CDATA[
Hola! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />No sé si has estado en foros antes, o realizado consultas del estilo, pero generalmente, al pedir ayuda, es necesario mostrar algo de codigo fuente. Asi los demas Losers (iba a escribir <span style="font-style: italic">foreros</span>, pero si uno es de la comunidad, este te combierte en un <span style="font-style: italic">Loser</span>, ¿no? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />) podran asistirte más eficientemente.<br /><br />Ahora bien, el concepto de saltar depende de como sea tu juego, si es de plataformas, como Mario Bros. o Mortal Kombat (si, las versiones para SNES) lo que podrias hacer es por ejemplo, hacer que, cuando el jugador presiones una tecla, tu personaje suba por el eje Y de la pantalla de juego y en una variable vas descontando su valor hasta llegar a 0 que bien podria significar que el personaje no puede subir más por el eje Y de la pantalla y bien, tiene que entrar en caida libre.<br /><br />Por supuesto que estó debe verse natural, de otra forma el jugador vera al personaje aparecer por arriba de donde estaba y luego donde estaba antes de saltar (o nisiquiera notaria que salto porque la cuenta a sucedido muy deprisa!), puede que usar <a href="http://box2d.org/about/" class="postlink">box2d</a>, te ayudara con la fisica de tu juego.<br /><br />una videodemostracion sobre box2d: <!-- m --><a class="postlink" href="http://www.youtube.com/watch?v=0awh5MFJwQo&amp;html5=True">http://www.youtube.com/watch?v=0awh5MFJwQo&amp;html5=True</a><!-- m --><br /><br />Tambien tienes la opcion de usar tweener, que es casi similar que box2d, nada más que en el sitio de la comúnidad existe <a href="http://www.losersjuegos.com.ar/referencia/articulos/interpolaciones" class="postlink">un articulo al respecto</a> que aconsejo leer.<br /><br />saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Mar 13, 2012 5:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mcmakia696]]></name></author>
<updated>2012-03-12T23:13:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6573#p6573</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6573#p6573"/>
<title type="html"><![CDATA[Como hacer que salte mi personaje]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1429&amp;p=6573#p6573"><![CDATA[
Hola, quisiera saber si alguien me da una funcion o me explique como hacer que salte mi personaje en un juego hecho con sdl.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2589">mcmakia696</a> — Lun Mar 12, 2012 11:13 pm</p><hr />
]]></content>
</entry>
</feed>