<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=1&amp;t=585" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-12T19:21:10+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=1&amp;t=585</id>
<entry>
<author><name><![CDATA[thepoi]]></name></author>
<updated>2009-07-12T19:21:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2727#p2727</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2727#p2727"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2727#p2727"><![CDATA[
-Gestionarlo en la función principal y pasar una lista con los eventos al update del Escenario. <br /><br />yo creo que es la mejor opción, con ella vamos en pos de patrones de diseño (patrón controlador)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1943">thepoi</a> — Dom Jul 12, 2009 7:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-12T17:55:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2725#p2725</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2725#p2725"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2725#p2725"><![CDATA[
Buenas:<br />He estado trabajando un poco en el código, y me ha surgido una pequeña duda. Pone que en la primera etapa deberíamos de tener programados ya los eventos del ratón y teclado.<br />Pero no se que método sería el más apropiado:<br /><br />-Gestionarlo dentro de cada Escenario( si pulso 'z' en el menú principal no hace nada, mientras que en el juego rota la pieza)<br />-Gestionarlo en la función principal y pasar una lista con los eventos al update del Escenario.<br /><br />Estos son los dos que se me han ocurrido a mí, pero a lo mejor hay métodos mejores.<br /><br />Por cierto: los eventos del teclado mejor manejarlo con key.get_pressed() no? porque así no haría falta andar pulsando la tecla todo el rato, sino que se deja pulsada y listo.<br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Jul 12, 2009 5:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2009-07-12T11:28:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2722#p2722</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2722#p2722"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2722#p2722"><![CDATA[
Hola.<br /><br />Lei la documentacion que hay hasta ahora, esta muy bien, faltaria definir cosas mas complejas.<br /><br />Yo no tengo mucha experiencia como se debe proseguir en un desarollo en equipo. Espero no saltarme muchas etapas, pero se deberia definir las distintas partes del juego en si ? Supongo que se podria hacer un Controller sobre las distintas pantallas del juego, para poderse independizar.<br /><br />Existe una Wiki que reune bastantes teas sobre la mecanica del Tetris, los distintos tipos de puntaje, el soft y hard drop, piezas fantasmas, floor y wall kick, etc...<br /><br /><!-- m --><a class="postlink" href="http://tetris.wikia.com/wiki/Tetris_Wiki">http://tetris.wikia.com/wiki/Tetris_Wiki</a><!-- m --><br /><br />Saludos,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Dom Jul 12, 2009 11:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-07-12T07:52:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2721#p2721</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2721#p2721"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2721#p2721"><![CDATA[
Es un gran detalle a tener en cuenta.<br />Sólo señalaría que me parece importante que la documentación de las clases y funciones no se quede en un comentario breve. Hay programas que separan estas cadenas de documentación del programa y hacen un texto de ayuda con ellas. Por ejemplo, el autor de <a href="http://diveintopython" class="postlink">«Inmersión en Python»</a> ha hecho un <a href="http://diveintopython.org/download/diveintopython-examples-5.4.zip" class="postlink">módulo (apihelper.py)</a> que obtiene esas cadenas en línea en la consola para obtener una guía rápida de funciónes o métodos y así resolver dudas a la hora de utilizarlo. Aquí pongo unos ejemplos de apihelper.info:<br /><dl class="codebox"><dt>Code: </dt><dd><code>&gt;&gt;&gt; from apihelper import info<br />&gt;&gt;&gt; lista = &#91;&#93;<br />&gt;&gt;&gt; info&#40;lista&#41;<br />__add__    x.__add__&#40;y&#41; &lt;x&gt; new list list&#40;sequence&#41; -&gt; new list initialized from sequence's items<br />__contains__ x.__contains__&#40;y&#41; &lt;==&gt; y in x<br />__delattr__ x.__delattr__&#40;'name'&#41; &lt;==&gt; del x.name<br />__delitem__ x.__delitem__&#40;y&#41; &lt;==&gt; del x&#91;y&#93;<br />__delslice__ x.__delslice__&#40;i, j&#41; &lt;==&gt; del x&#91;i:j&#93; Use of negative indices is not supported.<br />__eq__     x.__eq__&#40;y&#41; &lt;==&gt; x==y<br />__format__ default object formatter<br />__ge__     x.__ge__&#40;y&#41; &lt;x&gt;=y<br />__getattribute__ x.__getattribute__&#40;'name'&#41; &lt;==&gt; x.name<br />__getitem__ x.__getitem__&#40;y&#41; &lt;==&gt; x&#91;y&#93;<br />__getslice__ x.__getslice__&#40;i, j&#41; &lt;==&gt; x&#91;i:j&#93; Use of negative indices is not supported.<br />__gt__     x.__gt__&#40;y&#41; &lt;x&gt;y<br />__iadd__   x.__iadd__&#40;y&#41; &lt;==&gt; x+=y<br />__imul__   x.__imul__&#40;y&#41; &lt;==&gt; x*=y<br />__init__   x.__init__&#40;...&#41; initializes x; see x.__class__.__doc__ for signature<br />__iter__   x.__iter__&#40;&#41; &lt;==&gt; iter&#40;x&#41;<br />__le__     x.__le__&#40;y&#41; &lt;==&gt; x&lt;=y<br />__len__    x.__len__&#40;&#41; &lt;==&gt; len&#40;x&#41;<br />__lt__     x.__lt__&#40;y&#41; &lt;==&gt; x&lt;y<br />__mul__    x.__mul__&#40;n&#41; &lt;==&gt; x*n<br />__ne__     x.__ne__&#40;y&#41; &lt;x&gt; a new object with type S, a subtype of T<br />__reduce__ helper for pickle<br />__reduce_ex__ helper for pickle<br />__repr__   x.__repr__&#40;&#41; &lt;==&gt; repr&#40;x&#41;<br />__reversed__ L.__reversed__&#40;&#41; -- return a reverse iterator over the list<br />__rmul__   x.__rmul__&#40;n&#41; &lt;==&gt; n*x<br />__setattr__ x.__setattr__&#40;'name', value&#41; &lt;==&gt; x.name = value<br />__setitem__ x.__setitem__&#40;i, y&#41; &lt;==&gt; x&#91;i&#93;=y<br />__setslice__ x.__setslice__&#40;i, j, y&#41; &lt;==&gt; x&#91;i:j&#93;=y Use of negative indices is not supported.<br />__sizeof__ L.__sizeof__&#40;&#41; -- size of L in memory, in bytes<br />__str__    x.__str__&#40;&#41; &lt;str&gt; integer -- return number of occurrences of value<br />extend     L.extend&#40;iterable&#41; -- extend list by appending elements from the iterable<br />index      L.index&#40;value, &#91;start, &#91;stop&#93;&#93;&#41; -&gt; integer -- return first index of value. Raises ValueError if the value is not present.<br />insert     L.insert&#40;index, object&#41; -- insert object before index<br />pop        L.pop&#40;&#91;index&#93;&#41; -&gt; item -- remove and return item at index &#40;default last&#41;. Raises IndexError if list is empty or index is out of range.<br />remove     L.remove&#40;value&#41; -- remove first occurrence of value. Raises ValueError if the value is not present.<br />reverse    L.reverse&#40;&#41; -- reverse *IN PLACE*<br />sort       L.sort&#40;cmp=None, key=None, reverse=False&#41; -- stable sort *IN PLACE*; cmp&#40;x, y&#41; -&gt; -1, 0, 1<br />&gt;&gt;&gt; info&#40;lista.__add__&#41;<br />__call__   x.__call__&#40;...&#41; &lt;==&gt; x&#40;...&#41;<br />__class__  &lt;attribute&gt;<br />__cmp__    x.__cmp__&#40;y&#41; &lt;==&gt; cmp&#40;x,y&#41;<br />__delattr__ x.__delattr__&#40;'name'&#41; &lt;==&gt; del x.name<br />__format__ default object formatter<br />__getattribute__ x.__getattribute__&#40;'name'&#41; &lt;==&gt; x.name<br />__hash__   x.__hash__&#40;&#41; &lt;hash&gt;&gt;&gt; info&#40;apihelper&#41;<br />info       Print methods and doc strings. Takes module, class, list, dictionary, or string.<br />&gt;&gt;&gt; from pygame import image<br />&gt;&gt;&gt; info&#40;image&#41;<br />frombuffer pygame.image.frombuffer&#40;string, size, format&#41;: return Surface create a new Surface that shares data inside a string buffer<br />fromstring pygame.image.fromstring&#40;string, size, format, flipped=False&#41;: return Surface create new Surface from a string buffer<br />get_extended pygame.image.get_extended&#40;&#41;: return bool test if extended image formats can be loaded<br />load       pygame module for image transfer<br />load_basic pygame.image.load&#40;filename&#41;: return Surface pygame.image.load&#40;fileobj, namehint=&#41;: return Surface load new image from a file<br />load_extended pygame module for image transfer<br />save       pygame.image.save&#40;Surface, filename&#41;: return None save an image to disk<br />save_extended pygame module for image transfer<br />tostring   pygame.image.tostring&#40;Surface, format, flipped=False&#41;: return string transfer image to string buffer<br />&gt;&gt;&gt; <br /></code></dd></dl><br /><br />Más información sobre <a href="http://diveintopython.org/power_of_introspection/index.html#apihelper.divein" class="postlink">'apihelper.info'</a>.<br /><br />En este sentido todo debería tener una cadena de documentación, módulos, clases, funciones y métodos. Podeis leer la <a href="http://www.python.org/dev/peps/pep-0257/#id4" class="postlink">«convención de utilización de las cadenas de documentación»</a> (en inglés), pero básicamente se trata de explicar qué hace, cómo lo hace, qué contiene y qué devuelve, todo de una forma lo más concisa y clara posible.<br />Direis que es solo un juego sencillo, pero si nos acostumbramos a hacer las cosas bien desde el principio haremos que la vida sea más fácil para todos, los que empiezan y los que vuelven para refrescar. Tenemos que tener en cuenta que aquí viene gente para aprender y con estos detalles estamos ayudandoles a que no cueste tanto.<br />Creo que me ha quedado un poco largo, pero si conseguimos que la documentación quede clara y concisa en todo lo que hagamos habrá valido la pena.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Dom Jul 12, 2009 7:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-07-11T21:38:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2719#p2719</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2719#p2719"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2719#p2719"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />... y acordar un estilo de codificación, como apuntaba hugo en la lista de tareas.<br /></div></blockquote><br /><br />Listo, hace un momento subí un texto con el estilo de<br />codificación que propongo... es un subconjunto del estilo<br />que usan oficialmente en python:<br /><br />    <!-- m --><a class="postlink" href="http://asadetris.googlecode.com/hg/doc/build/html/estilo.html">http://asadetris.googlecode.com/hg/doc/ ... stilo.html</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Jul 11, 2009 9:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-07-11T18:49:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2717#p2717</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2717#p2717"/>
<title type="html"><![CDATA[Re: Cambios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2717#p2717"><![CDATA[
<blockquote><div><cite>rafahack95 escribió:</cite><br />Acabo de añadir al programa la función para cargar imágenes, y he subido los cambios para ir familiarizandome un pco con mercurial. Me parece que lo he hecho correctamente, porque en Google code salen los cambios y mi comentario.<br />Ejecuten hg update para actualizar su repositorio local y veran (en teoría) en la carpeta lib un archivo llamado utils.py y ahí esta la función.<br />Queda crear una carpeta donde guardar las imágenes, por lo que no he podido acabar la función del todo, falta en una variable llamada DATOS, dar la ruta al directorio de imágenes para que así al llamar a la función solo halla que pasar como argumento el nombre de la imagen sin la ruta completa.<br />¡¡¡Saludos!!!<br /></div></blockquote><br /><br />Perfecto, ahora agregue una imagen de ejemplo y modifique<br />el programa principal... buenisimo, ahora ya tenemos resuelta<br />una tarea mas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Jul 11, 2009 6:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-07-11T18:44:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2716#p2716</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2716#p2716"/>
<title type="html"><![CDATA[De acuerdo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2716#p2716"><![CDATA[
A vale, es wue tenía ganas de probar mercurial, antes de hacer nada más, esperare a que hayamos resuelto eso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Sab Jul 11, 2009 6:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-11T18:27:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2715#p2715</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2715#p2715"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2715#p2715"><![CDATA[
yo creo que antes de empezar a programar deberíamos resolver del todo el diseño( tampoco hace falta que sea nada muy específico, solo las líneas generales) y acordar un estilo de codificación, como apuntaba hugo en la lista de tareas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Jul 11, 2009 6:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-07-11T18:22:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2714#p2714</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2714#p2714"/>
<title type="html"><![CDATA[Cambios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2714#p2714"><![CDATA[
Acabo de añadir al programa la función para cargar imágenes, y he subido los cambios para ir familiarizandome un pco con mercurial. Me parece que lo he hecho correctamente, porque en Google code salen los cambios y mi comentario.<br />Ejecuten hg update para actualizar su repositorio local y veran (en teoría) en la carpeta lib un archivo llamado utils.py y ahí esta la función.<br />Queda crear una carpeta donde guardar las imágenes, por lo que no he podido acabar la función del todo, falta en una variable llamada DATOS, dar la ruta al directorio de imágenes para que así al llamar a la función solo halla que pasar como argumento el nombre de la imagen sin la ruta completa.<br />¡¡¡Saludos!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Sab Jul 11, 2009 6:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-07-11T09:21:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2710#p2710</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2710#p2710"/>
<title type="html"><![CDATA[Re: Tutorial Python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2710#p2710"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br /><blockquote><div><cite>rafahack95 escribió:</cite>Sobre asadetris, ¿puedo descargar los fuentes para leerlos e ir viendo como progresan y tal, sin estar registrado en el repositorio? Si, ¿no?<br /></div></blockquote><br /><br />Si claro, no hace falta estar registrado para ver y seguir el<br />progreso. De hecho queremos que lo vayan viendo. Y en<br />cuanto se animen hacemos posible que puedan escribir cambios...<br /><br />También puedes ver el historial de cambios en la siguiente<br />dirección:<br /><br />   <!-- m --><a class="postlink" href="http://code.google.com/p/asadetris/source/list">http://code.google.com/p/asadetris/source/list</a><!-- m --><br /><br />Saludos.</div></blockquote><br />Ya tengo una copia en mi escritorio realizada con mercurial. Voy a leer los fuentes y las tareas por hacer a ver si puedo ayudar en algo o todavía está muy por encima de mi. Es que recién empecé con los objetos reescribiendo el juego este del pong que había en LinuxJuegos, pero creo que el concepto lo tengo pillao. Voy a leerlos y si veo que puedo hacer algo aviso, y si no pues ya colaborare en el proximo proyecto.<br />¡¡¡Saludos a todos!!! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Sab Jul 11, 2009 9:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Meldron]]></name></author>
<updated>2009-07-11T00:25:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2709#p2709</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2709#p2709"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2709#p2709"><![CDATA[
Bueno gracias rafahack95 por la info, ya estoy leyendo &quot;Aprende a pensar como un programador con Python&quot;. <br /><br />Tengo una duda con Mercurial, al usar el comando push se hacen los cambios en el servidor de manera definitoria? o lo tiene que confirmar otro usuario con el comando pull? Es decir siempre que alguien haga una modificacion basta con hacer hg para visualizarla o tengo que utilizar pull?(no se si se entendio <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> )<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2108">Meldron</a> — Sab Jul 11, 2009 12:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-07-10T23:21:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2708#p2708</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2708#p2708"/>
<title type="html"><![CDATA[Re: Tutorial Python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2708#p2708"><![CDATA[
<blockquote><div><cite>rafahack95 escribió:</cite><br />Sobre asadetris, ¿puedo descargar los fuentes para leerlos e ir viendo como progresan y tal, sin estar registrado en el repositorio? Si, ¿no?<br /></div></blockquote><br /><br />Si claro, no hace falta estar registrado para ver y seguir el<br />progreso. De hecho queremos que lo vayan viendo. Y en<br />cuanto se animen hacemos posible que puedan escribir cambios...<br /><br />También puedes ver el historial de cambios en la siguiente<br />dirección:<br /><br />   <!-- m --><a class="postlink" href="http://code.google.com/p/asadetris/source/list">http://code.google.com/p/asadetris/source/list</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Jul 10, 2009 11:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-07-10T23:16:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2707#p2707</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2707#p2707"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2707#p2707"><![CDATA[
<blockquote><div><cite>thepoi escribió:</cite><br />Hola,<br />Yo tengo algunas dudas con Mercurial.<br />Primero hice un clone.<br /><dl class="codebox"><dt>Code: </dt><dd><code>hg clone https://asadetris.googlecode.com/hg/ asadetris</code></dd></dl><br /><br />Esto me creó el repositorio en un directorio llamado asadetris en mi ordenador.<br />Hasta ahí todo bien.<br />Edito algo del main.py por ejemplo. Ahora hago un commit y se me abre un fichero de texto para introducir un mensaje.<br />Lo introduzco e intuyo que se ha hecho el commit.<br /><br />Exactamente, ¿que se supone que he hecho? ¿he actualizado algo? ¿a quien llega ese mensaje?<br /><br />Y lo mas importante de todo, ¿como es una sesión de trabajo normal con mercurial?<br />Supongo que será algo así:<br /><br />bajarse cambios recientes<br />editar<br />subir mis cambios.<br /><br />pero con tanto pull, push, commit, clone etc me despisto un poco.<br /></div></blockquote><br /><br /><br />Saludos, te resumo un poco como es una sesion de trabajo<br />con mercurial (si hago a tiempo trato de redactarlo bien<br />y documentarlo).<br /><br />Con mercurial, los commits con operaciones locales, cuando<br />haces algo como:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>hg commit -m &quot;mejorando sistema de ... bla bla&quot;<br /></code></dd></dl><br /><br />no se notifica a nadie, solo queda registrado en tu equipo<br />ese cambio.<br /><br />Para que otros reciban tus cambios tienes que empujar &quot;push&quot;<br />los cambios al servidor, algo asi:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>hg push<br /></code></dd></dl><br /><br />y recién ahí los cambios van al servidor, de donde otros<br />podemos luego consultar y obtener las modificaciones<br />que has realizado usando el comando pull (jalar, atraer):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>hg pull<br /></code></dd></dl><br /><br />Cabe aclarar, para hacer estas ultimas operaciones necesitas<br />permisos para escribir en el repositorio. Avisame por correo<br />tu dirección de correo gmail así te asigno los permisos. Ah, y<br />por supuesto lo mismo corre para todos los que participan.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Jul 10, 2009 11:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-07-10T19:46:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2706#p2706</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2706#p2706"/>
<title type="html"><![CDATA[Tutorial Python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2706#p2706"><![CDATA[
En esta web hay uno en la sección de libros, que es Introducción a la programación con Python, aunque si quieres algo más completo, puedes bajarte Aprende a pensar como un programador con Python, aunque ese creo que no esta en la web, aunque lo encontraras sin problemas. Son los que yo estoy leyendo, pero más que enseñarte solo Python, también te explican los fundamentos de la programación, si en tu caso no es necesario podrías mirar otro libro.<br />Sobre asadetris, ¿puedo descargar los fuentes para leerlos e ir viendo como progresan y tal, sin estar registrado en el repositorio? Si, ¿no?<br />¡¡¡Saludos!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Vie Jul 10, 2009 7:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Meldron]]></name></author>
<updated>2009-07-10T16:49:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2705#p2705</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2705#p2705"/>
<title type="html"><![CDATA[Propuesta de proyecto: asadetris]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=585&amp;p=2705#p2705"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br /><blockquote><div><cite>Meldron escribió:</cite>Me gustaría ser parte del proyecto, pero nunca use python.<br />Igual hace un tiempo que estoy con un proyecto de tetris en C++/SDL, casi terminado.<br />La cuestión es que se me ocurrió hacer un proyecto alternativo, especificamente lo mismo pero utilizando C++/SDL.<br />Quiero aclarar que me experiencia en C++ no es de lo mas alentadora <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />(pero bueno hay que empezar de abajo...)<br />¿Qué les parece?<br /></div></blockquote><br /><br />Me parece perfecto, te propongo lo siguiente: sumate a nuestro<br />equipo, aprenderás algo de python y de paso te dará ideas<br />para que luego las lleves a C++ y SDL.</div></blockquote><br /><br />Perfecto me sumo al equipo para aprender. <br />Ah otra cosa, me pueden recomendar algun tutorial de python?<br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2108">Meldron</a> — Vie Jul 10, 2009 4:49 pm</p><hr />
]]></content>
</entry>
</feed>