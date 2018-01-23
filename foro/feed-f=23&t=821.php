<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=821" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-11T13:37:18+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=821</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-11T13:37:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3714#p3714</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3714#p3714"/>
<title type="html"><![CDATA[Re: Avances con el nuevo motor de juegos: pilas !!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3714#p3714"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />Miren esto les puede sevir, es para manejar los estados del juego, esta para c++, pero la teoria la pueden implementar en python, se usan clases singleton para los managers, se que en python se pueden hacer singleton es una manera mas elegante.<br /><a href="http://gamedevgeek.com/tutorials/managing-game-states-in-c/" class="postlink">http://gamedevgeek.com/tutorials/managing-game-states-in-c/</a><br /></div></blockquote><br /><br />Si, es una buena idea... algo así se hizo para manejar las escenas en el juego asadetris, tomo nota...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ago 11, 2010 1:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-11T13:31:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3713#p3713</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3713#p3713"/>
<title type="html"><![CDATA[Re: Avances con el nuevo motor de juegos: pilas !!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3713#p3713"><![CDATA[
<blockquote><div><cite>adrigm77 escribió:</cite><br />En el contenedor de actors añadiría otra función: hidden_an_actor, para que no se muestre en pantalla, pero esté en la lista. En un momento determinado puede ser necesario ocultarlo.<br /></div></blockquote><br /><br />Si, buena idea... voy a agregarle un metodo a los actores llamado &quot;hide&quot; y &quot;show&quot;, creo que así<br />quedará bien para la funcionalidad que nos indicas.<br /><br /><br /><blockquote><div><cite>adrigm77 escribió:</cite><br />Las imágenes a parte de buscarla donde ya dices añadiría el directorio images, muchos las guardan ahí. O en Data/images.<br /></div></blockquote><br /><br />Buena idea, lo voy a hacer así en cuanto pueda.<br /><br /><blockquote><div><cite>adrigm77 escribió:</cite><br />Lo del TaskScheduler puede ser buena idea. Podría combinarse con un sistema de Scenes y objeto Director de SMLFL para hacer el bucle del juego.<br /></div></blockquote><br /><br />Ah... es cierto... sería para evitar el &quot;while True&quot; del bucle no?...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ago 11, 2010 1:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-11T06:19:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3711#p3711</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3711#p3711"/>
<title type="html"><![CDATA[Re: Avances con el nuevo motor de juegos: pilas !!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3711#p3711"><![CDATA[
Miren esto les puede sevir, es para manejar los estados del juego, esta para c++, pero la teoria la pueden implementar en python, se usan clases singleton para los managers, se que en python se pueden hacer singleton es una manera mas elegante.<br /><a href="http://gamedevgeek.com/tutorials/managing-game-states-in-c/" class="postlink">http://gamedevgeek.com/tutorials/managing-game-states-in-c/</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Ago 11, 2010 6:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-11T04:44:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3710#p3710</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3710#p3710"/>
<title type="html"><![CDATA[Re: Avances con el nuevo motor de juegos: pilas !!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3710#p3710"><![CDATA[
He estado revisando lo que llevas y ya mas o menos se ve una estructura. Algunas cosas<br /><br />En el contenedor de actors añadiría otra función: hidden_an_actor, para que no se muestre en pantalla, pero esté en la lista. En un momento determinado puede ser necesario ocultarlo.<br /><br />Las imágenes a parte de buscarla donde ya dices añadiría el directorio images, muchos las guardan ahí. O en Data/images.<br /><br />Lo del TaskScheduler puede ser buena idea. Podría combinarse con un sistema de Scenes y objeto Director de SMLFL para hacer el bucle del juego.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Mié Ago 11, 2010 4:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-09T20:22:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3702#p3702</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3702#p3702"/>
<title type="html"><![CDATA[Avances con el nuevo motor de juegos: pilas !!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=821&amp;p=3702#p3702"><![CDATA[
Buenas, desde hace varios días he venido pensando<br />mas y mas sobre la nueva biblioteca para hacer<br />juegos.<br /><br />Así que para concretarlo me puse a trabajar e investigar<br />sobre el código y ha realizar mas experimentos.<br /><br />Abrí un repositorio bajo el nombre &quot;pilas&quot; en bitbucket:<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas">http://bitbucket.org/hugoruscitti/pilas</a><!-- m --><br /><br />y comencé a trabajar en la creación de los primeros<br />módulos y la documentación.<br /><br />Así se puede comenzar a jugar con el engine, directamente<br />desde la consola de python:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20100809/preview.png" alt="Imagen" /><br /><br />Les pido paciencia a quienes quieran probarlo porque<br />aún está muy verde... si todo me sale bien el fin de<br />semana próximo haré un screencast sencillo mostrando<br />algunas funcionalidades...<br /><br />Ah, si usan lectores de noticias puede que les resulte<br />útil enterarse de las novedades del proyecto mediante<br />el siguiente feed:<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/rss">http://bitbucket.org/hugoruscitti/pilas/rss</a><!-- m --><br /><br />Ahí aparecerá un alerta nuevo cada vez que hago un<br />commit...<br /><br />Saludos a todos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ago 09, 2010 8:22 pm</p><hr />
]]></content>
</entry>
</feed>