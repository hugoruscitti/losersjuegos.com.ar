<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=644" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-10-30T02:36:17+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=644</id>
<entry>
<author><name><![CDATA[Meldron]]></name></author>
<updated>2009-10-30T02:36:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=644&amp;p=3014#p3014</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=644&amp;p=3014#p3014"/>
<title type="html"><![CDATA[Usando SDL_Event con SDL_Timer]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=644&amp;p=3014#p3014"><![CDATA[
Buenas leonel06033, en la documentacion oficial de SDL tenes todo lo que necesitas (declaracion de la estructura SDL_UserEvent) y un ejemplo.<br />--&gt; <a href="http://sdl.beuc.net/sdl.wiki/SDL_UserEvent" class="postlink">http://sdl.beuc.net/sdl.wiki/SDL_UserEvent</a><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2108">Meldron</a> — Vie Oct 30, 2009 2:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-10-29T20:46:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=644&amp;p=3012#p3012</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=644&amp;p=3012#p3012"/>
<title type="html"><![CDATA[Usando SDL_Event con SDL_Timer]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=644&amp;p=3012#p3012"><![CDATA[
Hola amigos:<br /><br />bueno de vuelta por acá, después de tratar de hacerlo veo que no puedo y me decido a preguntar una vez más, aquí esta.<br /><br />bueno, estoy creando un timer, el cual como dicen los manuales se ejecuta en un hilo diferente al programa y esto es cierto, pero también es verdad que los hilos pueden tener problemas de sincronización a la hora de acceder a determinados datos o funciones, la cosa que quiero llamar a una función desde mi hilo timer, y para esto me recomendaron utilizar eventos, SDL_UserEvent, pero esta estructura o no se como hacerlo con esto, si esta estructura solo tiene datos, ya trate de crear un objeto de clase y convertirlo a uno de sus datos el cual es <br /><br />*void data1<br /><br />pero nada, algún consejo o ejemplo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Jue Oct 29, 2009 8:46 pm</p><hr />
]]></content>
</entry>
</feed>