<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1167" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-12-23T15:35:04+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1167</id>
<entry>
<author><name><![CDATA[blacklotus.938]]></name></author>
<updated>2012-12-23T15:35:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=9055#p9055</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=9055#p9055"/>
<title type="html"><![CDATA[Re: saltar - clase - SDL - &quot;SOLUCIONADO&quot;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=9055#p9055"><![CDATA[
Olle colega y como le harias si tienes un juego de plataformas y el personaje tienen que ir saltando por ejemplo en unas escaleras, ya que en tu codigo el personaje siempre se detiene en una posicion constante luego de haber saltado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2677">blacklotus.938</a> — Dom Dic 23, 2012 3:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-05T10:35:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5618#p5618</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5618#p5618"/>
<title type="html"><![CDATA[Re: saltar - clase - SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5618#p5618"><![CDATA[
Vale ya lo conseguí muchas gracias Mightygaver !! La verdad es que estoy empezando con esto de la programación en 2D y aun me cuesta un poco.<br />Dejo el código por si le puede servir a alguien, esta hecho de manera muy chapucera, pero era simplemente para que funcionara el salto y a partir de ahi desarrollarlo mas.<br /><br />sprite.cpp<br /><pre class="prettyprint">sprite::sprite&#40;&#41;{<br />    speedx=0;<br />    speedy=0;<br />    posx=0;<br />    posy=0;<br />    salto=0;<br />}<br />void sprite::saltar&#40;&#41;{<br />    if&#40;!salto&#41;{<br />        speedy=-20;<br />        salto=1;<br />    }<br />}<br />void sprite::actualizar&#40;&#41;{<br />    posy+=speedy;<br /><br />    if&#40;salto==1&#41;<br />        speedy++;<br /><br />    if&#40;speedy&gt;20&#41;{<br />        speedy=0;<br />        salto=0;<br />    }<br />}</pre><br /><br />main.cpp<br /><pre class="prettyprint">int done=0, saltando=0;<br />//SDL_Init<br />//SDL_SetVideoMode<br />//CargamosSprite<br />while&#40;done==0&#41;{<br />        if&#40;saltando==1&#41;{<br />            personaje.actualizar&#40;&#41;;<br />        }<br />        DibujaSprite&#40;ventana&#41;;<br /><br />        //consulta el estado del teclado<br />        keys=SDL_GetKeyState&#40;NULL&#41;;<br /><br />        while&#40;SDL_PollEvent&#40;&amp;event&#41;&#41;{<br />            if&#40;event.type==SDL_QUIT&#41;{done=1;}<br /><br />            //KEYDOWN<br />            if&#40;event.type==SDL_KEYDOWN&#41;{<br />                    switch&#40;event.key.keysym.sym&#41;{<br />                        case SDLK_e:<br />                            personaje.saltar&#40;&#41;;<br />                            saltando=1;<br />                            break;<br />                    default:<br />                        break;<br />                }//fin switch<br />            }//fin if eventos<br />        }//fin while event<br />    }//fin while bucle done<br /><br />    DeleteSprite&#40;&#41;;<br />    return 0;<br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Dom Jun 05, 2011 10:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-06-05T10:10:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5617#p5617</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5617#p5617"/>
<title type="html"><![CDATA[Re: saltar - clase - SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5617#p5617"><![CDATA[
De nada, tranquilo que lo paso bien haciendo estas cosas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />Pues, yo he sacado un rato y he hecho mi versión en Python + SFML, que es donde mejor me muevo.<br /><br /><pre class="prettyprint linenums">from PySFML import sf<br /><br />class Sprite&#40;sf.Sprite&#41;:<br /><br />  def __init__&#40;self,route&#41;:<br />    i = sf.Image&#40;&#41;<br />    i.LoadFromFile&#40;route&#41;<br />    sf.Sprite.__init__&#40;self,i&#41;<br />    self._saltando = False<br />    self._factor_de_salto = 15<br /><br /><br />  def saltar&#40;self&#41;:<br />    if not self._saltando:<br />      self._saltando = True<br />      self._speedy = -self._factor_de_salto<br /><br />  def actualizar&#40;self&#41;:<br />    if self._saltando:<br />      x,y = self.GetPosition&#40;&#41;<br />      y += self._speedy<br />      self.SetPosition&#40;x,y&#41;<br />      print self._speedy<br />      if self._speedy &gt; self._factor_de_salto:<br />         self._saltando = False</pre><br /><br />Como puedes ver, el método saltar comprueba que ya no esté saltando. Así, aunque llames al método no tendrá ningún efecto.<br /><br />Respecto a si es una chapuza o no, más o menos lo es. Si quieres realismo, tienes que considerar que la gravedad hace que las velocidades cambien de manera no lineal, y en este código cambian linealmente. No sé demasiado de física en los juegos, pero supongo que si utilizas un motor de física como box2D puedes hacerlo, pero eso ya es cuestión de tiempo y ganas.<br /><br />Por otro lado, te aconsejo que mejores un poco en la programación. Para hacer juegos es muy importante el arte, pero coger soltura<br />en cosas como éstas pueden hacerte más fuerte frente a este tipo de problemas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Dom Jun 05, 2011 10:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-04T23:13:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5616#p5616</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5616#p5616"/>
<title type="html"><![CDATA[Re: saltar - clase - SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5616#p5616"><![CDATA[
Ya consegui mas o menos que me saltara, aunque creo que es una forma muy chapucera nose si sera asi....., simplemente puse lo siguiente en la funcion actualizar de la clase sprite.<br /><pre class="prettyprint">void sprite::actualizar&#40;&#41;{<br />    posy+=speedy;<br /><br />    if&#40;salto==1&#41;<br />        speedy++;<br /><br />    if&#40;speedy==9&#41;{<br />        salto=0;<br />        speedy=0;<br />    }<br />}</pre><br /><br />Ahora lo que queria conseguir es que si esta realizando la accion de saltar no pueda volver a saltar, porque sino sube hasta arriba del mapa dandole muchas veces seguidas a la tecla de saltar.<br /><br />Gracias por tu tiempo! ; )<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Sab Jun 04, 2011 11:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-06-04T22:35:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5615#p5615</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5615#p5615"/>
<title type="html"><![CDATA[Re: saltar - clase - SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5615#p5615"><![CDATA[
Por lo que parece, la rutina de saltar está bien. No tengo muy claro si más adelante controlas que deje de saltar en el momento oportuno, (por ejemplo, si speedy vuelve a valer 0, pero eso simplemente tendría que hacerlo caer más.<br /><br />Dime que te da el programa a ver si puedo ayudarte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab Jun 04, 2011 10:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-04T21:16:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5614#p5614</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5614#p5614"/>
<title type="html"><![CDATA[Re: saltar - clase - SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5614#p5614"><![CDATA[
Muchas gracias por tu amplia respuesta, la verdad es que me has aclarado bastante, pero aun no consigo del todo que funcione.<br />Muestro algo breve del codigo para ver si veis algo mal.<br />sprite.cpp<br /><pre class="prettyprint">sprite::sprite&#40;&#41;{<br />     salto=0;<br />}<br />void sprite::saltar&#40;&#41;{<br />    speedy=-10;<br />    salto=1;<br />}<br />void sprite::actualizar&#40;&#41;{<br />    if&#40;salto==1&#41;<br />        speedy++;<br />}</pre><br />main.cpp<br /><pre class="prettyprint">while&#40;done==0&#41;{<br /><br />        if&#40;saltando==1&#41;{<br />            personaje.actualizar&#40;&#41;;<br />        }<br />        DibujaSprite&#40;ventana&#41;;<br /><br />       //Aqui antes irian mas cosas de la manejadora de eventos<br />       switch&#40;event.key.keysym.sym&#41;{<br />                    case SDLK_e:<br />                        personaje.saltar&#40;&#41;;<br />                        saltando=1;<br />                        break;<br />       }<br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Sab Jun 04, 2011 9:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-06-04T20:40:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5613#p5613</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5613#p5613"/>
<title type="html"><![CDATA[Re: saltar - clase - SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5613#p5613"><![CDATA[
Tiene pinta de que lo que intentas es incrementar su velocidad en el salto hacia arriba y luego decrementarla.<br /><br />Esto está bien, pero piensa que lo estás haciendo de golpe, por lo que preparas tu sprite, cambias tu posición, pero cuando dibujas es como<br />si ya hubiera caido del salto. Es decir, al principio incrementas su velocidad, pero luego la vuelves a decrementar dejándola como estaba y,<br />por tanto, dejando al sprite en la misma posición.<br /><br />Para hacerlo de manera correcta te aconsejo los siguientes pasos.<br /><br />En el método saltar, en lugar de cambiar la posición activa un estado dentro de la clase para saber que tu sprite está saltando.<br />Luego, añade a tu bucle de control un método update al sprite que se llame antes de dibujarlo. En este método, comprueba si el objeto<br />está saltando, haciendo en ese caso la animación de manera incremental, cambiando el valor de la posición en cada dibujado. De esa manera conseguirás la animación, aunque puede que con 10 frames para el salto no baste dependiendo de los FPS que estés utilizando.<br /><br />Espero que te sirva de ayuda. No puedo aportarte código xq no tengo tiempo ni compilador para mirarlo, pero creo que con la idea te puede bastar para implementarla<br />tu mismo o incluso mejorarla <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab Jun 04, 2011 8:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-04T19:47:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5612#p5612</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5612#p5612"/>
<title type="html"><![CDATA[saltar - clase - SDL - &quot;SOLUCIONADO&quot;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1167&amp;p=5612#p5612"><![CDATA[
Hola buenas, tengo hecha una clase para los sprites para que realicen determinadas funciones, pero no consigo que el sprite realice un salto.<br />os muestro la parte de codigo de la clase sprite a ver si me pudierais hechar una mano.<br /><pre class="prettyprint">void sprite::saltar&#40;&#41;{<br />    speedy=5;<br />    for&#40;int i=1;i&lt;=10;i++&#41;{<br />        if&#40;i&lt;=5&#41;{<br />            posy-=speedy;<br />            //if&#40;i%2==0&#41;<br />                speedy--;<br />        }else{<br />            posy+=speedy;<br />            //if&#40;i%2==0&#41;<br />                speedy++;<br />        }<br />    }<br />}</pre><br /><br />edito: El código lo tengo en el último post solucionado<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Sab Jun 04, 2011 7:47 pm</p><hr />
]]></content>
</entry>
</feed>