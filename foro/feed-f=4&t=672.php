<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=672" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-12-27T23:08:14+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=672</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2009-12-27T23:08:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=672&amp;p=3109#p3109</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=672&amp;p=3109#p3109"/>
<title type="html"><![CDATA[Tres en raya con inteligencia artificial]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=672&amp;p=3109#p3109"><![CDATA[
Este es el tipico juego de tres en raya, gato, etc.<br /><br />El controlador del juego fue escrito por un amigo de la facultad.<br />Al principio solo permitia jugar entre dos personas, y quise hacer que puedas jugar contra la PC, la idea fue concebida por mi interes en la inteligencia artificial y esta es la primera aplicacion practica que ago hacerca de la IA.<br /><br />Sin mas rollos les dejo la direccion del repositorio de SVN<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>svn co https://tres-en-raya.svn.sourceforge.net/svnroot/tres-en-raya tres-en-raya</code></dd></dl><br /><br />requiere de svn para descargarlo para los que usan linux y no lo tienen es muy facil instalarlo. habran una terminal y escriban lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>sudo apt-get install subversion</code></dd></dl><br /><br />y luego escriben el primer comando, se creará un directorio llamado tres-en-raya en el directorio raiz de su usuario(/home/tu_usuario/).<br /><br />con su terminal entran al directorio tres-en-raya, luego escribe make y se habra creado el ejecutable llamado gato.<br /><br />Requiere de la biblioteca ncurses para compilarse. si no la tienen, en su terminal escriban esto: sudo apt-get install libncurses5 y vuelven hacer make y ya debera compilarse.<br /><br /><br />Unos comentarios hacerca del codigo:<br />Para mi es mas importante el estudio del codigo y los algoritmos asi como su mejoramiento, por lo que no me meti con la interface que cumple con los requisitos para jugar.<br />Al revisar el codigo se daran cuenta se ai algunas cosas que se pueden mejorar, existen funciones que pueden hacerse mas simples y reducir el tamaño del codigo.<br />con respecto al algoritmo del arbol minimax, aun ai una modificacion importante que se puede hacer para harrar tiempo de computo, dado que el arbol se crea con una funcion, y otra funcion lo llena con las jugadas, si se unifican esas dos funciones se evitaria que se generen arboles debajo de los nodos que ganan o pierden (lo entenderan mejor cuando revises el codigo).<br /><br />Sobre el juego: para jugar, una ves que aparesca el tablero, las teclas para marcar la posicion en la que quieres poner se describen en el sig mapa:<br /><br />789<br />456<br />123<br /><br />Sobre la documentacion: Un pdf que explica bastante bien el funcionamiento de la tecnica, da un algoritmo al final, pero no esta implementado. esta adjunto a la descarga<br /><br />cualquier aporte escribanme a <!-- e --><a href="mailto:textex24@hotmail.com">textex24@hotmail.com</a><!-- e -->.<br />si se animan a hacer alguna mejora al codigo envienme un correo con el archivo adjunto con su nombre(el tuyo)y lo actualizare en el repositorio<br /><br />Por los que prefieren descargarlo en zip: <a href="http://www.mediafire.com/?md2ozznujty" class="postlink">http://www.mediafire.com/?md2ozznujty</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Dic 27, 2009 11:08 pm</p><hr />
]]></content>
</entry>
</feed>