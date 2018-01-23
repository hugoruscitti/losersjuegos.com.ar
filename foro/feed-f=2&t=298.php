<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=298" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-02-02T01:31:47+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=298</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-02-02T01:31:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=3245#p3245</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=3245#p3245"/>
<title type="html"><![CDATA[Hacer un  Salto?????]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=3245#p3245"><![CDATA[
hay un ejemplo llamado &quot;invaders&quot; creado por Juan<br />Guerrero que te puede servir:<br /><br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Feb 02, 2010 1:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-02-01T19:32:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=3243#p3243</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=3243#p3243"/>
<title type="html"><![CDATA[colisiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=3243#p3243"><![CDATA[
Hola, me gustarías que me explicaran cómo son las colisiones entre sprites mediante un ejemplo como el Tank ese de atari o un Space Invaders<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Lun Feb 01, 2010 7:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-08-07T00:41:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1588#p1588</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1588#p1588"/>
<title type="html"><![CDATA[Hacer un  Salto?????]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1588#p1588"><![CDATA[
Hola, he estado mirando el codigo en python, aunque no programo en ese lenguaje y he leido poco sobre el, pero quisiera ofrecer una solucion que es aplicable tanto a c como a python como a cualquier lenguaje, el movimiento del personaje podria realizarse mediante dos vectores, o incluso tres si quieren añadirle mas realismo y complicacion, uno para la posicion, otro para la velocidad y si quieren un tercero para la aceleracion (aunque la aceleracion es algo que podemos omitir para mover un personaje), teniendo las estructuras y variables preparadas para guardar los vectores seria tan simple como aplicar la fisica, si el parsonaje va a saltar, la volocidad tendra un modulo igual a la fuerza del salto, lo que va a avanzar en cada interaccion del bucle por ejemplo, y el angulo hacia donde va a saltar de forma que para actualizar la posicion simplemente tenemos que sumar la posicion y la velocidad (  P = P + V  ), ovbiamente el vector de la velocidad lo dbemos tener controlado para que pasado un tiempo el personaje baje (no va a subir siempre, eso es volar XD) o incluso podemos en cada interaccion del bucle reducir el modulo del vertor de forma que se ralentize el salto hasta llegar a cero, cambiamos el angulo para que baje y lo empezamos a incrementar (con lo que ademas obtendriamos un pequeño efecto de gravedad).<br /><br />Si quisieramos usar ademas el vector de aceleracion seria igual, ocparnos de cambiar el vector de aceleracion segun sea necesario y despues el vector velocidad lo actualizariamos en funcion del vector de la aceleracion y el de la posicion en funcion del de la velocidad.<br /><br />No se que os parecera la solucion de los vectores, pero a mi me parece una buena solucion, aunque tambien depende del caso, yo estoy usando los vectores pero para un juego de tanques, para los propios tanques como para los misiles.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue Ago 07, 2008 12:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-17T15:42:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1186#p1186</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1186#p1186"/>
<title type="html"><![CDATA[Hacer un  Salto?????]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1186#p1186"><![CDATA[
Ah, es cierto, está hecho en python... ya lo había olvidado.<br /><br />Con respecto a la clase Salto, se ha creado como objeto para<br />que representar la acción y no &quot;cargar&quot; de variables auxiliares<br />al objeto del personaje.<br /><br />Te comento un poco en que consiste representar las acciones<br />de un personaje mediante objetos: el objeto Player, que representa<br />al personaje, puede estar realizando distintos tipos de acciones: <br />&quot;Saltar&quot;, &quot;Correr&quot; etc. Resulta muy conveniente &quot;desacoplar&quot; al<br />personaje en sí de la Acción que está realizando, porque de<br />esa manera es sencillo cambiar de acciones, crear estados<br />nuevos e incluso modificar uno existente.<br /><br />En el último mensaje del siguiente &quot;post&quot; hablo algo acerca de<br />esta forma de agrupar estados. Se denomina &quot;patrón estrategia&quot;:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=170">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=170</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Abr 17, 2008 3:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-17T04:24:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1180#p1180</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1180#p1180"/>
<title type="html"><![CDATA[ok]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1180#p1180"><![CDATA[
Era lo que me hacia falta ademas el ejemplo  platforms que esta en la seccion de ejemplos del sitio no esta en c sino en python que es con lo que estoy trabajando de todas maneras y tambien esta un poquito complicado hacen hasta una clase salto y todo.<br /><br />class Jumping (State):<br />    &quot;Representa el estado 'saltando'&quot;<br />    <br />    def __init__ (self, player, vy):<br />        &quot;Inicia un salto con velocidad inicial indicada por el parametro vy&quot;<br />        <br />        State.__init__ (self, player)<br />        self.player.animation.set_frames ([5])<br />        self.vy = vy<br />    <br />    def update (self):<br />        self.vy = self.vy + 0.1<br />        dy = int (self.vy)<br />        keys = pygame.key.get_pressed ()<br />        <br />        if dy &gt; 0:<br />            dy = self.player.stage.get_floor_dist (self.player.x, self.player.y, int (self.vy))<br />            <br />            &quot;Ha tocado el suelo&quot;<br />            if dy == 0 and int (self.vy) != 0:<br />                self.player.change_state (Normal (self.player))<br /><br />        if keys [K_LEFT]:<br />            self.player.move_ip (-2, 0)<br />            self.player.set_flip (True)<br />        elif keys [K_RIGHT]:<br />            self.player.move_ip (2, 0)<br />            self.player.set_flip (False)<br /><br />        self.player.move_ip (0, dy)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Jue Abr 17, 2008 4:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-16T22:39:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1178#p1178</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1178#p1178"/>
<title type="html"><![CDATA[Hacer un  Salto?????]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1178#p1178"><![CDATA[
Es cierto, el ejemplo de plataformas es un tanto complejo. En parte porque<br />hace muchas cosas y en parte por estar escrito en C.<br /><br />Estuve pensando la forma de hacer un ejemplo sencillo sobre como realizar<br />un salto y llegué a crear un programa en lenguaje python que te puede<br />servir. No es tan simple como quería, porque gran parte del código está<br />destinado a capturar eventos y manejarlos.<br /><br />Desistí de la idea de crearlo en C porque sería aún mas código... si<br />utilizas C puedes intentar traducir este código a C, o usar directamente<br />python al menos por esta vez.<br /><br />El programa muestra un rectángulo de color verde que se puede manejar con<br />los direccionales del teclado, pulsando la tecla &quot;arriba&quot; el cuadrado<br />hace un movimiento de &quot;salto&quot;. Ojo, hay que mirarlo con un poco de<br />imaginación...<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20080416/salto.png" alt="Imagen" /><br /><br />Espero te resulte de utilidad, recuerda que es solo un ejemplo básico (se<br />pueden hacer cosas mas interesantes con python y pygame...):<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- encoding: utf-8 -*-<br />import pygame<br />from pygame.sprite import Sprite<br /><br />NIVEL_SUELO = 200<br />COLOR_GRIS = &#40;50, 50, 50&#41;<br /><br /><br />class Personaje&#40;Sprite&#41;:<br />    &quot;Personaje rectangular que puede caminar y saltar.&quot;<br /><br />    def __init__&#40;self&#41;:<br />        Sprite.__init__&#40;self&#41;<br />        self.velocidad_inicial = 0<br />        self.crear_imagen_representacion&#40;&#41;<br /><br />    def crear_imagen_representacion&#40;self&#41;:<br />        self.image = pygame.surface.Surface&#40;&#40;30, 30&#41;&#41;<br />        self.image.fill&#40;&#40;100, 255, 100&#41;&#41;<br />        self.rect = self.image.get_rect&#40;&#41;<br />        self.rect.center = 160, 200<br /><br />    def update&#40;self&#41;:<br />        &quot;Actualiza la posición del personaje en base al estado del teclado.&quot;<br /><br />        teclas = pygame.key.get_pressed&#40;&#41;<br /><br />        if teclas&#91;pygame.K_LEFT&#93;:<br />            self.rect.move_ip&#40;-4, 0&#41;<br />        <br />        if teclas&#91;pygame.K_RIGHT&#93;:<br />            self.rect.move_ip&#40;4, 0&#41;<br /><br />        # Salto<br />        if self.rect.bottom &gt;= NIVEL_SUELO:<br />            self.rect.bottom = NIVEL_SUELO<br />            <br />            # solo evalúa un salto si está en el suelo.<br />            if teclas&#91;pygame.K_UP&#93;:<br />                self.velocidad_inicial = -10<br />                self.actualizar_salto&#40;&#41;<br />        else:<br />            self.actualizar_salto&#40;&#41;<br /><br />    def actualizar_salto&#40;self&#41;:<br />        # si está saltando actualiza su posición<br />        self.rect.y += self.velocidad_inicial<br />        self.velocidad_inicial += 0.5<br /><br />    def draw&#40;self, screen&#41;:<br />        &quot;Muestra al personaje en pantalla.&quot;<br />        screen.blit&#40;self.image, self.rect.center&#41;<br /><br /><br /><br /># Inicio del programa principal<br /><br />salir = False<br />screen = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br />personaje = Personaje&#40;&#41;<br /><br />while not salir:<br /><br />    for evento in pygame.event.get&#40;&#41;:<br />        if evento.type == pygame.QUIT:<br />            salir = True<br /><br />    personaje.update&#40;&#41;<br /><br />    screen.fill&#40;COLOR_GRIS&#41;<br />    personaje.draw&#40;screen&#41;<br />    pygame.display.flip&#40;&#41;<br /><br />    pygame.time.delay&#40;10&#41;</code></dd></dl><br /><br />Consultanos ante cualquier duda.<br /><br />¡Saludos!.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Abr 16, 2008 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-15T21:48:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1173#p1173</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1173#p1173"/>
<title type="html"><![CDATA[Hacer un  Salto?????]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=298&amp;p=1173#p1173"><![CDATA[
Necesito que alguien me facilite un ejemplo sencillo de como hacer un salto con el personaje, estuve viendo el ejemplo platforms pero esta muy alto el nivel para mi que empiezo ahora, trate de entenderlo  pero que va.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mar Abr 15, 2008 9:48 pm</p><hr />
]]></content>
</entry>
</feed>