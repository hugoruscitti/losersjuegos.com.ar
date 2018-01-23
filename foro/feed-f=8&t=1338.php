<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1338" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-11-30T14:35:17+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1338</id>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-11-30T14:35:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6216#p6216</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6216#p6216"/>
<title type="html"><![CDATA[Re: Duda con Python: acceder a variables desde objetos.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6216#p6216"><![CDATA[
Jajaja sabia que se te había olvidado.<br />Pues si quieres, postèa el código y talves te pueda contestar lo de la lista y la string. La verdad nunca me habia cruzado con este problema, puede que si juego un rato con tu codigo entienda que está pasando.<br /><br />Un saludo y suerte en todo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mié Nov 30, 2011 2:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-11-30T07:47:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6213#p6213</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6213#p6213"/>
<title type="html"><![CDATA[Re: Duda con Python: acceder a variables desde objetos.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6213#p6213"><![CDATA[
Muchas gracias MrBB4, la verdad es que no me acordaba <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />. Nunca he trabajado con metaclases así que miraré a ver como funciona eso y trataré de implementarlo. De todas formas me gustaría entender lo que pregunto arriba, porqué con una lista si puedo hacerlo y con un string no?<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mié Nov 30, 2011 7:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-11-29T14:08:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6211#p6211</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6211#p6211"/>
<title type="html"><![CDATA[Re: Duda con Python: acceder a variables desde objetos.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6211#p6211"><![CDATA[
Hola @kaiser.<br />Pues resulta que yo tambien estoy trabajando con el mismo sistema y la mejor solución es utilizar la metaclase <span style="font-style: italic">Singleton()</span>. Lo que singleton hace es que se pueda crear un solo objeto de cierta clase. Osea que sin importar cuantos objetos se creen en tu programa, con esta clase que tiene a singleton como metaclase, todos se referiran a un mismo objeto. Entonces lo que se hace es crear una clase <span style="font-style: italic">Director()</span> con la que deberás creará en todos tus scripts un objeto de esta clase, el cual será el mismo para todos los scripts. Dentro de este &quot;<span style="font-style: italic">Director()</span>&quot; se encontrarán las escenas y asunto resuelto. Ahora puedes llamar a las escenas desde cualquier parte de tu programa y pasar de una a otra sin problema.<br /><br />La explicación y el desarrollo de como hacer esto lo encontrarás <a href="http://aventurapygame.blogspot.com/2011/02/estados-del-juego.html" class="postlink">aquí</a>. Este link fue prescentado al foro por @kiketom hace un tiempo en <a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=2&amp;t=1285&amp;start=0" class="postlink">este post</a>, y de hecho acabo de ver que al final del post nosotros dos hablamos por un momento. Debe ser que no te acuerdas de haberlo leido.<br /><br />Espero te sirva.<br />Saludos y bendisiones.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Nov 29, 2011 2:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-11-28T23:32:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6210#p6210</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6210#p6210"/>
<title type="html"><![CDATA[Duda con Python: acceder a variables desde objetos.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1338&amp;p=6210#p6210"><![CDATA[
Hola a todos, ando desarrollando un shooter espacial y me ha surgido una duda a la hora de crear el menú. Lo estoy haciendo mediante la técnica de escenas, es decir, un archivo inicial &quot;ejecutar.py&quot; que contiene el bloque de inicialización y el bucle principal. En el bucle compruebo el valor de la variable escena de la siguiente forma (pseudocódigo):<br /><br /><pre class="prettyprint">if escena == menu:<br />menu.update&#40;&#41;<br />if escena == juego:<br />juego.update&#40;&#41;<br />etc...</pre><br />Obviamente desde el menú debo poder cambiar el valor de la variable &quot;escena&quot; de tal forma que si hago clic sobre la opción Jugar se inicie el juego, si hago clic sobre Ayuda se muestre una pantalla con instrucciones, etc. La variable &quot;escena&quot; está definida en el archivo &quot;ejecutar.py&quot; y &quot;menú&quot; es una clase definida en otro archivo. El tema está en que para que pueda realizar dicho cambio, &quot;escena&quot; debe ser una lista, inicializándola por ejemplo así: escena = [&quot;menu&quot;], y cada vez que quiera cambiar su valor debería hacerlo así: escena[0] = &quot;juego&quot;. Si intento que escena sea de tipo String no me funciona, es decir, si inicializo escena así: escena = &quot;menu&quot;, desde la clase menu no puedo hacer escena = &quot;juego&quot;.<br /><br />Así es como lo estoy haciendo ahora para que me funcione:<br />En el archivo &quot;ejecutar.py&quot; inicializo la variable escena como una lista y se la paso a la clase menu como parámetro<br /><pre class="prettyprint">escena = [&quot;menu&quot;]<br />menu = menu.Menu&#40;window, escena&#41;</pre><br />En el archivo menu.py pido la variable como parámetro y la convierto en local<br /><pre class="prettyprint">class Menu:<br />    def __init__&#40;self, window, escena&#41;:<br />        #Creamos las variables de control<br />        self.window = window<br />        self.escena = escena</pre><br />Y para modificar su valor desde menu.py:<br /><pre class="prettyprint">if clic_en_opcion_jugar:<br />self.escena[0] = &quot;juego&quot;</pre><br />Obviamente clic_en_opcion_jugar es un método inventado para no poner la enorme línea de código que realmente va ahí.<br /><br />He comprobado que si escena es de tipo string y al pasársela a menu.py la hago local con self.escena = escena, al cambiar el valor de self.escena, solo cambia el valor de self.escena pero no el de escena, es decir, es como si parámetro se hubiese pasado por valor en vez de por referencia. En cambio, si escena es de tipo lista, al cambiar el valor de self.escena cambia el valor de ambas variables como si se hubiese pasado por referencia.<br /><br />Como he dicho, haciéndolo así (con una lista) me funciona, porque no puedo hacerlo usando por ejemplo un string?<br /><br />Un saludo y gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Lun Nov 28, 2011 11:32 pm</p><hr />
]]></content>
</entry>
</feed>