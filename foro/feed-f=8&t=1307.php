<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1307" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-12T22:36:12+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1307</id>
<entry>
<author><name><![CDATA[birria4]]></name></author>
<updated>2011-10-12T22:36:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6093#p6093</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6093#p6093"/>
<title type="html"><![CDATA[Re: Balas en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6093#p6093"><![CDATA[
hola de nuevo gracias por ayudarme sin embargo por alguna razon trate todos las sugerencias e incluso copie el codigo de barajas y aun asi sigue sin funcionar.<br />en el codigo de barajas ni si quiera aparece la pokebola(bala) en los demas sigue como lo tenia yo solo avansa un solo :/.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2520">birria4</a> — Mié Oct 12, 2011 10:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-10T22:28:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6085#p6085</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6085#p6085"/>
<title type="html"><![CDATA[Re: Balas en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6085#p6085"><![CDATA[
Curioso, puedo ver que llevas poco tiempo con pygame <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />Yo asumí que estabas trabajando con sprites, y tu utilizas simples imágenes. No digo que este mal, solo que es un poco practico en proyectos algo más grandes.<br /><br />Bueno, te introduzco al mundo de los sprites y resolveremos el problema, no te preocupes, ni te ofendas, iré lento:<br /><pre class="prettyprint"># -*- coding: cp1252 -*-<br />import pygame, sys<br />from pygame.locals import *<br />#defino unas variables globales para el ancho y el alto<br />Ancho = 1000<br />Alto = 500<br /><br />#se crea la clase para la pokebola, no cambia para nada <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />class Pokebola&#40; pygame.sprite.Sprite &#41;:  <br />    def __init__&#40;self, pos_i_x, pos_i_y &#41;: <br />        pygame.sprite.Sprite.__init__&#40;self&#41; <br />       <br />        self.image = pygame.image.load&#40;&quot;pokeball.png&quot;&#41;<br />        self.rect = self.image.get_rect&#40;&#41; <br />        self.rect.center = &#40;pos_i_x, pos_i_y&#41; <br />        # retire lo del trainer por que no estaba definido dentro de la clase<br />        self.dx = 0   <br />        self.dy = -3 <br /><br />    def update&#40;self&#41;:<br />        self.rect.move_ip&#40;&#40;self.dx, self.dy&#41;&#41; <br />        if self.rect.y &lt; 0 : <br />            self.kill&#40;&#41; <br /><br />#creo una clase para el personaje principal <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />#que también es un sprite...<br />class Trainer&#40; pygame.sprite.Sprite &#41;:<br />    def __init__&#40;self&#41;:<br />        pygame.sprite.Sprite.__init__&#40;self&#41;<br />        self.image = pygame.image.load&#40;&quot;back1.png&quot;&#41;<br />        self.rect = self.image.get_rect&#40;&#41;<br />        self.rect.center = &#40;1000/2,500/2 &#41; #aquí ,lo colocamos en una posición inicial<br />        #la ventaja de utilizar rect, es que nos permite, como creo intentaste, colocar<br />        #la imagen con el centro como lo ponemos<br />        #además, resulta redundante preguntar el alto y el ancho si sabemos que es de 1000 X 500 <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />        self.dx = 10<br />    def update&#40;self&#41;:<br />        #es mucho mejor dejar que el personaje se actualice a si mismo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />        posx, posy = self.rect.center #creamos dos variables para la posición<br />        for event in pygame.event.get&#40;&#41;:<br />            #en esta parte modificamos la posición<br />            if event.type == KEYDOWN:<br />                if event.key == K_LEFT:<br />                    posx -= self.dx <br />                if event.key == K_RIGHT:<br />                    posx += self.dx<br />        self.rect.center = &#40;posx, posy&#41; #y aquí lo aplicamos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br /><br />def main&#40;&#41;: #creo una función principal<br />    pygame.init&#40;&#41; #inicialzo a pygame<br />    pantalla = pygame.display.set_mode&#40; &#40;Ancho,Alto&#41; &#41; #creo la pantalla<br />    pygame.mouse.set_visible&#40;False&#41; #no digo que este mal el &quot;0&quot;, solo que así se entiende más <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />    bg = pygame.image.load&#40;&quot;valle.png&quot;&#41; #esto no lo explico <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />    #ahora, creamos algo que te parecerá nuevo:<br />    # &quot;un grupo de sprites&quot;<br />    sprites = pygame.sprite.RenderClear&#40;&#41;<br />    #y añadimos a nuestro personaje al grupo<br />    trainer = Trainer&#40;&#41;<br />    sprites.add&#40; trainer &#41;<br />    jugar = True<br />    while jugar:<br />            for event in pygame.event.get&#40;&#41;:<br />                if event.type == pygame.QUIT:<br />                    jugar = False; pygame.quit&#40;&#41; #el punto y coma permite poner sentencias en la misma linea<br />                    sys.exit&#40;&#41;<br />                if event.type == KEYDOWN:<br />                    if event.key == K_SPACE:<br />                        #ahora, cuando presiones, se agregara una bala<br />                        x, y = trainer.rect.center #tomamos la posición inicial, que sera la misma<br />                        #que la del personaje<br />                        pokebola = Pokebola&#40;x,y&#41; #lo pasamos como argumento para inicializarla <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />                        sprites.add&#40;pokebola&#41; #y la añadimos al código<br />            pantalla.fill&#40;&#40;250,250,250&#41;&#41;<br />            pantalla.blit&#40;bg, &#40;0,0&#41; &#41;<br />            sprites.draw&#40;pantalla&#41; #esto dibuja TODOS los sprites en el grupo<br />            sprites.update&#40;&#41; #y esto actualiza TODOS los sprites en el grupo<br />            #esa es la gran ventaja de trabajar con esprites<br />            pygame.display.update&#40;&#41;<br />main&#40;&#41;</pre><br /><br />No cargue la segunda nave... pero esto funciona <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br />Si tienes alguna duda sobre el código, solo pregunta <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Oct 10, 2011 10:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-10-10T16:50:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6084#p6084</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6084#p6084"/>
<title type="html"><![CDATA[Re: Balas en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6084#p6084"><![CDATA[
Hola birria4, si te fijas lo que hace el método update() es mover una cierta cantidad de píxeles el sprite cada vez que lo invocas. Si quieres que el sprite se mueva continuamente deberás invocar al método continuamente y tú solo lo invocas cada vez que pulsas la tecla SPACE. Prueba a sacar el método update() fuera del <span style="font-style: italic">for event in pygame.event.get():</span>, es decir, ponlo a la misma altura que el <span style="font-style: italic">pygame.display.update()</span> y verás como la pokeball se desplaza continuamente. Aún así creo que tu juego tiene varios fallos más, pero es posible que me equivoque ya que no lo he jugado, solo he mirado el código por encima.<br /><br />Creo que has malinterpretado el comentario de Barajas sobre que el método update() permite que el sprite se desplace continuamente, si lo piensas para que esto sea cierto una de dos: o el resto del juego se congelaría hasta que terminase de ejecutarse ese método, o necesitarías correrlo en un thread distinto.<br /><br />PD: yo que tú metería el bliteado de la pokeball en el método update() o lo pondría donde se ejecute continuamente, igual que el update().<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Lun Oct 10, 2011 4:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-10-10T07:01:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6081#p6081</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6081#p6081"/>
<title type="html"><![CDATA[Re: Balas en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6081#p6081"><![CDATA[
Donde tienes el &quot;for event in pygame.event.get():&quot; cambialo por esto.<br /><br />        teclas_pulsadas = pygame.key.get_pressed()<br /><br />        if teclas_pulsadas[K_ESCAPE]:<br />            sys.exit()<br />        elif teclas_pulsadas[K_LEFT]:<br />            # Lo que tengas que hacer<br />        elif teclas_pulsadas[K_RIGHT]:<br />            # Lo que tengas que hacer<br />        elif teclas_pulsadas[K_SPACE]:<br />            # Lo que tengas que hacer<br /><br />y así con todos los eventos del teclado<br /><br /> ...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Lun Oct 10, 2011 7:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[birria4]]></name></author>
<updated>2011-10-10T02:06:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6080#p6080</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6080#p6080"/>
<title type="html"><![CDATA[Re: Balas en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6080#p6080"><![CDATA[
hola de nuevpo lo intente y quedo con el mismo resultado se mueve solo uno por cada vez que aprieto el boton ayuda aqui dejo el codigo<br />la pokebola (la uso como bala XD) solo se mueve un espacio en vez de seguir avan zando como una bala<br /><br /><br /><pre class="prettyprint"># -*- coding: cp1252 -*-<br />import pygame, sys<br />from pygame.locals import *<br /><br />class pokebola&#40; pygame.sprite.Sprite &#41;:  <br />    def __init__&#40;self, pos_i_x, pos_i_y &#41;: <br />        pygame.sprite.Sprite.__init__&#40;self&#41; <br />       <br />        self.image = pygame.image.load&#40;&quot;pokeball.png&quot;&#41;<br />        self.rect = self.image.get_rect&#40;&#41; <br />        self.rect.center = &#40;trainer_left, trainer_top&#41; <br /> <br />        self.dx = 0   <br />        self.dy = -3 <br /><br />    def update&#40;self&#41;:<br />    <br />        self.rect.move_ip&#40;&#40;self.dx, self.dy&#41;&#41; <br /><br />        if self.rect.y &lt; 0 : <br />            self.kill&#40;&#41; <br /><br />clock = pygame.time.Clock&#40;&#41;<br />screen = pygame.display.set_mode&#40;&#40;1000,500&#41;&#41;<br /><br />pygame.mouse.set_visible&#40;0&#41;<br /><br />trainer = pygame.image.load&#40;&quot;back1.png&quot;&#41;<br />trainer2 = pygame.image.load&#40;&quot;back2.png&quot;&#41;<br />trainer_top = screen.get_height&#40;&#41; - trainer.get_height&#40;&#41;<br />trainer_left = screen.get_width&#40;&#41;/2 - trainer.get_width&#40;&#41;/2 <br /><br />bg = pygame.image.load&#40;&quot;valle.png&quot;&#41;<br /><br />screen.blit&#40;bg,&#40;0,0&#41;&#41;<br />screen.blit&#40;trainer, &#40;trainer_left,trainer_top&#41;&#41;<br /><br />pokebola = pokebola&#40;trainer_left,trainer_top&#41;<br /><br />while True:<br />    <br />    screen.blit&#40;bg,&#40;0,0&#41;&#41;<br />    screen.blit&#40;trainer, &#40;trainer_left,trainer_top&#41;&#41;<br />    x = 0<br />    for event in pygame.event.get&#40;&#41;:<br />        if event.type == pygame.QUIT:<br />            sys.exit&#40;&#41;<br />        elif event.type == pygame.KEYDOWN:<br />            if event.key == pygame.K_LEFT:<br />                trainer_left =  trainer_left - 10       <br />                x = x-10<br />            if event.key == pygame.K_RIGHT:<br />                trainer_left = trainer_left + 10<br />                x = x+10<br />            if event.key == pygame.K_SPACE:<br />                screen.blit&#40;pokebola.image,pokebola.rect.center&#41;<br />                screen.blit&#40;trainer2, &#40;trainer_left,trainer_top&#41;&#41;<br />                pokebola.update&#40;&#41;<br /><br />        <br />    pygame.display.update&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2520">birria4</a> — Lun Oct 10, 2011 2:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[birria4]]></name></author>
<updated>2011-10-07T23:00:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6072#p6072</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6072#p6072"/>
<title type="html"><![CDATA[Re: Balas en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6072#p6072"><![CDATA[
gracias infinitamente la verdad no he checado estoy en otra pc que no es mia pero pues gracias por ayudarme.<br />creo que tienes razon en lo del update() no lo use quisa sea eso en fin este esta mas claro y limpio intentare haber que pasa... saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2520">birria4</a> — Vie Oct 07, 2011 11:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-07T04:15:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6062#p6062</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6062#p6062"/>
<title type="html"><![CDATA[Re: Balas en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6062#p6062"><![CDATA[
Bueno, es una pregunta interezante <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br />creo que tu problema esta en el método &quot;update()&quot; de la bala <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.  Si se mueve, asumo que escribiste de forma que solo se moviera cuando se presione una tecla...<br />intenta remplazar la clase del sprite de la bala por esto:<br /><pre class="prettyprint linenums">class Bala&#40; pygame.sprite.Sprite &#41;:  #&quot;heredamos&quot; los métodos de la clase Sprite nativa en pygame<br />    def __init__&#40;self, pos_i_x, pos_i_y &#41;: #inicializamos la clase con dos valores, de la posición inicial en &quot;x&quot; y en &quot;y&quot;<br />        pygame.sprite.Sprite.__init__&#40;self&#41; #inicializamos la clase que heredamos...<br />       <br />        #en la linea siguiente, cargamos la imagen...<br />        self.image = TuFuncionParaCargarImagenes&#40;dirección_de_la_imagen&#41; #asumo, ya la tienes hecha <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />        <br />        self.rect = self.image.get_rect&#40;&#41; #obtenemos las &quot;rectas&quot; de nuestra imagen...<br />        <br />        self.rect.center = &#40;pos_i_x, pos_i_y&#41; #colocamos la imagen en la posición inicial <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />        <br />       #ahora, definiremos la velocidad de nuestra bala <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />       self.dx = 0   # la velocidad en x <br />       self.dy = -3 # la velocidad en y, recuerda por que es negativa <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br /><br />    def update&#40;self&#41;:<br />        self.rect.move_ip&#40;&#40;self.dx, self.dy&#41;&#41; #esto mueve continuamente nuestra bala<br /><br />        if self.rect.y &lt; 0 : #esto revisa si la bala sale por la parte superior de la pantalla <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />            self.kill&#40;&#41; #... y la destruye si sale</pre><br /><br />Espero que eso sea lo que buscas, si no... bueno... ¿podridas mostrar el código para ver exactamente si ese es el problema? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> . Y si tienes dudas, solo dilo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Oct 07, 2011 4:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[birria4]]></name></author>
<updated>2011-10-07T02:39:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6061#p6061</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6061#p6061"/>
<title type="html"><![CDATA[Balas en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1307&amp;p=6061#p6061"><![CDATA[
hola soy medio nuevo en esto de pygame y pues me cuesta trabajo mover sprites de forma continua si puedo moverlos cuando digo si presiona tecla tal mover sprite el problema viene cuando quiero hacerlo de forma continua como por ejeplo disparar una bala que siga su trayectoria y no solo avance un espacio.<br />cuando muevo imagenes normales no hay problema, pero quiero hacer colisiones y para eso ocupo hacer sprites pero el sprite no se mueve como quiero alguien puede darme un ejemplo porfavor ya me cheque los tutoriales y manejan clases si entiendo un poco pero el unico codigo que he encontrado con las caracteristicas que quiero es el de space invaders de esta pagina pero el codigo es muy largo y me confunde y no entiendo alguien me podria porfavor poner un codigo de como mover sprites de forma continua al presionar una tecla <br />gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2520">birria4</a> — Vie Oct 07, 2011 2:39 am</p><hr />
]]></content>
</entry>
</feed>