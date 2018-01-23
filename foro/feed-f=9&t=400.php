<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=400" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-11-08T11:52:14+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=400</id>
<entry>
<author><name><![CDATA[brutalchrist]]></name></author>
<updated>2008-11-08T11:52:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1731#p1731</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1731#p1731"/>
<title type="html"><![CDATA[Duda - Saber cuando clikean una imagen Python Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1731#p1731"><![CDATA[
Muchas gracias lucesita y hugoruscitti. Pondre a prueba lo que me has dicho hugoruscitti, si me resulta les aviso.<br />Nuevamente muchas gracias por responder (=<br /><br />Ya lo probé. Resulto todo muy bien (=<br />Muchas gracias por todo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2011">brutalchrist</a> — Sab Nov 08, 2008 11:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-11-07T19:55:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1730#p1730</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1730#p1730"/>
<title type="html"><![CDATA[Duda - Saber cuando clikean una imagen Python Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1730#p1730"><![CDATA[
Hay que hacer dos cosas en realidad, primero debes obtener la coordenada<br />del mouse cuando el usuario hace click sobre la pantalla y luego reconocer<br />sobre qué imagen a pulsado el usuario.<br /><br />Para detectar la posición del mouse te comento que Pygame genera un evento<br />de tipo MOUSEBUTTONDOWN cada vez que el usuario pulsa el mouse, así que para<br />detectar la posición solo tienes que verificar cuando llega este evento<br />y consultar el atributo &quot;pos&quot; del mismo. Ampliando un poco el código anterior<br />quedaría:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> <br />while 1:<br />    for event in pygame.event.get&#40;&#41;:<br />        if event.type == pygame.QUIT:<br />            sys.exit&#40;&#41;<br />        elif event.type == pygame.MOUSEBUTTONDOWN:<br />            x, y = event.pos<br /><br />            print &quot;ha hecho click en la posicion: &quot;, x, y<br /></code></dd></dl><br /><br /><br />Entonces, con la posición del mouse solo quedaría ver con qué imagen<br />colisiona. Lo que se puede hacer es usar el objeto Rect que genera<br />pygame, por ejemplo la siguiente sentencia:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>destino_opciones = self.Mopciones.get_rect&#40;center=&#40;310,200&#41;&#41;<br /></code></dd></dl><br /><br />genera un objeto Rect que tiene varios métodos como por ejemplo<br />'collidepoint', que te permite conocer si una coordenada está en contacto<br />con el rectángulo. Regresando al ejemplo anterior:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>while 1:<br />    for event in pygame.event.get&#40;&#41;:<br />        if event.type == pygame.QUIT:<br />            sys.exit&#40;&#41;<br />        elif event.type == pygame.MOUSEBUTTONDOWN:<br />            x, y = event.pos<br /><br />            if destino_opciones.collidepoint&#40;x, y&#41;:<br />                print &quot;ha pulsado sobre 'destino_opciones'&quot;<br /></code></dd></dl><br /><br />hay mas información de estos objetos en:<br />    <br />    <!-- m --><a class="postlink" href="http://www.pygame.org/docs/ref/rect.html">http://www.pygame.org/docs/ref/rect.html</a><!-- m --><br /><br /><br />Ah, y en la parte donde se imprime en pantalla también se puede<br />usar esta referencia al rectángulo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>self.screen.blit&#40;self.Mopciones, destino_opciones&#41;<br /></code></dd></dl><br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Nov 07, 2008 7:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-11-07T16:13:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1728#p1728</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1728#p1728"/>
<title type="html"><![CDATA[Duda - Saber cuando clikean una imagen Python Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1728#p1728"><![CDATA[
yo de python se mas bien poco y nada, pero como supongo que estas trabajando con SDL, lo que tu puedes hacer, es detectar cuando se presiona el click izquierdo, en ese momento te fijas la coordenada tanto en X como en Y y te fijas si estan dentro de las coordenadas de tu imagen.<br /><br />no se si me explique bien.<br /><br />Saludos Lucesita<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Vie Nov 07, 2008 4:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[brutalchrist]]></name></author>
<updated>2008-11-07T06:27:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1727#p1727</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1727#p1727"/>
<title type="html"><![CDATA[Duda - Saber cuando clikean una imagen Python Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=400&amp;p=1727#p1727"><![CDATA[
Primero que todo mis saludos, muy buen sitio!<br />Estoy creando un juego junto a un amigo y tenemos una gran duda. Al tratar de hacer un menú quedamos parados en saber cuando le hacen click auna imagen, me explico, el menú tiene un background y encima de el 3 imágenes (una de juego nuevo, una de opciones y una de salir). Queremos saber cuando le hagan click a una de estas imágenes para ejecutar la acción.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def Menu&#40;self&#41;:<br />      while 1:<br />         for event in pygame.event.get&#40;&#41;:<br />            if event.type == pygame.QUIT:<br />               sys.exit&#40;&#41;<br />         self.screen.blit&#40;self.menu, self.menu.get_rect&#40;&#41;&#41;<br />         self.screen.blit&#40;self.Mnuevo, self.Mnuevo.get_rect&#40;center=&#40;150,100&#41;&#41;&#41;<br />         self.screen.blit&#40;self.Mopciones, self.Mopciones.get_rect&#40;center=&#40;310,200&#41;&#41;&#41;<br />         self.screen.blit&#40;self.Msalir, self.Msalir.get_rect&#40;center=&#40;210,300&#41;&#41;&#41;<br />         self.Mintro.set_volume&#40;0.4&#41;<br />         self.Mintro.play&#40;-1&#41;<br /><br />         #Aquí debería ir un if que me diga que le hicieron clik a la imagen 'nuevo' y así dar comienzo al juego<br />         pygame.display.flip&#40;&#41;<br />      </code></dd></dl><br /><br /><br />De antemano muchas gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2011">brutalchrist</a> — Vie Nov 07, 2008 6:27 am</p><hr />
]]></content>
</entry>
</feed>