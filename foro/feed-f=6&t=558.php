<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=558" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-05-10T01:11:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=558</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-05-10T01:11:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2536#p2536</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2536#p2536"/>
<title type="html"><![CDATA[valor negativo para SDL_Rect-&gt;y]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2536#p2536"><![CDATA[
Si, está buena la solución.<br /><br />Otra forma puede ser crear un rectangulo auxiliar con las coordenadas<br />de impresión que necesita la función:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Rect destino = &#123;img_larga.x, img_larga.y, 0, 0&#125;;<br /><br />SDL_BlitSurface&#40;imagen, NULL, pantalla, &amp;destino&#41;; <br /></code></dd></dl><br /><br />así la función de SDL no altera tu rectángulo original (img_larga).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom May 10, 2009 1:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rbidegain]]></name></author>
<updated>2009-05-09T16:27:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2535#p2535</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2535#p2535"/>
<title type="html"><![CDATA[valor negativo para SDL_Rect-&gt;y]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2535#p2535"><![CDATA[
Gracias por la respuesta Hugo.<br /><br />me sirvió para implementar la solución de otra manera<br /><br />antes intentaba<br />img_larga.y + = 10; <br /><br />ahora utilizo una variable global (probablemente luego utilice una local estatica)<br />que la uso así<br /><br />igValor_y +=10;<br />img_larga.y = igValor_y;<br /><br />y entonces si llamo a <br /><br />SDL_BlitSurface(imagen, NULL, pantalla, &amp;img_larga);<br /><br /><br />saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2099">rbidegain</a> — Sab May 09, 2009 4:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-05-08T18:49:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2533#p2533</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2533#p2533"/>
<title type="html"><![CDATA[valor negativo para SDL_Rect-&gt;y]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2533#p2533"><![CDATA[
Si, es un comportamiento normal. Resulta<br />que la función SDL_BlitSurface modifica el cuarto argumento<br />para indicarle al programador qué parte del rectángulo se<br />utilizó en la impresión.<br /><br />En este caso, aunque tu variable &quot;y&quot; tenga ese valor, luego<br />de imprimir SDL reporta que imprimió solo desde y &gt; 0 y por<br />ello cambia el valor de la coordenada &quot;y&quot;.<br /><br />Puedes ver una detalle de este comportamiento en la documentación<br />de SDL:<br /><br /><!-- m --><a class="postlink" href="http://sdl.beuc.net/sdl.wiki/SDL_BlitSurface">http://sdl.beuc.net/sdl.wiki/SDL_BlitSurface</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie May 08, 2009 6:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rbidegain]]></name></author>
<updated>2009-05-08T16:29:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2532#p2532</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2532#p2532"/>
<title type="html"><![CDATA[valor negativo para SDL_Rect-&gt;y]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=558&amp;p=2532#p2532"><![CDATA[
Estoy con problemas  para setear la variable &quot;y&quot; de la estructura SDL_Rect.<br /><br />En realidad el problema es que después que llamo a SDL_BlitSurface se modifica el valor de la variable &quot;y&quot;<br /><br />estoy probando este código<br /><br />img_larga.y = -800;<br />fprintf(stderr, &quot;%d -\n&quot;, img_larga1.y); //imprime -800<br />SDL_BlitSurface(imagen, NULL, pantalla, &amp;img_larga);<br />fprintf(stderr, &quot;%d\n&quot;, img_larga.y); //imprime 0<br /><br />estoy trabajando en linux con sdl version 1.2.12<br /><br />lo que estoy intentando hacer es que la imagen surga de la parte de arriba de la pantalla y vaya bajando.<br /><br />desde ya muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2099">rbidegain</a> — Vie May 08, 2009 4:29 pm</p><hr />
]]></content>
</entry>
</feed>