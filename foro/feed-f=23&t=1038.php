<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=1038" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-01T02:11:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=1038</id>
<entry>
<author><name><![CDATA[juancarlospaco]]></name></author>
<updated>2011-02-01T02:11:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4987#p4987</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4987#p4987"/>
<title type="html"><![CDATA[Re: Novedades de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4987#p4987"><![CDATA[
muy bueno el trabajo...   ʘ_ʘ<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2380">juancarlospaco</a> — Mar Feb 01, 2011 2:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-02-01T01:03:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4985#p4985</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4985#p4985"/>
<title type="html"><![CDATA[Re: Novedades de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4985#p4985"><![CDATA[
<blockquote><div><cite>pchack escribió:</cite><br />me gustaria un poco mas de info del motor de fisica, y como se puede utilizar <br />para juegos de plataforma, y como se puede interactuar con objetos sometidos <br />a la fisica.<br /></div></blockquote><br /><br />Sip, estoy tratando de escribir un juego sobre eso, creo que se puede. Tendríamos que<br />hacer hacer que el personaje imite una circunferencia, pero con poca fricción... ahora si<br />tengo éxito haciendo un ejemplo lo subo y les aviso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Feb 01, 2011 1:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-02-01T00:52:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4984#p4984</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4984#p4984"/>
<title type="html"><![CDATA[Re: Novedades de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4984#p4984"><![CDATA[
que buena,<br />estuve viendo los cambios en el repositorio y los encuentro geniales<br />me gusta mas el nuevo motor de fýsica, es más estable y mejor, los modos de depuracion, <br />las nuevas mejoras a la documentacion, y otros.<br /><br />me gustaria un poco mas de info del motor de fisica, y como se puede utilizar <br />para juegos de plataforma, y como se puede interactuar con objetos sometidos <br />a la fisica.<br /><br />Saludos, Felicitaciones y gracias por estos avances que son muy utilez.<br />Pablo Garrido<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mar Feb 01, 2011 12:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-02-01T00:44:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4983#p4983</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4983#p4983"/>
<title type="html"><![CDATA[Novedades de pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1038&amp;p=4983#p4983"><![CDATA[
Buenas, quería comentarles que este fin de semana hice varios <br />cambios en el repositorio, pero cómo estuve sin conexión agrupé <br />todos los cambios y se los cuento en un solo post (perdón...):<br /><br />* Tomé los elementos de GUI que estuvimos haciendo con<br />  Pablo Garrido y los llevé al módulo pilas, escribí<br />  la parte del manual que los presenta y unos pocos<br />  ejemplos para que ya se puedan comenzar a usar. (aún<br />  me falta integrar el sistema de diálogos).<br /><br />* Eliminé la dependencia con pymunk y elements, reescribiendo<br />  el módulo de física. Así que ahora es mas estable y<br />  se integra un poquito mejor con el motor en general. Por<br />  ejemplo, ahora se puede pulsar F11 y ver la traza de los<br />  cuerpos con física.<br /><br />* Documenté cómo funcionan por dentro las habilidades, para<br />  profundizar un poco mas en cómo está implementado pilas<br />  por dentro.<br /><br />* Mejoré el rendimiento del modo depuración, en mi equipo antes<br />  pasaba de 60 a 20 cuadros por segundo cuando habilitaba todo. Ahora<br />  se mantiene en 58-60 cuadros cuando habilito toda la visualización<br />  de depuración.<br /><br />Por cierto, documenté el nuevo motor de física, y lo puse<br />en el manual, si quieren ver el capítulo por separado<br />está acá:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/incoming/descargas/20110131/fisica.pdf">http://www.losersjuegos.com.ar/incoming ... fisica.pdf</a><!-- m --><br /><br />¿Que les parece?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Feb 01, 2011 12:44 am</p><hr />
]]></content>
</entry>
</feed>