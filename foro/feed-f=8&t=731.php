<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=731" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-26T14:13:56+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=731</id>
<entry>
<author><name><![CDATA[JMP]]></name></author>
<updated>2010-07-26T14:13:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3541#p3541</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3541#p3541"/>
<title type="html"><![CDATA[Re: Dudas sobre mapas Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3541#p3541"><![CDATA[
Lo que dices de los enemigos podrias hacer una funcion que los creara a partir de tu posicion<br /><dl class="codebox"><dt>Code: </dt><dd><code>def posicionar(posx):<br />         x = random.randint (-200, 200) + posx<br />         return x<br /></code></dd></dl><br />no se si esta muy bien esta,<br /><br />y que cada x tiempo se llamara a un enemigo y le vayan apareciendo mientras avanza<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2295">JMP</a> — Lun Jul 26, 2010 2:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Emlett]]></name></author>
<updated>2010-07-16T21:28:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3431#p3431</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3431#p3431"/>
<title type="html"><![CDATA[Dudas sobre mapas Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3431#p3431"><![CDATA[
Juanxo:<br />   Muchas gracias por tu respuesta, disculpa la demora.<br />   No habia visto esos tutos en especifico (aunque si me vi toda la seccion, a lo mejor andaba volado xD.<br />   Voy a ver si logro entenderlos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br />   Disculpa la demora de la respuesta, la u me tiene muerto X_x<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2232">Emlett</a> — Vie Jul 16, 2010 9:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-07T17:09:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3404#p3404</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3404#p3404"/>
<title type="html"><![CDATA[Dudas sobre mapas Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3404#p3404"><![CDATA[
buenas emlet<br /><br />el tema al que te refieres es sidescrolling como bien comentas. En la seccion de ejemplos de losersjuegos tienes un muy buen ejemplo de hugo relacionado con esto. Tambien te aconsejo que te mires otro ejemplo de hugo que trata las plataformas tipicicas en mario bross y demas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Jul 07, 2010 5:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Emlett]]></name></author>
<updated>2010-07-07T05:00:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3402#p3402</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3402#p3402"/>
<title type="html"><![CDATA[Dudas sobre mapas Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=731&amp;p=3402#p3402"><![CDATA[
Bueno, primeramente decir que es primera vez qe hago un juego.... eeeeeeee bue, al grano.<br /><br />Estoy programando (o intento) un juego estilo mario bross....o metal slug.... algo asi, ambientado en mi universidad. La cosa es que no se como crear las plataformas del juego. x_X<br /><br />Mi idea es la de crear una imagen grande con las plataformas solamente, el resto transparente, hacia el lado e irla moviendo a la pantalla a medida que el jugador avance (sidescrolling creo que se llama), la cosa es que no tengo idea de como hacerlo. Quizas me digan que mueva la imagen hacia la izquierda a medida que el personaje camine (parece obvio ¿no?:roll: <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> ) pero entonces me topo con el problema de los villanos... osea, los cargo junto cuando cargo todo el juego, pero cuando mueva la plataforma ¿los tengo que mover tambien, o existe alguna funcion? osea, seria arto codigo moviendo cada personaje cada vez de que se mueva la plataforma<br />AAAAAAAAAAAAAAAAAAAAAA<br />me enredo.....<img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> <br /><br /><br />Ojala me ayan entendido, no quiero que me hagan el juego ni mucho menos, solo expliquenme para poder aprenderlo y aplicarlo.<br /><br />PD: podria ser que me incluyera al team de traduccion, solo diganme como hay que hacerlo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><br /><br />Muchas Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2232">Emlett</a> — Mié Jul 07, 2010 5:00 am</p><hr />
]]></content>
</entry>
</feed>