<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=726" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-06-21T18:03:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=726</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-06-21T18:03:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3383#p3383</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3383#p3383"/>
<title type="html"><![CDATA[Problemas con el SDL_DisplayFormatAlpha]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3383#p3383"><![CDATA[
<ol style="list-style-type: decimal"><li>Asegúrate que hayas cargado correctamente la imagen sombra.PNG.</li><li>SDL_SetVideoMode debería ser llamada después de la inicialización de SDL. Por tanto, screen puede ser una variable global, pero no inicializarla al momento de su declaración.</li><li>Como Juanxo ya apuntó, si no vas a modificar el valor de transparencia de la imagen, con configurarlo una vez basta.</li><li>Si vas a asignar el mismo valor de transparencia a toda la imagen, utiliza <span style="font-weight: bold">SDL_SetAlpha</span>.</li></ol><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Jun 21, 2010 6:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-06-20T03:00:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3382#p3382</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3382#p3382"/>
<title type="html"><![CDATA[Problemas con el SDL_DisplayFormatAlpha]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3382#p3382"><![CDATA[
buenas drinor:<br /><br />Intenta lo siguiente:<br />En el main, primero inicializa todo (SDL_Init, etc)<br />Despues cargas la imagen y despues iluminas.<br /><br />No hace falta que ilumines cada frame, ya que no cambia ninguna condicion de m. Hazlo despues de cargar la imagen y listo<br /><br />El problema quizas se deba  a la SDL_Surface* screen.<br />Lo que pasa es que te has creado una variable global. En vez de eso, prueba a ponerla en el main despues de inicializar el video.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Jun 20, 2010 3:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DrioN]]></name></author>
<updated>2010-06-20T01:15:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3381#p3381</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3381#p3381"/>
<title type="html"><![CDATA[Problemas con el SDL_DisplayFormatAlpha]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3381#p3381"><![CDATA[
Aca esta el main simplemente carga una imagen.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />#include &lt;SDL&gt;<br />#include &lt;SDL_image&gt;<br />using namespace std;<br />#include &lt;extra&gt;<br /><br /><br />int main &#40; int argc, char** argv &#41;<br />&#123;<br />    int m&#91;640&#93;&#91;480&#93;;<br /><br />    SDL_Surface *oscuridad;<br />    SDL_Rect rfondo;<br /><br />    rfondo.x =0;<br />    rfondo.y =0;<br /><br />    ini_mi&#40;m,128&#41;;<br /><br />    oscuridad = IMG_Load &#40;&quot;sombra.PNG&quot;&#41;;<br /><br />    if &#40; SDL_Init&#40; SDL_INIT_VIDEO &#41;  &#60; 0 &#41;<br />    &#123;<br />        printf&#40; &quot;Unable to init SDL: %s\n&quot;, SDL_GetError&#40;&#41; &#41;;<br />        return 1;<br />    &#125;<br /><br />    atexit&#40;SDL_Quit&#41;;<br /><br />    bool done = false;<br />    while &#40;!done&#41;<br />    &#123;<br /><br />        SDL_Event event;<br />        while &#40;SDL_PollEvent&#40;&amp;event&#41;&#41;<br />        &#123;<br /><br />            switch &#40;event.type&#41;<br />            &#123;<br />            case SDL_QUIT:<br />                done = true;<br />                break;<br /><br />            case SDL_KEYDOWN:<br />                &#123;<br />                    if &#40;event.key.keysym.sym == SDLK_ESCAPE&#41;<br />                        done = true;<br />                    break;<br />                &#125;<br />            &#125;<br />        &#125;<br /><br />        SDL_FillRect&#40;screen, 0, SDL_MapRGB&#40;screen-&gt;format, 0, 0, 0&#41;&#41;;<br /><br />        oscuridad = iluminar&#40;m,oscuridad&#41;;<br /><br />        SDL_BlitSurface &#40;oscuridad,NULL,screen,&amp;rfondo&#41;;<br /><br /><br />        SDL_Flip&#40;screen&#41;;<br /><br />    &#125;<br /><br /><br />    printf&#40;&quot;Exited cleanly\n&quot;&#41;;<br />    return 0;<br />&#125;<br /></code></dd></dl><br /><br />Que es a la que le quiero dar una transparencia a cada pixel, en realidad quiro que sea distinta en cada uno pero para probar le asigno la misma a todos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2226">DrioN</a> — Dom Jun 20, 2010 1:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-06-20T00:56:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3380#p3380</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3380#p3380"/>
<title type="html"><![CDATA[Problemas con el SDL_DisplayFormatAlpha]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3380#p3380"><![CDATA[
Pon código que se pueda compilar y ejecutar, para facilitar que recibas ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br />La causa de un fallo de segmentación puede ser muy fácil o muy difícil de encontrar, si no podemos reproducir las condiciones bajo las que ejecutas se complica encontrarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Jun 20, 2010 12:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DrioN]]></name></author>
<updated>2010-06-20T00:33:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3379#p3379</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3379#p3379"/>
<title type="html"><![CDATA[Problemas con el SDL_DisplayFormatAlpha]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3379#p3379"><![CDATA[
Aca lo otro<br /><dl class="codebox"><dt>Code: </dt><dd><code><br />SDL_Surface *iluminar &#40;int m&#91;640&#93;&#91;480&#93;, SDL_Surface *mi&#41;&#123; //Funcion que modifica la imagen asignandole la transparencia a cada pixel<br />    int i,j;<br />    SDL_Surface *dst= SDL_DisplayFormatAlpha &#40;mi&#41;;  //-------&gt;Aca me tira Fallo de Segmento<br />    SDL_Color color;<br />    color.r = 0;<br />    color.g = 0;<br />    color.b = 0;<br /><br />    if &#40;SDL_MUSTLOCK &#40;mi&#41;&#41;<br />   &#123;<br />      if &#40;SDL_LockSurface &#40;mi&#41; &lt; 0&#41;<br />         return NULL;<br />   &#125;<br /><br />    for &#40;j=0;j&lt;640;j++&#41;&#123;<br />        for&#40;i=0;i&lt;480;i++&#41;&#123;<br />            color.unused = m&#91;j&#93;&#91;i&#93;;<br />            set_pixel_color &#40;dst,j,i,&amp;color&#41;;<br />        &#125;<br />    &#125;<br /><br />    if &#40;SDL_MUSTLOCK &#40;mi&#41;&#41;<br />        SDL_UnlockSurface &#40;mi&#41;;<br /><br />   return dst;<br />&#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2226">DrioN</a> — Dom Jun 20, 2010 12:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DrioN]]></name></author>
<updated>2010-06-20T00:31:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3378#p3378</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3378#p3378"/>
<title type="html"><![CDATA[Problemas con el SDL_DisplayFormatAlpha]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3378#p3378"><![CDATA[
Perdon, tienen razon me falta codigo aca les pongo la parte que se superpuso.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void ini_mi &#40;int m&#91;640&#93;&#91;480&#93;,int x&#41;&#123;  //Inicializa la matris que tendra los valores de transaprencia en cada parte.<br />    int i,j;<br />    for &#40;j=0;j&lt;640;j++&#41;&#123;<br />        for&#40;i=0;i&lt;480;i++&#41;<br />        &#123;<br />            m&#91;j&#93;&#91;i&#93;=x;<br />        &#125;<br />    &#125;<br />&#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2226">DrioN</a> — Dom Jun 20, 2010 12:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-06-19T23:13:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3377#p3377</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3377#p3377"/>
<title type="html"><![CDATA[Problemas con el SDL_DisplayFormatAlpha]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3377#p3377"><![CDATA[
Buenas Drion:<br /><br />Parece que te falta algo de codigo, ademas no veo donde cierran las llaves de este for:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>for &#40;j=0;j&lt;640;j++&#41;&#123;<br />        for&#40;i=0;i&lt;480&gt;Aca me tira Fallo de Segmento <br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Jun 19, 2010 11:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[DrioN]]></name></author>
<updated>2010-06-19T22:27:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3376#p3376</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3376#p3376"/>
<title type="html"><![CDATA[Problemas con el SDL_DisplayFormatAlpha]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=726&amp;p=3376#p3376"><![CDATA[
Hola a todos soy nuevo en el foro e intentando iniciarme en el desarrollo de videojuegos, estoy con C++ y SDL. <br /><br />Mi idea es hacer un sistemita de iluminacion pero no puedo hacerlo, ayer encontre un codigo en este lugar que modificaba el color de los pixel y como lo que habia intentado hacer no funciono intente usar parte de ese codigo, pero me tira error en el momento en que uso el SDL_DisplayFormatAlpha les dejo en codigo para que lo vean y si pueden ayudarme les estare agradecido.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* screen = SDL_SetVideoMode&#40;640, 480, 16,SDL_HWSURFACE|SDL_DOUBLEBUF&#41;;<br /><br />void put_pixel&#40;SDL_Surface *_ima, int x, int y, Uint32 pixel&#41;<br />&#123;<br />   int bpp = _ima-&gt;format-&gt;BytesPerPixel;<br />   Uint8 *p = &#40;Uint8 *&#41;_ima-&gt;pixels + y * _ima-&gt;pitch + x*bpp;<br /><br />   switch &#40;bpp&#41;<br />   &#123;<br />      case 1:<br />         *p = pixel;<br />         break;<br /><br />      case 2:<br />         *&#40;Uint16 *&#41;p = pixel;<br />         break;<br /><br />      case 3:<br />         if &#40;SDL_BYTEORDER == SDL_BIG_ENDIAN&#41;<br />         &#123;<br />            p&#91;0&#93;=&#40;pixel &gt;&gt; 16&#41; &amp; 0xff;<br />            p&#91;1&#93;=&#40;pixel &gt;&gt; 8&#41; &amp; 0xff;<br />            p&#91;2&#93;=pixel &amp; 0xff;<br />         &#125;<br />         else<br />         &#123;<br />            p&#91;0&#93;=pixel &amp; 0xff;<br />            p&#91;1&#93;=&#40;pixel &gt;&gt; 8&#41; &amp; 0xff;<br />            p&#91;2&#93;=&#40;pixel &gt;&gt; 16&#41; &amp; 0xff;<br />         &#125;<br />         break;<br /><br />      case 4:<br />         *&#40;Uint32 *&#41; p = pixel;<br />         break;<br />   &#125;<br />&#125;<br /><br />void get_pixel_color &#40;SDL_Surface * imagen, int x, int y, SDL_Color * color&#41;<br />&#123;<br />   int bpp = imagen-&gt;format-&gt;BytesPerPixel;<br />   Uint8 *p = &#40;Uint8 *&#41;imagen-&gt;pixels + y * imagen-&gt;pitch + x * bpp;<br /><br />   SDL_GetRGBA &#40;* &#40;Uint32 *&#41; p, imagen-&gt;format,<br />         &amp;&#40;color-&gt;r&#41;,<br />         &amp;&#40;color-&gt;g&#41;,<br />         &amp;&#40;color-&gt;b&#41;,<br />         &amp;&#40;color-&gt;unused&#41;<br />         &#41;;<br />&#125;<br /><br />void set_pixel_color &#40;SDL_Surface * imagen, int x, int y, SDL_Color * color&#41;<br />&#123;<br />   Uint32 pixel;<br /><br />   pixel = SDL_MapRGBA &#40;imagen-&gt;format, color-&gt;r, color-&gt;g, color-&gt;b,<br />         color-&gt;unused&#41;;<br /><br />   put_pixel &#40;imagen, x, y, pixel&#41;;<br />&#125;<br /><br />void ini_mi &#40;int m&#91;640&#93;&#91;480&#93;,int x&#41;&#123;  //Inicializa la matris que tendra los valores de transaprencia en cada parte.<br />    int i,j;<br />    for &#40;j=0;j&lt;640;j++&#41;&#123;<br />        for&#40;i=0;i&lt;480&gt;Aca me tira Fallo de Segmento<br />    SDL_Color color;<br />    color.r = 0;<br />    color.g = 0;<br />    color.b = 0;<br /><br />    if &#40;SDL_MUSTLOCK &#40;mi&#41;&#41;<br />   &#123;<br />      if &#40;SDL_LockSurface &#40;mi&#41; &lt; 0&#41;<br />         return NULL;<br />   &#125;<br /><br />    for &#40;j=0;j&lt;640;j++&#41;&#123;<br />        for&#40;i=0;i&lt;480;i++&#41;&#123;<br />            color.unused = m&#91;j&#93;&#91;i&#93;;<br />            set_pixel_color &#40;dst,j,i,&amp;color&#41;;<br />        &#125;<br />    &#125;<br /><br />    if &#40;SDL_MUSTLOCK &#40;mi&#41;&#41;<br />        SDL_UnlockSurface &#40;mi&#41;;<br /><br />   return dst;<br />&#125;</code></dd></dl><br /><br />Esta es el .h que estoy haciendo, la funcion iluminar recibe un PNG. Desde ya muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2226">DrioN</a> — Sab Jun 19, 2010 10:27 pm</p><hr />
]]></content>
</entry>
</feed>