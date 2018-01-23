<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=634" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-10-08T17:43:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=634</id>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-10-08T17:43:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=634&amp;p=2963#p2963</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=634&amp;p=2963#p2963"/>
<title type="html"><![CDATA[Re: Problemas con SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=634&amp;p=2963#p2963"><![CDATA[
bueno ya he resulto el problema y lo dejo para si alguien le sirve mi soloción bueno si que sirve, pero para si alguien tiene el mismo problema.<br /><br />la cosas es que el linker no esta enlazado con la libreria SDL_tt, pero para que eso funcione hacemos los siguiente, sobre kdevelop<br /><br />ir a menu proyecto / opciones del proyecto / opciones de configure / en el campo parametros de enlace ponermos  -lSDL_ttf<br /><br />o cualquiera de las demas librerias estendidad de SDL  como mixer, net entre otras.<br /><br />saludos.<br /><br /><br /><blockquote><div><cite>leonel06033 escribió:</cite><br />Hola a todos una vez más.<br /><br />Bueno mi problemas ahora es en el uso de la libreria SDL_ttf.h, voy a dar más especificaciones para si alguien cree que pueda ser eso, trabajo sobre linux debian 5, y programo sobre kdevelop en C++, ya instale todas las librerias SDL y me están pinchando de lo mejor, pero la única que me esta dando bateo es la dichosa SDL_ttf.h.<br /><br />Yo la incluyo y el compilador no me dice nada al respecto, la toma bien, pero cuando la voy a inicializar me da un error diciendo que la función, referencia indefinida a la función, eso lo dice cuando se esta haciendo referencia a una función que no esta creada todavía, pero la cuestión no es esa, la cosa es que toma a función <br /><br />TTF_Init(void);<br /><br />la cual no recibe ningún parametro, y le paso cualquier cosas como por ejemplo<br /><br />TTF_Init(&quot;sdsdsd&quot;);<br /><br />y me dice, muchos argumentos para la función, lo cual me doy cuenta que si esta encontrando y utilizando la función, pero si la dejo normal como se debe utilizar me dice lo primero que plantie.<br /><br />que podrá ser eso amigos,<br /><br />si alguien tiene la respuesta les pido por favor que me lo informe para poder continuar con lo que estoy haciendo, saludos.<br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Jue Oct 08, 2009 5:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-10-08T16:11:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=634&amp;p=2962#p2962</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=634&amp;p=2962#p2962"/>
<title type="html"><![CDATA[Problemas con SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=634&amp;p=2962#p2962"><![CDATA[
Hola a todos una vez más.<br /><br />Bueno mi problemas ahora es en el uso de la libreria SDL_ttf.h, voy a dar más especificaciones para si alguien cree que pueda ser eso, trabajo sobre linux debian 5, y programo sobre kdevelop en C++, ya instale todas las librerias SDL y me están pinchando de lo mejor, pero la única que me esta dando bateo es la dichosa SDL_ttf.h.<br /><br />Yo la incluyo y el compilador no me dice nada al respecto, la toma bien, pero cuando la voy a inicializar me da un error diciendo que la función, referencia indefinida a la función, eso lo dice cuando se esta haciendo referencia a una función que no esta creada todavía, pero la cuestión no es esa, la cosa es que toma a función <br /><br />TTF_Init(void);<br /><br />la cual no recibe ningún parametro, y le paso cualquier cosas como por ejemplo<br /><br />TTF_Init(&quot;sdsdsd&quot;);<br /><br />y me dice, muchos argumentos para la función, lo cual me doy cuenta que si esta encontrando y utilizando la función, pero si la dejo normal como se debe utilizar me dice lo primero que plantie.<br /><br />que podrá ser eso amigos,<br /><br />si alguien tiene la respuesta les pido por favor que me lo informe para poder continuar con lo que estoy haciendo, saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Jue Oct 08, 2009 4:11 pm</p><hr />
]]></content>
</entry>
</feed>