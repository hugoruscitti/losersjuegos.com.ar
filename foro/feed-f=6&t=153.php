<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=153" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-09-13T09:38:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=153</id>
<entry>
<author><name><![CDATA[hensip]]></name></author>
<updated>2007-09-13T09:38:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=153&amp;p=531#p531</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=153&amp;p=531#p531"/>
<title type="html"><![CDATA[SDL y los mandos de juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=153&amp;p=531#p531"><![CDATA[
Para quien le interese creo que he encontrado la solucion.<br /><br />El bug esta reportado aqui:<br /><br /><!-- m --><a class="postlink" href="http://bugzilla.libsdl.org/show_bug.cgi?id=267">http://bugzilla.libsdl.org/show_bug.cgi?id=267</a><!-- m --><br /><br />Y no se si este tiene algo que ver:<br /><br /><!-- m --><a class="postlink" href="http://bugzilla.libsdl.org/show_bug.cgi?id=443">http://bugzilla.libsdl.org/show_bug.cgi?id=443</a><!-- m --><br /><br />El caso es que al parecer lo estaban resolviendo por el 2006 con lo cual en los svn de la 1.2 deberia de estar subsanado o en su defecto en la 1.3 aunque aun no este terminada.<br /><br />Abures.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1816">hensip</a> — Jue Sep 13, 2007 9:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hensip]]></name></author>
<updated>2007-09-13T07:58:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=153&amp;p=530#p530</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=153&amp;p=530#p530"/>
<title type="html"><![CDATA[SDL y los mandos de juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=153&amp;p=530#p530"><![CDATA[
Buenas, a ver si me podeis echar un cable. Estoy haciendo una aplicacion en la que voy a requerir el uso de un pad o joystick. Por ahora todo va bien escepto por un pequeño detalle el mando que uso es un logitech rumblepad 2, el cual funciona con la aplicacion a las mil maravillas, pero con otros mandos no funciona. El caso es que cuando tengo conectado el logitech si que me funcionan todos.<br />A ver si me puedo explicar un poco mejor:<br /><br />Conecto el logitech solo, todo va bien.<br />Conecto un thrustmaster o un mando generico de 8 botones y no va ninguno.<br />Conectando el logitech junto con el thrustmaster o el generico funcionan todos perfectamente.<br /><br />¿Alguien melo puede explicar, que tiene el mando logitech? ¿o es un fallo de SDL?<br /><br />El codigo que uso es:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>wxString Error;<br />SDL_Joystick *joy;<br />wxString Text;<br /><br />if &#40; ! SDL_Init&#40;SDL_INIT_JOYSTICK&#41; &#41; &#123;<br />        Error.Printf&#40;_T&#40;&quot;No se pudo iniciar SDL: %s\n&quot;&#41;, SDL_GetError&#40;&#41;&#41;;<br />&#125;else&#123;<br />        if&#40;SDL_NumJoysticks&#40;&#41;&gt;0&#41;&#123;<br />            Text.Printf&#40;_T&#40;&quot;Hay &#40;%d&#41; Joysticks conectados.\n&quot;&#41;, SDL_NumJoysticks&#40;&#41;&#41;;<br />        &#125;<br />&#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1816">hensip</a> — Jue Sep 13, 2007 7:58 am</p><hr />
]]></content>
</entry>
</feed>