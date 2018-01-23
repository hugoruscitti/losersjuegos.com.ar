<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=1061" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-11T16:37:34+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=1061</id>
<entry>
<author><name><![CDATA[angelus_ira]]></name></author>
<updated>2011-04-11T16:37:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5400#p5400</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5400#p5400"/>
<title type="html"><![CDATA[Re: Base de Datos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5400#p5400"><![CDATA[
Primero: Sería bueno que describas que base de datos usas, sqlite, postgre, mysql... <br />Es necesario que tengas los modulos necesarios para esa base de datos. Sqlite es nativo en python, para mysql y posgre hay paquetes apartes:<br />Mysql: <a href="http://pypi.python.org/pypi/MySQL-python/" class="postlink">http://pypi.python.org/pypi/MySQL-python/</a> , si necesitas el paquete para python 3 se puede compilar, hay un post en el foro de sourceforge.<br />Postgre:<a href="http://initd.org/psycopg/" class="postlink">http://initd.org/psycopg/</a><br />los ultimos 2 cumplen con la api 2.0 de base de datos <a href="http://www.python.org/dev/peps/pep-0249/" class="postlink">http://www.python.org/dev/peps/pep-0249/</a><br /><br />Si queres hacer un programa que utilice un ORM para que sirva para diferentes bases de datos:<br /><a href="http://www.sqlalchemy.org/" class="postlink">http://www.sqlalchemy.org/</a><br />La ventaja de trabajar con un ORM es que tu sistema puede trabajar tanto con Mysql, Postgre o sqlite mientras que las bases de datos y las clases esten correctamente diseñadas. La desventaja (no se la influencia en python, esto es según mi experiencia en php) es que usualmente perdemos algo de perfomance.<br />SQLalchemy es mas que un ORM, pero eso se explica en la web  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> .<br /><br />Si no estoy errado, con PyQT también podes conectarte a varias bases de datos.<br />Espero que sirva<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2230">angelus_ira</a> — Lun Abr 11, 2011 4:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-02-24T17:04:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5133#p5133</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5133#p5133"/>
<title type="html"><![CDATA[Re: Base de Datos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5133#p5133"><![CDATA[
podes revisar acá en <a href="http://pypi.python.org/pypi?%3Aaction=search&amp;term=data+base&amp;submit=search" class="postlink">pypi</a>, para mi, cualquier cosa que venga de Canonical es un peligro para la salud <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_neutral.gif" alt=":-|" title="Neutral" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Feb 24, 2011 5:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-02-24T00:30:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5129#p5129</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5129#p5129"/>
<title type="html"><![CDATA[Re: Base de Datos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5129#p5129"><![CDATA[
storm es muy bueno... <br /><br /><!-- m --><a class="postlink" href="https://storm.canonical.com/">https://storm.canonical.com/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Feb 24, 2011 12:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-02-23T19:30:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5128#p5128</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5128#p5128"/>
<title type="html"><![CDATA[Base de Datos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1061&amp;p=5128#p5128"><![CDATA[
Holaaaa de nuevo!!!<br /><br />esta vez les escribo es para saber si conocen algun manejador de base de datos (preferiblemente orientado a objetos) con el que pueda trabajar en python... <br /><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mié Feb 23, 2011 7:30 pm</p><hr />
]]></content>
</entry>
</feed>