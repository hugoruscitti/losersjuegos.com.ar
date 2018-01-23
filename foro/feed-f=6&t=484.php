<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=484" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-14T22:07:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=484</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-14T22:07:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=484&amp;p=2105#p2105</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=484&amp;p=2105#p2105"/>
<title type="html"><![CDATA[Duda con medida de puntero a píxel (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=484&amp;p=2105#p2105"><![CDATA[
Vale, creo que ya lo he entendido. Es porque se utiliza la medida BytesPerPixel (y como un byte son 8 bits...) para el desplazamiento de puntero. ¿No?<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Feb 14, 2009 10:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-14T17:59:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=484&amp;p=2103#p2103</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=484&amp;p=2103#p2103"/>
<title type="html"><![CDATA[Duda con medida de puntero a píxel (SDL)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=484&amp;p=2103#p2103"><![CDATA[
Hace unos días que me he comenzado a interesar por el manejo gráfico a bajo nivel. Busqué información y encontré el capítulo 1 del tutorial de RCAF de esta misma web. Lo he ido siguiendo y he conseguido hacer un ejemplo muy simple. Pero el problema que tengo es conceptual. En el tutorial se utiliza un Uint8 (char) y a mí también me funciona así pero no entiendo por qué es de 8 y no de 16 si la superficie tiene 16 bits por píxel y por lo tanto el color también está en 16 bits.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />#include &lt;SDL/SDL.h&gt;<br />using namespace std;<br /><br />long long db&#40;int n&#41; &#123;<br />    if &#40;n &gt; 0&#41; return db&#40;n/2&#41;*10 + n%2;<br />    return 0;<br />&#125;<br /><br />void putpixel&#40;SDL_Surface *surface, int x, int y, SDL_Color color&#41; &#123;<br />    //SDL_LockSurface&#40;surface&#41;;<br />    Uint32 col = SDL_MapRGB&#40;surface-&gt;format, color.r, color.g, color.b&#41;;<br />    cerr &lt;&lt; &quot;col: &quot; &lt;&lt; db&#40;col&#41; &lt;&lt; endl;<br />    Uint8 *buffer;<br />    buffer = &#40;Uint8*&#41; surface-&gt;pixels;<br />    buffer += surface-&gt;pitch*y;<br />    buffer += surface-&gt;format-&gt;BytesPerPixel*x;<br />    memcpy&#40;buffer, &amp;col, surface-&gt;format-&gt;BytesPerPixel&#41;;<br />    //*buffer = col;<br />    //SDL_UnlockSurface&#40;surface&#41;;<br />&#125;<br /><br />int main&#40;&#41; &#123;<br />    SDL_Init&#40;SDL_INIT_VIDEO&#41;;<br />    SDL_Surface *screen = SDL_SetVideoMode&#40;640, 400, 16, SDL_HWSURFACE&#41;;<br />    cerr &lt;&lt; &quot;Bitspp: &quot; &lt;&lt; screen-&gt;format-&gt;BitsPerPixel*1 &lt;&lt; endl;<br />    SDL_Color color;<br />    color.r = 255;<br />    color.g = 0;<br />    color.b = 0;<br />    for &#40;int i = 0; i &lt; 15; ++i&#41; &#123;<br />        putpixel&#40;screen, i, i, color&#41;;<br />        putpixel&#40;screen, i, i+1, color&#41;;<br />        putpixel&#40;screen, i, i+2, color&#41;;<br />    &#125;<br />    SDL_Event event;<br />    bool salir;<br />    while&#40;not salir&#41; &#123;<br />        while &#40;SDL_PollEvent&#40;&amp;event&#41;&#41; &#123;<br />            if &#40;event.type == SDL_KEYDOWN&#41; salir = true;<br />            else SDL_Flip&#40;screen&#41;;<br />        &#125;<br />    &#125;<br />    SDL_Quit&#40;&#41;;<br />&#125;</code></dd></dl><br /><br />Saludos y gracias de antemano y a RCAF por el manual que me ha ayudado en mis primeros pasos con píxeles.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Feb 14, 2009 5:59 pm</p><hr />
]]></content>
</entry>
</feed>