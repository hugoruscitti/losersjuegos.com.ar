<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1106" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-03T22:22:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1106</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-04-03T22:22:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1106&amp;p=5371#p5371</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1106&amp;p=5371#p5371"/>
<title type="html"><![CDATA[Problemas en windows 7, buscando soluciones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1106&amp;p=5371#p5371"><![CDATA[
Buenas, ayer y hoy estuve haciendo un muchas pruebas<br />sobre Windows 7, porque pilas definitivamente no<br />está queriendo funcionar ahí...<br /><br />Resulta que pySFML, una de las biblioteca base<br />de pilas, parece que tiene algunos problemas en<br />windows 7 cuando se usa junto a python.<br /><br />Necesita ayuda de programadores que usen windows 7<br />para seguir investigando, ¿alguien se ofrece de<br />voluntario?. Básicamente necesito que prueben<br />el código que a mí no me funciona sobre windows 7, a<br />ver si nos aparece el mismo error.<br /><br />Les comento sobre el código que estoy usando, busqué escribir<br />el ejemplo mas simple para estas pruebas.<br /><br /><br />El siguiente código comienza a funcionar bien, tiene<br />que mostrar una ventana dos segundos y luego cerrarse:<br /><br /><pre class="prettyprint">import time<br />from PySFML import sf<br />window = sf.RenderWindow&#40;sf.VideoMode&#40;320, 240&#41;, &quot;Test&quot;&#41;<br /><br />texto = sf.String&#40;&quot;Esperando 2 segundos ...&quot;&#41;<br />window.Clear&#40;sf.Color.Green&#41;<br />window.Draw&#40;texto&#41;<br />window.Display&#40;&#41;<br /><br />time.sleep&#40;2&#41;<br /><br />window.Close&#40;&#41;</pre><br /><br />pero en Windows 7 se produce un error al cerrar la ventana:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20110403/bug1.jpg" alt="Imagen" /><br /><br /><br />¿A ustedes les pasa igual, saben de alguna forma para solucionarlo?.<br /><br />Por favor, si alguien tiene experiencia en windows 7 y quiere<br />dar una mano que avise... tal vez una opción sea compilar la<br />versión nueva de SFML o recompilar la versión 1.6...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Abr 03, 2011 10:22 pm</p><hr />
]]></content>
</entry>
</feed>