<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=463" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-05T15:16:03+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=463</id>
<entry>
<author><name><![CDATA[dario279]]></name></author>
<updated>2009-02-05T15:16:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2017#p2017</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2017#p2017"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2017#p2017"><![CDATA[
Lo pongo aki q x mp se me reiniciaba la conexion cada vez q lo enviaba.<br /><br />Muchas gracias x todo. <br /><br />Mira te comento, el juego lo tengo q entregar el dia 24 de este mes.<br /><br />Se basa en un simple pintball como los de toda la vida. Tengo un menu ya hecho y lo unico q me keda es eso, como has podido comprobar cn la pelota no hay ningun problema, pero los palos si. Y estoy deskifiado xq claro, nose a kien acudir.<br /><br />Si me puedes ayudar como me has dicho me vendria perfecto. Lo q la sala de loserjuegos nose si es un espacio fisico o virtual xD. Llevo poco tiempo en este mundo.<br /><br />Y lo de colgar el codigo correjido, no hay ningn problema, ya que mi ilusion era acabar colgando mi jueguecito cuando lo tuviera acabado.<br /><br />Gracias!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2038">dario279</a> — Jue Feb 05, 2009 3:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-05T11:51:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2015#p2015</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2015#p2015"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2015#p2015"><![CDATA[
<blockquote><div><cite>dario279 escribió:</cite><br />Vale. Ahora echale un vistazo aver, asi es como me sale el error de ayer. El ultimo de invalid rect assigment.<br /></div></blockquote><br />Como me temía, el error venía de antes. Me dí cuenta al hacer un print de self.x y self.y antes de la línea donde petaba el programa. La 'y' valía None porque se le da el valor de una función que no retorna nada:<br /><dl class="codebox"><dt>Code: </dt><dd><code>self.y = self.mover_y&#40;&#41;</code></dd></dl> Y tendría que ser:<br /><dl class="codebox"><dt>Code: </dt><dd><code>self.mover_y&#40;&#41;</code></dd></dl><br /><br /><blockquote class="uncited"><div><br />Igualmente esta bien la forma que he hecho pra mover el &quot;palito&quot;? O me tendria q hacer falta alguna variable global?<br /></div></blockquote><br />Siempre es mejor que no utilices ninguna variable global (exceptuando las constantes que has declarado 'width' y 'height').<br />Respecto de si es la mejor manera... Pues la verdad es que yo me he liado un poco con las variables 'y', 'x'... de tu código. Creo que se podrían eliminar y trabajar directamente sobre el rectángulo.<br />Yo lo haría así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class Porteria&#40;Sprite&#41;:<br /><br />   def __init__&#40;self, x, y, ancho, alto, dy, color=&#40;255, 0, 255&#41;&#41;:<br />      Sprite.__init__&#40;self&#41;<br />      self.x, self.y = x, y<br />      self.image = self.crear_imagen&#40;ancho, alto, color&#41;<br />      self.rect = self.image.get_rect&#40;self.image&#41;<br />      self.rect.center = &#40;x, y&#41;<br />      self.dy = dy<br />      <br />   def crear_imagen&#40;self, ancho, alto, color&#41;:<br />      image = pygame.Surface&#40;&#40;ancho, alto&#41;&#41;.convert&#40;&#41;<br />      image.fill&#40;color&#41;<br />      return image<br />      <br />   def update&#40;self&#41;:<br />      self.mover_y&#40;&#41;<br />      self.verificar_limites&#40;&#41;<br />      <br />   def verificar_limites&#40;self&#41;:<br />      if self.rect.top &lt; 0:<br />         self.rect.top = 0<br />      elif self.rect.bottom &gt; height:<br />         self.rect.bottom = height<br />         <br />   def mover_y&#40;self&#41;:<br />      teclas = pygame.key.get_pressed&#40;&#41;<br />      if teclas&#91;K_UP&#93;:<br />         self.rect.y -= self.dy<br />      elif teclas&#91;K_DOWN&#93;:<br />         self.rect.y += self.dy<br /></code></dd></dl><br />Fíjate que ahora, al crear las porterías, le tendrías que pasar dy.<br /><br /><blockquote class="uncited"><div><br />Es la parte final de mi treball de recerca, jeje, si eres de barcelona sabras lo q te digo. jeje<br /></div></blockquote>Jeje... sí, demasiado bien me lo conozco... Para quien no lo sepa, es un trabajo de investigación. Como un trabajo de final de carrera pero que se hace antes de acceder a la universidad.<br />¿Cuanto te falta para entregarlo? Es que, corrigiendo tu código, un error me llevaba a otro. Y, en ocasiones, no sabía muy bien lo que querías hacer. Si te ves apurado de tiempo, podríamos quedar en la sala de LosersJuegos (preferiblemente) o por el msn. Aunque con la condición de que luego se publique el código corregido. Así más gente podrá aprender. Si eso, envía mensaje privado.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Feb 05, 2009 11:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dario279]]></name></author>
<updated>2009-02-04T17:16:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2012#p2012</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2012#p2012"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2012#p2012"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import *<br />from math import *<br />from pygame.sprite import Sprite<br /><br />width = 250<br />height = 250<br /><br />class Bola&#40;Sprite&#41;:<br /><br />    def __init__&#40;self, x, y, radio, color=&#40;0, 255, 0&#41;&#41;:<br />        Sprite.__init__&#40;self&#41;<br />        self.x, self.y = x, y<br />        self.radio = radio<br />        self.crear_imagen&#40;radio, color&#41;<br />        self.rect = self.image.get_rect&#40;self.image&#41;<br />        self.empujar&#40;0, 0&#41;<br /><br />    def crear_imagen&#40;self, radio, color&#41;:<br />        ancho = alto = radio * 2<br />        self.image = pygame.Surface&#40;&#40;ancho, alto&#41;&#41;.convert&#40;&#41;<br />        self.image.set_colorkey&#40;&#40;0, 0, 0&#41;&#41;<br />        pygame.draw.circle&#40;self.image, color, &#40;radio, radio&#41;, radio&#41;<br /><br />    def update&#40;self&#41;:<br />        self.x += self.dx<br />        self.y += self.dy<br />        self.rect.center = &#40;self.x, self.y&#41;<br />        self.verificar_limites&#40;&#41;<br /><br />    def verificar_limites&#40;self&#41;:<br />        if self.rect.left &lt; 0:<br />            self.rect.left = 0<br />            self.x = self.radio<br />            self.dx *= -1.01<br />        elif self.rect.right &gt; width:<br />            self.rect.right = width<br />            self.x = width - self.radio<br />            self.dx *= -1.01<br />        if self.rect.top &lt; 0:<br />            self.rect.top = 0<br />            self.y = self.radio<br />            self.dy *= -1.05<br />        elif self.rect.bottom &gt; height:<br />            self.rect.bottom = height<br />            self.y = height - self.radio<br />            self.dy *= -1.05<br /><br />    def empujar&#40;self, dx, dy&#41;:<br />        self.dx = dx<br />        self.dy = dy<br /><br /><br />class Porteria&#40;Sprite&#41;:<br /><br />   def __init__&#40;self, x, y, ancho, alto, color=&#40;255, 0, 255&#41;&#41;:<br />      Sprite.__init__&#40;self&#41;<br />      self.x, self.y = x, y<br />      self.d = ancho<br />      self.h = alto<br />      self.crear_imagen&#40;x, y, ancho, alto, color&#41;<br />      self.rect = self.image.get_rect&#40;self.image&#41;<br />      self.empujar&#40;0, 0&#41;<br /><br />      <br />   def crear_imagen&#40;self, x, y, ancho, alto, color&#41;:<br />      ancho2 = ancho * 2<br />      alto2 = alto * 2<br />      self.image = pygame.Surface&#40;&#40;ancho, alto&#41;&#41;.convert&#40;&#41;<br />      self.image.set_colorkey&#40;&#40;250, 0, 0&#41;&#41;<br />      pygame.draw.rect&#40;self.image, color, &#40;x, y, ancho, alto&#41;&#41;<br />      <br />   def update&#40;self&#41;:<br />      self.y = self.mover_y&#40;&#41;<br />      self.rect.center = &#40;self.x, self.y&#41;<br />      self.verificar_limites&#40;&#41;<br /><br />      <br />   def verificar_limites&#40;self&#41;:<br />      if self.rect.top &lt; 0:<br />         self.rect.top = 0<br />         self.y = self.h<br />         self.mover_y *= -1<br />      elif self.rect.bottom &gt; height:<br />         self.rect.bottom = heigh<br />         self.y = height - self.h<br />         self.mover_y *=-1<br />         <br />   def mover_y&#40;self&#41;:<br />      teclas = pygame.key.get_pressed&#40;&#41;<br />      if teclas&#91;K_UP&#93;:<br />         self.y -= dy<br />      <br />      elif teclas&#91;K_DOWN&#93;:<br />         self.y += dy<br />   <br />   def empujar&#40;self, dx, dy&#41;:<br />      self.dy = dy<br />      <br /><br /><br />def actualizar_pantalla&#40;screen, bolas, porterias&#41;:<br />   screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br />   bolas.draw&#40;screen&#41;<br />   porterias.draw&#40;screen&#41;<br />   pygame.display.flip&#40;&#41;<br /><br />def main&#40;&#41;:<br />   screen = pygame.display.set_mode&#40;&#40;width, height&#41;&#41;<br />   pygame.display.set_caption&#40;&quot;Pinbola&quot;&#41;<br />   bolas = pygame.sprite.Group&#40;&#41;<br />   porterias = pygame.sprite.Group&#40;&#41;<br /><br />   b1 = Bola&#40;x=400, y=100, radio=10&#41;<br />   b1.empujar&#40;-1.5, 0.4&#41;<br /><br />   p1 = Porteria&#40;x=100, y=30, ancho=10, alto=30&#41;<br />   <br /><br />   bolas.add&#40;&#91;b1&#93;&#41;<br />   porterias.add&#40;&#91;p1&#93;&#41;<br />   clock = pygame.time.Clock&#40;&#41;<br /><br />   while True:<br />         <br />      for e in pygame.event.get&#40;&#41;:<br />         if e.type == QUIT:<br />            return<br />           <br />      clock.tick&#40;300&#41;<br />      actualizar_pantalla&#40;screen, bolas, porterias&#41;<br />      bolas.update&#40;&#41;<br />      porterias.update&#40;&#41;<br /><br /><br />if __name__ == '__main__':<br />    main&#40;&#41; <br /></code></dd></dl><br /><br />Vale. Ahora echale un vistazo aver, asi es como me sale el error de ayer. El ultimo de invalid rect assigment. Igualmente esta bien la forma que he hecho pra mover el &quot;palito&quot;? O me tendria q hacer falta alguna variable global?<br /><br />Es la parte final de mi treball de recerca, jeje, si eres de barcelona sabras lo q te digo. jeje<br /><br />Mersi de nuevo!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2038">dario279</a> — Mié Feb 04, 2009 5:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-04T15:02:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2011#p2011</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2011#p2011"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2011#p2011"><![CDATA[
<blockquote><div><cite>dario279 escribió:</cite><br />Lo de las etiquetas code? Me has dejado perdido? Como lo ago?<br /></div></blockquote><br />A la hora de editar el mensaje, tienes que poner el código que quieras entre [code ] y [/code ] (sin espacios). O seleccionando el código y pulsando en el botón Code que hay debajo del asunto del mensaje.<br /><br /><blockquote><div><cite>dario279 escribió:</cite><br />Y otra cosilla, ahora se me ve la imagen, pero el problema q me pone es <br /><br />in update<br />    self.rect.center = (self.x, self.y)<br />TypeError: invalid rect assignment<br /><br />Nose q le pasa, pero weno, mi gran problema q creo q debe ser el causante de todo es a la hora de crear movimiento al &quot;palito&quot;, lo ice cn un programa pero sin funciones, y claro, esta es mi primera clase, y perdido q estoy. jeje.<br /><br />Puede q haya algun fallo gordo, nose :S. Haber q me podeis decir<br /><br />Mersi!!!<br /></div></blockquote><br />Yo encontré un error en tú código porque ponía:<dl class="codebox"><dt>Code: </dt><dd><code>self.rect.center = &#40;self.y&#41; </code></dd></dl> Y tendría que ser: <dl class="codebox"><dt>Code: </dt><dd><code> self.rect.center = &#40;self.x, self.y&#41;</code></dd></dl><br />A simple vista, el código ese es correcto. Pero como tú dices, puede haber un fallo gordo, que venga de antes (como que la x no sea un entero).<br />Para intentar descubrir el error, sería mejor que volvieses a colgar el código entero.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Feb 04, 2009 3:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dario279]]></name></author>
<updated>2009-02-03T23:59:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2010#p2010</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2010#p2010"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2010#p2010"><![CDATA[
Lo de las etiquetas code? Me has dejado perdido? Como lo ago?<br /><br />Y otra cosilla, ahora se me ve la imagen, pero el problema q me pone es <br /><br />in update<br />    self.rect.center = (self.x, self.y)<br />TypeError: invalid rect assignment<br /><br />Nose q le pasa, pero weno, mi gran problema q creo q debe ser el causante de todo es a la hora de crear movimiento al &quot;palito&quot;, lo ice cn un programa pero sin funciones, y claro, esta es mi primera clase, y perdido q estoy. jeje.<br /><br />Puede q haya algun fallo gordo, nose :S. Haber q me podeis decir<br /><br />Mersi!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2038">dario279</a> — Mar Feb 03, 2009 11:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-03T23:00:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2007#p2007</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2007#p2007"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2007#p2007"><![CDATA[
<blockquote><div><cite>dario279 escribió:</cite><br />Cierto, se me habia pasado.<br /><br />Pero al ponerlo y retocar otro error q me daba, se me ejecuta y me sigue sin salir el palito.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <br /><br /><br />Puede ser que a la hora de crear la imagen:<br /><br />pygame.draw.rect(self.image, color, (x, y, ancho, alto))<br /><br />Haya algun fallo?<br /></div></blockquote><br />Tus sospechas son correctas. Piensa que el 'rect' que se le pasa representa el rectángulo que se dibujará en la superficie. Por lo tanto, el rect tiene que comenzar desde el inicio de la imagen hasta el final &lt;rect(0, 0, ancho, alto)&gt;.<br />Aunque resulta más sencillo hacer: <dl class="codebox"><dt>Code: </dt><dd><code>self.image.fill&#40;color&#41;</code></dd></dl><br /><br />Yo me las he apañado para conseguir tu código indentado. Pero ten en cuenta que, para que la gente te pueda contestar mejor, tendrías que poner tu código entre etiquetas 'code'.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Feb 03, 2009 11:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dario279]]></name></author>
<updated>2009-02-03T22:49:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2006#p2006</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2006#p2006"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2006#p2006"><![CDATA[
Ya esta, problema solucionado, un pekeño detalle de la escritura!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2038">dario279</a> — Mar Feb 03, 2009 10:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dario279]]></name></author>
<updated>2009-02-03T22:31:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2004#p2004</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2004#p2004"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=2004#p2004"><![CDATA[
Cierto, se me habia pasado.<br /><br />Pero al ponerlo y retocar otro error q me daba, se me ejecuta y me sigue sin salir el palito.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <br /><br /><br />Puede ser que a la hora de crear la imagen:<br /><br />pygame.draw.rect(self.image, color, (x, y, ancho, alto))<br /><br />Haya algun fallo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2038">dario279</a> — Mar Feb 03, 2009 10:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-02-02T23:38:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=1995#p1995</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=1995#p1995"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=1995#p1995"><![CDATA[
No estoy muy seguro, pero en una de las<br />últimas lineas dice &quot;porterias.update&quot;, como si se<br />llamara a un método pero no están los signos &quot;()&quot;  al<br />final de la misma. Seguramente se te ha olvidado<br />eso...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Feb 02, 2009 11:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dario279]]></name></author>
<updated>2009-02-02T18:53:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=1994#p1994</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=1994#p1994"/>
<title type="html"><![CDATA[No se me ve un objecto en pantalla!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=463&amp;p=1994#p1994"><![CDATA[
Wenas, estaba acabado un pekeño pintball y he acabado las dos clases, la pelota y la porteria. Cuando le doy a ejecutar se me ejecuta bien pero la porteria no se me ve :S. Estoy buscando q se actualice y todo y no lo encuentro :S.<br /><br /><br />Donde puede estar el error?<br /><br /><br /><br /><br />import pygame<br />from pygame.locals import *<br />from math import *<br />from pygame.sprite import Sprite<br /><br />width = 1024<br />height = 786<br /><br />class Bola(Sprite):<br /><br />    def __init__(self, x, y, radio, color=(0, 255, 0)):<br />        Sprite.__init__(self)<br />        self.x, self.y = x, y<br />        self.radio = radio<br />        self.crear_imagen(radio, color)<br />        self.rect = self.image.get_rect(self.image)<br />        self.empujar(0, 0)<br /><br />    def crear_imagen(self, radio, color):<br />        ancho = alto = radio * 2<br />        self.image = pygame.Surface((ancho, alto)).convert()<br />        self.image.set_colorkey((0, 0, 0))<br />        pygame.draw.circle(self.image, color, (radio, radio), radio)<br /><br />    def update(self):<br />        self.x += self.dx<br />        self.y += self.dy<br />        self.rect.center = (self.x, self.y)<br />        self.verificar_limites()<br /><br />    def verificar_limites(self):<br /><br />        if self.rect.top &lt; 0:<br />            self.rect.top = 0<br />            self.y = self.radio<br />            self.dy *= -1.05<br />        elif self.rect.bottom &gt; height:<br />            self.rect.bottom = height<br />            self.y = height - self.radio<br />            self.dy *= -1.05<br /><br />    def empujar(self, dx, dy):<br />        self.dx = dx<br />        self.dy = dy<br /><br /><br />class Porteria(Sprite):<br /><br /><br />def __init__(self, x, y, ancho, alto, color=(255, 0, 255)):<br />Sprite.__init__(self)<br />self.x, self.y = x, y<br />self.d = ancho<br />self.h = alto<br />self.crear_imagen(x, y, ancho, alto, color)<br />self.rect = self.image.get_rect(self.image)<br />self.empujar(0, 0)<br /><br />def crear_imagen(self, x, y, ancho, alto, color):<br />ancho2 = ancho * 2<br />alto2 = alto * 2<br />self.image = pygame.Surface((ancho, alto)).convert()<br />self.image.set_colorkey((0, 0, 0))<br />pygame.draw.rect(self.image, color, (x, y, ancho, alto))<br /><br />def update(self):<br />self.y = self.mover_y<br />self.rect.center = (self.y)<br />self.verificar_limites()<br /><br />def verificar_limites():<br /><br />if self.rect.top &lt; 0:<br />self.rect.top = 0<br />self.y = self.h<br />self.mover_y *= -1<br />elif self.rect.bottom &gt; height:<br />self.rect.bottom = heigh<br />self.y = height - self.h<br />self.mover_y *=-1<br />def mover_y():<br />teclas = pygame.key.get_pressed()<br />if teclas[K_UP]:<br />self.y -= 50<br />      <br />elif teclas[K_DOWN]:<br />self.y += 50<br /><br />def empujar(self, dx, dy):<br />self.mover_y = dy<br /><br /><br /><br />def actualizar_pantalla(screen, bolas, porterias):<br />screen.fill((0, 0, 0))<br />bolas.draw(screen)<br />porterias.draw(screen)<br />pygame.display.flip()<br /><br />def main():<br />screen = pygame.display.set_mode((width, height))<br />pygame.display.set_caption(&quot;Pinbola&quot;)<br />bolas = pygame.sprite.Group()<br />porterias = pygame.sprite.Group()<br /><br />b1 = Bola(x=400, y=100, radio=10)<br />b1.empujar(-1.5, 0.4)<br /><br />p1 = Porteria(x=100, y=30, ancho=10, alto=30)<br /><br /><br />bolas.add([b1])<br />porterias.add([p1])<br />clock = pygame.time.Clock()<br /><br />while True:<br />         <br />for e in pygame.event.get():<br />if e.type == QUIT:<br />return<br />           <br />clock.tick(300)<br />actualizar_pantalla(screen, bolas, porterias)<br />bolas.update()<br />porterias.update<br /><br /><br />if __name__ == '__main__':<br />    main() <br /><br /><br /><br /><br />Gracias!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2038">dario279</a> — Lun Feb 02, 2009 6:53 pm</p><hr />
]]></content>
</entry>
</feed>