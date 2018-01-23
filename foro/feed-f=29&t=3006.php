<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=29&amp;t=3006" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-03-05T21:18:06+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=29&amp;t=3006</id>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2013-03-05T21:18:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9169#p9169</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9169#p9169"/>
<title type="html"><![CDATA[Re: Organizar tu sitio web(Duda)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9169#p9169"><![CDATA[
mvc, si te refieres con eso a movelo-vista-controlador, no tiene que ver tanto con como organices tu código sino con el funcionamiento de las webs dinamicas, y por el ejemplo que pusistes parece más una web dinamica (digo por el index.htm), por lo que hay el mvc no tiene nada que ver.<br /><br />mvc es que por ejemplo, usando django para crear una web dinamica, los datos estan en la base de datos, la logica y funcionamiento en los script python y la representación en las plantillas. En este ejemplo, al usar django para poner el ejemplo, tiene su estructura para funcionar, ahi si tienes que almodarte o usar otro con el que estes mas comodo, pero los archivos staticos puedes organizarlos dentro del directorio de archivos staticos a tu gusto, y las plantillas igual.<br /><br />Si por ejemplo usas php directamente para tu web pues podrias por ejemplo hacer que en el directorio app esten los scripts php de las aplicaciones, como tu comentabas, y luego tener un directorio template con plantillas para esas app, y que cada app tenga unicamente codigo php, acceda a los datos de la base de datos y cargue la plantilla y devuelva la respuesta al cliente, y seguirias usando mvc ya que mantienes datos, presentacion y funcionamiento separados.<br /><br />De resto, como ya te comentaron, no es obligatorio seguir el mvc y en especial si ves que es desfavorable para algo en concreto que estes haciendo pues no lo uses y donde lo veas mas favorable usalo. Por ejemplo, en las empresas que he visto yo funcionar sus webs con django el mvc permitia que el programador se ocupara unicamente de eso, programar y tenian un diseñador que hacia las plantillas, ni el programador se rompia la cabeza con codigo python o programando o viendo como habia que tratar los datos, ni el programador se rompia la cabeza con el css, escoger colores, ver donde colocar los datos, o navegando entre codigo HTML.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Mar Mar 05, 2013 9:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-02-23T23:48:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9160#p9160</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9160#p9160"/>
<title type="html"><![CDATA[Re: Organizar tu sitio web(Duda)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9160#p9160"><![CDATA[
Cada quien utiliza lo que le funciona.<br /><br /><blockquote><div><cite>Kyrian escribió:</cite><br />no me gusta mucho el mvc, pues lo siento que me tengo que amoldar a el<br /></div></blockquote> <br /><br />Me remito a lo anterior. Si no hay necesidad de utilizar mvc o no es obligatorio, no lo utilices. Es más como una sugerencia de como diseñar el software, y tiene ventajas y desventajas como todos los patrones de diseño.<br /><br />Pero, utilízalo si es el único que sirve para resolver el problema...<br /><br />Espero que mi opinión te sea útil.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Feb 23, 2013 11:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2013-02-23T21:01:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9159#p9159</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9159#p9159"/>
<title type="html"><![CDATA[Organizar tu sitio web(Duda)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3006&amp;p=9159#p9159"><![CDATA[
Hola gente como estamos, ando un poco desorientado en cuetion a la organización de mis archivos, yo antes lo organizaba de esta manera<br /><br />MiProyecto<br />|<br />|----index.html<br />|----css  (Aqui colocaba todo mi css)<br />|----js   (las herramientas javascript que necesite cargar, como le jquery el melonjs, etc)<br />|----app (y pues las aplicaciones que este desarrollando)<br /><br />pero veo ahora que hay mvc ya sea python, ruby, perl, etc, nodejs que te organizan las carpetas, no me gusta mucho el mvc, pues lo siento que me tengo que amoldar a el(bueno quiero creer que estoy equivacado por no saber esto) pero mi duda es como es la organizacion de los archivos y carpetas, si haces un sitio web con nodejs, javascript, por que e visto que luego ustedes lo organizan con un archivo index.py o app.py y arriba sus carpetas como es eso?, espero puedan orientarme tantito, de antemano muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Sab Feb 23, 2013 9:01 pm</p><hr />
]]></content>
</entry>
</feed>