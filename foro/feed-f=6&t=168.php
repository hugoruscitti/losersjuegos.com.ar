<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=168" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-09-29T21:42:21+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=168</id>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-09-29T21:42:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=576#p576</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=576#p576"/>
<title type="html"><![CDATA[Erro en SDL_GetKeyState]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=576#p576"><![CDATA[
Gracias por contestar, vere si puedo sortear el problema.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Sab Sep 29, 2007 9:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-09-29T16:42:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=575#p575</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=575#p575"/>
<title type="html"><![CDATA[Erro en SDL_GetKeyState]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=575#p575"><![CDATA[
Sí, es cierto. Lo he notado en otros juegos.<br /><br />El problema no es propio de SDL, sino del circuito físico de<br />los teclados. No tengo el vocalurario técnico para explicarlo<br />correctamente, pero es &quot;como sí&quot; el circuito que tienen los<br />teclados para transferir información a la computadora estubiera<br />reducido. Es decir, la pista que transfiere información de<br />algunas teclas se utiliza para muchas otras, por lo tanto el<br />diseño físico del teclado no permite la pulsación de todas esas<br />teclas juntas.<br /><br />Debería ocurrirte lo mismo con cualquier otro juego o programa.<br /><br />Hace muchos años atrás teníamos ese problema con un amigo, <br />jugábamos a un juego de peleas lo dos en el mismo teclado. <br />Entonces, cuando uno de nosotros &quot;saltaba&quot; pulsando dos teclas<br />simultaneas el otro no se podía &quot;cubrir&quot;... ¡ que años aquellos !<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Sep 29, 2007 4:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2007-09-29T04:34:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=571#p571</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=571#p571"/>
<title type="html"><![CDATA[Erro en SDL_GetKeyState]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=168&amp;p=571#p571"><![CDATA[
Hola, bueno, tengo entendido que SDL_GetKeyState me devuelve un array indicandome que teclas estan presionada o no. La he estado usando para los controles de un personaje de un juego y parece funcionar bien.<br /> Pero, y aqui bien mi pregunta, no siempre funciona correctamente. Si presiono varias teclas a la vez, el programa no funciona como deberia. Aqui les paso un codigo patologico que ejemplifica la situacion:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Uint8 *key=SDL_GetKeyState&#40;NULL&#41;;<br /><br />SDL_Delay&#40;4000&#41;;<br />SDL_PumpEvents&#40;&#41;;<br /><br />if&#40;key&#91;SDLK_q&#93;==1&#41; printf&#40;&quot;q&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_w&#93;==1&#41; printf&#40;&quot;w&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_e&#93;==1&#41; printf&#40;&quot;e&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_r&#93;==1&#41; printf&#40;&quot;r&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_t&#93;==1&#41; printf&#40;&quot;t&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_y&#93;==1&#41; printf&#40;&quot;y&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_u&#93;==1&#41; printf&#40;&quot;u&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_i&#93;==1&#41; printf&#40;&quot;i&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_o&#93;==1&#41; printf&#40;&quot;o&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br />if&#40;key&#91;SDLK_p&#93;==1&#41; printf&#40;&quot;p&quot;&#41;; else printf&#40;&quot;0&quot;&#41;;<br /><br />printf&#40;&quot;\n&quot;&#41;;<br /></code></dd></dl><br /><br />En mi computadora si presiono &quot;qwerty&quot; me indica que solo se presiono &quot;qwer&quot;; si presiono &quot;qweruiop&quot;, me indica que &quot;qweruiop&quot; se presionaron (no hubo error). Probe otras combinaciones y la verdad es que los resultados son bastantes erraticos.<br /><br />Alguno tiene idea de lo que sucede?<br /><br />Estoy trabajando en Linux, en C.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Sab Sep 29, 2007 4:34 am</p><hr />
]]></content>
</entry>
</feed>