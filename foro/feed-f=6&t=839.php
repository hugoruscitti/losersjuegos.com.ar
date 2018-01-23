<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=839" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-01T15:47:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=839</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-09-01T15:47:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=4014#p4014</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=4014#p4014"/>
<title type="html"><![CDATA[Re: OpenGL sobre una superficie secundaria de SDL.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=4014#p4014"><![CDATA[
Hola, cuando comencé con opengl intenté hacer lo que tú comentas. El problemas es que si SDL se inicia con el contexto de OpenGL, no funciona el blit de una SDL_Image (la referencia de la API corrobora lo que digo). Se me ocurren dos opciones:<br />1-Buscar/hacer una función que te pasa de una SDL_image a una textura de OpenGL. Pero esto será lento y seguramente no se pueda hacer a tiempo real.<br />2-Aprender a hacer lo intentas usando solamente OpenGL.<br /><br />Aunque quizás haya otra opción que desconozca. Además, puede que esto cambie en la nueva versión de SDL, parece que trae mejoras importantes.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Sep 01, 2010 3:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-24T07:01:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3861#p3861</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3861#p3861"/>
<title type="html"><![CDATA[Re: OpenGL sobre una superficie secundaria de SDL.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3861#p3861"><![CDATA[
Nos ayudarías mas si posteas el codigo, por que puede que esten haciendo el flip en la funcion que realiza el render de opengl, y si luego dibujas algo<br />seguro no se verá.<br /><br />No se si sepas que con opengl se pueden poner imágenes en 2D, de tal forma que te quedaría igual que haciendolo con SDL, eso se realiza poniendo<br />la proyeccion ortográfica, sin enbargo yo no lo usaria, requiere mas codigo para hacerlo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ago 24, 2010 7:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-08-23T13:52:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3828#p3828</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3828#p3828"/>
<title type="html"><![CDATA[Re: OpenGL sobre una superficie secundaria de SDL.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3828#p3828"><![CDATA[
buenas:<br /><br />te sugiero que postees tu codigo y eso nos permitirá ver si existe algún fallo.<br /><br />En cuanto a lo de dominar SDL antes que SFML, decirte que SFML está organizado con clases, lo que te puede resultar más familiar, además de que trae alguna funcionalidad más. Por lo demás, son casi idénticas las 2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Ago 23, 2010 1:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mongui]]></name></author>
<updated>2010-08-23T11:26:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3825#p3825</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3825#p3825"/>
<title type="html"><![CDATA[Re: OpenGL sobre una superficie secundaria de SDL.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3825#p3825"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />Hola, lo que intentas se que se puede hacer bien con sfml, es tan sencillo como dibujar primero con opengl y luego dibujas lo que quieras con sfml o vice-versa, asi podrias dibujar texto con sfml y detras una escena con opengl.<br />No se si se pueda con sdl, lo de las estructuras no tiene mucho que ver, lo que opengl hace despues de hacer su render es devolver una imagen o superficie la cual se copia a la superficie de sdl, que iniciaste con sdl_setvideomode, asi que en teoría deverías poder hacer mas blits al screen de sdl,por supuesto no hagas flip antes de dibujar lo que quieres aparte de opengl.<br />pon el codigo con el que lo has estado probando.<br /></div></blockquote>Es lo que he intentado. He probado a blittar una superficie a la principal (screen) que lleva el OpenGL pero al ejecutar el programa no muestra esa superficie, solamente el gráfico creado en OpenGL.<br /><br />Busco ver si puedo colocar en otra superficie los gráficos 3D para luego pegarlos a la principal con el resto de lo dibujado con SDL. SFML no lo he probado aunque parece bueno primero quiero dominar SDL. :p<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2314">mongui</a> — Lun Ago 23, 2010 11:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-22T21:39:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3814#p3814</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3814#p3814"/>
<title type="html"><![CDATA[Re: OpenGL sobre una superficie secundaria de SDL.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3814#p3814"><![CDATA[
Hola, lo que intentas se que se puede hacer bien con sfml, es tan sencillo como dibujar primero con opengl y luego dibujas lo que quieras con sfml o vice-versa, asi podrias dibujar texto con sfml y detras una escena con opengl.<br />No se si se pueda con sdl, lo de las estructuras no tiene mucho que ver, lo que opengl hace despues de hacer su render es devolver una imagen o superficie la cual se copia a la superficie de sdl, que iniciaste con sdl_setvideomode, asi que en teoría deverías poder hacer mas blits al screen de sdl,por supuesto no hagas flip antes de dibujar lo que quieres aparte de opengl.<br />pon el codigo con el que lo has estado probando.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Ago 22, 2010 9:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-22T20:28:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3812#p3812</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3812#p3812"/>
<title type="html"><![CDATA[Re: OpenGL sobre una superficie secundaria de SDL.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3812#p3812"><![CDATA[
La estructura de datos de los surface de openGL y SDL son totalmente diferentes, veo un poco difícil conseguir lo que quieres.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Dom Ago 22, 2010 8:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mongui]]></name></author>
<updated>2010-08-22T16:40:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3810#p3810</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3810#p3810"/>
<title type="html"><![CDATA[OpenGL sobre una superficie secundaria de SDL.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=839&amp;p=3810#p3810"><![CDATA[
Hola, alguien sabe si se puede crear una superficie para OpenGL que no sea con la función SDL_SetVideoMode? El objetivo busco es poder pegar una superficie dibujada SDL encima de otra OpenGL. ¿Es esto posible? Me estoy comiendo la cabeza intentando diferentes cosas pero no consigo nada y llevo un buen rato buscando en Google sin éxito. ¿Alguno me puede echar una mano?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2314">mongui</a> — Dom Ago 22, 2010 4:40 pm</p><hr />
]]></content>
</entry>
</feed>