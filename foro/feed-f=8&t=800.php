<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=800" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-27T11:48:57+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=800</id>
<entry>
<author><name><![CDATA[JMP]]></name></author>
<updated>2010-07-27T11:48:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3558#p3558</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3558#p3558"/>
<title type="html"><![CDATA[Re: Instanciar clases en un vector - Python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3558#p3558"><![CDATA[
Vale, con eso funciona<br /><br />Muchas Gracias  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2295">JMP</a> — Mar Jul 27, 2010 11:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-07-26T16:58:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3543#p3543</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3543#p3543"/>
<title type="html"><![CDATA[Re: Instanciar clases en un vector - Python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3543#p3543"><![CDATA[
lo que puedes hacer es crear una clase y crear un objeto para cada valor de la lista:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class Prueba:<br />    def __init__(self):<br />        self.x = 5<br /><br />lista = &#91;&#93;<br />for i in range(5):<br />    lista.append(Prueba())<br /></code></dd></dl><br /><br />con eso tendrías 5 objetos pruebas en tu lista y podrías acceder a ellos por sus índices.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Lun Jul 26, 2010 4:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[JMP]]></name></author>
<updated>2010-07-26T15:02:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3542#p3542</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3542#p3542"/>
<title type="html"><![CDATA[Instanciar clases en un vector - Python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=800&amp;p=3542#p3542"><![CDATA[
Pues tengo un clase y quiero crear un vector y guardar una clase en cada uno, lo he estado intentando pero no se como se puede hacer<br /><br />Para por ejemplo hacer esto<br /><br />a[2].posx = x<br /><br /><br />Nose si me he explicado bien,<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2295">JMP</a> — Lun Jul 26, 2010 3:02 pm</p><hr />
]]></content>
</entry>
</feed>