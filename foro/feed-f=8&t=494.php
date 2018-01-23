<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=494" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-23T23:24:03+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=494</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-23T23:24:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2144#p2144</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2144#p2144"/>
<title type="html"><![CDATA[Marcador!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2144#p2144"><![CDATA[
ademas, no haria falta transformar los puntos en caracteres mediante str()??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Feb 23, 2009 11:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-23T21:48:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2143#p2143</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2143#p2143"/>
<title type="html"><![CDATA[Marcador!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2143#p2143"><![CDATA[
Cuando algo no se imprime en pantalla, lo normal es que el fallo esté alrededor del blit. En este caso, está justamente en la línea del blit:<br />self.blit(m1, (20, 20))<br />Ahora miremos la documentación del blit:<br />Surface.blit(source, dest, area=None, special_flags = 0): return Rect<br /><br />En tu caso, self no es una Surface así que te las tendrías que apañar para poder poner algo como:<br />screen.blit(m1, (20, 20))<br /><br />Respecto a lo de terminar la partida al llegar a 5 puntos, tendrías que hacer condicional el bucle principal, crear las variables de puntos y incrementarlas al marcar un punto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;...&#93;<br />puntos_p1 = 0<br />puntos_p2 = 0<br />while puntos_p1 + puntos_p2 &lt; 5:<br />    &#91;...&#93;</code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Feb 23, 2009 9:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dario279]]></name></author>
<updated>2009-02-23T01:34:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2140#p2140</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2140#p2140"/>
<title type="html"><![CDATA[Marcador!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=494&amp;p=2140#p2140"><![CDATA[
Wenas noches, estoy intentando hacer un marcador para mi juego.<br /><br />Nose  si estara del todo bien echo pero lo q tengo hecho asta ahora nose me ve en pantalla  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br /><br />Algun consejo o alguna forma de hacerlo?<br /><br />Dentro de la clase bola esta la funcion marcador, pero en la forma de hacerlo creo q habre cometido algun error, alguien sabe decirme cual? Si eso resulta facil me podriais decir como actualizarlo para q la partida acabase cuando alguno marcara 5 goles<br /><br />Cn el codigo de ahora me dice q marcador no tiene atributo en bola, y nose el porque.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame, sys<br />from pygame.sprite import Sprite<br />from pygame.locals import *<br />width = 640<br />height = 300<br /><br />class Bola&#40;Sprite&#41;:<br /><br />    def __init__&#40;self, x, y, radio, color=&#40;0, 255, 0&#41;&#41;:<br />        Sprite.__init__&#40;self&#41;<br />        self.x, self.y = x, y<br />        self.radio = radio<br />        self.crear_imagen&#40;radio, color&#41;<br />        self.rect = self.image.get_rect&#40;self.image&#41;<br />        self.mover&#40;0, 0&#41;<br /><br /><br />    def crear_imagen&#40;self, radio, color&#41;:<br />        ancho = alto = radio * 2<br />        self.image = pygame.Surface&#40;&#40;ancho, alto&#41;&#41;.convert&#40;&#41;<br />        self.image.set_colorkey&#40;&#40;0, 0, 0&#41;&#41;<br />        pygame.draw.circle&#40;self.image, color, &#40;radio, radio&#41;, radio&#41;<br /><br />    def update&#40;self&#41;:<br />        self.x += self.dx<br />        self.y += self.dy<br />        self.rect.center = &#40;self.x, self.y&#41;<br />        self.verificar_limites&#40;&#41;<br />        self.reinici&#40;&#41;<br />        self.marcador&#40;'0', '0'&#41;<br />      <br />    def reinici&#40;self&#41;:<br />      if self.x &lt; -100:<br />         self.x = 320<br />         self.dx = -1<br />         self.dy = -0.7<br /><br />      if self.x &gt; width + 100:<br />         self.x = 320<br />         self.dx = 1<br />         self.dy = 0.7<br />         <br />    def verificar_limites&#40;self&#41;:<br /><br />        if self.rect.top &lt; 0:<br />            self.rect.top = 0<br />            self.y = self.radio<br />            self.dy *= -0.75<br />        elif self.rect.bottom &gt; height:<br />            self.rect.bottom = height<br />            self.y = height - self.radio<br />            self.dy *= -0.75<br /><br />    def mover&#40;self, dx, dy&#41;:<br />        self.dx = dx<br />        self.dy = dy<br /><br />   def marcador&#40;self, puntos_p1, puntos_p2&#41;:<br />      lletra = pygame.font.SysFont&#40;&quot;Papyrus&quot;,50&#41;<br />      m1 = lletra.render&#40;puntos_p1,True,&#40;0,255,255&#41;&#41;<br />      m2 = lletra.render&#40;puntos_p2,True,&#40;255,255,255&#41;&#41;<br />      <br />      self.blit&#40;m1, &#40;20, 20&#41;&#41;<br />      self.blit&#40;m2, &#40;600, 0&#41;&#41;<br />      <br />class Porteria&#40;Sprite&#41;:<br /><br />   def __init__&#40;self, x, y, ancho, alto, dy, color=&#40;255, 0, 255&#41;&#41;:<br />      Sprite.__init__&#40;self&#41;<br />      self.image = self.crear_imagen&#40;ancho, alto, color&#41;<br />      self.rect = self.image.get_rect&#40;self.image&#41;<br />      self.rect.center = &#40;x, y&#41;<br />      self.dy = dy<br /><br /><br />   def crear_imagen&#40;self, ancho, alto, color&#41;:<br />      image = pygame.Surface&#40;&#40;ancho, alto&#41;&#41;.convert&#40;&#41;<br />      image.fill&#40;color&#41;<br />      return image<br /><br />   def update&#40;self&#41;:<br />      self.mover_y&#40;&#41;<br />      self.verificar_limites&#40;&#41;<br /><br />   def verificar_limites&#40;self&#41;:<br />      if self.rect.top &lt; 0:<br />         self.rect.top = 0<br />      elif self.rect.bottom &gt; height:<br />         self.rect.bottom = height<br /><br />   def mover_y&#40;self&#41;:<br />      teclas = pygame.key.get_pressed&#40;&#41;<br />      if teclas&#91;K_w&#93;:<br />         self.rect.y -= self.dy<br />      elif teclas&#91;K_s&#93;:<br />         self.rect.y += self.dy <br /><br />class Porteria2&#40;Sprite&#41;:<br /><br />   def __init__&#40;self, x, y, ancho, alto, dy, color=&#40;255, 0, 255&#41;&#41;:<br />      Sprite.__init__&#40;self&#41;<br />      self.image = self.crear_imagen&#40;ancho, alto, color&#41;<br />      self.rect = self.image.get_rect&#40;self.image&#41;<br />      self.rect.center = &#40;x, y&#41;<br />      self.dy = dy<br /><br /><br />   def crear_imagen&#40;self, ancho, alto, color&#41;:<br />      image = pygame.Surface&#40;&#40;ancho, alto&#41;&#41;.convert&#40;&#41;<br />      image.fill&#40;color&#41;<br />      return image<br /><br />   def update&#40;self&#41;:<br />      self.mover_y&#40;&#41;<br />      self.verificar_limites&#40;&#41;<br /><br />   def verificar_limites&#40;self&#41;:<br />      if self.rect.top &lt; 0:<br />         self.rect.top = 0<br />      elif self.rect.bottom &gt; height:<br />         self.rect.bottom = height<br /><br />   def mover_y&#40;self&#41;:<br />      teclas = pygame.key.get_pressed&#40;&#41;<br />      if teclas&#91;K_UP&#93;:<br />         self.rect.y -= self.dy<br />      elif teclas&#91;K_DOWN&#93;:<br />         self.rect.y += self.dy <br />         <br />def actualizar_pantalla&#40;screen, bolas, porterias&#41;:<br />   screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br />   bolas.draw&#40;screen&#41;<br />   porterias.draw&#40;screen&#41;<br />   pygame.display.flip&#40;&#41;<br /><br />def colisiona_con&#40;bola, porteria&#41;:<br />   if bola.rect.colliderect&#40;porteria.rect&#41;:<br />      return True<br />   else:<br />      return False<br />      <br />def informar_colisiones&#40;bola, porteria&#41;:<br />   for a in bola:<br />      for b in porteria:<br />         if colisiona_con&#40;a,b&#41;:<br />            colisionar_con&#40;a,b&#41;<br />            break <br /><br />def colisionar_con&#40;bola, porteria&#41;:<br />   if colisiona_con&#40;bola, porteria&#41;:<br />      bola.dx *= -1.05<br />      bola.dy *= 1.001<br /><br />def mainP&#40;&#41;:<br />   screen = pygame.display.set_mode&#40;&#40;width, height&#41;&#41;<br />   pygame.display.set_caption&#40;&quot;Pinbola&quot;&#41;<br />   bolas = pygame.sprite.Group&#40;&#41;<br />   porterias = pygame.sprite.Group&#40;&#41;<br /><br />   b1 = Bola&#40;x=320, y=100, radio=7&#41;<br />   b1.mover&#40;-1, 0.7&#41;<br /><br />   p1 = Porteria&#40;x=20, y=140, ancho=10, dy=9, alto=60&#41;<br />   p2 = Porteria2 &#40;x=620, y=140, ancho=10, dy=9, alto=60&#41;<br /><br /><br />   bolas.add&#40;&#91;b1&#93;&#41;<br />   porterias.add&#40;&#91;p1, p2&#93;&#41;<br />   clock = pygame.time.Clock&#40;&#41;<br /><br />   while True:<br />         <br />      for e in pygame.event.get&#40;&#41;:<br />         if e.type == QUIT:<br />            sys.exit&#40;0&#41;<br />         <br />         elif e.type == KEYDOWN:<br />            if e.key == K_ESCAPE:<br />               sys.exit&#40;0&#41;<br />            <br /><br />      actualizar_pantalla&#40;screen, bolas, porterias&#41;<br />      bolas.update&#40;&#41;<br />      porterias.update&#40;&#41;<br />      informar_colisiones&#40;bolas, porterias&#41;<br /><br />if __name__ == '__main__':<br />    mainP&#40;&#41; </code></dd></dl>[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2038">dario279</a> — Lun Feb 23, 2009 1:34 am</p><hr />
]]></content>
</entry>
</feed>