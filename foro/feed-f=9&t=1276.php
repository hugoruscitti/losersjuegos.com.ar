<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1276" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-09-18T03:50:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1276</id>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-09-18T03:50:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5944#p5944</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5944#p5944"/>
<title type="html"><![CDATA[Re: Dudas en sintaxis]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5944#p5944"><![CDATA[
Muy bien quedo asi entonces, dos archivos en mi proyecto uno llamado ventana.py y el otro colores.py vamos con el primero<br /><br />ventana.py<br /><pre class="prettyprint">#<br />#Autor: Kyrian Ruiz<br />#<br />import pygame<br />import colores<br /><br /><br /><br /><br />def main&#40;&#41;:<br /><br />    pygame.init&#40;&#41; #Inicia todos los modulos de pygame<br />    pygame.display.set_caption&#40;&quot;Mi primera ventana&quot;&#41;<br />    pantalla=pygame.display.set_mode&#40;[400,400]&#41;<br />    Salir=False<br />    r1 = pygame.Rect&#40;50,50,45,45&#41;<br />    <br />    relog= pygame.time.Clock&#40;&#41;<br />    while Salir!= True: #Loop principal<br /><br />        for event in pygame.event.get&#40;&#41;:#Lee todos los eventos que se generen ya sea precionar una tecla o hacer un clic<br />            if event.type == pygame.QUIT:<br />                Salir=True<br />        relog.tick&#40;25&#41;<br />        <br />        pantalla.fill&#40;colores.blanco&#41;<br />        pygame.draw.rect&#40;pantalla,colores.azul,r1&#41;<br />        pygame.display.update&#40;&#41;<br />    pygame.quit&#40;&#41;<br /><br /><br /><br /><br />main&#40;&#41;</pre><br />####################################################################################<br />####################################################################################<br />colores.py<br /><pre class="prettyprint">blanco = &#40;255,255,255&#41;<br />rojo = &#40;255,0,0&#41;<br />azul = &#40;0,0,255&#41;</pre><br /><br />y el resultado es un cuadro de color azul en la ventana de 400x400. En mi Blog llevare un seguimiento de lo que llevo, no sera un proyecto masivo solo educativo para despues arrancarme con el fuerte, desarrollar buenas aplicaciones que no le pidan nada a las comerciales usando 100% python bueno gracias por su ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Dom Sep 18, 2011 3:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-09-17T21:33:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5942#p5942</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5942#p5942"/>
<title type="html"><![CDATA[Re: Dudas en sintaxis]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5942#p5942"><![CDATA[
Hay diferentes formas.<br /><br />Una buena manera puede ser dividir estas &quot;constantes&quot; en un módulo e importar ese módulo. Por ejemplo creas un módulo colores.py con<br />el siguiente contenido.<br /><br /><pre class="prettyprint">blanco = &#40;255,255,255&#41;<br />rojo = &#40;255,0,0&#41;<br />azul = &#40;0,0,255&#41;</pre><br /><br />Desde otro fichero, lo utilizas de ésta manera.<br /><br /><pre class="prettyprint">import colores<br /><br />llena_pantalla_color&#40;colores.blanco&#41;</pre><br /><br />Otra manera, podría ser con diccionarios, pero para mi manera de verlo es mucho más limpia esta manera y seguramente más natural en python.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab Sep 17, 2011 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-09-17T18:53:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5941#p5941</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5941#p5941"/>
<title type="html"><![CDATA[Dudas en sintaxis]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1276&amp;p=5941#p5941"><![CDATA[
Hola gente como estan bueno es un ejemplo muy basico pero por algo se empieza, lo que quiero hacer es agrupar mi codigo<br /><pre class="prettyprint">#<br />#Autor: Kyrian Ruiz<br />#<br />import pygame<br /><br /><br /><br /><br />def main&#40;&#41;:<br /><br />    pygame.init&#40;&#41; #Inicia todos los modulos de pygame<br />    pygame.display.set_caption&#40;&quot;Mi primera ventana&quot;&#41;<br />    pantalla=pygame.display.set_mode&#40;[400,400]&#41;<br />    Salir=False<br />    r1 = pygame.Rect&#40;50,50,45,45&#41;<br />    blanco=&#40;225,225,255&#41;<br />    azul = &#40;70,70,190&#41;<br />    relog= pygame.time.Clock&#40;&#41;<br />    while Salir!= True: #Loop principal<br /><br />        for event in pygame.event.get&#40;&#41;:#Lee todos los eventos que se generen ya sea precionar una tecla o hacer un clic<br />            if event.type == pygame.QUIT:<br />                Salir=True<br />        relog.tick&#40;25&#41;<br />        <br />        pantalla.fill&#40;blanco&#41;<br />        pygame.draw.rect&#40;pantalla,azul,r1&#41;<br />        pygame.display.update&#40;&#41;<br />    pygame.quit&#40;&#41;<br /><br /><br /><br /><br />main&#40;&#41;</pre><br />Bueno mi intencion es llevar mas orden en mis códigos por ejemplo sobre los colores de pantallas quiero agruparlo asi:<br /><pre class="prettyprint">def colores&#40;&#41;:<br />                    blanco = &#40;225,225,225&#41;</pre><br /><br />para poder usarlo en mi código, mi duda es como puedo ocuparlo de esa forma para solo el nombre del modulo mas el color y asi sea mas facil del desarrollo para otros programadores, de antemano muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Sab Sep 17, 2011 6:53 pm</p><hr />
]]></content>
</entry>
</feed>