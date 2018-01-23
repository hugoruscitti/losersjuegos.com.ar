<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1354" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-12-13T13:12:00+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1354</id>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-12-13T13:12:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6267#p6267</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6267#p6267"/>
<title type="html"><![CDATA[Re: Python: Surface.blit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6267#p6267"><![CDATA[
Jajajajkakajkakjajjaajjakajjaja No puedo creer que se me haya olvidado convertir las imágenes en mi función para cargarlas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> Muchísimas gracias Hugo, ahora si puedo seguir desarrollando mi juego <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />Un abrazo.<br /><br /><span style="font-size: 85%; line-height: 116%;">PD: Si, lo de dirty rectangles, aunque no sabía como se llamaba, ya lo hice creando una función que calcula cuales son los tiles que el jugador ve y solo actualiza esos. Personalmente no me gusta usar la clase <span style="font-style: italic">sprite</span> de pygame porque me parece innecesaria.<br /></span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Dic 13, 2011 1:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-12-13T00:53:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6264#p6264</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6264#p6264"/>
<title type="html"><![CDATA[Re: Python: Surface.blit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6264#p6264"><![CDATA[
Buenas!,<br /><br />Usando pygame, hay dos técnicas importantes para<br />hacer que el juego funcione a mayor velocidad. Primero, tienes<br />que asegurarte de estar convirtiendo las superficies al<br />formato de video actual.<br /><br />Es decir, cada vez que cargues una imagen tendrías que<br />llamar al método &quot;convert&quot; o &quot;convert_alpha&quot;.<br /><br />Por ejemplo, en un juego típico de pygame podrías<br />crear una función llamada load que te facilite eso:<br /><br /><pre class="prettyprint">def load&#40;filepath, use_alpha=False&#41;:<br />    &quot;Carga una imagen optimizando la velocidad de impresion.&quot;<br /><br />    image = pygame.image.load&#40;&quot;data/&quot; + filepath&#41;<br /><br />    if use_alpha:<br />        return image.convert_alpha&#40;&#41;<br /><br />    return image.convert&#40;&#41;</pre><br /><br />Esta función se asegura de que la imagen se convierta al formato<br />de video inmediatamente después de ser cargada. Esto hace una<br />diferencia de rendimiento muy grande...<br /><br />La otra cosa que podrías hacer, es implementar la técnica Dirty Rectangles,<br />para dibujar parcialmente la pantalla en lugar de todo el<br />escenario completo:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/traducciones/pygame/sprite/renderedupdates">http://www.losersjuegos.com.ar/traducci ... redupdates</a><!-- m --><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Dic 13, 2011 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-12-12T19:44:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6262#p6262</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6262#p6262"/>
<title type="html"><![CDATA[Python: Surface.blit()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1354&amp;p=6262#p6262"><![CDATA[
Buenas.<br />Estoy creando un RPG en donde los tiles del mapa se están constantemente imprimiendo en la pantalla de forma individual. Se que no es muy convencional, en general se imprimen todos en una imagen &quot;fondo&quot; y luego solo se imprime esa en pantalla, pero quiero hacer un efecto que solo funcionará como lo estoy haciendo. El probleda de esto es que realizar la operación <span style="font-style: italic">Surface.blit()</span> tan seguido se come gran parte del procesador y, si bien no lo consume entero, aún así funciona lento. Intenté arreglar esto reduciendo el número de tiles a imprimirse a solamente los que el jugador verá en pantalla, que tenia planeado hacer aunque no me hubiera dado problemas, pero aun así el problema persiste. Alguien sabe si hay otra forma de unir dos superficies sin que consuma tanto procesador?<br /><br />Mi pregunta es simplemente eso: ¿Hay algún otro metodo para hacer lo mismo? nada muy extenso.<br />No les doy el codigo porque ya se extendió lo suficiente como para volverse confuso.<br /><br />Se los agradesco de antemano.<br />Un saludo y bendisiones para todos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Lun Dic 12, 2011 7:44 pm</p><hr />
]]></content>
</entry>
</feed>