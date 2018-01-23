<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=334" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-06-07T13:12:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=334</id>
<entry>
<author><name><![CDATA[thepoi]]></name></author>
<updated>2008-06-07T13:12:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1469#p1469</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1469#p1469"/>
<title type="html"><![CDATA[Duda implementar niveles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1469#p1469"><![CDATA[
Okey, creo que mas o menos me queda claro. Yo hasta el momento solo tenia una clase juego y por eso se me hacia dificil visualizar como hacerlo.<br /><br />Siguiendo un poco el patron de diseño que comentas creo que se me hace mas sencillo. Intentare implementarlo a ver que tal.<br /><br />Gracias !!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> <br /><br /><br />Y lucesita lo malo del case es que luego queda un codigo muy lioso, pasa mas o menos lo mismo que con los multiples game loop que yo proponia. Pero gracias a ti tb <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1943">thepoi</a> — Sab Jun 07, 2008 1:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-06-06T22:05:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1468#p1468</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1468#p1468"/>
<title type="html"><![CDATA[Re: Duda implementar niveles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1468#p1468"><![CDATA[
<blockquote><div><cite>thepoi escribió:</cite><br />Se me ocurre tener varios game loop de esta forma:<br /></div></blockquote><br /><br />Sí, hay varias formas de lograr separar el juego en fases o escenas. No<br />hay una &quot;mejor forma&quot;, sino &quot;formas diferentes&quot;, aquí que cuento una<br />manera distinta de resolverlo, pero tendrías que evaluar si resultará<br />útil en tu juego:<br /><br />Una forma de separar etapas en un juego es tratar de 'desacoplar' cada<br />una de las fases del juego en diferentes objetos. Esto hace que sea mas <br />sencillo añadir, modificar, e intercambiar partes del juego.<br /><br />En esencia la idea sería:<br /><br />    - Crear un objeto por cada escena del juego: Menu, Intro, Juego, Creditos...<br />    - Crear un objeto principal que inicialice la biblioteca, tenga el bucle<br />      de juego y mantenga una referencia a la escena actual.<br />    - Que el bucle de juego actualice la escena constantemente.<br />    - Que cada escena pueda ordenar un cambio a otra escena. Por ejemplo, que Menu<br />      pueda cambiar el juego a la escena Creditos...<br /><br />Veamos un ejemplo simple en python, necesitamos un objeto principal que<br />administre a la escenas (Mundo), y un método para cambiar de una escena a<br />otra. Los objetos Menu y Juego son las escenas<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Mundo:<br /><br />    def __init__&#40;self&#41;:<br />        # crear ventana, cargar recursos etc ...<br />        &#91;...&#93;<br /><br />    def cambiar_escena&#40;self, nueva_escena&#41;:<br />        self.escena = nueva_escena<br /><br />    def loop&#40;self&#41;:<br /><br />        while not salir:<br />            self.escena.actualizar&#40;&#41;<br />            self.escena.dibujar&#40;&#41;<br />            flip&#40;&#41;<br /><br />class Escena:<br />    pass<br /><br />class Juego&#40;Escena&#41;:<br />    def update&#40;self&#41;:<br />        print &quot;estoy jugando...&quot;<br /><br />class Menu&#40;Escena&#41;:<br />    def update&#40;self&#41;:<br />        print &quot;mostrando opciones al usuario...&quot;<br /><br /># ejemplo de funcionamiento.<br /><br />mundo = Mundo&#40;&#41;<br />mundo.cambiar_escena&#40;Menu&#40;&#41;&#41;<br />juego = Juego&#40;&#41;<br />mundo.cambiar_escena&#40;juego&#41;<br />&#91;...&#93;<br /><br /></code></dd></dl><br /><br />Te recomiendo veas en detalle el mensaje que escribí hace tiempo sobre<br />este asunto en el foro de mensajes:<br /><br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=170">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=170</a><!-- m --><br /><br />Además, en el sitio de losersjuegos hay algunos juegos que hacen uso de esta<br />estrategia (cito unos pocos para que lo veas realizado en diferentes lenguajes):<br /><br />    - Irobot (en python): <!-- m --><a class="postlink" href="http://code.google.com/p/irobotgame/">http://code.google.com/p/irobotgame/</a><!-- m --><br />    - Ceferino (en C++): <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/juegos/ceferino/ceferino.php">http://www.losersjuegos.com.ar/juegos/c ... ferino.php</a><!-- m --><br />    - volleyball (en C): <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/juegos/volleyball/volleyball.php">http://www.losersjuegos.com.ar/juegos/v ... eyball.php</a><!-- m --><br /><br />Saludos, y suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Jun 06, 2008 10:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-06-06T19:44:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1466#p1466</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1466#p1466"/>
<title type="html"><![CDATA[Duda implementar niveles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1466#p1466"><![CDATA[
Honestamente no se como se implementa, pero podrias hacerlo con un switch(nivel)<br />case 1:<br />   ....<br />case 2:<br />   ....<br />case 3:<br />   ....<br /><br /><br />no se... se me ocurre eso... igual ya te van a responder los mas expertos ajajaja<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Vie Jun 06, 2008 7:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thepoi]]></name></author>
<updated>2008-06-06T17:03:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1464#p1464</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1464#p1464"/>
<title type="html"><![CDATA[Duda implementar niveles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=334&amp;p=1464#p1464"><![CDATA[
Hola<br />Durante un par de dias es estado trabajando en un juego (con c++ y sdl). El juego consiste es ir esquivando unas bolas que van rebotando por toda la pantalla..<br /><br />Hoy poy hoy el juego consta de un unico nivel y me gustaria incluir otros niveles en los cuales haya mas bolas o estas se muevan mas rapido.<br /><br />Lo que no se muy bien es como implementalo<br /><br />Se me ocurre tener varios game loop de esta forma:<br /><br />while ((!salir) &amp;&amp; (fase==1)) {<br /><br />if mision completada fase = 2;<br /><br />}<br />while ((!salir) &amp;&amp; (fase==2)) {<br /><br />if mision completada fase = 3;<br />}<br />..... <br /><br />y asi sucesivamente. Es esta una buena forma de hacerlo? Como se deberia hacer?<br /><br />Gracias y saludos!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1943">thepoi</a> — Vie Jun 06, 2008 5:03 pm</p><hr />
]]></content>
</entry>
</feed>