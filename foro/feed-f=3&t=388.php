<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=388" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-21T21:58:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=388</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-21T21:58:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4179#p4179</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4179#p4179"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4179#p4179"><![CDATA[
no hay problema alguno. De hecho yo seguí esa ruta. Aunque ahora te recomendaría más pySFML (muy parecido a SDL) que me parece mucho mejor que SDL<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Sep 21, 2010 9:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-21T19:41:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4178#p4178</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4178#p4178"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4178#p4178"><![CDATA[
A lo mejor esta pregunta es un poco tonta o innecesaria, pero quería preguntar si puedo desechar SDL para dedicarme enteramente a pygame. Sé que una es parte de la otra.. es  como usar SDL en python. Pero con pygame todo me es más cómodo. ¿Si hago esto no pierdo nada eh?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mar Sep 21, 2010 7:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-17T18:01:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4125#p4125</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4125#p4125"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4125#p4125"><![CDATA[
buenas yasser<br /><br />No se cual es tu problema, porque a mi más o menos me funcionaba. Posteo lo que tengo y te comento<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class GuitarHero(pygame.sprite.Sprite):<br />    def __init__(self, pos):<br />        pygame.sprite.Sprite.__init__(self)<br />        self.image, self.rect = load_image('mono_grita.png')<br />        self.rect.center = pos<br />        self.anim_frame=0<br />       <br />    def update(self):<br />        self.animame()<br />    def animame(self):<br />        strip_path = 'data/scot000%d.png'<br />        self.anim_frame+=1<br />        if self.anim_frame&gt;6:<br />            self.anim_frame=1<br />       <br />        self.image, self.rect=load_image(strip_path % self.anim_frame)<br />        #scr.blit(image_fondo,(0,0))<br />        #scr.blit(self.image,self.rect.center)<br /></code></dd></dl><br /><br />Fijate en las dos lineas comentadas. En mi opinion no son correctas por lo siguiente:<br />* Cuando yo llamo a animame, no espero que me dibujen nada, y menos algo que no tiene nada que ver con el fondo.<br />* Si te fijas, los spritegroups ya traen métodos para dibujar(draw), asi que con establecer self.image me valdria, ya que como lo tenias dibujaba dos veces la imagen.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>while True:<br />   <br />    for e in pygame.event.get():<br />        if e.type==pygame.KEYDOWN:<br />            pygame.quit()<br />        if e.type==pygame.MOUSEBUTTONDOWN:<br />            pos = e.pos<br />            new_hero = GuitarHero(pos)<br />            sprites.add(new_hero)<br />    sprites.update()<br />    sprites.draw(scr)<br />    pygame.display.flip()<br /></code></dd></dl><br />Si te fijas e cambiado lo de obtener la posición del ratón. Aunque no suponga un cambio drástico, ten en cuenta que cuando yo pulso el ratón, quiero que se dibuje donde pulsé, no donde está en el momento en el que proceso el evento.<br /><br />Tema aparte: acuérdate de lo que te dijo hugo. No te lo tomes a mal, pero tienes que aprender a buscar este tipo de cosas por ti mismo, básicamente porque:<br />* Es más rápido que esperar a que te contestemos<br />* Aprenderás más, ya que de esta forma siempre acabamos dándote la solución<br /><br />En mi caso, por ejemplo, cada vez que posteas alguna pregunta, tengo que revisar la documentación de pygame, ya que llevo más de un año sin programar en python. Con esto lo que te quiero decir es que en realidad lo que cuenta como &quot;programador&quot; no es que sepas más o menos de esto, sino que sepas como crear soluciones, y sobre todo, como buscarte la información que necesitas, como la documentación de Pygame en este caso<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Sep 17, 2010 6:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-17T16:18:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4123#p4123</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4123#p4123"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4123#p4123"><![CDATA[
Hola a todos:<br /><br /> vean este código que no hay manera de que me salga bien. Lo que quiero es que aparezca un sprite en la posición del mouse cuando haga cick, y todo lo que hace es aparecer en el mismo lugar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> import os,sys<br />import pygame<br />from pygame.locals import *<br /><br />WIDTH  = 640<br />HEIGHT = 480<br /><br /><br />def load_image(nombre):<br />    imagen=pygame.image.load(nombre)<br />    img_rc=imagen.get_rect()<br />    return imagen, img_rc<br /><br /><br />class GuitarHero(pygame.sprite.Sprite):<br />    def __init__(self, pos):<br />        pygame.sprite.Sprite.__init__(self)<br />        self.image, self.rect = load_image('data/scot0001.png')<br />        self.rect.center = pos <br />        self.anim_frame=0<br />        <br />    def update(self):<br />        self.animame()<br />    def animame(self):<br />        strip_path = 'data/scot000%d.png'<br />        self.anim_frame+=1<br />        if self.anim_frame&gt;6:<br />            self.anim_frame=1<br />        <br />        self.image, self.rect=load_image(strip_path % self.anim_frame)<br />        pygame.time.delay(90)<br />        scr.blit(image_fondo,(0,0))<br />        pos = pygame.mouse.get_pos()<br />        scr.blit(self.image,self.rect.center)<br /><br /><br />pygame.init()<br /><br />scr=pygame.display.set_mode((WIDTH, HEIGHT))<br />pygame.display.set_caption('Multiple Sprites')<br />pygame.display.flip()<br /><br />fondo=pygame.Surface(scr.get_size())<br />fondo=fondo.convert()<br />image_fondo=pygame.image.load('data/fondo.png')<br />fondo.blit(image_fondo,(0,0))<br />scr.blit(fondo,(0,0))<br />pygame.display.flip()<br /><br />sprites = pygame.sprite.RenderClear()<br /><br />while True:<br />    <br />    for e in pygame.event.get():<br />        if e.type==pygame.KEYDOWN:<br />            pygame.quit()<br />        if e.type==pygame.MOUSEBUTTONDOWN:<br />            pos = pygame.mouse.get_pos()<br />            new_hero = GuitarHero(pos)<br />            sprites.add(new_hero)<br />            pygame.time.delay(900)<br />    sprites.update()<br />    scr.blit(fondo,(0,0))<br />    sprites.draw(scr)<br />    pygame.display.flip()        <br />            <br /></code></dd></dl>            <br />            <br />El sprite aparece siempre en el mismo lugar. Si quieren pueden probar poniendo sus propios grupos de imagenes para la animación o borrar la funcion de animación. Sólo me interesa saber que estoy haciendo mal. He creado este proyecto fijandome en el proyecto 'nieve' de Hugo Ruscitti y el 'invaders' de Juan Guerrero.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Vie Sep 17, 2010 4:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-09-17T01:45:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4115#p4115</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4115#p4115"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4115#p4115"><![CDATA[
<blockquote class="uncited"><div><br />Realmente había subestimado al pygame poniendolo por debajo del GameMaker (aunque hablando de sprites y colisiones GameMaker le da 1000 de ventaja)<br /></div></blockquote><br /><br />No sabes ni lo que estas diciendo. Pygame es un biblioteca gráfica para Python, por lo que se encarga de gestionar todo el tema de multimedia. ¿Quieres un buen sistema de sprites? Programalo. ¿Quieres un buen sistema de colisiones? Programalo.<br /><br />Olvídate de comarar un lenguaje y una biblioteca con un  &quot;Game Maker&quot; te aseguro que todo lo que puedes hacer en game maker lo puedes hacer en python + bibliotecas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Vie Sep 17, 2010 1:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-16T17:40:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4114#p4114</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4114#p4114"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4114#p4114"><![CDATA[
algunos comentarios a primera vista:<br /><br />* Nunca cargues un archivo más de una vez. Es el caso de las imágenes y el sonido en tu caso. Guarda una lista de las imágenes dentro del héroe y en función del estado puedes ir seleccionando la imagen.<br /><br />mira tu init:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def __init__(self):<br /><br />        #se inicia la instancia de pygame de sprites<br /><br />        pygame.sprite.Sprite.__init__(self)<br /><br />        self.image, self.rect=load_image('data/hero.png')<br /><br />        self.rect.midbottom=pos=&#91;40,540&#93;<br /><br />        self.walking=0<br /><br />        self.pos=0<br /><br />        self.anim_frame=0<br /></code></dd></dl><br />Fijate que parece que asignas 2 veces un valor a pos.<br /><br />En cuanto a lo de mover... prueba a utilizar esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def update(self):<br /><br />        teclas = pygame.key.get_pressed()<br /><br />        dx = 0<br />        dy = 0<br />        if teclas&#91;K_LEFT&#93;:<br /><br />            self._walk()<br /><br />            dx = -5<br />        elif teclas&#91;K_RIGHT&#93;:<br /><br />           self._walk()<br />           dx = 5<br />        if teclas&#91;K_UP&#93;:<br /><br />            self._walk()<br /><br />            dy = -5<br />        elif teclas&#91;K_DOWN&#93;:<br /><br />            self._walk()<br /><br />            dy = 5<br /><br />        if teclas&#91;K_SPACE&#93;:<br /><br />            pygame.time.delay(80)<br /><br />            self._ataca()<br /><br />        if teclas&#91;K_k&#93;:<br /><br />            self.kill()<br /><br />            <br /><br />        self.rect.move_ip(dx, dy)        <br /><br />        self.pos=self.rect.topleft<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Sep 16, 2010 5:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-16T15:21:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4113#p4113</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4113#p4113"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4113#p4113"><![CDATA[
Hola a todos:<br /><br /> Al fin he logrado hacer que un sprite se mueva. Realmente había subestimado al pygame poniendolo por debajo del GameMaker (aunque hablando de sprites y colisiones GameMaker le da 1000 de ventaja). Este es el proyecto que hice ayer en casa. Necesito que lo vean y me digan que les parece. Luego me dicen como hacerle un Flip Vertical para invertir al 'héroe'. Hoy descubrí como hacerle un snapshot a la pantalla. Ya sin más chachara, mi proyecto:<br /><br /><br />los controles son :<br />SPACE para atacar<br />LEFT/RIGHT/UP/DOWN: para moverse<br />(cheken y diganme por ké no se mueve en diagonal)<br />(P.D: los sprites son de un DevinArt de  Paul Robertson... creo )<br /><br /><a href="http://www.2shared.com/file/paKOsTQu/yasser_demo.html" class="postlink">http://www.2shared.com/file/paKOsTQu/yasser_demo.html</a><br /><a href="http://www.2shared.com/fadmin/16248420/7210ffea/yasser_demo.rar.html" class="postlink">http://www.2shared.com/fadmin/16248420/7210ffea/yasser_demo.rar.html</a><br /><br /><br />Esto fue posible gracias a los ejemplos que hay subidos a la Comunidad. Los<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Jue Sep 16, 2010 3:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-15T14:10:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4112#p4112</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4112#p4112"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4112#p4112"><![CDATA[
prueba a cambiar la comilla en el texto(en vez de usar ' usa &quot;)<br />Y edita los posts anteriores para  ponerles lo de [codigo] anda<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Sep 15, 2010 2:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-15T14:06:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4111#p4111</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4111#p4111"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4111#p4111"><![CDATA[
Este es otro problema. Quiero poner un texto pero pygame me retorna un error dicendome <span style="font-style: italic">Text has zero width</span> y no entiendo que es lo que quiere decir. Este es el código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> fondo=pygame.Surface(scr.get_size())<br />fondo=fondo.convert()<br /><br /><br />fnt=pygame.font.Font(None,32)<br />texto=fnt.render('Hero with a skateboard',1,(10,20,30))<br />texto_pos=&#91;10,10&#93;<br />fondo.blit(texto,texto_pos)<br />scr.blit(fondo,(0,0))<br /></code></dd></dl><br /><br />scr es la pantalla y fondo es un Surface de fondo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mié Sep 15, 2010 2:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-14T22:35:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4109#p4109</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4109#p4109"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4109#p4109"><![CDATA[
buenas yasser...<br />En el primero creo que el problema viene dado porque solo muestras una vez la pantalla, prueba a poner el pygame.display.flip() dentro del bucle del juego<br /><br />Para el segundo, editalo antes y ponle la etiqueta al código.( [&quot;code][&quot;/code]  sin las comillas)<br /><br />Código sin etiquetas<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> Codigo con etiquetas</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Sep 14, 2010 10:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-14T20:31:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4108#p4108</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4108#p4108"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4108#p4108"><![CDATA[
Hola, revisen mmi codigo, ambos<br /><br />en este kiero mover el sprite con el teclado<br /><br />import pygame,sys<br />from pygame.locals import *<br /><br /><br />def load_image(nombre):<br />    image=pygame.image.load(nombre)<br />    image_rect=image.get_rect()<br />    return image, image_rect<br /><br />class Heroe(pygame.sprite.Sprite):<br />    def __init__(self):<br />        #se inicia la instancia de pygame de sprites<br />        pygame.sprite.Sprite.__init__(self)<br />        self.image, self.rect=load_image('data/hero.png')<br />        self.rect.move_ip(40,240)<br />    def update(self):<br />        pos=[self.rect.x,self.rect.y]<br />        self.rect.move_ip(pos)<br /><br />    def walk_on(self,x,y):<br />        self.x=self.rect.x=40<br />        self.y=self.rect.y=400<br />        newpos=self.rect.move((self.x,self.y))<br />        self.rect=newpos<br />        <br />                <br />            <br />                <br />        <br />pygame.init()<br /><br />img,img_rc=load_image('data/fondo.jpg')<br /><br />wid,hei=[img_rc.width,img_rc.height]<br /><br />fondo_pos=[ wid, hei]<br /><br /><br />scr=pygame.display.set_mode((wid,hei))<br />pygame.display.set_caption('Manejando un Sprite')<br />pygame.display.flip()<br /><br />fondo=pygame.Surface(scr.get_size())<br />fondo=fondo.convert()<br />fondo.blit(img,fondo_pos)<br /><br />scr.blit(img,(0,0))<br />pygame.display.flip()<br /><br /><br />hero=Heroe()<br />hero_sprite=pygame.sprite.RenderPlain((hero))<br />hero_sprite.update()<br />hero_sprite.draw(scr)<br />pygame.display.flip()<br /><br /><br />reloj=pygame.time.Clock()<br /><br />while True:<br />    for evt in pygame.event.get():<br />        if evt.type==pygame.QUIT:<br />            pygame.quit()<br />        if evt.type==pygame.KEYDOWN:<br />            if evt.key in [K_LEFT, K_a]:<br />                hero.walk_on(5,0) <br />            <br />        <br /><br />y en este kiero kitar el pestañeo<br /><br />import pygame,sys<br />from pygame.locals import *<br /><br /><br />def load_image(nombre):<br />    image=pygame.image.load(nombre)<br />    image_rect=image.get_rect()<br />    return image, image_rect<br /><br />class Heroe(pygame.sprite.Sprite):<br />    def __init__(self):<br />        #se inicia la instancia de pygame de sprites<br />        pygame.sprite.Sprite.__init__(self)<br />        self.image, self.rect=load_image('data/hero.png')<br />        self.rect.move_ip(40,240)<br />    def update(self):<br />        pos=pygame.mouse.get_pos()<br />        self.rect.center=pos<br /><br /><br /><br /><br /><br />pygame.init()<br /><br />img,img_rc=load_image('data/fondo.jpg')<br /><br />wid,hei=[img_rc.width,img_rc.height]<br /><br />fondo_pos=[ wid, hei]<br /><br /><br />scr=pygame.display.set_mode((wid,hei),DOUBLEBUF)<br />pygame.display.set_caption('Manejando un Sprite')<br />pygame.display.flip()<br /><br /><br />fondo=pygame.Surface(scr.get_size())<br />fondo=fondo.convert()<br />fondo.blit(img,fondo_pos)<br /><br /><br /><br />scr.blit(fondo,(0,0))<br />pygame.display.flip()<br /><br /><br />scr.blit(img,(0,0))<br />pygame.display.flip()<br /><br /><br />hero=Heroe()<br />hero_sprite=pygame.sprite.RenderPlain((hero))<br />hero_sprite.update()<br />hero_sprite.draw(scr)<br />pygame.display.flip()<br /><br />reloj=pygame.time.Clock()<br /><br />reloj=pygame.time.Clock()<br /><br />while True:<br />    reloj.tick(60)<br />    for evt in pygame.event.get():<br />        if evt.type==pygame.QUIT:<br />            pygame.quit()<br />        if evt.type==KEYDOWN:<br />            if evt.key==K_ESCAPE:<br />                pygame.quit()<br /><br />        scr.blit(fondo,(0,0))<br />        pygame.display.flip()<br />        scr.blit(img,(0,0))<br />        pygame.display.flip()    <br />        hero_sprite.update()<br />        scr.blit(img,fondo_pos)<br />        hero_sprite.draw(scr)<br />        pygame.display.flip()<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mar Sep 14, 2010 8:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-13T14:18:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4096#p4096</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4096#p4096"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4096#p4096"><![CDATA[
Les dije que venía con más preguntas y dudas. he aquí una. Estaba haciendo un programa basado en ejemplo para cargar videos en python. el código fue el siguiente:<br /><br />import pygame,sys, os<br />from pygame.locals import *<br /><br />pygame.init()<br />scr=pygame.display.set_mode((800,600))<br />pygame.display.set_caption('Displaying video...')<br /><br />pygame.display.flip()<br /><br />video=pygame.movie.Movie('mi video.mpg')<br />video.play()<br /><br />while True:<br />    for evt in pygame.event.get():<br />        if evt.type==pygame.QUIT:<br />            peli.stop()<br />            pygame.quit()<br /><br /><br />Aún así el video no sale. ¿Qué me está faltando?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Lun Sep 13, 2010 2:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-09-01T18:36:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4019#p4019</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4019#p4019"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=4019#p4019"><![CDATA[
sí, ya me bajé unas cuantas cosas. Luego entonces, me pondré a leerlas y tomar nota. Gracias comunidad, son lo maximo. Luego vendré con más preguntas y dudas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mié Sep 01, 2010 6:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-31T19:20:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=3997#p3997</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=3997#p3997"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=3997#p3997"><![CDATA[
<a href="http://www.losersjuegos.com.ar/referencia/libros" class="postlink">http://www.losersjuegos.com.ar/referencia/libros</a> aqui tienes unas serie de tutoriales, SDL, python, C++, todo lo necesario para empezar con videjuegos<br />esta en esa pagina, asi que a leer mucho. Tambien bajate algunos ejemplos de esta web que esten hechos con pygame y tambien aprenderas de esa forma<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ago 31, 2010 7:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-31T17:59:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=3995#p3995</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=3995#p3995"/>
<title type="html"><![CDATA[Re: Tutoriales y Ayudas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=388&amp;p=3995#p3995"><![CDATA[
No sé si será spam por ser mi propio blog, pero aquí tienes un tuto de pygame que hice: <!-- m --><a class="postlink" href="http://razonartificial.com/tutoriales-pygame/">http://razonartificial.com/tutoriales-pygame/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Mar Ago 31, 2010 5:59 pm</p><hr />
]]></content>
</entry>
</feed>