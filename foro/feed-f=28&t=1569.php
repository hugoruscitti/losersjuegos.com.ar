<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=28&amp;t=1569" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-11-03T16:23:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=28&amp;t=1569</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-11-03T16:23:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1569&amp;p=7183#p7183</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1569&amp;p=7183#p7183"/>
<title type="html"><![CDATA[Re: pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1569&amp;p=7183#p7183"><![CDATA[
Hola!,<br /><br />por lo visto no hay un error en lo que aparece en pantalla, algunas son advertencias de cómo se<br />generó Box2D (y en todos los equipos da esas advertencias).<br /><br />¿Te habrá quedado el error fuera del post?, en el sitio de pilas hay un tutorial de instalación, ¿en<br />que paso te surgió el error?:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/instalando_pilas_en_ubuntu_12_04/instalando_pilas_en_ubuntu_12_04.rst">http://www.pilas-engine.com.ar/doc/tuto ... _12_04.rst</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Nov 03, 2012 4:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dimoni1973]]></name></author>
<updated>2012-11-03T09:07:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1569&amp;p=7182#p7182</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1569&amp;p=7182#p7182"/>
<title type="html"><![CDATA[pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1569&amp;p=7182#p7182"><![CDATA[
hola neccesito ayuda, instalando pilas no me deja me da este error:<br /><br />root@dimoni-laptop:/home/dimoni/pybox2d# python setup.py build<br />Using setuptools (version 0.6).<br />running build<br />running build_py<br />copying library/Box2D/Box2D.py -&gt; build/lib.linux-i686-2.6/Box2D<br />copying library/Box2D/__init__.py -&gt; build/lib.linux-i686-2.6/Box2D<br />running build_ext<br />building 'Box2D._Box2D' extension<br />swigging Box2D/Box2D.i to Box2D/Box2D_wrap.cpp<br />swig -python -c++ -IBox2D -small -O -includeall -ignoremissing -w201 -globals b2Globals -outdir library/Box2D -keyword -w511 -D_SWIG_KWARGS -o Box2D/Box2D_wrap.cpp Box2D/Box2D.i<br />Box2D/Collision/b2DynamicTree.h:43: Warning(312): Nested union not currently supported (ignored).<br />Box2D/Box2D_printing.i:326: Warning(303): %extend defined for an undeclared class b2LoopShape.<br />Box2D/Common/b2Settings.h:144: Warning(506): Can't wrap varargs with keyword arguments enabled<br />Box2D/Common/b2Math.h:90: Warning(509): Overloaded method b2Vec2::operator ()(int32) is shadowed by b2Vec2::operator ()(int32) const at Box2D/Common/b2Math.h:84.<br />gcc -pthread -fno-strict-aliasing -DNDEBUG -g -fwrapv -O2 -Wall -Wstrict-prototypes -fPIC -I/usr/include/python2.6 -c Box2D/Box2D_wrap.cpp -o build/temp.linux-i686-2.6/Box2D/Box2D_wrap.o -I. -Wno-unused<br />cc1plus: warning: command line option &quot;-Wstrict-prototypes&quot; is valid for Ada/C/ObjC but not for C++<br />Box2D/Box2D_wrap.cpp: In constructor ‘b2DrawExtended::b2DrawExtended()’:<br />Box2D/Box2D_wrap.cpp:4376: warning: ‘b2DrawExtended::flipX’ will be initialized after<br />Box2D/Box2D_wrap.cpp:4376: warning:   ‘bool b2DrawExtended::flipY’<br />Box2D/Box2D_wrap.cpp:4441: warning:   when initialized here<br />gcc -pthread -fno-strict-aliasing -DNDEBUG -g -fwrapv -O2 -Wall -Wstrict-prototypes -fPIC -I/usr/include/python2.6 -c Box2D/Dynamics/b2Island.cpp -o build/temp.linux-i686-2.6/Box2D/Dynamics/b2Island.o -I. -Wno-unused<br />cc1plus: warning: command line option &quot;-Wstrict-prototypes&quot; is valid for Ada/C/ObjC but not for C++<br />In file included from /usr/include/python2.6/Python.h:8,<br />                 from http://losersjuegos.com.ar/foro/Box2D/Common/b2Settings.h:29,<br />                 from http://losersjuegos.com.ar/foro/Box2D/Common/b2Math.h:22,<br />                 from http://losersjuegos.com.ar/foro/Box2D/Collision/b2Distance.h:23,<br />                 from Box2D/Dynamics/b2Island.cpp:19:<br />/usr/include/python2.6/pyconfig.h:1031:1: warning: &quot;_POSIX_C_SOURCE&quot; redefined<br />In file included from /usr/include/assert.h:37,<br />                 from /usr/include/c++/4.4/cassert:45,<br />                 from http://losersjuegos.com.ar/foro/Box2D/Common/b2Settings.h:22,<br />                 from http://losersjuegos.com.ar/foro/Box2D/Common/b2Math.h:22,<br />                 from http://losersjuegos.com.ar/foro/Box2D/Collision/b2Distance.h:23,<br />                 from Box2D/Dynamics/b2Island.cpp:19:<br />/usr/include/features.h:158:1: warning: this is the location of the previous definition<br /><br />a ver si podeis ayudarme lo descubrí gracias a este foro y veo una buena herramienta.<br /><br />grcias <br /><br />un saludo.....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2678">dimoni1973</a> — Sab Nov 03, 2012 9:07 am</p><hr />
]]></content>
</entry>
</feed>