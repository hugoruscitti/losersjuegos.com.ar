<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1476" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-05-17T00:44:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1476</id>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2013-05-17T00:44:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=9233#p9233</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=9233#p9233"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=9233#p9233"><![CDATA[
Bueno gente, se que este no es el lugar indicado pero queria que sepan que no me olvido de ustedes ni del foro, y el proyecto de Battle City sigue en pie junto a la idea de que una vez terminado quede para el foro. En todo este tiempo no di noticias porque la facultad me consume y como es un Final para una materia que todavia no molesta no le habia dedicado tiempo. Hace un mes lo retome, dedicandole una hora o dos por semana y la verdad que avance bastante. Quiero agradecerles por su ayuda, disposicion, ideas y ejemplos que me dieron.<br />Aca les dejo un video sobre como gestiona las escenas, usando el metodo que Kiketom explica en su blog.<br /> <a href="http://www.youtube.com/v/http://www.youtube.com/watch?vch?v=aIDJnIzsZFY"></param><param target="_blank"><strong>object</strong></a> <br />No se asusten por el codigo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> , ya estoy corrigiendo y modularizando mejor las cosas. Si bien recomiendan tener todo en ingles, hice todo en español y comentado cada cosa para que sea mas entendible para gente recien iniciada como yo. Se que no giran los tanques  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" />  pero es porque me dedique en los detalles mas grandes que en los pequeños o faciles de implementar.<br />El video ya es algo viejito, segui avanzando de a poco, los tanques disparan, se rompen las paredes, por ahora tengo dos tipos de inteligencia artificial implementada: Algoritmo Estrella, y una pseudo aleatoria que hice en la que el tanque se mueve aleatoriamente y en cada cruce analice mi posicion para saber a donde moverse; la idea es hacer otro tipos de inteligencias para dotar de mayor variedad.<br />Ahora le estoy dedicando mas tiempo a lo que es gestion de escenas y de menu, y segun la resolucion del juego o la posicion del mapa en pantalla, me adapte los tiles, los escale y los ubique donde corresponde. Quizas el estilo engine rpg no es lo mas conveniente para este tipo de juegos, pero si el mas convienente para el algoritmo estrella que utilizo. Voy a seguir adaptando mejor las cosas para que las colisiones no dependan tanto de la matriz del mapa sino de un grupo de sprites en si.<br />En cuantos a los tiles sprites, decidi una vez terminado el juego empezar con el dibujado a mano y digitalizacion para que tenga un estilo &quot;papel&quot; como el Paper Mario. Estuve probando bocetos y tengo algunos inconvenientes con la pixelizacion y detalles pero vamos por buen camino.<br />Esto es todo por ahora, una vez que tenga mas practica con el manejo del lenguaje y del paradigma de objetos, la idea es añadirle un creador de mapas. Es dificil, pero me gustan los retos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />PD: Por si no se ve el video, aca les dejo el link <a href="http://www.youtube.com/watch?v=aIDJnIzsZFY" class="postlink">http://www.youtube.com/watch?v=aIDJnIzsZFY</a> No se como acer que se vea con las etiquetas de youtube  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /> <br /><br />Saludos Gente! Gracias Nuevamente<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Vie May 17, 2013 12:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2012-06-08T04:00:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6842#p6842</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6842#p6842"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6842#p6842"><![CDATA[
Bueno chicos, les escribo mas que nada para agredecer su dispocion y decirles que de traspasar las paredes por casi 10-15px perceptibles, ahora son entre 2-5px bastante disimulables. En el ejemplo del Mini RPG se encarga de revisar un punto especifico, lo cual me sirivio bastante de ayuda junto a sus opiniones y consejos. Lo que le agregue es que verifique otros 5 punto mas. Esos pocos px que disimulan,  los voy a terminar reduciendo un poco el dibuje del tanque en si pero mateniendo las proporciones de su transpariencia.<br />Por ultimo les pido un consejo, desde el punto de vista artistico o diseño grafico mejor dicho, el tanque no debe tener el mismo ancho y largo que los tiles? O depende de gustos?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Vie Jun 08, 2012 4:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2012-06-07T16:18:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6841#p6841</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6841#p6841"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6841#p6841"><![CDATA[
Claro, mi idea era un movimiento libre dentro de un tiledmap. Voy a implementar lo que me dijiste kike, y tambien, como ultima instancia, probar una alternativa de rieles que use en qbasic. Gracias por los consejos muchachos, voy a ver que encuentro sobre movimiento libre y si me conviene para mi tipo de juego. Cuando tenga mas noticias sobre el juego las publico, y en cuanto tenga el modelo listo lo subo para compartir.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Jue Jun 07, 2012 4:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-06-07T06:26:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6839#p6839</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6839#p6839"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6839#p6839"><![CDATA[
Si no quieres tener el efecto raro que comentas, no deberias dejar mover el tanque hasta que no llegara ha la posición central del tile hacia el que se está desplazando.<br />Digamos que tu pulsas hacia la derecha y el tanque cambia su estado a &quot;Moviendo&quot; y va incrementando su x hasta llegar al centro del tile de la derecha.<br />Una vez llegado al punto, cambia su estado a &quot;Parado&quot; y ya permite que le dés nuevas instrucciones.<br />Ahora si lo que quieres es un movimiento libre dentro de un tiledmap, eso es otra cosa.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Jue Jun 07, 2012 6:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2012-06-06T23:59:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6837#p6837</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6837#p6837"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6837#p6837"><![CDATA[
Sigo agregando informacion por las dudas, segui revisando el codigo del mini rpg y al tener un vista pseudo 3d (no se como llamarla), las colisiones disimulan, pero el personaje se llega a poscionarse partes de las celdas en las cual no puede pisar. En mi caso, como el juego se ve desde arriba se nota mas. Lo que hice fue agregarle unos offsets para corregir esos detalles.  Quedan algunos pequeños, como que al posicionarse en una celda, pero queda parte del tanque en otra (una pequeña diferencia de 5px) traspasa un poco las paredes. Ejemplo. Mi tanque esta en la (6,11) mira para la (5,11) y colisiona porque hay pared. Me voy moviendo para la (6,10) y sin terminar de colocarme totalmente en el centro de la celda, el valor ya cambia a (6,10). Si quiero doblar a la izquierda, mira a la (5,10), no hay pared entonces va por ahi, pero como parte del sprite del tanque seguia en la celda anterior (6,11), trapasa un poco las paredes. Ese tipo de detalles el profesor no los va a tener en cuenta, mientras el modelo del juego funcione, pero como soy detallista voy a tratar de corregirlo.  Cuando tenga un poco mas de tiempo les paso el codigo, ya que estoy comentando desde el celular y no estoy en casa.<br />Por ultimo, me convendria usar el rect.top y bottom en casos como doblar izquierda derecha, y rect.left y right en caso de arriba abajo para poder detectar mejor esas colisiones?  Gracias de antemano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Mié Jun 06, 2012 11:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2012-06-06T02:54:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6830#p6830</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6830#p6830"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6830#p6830"><![CDATA[
Hice una segunda prueba, esta vez con el mapa creada a traves de un txt,  y lo probe con el codigo de mini RPG. Por lo que vi, los movimientos del personaje, en realidad son los de la camara pero como en mi juego la camara es fija, que debo hacer? sinceramente no entiendo nada.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Mié Jun 06, 2012 2:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2012-06-05T18:48:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6828#p6828</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6828#p6828"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6828#p6828"><![CDATA[
Gracias por el ejemplo. Es muy similar a la forma en que yo lo estaba haciendo en quickbasic (donde no tuve problema con las colisiones xD. Voy a leerlo tranquilo. Gracias por tu disposicion.<br /><br /><br />Edit:<br /><br />Baje el mini rpg, y entendi bastante, lo que no me cierra mucho es lo del personaje, porque inicia con el rect.move_ip(120,70). En mi caso, en vez de iniciar con el rect.move, uso los rect.center para que me lo dibuje centrado en la celda inicial. Lo de la matriz, si o si tiene que ser como el ejemplo del txt? Probe por las dudas, usar la matriz de tiles que es de ((0..19),(0..11)), la capa de paredes. Si esa celda es 0, puede pisar sino no,pero el camino que es de una celda, con esa funcion pasan a ser de dos celdas, por lo tanto choca con paredes aveces, y otras no. No se si tengo que adaptar la funcion, o dejar de usar la matriz de tiles. Hacer un mapa txt, era lo ultimo que buscaba, pero si esa es la mejor solucion, lo hare.<br />Por ultimo, lei en la documentacion de pygame lo de los rect pero no entiendo muy bien lo de move_ip, podrias darme un ejemplo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Mar Jun 05, 2012 6:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-06-05T17:59:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6827#p6827</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6827#p6827"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6827#p6827"><![CDATA[
<blockquote><div><cite>Jonito11 escribió:</cite><br />La mejor forma de detectar las colisiones, es que el movimiento del tanque sea cada 32px , largo y ancho del tile.<br /></div></blockquote><br />Pues en realidad no. Como estás trabajando con un mapa de tile, y por lo tanto con un mapa de cohordenadas (x,y), puedes crear una función que verifique si el personaje puede o no pisar sobre determinado tile. En la sección de ejemplos de LosersJuegos (<a href="http://www.losersjuegos.com.ar/referencia/ejemplos" class="postlink">http://www.losersjuegos.com.ar/referencia/ejemplos</a>) encontraras un ejemplo llamado <a href="http://www.losersjuegos.com.ar/_media/referencia/ejemplos/mini_rpg/mini_rpg.tar.gz" class="postlink">Mini_RPG</a> creado por Hugo Ruscitti en el cual se puede apreciar dicha función. La encontrarás como <span style="font-style: italic">puede_pisar_en()</span>, dentro de la clase <span style="font-style: italic">Escenario()</span>. La pego aquí, pero te recomiendo leer el codigo completo porque te encontrarás con cosas muy interesantes.<br /><pre class="prettyprint linenums">class Escenario:<br />    #... codigo<br />    def puede_pisar_en&#40;self, x, y&#41;:<br />        &quot;Informa si se puede pisar sobre un bloque del escenario.&quot;<br /><br />        fila = &#40;y&#41; / 32<br />        columna = x / 32<br /><br />        try:<br />            celda = int&#40;self.grilla[fila][columna]&#41;<br />        except:<br />            # si no puede obtener la celda prohibe pisar ahí<br />            return False<br /><br />        if celda in [0, 1, 2]:<br />            return True<br /><br />        return False</pre><br />La clase <span style="font-style: italic">Personaje()</span> se cirve de esta funcion de <span style="font-style: italic">Escenario()</span> de esta madera:<br /><pre class="prettyprint linenums">import pygame<br />from pygame.locals import K_LEFT, K_RIGHT, K_UP, K_DOWN, QUIT, KEYDOWN<br /><br />class Personaje:<br />    #... codigo<br />    def update&#40;self&#41;:<br />        &quot;Realiza movimientos de la cámara en base a la pulsación de teclas.&quot;<br />        teclas_pulsadas = pygame.key.get_pressed&#40;&#41;<br />        dx = 0<br />        dy = 0<br /><br />        if teclas_pulsadas[K_UP]:<br />            dy -= 2<br />        elif teclas_pulsadas[K_DOWN]:<br />            dy = 2<br /><br />        if teclas_pulsadas[K_LEFT]:<br />            dx = -2<br />        elif teclas_pulsadas[K_RIGHT]:<br />            dx = 2<br /><br />        if not self.escenario.puede_pisar_en&#40;self.rect.x + dx, self.rect.y&#41;:<br />            dx = 0<br /><br />        if not self.escenario.puede_pisar_en&#40;self.rect.x, self.rect.y + dy&#41;:<br />            dy = 0<br /><br />        self.rect.move_ip&#40;dx, dy&#41;</pre><br />Es bastante simple, no creo que haga falta explicar el código. Aunque si tienes alguna duda pregunta tranquilo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br />Solo un detalle a tener en mente. En <span style="font-style: italic">Escenario()</span> veras que aparece <span style="font-style: italic">self.grilla</span>, esto no es más que el mapa de coordenadas. Cuando leas Mini_RPG lo vas a entender.<br /><br />Para administrar las coliciones con otros personasjes u objetos del escenario basta con que una ves que hayas llamado a <span style="font-style: italic">puede_pisar_en()</span> y que hayas movido el personaje con <span style="font-style: italic">rect.move_ip()</span>, debes verificar que su <span style="font-style: italic">rect</span> no se encuentre en contacto con el de otro personaje/objeto usando la función <span style="font-style: italic">rect.colliderect(rect2)</span>. En caso de que haya contacto simplemente cancela el <span style="font-style: italic">move_ip()</span> anterior. Para hacer esto lo mejor es poner a todos los personajes en un lista y se llama a cada elemento de la lista con colliderect(). Así de fácil.<br /><br /><pre class="prettyprint linenums">class Personaje:<br />    #... codigo<br />    def update&#40;self, lista&#41;:<br />        #... codigo<br /><br />        self.rect.move_ip&#40;dx, dy&#41;<br />        for personaje in lista:<br />            if self.rect.colliderect&#40;personaje&#41;:<br />                self.rect.move_ip&#40;-dx, -dy&#41;<br />                break</pre><br /><br />La tecnica de solo moverse por tiles se utiliza solo en juegos rpg al estilo pokemon, pero como tu juego tiene un tanque sunpongo que no se trata de ese tipo de juegos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />Espero se entienda.<br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Jun 05, 2012 5:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2012-06-05T04:21:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6825#p6825</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6825#p6825"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6825#p6825"><![CDATA[
Gracias por la Data. Crei haber solucionado lo de las colisiones pero no fue asi. La mejor forma de detectar las colisiones, es que el movimiento del tanque sea cada 32px , largo y ancho del tile. Como dije antes, al dibujar cada 32px el movimiento parece muy brusco y rapido. Hay alguna forma de animar ese movimiento para que no sea bursco al apretar una tecla? O tengo que crear un mapa con tiles mas pequeños para que el movimiento en pixeles del tanque corresponda al ancho o largo del tile?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Mar Jun 05, 2012 4:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-06-05T03:41:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6823#p6823</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6823#p6823"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6823#p6823"><![CDATA[
Hola. Me estoy acostando para dormir en este momento, así que te dejo una respuesta corta.<br />La herencia se refiere a que las clases heredan las funciones de una (o unas) clase madre. Lo que tu decias sobre las distintas clases teniendo funciones con el mismo nombre pero distinto efecto es lo que se llama <span style="font-style: italic">Polimorfismo</span>. Te dejo <a href="http://mundogeek.net/archivos/2008/03/05/python-orientacion-a-objetos/" class="postlink">este link</a> con todo lo que tienes que saber sobre Programación Orientada a Objetos (POO, u OOP en ingles), herecia y polimorfismo.<br /><br /><blockquote class="uncited"><div><br />Me conviene separar el juego por estados?<br /></div></blockquote><br />Si con esto te refieres a separar los personjes del juego por estados, pues si, es una buena idea. Yo no lo haría de otro modo, ni sabría de que otro modo hacerlo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> Si en cambio te refieres a separar las diversas partes del juego (menú, juego singleplayer, juego multiplayer), pues yo lo hago, pero eso es otro tema. Mejor preocupate antes en lograr hacer un juego simple para empezar a entender por donde va la cosa y luego expande tu conocimiento. Siempre mejor empezar de a poco.<br /><br />Cualquier duda pregunta <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />Suerte en todo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Jun 05, 2012 3:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2012-06-05T02:45:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6822#p6822</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6822#p6822"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6822#p6822"><![CDATA[
Pude solucionar lo de las colisiones y el movimiento fluido. Respecto a lo que me dice MrBB4. Recien me inicion en objetos y estuve leyendo algo de conceptos y trato de asimilarlos. Cuando tu me hablas de Herencia, un ejemplo puede ser que tenga una clase Tanque y dentro de ella el tanque manejado por cpu y el otro por el jugador que ambos heredan atributos como posicion, pero que difieren en su imagen de carga y metodos de movimiento? Me conviene separar el juego por estados?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Mar Jun 05, 2012 2:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Jonito11]]></name></author>
<updated>2012-06-03T23:39:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6813#p6813</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6813#p6813"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6813#p6813"><![CDATA[
Muchas gracias por la ayuda, lo voy a tener en cuenta. Estuve leyendo el blog de aventuras y segui el ejemplo. El problema que tengo en ese caso es que el movimiento del tanque es cada un tile (por como esta definido en el blog), entoces por cada vez que presiono alguna tecla de movimiento, el tanque se mueve 32px en pantalla lo que hace que sea muy cortado en vez de tener una suavidad moviendolo cada 4px. Si o si el movimiento tiene que ser cada un tile? De ser asi, como le puedo dar suavidad al movimiento para que no sea tan brusco. Mover cada un Tile para mi es mas facil para detectar las colisiones. Voy a probar otras alternativas y voy a tener en cuenta lo que me dijiste MrBB. Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2616">Jonito11</a> — Dom Jun 03, 2012 11:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-05-30T02:14:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6800#p6800</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6800#p6800"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6800#p6800"><![CDATA[
Buenas.<br />En general te vas a encontrar con que la mayoria de las clases tienen una función <span style="font-style: italic">Update()</span>, con la que el objeto observa su &quot;entorno&quot;, interactúa con otros objetos y recalcula su posición, imagen, etc; y una función <span style="font-style: italic">Draw()</span> con la que se dibuja el objeto en pantalla. Con esto, lo unico que el loop principal del juego tendrá que hacer es crear los objetos iniciales y luego simplemente llamarlos uno por uno con la función <span style="font-style: italic">Update()</span> y luego denuevo, uno por uno con la función <span style="font-style: italic">Draw()</span>.<br />Algo así:<br /><pre class="prettyprint linenums"># -*- coding: utf-8 -*-<br />import sys<br />import pygame #Módulo gráfico<br /><br /><br />def terminate&#40;&#41;:<br />    pygame.quit&#40;&#41; #Cierra el módulo gráfico<br />    sys.exit&#40;&#41; #Cierra el intérprete de python<br /><br />def check_input&#40;&#41;:<br />    #analiza la input por teclaro del usuario<br />    for event in pygame.event.get&#40;&#41;:<br />            if event.type == QUIT:<br />                terminate&#40;&#41;<br /><br /><br />class Personaje&#40;object&#41;:<br />    &quot;&quot;&quot;Clase para los personajes del juego&quot;&quot;&quot;<br /><br />    def __init__&#40;self&#41;:<br />        #define la superficie, rectangulo y otras variables importante del personaje<br />        pass<br /><br />    def update&#40;self&#41;:<br />        #Observa el entorno, interactua con otros personajes y recalcula posición e imagen<br />        pass<br /><br />    def draw&#40;self, ventana&#41;:<br />        #Dibuja al personaje sobre la superficie &quot;ventana&quot;<br />        pass<br /><br /><br />def main&#40;&#41;:<br />    VENTANA = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br /><br />    p1 = Personaje&#40;&#41;<br />    p2 = Personaje&#40;&#41;<br />    p3 = Personaje&#40;&#41;<br /><br />    while True:<br />        check_input&#40;&#41;<br /><br />        p1.update&#40;&#41;<br />        p2.update&#40;&#41;<br />        p3.update&#40;&#41;<br /><br />        p1.draw&#40;VENTANA&#41;<br />        p2.draw&#40;VENTANA&#41;<br />        p3.draw&#40;VENTANA&#41;<br /><br />        VENTANA.blit&#40;&#41;<br /><br />if __name__ == &#39;__main__&#39;:<br />    main&#40;&#41;</pre><br /><br />Las funciones <span style="font-style: italic">check_input()</span> y <span style="font-style: italic">terminate()</span> son funciones que yo suelo crear para simplificar todo, no es necesario que tú tambien las hagas. Basicamente <span style="font-style: italic">check_input()</span> se fija si el usuario quiere salir del programa, en cuyo caso llama a <span style="font-style: italic">terminate()</span> que se encarga de cerrarlo. Lo Importante en este ejemplo es la función main. Primero prepara el juego, en nuestro caso créa la variable <span style="font-style: italic">VENTANA</span> y los personajes <span style="font-style: italic">p1</span>, <span style="font-style: italic">p2</span> y <span style="font-style: italic">p3</span>; y luego pasa al loop principal del juego con la linea <span style="font-style: italic">while True:</span> (que a mi parecer es la forma más corta y legible de crear un loop infinito) en donde lo único que hace es llamar a todos los personajes con <span style="font-style: italic">update()</span> y luego con <span style="font-style: italic">draw()</span>; e imprime los cambios en pantalla con <span style="font-style: italic">VENTANA.blit()</span>. Bastante simple, no? =)<br /><br />En caso de que el juego tenga un número exagerado de objetos a actualizar e imprimir, como suele suceder, basta con meter a todos en una lista (o varias por claridad) y luego llamar a la lista con un <span style="font-style: italic">for in</span> loop y llamar las funciones <span style="font-style: italic">Update()</span> y <span style="font-style: italic">Draw()</span><br /><pre class="prettyprint linenums">#...Codigo anterior<br /><br />def main&#40;&#41;:<br />    VENTANA = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br /><br />    p1 = Personaje&#40;&#41;<br />    p2 = Personaje&#40;&#41;<br />    p3 = Personaje&#40;&#41;<br />    p4 = Personaje&#40;&#41;<br />    p5 = Personaje&#40;&#41;<br />    #... Y así hasta p50<br />    p50 = Personaje&#40;&#41;<br /><br />    personajes = [p1, p2, p3, p4, p5, p50] #Solo puse estos seis para que el codigo funcione rirectamente sin modificar<br /><br />    for p in personajes:<br />        p.update&#40;&#41;<br /><br />    for p in personajes:<br />        p.draw&#40;&#41;<br /><br />    VENTANA.blit&#40;&#41;<br /><br />if __name__ == &#39;__main__&#39;:<br />    main&#40;&#41;</pre><br />Te aconsejo de primero actualizar TODOS los objetos antes de imprimir alguno, solo para evitar problemas con que aparescan imagenes que no correspondan, porque aveces el <span style="font-style: italic">update()</span> de un personajé podría afectar la imagen que corresponda a uno anterior que ya se imprimió. (espero que eso se entienda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" />)<br />Tambien sería bueno que definieras algunas funciones, digamos, &quot;estandar&quot; que aparescan en todos los personajes, como puede ser <span style="font-style: italic">atacar()</span>, <span style="font-style: italic">defender()</span>, <span style="font-style: italic">caminar()</span> y cosas por el estilo, ya que esto facilita la comunicación entre personajes. Esto se puede realiza facilmente utilizando la herencia. Lo cual me imagino que ya conoces porque estás estudiando informática. Sino te lo explico, no hay problema.<br /><br />Obviamente todo lo que te he contado hasta ahora es más que nada para los objetos imprimibles de los juegos, pero la verdad, la mayoria de los objetos en un juego son imprimibles. Y aunque no lo fueran, ponerles una función <span style="font-style: italic">draw()</span> que no hiciera nada no hace mal a nadie y te simplifica el codigo ya que no tienes que agregar codigo extra en el loop principal, solo para esos pocos objetos no imprimibles.<br /><br />Y otro detalle. Te recomiendo leer el <a href="http://www.python.org/dev/peps/pep-0008/" class="postlink">PEP8</a> de python que define la manera &quot;correcta&quot; de escribir en python. En realidad no existe una manera correcta pero se marcó como la oficial para mayor legibilidad.<br /><br />Espero te haya ayudado <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br />Un saludo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mié May 30, 2012 2:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-05-29T20:16:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6796#p6796</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6796#p6796"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6796#p6796"><![CDATA[
Algunas ideas de aquí te pueden servir<br /><a href="http://aventurapygame.blogspot.com.es/?m=1" class="postlink">http://aventurapygame.blogspot.com.es/?m=1</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Mar May 29, 2012 8:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-05-29T17:19:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6795#p6795</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6795#p6795"/>
<title type="html"><![CDATA[Re: Ayudaa]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1476&amp;p=6795#p6795"><![CDATA[
Buenas.<br />Quería avisarte que estoy ecribiendo la respuesta a tu pregunta aunque me tomará algo de tiempo y en este momento no tengo mucho xD Me imagino que estarás usando la librería grafica Pygame. En caso contrario avísame. Posiblemente te tenga la respuesta para esta noche.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar May 29, 2012 5:19 pm</p><hr />
]]></content>
</entry>
</feed>