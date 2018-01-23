<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1114" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-14T17:53:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1114</id>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-04-14T17:53:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5411#p5411</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5411#p5411"/>
<title type="html"><![CDATA[Re: Consulta sobre atributos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5411#p5411"><![CDATA[
Excelente Hugo Gracias!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Jue Abr 14, 2011 5:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-04-14T05:04:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5410#p5410</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5410#p5410"/>
<title type="html"><![CDATA[Re: Consulta sobre atributos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5410#p5410"><![CDATA[
Podrías hacer algo así:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;                                                                                                                                                           <br /><br />b = pilas.actores.Actor&#40;&#41;<br /><br />def mover_nave&#40;&#41;:<br />    velocidad = 5<br />    control = pilas.mundo.control<br /><br />    if control.izquierda:<br />        b.rotacion = -90<br />        b.x -= velocidad<br />    elif control.derecha:<br />        b.rotacion = 90<br />        b.x += velocidad<br /><br />    if control.arriba:<br />        b.rotacion = 0<br />        b.y += velocidad<br />    elif control.abajo:<br />        b.rotacion = 180<br />        b.y -= velocidad<br /><br /><br />pilas.ejecutar_cada&#40;0.05, mover_nave&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br />Es decir, poner una funcion a ver todo el tiempo al teclado. Si pulsan<br />hacia la izquierda, mueves al personaje decrementando la coordenada<br />X y lo pones mirando en esa dirección. Luego algo similar para el resto<br />de las direcciones.<br /><br />¿Entendí bien tu pregunta?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Abr 14, 2011 5:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-04-14T04:48:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5408#p5408</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5408#p5408"/>
<title type="html"><![CDATA[Consulta sobre atributos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1114&amp;p=5408#p5408"><![CDATA[
Ola gente como va, quería consultarles como hacer que un actor tenga el atributo de cambiar de orientación, al teclear las flechas direccionales del teclado o según posición del mouse.<br /><br />Ejemplo: cuando presione una flecha, este se voltee en la dirección al cual se esta señalando.( mirar para delante o para atrás, para abajo o arriba)<br /><br />Desde ya GRACIAS!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Jue Abr 14, 2011 4:48 am</p><hr />
]]></content>
</entry>
</feed>