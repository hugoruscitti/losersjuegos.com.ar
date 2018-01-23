<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1105" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-21T22:28:34+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1105</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-04-21T22:28:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5428#p5428</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5428#p5428"/>
<title type="html"><![CDATA[Re: Problema con Threads en libreria SDL en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5428#p5428"><![CDATA[
No pusiste el mensaje de error del compilador, podría ayudar <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />SDL_CreateThread espera una función estática, para poder pasarle una función miembro de una clase ésta debe ser estática, en tu caso sería algo como esto:<br /><br /><pre class="prettyprint">static int run_static&#40; void* data &#41;</pre><br />El problema, es que las funciones miembro estáticas no pueden acceder a variables ni funciones miembro no estáticas. Si en tu código te sirve trabajar así, con esto basta.<br />Sin embargo, lo más probable es que desees acceder a variables miembro no estáticas, en tal caso lo que he hecho es usar dos funciones, una estática que se pasa como parámetro a SDL_CreateThread que devuelve un puntero a una segunda función no estática en la que se ejecuta el código del hilo, así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Clase<br />{<br />   Clase()<br />   {<br />      hilo = SDL_CreateThread( &amp;static_run, this );<br />   }<br /><br />   static int static_run( void* param )<br />   {<br />      return ( ( Clase* )param )-&gt;run();<br />   }<br /><br />   int run()<br />   {<br />      while( condicion )<br />      {<br />         // código<br />      }<br />   <br />      return 0;<br />   }<br />}<br /></code></dd></dl><br />Al llamar a SDL_CreateThread se le pasa la función estática Clase::static_run y un puntero a la clase como parámetro, la función devuelve un puntero a la función no estática run, en la que se ejecuta el código deseado, el problema con esta forma es que no le paso parámetros a la función run(), pero en mi caso me ha funcionado perfecto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue Abr 21, 2011 10:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-04-02T17:28:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5367#p5367</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5367#p5367"/>
<title type="html"><![CDATA[Re: Problema con Threads en libreria SDL en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5367#p5367"><![CDATA[
Intenta lo que dice Mightygaver, aunque no estoy seguro que funcione si tienes que escribir algo como clase::función no va a funcionar por que eso no existe en C, si lo quieres hacer con hilos en C++ boost es una buena opción, ahora no recuerdo como y ni se si lo use, investigar sobre el tema ya es lo que te toca a ti.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Abr 02, 2011 5:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-04-02T17:02:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5366#p5366</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5366#p5366"/>
<title type="html"><![CDATA[Re: Problema con Threads en libreria SDL en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5366#p5366"><![CDATA[
Tengo C++ poco fresco y menos SDL, pero voy a tratar de ayudarte.<br /><br />En C++ si no me equivoco los métodos de una clase no son exactamente lo mismo que una función definida fuera de una clase.<br /><br />SDL_CreateThread espera una función definida fuera de una clase, no un método. Como carlostex te ha comentado, la librería boost tiene funciones que no recuerdo bien pero que trabajan con los punteros a función para hacer su manipulación más agradable, por lo que puede que por ahí te vaya bien, pero sinceramente yo te recomiendo que primero calles al compilador con algo así.<br /><br /><pre class="prettyprint">int run&#40;void * data&#41;<br />{<br />  //código de prueba, por ejemplo un printf<br />  return 0;<br />}<br /><br />SDL_Thread * th = SDL_CreateThread&#40;run,NULL&#41;;</pre><br /><br />Si ves que va, pues prueba con funciones estáticas dentro de la clase, que creo que funcionan como las otras, o buscas en la docu de boost la función que menciona carlostex.<br /><br />Suerte!<br /><br />PD: Me ha venido de perlas para probar la tag codigo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab Abr 02, 2011 5:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[El_Guille]]></name></author>
<updated>2011-04-02T16:33:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5365#p5365</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5365#p5365"/>
<title type="html"><![CDATA[Re: Problema con Threads en libreria SDL en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5365#p5365"><![CDATA[
mmm.... ya veo, ¿alguna sugerencia para crear hilos de esa manera? ¿alguna libreria de hilos basada en c++?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2407">El_Guille</a> — Sab Abr 02, 2011 4:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-04-02T06:13:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5362#p5362</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5362#p5362"/>
<title type="html"><![CDATA[Re: Problema con Threads en libreria SDL en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5362#p5362"><![CDATA[
Si no me equivoco sdl no te permite llamar a funciones definidas dentro de una clase para crear procesos, esto es por que sdl esta programado completamente en c.<br />pero hay solución usa boost entra a su pagina y averigua hay algunos ejemplos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Abr 02, 2011 6:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[El_Guille]]></name></author>
<updated>2011-04-01T21:55:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5361#p5361</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5361#p5361"/>
<title type="html"><![CDATA[Problema con Threads en libreria SDL en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1105&amp;p=5361#p5361"><![CDATA[
Hola soy nuevo en el foro, abri este tema por que tengo una duda acerca de los Thread que vienen en la libreria sdl, el problema no es tanto por la sintaxis si no que cuando quiero hacer que un hilo llame el metodo de una clase no me deja compilar. aqui esta un ejemplo de como mas o menos quiero que sea:<br /><br />#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;;<br />#include &lt;SDL/SDL.h&gt;<br />using namespace std;<br />class clase{<br />public : clase(){<br />SDL_Thread *hilo;<br />//hilo=SDL_CreateThread(run,NULL);<br />}<br /><br />public :int run(void *data){<br />while(1&gt;0)metodo();<br />return 0;<br />}<br /><br />public :void metodo(){}<br />};<br />int main(int argc, char *argv[]){}<br /><br />¿por que lo quiero asi?<br />Por que quiero hacer un juego y ese hilo corresponde al del personaje que voy a usar  para los procesos de validacion/movimiento y repintado, por eso necesito llamar a metodos de una clase pero no me deja hacer eso,ni siquiera me deja que el metodo run este dentro de una clase, asi que necesito su ayuda por favor<br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2407">El_Guille</a> — Vie Abr 01, 2011 9:55 pm</p><hr />
]]></content>
</entry>
</feed>