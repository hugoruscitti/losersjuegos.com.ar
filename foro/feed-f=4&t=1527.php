<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1527" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-27T12:44:18+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1527</id>
<entry>
<author><name><![CDATA[zeroxcol94]]></name></author>
<updated>2012-07-27T12:44:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6977#p6977</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6977#p6977"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6977#p6977"><![CDATA[
bueno jejeje, me funciono la ecuacion,estaba confundido por que no me acordaba que el float convertia el ancho del mapa a coma flotante me funciono y todo pero aun me falta perfeccionar algunos detalles le agradesco a todos su ayuda en especial al admin.gracias sigan asi. avisenme si alguien quiere el codigo y lo pongo aqui <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2635">zeroxcol94</a> — Vie Jul 27, 2012 12:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zeroxcol94]]></name></author>
<updated>2012-07-27T11:59:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6976#p6976</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6976#p6976"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6976#p6976"><![CDATA[
por que el &quot;ancho_del_mapa&quot; tiene que ser float?.probare el codigo que me dieron a ver si me funciona, les dare una respuesta si me sale algo o no.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2635">zeroxcol94</a> — Vie Jul 27, 2012 11:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-27T07:16:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6975#p6975</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6975#p6975"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6975#p6975"><![CDATA[
yo lo que hice fue emplear las mismas funciones que utilice para crear el mapa normal, pero en vez de meterle el tileset del mapa, le meti un tileset de apenas un par de pixeles, asi que me sacaba el mapa entero, pero reducido porque en vez de partir 32*32 pixeles por cuadrado , hacia 1*1 o 2*2 pixeles.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Vie Jul 27, 2012 7:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-27T05:22:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6973#p6973</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6973#p6973"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6973#p6973"><![CDATA[
<blockquote><div><cite>zeroxcol94 escribió:</cite><br />en la imagen que puse aparece el minimapa en gris<br /></div></blockquote>...es cierto, solo que a primera vista no se distingue XD XD XD<br /><br />Bueno, lo que preguntas es bastante mas &quot;mundano&quot; y simple. Como su nombre lo indica es un &quot;minimapa&quot;, en otras palabras, es como el mapa normal de tu juego (por donde transita tu personaje), pero a una escala mas &quot;reducida&quot;.<br /><br />La ecuación que hugo te dio esta bien:<br /><br />x_posicion_mapa = (x_posicion_real / float(ancho_cancha)) * ancho_del_minimapa<br /><br /><br />Solo que mírala de esta forma:<br /><br />posicion_x_en_minimapa = (posicion_x_en_el_mapa / float(ancho_del_mapa) ) * ancho_del_minimapa<br /><br />Es lo mismo para y, solo que en lugar de ancho, es el alto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Jul 27, 2012 5:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zeroxcol94]]></name></author>
<updated>2012-07-27T02:09:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6969#p6969</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6969#p6969"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6969#p6969"><![CDATA[
no es el modo 7 no quiero meterme en esos temas por ahora jeje,simplemente quiero hacer un minimapa sencillo,en la imagen que puse aparece el minimapa en gris,y un punto rojo que me muestra la posicion de mi pj en el mapa asi es como quiero,trate de hacer lo que dijiste &quot;hugo&quot; pero no me funciono la ecuacion,si puedieras darme un ejemplo en seudocodigo o algun codigo fuente me ayudarias. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2635">zeroxcol94</a> — Vie Jul 27, 2012 2:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-27T00:35:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6967#p6967</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6967#p6967"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6967#p6967"><![CDATA[
No sé si te entiendo, pero creo que te refieres al efecto del desplazamiento (cuando vas de un lugar a otro ) que parece casi en 3D<br /><br />Eso se llama&quot; modo 7&quot; y es un poco complicado hacerlo....<br /><br />Una explicación de lo que es y ejemplos de juegos que lo usaban (sirve solo como referencia ) : <a href="http://www.pixfans.com/el-mitico-modo-7-de-super-nintendo/" class="postlink">http://www.pixfans.com/el-mitico-modo-7-de-super-nintendo/</a><br /><br />Mira, aquí una explicación de como funciona el modo 7, pero esta en ingles, y tengo que admitirte que aparte del idioma, requiere comprender matemáticas vectoriales...<br /><br /><a href="http://www.coranac.com/tonc/text/mode7ex.htm" class="postlink">http://www.coranac.com/tonc/text/mode7ex.htm</a><br /><br /><img src="http://www.pixfans.com/imagenes/2008/07/modo-7-2.jpg" alt="Imagen" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Jul 27, 2012 12:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-07-26T23:53:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6965#p6965</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6965#p6965"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6965#p6965"><![CDATA[
¿La imagen es del minimapa?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jul 26, 2012 11:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zeroxcol94]]></name></author>
<updated>2012-07-26T21:40:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6964#p6964</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6964#p6964"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6964#p6964"><![CDATA[
Veras,sabes el final fantasy 6 quisiera hacer algo parecido.algo que sea sencillo mira te dejo una imagen:<br /><br /><a href="http://farm8.staticflickr.com/7113/7652663374_ae4e31afbd_m.jpg" class="postlink">http://farm8.staticflickr.com/7113/7652663374_ae4e31afbd_m.jpg</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2635">zeroxcol94</a> — Jue Jul 26, 2012 9:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-07-26T19:45:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6962#p6962</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6962#p6962"/>
<title type="html"><![CDATA[Re: Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6962#p6962"><![CDATA[
Buenas!<br /><br />Depende mucho del tipo de minimapa que quieras hacer, por ejemplo en el juego soccer deathmatch<br />habíamos hecho un minimapa:<br /><br /><img src="http://img.imagen-programa.com/grandes/492_2.jpg" alt="Imagen" /><br /><br />Pero era bien sencillo, básicamente ya sabíamos el area del mapa completo (la cancha de futbol)<br />y la posición real de cada jugador.<br /><br />Luego, representabamos a cada jugador con un pixel. Y la posición del personaje en el minimapa<br />se calculaba con una ecuación sencilla:<br /><br /><pre class="prettyprint">x_posicion_mapa = &#40;x_posicion_real / float&#40;ancho_cancha&#41;&#41; * ancho_del_minimapa</pre><br /><br />¿Algo así estás pensando para tu rpg?, ¿o que tipo de minimapa?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jul 26, 2012 7:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[zeroxcol94]]></name></author>
<updated>2012-07-26T15:40:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6960#p6960</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6960#p6960"/>
<title type="html"><![CDATA[Como hacer mini mapa para juegos RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1527&amp;p=6960#p6960"><![CDATA[
Pasa que estoy haciendo un juego estilo RPG en 2D y quisiera ponerle un mini mapa donde se muestre la ubicacion del personaje y la ubicacion de lugares importantes. quisiera saber como funciona esto o que me expliquen de metodos que puedira utilizar, para alcanzar mi objetivo.les agradesco si pudieran ayudarme. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2635">zeroxcol94</a> — Jue Jul 26, 2012 3:40 pm</p><hr />
]]></content>
</entry>
</feed>