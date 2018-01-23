<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=532" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-04-06T19:10:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=532</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-04-06T19:10:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2391#p2391</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2391#p2391"/>
<title type="html"><![CDATA[Error compilando con SNL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2391#p2391"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Por cierto lacabra, en cuanto a lo de alojar tu proyecto, podrias hablar con hugo para que lo suba a la seccion de ejemplos o algo del estilo<br /></div></blockquote><br /><br />Como tengo conocimientos de HTML, XHTMl y PHP me he puesto a crear una web para la biblioteca desde la que descargarla, descargar la documentacion por separado de la biblioteca, un formulario para dudas sobre la biblioteca, y cosas por ese estilo; por lo que a ver si en esta semanita de vacaciones termino de escribir la documentacion para colgar todo en un servidor gratuito que ya conozco; ya comence a escribir los primeros archivos del web para con php hacerlo como esos que llaman modulares. En cuanto a la documentacion, en un dia o dos espero tenerla acabada, tampoco es una documentacion con explicaciones a fondo sino más bien para mostrar todas las funciones que tiene y los tipos de datos y estructuras que tiene y para que sirve cada cual y como usarlo, no es demasiado detallada. Como lo más seguro es que en esta semana la tenga ya acabada y colgada, cuando la cuelgue os aviso por si ha alguno le interesa echarle una ojeada.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Lun Abr 06, 2009 7:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-04-06T02:09:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2386#p2386</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2386#p2386"/>
<title type="html"><![CDATA[Error compilando con SNL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2386#p2386"><![CDATA[
Por cierto lacabra, en cuanto a lo de alojar tu proyecto, podrias hablar con hugo para que lo suba a la seccion de ejemplos o algo del estilo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Abr 06, 2009 2:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-04-05T18:20:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2385#p2385</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2385#p2385"/>
<title type="html"><![CDATA[Error compilando con SNL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2385#p2385"><![CDATA[
No me hagas muxo caso lacabra, porque no tengo apenas idea, pero no puede que sea debido a que tienes que añadir una serie de comandos a la linea de comandos en el linker como con SDL( o por lo menos a mi me daba error en el DEV-C++) hasta que hice lo de añadir esos comandos al linker, siguiendo un tutorial de loserjuegos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Abr 05, 2009 6:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-04-05T17:05:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2384#p2384</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2384#p2384"/>
<title type="html"><![CDATA[Error compilando con SNL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=532&amp;p=2384#p2384"><![CDATA[
Hola, como ya he comentado en otro tema la biblioteca SNL ya esta lista para usarse en su version 0.0.0 (en esta semana acabare con los ultimos detalles como hacer un pequeño web en donde ponerla para descargar y me acabare la documentación), ya tengo el makefile que la compila (ya tengo arreglada la compilación condicional para que pueda compilarse para GNU/Linux y para windows) y otro makefile que se encarga de llamar a esste primero para compilarla y de mover los archivos .h y los .a a su correspondiente carpeta del sistema (/usr/lib para el .a y /usr/include/SNL para el .h tal y como queda el archivo de cabecera de SDL, pues igual) ahora el problema llega cuando intento compilar un programa de ejemplo enlazando SNL de la misma forma que si usara SDL. Dejo a continuacion como incluyo SNL.h en el programa de ejemplo, el makefile que se encarga de instalar SNL (para que veais en que carpetas coloca los archivos) y el makefile del programa de ejemplo que intento compilar:<br /><br />testSNL.c (inclullendo todos los archivos de cabecera necesarios)<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio&gt;<br />#include &lt;string&gt;<br />#include &lt;SNL&gt;</code></dd></dl><br /><br />este makefile es el que manda ejecutar el makefile que compila SNL y mueve el .a y el .h a la carpeta del sistema apropiada (y crea la carpeta SNL dentro de la que coloca el .h tal y como lo hace SDL)<br /><dl class="codebox"><dt>Code: </dt><dd><code>all:<br />   @echo Compilando SNL<br />   $&#40;MAKE&#41; -C http://losersjuegos.com.ar/foro/src/<br /><br />install:<br />   @echo Compilando SNL<br />   $&#40;MAKE&#41; -C http://losersjuegos.com.ar/foro/src/<br />   @echo Copiando los archivos de SNL a las carpetas del sistema apropiadas<br />   mv http://losersjuegos.com.ar/foro/lib/libSNL.a /usr/lib/<br />   mkdir /usr/include/SNL<br />   mv http://losersjuegos.com.ar/foro/include/SNL/SNL.h /usr/include/SNL/<br />   @echo Compilando un programa de ejemplo<br />   $&#40;MAKE&#41; -C http://losersjuegos.com.ar/foro/test/<br /><br />uninstall:<br />   @echo Eliminando los archivos de SNL del sistema<br />   $&#40;RM&#41; /usr/lib/libSNL.a<br />   $&#40;RM&#41; /usr/include/SNL/SNL.h<br />   rmdir /usr/include/SNL</code></dd></dl><br /><br />Este es el makefile que se encarga de compilar el programa de ejemplo<br /><dl class="codebox"><dt>Code: </dt><dd><code>#### Start of system configuration section. ####<br />CC=gcc<br />#### End of system configuration section.   ####<br /><br />CFLAGS=-L/usr/lib -lSNL -I/usr/include/SNL<br /><br />testSNL: testSNL.o<br />   $&#40;CC&#41; $&#40;CFLAGS&#41; -o $@ $^<br /><br />testSNL.o: testSNL.c<br />   $&#40;CC&#41; $&#40;CFLAGS&#41; -c -o $@ $^</code></dd></dl><br /><br />El error que recibo en la terminal al intentar compilar el programa de ejemplo es el siguiente:<br /><dl class="codebox"><dt>Code: </dt><dd><code>gcc -L/usr/lib -lSNL -I/usr/include/SNL -c -o testSNL.o testSNL.c<br />gcc -L/usr/lib -lSNL -I/usr/include/SNL -o testSNL testSNL.o<br />testSNL.o: In function `main':<br />testSNL.c:&#40;.text+0x35&#41;: undefined reference to `informacion_biblioteca_SNL'<br />testSNL.c:&#40;.text+0x99&#41;: undefined reference to `SNL_DNS'<br />testSNL.c:&#40;.text+0xc0&#41;: undefined reference to `SNL_DNS_IPv4'<br />testSNL.c:&#40;.text+0x162&#41;: undefined reference to `SNL_conectar_TCP_IPv4'<br />testSNL.c:&#40;.text+0x186&#41;: undefined reference to `SNL_nuevo_grupo_conexiones'<br />testSNL.c:&#40;.text+0x19f&#41;: undefined reference to `SNL_nueva_conexion_grupo'<br />testSNL.c:&#40;.text+0x1c5&#41;: undefined reference to `SNL_enviar_grupo_TCP'<br />testSNL.c:&#40;.text+0x1e9&#41;: undefined reference to `SNL_tiempo_espera_grupo'<br />testSNL.c:&#40;.text+0x1f5&#41;: undefined reference to `SNL_comprobar_grupo_conexiones'<br />testSNL.c:&#40;.text+0x20b&#41;: undefined reference to `SNL_tiempo_espera_grupo'<br />testSNL.c:&#40;.text+0x229&#41;: undefined reference to `SNL_recibir_TCP'<br />testSNL.c:&#40;.text+0x24f&#41;: undefined reference to `SNL_comprobar_grupo_conexiones'<br />testSNL.c:&#40;.text+0x260&#41;: undefined reference to `SNL_conexion_activa_grupo_conexiones'<br />testSNL.c:&#40;.text+0x274&#41;: undefined reference to `SNL_cerrar_grupo_conexiones'<br />testSNL.c:&#40;.text+0x2a5&#41;: undefined reference to `EncriptarTexto_CifradoBitsIguales'<br />collect2: ld devolvió el estado de salida 1<br />make: *** &#91;testSNL&#93; Error 1<br /></code></dd></dl><br /><br />He comprobado si el makefile que instala SNL coloca correctamente los archivos y el archivo libSNL.a esta en /usr/lib por lo que esta en la localización correcta y SNL.h esta en /usr/include/SNL por lo que tambien esta en la localización correcta.<br /><br />Gracias de antemano por la ayuda para poder compilar el programa de ejemplo y saber como compilar com SNL.<br /><br /><span style="font-weight: bold">Edito:</span><br />He conseguido compilar el programa de ejemplo al final, lo uncico que hice fue quitar -lSNL de CFLAGS y ponerlo justo despues de testSNL.o del siguiente modo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#### Start of system configuration section. ####<br />CC=gcc<br />#### End of system configuration section.   ####<br /><br />CFLAGS=-L/usr/lib -I/usr/include/SNL<br /><br />testSNL: testSNL.o<br />   $&#40;CC&#41; $&#40;CFLAGS&#41; -o $@ $^ -lSNL<br /><br />testSNL.o: testSNL.c<br />   $&#40;CC&#41; $&#40;CFLAGS&#41; -c -o $@ $^</code></dd></dl><br /><br />Una ultima pregunta, ¿por que me daba error al ponerlo como una justo despues de donde indicaba donde estaba el directorio con las bibliotecas (como hago cuando compilo con SDL)?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Abr 05, 2009 5:05 pm</p><hr />
]]></content>
</entry>
</feed>