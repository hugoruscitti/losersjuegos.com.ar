<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=912" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-10-21T01:52:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=912</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-10-21T01:52:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4298#p4298</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4298#p4298"/>
<title type="html"><![CDATA[Re: PilasPython y PilasC++ juntos?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4298#p4298"><![CDATA[
Si, esto entra en el tema de scripts, puedes hacer código es c++ y poder usarlo en python, y vice-versa<br />De hecho en muchos de los juegos profesionales programan partes criticas en C++ casi todo el motor, y la lógica del juego, en un lenguaje interpretado, uno de los mas usados es Lua, incluso hay cosas muy interesantes, que es mezclar los dos lenguajes. Se puede inicializar una clase en el interprete y usarla en código C++.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Oct 21, 2010 1:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-10-20T22:53:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4297#p4297</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4297#p4297"/>
<title type="html"><![CDATA[Re: PilasPython y PilasC++ juntos?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4297#p4297"><![CDATA[
buenas hugo:<br /><br />se de que hablas. Normalmente lo más usado para esto es boost::python. Pero el tema es que, aunque evitaría duplicar esfuerzos, libraría a unos de los dos equipos de casi toda la diversión y trabajo, ya que normalmente acabas con el 80% en un lado y el 20% en el otro. Lo que si que podríamos mirar es en el caso de que hiciera falta optimizar alguna función específica de python( es lo más habitual en esta relación)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Oct 20, 2010 10:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-10-20T18:27:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4296#p4296</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4296#p4296"/>
<title type="html"><![CDATA[PilasPython y PilasC++ juntos?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=912&amp;p=4296#p4296"><![CDATA[
Buenas, en pycon dieron una charla que explica una<br />posibilidad técnica que yo ni siquiera sabía que existía.<br /><br />Consiste en crear bibliotecas C o  C++, pero que accedan<br />a rutinas de python o introduzcan intérpretes:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/incoming/descargas/20101020/eacpy.pdf">http://www.losersjuegos.com.ar/incoming ... /eacpy.pdf</a><!-- m --><br /><!-- m --><a class="postlink" href="http://github.com/cuerty/eacpy">http://github.com/cuerty/eacpy</a><!-- m --><br /><br />La charla me pareció interesante, y creo que podríamos usar algo<br />de eso en el desarrollo de pilas. Al menos para no duplicar esfuerzos.<br /><br />¿que les parece a ustedes?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Oct 20, 2010 6:27 pm</p><hr />
]]></content>
</entry>
</feed>