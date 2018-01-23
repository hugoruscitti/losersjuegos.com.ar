<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1025" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-27T15:19:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1025</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-27T15:19:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4911#p4911</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4911#p4911"/>
<title type="html"><![CDATA[Re: SDL_GetKeyState]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4911#p4911"><![CDATA[
Que raro por que hasta ahora habia probado un codigo de ejemplo que no tenia la funcion SDL_PumpEvents() y funcionaba sin problemas. <br />Bueno, ya puedo seguir con esto, muchas gracias pablo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Ene 27, 2011 3:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-27T00:55:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4902#p4902</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4902#p4902"/>
<title type="html"><![CDATA[Re: SDL_GetKeyState]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4902#p4902"><![CDATA[
Yo tambien acostumbro a usar el SDL_GetKeyState, lo que te esta faltando es<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_PumpEvents();</code></dd></dl><br /><br />por lo que te deberia quedar asi:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>   while(!done)//Mientras done sea false, el loop se ejecuta<br />   {<br /><br />      SDL_PumpEvents();<br /><br /><br />      tecla = SDL_GetKeyState(0); //Almacenar el estado del teclado al principio de cada loop<br />      if(tecla&#91;SDLK_UP&#93;)<br />      {<br />         printf(&quot;tecla arriba pulsada&quot;);<br />      }<br />   }</code></dd></dl><br /><br />mediante esta funcion vos lo que estas haciendo es tomar todos los eventos de entrada y los colocas dentro de una cola, de donde despues seran tomados por el SDL_GetKeyState(), si no lo pones no estas tomando ningun evento desde los dispositivos de entrada<br /><br />es lo mismo colocar<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_GetKeyState(0);</code></dd></dl><br /><br />pero siempre se me hizo mas apropiado utilizarlo de esta forma<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_GetKeyState(NULL);</code></dd></dl><br /><br />espero que te sirva...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Jue Ene 27, 2011 12:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-26T14:58:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4894#p4894</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4894#p4894"/>
<title type="html"><![CDATA[SDL_GetKeyState]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1025&amp;p=4894#p4894"><![CDATA[
Bon dia, tengo un problemilla con un programa que no le da la gana de funcionar. Simplemente era un codigo de prueba para empezar a tocar el teclado con SDL. Se supone que el programa tendria que escribir &quot;Tecla arriba pulsada&quot; cuando pulso esa tecla, pero por mucho que la pulse no reacciona. Alguna solucion?? :<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;SDL.h&quot;<br />#include &quot;SDL_image.h&quot;<br />#include &quot;SDL_ttf.h&quot;<br />#include &lt;conio.h&gt;<br />#include &lt;stdio.h&gt;<br /><br />int main(int argc, char *argv&#91;&#93;)<br />{<br />   ////////////////////////<br />   ///INICIALIZAR MODO VIDEO<br />   ////////////////////////<br />   if(SDL_Init(SDL_INIT_VIDEO)== -1)//Inicializar SDL, modulo de video, comprobando errores<br />   {<br />      printf(&quot;SDL_Init: %s &quot;, SDL_GetError()); //Mostrar informe de error y salir<br />      getch();<br />      return 0;<br />   } <br /><br />   SDL_Surface *screen = SDL_SetVideoMode(400, 400, 32, SDL_HWSURFACE|SDL_NOFRAME); //Se crea la superficie principal, que servira como ventana y se verifican errores<br />   if(!screen) //Si screem == 0, error<br />   {<br />      printf(&quot;SDL_SetVideoMode : %s&quot;, SDL_GetError()); //Mostrar informe de error y salir<br />      getch();<br />      return 0;<br />   }<br /><br />   ///////////////////////////<br />   ///INICIALIZAR FUENTES<br />   ///////////////////////////<br />   TTF_Init(); //Inicializar TTF<br />   TTF_Font *fuente = TTF_OpenFont(&quot;fuente.ttf&quot;, 15); //Se crea una variable de la struct font, para almacenar la fuente a usar y el tamaño<br />   SDL_Color color = {255, 255, 255}; //Definir color a usar<br />   SDL_Surface *imgtexto; //Se crea una superficie donde almacenar una imagen con el texto que le pasemos mas adelante<br />   <br />   ///////////////////////////<br />   ///INICIALIZAR TECLADO<br />   //////////////////////////<br />   Uint8 *tecla; //Se crea una variable para almacenar el estado del teclado<br /><br />   ////////////////////////<br />   ///LOOP<br />   ////////////////////////<br />   bool done = false; <br />   while(!done)//Mientras done sea false, el loop se ejecuta<br />   {<br />      tecla = SDL_GetKeyState(0); //Almacenar el estado del teclado al principio de cada loop<br />      if(tecla&#91;SDLK_UP&#93;)<br />      {<br />         printf(&quot;tecla arriba pulsada&quot;);<br />      }<br />   }<br />   <br />   getch();<br />   return 0;<br />}</code></dd></dl><br /><br />Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Ene 26, 2011 2:58 pm</p><hr />
]]></content>
</entry>
</feed>