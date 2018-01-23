<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=333" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-06T09:08:30+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=333</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-09-06T09:08:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1634#p1634</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1634#p1634"/>
<title type="html"><![CDATA[ver mis juegos en otros PCs]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1634#p1634"><![CDATA[
Si el problema esta en que junto al programa, deben ir otros archivos acompañandolo; no se que sistema operativo usaras, pero por eso de dll si no me equivico es windows; en windows para solucionar ese problema de instalar programas que requieren de librerias podrias usar un programa que cree instaladores, como &quot;create install free&quot; en el que puede crear uno de esos tipicos ejecutables que te muestran un texto que leer sobre el programa a instalar, el texto de la licencia que le pongas (o lo que quieras escribir) a aceptar y escoger el directorio de destino de la instalacion, y el programa se encarga de crear la carpeta de instalacion, meter en ella los archivos del programa (y cualquier otro archivo que deba ir con el) y las dll, puedes en vez de en la carpeta de instalacion del programa ponerlas en la de windows.<br /><br />Si no me equivoco ademas ese programa venia una opcion de que el instalador comprobase si habia VC y otra cosa y me parece que la instalaba tambien. Y creaba si se seleccionaba la opcion, un desinstalador.<br /><br />La opcion de crear un instalador es una buena idea para distribuir un juego compilado para windows, si es como he oido en diversos blogs y paginas que en windows la media de los usuarios tienen unos conocimientos de informatica bajos pues esta es una solucion para que por muy bajos que sean los conocimientos de informatica puedan instalarlo en unos pocos clicks y sin necesidad de que el usuario sepa nada de VC.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Sep 06, 2008 9:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-07-02T23:57:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1528#p1528</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1528#p1528"/>
<title type="html"><![CDATA[ver mis juegos en otros PCs]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1528#p1528"><![CDATA[
¿Qué versión del paquete redistribuíble estás usando?<br />¿Qué errores te muestra en las otras computadoras? ¿son los mismos en todas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Jul 02, 2008 11:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-06-17T16:33:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1497#p1497</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1497#p1497"/>
<title type="html"><![CDATA[ver mis juegos en otros PCs]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1497#p1497"><![CDATA[
Saludos, no tengo experiencia utilizando Visual C++ (VC) pero<br />luego de haber consultado con unos colegas me han informado<br />que los archivos ejecutables generados requieren de una <br />biblioteca adicional (vcredist_86).<br /><br />Evidentemente estás en lo correcto, para re-distribuir tu programa<br />necesitarás los archivos .dll de SDL y además las bibliotecas de<br />ejecución para Visual C.<br /><br />Tendrías que hacer lo siguiente, primero ejecuta tu programa<br />generado con VC en otro equipo y toma nota del mensaje de<br />error. Es muy importante que tomes nota de ello, si el programa<br />falla silenciosamente intenta buscar un archivo como stdout.txt<br />o stderr.txt dentro del directorio del programa, SDL<br />generalmente crea esos archivo por su cuenta.<br /><br />Otra solución sería no usar Visual C... ¿por que?, porque el entorno<br />de desarrollo debería hacer tu trabajo mas sencillo, es su objetivo.<br />Visual C claramente está haciendo mas complicado tu trabajo, y<br />por ello tal vez sea una buena idea dejar de usarlo y adoptar otra<br />herramienta de reemplazo:<br /><br />   - <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/instalar_devcpp/instalar_devcpp.php">http://www.losersjuegos.com.ar/referenc ... devcpp.php</a><!-- m --><br />   - <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/libros/libros.php">http://www.losersjuegos.com.ar/referenc ... libros.php</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Jun 17, 2008 4:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-06-05T15:56:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1457#p1457</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1457#p1457"/>
<title type="html"><![CDATA[ver mis juegos en otros PCs]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=333&amp;p=1457#p1457"><![CDATA[
hola a tod@s<br />estoy exasperado ya con un tema, y es que los juegos que desarrollo no se pueden ejecutar en otros ordenadores que no tengan el VC instalado y es muy frustrante. he probado a instalar en estos ordenadores el vcredist_86x y nada, porque me dijeron que el redistributable arreglaba eso... de que me vale hacer un juego si nadie que no tenga el VC puede jugarlo???<br /><br />ayuda urgente pls.<br />utilizo el VC 2008 express edition<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Jue Jun 05, 2008 3:56 pm</p><hr />
]]></content>
</entry>
</feed>