<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=50" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-02-24T00:23:12+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=50</id>
<entry>
<author><name><![CDATA[ligo]]></name></author>
<updated>2007-02-24T00:23:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=185#p185</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=185#p185"/>
<title type="html"><![CDATA[Perdon]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=185#p185"><![CDATA[
perdon hugo, se me avia olvidad, despues de aver puesto el titulo pongan NULL, por ejemplo<br /><br />SDL_WM_SetCaption(&quot;.:Ventana simple:.&quot;,NULL);<br /><br />ahora si que funka XD<br /><br />suerte!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=341">ligo</a> — Sab Feb 24, 2007 12:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-02-06T15:19:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=169#p169</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=169#p169"/>
<title type="html"><![CDATA[Re: Como crear una ventana de SDL de un modo sencillo en GNU]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=169#p169"><![CDATA[
Gracias por el aporte, pero el programa no funciona porque <br />tiene algunos errores.<br /><br />El prototipo de la función &quot;SDL_WM_SetCaption&quot; no corresponde<br />con el llamado que realizas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void SDL_WM_SetCaption&#40;const char *title, const char *icon&#41;;</code></dd></dl><br /><br />estás olvidando el segundo argumento... podrías enviar NULL<br />en todo caso, pero nunca olvidar el argumento.<br /><br />También encontré otros detalles, el retorno de la función<br />main por convención indica el estado del programa al finalizar, <br />por ejemplo 0 es una salida exitosa y cualquier otro valor indica<br />un error durante la ejecución del programa.<br /><br />El parámetro SDL_HWSURFACE no ayuda demasiado en este <br />ejemplo, se podría eliminar. Tampoco es necesario incluir cabeceras<br />a funciones que no estás utilizando, por ejemplo 'stdlib' y 'stdio', <br />y faltan controles sobre como se inicializaron los componentes<br />de la biblioteca con SDL_Init. No olvides eso, es importante <br />también.<br /><br />En:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/instalar_sdl/instalar_sdl.php">http://www.losersjuegos.com.ar/referenc ... ar_sdl.php</a><!-- m --><br /><br />hay un ejemplo similar a este, solo que &quot;parece&quot; mas extenso <br />porque se realizan controles sobre el retorno de las funciones <br />SDL.<br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Feb 06, 2007 3:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ligo]]></name></author>
<updated>2007-02-05T15:13:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=168#p168</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=168#p168"/>
<title type="html"><![CDATA[Como crear una ventana de SDL de un modo sencillo en GNU]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=50&amp;p=168#p168"><![CDATA[
<span style="font-weight: bold">Hola buenos dias, e esado aprendiendo SDL y les traigo un modo sencillo de crear ventanas con poca programacion y consiste en:<br /><br />#include&lt;stdio.h&gt;/*librerias caseras para SDL*/<br />#include&lt;stdlib.h&gt;<br />/*Cargamos SDL*/<br />#include&lt;SDL/SDL.h&gt;/*En mi caso tambien puede ser SDL.h*/<br /><br />int main(int argc,char *argv[])<br />{<br />/*Y ahora la accion*/<br />SDL_Surface *screen = SDL_SetVideoMode(640,480,16,SDL_HWSURFACE|SDL_RESIZABLE);<br />/*AJustamos resoluciones tales como 640,480 de 16 bits*/<br />SDL_WM_SetCaption(&quot;::VENTANA SDL SIMPLE::&quot;);<br />SDL_Delay(5000);/*para que dure mas*/<br />return 5;<br />}/*Bien este a sido el modo de SDL SIMPLE creado por RODRIGO CASTILLO (LIGO)*/<br /><br />ahora a compilar, lo guardamos en la carpeta principal(media:/tudisco/home/usuario/)<br />como main.c entonces abrimos una consola y ingresamos:<br /><br />gcc -o pruebasdl main.c -lSDL -lpthread <br /><br />eso ultimo de &quot;-lSDL -lpthread&quot; es para linkiar a SDL...<br />hasta luego...<br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> </span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=341">ligo</a> — Lun Feb 05, 2007 3:13 pm</p><hr />
]]></content>
</entry>
</feed>