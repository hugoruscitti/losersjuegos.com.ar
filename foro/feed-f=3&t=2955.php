<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=2955" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-12-02T20:37:03+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=2955</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-12-02T20:37:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9015#p9015</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9015#p9015"/>
<title type="html"><![CDATA[Re: Bump Map 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9015#p9015"><![CDATA[
Barajas, seria bien util que tuvieses un repositorio en bitbucket con todos los ejemplos y codigos fuentes de tus proyectos que haces. ¿Tu manejas las tecnicas de screen scrolling? porqué de verdad me gustaria conocer la tecnica en python...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Dic 02, 2012 8:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-12-02T06:15:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9011#p9011</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9011#p9011"/>
<title type="html"><![CDATA[Bump Map 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9011#p9011"><![CDATA[
Aquí dejo un ejemplo simple de como hacer BumpMap en 2D<br /><br /> <a href="http://www.youtube.com/v/http://www.youtube.com/watch?v=tbqsYYnsAIA&amp;feature=youtu.be"></param><param target="_blank"><strong>object</strong></a> <br /><!-- m --><a class="postlink" href="http://www.youtube.com/watch?v=tbqsYYnsAIA&amp;feature=youtu.be">http://www.youtube.com/watch?v=tbqsYYns ... e=youtu.be</a><!-- m --><br /><br />El truco esta en esta función:<br /><br /><pre class="prettyprint">//Esto coloca el mapa en pantalla...<br />// Mapa de relieve, pantalla, posición x de la luz, posición y de la luz.<br />void RBumpmap&#40;SDL_Surface *bumpmap,SDL_Surface * screen, int LX=0,int LY=0&#41;{<br />    int x, y, dx, dy, intensidad,color;<br />   //recorremos el mapa de relieve completamente...<br />    for&#40;y = 1; y &lt;&#40;bumpmap-&gt;h&#41;-1; y++ &#41;{<br />        for&#40; x = 1; x &lt;&#40;bumpmap-&gt;w&#41;-1; x++ &#41;{<br />            //revisamos la diferencia entre el color del pixeles con respecto al pixel actual.<br />            dx = &#40;getpixel&#40;bumpmap,x+1,y&#41;&gt;&gt;16&#41; - &#40;getpixel&#40;bumpmap,x-1,y&#41;&gt;&gt;16&#41;;<br />            dy = &#40;getpixel&#40;bumpmap,x,y+1&#41;&gt;&gt;16&#41; - &#40;getpixel&#40;bumpmap,x,y-1&#41;&gt;&gt;16&#41;;<br />            //esto dibuja la luz en la posición dada...<br />            dx = dx - &#40; LX - x&#41;;<br />            dy = dy - &#40; LY - y&#41;;<br />            //si la distancia de la diferencia con el punto donde se encuentra la luz<br />            //es mayor a 256 píxeles, la intensidad de la luz es 0.<br />            if &#40; sqrt&#40;dx*dx+dy*dy&#41; &gt; 256 &#41; {<br />                intensidad = 0;<br />                }<br />            //caso contrario, la distancia nos servira para decirnos que tan &quot;blanca&quot; sera la luz<br />            //entre más cercana, mas blanca.<br />            else{<br />                intensidad = 255-sqrt&#40;dx*dx+dy*dy&#41;;<br />                }<br />            //lo transformamos a un color entero...<br />            color = RGBtoINT&#40;intensidad,intensidad,intensidad&#41;;<br />            //y lo ponemos en pantalla...<br />            putpixel&#40;screen,x,y,color&#41;;<br />            }<br />        }<br />    };<br /><br />//las funciones utilizadas por la función...<br /><br />//colorea un pixel de un color entero...<br />void putpixel&#40;SDL_Surface *screen, int x, int y, int color&#41;{<br />    int w =  screen-&gt;w;<br />    int h = screen-&gt;h;<br />    if &#40; &#40; &#40;x&lt;w&#41;&amp;&amp;&#40;x&gt;=0&#41; &#41; &amp;&amp; &#40; &#40;y&lt;h&#41;&amp;&amp;&#40;y&gt;=0&#41; &#41; &#41;{<br />        SDL_LockSurface&#40;screen&#41;;<br />        unsigned int *ptr = &#40;unsigned int*&#41;screen-&gt;pixels;<br />        int lineoffset = y * &#40;screen-&gt;pitch / 4&#41;;<br />        ptr[lineoffset + x] = color;<br />        SDL_UnlockSurface&#40;screen&#41;;<br />        }<br />    }<br /><br />//toma el color de un pixel <br />int getpixel&#40; SDL_Surface *surface, int x, int y &#41;{<br />    Uint32 *pixels = &#40;Uint32 *&#41;surface-&gt;pixels;    <br />    return pixels[ &#40; y * surface-&gt;w &#41; + x ];<br />    }<br /><br />//transforma un color RGB a entero...<br />Uint32 RGBtoINT&#40;int r, int g, int b&#41;{<br />    return &#40;r &lt;&lt; 16 &#41; | &#40;g &lt;&lt; 8 &#41; | b;<br />    }</pre><br /><br />La explicación técnica (en ingles) esta aquí: <!-- m --><a class="postlink" href="http://www.flipcode.com/archives/The_Art_of_Demomaking-Issue_07_Bump_Mapping.shtml">http://www.flipcode.com/archives/The_Ar ... ping.shtml</a><!-- m --><br />Espero que les sea útil <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Dic 02, 2012 6:15 am</p><hr />
]]></content>
</entry>
</feed>