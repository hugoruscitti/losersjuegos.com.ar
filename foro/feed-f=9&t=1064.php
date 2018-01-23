<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1064" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-08T12:42:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1064</id>
<entry>
<author><name><![CDATA[seba_fxl]]></name></author>
<updated>2011-03-08T12:42:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5193#p5193</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5193#p5193"/>
<title type="html"><![CDATA[Re: Mover Sprite con SFML]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5193#p5193"><![CDATA[
Muchas gracias Kaiser  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> , recien veo la respuesta porque me llegaban a correos no deseados  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> , voy a probar lo que me dijiste y cualquier cosa comento.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2391">seba_fxl</a> — Mar Mar 08, 2011 12:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-03-01T13:15:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5151#p5151</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5151#p5151"/>
<title type="html"><![CDATA[Re: Mover Sprite con SFML]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5151#p5151"><![CDATA[
Hola Sebastian, no estoy seguro al 100% pero por lo que he podido comprobar experimentalmente, el evento button pressed de SFML solo detecta clics completos, es decir, pulsar y soltar el botón. Por ello te recomiendo que pongas a true un boolean cuando detectes un button pressed y lo pongas a false cuando detectes un button released, ahora trabaja con este boolean en vez de con el evento button pressed, creo que eso debería solventar tu problema.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mar Mar 01, 2011 1:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[seba_fxl]]></name></author>
<updated>2011-03-01T01:15:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5150#p5150</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5150#p5150"/>
<title type="html"><![CDATA[Mover Sprite con SFML]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1064&amp;p=5150#p5150"><![CDATA[
Hola a todos, me llamo Sebastian, soy nuevo en el foro, espero que el tema este bien ubicado.<br />Tengo un problema, que creo es simple, pero no alcanzo a ver la solucion.<br />Lo que quiero hacer es poder agarrar sprites, con el mouse, y arrastrarlos a cualquier parte de la ventana, lo unico que pude hacer es que se muevan a la posicion del mouse cuando clickeo, espero que alguien pueda ayudarme <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> , desde ya muchas gracias.<br />Uso Visual Studio 2008 y SFML, y esto es lo que hice:  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;SFML/Window.hpp&gt;<br />#include &lt;SFML/Graphics.hpp&gt;<br /> <br />int main(){<br />   sf::Image image;<br />   sf::Sprite sprite;<br />   circulo.LoadFromFile(&quot;imagen.png&quot;);<br />   sprite.SetImage(image);<br />   sprite.SetPosition(0,0);<br />   <br />   sf::Event Event;<br />   <br />   sf::RenderWindow App(sf::VideoMode(800,600,32),&quot;Prueba&quot;);<br />   <br />   while(App.IsOpened())<br />   {<br />      while (App.GetEvent(Event)){<br />         if (Event.Type == sf::Event::Closed)<br />            App.Close();<br />         if((Event.Type== sf::Event::MouseButtonPressed ) &amp;&amp; (Event.MouseButton.Button == sf::Mouse::Left)) <br />               sprite.SetPosition(Event.MouseButton.X,Event.MouseButton.Y);<br />      }<br />      App.Clear();<br />      App.Draw(sprite);<br />      App.Display();<br />   }<br />   return EXIT_SUCCESS;<br />}<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2391">seba_fxl</a> — Mar Mar 01, 2011 1:15 am</p><hr />
]]></content>
</entry>
</feed>