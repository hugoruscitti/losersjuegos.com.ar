<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1175" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-10T20:28:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1175</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-06-10T20:28:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5638#p5638</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5638#p5638"/>
<title type="html"><![CDATA[Re: Problemas al cambiar de escena]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5638#p5638"><![CDATA[
¿podrías enviarme el código completo a mi correo?, no pude encontrar el problema...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Jun 10, 2011 8:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-06-10T18:43:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5637#p5637</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5637#p5637"/>
<title type="html"><![CDATA[Re: Problemas al cambiar de escena]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5637#p5637"><![CDATA[
<span style="font-weight: bold">Hola hugo!</span><br /><br />te cuento que sigue igual...aca te envio el codigo de las dos escenas, para que me digas que puedo tener malo.<br /><br />Escena 1:<br /><pre class="prettyprint">class Juego&#40;Normal&#41;:<br /><br />    def __init__&#40;self, nivel&#41;:<br />        Normal.__init__&#40;self&#41;<br />        self.iniciar_juego&#40;nivel&#41;<br /><br /><br />    def iniciar_juego&#40;self, nivel&#41;:<br />        self.nivel = nivel<br />        pilas.escenas.Escena.__init__&#40;self&#41;<br />        pilas.actores.utils.eliminar_a_todos&#40;&#41;<br />        pilas.fondos.Fondo&#40;utils.fondo_salon&#41;.escala = 0.48<br /><br />        pilas.eventos.pulsa_tecla_escape.conectar&#40;utils.press_escape&#41;<br /><br />        global carlita<br />        carlita = utils.crear_personaje&#40;350,-200&#41;<br /><br />        global dialogue<br />        dialogue = utils.crear_dialogo&#40;&#41;<br /><br />        siguiente = pilas.actores.Boton&#40;100, -320, &quot;IQ/imagenes/botones/siguiente.png&quot;&#41;<br />        siguiente.conectar_presionado&#40;self.next_level&#41;<br /><br /><br />        global pers_central<br />        pers_central = pilas.actores.Actor&#40;&#41;<br />        pers_central.definir_posicion&#40;-350, 250&#41;<br />        variables.grillas[nivel-1].definir_cuadro&#40;5&#41;<br />        variables.grillas[nivel-1].asignar&#40;pers_central&#41;<br /><br />        &quot;Random de imagenes&quot;<br />        indices = range&#40;0, 4&#41;<br />        random.shuffle&#40;indices&#41;<br /><br />        opciones = []<br />        for i in range&#40;0,4&#41;:<br />            opciones.append&#40;elemento&#40;variables.posiciones[i], variables.y, variables.grillas[self.nivel-1], indices[i],self.nivel&#41;&#41;<br /><br /><br />    def next_level&#40;self&#41;:<br />        import IQ.escena_semejanzas<br />        pilas.mundo.definir_escena&#40;IQ.escena_semejanzas.Juego&#40;&#41;&#41;</pre><br /><br />En donde dice: &quot;siguiente&quot; se llama a la siguiente escena:<br /><br />Escena 2:<br /><pre class="prettyprint">class Juego&#40;Normal&#41;:<br />    def __init__&#40;self&#41;:<br />        Normal.__init__&#40;self&#41;<br />        pilas.escenas.Escena.__init__&#40;self&#41;<br />        pilas.actores.utils.eliminar_a_todos&#40;&#41;<br />        pilas.fondos.Fondo&#40;utils.fondo_salon&#41;.escala = 0.48<br /><br />        pilas.eventos.pulsa_tecla_escape.conectar&#40;utils.press_escape&#41;<br /><br />        global carlita<br />        carlita = utils.crear_personaje&#40;300, -200&#41;<br /><br />        global dialogue<br />        dialogue = utils.crear_dialogo&#40;&#41;<br /><br />        self.crear_botones&#40;&#41;<br />        self.abrir_archivo&#40;&#41;</pre><br /><br />espero tu respuesta hugo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Vie Jun 10, 2011 6:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-06-10T00:13:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5635#p5635</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5635#p5635"/>
<title type="html"><![CDATA[Re: Problemas al cambiar de escena]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5635#p5635"><![CDATA[
Hola carla, ¿estás usando la función cambiar_escena del objeto mundo?¿y<br />estás borrando los actores en el método &quot;iniciar&quot; de la escena Juego?.<br /><br />Acá hay un ejempo sencillo de uso de escenas, debería funcionar bien (creo):<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/src/d595dc546b4b/ejemplos/escenas_con_menu.py">https://bitbucket.org/hugoruscitti/pila ... on_menu.py</a><!-- m --><br /><br />avisamen cualquier cosa, puedo revisarlo si algo no anda bien...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Jun 10, 2011 12:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-06-09T16:45:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5633#p5633</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5633#p5633"/>
<title type="html"><![CDATA[Problemas al cambiar de escena]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1175&amp;p=5633#p5633"><![CDATA[
<span style="font-weight: bold">Hola buenos dias!!!</span><br /><br />les escribo ya que se me presentó un problema bien raro, pero que me afecta mucho en el desarrollo del juego, <br />y es que yo tengo una escena con un juego, esta escena tiene un boton para pasar a la siguiente, el cual está programado dela siguiente manera:<pre class="prettyprint">import IQ.escena_siguiente<br />        IQ.escena_siguiente.Juego&#40;&#41;</pre><br /><br />cuando me aparece la siguiente escena, resulta que es una mezcla entre el juego anterior y el nuevo... en el anterior tengo un personaje con un dialogo, y luego en la siguiente aparece el dialogo de nuevo.... es un desastre..<br /><br />Cada vez que creo el método Juego para una nueva escena le coloco: <pre class="prettyprint">pilas.actores.utils.eliminar_a_todos&#40;&#41;</pre> para que no me pase eso, pero no sé por qué sigue pasando...<br /><br />podrían hacerme el favor de ayudarme???<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Jue Jun 09, 2011 4:45 pm</p><hr />
]]></content>
</entry>
</feed>