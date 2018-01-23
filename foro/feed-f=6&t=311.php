<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=311" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-29T16:15:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=311</id>
<entry>
<author><name><![CDATA[keldrox]]></name></author>
<updated>2008-04-29T16:15:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=311&amp;p=1271#p1271</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=311&amp;p=1271#p1271"/>
<title type="html"><![CDATA[Libreria SDL_texto para ayudar a simplificar SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=311&amp;p=1271#p1271"><![CDATA[
Hola compañeros he estado haciendo varios ejemplos y bueno me resultaba bastante &quot;pesado&quot; la forma que tenia de ver texto en pantalla asi que he creado una structura muy basica y unas funciones tambien muy basicas que me ayudan ha mostrar texto en pantalla facilmente, espero que os srivan para los iniciados igual que yo.<br /><br /><br />Descarga:<br /><a href="http://www.usuarios.lycos.es/keldrox/sdl/lib/SDL_texto.rar" class="postlink">http://www.usuarios.lycos.es/keldrox/sdl/lib/SDL_texto.rar</a> (Boton derecho, guardar enlace como...)<br /><br />Como veis, creo que es bastante facil...<br /><dl class="codebox"><dt>Code: </dt><dd><code>    SDL_texto *prueba;<br /><br />    SDL_texto_iniciar&#40; &amp;prueba, sdlVentana &#41;;<br /><br />    // R, G, B<br />    SDL_texto_asignar_color&#40; prueba, 255, 255, 255 &#41;;<br /><br />    // Ruta de la fuente y tamaño en PIXEL<br />    SDL_texto_asignar_fuente&#40; prueba, &quot;FreeMono.ttf&quot;, 15 &#41;;<br /><br />    // Posicion X e Y<br />    SDL_texto_posicion&#40; prueba, 100, 100 &#41;;<br /><br />    // Texto a escribir, 0 = posicion indicada, &gt;1 = Alineado a la derecha, &lt;1 = Alineado a la izuierda<br />    SDL_texto_printf&#40; prueba, &quot;texto de ejemplo&quot;, 0 &#41;;<br /></code></dd></dl><br /><br /><br />Dentro teneis el codigo, un ejemplo etc, cualquier duda o sugerencia o X o Y me lo comentais.<br /><br />Un saludo!<br /><br />PD: Necesita tener instalado SDL_ttf<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1919">keldrox</a> — Mar Abr 29, 2008 4:15 pm</p><hr />
]]></content>
</entry>
</feed>