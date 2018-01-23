<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=3016" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-05-16T06:19:28+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=3016</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-05-16T06:19:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9232#p9232</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9232#p9232"/>
<title type="html"><![CDATA[Re: Colisión irregular]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9232#p9232"><![CDATA[
Yo te recomendaría que no reinventes la rueda haciendo tu motor de colisiones y uses lo que ya existe, usa Chipmunk, acá podes encontrar los <span style="font-style: italic">bindings</span> en C++ de Chipmunk: <a href="http://bixense.com/chipmunkpp/" class="postlink">http://bixense.com/chipmunkpp/</a>, te ayudara darle un vistazo a la documentación.<br /><br />Saludos y recuerda: Evita reinventar la rueda siempre que puedas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue May 16, 2013 6:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-04-16T21:33:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9212#p9212</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9212#p9212"/>
<title type="html"><![CDATA[Re: Colisión irregular]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9212#p9212"><![CDATA[
Gracias  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> .<br />Resulta que lo que más me sirve esta en los tiles  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> .<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Mar Abr 16, 2013 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-04-16T01:47:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9210#p9210</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9210#p9210"/>
<title type="html"><![CDATA[Re: Colisión irregular]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9210#p9210"><![CDATA[
En ese caso, hay 3 tipos posibles de colisiones:<br /><br /><span style="font-weight: bold"><span style="font-style: italic"><span style="text-decoration: underline">    BitMask:</span></span></span><br /><br />   <img src="http://higherorderfun.com/blog/wp-content/uploads/2012/05/Worms_World_Party.png" alt="Imagen" /><br /><br /><span style="font-weight: bold"><span style="font-style: italic"><span style="text-decoration: underline">    Slopes:</span></span></span><br /><br />    <img src="http://higherorderfun.com/blog/wp-content/uploads/2012/05/Talbot_Bitmask_2.png" alt="Imagen" /><br /><br /><span style="font-weight: bold"><span style="font-style: italic"><span style="text-decoration: underline">    Vectorial:</span></span></span><br /><br /><img src="http://higherorderfun.com/blog/wp-content/uploads/2012/05/braid11.jpg" alt="Imagen" /><img src="http://higherorderfun.com/blog/wp-content/uploads/2012/05/braid2.png" alt="Imagen" /><br /><br />En el articulo donde se mencionan, esta enfocado a juegos de plataformas, pero aun así sigue siendo un espacio 2D, vienen estos métodos (debajo de los métodos de tiles) <a href="http://higherorderfun.com/blog/2012/05/20/the-guide-to-implementing-2d-platformers/" class="postlink">http://higherorderfun.com/blog/2012/05/20/the-guide-to-implementing-2d-platformers/</a><br /><br />Espero que te sirva <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Abr 16, 2013 1:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-04-15T12:28:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9209#p9209</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9209#p9209"/>
<title type="html"><![CDATA[Re: Colisión irregular]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9209#p9209"><![CDATA[
No es exactamente lo que buscaba, yo con mapas irregulares me refiero a que no tienen una forma especifica, en una imagen el color negro indica que no se puede pasar y los otros sí.<br />Uno de los mapas de mi juego es este:<br /><img src="http://www.subeimagenes.com/img/cm-605947.png" alt="Imagen" /><br /><br />Y el problema es que el personaje camina como muy trancado si se aproxima a una pared o en ocasiones atravesarla:<br /><img src="http://www.subeimagenes.com/img/2013-04-15-085547-1024x600-scrot-605954.png" alt="Imagen" /><br /><br /><a href="https://docs.google.com/file/d/0B9fGBUPoau1_MmVzOWhHd0kwTjg/edit?usp=sharing" class="postlink">Dejo mi &quot;jueguito&quot; para que se vea bien lo que pasa por si no se entiende</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Lun Abr 15, 2013 12:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-04-15T03:43:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9208#p9208</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9208#p9208"/>
<title type="html"><![CDATA[Re: Colisión irregular]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9208#p9208"><![CDATA[
Te recomiendo que le des una mirada a esta serie de tutoriales sobre juegos en base a tiles, no sé si te sirvan, y a falta de que no se que tan &quot;irregulares&quot; sean las colisión que quieres hacer...<br /><br /><a href="http://www.tonypa.pri.ee/tbw/start.html" class="postlink">http://www.tonypa.pri.ee/tbw/start.html</a> (&quot;hit the wall&quot; es la que te interesaría)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Abr 15, 2013 3:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-04-15T01:18:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9206#p9206</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9206#p9206"/>
<title type="html"><![CDATA[Colisión irregular]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3016&amp;p=9206#p9206"><![CDATA[
Quisiera saber, tengo un mapa irregular en un videojuego que estoy haciendo y quisiera saber cual seria la mejor forma de detectar colisiones al moverse hacia arriba, abajo, a los costados y en diagonal (Solo para saber porque este quizá lo implemente en algún momento).<br />También alguna forma de que el personaje al caminar mientras se choca contra una pared se &quot;deslice&quot; hacia algún otro lado que si esté disponible.<br /><br />Si usan ejemplos, me servirían para aplicarlos en C++.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Lun Abr 15, 2013 1:18 am</p><hr />
]]></content>
</entry>
</feed>