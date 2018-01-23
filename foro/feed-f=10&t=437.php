<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=437" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-19T19:10:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=437</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-01-19T19:10:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1925#p1925</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1925#p1925"/>
<title type="html"><![CDATA[Calcula la letra de un DNI]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1925#p1925"><![CDATA[
Aun estoy en proceso de conseguir el libro y de mirar si efectivamente merece la pena. Pero he encontrado otra cosa:<br /><!-- m --><a class="postlink" href="http://jpf.sdf1.org/dni/">http://jpf.sdf1.org/dni/</a><!-- m --><br />De nuevo es sobre el DNI así que lo siento por nuestros compañeros del otro continente. Sin embargo, creo que se puede aprender del método para descubrirlo seas de donde seas (si no tienes conocimiento más avanzados en este tema, claro).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Ene 19, 2009 7:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-01-11T00:38:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1865#p1865</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1865#p1865"/>
<title type="html"><![CDATA[Calcula la letra de un DNI]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1865#p1865"><![CDATA[
esta bien el programilla, lo unico que seriia mas util echo como funcion que devuelva 0 o 1 dependiendo de si un numero de dni y una letra se corresponden, asi podria usarse en cualquier programa que necesitase verificar numeros de DNI (no se, ..., algun programa de facturacion o de algo similar).<br /><br />de python se muy poco, pero os dejo el codigo de la funcion en C:<br /><dl class="codebox"><dt>Code: </dt><dd><code>int verificar_DNI&#40;unsigned int dni, char dc&#41;&#123;<br />   register int r=0;<br />   char lmi_dni&#91;24&#93;=&quot;TRWAGMYFPDXBNJZSQVHLCKE\0&quot;;<br />   char lma_dni&#91;24&#93;=&quot;trwagmyfpdxbnjzsqvhlcke\0&quot;;<br />   if&#40;lmi_dni&#91;&#40;dni % 23&#41;&#93; != dc &amp;&amp; lma_dni&#91;&#40;dni % 23&#41;&#93; != dc&#41;&#123;<br />      r= 1;<br />   &#125;<br />   return r;<br />&#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Ene 11, 2009 12:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-01-10T15:19:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1860#p1860</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1860#p1860"/>
<title type="html"><![CDATA[input]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1860#p1860"><![CDATA[
Si, en este caso sería lo mismo, pero input solo se usa para testear programas, porque cuando metes los datos tienes que seguir las reglas de Python, en cambio raw_input le da más libertad al usuario, porque no le vas a pedir que aprenda Python para usar tu programa.<br />¿Cómo se titula el libro ese?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Sab Ene 10, 2009 3:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-01-10T14:07:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1859#p1859</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1859#p1859"/>
<title type="html"><![CDATA[Calcula la letra de un DNI]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1859#p1859"><![CDATA[
Jaja sí, ya me lo conocía. Me han comentado de un libro que salen cosas de estas como el número para certificar el código de barras. Cuando termine los exámenes (el 15 de enero) intento conseguirlo.<br /><br />Saludos.<br /><br />PD: llevo tiempo sin usar Python. Pero si no recuerdo mal:<br /><dl class="codebox"><dt>Code: </dt><dd><code>dni = int&#40;raw_input&#40;'Dame el numero de tu DNI:'&#41;&#41;</code></dd></dl>equivale a<dl class="codebox"><dt>Code: </dt><dd><code>dni = input&#40;'Dame el numero de tu DNI:'&#41;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Ene 10, 2009 2:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-01-10T11:50:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1858#p1858</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1858#p1858"/>
<title type="html"><![CDATA[Calcula la letra de un DNI]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=437&amp;p=1858#p1858"><![CDATA[
Este artículo, va dirigido a habitantes de Españ, porque es un programa que te dice la letra de tu DNI. Como es un programa que es una parida, lo pongo en Off Topic. El programa lo he hecho en Python. Les paso el código. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br /><dl class="codebox"><dt>Code: </dt><dd><code>letras = 'TRWAGMYFPDXBNJZSQVHLCKE'<br /><br />dni = int&#40;raw_input&#40;'Dame el numero de tu DNI:'&#41;&#41;<br />resto = dni % 23<br /><br />print 'La letra de tu DNI es: ' , &#40;letras&#91;resto&#93;&#41;<br />raw_input&#40;'Pusla enter para salir.'&#41;<br /></code></dd></dl><br />¡Qué lo disfruten, ja, ja!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Sab Ene 10, 2009 11:50 am</p><hr />
]]></content>
</entry>
</feed>