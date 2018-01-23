<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=438" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-11T14:13:43+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=438</id>
<entry>
<author><name><![CDATA[Metallium]]></name></author>
<updated>2009-01-11T14:13:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1873#p1873</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1873#p1873"/>
<title type="html"><![CDATA[Caracteres especiales en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1873#p1873"><![CDATA[
Muchas gracias, con esto ahora funciona. También lo he conseguido de otra manera: Grabando el archivo .py que contiene el texto que quiero renderizar con la codificación ISO-8859-15 en lugar de UTF-8 (esto sin tener nada que ver con la cabecera del archivo).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2046">Metallium</a> — Dom Ene 11, 2009 2:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-01-11T00:15:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1863#p1863</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1863#p1863"/>
<title type="html"><![CDATA[Caracteres especiales en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1863#p1863"><![CDATA[
Sensishito, utiliza cadenas unicode;<br /><br />Aunque con la declaración utf-8 python reconoce cadenas como esta:<br />&gt;&gt;&gt; print &quot;áéíóú&quot;<br />en pygame necesitas usar cadenas unicode:<br />&gt;&gt;&gt; font.render(u&quot;áéíóúñ&quot;, ...... etc)<br /><br />Solo coloca una &quot;u&quot; al principio de la cadena.<br /><br />#-*-<br /><br />También puedes utilizar escapes unicode:<br />&gt;&gt;&gt; u&quot;\u263A&quot;<br /><br />Con esto, pygame renderizará una carita feliz (si la fuente la soporta):<br /><a href="http://www.fileformat.info/info/unicode/char/263a/index.htm" class="postlink">http://www.fileformat.info/info/unicode/char/263a/index.htm</a><br /><br />Solo pon u&quot;\u&quot; + el codigo unicode del carácter...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Dom Ene 11, 2009 12:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metallium]]></name></author>
<updated>2009-01-10T22:51:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1862#p1862</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1862#p1862"/>
<title type="html"><![CDATA[Caracteres especiales en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=438&amp;p=1862#p1862"><![CDATA[
Buenas, tengo un problema al usar el modulo Font de pygame. No puedo mostrar caracteres especiales tales como ñ, o letras con acento ya que al hacerlo lo único que se muestran son unos rectángulos.<br />Todo esto ocurre incluso especificando # -*- coding: utf-8 -*- en la cabecera.<br /><br />Necesito estos caracteres como sea, ya que desarrollo una aventura gráfica. Por eso pido ayuda a quien sepa alguna manera de conseguirlo, aunque sea poniendo el codigo del caracter como se hace en c o c++.<br /><br />Muchas gracias de antemano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2046">Metallium</a> — Sab Ene 10, 2009 10:51 pm</p><hr />
]]></content>
</entry>
</feed>