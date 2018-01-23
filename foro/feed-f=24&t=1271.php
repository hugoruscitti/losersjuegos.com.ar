<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1271" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-09-16T16:53:08+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1271</id>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-09-16T16:53:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5939#p5939</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5939#p5939"/>
<title type="html"><![CDATA[Re: ¿Crear un .exe de mi juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5939#p5939"><![CDATA[
Ok es perfecto, xq creo que pilas no funciona con versiones 3.x de python (creo).<br />Voy a probarlo a ver que tal y te cuento.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Vie Sep 16, 2011 4:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-09-16T02:59:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5935#p5935</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5935#p5935"/>
<title type="html"><![CDATA[Re: ¿Crear un .exe de mi juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5935#p5935"><![CDATA[
Bueno, yo no soy muy amante de Py2exe, pero he probado con PyInstaller (<a href="http://www.pyinstaller.org)" class="postlink">http://www.pyinstaller.org)</a>, el único problema que veo es que solo funciona para Python 2.X<br />Aquí la documentación : <a href="http://www.pyinstaller.org/export/latest/tags/1.5.1/doc/Manual.html?format=ra" class="postlink">http://www.pyinstaller.org/export/latest/tags/1.5.1/doc/Manual.html?format=ra</a>w<br /><br />Pasando al problema del Py2exe, a parte de ser un error de la Dll, también podría ser un problema con el scrip de creación.<br /><br />No sé si eso te ayude.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Sep 16, 2011 2:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-09-15T07:50:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5928#p5928</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5928#p5928"/>
<title type="html"><![CDATA[¿Crear un .exe de mi juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1271&amp;p=5928#p5928"><![CDATA[
Buenas, estoy desarrollando un juego en pilas y de repente tuve la curiosidad de crear un ejecutable .exe de mi juego, ya que si por ejemplo, quiero probarjo en otra pc sin pilas instalado (ni dependencias ni python ni nada) este funcione sin problema. Para ello descargue e instale PY2EXE (que supuestamente crea un ejecutable con todas las dependencias incluidas) y todo bien pero cuando se estaba creando el ejecutable en la consola de windows se lanzó un error que decia:<br /><br /><span style="font-weight: bold">import py2exe_util<br />ImportError: DLL load failed: %1 no es una aplicacion Win32 valida.</span><br /><br />Y ahi ni idea  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" />  , creo que, o falta un dll o este dll no es compatible.<br /><br />Por si acaso, uso windows 7 y este fue el tutorial que seguir para utilizar py2exe: <a href="http://www.rinconinformatico.net/como-crear-un-ejecutable-de-windows-apartir-de-un-script-en-python" class="postlink">http://www.rinconinformatico.net/como-crear-un-ejecutable-de-windows-apartir-de-un-script-en-python</a><br /><br />Saludos!.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Jue Sep 15, 2011 7:50 am</p><hr />
]]></content>
</entry>
</feed>