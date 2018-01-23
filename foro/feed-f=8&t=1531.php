<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1531" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-08-10T00:37:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1531</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-08-10T00:37:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7005#p7005</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7005#p7005"/>
<title type="html"><![CDATA[Re: pasar imagen a unos y ceros]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7005#p7005"><![CDATA[
<blockquote><div><cite>xulubkisin escribió:</cite><br />&quot;surface&quot; no esta definido<br /></div></blockquote> eso es porque surface es un tipo de dato, como entero o flotante, pero que lo define pygame... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />bueno, aquí esta el código que hace eso... pero enserio practica un poco más Python <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><pre class="prettyprint">#!/usr/bin/env python<br /># -*- coding: utf-8 -*-<br />import pygame<br />from pygame import *<br /><br />#este programa importa una imagen y la trasforma en 0 y 1.<br />#inicializamos<br />pygame.init&#40;&#41;<br />pygame.display.init&#40;&#41;<br /><br />screen = pygame.display.set_mode&#40;&#40;300,300&#41;&#41;<br /><br />#cargamos la imagen... yo utilizo una que tenia llamada &quot;OK.png&quot;, remplazalo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />imagen = pygame.image.load&#40;&quot;Ok.png&quot;&#41;.convert_alpha&#40;&#41;<br /><br />#obtenemos el ancho y el alto...<br />ancho = imagen.get_width&#40;&#41;<br />alto = imagen.get_height&#40;&#41;<br /><br />#creamos una lista de &quot;tonos negros&quot; o oscuros...<br />tonos_negros = []<br />for i in xrange&#40;101&#41;:<br />    tonos_negros.append&#40; &#40;i,i,i&#41; &#41;<br /><br />#creamos el archivo...<br />archivo = open&#40;&quot;imagen_01.txt&quot;, &quot;w&quot;&#41;<br /><br />#una cadena donde guardaremos los 1 y 0...<br />cadena = &quot;&quot;<br /><br />#recorremos la imagen...<br />for y in xrange&#40;alto&#41;:<br />    for x in xrange&#40;ancho&#41;:<br />        #tomamos el color del pixel <br />        color = imagen.get_at&#40;&#40;x, y&#41;&#41;<br />        #si el color esta en los tonos negros...<br />        if color in tonos_negros:<br />            cadena+=&quot;0&quot;<br />        #si es un tono &quot;claro&quot;<br />        else:<br />            cadena+=&quot;1&quot;<br />    cadena+=&quot;\n&quot;    <br />    #y escribimos la cadena al archivo...<br />    archivo.write&#40;cadena&#41;<br />    #limpiamos la cadena para empezar de nuevo...<br />    cadena = &quot;&quot;<br /><br />#cerramos todos y nos vamos<br />archivo.close&#40;&#41;<br />pygame.quit&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Ago 10, 2012 12:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xulubkisin]]></name></author>
<updated>2012-08-09T15:11:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7004#p7004</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7004#p7004"/>
<title type="html"><![CDATA[Re: pasar imagen a unos y ceros]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7004#p7004"><![CDATA[
hermano muchas gracias por la respuesta, me voy a poner a mirar el codigo a ver. gracias<br /><br />pues hermano, ahorita revisando e intentando hacerlo, no me da, lo intento con surface.get_at, pero me dice que &quot;surface&quot; no esta definido<br />sera que vos me podes esplicar bien el codigo como a un niño de primaria, es que se me hace dificil, por que apenas estoy aprendiendo a usar<br />el python. desde ya muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2115">xulubkisin</a> — Jue Ago 09, 2012 3:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-08-09T03:08:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7001#p7001</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7001#p7001"/>
<title type="html"><![CDATA[Re: pasar imagen a unos y ceros]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7001#p7001"><![CDATA[
Bueno, hay un procedimiento, aun que lo considero muy &quot;tosco&quot;, pero es el mas simple.<br /><br />Para empezar, ¿Para que transformar la imagen en una matriz, si por definición, las imágenes son matrices bidimensionales? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />Aquí en pseudocódigo:<br /><br /><pre class="prettyprint">imagen = cargar_la_imagen&#40;&#41;<br />for&#40;x=0, x &lt; ancho_imagen, x++&#41;<br />    for&#40;y=0, y &lt; alto_imagen, y++&#41;<br />        //recorremos pixel por pixel de la imagen...<br />        color = dame_color_del_pixel_en&#40;imagen, x,y&#41;<br />        if color es negro:<br />            imprimimos a pantalla o archivo &quot;0&quot;<br />        else:<br />            imprimimos a pantalla o archivo &quot;1&quot;</pre><br /><br />Si utilizas SDL, para obtener el color de un determinado pixel de la imagen se utiliza la función &quot;getpixel&quot; (aquí esta la api: <a href="http://www.libsdl.org/cgi/docwiki.cgi/Pixel_Access" class="postlink">http://www.libsdl.org/cgi/docwiki.cgi/Pixel_Access</a>)<br /><br />Si utilizas Pygame, es con el método Surface.get_at() (aquí esta el uso: <a href="http://www.pygame.org/docs/ref/surface.html#Surface.get_at" class="postlink">http://www.pygame.org/docs/ref/surface.html#Surface.get_at</a> )<br /><br />Espero que te sirva <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br />( hubiera contestado antes, pero he estado ocupado  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> )<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Ago 09, 2012 3:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xulubkisin]]></name></author>
<updated>2012-08-07T15:55:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7000#p7000</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7000#p7000"/>
<title type="html"><![CDATA[pasar imagen a unos y ceros]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1531&amp;p=7000#p7000"><![CDATA[
bueno señores, mi duda es la siguiente, quisiera saber si es posible pasar una imagen de preferencia en formato png, la imagen solo tiene color negro, y lo demas en transparente. o pues si no se puede asi, seria en una imagen con fondo blanco, para pasarla a &quot;1&quot; y &quot;0&quot; en python, ya sea cargandola en una matriz o para sacarla en un txt, la cosa seria que cualquier valor por ensima de &quot;0&quot; sea tomado como &quot;1&quot;. muchas gracias al que pueda ayudarme.<br />y pues cual seria el metodo o procedimiento para hacer esto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2115">xulubkisin</a> — Mar Ago 07, 2012 3:55 pm</p><hr />
]]></content>
</entry>
</feed>