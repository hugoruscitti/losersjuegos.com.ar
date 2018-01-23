<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=216" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-08T21:51:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=216</id>
<entry>
<author><name><![CDATA[trutoman]]></name></author>
<updated>2008-04-08T21:51:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=1098#p1098</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=1098#p1098"/>
<title type="html"><![CDATA[Problema con SDL_DisplayFormat]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=1098#p1098"><![CDATA[
Es porque haces &quot;ext2 = SDL_DisplayFormat(ext2)&quot;<br /><br />No se puede hacer sobre la misma surface, esto provoca memory leak, según la documentación de SDL.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1914">trutoman</a> — Mar Abr 08, 2008 9:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2008-01-10T21:12:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=816#p816</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=816#p816"/>
<title type="html"><![CDATA[Problema con SDL_DisplayFormat]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=816#p816"><![CDATA[
Al parecer  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> ambos tienen algo de razon pues me encontre con que estaba algo mal el gameloop y el orden de los objetos y otras cosillas<br />pero parece ser que ya esta bieny les agradesco su ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Ene 10, 2008 9:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2008-01-05T21:35:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=811#p811</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=811#p811"/>
<title type="html"><![CDATA[Problema con SDL_DisplayFormat]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=811#p811"><![CDATA[
No se si será tu caso, pero a mí me pasó algo parecido y era por que llamaba a SDL_DisplayFormat antes de iniciar SDL y SDL_SetVideoMode.<br /><br />Había creado una clase y en el constructor puse el código para cargar el gráfico, y creaba un objeto de dicha clase antes de iniciar SDL. Modifiqué para crear el objeto después de iniciar SDL y se acabó el error.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Sab Ene 05, 2008 9:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-01-03T00:55:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=809#p809</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=809#p809"/>
<title type="html"><![CDATA[Problema con SDL_DisplayFormat]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=809#p809"><![CDATA[
<blockquote><div><cite>sofoke escribió:</cite><br />pero; no entiendo: por que con mi codigo no muestra nada¿?<br /></div></blockquote><br /><br />No lo sé, solo he visto un fragmento de tu programa en el primer<br />mensaje; y parece correcto. El problema debe estar en alguna<br />otra parte del código que no has mostrado aún... ¿quien sabe?, tal<br />vez no tienes un bucle de juego correcto (para mantener el programa<br />en funcionamiento), o no usas SDL_Delay como en el ejemplo<br />que escribí... no sé, pueden ser muchas cosas en realidad, tal vez<br />siquiera sea un error: ¿cual es la condición que usas para mantener<br />el programa en funcionamiento?, puede que eso esté fallando.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ene 03, 2008 12:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2008-01-02T18:43:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=808#p808</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=808#p808"/>
<title type="html"><![CDATA[Problema con SDL_DisplayFormat]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=808#p808"><![CDATA[
con el codigo anterior funciono perfecto<br />carga la imagen y la convierte en el formato que tiene la pantalla (SDL_DisplayFormat)<br />pero; no entiendo: por que con mi codigo no muestra nada¿?<br />Con mi codigo sigue sin mostrar nada y no da error ni siquiera en los archivos que crea SDL para errores...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Ene 02, 2008 6:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-12-27T13:50:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=790#p790</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=790#p790"/>
<title type="html"><![CDATA[Problema con SDL_DisplayFormat]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=790#p790"><![CDATA[
Saludos, por lo que se ve en el código me parece que todo<br />está bién. Es imporante ver que el contexto donde se ejecuta todo<br />eso.<br /><br />Armé un programa de ejemplo completo para que puedas probar si<br />te funciona correctamente. El programa muestra una ventana pequeña<br />durante dos segundos (y usa SDL_image).<br /><br />Te recomiendo que lo pruebes en un sistema como GNU/Linux, es<br />mas fácil saber si funciona o no contando con un terminal de<br />texto:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=207">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=207</a><!-- m --><br /><br />El código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &quot;SDL.h&quot;<br />#include &quot;SDL_image.h&quot;<br /><br />int main&#40;void&#41;<br />&#123;<br />    SDL_Surface * screen;<br />    SDL_Surface * superficie;<br /><br />    SDL_Init&#40;0&#41;;<br />    screen = SDL_SetVideoMode&#40;320, 240, 16, 0&#41;;<br /><br />    /* prueba de SDL_Display */<br />    superficie = IMG_Load&#40;&quot;explosion.png&quot;&#41;;<br /><br />    if &#40;! superficie&#41;<br />    &#123;<br />        printf&#40;&quot;Error: %s \n&quot;, SDL_GetError&#40;&#41;&#41;;<br />        return 1;<br />    &#125;<br /><br />    superficie = SDL_DisplayFormat&#40;superficie&#41;;<br />    SDL_BlitSurface&#40;superficie, NULL, screen, NULL&#41;;<br />    SDL_Flip&#40;screen&#41;;<br /><br />    /* espera dos segundos antes de cerrar el programa */<br />    SDL_Delay&#40;2000&#41;;<br />    SDL_FreeSurface&#40;superficie&#41;;<br /><br />    return 0;<br />&#125;<br /></code></dd></dl><br /><br />Archivo &quot;Makefile&quot; para compilar todo el proyecto mediante el comando<br />&quot;make&quot;:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>CFLAGS=`sdl-config --cflags`<br />LDFLAGS=`sdl-config --libs` -lSDL_image<br />all: ejemplo<br /></code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Dic 27, 2007 1:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2007-12-27T03:01:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=788#p788</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=788#p788"/>
<title type="html"><![CDATA[Problema con SDL_DisplayFormat]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=216&amp;p=788#p788"><![CDATA[
Tengo un Error al querer usar SDL_DisplayFormat()<br />Tengo este codigo<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;SDL/SDL.h&quot;<br />#include &quot;SDL/SDL_image.h&quot;<br />SDL_Surface *Exp2;<br />...<br />Exp2 = IMG_Load&#40; &quot;.http://losersjuegos.com.ar/foro/IMG/EXPLOCION/EXPLOCION_FOR/2.png&quot; &#41;;<br />if&#40; Exp2 == NULL &#41;&#123;<br />   printf&#40;&quot;Error al cargar la imagen %s\n&quot;, SDL_GetError&#40;&#41; &#41;;<br />   exit&#40; 0 &#41;;<br />&#125;<br />Exp2 = SDL_DisplayFormat&#40; Exp2 &#41;;<br />...<br />SDL_FreeSurface&#40; Exp2 &#41;;<br /></code></dd></dl><br /><br />y todo bien compila y todo(sin errores) pero cuando lo ejecuto se cierra la ventana inmediatamente ni si quiera se ve que la abre y no marca error no se que pasa...<br />Ojala Puedan ayudarme...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Dic 27, 2007 3:01 am</p><hr />
]]></content>
</entry>
</feed>