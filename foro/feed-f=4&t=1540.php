<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1540" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-09T23:38:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1540</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-09-09T23:38:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1540&amp;p=7065#p7065</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1540&amp;p=7065#p7065"/>
<title type="html"><![CDATA[Re: Problema con movimiento de sprite]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1540&amp;p=7065#p7065"><![CDATA[
debes cambiar la lógica de tu código, en lugar de usar <span style="font-weight: bold">case</span> intenta usar sentencias <span style="font-weight: bold">if</span> y vigila que se cumpla la sentencia siempre y cuando las teclas derecha o izquierda no estén presionadas, creo que deberían de quedarte unas cuatro sentencias <span style="font-weight: bold">if</span> aunque a primera vista creas que te harás de más sentencias... espero que me haya echo a entender <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Sep 09, 2012 11:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zeroxcol94]]></name></author>
<updated>2012-08-25T01:19:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1540&amp;p=7033#p7033</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1540&amp;p=7033#p7033"/>
<title type="html"><![CDATA[Problema con movimiento de sprite]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1540&amp;p=7033#p7033"><![CDATA[
Hola a todos de nuevo, estoy aquí por que tengo un problema con mi sprite. Pasa que cuando yo presiono las teclas arriba y abajo a la vez el sprite se mueve en dirección diagonal, esto pasa cuando presiono todas las teclas que hacen un movimiento diagonal. entonces lo que quiero es que mi sprite solo se mueva solo a las direcciones ; arriba, abajo , izquierda , derecha y no lo haga a las direcciones diagonales. Intente solucionar este problema  pero no di con la solución. Aquí les dejo el código fuente para que lo analicen y si pueden, me respondan:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;SDL.h&gt;<br /><br />void TECLADO();<br /><br />SDL_Surface *pantalla;<br />SDL_Event evento;<br />SDL_Rect pj_r; <br />SDL_Rect fondo_r;<br /><br />bool salir = false;<br />char TITULO&#91;&#93;=&quot;CODIGO BASICO SDL&quot;;<br />int VEL = 1;<br />int vel_x = 0; <br />int vel_y = 0;<br /><br />int main(int argc, char *argv&#91;&#93;) <br />{<br /><br />   SDL_Init( SDL_INIT_VIDEO );<br />   SDL_WM_SetCaption( TITULO, NULL );<br />   pantalla = SDL_SetVideoMode(640,480,24,SDL_HWSURFACE);<br />   <br />   pj_r.x = 0;<br />   pj_r.y = 0;<br />   pj_r.w = 50;<br />   pj_r.h = 50;<br /><br />   fondo_r.x = 0;<br />   fondo_r.y = 0;<br />   fondo_r.w = 640;<br />   fondo_r.h = 480;<br /><br />   while( salir == false )<br />    {<br />      while( SDL_PollEvent( &amp;evento ) )<br />        {<br />         TECLADO();<br />         if( evento.type == SDL_QUIT ){ salir = true; }<br />         if(evento.key.keysym.sym == SDLK_ESCAPE ){ salir = true;}<br /><br />      }//FIN WHILE #2<br /><br />      pj_r.x += vel_x;<br />      pj_r.y += vel_y;<br /><br />      if(pj_r.x&lt;0)pj_r.x=0;<br />      if(pj_r.x+50&gt;640)pj_r.x-= vel_x;<br />      if(pj_r.y&lt;0)pj_r.y=0;<br />      if(pj_r.y+50&gt;480)pj_r.y-= vel_y;<br />      <br />      SDL_FillRect(pantalla,&amp;fondo_r,SDL_MapRGB(pantalla-&gt;format,0,0,0));<br />      SDL_FillRect(pantalla,&amp;pj_r,SDL_MapRGB(pantalla-&gt;format,255,255,0));<br />      SDL_Flip(pantalla);<br />      <br /><br />   }//FIN WHILE #1<br /><br />   //DECARGA DE SUPERFICIES Y OTROS RECURSOS<br />   SDL_Quit ();<br />return 0;<br />}<br /><br />void TECLADO(){<br /><br />if( evento.type == SDL_KEYDOWN )<br />    {<br />        switch( evento.key.keysym.sym )<br />        {<br />            case SDLK_UP: vel_y -= VEL; break;<br />            case SDLK_DOWN: vel_y += VEL; break;<br />            case SDLK_LEFT: vel_x -= VEL; break;<br />            case SDLK_RIGHT: vel_x += VEL; break;<br />      }<br />    }<br />    <br />    else if( evento.type == SDL_KEYUP )<br />    {<br />        switch( evento.key.keysym.sym )<br />        {<br />            case SDLK_UP: vel_y += VEL; break;<br />            case SDLK_DOWN: vel_y -= VEL; break;<br />            case SDLK_LEFT: vel_x += VEL; break;<br />            case SDLK_RIGHT: vel_x -= VEL; break;<br />      }<br />    }<br /><br />}</code></dd></dl><br /><br />NOTA: El ejemplo utiliza la libreria SDL, y no necesita cargar imagenes externas ya que el sprite se genera por codigo.Solo necesitan compilarlo y ejecutarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2635">zeroxcol94</a> — Sab Ago 25, 2012 1:19 am</p><hr />
]]></content>
</entry>
</feed>