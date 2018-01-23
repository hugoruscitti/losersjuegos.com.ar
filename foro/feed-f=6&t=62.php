<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=62" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-03-16T21:47:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=62</id>
<entry>
<author><name><![CDATA[ligo]]></name></author>
<updated>2007-03-16T21:47:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=228#p228</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=228#p228"/>
<title type="html"><![CDATA[RESPUESTA]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=228#p228"><![CDATA[
pues pueden ser muchas cosas...<br /><br />recuerda que C y C++ son muy extrictos... y puedes tener el sgt problema:<br /><br />tu escribes:<br />#include&lt;Sdl/SDL_image.h&gt;<br /><br /><br />prueba con SDL/SDL_image.h<br /><br />además si trabajas con GNU siempre debes instalar el archivo con la extencion -dev... ya sea con apt-get.<br /><br />espero que te alla servido<br /><br />ATTE LIGO<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=341">ligo</a> — Vie Mar 16, 2007 9:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2007-03-16T13:51:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=227#p227</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=227#p227"/>
<title type="html"><![CDATA[Re: No me funcionan los metodos de imagen y texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=227#p227"><![CDATA[
No mencionas los problemas que tienes <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br />Lo que por lo pronto (y checando rápido) recomiendo, es que te asegures de haber cargado las imágenes y la fuente, por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>fuente = TTF_OpenFont&#40; directorio, tamanio &#41;;<br />if &#40; fuente == NULL &#41; &#123;<br />  // Aquí el código para manejar el error, p. ej.:<br />  fprintf&#40; stderr, &quot;Error al cargar fuente: %s\n&quot;, SDL_GetError&#40;&#41; &#41;;<br />  exit&#40; 1 &#41;;<br />&#125;<br /></code></dd></dl><br />Lo mismo para las imágenes.<br /><br />Suerte,<br />JJ (Geo).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Mar 16, 2007 1:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[astut]]></name></author>
<updated>2007-03-16T09:30:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=226#p226</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=226#p226"/>
<title type="html"><![CDATA[No me funcionan los metodos de imagen y texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=62&amp;p=226#p226"><![CDATA[
Hola a todos, pues ese es mi problema, he hecho 3 clases una para cada proposito, imagen para imagenes (sdl image), texto para textos (sdl ttf) y controlador para controlar diferentes cosas pero eso ya es aparte, las que no me funcionan son imagen y texto, aqui les dejo el main que es donde las utilizo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;Sdl/SDL.h&quot;<br />#include &quot;Sdl/SDL_image.h&quot;<br />#include &quot;clases/controlador/controlador.h&quot;<br />#include &quot;clases/imagen/imagen.h&quot;<br />#include &quot;clases/texto/texto.h&quot;<br />//variables//<br />bool bucle= true;<br />SDL_Surface* video;<br />SDL_Event evento;<br />//instancias//<br />CControlador controlador;<br />CImagen imagen;<br />CTexto texto&#40;&quot;fuentes/courier.ttf&quot;,12&#41;;<br />//programa//<br />int main&#40;int argc, char **argv&#41;<br />&#123;<br /> SDL_Init&#40;SDL_INIT_VIDEO&#41;;<br /> TTF_Init&#40;&#41;;<br /> imagen.Cargar&#40;0,&quot;graficos/Homosapiperro.jpg&quot;&#41;;<br /> video= SDL_SetVideoMode&#40;800,600,16,SDL_HWSURFACE|SDL_DOUBLEBUF&#41;;<br /> while &#40;bucle&#41;<br /> &#123;<br />  //aqui uso metodos de dibujado para imagen y texto//<br />  imagen.Dibujar&#40;video,0&#41;;<br />  texto.Dibujar&#40;&quot;hola mundo&quot;,video,30,40,200,100,50&#41;;<br />  while &#40;SDL_PollEvent&#40;&amp;evento&#41;&#41;<br />  &#123;<br />   if &#40;evento.type== SDL_KEYDOWN&#41;<br />   &#123;<br />    switch &#40;evento.key.keysym.sym&#41;<br />    &#123;<br />     case SDLK_ESCAPE:<br />      bucle= false;<br />     break;<br />    &#125;<br />   &#125;<br />  &#125;<br /> &#125;<br /> return 0;<br />&#125;</code></dd></dl><br />Aqui imagen.cpp:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;imagen.h&quot;<br />//--CONSTRUCTORES--//<br />CImagen::CImagen&#40;&#41;<br />&#123;<br /> fotocant= 0; fotoactu= 1; x= 0; y= 0;<br />&#125;<br />//--METODOS--//<br />//Cargar//<br />void CImagen::Cargar&#40;short delactu, char *directorio&#41;<br />&#123;<br /> if &#40;delactu== 0&#41;<br /> &#123;<br />  fotocant++;<br />  repositorio&#91;fotocant&#93;= IMG_Load&#40;directorio&#41;;<br /> &#125;<br /> else<br /> &#123;<br />  short n;<br />  for &#40;n= 1;n&lt; fotocant;n++&#41;<br />  &#123;<br />   SDL_FreeSurface&#40;repositorio&#91;n&#93;&#41;;<br />  &#125;<br />  fotocant= 1;<br />  repositorio&#91;fotocant&#93;= IMG_Load&#40;directorio&#41;;<br /> &#125;<br />&#125;<br />//Vaciar//<br />void CImagen::Vaciar&#40;&#41;<br />&#123;<br /> short n= 0;<br /> for &#40;n= 1;n&lt; fotocant;n++&#41;<br /> &#123;<br />  SDL_FreeSurface&#40;repositorio&#91;n&#93;&#41;;<br /> &#125;<br /> fotocant= 0;<br />&#125;<br />//Dibujar//<br />void CImagen::Dibujar&#40;SDL_Surface* lugar, short MtrFtg&#41;<br />&#123;<br /> SDL_Rect destino;<br /> destino.x= x;<br /> destino.y= y;<br /> if &#40;MtrFtg== 0&#41;<br /> &#123;<br />  SDL_BlitSurface&#40;repositorio&#91;fotoactu&#93;,NULL,lugar,&amp;destino&#41;;<br />  if &#40;fotocant&gt; 1&#41;<br />  &#123;<br />   if &#40;fotoactu!= fotocant&#41;<br />    fotoactu++;<br />   else<br />    fotoactu= 1;<br />  &#125;;<br /> &#125;<br /> else<br />  SDL_BlitSurface&#40;repositorio&#91;MtrFtg&#93;,NULL,lugar,&amp;destino&#41;;<br />&#125;</code></dd></dl><br />Y aqui texto.cpp:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;texto.h&quot;<br />//--CONSTRUCTORES--//<br />CTexto::CTexto&#40;const char *directorio,int tamano&#41;<br />&#123;<br /> fuente= TTF_OpenFont&#40;directorio,tamano&#41;;<br />&#125;<br />//--METODOS--//<br />//Dibujar//<br />void CTexto::Dibujar&#40;const char* ttexto,SDL_Surface* lugar,short x,short y,short fg1,short fg2,short fg3&#41;<br />&#123;<br /> fgcolor.r= fg1;<br /> fgcolor.g= fg2;<br /> fgcolor.b= fg3;<br /> bgcolor.r= 255;<br /> bgcolor.g= 0;<br /> bgcolor.b= 0;<br /> texto= TTF_RenderText_Shaded&#40;fuente,ttexto,fgcolor,bgcolor&#41;;<br /> posicion.x= x;<br /> posicion.y= y;<br /> SDL_BlitSurface&#40;texto,NULL,lugar,&amp;posicion&#41;;<br />&#125;</code></dd></dl><br />Los h. estan correctamente en estas dos clases al igual que al cargar la imagen y la fuente, aparte de eso me gustaria colaborar como programador en la comunidad aunque sea principiante, si esto es muy molesto les puedo dejar el enlace al proyecto, muchas gracias ^^<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=893">astut</a> — Vie Mar 16, 2007 9:30 am</p><hr />
]]></content>
</entry>
</feed>