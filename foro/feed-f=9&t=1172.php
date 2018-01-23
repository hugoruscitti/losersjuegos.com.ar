<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1172" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-30T00:01:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1172</id>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-04-30T00:01:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=6704#p6704</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=6704#p6704"/>
<title type="html"><![CDATA[Re: Direccion del sprite? norte.sur.este.oeste - Solucionado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=6704#p6704"><![CDATA[
¿No te es más fácil analizar simplemente la variable speed?<br /><br />Si speedX mayor a 0, entonces te mueves al este.<br />si speedX menor a 0, entonces te mueves al oeste.<br /><br />y lo mismo para speedY.<br /><br />EDIT:<br />Acabo de mirar las fechas de los post originales y veo que tenemos  a un necromante entre nosotros.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Lun Abr 30, 2012 12:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[robloz]]></name></author>
<updated>2012-04-29T23:10:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=6703#p6703</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=6703#p6703"/>
<title type="html"><![CDATA[Re: Direccion del sprite? norte.sur.este.oeste - Solucionado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=6703#p6703"><![CDATA[
Otra forma sería detectando la tecla que ha pulsado y en función de ello asignarle la dirección correspondiente<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>   if(key-&gt;EstadoDown(key-&gt;abajo)){<br />         sur = true;<br />      }else if(key-&gt;EstadoDown(key-&gt;arriba)){<br />         norte = true;<br />      }else if(key-&gt;EstadoDown(key-&gt;derecha)){<br />         este = true;<br />      }else if(key-&gt;EstadoDown(key-&gt;izquierda)){<br />         oeste = true;<br />      }</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=92">robloz</a> — Dom Abr 29, 2012 11:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-07T18:29:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=5627#p5627</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=5627#p5627"/>
<title type="html"><![CDATA[Re: Direccion del sprite? norte - sur - este - oeste ?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=5627#p5627"><![CDATA[
Vale, llevo toda la tarde pensando como hacerlo, y ahora que posteo va y se me ocurre.... xD lo siento.<br />Os posteo como lo hice por si a alguien le es de interes, aunque seguro que es una forma bastante chapucera.<br /><br /><pre class="prettyprint">int auxx, auxy;<br /><br />    auxx=posx;  //variable auxiliar que guarda la posicion inicial de x<br />    auxy=posy;  //variable auxiliar que guarda la posicion inicial de y<br /><br />    posx+=speedx; <br /><br />    if&#40;auxx&lt;posx&amp;&amp;auxy==posy&#41;{<br />           norte=false;<br />           sur=false;<br />           este=true;<br />           oeste=false;<br />    }else{<br />           norte=false;<br />           sur=false;<br />           este=false;<br />           oeste=true;<br />    }<br /><br />    if&#40;auxy&lt;posy&amp;&amp;auxx==posx&#41;{<br />           norte=false;<br />           sur=true;<br />           este=false;<br />           oeste=false;<br />    }<br />    if&#40;auxy&gt;posy&amp;&amp;auxx==posx&#41;{<br />           norte=true;<br />           sur=false;<br />           este=false;<br />           oeste=false;<br />    }</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Mar Jun 07, 2011 6:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-07T18:09:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=5626#p5626</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=5626#p5626"/>
<title type="html"><![CDATA[Direccion del sprite? norte.sur.este.oeste - Solucionado!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1172&amp;p=5626#p5626"><![CDATA[
Hola buenas, queria saber si alguien conoce alguna funcion o algun mecanismo para detectar en que direccion se mueve el sprite, si es norte, sur, este y oeste,<br />si fuera en c++ / SDL mejor.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Mar Jun 07, 2011 6:09 pm</p><hr />
]]></content>
</entry>
</feed>