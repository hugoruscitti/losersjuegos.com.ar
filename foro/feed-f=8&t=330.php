<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=330" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-07-03T11:59:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=330</id>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-07-03T11:59:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1529#p1529</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1529#p1529"/>
<title type="html"><![CDATA[problema manipulacion por referencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1529#p1529"><![CDATA[
hola hugo<br />siento la tardanza en hacer estas cosas, pero he tenido un par de semanas bastante liadas con las declaraciones de hacienda, preinscripciones para unos cursos y trabajo y no he podido sacar tiempo hasta hoy, que he terminado con casi todo....uffff.<br /><br />he probado ya el devCPP y estoy muy contento con el. he logrado ejecutar mis exes en los demas pcs y con el tema de las librerias actualizadas que te comente no he tenido ningun problema, porque encontre en las actualizaciones bibliotecas extras entre las que se encuentran las SDL y algunas mas muy interesantes, asi que me las instala automaticamente y luego solo tengo que añadir la linea que especificas en las opciones del compilador. <br /><br />te vuelvo a dejar en el mismo sitio los archivos, esta vez te he puesto los archivos de imagenes, los .cpp, el .h, el .win que me pediste, dos .o, que no se para que son, pero por si acaso <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />, y todas las librerias necesarias (SDL y SDL_image). a parte tambien incluyo los stderr.txt y stdout.txt.<br /><br /><a href="http://maije2.iespana.es/videojuego/" class="postlink">http://maije2.iespana.es/videojuego/</a><br /><br />espero que esta vez puedas ver el codigo y probarlo. ahora al ejecutarlo el devCPP no me muestra nada, supongo que sera porque encuentra el error que cometia en el VC y se cierra la ventana nada mas abrirse. lo malo es que el stderr.txt esta limpio... ya me contaras<br /><br />muchisimas gracias<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Jue Jul 03, 2008 11:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-06-19T10:57:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1509#p1509</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1509#p1509"/>
<title type="html"><![CDATA[problema manipulacion por referencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1509#p1509"><![CDATA[
buenas hugo, lo primero que quiero hacer es agradecerte todas las molestias que te estas tomando y la cantidad de informacion que me estas proporcionando.<br /><br />ya he instalado el DEV-CPP en mi ordenador y estoy empezando a trastear con el. la verdad es que tiene buena pinta y parece que la portabilidad de programas de un pc a otro no resultara ningun problema, cosa que me alegra enormemente porque me quita preocupaciones. la inclusion de las bibliotecas es menos intuitiva que con el VC, pero es un mal menor y un precio demasiado bajo como para no pagarlo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";-)" title="Wink" />. he leido varias veces tu articulo para instalar el programa y luego añadirle las blibliotecas y los includes y me parece que esta perfectamente explicado y que todo funciona como deberia si se siguen los pasos tal cual estan escritos, felicidades. <br />de todas formas, seria interesante hacer una miniactualizacion, puesto que el articulo funciona para la version que indicas, pero no para las ultimas versiones (SDL.1.2.13), en las que da un error del linker cuando vas a compilarlo. no se si habria que modificar mucho o poco. intentare investigar por mi cuenta tambien. <br /><br />en cuanto al tema de STL, tambien me acabas de descubrir un mundo que me ahorrara muchas horas de programar tedios tales como escribir las funciones de insercion, eliminacion, busqueda, etc...en todo tipo de listas, arrays, pilas, colas, etc... tengo hechos packs de funciones, pero para otros lenguajes, asi que me viene de lujo. de todas formas, creo que seguiria en el mismo problema que tengo ahora mismo usando STL, puesto que mi problema esta en el paso por referencia: yo quiero crear un array de elementos que se rellene con elementos existentes y que al modificar el array, se modifiquen los valores de los elementos fuera del array tambien. eso lo hago empleando en vez de un array de elementos, un array de punteros a elementos y en el caso de emplear STL, temo estar en el mismo problema. mi conocimiento de STL se limita a las dos webs que me has linkeado en tu respuesta y a un poco que he mirado por el google asi que no tengo porque tener razon.<br /><br />ahora voy a intentar compilar el programa en el devCPP para que puedas probarlo y ver por ti mismo el error. en cuanto este listo, lo posteare como respuesta en este mismo tema con el enlace a la web donde podras descargarte el codigo fuente.<br /><br />muchisimas gracias y disculpa las molestias.<br />un saludo<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Jue Jun 19, 2008 10:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-06-18T21:16:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1506#p1506</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1506#p1506"/>
<title type="html"><![CDATA[problema manipulacion por referencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1506#p1506"><![CDATA[
<blockquote><div><cite>maije escribió:</cite><br />puede que tengas razon y el problema este en la sentencia de asignacion de punteros al array. como se podria hacer entonces? como puedo crear un array de punteros a objetos de una clase y rellenarlo mediante una funcion que reciba el objeto a insertar?<br /></div></blockquote><br /><br />A mi entender lo mas sencillo sería utilizar bibliotecas como STL<br />que ya te proveen rutinas funcionando para manejar estructuras<br />como listas o vectores. Aquí tienes algunos tutoriales al respecto:<br /><br />   <!-- m --><a class="postlink" href="http://decsai.ugr.es/~mgs/ta/stl.html">http://decsai.ugr.es/~mgs/ta/stl.html</a><!-- m --><br />   <!-- m --><a class="postlink" href="http://www.mochima.com/tutorials/STL.html">http://www.mochima.com/tutorials/STL.html</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jun 18, 2008 9:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-06-18T11:01:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1500#p1500</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1500#p1500"/>
<title type="html"><![CDATA[problema manipulacion por referencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1500#p1500"><![CDATA[
puede que tengas razon y el problema este en la sentencia de asignacion de punteros al array. como se podria hacer entonces? como puedo crear un array de punteros a objetos de una clase y rellenarlo mediante una funcion que reciba el objeto a insertar? quizas lo este planteando mal y no deba de ser un array de punteros a objetos... pero como plantear un menu sino como una matriz de botones? y siendo una matriz de botones, como hacer para que si hago un cambio en la matriz, que se refleje luego tambien en los botones por separado para que los metodos de deteccion de eventos (onRollOver, onRollOut, onRelease, etc.), que son locales a la clase boton, funcionen como deben? la unica respuesta que se me ocurrio fue un array de punteros a botones, los paso por referencia y listo, pero no funciona, me los coloca bien, pero no reconoce que se pase sobre ellos. <br />si a alguien se le ocurre otra forma de plantear el problema, por favor, que postee. <br />en cuanto al editor que uso, VC2008, la verdad es que estoy un poco harto de la cantidad de archivos que genera y los problemas de visibilidad de sus ejecutables en otros pc's...<br />voy a echar un vistado al DEV-C++ a ver si os puedo facilitar un poco las cosas y podeis probar el codigo desde linux.<br /><br />estoy enormemente agradecido por tu respuesta hugo, muchisimas gracias. estoy terriblemente atascado y cualquier muestra de interes y aportacion de ideas es mucho mas que bienvenida. en cuanto consiga compilarlo con DEV-C++ lo dire en este post.<br /><br />PD: disculpa que tardara en constestar, vi tu respuesta ayer a la 1 de la mañana, pero me iba ya y preferi leer con mas detenimiento tu respuesta por la mañana.<br /><br />un saludo<br />muchisimas gracias<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Mié Jun 18, 2008 11:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-06-17T16:50:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1498#p1498</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1498#p1498"/>
<title type="html"><![CDATA[Re: problema manipulacion por referencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1498#p1498"><![CDATA[
<blockquote><div><cite>maije escribió:</cite><br />...<br />despues, una funcion de añadir botones al menu:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void JFSmenu::adjuntarBoton&#40;JFSboton *botonAdd&#41; &#123;<br />   ordenado = false;<br />   this-&gt;numItems++;<br />   botonAdd-&gt;setID&#40;numItems&#41;;<br />   printf&#40;&quot;\nbotonAdd id: %i&quot;, botonAdd-&gt;getID&#40;&#41;&#41;;<br />   elementos&#91;numItems-1&#93; = *botonAdd;<br />   printf&#40;&quot;\nañadido a la lista&quot;&#41;;<br />   <br />&#125;</code></dd></dl><br /></div></blockquote><br /><br />Me resulta poco habitual la sentencia:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>elementos&#91;numItems-1&#93; = *botonAdd;</code></dd></dl><br /><br />generalmente en C y C++ se construyen estructuras compuestas<br />sin des-referenciar punteros... sería bueno que busques compilar<br />el programa con un compilador compatible con GCC (por ejemplo<br />usando el IDE DEV-C++), de forma que podamos ver en detalle<br />el funcionamiento del programa usando una herramienta como<br />DDD desde GNU/Linux. Es un obstáculo muy grande para <br />nosotros ayudar si usas Windows, dado que las herramientas<br />de desarrollo son diferentes...<br /><br />Para conocer la herramienta que yo usaría para encontrar el<br />problema desde GNU/Linux observa los siguientes mensajes:<br /><br />   - <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=318">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=318</a><!-- m --><br />   - <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=162">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=162</a><!-- m --><br /><br />lamentablemente no pude compilar tu programa en GNU/Linux a<br />causa de esas pequeñas incompatibilidades entre GCC y el<br />compilador (VC imagino) que estás utilizando.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Jun 17, 2008 4:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-06-02T15:05:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1445#p1445</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1445#p1445"/>
<title type="html"><![CDATA[problema manipulacion por referencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1445#p1445"><![CDATA[
creo que no sera suficiente con esas lineas de codigo, asi que aqui os pongo una URL donde os podeis descargar todos los archivos de codigo fuente del programa. espero que alguien pueda ayudarme porque estoy realmente desesperado.<br /><br /><a href="http://maije2.iespana.es/videojuego/" class="postlink">http://maije2.iespana.es/videojuego/</a><br /><br />un saludo<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Lun Jun 02, 2008 3:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-06-02T13:42:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1444#p1444</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1444#p1444"/>
<title type="html"><![CDATA[problema manipulacion por referencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=330&amp;p=1444#p1444"><![CDATA[
hola a tod@s.<br />estoy creando un api de botonera, entonces me he creado una clase boton y luego una clase menu. <br /><br />primero creo una instancia de la clase boton: (constructor):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>JFSboton::JFSboton&#40;&#41; &#123;<br />   alpha = NULL;<br />   _x = 0;<br />   _y = 0;<br />   _h = 0;<br />   _w = 0;<br />&#125;<br /><br />JFSboton boton1;</code></dd></dl><br /><br /><br />en la clase menu, hay una variable que es un array dinamico de punteros a botones<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>static const int numMaxElementos = 20;<br />JFSboton *elementos;</code></dd></dl><br /><br />en el constructor hago esto<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>elementos = &#40;JFSboton *&#41; malloc &#40;numMaxElementos*sizeof&#40;JFSboton&#41;&#41;;</code></dd></dl><br /><br />despues, una funcion de añadir botones al menu:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void JFSmenu::adjuntarBoton&#40;JFSboton *botonAdd&#41; &#123;<br />   ordenado = false;<br />   this-&gt;numItems++;<br />   botonAdd-&gt;setID&#40;numItems&#41;;<br />   printf&#40;&quot;\nbotonAdd id: %i&quot;, botonAdd-&gt;getID&#40;&#41;&#41;;<br />   elementos&#91;numItems-1&#93; = *botonAdd;<br />   printf&#40;&quot;\nañadido a la lista&quot;&#41;;<br />   <br />&#125;</code></dd></dl><br /><br />para despues colocar todos los elementos donde deben estar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void JFSmenu::distribuirMenu&#40;presentacion tipoPresentacion, int separacion&#41; &#123;<br />   for &#40;int i = 0; i &lt; numItems; ++i&#41; &#123;<br />      //presentacion vertical de la botonera<br />      if &#40;tipoPresentacion == 0&#41; &#123;<br />         elementos&#91;i&#93;._x = this-&gt;_x + this-&gt;_w/2 - elementos&#91;i&#93;._w/2;<br />         if &#40;i == 0&#41; &#123;<br />            elementos&#91;i&#93;._y = this-&gt;_y + separacion;<br />         &#125; else &#123;<br />            elementos&#91;i&#93;._y = elementos&#91;i-1&#93;._y + elementos&#91;i-1&#93;._h + separacion;<br />         &#125;<br />      //presentacion horizontal de la botonera<br />      &#125; else &#123;<br />         elementos&#91;i&#93;._y = this-&gt;_y + this-&gt;_h/2 - elementos&#91;i&#93;._h/2;<br />         if &#40;i == 0&#41; &#123;<br />            elementos&#91;i&#93;._x = this-&gt;_x + separacion;<br />         &#125; else &#123;<br />            elementos&#91;i&#93;._x = elementos&#91;i-1&#93;._x + elementos&#91;i-1&#93;._w + separacion;<br />         &#125;<br />      &#125;<br />   &#125;<br />   ordenado = true;<br />&#125;</code></dd></dl><br /><br />una vez hecho esto, me ha colocado correctamente los 'n' botones dentro del area de menu, etc., etc. pero si luego le pregunto a un boton por su componente X me dice que es 0, tal y como se lo especifique en el constructor, o sea que no ha cambiado su valor aunque esten correctamente colocados. esto me causa conflictos a la hora de hacer funciones onRollOver u onClick y cosas asi y no encuentro el fallo. <br /><br />por supuesto, estos codigos los he extraido de mis archivos .h y .cpp y por si solos no compilan. si no veis el error, puedo subir los archivos de codigo fuente a un servidor temporal para que os los descargueis y lo probeis. las librerias que uso son la SDL estandar y la SDL_image.<br />espero haberme expresado suficientemente bien.<br /><br />muchas gracias a tod@s<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Lun Jun 02, 2008 1:42 pm</p><hr />
]]></content>
</entry>
</feed>