<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=208" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-02-12T06:56:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=208</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2008-02-12T06:56:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=886#p886</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=886#p886"/>
<title type="html"><![CDATA[Error SDL con Dev-cpp   -.-]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=886#p886"><![CDATA[
Deverias intentar con un codigo pequeño algo como:<br /><br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;stdlib.h&gt;<br />int main( int argc, char *argv[] ){<br />SDL_Surface *Screen;<br />SDL_Event Cierra;<br />int done = 0;<br />if( SDL_Init( SDL_INIT_VIDEO ) &lt; 0 ){<br />printf(&quot;ERROR AL INICIAR SDL&quot;);<br />exit(0);<br />}<br />Screen = SDL_SetVideoMode( 800, 600, 32, SDL_HWSURFACE );<br />if( Screen == NULL ){<br />printf(&quot;ERROR AL crear la ventana %s\n&quot;, SDL_GetError );<br />exit(0);<br />}<br />while( done == 0 ){<br />while( SDL_PollEvent( &amp;Cierra ) ){<br />if( Cierra.type == SDL_KEYDOWN )<br />done = 1;<br />}<br />}<br />return 0;<br />}<br /><br /><br />Con este ejemplo te crea solo una ventana y la cierra cuando se pulsa una tecla<br />si quieres una forma sencilla de instalar SDL en devcpp puedes bajarlos de:               <!-- m --><a class="postlink" href="http://www.devpaks.org/">http://www.devpaks.org/</a><!-- m --> <br />y bienen en paquetes que son muy sencillos de instalar...<br />solo linkea:<br />-lmingw32 -lSDLmain -lSDL -lSDL_image -lSDL_ttf -lSDL_gfx<br />y no olvides tener las .dll correspondientes<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mar Feb 12, 2008 6:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shellman]]></name></author>
<updated>2007-12-18T16:15:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=767#p767</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=767#p767"/>
<title type="html"><![CDATA[Error SDL con Dev-cpp   -.-]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=767#p767"><![CDATA[
Pero donde esta ese ejemplo, de donde lo has sacado ???<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=439">Shellman</a> — Mar Dic 18, 2007 4:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[uguru]]></name></author>
<updated>2007-12-17T19:10:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=755#p755</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=755#p755"/>
<title type="html"><![CDATA[Error SDL con Dev-cpp   -.-]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=755#p755"><![CDATA[
Has probado a compilar la template ejemplo que te viene?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1829">uguru</a> — Lun Dic 17, 2007 7:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nekr0n]]></name></author>
<updated>2007-12-17T05:44:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=751#p751</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=751#p751"/>
<title type="html"><![CDATA[Error SDL con Dev-cpp   -.-]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=751#p751"><![CDATA[
No si el codigo es el ejemplo q te dan en el que se dibuja un cuadro... ese que te da cuando te explica como instalar SDL en dev cpp, lo copio tal cual y nada.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1857">Nekr0n</a> — Lun Dic 17, 2007 5:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shellman]]></name></author>
<updated>2007-12-17T05:02:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=750#p750</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=750#p750"/>
<title type="html"><![CDATA[Error SDL con Dev-cpp   -.-]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=750#p750"><![CDATA[
Puedes poner el código para ver en que podría estar el error, porque ese error puede estar ocasionado por varias causas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=439">Shellman</a> — Lun Dic 17, 2007 5:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nekr0n]]></name></author>
<updated>2007-12-14T11:34:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=741#p741</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=741#p741"/>
<title type="html"><![CDATA[Error SDL con Dev-cpp   -.-]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=208&amp;p=741#p741"><![CDATA[
muy buenas, pues miren, he instalado el SDL para dev-cpp y al cabo de muchos intentos que me dava errores y eso conseguí que no me diera ninguno pero a la hora de ejecutarlo... me dice algo como:<br /><br />Project1.exe ha detectado un problema y debe cerrarse<br /><br />y no tengo ni idea porque puede estar pasando eso...<br /><br />agradeceria muchísimo cualquier sugerencia. Gracias!!!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1857">Nekr0n</a> — Vie Dic 14, 2007 11:34 am</p><hr />
]]></content>
</entry>
</feed>