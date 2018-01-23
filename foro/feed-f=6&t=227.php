<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=227" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-01-15T06:53:28+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=227</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-01-15T06:53:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=844#p844</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=844#p844"/>
<title type="html"><![CDATA[Una consultita sobre SDL... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=844#p844"><![CDATA[
<!-- m --><a class="postlink" href="http://www.conclase.net/c/librerias/funcion.php?fun=exit">http://www.conclase.net/c/librerias/fun ... p?fun=exit</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Ene 15, 2008 6:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-01-14T16:41:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=834#p834</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=834#p834"/>
<title type="html"><![CDATA[Una consultita sobre SDL... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=834#p834"><![CDATA[
Hola, la funcion &quot;exit&quot; al igual que la funcion &quot;atexit&quot; son funciones propias de la libreria C estandar y no de SDL. <br />Si la memoria no me falla, creo que la primer funcion finaliza el programa de forma abrupta retornando el valor que le es pasado como parametro. Por lo que lei, el programa antes de finalizar libera toda la memoria reservada asi que (en teoria) la utilizacion de &quot;exit&quot; es segura.<br />No obstante, es una buena practica liberar uno mismo la memoria reservada (por ejemplo, liberar una superficie SDL) y finalizar el programa sin la utilizacion de estas funciones (aunque es cuestion de gustos, al igual que sí se usa o no la controvertida funcion &quot;goto&quot;).<br />Con respecto a &quot;atexit&quot;, esta llama a la funcion que le es pasada como argumento (y solo esta funcion) y luego cierra el programa de forma abrupta.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Lun Ene 14, 2008 4:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[LhaN]]></name></author>
<updated>2008-01-14T14:45:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=832#p832</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=832#p832"/>
<title type="html"><![CDATA[Una consultita sobre SDL... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=227&amp;p=832#p832"><![CDATA[
Hola gente, a ver ustedes que saben tanto, tengo el siguiente ejemplo sacado del libro de Alberto García...<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface *screen;<br />screen = SDL_SetVideoMode&#40;640,480,24,SDL_SWSURFACE| SDL_DOUBLEBUF&#41;;<br />if &#40; screen == NULL &#41;&#123;<br />    fprintf&#40;stderr, &quot;No se puede establecer el modo \de video 640x480: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />    exit&#40;1&#41;;<br />&#125;</code></dd></dl><br />Y tengo una duda respecto del exit(1), no se que hace, ni siquiera se si es de SDL. Al menos en dicho libro no lo explican. Si mi intuición no me falla, se trataría de un punto de salida, forzaría la finalización del programa entonces se llamaría a atexit el cual llama a todos los finalizadores de los subsistemas. Esto es correcto? Y el parámetro? que función cumple? Gracias desde ya. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1872">LhaN</a> — Lun Ene 14, 2008 2:45 pm</p><hr />
]]></content>
</entry>
</feed>