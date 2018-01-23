<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=683" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-02-22T10:41:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=683</id>
<entry>
<author><name><![CDATA[uberiain]]></name></author>
<updated>2010-02-22T10:41:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3268#p3268</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3268#p3268"/>
<title type="html"><![CDATA[scripting]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3268#p3268"><![CDATA[
Hola te dejo un fichero con los fuentes de un programa realizado en C++ que utiliza lua como lenguaje de script a través de luabind, es una maquina de estados finitos realizada en lua, espero que te pueda servir: <!-- m --><a class="postlink" href="http://www.telefonica.net/web2/yque/files/LuaCppFSM.zip">http://www.telefonica.net/web2/yque/files/LuaCppFSM.zip</a><!-- m --><br /><br />Te pego un ejemplo de ejecución del mencionado programa:<br /><br />[C++Actor] constructor<br />[C++Actor_wrapper] constructor<br />[Miner] init is called from Lua 5.1<br />[C++Actor] constructor<br />[C++Actor_wrapper] constructor<br />[Wife] init is called from Lua 5.1<br />[C++Actor] Update---------------------------------------<br />Miner1: All mah fatigue has drained away. Time to find more gold!<br />Miner1: Walkin' to the goldmine<br />[C++Actor] Update---------------------------------------<br />Wife2: Washin' the dishes<br />[C++Actor] Update---------------------------------------<br />Miner1: Pickin' up a nugget<br />[C++Actor] Update---------------------------------------<br />Wife2: Washin' the dishes<br />[C++Actor] Update---------------------------------------<br />Miner1: Pickin' up a nugget<br />[C++Actor] Update---------------------------------------<br />Wife2: Makin' the bed<br />[C++Actor] Update---------------------------------------<br />Miner1: Pickin' up a nugget<br />Miner1: Ah'm leavin' the goldmine with mah pockets full o' sweet gold<br />Miner1: Goin' to the bank. Yes siree<br />[C++Actor] Update---------------------------------------<br />Wife2: Makin' the bed<br />[C++Actor] Update---------------------------------------<br />Miner1: Depositing gold. Total savings now: 3<br />Miner1: Leavin' the bank<br />Miner1: Walkin' to the goldmine<br />[C++Actor] Update---------------------------------------<br />Wife2: Washin' the dishes<br />[C++Actor] Update---------------------------------------<br />Miner1: Pickin' up a nugget<br />[C++Actor] Update---------------------------------------<br />Wife2: Washin' the dishes<br />[C++Actor] Update---------------------------------------<br />Miner1: Pickin' up a nugget<br />[C++Actor] Update---------------------------------------<br />Wife2: Moppin' the floor<br />[C++Actor] Update---------------------------------------<br />Miner1: Pickin' up a nugget<br />Miner1: Ah'm leavin' the goldmine with mah pockets full o' sweet gold<br />Miner1: Goin' to the bank. Yes siree<br />[C++Actor] Update---------------------------------------<br />Wife2: Washin' the dishes<br />[C++Actor] Update---------------------------------------<br />Miner1: Depositing gold. Total savings now: 6<br />Miner1: WooHoo! Rich enough for now. Back home to mah li'lle lady<br />Miner1: Leavin' the bank<br />Miner1: Walkin' home<br /><br />Instant telegram dispatched at time: 13 by 1 for 2. Msg is 1<br /><br />Message not handled **********----------*******[C++Actor] Update---------------------------------------<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2189">uberiain</a> — Lun Feb 22, 2010 10:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-23T07:26:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3208#p3208</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3208#p3208"/>
<title type="html"><![CDATA[scripting]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3208#p3208"><![CDATA[
Pues ya me leí algunos tutoriales de lua, y estoy ejecutando los primeros ejemplos y haciendo pruebas.<br />Me ha convencido mucho este lenguaje es lo que andaba buscando.<br />Los usare para mi videojuego, lo que es como la primera forma de usar lua que comentaste, escribiré el motor del juego en c++ y llamare a funciones mas simples de usar con lua, la idea es hacer mas fácil la creación de la lógica del juego, no cuento con un equipo de programación jeje, somos dos personas que andamos en este proyecto, así que nosotros la haremos de las dos partes, primero escribiremos el motor y luego la lógica.<br /><br />Muchas gracias por tu tiempo e información me ha servido mucho.<br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ene 23, 2010 7:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-01-23T02:25:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3207#p3207</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3207#p3207"/>
<title type="html"><![CDATA[scripting]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3207#p3207"><![CDATA[
Lo primero es irte a la pagina de Lua y descargartelo xD.<br /><br />Una vez lo tengas todo montado, tienes dos opciones:<br /><br />- O bien pegarte a pelo con Lua (no es demasiado complicado), donde te pueden ayudar la documentación de Lua y alguna <a href="http://csl.sublevel3.org/lua/#c_functions_from_lua" class="postlink">página</a><br /><br />- O bien decantarte por alguna librería ya montada como LuaBind, que creo que pertenece a Boost.<br /><br />Pero todo depende de lo que tengas en mente. Lua se suele utilizar con dos fines bastante distintos:<br /><br />- Tienes la opción de escribir tu juego en Lua, y luego reescribir y exportar en C/C++ las partes más lentas de tu juego( esto suele ser más habitual en grupos, donde el programador crea una serie de funciones tipo en C++, las exporta y permite al diseñador programar en Lua, que es más simple que en C++, lo que quita trabajo al programador en cuanto a programar la logica del juego).<br /><br />- Puedes utilizar Lua como lenguaje de apoyo para C++, es decir, almacenar las constantes, o algunas funciones de IA, o cosas similares en scripts de Lua, utilizarlos en C++, cambiar algo en el script, y asi continuamente sin necesidad de recompilar nada, ya que los scripts no necesitan recompilacion.<br /><br />Por último, como consejo:<br /><br />-Si no vas a utilizar demasiado el tema del scripting, te recomendaría ensuciarte un poco las manos y trabajar más directamente con Lua.<br /><br />- Si por el contrario vas a utilizar un montón Lua en tu juego, utiliza LuaBind u otra librería, que te permitirán utilizar características más avanzadas. Como pega, decirte que cada minimo cambio que hagas en tu codigo de C++ en este caso te puede llevar hasta 10 seg (por el tamaño de la libreria y el hecho de que todo sean templates), lo que puede llegar a hartar un poco.<br /><br />Y eso es todo de momento. Ya me contarás si puedo ayudarte en algo más<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ene 23, 2010 2:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-23T01:20:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3206#p3206</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3206#p3206"/>
<title type="html"><![CDATA[scripting]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3206#p3206"><![CDATA[
Gracias por la recomendacion del libro.<br />Se que existe una api llamada monky o algo asi, que es un interprete de javascript que se usa en C.<br /><br />Pero creo que es más complicado, entonces ¿como puedo usar lua?, acabo de ver algo en wikipedia y seguramente me va a servir mucho pues es usado en gran variedad de videojuegos y se ve muy bueno.<br />¿existe alguna api para interpretar ese codigo en C++?. o ¿como lo implemento en mi videojuego?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ene 23, 2010 1:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-01-22T14:08:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3202#p3202</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3202#p3202"/>
<title type="html"><![CDATA[scripting]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3202#p3202"><![CDATA[
Buenas carlostex:<br /><br />Este tema es uno de los que a mi me gusta también xD. Si quieres una guía para estos temas, esta el libro Game Scripting Mastery, que te explica todo el proceso de utilizar y crear tu propio lenguaje.<br />Pero sinceramente, este proceso es mejor dejárselo a los grandes equipos de desarrollo.<br />Dos de los lenguajes más utilizados para esto son Lua y Python. Quizas conozcas ya Python, pero te recomiendo más Lua, que es más ligero y más facil de integrar. Para python tendrías que pegarte con la librería boost.<br /><br />Ya me contarás por cual te decantas, para ver si te puedo aconsejar algo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Ene 22, 2010 2:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-22T03:08:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3201#p3201</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3201#p3201"/>
<title type="html"><![CDATA[scripting]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=683&amp;p=3201#p3201"><![CDATA[
Hola, hando escribiendo un videojuego de guerra de tanques, el juego cuenta con niveles y distintos ecenarios.<br />Entonces he estado pensando en implementar un interprete para no escribir todo ese codigo en c++ pues sera mas tedioso,ademas podria crear nuevos niveles con otras reglas sin tener que compilar de nuevo.<br />La pregunta es ¿alguien ha hecho algo asi y me pueda dar consejos?<br /><br />Tengo una idea pero no se si sea la mejor, que es leer linea por linea el script y mediante muchos if comparar la orden y ejecutar el codigo correspondiente.<br />eso quiere decir que el motor del interprete tiene acceso a todos los objetos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Ene 22, 2010 3:08 am</p><hr />
]]></content>
</entry>
</feed>