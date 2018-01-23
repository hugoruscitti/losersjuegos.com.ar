<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=142" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-05-16T21:18:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=142</id>
<entry>
<author><name><![CDATA[KANJI]]></name></author>
<updated>2008-05-16T21:18:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=1401#p1401</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=1401#p1401"/>
<title type="html"><![CDATA[SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=1401#p1401"><![CDATA[
Ke bien, ahora sii<br /><br />Gracias xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1846">KANJI</a> — Vie May 16, 2008 9:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-11-19T14:49:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=690#p690</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=690#p690"/>
<title type="html"><![CDATA[Duda en SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=690#p690"><![CDATA[
<blockquote><div><cite>Juan Carlos escribió:</cite><br />Si la memoria no me falla, yo ya habia escrito algo con &quot;Solid&quot; y no habia tenido problemas pero lo hice en Windows. Sera el linux, el conflictivo?<br /></div></blockquote><br /><br />Saludos, probé el programa en Ubuntu 7.10 y funcionó<br />correctamente. No tuve tiempo de probarlo en otra distribución, <br />pero entiendo que debería funcionar correctamente.<br /><br />  <img src="http://www.losersjuegos.com.ar/incoming/descargas/20071119/texto.png" alt="Imagen" /><br /><br />Te dejo una versión un poco modificada, hace lo mismo en realidad:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_ttf.h&gt;<br /><br />int main&#40;int argc, char* argv&#91;&#93;&#41;<br />&#123;<br />    int done = 0;<br />    SDL_Surface * pantalla;<br />    SDL_Surface * tmp;<br />    TTF_Font * font;<br />    SDL_Event event;<br />    SDL_Color Color2 = &#123;200, 47, 215, 0&#125;;<br />    SDL_Color Color3 = &#123;0, 0, 255, 0&#125;;<br />    SDL_Rect rect = &#123;0, 100, 0, 0&#125;;<br /><br /><br />    if &#40;SDL_Init&#40;SDL_INIT_VIDEO&#41;&#41;<br />    &#123;<br />        printf&#40;&quot;No se puede iniciar SDL: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />        return 1;<br />    &#125;<br /><br />    if &#40;TTF_Init&#40;&#41;&#41;<br />    &#123;<br />        printf&#40;&quot;No se puede iniciar TTF: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />        return 1;<br />    &#125;<br /><br />    pantalla = SDL_SetVideoMode&#40;320, 240, 16, 0&#41;;<br />    font = TTF_OpenFont&#40;&quot;font.ttf&quot;, 24&#41;;<br /><br />    rect.w = 20;<br />    tmp = TTF_RenderText_Solid&#40;font, &quot;hola 1&quot;, Color2&#41;;<br />    SDL_BlitSurface&#40;tmp, NULL, pantalla, &amp;rect&#41;;<br /><br />    rect.x = 120;<br />    tmp = TTF_RenderText_Shaded&#40;font, &quot;hola 2&quot;, Color2, Color3&#41;;<br />    SDL_BlitSurface&#40;tmp, NULL, pantalla, &amp;rect&#41;;<br /><br />    rect.x = 230;<br />    tmp = TTF_RenderText_Blended&#40;font, &quot;hola 3&quot;, Color2&#41;;<br />    SDL_BlitSurface&#40;tmp, NULL, pantalla, &amp;rect&#41;;<br /><br />    SDL_Flip&#40;pantalla&#41;;<br /><br />    TTF_CloseFont&#40;font&#41;;<br />    TTF_Quit&#40;&#41;;<br /><br />    while &#40;! done&#41;<br />    &#123;<br />        SDL_WaitEvent&#40;&amp; event&#41;;<br /><br />        if &#40;event.type == SDL_KEYDOWN || event.type == SDL_QUIT&#41;<br />            done = 1;<br />    &#125;<br /><br />    return 0;<br />&#125;</code></dd></dl><br /><br /><br />y su Makefile (si el archivo anterior se llama &quot;texto.c&quot;):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>CFLAGS= `sdl-config --cflags` -Wall<br />LDFLAGS=`sdl-config --libs` -lSDL_ttf<br /><br />texto: texto.o</code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 19, 2007 2:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-11-19T14:41:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=689#p689</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=689#p689"/>
<title type="html"><![CDATA[Duda en SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=689#p689"><![CDATA[
<blockquote><div><cite>KANJI escribió:</cite><br />TENGO EL MISMO PROBLEMA, PERO A MI NO ME SALE EL TEXTO EN NINGUNO DE LOS TRES PROCEDIMIENTOS, (TRABAJO EN WINDOWS)<br /></div></blockquote><br /><br />Para que el ejemplo que envió Juan Carlos funcione, hace falta<br />tener un archivo adicional llamado &quot;font.ttf&quot;, es probable que<br />al momento de probar el programa no hallas tenido ese archivo, <br />¿puede ser?.<br /><br />Te dejo un vínculo a un archivo de las mismas características:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/incoming/descargas/20071119/font.ttf">http://www.losersjuegos.com.ar/incoming ... 9/font.ttf</a><!-- m --><br /><br />de todas formas, si el problema que tienes es ese, el programa<br />debería imprimir un mensaje por un terminal de texto. Procura<br />tener un terminal de texto en donde se vean los mensajes creados<br />con &quot;printf&quot;, eso siempre es útil.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Nov 19, 2007 2:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[KANJI]]></name></author>
<updated>2007-11-18T19:13:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=687#p687</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=687#p687"/>
<title type="html"><![CDATA[Duda en SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=687#p687"><![CDATA[
TENGO EL MISMO PROBLEMA, PERO A MI NO ME SALE EL TEXTO EN NINGUNO DE LOS TRES PROCEDIMIENTOS, (TRABAJO EN WINDOWS)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1846">KANJI</a> — Dom Nov 18, 2007 7:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-08-22T13:02:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=491#p491</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=491#p491"/>
<title type="html"><![CDATA[Duda en SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=491#p491"><![CDATA[
Yo ahora estoy en Ubuntu, y el amule esta demasiado motivado descargando y no lo quiero apagar. Dentro de unas hora lo voy a probar en Windows. <br />Si la memoria no me falla, yo ya habia escrito algo con &quot;Solid&quot; y no habia tenido problemas pero lo hice en Windows. Sera el linux, el conflictivo?<br /><br />Como dato, tengo Ubuntu 7.04 - Feisty Fawn -<br />Y tengo Gnome 2.18.1<br /><br />Saludos<br /><br />EDITO: Compile el programa en windows y la funcion &quot;solid&quot; funciona a la perfeccion. Supongo que sera un fallo entre SDL y Linux<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mié Ago 22, 2007 1:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2007-08-22T12:32:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=490#p490</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=490#p490"/>
<title type="html"><![CDATA[Duda en SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=490#p490"><![CDATA[
<img src="http://img337.imageshack.us/img337/6544/capturatq3.png" alt="Imagen" /><br />By <a href="http://profile.imageshack.us/user/geomx" class="postlink">geomx</a> at 2007-08-22<br /><br />Lo probé en Windows, con las mismas versiones de SDL y de SDL_ttf. El único cambio que hice fué este (pero no tiene que ver con el problema, sólo para ubicar en otra posición la salida de texto):<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Rect rect=&#123;100, 500, 0, 0&#125;;<br /></code></dd></dl><br /><br />Si puedo más tarde lo pruebo en Ubuntu <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Ago 22, 2007 12:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-08-21T00:29:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=486#p486</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=486#p486"/>
<title type="html"><![CDATA[Duda en SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=486#p486"><![CDATA[
Pues en teoria deberia escribirse tres veces &quot;hola mmm&quot; pero solo lo hace 2 veces, fallando en la primera funcion. La verdad es que no lo entiendo.<br /><br />Por si las dudas, la version de SDL es 1.2.11 y la de SDL_TTF es 2.0.8 y ejecuto el programa en linux ubuntu<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mar Ago 21, 2007 12:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2007-08-20T23:35:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=485#p485</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=485#p485"/>
<title type="html"><![CDATA[Duda en SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=485#p485"><![CDATA[
¿A qué te refieres con que no funciona? ¿Qué hace/no hace?<br /><br />Yo lo probé y no tuve problemas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Ago 20, 2007 11:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-08-20T23:04:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=484#p484</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=484#p484"/>
<title type="html"><![CDATA[Duda en SDL_TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=142&amp;p=484#p484"><![CDATA[
Hola, tengo la siguiente duda. escribo una misma frase en SDL con SDL_TTF de tres maneras distintas pero una de ellas (TTF_RenderText_Solid()) no funciona y no se porque. <br />Aqui les paso el codigo completo en el que se presenta el error. Disculpen la desprolijidad del codigo que les muestro, lo fabrique rapidamente para mostrar el hecho puntual de mi duda. <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_ttf.h&gt;<br /><br />int main&#40;int argc, char* argv&#91;&#93;&#41;<br />&#123;<br /><br />      SDL_Surface *pantalla;<br />   if&#40;SDL_Init&#40;SDL_INIT_VIDEO&#41;!=0&#41;<br />      &#123;<br />       printf&#40;&quot;No se puede INICIAR SDL: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />      &#125;<br />   if&#40;TTF_Init&#40;&#41;!=0&#41;<br />      &#123;<br />      printf&#40;&quot;No se puede INICIAR TTF: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />      &#125;<br /><br /><br />pantalla=SDL_SetVideoMode&#40;800,600,24,SDL_HWSURFACE|SDL_DOUBLEBUF&#41;;<br /><br />TTF_Font *Arial12=TTF_OpenFont&#40;&quot;font.ttf&quot;, 24&#41;;<br />SDL_Event event;<br />int done=0;<br /><br />SDL_Color Color2=&#123;200,47,215,0&#125;;<br />SDL_Color Color3=&#123;0,0,255,0&#125;;<br /><br />SDL_Rect rect=&#123;600, 500, 0, 0&#125;;<br /><br />SDL_BlitSurface&#40;TTF_RenderText_Solid&#40;Arial12,&quot;hola mmm&quot;,Color2&#41;, NULL, pantalla, &amp;rect&#41;;<br /><br />rect.x=300;<br />SDL_BlitSurface&#40;TTF_RenderText_Shaded&#40;Arial12,&quot;hola mmm&quot;,Color2, Color3&#41;, NULL, pantalla, &amp;rect&#41;;<br /><br />rect.x=500;<br />SDL_BlitSurface&#40;TTF_RenderText_Blended&#40;Arial12,&quot;hola mmm&quot;,Color2&#41;, NULL, pantalla, &amp;rect&#41;;<br /><br />SDL_Flip&#40;pantalla&#41;;<br /><br /> TTF_CloseFont&#40;Arial12&#41;;<br /><br /> TTF_Quit&#40;&#41;;<br /><br />while&#40;done == 0&#41; &#123;<br />   while &#40; SDL_PollEvent&#40;&amp;event&#41; &#41; &#123;<br />      if &#40; event.type == SDL_KEYDOWN &#41;<br />         done = 1;<br />   &#125;<br />&#125;<br />&#125;<br /></code></dd></dl><br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Lun Ago 20, 2007 11:04 pm</p><hr />
]]></content>
</entry>
</feed>