<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=956" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-10T13:54:01+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=956</id>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-12-10T13:54:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4556#p4556</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4556#p4556"/>
<title type="html"><![CDATA[Re: error de multiples definiciones en c]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4556#p4556"><![CDATA[
Gracias che<br />Según esto que encontré:<br /><!-- m --><a class="postlink" href="http://www.velocityreviews.com/forums/t282453-external-variables.html">http://www.velocityreviews.com/forums/t ... ables.html</a><!-- m --><br />La definición debería ir en el source, o sea el .c, y la declaración en el header, entonces lo que hice fué esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface *screen; //asi va en init.c, es la definición<br /><br />extern SDL_Surface *screen; //asi va en el init.h, es la declaración</code></dd></dl><br /><br />Y ahi ya no me tira errores al hacer un #include &quot;init.h&quot; en el main.c.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Vie Dic 10, 2010 1:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-10T00:00:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4555#p4555</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4555#p4555"/>
<title type="html"><![CDATA[Re: error de multiples definiciones en c]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4555#p4555"><![CDATA[
yo es que no tengo demasiada experiencia con las variables globales, pero por lo que he investigado, lo que tendrías que hacer es esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>//Init.h<br /><br />extern SDL_Surface* screen; // declaración<br /><br />// Main.cpp o donde sea<br />SDL_Surface* screen = Cualquier valor que quieras que tome<br /></code></dd></dl><br /><br />parece que tienes que hacerlo en dos pasos:<br />1- Decirle al compilador ¡ojo! esta variable es global a todos mis archivos<br />2- La variable global que tengo definida en mi programa, tiene como valor tal<br /><br />Igual puedes probar a imprimir la dirección de las variables donde uses screen, y ver si son todas la misma. En caso de que alguna sea distinta ya sabrías que no te la está tratando como global<br /><br />EDITO: lo de que no te de errores ahora en el utils.h igual se debe a que solo lo incluyes una vez, prueba a incluirlo en varios ficheros que no estén relacionados<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Dic 10, 2010 12:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-12-09T12:03:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4554#p4554</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4554#p4554"/>
<title type="html"><![CDATA[Re: error de multiples definiciones en c]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4554#p4554"><![CDATA[
ok, acá está el código:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#ifndef UTILS_H_<br />#define UTILS_H_<br /><br />#include &lt;stdio.h&gt;<br /><br />#define TRUE 1<br />#define FALSE 0<br /><br />//verifica si es potencia de 2<br />int powerof2(int number);<br /><br /><br /><br /><br />#endif<br /></code></dd></dl><br />Ahi agrupo constantes y funciones de uso común.<br /><br />Este es mi makefile:<br /><dl class="codebox"><dt>Code: </dt><dd><code>CC = g++<br />DEBUG = -g<br />CFLAGS = -Wall `sdl-config --cflags` -Ihttp://losersjuegos.com.ar/foro/ -c $(DEBUG)<br />LFLAGS = -Wall $(DEBUG)<br />LIBS = `sdl-config --libs` -lm  -lSDL_image -lGL -lGLU <br /><br />OBJECTS = main.o sprite.o render.o init.o  utils.o  <br /><br />all: $(OBJECTS)<br />   $(CC) $(LFLAGS) $(OBJECTS) -o test $(LIBS)<br /><br />%.o: %.c<br />   $(CC) $(CFLAGS) -c $&lt; -o $@<br /><br />clean:<br />   rm -f *.o test</code></dd></dl><br /><br />y yo lo que venia haciendo es hacer un #include &quot;utils.h&quot; en otros headers donde necesitaba utilizar las constantes y funciones, por ejemplo el main.c<br /><br />Oppss probé de nuevo despues de hacer un make clean, y ahora me tira error de redefinicion pero por otro lado:<br />init.o: In function `initgraphics()':<br />init.c:6: multiple definition of `screen'<br />main.c:24: first defined here<br /><br />Este es mi header del init.h:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#ifndef INIT_H_<br />#define INIT_H_<br /><br />#include &lt;GL/gl.h&gt;<br />#include &lt;GL/glu.h&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &quot;utils.h&quot;<br /><br />int const SCREEN_WIDTH = 640;<br />int const SCREEN_HEIGHT = 480;<br />int const SCREEN_BPP = 32;<br /><br /><br />SDL_Surface *screen;<br /><br />void initgraphics();<br /><br />#endif</code></dd></dl><br /><br />Y el error me tira al hacer un #include &quot;init.h&quot; en el main.c, aaaaaaaa por que la vida tiene que ser tan complicadaaaa. Estoy mangueando demasiado...<br /><br /><span style="font-weight: bold">Editado de nuevo:</span><br />Ahora lo que hice es no hacer el #include del &quot;init.h&quot;, y utilizar extern:<br />Ej:(esto en el main.c)<br /><dl class="codebox"><dt>Code: </dt><dd><code>extern SDL_Surface *screen;<br /><br />extern void initgraphics();</code></dd></dl><br />Y compila sin errores (salvo que cuando quiero correr el ejecutable me da error de segmentacion, pero ese es otro tema).<br />Aunque la verdad no entiendo como con utils.h ahora no tengo problemas haciendo #include, y con init.h si.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Jue Dic 09, 2010 12:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-09T06:46:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4553#p4553</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4553#p4553"/>
<title type="html"><![CDATA[Re: error de multiples definiciones en c]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4553#p4553"><![CDATA[
lo que te propone hugo es una posible solución, aunque en mi opinión los #define se deben evitar al máximo, ya que pueden resultar peligrosos.<br /><br />Lo de extern te puede permitir usar variables de otras unidades de compilación. Yo creo que lo mejor es que postees el código de utils para que veamos donde puede fallar<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Dic 09, 2010 6:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-09T03:28:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4552#p4552</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4552#p4552"/>
<title type="html"><![CDATA[Re: error de multiples definiciones en c]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4552#p4552"><![CDATA[
Me parece que se debe a que tendrías que usar las directivas<br />#define:<br /><br /><!-- m --><a class="postlink" href="http://zator.com/Cpp/E4_9_10e.htm">http://zator.com/Cpp/E4_9_10e.htm</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.todopic.com.ar/foros/index.php?topic=27406.0">http://www.todopic.com.ar/foros/index.php?topic=27406.0</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Dic 09, 2010 3:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-12-09T02:25:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4551#p4551</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4551#p4551"/>
<title type="html"><![CDATA[error de multiples definiciones en c]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=956&amp;p=4551#p4551"><![CDATA[
Estoy programando en c unas cosas, el problema que tengo es que tengo unas cuantas constantes y funciones de uso comun en el codigo (o sea en los .c). Lo que hice fue agruparlas en un utils.h y un utils.c. <br />El problema se presenta cuando quiero incluir ese header en muchos archivos .c o .h, ya que al compilar el linker me tira error de multiples definitions de las variables y funciones de utils.<br />Me han dicho que se puede solucionar utilizando extern, pero lo que no entiendo es si debo volver a colocar la definicion de las variables o funciones en el .c o .h donde quiero hacer uso de ellas, pero con la palabra clave extern al comienzo?. Hay alguna otra solución?<br /><br />Ej:<br /><br />en utils.h y utils.c tengo una función que se llama powerof2(...)<br />int powerof2(...);<br /><br /><br /><br />cuando hago uso de ella en, por ejemplo, el main.c, me tira error de que está definida en utils y en main. Debería usar el extern asi, dentro del main?:<br /><br />extern int powerof2(...);<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Jue Dic 09, 2010 2:25 am</p><hr />
]]></content>
</entry>
</feed>