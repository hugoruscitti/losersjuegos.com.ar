<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=992" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-05T18:10:25+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=992</id>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-01-05T18:10:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4704#p4704</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4704#p4704"/>
<title type="html"><![CDATA[Re: python: Aprovechar memoria o desperdiciarla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4704#p4704"><![CDATA[
Si no me equivoco el rendimiento también está tocado al tener que reservar y liberar memoria y esto en las máquinas virtuales de lenguajes dinámicos se hace a menudo, aparte que también cuenta el rendimiento del recolector de basura.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Mié Ene 05, 2011 6:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-03T16:45:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4682#p4682</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4682#p4682"/>
<title type="html"><![CDATA[Re: python: Aprovechar memoria o desperdiciarla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4682#p4682"><![CDATA[
el problema que tienes por lo que veo es como el mío... yo también me meto en detalles de ese estilo, a veces llegando a rozar la obsesión( si hasta tengo el &quot;Video Game optimization&quot;) , aunque muchas veces no llevan a ventajas grandes, ya que los compiladores son cada vez más listos<br /><br />En cuanto a lo de la memoria, por mucho que sean bindings de librerías en C/C++, siempre tienes código escrito en python, interfaces y demás, que el interprete tiene que mantener en memoria para ir ejecutando, por lo que, a mi modo de ver, sería como tener los archivos abiertos, de hay que se consuma más memoria. Prueba a &quot;precompilar&quot; los códigos de python y ver si sigue consumiendo tanto.<br /><br />Otro tema es que la mayoría de estos lenguajes tiene un &quot;pool&quot; preestablecido donde coger toda la memoria, lo que conlleva que tenga que tener memoria prealocada.<br /><br />Pero en resumidas cuentas, el tema de usar python u otro lenguaje interpretado es hacer la vida más fácil al programador, ya sea delegando aspectos de la lógica a los diseñadores ( que para ellos será más fácil de usar uno de estos lenguajes), evitando tener que recompilar para cada cambio, permitiendo separar los módulos estables (engine) de las locuras que puedan hacer los diseñadores (codigo interpretado)...etc etc<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Ene 03, 2011 4:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-01-03T15:16:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4681#p4681</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4681#p4681"/>
<title type="html"><![CDATA[Re: python: Aprovechar memoria o desperdiciarla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4681#p4681"><![CDATA[
No hay una diferencia apreciable de consumo de memoria entre el pysfml y sfml. Pygame, está escrito en c, algo más que SDL porque trae cosas como máscaras o clases base para sprites . El consumo de memoria de un módulo es significativo, por mi experiencia, si se usa ctypes, se usa una mezcla de python y c/c++ para hacer módulos (&quot;shadow classes&quot; en SWIG) o está escrito enteramente en python.<br />En cuanto &quot;más memoria use un juego, más lento es el juego&quot; pues habría que destripar este tema. El procesador le resulta más cómodo, más eficiente, trabajar con memoria de su mismo ancho de palabra (ej.: un procesador de 32 bits es mucho más eficiente con enteros de 32 bits que con chars) o con múltiplos de ese mismo ancho de palabra (lua alinea las cadenas a un múltiplo del ancho de palabra del ordenador con &quot;basura&quot; para que sea más eficiente). Un juego rinde más si se aplica todo esto. Si haces estructuras (o clases) debes tratar en lo posible que su tamaño sea del mismo tamaño de palabra o un algún múltiplo de esa palabra para que el procesador lo mueva de forma eficiente (mirad las estructuras SDL_Rect como ejemplo), aunque esto quizá ya queda para los puristas del rendimiento. Ya por último no quiero decir que debas estar usando todo el tiempo enteros, sino cuando resulte posible y no incomode. Bueno, todo esto ya sería otro tema a tratar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Lun Ene 03, 2011 3:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-02T23:29:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4676#p4676</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4676#p4676"/>
<title type="html"><![CDATA[Re: python: Aprovechar memoria o desperdiciarla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4676#p4676"><![CDATA[
Mientras mas memoria se use mas lento será el juego, por que el procesador tiene en algún momento recorrer toda la memoria, por eso debería haber un equilibrio, no se si pygame está programado en python, eso justificaría el consumo de la memoria, pero un programa en C no consume tanta memoria, por eso se suele usar C para las partes críticas de un motor de juegos, eso sería equilibrar facilidad con rendimiento. Lo que consume mas memoria son los gráficos, si el juego esta lleno de gráficos de 32 bits la memoria se dispara, por lo que aquí entra el programador asiendo uso eficiente de la carga de gráficos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Ene 02, 2011 11:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-02T23:24:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4675#p4675</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4675#p4675"/>
<title type="html"><![CDATA[Re: python: Aprovechar memoria o desperdiciarla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4675#p4675"><![CDATA[
buenas teri:<br /><br />en mi opinión todo debe ser ponderado, no hagas nada que consuma o requiera demasiada memoria en lenguajes interpretados.<br />Ahora, en cuanto a lo del consumo de memoria por las bibliotecas y por la maquina virtual de python, ten en cuenta que son modulos bastante grandes, por lo que es lógico el alto consumo de memoria. Si por ejemplo lo comparases con lenguajes del tipo Lua, verías que este consume mucha menos memoria, pero también trae menos cosas por defecto (no es orientado a objetos y otro tipo de cosas). Si realmente es necesario, no es ningún problema tanto consumo, pero haz investigaciones para averiguar si estás haciendo algo que le haga consumir tanta memoria.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Ene 02, 2011 11:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-01-02T19:54:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4671#p4671</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4671#p4671"/>
<title type="html"><![CDATA[python: Aprovechar memoria o desperdiciarla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=992&amp;p=4671#p4671"><![CDATA[
Me gusta que los recursos se aprovechen al máximo, en concreto que se use el mínimo de memoria. Dado que me gusta usar python para hacer juegos sencillos y rápidos pues me importa bastante en este aspecto qué es lo que uso.<br />Sin hacer comparaciones concretas he comprobado que usando pygame, la memoria usada comienza con unos 7Mb, pysfml también unos 7Mb y pyglet 30 Mb. Con pyglet no es todo, usándolo con cocos2d el consumo se ha disparado a unos 45Mb.<br />Yo ya sé que la mayoría de los usuario tienen normalmente de ram 4 Gb pero personalmente me pone malo ver una cifra de 50Mb y encima sabiendo del relativo bajo rendimiento de python. Así que me gustaría conocer opiniones y matizaciones. Por fortuna, no llega al caso de la máquina virtual de Java.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Dom Ene 02, 2011 7:54 pm</p><hr />
]]></content>
</entry>
</feed>