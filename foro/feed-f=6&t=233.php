<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=233" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-02-04T07:57:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=233</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-02-04T07:57:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=233&amp;p=876#p876</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=233&amp;p=876#p876"/>
<title type="html"><![CDATA[(SDL/C)Como hacer que un color haga una funcion...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=233&amp;p=876#p876"><![CDATA[
Claro que se puede, simplemente verifica primero que haya colisión y luego, en caso de haberla, si se trata de un elemento de color rojo: si todo el cuadro es rojo, no hay más que verificar colisión entre ambos, si sólo algunos pixeles del cuadro son rojos, inicia con una verificación por cajas de colisión entre el cuadro y el cursor, para luego checar por pixeles.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Feb 04, 2008 7:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Karma]]></name></author>
<updated>2008-01-28T06:57:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=233&amp;p=863#p863</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=233&amp;p=863#p863"/>
<title type="html"><![CDATA[(SDL/C)Como hacer que un color haga una funcion...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=233&amp;p=863#p863"><![CDATA[
Hola:<br /><br />  He estado viendo los tutos acerca de las colisiones,yo quisiera saber si pudiese hacer algo similar a colorkey,pero mi intencion no es transparenta si no otra cosa,me explico:Tengo una ventana de 640x480,esta cargada una imagen del mismo tamaño en una superficie,hay un cuadro en la poscicion 10x,20y,40w,40h; ese cuadro es de color rojo,hay un cursor que se mueve con teclas y esta en la cordenada 200,200.Muevo el cursor hacia el cuadro rojo...Podria hacerse que cuando el cursor(sprite) este en contacto con el color rojo,se le dé el valor de uno a una variable,por ejemplo &quot;mensaje&quot; y cuando el cursor(sprite)salga de color rojo el velor de &quot;mensaje&quot; vuelva a ser 0?.<br /><br /> lo que pretendo hacer es que cuando el sprite este sobre o debajo del color rojo,cambie el valor de una variable,cuando ya no este en contacto,hacer que la variable vuelva a ser 0?<br /><br />  interpreto esto de manera que pueda modificar la imagen mediante paint aunque sea solo un color(el rojo lo pongo de ejemplo)ya que ese cuadro podria tener cualquier forma aun que le otogue solo un valor a una sola variable(1,mensaje).<br /><br />  gracias por adelantado <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1877">Karma</a> — Lun Ene 28, 2008 6:57 am</p><hr />
]]></content>
</entry>
</feed>