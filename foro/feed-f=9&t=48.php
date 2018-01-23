<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=48" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-02-05T00:16:15+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=48</id>
<entry>
<author><name><![CDATA[Shellman]]></name></author>
<updated>2007-02-05T00:16:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=167#p167</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=167#p167"/>
<title type="html"><![CDATA[Gracias]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=167#p167"><![CDATA[
Precisamente, ya habia decidido trabajar los estados del personaje, ya lei todos los articulos de la web incluyendo el de automatas y ahora creo que si podre mejorar el juego.<br /><br />Estoy de acuerdo en que se cambie el titulo del tema, pero no sabria que titulo ponerle pueden hacerlo ustedes.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=439">Shellman</a> — Lun Feb 05, 2007 12:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-02-04T07:03:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=164#p164</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=164#p164"/>
<title type="html"><![CDATA[Búsqueda de personajes y pathfinding (era: Felicitaciones !)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=164#p164"><![CDATA[
Quizás tienes algún problema en la implementación del algoritmo A*.<br /><br />Normalmente para estos casos se divide el mundo (mapa del juego) en tiles.<br /><br />Además de mantener un mapa del juego con la información de los tiles, se tiene otra matriz con valores 0 (espacio vacio) y 1 (ocupado). <br /><br />Entonces si quieres mover un objeto de un punto a otro, inicialmente tendrás una posición (x, y) medida en pixeles. Con estos datos debes primero saber en que posición o celda (de la matriz) se encuentra el objeto.<br /><br /><span style="text-decoration: underline">Transformación de coordenadas en pixeles a coordenadas lógicas de la matriz</span>:<br /><br /><span style="font-weight: bold">fila = y / alto_tile;<br />columna = x / ancho_tile;<br /></span><br /><br />Luego para el punto final, se realiza la misma operación, pasar de coordenadas en pixeles a coordenadas lógicas (de la matriz). Teniendo estos dos pares de posiciones, se la pasamos a la función que implementa el algoritmo A*, y esta probablemente nos devolverá una matriz con 0's y 1's, donde los 1 corresponden a la ruta más corta desde punto inicial al punto final.<br /><br />Con estos datos en la matriz resultante, se debe implementar algún mecanismo que vaya recorriendo la matriz (solo los que tienen el valor 1) e ir moviendo el personaje por la ruta obtenida.<br /><br />A continuación te dejo algunos artículos que hablan sobre este método, el pathfinding.<br /><br /><span style="font-weight: bold">An Introduction to Pathfinding</span><br /><a href="http://www.devmaster.net/articles/pathfinding/" class="postlink">http://www.devmaster.net/articles/pathfinding/</a><br /><br /><span style="font-weight: bold">A* Pathfinding para Principiantes</span><br /><a href="http://www.policyalmanac.org/games/aStarTutorial_es.htm" class="postlink">http://www.policyalmanac.org/games/aStarTutorial_es.htm</a><br /><br />En <a href="http://www.gamedev.net" class="postlink">http://www.gamedev.net</a> recuerdo que habían algunos tutoriales sobre el tema. Pero ahora no los puedo linkear ya que justo ahora el sitio se encuentra en mantención.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Dom Feb 04, 2007 7:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-02-03T21:30:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=163#p163</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=163#p163"/>
<title type="html"><![CDATA[Búsqueda de personajes y pathfinding (era: Felicitaciones !)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=163#p163"><![CDATA[
<blockquote><div><cite>Shellman escribió:</cite><br />Basicamente lo que necesito es una indicacion de donde podria poner el metodo para mover el personaje, tengo un metodo llamado:<br /><br />mover_hasta(int x, int y);<br /><br />El cul recibe las coordenadas hacia donde tiene que llegar, pero no se en que parte del ciclo de juego tendria que meter la llamada a este metodo.<br /></div></blockquote><br />Es complicado imaginarlo, pero en muchos juegos el puntero<br />del mouse se representa mediante un objeto que conoce al<br />personaje y el escenario del juego. De forma que al recibir<br />un evento click, el objeto que representa al mouse le dice<br />al personaje:<br /><br />   mover_hasta(direccion_x_del_mouse, direccion_y_del_mouse)<br /><br />el punto es que este método solamente tiene que crear el<br />camino &quot;probablemente mas corto&quot; desde donde está hasta<br />ese punto indicado en los parámetros del método.<br /><br />Luego, el personaje debería almacenar la ruta a recorrer y <br />avanzar a través de ella mas adelante.<br /><br /><blockquote><div><cite>Shellman escribió:</cite><br />Ya hice una prueba pero el personaje solo da un paso y luego no se mueve mas, y el programa se bloquea (no me permite hacer nada mas, ni moverlo con las teclas de direccion ni nada).<br /><br />Estoy tratando de encontrar el mejor lugar para poner la llamada al metodo pero no logro encontrarla, si tienen una idea me avisan, yo seguire intentando buscar un buen lugar para ponerla.<br />Bye...<br /></div></blockquote><br />Pienso que el método que realizas estaría oportuno para indicarle<br />al jugador que busque un camino y recuerde comenzar a caminar.<br /><br />Es probable que el personaje se quede detenido porque has utilizado<br />el método para elegir el camino y caminar, en lugar de separar<br />las dos acciones.<br /><br />Es útil gestionar el comportamiento de cada personaje del juego<br />en base a &quot;estados&quot;, es decir, que el personaje esté en estado <br />&quot;normal/esperando&quot; hasta que recibe el método &quot;mover_hasta&quot;, en ese<br />instante calcula un camino y cambia a estado &quot;caminando&quot; en<br />donde recorre el camino hasta llegar a destino, en ese momento<br />cambia nuevamente el estado &quot;normal/esperando&quot;.<br /><br />Entonces, tu juego llamaría constantemente a un método para<br />realizar el estado de personaje actual, por ejemplo, esperar o <br />caminar (solo un paso), y el evento &quot;mover_hasta&quot; simplemente<br />genera una nueva ruta para que el personaje comience a caminar<br />hacia otra dirección.<br /><br />En el artículo:<br />  <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/automatas/automatas.php">http://www.losersjuegos.com.ar/referenc ... omatas.php</a><!-- m --><br /><br />explico una forma de implementar estados en un personaje. <br />Lamentablemente nunca pude ampliar ese artículo para mostrar<br />otra aproximación mas sencilla al mismo asunto, llamada <br />State Pattern:<br /><br /><!-- m --><a class="postlink" href="http://es.wikipedia.org/wiki/State_(patr%C3%B3n_de_dise%C3%B1o">http://es.wikipedia.org/wiki/State_(pat ... ise%C3%B1o</a><!-- m -->)<br /><br />Suerte.<br /><br />pd: sería bueno cambiar el &quot;asunto&quot; de este mensaje, para que<br />sea mas fácil de encontrar a quienes lo busquen ¿no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Feb 03, 2007 9:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shellman]]></name></author>
<updated>2007-02-03T18:45:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=162#p162</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=162#p162"/>
<title type="html"><![CDATA[Búsqueda de personajes y pathfinding (era: Felicitaciones !)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=162#p162"><![CDATA[
Basicamente lo que necesito es una indicacion de donde podria poner el metodo para mover el personaje, tengo un metodo llamado:<br /><br />mover_hasta(int x, int y);<br /><br />El cul recibe las coordenadas hacia donde tiene que llegar, pero no se en que parte del ciclo de juego tendria que meter la llamada a este metodo.<br /><br />Ya hice una prueba pero el personaje solo da un paso y luego no se mueve mas, y el programa se bloquea (no me permite hacer nada mas, ni moverlo con las teclas de direccion ni nada).<br /><br />Estoy tratando de encontrar el mejor lugar para poner la llamada al metodo pero no logro encontrarla, si tienen una idea me avisan, yo seguire intentando buscar un buen lugar para ponerla.<br /><br />Bye...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=439">Shellman</a> — Sab Feb 03, 2007 6:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-02-03T16:13:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=160#p160</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=160#p160"/>
<title type="html"><![CDATA[Re: Gracias !!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=160#p160"><![CDATA[
<blockquote><div><cite>Shellman escribió:</cite><br />Otra consulta que quiero hacer y la voy a necesitar mas adelante en el juego (creo...), es como hacer para que el personaje de mi juego vaya a un lugar de la pantalla donde yo de click, imaginemos que fuera (age of empire u otro juego parecido), que damos click en un lugar del mapa (:shock: creo que estoy pensando en grande muy rapido), perdon..., doy click en un lugar de la pantalla y el personaje se dirige hacia ese punto, ya estoy terminando de hacer un pequeño metodo para que haga las veces del metodo A*, pero creo que necesito un poquito de ayuda.<br /></div></blockquote><br />Claro, es precisamente el método A* uno de los mas indicados para<br />realizar búsquedas de camino, aunque se debe ver con que<br />clase de información cuentas en tu juego para poder adaptar el<br />método.<br /><br />Y en cuanto necesites ayuda simplemente nos la pides, sabemos<br />poco pero podemos aprender...<br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Feb 03, 2007 4:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shellman]]></name></author>
<updated>2007-02-03T06:59:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=159#p159</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=159#p159"/>
<title type="html"><![CDATA[Gracias !!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=159#p159"><![CDATA[
Les doy las gracias a ambos por sus respuestas (Geo y hugoruscitti), ademas les comento que estoy muy ansioso por terminar el pequeño juego que estoy haciendo para ponerlo en la seccion de ejemplos.<br /><br />Otra consulta que quiero hacer y la voy a necesitar mas adelante en el juego (creo...), es como hacer para que el personaje de mi juego vaya a un lugar de la pantalla donde yo de click, imaginemos que fuera (age of empire u otro juego parecido), que damos click en un lugar del mapa (:shock: creo que estoy pensando en grande muy rapido), perdon..., doy click en un lugar de la pantalla y el personaje se dirige hacia ese punto, ya estoy terminando de hacer un pequeño metodo para que haga las veces del metodo A*, pero creo que necesito un poquito de ayuda.<br /><br />En lo que me puedan ayudar les estaria muy agradecido.<br /><br />Bye, nos vemos luego... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> perdon, nos leemos luego.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=439">Shellman</a> — Sab Feb 03, 2007 6:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-02-01T16:29:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=157#p157</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=157#p157"/>
<title type="html"><![CDATA[Re: Felicitaciones !!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=157#p157"><![CDATA[
<blockquote><div><cite>Shellman escribió:</cite><br />Bueno, primero que todo quiero saludar a todos los miembros de esta comunidad, y decirles que los felicito por crear y mantener esta pagina.<br /><br />Me gustaria hacerles una consulta, me gustaria ver el codigo del juego volleyball ya que me ha parecido muy interesante la forma como lo han programado y como manejan las colisiones y todo eso, ya me he leido varios articulos de la web y he aprendido en pocos dias lo que habia tratado de aprender desde que comence mi carrera profesional, la cuestion es que estoy realizando mi segundo juego (porque el primero fue basado en las lecciones del &quot;(ebook) Programacion de videojuegos con SDL&quot;), y quiero realizar una busqueda de caracteres como el de volleyball, pero no encuentro un articulo que contenga un ejemplo de esto.<br /></div></blockquote>Buenas, muchas gracias por los comentarios sobre la web.<br /><br />Te comento que soy uno de los programadores del juego Volleyball, y <br />como te comentaba Geo el código del programa está disponible para que<br />puedas estudiarlo, modificarlo y redistribuirlo.<br /><br />Con respecto a la consulta, si te refieres a la búsqueda <br />de personajes en archivos de disco <br />debes analizar el archivo &quot;characters.c&quot;, ahí encontrarás <br />reunidas todas las funcionalidades asociadas a la búsqueda y carga<br />de personajes adicionales para el juego.<br />    <br />Resumiendo algunas lineas de código, lo importante es abrir un <br />directorio y leer cada una de las entradas del mismo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>dir = opendir &#40;path&#41;;<br /><br />for &#40;element = readdir &#40;dir&#41;; element; element = readdir &#40;dir&#41;&#41;<br />&#123;<br />    char * file = element-&gt;d_name;<br /><br />    if &#40;strcmp &#40;file, &quot;.&quot;&#41; &amp;&amp; strcmp &#40;file, &quot;..&quot;&#41;&#41;<br />        characters_new_player &#40;data, path, file&#41;;<br />&#125;</code></dd></dl><br /><br />La función &quot;opendir&quot; recibe una cadena indicando una ruta de <br />directorio y nos retorna una estructura de datos que representa<br />el directorio abierto (si existe, nota que aquí eliminé ese<br />control para resumir).<br /><br />Luego &quot;readdir&quot; lee una a una las entradas del directorio y retorna<br />NULL cuando a llegado al final del directorio y ya no puede leer<br />mas nombres de archivo. Es por ese motivo que el ciclo &quot;For&quot; de <br />arriba se encarga de leer todo el directorio completo y llamar a <br />la función &quot;characters_new_player&quot; si el nombre de la entrada <br />de directorio ('.', '..', directorio o archivo) no es '.' ni '..'.<br /><br />Leer y analizar directorios es un poco complicado en C, pero hay<br />mucha documentación al respecto y siempre nos puedes consultar.<br /><br />La función &quot;characters_new_player&quot; simplemente genera una nueva<br />estructura de personaje a partir de un directorio y luego lo<br />añade a una lista.<br /><br />Sería interesante que nos contaras que rutina quieres desarrollar<br />con respecto a tu juego, puede que te pueda sugerir algunas ideas.<br /><br /><br /><blockquote><div><cite>Shellman escribió:</cite><br />Les agradeceria muchisimo si me pudieran ayudar, y cuenten con mi ayuda para cualquier cosa que necesiten (si mi tiempo me alcanza) con mucho gusto les ayudare.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /></div></blockquote>Yo necesito algo, si tienes la oportunidad me gustaría ver aportes<br />en la sección &quot;Ejemplos&quot;, es una de mis favoritas y creo que ayudan<br />a muchas personas. Insisto, solo si tienes la oportunidad puedes<br />desarrollar un ejemplo simple y enviarme una copia para que pueda subirlo<br />a la web. Eso sí, sería bueno que antes leas la sección:<br />    <br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos/suministrar_ejemplo.php">http://www.losersjuegos.com.ar/referenc ... jemplo.php</a><!-- m --><br /><br />Muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Feb 01, 2007 4:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2007-02-01T00:41:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=156#p156</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=156#p156"/>
<title type="html"><![CDATA[Búsqueda de personajes y pathfinding (era: Felicitaciones !)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=156#p156"><![CDATA[
El código fuente lo descargas de la misma página del juego:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/juegos/volleyball/volleyball.php">http://www.losersjuegos.com.ar/juegos/v ... eyball.php</a><!-- m --><br /><br />Saludos,<br />JJ (Geo).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue Feb 01, 2007 12:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shellman]]></name></author>
<updated>2007-01-31T17:51:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=155#p155</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=155#p155"/>
<title type="html"><![CDATA[Búsqueda de personajes y pathfinding (era: Felicitaciones !)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=48&amp;p=155#p155"><![CDATA[
Bueno, primero que todo quiero saludar a todos los miembros de esta comunidad, y decirles que los felicito por crear y mantener esta pagina.<br /><br />Me gustaria hacerles una consulta, me gustaria ver el codigo del juego volleyball ya que me ha parecido muy interesante la forma como lo han programado y como manejan las colisiones y todo eso, ya me he leido varios articulos de la web y he aprendido en pocos dias lo que habia tratado de aprender desde que comence mi carrera profesional, la cuestion es que estoy realizando mi segundo juego (porque el primero fue basado en las lecciones del &quot;(ebook) Programacion de videojuegos con SDL&quot;), y quiero realizar una busqueda de caracteres como el de volleyball, pero no encuentro un articulo que contenga un ejemplo de esto.<br /><br />Les agradeceria muchisimo si me pudieran ayudar, y cuenten con mi ayuda para cualquier cosa que necesiten (si mi tiempo me alcanza) con mucho gusto les ayudare.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=439">Shellman</a> — Mié Ene 31, 2007 5:51 pm</p><hr />
]]></content>
</entry>
</feed>