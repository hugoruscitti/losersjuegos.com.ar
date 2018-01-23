<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=802" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-30T10:46:40+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=802</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-30T10:46:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3585#p3585</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3585#p3585"/>
<title type="html"><![CDATA[Re: Algoritmo persecución?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3585#p3585"><![CDATA[
una pequeña optimizacion ( sobre todo a nivel visual) y que es más natural para el ser humano es predecir donde estará el coche.<br /><br />Sería algo así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>    pos_siguiente = pos_actual + (velocidad * numero_de_segundos_que_predecimos)<br /></code></dd></dl><br /><br />y pasaríamos a perseguir dicha posición<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jul 30, 2010 10:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-07-30T02:03:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3584#p3584</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3584#p3584"/>
<title type="html"><![CDATA[Re: Algoritmo persecución?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3584#p3584"><![CDATA[
Hola, pues te traigo lo prometido, Segui la idea que havia propuesto, creo que quedo bien,  no se si querias un movimiento asi.Pero te dejo el video para que lo veas, <a href="http://www.youtube.com/watch?v=2LDH0p1XURg" class="postlink">http://www.youtube.com/watch?v=2LDH0p1XURg</a>, esta en baja la calidad por que el archivo en alta es demaciado grande.<br /><br />pues hay va como lo hice. primero el codigo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include&lt;game.h&gt;<br />#include&lt;math.h&gt;<br /><br />bool nearmodul(float a, float b, float range)<br />{<br />    if(a&lt;b)<br />    {<br />        return ((b-a)&lt;a+(range-b));<br />   <br />    }<br />    else<br />    {<br />        return ((a-b)&gt;(b+(range-a)));<br /><br />    }<br /><br /> }<br /><br />int main()<br />{<br /><br />    game g;<br />    g.init_video(800,600,32);<br /><br />g.scene.set_world(&quot;.http://losersjuegos.com.ar/foro/images/terreno/path&quot;);<br />g.scene.add_sprite(&quot;.http://losersjuegos.com.ar/foro/images/E-P8.854.png&quot;,1);<br /><br /><br /><br />g.scene.add_actor(0,true,true);<br />g.scene.add_actor(0,true,true);<br />g.scene.set_posicion_actor(0,punto(300,200));<br />g.scene.set_posicion_actor(1,punto(200,350));<br /><br />g.scene.set_actor_p_refer(0,punto(20,20));<br />g.scene.set_actor_p_refer(1,punto(20,20));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(7,3));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(29,2));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(29,12));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(37,13));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(37,27));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(30,28));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(29,37));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(7,37));<br />g.scene.entity_manager.actores&#91;0&#93;-&gt;object.add_punto(punto(7,3));<br />g.scene.entity_manager.actores&#91;1&#93;-&gt;object=g.scene.entity_manager.actores&#91;0&#93;-&gt;object;<br />bool done = true;<br />evento ev;<br />g.fps1=40;<br />int vel=0, ang=0,vel_p=0;<br />int cont=0;<br />punto scroll(0,0);<br />float angulo_p=0,retardo=0, angulo_parado=0;<br /><br /><br />while (done) {<br /><br />    ev.poll();<br />    ev.get_states_key();<br /><br />    if(cont%3==0)<br />    {<br />        <br />        angulo_p=360-angulo_2point(g.scene.entity_manager.actores&#91;0&#93;-&gt;get_posicion().neg(),g.scene.entity_manager.actores&#91;1&#93;-&gt;get_posicion().neg());<br />        if(vel_p==30)<br />        {<br />            if(abs(retardo-angulo_p)&gt;1.5){<br />            if(nearmodul(retardo,angulo_p,360))<br />            {<br />                retardo+=3;<br />                if(retardo&gt;360)retardo=0;<br /><br /><br />            }else<br />            {<br />                retardo-=3;<br />                if(retardo&lt;0)retardo=360;<br /><br />            }<br />            }<br />        }<br />   <br />    }<br /><br />    if (ev.test_state(SDLK_q)==true) done=false;<br />    if (ev.test_state(SDLK_UP)==true) vel=60;<br />    if (ev.test_state(SDLK_DOWN)==true) vel=-60;<br /><br />    if (ev.test_state(SDLK_w)==true)scroll.y-=1;<br />    if (ev.test_state(SDLK_s)==true)scroll.y+=1;<br />    if (ev.test_state(SDLK_a)==true)scroll.x-=1;<br />    if (ev.test_state(SDLK_d)==true)scroll.x+=1;<br />    if(cont%5==0){<br />        if (ev.test_state(SDLK_LEFT)==true) ang+=4;<br />        if (ev.test_state(SDLK_RIGHT)==true) ang-=4;<br />        if (ev.test_state(SDLK_f)==true)<br />    {<br /><br />        if(vel_p==0) {vel_p=30;retardo=angulo_parado;}<br />        else {vel_p=0;angulo_parado=angulo_p;}<br /><br />    }<br /><br />    }<br />    system(&quot;clear&quot;);<br />    cout&lt;&lt;&quot;Seek Behaivor\nF para activar desactivar perseguir&quot;&lt;&lt;endl;<br />    cout&lt;&lt;&quot;Angulo entre los dos: &quot;&lt;&lt; angulo_p&lt;&lt;&quot;\nAngulo que se ajusta: &quot;&lt;&lt;retardo&lt;&lt;endl;<br />    g.scene.set_scroll_mapa(scroll);<br />    g.scene.set_actor_vel(0,Vector(vel,ang));<br />    g.scene.set_actor_vel(1,Vector(vel_p,vel_p?retardo:angulo_parado));<br />    <br />    vel=0;<br />    g.render();<br />    g.time();<br />    cont++;<br />}<br /><br /><br />}</code></dd></dl><br /><br />pues la función nearmodul(float, float, float) evalua cual es la direccion mas corta para llegar a un numero que quiero, dentro de un rango de numeros, los cuales son como una lista circular, por ejemplo:<br /><br />1,2,3,4,5,6,7,8,9<br />Si parto del 2 y quiero llegar al 8 es mas rapido recorrer 2,1,9,8 que 2,3,4,5,6,7,8<br />Esta funcion la uso para saber si debo sumar o restar una constante a retardo, cuado retardo es menor a 0 regresa  a 360.<br />Esa comprobacion la hago solo cuando la diferencia entre los dos angulos es menor a 1.5, par que no se este tambalenado.<br />y el coche perseguidor lo muevo el angulo que lleva retardo, en esencia es llevar la variable retardo al valor del angulo entre los dos actores.<br /><br />esta implementacion la hice con un motor de juegos propio, pero la parte importante es esta.<br /><br />Ha lo que hace el coche perseguidor se le conoce como comportamientos, existen bibliotecas hechas para esta tarea, la unica que conozco es opensteer, pues creo que los desarrolladores crean sus propias funciones para manejar los comportamientos.y mi idea la tome de la forma en la que funcionan.<br />A cada actor se le puede agregar un comportamiento, en este caso seguir, pero que tal si quiero que varios coches lo sigan, para empezar debo evitar que los coche choquen entre ellos, lo cual es otro comportamiento, mantener una distancia, la funcion que realiza el comportamiento solo devuelve un vector,luego se la pasa a una funcion que priorise esos movimientos, para que el resultado sea, que sigua el coche, pero si alguno se hacerca demaciado se elejen sin perder el obejetivo principal que es seguir al coche. <br />Es muy interesante, el problema es que opensteer no tiene documentación y tampoco pude compilar sus fuentes y ejemplos, sin emvargo no es algo dificil de hacer, aver si alguien se une y hacemos una biblioteca de funciones para comportamientos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Jul 30, 2010 2:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nathaniel]]></name></author>
<updated>2010-07-29T14:11:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3576#p3576</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3576#p3576"/>
<title type="html"><![CDATA[Re: Algoritmo persecución?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3576#p3576"><![CDATA[
Gracias por las ideas, las pruebo y os cuento!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2061">Nathaniel</a> — Jue Jul 29, 2010 2:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-07-29T03:53:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3573#p3573</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3573#p3573"/>
<title type="html"><![CDATA[Re: Algoritmo persecución?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3573#p3573"><![CDATA[
ha claro, esque entendi mal, pense que el signo &quot;-&quot; era de resta, pero veo que es de guión.<br />Eso que puse tampoco lo he provado, siento que si funcionaria, lo que comentas solo pasaria cuando empieza el juego, pues el coche perseguidor empezara en un angulo cualquiera, y se ajustara al angulo para llegar al otro coche, si embargo, mientras el otro coche se este moviendo, el perseguidor se ira ajustando poco a poco. Pero mejor lo pruebo para saber si de verdad funciona, y subo un video.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Jul 29, 2010 3:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-07-28T23:53:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3570#p3570</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3570#p3570"/>
<title type="html"><![CDATA[Re: Algoritmo persecución?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3570#p3570"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />Hola, se me ocurre algo pero no se si es lo que estes buscando, pues la solucion es muy simple, tal ves como nosotros buscamos algo.<br />Pues solo es calcular el angulo que hay entre los dos coches y le aplicas un vector velocidad con el angulo que obtuviste eso producira que se hacerque el coche el linea recta, si calculas ese vector en cada bucle del juego, el vector se actualizará y generará un movimientos curvo, pues cada vez el angulo va cambiando, y te aseguras que siempre lo siga a donde tu lo muevas.<br /></div></blockquote> Esto provoca un comportamiento irreal en el coche. Con lo que comentas, un coche podría llegar a girar 180º en un solo frame. Aunque si en vez de un coche, fuese una nave espacial o algo de eso, pues se podría hacer cualquier cosas sin que quede demasiado irreal.<br /><br /><blockquote><div><cite>carlostex escribió:</cite><br /><blockquote><div><cite>endaramiz escribió:</cite>Para hacer este cálculo, solamente tienes que hacer el determinante del vector (posición del perseguido - posición del perseguidor)<br /></div></blockquote><br /><br />No se si te referias al determinate de las matematicas, pero yo solo conosco uno, y solo se puede aplicar a matrizes que sean cuadradas.Solo lo aclaro, no es que me haga al sabiondo jaja, pero lo mensiono para no tener informacion incorrecta aun que no nos afecte en mucho</div></blockquote> Has dejado media frase sin citar. Quizás me he expresado mal, aunque pensé que se entendería ya que, como dices, los determinantes se hacen en matrices cuadradas. La matriz se forma a partir de los dos vectores: <br />- (posición del perseguido - posición del perseguidor) <br />- vector velocidad del perseguidor<br />Como estamos en 2D, los vectores tienen 2 valores (x e y). Así que queda una matriz 2x2, cuadrada, y se puede hacer el determinante sin problemas.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Jul 28, 2010 11:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-07-28T23:12:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3568#p3568</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3568#p3568"/>
<title type="html"><![CDATA[Re: Algoritmo persecución?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3568#p3568"><![CDATA[
Hola, se me ocurre algo pero no se si es lo que estes buscando, pues la solucion es muy simple, tal ves como nosotros buscamos algo.<br />Pues solo es calcular el angulo que hay entre los dos coches y le aplicas un vector velocidad con el angulo que obtuviste eso producira que se hacerque el coche el linea recta, si calculas ese vector en cada bucle del juego, el vector se actualizará y generará un movimientos curvo, pues cada vez el angulo va cambiando, y te aseguras que siempre lo siga a donde tu lo muevas. <br /><br /><blockquote><div><cite>endaramiz escribió:</cite><br />Para hacer este cálculo, solamente tienes que hacer el determinante del vector (posición del perseguido - posición del perseguidor)<br /></div></blockquote><br /><br />No se si te referias al determinate de las matematicas, pero yo solo conosco uno, y solo se puede aplicar a matrizes que sean cuadradas.Solo lo aclaro, no es que me haga al sabiondo jaja, pero lo mensiono para no tener informacion incorrecta aun que no nos afecte en mucho<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Jul 28, 2010 11:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-07-28T11:42:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3566#p3566</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3566#p3566"/>
<title type="html"><![CDATA[Re: Algoritmo persecución?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3566#p3566"><![CDATA[
El coche básico gira a la izquierda cuando pulsas la tecla izquierda y lo mismo para la derecha. En el nuevo coche solo tienes que modificar la condición para moverse. Un algoritmo muy sencillo (con resultados no muy buenos) es girar a la izquierda si el coche a perseguir está a la izquierda y a la derecha en caso contrario. Donde, a la derecha, me refiero a la derecha de la trayectoria (a partir del vector velocidad y la posición).<br />Para hacer este cálculo, solamente tienes que hacer el determinante del vector (posición del perseguido - posición del perseguidor) y del vector velocidad del perseguidor. Si el coche perseguido está a la izquierda este determinante dará positivo, si está a la derecha, negativo y si está ya en su trayectoria, 0.<br /><br />Lo hago de cabeza, espero no haberme equivocado en algo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Jul 28, 2010 11:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nathaniel]]></name></author>
<updated>2010-07-28T11:05:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3565#p3565</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3565#p3565"/>
<title type="html"><![CDATA[Algoritmo persecución?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=802&amp;p=3565#p3565"><![CDATA[
Estoy realizando un juego de coches con el engine de Hugo y no acabo de dar con la forma de hacer que un coche persiga a otro. En una dimension es muy sencillo, el problema me sale al aplicar las dos dimensiones y los angulos.<br /><br />Aquí el código importante, si alguien lo quiere entero y con las imágenes que lo diga:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Car2(pygame.sprite.Sprite):<br />   def __init__(self):<br />      pygame.sprite.Sprite.__init__(self)<br />      self.original_image = pygame.image.load(&quot;ima/Car2.png&quot;)<br />      self.rect = self.original_image.get_rect()<br />      self.x,self.y = 692,345<br />      self.angle = 180<br />      self.velocity = 0<br />      <br />   def update(self):<br />      if Coche.rect.x &gt; self.rect.x:<br />         self.mov(-1)<br />      elif Coche.rect.x &lt; self.rect.x:      <br />         self.mov(1)<br />      #Aquí faltaría la otra parte del codigo   <br />         <br />      angle = radians(self.angle)<br />      self.dx = cos(angle) * self.velocity<br />      self.dy = sin(angle) * self.velocity<br />      <br />      self.update_image()<br />      self.update_position()<br />      self.check_limits()<br />      <br />      <br />   def mov(self,sentido):<br />      self.velocity += ACCEL * sentido<br />      if self.velocity &gt; MAX_SPEED:<br />         self.velocity = MAX_SPEED<br />      elif self.velocity &lt; -MAX_SPEED:<br />         self.velocity = -MAX_SPEED<br />         <br />   def update_image(self):<br />      self.image = pygame.transform.rotate(self.original_image, -self.angle)<br />      self.rect.w = self.image.get_width()<br />      self.rect.h = self.image.get_height()<br />      <br />   def update_position(self):<br />      self.rect.x = int(self.x) - self.rect.w / 2<br />      self.rect.y = int(self.y) - self.rect.h / 2<br />      self.x += self.dx<br />      self.y += self.dy<br />      <br />      screen.blit(self.image,self.rect)</code></dd></dl><br /><br />Este es el coche persecusor, el otro está en otra clase inicializada por la variable Coche (Coche.rect.x por ejemplo) y la estructura es muy parecida a este asi que no hace falta que lo añada. Si a alguien se le ocurre algo..<br />Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2061">Nathaniel</a> — Mié Jul 28, 2010 11:05 am</p><hr />
]]></content>
</entry>
</feed>