<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=843" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-28T07:12:43+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=843</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-28T07:12:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3938#p3938</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3938#p3938"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3938#p3938"><![CDATA[
ok, ok, ok jaja, nunca las he usado, y si he leido que se pueden solucionar de otra forma mas sencilla, pues dejemos que experimenten usando mas controladores<br />aver que se les ocurre(a los usuarios).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ago 28, 2010 7:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-28T06:49:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3937#p3937</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3937#p3937"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3937#p3937"><![CDATA[
nunca, nunca, casi nunca, utilices un singleton xD. Es tontería. Si solo quieres un objeto, no crees más xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ago 28, 2010 6:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-28T06:30:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3935#p3935</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3935#p3935"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3935#p3935"><![CDATA[
Que tal? pues platicando con juan nos pareció bien la siguiente idea:<br /><br />Crear un observador; es una clase que contiene las funciones como: seguir_raton, arrastrar, etc.<br />y un vector de apuntadores a base_entidad (pensamos en poner una clase base)<br /><br />entonces para poner un comportamiento seria:<br />comportamientos.seguir_mouse(&amp;mono);<br />comportamientos.seguir_mouse(&amp;texto);<br />esta clase se actualizaria cada que se detecte un evento:<br /><dl class="codebox"><dt>Code: </dt><dd><code>    while( ventana.IsOpened() ) {<br />   <br />    while( ventana.GetEvent( evento ) ) {<br />      // Cierre de ventana<br />      if ( evento.Type == sf::Event::Closed )<br />        ventana.Close();<br /><br />      <br />      else if ( evento.Type == sf::Event::MouseButtonPressed )<br />      {<br />        comportamientos.actualizar_evento(&quot;Button Pressed&quot;);//actualiza a todas las entidades asociadas a ese evento<br />        // o button_pressed() directamente<br />      }<br />    }</code></dd></dl><br /><br />Me gusta mas usar actializar_evento y con una constante decir que tipo es, ademas se requeriria mas memoria para cada función por tipo de evento<br /><br />la clase comportamientos la pondria como singleton , pues no debe haber mas de un controlador.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ago 28, 2010 6:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-28T05:47:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3934#p3934</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3934#p3934"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3934#p3934"><![CDATA[
un solo apunte que te vendrá bien en tu iniciacion en C++:<br /><br />es_un vs tiene_un:<br /><br />una clase hereda de otra si la relacion es del tipo es_un: Un PERRO es un Animal.<br /><br />una clase tiene un atributo de otra si la relación es del tipo tiene_un: Un SOLDADO tiene una ESPADA, pero no es una espada.<br /><br />Por eso quizás podríamos tener una lista de componentes (o habilidades en cada Actor) y actualizarlas en el update o algo de este estilo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ago 28, 2010 5:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-28T05:33:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3932#p3932</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3932#p3932"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3932#p3932"><![CDATA[
El código al que hacía referencia es el de pruebas.cpp, en la parte donde se evalúa el tipo de evento agregué el código que mostré para procesar los clics del ratón, por eso no puse todo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>/* Pilas engine - Un motor de videojuegos<br /> *<br /> * Copyright 2010 - Hugo Ruscitti<br /> * Licencia: LGPLv3 (vea http://www.gnu.org/licenses/lgpl.html)<br /><br /> * Website - http://www.pilas-engine.com.ar<br /> *<br /> * El motor original está creado en Python,<br /> * esta es la implementación en C++<br /> * Lea el archivo AUTORES para saber quiénes la realizan.<br /> */<br /><br />#include &quot;actores.h&quot;<br />#include &quot;texto.h&quot;<br />#include &quot;sonido.h&quot;<br />#include &lt;vector&gt;<br />using std::vector;<br />#include &lt;iostream&gt;<br />using std::cout;<br />using std::endl;<br /><br />int main( int argc, char* argv&#91;&#93; )<br />{<br />  // Crea la ventana principal<br />  sf::RenderWindow ventana( sf::VideoMode( 800, 600 ), &quot;PilasC++&quot; );<br />  <br />  // Crea un nuevo actor de ejemplo<br />  Pilas::Mono mono;<br />  <br />  // Lo coloca al centro de la pantalla<br />  mono.establecer_x( 400 );<br />  mono.establecer_y( 300 );<br />  <br />  // Agranda 300% la imagen del mono<br />  mono.establecer_escala( 3 );<br />  <br />  // Actores en pantalla<br />  vector&lt; Pilas::Actor* &gt;actores;<br />  // Agrega actores al vector<br />  actores.push_back( &amp;mono );<br /><br />  // Texto en pantalla<br />  sf::Font fuente;<br />  fuente.LoadFromFile( &quot;data/FreeMono.ttf&quot; );<br />  Pilas::Texto mensaje( &quot;Hola PilasC++\nPulsa &#91;A&#93; &#91;B&#93; o &#91;C&#93;&quot;, fuente, 20 );<br />  mensaje.establecer_color( sf::Color( 255, 255, 255 ) );<br /><br />  //Creamos el evento solo una vez mejor<br />  // Procesa eventos.<br />  sf::Event evento;<br /><br />  // Ciclo principal<br />  while( ventana.IsOpened() ) {<br />    <br />    <br />    while( ventana.GetEvent( evento ) ) {<br />      // Cierre de ventana<br />      if ( evento.Type == sf::Event::Closed )<br />        ventana.Close();<br /><br />      // Presión de teclas. Mejor un switch, ya que nos evitamos tener que<br />      //ejecutar todos los condiciones en caso de que se de un evento<br />      else if ( evento.Type == sf::Event::KeyPressed ) {<br />        switch (evento.Key.Code)<br />        {<br />          case sf::Key::Escape:<br />            ventana.Close();<br />            break;<br />          case sf::Key::A:<br />            mono.establecer_rotacion( 0 );<br />            mono.normal();<br />            break;<br />          case sf::Key::B:<br />            // Gira imagen 45° en sentido horario<br />            mono.establecer_rotacion( 45 );<br />            mono.gritar();<br />            break;<br />          case sf::Key::C:<br />            // Gira imagen 45° en sentido antihorario<br />            mono.establecer_rotacion( -45 );<br />            mono.sonreir();<br />            break;<br />          default:<br />            break;<br />        }<br />      }<br />      else if ( evento.Type == sf::Event::MouseButtonPressed )<br />      {<br />        int* ptr = &amp;evento.MouseMove.Y;<br />        cout &lt;&lt; &quot;Clic de ratón en: &quot; &lt;&lt; evento.MouseButton.X &lt;&lt; &quot;, &quot; &lt;&lt; evento.MouseButton.Y &lt;&lt; endl;<br />        cout &lt;&lt; &quot;Clic de ratón en: &quot; &lt;&lt; evento.MouseMove.Y &lt;&lt; &quot;, &quot; &lt;&lt; *( ptr + 1 ) &lt;&lt; endl;<br />        cout &lt;&lt; &quot;Ratón en: &quot; &lt;&lt; ventana.GetInput().GetMouseX() &lt;&lt; &quot;, &quot; &lt;&lt; ventana.GetInput().GetMouseY() &lt;&lt; endl;<br />      }<br />    }<br />    <br />    // Limpia la pantalla<br />    ventana.Clear();<br /><br />    // Dibuja los actores<br />    for ( unsigned i = 0; i &lt; actores.size(); i++ )<br />    {<br />      ventana.Draw( *actores&#91; i &#93; );<br />    }<br /><br />    // Mensajes de texto<br />    ventana.Draw( mensaje );<br />    // Actualiza pantalla<br />    ventana.Display();<br />    <br />    sf::Sleep( 0.1 );<br />  }<br /><br />  return EXIT_SUCCESS;<br /> }<br /></code></dd></dl><br /><br />Ahora, sobre las señales, tengo nuevamente dudas al comparar con la versión Python, en la que se definen clases para cada &quot;comportamiento&quot; pero, tal como con BaseActor, estas clases hacen uso de variables que no se heredan ni están declaradas, así se puede definir la clase SeguirAlMouse:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class SeguirAlMouse:<br />    &quot;Hace que un actor siga la posición del mouse en todo momento.&quot;<br /><br />    def __init__(self):<br />        pilas.eventos.mueve_mouse.connect(self.move)<br /><br />    def move(self, sender, x, y, signal):<br />        self.x = x<br />        self.y = y<br /></code></dd></dl><br />¿Cómo replicaríamos eso en C++? Había pensado en que, si se pudiera hacer una clase similar, después se crearía una nueva clase heredando de esta y del actor o elemento deseado:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class MonoSigueClics : public Pilas::Mono, public Pilas::SeguirAlMouse<br />...<br /></code></dd></dl><br />El detalle, ¿de dónde debería heredar SeguirAlMouse para poder tener los atributos que la versión Python y que no haya que reescribir lo que se desea hacer en la función?<br />No se puede heredar de sf::Drawable, es abstracta, de sf::Sprite tampoco porque luego faltaría especificar si estamos modificando los atributos de Mono o de Sprite.<br /><br />Entonces, lo que pensaba era que se deberían tener funciones virtuales para los eventos, y podrían estar dentro de una clase donde solo se tengan funciones virtuales, después crear una nueva clase mezclando esta clase abstracta y la de interés:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class EventosRaton<br />{<br />  virtual void al_hacer_clic( boton, x, y );<br />  virtual void al_soltar_boton( boton, x, y );<br />  virtual void al _mover_raton( x, y );<br />};<br /><br />class MonoSigueClics : public Mono, public EventosRaton<br />{<br />  void al_hacer_clic( boton, x, y )<br />  {<br />    if ( boton == izquierdo )<br />    {<br />      establecer_x( x );<br />      establecer_y( y );<br />    }<br />  }<br />}<br /></code></dd></dl><br />El detalle aquí es que no sería &quot;combinar&quot; con una clase que &quot;sigue clics&quot;, sino de una que puede recibir valores relacionados con el evento del ratón y entonces escribir en su redefinición el código para mover el actor a la posición que se quiere.<br />¿Qué opinan?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Ago 28, 2010 5:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-28T00:33:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3927#p3927</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3927#p3927"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3927#p3927"><![CDATA[
pon el codigo completo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Ago 28, 2010 12:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-27T06:40:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3922#p3922</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3922#p3922"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3922#p3922"><![CDATA[
Ya encontré el problema, no debía usar MouseMove sino MouseButton :p.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>      else if ( evento.Type == sf::Event::MouseButtonPressed )<br />      {<br />        cout &lt;&lt; &quot;Clic de ratón en: &quot; &lt;&lt; evento.MouseButton.X &lt;&lt; &quot;, &quot; &lt;&lt; evento.MouseButton.Y &lt;&lt; endl;<br />      }<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Ago 27, 2010 6:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-27T06:10:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3920#p3920</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3920#p3920"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3920#p3920"><![CDATA[
una cosa que tenemos que empezar a acostumbrarnos es dar un detalle de la prueba: que sistema hemos usado? xD<br /><br />voy a ver si le hecho un vistazo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Ago 27, 2010 6:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-27T06:04:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3918#p3918</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3918#p3918"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3918#p3918"><![CDATA[
Empecé a hacer pruebas con esta biblioteca, me parece bastante útil, aunque es la primera vez que uso algo como esto (lo único que había usado eran callbacks en C para una biblioteca GUI con SDL), aunque tengo un problema, agregué esto al código de prueba.cpp:<br /><dl class="codebox"><dt>Code: </dt><dd><code>      else if ( evento.Type == sf::Event::MouseButtonPressed )<br />      {<br />        cout &lt;&lt; &quot;Clic de ratón en: &quot; &lt;&lt; evento.MouseMove.X &lt;&lt; &quot;, &quot; &lt;&lt; evento.MouseMove.Y &lt;&lt; endl;<br />      }<br /></code></dd></dl><br />Esto es lo que obtuve en la última ejecución:<br /><blockquote class="uncited"><div><br />http://losersjuegos.com.ar/foro/prueba<br />Clic de ratón en: 0, 495<br />Clic de ratón en: 0, 617<br />Clic de ratón en: 0, 148<br />Clic de ratón en: 0, 111<br />Clic de ratón en: 0, 302<br />Clic de ratón en: 0, 442<br />Clic de ratón en: 0, 648<br />Clic de ratón en: 0, 586<br />AL lib: ALc.c:1879: exit(): closing 1 Device<br />AL lib: ALc.c:1808: alcCloseDevice(): destroying 1 Context(s)<br />AL lib: ALc.c:1420: alcDestroyContext(): deleting 2 Source(s)<br />Inconsistency detected by ld.so: dl-close.c: 731: _dl_close: Assertion `map-&gt;l_init_called' failed!<br /></div></blockquote><br />Como ven, la posición X del ratón siempre queda en 0, no se a qué se deba, aunque no me agrada el último mensaje de la inconsistencia (no estoy enlazando con la biblioteca, sino con los módulos objeto individuales).<br />---------------------------<br />Edición:<br />Probado en Ubuntu 10.04 32 bits, g++ 4.4.3, SFML 1.5<br />Compilación:<br /><br />g++ -o prueba prueba.o actores.o sonido.o texto.o -lsfml-audio -lsfml-window -lsfml-graphics -lsfml-system -Wall<br /><br />Si, no estoy usando libPilas.so<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Ago 27, 2010 6:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-24T03:01:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3855#p3855</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3855#p3855"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3855#p3855"><![CDATA[
Exelente es facil de usar, nos servirá mucho, gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ago 24, 2010 3:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-23T23:55:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3848#p3848</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3848#p3848"/>
<title type="html"><![CDATA[Re: Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3848#p3848"><![CDATA[
gran aportación hugo. Tendremos que echarle un vistazo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Ago 23, 2010 11:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-23T23:10:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3842#p3842</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3842#p3842"/>
<title type="html"><![CDATA[Biblioteca para manejar señales con C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=843&amp;p=3842#p3842"><![CDATA[
Saludos, quería comentarles que investigando algunas cosillas<br />con C++ he visto que hay una biblioteca para manejar señales. Y<br />por lo poquito que ví es muy parecida a la que estoy usando<br />en pilas (el dispatcher de django).<br /><br />La blblioteca en cuestión es libsigc:<br /><br /><!-- m --><a class="postlink" href="http://libsigc.sourceforge.net/">http://libsigc.sourceforge.net/</a><!-- m --><br /><br />tiene un buen tutorial:<br /><br /><!-- m --><a class="postlink" href="http://library.gnome.org/devel/libsigc++-tutorial/stable/">http://library.gnome.org/devel/libsigc+ ... al/stable/</a><!-- m --><br /><br />e incluso la sintaxis se asemeja mucho a lo que<br />estoy implementando en pilas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>// declaracion<br />sigc::signal&lt;void&gt; senal_o_evento;<br /><br />// conectar<br />senal_o_evento.connect( sigc::ptr_fun(funcion_a_ejecutar));<br /><br />// emitir<br />senal_o_evento.emit();<br /></code></dd></dl><br /><br />Espero que les resulte útil, saludos a todos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ago 23, 2010 11:10 pm</p><hr />
]]></content>
</entry>
</feed>