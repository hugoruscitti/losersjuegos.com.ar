<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1564" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-10-24T07:29:02+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1564</id>
<entry>
<author><name><![CDATA[fsalamero]]></name></author>
<updated>2012-10-24T07:29:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7160#p7160</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7160#p7160"/>
<title type="html"><![CDATA[Re: Instalar Pilas en Os X Mountain Lion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7160#p7160"><![CDATA[
Se está preparando un instalador, no sé cuándo estará listo todavía. Mientras tanto, y pensando en desarrollar, te cuento los pasos que yo di para instalarlo en mi equipo:<br /><br />1. Instalar XCode. Además, en Mountain Lion las Command Line Tools (que necesitamos para compilar las librerías) vienen por separado. Para instalarlas tienes que ir, en XCode, al menú perferencias y allí downloads.<br /><br />2. instalar XQuartz ( <!-- m --><a class="postlink" href="http://xquartz.macosforge.org/landing/">http://xquartz.macosforge.org/landing/</a><!-- m --> ) (Mountain Lion no incluye X11, que sí se incluía en versiones más antiguas de OS X y se necesita para subversion, git, etc)<br /><br />3. instalar Python 2.7.3 desde su web oficial (pyqt lo necesita, no vale el que incorpora Apple; en Mountain Lion hay que elegir la versión de 64/32 bits)<br /><br />4. instalar pygame 1.9.2 desde su web<br /><br />5. instalar pyqtx desde su web ( <!-- m --><a class="postlink" href="https://sourceforge.net/projects/pyqtx/files/">https://sourceforge.net/projects/pyqtx/files/</a><!-- m --> ) <br /><br />6. Instalar readline desde una terminal con &quot;sudo easy_install readline&quot;<br /><br />7. Descargar swig desde su web ( <!-- m --><a class="postlink" href="http://sourceforge.net/projects/swig/files/latest/download?source=files">http://sourceforge.net/projects/swig/fi ... urce=files</a><!-- m --> ) y compilarlo<br /><br />8. Descargar pybox2d 2.1  e instalarlo. Para hacerlo, lo mejor es seguir las mismas instrucciones que las de la web de pilas para Ubuntu o Mint<br /><br />9. Descargar pilas desde github e instalarlo. De nuevo, para hacerlo, lo mejor es seguir las mismas instrucciones que las de la web de pilas para Ubuntu o Mint.<br /><br />Creo que no me dejo nada.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2660">fsalamero</a> — Mié Oct 24, 2012 7:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-10-23T19:26:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7159#p7159</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7159#p7159"/>
<title type="html"><![CDATA[Re: Instalar Pilas en Os X Mountain Lion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7159#p7159"><![CDATA[
Se puede, si, ¿podrías probar con las instrucciones del foro?:<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=7&amp;t=1551">viewtopic.php?f=7&amp;t=1551</a><!-- l --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Oct 23, 2012 7:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2012-10-22T23:37:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7158#p7158</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7158#p7158"/>
<title type="html"><![CDATA[Instalar Pilas en Os X Mountain Lion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1564&amp;p=7158#p7158"><![CDATA[
¿Se puede instalar pilas en Os X Mountain Lion? ¿como?<br /><br />Eso, saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Lun Oct 22, 2012 11:37 pm</p><hr />
]]></content>
</entry>
</feed>