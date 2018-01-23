<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=486" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-22T05:36:15+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=486</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-02-22T05:36:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2128#p2128</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2128#p2128"/>
<title type="html"><![CDATA[Efecto linterna (sdl)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2128#p2128"><![CDATA[
Precisamente, eso hice, crear mi propio tile.bmp <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />Gracias por el ejemplo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Feb 22, 2009 5:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-17T21:56:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2112#p2112</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2112#p2112"/>
<title type="html"><![CDATA[Efecto linterna (sdl)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2112#p2112"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br />Estaría bien que incluyeras el archivo tile.bmp para el ejemplo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /></div></blockquote><br />Tienes razón, pero la verdad es que eso me resulta bastante complicado ya que tendría que buscar algún servidor donde alojarlo.<br />Para facilitar la tarea al lector, creé el código de manera genérica para que pudiera funcionar con cualquier tamaño. Suponiendo que todos tenemos algún bmp a mano.<br /><dl class="codebox"><dt>Code: </dt><dd><code>    SDL_Surface *tile = SDL_DisplayFormat&#40;SDL_LoadBMP&#40;&quot;tile.bmp&quot;&#41;&#41;; <br />    SDL_Surface *image = SDL_DisplayFormat&#40;SDL_CreateRGBSurface&#40;SDL_HWSURFACE, S_W, S_H, 16, 0, 0, 0, 0&#41;&#41;;<br />    for &#40;int i = 0; i &lt;= image-&gt;h/tile-&gt;h; ++i&#41; &#123;<br />        for &#40;int j = 0; j &lt;= image-&gt;w/tile-&gt;w; ++j&#41; &#123;<br />            SDL_Rect dest;<br />            dest.x = j*tile-&gt;w;<br />            dest.y = i*tile-&gt;h;<br />            SDL_BlitSurface&#40;tile, NULL, image, &amp;dest&#41;;<br />        &#125;<br />    &#125;</code></dd></dl><br /><br />Saludos y disculpen las molestias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Feb 17, 2009 9:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-02-17T00:53:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2111#p2111</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2111#p2111"/>
<title type="html"><![CDATA[Efecto linterna (sdl)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2111#p2111"><![CDATA[
Estaría bien que incluyeras el archivo tile.bmp para el ejemplo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Feb 17, 2009 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-15T17:18:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2107#p2107</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2107#p2107"/>
<title type="html"><![CDATA[Efecto linterna (sdl)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=486&amp;p=2107#p2107"><![CDATA[
En este ejemplo, se intenta conseguir un efecto linterna. Para conseguirlo, simplemente se utiliza una matriz del tipo bool que actúa de máscara de bits. En esta matriz, se ponen a true ciertos valores dibujando una circunferencia dada la posición en la que se encuentra el ratón en cada frame. A la hora de imprimir la imagen de fondo, se comprueba píxel por píxel si está activada su misma posición en la matriz. En caso afirmativo, se copia el píxel a la pantalla. En caso contrario, se pone el píxel de la pantalla a negro.<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />#include &lt;SDL/SDL.h&gt;<br />using namespace std;<br /><br />#define S_W 800<br />#define S_H 600<br /><br /><br />void draw_circle&#40;bool m&#91;S_H&#93;&#91;S_W&#93;, int x, int y, int r&#41; &#123;<br />    int i = r;<br />    int j = 0;<br />    int d = 3 - 2*r;<br />    while &#40;j &lt;= i&#41; &#123;<br />        for &#40;int ii = 0; ii &lt;= i and y+ii &lt; S_H and x+j &lt; S_W; ++ii&#41;<br />            m&#91;y+ii&#93;&#91;x+j&#93; = true;<br />        for &#40;int ii = 0; ii &lt;= i and y+ii &lt; S_H and x-j &gt;= 0; ++ii&#41;<br />            m&#91;y+ii&#93;&#91;x-j&#93; = true;<br />        for &#40;int ii = 0; ii &lt;= i and y-ii &gt;= 0 and x+j &lt; S_W; ++ii&#41;<br />            m&#91;y-ii&#93;&#91;x+j&#93; = true;<br />        for &#40;int ii = 0; ii &lt;= i and y-ii &gt;= 0 and x-j &gt;= 0; ++ii&#41;<br />            m&#91;y-ii&#93;&#91;x-j&#93; = true;<br /><br />        for &#40;int jj = 0; jj &lt;= j and y+jj &lt; S_H and x+i &lt; S_W; ++jj&#41;<br />            m&#91;y+jj&#93;&#91;x+i&#93; = true;<br />        for &#40;int jj = 0; jj &lt;= j and y+jj &lt; S_H and x-i &gt;= 0; ++jj&#41;<br />            m&#91;y+jj&#93;&#91;x-i&#93; = true;<br />        for &#40;int jj = 0; jj &lt;= j and y-jj &gt;= 0 and x+i &lt; S_W; ++jj&#41;<br />            m&#91;y-jj&#93;&#91;x+i&#93; = true;<br />        for &#40;int jj = 0; jj &lt;= j and y-jj &gt;= 0 and x-i &gt;= 0; ++jj&#41;<br />            m&#91;y-jj&#93;&#91;x-i&#93; = true;<br />        ++j;<br />        if &#40;d &lt; 0&#41; d = d + 4*j + 6;<br />        else &#123;<br />            d = d + 4*&#40;j - i&#41; + 10;<br />            --i;<br />        &#125;<br />    &#125;<br />&#125;<br /><br />void blit_bitmask&#40;SDL_Surface *dest, SDL_Surface *sour, bool m&#91;S_H&#93;&#91;S_W&#93;&#41; &#123;<br />    Uint32 bpp = dest-&gt;format-&gt;BytesPerPixel;<br />    Uint32 black = SDL_MapRGB&#40;dest-&gt;format, 0, 0, 0&#41;;<br />    Uint8 *pdest = &#40;Uint8 *&#41; dest-&gt;pixels;<br />    Uint8 *psour = &#40;Uint8 *&#41; sour-&gt;pixels;<br />    for &#40;int i = 0; i &lt; S_H; ++i&#41; &#123;<br />        for &#40;int j = 0; j &lt; S_W; ++j&#41; &#123;<br />             if &#40;m&#91;i&#93;&#91;j&#93;&#41; memcpy&#40;pdest, psour, bpp&#41;;<br />             else memcpy&#40;pdest, &amp;black, bpp&#41;;<br />             pdest += bpp;<br />             psour += bpp;<br />        &#125;<br />    &#125;<br />&#125;<br /><br />int main&#40;int argc, char** argv&#41; &#123;<br />    cerr &lt;&lt; SDL_Init&#40;SDL_INIT_VIDEO&#41;;<br />    SDL_Surface *screen = SDL_SetVideoMode&#40;S_W, S_H, 16, SDL_HWSURFACE&#41;;<br />    SDL_ShowCursor&#40;SDL_DISABLE&#41;;<br /><br />    SDL_Surface *tile = SDL_DisplayFormat&#40;SDL_LoadBMP&#40;&quot;tile.bmp&quot;&#41;&#41;;<br />    SDL_Surface *image = SDL_DisplayFormat&#40;SDL_CreateRGBSurface&#40;SDL_HWSURFACE, S_W, S_H, 16, 0, 0, 0, 0&#41;&#41;;<br />    for &#40;int i = 0; i &lt;= image-&gt;h/tile-&gt;h; ++i&#41; &#123;<br />        for &#40;int j = 0; j &lt;= image-&gt;w/tile-&gt;w; ++j&#41; &#123;<br />            SDL_Rect dest;<br />            dest.x = j*tile-&gt;w;<br />            dest.y = i*tile-&gt;h;<br />            SDL_BlitSurface&#40;tile, NULL, image, &amp;dest&#41;;<br />        &#125;<br />    &#125;<br /><br />    SDL_Event event;<br />    bool salir = false;<br />    while&#40;not salir&#41; &#123;<br />        bool bitmask&#91;S_H&#93;&#91;S_W&#93;;<br />        memset&#40;bitmask, 0, S_H*S_W*sizeof&#40;bool&#41;&#41;;<br /><br />        int x, y;<br />        SDL_GetMouseState&#40;&amp;x, &amp;y&#41;;<br />        draw_circle&#40;bitmask, x, y, 49&#41;;<br />        while &#40;SDL_PollEvent&#40;&amp;event&#41;&#41; &#123;<br />            switch &#40;event.type&#41; &#123;<br />                case SDL_KEYDOWN:<br />                    salir = true;<br />                break;<br />                case SDL_QUIT:<br />                    salir = true;<br />                break;<br />            &#125;<br />        &#125;<br />        int t0 = SDL_GetTicks&#40;&#41;;<br />        blit_bitmask&#40;screen, image, bitmask&#41;;<br />        int t1 = SDL_GetTicks&#40;&#41;;<br />        cerr &lt;&lt; &quot;\rt. blit: &quot; &lt;&lt; t1-t0 &lt;&lt; &quot;  &quot;;<br />        SDL_Flip&#40;screen&#41;;<br />        SDL_Delay&#40;2&#41;;<br />    &#125;<br />    cerr &lt;&lt; endl;<br />    SDL_Quit&#40;&#41;;<br />&#125;<br /></code></dd></dl><br /><br />Es probable que haya errores ya que recién comienzo con el tema de SDL y blit a bajo nivel. Si veis algo raro, no dudeis en avisar.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Feb 15, 2009 5:18 pm</p><hr />
]]></content>
</entry>
</feed>