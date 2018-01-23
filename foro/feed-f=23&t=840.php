<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=840" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-31T19:12:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=840</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-31T19:12:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3996#p3996</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3996#p3996"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3996#p3996"><![CDATA[
Si estuve cambiando los metodos get y set, por poner_variable y variable(), lo de la ubicación de las variables me parece bien<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ago 31, 2010 7:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-31T10:12:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3990#p3990</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3990#p3990"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3990#p3990"><![CDATA[
he estado revisando un poco el código que llevamos, y cada fichero sigue una regla en cuanto a los get/set xD:<br /><br />set:<br />* poner_variable()<br />* establecer_variable()<br /><br />get:<br />* obtener_variable()<br />* variable()<br /><br />Mi preferencia: poner_variable y variable(). Esto ultimo queda bastante legible:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if (objeto.salta())<br /></code></dd></dl><br /><br />Otra cosa: yo soy partidario de poner el nombre de la variable en la cabecera de la función, aunque no sea estrictamente necesario, ya que si no tengo que adivinar para que sirve el parametro<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Ago 31, 2010 10:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-28T06:42:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3936#p3936</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3936#p3936"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3936#p3936"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br />[list]<br /><blockquote class="uncited"><div>No queda muy bien eso de la m, por la razon de las letras, generalmente en las bibliotecas se maneja el atributo solo por el nombre, sobre los nombre<br />de las funciones de geometry.h, pues creo que asi lo ponen por que es la representacion mas facil cuando se usan matematicas, una solo leta representa un punto<br />dos letras seguidas representan una recta, creo que por eso esta escrito asi, ademas esas funciones estan ocultas al usuario, en lo personal que se quede como esta.<br /></div></blockquote><br />Pero solo para el caso de atributos que serán accedidos directamente, he visto en algunos casos que, si se va a acceder directamente a los miembros, se usa struct, mientras que en las clases solo se permite acceder a los miembros mediante funciones establecer/obtener.</div></blockquote><br /><br />tiene razón, si se usan estructuras como la de punto lo mejor es que sea punto.x, en el caso de clases no acceder a los atributos derectamente.<br /><br />con respecto a lo de los corchetes acostumbro algo similar a lo de juan, no los uso, pero lo pongo en una sola linea, pero con cochetes se veria un poco feo en <br />varias lineas para algo sencillo como una comparación.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ago 28, 2010 6:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-28T05:43:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3933#p3933</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3933#p3933"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3933#p3933"><![CDATA[
secundo lo de clases para datos + operaciones y structs para solo datos (con algun operador, constructor y demas)<br /><br />en cuanto a lo de los condicionales y las llaves, me baso en un estilo python para describir el codigo en estos casos:<br /><dl class="codebox"><dt>Code: </dt><dd><code>if (x&lt;c) <br />  cout&lt;&lt;&quot;x es menor a c&quot;&lt;&lt;endl<br />else<br />  cout &lt;&lt; &quot;&quot; &lt;&lt; endl;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ago 28, 2010 5:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-28T05:15:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3931#p3931</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3931#p3931"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3931#p3931"><![CDATA[
<ul><li>Estoy de acuerdo con usar float, ya veremos el caso donde se requiera más &quot;precisión&quot;.</li><li>También me agrada la idea de tener todas las cabeceras dentro de una carpeta Pilas.</li><li>Lo de la clase Punto, si estamos usando clases podemos usar funciones establecer/obtener.</li><li>Para los vectores, soy &quot;nuevo&quot; con la biblioteca estándar de C++ (lo mío es C), este proyecto es parte de mi entrada &quot;de lleno&quot; a C++ <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" />, me siento cómodo usando índices porque siempre lo he hecho así <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />, y aunque es hora de darle a los iteradores, creo que usar índices lo hace más sencillo para quienes empiezan. Si es con iteradores, creo que usar typedef iría bien, pero votaría por iterador_Punto.</li><li><blockquote class="uncited"><div><br />que pasa con las variables de una sola letra: vease el caso de A, B, C... en geometria.h. Usar a, b, c queda un poco feo no? tenemos 2 opciones: dejar A, B, C o cambiarlo por punto1, punto2, etc<br /></div></blockquote><br />Voto por punto_1, punto_2 y punto_3 o punto_A, punto_B y punto_C.</li><li>Opino que deberíamos usar corchetes para todos los bloques de código de condiciones y bucles aunque sean de una sola línea.</li></ul><br /><blockquote class="uncited"><div><br />No queda muy bien eso de la m, por la razon de las letras, generalmente en las bibliotecas se maneja el atributo solo por el nombre, sobre los nombre<br />de las funciones de geometry.h, pues creo que asi lo ponen por que es la representacion mas facil cuando se usan matematicas, una solo leta representa un punto<br />dos letras seguidas representan una recta, creo que por eso esta escrito asi, ademas esas funciones estan ocultas al usuario, en lo personal que se quede como esta.<br /></div></blockquote><br />Pero solo para el caso de atributos que serán accedidos directamente, he visto en algunos casos que, si se va a acceder directamente a los miembros, se usa struct, mientras que en las clases solo se permite acceder a los miembros mediante funciones establecer/obtener.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Ago 28, 2010 5:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-28T01:45:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3929#p3929</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3929#p3929"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3929#p3929"><![CDATA[
más que nada son temás pensando en el usuario, que es lo que cuenta en las librerias.<br /><br />Por ejemplo: Ventana es una clase bastante común en juegos. Imaginate que en Pilas definimos el archivo ventana.h, con un guard llamado VENTANA_H y en el cpp incluye &lt;ventana.h&gt;<br />Si nosotros no tenemos nada para diferenciar el código de pilas del código del usuario, habrá problemas:<br /><br />* que archivo incluye el compilador? (probablemente el primero definido en la ruta de busquedas de cabeceras)<br />* una de las dos clases queda sin declarar, por tener el mismo guard.<br /><br />y no digas que es complicado que pase, porque en las librerías con gran cantidad de usuarios ( y la nuestra va a formar parte de ese grupo) esta clase de cosas pasan xD<br /><br />Por eso he sugerido estos cambios, que estoy aplicando en la rama prueba para que veais como queda.<br /><br />Lo de la carpeta, es lo que he sacado de otras bibliotecas. Si miras SFML por ejemplo, verás que dentro de include, tienen una carpeta SFML y dentro de esta todas las cabeceras, para que en el código se vea &lt;SFML/loquesea.h&gt;<br /><br />En cuanto a lo de las m y demás opino como tú, el tema de usar &quot;m_&quot; es que hace más facil leer código y, aunque parezca una tontería, tu escribes m_ y el autocompletar te muestra una lista de los atributos xD. Alguna solución que apliquemos para todo, quizás la primera letra de los atributos en mayúscula (X, Atributo, Mi_casa)?<br /><br />Como siempre, esto es un tema de todos, así que... lo que decida el pueblo!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ago 28, 2010 1:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-28T00:52:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3928#p3928</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3928#p3928"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3928#p3928"><![CDATA[
No queda muy bien eso de la m, por la razon de las letras, generalmente en las bibliotecas se maneja el atributo solo por el nombre, sobre los nombre <br />de las funciones de geometry.h, pues creo que asi lo ponen por que es la representacion mas facil cuando se usan matematicas, una solo leta representa un punto<br />dos letras seguidas representan una recta, creo que por eso esta escrito asi, ademas esas funciones estan ocultas al usuario, en lo personal que se quede como esta.<blockquote><div><cite>Juanxo escribió:</cite><br />* metemos todos los archivos de cabecera dentro de una misma carpeta Pilas? asi los include serán del tipo: #include &lt;Pilas/actores.h&gt;?<br /></div></blockquote><br /><br />la carpeta raiz ya se llama pilas y en esa esta include, cuando he visto fuentes siempre estan en la raiz la carpeta de cabezeras y en src las definiciones.<br /><br />en los archivos de prueba esta como #include &lt;actores.h&gt; y en la compilacion se indica que se encuentra dentro de la carpeta usr/include/pilas. <br />Siempre prefiero usarlo asi, y pasarle la ubicación por el compilador, es cuestion de gusto, escribo menos en un include.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ago 28, 2010 12:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-27T10:41:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3923#p3923</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3923#p3923"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3923#p3923"><![CDATA[
un par más de cuestiones a debatir:<br /><br />* double? yo creo que para la precision que buscamos, con float nos sobra<br />* metemos todos los archivos de cabecera dentro de una misma carpeta Pilas? asi los include serán del tipo: #include &lt;Pilas/actores.h&gt;?<br />* al pasar código al español y aplicarle las reglas que tenemos, me he dado cuenta de que algunas cosas quedan algo raras: vease el caso de punto. En teoría debería ser una clase, y todos sus atributos llamarse m_*, pero al usar los atributos fuera de la clase, por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Punto a;<br />a.m_x = 10;<br /></code></dd></dl><br />parece algo forzado no? como lo resolvemos<br /><br />* Indices o iteradores? en teoría, los iteradores son más rapidos. En caso de iteradores, usaríamos typedef para ellos? &quot;punto_iter&quot; es mucho más claro para mi que &quot;std::vector&lt;Punto&gt;::iterator&quot;<br />* que pasa con las variables de una sola letra: vease el caso de A, B, C... en geometria.h. Usar a, b, c queda un poco feo no? tenemos 2 opciones: dejar A, B, C o cambiarlo por punto1, punto2, etc<br />* los condicionales, bucles y demás de una sola línea, les ponemos los corchetes?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Ago 27, 2010 10:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-24T15:36:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3865#p3865</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3865#p3865"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3865#p3865"><![CDATA[
Entonces<br /><ul><li>La ñ se sustituye por ni.</li><li>Nombres de archivo todos en minúsculas.</li><li>Instrucciones para evitar inclusión circular en cabeceras todas en mayúsculas del tipo CLASE_H.</li><li>Indentación a dos espacios, se indentan los modificadores public, private y proteced de las clases, y también los miembros a los que modifican.</li></ul><br />Muy bien, creo que ya estamos de acuerdo, conforme surjan detalles los discutimos aquí.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Ago 24, 2010 3:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-24T06:48:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3860#p3860</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3860#p3860"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3860#p3860"><![CDATA[
Pues si me dan a alegir lo de la ñ me parece mas estetico usar 'ni'.<br />Pero por mi no hay problema entre las dos opciones.<br /><br />Hacerca del cmakelists,tambien hice una modificación para que no se incluyera el archivo de prueba, lo puse en una carpeta aparte.<br />además le di instrucciones de instalación, pues no puedo correr la prueba a menos que libPilas.so se encuentre en /usr/lib.<br />ya probé ponerlo en la misma carpeta pero dice que no lo encuentra.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ago 24, 2010 6:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-24T05:47:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3859#p3859</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3859#p3859"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3859#p3859"><![CDATA[
<blockquote class="uncited"><div><br />* nn o ni para sustituir la ñ.<br /></div></blockquote><br />Me vale cualquiera, que carlos decida<br /><br /><blockquote class="uncited"><div><br />* nombres de archivos, yo comenté que prefiero en minúsculas todo el nombre: clase.h<br /></div></blockquote><br />Me parece bien, ya que linux es sensible a mayusculas ademas.<br /><br /><blockquote class="uncited"><div><br />* sentencias para evitar doble inclusión de cabeceras (guard), yo prefiero todo en mayúsculas: #ifndef CLASE_H<br /></div></blockquote><br />Todo mayuscula entonces.<br /><br /><blockquote class="uncited"><div><br />* estamos de acuerdo en usar espacios y no tabuladores para indentar, pero en algún momento dos espacios me pueden parecer poco, preferiría tres o hasta cuatro.<br /></div></blockquote><br />  El problema es que te quitas mucho espacio con cada indentación entonces. Prefiero 2.<br /><br /><blockquote class="uncited"><div><br />* los modificadores public, private y protected, se indentarán, ¿pero también los miembros a los cuales modifican?<br /></div></blockquote><br />yo si los indento.<br /><br />Un ejemplo mío para que veas como queda el tema de 2 blancos y todo indentado : <a href="http://pastebin.org/758133" class="postlink">http://pastebin.org/758133</a><br /><br />Edito: ya tengo casi entero el documento de estilo, solo falta resolver estos detalles y que hugo me de permisos de escritura y lo subo. Además tengo un par de cambios hechos en el cmakelists<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Ago 24, 2010 5:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-24T05:09:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3858#p3858</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3858#p3858"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3858#p3858"><![CDATA[
Actualicé el primer post anotando los puntos que hemos acordado, quedando pendiente lo siguiente:<br /><br /><ul><li>nn o ni para sustituir la ñ.</li><li>nombres de archivos, yo comenté que prefiero en minúsculas todo el nombre: clase.h</li><li>sentencias para evitar doble inclusión de cabeceras (guard), yo prefiero todo en mayúsculas: #ifndef CLASE_H</li><li>estamos de acuerdo en usar espacios y no tabuladores para indentar, pero en algún momento dos espacios me pueden parecer poco, preferiría tres o hasta cuatro.</li><li>los modificadores public, private y protected, se indentarán, ¿pero también los miembros a los cuales modifican?</li></ul>Espero sus comentarios.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Ago 24, 2010 5:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-24T02:55:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3853#p3853</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3853#p3853"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3853#p3853"><![CDATA[
Estoy de acuerdo con todo lo que comentan, yo no suelo indentar private, public,etc. pero creo que se vería mejor indfentado.<br />Las llaves si acostumbro abrirlas y cerrarlas en nueva línea.<br />Cuando hay una llamada a una función o las declaración de una función es muy grande, hago un salto de linea para que todo se vea de arriba a abajo y no se tenga que ir moviendo de izquierda a derecha<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ago 24, 2010 2:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-24T01:43:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3852#p3852</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3852#p3852"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3852#p3852"><![CDATA[
de acuerdo con todo.<br /><br />Lo de los accesos (public, etc) yo suelo indentarlo, pero se cambia sin problemas.<br /><br />Lo de poner espacios entre paréntesis, tambien lo hago, pero no queria parecer demasiado exagerado.<br /><br />A ver si carlos se pasa y opina<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Ago 24, 2010 1:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-24T01:40:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3851#p3851</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3851#p3851"/>
<title type="html"><![CDATA[Re: PilasC++ - Lineamientos (estilo, herramientas...)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=840&amp;p=3851#p3851"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br /><blockquote><div><cite>Juanxo escribió:</cite>- el tema de las ñ yo siempre lo he cambiado por ni, pero es un detalle sin importancia: tamaño -&gt; tamanio<br /></div></blockquote><br />Una idea: ¿se podrían encontrar sinónimos no?. Se que es difícil pensarlos, pero creo<br />que en este caso están la &quot;escala&quot; y la &quot;magnitud&quot;.</div></blockquote><br />No lo había pensado, sería la mejor opción, de cualquier forma hay que saber qué poner en caso de que no se encuentre algo adecuado.<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />@Geo: esto es un tema de trabajo en equipo, así que ya que tu has aceptado algunas proposiciones mías, yo acepto las demás, solo un par de apuntes:<br />- No había caido en el tema de compatibilidad con la parte de Python. Me parece bien lo que comentas de mantener una misma línea, facilitando el cambio de un lenguaje a otro.<br />- En cuanto a lo de las funciones inline, yo no hablaba de eliminarlas, sino de simplemente declararlas en la cabecera e implementarlas al final del archivo .h, para que no estorbe y reste claridad.<br /><br />Más cosas que se me han ocurrido:<br />- Llaves abren y cierran en nueva línea, y se sitúan a la altura del comienzo de la función. Ejemplo:<br /></div></blockquote><br />@Juanxo, normalmente abro las llaves en la misma línea que la función o sentencia que la necesita, pero me parece bien como propones.<br /><blockquote><div><cite>Juanxo escribió:</cite><br />- Yo suelo establecer indentaciones de 2 blancos (no tabulaciones, ya que el tamaño de las tabulaciones difiere entre programas y SO). Muchos IDEs te permiten usar tabulador y ellos lo transforman directamente en el número de blancos definido<br /></div></blockquote><br />Me parece bien, solo un detalle, las declaraciones public, private y protected ¿se indentan o no? Yo no suelo hacerlo.<br /><blockquote><div><cite>Juanxo escribió:</cite><br />- Yo suelo separar los operadores, las comas, etc: Ejemplo: x + y en vez de x+y. (int param1, int param2) en vez de (int param1,int param2).<br /></div></blockquote><br />Comparto la idea, yo lo extiendo a los paréntesis, ejemplo: ( int param1, int param2 ).<br /><blockquote class="uncited"><div><br />- Los paréntesis van junto al nombre de la funcion, pero se separa en el caso de bucles, condicionales y demás para distinguirlos de las funciones: Ejemplo Clase::metodo(int parametro) y if (condicion)<br />- Los modificadores de tipo (&amp;, *) yo los suelo poner junto al tipo. Ejemplo: Clase&amp; objeto, no Clase &amp;objeto.<br /></div></blockquote><br />Lo hago igual y me parece correcto, solo definir qué hacer cuando se quieren declarar varios punteros o referencias de un mismo tipo, debería hacerse en nueva línea:<br /><dl class="codebox"><dt>Code: </dt><dd><code>// Así:<br />Clase* puntero1;<br />Clase* puntero2;<br />// No así:<br />Clase *puntero1, *puntero2;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Ago 24, 2010 1:40 am</p><hr />
]]></content>
</entry>
</feed>