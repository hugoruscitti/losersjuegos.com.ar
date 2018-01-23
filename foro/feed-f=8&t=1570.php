<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1570" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-11-06T13:41:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1570</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-11-06T13:41:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7187#p7187</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7187#p7187"/>
<title type="html"><![CDATA[Re: Como reagregar objetos de una Clase en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7187#p7187"><![CDATA[
No estoy muy seguro de a que te refieres, seria muy útil que mostraras un poco del código, o seas más especifico.<br /><br />En cualquier forma, responderé como entedi...<br /><br />En teoría, los objetos no salen de pantalla a menos de que sean destruidos explícitamente. Puedes imaginar la pantalla como una ventana que te permite ver el mundo, si un objeto &quot;sale&quot; de la ventana, continua en el mundo.<br /><br />Si no lo has destruido, solo tienes que darle a sus coordenadas X, Y,  valores que estén en el interior de nuevo....<br /><br />Mira este muy sencillo ejemplo.<br /><br /><pre class="prettyprint">#!/usr/bin/env python<br /># -*- coding: utf-8 -*-<br />import pygame<br /><br />GRIS = &#40;100,100,100&#41;<br />AZUL = &#40;40,40,100&#41;<br /><br />def main&#40;&#41;:<br />    pygame.init&#40;&#41;<br />    pantalla = pygame.display.set_mode&#40;&#40;256,256&#41;&#41;<br />    delay_frames = &#40;1000/28&#41;<br />    #defino una posición para el personaje<br />    x = 100<br />    y = 100<br />    #y una variable que altera su movimiento<br />    dx = 2<br />    #variable que hace funcionar al bucle...<br />    hacer = 1<br />    while hacer:<br />        #fijamos un numero de frames <br />        pygame.time.delay&#40;delay_frames&#41;<br />        #gestionamos eventos, para poder cerrar el programa.<br />        for event in pygame.event.get&#40;&#41;:<br />            if event.type == pygame.QUIT:<br />                hacer = 0<br />            if event.type == pygame.KEYDOWN:<br />                if event.key == pygame.K_ESCAPE:<br />                    hacer = 0<br />        #dibujamos las cosas en pantalla...<br />        pantalla.fill&#40;GRIS&#41; #llenamos la pantalla de un color gris.<br />        #dibujamos un circulo azul con la posición<br />        pygame.draw.circle&#40;pantalla, #dibujarlo en la pantalla<br />                           AZUL,   #de color azul<br />                           &#40;x,y&#41;,  #en la posición x,y<br />                           10,      #con radio 5<br />                           0&#41;      #que este &quot;llena&quot;<br />        #agrego a x el valor de dx<br />        x = x+dx<br />        #si su posición x es menor a -30, o su posición en x&gt;286<br />        if x&lt;-30 or x&gt;286:<br />            dx=-dx #esto invierte la dirección<br />        <br />        pygame.display.update&#40;&#41;<br />    <br />    pygame.quit&#40;&#41;<br /><br />main&#40;&#41;</pre><br /><br />Observa que si lo ejecutas, el circulo sale de la pantalla, pero pronto regresa al interior.<br /><br />Si no es esto a lo que te referías, espero que seas un poco más especifico con tu problema por favor <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Nov 06, 2012 1:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-11-06T10:43:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7186#p7186</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7186#p7186"/>
<title type="html"><![CDATA[Re: Como reagregar objetos de una Clase en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7186#p7186"><![CDATA[
¿quieres que siempre permanezca en la pantalla?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Mar Nov 06, 2012 10:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[arielgrageda]]></name></author>
<updated>2012-11-06T05:17:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7185#p7185</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7185#p7185"/>
<title type="html"><![CDATA[Como reagregar objetos de una Clase en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1570&amp;p=7185#p7185"><![CDATA[
Hola amigos, sólo tengo una consulta, ¿Cómo puedo hacer? para re-agregar un objeto (un personaje player) que ya salio del rango X o Y de la ventana creada. Agradecería su ayuda, gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2679">arielgrageda</a> — Mar Nov 06, 2012 5:17 am</p><hr />
]]></content>
</entry>
</feed>