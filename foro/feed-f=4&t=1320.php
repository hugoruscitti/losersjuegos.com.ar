<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1320" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-19T00:46:18+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1320</id>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-10-19T00:46:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6125#p6125</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6125#p6125"/>
<title type="html"><![CDATA[Re: Colision con plataformas hechas de Sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6125#p6125"><![CDATA[
Pues que bien que te haya servido! =D<br />En cuanto a tus dudas:<br />1- Si. El grupo objetos sería equivalente a Plataformas. Era para generalizar.<br />2- La verdad no se que diferencia hay entre coliderect y spritecollide pero siempre utilizo coliderect porque no me gusta derivar de la clase sprites, me parece innecesario.<br />3- Originalmente tambien yo había hecho la función fuera del personaje, pero utilizarla dentro del personaje ayudaría a hacerla más personalizada en el caso de los bots, ya que no todos serán iguales, tienen distintas velocidades de caido por lo que los numeros que se utilizan para evitar que se pasen de largo y cosas así serían distintos.<br /><br />Suerte con tu proyecto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mié Oct 19, 2011 12:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-10-18T22:52:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6124#p6124</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6124#p6124"/>
<title type="html"><![CDATA[Re: Colision con plataformas hechas de Sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6124#p6124"><![CDATA[
Buenas, primero que nada estoy trabajando con python, y pygame. Luego contarles que realizando algunas pruebas pude determinar a que se debía el efecto &quot;raro&quot;, y es que tenia los sprites plataformas en un group distinto al group que tenia el personaje principal, por lo tanto cuando realizaba el update, clear y draw lo hacia desincronizado y producía ese efecto. Esto se arreglo creándome un group self.grupoAllSprites = pygame.sprite.RenderUpdates () y metiendo todos los sprites en el y en vez de realizar dos  update, clear y draw (uno por cada group que tenia) solo realize uno para grupoAllSprites y el efecto desapareció. <br /><br />Con respecto a la ayuda de MrBB4 que me pareció excelente y muy bien explicada!! y que voy a aplicar cuanto antes, tengo una duda, yo había implementado algo medio parecido pero no lo había hecho en la clase personaje y si en la clase Escenario, la cual realizaba el control de la siguiente manera: <br /><br /><pre class="prettyprint">for plataforma in pygame.sprite.spritecollide&#40;personaje, self.grupoPlataformas, False&#41;:<br />           if plataforma.rect.y &lt;= personaje.rect.y + personaje.rect.height + 10 and plataforma.rect.y &gt;= personaje.rect.y + personaje.rect.height - 10:</pre><br /><br />Tengo 3 preguntas, <br />1: Objeto viene a ser como un group de plataformas?? <br />2: la función colliderect que utilizaste viene a ser mas optima en rendimiento que spritecollide, la pregunta se debe a que estoy realizando el juego <br />para una pc que tiene unos recursos limitados de hardware y debo ser lo mas optimo posible.<br />3: Esta se debe también a optimizar, tu controlas la colisión desde la clase personaje, y yo en la clase escenario (mi decisión de crearlo en escenario es porque lo que hice fue modificar el típico método getDistanciaAlSuelo que se utiliza cuando se tienen Tiles, y puse el código que pegue arriba ) la pregunta es si quedaría mas optimo el control en la clase del personaje. <br /><br />Muchas gracias por la ayuda!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mar Oct 18, 2011 10:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-10-18T17:46:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6123#p6123</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6123#p6123"/>
<title type="html"><![CDATA[Re: Colision con plataformas hechas de Sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6123#p6123"><![CDATA[
Buenas.<br />Pues no entendí bien lo del efecto raro. Talves si nos muestras el codigo podamos identificar el problema. En lo que si te puedo ayudar es en que el personaje solo colicione con los pies. A principio de año me habia puesto a hacer un juego del mismo estilo del que nos comentas, lo que hice fue crear una función <span style="font-style: italic">gravedad()</span>, dentro de la clase de tu personaje, en donde si el personaje no estab tocando nada que cayera, en caso contrario que revisara que eran solo los pies. Te muestro el codigo:<br /><pre class="prettyprint">def Gravedad&#40;self&#41;:<br />    for obj in Objeto:<br />        if not self.rect.colliderect&#40;obj.rect&#41; and not self.SALTANDO:<br />            self.CAYENDO = True<br />        elif self.rect.bottom &gt;= obj.rect.top and self.rect.bottom &lt;= obj.rect.top+10 and not self.JUMPING:<br />            self.CAYENDO = False<br />            self.recty = obj.rect.top+2<br />            break</pre><br /><br />Entonces, si te fijas primero revisa que no esté tocando nada y que además no esté saltando, de este modo tu personaje podrá atravesar el objeto y pasar hacia arriba, si las dos condiciones se cumplen el personaje caerá. En caso de que de que haya un impacto el programa verificará si la base del personaje (self.rect.bottom) está por debajo debajo, o a la misma altura, del tope del objeto (obj.rect.top). Para esto se usa el signo de <span style="font-style: italic">&gt;=</span> ya que self.rect.bottom y obj.rec.top son la cordenada Y de la base y el tope de los objetos rect, correspondientemente; y como sabemos, en programación a diferencia de las matemáticas, en plano carteciano la Y crece hacia abajo. Luego de esto el programa verifica que self.rect.bottom sea menor a obj.rect.top más 10 pixeles. Entonces, lo que estamos haciendo es que estamos haciendo es verificar que la base de nuestro personaje se encuentre dentro de los primeros 11 pixeles del objeto, esto es una medida que tuve que aplicar para evitar que el personaje pasara de largo ya que la velocidad de caida del personaje era de más de un pixel por loop, por lo que si el tope del objeto estaba por ejemplo en (x, 5) y la base de mi personaje se encontraba en (x, 4) y hacia un salto de dos pixeles iva a acabar por debajo de (x, 5) y el personaje simplemente caería al vacio.<br />Otro pequeño detalle, si te fijas dentro del elif dice <span style="font-style: italic">self.recty = obj.rect.top<span style="color: #FF0000">+2</span></span>. Esto hará que el personaje, si se pasó de largo, vuelva arriba y no se note. Pero lo que quería destacar es el +2 (osea dos pixeles dentro del obj). Lo puse así porque se veia más estetico de esta manera con los sprites que yo estaba usando, talves con los tuyos no. Arreglalo a tu gusto.<br /><br />Espero haber contestado a tu necesidad y que no haya sido muy confuso. Si algo no te quedó claro, pregunta tranquilo que yo te contesto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Oct 18, 2011 5:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-10-18T03:24:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6117#p6117</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6117#p6117"/>
<title type="html"><![CDATA[Colision con plataformas hechas de Sprites]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1320&amp;p=6117#p6117"><![CDATA[
Buenas, estoy haciendo un juego de plataformas, ahora estoy implementando las colisiones del personaje principal y las diferentes plataformas, estas plataformas son Sprites (no son tiles), debido a que el juego no tendrá scrolling y las plataformas podrán tener distintos movimientos (girar sobre su eje, horizontal, vertical, etc). Si bien he logrado hacer que colisione mi personaje con las plataformas no se si el método a sido el mas optimo, además de que cuando el personaje esta encima de una plataforma, esta hace un efecto raro &quot;como que no sincroniza cuando hace el blit&quot; por lo tanto quería consultar si existe algún ejemplo o alguna manera de hacer esto lo mas optimo posible y sin que ese efecto &quot;raro&quot; aparezca. Además quiciera que mi personaje solo colisione &quot;por los pies&quot; no todo el rectangulo, como puedo hacer esto mediante rect? algún ejemplo o algo?, <br />Gracias!<br /><br />Saludos<br />Diego<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mar Oct 18, 2011 3:24 am</p><hr />
]]></content>
</entry>
</feed>