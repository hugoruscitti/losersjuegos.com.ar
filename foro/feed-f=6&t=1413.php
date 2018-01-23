<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1413" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-02-17T16:57:30+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1413</id>
<entry>
<author><name><![CDATA[Kainz]]></name></author>
<updated>2012-02-17T16:57:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6541#p6541</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6541#p6541"/>
<title type="html"><![CDATA[Re: sistema de dialogos para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6541#p6541"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />Hola,<br /><br />No se si hay una implementación de dialogos con SDL, busqué por varios lados pero no encontré nada...<br /><br />Tal vez te resulte útil ver el sistema de dialogos que tiene pilas-engine:<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=26&amp;t=1018&amp;p=5240&amp;hilit=dialogo#p4837">viewtopic.php?f=26&amp;t=1018&amp;p=5240&amp;hilit=dialogo#p4837</a><!-- l --><br /><br />Al menos para investigarlo, tomar ideas etc... el código de pilas-engine es python, aunque se puede<br />transladar a C++ con un poco de paciencia (y tiempo!).<br /></div></blockquote><br /><br /><br />Bueno me lo vere y a ver que tal, por ahora he conseguido crear mi propio sistema, pero realmente no creo que sea el mejor, asi que, a ver que descubro. Gracias<br /><br />ahora si quieres te invito a resolverme esta duda (si quieres eh). <!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=6&amp;t=1414">viewtopic.php?f=6&amp;t=1414</a><!-- l --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2486">Kainz</a> — Vie Feb 17, 2012 4:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-02-17T15:49:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6540#p6540</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6540#p6540"/>
<title type="html"><![CDATA[Re: sistema de dialogos para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6540#p6540"><![CDATA[
Hola,<br /><br />No se si hay una implementación de dialogos con SDL, busqué por varios lados pero no encontré nada...<br /><br />Tal vez te resulte útil ver el sistema de dialogos que tiene pilas-engine:<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=26&amp;t=1018&amp;p=5240&amp;hilit=dialogo#p4837">viewtopic.php?f=26&amp;t=1018&amp;p=5240&amp;hilit=dialogo#p4837</a><!-- l --><br /><br />Al menos para investigarlo, tomar ideas etc... el código de pilas-engine es python, aunque se puede<br />transladar a C++ con un poco de paciencia (y tiempo!).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Feb 17, 2012 3:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kainz]]></name></author>
<updated>2012-02-17T15:09:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6539#p6539</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6539#p6539"/>
<title type="html"><![CDATA[Re: sistema de dialogos para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6539#p6539"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br />Es un problema muy interesante a decir verdad <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Mi solución es crear una clase para cada dialogo (o bien podría ser una estructura...), y una cola. ej pseudocódigo seria algo como:<br /><br /><pre class="prettyprint">//creamos la estructura dialogo<br />Dialogo{<br />string personaje<br />string dice     <br />}<br /><br />//una función que nos muestra en pantalla el contenido del dialogo<br />imprime_dialogo&#40;Dialogo d&#41;{<br />    Dibuja &#40;d.personaje&#41;<br />    Dibuja&#40; d.dice &#41;<br />    }<br /><br />Cola cola_dialogo;<br />mientras juego:<br />   dibujar_mundo<br />   dibujar_personajes<br /><br />   gestionar_eventos:<br />       si se presiona tecla tal<br />           retirar el primer dialogo de la cola_dialogo<br />       si puede_hablar_con_personaje&#40;&#41;:<br />           //agregamos un dialogo...<br />            agrega_dialogo&#40; cola_dialogo, el_dialogo_del_personaje &#41;<br />   <br />    si  hay diálogos en la cola_dialogo:<br />        imprime_dialogo&#40;cola_dialogo[primer elemento]&#41;<br />    si no:<br />        actualizar_mundo y personajes</pre><br /><br />No sé si esto te ayude... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><br /></div></blockquote><br /><br />pues sinceramente no lo he entendido mucho... si pudieras ponerlo mas simple (si pudieras, trabajo en c/c++<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2486">Kainz</a> — Vie Feb 17, 2012 3:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-02-17T07:53:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6538#p6538</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6538#p6538"/>
<title type="html"><![CDATA[Re: sistema de dialogos para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6538#p6538"><![CDATA[
Es un problema muy interesante a decir verdad <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Mi solución es crear una clase para cada dialogo (o bien podría ser una estructura...), y una cola. ej pseudocódigo seria algo como:<br /><br /><pre class="prettyprint">//creamos la estructura dialogo<br />Dialogo{<br />string personaje<br />string dice     <br />}<br /><br />//una función que nos muestra en pantalla el contenido del dialogo<br />imprime_dialogo&#40;Dialogo d&#41;{<br />    Dibuja &#40;d.personaje&#41;<br />    Dibuja&#40; d.dice &#41;<br />    }<br /><br />Cola cola_dialogo;<br />mientras juego:<br />   dibujar_mundo<br />   dibujar_personajes<br /><br />   gestionar_eventos:<br />       si se presiona tecla tal<br />           retirar el primer dialogo de la cola_dialogo<br />       si puede_hablar_con_personaje&#40;&#41;:<br />           //agregamos un dialogo...<br />            agrega_dialogo&#40; cola_dialogo, el_dialogo_del_personaje &#41;<br />   <br />    si  hay diálogos en la cola_dialogo:<br />        imprime_dialogo&#40;cola_dialogo[primer elemento]&#41;<br />    si no:<br />        actualizar_mundo y personajes</pre><br /><br />No sé si esto te ayude... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Feb 17, 2012 7:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kainz]]></name></author>
<updated>2012-02-16T15:51:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6537#p6537</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6537#p6537"/>
<title type="html"><![CDATA[sistema de dialogos para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1413&amp;p=6537#p6537"><![CDATA[
me gustaria ver algun ejemplo de un sistema de dialogos en un juego RPG (y me refiero a dialogos de hablas, es decir de, -hola *que tal? -bien). Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2486">Kainz</a> — Jue Feb 16, 2012 3:51 pm</p><hr />
]]></content>
</entry>
</feed>