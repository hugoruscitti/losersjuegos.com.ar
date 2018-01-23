<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=502" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-09-03T17:57:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=502</id>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2009-09-03T17:57:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2859#p2859</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2859#p2859"/>
<title type="html"><![CDATA[Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2859#p2859"><![CDATA[
Recuerden que el objetivo [a mi entender personal] de hacer juegos con lenguaje interpretado es para que otros colegas programadores  vean nuestro proyecto y lo modifiquen y apredan algo nuevo. Para un cliente común que no sabe nada de programación hay que darle algo compilado y ejecutable sin necesidad de librerías adicionales. Además, si se necesitan librerías adicionales [en el cazo de windows] se copian junto con los archivos del juego en una de las carpetas, como en muchos juegos 3D, que traen una DLL de opengl o directx adicional<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Jue Sep 03, 2009 5:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Meldron]]></name></author>
<updated>2009-06-04T19:46:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2570#p2570</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2570#p2570"/>
<title type="html"><![CDATA[Re: Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2570#p2570"><![CDATA[
<blockquote><div><cite>Artifex escribió:</cite><br />Saludos a todos<br /><br />¿Consideran a Java un buen lenguaje[tecnologia] como para programar un juego de escritorio [NO Applet, ni aplicacion de Celular] con funciones de red? Tomando en cuenta la supuesta &quot;lentitud&quot; que tiene por ser un lenguaje interpretado.<br /><br />Se que muchos me diran que es mejor C o C++, pero mi duda surge al ver desarrollos que usan C# de .Net, ¿Acaso no este lenguaje [tecnologia] tambien es interpretado?<br /><br />Podria orientarme un poco  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br /><br />Obviamente cuando hablo de programar un juego no me refiero a un WoW, o aun Doom 3, pero si algo serio.<br /><br />Saludos y gracias de antemano por sus respuestas.<br /></div></blockquote><br /><br />Voy a tratar de aclarar un par de dudas.<br />Cuando uno compila un programa en Java se genera un .jar  el cual es interpretado por la maquina virtual de java, por ende es multiplataforma.<br />Existe la posibilidad de compilar el programa directamente en el &quot;lenguaje nativo&quot; de alguna arquitectura, lo cual mejora claramente el rendimiento pero se pierde la portabilidad.<br />Igualmente existen arquitecturas desarrolladas para soportar especialmente la maquina virtual de java mejorando apliamente el rendimiento (ej:Numerosos dispositivos móviles)<br />Pero a menos que adores a Java o estes pensando en juegos para celulares, no creo que sea viable Java + SDL, teniendo en cuenta que C++ y SDL son perfectamente multiplataforma y que hay mas documentacion de estos ultimos dos juntos.<br />Ah en cuanto a C#, al estar pensado para correr en windows(aunque existe el Proyecto MONO para Linux) , se integra mejor con las aplicaciones nativas de dicha plataforma. De ahi que se lo use para juegos junto a C++.<br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2108">Meldron</a> — Jue Jun 04, 2009 7:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-03-07T06:59:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2237#p2237</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2237#p2237"/>
<title type="html"><![CDATA[Re: Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2237#p2237"><![CDATA[
<blockquote><div><cite>Artifex escribió:</cite><br />¿Consideran a Java un buen lenguaje[tecnologia] como para programar un juego de escritorio [NO Applet, ni aplicacion de Celular] con funciones de red? Tomando en cuenta la supuesta &quot;lentitud&quot; que tiene por ser un lenguaje interpretado.<br /></div></blockquote><br />Si. Con los equipos actuales ha disminuído notablemente la &quot;lentitud&quot; de Java en aplicaciones de alto desempeño. Además, ahora también se cuenta con los compiladores JIT (&quot;just in time&quot;).<br /><blockquote><div><cite>Artifex escribió:</cite><br />Se que muchos me diran que es mejor C o C++, pero mi duda surge al ver desarrollos que usan C# de .Net, ¿Acaso no este lenguaje [tecnologia] tambien es interpretado?<br /></div></blockquote><br />Los últimos juegos creados a nivel profesional son desarrollados en su mayoría en C++, esto por la necesidad de obtener el máximo desempeño en cada punto. Sin embargo, también hay juegos desarrollados en otros lenguajes como Visual Basic, por ejemplo, aunque son los menos. En el terreno no profesional o de desarrollo independiente, donde los requerimientos sean menores a un juego &quot;de última tecnología&quot;, por supuesto que hay cabida para cualquier otra tecnología, al final, lo que importa en un juego es que esté terminado y sea divertido <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Mar 07, 2009 6:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Adri]]></name></author>
<updated>2009-03-06T15:33:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2231#p2231</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2231#p2231"/>
<title type="html"><![CDATA[Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2231#p2231"><![CDATA[
<blockquote class="uncited"><div><br />la desventaja que conlleva es que el usuario final (aquel que quiera probar lo que has desarrollado) tendra que bajarse unos 20MB (aproximados) aparte del juego, y esto solo para poder ejecutarlo...<br /></div></blockquote><br /><br />No lo veo como una desventaja. Precisamente es lo que hace interesante a java... su independencia. Además, a día de hoy no debe haber nadie que no tenga la JVM instalada.<br /><br /><blockquote class="uncited"><div><br />Aparte de Java contemplaba como opción a Python + PyGame pero es [según yo] lo mismo. El usuario (si es de Windows) tendrá que descargarse el Interprete Python+Librerías necesarias. Lo mismo pasa con SDL :S<br /></div></blockquote><br /><br />Existen herramientas que permiten crear ejecutables a partir de los modulos python y automaticamente te empaquetan todos los archivos necesarios de forma que el usuario no necesita interprete... doble clic y listo.<br /><br />El archivo ocupará más de lo que es el simple código pero es lógico... de todas formas 20 MB arriba abajo tampoco parece tanto.<br /><br /><blockquote class="uncited"><div><br />¿Consideran a Java un buen lenguaje[tecnologia] como para programar un juego de escritorio [NO Applet, ni aplicacion de Celular] con funciones de red? Tomando en cuenta la supuesta &quot;lentitud&quot; que tiene por ser un lenguaje interpretado.<br /></div></blockquote><br /><br />Si con python con pygame se pueden hacer cosas curiosas con java (o c #), que tiene mayor rendimiento también. Si vas a hacer un uso intensivo de la cpu me tiraria directamente a C++ que se que no voy a tener problemas de rendimiento... y con vistas a la productividad a python que con unas pocas horas trabajando puedes tener un buen prototipo funcionando<br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2078">Adri</a> — Vie Mar 06, 2009 3:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-03-05T22:18:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2224#p2224</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2224#p2224"/>
<title type="html"><![CDATA[Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2224#p2224"><![CDATA[
<blockquote><div><cite>sofoke escribió:</cite><br />Ami me surguio una duda te refieres a que compilando java ya no se necesitaria la maquina virtual de java? pues segun entiendo (y recuerdo) aun compilandolo es necesaria....<br />Si estoy en error agradeceria me sacaras de el...<br /></div></blockquote><br />Eso leí por internet y, al investigar un poco, me encontré con esto:<br /><blockquote><div><cite>http://gcc.gnu.org/java/ escribió:</cite><br />GCJ is a portable, optimizing, ahead-of-time compiler for the Java Programming Language. It can compile Java source code to Java bytecode (class files) or directly to native machine code, and Java bytecode to native machine code.<br /></div></blockquote>  Por 'native machine code' entiendo un ejecutable corriente (sin intérprete ni nada). Mi inglés no es muy bueno así que espero no haber hecho una mala interpretación. Tampoco puedo asegurarlo ya que no conozco nada de Java. Si alguien se anima a probarlo ya nos contará.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Mar 05, 2009 10:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-04T22:42:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2213#p2213</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2213#p2213"/>
<title type="html"><![CDATA[Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2213#p2213"><![CDATA[
<blockquote class="uncited"><div><br />Lo de que es un poco más difícil bajarse la SDL en GNU/Linux no lo acabo de entender.<br />sudo apt-get install libsdl...<br /></div></blockquote><br />Lo que sucede es que en lo personal prefiero bajarme los sources (codigo) y compilarlo manualmente... me siento algo mas comodo con eso...<br /><blockquote class="uncited"><div><br />Yo no he usado java, pero quería añadir que se puede compilar tanto java(GCJ) como python (desconozco las ventajas/desventajas que eso conlleva). Por compilar me refiero a que no precisan de intérprete.<br /></div></blockquote><br />Ami me surguio una duda te refieres a que compilando java ya no se necesitaria la maquina virtual de java? pues segun entiendo (y recuerdo) aun compilandolo es necesaria....<br />Si estoy en error agradeceria me sacaras de el...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Mar 04, 2009 10:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-03-04T10:51:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2204#p2204</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2204#p2204"/>
<title type="html"><![CDATA[Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2204#p2204"><![CDATA[
Yo no he usado java, pero quería añadir que se puede compilar tanto java(GCJ) como python (desconozco las ventajas/desventajas que eso conlleva). Por compilar me refiero a que no precisan de intérprete.<br /><br /><blockquote><div><cite>sofoke escribió:</cite><br />por otro lado yo no he usado python y muchomenos pygame pero si SDL y para usuarios de windos solo abria que bajarse las .dll que en total no son mas de 5 u 8MB ahora para usuarios de Linux se es un poco mas dificil...<br /></div></blockquote><br />Lo de que es un poco más difícil bajarse la SDL en GNU/Linux no lo acabo de entender.<br />sudo apt-get install libsdl...<br /><br />Por cierto, aunque te haya dicho lo del GCJ, estoy de acuerdo con lo que te ha dicho Hugo en otro tema de comenzar por Pygame (siempre y cuando no sepas programar ya en C/C++).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Mar 04, 2009 10:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Artifex]]></name></author>
<updated>2009-03-04T06:13:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2202#p2202</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2202#p2202"/>
<title type="html"><![CDATA[@Sofoke]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2202#p2202"><![CDATA[
&quot;<span style="font-style: italic">Yo en lo personal te recomiendo C/C++ con SDL pues da muchisima libertad sobre lo que quieres desarrollar...<br />Espero haberte sido de ayuda...</span>&quot;<br /><br />Enterado, realmente me fue de ayuda. Y sabes que, te haré caso, voy a empezar a revisar SDL con C [con C++ me da mello <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />  ]  <br /><br />Aunque debo de admitir... que me queda la &quot;espinita&quot; del Java<br /><br />Gracias por todo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2077">Artifex</a> — Mié Mar 04, 2009 6:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-04T06:05:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2200#p2200</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2200#p2200"/>
<title type="html"><![CDATA[Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2200#p2200"><![CDATA[
Bueno primero yo me referia a que no me gusta java ni siquiera en su mina expresion (ten encuenta que aun siendo javascript puede hacer juegos con el)<br />Por otra parte comprendo el temor a usar C++ pues hay una linea muy delgada en ese lenguaje que separa un bug de un &quot;asi debe funcionar&quot; (espero darme a entender)...<br />por otro lado yo no he usado python y muchomenos pygame pero si SDL y para usuarios de windos solo abria que bajarse las .dll que en total no son mas de 5 u 8MB ahora para usuarios de Linux se es un poco mas dificil...<br />Yo en lo personal te recomiendo C/C++ con SDL pues da muchisima libertad sobre lo que quieres desarrollar...<br />Espero haberte sido de ayuda...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Mar 04, 2009 6:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Artifex]]></name></author>
<updated>2009-03-04T05:59:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2199#p2199</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2199#p2199"/>
<title type="html"><![CDATA[@Sofoke:]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2199#p2199"><![CDATA[
Gracias por tu respuesta. Me quedan algunas dudillas, por ejemplo:<br />&quot;<span style="font-style: italic">tendrá que bajarse unos 20MB (aproximados) aparte del juego</span>&quot;<br /><br />Aparte de Java contemplaba como opción a Python + PyGame pero es [según yo] lo mismo. El usuario (si es de Windows) tendrá que descargarse el Interprete Python+Librerías necesarias. Lo mismo pasa con SDL :S <br /><br />Por otra parte:<br />&quot;<span style="font-style: italic">igual y funciona muy bien pues segun recuerdo java habia sido desarrollado pensando en facilitar el desarrollo de C++</span>&quot;<br /><br />Eso es lo que me intriga, por que por ejemplo me estaba leyendo el libro &quot;<span style="font-weight: bold">Killer Game Programming in Java</span>&quot; y hay decían que Java ya no es tan lento :S Repito yo no lo he usado para estos menesteres [crear videojuegos], por eso quería conocer su opinión y/o su experiencia. Digo no creo que C# con su .NET sea muchísimo mas rapido que Java (o si?), o que Python sea mas rápido que Java (o si?)<br /><br />Finalmente, solo un detalle:<br />&quot;<span style="font-style: italic">(baya ni siquiera para script en webs)</span>&quot;<br /><br />¿Te refieres a JavaScript? Si es así, no tienen nada que ver uno con el otro <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" />  Solo te paso el dato.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />Y de nuevo gracias por tu respuesta.<br /><br />PD: Con respecto a usar C++... francamente si me da mello  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />  XDDDD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2077">Artifex</a> — Mié Mar 04, 2009 5:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-04T03:42:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2197#p2197</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2197#p2197"/>
<title type="html"><![CDATA[Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2197#p2197"><![CDATA[
Pues si es algo lento aparte la desventaja que conlleva es que el usuario final (aquel que quiera probar lo que has desarrollado) tendra que bajarse unos 20MB (aproximados) aparte del juego, y esto solo para poder ejecutarlo...<br />Algunos lo verian como desventaja pero bueno en lo personal no me gusta mucho ese lenguaje (baya ni siquiera para script en webs) pero igual y funciona muy bien pues segun recuerdo java habia sido desarrollado pensando en facilitar el desarrollo de C++ pero bueno el resto lo conocemos todos...<br />Yo te recomiendo C o ya un poco mas dificil (y algo masoquista en lo personal) C++...<br />Suerte!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Mar 04, 2009 3:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Artifex]]></name></author>
<updated>2009-03-03T23:57:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2194#p2194</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2194#p2194"/>
<title type="html"><![CDATA[Video juegos con Java]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=502&amp;p=2194#p2194"><![CDATA[
Saludos a todos<br /><br />¿Consideran a Java un buen lenguaje[tecnologia] como para programar un juego de escritorio [NO Applet, ni aplicacion de Celular] con funciones de red? Tomando en cuenta la supuesta &quot;lentitud&quot; que tiene por ser un lenguaje interpretado.<br /><br />Se que muchos me diran que es mejor C o C++, pero mi duda surge al ver desarrollos que usan C# de .Net, ¿Acaso no este lenguaje [tecnologia] tambien es interpretado?<br /><br />Podria orientarme un poco  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br /><br />Obviamente cuando hablo de programar un juego no me refiero a un WoW, o aun Doom 3, pero si algo serio.<br /><br />Saludos y gracias de antemano por sus respuestas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2077">Artifex</a> — Mar Mar 03, 2009 11:57 pm</p><hr />
]]></content>
</entry>
</feed>