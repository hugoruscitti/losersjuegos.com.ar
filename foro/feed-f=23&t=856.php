<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=856" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-05T14:34:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=856</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-05T14:34:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4052#p4052</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4052#p4052"/>
<title type="html"><![CDATA[Re: Paren las rotativas!, cambiemos el sistema de coordenada]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4052#p4052"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />En fin, armé una nueva tarea en redmine para seguirla mas tarde:<br /><br /><!-- m --><a class="postlink" href="http://gcoop.coop:3000/issues/15">http://gcoop.coop:3000/issues/15</a><!-- m --><br /><br />¿ideas? ¿sugerencias?.<br /></div></blockquote><br /><br />Listo, ya hice los cambios y ahora nuestro nuevo sistema de<br />referencias será el siguiente:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20100905/ejes2.png" alt="Imagen" /><br /><br />donde el centro de la pantalla es el punto (0,0) y los valores<br />de Y positivos son hacia arriba.<br /><br />Si quieren ver puntualmente que ha cambiado en el código<br />les recomiendo ver el código que modifiqué en los siguientes<br />commits, no es mucho...<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/changeset/551eb68bcd56">http://bitbucket.org/hugoruscitti/pilas ... 1eb68bcd56</a><!-- m --><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/changeset/ffd197018092">http://bitbucket.org/hugoruscitti/pilas ... d197018092</a><!-- m --><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/changeset/bcf2282f3266">http://bitbucket.org/hugoruscitti/pilas ... f2282f3266</a><!-- m --><br /><br />y si es muy importante ver que ahora las coordenadas del<br />mouse cambian:<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/changeset/af12ee3b9c69">http://bitbucket.org/hugoruscitti/pilas ... 12ee3b9c69</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Sep 05, 2010 2:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-09-01T05:11:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4009#p4009</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4009#p4009"/>
<title type="html"><![CDATA[Re: Paren las rotativas!, cambiemos el sistema de coordenada]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4009#p4009"><![CDATA[
Me refiero al actor Tortuga, que la función avanzar no mueve en la dirección correcta a la tortuga por las coordenadas de pantalla que no corresponden con las que se calculan, además de que tampoco mueve la imagen hacia el &quot;frente&quot; (donde apunta la cabeza de la tortuga).<br /><br />La corrección que hiciste de la rotación, ¿a qué se debió? El valor negativo era para manejar las rotaciones en sentido horario ¿no? Yo no veía problema con lo del giro, porque interpolar de un valor a uno menor indicaba ir en sentido contrario (360 a 180), a menos que al establecer en 360 se convirtiera en 0.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Sep 01, 2010 5:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-01T04:36:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4008#p4008</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4008#p4008"/>
<title type="html"><![CDATA[Re: Paren las rotativas!, cambiemos el sistema de coordenada]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4008#p4008"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br />Hugo, actualicé el repositorio y noté un detalle con los ángulos para la función de avance de Tortuga, lo corregí pero no puedo enviar commits ni escribirte mensajes aquí :p.<br /></div></blockquote><br /><br />¿Seguro no es bug #13?. Lo corregí a la tarde:<br /><br />    <!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas">http://bitbucket.org/hugoruscitti/pilas</a><!-- m --><br /><br />Igual probá hacer el commit de nuevo, que te asigné los permisos recién.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Sep 01, 2010 4:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-09-01T03:25:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4006#p4006</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4006#p4006"/>
<title type="html"><![CDATA[Re: Paren las rotativas!, cambiemos el sistema de coordenada]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=4006#p4006"><![CDATA[
Hugo, actualicé el repositorio y noté un detalle con los ángulos para la función de avance de Tortuga, lo corregí pero no puedo enviar commits ni escribirte mensajes aquí :p.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Sep 01, 2010 3:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[estudiante]]></name></author>
<updated>2010-08-30T22:39:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3987#p3987</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3987#p3987"/>
<title type="html"><![CDATA[Re: Paren las rotativas!, cambiemos el sistema de coordenada]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3987#p3987"><![CDATA[
Mucha  gente lo apreciaría, sí. Pero ...<br />Es que creo que no solo los juegos usan el sistema del cero-cero en el superior-izquierdo, si no los sistemas de ventanas.<br />Yo creo que por ahora, dejar eso del sistema de coordenadas, quizá dejarlo para ese objeto Tortuga<br />algo como<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pilas.tortuga.sistema_coord(&quot;cartesiano&quot;)<br /></code></dd></dl><br /><br />Para la próxima versión, se podría generalizar<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2184">estudiante</a> — Lun Ago 30, 2010 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-30T10:23:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3975#p3975</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3975#p3975"/>
<title type="html"><![CDATA[Re: Paren las rotativas!, cambiemos el sistema de coordenada]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3975#p3975"><![CDATA[
creo que el tema de usar el centro como eje de coordenadas puede ser una opción a valorar (OpenGL lo usa en su proyeccion ortogonal) pero no creo que sea algo que pueda suponerte un problema lo de apdaptarte al nuevo eje de coordenadas.<br /><br />RafaG, perdon por ponerte de ejemplo, pero si no recuerdo mal tu empezaste a programar de bastante jovencito. Te supuso algun problema este tema?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Ago 30, 2010 10:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-30T09:25:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3974#p3974</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3974#p3974"/>
<title type="html"><![CDATA[Re: Paren las rotativas!, cambiemos el sistema de coordenada]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3974#p3974"><![CDATA[
El sistema de coordenada es el mismo. Solo que en videojuegos se utiliza el segundo cuadrante. Realmente se debería usar el primero (arriba a la derecha) que es el que tiene ambos ejes positivos, es decir el punto (0, 0) debería ser la esquina inferior izquierda y no la superior izquierda.<br /><br />Si lo que piensas es poner el punto (0, 0) del eje en el centro de la ventana no creo que sea buena idea pues le liarán más con valores negativos.<br /><br />Está claro que al fin y al cabo para hacer videojuegos es necesario saber matemáticas como mínimo básicas sobre lo que es un punto matemática, ejes cartesianos, calculo de distancias, etc. Porque sino por muchos api que hagamos para facilitar la cosas nada de nada.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Lun Ago 30, 2010 9:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-30T01:25:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3973#p3973</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3973#p3973"/>
<title type="html"><![CDATA[Paren las rotativas!, cambiemos el sistema de coordenadas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=856&amp;p=3973#p3973"><![CDATA[
Saludos, hoy me encontré con varios inconvenientes al querer<br />implementar un nuevo objeto llamado Tortuga. Básicamente<br />mi problema viene relacionado con un bug en el sistema de rotaciones, pero<br />me hizo pensar seriamente sobre el sistema de coordenadas.<br /><br />Los programadores de juegos usamos un sistema de coordenanas<br />donde el punto (0,0) es la esquina superior izquierda de la pantalla<br />mientras que la geometría clásica (que ven los chicos en la<br />escuela) es distinta...<br /><br />Entonces, por qué no solucionamos esa inconsistencia. Creo que pilas<br />tiene que tener un sistema de coordenadas mas parecido al de<br />las escuelas, y no proponer algo distinto, después de todo queremos<br />que los chicos puedan poner en práctica lo que están aprendiendo<br />de geometria no?.<br /><br />En fin, armé una nueva tarea en redmine para seguirla mas tarde:<br /><br /><!-- m --><a class="postlink" href="http://gcoop.coop:3000/issues/15">http://gcoop.coop:3000/issues/15</a><!-- m --><br /><br />¿ideas? ¿sugerencias?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ago 30, 2010 1:25 am</p><hr />
]]></content>
</entry>
</feed>