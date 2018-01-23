<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=816" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-08T01:19:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=816</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-08-08T01:19:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3687#p3687</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3687#p3687"/>
<title type="html"><![CDATA[Re: no puedo instalar PySFML! x(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3687#p3687"><![CDATA[
todo bien! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />gracias hugoruscitti!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Ago 08, 2010 1:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-07T04:14:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3673#p3673</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3673#p3673"/>
<title type="html"><![CDATA[Re: no puedo instalar PySFML! x(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3673#p3673"><![CDATA[
Aquí te dejo un ejemplo de programa con SFML.<br /><br />Tienes que poner el mismo directorio del ejemplo una imagen<br />que tenga el nombre &quot;imagen.png&quot;.<br /><br />El ejemplo te muestra una imagen que se mueve junto al<br />cursor:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>from PySFML import sf<br />import sys<br /><br />app = sf.RenderWindow(sf.VideoMode(640, 480), &quot;Simple&quot;)<br /><br />event = sf.Event()<br />input = app.GetInput()<br />color = sf.Color(200, 200, 200)<br /><br />image = sf.Image()<br />image.LoadFromFile('image.png')<br /><br />sprite = sf.Sprite(image)<br />sprite.SetCenter(100, 100)<br /><br /># Se puede usar 'app.IsOpened()'<br />while True:<br />    app.Clear(color)<br />    app.Draw(sprite)<br /><br />    # Retorna true si existe un evento para atender<br />    while app.GetEvent(event):<br /><br />        x = input.GetMouseX()<br />        y = input.GetMouseY()<br /><br />        sprite.SetX(x)<br />        sprite.SetY(y)<br /><br />        if event.Type == sf.Event.KeyPressed:<br />            if event.Key.Code == sf.Key.Escape:<br />                app.Close()<br />                sys.exit(0)<br /><br />    app.Display()<br /></code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ago 07, 2010 4:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-07T04:07:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3672#p3672</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3672#p3672"/>
<title type="html"><![CDATA[Re: no puedo instalar PySFML! x(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3672#p3672"><![CDATA[
<blockquote><div><cite>shackra escribió:</cite><br />ya hice lo sugerido sudo apt-get install python-sfml, pero sigo sin poder compilar puesto que intente importar la libreria pero nada, cual nombre se usa para importar el SFML?<br /></div></blockquote><br /><br />No, tendrías que escribir algo cómo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>from PySFML import sf</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ago 07, 2010 4:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-08-07T03:53:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3671#p3671</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3671#p3671"/>
<title type="html"><![CDATA[Re: no puedo instalar PySFML! x(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3671#p3671"><![CDATA[
Ubuntu es maaalo, maaaalo! :C<br />por eso uso Trisquel.<br /><br />parece que si era necesario eso que me sugieres, gracias! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />[ACTUALIZACION]<br />ya hice lo sugerido sudo apt-get install python-sfml, pero sigo sin poder compilar puesto que intente importar la libreria pero nada, cual nombre se usa para importar el SFML?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Ago 07, 2010 3:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-07T02:23:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3669#p3669</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3669#p3669"/>
<title type="html"><![CDATA[Re: no puedo instalar PySFML! x(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3669#p3669"><![CDATA[
Es raro, ¿has instalado anteriormente la biblioteca SFML de C++?...<br /><br />Otra alternativa, si usas un sistema como Debian o Ubuntu es usar<br />un comando cómo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>apt-get install python-sfml<br /></code></dd></dl><br /><br />eso te ahorrará mil problemas de compilación....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ago 07, 2010 2:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-08-07T01:20:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3668#p3668</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3668#p3668"/>
<title type="html"><![CDATA[no puedo instalar PySFML! x(]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=816&amp;p=3668#p3668"><![CDATA[
tengo este error cuando hago el setup.py build!<br /><dl class="codebox"><dt>Code: </dt><dd><code>jorge@Abril:~/Descargas/SFML-1.6/python$ python setup.py build<br />running build<br />running build_py<br />creating build<br />creating build/lib.linux-x86_64-2.6<br />creating build/lib.linux-x86_64-2.6/PySFML<br />copying PySFML/__init__.py -&gt; build/lib.linux-x86_64-2.6/PySFML<br />running build_ext<br />building 'PySFML.sf' extension<br />creating build/temp.linux-x86_64-2.6<br />creating build/temp.linux-x86_64-2.6/src<br />gcc -pthread -fno-strict-aliasing -DNDEBUG -g -fwrapv -O2 -Wall -Wstrict-prototypes -fPIC -I.http://losersjuegos.com.ar/foro/include -I/usr/include/python2.6 -c src/Clock.cpp -o build/temp.linux-x86_64-2.6/src/Clock.o<br />cc1plus: warning: command line option &quot;-Wstrict-prototypes&quot; is valid for Ada/C/ObjC but not for C++<br />In file included from src/Clock.cpp:25:<br />src/Clock.hpp:30:33: error: SFML/System/Clock.hpp: No existe el archivo o directorio<br />In file included from src/Clock.cpp:25:<br />src/Clock.hpp:34: error: ‘sf’ has not been declared<br />src/Clock.hpp:34: error: ISO C++ forbids declaration of ‘Clock’ with no type<br />src/Clock.hpp:34: error: expected ‘;’ before ‘*’ token<br />src/Clock.cpp: In function ‘void PySfClock_dealloc(PySfClock*)’:<br />src/Clock.cpp:33: error: ‘struct PySfClock’ has no member named ‘obj’<br />src/Clock.cpp: In function ‘PyObject* PySfClock_new(PyTypeObject*, PyObject*, PyObject*)’:<br />src/Clock.cpp:44: error: ‘struct PySfClock’ has no member named ‘obj’<br />src/Clock.cpp:44: error: expected type-specifier before ‘sf’<br />src/Clock.cpp:44: error: expected ‘;’ before ‘sf’<br />src/Clock.cpp: In function ‘PyObject* PySfClock_GetElapsedTime(PySfClock*)’:<br />src/Clock.cpp:53: error: ‘struct PySfClock’ has no member named ‘obj’<br />src/Clock.cpp: In function ‘PyObject* PySfClock_Reset(PySfClock*)’:<br />src/Clock.cpp:59: error: ‘struct PySfClock’ has no member named ‘obj’<br />error: command 'gcc' failed with exit status 1<br />jorge@Abril:~/Descargas/SFML-1.6/python$ <br /></code></dd></dl><br /><br />uso Trisquel 4.0, alguna sugerencia!?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Ago 07, 2010 1:20 am</p><hr />
]]></content>
</entry>
</feed>