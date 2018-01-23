<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=462" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-03T23:22:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=462</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-03T23:22:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=2008#p2008</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=2008#p2008"/>
<title type="html"><![CDATA[Problema con BlockBreaker]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=2008#p2008"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Creo que encontre la solucion!!!<br />Mirando en pygame docs encontre un metodo llamado collidelist, que comprueba si alguno de los rectangulos en la lista ha colisionado, devolviendo el indice del que ha colisionado.<br /><br />Usando esto puedo hacer una lista que contenga los bloques de 2 golpes, hallar cual colisiona y transformarlo o quitarle vidas o lo que sea...<br /><br />Esto es lo que yo entendí. si alguien me lo confirmara o me lo desmintiera se lo agradeceria<br /></div></blockquote>Mi inglés no es muy bueno, pero yo también entendí eso. Aunque podría provocar un comportamiento algo extraño en las colisiones. A lo mejor conviene más utilizar collidelistall.<br />También puede ser interesante utilizar 'Group's que pueden tratar colisiones.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Feb 03, 2009 11:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-03T17:43:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1998#p1998</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1998#p1998"/>
<title type="html"><![CDATA[Problema con BlockBreaker]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1998#p1998"><![CDATA[
Creo que encontre la solucion!!!<br />Mirando en pygame docs encontre un metodo llamado collidelist, que comprueba si alguno de los rectangulos en la lista ha colisionado, devolviendo el indice del que ha colisionado.<br /><br />Usando esto puedo hacer una lista que contenga los bloques de 2 golpes, hallar cual colisiona y transformarlo o quitarle vidas o lo que sea...<br /><br />Esto es lo que yo entendí. si alguien me lo confirmara o me lo desmintiera se lo agradeceria<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Feb 03, 2009 5:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-01T13:14:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1989#p1989</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1989#p1989"/>
<title type="html"><![CDATA[Problema con BlockBreaker]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1989#p1989"><![CDATA[
Gracias a todos por la ayuda. lo de cambiar de color es una cosa interesante.Lo que voi a intentar es transformar los bloques grises(2 golpes) en uno morado(1 golpe) cuando la bola choque con ellos<br /><br />Gracias de verdad<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Feb 01, 2009 1:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-02-01T03:06:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1983#p1983</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1983#p1983"/>
<title type="html"><![CDATA[Re: Problema con BlockBreaker]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1983#p1983"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Buenas a todos! soy un newbie en esto de pygame. estoy tratando de hacer un BlockBreaker(ese juego de una bola rompiendo ladrillos) y me ha surgido un problemilla.<br /></div></blockquote><br /><br />uhh, si, me acuerdo de ese juego, yo lo concía bajo el<br />nombre &quot;arkanoid&quot;.<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />Mi intencion es la de hacer diferentes bloques con diferentes numero de vidas(uno se rompa con un golpe, otro con 2, etc)<br />Existe alguna manera de automatizar esto o tendria que ir comprobando bloque por bloque aver si hay choques y restar vidas??<br /><br />Gracias de antemano<br /></div></blockquote><br /><br />no, en realidad no es algo que se automatice, en todo<br />caso lo que puedes hacer es crear una clase de objeto<br />que tenga el comportamiento de un bloque y luego<br />replicarlo en todos los bloques que necesites.<br /><br />Te dejo un ejemplo reducido de como imagino que se podría<br />hacer:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20090201/pantalla.png" alt="Imagen" /><br /><br />El objetivo del ejemplo es mostrar un pelota blanca que se<br />mueve de izquierda a derecha, los rectángulos de colores<br />son bloques que cambian de color cuando la pelota los<br />toca. Cada bloque se puede eliminar pegángole con la<br />pelota 3 veces.<br /><br />Aquí está el código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.sprite import Sprite<br /><br />class Pelota&#40;Sprite&#41;:<br />    &quot;&quot;&quot;Representa una pelota que se mueve de izquierda a derecha.&quot;&quot;&quot;<br /><br />    def __init__&#40;self&#41;:<br />        Sprite.__init__&#40;self&#41;<br />        x = 160<br />        y = 100<br /><br />        self.rect = pygame.Rect&#40;x, y, 20, 20&#41;<br />        self.direction = 1<br /><br />    def draw&#40;self, screen&#41;:<br />        color = &#40;255, 255, 255&#41;<br />        pygame.draw.circle&#40;screen, color, self.rect.center, 10&#41;<br />    <br />    def update&#40;self&#41;:<br />        &quot;&quot;&quot;Simula un movimiento de izquierda a derecha.<br /><br />        El movimiento depende directamente de la variable `direction`<br />        que se altera solamente llamando al metodo 'flip&#40;&#41;'.&quot;&quot;&quot;<br /><br />        self.rect.x += self.direction<br /><br />        # aplica limites a la pantalla<br />        if self.rect.right &gt; 320:<br />            self.rect.right = 320<br />            self.flip&#40;&#41;<br />        elif self.rect.left &lt; 0:<br />            self.rect.left = 0<br />            self.flip&#40;&#41;<br /><br />    def flip&#40;self&#41;:<br />        &quot;invirte el sentido de movimiento de la pelota.&quot;<br />        self.direction *= -1<br /><br /><br /><br />class Bloque&#40;Sprite&#41;:<br />    &quot;&quot;&quot;Representa un bloque de color que puede ser golpeado por la pelota.&quot;&quot;&quot;<br /><br />    def __init__&#40;self, x, y&#41;:<br />        Sprite.__init__&#40;self&#41;<br />        self.life = 2<br />        self.rect = pygame.Rect&#40;x, y, 40, 20&#41;<br /><br />    def draw&#40;self, screen&#41;:<br />        colores = &#91;&#40;200, 100, 100&#41;, &#40;100, 255, 100&#41;, &#40;255, 255, 100&#41;&#93;<br />        color = colores&#91;self.life&#93;<br /><br />        pygame.draw.rect&#40;screen, color, self.rect&#41;<br /><br />    def reduce_life&#40;self&#41;:<br />        &quot;Reduce la vida del bloque, y elimina el bloque si ya no tiene vida.&quot;<br /><br />        if self.life == 0:<br />            print &quot;se elimina el bloque&quot;<br />            self.kill&#40;&#41;<br />        else:<br />            self.life -= 1<br />            print &quot;reduciendo la vida del bloque a:&quot;, self.life<br /><br /><br />def main&#40;&#41;:<br />    pygame.init&#40;&#41;<br />    screen = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br />    clock = pygame.time.Clock&#40;&#41;<br />    quit = False<br /><br />    # Genera los sprites de la escena.<br />    pelota = Pelota&#40;&#41;<br /><br />    bloques = pygame.sprite.Group&#40;&#41;<br />    bloques.add&#40;Bloque&#40;2, 100&#41;&#41;<br />    bloques.add&#40;Bloque&#40;50, 100&#41;&#41;<br />    bloques.add&#40;Bloque&#40;250, 100&#41;&#41;<br /><br /><br />    # bucle principal del juego<br />    while not quit:<br />        clock.tick&#40;60&#41;<br /><br />        for e in pygame.event.get&#40;&#41;:<br />            if e.type == pygame.QUIT:<br />                quit = True<br /><br />        # colisiones<br />        sprite_collided = pygame.sprite.spritecollideany&#40;pelota, bloques&#41;<br /><br />        if sprite_collided:<br />            sprite_collided.reduce_life&#40;&#41;<br />            pelota.flip&#40;&#41;   # invierte el sentido de movimiento.<br /><br />        # actualizacion logica<br />        pelota.update&#40;&#41;<br />        bloques.update&#40;&#41;<br /><br /><br />        # actualizacion de pantalla<br />        gris = &#40;100, 100, 100&#41;<br />        screen.fill&#40;gris&#41;<br />        pelota.draw&#40;screen&#41;<br /><br />        # pinta los bloques uno por uno.<br />        for bloque in bloques.sprites&#40;&#41;:<br />            bloque.draw&#40;screen&#41;<br /><br />        pygame.display.flip&#40;&#41;<br /><br />if __name__ == '__main__':<br />    main&#40;&#41;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Feb 01, 2009 3:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-01-31T19:27:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1980#p1980</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1980#p1980"/>
<title type="html"><![CDATA[Problema con BlockBreaker]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1980#p1980"><![CDATA[
A mi parecer (probablemente habrá mejores opciones) pero creo que la mejor manera es comprobar bloque por bloque e ir restando vida... Lo cual implica que incluso a los que deben de morir (desaparecer) con un golpe darle un porcentaje de vida (por ejemplo 1, y restar -1 en cada impacto).<br />Tal vez (y por que no) una buena idea seria crear un namespace (espacio con nombre) y crear varios ( de la misma base, claro..) crearlo para cada uno de los bloques lo cual creo que te ahorrara muchas lineas ( e incluso tal vez, algo de tiempo)...<br />Aun que si encuentras una forma mejor , seria maravilloso que nos comentaras de como fueron los resultados que obtuviste...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Sab Ene 31, 2009 7:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-01-31T03:40:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1976#p1976</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1976#p1976"/>
<title type="html"><![CDATA[Problema con BlockBreaker]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=462&amp;p=1976#p1976"><![CDATA[
Buenas a todos! soy un newbie en esto de pygame. estoy tratando de hacer un BlockBreaker(ese juego de una bola rompiendo ladrillos) y me ha surgido un problemilla.<br />Mi intencion es la de hacer diferentes bloques con diferentes numero de vidas(uno se rompa con un golpe, otro con 2, etc)<br />Existe alguna manera de automatizar esto o tendria que ir comprobando bloque por bloque aver si hay choques y restar vidas??<br /><br />Gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ene 31, 2009 3:40 am</p><hr />
]]></content>
</entry>
</feed>