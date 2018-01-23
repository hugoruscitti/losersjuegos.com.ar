<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=818" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-08T23:24:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=818</id>
<entry>
<author><name><![CDATA[Khedrak]]></name></author>
<updated>2010-08-08T23:24:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3701#p3701</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3701#p3701"/>
<title type="html"><![CDATA[Re: Ayuda: Mouse no salga de ventana. SDL y C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3701#p3701"><![CDATA[
Es exactamente la función que estaba buscando, ahora mi programa funciona de maravilla muchas gracias ^^!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2305">Khedrak</a> — Dom Ago 08, 2010 11:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-08T21:56:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3699#p3699</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3699#p3699"/>
<title type="html"><![CDATA[Re: Ayuda: Mouse no salga de ventana. SDL y C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3699#p3699"><![CDATA[
Tendrías que usar la función &quot;SDL_WM_GrabInput&quot;, está hace que tu aplicación<br />capture el mouse y el teclado por completo. Similar a lo que ocurre cuando<br />tu programa está en pantalla completa.<br /><br />Eso si, recuerda crear alguna manera de quitar tu juego con el teclado, sino<br />no podrás cerrar la ventana...<br /><br />Buena suerte, saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 08, 2010 9:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Khedrak]]></name></author>
<updated>2010-08-08T04:57:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3692#p3692</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3692#p3692"/>
<title type="html"><![CDATA[Ayuda: Mouse no salga de ventana. SDL y C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=818&amp;p=3692#p3692"><![CDATA[
Holas!, bueno seré breve, hace un tiempo estoy utilizando la librería SDL en C++, y he estado intentando lograr que el mouse no salga de la ventana, hasta el momento he intentado con SDL_GetMouseState(...) y SDL_WarpMouse(...), pero si muevo el mouse demasiado rápido, este se sale de todas formas.<br />Ojala puedan ayudarme a solucionar esto, de antemano gracias ;D.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2305">Khedrak</a> — Dom Ago 08, 2010 4:57 am</p><hr />
]]></content>
</entry>
</feed>