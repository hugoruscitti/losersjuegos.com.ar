<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=3027" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-07-29T15:41:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=3027</id>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2013-07-29T15:41:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3027&amp;p=9264#p9264</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3027&amp;p=9264#p9264"/>
<title type="html"><![CDATA[convertidor de archivos csv a mapa binario]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3027&amp;p=9264#p9264"><![CDATA[
Este convertidor lo que hace es convertir (valga la redundancia) archivos csv separados por comas, espacios u otro caracter, a un formato binario igual al .map del mappy.<br />Es muy util cuando guardamos un tilemap hecho con tiled, y queremos convertirlo a un .map. <br />Para que el tiled guarde el mapa como un csv, tenemos que ir al menú preferencias-&gt;almacenar la capa de patrones como-&gt;csv<br /><br />Este es el readme, está incluido en la cabecera del .c (funciona en linux):<br /><br />        Convertidor de archivos csv separados por comas o caracteres, o espacios a formato binario<br /><br />Para convertir tilemaps hechos con csv, a el formato binario del mappy <br /><br />para compilar desde linea de comando, tipear:<br />gcc -o csvconv csvconv.c<br /><br />usage:csvconv [WHITE|COMMA] nombre_archivo_a_convertir nro_columnas nro_filas nombre_archivo_nuevo<br /><br />ejemplo, con el archivo adjunto &quot;mapa.csv&quot;, de 20 columnas y 15 filas:<br />http://losersjuegos.com.ar/foro/csvconv COMMA mapa.csv 20 15 mapa.map<br /><br /><br />autor: Jorge Luis Cabral<br />mail: <!-- e --><a href="mailto:jorge@arcadenea.com.ar">jorge@arcadenea.com.ar</a><!-- e --><br /><br />licencia:zlib<br /><br /><a href="http://www.4shared.com/zip/GQeoKsYW/csvconv.html" class="postlink">http://www.4shared.com/zip/GQeoKsYW/csvconv.html</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Lun Jul 29, 2013 3:41 pm</p><hr />
]]></content>
</entry>
</feed>