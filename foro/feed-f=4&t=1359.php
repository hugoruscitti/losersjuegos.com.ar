<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1359" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-12-20T08:49:47+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1359</id>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-12-20T08:49:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6292#p6292</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6292#p6292"/>
<title type="html"><![CDATA[Re: Juego ayuda (phyton)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6292#p6292"><![CDATA[
Si os gustan este tipo de juegos, daros un paseo por <a href="http://www.caad.es/" class="postlink">http://www.caad.es/</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Mar Dic 20, 2011 8:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-12-19T19:35:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6288#p6288</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6288#p6288"/>
<title type="html"><![CDATA[Re: Juego ayuda (phyton)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6288#p6288"><![CDATA[
Jajaja me encantó tu versión Kaiser. Muy creativo y gracioso. Me inspiró a hacer yo tambien un juego de aventuras a la Old School. Aunque seguro que no me queda tan bueno como lo escribiste Tú. Y eso que es solo un ejemplo xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Lun Dic 19, 2011 7:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-12-19T18:58:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6287#p6287</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6287#p6287"/>
<title type="html"><![CDATA[Re: Juego ayuda (phyton)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6287#p6287"><![CDATA[
Hola carlosveraro, aquí te dejo éste código, lo he escrito un poco rápido así que no está muy pulido, pero espero que te sirva de ayuda.<br /><br />Para que funcione primero debes crear, junto al archivo &quot;ejecutar.py&quot;, otro archivo llamado &quot;capitulo.txt&quot; en el que solo esté escrito un 1.<br /><br /><pre class="prettyprint">#!/usr/bin/python<br /># -*- coding: utf-8 -*-<br /><br />f = open&#40;&quot;capitulo.txt&quot;, &quot;r&quot;&#41;<br />capitulo = f.readline&#40;&#41;[0]<br />f.close&#40;&#41;<br />leer = True<br /><br />while leer:<br /><br />    if capitulo == &quot;1&quot;:<br />        print &quot;Capítulo 1. --El jóven aventurero--&quot;<br />        print &quot;&quot;<br />        print &quot;Hola jóven explorador, pareces ávido de aventuras y gloria.&quot;<br />        print &quot;Oh!, espera... o tal vez buscas a tu amada?&quot;<br />        print &quot;En cualquier caso es duro el camino que vas a emprender&quot;<br />        print &quot;y si me admites un consejo: no es el arma que empuña tu brazo&quot;<br />        print &quot;la que te hará llegar al final del camino de una pieza,&quot;<br />        print &quot;sino la que llevas debajo de ese viejo casco &#40;TONC!, TONC!&#41;&quot;<br />        print &quot;Serán tus decisiones las que te llevarán a la victoria,&quot;<br />        print &quot;así que usa esa cabezota que tienes y no te precipites.&quot;<br />        print &quot;Recuerda que para tomar una decisión solo debes pulsar&quot;<br />        print &quot;la tecla entre paréntesis que identifique tu opción.&quot;<br />        print &quot;Ah, se me olvidaba, si en algún momento quieres tomarte&quot;<br />        print &quot;un bien merecido descanso, simplemente escribe &lt;salir&gt;&quot;<br />        print &quot;y no te preocupes, tu progreso será guardado antes de salir.&quot;<br />        opcion = raw_input&#40;&quot;Listo para empezar la aventura? [&#40;s&#41;i, &#40;n&#41;o]\n&quot;&#41;<br />        print &quot;&quot;<br />        print &quot;&quot;<br />        print &quot;&quot;<br />        if opcion == &quot;n&quot;:<br />            print &quot;Lo entiendo, tal vez prefieras tomar un trago antes de&quot;<br />            print &quot;embarcarte en tan difícil tarea.&quot;<br />            leer = False<br />        if opcion == &quot;s&quot;:<br />            capitulo = &quot;2&quot;<br />        if opcion == &quot;salir&quot;:<br />            print &quot;Descansa jóven aventurero, mañana nos espera un duro dia.&quot;<br />            f = open&#40;&quot;capitulo.txt&quot;, &quot;w&quot;&#41;<br />            f.write&#40;capitulo&#41;<br />            f.close&#40;&#41;<br />            leer = False<br /><br />    if capitulo == &quot;2&quot;:<br />        print &quot;Capítulo 2. --Sendero pedregoso--&quot;<br />        print &quot;&quot;<br />        print &quot;Tras un largo camino...&quot;<br />        opcion = raw_input&#40;&quot;Deseas tomar el &#40;a&#41;tajo o seguir por el &#40;p&#41;edregoso camino?\n&quot;&#41;<br />        print &quot;&quot;<br />        print &quot;&quot;<br />        print &quot;&quot;<br />        if opcion == &quot;salir&quot;:<br />            print &quot;Descansa jóven aventurero, mañana nos espera un duro dia.&quot;<br />            f = open&#40;&quot;capitulo.txt&quot;, &quot;w&quot;&#41;<br />            f.write&#40;capitulo&#41;<br />            f.close&#40;&#41;<br />            leer = False<br />        else:<br />            capitulo = &quot;3&quot;<br /><br />    if capitulo == &quot;3&quot;:<br />        if opcion == &quot;a&quot;:<br />            print &quot;Con un suave tirón indicas a tu montura que se dirija hacia la izquierda...&quot;<br />        if opcion == &quot;p&quot;:<br />            print &quot;El Sol se está escondiendo y parece que el camino es largo, hincas las espuelas...&quot;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Lun Dic 19, 2011 6:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlosveraro]]></name></author>
<updated>2011-12-18T15:41:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6283#p6283</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6283#p6283"/>
<title type="html"><![CDATA[Juego ayuda (phyton)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1359&amp;p=6283#p6283"><![CDATA[
Hola a todos y encantado de conocerlos, tengo una duda con un juego que estoy haciendo. Hay un momento en el que el juego de pregunta si quieres atacar o huir, y quiero saber como hacer para que según la respuesta aparezca un mensaje u otro. De jo el código para que lo entiendan mejor. Muchas gracias. PD: eligid la mazmorra 1<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import random<br />import time<br /><br />def displayIntro():<br />    print(&quot;De repente te despiertas en un  prado&quot;)<br />    print(&quot;sin poder recordar nada de tu pasado.&quot;)<br />    print(&quot;Al levantar la vista ves dos cuevas,&quot;)<br />    print(&quot;y decides aventurate en ellas para ver&quot;)<br />    print(&quot;si descubres algo interesante&quot;)<br />    print()<br /><br />def chooseCave():<br />    cave = &quot;&quot;<br />    while cave != &quot;1&quot; and cave != &quot;2&quot;:<br />        print(&quot;¿En qué cueva quieres entrar? (1 o 2)&quot;)<br />        cave = input()<br /><br />    return cave<br /><br />def checkCave(chosenCave):<br />    print(&quot;Te acercas a la cueva...&quot;)<br />    time.sleep(2)<br />    print(&quot;Está muy oscura y sucia...&quot;)<br />    time.sleep(2)<br />    print(&quot;Un gran dragón aparece enfrente tuya, abre su gran boca y...&quot;)<br />    print()<br />    time.sleep(2)<br /><br />    friendlyCave = (1)<br /><br />    if chosenCave == str(friendlyCave):<br />        print(&quot;Te da su tesoro, que contiene una espada&quot;)<br />        print(&quot;Ahora decides ir a explorar la otra caverna.&quot;)<br />        time.sleep(2)<br />        print()<br />        print(&quot;Cuando llegas, te encuentras con un goblin,&quot;)<br />        print(&quot;que enseguida se da cuenta de tu presencia y&quot;)<br />        print(&quot;corre hacia tí.&quot;)<br />        print(&quot;¿Qué quieres hacer? (atacar o huir)&quot;)<br /><br />def chooseAction():<br />    action = &quot;&quot;<br />    while action != &quot;atacar&quot; and action != &quot;huir&quot;:<br />        print(&quot;¿Qué quieres hacer? (atcar o huir)&quot;)<br />        action = input()<br /><br />    return cave<br /><br />    if action == str(atacar):<br />        print(&quot;Sacas tu espada y cortas al goblin por la mitad.&quot;)<br />    <br />    badCave = (2)<br /><br />    if chosenCave == str(badCave):<br />        print(&quot;De su boca sale una llamarada que te chamusca por completo matándote&quot;)<br /><br />playAgain = &quot;yes&quot;<br />while playAgain == &quot;yes&quot; or playAgain == &quot;y&quot;:<br /><br />    displayIntro()<br /><br />    caveNumber = chooseCave()<br /><br />    checkCave(caveNumber)<br /><br />    print(&quot;¿Quiéres jugar de nuevo?&quot;)<br />    playAgain = input()<br /><br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2545">carlosveraro</a> — Dom Dic 18, 2011 3:41 pm</p><hr />
]]></content>
</entry>
</feed>