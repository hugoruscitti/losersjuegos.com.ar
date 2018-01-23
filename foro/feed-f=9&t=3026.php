<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=3026" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-07-21T05:13:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=3026</id>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-21T05:13:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9263#p9263</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9263#p9263"/>
<title type="html"><![CDATA[Re: hacer streaming de un tilemap]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9263#p9263"><![CDATA[
esto estoy haciendo porque un tilemap muy grande puede consumir mucha ram, por eso hago este intento de streaming. Va dirigido más que nada a plataformas con poca ram. De otra manera, si no tuviera problemas con la cantidad de ram, cargar el archivo completo en un array sería la solución mas sencilla y funcional.<br />Mi idea es minimizar la cantidad de lecturas a disco, por eso uso una lista en vez de un array. Ahora es cuestión de seguir probando nomas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Dom Jul 21, 2013 5:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-20T22:39:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9262#p9262</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9262#p9262"/>
<title type="html"><![CDATA[Re: hacer streaming de un tilemap]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9262#p9262"><![CDATA[
Con tu descripción me parece que vas bien. Lo que me tiene en tela de duda es que leas cada vez el mapa desde un archivo. Ten en mente que leer datos desde el disco duro puede ser muchísimo más lento que leer desde la memoria.<br /><br />También considera soportar mapas del formato que genera <a href="http://www.mapeditor.org/" class="postlink">Tiled</a>, esta herramienta libre te resultara útil cuando diseñes tus escenarios/mapas/niveles.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Jul 20, 2013 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-20T17:20:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9261#p9261</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9261#p9261"/>
<title type="html"><![CDATA[Re: hacer streaming de un tilemap]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9261#p9261"><![CDATA[
Estoy progresando con mi idea. Lo que hice hasta ahora es guardar unas cuantas variables:<br />-cantidad de tiles horizontales totales del mapa<br />-cantidad de tiles verticales totales del mapa<br />-posicion en x e y de donde quiero empezar a leer en el mapa<br />-ancho y alto de la porción que quiero guardar en el mapa<br />El mapa es un mapa binario, que recorro con fread y fseek. Hago un cálculo de la posición convirtiendo x e y en una posición en el array de 1 dimensión. La fórmula es (y * numero de tiles en x) + x.<br />Esa porción la almaceno en una lista simple. <br />La idea es que ese area que defino para leer del mapa tenga siempre el mismo tamaño. Pero si yo me muevo para arriba, elimine una fila de abajo y cargue una fila arriba. Si me muevo para abajo, elimina una fila arriba y carga una fila abajo. Si me muevo a la izquierda, elimino una fila a derecha y cargue una fila a izquierda. Si me muevo a derecha, elimino una fila a izquierda y cargo una fila a derecha.<br />La idea es utilizar esto para mapas muy grandes, no tiene que ver con el dibujado. Para el dibujado utilizo una cámara que dibuja una porción un poco más grande que el tamaño de la pantalla.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Sab Jul 20, 2013 5:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-07-12T17:41:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9256#p9256</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9256#p9256"/>
<title type="html"><![CDATA[Re: hacer streaming de un tilemap]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9256#p9256"><![CDATA[
Esto es una tecnica algo dificil, pero hay que cogerle su toque. Veras, no importa que tan grande sea un mapa, a ti solo te interesa mostrar o dibujar en la pantalla aquello que el usuario puede ver. Cuando dibujas más de lo que el usuario puede ver a la vez, tienes problemas de rendimiento. Puedes leer la información del mapa y tenerla en memoria, porqué es más liviana que dibujar pixeles.<br /><br />Creo que con eso en mente, puedes comenzar a hacerte una idea...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Jul 12, 2013 5:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-05T01:17:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9248#p9248</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9248#p9248"/>
<title type="html"><![CDATA[Re: hacer streaming de un tilemap]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9248#p9248"><![CDATA[
Despues de pensar encontré una forma simple y muy boluda:<br />- guardar el tilemap en una lista de listas (una lista 2d) o en una lista de una dimensión y calcular la posición en x e y. De esa manera elimino una fila arriba o abajo o una columna a izquierda o derecha para volver a leer del archivo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Vie Jul 05, 2013 1:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-02T01:44:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9246#p9246</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9246#p9246"/>
<title type="html"><![CDATA[hacer streaming de un tilemap]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3026&amp;p=9246#p9246"><![CDATA[
Estoy tratando de que me salga alguna idea para ahorrar memoria al cargar un tilemap graaaaandeee. Hasta ahora tengo 2 ideas:<br />- la primera, hacer una especie de ventana que precargue un area, y cuando hay un desplazamiento cargue de nuevo. Pero esa ventana es lo suficientemente grande como para que al desplazar minimize la cantidad de lecturas.<br />- la segunda, dividir en 9 secciones de tilemaps no muy grandes (un poco más grande que la pantalla), almacenados en listas. La camara siempre se situa en el tilemap del medio. Si hay desplazamiento hacia un tilemap, ese se convierte en el medio, y se vuelve a organizar la estructura de la misma manera que en el principio, pero cargando de nuevo solo aquellas areas que faltan, en la lista como tilemaps.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Mar Jul 02, 2013 1:44 am</p><hr />
]]></content>
</entry>
</feed>