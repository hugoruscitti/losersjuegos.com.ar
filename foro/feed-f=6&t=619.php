<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=619" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-09-17T11:32:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=619</id>
<entry>
<author><name><![CDATA[anubis]]></name></author>
<updated>2009-09-17T11:32:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2894#p2894</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2894#p2894"/>
<title type="html"><![CDATA[resolucion y accesos a memoria y disco]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2894#p2894"><![CDATA[
Gracias.<br />Si, ya solucione bastante del problema gracias a vosotros. <br />El problema que tenia fue un bucle en el que cargaba los sprites, y cada vez qwue empezaba una partida pasaba por el mismo bucle, incrementandose cada vez la memoria y provocando que la saturara, eso ya esta arreglado, tengo otros problemillas que ire solucionando con la memoria puesto que ahora me sale algunas veces que la asignacion de memoria no es valido y se me corta el programa pero bueno por ahi estara el tema, ademas viendo los procesos de sistema windows, el programa no ocupa practicamente nada, 3 megas a lo sumo, pero la carga de transiciones me llega a mas de 1300M nose si esto es normal.<br /><br />Tengo otra pregunta pero mejor la pongo en otro post.<br /><br />gracias de nuevo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2143">anubis</a> — Jue Sep 17, 2009 11:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-09-17T11:18:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2893#p2893</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2893#p2893"/>
<title type="html"><![CDATA[resolucion y accesos a memoria y disco]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2893#p2893"><![CDATA[
Otra cosa que podrías hacer es intentar que en la animación solo haya una parte de la pantalla que esté animada y la otra que sea estática o muy repetitiva.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Sep 17, 2009 11:18 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[anubis]]></name></author>
<updated>2009-09-15T18:03:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2883#p2883</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2883#p2883"/>
<title type="html"><![CDATA[resolucion y accesos a memoria y disco]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2883#p2883"><![CDATA[
Gracias por tu respuesta...<br />La verdad es que tienes razon, mejor todo en memoria, el problema, entre otros, como comento que son muchas imagenes para memoria, aunque uso 24 bits por imagen, (he usado blender para hacer algunas imagenes) tendre que cambiarlo a menos, aunque la calidad no es la misma.<br />De ahi fuera, teniendo todo en memoria, parece que el juego la colapsa, cuando quiero pasarme a otros programas, digamos que se &quot;apropia&quot; de toda la memoria.<br /><br />Otro punto que comentaba es si 1024x768 esta bien para sdl (cierto que cuanto menor resolucion mejor van las cosas), si aplico 640x480 y luego lo pongo a pantalla completa, evidentemente los pixel se notan bastante, sobretodo los &quot;dientes de sierra&quot; de los truefonts.<br /><br />y otra pregunta ya para acabar.<br />Si pongo menos profundidad de color, a la hora de capturar una parte de la imagen y luego restaurarla, los colores cambian, esto porque ocurre.<br /><br />Un saludo y gracias a ver si alfinal me queda algo decente de juego.<img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2143">anubis</a> — Mar Sep 15, 2009 6:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-09-15T15:14:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2881#p2881</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2881#p2881"/>
<title type="html"><![CDATA[resolucion y accesos a memoria y disco]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2881#p2881"><![CDATA[
El que cargues siempre las imagenes de disco el la misma surpeficie no significa que no estes usando cada vez mas memoria, te explico, cuando pones &quot;SDL_Surface *a;&quot; estas declarando un puntero a una estructura de surpeficie, no es una superficie en si, y cuando cargas una imagen desde disco lo que haces es cargar la imagen en memoria siguiendo la estructura de surpeficie y en a solo tienes la direccion donde empieza, si cargas otra imagen, no estas liberando la memoria ocupada por la anterior, solo haces que a apunte ahora a la direccion de memoria donde empieza la nueva superficie, pero la anterior sigue estando en memoria.<br /><br />Una imagen de 300x300, y que supondre que tiene una profundidad de color de 4 bytes por pixel, son solo 300x300x4=360000 bytes=351,5625 kilobytes, francamente no me parece nada excesivo para un videojuego, y si la tarjeta de memoria tiene 256Mb, te sobra espacio de sobra para cargar muchas imagenes asi de pesadas, la mayoria de los juegos 2D pueden llegar sin problemas llegar a ocupar varios Mb entre las superficies y otras estructuras de datos del juego, y los 3D bastante mas memoria que usan. Por tanto, no veo incobeniente en cargar todas las imagenes y sonidos que puedan hacer falta en una partida antes de comenzar la partida, liberando la memoria al finalizar la partida, como ya te han comentado es asi como se hace en todo tipo de juegos, desde los 2D hasta los 3D cargan mapas, personajes, objetos y cualquier dato o reservan la memoria que crean necesaria durante la partida antes de comenzar esta, para que asi solo tenga el jugador que esperar antes de jugar y evitar que la partida se trabe en momentos determinados y de un efecto de cambio de velocidad bastante grande en el juego, cualquier ordenador hoy en dia tiene entre 500 Mb los mas antiguos y 1Gb o mas los actuales por lo que es una buena costumbre el cargar todo lo necesario al comienzo de la partida.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mar Sep 15, 2009 3:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[anubis]]></name></author>
<updated>2009-09-09T18:06:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2871#p2871</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2871#p2871"/>
<title type="html"><![CDATA[resolucion y accesos a memoria y disco]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2871#p2871"><![CDATA[
Se agradece de verdad la información.<br /><br />Entonces por lo que veo si puedo usar 1024x768x32, ahora el problema viene por cargar las animaciones desde disco cuando las necesito, aunque el chiste viene porque dichas animaciones son imagenes que cargo y ocuparianmucha memoria, son, en algunso casos 30 imagenes de 300x300, para dar efecto de animacion. cargo cada imagen en la misma surface. Meter eso en memoria seria mucho no?.<br />Otra opcion que me dices seria, no lo he probado todavia, crear la surface, hacer la animacion y luego liberarmemoria iria mejorl el juego?.<br /><br />Otrosprocedimientos los desconozco si existen.<br /><br />Un poco de luz a este novato?.<br /><br />un saludo y gracias de nuevo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2143">anubis</a> — Mié Sep 09, 2009 6:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-09-08T19:35:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2870#p2870</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2870#p2870"/>
<title type="html"><![CDATA[resolucion y accesos a memoria y disco]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2870#p2870"><![CDATA[
Por lo que dices, el problema seguramente sea que cargas las imágenes cuando las necesitas. Y puede que no las borres y que la memoria se fuese llenando por momentos, podrías comprobarlo (Ubuntu hace unas bonitas estadísticas de la memoria, no sé si otros S.O también).<br />El acceso a disco es bastante lento (más que el de la memoria). Por esta razón, es un buen consejo no acceder a él durante una partida y cargar todo lo que sea necesario antes de empezarla (el típico &quot;loading...&quot;). Puede que algunas cosas que cargues en memoria no se acaben utilizando, pero es un precio que hay que pagar.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Sep 08, 2009 7:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[anubis]]></name></author>
<updated>2009-09-08T18:05:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2869#p2869</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2869#p2869"/>
<title type="html"><![CDATA[resolucion y accesos a memoria y disco]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=619&amp;p=2869#p2869"><![CDATA[
Buenas, <br />Estoy haciendo un juego (no es tipo matamarcianos o mario bros) nose donde catalogarlo la verdad. Es un juego de bingo, salen bolas que van cayendo y a medida que salen se van marcando en los cartones.<br />Hasta ahi vamos bien, he cargado las bolas a traves de una imagen a memoria y de ahi las voy sacando mediante subsprites, todo bien, cuando haces una linea o cualquier otra figura, sale una animacion en pantalla, esto lo he conseguido cargando las imagenes a medida que se necesitan (alguna animacion tiene hasta 30 fotogramas) accediendo a disco. Primero capturo la parte donde sale la animacion para restaurarla despues de la animacion.<br /><br />A medida que vas jugando, el juego se hace mas lento y los accesos a disco mas lentos todavia, hasta el punto que se llega a bloquear.<br />La pregunta del millon, estoy usando sdl y mi resolucion es 1024x768x32 en pantalla completa (segun tengo entendido para 2d me sirve bien si quiero 3d ya tendria que acceder a opengl es asi?), asi que nose si todo el problema es por los accesos a disco muy rapidos o por otra cuestion, porque la unica forma de hacer animaciones es con frames de imagenes.<br /><br />Perdonadme por la extension pero ya tengo dolores de cabeza con este asunto.<br /><br />Ni pensar hacer un fade con el canal alpha proque de primeras si funciona bien y si lo haces otra vez se ha ralentizado un 500%. Mi ttarjeta de video es una ati radeon x700 256 megas.<br /><br />un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2143">anubis</a> — Mar Sep 08, 2009 6:05 pm</p><hr />
]]></content>
</entry>
</feed>