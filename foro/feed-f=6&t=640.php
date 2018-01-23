<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=640" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-12-24T16:20:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=640</id>
<entry>
<author><name><![CDATA[Metalero]]></name></author>
<updated>2009-12-24T16:20:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3099#p3099</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3099#p3099"/>
<title type="html"><![CDATA[Agrupar imagenes o archivos de un juego para impedir acceso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3099#p3099"><![CDATA[
Mmmm.... este es un tema bastante ambiguo... yo por ejemplo estoy de acuerdo con la encriptacion de algunas cosas.<br /><br />Algunas personas prefieren dejar el jeugo bajo un licencia libre (pero solo el juego!), es decir, que no se tenga acceso a los recursos.<br /><br />Pero bueno... prefiero dejarlo ahi...<br /><br />Con el tema de la encriptacion... te voy a contar mi (minima) experiencia.<br /><br />En mi juego, en las escenas, todo (TODO) es leido desde un fichero de texto, es decir que si alguinel o abre, puede leer la historia, por eso decidi encriptarlo (muy sencillamente), para esto use un sistema de corrimieto de bytes bastante sencillo (como para que el que abra el fichero se encuentre con un mamarracho de caracteres y lo deje ahi).<br /><br />Lo mas facil para implementar esto es ahcerte un programita que encripte haciendo por ejemplo (pseudo codigo):<br /><dl class="codebox"><dt>Code: </dt><dd><code>char mybyte<br />for&#40;i=0;i&lt;largo del archivo;i++&#41;<br />&#123;<br />   leer archivo&#91;i&#93; en mybyte<br />   mybite += 10;<br />   guardar en nuevo archivo&#91;i&#93; mybyte<br /></code></dd></dl><br /><br />Asi lo mas basico... de ahi podes ir acomplejandolo, por ejemplo con:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>mybyte += 10 + i;<br /><br />o<br /><br />mybyte += 10 - &#40;200 % i * 4&#41;; <br /><br />etc<br /></code></dd></dl><br /><br />Ovbiamente... si alguien se pone las pilas para desencriptarlo, lo va a lograr... pero bueno... eso es al menos lo que esta dentro de mis capacidades XD<br /><br />Para el tema de los recursos... la verdad que no sabria decirte como implemetarlo... por que bien podria encriptarse como yo te digo... pero una vez encriptado no se como habria quer hacer para poder:<br /><br />-desencriptarlo en memoria<br />-cargarlo desde memoria<br /><br />Si usas SDL.... para las imagenes... podrias por ejemplo usar:<br /><br />IMG Load RW<br /><br />Que por lo que tengo entendido se maneja con un puntero (a diferecia de IMG_Load que caga directo desde un archivo)<br /><br />Pero es cuestion de irt probando[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2158">Metalero</a> — Jue Dic 24, 2009 4:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-12-24T14:17:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3098#p3098</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3098#p3098"/>
<title type="html"><![CDATA[Agrupar imagenes o archivos de un juego para impedir acceso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3098#p3098"><![CDATA[
En primer lugar, no entiendo cual es el fin de que el usuario no pueda modificar algo como las imagenes o sonidos usados en el juego (si el juego es libre, por ejemplo bajo GPL, ese material multimedia deberia ser tambien libre, por ejemplo bajo creative commons). Si la finalidad es que no lo modifiquen usuarios inexpertos que puedan cometer por su inexperiencia errores que provoquen que despues el juego quede mal al usarlo, o las borren, una solucion esun simple archivador con todo, un usuario experto puede descomprimirlo, modificarlo y volverlo a comprimir y un usuario inexperto seguramente no le preste mucha antencion a un simple archivador, el programa solo deberia descomprimirlo en un directorio temporal, y usarlos, una vez usados eliminarlos del archivo temporal y arreglado.<br />La opcion de encriptacion y el tema ese, me suena mas a un juego privativo que a uno libre, si es tu caso, te recomiendo que te plantes el liberarlo bajo la licencia GPL, no voy ni a colaborar ni a dar ideas para un juego privativo. Ciertamente puede ser interesante el tema de la encriptacion de un programa evitando la ingenieria inversa, pero solo como entretenimiento y pasatiempo, no para desarrollar juegos privativos.<br />El tema de encriptar los recursos con una clave que el programa sepa no impide que el usuario la sepa, si la cadena es una cadena de caracteres es suficiente con desensamblar el programa y buscarla, este tipo de puntos flacos ante la ingenieria inversa son interesantes de estudiar y trabajar, pero no veo bien el crear un programa privativo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Dic 24, 2009 2:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-12-21T05:30:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3089#p3089</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3089#p3089"/>
<title type="html"><![CDATA[Agrupar imagenes o archivos de un juego para impedir acceso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3089#p3089"><![CDATA[
Algunas opciones que se me ocurren<br /><ul><li>Crear formatos propios para los recursos, quizá un poco engorroso desarrollar la primera vez las herramientas.</li><li>Encriptar los archivos con un método propio o desarrollado por un tercero. Nuevamente, hay que invertir tiempo o dinero.</li><li>Encriptar con algún método ya existente. Por ejemplo, comprimir en un formato tipo ZIP, RAR, etc. con protección con contraseña y descomprimir desde el juego. Algunos problemas serían decidir entre descomprimir a memoria los recursos según se van necesitando, todos desde el inicio...</li></ul><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Dic 21, 2009 5:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[A3]]></name></author>
<updated>2009-12-20T19:12:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3083#p3083</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3083#p3083"/>
<title type="html"><![CDATA[Agrupar imagenes o archivos de un juego para impedir acceso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3083#p3083"><![CDATA[
ps yo la verdad no se mucho de este tema <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" /> , pero <br />lei algo referido a una biblioteca que te servia para eso<br />justamente, puedes juntar todos tus archivos y encriptarlos<br />para que nadie tenga acceso. corrijame alguien si estoy mal.<br /><br />la biblioteca o libreria se llama ZLIB, no se como funciona<br />pero si estas interesado en encapsular tus recursos creo<br />que esto te puede ser util. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" /> <br /><br /><!-- m --><a class="postlink" href="http://www.zlib.net/">http://www.zlib.net/</a><!-- m --><br /><br />saludos.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2146">A3</a> — Dom Dic 20, 2009 7:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-10-26T19:14:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3008#p3008</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3008#p3008"/>
<title type="html"><![CDATA[Gracías]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3008#p3008"><![CDATA[
Hola:<br /><br />pues me has dado una buena idea al respecto, ahora mismo me pongo a trabajar sobre este tema.<br /><br />gracias y saludos a todos. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_twisted.gif" alt=":twisted:" title="Twisted Evil" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Lun Oct 26, 2009 7:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metalero]]></name></author>
<updated>2009-10-24T18:39:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3006#p3006</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3006#p3006"/>
<title type="html"><![CDATA[Agrupar imagenes o archivos de un juego para impedir acceso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3006#p3006"><![CDATA[
Mira... cambiarle la extension no va a servir de mucho, por que es cuestipon de volversela a cambiar para acceder al recurso.<br /><br />Lo que decis vos es encriptar. Los juegos comerciales suelen ahcer esto con todos sus recursos para que nadie se los robe (facilmente).<br /><br />La encriptacion consiste en codificar todos los datos de manera logica con un &quot;key&quot; que sera conocido para el programa que pueda leer los datos.<br /><br />En codigo la verdad que no sabria decirte ahora mismo como hacerlo, pero un ejemplo facil, seria, si queres encriptar, por ejemplo, una cadena de caracteres, hacer esto:<br /><br />&quot;HOLA&quot;<br /><br />usamos un key de corrimiento de bytes (+2), entonces, la cadena de texto ahora seria:<br /><br />&quot;H&quot; =&gt; +2 =&gt; &quot;J&quot;<br />&quot;O&quot; =&gt; +2 =&gt; &quot;Q&quot;<br />&quot;L&quot; =&gt; +2 =&gt; &quot;N&quot;<br />&quot;A&quot; =&gt; +2 =&gt; &quot;C&quot;<br /><br />Quedante un archivo con :<br /><br /><br />&quot;JQNC&quot;<br /><br />Luego con el programa, sabiendo la &quot;key&quot;, es cuestion de regresar los valores al original.<br /><br />Para encriptar una imagen seria lo mismo, habria que hacer por ejemplo un corrimiento de todos los bytes del archivo, y luego leerlos, decodificarlos y cargarlos.<br /><br />De esta manera, no se pude acceder a ningun recurso encriptado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2158">Metalero</a> — Sab Oct 24, 2009 6:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-10-23T14:54:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3004#p3004</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3004#p3004"/>
<title type="html"><![CDATA[Agrupar imagenes o archivos de un juego para impedir acceso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=640&amp;p=3004#p3004"><![CDATA[
Hola:<br /><br />una vez mas por aquí, ahora mi interrogante es la siguiente, en la creación de juegos trabajamos con muchos tipos de archivos, por ejemplo imagenes, sonido, videos, punteros, iconos, etc. Una vez terminado el juego, en el proceso de creación, como es posible ocultar todos estos archivos imprescindible para el juego de la manipulación de los usuarios, por ejemplo blizzart (no se como se escribe), tiene un formato llamado &quot;mpq&quot; donde dentro de estos archivos están encapsulados todos los demas, y con un programa para leer estos archivos se puede tener acceso, pero mientras permanecen a salvo, alguien sabe como hacerlo.<br /><br />Una idea era cambiarles las extensiones y cada vez que algún archivo me hiciera falta lo renombraba y lo usaba y después lo llevaba al esto anterior, pero esto es un poco trabajoso no.<br /><br />bueno si alguien conoce la forma de hacerlo, por favor no dude en hacerlo.<br /><br />saludos. programadores.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Vie Oct 23, 2009 2:54 pm</p><hr />
]]></content>
</entry>
</feed>