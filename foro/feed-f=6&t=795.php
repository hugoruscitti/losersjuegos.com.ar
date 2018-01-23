<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=795" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-25T18:53:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=795</id>
<entry>
<author><name><![CDATA[JMP]]></name></author>
<updated>2010-07-25T18:53:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3530#p3530</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3530#p3530"/>
<title type="html"><![CDATA[Re: Rotar un PNG en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3530#p3530"><![CDATA[
Gracias,<br />ya tengo la libreria del SDL_IMAGE y cuando saque un rato me pondre con lo de rotar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2295">JMP</a> — Dom Jul 25, 2010 6:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-07-25T04:39:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3523#p3523</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3523#p3523"/>
<title type="html"><![CDATA[Re: Rotar un PNG en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3523#p3523"><![CDATA[
Hola, este tema de las rotaciones es aglo de lo que no hablan en los tutos de SDL, pero para hacer cualquier juego siempre se usan rotaciones.<br />Pues solo te dejo el link del post en el que tambien tuve la duda sobre las rotaciones y como lo implemente, es muy sencillo.<br />El codigo que hace la rotacion es parte de una clase que maneja sprites en un motor de juegos que estoy escribiendo.<br /><a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=9&amp;t=681" class="postlink">http://www.losersjuegos.com.ar/foro/viewtopic.php?f=9&amp;t=681</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Jul 25, 2010 4:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-07-25T00:12:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3522#p3522</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3522#p3522"/>
<title type="html"><![CDATA[Re: Rotar un PNG en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3522#p3522"><![CDATA[
Buenas, te comento: existen formas de hacer las dos<br />cosas que necesitas, solo que para ello se suelen<br />usar bibliotecas adicionales.<br /><br /><span style="font-style: italic">SDL_Image</span>:  <!-- m --><a class="postlink" href="http://www.libsdl.org/projects/SDL_image/">http://www.libsdl.org/projects/SDL_image/</a><!-- m --><br /><br />Se utiliza para cargar imágenes en diferentes formatos, como png o jpg... funciona<br />junto a SDL y te provee funciones como IMG_Load, que retornan un puntero<br />a una superficie (igual que SDL_Load).<br /><br /><br /><span style="font-style: italic">SDL_gfx</span>: <!-- m --><a class="postlink" href="http://www.ferzkopp.net/joomla/content/view/19/14/">http://www.ferzkopp.net/joomla/content/view/19/14/</a><!-- m --><br /><br />Te brinda un conjunto muy grande de funciones para rotar, o modificar el<br />tamaño de una superficie.<br /><br />Para mas información te recomiendo ver un ejemplo de la<br />web de losersjuegos que se llama <span style="font-weight: bold">&quot;Escalado y rotación&quot;</span> que escribió<br />Lucas:<br /><br />     <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><br /><br /><img src="http://www.losersjuegos.com.ar/_media/referencia/ejemplos/escalado_rotacion/captura.png" alt="Imagen" /><br /><br />Este ejemplo usa las dos bibliotecas que te comenté.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Jul 25, 2010 12:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[JMP]]></name></author>
<updated>2010-07-24T21:56:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3521#p3521</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3521#p3521"/>
<title type="html"><![CDATA[Rotar un PNG en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=795&amp;p=3521#p3521"><![CDATA[
Pues he cargado un bmp con lo siguiente<br /><dl class="codebox"><dt>Code: </dt><dd><code>     img=SDL_LoadBMP(&quot;a.bmp&quot;);<br /><br />     SDL_SetColorKey(img,SDL_SRCCOLORKEY|SDL_RLEACCEL, SDL_MapRGB(img-&gt;format,0,0,0));<br />     img = SDL_DisplayFormat(img);</code></dd></dl><br />y luego lo he dibujado con esto<br /><dl class="codebox"><dt>Code: </dt><dd><code>    SDL_Rect dest;<br />    dest.x=posx;<br />    dest.y=posy;<br />    SDL_BlitSurface(img,NULL,screen,&amp;dest);</code></dd></dl><br /><br />Me gustaria poder rotar este y si existe alguna forma para hacerlo, tambien si ¿ para cargar algo que no sea un bmp, y cargar un png por ejemplo tengo que usar SDL_IMAGE?<br /><br />Gracias por todo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2295">JMP</a> — Sab Jul 24, 2010 9:56 pm</p><hr />
]]></content>
</entry>
</feed>