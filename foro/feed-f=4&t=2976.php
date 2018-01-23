<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=2976" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-12-19T22:14:12+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=2976</id>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2012-12-19T22:14:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9053#p9053</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9053#p9053"/>
<title type="html"><![CDATA[Re: problema de colision]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9053#p9053"><![CDATA[
Gracias por tu ayuda<br />ya me ha salido aunque tiene un pequeño inconveniente<br />Bueno el codigo de como me ha quedado es este<br />bool animacion::colision(animacion col, int dir,int vel)<br />{<br />    ///mira si la proxima posicion colisiona<br />    int  x2, y2;<br />    SDL_Rect reflejo;<br />    reflejo=rect;<br />    x2 = col.getx();<br />    y2 = col.gety();<br />    if(dir==0) reflejo.x+=vel;//derecha<br />    if(dir==1) reflejo.x-=vel;//iz<br />    if(dir==2) reflejo.y-=vel;//ar<br />    if(dir==3) reflejo.y+=vel;//abajo<br /><br />    return( ((reflejo.x+TILESIZE_X)&gt;x2) and<br />        ((reflejo.y+TILESIZE_Y)&gt;y2) and<br />        ((x2+TILESIZE_X)&gt;reflejo.x)and<br />        ((y2+TILESIZE_Y)&gt;reflejo.y) );<br />}<br />////////////<br />No se me habia ocurrido mirar si colisionaba antes de mover xD gracias por iluminarme jeje<br />El caso esque tiene una pequeña secuela que ami personalmente me complica el codigo y quizas tu lo veas con una perpectiva quedando un codigo mejor.<br />Esta funcion ya va genial pero pongamos que mi personaje corre 6 pixels por movimiento<br />ok perfecto<br />pero si por algun caso esa velocidad augmenta a por ejemplo haciendolo exagerado 20<br />entonces detecta la colision antes de que realmente se produzca.<br />Yo queria implementar algo de por ejemplo<br />existe colision? si, ok que distancia estas con la colision? en 18 posiciones en vez de 20? ok pues avanza 17 posiciones.<br />Para que poniendo la velocidad que quiera siempre exista un realismo de colision.<br />Para esto tengo esta funcion<br />int animacion::distancia(animacion col)<br />{<br />    //derecha<br />    int distancia=col.getx()-(rect.x+CHARSIZE_X);<br />    cout&lt;&lt;&quot;obj &quot;&lt;&lt;col.getx()&lt;&lt;&quot; yo &quot;&lt;&lt;(rect.x+CHARSIZE_X)&lt;&lt;&quot; = &quot;&lt;&lt;col.getx()-(rect.x+CHARSIZE_X)&lt;&lt;endl;<br />    return col.getx()-(rect.x+CHARSIZE_X);<br /><br />}<br />Echa solo para derecha pero seria hacerla con un if y hacerlo para todas las direcciones...<br />Y luego en el loop que miro la colision hacer:<br /><br />if(!yo.colision(obj,0,yo.getvel()))mapa.movlateral(yo.getvel());<br />else mapa.movlateral(yo.distancia(obj));<br /><br />Esto funciona, y tu ayuda me a servido mucho..te pongo esto en el comentario por si conoces alguna manera mas elegante de hacerla sino dejare esta y ya esta<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Mié Dic 19, 2012 10:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-12-19T19:39:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9052#p9052</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9052#p9052"/>
<title type="html"><![CDATA[Re: problema de colision]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9052#p9052"><![CDATA[
Ok, intenta con mandar a la función genérica las rectas de los objetos que quieres ver si colisionan.<br />Lo bonito de la función que te mostré es que no importa cual sea, detecta una colisión entre ellos.<br /><br /><blockquote><div><cite>vib escribió:</cite><br />Pone que estoy a 1 pixel de distancia con el cuadrado y por tanto no hay colision<br />pero se ve claramente que la imagen ya esta dentro del objeto a colisionar... y nose porque.<br /></div></blockquote><br /><br />Eso puede deberse a que orden esta tu bucle. Intenta primero poner con lo que revisas si se presionan teclas, después, los métodos en los cuales actualizas los elementos del juego, y finalmente los dibujas.<br /><br /><blockquote><div><cite>vib escribió:</cite><br />Esque se me ocurre la manera de dividr la funcion colision entre 4, col_derecha, col,_izkierda...i si colisiono desde la derecha, se desactiva la tecla para ir en este caso a la izkierda y asi succesivamente<br />pero creo que es una manera muy costosa y xapucera<br />Como se haria realmente?<br /></div></blockquote><br /><br />es posible, pero es mejor que pruebes con esta lógica: ¿Si lo muevo, chocara con algo?. Lo que se hace, es crear una nueva rect con la posición del personaje si lo moviéramos, revisar si choca con algo. Si no choca con nada, obviamente nuestro personaje si lo movemos no chocara y podemos sumar la posición. Si choca con algo esa nueva rect, asumimos que si movemos al personaje a esa posición chocara, y por eso no lo movemos.<br /><br />En pseudocódigo:<br /><br /><pre class="prettyprint">if presiona tecla derecha:<br />    //esta es la posición del personaje, y creamos una copia.<br />    nueva_rect = rect_personaje<br />    //a esa copia, le sumamos el correspondiente aumento en la posición...<br />    nueva_rect.x += aumento_derecha<br />    //y revisamos si choca esa recta con el aumento con algo más...<br />    if no &#40;la nueva_rect choca con algo&#41;:<br />        //y en caso de que no choque, le aumentamos la posición.<br />         rect_personaje.x+=aumento_derecha</pre><br /><br />Tal vez en la semana creo un pequeño ejemplo. Si tienes dudas, solo pregunta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Dic 19, 2012 7:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2012-12-19T12:17:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9051#p9051</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9051#p9051"/>
<title type="html"><![CDATA[Re: problema de colision]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9051#p9051"><![CDATA[
Gracias por contestar.<br />Escribi el post demasiado rapido y no me explique bien.<br />La colision la produce una clase llamada animacion <br />que contiene el rectangulo que se imprime en pantalla, x,y,w,h<br />La llama yo &quot;osea el personaje que estoy usando&quot; y col es el objeto a colisionar.<br /><br />En la foto, la colision no es con el mapa, quizas debi poner otro sprite para que se viera mejor xD...<br />La colision es con otro objeto ya sea un arbol o una mesa.<br />La deteccion de colision, ya me lo hace lo que como se ve en una de las imagenes...<br /><br />Pone que estoy a 1 pixel de distancia con el cuadrado y por tanto no hay colision<br />pero se ve claramente que la imagen ya esta dentro del objeto a colisionar... y nose porque.<br /><br />Mi duda es la siguiente...Mi personaje puedo moverlo arriba,abajo,izkierda,derecha o convinado.<br />El problema esque si hago la funcion colision...me dice si esta en colision..<br />y claro digo si esta en colision no te muevas...<br />Y claro no me deja moverme para ningun lado<br />La duda era como puedo hacerlo para que si colisiono por 1 de los lados pueda seguir moviendome libremente por los lados que no existe la colision?<br /><br />Esque se me ocurre la manera de dividr la funcion colision entre 4, col_derecha, col,_izkierda...i si colisiono desde la derecha, se desactiva la tecla para ir en este caso a la izkierda y asi succesivamente<br />pero creo que es una manera muy costosa y xapucera<br />Como se haria realmente?<br />Mexi <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Mié Dic 19, 2012 12:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-12-19T07:06:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9050#p9050</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9050#p9050"/>
<title type="html"><![CDATA[Re: problema de colision]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9050#p9050"><![CDATA[
Bueno, veo que estas utilizando colisiones en base a rectángulos, (si bien, no es lo más recomendable para un juego basado en tiles, pero, funciona <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> ).<br /><br />Asumo que el objeto &quot;rect&quot;, es un atributo de la clase y que &quot;col&quot;, es tu personaje. También, por la imagen del mapa y la forma del código de la colisión, puedo asumir que el ancho y alto del personaje es igual al del tile.<br /><br />No veo nada malo en el código de la colisión, pero, por si las dudas, puedes intentar probar este código que adapte a tu caso...<br /><br /><pre class="prettyprint">//para tu caso...<br />bool animacion::colision&#40;animacion col&#41;{<br />    int x2,x1;<br />    x2 = col.getx&#40;&#41;;<br />    y2 = col.gety&#40;&#41;;<br />    //nos ahorramos el if mandando directamente el resultado de la comparación<br />    return &#40;<br />        &#40;x2 &lt; rect.x + TILESIZE_X&#41; &amp;&amp;<br />        &#40;rect.x &lt; x2 + TILESIZE_X&#41; &amp;&amp;<br />        &#40;y2 &lt; rect.y + TILESIZE_Y&#41; &amp;&amp;<br />        &#40;rect.y &lt; y2 + TILESIZE_Y&#41;<br />        &#41;;<br />    };<br /><br />//para el caso generico...<br />bool colision&#40;SDL_Rect rect_a, SDL_Rect rect_b&#41;{<br />    return &#40;<br />        &#40;rect_a.x &lt; rect_b.x + rect_ b.w&#41; &amp;&amp;<br />        &#40;rect_b.x &lt; rect_a.x + rect_a.w&#41; &amp;&amp;<br />        &#40;rect_a.y &lt; rect_b.y + rect_b.h&#41; &amp;&amp;<br />        &#40;rect_b.y &lt; rect_a.y + rect_a.h&#41;&#41;;<br />    };</pre><br /><br />Y si continua sin funcionar, entonces, hay dos grandes preguntas que debes hacerte.<br /><br />¿Seguro qué el &quot;rect&quot; corresponde al del tile del cual quieres revisar la colisión?<br />¿Como decides cuales de que objetos colisionan?<br /><br />Me imagino que tienes una lista con todos los tiles del mapa que tienen colisión, y que revisas cada uno para ver con cual colisiona el personaje...<br /><br />Bien, de cualquier forma, espero poder ayudarte. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Dic 19, 2012 7:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[vib]]></name></author>
<updated>2012-12-18T14:16:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9049#p9049</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9049#p9049"/>
<title type="html"><![CDATA[problema de colision]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2976&amp;p=9049#p9049"><![CDATA[
Hola gente!<br />si lo se que esta es una question muy muy comun...pero ni los post ni internet a podido resolver mi duda -.-<br />Os dejo 2 imagenes del problema.<br /><!-- m --><a class="postlink" href="http://imageshack.us/f/811/pantallazota.png/">http://imageshack.us/f/811/pantallazota.png/</a><!-- m --><br /><!-- m --><a class="postlink" href="http://imageshack.us/photo/my-images/233/pantallazo1fz.png/">http://imageshack.us/photo/my-images/23 ... zo1fz.png/</a><!-- m --><br /><br />Bien esta la pantalla que es el personaje &quot; de fondo blanco&quot; que colisiona con ese rectangulo de fondo negro.<br />Ok al lado os he dejado el codigo de colision y un escrito de colision.<br />Esto solo lo tengo hecho para el movimiento de derecha pero no me sale con nada.<br />cOMO SE ve, pone que la distancia x+w del personaje esta a 1 de la x del objeto a colision, cuando ya esta dentro y por tanto deberia colisiar.<br />Luego en la otra esta tocandose en misma coordenada y pone que aun le quedan 7 posiciones.<br />what????<br />No entiendo.<br />Solo quiero hacer un movimiento de... mueve si encuentras una colision no te muevas pero puedes moverte a las direcciones que no alla colision<br /><br />Alguna ayuda plx <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2445">vib</a> — Mar Dic 18, 2012 2:16 pm</p><hr />
]]></content>
</entry>
</feed>