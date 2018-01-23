<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1219" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-30T18:38:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1219</id>
<entry>
<author><name><![CDATA[Aborgna]]></name></author>
<updated>2011-07-30T18:38:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5794#p5794</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5794#p5794"/>
<title type="html"><![CDATA[Re: Cuestion de rendimiento en mi RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5794#p5794"><![CDATA[
Creo que no explique bien lo que estoy haciendo.<br /><br />    El mapa general lo dividí en varios &quot;submapas&quot; de 32x32 casillas (que se escala para tener el mismo alto que la pantalla) el cual edito con el TME y los guardo como &quot;+000+000.tmx&quot;, &quot;+001-003.tmx&quot;, &quot;+008+004.tmx&quot;, etc. (serian las coordenadas &quot;x&quot; e &quot;y&quot; en el mapa grande).<br />Tengo una clase que gestiona esos submapas y que en cada ciclo, dependiendo de la posicion del jugador, crea una lista con las coordenadas de los submapas que aparecen en pantalla. Esa lista la compara con un diccionario que tiene como claves las coordenadas y como valores un objeto de clase &quot;mapa&quot;, borra los objetos sobrantes y crea los faltantes.<br /><br />    Cuando se crea un objeto &quot;mapa&quot;, este lee el archivo que le corresponde segun sus coordenadas e imprime los tiles correspondientes en una imagen grande que tiene [alto de la pantalla]*2 x [alto de la pantalla] y esta es la imagen que imprime cuando llame a la funcion &quot;imprimir&quot; de cada objeto &quot;mapa&quot;.<br /><br />    Lo hice así para poder extender el mapa infinitamente para cualquier lado sin necesidad de tocar el codigo, lo que si tiene de malo es que imprime la parte de los submapas que no entra en pantalla, pero resultó ser mas eficiente que imprimir los tiles visibles de cada submapa.<br /><br /><br />PD.: Parece que no está andando el RSS, desde el 28 que no me aparece ningun mensaje nuevo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2440">Aborgna</a> — Sab Jul 30, 2011 6:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-07-29T22:48:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5791#p5791</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5791#p5791"/>
<title type="html"><![CDATA[Re: Cuestion de rendimiento en mi RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5791#p5791"><![CDATA[
buenas aborgna:<br /><br />me alegro de que haya mejorado tu rendimiento, pero debes tener en cuenta una cosa:<br /> - Al crear una imagen del tamaño de todo el mapa estás consumiendo recursos a lo bestia de manera innecesaria, lo que podría dejar con muy poca memoria a las gráficas menos potentes. Lo que hacía yo era dibujar solo los tiles que eran visibles en ese frame, lo que reducía en gran medida el número<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jul 29, 2011 10:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Aborgna]]></name></author>
<updated>2011-07-28T21:51:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5789#p5789</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5789#p5789"/>
<title type="html"><![CDATA[Re: Cuestion de rendimiento en mi RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5789#p5789"><![CDATA[
Recien logre aumentarle bastante los fps haciendo que cada mapa cuando se crea genere una imagen con todos los tiles impresos, y a esa imagen le puse transparencia por colorkey y el flag pygame.RLEACCEL, los fps aumentaron a 130 <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2440">Aborgna</a> — Jue Jul 28, 2011 9:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Aborgna]]></name></author>
<updated>2011-07-28T05:38:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5783#p5783</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5783#p5783"/>
<title type="html"><![CDATA[Cuestion de rendimiento en mi RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1219&amp;p=5783#p5783"><![CDATA[
Buenas, llevo un tiempo leyendo el foro y respondi algunas consultas de otras personas, pero ahora me toca preguntar a mi.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />    Estoy programando un RPG isometrico con pygame, es la segunda cosa que programo (la anterior fue un tetris <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />) asi que esperaba tener algunos problemas de rendimiento por como armaba las cosas, en la parte del menu que cree hay unos 60 cuadros por segundo por mas que saque el limite a la funcion clock.tick, pero el tema es que al agregar la parte que imprime el mapa de fondo los fps bajaron hasta 20, por mas que solo se imprime la parte que se muestra en pantalla.<br /><br />    Queria saber si tienen algun consejo de como optimizar la impresion, el codigo de mi proyecto esta en <a href="http://code.google.com/p/lavo-rpg/" class="postlink">http://code.google.com/p/lavo-rpg/</a> o <a href="http://www.mediafire.com/?dddba83fisuqzbs" class="postlink">http://www.mediafire.com/?dddba83fisuqzbs</a> por si lo quieren ver (con f8 te muestra los fps).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2440">Aborgna</a> — Jue Jul 28, 2011 5:38 am</p><hr />
]]></content>
</entry>
</feed>