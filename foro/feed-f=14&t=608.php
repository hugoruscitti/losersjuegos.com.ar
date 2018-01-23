<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=14&amp;t=608" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-08-09T00:34:02+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=14&amp;t=608</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-08-09T00:34:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2829#p2829</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2829#p2829"/>
<title type="html"><![CDATA[Comenzamos la etapa 3, ¿voluntarios?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2829#p2829"><![CDATA[
Si, me queda claro. Es una buena alternativa para apilar las<br />fichas, pero nos hace muy difícil el siguiente algoritmo para<br />eliminar las lineas completas.<br /><br />A mi entender sería mas simple eliminar la ficha (sprite) que<br />toca el suelo y dejar su figura pintada sobre una superficie. Esa<br />superficie luego se puede recortar, mover y alinear como queramos,<br />incluso pintarla en escala de grises o algo asi...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 09, 2009 12:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[joksnet]]></name></author>
<updated>2009-08-08T16:50:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2828#p2828</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2828#p2828"/>
<title type="html"><![CDATA[Comenzamos la etapa 3, ¿voluntarios?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2828#p2828"><![CDATA[
Hola.<br /><br />Hace tiempo que vengo viendo, pero sin tiempo de sentarme a ver algo. Vi la ultima actualizacion. Se lo que me surge una duda.<br /><br />Cuando una pieza toca fondo (u otra pieza), se elimina y se dibujaria ahi el mismo dibujo que tiene la pieza ?<br /><br />Mi idea es mantener la pieza, pero desactivada. Algo asi:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>     1.1 --- a/lib/game_scene.py   Sat Aug 08 11:46:03 2009 -0300<br />     1.2 +++ b/lib/game_scene.py   Sat Aug 08 18:46:01 2009 +0200<br />     1.3 @@ -15,7 +15,7 @@<br />     1.4          scene.Scene.__init__&#40;self, director&#41;<br />     1.5          self.board = board.Board&#40;self&#41;<br />     1.6          self.background, tmp = utils.load_images&#40;&quot;gamescene/background.png&quot;&#41;<br />     1.7 -        self.pieces = pygame.sprite.GroupSingle&#40;&#41;<br />     1.8 +        self.pieces = pygame.sprite.Group&#40;&#41;<br />     1.9          self.pieces.add&#40;piece.Piece&#40;self.board&#41;&#41;<br />    1.10          self.create_return_message&#40;&#41;<br />    1.11  <br />    1.12 @@ -54,4 +54,5 @@<br />    1.13          self.director.change_scene&#40;scene&#41;<br />    1.14  <br />    1.15      def go_to_next_scene&#40;self&#41;:<br />    1.16 +        self.pieces.sprites&#40;&#41;&#91;-1&#93;.disabled = True<br />    1.17          self.pieces.add&#40;piece.Piece&#40;self.board&#41;&#41;<br /><br />     2.1 --- a/lib/piece.py   Sat Aug 08 11:46:03 2009 -0300<br />     2.2 +++ b/lib/piece.py   Sat Aug 08 18:46:01 2009 +0200<br />     2.3 @@ -17,6 +17,7 @@<br />     2.4          pygame.sprite.Sprite.__init__&#40;self&#41;<br />     2.5          self.board = board<br />     2.6          self.letter = letter<br />     2.7 +        self.disabled = False<br />     2.8          self.load_images&#40;&quot;pieces/p2.png&quot;&#41;<br />     2.9          self.load_matrix&#40;&#41;<br />    2.10          self.set_frame&#40;0&#41;<br />    2.11 @@ -150,6 +151,9 @@<br />    2.12      def on_key_down_event&#40;self, event&#41;:<br />    2.13          &quot;&quot;&quot;Gestiona la pulsaciÃ³n de teclas para controlar la pieza.&quot;&quot;&quot;<br />    2.14  <br />    2.15 +        if self.disabled:<br />    2.16 +            return<br />    2.17 +<br />    2.18          if event.key == pygame.K_LEFT:<br />    2.19              self.move&#40;-1, 0&#41;<br />    2.20          elif event.key == pygame.K_RIGHT:<br /></code></dd></dl><br /><br />Se entiende ?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=95">joksnet</a> — Sab Ago 08, 2009 4:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-08-03T23:19:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2825#p2825</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2825#p2825"/>
<title type="html"><![CDATA[Comenzamos la etapa 3, ¿voluntarios?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=608&amp;p=2825#p2825"><![CDATA[
Saludos, ¿como va?. Estamos por comenzar<br />la etapa 3 del desarrollo de Asadetris.<br /><br />En esta nueva etapa incorporaremos varias características<br />muy importantes:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;_&#93; % Etapa 3<br />   : En esta etapa ya se puede comenzar a apilar fichas. El usuario tiene<br />   : que poder hacer bajar una pieza, que permanezca en el suelo y que<br />   : llegue otra nueva para poder mover.<br />   :<br />   : En esta etapa ya caen desde la parte superior de escenario el resto<br />   : de las fichas, no solo las 'L'.<br />   :<br />   : Cuando el usuario llegue arriba se tiene que imprimir algún mensaje<br />   : y cambiar de escena.<br />   :<br />   : No se pueden hacer lineas en esta versión, solamente apilar.<br />   :<br />   &#91;_&#93; Detener piezas cuando llegan abajo<br />   &#91;_&#93; Crear nuevas piezas cuando deja una en el suelo<br />   &#91;_&#93; implementar colisiones entre las piezas<br />   &#91;_&#93; crear las piezas que faltan y mostrarlas aleatoriamente<br />   &#91;_&#93; permitir que el usuario pueda bajar una pieza directamente &#40;y no progresivamente&#41;<br /></code></dd></dl><br /><br /><br />Quería consultarles como están de tiempo, me gustaría que<br />podamos organizar un poco mas el proyecto, podríamos contactarnos<br />por jabber o algo así... no se, ¿alguna idea?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ago 03, 2009 11:19 pm</p><hr />
]]></content>
</entry>
</feed>