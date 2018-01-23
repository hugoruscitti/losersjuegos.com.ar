<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1536" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-08-16T05:26:00+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1536</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-08-16T05:26:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1536&amp;p=7021#p7021</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1536&amp;p=7021#p7021"/>
<title type="html"><![CDATA[SFML: muchos ejemplos!! version python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1536&amp;p=7021#p7021"><![CDATA[
Hola <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Sí no mal recuerdo, el 21 de marzo del 2011 (hace 1 año, 4 meses y 26 dias, segun <a href="http://www.wolframalpha.com/input/?i=2011-03-21+to+present" class="postlink">Wolfram</a> a momento de publicar éste post <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> ) inicie un <a href="https://bitbucket.org/shackra/ejemplos-pysfml" class="postlink">repositorio en bitbucket.org con varios (o muchos) ejemplos usando el modulo SFML para python</a>, el cual hace 1 año, 4 meses y 26 dias estaba disponible en su version 1.6.<br />En estos momentos, luego de 1 año, 4 meses y 22 dias, logre conseguir que unos bindings &quot;no oficiales&quot; funcionaran en mi distro (ya que los oficiales daban mucha lata), así que inicie la migracion del codigo fuente de los ejemplos a SFML 2 RC.<br /><br />La verdad, la API de SFML es maravillosa, hasta el  momento tampoco no me he sentido desilusionado por alguna carencia tecnica o algo parecido, así que si deseas cambiarte de Pygame a SFML (<span style="font-weight: bold">Pilas</span> tambien es una excelente opcion <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> ), <a href="http://openhelbreath.net/python-sfml2/installation.html" class="postlink">te recomiendo que pruebes estos bindings de SFML para python!</a><br /><br />Algunos ejemplos debo de re-escribirlos (ya que ahora sé más que en aquella epoca) y otros aun debo de pasarlos a la nueva API, así que si no deseas portar ninguno de tus proyectos a SFML, puedes ayudarme con esta pequeña tarea y así sentir como fluye las instrucciones <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br />ahora bien, que tan largo es un &quot;hola mundo&quot; con SFML? pues aqui tienen!:<br /><br /><pre class="prettyprint linenums">#/usr/bin/env python2<br /># coding: utf-8<br /><br />import sfml<br /><br />ventana = sfml.RenderWindow&#40;sfml.VideoMode&#40;320, 240&#41;, &quot;Prueba!&quot;&#41;<br />ventana.framerate_limit = 60<br /><br />texto = sfml.Text&#40;&quot;Hola mundo!&quot;, sfml.Font.get_default_font&#40;&#41;, 50&#41;<br />texto.color = sfml.Color.BLACK<br />texto.style = sfml.Text.BOLD | sfml.Text.ITALIC<br /><br />GRIS = sfml.Color&#40;200, 200, 200&#41;<br /><br />while ventana.opened:<br />    for evento in ventana.events:<br />        if isinstance&#40;evento, sfml.CloseEvent&#41; or \<br />                &#40;isinstance&#40;evento, sfml.KeyEvent&#41; and \<br />                     evento.code == sfml.Keyboard.ESCAPE&#41;:<br />            ventana.close&#40;&#41;<br /><br />    ventana.clear&#40;GRIS&#41;<br />    ventana.draw&#40;texto&#41;<br />    ventana.display&#40;&#41;</pre><br /><br />25 lineas (22 ignorando las tres primeras) nada mal ¿eh? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br />un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Ago 16, 2012 5:26 am</p><hr />
]]></content>
</entry>
</feed>