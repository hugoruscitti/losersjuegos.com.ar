<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=446" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-15T13:49:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=446</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-15T13:49:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1907#p1907</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1907#p1907"/>
<title type="html"><![CDATA[Re: Ok!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1907#p1907"><![CDATA[
<blockquote><div><cite>RAGPacho escribió:</cite><br />¿Hay alguna manera de imprimir el valor de una variable? Es que pongo en donde iría el texto una variable que contiene un valor numérico, y me dice que nanay. He probado a ponerlo encerrado entre comillas y sin ellas, pero nada.<br /></div></blockquote><br /><br />Sí, se puede imprimir el valor de una variable siempre<br />y cuando sea una referencia a una cadena. Los valores<br />en python tienen tipo.<br /><br />Para convertir un número a cadena de texto puedes<br />utilizar la función &quot;str&quot;, por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>numero = 1234567<br />cadena = str&#40;numero&#41;<br /></code></dd></dl><br /><br />a partir de ahí podrás imprimir la variable &quot;cadena&quot;<br />usando pygame.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ene 15, 2009 1:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-01-14T19:45:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1904#p1904</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1904#p1904"/>
<title type="html"><![CDATA[Ok!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1904#p1904"><![CDATA[
¡Ok! Gracias Hugo, sin duda estais haciendo un gran trabajo con la wiki. PAra gente que no tiene nociones de inglés, esta muy bien (por ejemplo para mi <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> ). Me he estado mirando el motor que usais para la wiki y lo pobre en mi hosting. Está bastante bien, pero el programa está en inglés. Bueno, que gracias, eso del texto difuminado hay que probarlo podría ser útil.<br />¿Hay alguna manera de imprimir el valor de una variable? Es que pongo en donde iría el texto una variable que contiene un valor numérico, y me dice que nanay. He probado a ponerlo encerrado entre comillas y sin ellas, pero nada. Perdón por no hacer más que preguntas, si pudiera haría aportes pero todos teneís más nivel que yo, a ver si llega un noob para que pueda explicarle como hacer:<br /><dl class="codebox"><dt>Code: </dt><dd><code>print 'Hello, world'</code></dd></dl><br />Jajajaja, como desvarío <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mié Ene 14, 2009 7:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-14T13:11:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1897#p1897</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1897#p1897"/>
<title type="html"><![CDATA[Re: ¿Está bien?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1897#p1897"><![CDATA[
<blockquote><div><cite>RAGPacho escribió:</cite><br />En texto = fuente.render('Prueba', 1, (255, 0, 255)) ¿Qué significa el uno?<br /></div></blockquote><br /><br />Significa que el texto se imprimirá con los bordes difumindados<br />o suavizados. Intenta colocar 0 en lugar de 1 y verás la diferencia.<br /><br />Te dejo parte de la traducción de pygame en la que<br />estamos trabajando, para que tengas mas referencias:<br /><br /><blockquote class="uncited"><div><br />render<br /><br />Imprime texto en una nueva superficie.<br /><br />Font.render(text, antialias, color, background=None): return Surface<br /><br />Genera una nueva superficie con el texto especificado dentro de ella. Pygame no provee una manera directa de imprimir texto en una superficie existente: en lugar de eso debe usar esta función para crear una imagen del texto y luego volcar esta imagen en la otra superficie.<br /><br />El texto solamente puede ser de una linea: Los caracteres que indican salto de linea no se imprimen. El argumento antialias es un valor booleano: si vale True los caracteres tendrán bordes suaves. El argumento color es el color del texto, por ejemplo puede usar (0, 0, 255) para definir el color azul. El argumento opcional background es el color para utilizar de fondo. Si no se especifica un fondo, el área fuera del texto será transparente. <br /><br />[...]<br /></div></blockquote><br /><br />saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ene 14, 2009 1:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-01-13T19:58:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1893#p1893</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1893#p1893"/>
<title type="html"><![CDATA[¿Está bien?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1893#p1893"><![CDATA[
Bueno, yo he hecho esto y me ha funcionado, pero tengo una duda:<br /><dl class="codebox"><dt>Code: </dt><dd><code>pygame.font.init&#40;&#41;<br />fuente = pygame.font.Font&#40;None, 50&#41;<br />texto = fuente.render&#40;'Prueba', 1, &#40;255, 0, 255&#41;&#41;<br />screen.blit&#40;texto, &#40;0, 0&#41;&#41;<br />pygame.display.flip&#40;&#41;</code></dd></dl><br />En texto = fuente.render('Prueba', 1, (255, 0, 255)) ¿Qué significa el uno?<br />Gracias dvd!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mar Ene 13, 2009 7:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-01-12T21:45:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1889#p1889</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1889#p1889"/>
<title type="html"><![CDATA[Imprimir texto en pantalla con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1889#p1889"><![CDATA[
<!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=353">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=353</a><!-- m --><br />Aquí hay ejemplo de como imprimir texto. Aunque hay clases. Si no consigues aclararte, ya te haré un ejemplo más personalizado.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Ene 12, 2009 9:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-01-11T16:37:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1874#p1874</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1874#p1874"/>
<title type="html"><![CDATA[Imprimir texto en pantalla con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=446&amp;p=1874#p1874"><![CDATA[
Bueno, he googleado, pero no he encontrado nada que me haya resolvido mi duda.<br />Estoy creando un archivo .py con funciones para luego poder hacer un memorión, de estos de emparejar dos simbolos o lo que sea. El código es el siguiente (son las primeras funciones que creo, es que acabo de aprender):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: iso-8859-1 -*-<br /># Este archivo contiene las funciones necesrias para poder crear el<br /># memorión. Pasemos a importar funciones y definirlas.<br />from random import random<br /><br /># Con esta función podremos crear matrices vacías para rellenarlas<br /># más adelante.<br />def crea_matriz&#40;filas, columnas&#41;:<br />   matriz = &#91;&#93;<br />   for i in range &#40;filas&#41;:<br />      matriz.append&#40;&#91;None&#93; * columnas&#41;<br />   return matriz<br />         <br /># La siguiente función, te permite poner en una variable, una lista<br /># con las dimensiones de una matriz.<br />def dimensiones_matriz&#40;matriz&#41;:<br />   return &#91;len&#40;matriz&#41;, len&#40;matriz&#91;0&#93;&#41;&#93;<br /><br /># Ahora, hagamos una función que nos permita rellenar la matriz, con<br /># letras al azar, así la partida nunca será igual.<br /># Nota: Símbolo es la matriz en la que almanezaremos los caracteres.<br />def rellena_simbolos&#40;simbolo&#41;:<br />   &#91;filas, columnas&#93; = dimensiones_matriz&#40;simbolo&#41;<br />   numcaracter = 0.0<br />   for i in range &#40;filas&#41;:<br />      for j in range &#40;columnas&#41;:<br />         caracter&#91;i&#93;&#91;j&#93; = chr&#40;ord&#40;'a'&#41; + int&#40;numcaracter&#41;&#41;<br />         numcaracter += 0.5<br />         <br />   # Ahora, desordenaremos al hazar la matriz, haciendo uso de la<br />   # función random, que genera un número entre 0.0 y 1.0 al azar.<br />   for i in range&#40;1000&#41;:<br />      &#91;f1, c1&#93; = &#91;int&#40;filas * random&#40;&#41;&#41;, int&#40;columnas * random&#40;&#41;&#41;&#93;<br />      &#91;f2, c2&#93; = &#91;int&#40;filas * random&#40;&#41;&#41;, int&#40;columnas * random&#40;&#41;&#41;&#93;<br />      # Crearemos una variable que almacenara unos valores,<br />      # para ir asignandoselos a otras variables y así<br />      # intercambiarlos. Quizá diga más el código que mi<br />      # explicación.<br />      tmp = caracter&#91;f1&#93;&#91;c1&#93;<br />      caracter&#91;f1&#93;&#91;c1&#93; = caracter&#91;f2&#93;&#91;c2&#93;<br />      simbolo&#91;f2&#93;&#91;c2&#93; = tmp</code></dd></dl><br />El caso es que necesito crear otra función, que me permita imprimir la matriz con los caracteres en una ventana pygame. El problema es que no tengo ni idea de escribir texto con pygame. He mirado en los artículos, pero el artículo orientado a fuentes es de C.<br />Muchas gracias. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Dom Ene 11, 2009 4:37 pm</p><hr />
]]></content>
</entry>
</feed>