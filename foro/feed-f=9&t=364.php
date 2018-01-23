<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=364" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-08-17T04:17:28+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=364</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-08-17T04:17:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1608#p1608</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1608#p1608"/>
<title type="html"><![CDATA[Numeros Aleatorios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1608#p1608"><![CDATA[
Y no hay alguna forma de poder tener acceso a alguna fuente de bits aleatorios (hardware, variables o cualquier dato que cambie que se le pueda pedir al SO,....) pidiendo permiso al SO.<br /><br />Hace ya algunos meses lei por alguna web que en C, se podia acceder al hardware como si se accediera a la memoria, con punteros, si hay que pedir permiso al SO para poder usar cualquier direccion de memoria, ¿como se pide permiso al SO para acceder a una direccion especifica de la memoria, o en que consiste eso de acceder a cualquier parte del ordenador, memoria o hardware, mediante punteros; o estaba equivocada esa informacion que lei sobre el acceso al hardware con punteros?<br /><br /><br />Y ya que mencionastes lo de los virus, ¿Como pueden ellos acceder a direcciones de memoria sin el permiso del SO y sin producir un error que le impida ejecutarse?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Ago 17, 2008 4:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-08-16T23:29:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1607#p1607</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1607#p1607"/>
<title type="html"><![CDATA[Numeros Aleatorios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1607#p1607"><![CDATA[
Me temo que no es posible (o no deberia serlo). Al ejecutarse un programa, este le pide al Sistema Operativo que le reserve memoria, acceso al hardware, etc... pero tu programa jamas tiene un acceso directo (siempre esta el Sistema Operativo intermediando).<br /><br />El SO te reserva cierta memoria y tu programa solo puede acceder a esta (o deberia) y cualquier intento de acceder a la memoria de otro programa, o incluso el intento de acceder a la memoria sin uso,  sin la autorizacion del SO provocara un error en tiempo de ejecucion conocido como Fallo de Segmentacion (el mitico Segmentation Fault).<br /><br />Saludos<br /><br />Nota: Cuando me refiero a &quot;acceso&quot; significa acceso de lectura y/o escritura.<br /><br />Cuando me refiero a &quot;... deberia ...&quot; es para aclarar que en ciertos SO no hay ningun control (y de esta manera, un programa puede interferir a otro, alterando sus datos internos (virus)).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Sab Ago 16, 2008 11:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-08-15T12:26:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1606#p1606</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1606#p1606"/>
<title type="html"><![CDATA[Numeros Aleatorios]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=364&amp;p=1606#p1606"><![CDATA[
Hola, como ya supongo que sabreis los numeros aleatorios hay veces que son poco menos que indispensables en un juego, por ejemplo en el tetris, pues seria un tanto aburrido saber cual va a ser el orden en el que te lleguen las piezas siempre, o por ejemplo en el caso de la IA de un juego en la que se usen algoritmos geneticos (harian falta por ejemplo en las mutaciones evolutivas del algoritmo genetico y aunque menos tambien en su reproduccion), esos numeros aleatorios podriamos obtenerlos con rand (que creo que esta en una libreria estandar de C si no me equivoco) pero para poder rand no da numeros aleatorios, sino quasi-aleatorios, aunque nos podrian valer si no necesitamos numeros con un nivel mayor de aleatoriedad, pero aun asi para usar rand necestitamos usar una semilla que debe ser aleatoria, y no podemos usar rand pues estamos en el mismo problema, y cierto es que hay quien usa la hora, con los minutos y si es posible los segundos, para esa semilla, pero a mi se me ocurrio hacerme un generador de numeros aleatorios, estoi intentando que no sea de numeros quasi-aleatorios, por lo que no uso semilla, sino aleatorios, para ello obtengo bits aleatorios de la funcion clock() que si no estoi equivocado devuelve los segundos que lleva el programa ejecutandose, y de la memoria, pero de la memoria saco algunos bits, o algunos bytes si hay suerte, de lo que creo que llaman basura, zonas de memoria que no son puestas a 0 despues de que un programa las use ni antes de que otro programa tenga acceso a esas zonas de memoria, esto lo hago definiendo variables pero arrays tanto estaticos como dinamicos, lo hice en un intento de probar si conseguia algun numero que no fuese 0, y resulto que consigo mas bits aleatorios con ello que con clock, la cuestion es que intento mejorar el generador de numeros aleatorios (aunque ya se pueden obtener numeros aleatorios) y necesito saber si hay alguna forma de poder leer (solo leer no necesito modificar) toda la memoria, para conseguir mas bits aleatorios por como puede haber cualquier cosa en la memoria, y ya intente definir un puntero con la direccion NULL, 0, e intentar con aritmetica de punteros recorrer la memoria pero no funciono o dio error cuando llego al final de la memoria (no estoi seguro de cual de los dos es el motivo de que fallara), o tambien estaria bien poder acceder (creo que con punteros se puede pero no se como) al hardware y leer los datos del hardware, se que con SDL puedo leer el raton y eso, pero intento hacer el generador independiente de librerias ademas de que no necesito saber en detalle los datos del hardawe pues no quiero saber ni la posicion del raton ni del teclado ni nada, nada mas tener numeros que no sean siempre los mismo y no pueda sber cuales van a ser.<br /><br />Espero no haberme extendido demasiado, en resumen pues que necesito saber de donde puedo sacar mas bits aleatorios usando solo C, no me importa que sea un dificil trabajo con punteros ni que sea complicado mientras pueda recoger bits aleatorios.<br /><br />Para comprobar el funcionamiento del generador estoi haciendo con un programilla de prueba que escriba 20000 bits, 1250 numeros int (de dos bytes), en un archivo de texto y con un programa poniendo a proeba dichos numeros aleatorios para ver si pasan unos test para generadores de numeros aleatorios que encontre en una pagina de matematicas, no pasa los cuatro test que encontre, aunque si os aleatorios les hallo el resto entre 101 (N % 101) consigo que pase uno de los test de rachas largas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Ago 15, 2008 12:26 pm</p><hr />
]]></content>
</entry>
</feed>