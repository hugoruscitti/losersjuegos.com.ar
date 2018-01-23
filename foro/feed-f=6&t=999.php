<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=999" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-08T05:54:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=999</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-01-08T05:54:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4735#p4735</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4735#p4735"/>
<title type="html"><![CDATA[Re: como manejo un sprite sheet con PySFML?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4735#p4735"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br /><blockquote><div><cite>shackra escribió:</cite>¿como puedo dibujar solo una seccion de un sprite sheet en la pantalla del juego? por ejemplo, usando estas imágenes de Doraemon (el gato cósmico, glol). ya me fije en la referencia de las clases de PySFML pero no encuentro nada significativo, así que espero que alguien me indique como hacer lo que necesito :p.<br /></div></blockquote><br /><br />Hace un tiempo escribí algo en el wiki de SFML para hacer<br />eso:<br /><br /><!-- m --><a class="postlink" href="http://www.sfml-dev.org/wiki/en/sources/spritesheets">http://www.sfml-dev.org/wiki/en/sources/spritesheets</a><!-- m --><br /><br />Usé SetSubRect como te comenta Juanxo.<br /><br />Avisanos si te sirve...</div></blockquote><br />mira tu, sabia que hugoruscitti salvaria mi dia, pero me dije: &quot;no, no, no, no te quedes ahi esperando a que alguien venga y te de todo masticado solo para que tu tragues, ¡Ponte las pilas (glol, pilas el engine xD) y trata de hacer algo tu mismo!!&quot; y ahí me la pase unas horas, mirando codigo sobre lo que me dijo Juanxo, probando en la shell interactiva hasta que.... ¡bingo!:<br /><br /><a href="http://img405.imageshack.us/i/pantallazoventanasinttu.png/" class="postlink"><img src="http://img405.imageshack.us/img405/83/pantallazoventanasinttu.png" alt="Imagen" /></a><br /><br />de todas maneras gracias chicos, no sé donde estaría si no fuera por ustedes ^_^, con cada duda resuelta siento que avanzo cada vez mas hacia mi sueño, ser un programador (y diseñador, ya que las ideas me rondan la cabeza) de vídeojuegos!! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />aquí el codigo que logre, espero que lo disfrutéis!:<br /><dl class="codebox"><dt>Code: </dt><dd><code>from PySFML import sf<br />import random, os<br /><br /># Como que me da mucha pereza y usare los objetos de color de sf.Color,<br /># Vamos a usar variables para esos objetos de color.<br />Black = sf.Color.Black<br /><br /># creamos la ventana del juego<br />ventana = sf.RenderWindow(sf.VideoMode(800,600), &quot;Prueba 4 con PySFML por Shackra&quot;)<br /><br /># obtenemos el input de los eventos de la ventana creada, mira sf.Input para mas informacion<br /># parece ser que no es necesario declarar este objeto dentro del loop para actualizar su estado...<br />entrada = ventana.GetInput()<br /><br />#intentemos usar la clase sf.Sprite.... cargamos una imagen<br />#cargamos primero una imagen con la respectiva clase...<br />imagensheet = sf.Image()<br />imagensheet.LoadFromFile(&quot;doraemon.png&quot;)<br /><br /># ahora usamos esa imagen cargada y creamos un Sprite<br />doraemon = sf.Sprite(imagensheet)<br /># sf.IntRect(left, top, right, bottom) &lt;--- por si te lo preguntabas...<br />doraemon.SetSubRect(sf.IntRect(0, 0, 43, 40))<br /><br /># iniciamos el loop del juego<br />salir = False<br />while not salir:<br />    eventos = sf.Event()<br />    while ventana.GetEvent(eventos):<br />        if eventos.Type == sf.Event.Closed:<br />            salir = True<br /><br />        if eventos.Type == sf.Event.KeyPressed:<br />            if eventos.Key.Code == sf.Key.Escape:<br />                salir = True<br /><br />        <br /><br />        #limpiamos la ventana y dibujamos los objetos en la pantalla<br />        ventana.Clear(Black)<br />        # para dibujar el sprite solo pasamos el objeto que habiamos creado anteriormente, asi de facil :p<br />        ventana.Draw(doraemon)<br />        ventana.Display()<br /><br />ventana.Close()</code></dd></dl><br /><br />bajate tambien esta imagen y ponla junto al script de python! :O<br /><img src="http://www.spriters-resource.com/genesis/doraemonyd7nng/doraemon.png" alt="Imagen" /><br /><br />saludos gente, en el proximo ejemplo, Doraemon caminara!! xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Ene 08, 2011 5:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-01-08T02:02:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4728#p4728</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4728#p4728"/>
<title type="html"><![CDATA[Re: como manejo un sprite sheet con PySFML?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4728#p4728"><![CDATA[
<blockquote><div><cite>shackra escribió:</cite><br />¿como puedo dibujar solo una seccion de un sprite sheet en la pantalla del juego? por ejemplo, usando estas imágenes de Doraemon (el gato cósmico, glol). ya me fije en la referencia de las clases de PySFML pero no encuentro nada significativo, así que espero que alguien me indique como hacer lo que necesito :p.<br /></div></blockquote><br /><br />Hace un tiempo escribí algo en el wiki de SFML para hacer<br />eso:<br /><br /><!-- m --><a class="postlink" href="http://www.sfml-dev.org/wiki/en/sources/spritesheets">http://www.sfml-dev.org/wiki/en/sources/spritesheets</a><!-- m --><br /><br />Usé SetSubRect como te comenta Juanxo.<br /><br />Avisanos si te sirve...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ene 08, 2011 2:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-01-07T22:57:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4721#p4721</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4721#p4721"/>
<title type="html"><![CDATA[Re: como manejo un sprite sheet con PySFML?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4721#p4721"><![CDATA[
de hecho, yo hice este documento con la referncia de PySFML que encontre en el SDK :p<br /><!-- m --><a class="postlink" href="http://hxc_wiki.byethost7.com/doku.php/start:proyectos:pysfml_doc">http://hxc_wiki.byethost7.com/doku.php/ ... pysfml_doc</a><!-- m --><br /><br />muy bien, gracias por vuestras respuestas, intentare hacer algo con eso y veremos que resulta!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Ene 07, 2011 10:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-01-07T18:03:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4719#p4719</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4719#p4719"/>
<title type="html"><![CDATA[Re: como manejo un sprite sheet con PySFML?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4719#p4719"><![CDATA[
La documentación de c++ te sirve para python sin apenas diferencias. También te puedes ayudar con un intérprete de python aparte. Cargas la biblioteca en python y te miras con help() cada elemento del módulo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Vie Ene 07, 2011 6:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-07T17:49:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4718#p4718</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4718#p4718"/>
<title type="html"><![CDATA[Re: como manejo un sprite sheet con PySFML?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4718#p4718"><![CDATA[
básicamente creo que tienes los mismos métodos que en C++, y en C++ tienes uno que se llama setSubRect dentro de la clase sprite, que creo que es los que buscas.<br /><br />Y como que no hay mucha documentación de PySFML, tienes el código entero xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Ene 07, 2011 5:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-01-07T15:16:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4717#p4717</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4717#p4717"/>
<title type="html"><![CDATA[como manejo un sprite sheet con PySFML?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=999&amp;p=4717#p4717"><![CDATA[
buenas a todos! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />hace unos días hice varios ejemplos con PySFML, algo... tontos pero muy útiles para desenmarañar ese misterio que rodea este binding (se escribe así?) de SFML para python, pero ahora me surge una duda...<br /><br />¿como puedo dibujar solo una seccion de un sprite sheet en la pantalla del juego? por ejemplo, usando estas imágenes de Doraemon (el gato cósmico, glol). ya me fije en la referencia de las clases de PySFML pero no encuentro nada significativo, así que espero que alguien me indique como hacer lo que necesito :p.<br /><br /><img src="http://www.spriters-resource.com/genesis/doraemonyd7nng/doraemon.png" alt="Imagen" /><br /><br />gracias de antemano! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Ene 07, 2011 3:16 pm</p><hr />
]]></content>
</entry>
</feed>