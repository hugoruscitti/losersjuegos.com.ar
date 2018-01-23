<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=302" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-23T04:00:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=302</id>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-23T04:00:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1228#p1228</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1228#p1228"/>
<title type="html"><![CDATA[Empujar un objeto con otro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1228#p1228"><![CDATA[
lo que paso fue que cuando comprobaba que el personaje estuviera en colision con lo que empuja le habia quitado el  *<br /><br />Lo tenia sin   * 4 que bueno es logico no, mueve lo que se empuja un poco mas para alla de lo que se me mueve el personaje<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> for fruta in frutas:<br />            if self.rect.colliderect&#40;fruta.rect&#41;:<br />                 fruta.rect.move_ip&#40;dx * 4 , dy * 4&#41;</code></dd></dl><br /><br />pero bueno en mi caso el movimiento del personaje esta implementado para que este se pueda sobrepasar los limites de otros objetos y se me da el caso que en una posicion determinada el personaje no llega a empujar la caja por ejemplo, pero ya hace colision y si me dirijo en otra direccion que no es la de empujar, lo que empujo se pasa para esa direccion.<br /><br /><br /><br /><br /> <dl class="codebox"><dt>Code: </dt><dd><code> def moverse&#40;self, dx, dy, muros,comedoras,frutas&#41;:<br />         &quot;&quot;&quot;Intenta mover al personaje pero sin cruzar muros.&quot;&quot;&quot;<br />         rect_collision = self.rect.move&#40;dx, dy&#41;<br />         rect_collision.width =24    <br />         rect_collision.height = 27  <br />         rect_collision.x +=  5  <br />         rect_collision.y += 9  <br /><br />         for muro in muros:<br />             if muro.colisiona_con&#40;rect_collision&#41;:<br />                 self.choque = 1<br />                 return<br />         for comedora in comedoras:<br />             if comedora.colisiona_con&#40;rect_collision&#41;:<br />                 self.choque = 1<br />                 return<br />         for fruta in frutas:<br />            if self.rect.colliderect&#40;fruta.rect&#41;:<br />                 fruta.rect.move_ip&#40;dx * 4 , dy * 4&#41;<br />         # si se puede realizar el movimiento<br />         self.rect.move_ip&#40;dx, dy&#41;<br />         self.choque = 0</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mié Abr 23, 2008 4:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-22T17:54:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1224#p1224</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1224#p1224"/>
<title type="html"><![CDATA[Empujar un objeto con otro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1224#p1224"><![CDATA[
<blockquote><div><cite>PLC escribió:</cite><br />tengo un problema, cuando empujo una imagen con el personaje y entonces ya no quiero seguir empujando, y me muevo en otra direccion la imagen que empujaba entonces se sigue moviendo con el personaje.<br /></div></blockquote><br /><br />pero en el código que publiqué eso no ocurre, ¿o si?. Tendrías<br />que ver el estado de los objetos usando &quot;print&quot; y corroborar<br />que el problema no esté con el tamaño de los rectángulos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Abr 22, 2008 5:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-22T05:32:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1221#p1221</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1221#p1221"/>
<title type="html"><![CDATA[Empujar un objeto con otro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1221#p1221"><![CDATA[
tengo un problema, cuando empujo una imagen con el personaje y entonces ya no quiero seguir empujando, y me muevo en otra direccion la imagen que empujaba entonces se sigue moviendo con el personaje.<br /><br />Este es el metodo para mover el personaje que tengo<br /><br /><br /> <dl class="codebox"><dt>Code: </dt><dd><code>def moverse&#40;self, dx, dy, muros,comedoras,frutas&#41;:<br />         &quot;&quot;&quot;Intenta mover al personaje pero sin cruzar muros.&quot;&quot;&quot;<br />         rect_collision = self.rect.move&#40;dx, dy&#41;<br />         rect_collision.width =24    <br />         rect_collision.height = 27  <br />         rect_collision.x +=  5  <br />         rect_collision.y += 9  <br /><br />         for muro in muros:<br />             if muro.colisiona_con&#40;rect_collision&#41;:<br />                 self.choque = 1<br />                 return<br />         for comedora in comedoras:<br />             if comedora.colisiona_con&#40;rect_collision&#41;:<br />                 self.choque = 1<br />                 return<br />         #En fruta estan los sprite que quiero mover<br />         for fruta in frutas:<br />            if self.rect.colliderect&#40;fruta.rect&#41;:<br />                 fruta.rect.move_ip&#40;dx , dy&#41;<br />         # si se puede realizar el movimiento<br />         self.rect.move_ip&#40;dx, dy&#41;<br />         self.choque = 0 &#91;code&#93;&#91;/code&#93;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mar Abr 22, 2008 5:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-21T20:07:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1220#p1220</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1220#p1220"/>
<title type="html"><![CDATA[Empujar un objeto con otro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1220#p1220"><![CDATA[
<blockquote><div><cite>PLC escribió:</cite><br />Lo que quiero hacer es que por ejemplo yo tengo una imagen que es un bloque, y tengo otra que es el personaje como tal, entonces que el personaje pueda empujar ese bloque , es decir mientras camina se mueve el bloque, no que lo empuje y el se queda parado, sino que lo empuje a medida que va caminando es decir se van moviendo los dos al mismo tiempo.<br /></div></blockquote><br /><br />En ese caso tendrías que cambiar la posición de cualquier caja<br />en colisión con el personaje mientras este se mueve.<br /><br />Modificando un poco el código de otro ejemplo del foro armé un<br />ejemplo sencillo:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20080421/colisiones.png" alt="Imagen" /><br /><br />El programa consiste en mover un cuadrado verde que puede<br />mover a los bloques azules. Te dejo el código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- encoding: utf-8 -*-<br />import pygame<br />from pygame.sprite import Sprite<br />import random<br /><br /><br />class Caja&#40;Sprite&#41;:<br /><br />    def __init__&#40;self, x, y&#41;:<br />        Sprite.__init__&#40;self&#41;<br />        self.crear_imagen_representacion&#40;&#41;<br />        self.rect.center = x, y<br /><br />    def crear_imagen_representacion&#40;self&#41;:<br />        size = random.randint&#40;10, 40&#41;<br />        self.image = pygame.surface.Surface&#40;&#40;size, size&#41;&#41;<br />        self.image.fill&#40;&#40;100, 100, 255&#41;&#41;<br />        self.rect = self.image.get_rect&#40;&#41;<br /><br />    def draw&#40;self, screen&#41;:<br />        screen.blit&#40;self.image, self.rect&#41;<br /><br />class Personaje&#40;Sprite&#41;:<br />    &quot;Personaje rectangular que puede caminar y saltar.&quot;<br /><br />    def __init__&#40;self&#41;:<br />        Sprite.__init__&#40;self&#41;<br />        self.crear_imagen_representacion&#40;&#41;<br /><br />    def crear_imagen_representacion&#40;self&#41;:<br />        self.image = pygame.surface.Surface&#40;&#40;20, 20&#41;&#41;<br />        self.image.fill&#40;&#40;100, 255, 100&#41;&#41;<br />        self.rect = self.image.get_rect&#40;&#41;<br />        self.rect.center = 160, 120<br /><br />    def update&#40;self, cajas&#41;:<br />        &quot;Actualiza la posición del personaje en base al estado del teclado.&quot;<br /><br />        teclas = pygame.key.get_pressed&#40;&#41;<br /><br />        if teclas&#91;pygame.K_LEFT&#93;:<br />            self.move&#40;-1, 0, cajas&#41;<br />        elif teclas&#91;pygame.K_RIGHT&#93;:<br />            self.move&#40;1, 0, cajas&#41;<br /><br />        if teclas&#91;pygame.K_UP&#93;:<br />            self.move&#40;0, -1, cajas&#41;<br />        elif teclas&#91;pygame.K_DOWN&#93;:<br />            self.move&#40;0, 1, cajas&#41;<br /><br />    def draw&#40;self, screen&#41;:<br />        &quot;Muestra al personaje en pantalla.&quot;<br />        screen.blit&#40;self.image, self.rect&#41;<br /><br />    def move&#40;self, x, y, cajas&#41;:<br />        speed = 4<br />        self.rect.move_ip&#40;x * speed, y * speed&#41;<br /><br />        for caja in cajas:<br />            if self.rect.colliderect&#40;caja.rect&#41;:<br />                caja.rect.move_ip&#40;x * speed, y * speed&#41;<br /><br /><br /># Programa principal<br /><br />if __name__ == '__main__':<br />    salir = False<br />    screen = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br />    personaje = Personaje&#40;&#41;<br />    cajas = &#91;Caja&#40;50, 50&#41;, Caja&#40;200, 200&#41;, Caja&#40;100, 40&#41;&#93;<br /><br />    while not salir:<br /><br />        for evento in pygame.event.get&#40;&#41;:<br />            if evento.type == pygame.QUIT:<br />                salir = True<br />            elif evento.type == pygame.KEYDOWN:<br />                if evento.key == pygame.K_q:<br />                    salir = True<br /><br />        personaje.update&#40;cajas&#41;<br /><br />        screen.fill&#40;&#40;100, 100, 100&#41;&#41;<br /><br />        for caja in cajas:<br />            caja.draw&#40;screen&#41;<br /><br />        personaje.draw&#40;screen&#41;<br />        pygame.display.flip&#40;&#41;<br /><br />        pygame.time.delay&#40;10&#41;<br /></code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Abr 21, 2008 8:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-21T17:41:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1219#p1219</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1219#p1219"/>
<title type="html"><![CDATA[Empujar un objeto con otro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1219#p1219"><![CDATA[
Yo soy el muchacho que te escribio hace algun tiempo el que esta haciendo el primer nivel de zeek park, parece que tu correo tiene problemas,  me haria falta tambien mandarte lo que he hecho para preguntarte otras cositas, puede ser?????<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Lun Abr 21, 2008 5:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-21T17:38:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1218#p1218</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1218#p1218"/>
<title type="html"><![CDATA[Empujar un objeto con otro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1218#p1218"><![CDATA[
Lo que quiero hacer es que por ejemplo yo tengo una imagen que es un bloque, y tengo otra que es el personaje como tal, entonces que el personaje pueda empujar ese bloque , es decir mientras camina se mueve el bloque, no que lo empuje y el se queda parado, sino que lo empuje a medida que va caminando es decir se van moviendo los dos al mismo tiempo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Lun Abr 21, 2008 5:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-21T17:15:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1217#p1217</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1217#p1217"/>
<title type="html"><![CDATA[Re: Empujar un objeto con otro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1217#p1217"><![CDATA[
<blockquote><div><cite>PLC escribió:</cite><br />Necesito una rutina que me permita con un personaje empujar un objeto????????? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /><br /></div></blockquote><br /><br />Pero depende mucho del juego que quieras hacer, intenta ser<br />mas descriptivo. Puede que te sirva iniciar el movimiento de bloques<br />en base a una matriz (como en los juegos RPG o de ingenio), o<br />usar un sistema de fuerzas estilo la ley de Newton para cosas que<br />aparenten mas realismo... pero bueno, sería bueno que lo hagas <br />lo mas simple posible.<br /><br />PD: intenta redactar correctamente las preguntas también, con<br />      puntuación y apertura en los signos de pregunta por favor.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Abr 21, 2008 5:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-21T06:04:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1210#p1210</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1210#p1210"/>
<title type="html"><![CDATA[Empujar un objeto con otro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=302&amp;p=1210#p1210"><![CDATA[
Necesito una rutina que me permita con un personaje empujar un objeto????????? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Lun Abr 21, 2008 6:04 am</p><hr />
]]></content>
</entry>
</feed>