<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1395" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-20T00:59:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1395</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-04-20T00:59:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6680#p6680</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6680#p6680"/>
<title type="html"><![CDATA[Re: Preguntas Cortas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6680#p6680"><![CDATA[
<blockquote><div><cite>MrBB4 escribió:</cite><br />XML? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> que raro. Tambien voy a ver eso <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /><br /></div></blockquote><br />claro, <span style="font-weight: bold">import lxml.etree as xml</span> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Abr 20, 2012 12:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-01-25T19:00:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6481#p6481</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6481#p6481"/>
<title type="html"><![CDATA[Re: Preguntas Cortas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6481#p6481"><![CDATA[
Gracias Hugo. Voy a ojear los .ini y .json. Sobre lo otro, decidí simplemente reducir la cantidad de módulos fusionándolos según sus similitudes.<br />XML? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> que raro. Tambien voy a ver eso <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />Gracias de nuevo y suerte en todo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mié Ene 25, 2012 7:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-01-25T18:38:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6480#p6480</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6480#p6480"/>
<title type="html"><![CDATA[Re: Preguntas Cortas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6480#p6480"><![CDATA[
o un XML tambien sirve...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Ene 25, 2012 6:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-01-24T21:18:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6477#p6477</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6477#p6477"/>
<title type="html"><![CDATA[Re: Preguntas Cortas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6477#p6477"><![CDATA[
<blockquote><div><cite>MrBB4 escribió:</cite><br />¿Es mala idea crear en mi programa un script que importe todos mis módulos y luego que todos mis módulos/scripts importen al script inicial?<br />O mejor: ¿Hay alguna forma de importar todos mis módulos de forma global? porque hasta donde yo se, cada script necesita hacer sus propios imports.<br /></div></blockquote><br /><br />Se puede hacer de esa manera, no es algo malo realmente.<br /><br />Lo que ví, en general, es que se suelen importar en un script solamente los módulos que se usan. Así, cuando<br />uno ve un archivo de código python, a simple vista, se dá una idea de las cosas que usa. No es común que un módulo<br />necesite de muchos módulos juntos.<br /><br /><blockquote><div><cite>MrBB4 escribió:</cite><br />Y otra pregunta: ¿Es buena idea utilizar un .py como script de configuración? (como el clásico .cfg de los juegos)<br /><br />Gracias y Saludos.<br /></div></blockquote><br /><br />Es mas común que se utilicen archivos .ini o .json para configuración. Pero todo depende de quien pueda<br />editar esos archivos. Si estás haciendo el archivo para que lo edite un usuario (que no es programador), tal<br />vez lo mejor sea brindarle un archivo .json o .ini . En cambio, si es para un desarrollador, un archivo .py alcanza<br />(y es un poco mas fácil de implementar).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Ene 24, 2012 9:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-01-24T01:48:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6475#p6475</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6475#p6475"/>
<title type="html"><![CDATA[Preguntas Cortas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1395&amp;p=6475#p6475"><![CDATA[
¿Es mala idea crear en mi programa un script que importe todos mis módulos y luego que todos mis módulos/scripts importen al script inicial?<br />O mejor: ¿Hay alguna forma de importar todos mis módulos de forma global? porque hasta donde yo se, cada script necesita hacer sus propios imports.<br /><br />Y otra pregunta: ¿Es buena idea utilizar un .py como script de configuración? (como el clásico .cfg de los juegos)<br /><br />Gracias y Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Ene 24, 2012 1:48 am</p><hr />
]]></content>
</entry>
</feed>