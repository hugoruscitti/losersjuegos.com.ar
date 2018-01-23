<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=708" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-04-01T21:11:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=708</id>
<entry>
<author><name><![CDATA[leproso]]></name></author>
<updated>2010-04-01T21:11:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3313#p3313</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3313#p3313"/>
<title type="html"><![CDATA[[Pygame]Controles y animaciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3313#p3313"><![CDATA[
Gracais por responder, pero ya puyde solucionarlo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2110">leproso</a> — Jue Abr 01, 2010 9:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-03-30T02:50:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3311#p3311</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3311#p3311"/>
<title type="html"><![CDATA[[Pygame]Controles y animaciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3311#p3311"><![CDATA[
1. debes publicar el codigo fuente completo de tu juego si quieres una mejor atencion a tu problema.<br /><br />2. porque cargas la imagen cada vez que se pulsa X tecla?, no seria mejor cargar estos recursos antes y luego hacer uso de sus referencias??<br /><br />repito, publica tu codigo fuente completo y me veras como tratan aqui mejor tu problema! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Mar 30, 2010 2:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leproso]]></name></author>
<updated>2010-03-27T18:19:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3310#p3310</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3310#p3310"/>
<title type="html"><![CDATA[[Pygame]Controles y animaciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=708&amp;p=3310#p3310"><![CDATA[
Hola a todos! He intentado solucionar pero no pude, busque en inet y tampoco encontre una solución. El problema es el siguiente:<br /><br />Las siguientes funciones de la clase personaje mueven y realizan la animacion de movimiento del personaje:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        <br />    def animar&#40;self, n&#41;:<br />        self.frame_num += 1<br />        pygame.time.delay&#40;35&#41;<br />   if self.frame_num == n:<br />            self.frame_num = 0<br /><br />    def update&#40;self&#41;:<br /><br />        teclas_pulsadas = pygame.key.get_pressed&#40;&#41;<br />        dx = 0<br />        dy = 0<br />        pygame.key.set_repeat&#40;&#41;<br /><br /><br />        if teclas_pulsadas&#91;K_s&#93;:<br />            self.imagen = pygame.image.load&#40;'imagenes/s.png'&#41;<br />            self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;<br />            self.transformar_en_s&#40;&#41;<br /><br />        <br />        if teclas_pulsadas&#91;K_n&#93;:<br />            self.imagen = pygame.image.load&#40;'imagenes/n.png'&#41;<br />            self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;<br />            self.destransformar&#40;&#41;<br /><br />            <br />        if teclas_pulsadas&#91;K_z&#93;:<br />            if self.ss == 0:<br />                self.imagen = pygame.image.load&#40;'imagenes/gn.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;<br />            elif self.ss == 1:<br />                self.imagen = pygame.image.load&#40;'imagenes/gs.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;             <br />            self.animar&#40;4&#41;<br />        <br /><br />                        <br />        if teclas_pulsadas&#91;K_UP&#93;:<br />            if self.ss == 0:<br />                self.imagen = pygame.image.load&#40;'imagenes/n.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;<br />            elif self.ss == 1:<br />                self.imagen = pygame.image.load&#40;'imagenes/s.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;                <br /><br />            self.direcion = ISO_ARR<br />            dy = -5<br />            self.animar&#40;4&#41;<br />            <br /><br />            <br />        elif teclas_pulsadas&#91;K_DOWN&#93;:<br />            if self.ss == 0:<br />                self.imagen = pygame.image.load&#40;'imagenes/n.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;<br />            elif self.ss == 1:<br />                self.imagen = pygame.image.load&#40;'imagenes/s.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;                <br /><br /><br />            self.direcion = ISO_ABA<br />            dy = 5<br />            self.animar&#40;4&#41;<br />            <br /><br />        elif teclas_pulsadas&#91;K_LEFT&#93;:<br />            if self.ss == 0:<br />                self.imagen = pygame.image.load&#40;'imagenes/n.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;<br />            elif self.ss == 1:<br />                self.imagen = pygame.image.load&#40;'imagenes/s.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;                <br /><br /><br />            self.direcion = ISO_IZQ<br />            dx = -5<br />            self.animar&#40;4&#41;<br />            <br />        elif teclas_pulsadas&#91;K_RIGHT&#93;:<br />            if self.ss == 0:<br />                self.imagen = pygame.image.load&#40;'imagenes/n.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;<br />            elif self.ss == 1:<br />                self.imagen = pygame.image.load&#40;'imagenes/s.png'&#41;<br />                self.imagen.set_colorkey&#40;self.imagen.get_at&#40;&#40;0,0&#41;&#41;&#41;                <br /><br /><br />            self.direcion = ISO_DER<br />            dx = 5<br />            self.animar&#40;4&#41;<br /></code></dd></dl><br /><br />funcionan bien, el problema es que el jugador tiene que mantener apretado la tecla para que la animacion se concrete, y ensima cuando suelta queda en cualuquier frame.<br />Lo que quiero lograr es que con solo apretar una ves la tecla se concrete la animacion entera(es decir muestre las 4 fotos) y vuela a la 1.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2110">leproso</a> — Sab Mar 27, 2010 6:19 pm</p><hr />
]]></content>
</entry>
</feed>