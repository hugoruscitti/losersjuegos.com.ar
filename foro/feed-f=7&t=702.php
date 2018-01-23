<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=702" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-03-06T11:27:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=702</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2010-03-06T11:27:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3294#p3294</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3294#p3294"/>
<title type="html"><![CDATA[Mingw32 con SDL y SDL_TTF da error al compilar]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3294#p3294"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br />¿Puedes poner el comando que utilizas para enlazar?...<br /></div></blockquote><br />Antes primero esto en el comando para enlazar:<br />-mwindows -lSDLmain -lSDL -lSDL_ttf<br /><br />Despues del error, aunque habia hecho compilacion cruzada anteriormente de codigo que funcionaba solo desde terminal (modo texto) sin usar SDL sin que diera este error, añadi la biblioteca MinGW32:<br />-mwindows -lSDLmain -lSDL -lSDL_ttf -lmingw32<br /><br />Ahora, gracias a tu post, he conseguido encontrar el problema, al parecer SDL por algun motivo para poder enlazarla cuando es en compilacion cruzada necesita algo de la biblioteca MinGW32, y el orden de los factores al enlazar parece que si altera el producto:<br />-lmingw32 -lSDLmain -lSDL -lSDL_ttf -mwindows<br /><br />Asi compila y enlaza sin problemas.<br /><blockquote><div><cite>Geo escribió:</cite><br />...<dl class="codebox"><dt>Code: </dt><dd><code>int main&#40; int argc, char* argv&#91;&#93; &#41;</code></dd></dl>...<br /></div></blockquote><br />Desde hace algun tiempo, despues de conocer SDL y no solo eso, sino como el sistema pasa argumentos a los programas y como asi se pueden obtener, siempre uso ese prototipo en la funcion main, incluso cuando no uso SDL y no necesito obtener los parametros que pase el sistema.<br /><blockquote><div><cite>Geo escribió:</cite><br />...Y resuelve enlazando con SDLmain, en mis programas con MinGW uso esto en el comando para enlazar:<br /><br />-lmingw32 -lSDLmain -lSDL -mwindows<br /></div></blockquote><br />Cierto, el problema estaba en la forma de enlazar. Gracias por la ayuda Geo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Mar 06, 2010 11:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-03-05T20:23:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3293#p3293</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3293#p3293"/>
<title type="html"><![CDATA[Mingw32 con SDL y SDL_TTF da error al compilar]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3293#p3293"><![CDATA[
¿Puedes poner el comando que utilizas para enlazar?<br /><br />Me parece que el problema es que SDL en Windows define una WinMain a partir de este prototipo (debes declarar tu función main con los parámetros):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int main&#40; int argc, char* argv&#91;&#93; &#41;</code></dd></dl><br />Y resuelve enlazando con SDLmain, en mis programas con MinGW uso esto en el comando para enlazar:<br /><br />-lmingw32 -lSDLmain -lSDL -mwindows<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Mar 05, 2010 8:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2010-03-05T17:16:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3292#p3292</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3292#p3292"/>
<title type="html"><![CDATA[Mingw32 con SDL y SDL_TTF da error al compilar]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=702&amp;p=3292#p3292"><![CDATA[
Hola, acabo de instalar SDL y SDL_TTF para usarlas en la compilacion cruzada con Mingw32 (Mingw32 ya lo tenia instalado). Un codigo muy sencillo (que funciona perfectamente por que ya lo he comppilado en GNU/Linux y ejecutado, al intentar compilarlo con Mingw32 no lo compila y da el siguiente error:<br /><blockquote class="uncited"><div><br />/usr/lib/gcc/i586-mingw32msvc/4.2.1-sjlj/.http://losersjuegos.com.ar/foro/.http://losersjuegos.com.ar/foro/.http://losersjuegos.com.ar/foro/.http://losersjuegos.com.ar/foro/i586-mingw32msvc/lib/libmingw32.a(main.o):(.text+0xe3): undefined reference to `_WinMain@16'<br />collect2: ld returned 1 exit status<br /></div></blockquote><br />Al parecer, por el texto de error, no ha sido definida la referencia a WinMain, pero yo en el codigo no tengo ninguna llamada a esa funcion, y no se donde podra estar el problema, por el texto del error parece tener que ver con libmingw32.a pero no se por que, ya que en otros casos de compilacion cruzada (en los que no hacia compilacion cruzada con SDL y SDL_TTF sino solo de codigo portable) no me daba este error.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Mar 05, 2010 5:16 pm</p><hr />
]]></content>
</entry>
</feed>