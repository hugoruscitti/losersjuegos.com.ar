<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=309" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-05-05T18:27:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=309</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-05-05T18:27:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1335#p1335</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1335#p1335"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1335#p1335"><![CDATA[
<blockquote><div><cite>PLC escribió:</cite><br />Eso era lo que me hacia falta realmente, pero me surge un nuevo problema, que pasa, supongamos que en vez de un cofre, tenemos tres cofres y queremos que el primero se abra o cierre si apretamos space, y que los otros dos hagan los mismo si apretamos otras teclas respectivamente.<br /></div></blockquote><br /><br />Tendrías que ver como hacer esto en el ejemplo que te envié, <br />es muy sencillo de lograr. Ten en cuenta que debes llamar<br />todo el tiempo a la función update por cada caja (o flor).<br /><br />PD: y usa la etiqueta &quot;code&quot; si quieres colocar código en el foro.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun May 05, 2008 6:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-05-05T05:40:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1329#p1329</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1329#p1329"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1329#p1329"><![CDATA[
Eso era lo que me hacia falta realmente, pero me surge un nuevo problema, que pasa, supongamos que en vez de un cofre, tenemos tres cofres y queremos que el primero se abra o cierre si apretamos space, y que los otros dos hagan los mismo si apretamos otras teclas respectivamente. Digo esto porque en mi juego tengo tres flores y la animacion no se pude ver en todas al mismo tiempo, sino en la flor donde el personeje le pase por encima, intente lograr esto pasandole a la funcion update del cofre el objeto de mi personaje, y el numero de la flor, para despues preguntar por la posicion de mi personaje y el numero de la flor valga la redundancia, pero no me pincha ningun invento.<br /><br /><br />import pygame<br />from pygame.sprite import Sprite<br /><br /><br />class Comedora(Sprite):<br />    def __init__(self,x,y):<br />        Sprite.__init__(self)<br /><br />        self.cargar_imagenes()<br />        self.change_state(Cerrada(self))<br />        self.rect = self.cerrada.get_rect()<br />        self.rect.move_ip(x, y)<br /><br /> <br />    def cargar_imagenes(self):<br />        self.cerrada = pygame.image.load('img/comedora_0.bmp')<br />        self.cerrada.set_colorkey((255, 255, 255))<br />        self.cerrada.convert_alpha()<br /><br />        self.abriendo = pygame.image.load('img/comedora_1.bmp')<br />        self.abriendo.set_colorkey((255, 255, 255))<br />        self.abriendo.convert_alpha()<br /><br />        self.abierta = pygame.image.load('img/comedora_2.bmp')<br />        self.abierta.set_colorkey((255, 255, 255))<br />        self.abierta.convert_alpha()<br />        self.frames=[self.cerrada,self.abriendo,self.abierta]<br /><br />    def change_state(self, state):<br />        self.state = state<br /><br />    def set_frame(self, index):<br />        self.image = self.frames[index]<br /><br /><br />  <br />    def update(self,zeek,n):<br />        if(zeek.rect.x==213 and zeek.rect.y==2 and n==1):<br />          self.state.update(zeek,n)<br />        elif(zeek.rect.x==35 and zeek.rect.y==37 and n==2):<br />          self.state.update(zeek,n)<br />        if(zeek.rect.x==426 and zeek.rect.y==108 and n==3):<br />          self.state.update(zeek,n)<br /><br />   <br />class Cerrada:<br /><br />    def __init__(self, comedora):<br />        self.comedora = comedora<br />        self.comedora.set_frame(0)<br /><br />    def update(self,zeek,n):<br />         if(zeek.rect.x==213 and zeek.rect.y==2 and n==1):<br />          self.comedora.change_state(Abriendo(self.comedora))<br />         elif(zeek.rect.x==35 and zeek.rect.y==37 and n==2):<br />          self.comedora.change_state(Abriendo(self.comedora))<br />         elif(zeek.rect.x==426,zeek.rect.y==108,n==3):<br />          self.comedora.change_state(Abriendo(self.comedora))<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Abierta:<br /><br />    def __init__&#40;self, comedora&#41;:<br />       self.comedora = comedora<br /><br />    def update&#40;self,zeek,n&#41;:<br />      if&#40;zeek.rect.x==213 and zeek.rect.y==2 and n==1&#41;:<br />        self.comedora.change_state&#40;Cerrando&#40;self.comedora&#41;&#41;<br />      elif&#40;zeek.rect.x==35 and zeek.rect.y==37 and n==2&#41;:<br />        self.comedora.change_state&#40;Cerrando&#40;self.comedora&#41;&#41;<br />      elif&#40;zeek.rect.x==426,zeek.rect.y==108,n==3&#41;:<br />        self.comedora.change_state&#40;Cerrando&#40;self.comedora&#41;&#41;<br /><br />class Abriendo:<br /><br />    def __init__&#40;self, comedora&#41;:<br />        self.comedora = comedora<br />        self.frames = &#91;2,3&#93;<br />        self.delay = 0<br /><br />    def update&#40;self,zeek,n&#41;:<br />        self._update_animation&#40;&#41;<br /><br />    def _update_animation&#40;self&#41;:<br />        self.delay -= 1<br />        if self.delay &lt;= 0:<br />            self.delay = 20<br />            try:<br />                next_frame = self.frames.pop&#40;0&#41;<br />                print next_frame<br />                self.comedora.set_frame&#40;next_frame -1&#41;<br />            except:<br />                print &quot;El cofre a terminado de abrirse.&quot;<br />                self.comedora.change_state&#40;Abierta&#40;self.comedora&#41;&#41;<br /><br />class Cerrando:<br /><br />    def __init__&#40;self, comedora&#41;:<br />        print &quot;Entrando en el estado:&quot;, self<br />        self.comedora = comedora<br />        #self.frames = &#91;2, 3&#93;&#91;::-1&#93;<br />        self.frames = &#91;3, 2&#93;<br />        self.delay = 0<br /><br />    def update&#40;self,zeek,n&#41;:<br />        self._update_animation&#40;&#41;<br /><br />    def _update_animation&#40;self&#41;:<br />        self.delay -= 1<br /><br />        if self.delay &lt;= 0:<br />            self.delay = 20<br />            try:<br />                next_frame = self.frames.pop&#40;0&#41;<br />                self.comedora.set_frame&#40;next_frame -1&#41;<br />            except:<br />                print &quot;El cofre ya se ha cerrado.&quot;<br />                self.comedora.change_state&#40;Cerrada&#40;self.comedora&#41;&#41;</code></dd></dl><br /><br />En progama principal crearia mis flores comedoras<br />comedora1=Comedora(214,37)<br />comedora2=Comedora(34,72)<br />comedora3=Comedora(427,143)<br /><br />En ciclo principal de juego tendria entonces que llamar a<br />comedora1.update(zeek,1)   <br />comedora2.update(zeek,2)   <br />comedora3.update(zeek,3) <br /><br />pero este invento no me pincha<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Lun May 05, 2008 5:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-05-01T00:19:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1288#p1288</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1288#p1288"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1288#p1288"><![CDATA[
Saludos, tu consulta se puede resolver utilizando dos técnicas: por un lado<br />tienes la necesidad de mostrar animaciones a poca velocidad y por otro la<br />administración de varios estados.<br /><br />Las animaciones se pueden gestionar mediante contadores, no es muy complejo. Una<br />buena forma de implementarlo es con un contador.<br /><br />El tema de los estados es un poco mas difícil, hay un artículo en la web que<br />trata sobre el tema (autómatas) aunque esa no es la única forma de manejarlos.<br /><br />En este mensaje me he tomado el tiempo de escribir un programa de ejemplo que<br />hace algo similar a lo que necesitas:<br /><br />  <img src="http://www.losersjuegos.com.ar/incoming/descargas/20080430/cofre.png" alt="Imagen" /><br /><br />  <ul>Descargar <a href="http://www.losersjuegos.com.ar/incoming/descargas/20080430/cofre.tar.gz" class="postlink">http://www.losersjuegos.com.ar/incoming/descargas/20080430/cofre.tar.gz</a></ul><br /><br />El programa de ejemplo muestra una caja, cuando pulsas la tecla espacio la<br />caja se abre (si estaba cerrada) o se cierra (si estaba abierta).<br /><br />Sería bueno que lo analices con miras a adaptarlo a tu programa. Pero claro, ten<br />en cuenta que al principio puede parecer mas complicado de lo que en realidad<br />es.<br /><br />A grandes rasgos, puedes pensar que la Flor (o planta carnívora) es un objeto<br />que puede &quot;estar&quot; en uno de los siguientes estados:<br />    <br />- Abierta<br />- Cerrada<br />- Abriéndose<br />- Cerrándose<br /><br />cada uno de estos estados se puede diseñar mediante objetos diferentes, y a su vez, la<br />Flor puede ser un objeto que tiene una referencia al objeto de estado actual. Un lio...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue May 01, 2008 12:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-04-30T16:03:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1285#p1285</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1285#p1285"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1285#p1285"><![CDATA[
No creo que te sirva migrar el codgio, o si eso queda a tu criterio.<br /><br />en c++/sdl<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;SDL/SDL.h&quot;<br /><br />int ticks_ini;<br />int ticks_fin;<br /><br />void ResetTime&#40;&#41;<br />&#123;<br />    ticks_ini = SDL_GetTicks&#40;&#41;;<br />&#125;<br /><br />int GetCurrentTime&#40;&#41;<br />&#123;<br />    ticks_fin = SDL_GetTicks&#40;&#41;;<br />    return ticks_fin - ticks_ini;<br />&#125;<br /><br />// Aqui ya tienes las funciones que te manejaran el timer con resolucion de milisegundos<br />//ahora imagina que tiene ya tu loop implementado<br /><br />int main&#40;&#41;<br />&#123;<br />//cosas que desees hacer<br />     MOSTRA_ANIM_CERRADA&#40;&#41;;<br /><br />     if &#40;esta_encima == true&#41;<br />     &#123;<br />         MOSTRA_ANIM_ABIERTA&#40;&#41;;<br />         ResetTime&#40;&#41;; //reseteamos el contador<br />         while &#40;GetCurrentTime&#40;&#41; &lt; 20&#41;&#123;&#125;   // Esto quiere decir que mientras el contador retorne numeros menor a 20 que no haga nada, cada unidad representa 1 ms.<br />         <br />     &#125;<br /><br />&#125;<br /><br /></code></dd></dl><br />fijate creo que podes hacerlo tranquilamente con pyton, pero la verdad que si te digo te miento, de todos modos los timers son cosa de cada dia, asi que pyton es seguro que tendra una libreria para manejo de timers.[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Mié Abr 30, 2008 4:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-30T03:12:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1278#p1278</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1278#p1278"/>
<title type="html"><![CDATA[PLC]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1278#p1278"><![CDATA[
En lo que me propone juan carlos no veo nada de timer, sino una variable que se decrementa y se comprueba su valor, casi lo mismo que tengo hecho, ya se que FPS es frames por segundos, ahora si mi problema se puede resolver con eso me haria falta algun ejemplo en python, o en c++ con sdl y tal vez pudiera migra el codigo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mié Abr 30, 2008 3:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-04-29T19:58:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1277#p1277</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1277#p1277"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1277#p1277"><![CDATA[
bueno, mucho de pyt no se, pero por lo que veo, vos lo que tenes es un CONTADOR, que decrementa, imagina tu le pusiste un numero en este caso fue<br /><br />1000000 ten en cuenta que esos no son milisegundos.<br /><br />y a las velocidades que corren las PC hoy en dia, ese Delay que le diste es casi NULO, es por eso que no debes ver la &quot;animacion&quot;<br /><br />lo que te propuso Juan Carlos es que uses un Timer, que cuente 1 ms<br /><br />de manera que, suponiendo que este el personaje sobre la flor, cuente 10 mS para empezar a abrirse.<br />cuente 20 mS que va a mostar la animacion de la flor abierta<br />y que una vez trancurridos esos 30 mS que mostres la animacion del char comido.<br /><br />con gusto te ayudaria a implementar FPS, pero de pyton voy muerto.<br /><br />ojo, no confundas FPS con timers. si no sabes lo que son los FPS pregunta y te lo respondere.<br /><br />Saludos Lucesita.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Mar Abr 29, 2008 7:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-29T18:58:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1276#p1276</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1276#p1276"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1276#p1276"><![CDATA[
La funcion abrirse completa, me falto un pedazo de como la tengo hasta ahora <br /><br /><br />Me falto un pedazo de la funcion<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def abrirse&#40;self,n&#41;:<br />         if&#40;self.flag == 1&#41;:<br />              self.image = self.normal<br />              self.flag = 0<br />              return 0<br />         elif self.flag == 0:<br />              self.image = self.abriendo<br />              self.delay = 1000000<br />              while self.delay &gt;= 1:<br />               self.delay = self.delay - 1<br />              if self.delay &lt; 1:<br />                    self.image = self.abierta<br />              self.flag = 3<br />              return 0<br />         elif self.flag == 3 and n == 1:<br />              self.image=self.comido<br />              self.flag = 1<br />              return 1</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mar Abr 29, 2008 6:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-29T18:50:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1275#p1275</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1275#p1275"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1275#p1275"><![CDATA[
Eso me parece que no me va resolver el problema por se veria muy rapido de hecho es casi la misma idea de como yo lo tengo<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>self.flag = 0<br />def abrirse&#40;self,n&#41;:<br />         if&#40;self.flag == 1&#41;:<br />              self.image = self.normal<br />              self.flag = 0<br />              return 0<br />         elif self.flag == 0:<br />              self.image = self.abriendo<br />              self.delay = 1000000<br />              while self.delay &gt;= 1:<br />               self.delay = self.delay - 1<br />              if self.delay &lt; 1:<br />                    self.image = self.abierta<br />              self.flag = 3<br />              return 0</code></dd></dl><br /><br />y para controlar si se come al personaje por ejemplo hago esto<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if self.rect.x == 426  and self.rect.y == 107:<br />             if&#40;comedoras&#91;2&#93;.abrirse&#40;1&#41; == 1&#41;:<br />                 zeek.kill&#40;&#41;</code></dd></dl><br /><br />self.rect.x == 426  y self.rect.y == 107 seria una posicion determinada en donde el personaje esta encima de la flor.<br /><br /><br />tal vez el controlador de frames del que hablas pero bueno no se realmente como implementar eso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mar Abr 29, 2008 6:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-04-29T13:51:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1268#p1268</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1268#p1268"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1268#p1268"><![CDATA[
Hola, tal vez la implementacion mas simple (y practica) sea utilizar un contador. Algo mas o menos asi:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> <br /><br />game loop &#123;<br /><br />...<br />...<br /><br />SI contador&gt;=0 Y contador&lt;10 ENTONCES<br />&#123;<br />    imprimir flor cerrada<br />&#125;<br />SI contador&gt;=10 Y contador&lt;20 ENTONCES<br />&#123;<br />    imprimir flor semiabierta<br />&#125;<br />SI contador&gt;=20 Y contador&lt;30 ENTONCES<br />&#123;<br />    imprimir flor abierta<br />    SI jugador esta en contacto con la flor ENTONCES<br />    &#123;<br />          jugador pierde<br />    &#125;<br />&#125;<br />SI contador&gt;=30 Y contador&lt;40 ENTONCES<br />&#123;<br />     imprimir flor entreabierta<br />&#125;<br />SI contador&gt;=40 ENTONCES<br />&#123;<br />     contador=0<br />&#125;<br /><br />contador=contador+1;<br /><br />...<br />...<br />&#125;<br /><br /></code></dd></dl><br /><br />Si el problema radica en la velocidad del juego total, intenta implementar un controlador de frames (FPS frames per seconds)<br /><br />Saludos[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mar Abr 29, 2008 1:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[PLC]]></name></author>
<updated>2008-04-29T07:48:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1266#p1266</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1266#p1266"/>
<title type="html"><![CDATA[Animacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=309&amp;p=1266#p1266"><![CDATA[
Yo tengo en el juego que estoy haciendo, un personaje y una flor.<br /><br />La flor esta en una determinada posicion y ademas puede estar abierta o cerrada, quiero que cuando mi personaje camine exactamente encima de la flor, esta cambie su estado, si esta cerrada que se abra y si esta abierta que se coma al personaje, por supuesto todos estos estados son imagenes. Ahora por ejemplo supongamos que mi flor esta cerrada, cuando mi personaje pasa por ecima de ella yo quiero que la flor cambie el estado pero lentamente, de hecho yo tengo una imagen que tiene a la flor semiabierta y otra abierta completamente, por lo que cuando mi personaje pasa por encima de la flor quiero dar la sensacion de que la flor abre sus petalos, como yo lo trate de hacer, paso por encima de ella pero es tan rapido que no se puede ver ese proceso en que la flor se abre poco a poco, para que me permita cuando pasa por encima de ella la primera vez si esta cerrada se abra y la sengunda vez  se coma al personaje, y no que pasa una sola vez y cambien todos los estado a la vez<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1886">PLC</a> — Mar Abr 29, 2008 7:48 am</p><hr />
]]></content>
</entry>
</feed>