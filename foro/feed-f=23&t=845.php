<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=845" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-23T23:36:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=845</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-23T23:36:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=845&amp;p=3845#p3845</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=845&amp;p=3845#p3845"/>
<title type="html"><![CDATA[Llevando pilas al español]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=845&amp;p=3845#p3845"><![CDATA[
Saludos, hoy integré varios cambios que había<br />realizado el fin de semana para llevar la API<br />de pilas al español.<br /><br />La cantidad de cambios es grande, pero creo que<br />no cambia mucho la manera de interactuar con la<br />biblioteca.<br /><br />Esta es la página con los cambios en bitbucket:<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/changesets">http://bitbucket.org/hugoruscitti/pilas/changesets</a><!-- m --><br /><br />y el manual modificado:<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/raw/tip/doc/Pilasengine.pdf">http://bitbucket.org/hugoruscitti/pilas ... engine.pdf</a><!-- m --><br /><br />Básicamente el cambio grande está en el<br />nuevo módulo <span style="font-weight: bold">actores</span>:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20100823/actores.png" alt="Imagen" /><br /><br />y el modulo de componentes que ahora se llama <span style="font-weight: bold">comportamientos</span>:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20100823/comportamientos.png" alt="Imagen" /><br /><br />Lamentablemente hay algunos objetos y módulos que es difícil<br />llevarlos al español. Pero igualmente se puede, por ejemplo el<br />módulo <span style="font-style: italic">signals</span> (señales) he decidido renombrarlo a <span style="font-style: italic">eventos</span><br />tanto para evitar la &quot;ñ&quot; como para simplificar las explicaciones. Dado<br />que en realidad, eventos y señales son un concepto análogo en este<br />caso (no en otras libs).<br /><br /><br />Otro detalle de diseño importante es la orientación a compoenentes. Estuve<br />pensando y en realidad para quien comienza a programar con pilas<br />el concepto de componente y mixin es un poco abstracto, porque en realidad<br />en español la metáforma sería &quot;comportamiento&quot; (component) y &quot;aprender&quot;<br />(mix in..).<br /><br />Por cierto, me quedaron algunas cosas por traducir... estimo<br />que en unos días completo toda la traducción.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ago 23, 2010 11:36 pm</p><hr />
]]></content>
</entry>
</feed>