<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1142" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-11T14:07:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=1142</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-05-11T14:07:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5513#p5513</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5513#p5513"/>
<title type="html"><![CDATA[Re: Problema con la libreria STL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5513#p5513"><![CDATA[
El caso es que los desarrolladores de las stls no están obligados a seguir una implementación específica, simplemente una serie de guías, sobre todo en tema de interfaces y funcionalidad. Pero, de cualquier modo, si usas la del compilador propia no deberías tener problemas. Tmbn puedes probar stlport, que proporciona las mismas características en varias plataformas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié May 11, 2011 2:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Altair]]></name></author>
<updated>2011-05-11T07:44:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5512#p5512</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5512#p5512"/>
<title type="html"><![CDATA[Re: Problema con la libreria STL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5512#p5512"><![CDATA[
Al final he instalado la version de STL que trae gcc y he probado un ejemplo, compila y ejecuta sin problemas.<br /><br />Lo que me parece raro es que la oficial de esos errores y la propia de debian si lo haga. Creo que deberian funcionar ambas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=9">Altair</a> — Mié May 11, 2011 7:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-05-10T19:35:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5511#p5511</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5511#p5511"/>
<title type="html"><![CDATA[Re: Problema con la libreria STL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5511#p5511"><![CDATA[
mmm... parece un error de la propia biblioteca más bien, pero.... por qué no usar la propia de g++? es buena y no te va a dar ningún problema. Además que no requiere ningún paso de instalación ni nada parecido<br /><br />Otra cosa: <a href="http://www.cmake.org/cmake/help/cmake_tutorial.html" class="postlink">evoluciona y huye de los makefiles</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar May 10, 2011 7:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Altair]]></name></author>
<updated>2011-05-10T15:56:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5509#p5509</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5509#p5509"/>
<title type="html"><![CDATA[Problema con la libreria STL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1142&amp;p=5509#p5509"><![CDATA[
Estoy analizando el algoritmo &quot;A star&quot; y para eso uso g++ (estoy usando C/C++) y la libreria SDL para visualizar en pantalla. Los ejemplos del algoritmo que tengo usan la libreria STL, y ahi es donde tengo el problema. La he bajado de <!-- m --><a class="postlink" href="http://www.sgi.com/tech/stl/download.html">http://www.sgi.com/tech/stl/download.html</a><!-- m --> pero ahi no he encontrado ninguna informacion de como añadirla al programa principal.<br /><br />He probado añadir al compilador g++ la opcion &quot;-I/ruta/a/stl&quot;, pero no ha funcionado. Los errores son de este estilo:<br /><br />stl/type_traits.h:96: error: an explicit specialization must be preceded by ‘template &lt;&gt;’<br />stl/stl_iterator.h:848: warning: friend declaration ‘bool operator==(const istream_iterator&lt;_Tp, _Dist&gt;&amp;, const istream_iterator&lt;_Tp, _Dist&gt;&amp;)’ declares a non-template function<br />stl/stl_iterator.h:848: note: (if this is not what you intended, make sure the function template has already been declared and add &lt;&gt; after the function name here)<br />stl/stl_iterator.h:852: error: ISO C++ forbids declaration of ‘istream’ with no type<br />stl/stl_iterator.h:852: error: expected ‘;’ before ‘*’ token<br />stl/stl_iterator.h:868: error: expected ‘)’ before ‘&amp;’ token<br /><br />etc, la lista de errores es bastante larga.<br /><br />Creo que significa que algun archivo no ha sido añadido al proyecto, pero no  se que puede faltar ademas de la opcion &quot;-I/ruta/a/stl&quot;. Estoy haciendo pruebas con programas de ejemplo de STL pequeños que encuentro por Internet, para tratar de localizar mejor el error.<br /><br />Sistema operativo: Debian estable<br />Compilador: g++<br />Lenguaje: C/C++<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=9">Altair</a> — Mar May 10, 2011 3:56 pm</p><hr />
]]></content>
</entry>
</feed>