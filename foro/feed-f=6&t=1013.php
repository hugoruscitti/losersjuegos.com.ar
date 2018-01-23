<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1013" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-19T14:52:39+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1013</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-19T14:52:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4797#p4797</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4797#p4797"/>
<title type="html"><![CDATA[Re: Excepcion no controlada SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4797#p4797"><![CDATA[
gracias mightygaver, al final lo pude solucionar como dices, con el TTF_GetError.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Ene 19, 2011 2:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-01-18T17:50:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4786#p4786</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4786#p4786"/>
<title type="html"><![CDATA[Re: Excepcion no controlada SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4786#p4786"><![CDATA[
Tiene pinta de un segmentation fault. Si programas en C, debes de ver ese error frecuentemente... es algo que por más que he programado en C/C++ no logro evitar... Ese error se da cuando intentas acceder a una dirección de memoria que está fuera de la memoria de tu programa.<br /><br />Creo que el error es que TTF_OpenFont te está devolviendo NULL, por algún tipo de error a la hora de cargar la fuente.ttf que le pasas como argumento. ¿Estás seguro de tener ese fichero ttf en tu carpeta? Mira de probar con alguna fuente descargada, métela en la carpeta donde tengas el ejecutable y le das a ver. <br /><br />Otra cosa que puedes hacer es añadir después de TTF_OpenFont:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if ( fuente ==  NULL )<br />{<br />  printf(&quot;Algun mensaje que aparezca.\r\n&quot;);<br />}<br /></code></dd></dl><br /><br />O ya que utilizas SDL_GetError, dale a eso a ver que sale XD. La verdad que no sé de SDL, pero esa excepción que te da el sistema operativo, dice que estás intentando acceder a la dirección de memoria 0x00000000, que no es nada más que NULL.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Mar Ene 18, 2011 5:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-18T15:52:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4782#p4782</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4782#p4782"/>
<title type="html"><![CDATA[Excepcion no controlada SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1013&amp;p=4782#p4782"><![CDATA[
buenas tarde, como va todo? <br />Estoy atascado con el tema de las fuente en SDL y tengo un codigo que en principio deveria funcionar sin problemas pero me salta un error que no se como solucionar, ahi va el codigo: <br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;SDL.h&quot;<br />#include &quot;SDL_image.h&quot;<br />#include &quot;SDL_ttf.h&quot;<br />#include &lt;conio.h&gt;<br /><br />int main(int argc, char *argv&#91;&#93;)<br />{<br />   SDL_Init(SDL_INIT_VIDEO);<br />   SDL_Surface *ventana = SDL_SetVideoMode(250, 200, 32, SDL_HWSURFACE|SDL_NOFRAME);<br />   SDL_Surface *imagen = IMG_Load(&quot;ventana.bmp&quot;);<br />   if(imagen == NULL) printf(&quot;KELOKEPASA: %s&quot;, SDL_GetError);<br />   SDL_BlitSurface(imagen, NULL, ventana, NULL);<br />   SDL_Flip(ventana);<br /><br />   TTF_Init();<br />   TTF_Font * fuente = TTF_OpenFont(&quot;fuente.ttf&quot;, 10);<br /><br />   SDL_Color color = {255,100,100,255};<br />   SDL_Surface * texto = TTF_RenderText_Solid(fuente, &quot;hola&quot;, color); //-------&gt;Infracción de acceso al leer la ubicación 0x00000000.<br />   <br />   SDL_BlitSurface(texto, NULL, ventana, NULL);<br />   SDL_Flip(ventana);<br />   <br /><br />   <br />   TTF_CloseFont(fuente);<br />   <br />   getch();<br />   atexit(SDL_Quit);<br />   atexit(TTF_Quit);<br />   return 0;<br />}</code></dd></dl><br /><br />el error entero es este: Primera excepción en 0x6f4c27f4 en gestor tareas.exe: 0xC0000005: Infracción de acceso al leer la ubicación 0x00000000.<br />Excepción no controlada en 0x6f4c27f4 en gestor tareas.exe: 0xC0000005: Infracción de acceso al leer la ubicación 0x00000000.<br /><br />gracias de antemano <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br /><br />EDITO: Ya lo he solucionado comprobando el resultado de cada funcion, resulta que estaba mal ubicado el archivo &quot;fuente.ttf&quot; ¬¬, ya van dos veces con la misma pierda jajajaja<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mar Ene 18, 2011 3:52 pm</p><hr />
]]></content>
</entry>
</feed>