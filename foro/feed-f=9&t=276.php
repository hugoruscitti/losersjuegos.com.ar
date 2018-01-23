<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=276" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-04T04:29:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=276</id>
<entry>
<author><name><![CDATA[akiles333]]></name></author>
<updated>2008-04-04T04:29:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=276&amp;p=1076#p1076</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=276&amp;p=1076#p1076"/>
<title type="html"><![CDATA[Tiempos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=276&amp;p=1076#p1076"><![CDATA[
solucionado, gracias de todas formas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1894">akiles333</a> — Vie Abr 04, 2008 4:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[akiles333]]></name></author>
<updated>2008-04-02T19:23:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=276&amp;p=1066#p1066</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=276&amp;p=1066#p1066"/>
<title type="html"><![CDATA[Tiempos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=276&amp;p=1066#p1066"><![CDATA[
Que tal, espero que me ayuden con este problemilla que tengo<br /><br />quiero hacer un retardo para que se ejecute cierta funcion, pero sin que la aplicación deje de correr, si uso un delay, la aplicacion para hasta que se transcurra el tiempo del delay, quisiera saber si puedo hacer algo asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code><br />int segundos = 5;<br />float T1;<br />float T2;<br /><br />int caida&#40;SDL_Surface *imagen, int y&#41;&#123;<br />    imagen.y=imagen.y +10;<br />    T1=time&#40;&#41;;<br />    T2=T1+segundos;<br />&#125;<br /><br />T1=time&#40;&#41;;<br />T2=T1+segundos;<br /><br />while&#40;salir!=0&#41;&#123;<br /><br />    if&#40;T1==T2&#41;&#123;<br />       caida&#40;block&#91;N&#93;,block&#91;N&#93;.coor_y&#41;<br />    &#125;<br /><br />&#125;<br /></code></dd></dl><br /><br />espero haberme explicado, saludos y gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1894">akiles333</a> — Mié Abr 02, 2008 7:23 pm</p><hr />
]]></content>
</entry>
</feed>