<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=133" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-07-09T14:36:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=133</id>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-07-09T14:36:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=427#p427</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=427#p427"/>
<title type="html"><![CDATA[SDL - Pegar una superficie en otra]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=427#p427"><![CDATA[
Hola, muchisimas gracias por tu respuesta. Ya lo he probado y funciona pero el codigo seria asi <dl class="codebox"><dt>Code: </dt><dd><code>SDL_BlitSurface&#40;circulo,NULL,cuadrado,NULL&#41;</code></dd></dl><br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Lun Jul 09, 2007 2:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-07-07T18:26:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=426#p426</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=426#p426"/>
<title type="html"><![CDATA[Re: SDL - Pegar una superficie en otra]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=426#p426"><![CDATA[
<blockquote><div><cite>Juan Carlos escribió:</cite><br />Hola, tenia la siguiente duda. Es posible pegar una superficie en otra? Por ejemplo tengo una imagen de un cuadrado rojo y por otro lado tengo una imagen de un circulo azul con el fondo de la superficie de un color violeta. A esta superficie la puedo tratar para que el color violeta sea un color transparente.<br />Hasta aca todo bien, pero yo quiero que esa superficie (la del circulo) se pegue en la superficie del cuadrado.<br /><br />Es posible?<br /><br />Gracias<br /></div></blockquote><br /><br />Si claro, es posible. Si utilizas la biblioteca SDL junto con el lenguaje<br />de programación C o C++, podrías utilizar la función SDL_BlitSurface:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * cuadrado = SDL_LoadBMP&#40;&quot;cuadrado.bmp&quot;&#41;;<br />SDL_Surface * circulo = SDL_LoadBMP&#40;&quot;circulo.bmp&quot;&#41;;<br /><br />// otras cosas ...<br /><br />SDL_BlitSurface&#40;circulo, cuadrado, NULL, NULL&#41;;<br /></code></dd></dl><br /><br />en cambio si utilizas python y pygame podrías hacer lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>cuadrado = pygame.image.load&#40;'cuadrado.bmp'&#41;<br />circulo = pygame.image.load&#40;'circulo.bmp'&#41;<br /><br />cuadrado.blit&#40;circulo, &#40;0, 0&#41;&#41;<br /></code></dd></dl><br /><br />la documentación de la función SDL_BlitSurface se encuentra en la siguiente<br />web:<br /><br />    <!-- m --><a class="postlink" href="http://www.libsdl.org/cgi/docwiki.cgi/SDL_5fBlitSurface">http://www.libsdl.org/cgi/docwiki.cgi/SDL_5fBlitSurface</a><!-- m --><br /><br />y sobre pygame:<br /><br />    <!-- m --><a class="postlink" href="http://www.pygame.org/docs/">http://www.pygame.org/docs/</a><!-- m --><br /><br />tu eliges, ¡Buena suerte!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Jul 07, 2007 6:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-07-07T13:11:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=425#p425</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=425#p425"/>
<title type="html"><![CDATA[SDL - Pegar una superficie en otra]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=133&amp;p=425#p425"><![CDATA[
Hola, tenia la siguiente duda. Es posible pegar una superficie en otra? Por ejemplo tengo una imagen de un cuadrado rojo y por otro lado tengo una imagen de un circulo azul con el fondo de la superficie de un color violeta. A esta superficie la puedo tratar para que el color violeta sea un color transparente.<br />Hasta aca todo bien, pero yo quiero que esa superficie (la del circulo) se pegue en la superficie del cuadrado.<br /><br />Es posible?<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Sab Jul 07, 2007 1:11 pm</p><hr />
]]></content>
</entry>
</feed>