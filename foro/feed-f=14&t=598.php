<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=14&amp;t=598" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-20T13:29:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=14&amp;t=598</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-07-20T13:29:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2790#p2790</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2790#p2790"/>
<title type="html"><![CDATA[Comenzamos la etapa 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2790#p2790"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Acabo de hacer un par de modificaciones al proyecto. Tengo un par de comentarios:<br /><br />-A mi parecer, el tener las clases Board y Piece en engine me parece que puede dar lugar a confusiones.. ¿Por qué entonces existe utils, si se supone que esas funciones hacen las veces de mini-engine?<br /></div></blockquote><br /><br />No tendríamos que tener un engine en realidad, me parece<br />que el juego no es tan grande como para crear algo<br />así. Las funciones de &quot;utils.py&quot; son funciones que<br />utilizamos con frecuencia para cargar imágenes o<br />fuentes, me parece útil tenerlas de esa forma por<br />comodidad.<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />Yo creo que estaría mejor definir un archivo board y otro piece y meter ahí sus clases, y las constantes meterlas en utils. Pero si es mejor lo otro, pues se queda así.<br /></div></blockquote><br /><br />Si, podemos hacer ese cambio: crear archivos piece.py y<br />board.py para representar los elementos del juego. Pero<br />utils.py me parece que está bien...<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />-Las colisiones entre piezas y pieza-muro las verificamos en piece o con la matriz de board(self.board). En el segundo caso, como se podría hacer para actualizar la matriz y verificar colisiones?<br /><br />Eso es todo..... de momento xD<br /></div></blockquote><br /><br />Las colisiones las verificaríamos en el ambiente del objeto<br />Board, es decir, la pieza solamente solicita a Board si<br />puede colocar o no una pieza en determinada posición. Es<br />Board quien analiza las colisiones. Y cuando la pieza<br />tiene que reposar en el escenario se le indica a Board para<br />que actualice su matriz.<br /><br />La idea del sistema de mensajes es: &quot;cada objeto tiene<br />una responsabilidad, actúa sobre sus objetos y colabora<br />con otros a través de mensajes&quot;.<br /><br />Digamos, a grandes rasgos, Board gestiona el tablero, tiene<br />esa responsabilidad. Solamente Board podrá tocar la <br />matriz de casilleros ocupados, y colabora con las piezas<br />indicando si se puede utilizar una posición o no.<br /><br />Posiblemente hoy a la noche pueda escribir algo de esta<br />funcionalidad, les aviso luego de crear una estructura<br />general de los dos objetos.<br /><br />Saludos.<br /><br />PD: felicitaciones a todos, nos va a quedar un gran juego !...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Jul 20, 2009 1:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-20T12:13:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2789#p2789</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2789#p2789"/>
<title type="html"><![CDATA[Comenzamos la etapa 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2789#p2789"><![CDATA[
Acabo de hacer un par de modificaciones al proyecto. Tengo un par de comentarios:<br /><br />-A mi parecer, el tener las clases Board y Piece en engine me parece que puede dar lugar a confusiones.. ¿Por qué entonces existe utils, si se supone que esas funciones hacen las veces de mini-engine?<br />Yo creo que estaría mejor definir un archivo board y otro piece y meter ahí sus clases, y las constantes meterlas en utils. Pero si es mejor lo otro, pues se queda así.<br /><br />-Las colisiones entre piezas y pieza-muro las verificamos en piece o con la matriz de board(self.board). En el segundo caso, como se podría hacer para actualizar la matriz y verificar colisiones?<br /><br />Eso es todo..... de momento xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Jul 20, 2009 12:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2009-07-19T09:27:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2786#p2786</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2786#p2786"/>
<title type="html"><![CDATA[Comenzamos la etapa 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2786#p2786"><![CDATA[
Hola.<br /><br />Me parece algo importante hacer el menu principal funcional, y no lo encontre en ninguna de las etapas. Quizas porque nos centramos en hacer el juego funcional primero. Pero una buena manera de llamar a las escenas que querramos es hacer un menu. Yo me ofrezco para desarrollar algo basico.<br /><br /><span style="font-weight: bold">EDIT</span>: Ya esta hecho en una version muy basica. Se mueve unicamente con las teclas.<br /><br />PD: Estoy en la otra parte del mundo, en donde son 5 horas mas, por lo cual le parezca que me levanto temprano. No es asi.<br /><br />Saludos,<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Dom Jul 19, 2009 9:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-07-18T19:55:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2781#p2781</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2781#p2781"/>
<title type="html"><![CDATA[Comenzamos la etapa 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2781#p2781"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />¿Esto significa que pueden rotar hacia ambos lados?.¿La rotación va a ser sobre su centro, o la ficha se va a mover alguna casilla al ser rotada?<br /></div></blockquote><br /><br />Si, exacto, la idea está mucho mas clara en la<br />documentación:<br /><br /><!-- m --><a class="postlink" href="http://asadetris.googlecode.com/hg/doc/build/html/documento_de_diseno.html#controles">http://asadetris.googlecode.com/hg/doc/ ... #controles</a><!-- m --><br /><br />y la ficha gira siempre desde el centro.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Jul 18, 2009 7:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-18T11:26:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2780#p2780</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2780#p2780"/>
<title type="html"><![CDATA[Comenzamos la etapa 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2780#p2780"><![CDATA[
Yo voy a mirar en cual podría aportar y me apunto a esa. Luego comentaré cual puedo hacer.<br /><br />Además, me ha surgido una dudilla en cuanto a lo de la rotación:<br /><br /><blockquote class="uncited"><div><br />implementar las rotaciones hacia izquiera o derecha<br /></div></blockquote><br /><br />¿Esto significa que pueden rotar hacia ambos lados?.¿La rotación va a ser sobre su centro, o la ficha se va a mover alguna casilla al ser rotada?<br /><br />Un saludo<br />Juanxo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Jul 18, 2009 11:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-07-18T04:18:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2778#p2778</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2778#p2778"/>
<title type="html"><![CDATA[Comenzamos la etapa 2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=598&amp;p=2778#p2778"><![CDATA[
Saludos, gracias al aporte de Juanxo (y la función que nos sugirió<br />Meldron), podemos decir que completamos la etapa 1!<br /><br />Las tareas que podemos comenzar a realizar<br />a partir de ahora son las siguientes<br />(extraído del archivo 'etapas_y_tareas.html':<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#40; &#41; % Etapa 2<br />    : Se desarrollan los movimientos básicos de las piezas, el usuario<br />    : tiene que poder mover una pieza por la pantalla usando los<br />    : direccionales del teclado y rotar las mismas con las teclas 'x' y<br />    : 'z'.<br />    :<br />    : Si la ficha llega abajo queda bloqueada hacia abajo, pero igualmente<br />    : se tiene que poder mover de izquierda a derecha.<br />    :<br />    : Se relaciona con la etapa uno porque el usuario puede pulsar<br />    : &quot;Escape&quot; y se le tiene que mostrar la pantalla del ejemplo anterior,<br />    : en donde pulsando una tecla se cierra toda la aplicación.<br />    :<br />    : Hay solo un tipo de pieza &#40;la &quot;L&quot;&#41;.<br />    :<br />    &#40; &#41; Extender el sistema de fuentes<br />        &#40; &#41; crear un directorio para recursos de fuentes tipográficas<br />        &#40; &#41; que la función de imprimir cadenas soporte saltos de linea.<br />    &#40; &#41; crear escena de juego<br />    &#40; &#41; crear una ficha<br />    &#40; &#41; permitir el movimiento de la ficha<br />    &#40; &#41; aplicar restricciones de movimiento como los bordes<br />    &#40; &#41; implementar las rotaciones hacia izquiera o derecha<br />    &#40; &#41; restringir las rotaciones en los bordes<br />    &#40; &#41; mejorar el sistema de escenas para permitir cambios de una a otra<br />    &#40; &#41; hacer que el usuario pueda ir a otra escena &#40;la de la etapa anterior&#41;<br />    pulsando la tecla ESC.<br />        &#40; &#41; Imprimir un mensaje que indique esto en la ventana.<br /></code></dd></dl><br /><br />¿Alguien se ofrece a realizar alguna de estas tareas?.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Jul 18, 2009 4:18 am</p><hr />
]]></content>
</entry>
</feed>