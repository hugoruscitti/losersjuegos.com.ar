<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1436" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-19T22:11:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1436</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-04-19T22:11:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6678#p6678</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6678#p6678"/>
<title type="html"><![CDATA[Re: PYGAME: Repetir tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6678#p6678"><![CDATA[
la vaina es, mr Hugo, que yo en mis años de estar aqui en LosersJuegos, nunca comprendí ese metodo para manejar escenas, pero con esa explicacion y la madurez que siento con respecto a Python, puede que ahora si pueda hacer juegos como Dios manda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Abr 19, 2012 10:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-04-03T01:57:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6602#p6602</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6602#p6602"/>
<title type="html"><![CDATA[Re: PYGAME: Repetir tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6602#p6602"><![CDATA[
Buenas!<br /><br />A simple vista el patrón state es un poquito difícil, pero dá muy buenos resultados.<br /><br />La idea general, es construir una clase por cada escena. Por ejemplo, una para la<br />prensentación, una para el menú y otra para el juego. Durante la ejecución de tu<br />juego, solamente va a existir una sola escena activa (o instanciada).<br /><br />Y como tu juego va  a tener varias escenas, tendrías que crear al menos<br />un objeto que pueda maniplarlas, es decir, pasar de una escena a otra y<br />mantenerlas en ejecución. A este objeto se lo suele llamar &quot;director&quot; o &quot;mundo&quot;.<br /><br />Te escribo una idea general:<br /><br /><pre class="prettyprint">class Mundo:<br /><br />   def __init__&#40;self&#41;:<br />         self.iniciar_ventana&#40;&#41;<br />         self.cambiar_escena&#40;EscenaIniciar&#40;self&#41;&#41;<br /><br />   def cambiar_escena&#40;nueva_escena&#41;:<br />         self.escena = nueva_escena<br /><br />   def iniciar&#40;self&#41;:<br />        # bucle principal.<br />        while True:<br />             for evento in pygame.events.get&#40;&#41;:<br />                   self.escena.cuando_ocurre_evento&#40;evento&#41;<br />             self.escena.actualizar&#40;&#41;<br />             self.dibujar_ventana&#40;&#41;<br />             pygame.time.sleep&#40;10&#41;</pre><br /><br />Es decir, la clase Mundo serviría para representar al juego completo, tienes<br />una función para crear la ventana, para definir la escena principal<br />y el bucle de juego.<br /><br />Esta clase se encargaría de capturar eventos y pasárselos a una escena, y a<br />su vez, la escena es la que implementará una parte del juego y dará la orden<br />de pasar a otra escena:<br /><br /><pre class="prettyprint">class EscenaMenu:<br />  def __init__&#40;self, mundo&#41;:<br />     self.mundo = mundo<br /><br />  def actualizar&#40;self&#41;:<br />     # este metodo se llamará frecuentemente &#40;desde el bucle principal&#41;.<br />     pass<br /><br />  def cuando_ocurre_evento&#40;self, evento&#41;:<br />     if evento.type == KEYDOWN:<br />         if evento.key == K_SPACE:<br />              self.mundo.cambiar_escena&#40;EscenaJuego&#40;self.mundo&#41;&#41;</pre><br /><br />Entonces, la escena solamente va a tener los métodos iniciar, actualizar y <br />&quot;cuando_ocurre_evento&quot;. Podrías agregar mas cosas, pero en general con<br />esos 3 alcanza...<br /><br />Voy a intentar escribir algún programita de ejemplo en la semana, si llego<br />a encontrar algo de tiempo te aviso y lo publico en la sección de ejemplos<br />de losersjuegos.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Abr 03, 2012 1:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Aruwert]]></name></author>
<updated>2012-04-02T17:38:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6601#p6601</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6601#p6601"/>
<title type="html"><![CDATA[Re: PYGAME: Repetir tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6601#p6601"><![CDATA[
Muchísimas gracias por la ayuda, me has aclarado mucho las ideas.<br /><br />Pero sí, digamos que el juego está únicamente compuesto de páginas, y sí, se volvería todo lioso.. <br />Me gustaría, si no es mucha molestia, que me explicaras un poco por encima como podría utilizar las &quot;Escenas&quot; en mi juego.<br />Yo mientras tanto, voy probando. Quizá no es tan fácil, pero prefiero hacer las cosas bien desde el principio jaja.<br /><br />Desde luego, qué de posibilidades tiene este mundo!<br /><br />Saludos y gracias de nuevo, Hugo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2592">Aruwert</a> — Lun Abr 02, 2012 5:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-04-02T01:09:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6599#p6599</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6599#p6599"/>
<title type="html"><![CDATA[Re: PYGAME: Repetir tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6599#p6599"><![CDATA[
Buenas Aruwert, es interesante tu pregunta. En realidad no hay una<br />sola forma de resolver lo que necesitas, pero hay estrategias.<br /><br />Lo mas sencillo, sobre todo si estás comenzando, es tener una variable<br />auxiliar que indique &quot;qué página de la historia estás mirando&quot;. Esa<br />variable te puede ayudar a saber qué mostrar cuando se pulse una<br />tecla.<br /><br />Por ejemplo, algo así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if event.type == KEYDOWN:<br />    if event.key == K_SPACE:<br />        if pagina_actual == 1:<br />             mostrar_pagina_2()<br />             pagina_actual == 2<br />        elif pagina_actual == 2:<br />             mostrar_parte_3()<br />             pagina_actual = 3 .... etc<br /></code></dd></dl><br /><br /><br />Pero.... por supuesto esta no es la única forma. Si tu juego es<br />pequeño está todo bien, lo de antes sirve. Si tu juego es mas<br />grande, hay peligro de que tu código se vuelva un spaguetti !!<br /><br />Si quieres una solución mas elegante, tal vez te resulte útil ver<br />el patrón de diseño state, del que hablamos una vez en otro<br />post:<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=170">viewtopic.php?t=170</a><!-- l --><br /><br />(en ese mensaje, buscá mi respuesta y la parte en donde hablo de<br />Escena).<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Abr 02, 2012 1:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Aruwert]]></name></author>
<updated>2012-04-01T21:51:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6598#p6598</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6598#p6598"/>
<title type="html"><![CDATA[PYGAME: Repetir tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1436&amp;p=6598#p6598"><![CDATA[
Hola a todos.<br /><br />Llevo un mes programando en general, y he empezado con Python y Pygame. La cosa es que estoy creando una aventura gráfica y me he encontrado con un problema, que seguramente tiene fácil solución, pero no logro encontrarla.<br />Me gustaría saber: <br /><br />¿Como puedo asignar a una tecla (K_SPACE en mi caso) la función de ir pasando de páginas? <br /><br />Hice esto:<br />        if event.type == pygame.KEYDOWN:<br />            if event.key == pygame.K_SPACE:<br />                historia()<br /><br />def historia() <br />etc.<br /><br />Ahora me gustaría poder, desde historia(), darle a (K_SPACE) y que me lleve a lo que definí como historia2()<br /><br />Si no me he explicado bien, díganmelo. Muchas gracias de antemano.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2592">Aruwert</a> — Dom Abr 01, 2012 9:51 pm</p><hr />
]]></content>
</entry>
</feed>