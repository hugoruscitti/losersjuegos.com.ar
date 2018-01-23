<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1270" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-11T01:14:49+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1270</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-10-11T01:14:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1270&amp;p=6087#p6087</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1270&amp;p=6087#p6087"/>
<title type="html"><![CDATA[Re: Por que no funciona transparencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1270&amp;p=6087#p6087"><![CDATA[
hace un montón que no toco SDL, pero si no me equivoco tu problema está en la pantalla:<br /><br /><pre class="prettyprint">screen=SDL_SetVideoMode&#40;740,600,24, SDL_HWSURFACE&#41;;</pre><br />el tercer parámetro de esa función es el numero de bits por pixel. Teniendo en cuenta que cada color son 8 bits (RGB A) en tu caso solo usas los 24/8 = 3 primeros canales (RGB) por lo que no puedes usar transparencias. Prueba a subir ese número a 32<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Oct 11, 2011 1:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kainz]]></name></author>
<updated>2011-09-14T22:56:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1270&amp;p=5927#p5927</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1270&amp;p=5927#p5927"/>
<title type="html"><![CDATA[Por que no funciona transparencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1270&amp;p=5927#p5927"><![CDATA[
Veran, antes que nada el codigo:<br /><blockquote class="uncited"><div><br /><pre class="prettyprint">#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_image.h&gt;<br />int main&#40;int argc, char *argv[]&#41;  {<br />    int done=0;<br />    SDL_Surface *screen;<br />    SDL_Surface *escenario01;<br />    SDL_Surface *texto1;<br />    SDL_Surface *fondo;<br />    SDL_Surface *tu;<br />    SDL_Surface *flecha1;<br />    SDL_Surface *flecha2;<br />    SDL_Rect dest;<br />    SDL_Event event;<br />///////////////////////////////////////<br />if &#40;SDL_Init&#40;SDL_INIT_VIDEO&#41;==-1&#41; {<br />printf&#40;&quot;No se pudo iniciar el juego Triox-Informer, ahorcado errores: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />SDL_Quit&#40;&#41;;<br />exit&#40;-1&#41;;<br />}<br />///////////////////////////////////<br />screen=SDL_SetVideoMode&#40;740,600,24, SDL_HWSURFACE&#41;;<br />//////////////////////////////////<br />SDL_ShowCursor&#40;SDL_DISABLE&#41;;<br />///////////////////////////////////<br />escenario01=IMG_Load &#40;&quot;scenario/scenario01.png&quot;&#41;;<br />tu=IMG_Load&#40;&quot;sprites/tu.png&quot;&#41;;<br />texto1=IMG_Load&#40;&quot;textos/texto1.png&quot;&#41;;<br />fondo=IMG_Load&#40;&quot;fondo.png&quot;&#41;;<br />flecha1=IMG_Load&#40;&quot;flecha.png&quot;&#41;;<br />flecha2=IMG_Load&#40;&quot;flecha.png&quot;&#41;;<br />///////////////////////////////////<br />dest.x=89;<br />dest.y=100;<br />SDL_BlitSurface&#40;escenario01,NULL,screen,&amp;dest&#41;;<br />SDL_Flip&#40;screen&#41;;<br />dest.x=237;<br />dest.y=243;<br />SDL_SetColorKey&#40;tu,SDL_SRCCOLORKEY,SDL_MapRGBA&#40;tu-&gt;format,153,153,153,0&#41;&#41;;<br />SDL_BlitSurface&#40;tu,NULL,screen,&amp;dest&#41;;<br />SDL_Flip&#40;screen&#41;;</pre><br /></div></blockquote><br /><br />como podran ver ha una imagen con transparencia, (es un gris un poco ams fuerte del que te trae paint)<br />en el cuentagotas de paint sale asi:<br />Matiz:160                            Rojo:153<br />Sat:0                                  Verde:153     <br />Llum:144                              Azul:153<br /><br />pero el caso es que la transparencia no funciona, se queda con el gris, no se que hacer<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2486">Kainz</a> — Mié Sep 14, 2011 10:56 pm</p><hr />
]]></content>
</entry>
</feed>