<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=837" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-21T06:25:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=837</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-21T06:25:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=837&amp;p=3799#p3799</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=837&amp;p=3799#p3799"/>
<title type="html"><![CDATA[SFML: Problema cargando sf::Sound con función fuera de clase]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=837&amp;p=3799#p3799"><![CDATA[
No sabía si ponerlo aquí o en el foro de bibliotecas, pero creo que no es un problema exclusivo de SFML.<br /><br />Replicando en C++ el código del motor Pilas, agregué funciones para cargar sonidos al actor de ejemplo (el mono):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Mono::Mono() {<br />   imagen_normal.LoadFromFile( &quot;data/mono_normal.png&quot; );<br />   imagen_grito.LoadFromFile( &quot;data/mono_grita.png&quot; );<br />   imagen_sonrisa.LoadFromFile( &quot;data/mono_sonrie.png&quot; );<br />   <br />   //~ Esto no funciona (no da error, pero no se reproduce el sonido)<br />   //~ sonido_sonrisa = Pilas::cargar_sonido( &quot;data/sonrisa.wav&quot; );<br />   //~ sonido_grito = Pilas::cargar_sonido( &quot;data/grito.wav&quot; );<br /><br />   //~ Esto si funciona<br />   sf::SoundBuffer bufer1, bufer2;<br />   bufer1.LoadFromFile( &quot;data/sonrisa.wav&quot; );<br />   bufer2.LoadFromFile( &quot;data/grito.wav&quot; );<br />   <br />   sonido_sonrisa.SetBuffer( bufer1 );<br />   sonido_grito.SetBuffer( bufer2 );<br />   <br />   SetImage( imagen_normal );<br />   _establecer_origen_en_centro();<br />}<br /></code></dd></dl><br />Ese código me funciona perfecto, al momento de llamar a las funciones pertinentes dentro de Mono, los sonidos se reproducen. Pero, usando el código que está comentado, los sonidos no se reproducen. La función cargar_sonido está en sonido.cpp:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;sonido.h&quot;<br /><br />#include &lt;iostream&gt;<br />using std::cout;<br />using std::endl;<br /><br />namespace Pilas {<br /><br />sf::Sound cargar_sonido( const string&amp; archivo ) {<br />   sf::SoundBuffer bufer;<br />   sf::Sound sonido;<br />   <br />   if ( !bufer.LoadFromFile( archivo ) ) {<br />      cout &lt;&lt; &quot;Error al cargar &quot; &lt;&lt; archivo &lt;&lt; endl;<br />   }<br />   <br />   sonido.SetBuffer( bufer );<br />   <br />   return sonido;<br />}<br /><br />}<br /></code></dd></dl><br /><br />Sin embargo, si en el main hago esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>//~ // aquí si funciona cargando sonido con Pilas::cargar_sonido<br />   sf::Sound prueba = Pilas::cargar_sonido( &quot;data/grito.wav&quot; );<br />   prueba.Play();<br /></code></dd></dl><br />El sonido se reproduce correctamente.<br /><br />Tengo la duda con el hecho de usar sf::SoundBuffer temporales que se liberan incluso antes de hacer uso del sf::Sound que se creó a partir de ellos, pero en el main no tuve el problema de la reproducción, por eso sospecho que es algún tipo de acceso o declaración que no hice o que debía hacer de otra forma, pero en estos momentos tengo ganas de irme a dormir <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />. Si alguien tiene oportunidad de darle un vistazo, el código completo está en este repositorio: <!-- m --><a class="postlink" href="http://bitbucket.org/josejorge/pilascpp">http://bitbucket.org/josejorge/pilascpp</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Ago 21, 2010 6:25 am</p><hr />
]]></content>
</entry>
</feed>