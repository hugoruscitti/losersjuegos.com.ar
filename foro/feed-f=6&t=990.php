<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=990" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-06T12:47:54+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=990</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-06T12:47:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4713#p4713</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4713#p4713"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4713#p4713"><![CDATA[
creo que te has complicado demasiado.<br /><br />Lo mejor es dividir el tema, entre una función que cambie al siguiente frame dentro del mismo loop y otra funcion que cambie el tipo de acción a realizar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />// Esto se lo podrías pasar por parametro a la hora de construir el sprite,<br />// para poder utilizar cualquier valor en diferentes sprites<br />int const NUM_FRAMES_ANCHO = 4;<br />int const NUM_FRAMES_ALTO = 4;<br />int const ANCHO_FRAME = X; // Aquí pones el ancho de cada frame<br />int const ALTO_FRAME = Y; // Aquí pones el alto de cada frame<br /><br />enum Acciones<br />{<br />   Accion_Abajo,<br />   Accion_Izquierda,<br />   Accion_Derecha,<br />   Accion_Arriba<br />};<br /><br />int cambiarAccion(int accion)<br />{<br />   assert(accion &lt; NUM_FRAMES_ALTO);<br />   clip_rect.x = 0; // Nos ponemos en el primer frame del loop<br />   clip_rect.y = accion * ALTO_FRAME;<br />}<br /><br />int siguienteFrame(int numFrame)<br />{<br />   int fila_actual = numFrame / NUM_FRAMES_ANCHO;<br />   int columna_actual = numFrame % NUM_FRAMES_ANCHO;<br />   <br />   int nueva_columna = columna_actual + 1;<br />   <br />   // Si nos hemos pasado, volvemos a la primera columna, para hacer un loop<br />   if (nueva_columna &gt;= NUM_FRAMES_ANCHO)<br />      nueva_columna = 0;<br />      <br />   clip_rect.x = nueva_columna * ANCHO_FRAME;<br />   //En teoría esto no hace falta, ya que no hemos cambiado de fila<br />   // por lo que el valor que tuviera almacenado debería ser válido<br />   clip_rect.y = fila_actual * ALTO_FRAME;<br />}<br /><br /><br />/* El tema ahora seria llamar cada vez que quieras <br />pasar al siguiente frame (una vez cada segundo o lo que sea)<br />llamas a siguienteFrame. Otra cosa que te recomendaría es que<br />guardaras la columna o el frame actual dentro de la clase, para<br />no tener que pasarselo cada vez a siguienteFrame.<br /><br />Y cuando quieras cambiar de accion: */<br /><br />if (se ha pulsado tecla derecha)<br />   Caballero.cambiarAccion(Accion_Derecha);<br />elif (se ha pulsado tecla izquierda)<br />   Caballero.cambiarAccion(Accion_Izquierda);<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Ene 06, 2011 12:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-06T05:35:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4711#p4711</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4711#p4711"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4711#p4711"><![CDATA[
Finalmente pude resolver el problema, pero tengo una duda acerca de la solucion que elabore, ya que me parece que no es de lo mas optima<br /><br />Esta es la funcion que arme para determinar el numero de frame siguiente en base al frame actual, para poder armar la secuencia de frames que van a hacer que el personaje se mueva, lo que quiero saber es si se puede elaborar algo mas simple, les dejo la funcion:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int nuevoFrame(int accion,int numFrame)<br /> {<br />  int val = numFrame;<br /><br />  switch(accion)<br />  {<br />   case 1:<br /><br />    switch(getNfil())//ARRIBA<br />    {<br />     case 0:<br />      setNcol(2);<br />      setNfil(3);<br />      val = 14;<br />      break;<br /><br />     case 1:<br />     case 2:<br />      setNcol(2);<br />      setNfil(3);<br />      val = 14;<br />      break;<br /><br />     case 3:<br /><br />      if(getNcol()&lt;=2)<br />      {<br />       setNcol(getNcol()+1);<br />       val = numFrame+1;<br />      }<br />      else<br />      {<br />       setNcol(0);<br />       val = 12;<br />      }<br /><br />      break;<br />    }<br /><br />    break;<br />   case 2:<br /><br />    switch(getNfil())//ABAJO<br />    {<br />     case 0:<br /><br />      if(getNcol()&lt;=2)<br />      {<br />       setNcol(getNcol()+1);<br />       val = numFrame+1;<br />      }<br />      else<br />      {<br />       setNcol(0);<br />       val = 0;<br />      }<br /><br />      break;<br />     case 1:<br />     case 2:<br />      setNcol(2);<br />      setNfil(0);<br />      val = 2;<br />      break;<br />     case 3:<br />      setNcol(2);<br />      setNfil(0);<br />      val = 2;<br />      break;<br />    }<br /><br />    break;<br />   case 3:<br /><br />    switch(getNfil())//DERECHA<br />    {<br />     case 0:<br />     case 1:<br />     case 3:<br />      setNcol(2);<br />      setNfil(2);<br />      val = 10;<br />      break;<br />     case 2:<br /><br />      if(getNcol()&lt;=2)<br />      {<br />       setNcol(getNcol()+1);<br />       val = numFrame+1;<br />      }<br />      else<br />      {<br />       setNcol(0);<br />       val = 8;<br />      }<br /><br />      break;<br />    }<br /><br />    break;<br />   case 4:<br /><br />    switch(getNfil())//IZQUIERDA<br />    {<br />     case 0:<br />     case 3:<br />     case 2:<br />      setNcol(1);<br />      setNfil(1);<br />      val = 4;<br />      break;<br />     case 1:<br /><br />      if(getNcol()&lt;=2)<br />      {<br />       setNcol(getNcol()+1);<br />       val = numFrame+1;<br />      }<br />      else<br />      {<br />       setNcol(0);<br />       val = 4;<br />      }<br /><br />      break;<br />    }<br /><br />    break;<br />  }<br /><br />  return val;<br /> }<br /></code></dd></dl><br /><br />Basicamente la idea es que con el numero de frame actual y el movimiento que se realiza pueda determinar cual es el siguiente frame que se va a tener que cargar, me gustaria saber que les parece y si se puede cambiar algo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Jue Ene 06, 2011 5:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-03T20:32:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4687#p4687</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4687#p4687"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4687#p4687"><![CDATA[
si, pero acuerdate que como casi todo en programación, empieza en 0<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Ene 03, 2011 8:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-03T20:14:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4686#p4686</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4686#p4686"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4686#p4686"><![CDATA[
con el frame que le paso a la funcion te referis a un numero para el frame, es decir cada uno de los frames tiene un numero de 1 a 16 en este caso?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Lun Ene 03, 2011 8:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-03T19:50:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4685#p4685</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4685#p4685"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4685#p4685"><![CDATA[
si, con eso te valdría<br />Mirate la función que te puse arriba, que te pasa de un frame que le pidas a la posición que necesitas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Ene 03, 2011 7:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-03T19:19:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4684#p4684</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4684#p4684"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4684#p4684"><![CDATA[
Obviamente que si, lo que quiero decir es que, yo se que por ejemplo tengo que definir el rectangulo sobre el cual voy a recortar, eso tiene una posicion X y una posicion Y, el tema es como defino esa posicion sobre la cual voy a comenzar a recortar para luego colocar sobre la pantalla, el calculo que tengo que hacer, o sea vos ya me diste una idea<br /><br /><blockquote class="uncited"><div><br />posicion_x=ancho_sprite*columnas_del_frame<br />posicion_y=alto_sprite*filas_del_frame<br /></div></blockquote><br /><br />pero esto es asi nomas?? o necesito algo mas???, eso es lo que no entiendo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Lun Ene 03, 2011 7:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-03T16:50:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4683#p4683</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4683#p4683"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4683#p4683"><![CDATA[
A que te refieres con la posición con la que vas a dibujar?, supongo que ya leíste como se hace para recortar las áreas del frame que quieres<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Ene 03, 2011 4:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-03T03:25:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4678#p4678</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4678#p4678"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4678#p4678"><![CDATA[
<img src="http://usuarios.multimania.es/gadius/recursosxp/charas/chara_linkcaballo.png" alt="Imagen" /><br /><br />acabo de conseguir esta imagen, lo que me esta complicando es la forma en la que puedo determinar la posicion X e Y sobre las que comenzar a dibujar el sprite, en este caso son todos mas o menos del mismo tamaño<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Lun Ene 03, 2011 3:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-02T07:30:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4669#p4669</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4669#p4669"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4669#p4669"><![CDATA[
pues podrías hacer un array de SDL_Rect que contenga los cuadrados a recortar y cuando quieras cambiar de frame le pasas el area que corresponde al indice del frame.<br />Para ir cambiando de frame pues efectivamente tiene que ser cuando cambia de dirección, osea cuando dobla o cuando avanza, parte de procesar ese evento va a ser cambiar al frame que quieres que aparezca en esa situación, podrías usar poolling cuando detectes que la tecla se pulso activas tal frame y cuando de desaprete pones el frame del estado estático<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Ene 02, 2011 7:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-02T07:04:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4668#p4668</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4668#p4668"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4668#p4668"><![CDATA[
Entiendo sobre la parte de ir recortando el frame en pedazitos que son los que voy cargando en la pantalla, lo que no entiendo es en el caso de la navecita que tengo, cual es la mejor tecnica para hacer el recorte ya que tengo frames de diferentes tamaños y tampoco entiendo como hacer para relacionar el evento que ocurre, sea que se haya apretado la tecla para arriba, abajo o al costado y la carga del frame se me habia ocurrido que dependiendo de la tecla que se toco se pase un determinado valor a alguna funcion y desde ahi realizo la carga del frame, pero todavia son ideas que voy teniendo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Dom Ene 02, 2011 7:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-01-02T02:09:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4667#p4667</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4667#p4667"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4667#p4667"><![CDATA[
si, en un juego quieres usar la menor memoria posible y los menores pasos, por eso no es bueno crear un array de imágenes, el problema que tienes es que esta imagen no es estántar, todos las imágenes que yo he visto de ese tipo tienen una separación igual que permite usar bien el clip rect, mi consejo es que busque otras imágenes.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Ene 02, 2011 2:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-02T01:28:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4666#p4666</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4666#p4666"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4666#p4666"><![CDATA[
lo normal en este caso es usar el clip rect a la hora de hacer un blit.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>//dentro de la clase que tengas donde manejes la imagen ( Animacion, Sprite, Nave, etc)<br /><br />void CambiarFrame(int frame)<br />{<br />  int x = frame % FRAMES_ANCHO;<br />  int y = frame / FRAMES_ANCHO;<br />  <br />  rect_frame.x = ANCHO_FRAME * x;<br />  rect_frame.y = ALTO_FRAME * y;<br />  rect_frame.width = ANCHO_FRAME;<br />  rect_frame.height = ALTO_FRAME;<br />}<br /><br />void DibujarNave()<br />{<br />  // Esto no recuerdo si era así exactamente, pero lo que quiero decir es:<br />  //dibuja esto en la pantalla screen en la posición pos_nave y con el clip_rect rect_frame<br />  SDL_BlitSurface(screen, pos_nave, rect_frame);<br />}<br /><br />...<br /></code></dd></dl><br /><br />El tema es que no hace falta dividir la imagen, simplemente cambiar el rectángulo de corte. Y en cuanto a lo de que no son del mismo tamaño, siempre suelen ser del mismo tamaño cada frame, o no te referías a eso?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Ene 02, 2011 1:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-01-02T00:12:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4665#p4665</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4665#p4665"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4665#p4665"><![CDATA[
Cuando te referis a cargar todo por separado me estas diciendo de cargarlo en un array??<br /><br />mi idea era la de en la clase frame que tengo, generar una matriz de  3*3 de tipo SDL_Surface sobre el cual voy a ir cargando pedazito por pedazito del sprite, cuando tenga que mover el sprite era simplemente moverme un espacio dentro de esa matriz y luego cargar ese pedazo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Dom Ene 02, 2011 12:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-12-31T09:16:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4657#p4657</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4657#p4657"/>
<title type="html"><![CDATA[Re: Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4657#p4657"><![CDATA[
Si esa es la forma en la que se acostumbra trabajar con sprites que tienen varios frames.<br />Como dices el problema es que la imagen no es de tamaño uniforme lo cual implica que tienes que declarar el tamaño y posición de cada frame.<br />como es mejor trabajarlo, bueno estas usando C++, hay que aprovecharlo usando encapsulación y clases especializadas, es la forma en la que yo lo acostumbro.<br />La clase que maneja los sprites debería ser la encargada de controlar la animación, y esta estará embebida en la clase personaje.<br />la clase sprite podría ser así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class sprite<br />{<br />      frame<br />      ancho_sprite<br />      alto_sprite<br />      columnas_del_frame<br />      filas_del_frame<br />      sprite_actual<br />      dibuja_sprite(superficie_destino)<br />      establece_sprite(numero_del_sprite)<br />      carga_frame(archivo)<br />}<br /></code></dd></dl><br />es una idea sin meterse en declaraciones formales de c y sdl, como veras es fácil, quizás requiere de algunas funciones mas para la gestión del frame, pero tiene la ventaja que no usa memoria extra para almacenar un sprite, si no que la función dibujar copia el frame establecido a la superficie final que se muestra.<br />si el tamaño de los sprites fuera fijo por ejemplo 64*64 y tendría una matriz de 3*3 sprite sería tan sencillo calcular que parte copiar como sigue:<br /><dl class="codebox"><dt>Code: </dt><dd><code>posicion_x=ancho_sprite*columnas_del_frame<br />posicion_y=alto_sprite*filas_del_frame<br /></code></dd></dl><br />esas posiciones las pasas como parámetro a la función blit_surface en el argumento del rectángulo a copiar y listo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Dic 31, 2010 9:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2010-12-31T03:52:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4656#p4656</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4656#p4656"/>
<title type="html"><![CDATA[Movimiento de sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=990&amp;p=4656#p4656"><![CDATA[
Buscando en internet acerca del movimiento de sprites, he sido incapaz de encontrar una forma que realmente me plazca y sobre todo que entienda, acerca del movimiento de los sprites, basicamente tengo esta imagen<br /><br /><img src="http://lh4.ggpht.com/_OESoGgtnthw/TA6jC-2-bJI/AAAAAAAAAHY/NAa56Di17Wc/battleship_thumb%5B2%5D.png?imgmax=800" alt="Imagen" /><br /><br />y lo que estoy intentando hacer es moverla, yo se que lo que deberia hacer es intentar dividir a la imagen en funcion de la cantidad de filas y columnas que tiene, pero eso a donde me conviene cargarlo, en una matriz o array como estube viendo que algunos hacen, o simplemente ir controlandolo mediante una funcion, pero eso me trae otro problema que es que, no todas las imagenes tienen el mismo tamaño, por lo que estoy bastante confundido,<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#ifdef __cplusplus<br />#include &lt;cstdlib&gt;<br />#else<br />#include &lt;stdlib.h&gt;<br />#endif<br />#ifdef __APPLE__<br />#include &lt;SDL/SDL.h&gt;<br />#else<br />#include &lt;SDL.h&gt;<br />#endif<br />#include&lt;SDL_image.h&gt;<br /><br />#define anchoSprite 82;<br />#define alturaSprite 76;<br /><br />#include &lt;stdio.h&gt;<br /><br />class Frame<br />{<br /><br />public:<br />    SDL_Surface* img;<br /><br />    void cargaImagen(char* archivo)<br />    {<br />        SDL_Surface* temporal = NULL;<br />        img = NULL;<br />        if(temporal == NULL)<br />        {<br /><br />         temporal = IMG_Load(archivo);<br /><br />         img = SDL_DisplayFormat(temporal);<br />         SDL_FreeSurface(temporal);<br />        }<br />    }<br /><br />    void eliminarImagen()<br />    {<br />        SDL_FreeSurface(img);<br />    }<br />};<br /><br />class Personaje<br />{<br />private:<br />    int x;<br />    int y;<br />    int altura;<br />    int ancho;<br />    Frame miFrame;<br /><br />    public:<br />    Personaje(int x,int y,char* archivo)<br />    {<br /><br />        miFrame.cargaImagen(archivo);<br /><br />        setX(x);<br />        setY(y);<br />    }<br /><br />     int getAltura()<br />    {<br />     return miFrame.img-&gt;h;<br />    }<br /><br />     int getAncho()<br />    {<br />     return miFrame.img-&gt;w;<br />    }<br /><br />    int getY()<br />    {<br />     return y;<br />    }<br /><br />    void setY(int y)<br />    {<br />     this-&gt;y = y;<br />    }<br />    int getX()<br />    {<br />     return x;<br />    }<br /><br />    void setX(int x)<br />    {<br />     this-&gt;x = x;<br />    }<br /><br />    void borrarFrame(){miFrame.eliminarImagen();}<br /><br />    void dibujarImagen(SDL_Surface* superficieDestino,int x,int y)//con sy y sx, como variables del sprite de origen<br />    {<br />     SDL_Rect rectanguloRecortado;<br />     SDL_Rect rectanguloDestino;<br /><br />     rectanguloRecortado.x = x;<br />     rectanguloRecortado.y = y;<br />     rectanguloRecortado.h = y+alturaSprite;<br />     rectanguloRecortado.w = anchoSprite;<br /><br />     rectanguloDestino.x = getX();<br />     rectanguloDestino.y = getY();<br /><br />     SDL_BlitSurface(miFrame.img, &amp;rectanguloRecortado, superficieDestino, &amp;rectanguloDestino);<br />    }<br />};<br /><br />void limpieza(SDL_Surface* superficieLimpiar)<br />{<br />    SDL_FreeSurface(superficieLimpiar);<br />    SDL_Quit();<br />}<br /><br />SDL_Surface* inicializaSdl(SDL_Surface* Surf_Display)<br />{<br />//INICIO TODO, SI ESTA MAL DEVUELVE ERROR<br />    if(SDL_Init(SDL_INIT_EVERYTHING) &lt; 0)<br />    {<br />        return NULL;<br />    }<br />    //ACA ES DONDE CREO LA PANTALLA Y SE LA ASIGNO A SDL_DISPLAY<br />    if((Surf_Display = SDL_SetVideoMode(1000,480, 32, SDL_HWSURFACE | SDL_DOUBLEBUF)) == NULL)<br />    {<br />        return NULL;<br />    }<br />    return Surf_Display;<br />}<br /><br />SDL_Surface* borrarPantalla(SDL_Surface* pantallaModificada, Personaje miPersonaje)<br />{<br /> SDL_Rect rectangulo;<br /> rectangulo.x = miPersonaje.getX();<br /> rectangulo.y = miPersonaje.getY();<br /> rectangulo.h = miPersonaje.getAltura();<br /> rectangulo.w = miPersonaje.getAncho();<br /> SDL_FillRect(pantallaModificada,&amp;rectangulo,SDL_MapRGB(pantallaModificada-&gt;format,0,0,0));<br /> return pantallaModificada;<br />}<br /><br />int gameLoop()<br />{<br /> bool ejecuta = true;<br /> SDL_Surface* pantalla;<br /> SDL_Event evento;<br /> pantalla = NULL;<br /> SDL_Surface* imagen;<br /> SDL_Rect rectangulo;<br /> Uint8 *key;<br /><br /> if((pantalla=inicializaSdl(pantalla)) == NULL)<br /> {<br />  return -1;<br /> }<br /><br /> Personaje miPersonaje(50,50,&quot;nave.png&quot;);<br /><br /> while(ejecuta)<br /> {<br />  miPersonaje.dibujarImagen(pantalla,82,0);<br />  SDL_PumpEvents();<br />  key = SDL_GetKeyState(NULL);<br />  if(key&#91;SDLK_UP&#93;)<br />  {<br />   int aRecortar = alturaSprite;<br />   pantalla = borrarPantalla(pantalla,miPersonaje);<br />   miPersonaje.setY(miPersonaje.getY()-1);<br />   miPersonaje.dibujarImagen(pantalla,82,aRecortar);<br />  }<br />  if(key&#91;SDLK_DOWN&#93;)<br />  {<br />   pantalla = borrarPantalla(pantalla,miPersonaje);<br />   miPersonaje.setY(miPersonaje.getY()+1);<br />   miPersonaje.dibujarImagen(pantalla,82,0);<br />  }<br />  if(key&#91;SDLK_RIGHT&#93;)<br />  {<br />   int aRecortar = 82 + anchoSprite;<br />   pantalla = borrarPantalla(pantalla,miPersonaje);<br />   miPersonaje.setX(miPersonaje.getX()+1);<br /><br />   miPersonaje.dibujarImagen(pantalla,aRecortar,0);<br />  }<br />  if(key&#91;SDLK_LEFT&#93;)<br />  {<br />   int aRecortar = 82 - anchoSprite;<br />   pantalla = borrarPantalla(pantalla,miPersonaje);<br />   miPersonaje.setX(miPersonaje.getX()-1);<br />   miPersonaje.dibujarImagen(pantalla,aRecortar,0);<br />  }<br />  SDL_Flip(pantalla);<br /> }<br /> miPersonaje.borrarFrame();<br /> limpieza(pantalla);<br /> return 0;<br />}<br /><br />int main ( int argc, char** argv )<br />{<br />    return gameLoop();<br />}</code></dd></dl><br /><br />este es el codigo de mi programa, y que minimamente me permite poder moverme entre los sprites de la primer fila, asi que si alguno desea aplicarle algun cambio, sientase libre de hacerlo, realmente esta es la parte que mas me complica de todo esto junto con todo lo que es el tiempo de ejecucion y demas cosas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Vie Dic 31, 2010 3:52 am</p><hr />
]]></content>
</entry>
</feed>