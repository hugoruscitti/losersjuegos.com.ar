<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=382" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-26T16:31:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=382</id>
<entry>
<author><name><![CDATA[baco]]></name></author>
<updated>2008-09-26T16:31:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1679#p1679</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1679#p1679"/>
<title type="html"><![CDATA[int fps_sincronizar (void) del ejempo de desplazamiento suav]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1679#p1679"><![CDATA[
Ahora voy a ver el ejemplo<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1988">baco</a> — Vie Sep 26, 2008 4:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-09-24T19:05:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1676#p1676</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1676#p1676"/>
<title type="html"><![CDATA[int fps_sincronizar (void) del ejempo de desplazamiento suav]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1676#p1676"><![CDATA[
Saludos, el código de la función &quot;fps_sincronizar&quot; se utiliza para regular la<br />velocidad del juego. Resulta que los equipos donde puede correr este programa<br />son muy diversos, algunos equipos son tan rápidos que podrían actualizar la<br />posición del tanque 300 veces por segundo...<br /><br />Pero, lejos de ser una ventaja esto es un problema, porque desearíamos que el<br />juego funcione a la misma velocidad en todos los equipos, ni muy lento ni<br />extremadaménte rápido.<br /><br />La función &quot;fps_sincronizar&quot; hace uso de ciertas funciones de SDL para<br />controlar la velocidad del programa en base al tiempo transcurrido. Esta<br />función llamada SDL_GetTicks consulta constantemente cuantos segundos<br />milisegundos han transcurrido desde la inicialización de la biblioteca. En<br />base a esta consulta de tiempo intenta determinar uno de estos casos:<br /><br />    + si el equipo es muy rápido llama a SDL_Delay para detener unos<br />      instantes la ejecución del programa (y que no corra tan rápido).<br />    + si el equipo es muy lento intenta actualizar la posición del tanque<br />      mas veces de las que imprime, esto es lo que se conoce como saltos de<br />      cuadros, y puedes ver como se utiliza en la segunda función. Si el<br />      equipo es muy lento la función &quot;fps_sincronizar&quot; devuelve un número<br />      mayor a 1.<br /><br /><br />En la web de losersjuegos hay un artículo que muestra esta técnica:<br /><br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/bucle/bucle.php">http://www.losersjuegos.com.ar/referenc ... /bucle.php</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Sep 24, 2008 7:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baco]]></name></author>
<updated>2008-09-23T16:30:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1674#p1674</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1674#p1674"/>
<title type="html"><![CDATA[int fps_sincronizar (void) del ejempo de desplazamiento suav]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=382&amp;p=1674#p1674"><![CDATA[
Hola:<br /><br />Como veréis soy nuevo por aquí pero espero estar para mucho tiempo xD<br /><br />He estado viendo algunos ejemplos y me ha parecido que lo de sincronizar de aquí es para que en todos los ordenadores el 'tanque' se desplace del punta A al B en el mismo tiempo (si refresca solo dos veces parecerá que se teletransporta...) pero no entiendo como se logra hacerlo.<br /><br />¿alguien con paciencia me lo explica?<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int fps_sincronizar &#40;void&#41;<br />&#123;<br />   static int t;<br />   static int tmp;<br />   static int tl = 0;<br /><br />   t = SDL_GetTicks &#40;&#41;;<br /><br />   if &#40;t - tl &gt;= FRECUENCIA&#41;<br />   &#123;<br />      tmp = &#40;t - tl&#41; / FRECUENCIA;<br />      tl += tmp * FRECUENCIA;<br />      return tmp;<br />   &#125;<br />   else<br />   &#123;<br />      SDL_Delay &#40;FRECUENCIA - &#40;t - tl&#41;&#41;;<br />      tl += FRECUENCIA;<br />      return 1;<br />   &#125;<br />&#125;</code></dd></dl><br /><br />y que luego es usado en:<dl class="codebox"><dt>Code: </dt><dd><code>repeticiones = fps_sincronizar &#40;&#41;;<br /><br />      for &#40;i = 0; i &lt; repeticiones; i ++&#41;<br />      &#123;<br />         mover_tanque &#40;&amp; tanque&#41;;<br />         mover_camara &#40;&amp; camara, &amp; tanque&#41;;<br />      &#125;</code></dd></dl><br /><br />PD: Para el que ayude que tenga en cuenta que solo se algo de C<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1988">baco</a> — Mar Sep 23, 2008 4:30 pm</p><hr />
]]></content>
</entry>
</feed>