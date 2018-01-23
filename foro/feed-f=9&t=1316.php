<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1316" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-15T10:24:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1316</id>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-10-15T10:24:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1316&amp;p=6104#p6104</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1316&amp;p=6104#p6104"/>
<title type="html"><![CDATA[Re: Mapa aleatorio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1316&amp;p=6104#p6104"><![CDATA[
No tengo muy claro el propósito de tu generador de mapas aleatorios, pero supondré que la idea es general mapas al estilo del generador del legendario Age of Empires, es decir, generar mapas medianamente realistas donde, por ejemplo, los árboles llenan áreas parecidas a un bosque, hay montones de piedra unidos, cambios en el suelo uniformes, etc etc.<br /><br />Una idea que yo creo que puede funcionar (con un resultado seguro que peor que el del ejemplo) es tomar una celda de tu mapa aleatoria. De ella, eliges uno de tus terrenos de manera aleatoria. A partir de ahí te expandes, también de manera aleatoria, en las dimensiones x e y. Hay muchos algoritmos que utilizan técnicas parecidas a esta y se aplican a todo tipo de ámbitos, por lo que supongo que el resultado puede que sea bueno.<br /><br /><ul>Para ser un poco más concreto, trataré de explicarlo con pseudocódigo:<br /><br />Tomar una celda aleatoria del mapa.<br /><br />Tomar un valor aleatorio de amplitud en la dimensión x (anchura) y otro para la y (altitud).<br /><br />Para cada una de las filas, se toman valores aleatorios de variación, oscilando entre 2 y -2 u otros valores umbral alterando la altitud, o incluso <br />la anchura, para que no quede todo con cuadrados poco realistas.<br /><br /></ul><br />En su día yo intenté también implementar un generador de mapas aleatorios, pero la verdad que no tuve mucha suerte XD.<br /><br />Bueno, un saludo y suerte, espero que la idea te ayude aunque no sea tan concreta como un trozo de código.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab Oct 15, 2011 10:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Manoloide]]></name></author>
<updated>2011-10-15T06:02:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1316&amp;p=6103#p6103</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1316&amp;p=6103#p6103"/>
<title type="html"><![CDATA[Mapa aleatorio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1316&amp;p=6103#p6103"><![CDATA[
Hola me presento, mi nombre es manoloide y empece hace tres días con python y pygame... pero estoy queriendo armar un generador de mapas aleatorios, la verdad hice una brusqueda media pobre por internet, pero tal vez alguno me tire alguna idea, o tal vez a alguien le sirve lo que hice hasta ahora. aunque no este contento con el resultado creo que voy encaminado. saludos y gracias <br /><br />hay una parte comentada, que es con la que había empezado. <br /><br /><pre class="prettyprint">import pygame<br />import random<br /><br />pygame.init&#40;&#41;<br />pantalla = pygame.display.set_mode&#40;[400,400]&#41;<br />pygame.display.set_caption&#40;&quot;Ok <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" />&quot;&#41;<br />reloj1=pygame.time.Clock&#40;&#41;<br /><br /><br />nada=pygame.image.load&#40;&#39;img/nada.png&#39;&#41;.convert_alpha&#40;&#41;<br />piedra=pygame.image.load&#40;&#39;img/piedra.png&#39;&#41;.convert_alpha&#40;&#41;<br />piedrao=pygame.image.load&#40;&#39;img/piedrao.png&#39;&#41;.convert_alpha&#40;&#41;<br />suelo=pygame.image.load&#40;&quot;img/suelo.png&quot;&#41;.convert_alpha&#40;&#41;<br /><br />imagenes=[suelo,piedra,piedrao,nada]<br />mapa= [ [ 0 for i in range&#40;40&#41; ] for j in range&#40;40&#41; ]<br /><br />#mapa totalmente aleatorio<br />for d1 in range&#40;40&#41;:<br />    for d2 in range&#40;40&#41;:<br />        mapa[d1][d2]= random.randrange&#40;0,4&#41;<br />#se fija cual es el que mas lo rodea y lo convierte <br />for d1 in range&#40;40&#41;:<br />    for d2 in range&#40;40&#41;:<br />contador=[0]*4<br />for i in range&#40;-1,2&#41;:<br />for j in range&#40;-1,2&#41;:<br />if &#40;-1&lt;&#40;d1+i&#41;&lt;40&#41;and&#40;-1&lt;&#40;d2+j&#41;&lt;40&#41;:<br />pito = mapa[d1+i][d2+j]<br />contador[pito]+=1<br />max = -1<br />for x in range&#40;4&#41;:<br />if &#40;contador[x]&gt;max&#41;:<br />max = contador[x]<br />num = x<br />mapa[d1][d2]=num<br /><br />    <br />&#39;&#39;&#39;<br />for d1 in range&#40;40&#41;:<br />    for d2 in range&#40;40&#41;:<br />        mapa[d1][d2]= 2<br />for x in range&#40;200&#41;:<br />mapa[random.randrange&#40;0,40&#41;][random.randrange&#40;0,40&#41;]= 1<br />&#39;&#39;&#39;<br /><br />#se fija si dos casilleros mas asi la dreche y izquierda son piedra y sin son convierte al sieguien<br />&#39;&#39;&#39;for d1 in range&#40;40&#41;:<br />    for d2 in range&#40;40&#41;:<br />        if mapa[d1][d2]==1:<br />if &#40;d1 &lt;38&#41;and&#40;mapa[d1+2][d2]==1&#41;:<br />mapa[d1+1][d2]==1<br />if &#40;d2 &lt;38&#41;and&#40;mapa[d1][d2+2]==1&#41;:<br />mapa[d1][d2+1]==1&#39;&#39;&#39;<br /><br /><br />def dibujar&#40;sup,mapa,img&#41;:<br />for i in range&#40;40&#41;:<br />for j in range&#40;40&#41;:<br />sup.blit&#40;img[mapa[i][j]],&#40;i*10,j*10&#41;&#41;<br /><br />def main&#40;&#41;:<br />salir=False<br /><br />while salir!=True:#loop principal<br />for event in pygame.event.get&#40;&#41;:<br />if event.type == pygame.QUIT:<br />salir=True<br />reloj1.tick&#40;20&#41;<br /><br />dibujar&#40;pantalla,mapa,imagenes&#41;<br />pygame.display.update&#40;&#41;<br /><br />pygame.quit&#40;&#41;<br /><br /><br />main&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2523">Manoloide</a> — Sab Oct 15, 2011 6:02 am</p><hr />
]]></content>
</entry>
</feed>