<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1396" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-20T00:53:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1396</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-04-20T00:53:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6679#p6679</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6679#p6679"/>
<title type="html"><![CDATA[Re: Como gestionar varios rect collision o hitboxes?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6679#p6679"><![CDATA[
Aun no escribo ni una sola linea de codigo, pero entre los comentarios veo una solucion casi obvia.<br /><br />A nosotros nos importa solo dos cosas, saber si el CPU golpio al jugador o viceversa, y el estado del otro jugador ¿Me explico porque me viene y me va la cantidad de rects para saber que parte del cuerpo colisiono el sprite golpeador? Facil, porque con solo saber si el sprite golpeador estaba con los pies en el suelo o golpeando mientras golpeaba o en ultima instancia haciendo barridas, sabremos que animacion ejecutar para el sprite golpeado en consecuencia.<br /><br />Por ejemplo, si el sprite A es golpeado por el sprite B mientras est estaba saltando, ejecuta la animacion del sprite A moviendo la cabeza para atras. Si el sprite A golpea al sprite B mientras estaba agachado haciendo una barrida, ejecuta la animacion donde el sprite A se cae y se repone y asi sucesivamente.<br /><br />Con mi sugerencia, veras que la cantidad de rectangulos para detectar colisiones se reduce quizas a uno o dos, haciendo más facil para ti desarrollar el juego independientemente si estas metiendo todos los personajes de Marvel, capcom, Bandai, Nintendo, etc.<br /><br />No sé si me expliqué bien.<br />saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Abr 20, 2012 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-01-27T21:19:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6487#p6487</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6487#p6487"/>
<title type="html"><![CDATA[Re: Como gestionar varios rect collision o hitboxes?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6487#p6487"><![CDATA[
En ese caso, ¿has pensando en usar colisión por mascaras en lugar de cajas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Vie Ene 27, 2012 9:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[borgo66]]></name></author>
<updated>2012-01-27T20:01:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6486#p6486</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6486#p6486"/>
<title type="html"><![CDATA[Re: Como gestionar varios rect collision o hitboxes?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6486#p6486"><![CDATA[
Hechelion la verdad te pasaste, el código en VB no importa, supongo que en algunos días si me pongo a estudiar lo puedo comprender.<br />La idea de lo que hace  Mugen creo que la tengo, el problema para mi es que no se como hacer para transformar un dibujo, o gráfico mejor dicho, en coordenadas para las hitboxes en pantalla. Pero de nuevo te agradezco mucho por el código.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2420">borgo66</a> — Vie Ene 27, 2012 8:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-01-27T18:36:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6485#p6485</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6485#p6485"/>
<title type="html"><![CDATA[Re: Como gestionar varios rect collision o hitboxes?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6485#p6485"><![CDATA[
Lamentablemente el ejemplo es para VB, por eso no lo había colocado<br /><br /><!-- m --><a class="postlink" href="http://www.stratos-ad.com/forums/index.php?topic=11944.0">http://www.stratos-ad.com/forums/index. ... ic=11944.0</a><!-- m --><br /><br />La clase se encarga de gestionar las animaciones, y cada frame de la animación tiene asociado un array de coordenadas que representan los boxes de colisión.<br /><br /><br />También te recomiendo darle una mirada a M.U.G.E.N. me parece que no tienen liberado el código fuente, pero si lees un poco la wiki de como se crean personajes y escenarios, te da ideas sobre como tienen implementadas algunas cosas y eso ya es un inicio.<br /><!-- m --><a class="postlink" href="http://www.elecbyte.com/mugen">http://www.elecbyte.com/mugen</a><!-- m --><br />Te recomiendo darla una mirada a la documentación, pues es precisamente un motor de juegos de pelea 2d tipo Street figther, puede que te de más de una idea.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Vie Ene 27, 2012 6:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[borgo66]]></name></author>
<updated>2012-01-27T15:59:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6484#p6484</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6484#p6484"/>
<title type="html"><![CDATA[Re: Como gestionar varios rect collision o hitboxes?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6484#p6484"><![CDATA[
Tenes razon Hugo es todo un mundo y por cierto no hay mucha informacion al respecto, pareciera que programar un street fighter es algo asi como magia negra en el mundo de la programacion.<br />Por otro lado el juego que estas haciendo tiene una pinta barbara y me gusto la idea, el codigo lo voy a analizar bien el fin de semana.<br />Queria pasarte el link de este juego en pygame (me olvide de decir que yo estoy haciendo el mio tambien en pygame)<a href="http://pygame.org/project-Street+pyghter-1860-3372.html" class="postlink">http://pygame.org/project-Street+pyghter-1860-3372.html</a>.Estuve tratando de desenmarañar el codigo y no se entiende mucho, pero he aqui que en la carpeta de los sprites y demas recursos hay un par de sprite sheets (o algo asi) con las hit boxes dibujadas a mano pero en dos &quot;capas&quot;.Al parecer el tipo uso gimp para dibujar las cajas sobre la sprite sheet de las animaciones del luchador y despues usa esas capas no visibles para chekear colisiones, algo como lo que haces vos Hugo y tambien lo que dice hechelion y  el problema seria como que no se bien por donde empezar a  implementar algo asi (soy un intermedio en esto de los video juegos).<br />Hechelion parece que ya hizo algo de esto asi que si tenes algun codigo como ejemplo o informacion de por donde empezar te lo agradeceria mucho.<br />Yo por mi parte voy a tratar de seguir desentrañando el codigo del juego que les pase y el de Hugo tambien (para que no digan que no hago nada, je,je,je!).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2420">borgo66</a> — Vie Ene 27, 2012 3:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-01-27T00:47:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6483#p6483</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6483#p6483"/>
<title type="html"><![CDATA[Re: Como gestionar varios rect collision o hitboxes?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6483#p6483"><![CDATA[
Yo uso un sistema de boxes asociados a cada sprite de la animación, la idea la tome del M.U.G.E.N. de DOS (ni idea si aún sigue siendo igual), de esa forma cuando das un golpe, se crea un &quot;box&quot; que sigue a la animación con lo cual se consigue que esté bien sincronizado y a bajo coste, pues es simplemente una lista de coordenadas.<br /><br />Respecto a la cantidad de boxes y precisión de colisiones, se suele usar un sistema similar al usado a las texturas, mientras más lejos, menor resolución y mientras más cerca, más resolución. <br />Esto aplicado a colisiones sería tener un único box por entidad, de esa forma tienen que comprobar muy pocas colisiones por ciclo, si un momento detectas que hay una colisión, bajas un nivel y pasas a comprobar colisiones de forma detalla (ya sea con más box o por pixel) solo entre las entidades que sus box ya están en colisión, de esa forma tienes precisión pero solo calculas colisiones precisas si son necesarias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Vie Ene 27, 2012 12:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-01-25T20:39:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6482#p6482</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6482#p6482"/>
<title type="html"><![CDATA[Re: Como gestionar varios rect collision o hitboxes?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6482#p6482"><![CDATA[
Hola Borgo,<br /><br />al menos en los juegos que yo vi, el sistema de colisiones se<br />intenta simplificar lo máximo posible, porque como decís, con<br />tantos personajes y movimientos se vuelve cada vez mas complejo<br />y difícil de manejar.<br /><br />Por ejemplo, en el juego shaolin estoy tratando de implementar<br />un tipo de colisiones fácil de manejar, y para mi sorpresa, se<br />puede simplificar muchísimo.<br /><br />Estás son algunas de las ideas que estoy planteando para simplificarlo. Te las<br />comento, porque tal vez se parezcan a las del juego que estás haciendo. Y tengan<br />algo en común:<br /><br />- Cuando un personaje pega, construye un sprite golpe.<br />- El sprite golpe es invisible, pero se puede hacer visible para depurar (con un flag).<br />- Las colisiones se dan cuando el emisor (sprite golpe) toca el rect del enemigo.<br />- El rect del enemigo es fijo, no tiene distintos puntos de recepción de golpes.<br />- La posición del sprite golpe es relativa a la posición del personaje que emite el golpe.<br /><br />Esta imagen muestra cómo se ve un golpe en pantalla:<br /><br /><img src="https://bitbucket.org/hugoruscitti/sbfury/raw/10e89cea976c/sbfury/doc/imagenes/golpe.png" alt="Imagen" /><br /><br />No se si te servirá de mucho, pero si quieres puedes investigar<br />un poco el readme que estoy escribiendo:<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/sbfury/src/10e89cea976c/sbfury/doc/manual_para_desarrolladores.rst">https://bitbucket.org/hugoruscitti/sbfu ... adores.rst</a><!-- m --><br /><br />Es todo un mundo los juegos de peleas, estaría bueno seguir conversando a ver<br />si sacamos estrategias para escribir un artículo no?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ene 25, 2012 8:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[borgo66]]></name></author>
<updated>2012-01-25T17:58:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6478#p6478</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6478#p6478"/>
<title type="html"><![CDATA[Como gestionar varios rect collision o hitboxes?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1396&amp;p=6478#p6478"><![CDATA[
Vuelvo al ataque a tratar de terminar una demo de un juego de peleas despues de un tiempo.<br />He aqui la cuestion: en este juego (un clon del street fighter) tenemos varios hitboxes (las cuales son rects que se usan para determinar que parte del cuerpo del sprite colisiona con que otra,etc) por frame de cada animacion del personaje y ese es el problema,¿como demonios hago para gestionar los cientos de hitboxes que tiene cada uno de los varios personajes del juego?.<br />Con &quot;gestionar&quot; me quiero referir a colocarlas en las coordenadas especificas para cada luchador(ya que no es lo mismo el lugar donde impacta un golpe si un personaje es  mas alto que otro), actualizar sus pociciones, chequear si colisionan,etc, con varios personajes y sus muchas animaciones.<br />Hasta ahora lo que tengo es  una clase &quot;Frame&quot; que contiene la imagen que le corresponde, una lista de hitboxes (rects) de ataque y otra que indica que zona del sprite son golpeables ej: cabeza, torso, pies y según que zona es golpeada reaccione distinto, pero quiero recalcar la pregunta: ¿Tengo que &quot;setear&quot; o inicializar a mano todas las hitboxes? Si tienen alguna idea de como hacer algo asi o una sugerencia de otro sistema de colisiones para un juego de peleas lo voy a apreciar mucho porque hace rato que estoy estancado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2420">borgo66</a> — Mié Ene 25, 2012 5:58 pm</p><hr />
]]></content>
</entry>
</feed>