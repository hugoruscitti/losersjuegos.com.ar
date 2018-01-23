<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=499" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-07T07:05:50+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=499</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-03-07T07:05:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2238#p2238</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2238#p2238"/>
<title type="html"><![CDATA[Java + SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2238#p2238"><![CDATA[
<blockquote><div><cite>Adri escribió:</cite><br />importante: el rendimiento. En cuanto la cosa se complica la aplicación empezaba a ir lenta (Igual soy yo que todavia estoy un poco pez).<br /></div></blockquote><br />El objetivo de pygame es introducirse de manera sencilla a la programación de juegos, no crear juegos de máximo rendimiento de próxima generación. Si no estás desarrollando algo muy complejo y tienes poco rendimiento, es momento de checar porque probablemente el problema sea tu código.<br /><br /><blockquote><div><cite>Adri escribió:</cite><br />Bueno aprovecho también para preguntar una cosilla: he visto por ahí que muchas aplicaciones usan sdl para todo menos para los gráficos que usan opengl. ¿por qué?<br /></div></blockquote><br />Con OpenGL se tiene acceso completo al hardware especializado para gráficos (aceleración), mientras que con SDL no.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Mar 07, 2009 7:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-03-06T12:45:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2230#p2230</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2230#p2230"/>
<title type="html"><![CDATA[Java + SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2230#p2230"><![CDATA[
Hola, bien como explique antes, Java es un poco mas rapido que Python debido a las optimizaciones del bytecode de Java.<br /><br />En cuanto a la &quot;accesibilidad&quot;, el orden de los lenguajes, de mas facil a mas dificil seria:<br /><br />Python &gt; Java &gt; C++ &gt; C<br /><br />Hay quienes pueden discutir esto. Yo personalmente me baso en las facilidades de los lenguajes (no es las librerias que trae).<br /><br />Con respecto al lenguaje para proyectos &quot;serios&quot;, deberias preguntarte:<br /><br />-Uso un lenguaje que conozco o uso un lenguaje nuevo y lo aprendo?<br />-Es muy largo el proyecto, que valoro mas? La velocidad de ejecucion o la velocidad a la hora de programar?<br />-Cada lenguaje trae sus ventajas y desventajas, que ventajas valorizo mas? <br /><br />Ejemplo, C++ y C manejan manualmente la memoria y punteros haciendo de estos, un lenguaje mas potente pero mas facil de producir errores. Java y Python manejan automaticamente la memoria, menos potencia pero tambien menos problemas.<br />La pregunta seria: realmente necesito la potencia (ventaja) de los punteros de C++, tolerando los errores que estos pueden acarrear (desventaja)?<br />O, talvez, me intereza mas el manejo de memoria automatica (ventaja) aun perdiendo control sobre esta (desventaja)?<br /><br />Esta en ti la decision, piensa que valorizas mas. No te guies solo por la &quot;eficiencia&quot;. Recuerda que puedes, por ejemplo hacer un 90% de tu programa en Python y el 10% restante en C++. De esa manera construyes un software rapido y sin muchos problemas (ventajas de python) y en donde se detecte una ineficiencia notable, se codifica en C++ para hacer el codigo mas rapido (ventaja de C++).<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Mar 06, 2009 12:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Artifex]]></name></author>
<updated>2009-03-06T05:32:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2228#p2228</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2228#p2228"/>
<title type="html"><![CDATA[Dudas y mas dudas...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2228#p2228"><![CDATA[
Antes que otra cosa, gracias a todos por sus respuestas...<br /><br />Solo unas pequeñas dudas [+]:<br /><br />¿Java es mas rapido que Python?<br /><br />En cuestion de facilidad, ¿quien es mas &quot;accesible&quot; Java, o C, o C++? [obviamente no pregunto por Python, por que este es sumamente &quot;natural&quot; e &quot;intuitivo&quot;]<br /><br />¿Para un proyecto medianamente serio, es recomendable Java?[obviamente para proyectos serios no hay mas que C/C++]<br /><br />Para un proyecto de cochera... ¿vale la penas aprender C++?<br /><br />¿Es preferible usar C en lugar de C++? Lo digo por comentarios de gente como Miguel de Icaza o Linux Torvald que casi casi se la tienen jurada a C++<br /><br />¿Que hay de cierto en los temas de fugas de memoria y errores de punteros con C++?<br /><br />Gracias a todos de nuevo por sus respuestas, y si me pueden orientar se los agradeceria.<br /><br />PD: No quiero ni pretendo crear flames o andar de troll ni nada por el estilo, es solo que deseo conocer la opinion de gente que ya empezo por este interesante camino de la programacion de videojuegos.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2077">Artifex</a> — Vie Mar 06, 2009 5:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-03-06T02:32:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2226#p2226</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2226#p2226"/>
<title type="html"><![CDATA[Java + SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2226#p2226"><![CDATA[
Hola, y bienvenido al foro.<br /><br />Con respecto a lo de Java y Python. Java posee un mejor bytecode que el de Python. Este bytecode es un codigo compilado a medias, que permite ejecutar la aplicacion mucho mas rapido. (mas rapido que una aplicacion puramente &quot;interpretada&quot; pero no tan rapido como una aplicacion puramente &quot;compilada&quot; como los lenguajes C, o C++)<br /><br />Es importante aclarar que existen aplicaciones hechas en Java y son bastante lentas, por lo que la ventaja del bytecode es pequeña.<br /><br />Con respecto a la portabilidad, es muy sutil la diferencia. Por ejemplo, un programa hecho en C, o C++, se debe compilar en cada computadora.<br />Mientras, los lenguajes Java y Python son &quot;portables&quot; <span style="font-weight: bold">siempre que</span> el usuario de nuestro programa tenga el interprete instalado (el interprete de Python o la Maquina virtual de Java JVM). Si el usuario no tiene el interprete, debera instalarlo.<br /><br />Como vez, cada lenguaje tiene su pro y su contra.<br /><br />Saludos<br /><br />Nota: &quot;Java que es un lenguaje puramente orientado a objetos&quot;. Una palabra: &quot;Smalltalk&quot;<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Mar 06, 2009 2:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-03-05T21:50:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2223#p2223</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2223#p2223"/>
<title type="html"><![CDATA[Java + SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2223#p2223"><![CDATA[
<blockquote><div><cite>Adri escribió:</cite><br />¡Hola!<br /><br />Aprovecho el post para presentarme en el foro. Espero aportar algo a la comunidad aunque no tengo mucha experiencia en lo que respecta a videojuegos, pero es algo que intentaré cambiar.<br /></div></blockquote><br />Bienvenido al foro! Yo veo más correcto crear un post nuevo ya que a la hora de buscar en el foro, es mucho más fácil encontrar algo si está bajo un título descriptivo.<br />Respecto a lo de la experiencia no te preocupes, muchos (incluido yo) hemos comenzado casi desde 0 en esta web.<br /><br /><blockquote><div><cite>Adri escribió:</cite><br />Bueno, hace relativamente poco descubri pygame, y en cierto modo fue lo que me incitó a interesarme por la programación de videojuegos, por la sencillez que aporta. Después de juguetear un poco con la libreria decidí intentar hacer algo &quot;grande&quot; y me encontré con una traba muy importante: el rendimiento. En cuanto la cosa se complica la aplicación empezaba a ir lenta (Igual soy yo que todavia estoy un poco pez).<br /></div></blockquote><br />Dependiendo de la resolución de la pantalla (incluyendo los bytes por píxel) es normal que vaya un poco lento. En ocasiones, se puede optimizar. Pero si quieres hacer, por ejemplo, un scroll vertical, la optimización es mínima.<br /><br /><blockquote><div><cite>Adri escribió:</cite><br />C++ con SDL aportaría una notable mejora de rendimiento, aparte de dar al programador un mayor control sobre la aplicación. La pega... que no es independiente de la plataforma y sería necesario volver a compilar cada vez que se cambie de operativo.<br /></div></blockquote><br />Hombre, tampoco es que sea una gran labor hacer una compilación, como con SDL el código si puede ser portable...<br /><br /><blockquote><div><cite>Adri escribió:</cite><br />Bueno aprovecho también para preguntar una cosilla: he visto por ahí que muchas aplicaciones usan sdl para todo menos para los gráficos que usan opengl. ¿por qué?<br /></div></blockquote><br />Básicamente por lo que te he dicho antes. Con SDL, en situaciones delicadas, puede llegar a ser lento el tratar/imprimir gráficos. Sin embargo, cosas como los eventos es mucho más fácil tratarlos con SDL  que con OpenGL. Por eso se hace esa combinación, para aprovechar lo mejor de las dos bibliotecas.<br /><br />Ojo, con esto tampoco te quiero decir que ni Pygame ni SDL sean una buena opción a la hora de hacer videojuegos.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Mar 05, 2009 9:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Adri]]></name></author>
<updated>2009-03-05T15:00:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2219#p2219</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2219#p2219"/>
<title type="html"><![CDATA[Java + SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2219#p2219"><![CDATA[
¡Hola!<br /><br />Aprovecho el post para presentarme en el foro. Espero aportar algo a la comunidad aunque no tengo mucha experiencia en lo que respecta a videojuegos, pero es algo que intentaré cambiar.<br /><br />Bueno, hace relativamente poco descubri pygame, y en cierto modo fue lo que me incitó a interesarme por la programación de videojuegos, por la sencillez que aporta. Después de juguetear un poco con la libreria decidí intentar hacer algo &quot;grande&quot; y me encontré con una traba muy importante: el rendimiento. En cuanto la cosa se complica la aplicación empezaba a ir lenta (Igual soy yo que todavia estoy un poco pez). <br /><br />C++ con SDL aportaría una notable mejora de rendimiento, aparte de dar al programador un mayor control sobre la aplicación. La pega... que no es independiente de la plataforma y sería necesario volver a compilar cada vez que se cambie de operativo.<br /><br />Con Java y python no existe ese problema... y la ventaja de Java respecto a Python... me da la impresión de que las aplicaciones Java pueden tener mayor rendimiento (no estoy seguro), o puede ser por las propias caracteristicas del lenguaje. Java es un lenguaje fuertemente tipado y puramente orientado a objetos, que puede ser que a muchos les resulté más fácil hacer código en Java que en python.<br /><br />Bueno aprovecho también para preguntar una cosilla: he visto por ahí que muchas aplicaciones usan sdl para todo menos para los gráficos que usan opengl. ¿por qué?<br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2078">Adri</a> — Jue Mar 05, 2009 3:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Artifex]]></name></author>
<updated>2009-03-04T06:08:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2201#p2201</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2201#p2201"/>
<title type="html"><![CDATA[@hugoruscitti]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2201#p2201"><![CDATA[
Tienes razón... se me paso que el foro en su mayoría es de Python+PyGame  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br /><br />Es solo que buscando sobre SDL di con su pagina y la verdad es que el contenido es genial, así que quise aprovechar y ver si me podían orientar [De echo por eso puse otra duda en otra sección del foro].<br /><br />Pero enterado, y por cierto muchas gracias por tu respuesta y tu consejo, creo que es de lo mas acertado. Perderé mas tiempo aprendiendo las particularidades de tal o cual lenguaje o librería que aplicando algo mas conocido y que puede brindar resultados mas inmediatos, los cuales me pueden ayudar a entender los conceptos subyacentes para el desarrollo de videojuegos.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2077">Artifex</a> — Mié Mar 04, 2009 6:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-03-04T01:18:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2195#p2195</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2195#p2195"/>
<title type="html"><![CDATA[Java + SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2195#p2195"><![CDATA[
Personalmente, me parece mas interesante utilizar python y pygame; porque<br />si tienes algún inconveniente mas personas podrán ayudarte y aportar ideas<br />para que puedas aprender.<br /><br />De todas formas, recuerda que todo lo que aprendes con python y pygame<br />luego se puede aplicar a otros lenguajes como java. Lo importante es<br />que puedas poner en práctica los conceptos que aprendes sobre juegos. Luego<br />tu propia experiencia que servirá para aprender con velocidad otros<br />lenguajes, relacionando lo que conoces con las cosas nuevas y diferentes.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Mar 04, 2009 1:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-03-03T19:14:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2187#p2187</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2187#p2187"/>
<title type="html"><![CDATA[Java + SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2187#p2187"><![CDATA[
<img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> Es la primera vez que lo oigo. Pondría la mano al fuego a que hay mucho más material (ejemplos, tutoriales...) para sdl en C/C++ y pygame que para SDL en Java.<br /><br />No puedo decirte más por falta de información.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Mar 03, 2009 7:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Artifex]]></name></author>
<updated>2009-03-03T18:15:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2185#p2185</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2185#p2185"/>
<title type="html"><![CDATA[Java + SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=499&amp;p=2185#p2185"><![CDATA[
Hace unos dias investigando sobre la librerias SDL, me encontre con que hay un port para utilizarlas con Java <a href="http://jsdl.sourceforge.net/" class="postlink">http://jsdl.sourceforge.net/</a> Pero me pregunto<br /><br />¿Realmente aporta alguna ventaja SDL a Java?<br />¿Vale la pena intentar usarlas con Java o de plano me regreso a C [c++] y Python?<br /><br />En pocas palabras:<br />¿Que ventaja y desventaja tiene el usar SDL con Java?<br /><br />Saludos y gracias por su respuesta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2077">Artifex</a> — Mar Mar 03, 2009 6:15 pm</p><hr />
]]></content>
</entry>
</feed>