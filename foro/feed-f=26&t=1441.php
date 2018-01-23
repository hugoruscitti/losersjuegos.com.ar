<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=1441" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-23T21:40:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=1441</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-04-23T21:40:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6692#p6692</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6692#p6692"/>
<title type="html"><![CDATA[Re: Actualizar posición del dialogo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6692#p6692"><![CDATA[
perdonen que meta la cuchara, pero, creo que seria mejor renombrar esa propiedad a &quot;seguir&quot;. porqué &quot;imitar&quot; podría servir para que un actor imite las propiedades de otro, o sea, que pueda hacer todo lo que ese actor a imitar hace... no śe si me hice entender xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Abr 23, 2012 9:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-04-09T17:15:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6627#p6627</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6627#p6627"/>
<title type="html"><![CDATA[Re: Actualizar posición del dialogo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6627#p6627"><![CDATA[
Ya está <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><a href="https://bitbucket.org/hugoruscitti/pilas/changeset/bc318e8de4d5" class="postlink">https://bitbucket.org/hugoruscitti/pilas/changeset/bc318e8de4d5</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Lun Abr 09, 2012 5:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-04-09T17:03:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6626#p6626</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6626#p6626"/>
<title type="html"><![CDATA[Re: Actualizar posición del dialogo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6626#p6626"><![CDATA[
Es cierto... es una buena idea, ¿te animas a implementar el cambio en la rama principal?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Abr 09, 2012 5:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-04-09T16:46:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6625#p6625</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6625#p6625"/>
<title type="html"><![CDATA[Actualizar posición del dialogo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1441&amp;p=6625#p6625"><![CDATA[
Buenas,<br />creo que seria una buena opción hacer que cuando un actor ejecute:<br /><pre class="prettyprint">un_actor.decir&#40;&quot;Hola a todos.&quot;&#41;</pre><br /><br />Este diálogo le siga hasta su eliminación.<br /><br />En las pruebas que estoy realizando tengo un actor que se mueve con los cursores por el mapa, pero cuando &quot;dice&quot; algo, el diálogo se queda en la posición en la que lo dijo.<br /><br />Digamos que el dialogo tendría que &quot;Imitar&quot; al actor que lo ha creado, con algo como esto:<br /><pre class="prettyprint">def decir&#40;self, mensaje, autoeliminar=True&#41;:<br />        &quot;&quot;&quot;Emite un mensaje usando un globo similar al de los commics&quot;&quot;&quot;<br />        nuevo_actor = pilas.actores.Globo&#40;mensaje, self.x, self.y, autoeliminar=autoeliminar&#41;<br /><br />        nuevo_actor.aprender&#40;pilas.habilidades.Imitar, self&#41;<br /><br />        nuevo_actor.z = self.z - 1<br />        self.anexar&#40;nuevo_actor&#41;<br />        pilas.atajos.leer&#40;mensaje&#41;</pre><br /><br />¿Que os parece?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Lun Abr 09, 2012 4:46 pm</p><hr />
]]></content>
</entry>
</feed>