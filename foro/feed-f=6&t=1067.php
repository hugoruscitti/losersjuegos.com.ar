<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1067" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-03T22:39:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1067</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-03T22:39:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5167#p5167</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5167#p5167"/>
<title type="html"><![CDATA[Re: Problema con TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5167#p5167"><![CDATA[
cierto, no lo habia pensado, de todas maneras como es para un campo de texto no me afecta tener uno mas o uno menos, era mas que nada para que no se saliera. <br />gracias juanxo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Mar 03, 2011 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-03-03T12:02:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5166#p5166</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5166#p5166"/>
<title type="html"><![CDATA[Re: Problema con TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5166#p5166"><![CDATA[
ojo, tal y como lo estás haciendo ahora tienes una cadena de 19 caracteres máximo, en vez de 20 como has establecido en límite.<br />En C, las cadenas tienen que terminar con el caracter nulo &quot;\0&quot;, por eso tienes que reservar siempre un caracter más de los que quieras usar. Así, tendrias que reservar 21 caracteres en el array (limite + 1) para poder meter 20 caracteres a tu cadena<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 03, 2011 12:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-03T00:35:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5165#p5165</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5165#p5165"/>
<title type="html"><![CDATA[Re: Problema con TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5165#p5165"><![CDATA[
dandole vueltas ha esto he llegado a la solucion, por si a alguien le sirve, me faltaba marcar el final de frase con '\0', asi quedaria el codigo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>int limite = 20;<br />char * cadena = new char&#91;limite&#93;;<br />for(int i=0; i&lt;limite; i++) cadena&#91;i&#93;=' ';<br />cadena&#91;limite-1&#93; = '\0';<br /><br /><br />SDL_Surface * texto = TTF_RenderText_Blended(fuente, cadena, color);<br />SDL_BlitSurface(texto, NULL, screen, &amp;rectTexto);<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Mar 03, 2011 12:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-02T20:08:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5163#p5163</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5163#p5163"/>
<title type="html"><![CDATA[Problema con TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1067&amp;p=5163#p5163"><![CDATA[
Buenas noches a todos, tengo un problemilla mostrando un texto por pantalla, aver si me podeis hechar una mano:<br /><img src="http://img850.imageshack.us/i/conombre.png/" alt="Imagen" /><br />Os cuento: <br />El circulo rojo es una cadena de espacios en blanco:<br /><dl class="codebox"><dt>Code: </dt><dd><code>int limite = 20; <br />char * cadena = new char&#91;limite&#93;;<br />for(int i=0; i&lt;limite; i++) cadena&#91;i&#93;=' ';<br /><br />SDL_Surface * texto = TTF_RenderText_Blended(fuente, cadena, color);<br />SDL_BlitSurface(texto, NULL, screen, &amp;rectTexto);<br /></code></dd></dl><br /><br />Por que me salen todos esos caracteres despues de la cadena(los del circulo verde)???<br /><br />muchas gracias de antemano <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Mar 02, 2011 8:08 pm</p><hr />
]]></content>
</entry>
</feed>