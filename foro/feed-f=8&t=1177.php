<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1177" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-30T21:49:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1177</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-07-30T21:49:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5796#p5796</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5796#p5796"/>
<title type="html"><![CDATA[Re: Compilar varios archivos en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5796#p5796"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />creo que lo más recomendable es que te cojas un libro de C++<br /></div></blockquote><br /><br />servido mi compa <!-- m --><a class="postlink" href="http://arco.inf-cr.uclm.es/~dvilla/pensar_en_C++/pensar_en_cpp-vol1.pdf">http://arco.inf-cr.uclm.es/~dvilla/pens ... p-vol1.pdf</a><!-- m --> ;D<br /><br />que lo disfrute!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Jul 30, 2011 9:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[El_Guille]]></name></author>
<updated>2011-06-13T19:02:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5653#p5653</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5653#p5653"/>
<title type="html"><![CDATA[Re: Compilar varios archivos en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5653#p5653"><![CDATA[
Ya hice lo que me dijiste, mas o menos como he entendido a la hora de hacer el .cpp debo de incluir el .h ¿cierto? quedando mas o menos algo como esto<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;clase.h&quot;<br /> class Clase{<br />      int numero;<br />          public :Clase(){  }<br />          public void metodo(){}<br />   };<br /></code></dd></dl><br /><br />Y eso me llega la otra duda que tenia en un principio ¿como uso o para que uso  las directivas que habiamos definido en el .h? ya que si pongo el codigo por si mismo me tira error diciendo que ya estaban definidos previamente esos objetos en el .h<br />Espero que no te este quitando la paciencia pero esta es la unica manera en la que puedo solucionar esta incognita<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2407">El_Guille</a> — Lun Jun 13, 2011 7:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-06-13T07:42:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5649#p5649</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5649#p5649"/>
<title type="html"><![CDATA[Re: Compilar varios archivos en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5649#p5649"><![CDATA[
creo que lo más recomendable es que te cojas un libro de C++, pero intentaré resolver las dudas:<br /><br />con el ejemplo que me has pasado sería:<br /><br /><pre class="prettyprint">#ifndef Clase_H<br />#define Clase_H<br /><br />class Clase{<br />  public:<br />    Clase&#40;&#41;;<br /><br />    int metodoX&#40;&#41;;<br /><br />  private:<br /><br />    int atributo;<br />};<br /><br />#endif</pre><br /><br />como ves, aquí no se pone el modificador de acceso delante de cada atributo o método, si no que se pone por secciones<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Jun 13, 2011 7:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[El_Guille]]></name></author>
<updated>2011-06-13T03:20:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5648#p5648</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5648#p5648"/>
<title type="html"><![CDATA[Re: Compilar varios archivos en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5648#p5648"><![CDATA[
Lo siento, explicame un poco mas despacio por favor, supongamos que tengo este archivo con este codigo<br /><dl class="codebox"><dt>Code: </dt><dd><code>   class Clase{<br />      int numero;<br />          public :Clase(){  }<br />          public void metodo(){}<br />   };<br /></code></dd></dl><br /><br />¿Como quedaria el archivo .h?, de lo poco que he leido se que hay que definir los metodos y clases, pero no se como hay que definir los metodos dentro de una clase y si tambien las variables como int o char<br />Esa es la duda en la que tengo mas problemas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2407">El_Guille</a> — Lun Jun 13, 2011 3:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-06-12T21:53:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5647#p5647</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5647#p5647"/>
<title type="html"><![CDATA[Re: Compilar varios archivos en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5647#p5647"><![CDATA[
la manera habitual de incluir un archivo es:<br /><br /><pre class="prettyprint">#include &quot;archvo.h&quot;</pre><br />esto busca un archivo en la carpeta del fichero que estás escribiendo (main.cpp en el ejemplo) que se llame archivo.h y te lo incluye<br /><br />Otra cosa es que los archivos que incluyas (y en general todos los .h) tienen que tener unas directivas para evitar que se incluyan muchas veces y dupliquen cosas:<br /><br /><pre class="prettyprint">#ifndef VARIABLE_UNICA_QUE_QUIERAS<br />#define VARIABLE_UNICA_QUE_QUIERAS<br /><br />// Aqui va todo el código del .h<br /><br />#endif</pre><br /><br />donde VARIABLE_UNICA_QUE_QUIERAS suele ser usando el nombre de archivo, que suele ser unico (Enemigo_H por ejemplo)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Jun 12, 2011 9:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[El_Guille]]></name></author>
<updated>2011-06-12T19:34:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5644#p5644</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5644#p5644"/>
<title type="html"><![CDATA[Re: Compilar varios archivos en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5644#p5644"><![CDATA[
Hola, mira aqui tengo un codigo de mi proyecto<br /><br />LoadStage.cpp<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_image.h&gt;<br />#include &lt;SDL/SDL_mixer.h&gt;<br /><br />class clase{<br />   SDL_Surface *screen;<br />   public :SDL_Surface *esc;<br />   public: SDL_Surface *map;<br />   public: SDL_Surface *window;   <br />   int scrollx;<br />   int scrolly;<br />   int camerawidth;  <br />   int cameraheight;<br />    public: Uint32 pared;<br />    <br />public :clase(){<br />   scrollx=0;<br />   scrolly=0;<br />    screen = SDL_SetVideoMode(500, 500, 16, SDL_HWSURFACE);   <br />    camerawidth=320;<br />    cameraheight=240;<br />   esc = IMG_Load(&quot;escenario2.png&quot;);<br />   window = IMG_Load(&quot;escenario2.png&quot;);<br />   map = IMG_Load(&quot;escenario2.png&quot;);<br />    pared=SDL_MapRGB(esc-&gt;format, 0x00, 0x00, 0xff); <br />}      <br /><br /> public :void scrollMove(int x,int y,int movex,int movey){<br /> if(x-(camerawidth/2)&gt;0&amp;&amp;((x)+(camerawidth/2))&lt;map-&gt;w)scrollx+=movex;<br /> else{<br />     if((x+camerawidth/2)&gt;map-&gt;w) scrollx=map-&gt;w-camerawidth;<br />    if((x-camerawidth/2)&lt;0) scrollx=0;<br /> }<br /> if(y-(cameraheight/2)&gt;0&amp;&amp;((y)+(cameraheight/2))&lt;map-&gt;h)scrolly+=movey;<br /> else{<br />     if((y+cameraheight/2)&gt;map-&gt;h) scrolly=map-&gt;h-cameraheight;<br />    if((y-cameraheight/2)&lt;0) scrolly=0;<br /> }<br /> }<br /> <br /> public :void setScroll(int x,int y){<br />    scrollx=x-(camerawidth/2);<br />   scrolly=y-(cameraheight/2);<br />   if(scrollx&lt;0)scrollx=0;<br />   if(scrollx+camerawidth&gt;map-&gt;w)scrollx=map-&gt;w-camerawidth;<br />   if(scrolly&lt;0)scrolly=0;<br />   if(scrolly+cameraheight&gt;map-&gt;h)scrolly=map-&gt;h-cameraheight;<br /> }<br />       <br /> public: void limpiar (int x,int y,int ancho,int alto){<br />    SDL_Rect rect = {x, y, 0, 0};<br />   SDL_Rect rect2 = {x, y, ancho,alto};<br />   SDL_BlitSurface(esc,&amp;rect2, map, &amp;rect);<br />}<br /><br />public: void imprimir(SDL_Surface *ima,int x,int y,int ancho,int alto){<br />     SDL_Rect rect = {x, y, 0, 0};<br />     SDL_Rect rect2 = {0, 0, ancho,alto };<br />     SDL_Rect rect3= {scrollx, scrolly, screen-&gt;w, screen-&gt;h};<br />      SDL_BlitSurface(ima,&amp;rect2, map, &amp;rect);<br />      SDL_BlitSurface(map,&amp;rect3, window,NULL);   <br />}     <br /><br />public: void repaintMapGame(){<br />     Uint32 a = SDL_MapRGB(screen-&gt;format, 255, 255, 255);<br />     SDL_FillRect(screen, NULL, a);<br />     SDL_Rect rect = {0, 0, camerawidth, cameraheight};<br />     SDL_BlitSurface(window,&amp;rect, screen,&amp;rect);   <br />     SDL_Flip(screen);<br />}        <br /><br />};<br /><br /></code></dd></dl><br /><br />Ya intente hacer el .h pero no me  quiere jalar a la hora de hacer el include<br />¿como es que debo hacer el .h de este archivo o que elementos debo añadir?<br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2407">El_Guille</a> — Dom Jun 12, 2011 7:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-06-12T13:47:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5641#p5641</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5641#p5641"/>
<title type="html"><![CDATA[Re: Compilar varios archivos en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5641#p5641"><![CDATA[
buenas,<br /><br />lo primero es que no se deben incluir los .cpp, puesto que esto te llevaría a errores por redefinición de variables y movidas. Incluye los .h<br />En cuanto a lo de varios archivos en un include, tienes que poner un include por cada archivo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Jun 12, 2011 1:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[El_Guille]]></name></author>
<updated>2011-06-11T19:23:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5639#p5639</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5639#p5639"/>
<title type="html"><![CDATA[Compilar varios archivos en c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1177&amp;p=5639#p5639"><![CDATA[
Hola a todos, tengo un problema bastante grande en c++<br />estoy haciendo un juego que estaba haciendo para java  a c++, y como saben un juego necesita usar muchos archivos (de hecho estoy usando alrededor de 23) y uso el comando #include para incluir los archivos para usarlos en otro archivo, por ejemplo:<br /><br />archivo main.cpp<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;LoadStage.cpp&quot;, &quot;character.cpp&quot;,<br /></code></dd></dl><br />Aqui tengo un archivo que jala las clases de los archivos loadstage.cpp y character.cpp para usarlos<br />pero, cuando intento poner un tercer archivo como esto<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;LoadStage.cpp&quot;, &quot;character.cpp&quot;,&quot;pixel.cpp&quot;<br /></code></dd></dl><br />No pasa nada, pero si intento instanciar un objeto del archivo &quot;pixel.cpp&quot; me marca error diciendo que no lo encuentra y despues de experimentar vi que era por que no aceptaba el archivo &quot;pixel.cpp&quot;<br />¿Alguien sabe como puedo incluir  muchos archivos con el #include? Se lo agradeceria mucho<br />Saludos<br />PD: si algunos no entendieron , publicare el codigo del proyecto  para entrar mas a detalle<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2407">El_Guille</a> — Sab Jun 11, 2011 7:23 pm</p><hr />
]]></content>
</entry>
</feed>