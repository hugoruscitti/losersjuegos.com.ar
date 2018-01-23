<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-12-18T02:30:44+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-12-18T02:30:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311"/>
<title type="html"><![CDATA[General • Re: Ayuda con Inteligencia artificial]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9311#p9311"><![CDATA[
Hola y bienvenida!<br /><br />Veras, el tema es un poco complicado como para que alguien lo explique en un post. ¿Sabes que es una maquina(?) de estados? Bueno, viene a ser algo así como los estados en los que se encuentra un autómata, y a partir de ellos, a cuales otros estados puede acceder. Para explicarlo más fácil, yo ahora mismo estoy sentado en mi silla; se puede decir que estoy en un estado determinado que se llama &quot;sentado&quot; ¿A que otro estado puedo acceder desde mi estado actual? Bueno, puedo acceder solamente a uno de dos: &quot;escribir en la portátil&quot; o ponerme &quot;de pie&quot;. Sí me pusiera de pie, podría acceder a otros estados como &quot;caminar&quot;, &quot;saltar&quot; y nuevamente &quot;sentado&quot;. ¿Cómo se consigue que un autómata pase de un estado a otro de forma lógica y sin saltarse un estado? Con <a href="https://www.youtube.com/watch?v=DdCoaWzLw2g" class="postlink">arboles binarios</a>. De esta forma, evitaras que tu autómata pase de &quot;escribir en la portátil&quot; a &quot;correr&quot;, que es un cambio de estado ilógico.<br /><br />Ahora, el problema que describes se puede afrontar de esta manera, con una maquina de estado para los actores/sprites/enemigos involucrados. Escribes una maquina de estado raíz dentro de la clase del actor, y enlazas esa maquina de estado con otras dos o tres o las que necesites por medio de una estructura de árbol binario. La lógica de la IA, supongo yo, iría dentro de cada maquina de estado haciendo que el actor se comporte de forma diferente cuando la maquina de estado cambie.<br /><br />Por supuesto, para que el autómata cambie de comportamiento por medio de su maquina de estados, es necesario que pueda comprobar ciertas condiciones externas a él (de otra manera ¿Cómo cambiaría de estado?). Si el actor no esta en alerta, que camine de un lado al otro (aquí tendrás que darle la posibilidad de &quot;decidir&quot; a donde &quot;quiere&quot; ir que seguido, se mueva hasta el lugar que el actor &quot;desea&quot;), y si el actor mientras camina o esta decidiendo dónde moverse, &quot;ve&quot; al jugador, lo persiga y le dispare. Por supuesto esto ya es un tema algo más complicado. Posiblemente el modulo <a href="http://code.google.com/p/aima-python/wiki/ReadMe" class="postlink">aima-python</a> (por si estas implementando el juego en Python) te ayude a evitar reinventar la rueda, pero en lo personal te recomiendo que estudies algo de álgebra y te familiarices con el tema.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Dic 18, 2013 2:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-14T21:26:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308"/>
<title type="html"><![CDATA[General • Ayuda con Inteligencia artificial]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3044&amp;p=9308#p9308"><![CDATA[
Hola, estoy intentando hacer una inteligencia artificial para enemigos RPG que cuando vean al personaje principal disparen, pero cuando no lo hagan caminen de lado a lado.<br />El problema es que no encontre ninguna forma de hacerlo ni nada.<br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Jue Nov 14, 2013 9:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-09-12T03:29:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3030&amp;p=9282#p9282</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3030&amp;p=9282#p9282"/>
<title type="html"><![CDATA[General • Re: rpg tileset ¿sprites?¿surfaces?..]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3030&amp;p=9282#p9282"><![CDATA[
¿Tu pregunta viene de usar Pilas Engine? de no ser así, acá no debes postear, <a href="http://www.losersjuegos.com.ar/foro/viewforum.php?f=9" class="postlink">sino aquí</a>.<br /><br />Si deseas usar un programa libre para hacer escenarios 2D para juegos, usa Tiled: mapeditor.org<br /><br />Para que un mapa de baldosas (tile map) tenga colisiones lo único que debes hacer es consultar el mapa por la información con respecto a la baldosa donde se moverá el actor. Esta información debes suplirla tu de antemano cuando desarrollas el mapa, y modificas el comportamiento del actor según la información proporcionada por el mapa.<br /><br />Pygame creo que tiene esa facilidad para detectar colisiones con objetos del tipo Sprites, pero no estoy seguro. Si deseas rellenar la ventana de juego con puros Sprites, intenta a ver qué ocurre...<br /><br />saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Sep 12, 2013 3:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ofus]]></name></author>
<updated>2013-09-02T17:54:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3030&amp;p=9273#p9273</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3030&amp;p=9273#p9273"/>
<title type="html"><![CDATA[General • rpg tileset ¿sprites?¿surfaces?..]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3030&amp;p=9273#p9273"><![CDATA[
Hola a todos. Soy nuevo en el foro. <br />Estoy con un amigo intentando hacer un rpg con tilesets para el fondo.<br /> <br />Mi pregunta es: ¿si los tiles del fondo deben de ser de tipo &quot;sprite&quot; para que el personaje tenga colision por ejemplo en caso de ser rocas, o si se hace con surfaces? o como se debería de hacer el tileset para que admita colisiones?. Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3134">ofus</a> — Lun Sep 02, 2013 5:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-21T05:13:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9263#p9263</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9263#p9263"/>
<title type="html"><![CDATA[General • Re: hacer streaming de un tilemap]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9263#p9263"><![CDATA[
esto estoy haciendo porque un tilemap muy grande puede consumir mucha ram, por eso hago este intento de streaming. Va dirigido más que nada a plataformas con poca ram. De otra manera, si no tuviera problemas con la cantidad de ram, cargar el archivo completo en un array sería la solución mas sencilla y funcional.<br />Mi idea es minimizar la cantidad de lecturas a disco, por eso uso una lista en vez de un array. Ahora es cuestión de seguir probando nomas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Dom Jul 21, 2013 5:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-20T22:39:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9262#p9262</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9262#p9262"/>
<title type="html"><![CDATA[General • Re: hacer streaming de un tilemap]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9262#p9262"><![CDATA[
Con tu descripción me parece que vas bien. Lo que me tiene en tela de duda es que leas cada vez el mapa desde un archivo. Ten en mente que leer datos desde el disco duro puede ser muchísimo más lento que leer desde la memoria.<br /><br />También considera soportar mapas del formato que genera <a href="http://www.mapeditor.org/" class="postlink">Tiled</a>, esta herramienta libre te resultara útil cuando diseñes tus escenarios/mapas/niveles.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Jul 20, 2013 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-20T17:20:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9261#p9261</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9261#p9261"/>
<title type="html"><![CDATA[General • Re: hacer streaming de un tilemap]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9261#p9261"><![CDATA[
Estoy progresando con mi idea. Lo que hice hasta ahora es guardar unas cuantas variables:<br />-cantidad de tiles horizontales totales del mapa<br />-cantidad de tiles verticales totales del mapa<br />-posicion en x e y de donde quiero empezar a leer en el mapa<br />-ancho y alto de la porción que quiero guardar en el mapa<br />El mapa es un mapa binario, que recorro con fread y fseek. Hago un cálculo de la posición convirtiendo x e y en una posición en el array de 1 dimensión. La fórmula es (y * numero de tiles en x) + x.<br />Esa porción la almaceno en una lista simple. <br />La idea es que ese area que defino para leer del mapa tenga siempre el mismo tamaño. Pero si yo me muevo para arriba, elimine una fila de abajo y cargue una fila arriba. Si me muevo para abajo, elimina una fila arriba y carga una fila abajo. Si me muevo a la izquierda, elimino una fila a derecha y cargue una fila a izquierda. Si me muevo a derecha, elimino una fila a izquierda y cargo una fila a derecha.<br />La idea es utilizar esto para mapas muy grandes, no tiene que ver con el dibujado. Para el dibujado utilizo una cámara que dibuja una porción un poco más grande que el tamaño de la pantalla.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Sab Jul 20, 2013 5:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-12T17:41:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9256#p9256</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9256#p9256"/>
<title type="html"><![CDATA[General • Re: hacer streaming de un tilemap]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9256#p9256"><![CDATA[
Esto es una tecnica algo dificil, pero hay que cogerle su toque. Veras, no importa que tan grande sea un mapa, a ti solo te interesa mostrar o dibujar en la pantalla aquello que el usuario puede ver. Cuando dibujas más de lo que el usuario puede ver a la vez, tienes problemas de rendimiento. Puedes leer la información del mapa y tenerla en memoria, porqué es más liviana que dibujar pixeles.<br /><br />Creo que con eso en mente, puedes comenzar a hacerte una idea...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Jul 12, 2013 5:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joselet]]></name></author>
<updated>2013-07-12T07:33:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9255#p9255</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9255#p9255"/>
<title type="html"><![CDATA[General • Re: Crear sprites para juego 2D]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9255#p9255"><![CDATA[
Brutal, es justo lo que buscaba.<br /><br />Muchas gracias. Voy a practicar un poco con todo esto. Nos vemos por aqui.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3123">joselet</a> — Vie Jul 12, 2013 7:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-12T04:18:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9254#p9254</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9254#p9254"/>
<title type="html"><![CDATA[General • Re: Crear sprites para juego 2D]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9254#p9254"><![CDATA[
Esa tecnica, Mr. Joselet se llama &quot;animacion&quot; <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br />Revisa éste articulo en inglés, puede que te sirva: <a href="http://gamedevgeek.com/tutorials/animating-sprites-with-sdl/" class="postlink">Animating Sprites with SDL</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Jul 12, 2013 4:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joselet]]></name></author>
<updated>2013-07-11T18:27:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9253#p9253</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9253#p9253"/>
<title type="html"><![CDATA[General • Re: Crear sprites para juego 2D]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9253#p9253"><![CDATA[
No me refiero a eso shackra<br /><br />Me refiero a que mientras muevo el muñeco de la pantalla, voy mostrando la imagen correspondiente de mi sprite. En el enlace que me envías, vas moviendo el avión por la pantalla, pero la imagen (png, gif, etc) es siempre la misma.<br /><br />Por eso hacía referencia a ese otro artículo, donde se mapean las letras del alfabeto para mostrar la que sea necesaria en cada momento. Supongo que mi objetivo se conseguiría con esa misma técnica. No es así?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3123">joselet</a> — Jue Jul 11, 2013 6:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-11T16:23:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9251#p9251</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9251#p9251"/>
<title type="html"><![CDATA[General • Re: Crear sprites para juego 2D]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9251#p9251"><![CDATA[
Si tienes un codigo fuente a mano, nos seria mucho más facil para ayudarte a ayudarte <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Si lo deseas puedes revisar éste articulo que encontre en Internet <a href="http://www.linuxhispano.net/2011/08/13/curso-programacion-de-videojuegos-con-sdl-%E2%80%93-moviendo-un-sprite-por-la-pantalla/" class="postlink">Curso programación de videojuegos con SDL – Moviendo una imagen por la pantalla</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Jul 11, 2013 4:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joselet]]></name></author>
<updated>2013-07-11T14:35:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9250#p9250</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9250#p9250"/>
<title type="html"><![CDATA[General • Re: Crear sprites para juego 2D]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1373&amp;p=9250#p9250"><![CDATA[
Hola, estoy empezando un poco con c + sdl. Me gustaría mover un muñequito por la pantalla utilizando sprites, no he encontrado un ejemplo específico para esto, así que imagino que el modo correcto sería creando un fichero de sprites como se define aqui:<br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/conceptos_basicos">http://www.losersjuegos.com.ar/referenc ... os_basicos</a><!-- m --><br /><br />Y luego mostrar en todo momento el grafico necesario según la técnica de este artículo<br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/fuentes_graficas">http://www.losersjuegos.com.ar/referenc ... s_graficas</a><!-- m --><br /><br />Esto es así? o ya estoy empezando mal?<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3123">joselet</a> — Jue Jul 11, 2013 2:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-05T01:17:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9248#p9248</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9248#p9248"/>
<title type="html"><![CDATA[General • Re: hacer streaming de un tilemap]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9248#p9248"><![CDATA[
Despues de pensar encontré una forma simple y muy boluda:<br />- guardar el tilemap en una lista de listas (una lista 2d) o en una lista de una dimensión y calcular la posición en x e y. De esa manera elimino una fila arriba o abajo o una columna a izquierda o derecha para volver a leer del archivo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Vie Jul 05, 2013 1:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-02T01:44:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9246#p9246</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9246#p9246"/>
<title type="html"><![CDATA[General • hacer streaming de un tilemap]]></title>

<category term="General" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=9" label="General"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9246#p9246"><![CDATA[
Estoy tratando de que me salga alguna idea para ahorrar memoria al cargar un tilemap graaaaandeee. Hasta ahora tengo 2 ideas:<br />- la primera, hacer una especie de ventana que precargue un area, y cuando hay un desplazamiento cargue de nuevo. Pero esa ventana es lo suficientemente grande como para que al desplazar minimize la cantidad de lecturas.<br />- la segunda, dividir en 9 secciones de tilemaps no muy grandes (un poco más grande que la pantalla), almacenados en listas. La camara siempre se situa en el tilemap del medio. Si hay desplazamiento hacia un tilemap, ese se convierte en el medio, y se vuelve a organizar la estructura de la misma manera que en el principio, pero cargando de nuevo solo aquellas areas que faltan, en la lista como tilemaps.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Mar Jul 02, 2013 1:44 am</p><hr />
]]></content>
</entry>
</feed>