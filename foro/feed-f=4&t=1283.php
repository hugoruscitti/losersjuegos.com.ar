<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1283" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-03T22:58:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1283</id>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-10-03T22:58:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6033#p6033</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6033#p6033"/>
<title type="html"><![CDATA[Re: Tiles - Mover una plataforma]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6033#p6033"><![CDATA[
Hola muchas gracias por el ejemplo me va a servir de mucha ayuda, ahora no eh podido avanzar por un tema de tiempo pero ni bien tenga un rato libre me pongo a probar el ejemplo y ver si puedo adaptarlo, ni bien pueda hacerlo te lo comunico, gracias por la ayuda!! y por el tiempo que te tomaste en armar el ejemplo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Lun Oct 03, 2011 10:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-30T19:35:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6021#p6021</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6021#p6021"/>
<title type="html"><![CDATA[Re: Tiles - Mover una plataforma]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6021#p6021"><![CDATA[
Hola diego. Acabo de desarrollar éste código, a ver si te ayuda más. Los valores del array posiciones se calculan de la siguiente manera: (distancia_recorrida_por_la_plataforma / número_total_casillas_plataforma). En mi ejemplo la distancia recorrida es de 170px y la plataforma tiene un total de 10 casillas así que cada &quot;salto&quot; es de 17px (lo que coincide con el tamaño del tile), pero, por ejemplo, podrías hacer que la plataforma recorra 100px y que el número total de casillas de la plataforma sea 20, así cada salto será de tan solo 5px, lo que simulará un movimiento más fluido y menos &quot;a saltos&quot;.<br /><br />El código es bastante poco elegante, en vez de time.sleep() deberías usar las funciones de tiempo que implementa SDL, y alguna que otra mejora como, por ejemplo, que para desplazar los tiles en vez de desplazarlos todos puedes simplemente añadir una nueva casilla en un extremo y eliminar la última casilla del otro extremo. Y ya sabes si sigues teniendo dudas, pregunta xD.<br /><br /><pre class="prettyprint">#Importamos los modulos necesarios<br />from PySFML import sf<br />import time<br /><br />#Creamos y configuramos la ventana de juego<br />window = sf.RenderWindow&#40;sf.VideoMode&#40;640, 480&#41;, &quot;Plataforma&quot;&#41;<br />window.SetFramerateLimit&#40;60&#41;   #Cantidad maxima de ticks por segundo<br /><br />#Inicializamos las variables de juego<br />event = sf.Event&#40;&#41;   #Gestor de eventos<br />running = True       #Mientras running = True ejecutaremos el juego<br />sentido = [True, True, False]       #True = derecha | False = izquierda<br />miEscenario = [[0,1,1,1,1,0,0,0,0,0], [0,0,0,0,0,1,1,1,1,0], [0,0,0,1,1,1,1,0,0,0]]   #Un escenario con tres plataformas<br />posiciones = [0,17,34,51,68,85,102,119,136,153]   #Las posiciones en las que se dibujaran los tiles &#40;17px&#41;<br />posicion_horizontal = [100, 150, 400]   #Nos permite situar la plataforma donde deseemos &#40;horizontalmente&#41;<br />posicion_vertical = [150, 220, 330]     #Nos permite situar la plataforma donde deseemos &#40;verticalmente&#41;<br /><br />#Cargamos la imagen<br />tile = sf.Image&#40;&#41;<br />tile.LoadFromFile&#40;&quot;tile.jpg&quot;&#41;<br />tile = sf.Sprite&#40;tile&#41;<br /><br />#Iniciamos el bucle principal<br />while running:<br />    while window.GetEvent&#40;event&#41;:<br />        if event.Type == event.Closed:<br />            running = False<br /><br />    nplat = 0   #Numero de plataforma<br />    for plataforma in miEscenario:<br />        if plataforma[0] == 1:   #Si la plataforma llega a la izda hacemos que vaya a la dcha<br />            sentido[nplat] = True<br />        elif plataforma[9] == 1: #Si la plataforma llega a la dcha hacemos que vaya a la izda<br />            sentido[nplat] = False<br /><br />        if sentido[nplat]:   #Movemos todos los tiles 1 posicion a la dcha<br />            index = 9<br />            while index &gt; 0:<br />                plataforma[index] = plataforma[index - 1]<br />                index -= 1<br />            plataforma[0] = 0<br />        else:         #Movemos todos los tiles una pos. a la izda<br />            index = 0<br />            while index &lt; 9:<br />                plataforma[index] = plataforma[index + 1]<br />                index += 1<br />            plataforma[9] = 0<br />        nplat += 1<br />            <br /><br /><br />    window.Clear&#40;&#41;<br />    index = 0<br />    nplat = 0<br />    for plataforma in miEscenario:<br />        for casilla in plataforma:<br />            if casilla == 1:   #Dibujamos el tile donde la plataforma este a 1<br />                tile.SetPosition&#40;posiciones[index] + posicion_horizontal[nplat], posicion_vertical[nplat]&#41;<br />                window.Draw&#40;tile&#41;<br />            index += 1<br />        index = 0<br />        nplat += 1<br />    <br />    print miEscenario<br />    time.sleep&#40;0.3&#41;   #Las plataformas se moveran una pos. cada 0.3 segundos<br /><br />    window.Display&#40;&#41;<br /><br />window.Close&#40;&#41;</pre><br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Vie Sep 30, 2011 7:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-09-30T04:01:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6011#p6011</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6011#p6011"/>
<title type="html"><![CDATA[Re: Tiles - Mover una plataforma]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6011#p6011"><![CDATA[
Ok, muchas gracias por tomarte el tiempo para escribir el código, entiendo lo que hiciste pero no es exactamente lo que estoy precisando, lo que tu haces en el codigo es tener a los tiles como si fueran sprite, o sea &quot;objetos&quot; o imagenes &quot;separadas&quot;, yo a mis tiles los tengo todos en un map [][], el problema es como ir modificando ese map[][] para realizar el movimiento, por ejemplo el map puede ser algo asi:<br /><br />miEscenario = [<br />[0,0,0,0,1,1,1,1,0,0]<br />[0,0,0,0,0,0,0,0,0,0]<br />[0,0,0,0,1,1,1,1,0,0]<br />[0,0,0,0,0,0,0,0,0,0]<br />]<br />donde los 1 serian las plataformas, el problema consiste en como &quot;dentro del game loop&quot; realizar el movimiento, ya que los tiles no se si pueden moverse pixel a pixel como en tu ejemplo -- atributo &quot;velocidad&quot;, creo que un tile de 32x32 debe moverse de a 32 pixeles o eso creo, no lo se. Mi duda es si existe alguna función, o algo que simplifique la solución a este problema, el de mover los 1´s horizontalmente?? <br /><br />Gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Vie Sep 30, 2011 4:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-29T19:22:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6008#p6008</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6008#p6008"/>
<title type="html"><![CDATA[Re: Tiles - Mover una plataforma]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6008#p6008"><![CDATA[
Hola diego. Aquí te dejo un ejemplo que acabo de hacer en pySFML de una plataforma formada por 3 tiles que se mueve horizontalmente. Creo que el código es bastante comprensible pero si tienes cualquier duda, pregunta. Adjunto también la imagen del tile por si te interesa.<br /><br /><pre class="prettyprint">#Importamos los modulos necesarios<br />from PySFML import sf<br /><br />#Creamos y configuramos la ventana de juego<br />window = sf.RenderWindow&#40;sf.VideoMode&#40;640, 480&#41;, &quot;Plataforma&quot;&#41;<br />window.SetFramerateLimit&#40;60&#41;   #Cantidad maxima de ticks por segundo<br /><br />#Inicializamos las variables de juego<br />event = sf.Event&#40;&#41; #Gestor de eventos<br />running = True     #Mientras running = True ejecutaremos el juego<br />sentido = True     #True = derecha | False = izquierda<br />velocidad = 5      #Cantidad de pixeles que avanzara la plataforma cada tick<br /><br />#Cargamos las imagenes<br />tile1 = sf.Image&#40;&#41;<br />tile1.LoadFromFile&#40;&quot;tile.jpg&quot;&#41;<br />tile1 = sf.Sprite&#40;tile1&#41;<br />tile1.SetPosition&#40;0, 240&#41;<br /><br />tile2 = sf.Image&#40;&#41;<br />tile2.LoadFromFile&#40;&quot;tile.jpg&quot;&#41;<br />tile2 = sf.Sprite&#40;tile2&#41;<br />tile2.SetPosition&#40;20, 240&#41;<br /><br />tile3 = sf.Image&#40;&#41;<br />tile3.LoadFromFile&#40;&quot;tile.jpg&quot;&#41;<br />tile3 = sf.Sprite&#40;tile3&#41;<br />tile3.SetPosition&#40;40, 240&#41;<br /><br />#Iniciamos el bucle principal<br />while running:<br />    while window.GetEvent&#40;event&#41;:<br />        if event.Type == event.Closed:<br />            running = False<br />            <br />    if tile1.GetPosition&#40;&#41;[0] &lt;= 0:   #Si el primer tile se sale de la pantalla por la izquierda hacemos que la plataforma se dirija a la derecha<br />        sentido = True<br />    elif &#40;tile3.GetPosition&#40;&#41;[0] + 17&#41; &gt;= 640:   #Si el ultimo tile se sale de la pantalla por la derecha hacemos que la plataforma se dirija a la izquierda<br />        sentido = False<br /><br />    if sentido:<br />        tile1.SetPosition&#40;tile1.GetPosition&#40;&#41;[0] + velocidad, 240&#41;<br />        tile2.SetPosition&#40;tile2.GetPosition&#40;&#41;[0] + velocidad, 240&#41;<br />        tile3.SetPosition&#40;tile3.GetPosition&#40;&#41;[0] + velocidad, 240&#41;<br />    else:<br />        tile1.SetPosition&#40;tile1.GetPosition&#40;&#41;[0] - velocidad, 240&#41;<br />        tile2.SetPosition&#40;tile2.GetPosition&#40;&#41;[0] - velocidad, 240&#41;<br />        tile3.SetPosition&#40;tile3.GetPosition&#40;&#41;[0] - velocidad, 240&#41;<br /><br /><br />    window.Clear&#40;&#41;<br />    window.Draw&#40;tile1&#41;<br />    window.Draw&#40;tile2&#41;<br />    window.Draw&#40;tile3&#41;<br /><br />    window.Display&#40;&#41;<br /><br />window.Close&#40;&#41;</pre><br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue Sep 29, 2011 7:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-09-29T00:49:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6000#p6000</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6000#p6000"/>
<title type="html"><![CDATA[Re: Tiles - Mover una plataforma]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=6000#p6000"><![CDATA[
Hola, muchas gracias por la respuesta!, efectivamente mi plataforma se compone de varios tiles, la pregunta iba dirigida a ver si existe algún ejemplo donde se realice este movimiento especifico, el de mover varios tiles horizontalmente de un lado a otro, o sea la tipica plataforma en movimiento, ya que veo un poco complejo el realizar la función, capaz que existe algún ejemplo con funciones de pygame, o python que simplifique este requerimiento. Por ejemplo si tengo una plataforma que se encuentra en mi map en estas  posiciones:<br />map[55][15], map[55][16], map[55][17], map[55][18], map[55][19], map[55][20], como y donde se debe realizar el procedimiento.<br /><br />Muchas gracias por la ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Jue Sep 29, 2011 12:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-09-27T21:33:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5996#p5996</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5996#p5996"/>
<title type="html"><![CDATA[Re: Tiles - Mover una plataforma]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5996#p5996"><![CDATA[
Bueno, en la sección de ejemplos (<a href="http://www.losersjuegos.com.ar/referencia/ejemplos" class="postlink">http://www.losersjuegos.com.ar/referencia/ejemplos</a>), encontraras un tutorial llamado mini RPG escrito en pygame.<br />En ese tutorial, se muestra una implementación de un mapa de tiles, y se añade movimiento desde el segundo ejemplo.<br />Creo que te puede servir <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Sep 27, 2011 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-27T19:25:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5995#p5995</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5995#p5995"/>
<title type="html"><![CDATA[Re: Tiles - Mover una plataforma]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5995#p5995"><![CDATA[
Hola diego! En primer lugar decirte que yo no utilizo pygame sino pySFML, pero espero poder ayudarte.<br /><br />Los tiles son pequeñas imágenes que se utilizan, en conjunto, para crear escenarios. Que yo sepa pygame no incluye métodos &quot;especiales&quot; para trabajar con tiles, sino que trata a los tiles como si fuesen imágenes igual que los sprites.<br /><br />Si tu plataforma está formada por una única imagen (tile) moverla horizontalmente sería tan sencillo como modificar ligeramente su coordenada x, como de grande sea esa modificación dependerá de como de rápido quieres que se mueva la plataforma. Con un simple if puedes comprobar cuando la plataforma llega al final de su recorrido y en ese momento hacer que la plataforma se pare o invertir la modificación de la coordenada x para que la plataforma se mueva en sentido inverso.<br /><br />En caso de que tu plataforma esté formada por varias imágenes simplemente tendrás que hacer lo anterior pero en bucle, de tal forma que la modificación de la coordenada x se aplique a todas las imágenes. Y por supuesto para detectar el final de recorrido tendrás que utilizar los valores de las coord x de las imágenes de los extremos.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mar Sep 27, 2011 7:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-09-27T03:50:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5992#p5992</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5992#p5992"/>
<title type="html"><![CDATA[Tiles - Mover una plataforma]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1283&amp;p=5992#p5992"><![CDATA[
Buenas, estoy actualmente investigando como mover una plataforma formada en tile, por ejemplo horizontalmente, se me ocurre una forma de hacerlo pero considero que es media compleja, por lo tanto quisiera preguntar si alguien conoce alguna función para realizar este requerimiento, algo que ya este creado, aclaro la plataforma no es un Sprite, son tiles. <br />Estoy utilizando pygame.<br /><br />Gracias!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mar Sep 27, 2011 3:50 am</p><hr />
]]></content>
</entry>
</feed>