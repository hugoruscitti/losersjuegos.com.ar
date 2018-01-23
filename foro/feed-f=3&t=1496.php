<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1496" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-06-20T17:53:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1496</id>
<entry>
<author><name><![CDATA[nico.decara]]></name></author>
<updated>2012-06-20T17:53:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6875#p6875</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6875#p6875"/>
<title type="html"><![CDATA[Re: Ayuda]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6875#p6875"><![CDATA[
Ah ya entendi, muchas gracias por la ayuda!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2624">nico.decara</a> — Mié Jun 20, 2012 5:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2012-06-20T12:06:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6874#p6874</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6874#p6874"/>
<title type="html"><![CDATA[Re: Ayuda]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6874#p6874"><![CDATA[
Ahora mismo no conozco el código completo de ese ejemplo, pero te comento un par de cosas por si te sirve de ayuda.<br /><br />- Python utiliza tipado dinámico, es decir, si tu primero haces <span style="font-style: italic">seleccionado = False</span> y miras el tipo de <span style="font-style: italic">seleccionado</span> (con la función <span style="font-style: italic">type(seleccionado)</span>) verás que es booleano, si luego haces <span style="font-style: italic">seleccionado += 1</span> y de nuevo miras su tipo verás que ha pasado a ser int (de tipo numérico, vamos). En Python el tipo de valor que almacena la variable se ajusta automáticamente a su contenido, así que es completamente posible hacer ese tipo de cosas.<br /><br />- Para evaluar condiciones no solo se puede usar booleanos, en general un int de valor 0 se evaluará como False y un int de cualquier otro valor, positivo o negativo, se evaluará como True. Un string vacío también se evaluará como False, mientras que si contiene algún carácter se evaluará como True, etc.<br /><br />- Ejecuta este código y quizá lo entiendas mejor:<br /><pre class="prettyprint">var = True<br />print type&#40;var&#41;<br />print var<br />var += 1<br />print type&#40;var&#41;<br />print var</pre><br /><br />Como verás la variable var ha cambiado de tipo dinámicamente y aunque hemos sumado 1 su valor al final es 2, lo cual demuestra que al definirla como True el valor numérico que se le asigna es 1.<br /><br />Espero haberte ayudado, un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mié Jun 20, 2012 12:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nico.decara]]></name></author>
<updated>2012-06-19T23:02:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6872#p6872</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6872#p6872"/>
<title type="html"><![CDATA[Ayuda]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1496&amp;p=6872#p6872"><![CDATA[
Hola, estoy haciendo mi primer juego, y arranque usando el menu que explica Hugo. Es la primera vez que uso objetos y por suerte entendi bastante como funciona salvo por lo siguiente:<br /><br /><pre class="prettyprint">Class Menu:<br /> <br />    def __init__&#40;self, opciones&#41;:<br />        self.opciones = opciones<br />        self.seleccionado = False<br />        ...<br /> <br />    def actualizar&#40;self&#41;:<br />        ...<br />        if not self.mantiene_pulsado:<br />            if tecla[K_UP]:<br />                self.seleccionado -= 1<br />            elif tecla[K_DOWN]:<br />                self.seleccionado += 1<br />            elif tecla[K_RETURN]:<br />                ....<br />#Continua abajo...</pre><br /><br />no entiendo como a &quot;self.seleccionado&quot; le resta o suma 1, cuando &quot;seleccionado&quot; es definido como boolean!<br /><br />Espero que me puedan explicar! Abrazo y gracias !<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2624">nico.decara</a> — Mar Jun 19, 2012 11:02 pm</p><hr />
]]></content>
</entry>
</feed>