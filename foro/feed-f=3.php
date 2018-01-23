<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2014-03-29T20:02:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3</id>
<entry>
<author><name><![CDATA[AdaelRuiz]]></name></author>
<updated>2014-03-29T20:02:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3058&amp;p=9318#p9318</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3058&amp;p=9318#p9318"/>
<title type="html"><![CDATA[Ejemplos • Ayuda con almacenamiento de item para un juego]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3058&amp;p=9318#p9318"><![CDATA[
Hola comunidad, como están? ando dando mis primeros pasos en el engine de pygame, y el primer proyecto que ando haciendo es un juego rpg, pero en papel tengo una lista enorme de armas, hechizos y equipo, etc, pero para ser sincero no tengo la menor idea de como poder almacenar eso y posterior mente usarlo en el juego, ¿alguien me pueden dar una idea para poder hacerlo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3143">AdaelRuiz</a> — Sab Mar 29, 2014 8:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-29T15:41:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3027&amp;p=9264#p9264</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3027&amp;p=9264#p9264"/>
<title type="html"><![CDATA[Ejemplos • convertidor de archivos csv a mapa binario]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3027&amp;p=9264#p9264"><![CDATA[
Este convertidor lo que hace es convertir (valga la redundancia) archivos csv separados por comas, espacios u otro caracter, a un formato binario igual al .map del mappy.<br />Es muy util cuando guardamos un tilemap hecho con tiled, y queremos convertirlo a un .map. <br />Para que el tiled guarde el mapa como un csv, tenemos que ir al menú preferencias-&gt;almacenar la capa de patrones como-&gt;csv<br /><br />Este es el readme, está incluido en la cabecera del .c (funciona en linux):<br /><br />        Convertidor de archivos csv separados por comas o caracteres, o espacios a formato binario<br /><br />Para convertir tilemaps hechos con csv, a el formato binario del mappy <br /><br />para compilar desde linea de comando, tipear:<br />gcc -o csvconv csvconv.c<br /><br />usage:csvconv [WHITE|COMMA] nombre_archivo_a_convertir nro_columnas nro_filas nombre_archivo_nuevo<br /><br />ejemplo, con el archivo adjunto &quot;mapa.csv&quot;, de 20 columnas y 15 filas:<br />http://losersjuegos.com.ar/foro/csvconv COMMA mapa.csv 20 15 mapa.map<br /><br /><br />autor: Jorge Luis Cabral<br />mail: <!-- e --><a href="mailto:jorge@arcadenea.com.ar">jorge@arcadenea.com.ar</a><!-- e --><br /><br />licencia:zlib<br /><br /><a href="http://www.4shared.com/zip/GQeoKsYW/csvconv.html" class="postlink">http://www.4shared.com/zip/GQeoKsYW/csvconv.html</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Lun Jul 29, 2013 3:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2013-05-17T00:44:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=9233#p9233</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=9233#p9233"/>
<title type="html"><![CDATA[Ejemplos • Re: Ayudaa]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=9233#p9233"><![CDATA[
Bueno gente, se que este no es el lugar indicado pero queria que sepan que no me olvido de ustedes ni del foro, y el proyecto de Battle City sigue en pie junto a la idea de que una vez terminado quede para el foro. En todo este tiempo no di noticias porque la facultad me consume y como es un Final para una materia que todavia no molesta no le habia dedicado tiempo. Hace un mes lo retome, dedicandole una hora o dos por semana y la verdad que avance bastante. Quiero agradecerles por su ayuda, disposicion, ideas y ejemplos que me dieron.<br />Aca les dejo un video sobre como gestiona las escenas, usando el metodo que Kiketom explica en su blog.<br /> <a href="http://www.youtube.com/v/http://www.youtube.com/watch?vch?v=aIDJnIzsZFY"></param><param target="_blank"><strong>object</strong></a> <br />No se asusten por el codigo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> , ya estoy corrigiendo y modularizando mejor las cosas. Si bien recomiendan tener todo en ingles, hice todo en español y comentado cada cosa para que sea mas entendible para gente recien iniciada como yo. Se que no giran los tanques  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" />  pero es porque me dedique en los detalles mas grandes que en los pequeños o faciles de implementar.<br />El video ya es algo viejito, segui avanzando de a poco, los tanques disparan, se rompen las paredes, por ahora tengo dos tipos de inteligencia artificial implementada: Algoritmo Estrella, y una pseudo aleatoria que hice en la que el tanque se mueve aleatoriamente y en cada cruce analice mi posicion para saber a donde moverse; la idea es hacer otro tipos de inteligencias para dotar de mayor variedad.<br />Ahora le estoy dedicando mas tiempo a lo que es gestion de escenas y de menu, y segun la resolucion del juego o la posicion del mapa en pantalla, me adapte los tiles, los escale y los ubique donde corresponde. Quizas el estilo engine rpg no es lo mas conveniente para este tipo de juegos, pero si el mas convienente para el algoritmo estrella que utilizo. Voy a seguir adaptando mejor las cosas para que las colisiones no dependan tanto de la matriz del mapa sino de un grupo de sprites en si.<br />En cuantos a los tiles sprites, decidi una vez terminado el juego empezar con el dibujado a mano y digitalizacion para que tenga un estilo &quot;papel&quot; como el Paper Mario. Estuve probando bocetos y tengo algunos inconvenientes con la pixelizacion y detalles pero vamos por buen camino.<br />Esto es todo por ahora, una vez que tenga mas practica con el manejo del lenguaje y del paradigma de objetos, la idea es añadirle un creador de mapas. Es dificil, pero me gustan los retos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />PD: Por si no se ve el video, aca les dejo el link <a href="http://www.youtube.com/watch?v=aIDJnIzsZFY" class="postlink">http://www.youtube.com/watch?v=aIDJnIzsZFY</a> No se como acer que se vea con las etiquetas de youtube  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /> <br /><br />Saludos Gente! Gracias Nuevamente<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Vie May 17, 2013 12:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blacklotus.938]]></name></author>
<updated>2012-12-23T15:35:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=9055#p9055</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=9055#p9055"/>
<title type="html"><![CDATA[Ejemplos • Re: saltar - clase - SDL - &quot;SOLUCIONADO&quot;]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=9055#p9055"><![CDATA[
Olle colega y como le harias si tienes un juego de plataformas y el personaje tienen que ir saltando por ejemplo en unas escaleras, ya que en tu codigo el personaje siempre se detiene en una posicion constante luego de haber saltado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2677">blacklotus.938</a> — Dom Dic 23, 2012 3:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-12-02T20:37:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9015#p9015</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9015#p9015"/>
<title type="html"><![CDATA[Ejemplos • Re: Bump Map 2D]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9015#p9015"><![CDATA[
Barajas, seria bien util que tuvieses un repositorio en bitbucket con todos los ejemplos y codigos fuentes de tus proyectos que haces. ¿Tu manejas las tecnicas de screen scrolling? porqué de verdad me gustaria conocer la tecnica en python...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Dic 02, 2012 8:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-12-02T06:15:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9011#p9011</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9011#p9011"/>
<title type="html"><![CDATA[Ejemplos • Bump Map 2D]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2955&amp;p=9011#p9011"><![CDATA[
Aquí dejo un ejemplo simple de como hacer BumpMap en 2D<br /><br /> <a href="http://www.youtube.com/v/http://www.youtube.com/watch?v=tbqsYYnsAIA&amp;feature=youtu.be"></param><param target="_blank"><strong>object</strong></a> <br /><!-- m --><a class="postlink" href="http://www.youtube.com/watch?v=tbqsYYnsAIA&amp;feature=youtu.be">http://www.youtube.com/watch?v=tbqsYYns ... e=youtu.be</a><!-- m --><br /><br />El truco esta en esta función:<br /><br /><pre class="prettyprint">//Esto coloca el mapa en pantalla...<br />// Mapa de relieve, pantalla, posición x de la luz, posición y de la luz.<br />void RBumpmap&#40;SDL_Surface *bumpmap,SDL_Surface * screen, int LX=0,int LY=0&#41;{<br />    int x, y, dx, dy, intensidad,color;<br />   //recorremos el mapa de relieve completamente...<br />    for&#40;y = 1; y &lt;&#40;bumpmap-&gt;h&#41;-1; y++ &#41;{<br />        for&#40; x = 1; x &lt;&#40;bumpmap-&gt;w&#41;-1; x++ &#41;{<br />            //revisamos la diferencia entre el color del pixeles con respecto al pixel actual.<br />            dx = &#40;getpixel&#40;bumpmap,x+1,y&#41;&gt;&gt;16&#41; - &#40;getpixel&#40;bumpmap,x-1,y&#41;&gt;&gt;16&#41;;<br />            dy = &#40;getpixel&#40;bumpmap,x,y+1&#41;&gt;&gt;16&#41; - &#40;getpixel&#40;bumpmap,x,y-1&#41;&gt;&gt;16&#41;;<br />            //esto dibuja la luz en la posición dada...<br />            dx = dx - &#40; LX - x&#41;;<br />            dy = dy - &#40; LY - y&#41;;<br />            //si la distancia de la diferencia con el punto donde se encuentra la luz<br />            //es mayor a 256 píxeles, la intensidad de la luz es 0.<br />            if &#40; sqrt&#40;dx*dx+dy*dy&#41; &gt; 256 &#41; {<br />                intensidad = 0;<br />                }<br />            //caso contrario, la distancia nos servira para decirnos que tan &quot;blanca&quot; sera la luz<br />            //entre más cercana, mas blanca.<br />            else{<br />                intensidad = 255-sqrt&#40;dx*dx+dy*dy&#41;;<br />                }<br />            //lo transformamos a un color entero...<br />            color = RGBtoINT&#40;intensidad,intensidad,intensidad&#41;;<br />            //y lo ponemos en pantalla...<br />            putpixel&#40;screen,x,y,color&#41;;<br />            }<br />        }<br />    };<br /><br />//las funciones utilizadas por la función...<br /><br />//colorea un pixel de un color entero...<br />void putpixel&#40;SDL_Surface *screen, int x, int y, int color&#41;{<br />    int w =  screen-&gt;w;<br />    int h = screen-&gt;h;<br />    if &#40; &#40; &#40;x&lt;w&#41;&amp;&amp;&#40;x&gt;=0&#41; &#41; &amp;&amp; &#40; &#40;y&lt;h&#41;&amp;&amp;&#40;y&gt;=0&#41; &#41; &#41;{<br />        SDL_LockSurface&#40;screen&#41;;<br />        unsigned int *ptr = &#40;unsigned int*&#41;screen-&gt;pixels;<br />        int lineoffset = y * &#40;screen-&gt;pitch / 4&#41;;<br />        ptr[lineoffset + x] = color;<br />        SDL_UnlockSurface&#40;screen&#41;;<br />        }<br />    }<br /><br />//toma el color de un pixel <br />int getpixel&#40; SDL_Surface *surface, int x, int y &#41;{<br />    Uint32 *pixels = &#40;Uint32 *&#41;surface-&gt;pixels;    <br />    return pixels[ &#40; y * surface-&gt;w &#41; + x ];<br />    }<br /><br />//transforma un color RGB a entero...<br />Uint32 RGBtoINT&#40;int r, int g, int b&#41;{<br />    return &#40;r &lt;&lt; 16 &#41; | &#40;g &lt;&lt; 8 &#41; | b;<br />    }</pre><br /><br />La explicación técnica (en ingles) esta aquí: <!-- m --><a class="postlink" href="http://www.flipcode.com/archives/The_Art_of_Demomaking-Issue_07_Bump_Mapping.shtml">http://www.flipcode.com/archives/The_Ar ... ping.shtml</a><!-- m --><br />Espero que les sea útil <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Dic 02, 2012 6:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-26T23:10:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7169#p7169</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7169#p7169"/>
<title type="html"><![CDATA[Ejemplos • Re: Salto estilo tumble pop o snow bros 2]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7169#p7169"><![CDATA[
Bueno...<br /><blockquote><div><cite>baigos escribió:</cite><br />y controlo con rectangulos las colisiones de los objetos<br /></div></blockquote><br /><br />¿En que almacenas los rectángulos de las colisiones? Asumiré que en una lista <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />Lo que podrías hacer, aun que lo considero un poco complicado es:<br /><br /><pre class="prettyprint">personaje quiere bajar.<br />   buscamos con que rectángulo esta chocando.<br />   <br />   lo encontramos, lo sacamos de la lista.<br />   el rectángulo de las colisiones lo alojamos en una variable temporal...<br />   /*como ahora ya no existe el rectángulo, el personaje cae normalmente...*/<br /><br />el personaje ha caído.<br />   ¿la variable temporal esta ocupada?<br />        /*si esta ocupada la variable temporal...*/<br />        regresamos el rectángulo a la lista de las colisiones.</pre><br /><br />Creo que eso podría servirte sin cambiar mucho tu implementación <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Oct 26, 2012 11:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-10-25T21:33:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7166#p7166</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7166#p7166"/>
<title type="html"><![CDATA[Ejemplos • Re: Salto estilo tumble pop o snow bros 2]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7166#p7166"><![CDATA[
Hola!!!, hay un ejemplo en pilas que hace algo muy similar, pero utiliza<br />una función para determinar la distancia al suelo, en lugar de física.<br /><br />Creo que te puede resultar super útil, está en los ejemplos, se llama &quot;mapa_personaje_martian&quot;:<br /><br /><!-- m --><a class="postlink" href="https://github.com/hugoruscitti/pilas/tree/master/pilas/ejemplos/ejemplos/mapas">https://github.com/hugoruscitti/pilas/t ... plos/mapas</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Oct 25, 2012 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2012-10-25T12:33:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7164#p7164</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7164#p7164"/>
<title type="html"><![CDATA[Ejemplos • Salto estilo tumble pop o snow bros 2]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1566&amp;p=7164#p7164"><![CDATA[
Hola, estoy desarrollando un juego tipo tumble pop open source. Tengo un problema con las colisiones. Utilizo un tilemap y controlo con rectangulos las colisiones de los objetos. Hasta ahi funciona barbaro. Pero lo que quiero implementar es un sistema similar a snow bros 2 o tumble pop, que cuando saltamos desde abajo de una plataforma hacia arriba estas desactivan sus colisiones. Y cuando estamos sobre una plataforma haciendo abajo y salto nos permite descender un nivel. Busco algun juego similar que tenga disponible código fuente facil de entender, ya que el metane brothers tiene un principio similar pero el codigo es algo oscuro. O si alguien tiene implementada algun diagrama de estados o de flujo.<br />Hasta ahora hice algo, pero me encuentro con algunos problemas, en algunas plataformas el personaje hace tunel y se queda trabado en el medio del cuadrado de colisión.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Jue Oct 25, 2012 12:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-17T13:33:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7150#p7150</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7150#p7150"/>
<title type="html"><![CDATA[Ejemplos • Re: Efecto túnel.]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7150#p7150"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />¿el tunel permitiría crear algo tipo gyrus, no?<br /></div></blockquote><br /><br />Acabo de verlo y me parece que sí <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Oct 17, 2012 1:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-10-17T12:29:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7148#p7148</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7148#p7148"/>
<title type="html"><![CDATA[Ejemplos • Re: Efecto túnel.]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7148#p7148"><![CDATA[
Interesante, voy a probarlo mas tarde. Leyendo el post seguí algunas cosas, ¿el tunel permitiría crear algo tipo gyrus, no?: <br /><br />- <!-- m --><a class="postlink" href="http://www.youtube.com/watch?v=hF2m7EW9_lM">http://www.youtube.com/watch?v=hF2m7EW9_lM</a><!-- m --><br /><br />Mas tarde lo pruebo en mi equipo y les comento.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Oct 17, 2012 12:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-17T03:42:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7146#p7146</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7146#p7146"/>
<title type="html"><![CDATA[Ejemplos • Re: Efecto túnel.]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7146#p7146"><![CDATA[
He pensado en crear mi primer juego &quot;serio&quot;. Seria un bullet hell, donde el principal reclamo seria precisamente ser también un &quot;tunnel shoter&quot;.<br /><br />De cualquier manera, me encantaría poder saber que opinan de este pequeño ejemplo, para asi saber que tocar y que no <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><blockquote><div><cite>ClRg escribió:</cite><br />Increíble la verdad <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_surprised.gif" alt=":o" title="Surprised" /> ...en un principio no pensé que se vería tan bien, pensé que solo era el fondo el que tenia el efecto de &quot;tunel&quot;. Ahora no tuve el tiempo necesario para ver el código, pero cuando llegue a casa lo veo mejor. Felicitaciones quedo muy bueno! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />PD: esta buena la página que mencionas, tiene varios artículos interesantes<br /></div></blockquote> <br /><br />Sobre eso, del código, no es muy claro, en la pagina de lodev solo se explica como funciona, pero eso no hacia que se moviera, ya que la animación movía TODOS los objetos dibujados, así que lo que hago, es crear una imagen nueva, y esa es solo la que se transforma, es poco eficiente en comparación... pero... ¡¡¡Por Dios, funciona!!! XD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Oct 17, 2012 3:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ClRg]]></name></author>
<updated>2012-10-16T01:06:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7143#p7143</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7143#p7143"/>
<title type="html"><![CDATA[Ejemplos • Re: Efecto túnel.]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7143#p7143"><![CDATA[
Increíble la verdad  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_surprised.gif" alt=":o" title="Surprised" /> ...en un principio no pensé que se vería tan bien, pensé que solo era el fondo el que tenia el efecto de &quot;tunel&quot;. Ahora no tuve el tiempo necesario para ver el código, pero cuando llegue a casa lo veo mejor. Felicitaciones quedo muy bueno! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br />PD: esta buena la página que mencionas, tiene varios artículos interesantes<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2393">ClRg</a> — Mar Oct 16, 2012 1:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-15T13:53:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7142#p7142</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7142#p7142"/>
<title type="html"><![CDATA[Ejemplos • Efecto túnel.]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1562&amp;p=7142#p7142"><![CDATA[
Hola. Hacia un tiempo le comentaba lo de una serie de tutorarles sobre computer-graphis ( <!-- m --><a class="postlink" href="http://lodev.org/cgtutor">http://lodev.org/cgtutor</a><!-- m --> ), en ellos hay un efecto interesante llamado &quot;tunnel effect&quot; <br />( <!-- m --><a class="postlink" href="http://lodev.org/cgtutor/tunnel.html">http://lodev.org/cgtutor/tunnel.html</a><!-- m --> ).<br /><br />Y pensé: -si ese efecto puede hacer que una imagen plana parezca como un túnel... ¿Por qué no hacer algo interesante?...-.<br /><br />Un space invader tubular escrito en c++ y usando la librería básica de SDL:<br />tublar_invader.png<br /><br />¿Como funciona?<br /><br />en realidad en su interior es como cualquier otro invader plano. Lo interesante es la transformación que &quot;curvea&quot; la imagen original (toma los extremos inferior y superior de la imagen, después y coloca el extremo mas alejado a ellos en un circulo al centro...)<br /><br />trabajo_02.png<br /><br /><br />De momento no se puede &quot;morir&quot; pero existe la detección de colisiones <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<br /><br />Aquí un vídeo con el código fuente en C++ (incluye la imagen utilizada):<br /><br /> <a href="http://www.youtube.com/v/TmJCVGBBJLU"></param><param target="_blank"><strong>object</strong></a> <br /><br />código fuente: <a href="http://db.tt/FUaPUReV" class="postlink">http://db.tt/FUaPUReV</a><br /><br />los controles son flecha izquierda-flecha derecha y disparo con espacio. Salir con Escape o cerrarlo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />EDITO:<br /><br />Ejecutable para windows: <a href="http://db.tt/oPKZKvAe" class="postlink">http://db.tt/oPKZKvAe</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Oct 15, 2012 1:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-03T07:41:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7129#p7129</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7129#p7129"/>
<title type="html"><![CDATA[Ejemplos • Re: Genrando relampagos]]></title>

<category term="Ejemplos" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=3" label="Ejemplos"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1558&amp;p=7129#p7129"><![CDATA[
<blockquote><div><cite>ClRg escribió:</cite><br />Me imagino un juego de plataformas con esta ambientación de fondo, estaría genia! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /></div></blockquote><br /><br />No lo había visto de esa forma... pero suena interesante <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Oct 03, 2012 7:41 am</p><hr />
]]></content>
</entry>
</feed>