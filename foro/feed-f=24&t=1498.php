<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1498" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-06-28T06:31:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1498</id>
<entry>
<author><name><![CDATA[Tuxmmer]]></name></author>
<updated>2012-06-28T06:31:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6881#p6881</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6881#p6881"/>
<title type="html"><![CDATA[Re: Preguntas sobre funciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6881#p6881"><![CDATA[
Gracias, Hugo! <br />Intentaré emplear lo que me has dado  y les cuento qué tal. Salu2.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2625">Tuxmmer</a> — Jue Jun 28, 2012 6:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-06-27T21:30:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6880#p6880</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6880#p6880"/>
<title type="html"><![CDATA[Re: Preguntas sobre funciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6880#p6880"><![CDATA[
Hola Tuxxmen!!!<br /><br />Buenisimas tus consultas, me han dejando pensando... Te contesto<br />algunas:<br /><br />- Para que objetos cómo las cajas (o cualquier otro) no reboten en el fondo<br />de la pantalla, sino en otras areas (como una caja mas grande). Primero tendrías<br />que pulsar F11, para ver exáctamente donde están colisionando, y luego crear<br />un polígono que las contenga.<br /><br />Originalmente las cajas rebotan en el fondo de pantalla porque hay un rectángulo<br />que las contiene:<br /><br /><img src="http://pilas.readthedocs.org/en/latest/_images/fisica_2.png" alt="Imagen" /><br /><br />Si quieres que las cajas no lleguen al suelo, podrías crear un polígono e indicarle<br />con coordenadas dónde quieres que aparezca, algo así:<br /><br /><pre class="prettyprint">pilas.fisica.Poligono&#40;[&#40;100, 2&#41;, &#40;-50, 0&#41;, &#40;-100, 100.0&#41;], dinamica=False&#41;</pre><br /><br />En el manual hay un ejemplo que podrías seguir para ir viendo cómo se comporta<br />el motor de física:<br /><br /><!-- m --><a class="postlink" href="http://pilas.readthedocs.org/en/latest/fisica.html">http://pilas.readthedocs.org/en/latest/fisica.html</a><!-- m --><br /><br /><br />- Con respecto a las colisiones, es difícil ver de qué color es cada objeto, pero<br />lo que podrías hacer es defirle un atributo &quot;es_de_color&quot; a cada actor, y defirle<br />un valor por tu cuenta. Así podrías saber (ante una colisión) de qué color es cada<br />uno.<br /><br />- Con respecto al area de pantalla, puedes detectar que un actor está fuera del<br />area visible llamando al método &quot;esta_fuera_de_la_pantalla&quot;:<br /><br /><!-- m --><a class="postlink" href="http://pilas.readthedocs.org/en/latest/referencia.html#pilas.actores.Actor.esta_fuera_de_la_pantalla">http://pilas.readthedocs.org/en/latest/ ... a_pantalla</a><!-- m --><br /><br />y si quieres hacer algo en el momento exácto en que sale, podrías re-definir el método &quot;actualizar&quot;<br />del actor. Así podrías tener la oportunidad de preguntar en cada momento por esa función.<br /><br />Comentanos si no es muy claro, tal vez pueda escribir un ejemplo de eso.<br /><br />- Ah, y con respecto al listado de funciones, hay uno en la siguiente url:<br /><br /><!-- m --><a class="postlink" href="http://pilas.readthedocs.org/en/latest/referencia.html">http://pilas.readthedocs.org/en/latest/referencia.html</a><!-- m --><br /><br />voy a trabajarlo un poquito mas cerca del fin de semana, porque recién ví que le faltan<br />algunas cositas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jun 27, 2012 9:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Tuxmmer]]></name></author>
<updated>2012-06-27T18:07:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6879#p6879</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6879#p6879"/>
<title type="html"><![CDATA[Preguntas sobre funciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1498&amp;p=6879#p6879"><![CDATA[
Hola. Primero he de felicitar por el exelente trabajo de este motor para crear videojuegos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />Tengo unas dudas para empezar a realizar algo sencillo, no tengo experiencia pero acá les van mis preguntas que espero  no les lien.<br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" /> Cuando tengo objetos que actúan con el motor de física, como cajas, ¿Cómo puedo lograr re-definir el área en el que quiero que actúen? Es decir, no quiero que todas las cajas estén en el fondo de la pantalla, sino en un contenedor (utilizando una imagen).<br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" /> ¿Cómo puedo saber si el color de un objeto es igual al color del objeto con el que colisionó?<br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" /> ¿Cómo puedo definir una acción para cuando un objeto(personaje) salga de pantalla?<br /><br />--¿Existe una lista de todas las funciones de las que se compone Pilas y para qué sirve cada una?<br /><br />Gracias  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2625">Tuxmmer</a> — Mié Jun 27, 2012 6:07 pm</p><hr />
]]></content>
</entry>
</feed>