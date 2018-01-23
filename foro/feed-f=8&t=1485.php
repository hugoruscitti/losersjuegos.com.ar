<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1485" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-06-08T14:04:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1485</id>
<entry>
<author><name><![CDATA[J_K]]></name></author>
<updated>2012-06-08T14:04:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6843#p6843</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6843#p6843"/>
<title type="html"><![CDATA[Re: Pygame class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6843#p6843"><![CDATA[
Al final lo he sacado y me ha quedado algo parecido al tuyo. Pero muchas gracias por responder teniendo en cuenta lo mal que he explicado el problema <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> Que grande soys. Este verano me pasaré bastante por el foro, que quiero aprender a programar por android con python. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2619">J_K</a> — Vie Jun 08, 2012 2:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-06-04T02:40:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6814#p6814</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6814#p6814"/>
<title type="html"><![CDATA[Re: Pygame class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6814#p6814"><![CDATA[
Primero, creo que es bueno que le des una leída a esto: <a href="http://mundogeek.net/archivos/2008/03/05/python-orientacion-a-objetos/" class="postlink">http://mundogeek.net/archivos/2008/03/05/python-orientacion-a-objetos/</a> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Además, tienes un gran numero de &quot;cosas feas&quot;, nada malo, solo que van contra la &quot;elegancia del lenguaje&quot;.<br /><br />Ahora, es solo acomodarlo todo, tienes dos opciones, si necesitas la función mas allá del init, puedes conservarla y mandarla llamar...<br /><br /><pre class="prettyprint">class Edifici&#40;pygame.sprite.Sprite&#41;:<br />   #definir un valores como cero, cuando en realidad no son enteros, si no, otro tipo de valores, es... feo<br />   # es mejor ponerles un null o un objeto vació....<br />    def __init__&#40;self, nPlantes=0, posicio=0, imatgePlanta=0&#41;:<br />        self.rect = &#40;posicio[0],posicio[1],imatgePlanta.get_rect&#40;&#41;[2],imatgePlanta.get_rect&#40;&#41;[3]*nPlantes + nPlantes&#41;<br />        self.nPlantes = nPlantes<br />        self.image = pygame.Surface&#40;&#40;self.rect[2],self.rect[3]&#41;&#41;<br />        self.edifici&#40;nPlantes,posicio,imatgePlanta&#41; #aquí llamo a la función interna dentro del main...<br />    def edifici&#40;self, nPlantes, posicio, imatgePlanta&#41;:<br />        i=0<br />        while i &lt; nPlantes:<br />            self.image.blit&#40;imatgePlanta,&#40;posicio[0],posicio[1]+imatgePlanta.get_rect&#40;&#41;[3]*i+i,imatgePlanta.get_rect&#40;&#41;[2],imatgePlanta.get_rect&#40;&#41;[2]&#41;&#41;<br />            i+=1</pre><br /><br />O, si solo la utilizaras en el init, puedes ahorrarte el def....<br /><br /><pre class="prettyprint">class Edifici&#40;pygame.sprite.Sprite&#41;:<br />   #definir un valores como cero, cuando en realidad no son enteros, si no, otro tipo de valores, es... feo<br />   # es mejor ponerles un null o un objeto vació....<br />    def __init__&#40;self, nPlantes=0, posicio=0, imatgePlanta=0&#41;:<br />        self.rect = &#40;posicio[0],posicio[1],imatgePlanta.get_rect&#40;&#41;[2],imatgePlanta.get_rect&#40;&#41;[3]*nPlantes + nPlantes&#41;<br />        self.nPlantes = nPlantes<br />        self.image = pygame.Surface&#40;&#40;self.rect[2],self.rect[3]&#41;&#41;<br />        #nota que se ha eliminado la función y se ejecuta cuando se inicia....<br />        i=0<br />        while i &lt; nPlantes:<br />            self.image.blit&#40;imatgePlanta,&#40;posicio[0],posicio[1]+imatgePlanta.get_rect&#40;&#41;[3]*i+i,imatgePlanta.get_rect&#40;&#41;[2],imatgePlanta.get_rect&#40;&#41;[2]&#41;&#41;<br />            i+=1</pre><br /><br />Espero que te sirva....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Jun 04, 2012 2:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[J_K]]></name></author>
<updated>2012-06-03T10:01:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6810#p6810</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6810#p6810"/>
<title type="html"><![CDATA[Pygame class]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1485&amp;p=6810#p6810"><![CDATA[
Hola mi duda es sobre las clases de python, si quiero definir una clase Edificio, me dan una imagenplanta que es una imagen de una sola planta (una pared de ladrillos por ejemplo), me dan una posicion donde tengo que pegar el area del piso dentro de una area grafica, nplantas las plantas que hay. <br /><br />class Edifici(pygame.sprite.Sprite):<br />    def __init__(self, nPlantas, posicion, imagenPlanta):<br />           self.rect <br />           self.image<br />           self.nplantas<br /><br />el self.rect son las coordenadas (x0,y0,x1,y1) posicion y grandaria del area del piso. self.nplantas las plantas que hay y self.image es una imagen final que es el resultado de pegar nplanta veces la imagenplanta son una separacion de 1 pixel entre plantas de forma vertical y que ocupa el area del piso.<br /><br />Mi pregunta es como hago lo de self.image solo con el init ? yo lo he hecho creando otra funcion:<br /><br />class Edifici(pygame.sprite.Sprite):<br /><br />    def __init__(self, nPlantes=0, posicio=0, imatgePlanta=0):<br /><br />        self.rect = (posicio[0],posicio[1],imatgePlanta.get_rect()[2],imatgePlanta.get_rect()[3]*nPlantes + nPlantes) <br />        self.nPlantes = nPlantes<br />        self.image = pygame.Surface((self.rect[2],self.rect[3]))<br />    <br />    def edifici(self, nPlantes, posicio, imatgePlanta):<br />        i=0<br />        while i &lt; nPlantes:<br />            self.image.blit(imatgePlanta,(posicio[0],posicio[1]+imatgePlanta.get_rect()[3]*i+i,imatgePlanta.get_rect()[2],imatgePlanta.get_rect()[2]))<br />            i+=1<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2619">J_K</a> — Dom Jun 03, 2012 10:01 am</p><hr />
]]></content>
</entry>
</feed>