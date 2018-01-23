<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=516" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-22T13:50:22+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=516</id>
<entry>
<author><name><![CDATA[eduard_zaraki]]></name></author>
<updated>2009-03-22T13:50:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2341#p2341</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2341#p2341"/>
<title type="html"><![CDATA[Duda con Diccionarios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2341#p2341"><![CDATA[
ok ok ok... entiendo , yo tenia pensado hacerlo con una matriz de objetos q contenga las tuplas de posiciones en las q se va a pintar los sprites, pero un diccionario suena muy bien  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />por cierto: muy buenos los links.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2082">eduard_zaraki</a> — Dom Mar 22, 2009 1:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-21T12:12:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2333#p2333</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2333#p2333"/>
<title type="html"><![CDATA[Duda con Diccionarios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2333#p2333"><![CDATA[
Buenas eduard:<br /><br />Yo tengo una imagen en la que hay pintados numerosos dibujitos, divididos en cuadrados del mismo tamaño( a esto se le llama tileset o grilla).<br /><br />te recomiendo que te mires <a href="http://www.wired-weasel.com/users/serhid/blog/?page_id=4" class="postlink">esta</a> pagina que proporciono Croasan, en la que viene todo esto explicado(por que mi explicacion me temo que no es mu buena)<br /><br />Mi interes es guardar en un diccionario la posicion del cuadradito en la grilla, para que cuando lea un 2 en la matriz del mapa, sepa que debe acceder al cuadrado que corresponda a la fila y columna almacenados en el diccionario( ejemplo: Tiles={ '1': (columna,fila) }), para luego, a la hora de imprimirlo, pase esos dos numeros como parte del 3º parametro del blit(el del area a imprimir (64*columna,64*fila,64,64)=(pos_origen_x,pos_origen_y,tamaño_cuadrado_x,tamaño_cuadrado_y)<br /><br />al final de <a href="http://reinerstileset.4players.de/environmentE.html" class="postlink">esta</a> pagina(sobre todo al final) , aparecen ejemplos de grillas(no solo de terrenos)<br /><br />Como seguramente solo habre conseguido liarte mas con la explicacion(cosa que no me gusta), cuando termine el ejemplo que estoy haciendo te lo paso si me das una direccion<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Mar 21, 2009 12:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[eduard_zaraki]]></name></author>
<updated>2009-03-21T11:29:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2331#p2331</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2331#p2331"/>
<title type="html"><![CDATA[Duda con Diccionarios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2331#p2331"><![CDATA[
Buenas buenas, esteee... hermano no pude evitar fiharme que dijo cargar tiles a la GRILLA... eh, eso significa q en vez de trabajar por pixels, (es decir, posX y posY) tu divides el mapa en sectores o cuadros, formando una grilla. y asi en vez de referirte a la posicion cartesiana te dirijes al sector o cuadro donde quieres que cargue?  <br /><br />NOTA: te pregunto porque soy un principiante y me parece muy buena idea. configurar la grilla con una funcion generica que al pasarle la &quot;resolucion&quot; del juego (600,400) o (320,240), este lo divida en partes iguales para obtener una lista o diccionario para luego cargar las imagenes a dicha grilla. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2082">eduard_zaraki</a> — Sab Mar 21, 2009 11:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Croasan]]></name></author>
<updated>2009-03-20T15:08:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2325#p2325</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2325#p2325"/>
<title type="html"><![CDATA[Duda con Diccionarios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2325#p2325"><![CDATA[
El post esta incompleto, si pudieras editarlo, o publicar otro te lo agradeceria.<br /><br />EDITADO:<br /><br />Pues de nada me alegro mucho de que te sirviera, PRODUCTIVIDAD PYTHON!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2084">Croasan</a> — Vie Mar 20, 2009 3:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-19T19:55:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2320#p2320</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2320#p2320"/>
<title type="html"><![CDATA[Duda con Diccionarios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2320#p2320"><![CDATA[
gracias croasan, era eso que tu has dicho a lo que me referia.<br /><br /><br />EDITADO<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 19, 2009 7:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Croasan]]></name></author>
<updated>2009-03-19T19:42:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2319#p2319</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2319#p2319"/>
<title type="html"><![CDATA[Duda con Diccionarios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2319#p2319"><![CDATA[
No se exactamente a que te refieres, pero los diccionarios de python tragan con todo, las claves pueden ser cualquier tipo de datos y los contenidos tambien en cualquier diccionario, por ejemplo:<br /><br />dic = { 'key' : 'value' , 3 : 'value2' , 'key2' : 24}<br /><br />Como pueden alamcenar cualquier tipo de datos, un tupla tambien por lo tanto:<br /><br />dic[keyTupla] = (3,5)<br /><br />es eprfectamente viable.<br />Para acceder al valor por ejemplo:<br /><br />dic [keyTupla]<br /><span style="font-style: italic">(3,5)</span><br /><br />dic[keyTupla][0]<br /><span style="font-style: italic">3</span><br /><br />dic[keyTupla][1]<br /><span style="font-style: italic">5</span><br /><br />Creo que el blit coge directamente tuplas para la posicion asi que puedes pasarle la tupla directamente a partir de una clave del diccionario.<br /><br />Espero haberte sido de ayuda, si la pregunta era otra, no la he entendido y deberas volver a postear xD. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2084">Croasan</a> — Jue Mar 19, 2009 7:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-19T14:36:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2312#p2312</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2312#p2312"/>
<title type="html"><![CDATA[Duda con Diccionarios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=516&amp;p=2312#p2312"><![CDATA[
Buenas a todos.<br /><br />Estoy practicando con los tiles y quisiera saber si los diccionarios en python pueden almacenar tuplas para saber a que casilla de la grilla de tiles que tengo debo acceder.<br /><br />Por ejemplo<br /><br />tiles={ '1': (fila,columna) }, donde fila y columna son las posiciciones del tile en la grilla que debo pasar al blit para ibujar el tile<br /><br />Gracias<br /><br />PD: en caso de que se pudiera, como se accederia a cada termino??<br /><br /><span style="font-weight: bold">EDITO:</span> ya lo he conseguido. Lo que hice fue crear dos variables. <br />FilaTile,ColumnaTile=Tiles[celda] donde Tiles es el diccionario.<br />Si a alguno se le ocurre alguna manera mejor que me lo diga por favor<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 19, 2009 2:36 pm</p><hr />
]]></content>
</entry>
</feed>