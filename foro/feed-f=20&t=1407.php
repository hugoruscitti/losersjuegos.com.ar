<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=20&amp;t=1407" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-02-15T12:03:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=20&amp;t=1407</id>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2012-02-15T12:03:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6529#p6529</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6529#p6529"/>
<title type="html"><![CDATA[Re: preguntas sobre crystal space]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6529#p6529"><![CDATA[
gracias hugoruscitti... ya tenia el -dev me había percatado, pero no encontraba con que referenciarme  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> ... je bastante claro!, ahí voy a ver si puedo compilar algún ejemplo... seguro voy a poder... de verdad gracias  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Mié Feb 15, 2012 12:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-02-14T19:14:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6527#p6527</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6527#p6527"/>
<title type="html"><![CDATA[Re: preguntas sobre crystal space]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6527#p6527"><![CDATA[
Hola!,<br /><br />Sí, por lo que ví se puede compilar desde gcc o c++. Pero me equivoqué en mi anterior mensaje, el<br />paquete que se tiene que instalar es &quot;libcrystalspace-dev&quot;.<br /><br />Por ejemplo con el siguiente comando:<br /><br /><pre class="prettyprint">apt-get install libcrystalspace-dev</pre><br /><br />Una vez instalado este paquete, vas a contar con un nuevo comando llamado: cs-config (muy similar a sdl-config)<br /><br />Básicamente, el comando &quot;cs-config --cflags&quot; te retorna todos los 'flags' para que puedas compilar programas con<br />crystalspace. Y el comando &quot;cs-config --libs&quot; te da los flags para crear el archivo binario de tu programa.<br /><br />Por ejemplo, si tengo un programa llamado &quot;hola.cc&quot; podría compilarlo con el siguiente comando:<br /><br /><pre class="prettyprint">g++ hola.cc `cs-config --cflags --libs`</pre><br /><br />Por supuesto que si querés poner los flags  a mano también podés (pero es mas sencillo usando el comando de antes):<br /><br /><pre class="prettyprint">g++ hola.cc  -L/usr/lib -lcrystalspace_opengl-1.4 -lcrystalspace-1.4  -lz -lpthread -lGL -lXext -lX11 -lm  -lc -lm -ldl -lnsl -L/usr/local/lib</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Feb 14, 2012 7:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2012-02-14T18:48:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6526#p6526</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6526#p6526"/>
<title type="html"><![CDATA[Re: preguntas sobre crystal space]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6526#p6526"><![CDATA[
hola hugoruscitti, perdon por no ser tan claro, me refiero a compilar un juego echo con librerias de crystal space con el compilador GCC o G++ (las librerias y el motor para correr juegos d crystal space las tengo instaladas y andando aparentemente)...<br />no se que libreria &quot;extra&quot; hay que marcar con gcc al momento de compilar:<br /><br />por ejemplo asi como con SDL es -lSDL y en crystal space seria... ¿?<br />soy masomenos claro?...<br /><br />recuendo que estoy interesado en usar esta libreria con C o C++ compilador libre (no se si se puede con otro lenguaje pero estoy interesado en esos ya que son los que se)<br /><br />---------------------------<br />en cuanto a la otra pregunta (la pongo asi para quien quiera leerla):<br /><blockquote class="uncited"><div><br /><blockquote class="uncited"><div>consume mas cantidad de ciclos que blender, masomenos igual, o menos?...<br /></div></blockquote><br />me auto respondo con la info que encontre:<br />aparentemente el motor se dice que es un poco mas &quot;liviano&quot; que el de blender dado que no contiene tantas funciones y aquellas que tiene (como coliciones, sombras, reflejos, etc)  podemos desabilitarlas facilmente con un XML lo cual disminuye un poco el consumo de %CPU, el motor esta bien optimizado y bien orientado a juego con lo cual tambien marca un coste menos al momento de correr algun software.<br /><br />En cuanto al tiempo de ejecución, al poderse compilar, es mas rapido a diferencia que blender, dado que blender funciona con un lenguajes de librerias interpretadas (Python) y disminuye un poco su rendimiento...pero tampoco es que halla tanta diferencia...<br /><br />solo para el que quiere saber crystal space aparentemente si es &quot;un poco mas liviano&quot; que blender...</div></blockquote><br /><br />de ante mano, gracias y SALUDOS...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Mar Feb 14, 2012 6:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-02-14T15:33:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6525#p6525</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6525#p6525"/>
<title type="html"><![CDATA[Re: preguntas sobre crystal space]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6525#p6525"><![CDATA[
Hola quiro, me quedó una duda de tu consulta: ¿Te referís a compilar toda la biblioteca o<br />un programa &quot;que use&quot; crystal space?.<br /><br />Por lo que ví, crystal space se puede instalar en ubuntu directamente escribiendo &quot;apt-get install crystalspace&quot;<br />si a eso te referías.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Feb 14, 2012 3:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[quiro9]]></name></author>
<updated>2012-02-14T06:45:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6523#p6523</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6523#p6523"/>
<title type="html"><![CDATA[preguntas sobre crystal space]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1407&amp;p=6523#p6523"><![CDATA[
Hola gente... ando &quot;enrroscado&quot; (termino argentino de dando vueltas, muy metido, frustrado, etc...) de tratar de averiguar un poco mas de Crystal Space...<br /><br />Su web tiene documentación de &quot;calidad baja&quot; (sin ofender a nadie porfavor) y escasa...<br /><br /><br />quiero saber si cristal space soporta GCC, supongo que si soporta el lenguaje por un source que me baje... pero es vc (visual C++ ASCO!!!!!!, huele a microsoft, denuevo sin ofender a nadie excepto a microsoft)<br />por ende como se compila algun proyecto (si es que encuentro o pruevo hacer con GCC o G++)... <br />alguien ha intentado compilar con GCC CPP o G++ y sabria explicar masomenos?... <br />aca dejo un link que encontre con unos ejemplos poco utiles segun el autor pero para aprender:<br /><br /><a href="http://sabia.tic.udc.es/gc/Contenidos%20adicionales/trabajos/3D/Crystal%20Space%203D/estructura.html" class="postlink">http://sabia.tic.udc.es/gc/Contenidos%20adicionales/trabajos/3D/Crystal%20Space%203D/estructura.html</a><br /><br />la otra pregunta es si el motor en verdad es mas liviano de MB (no en peso sino en consumo de recurso hablando principalmente de %CPU) que blender... bien preguntado: consume mas cantidad de ciclos que blender, masomenos igual, o menos?... <br /><br />espero que alguien pueda dar una referencia porque la verdad me canse de buscar sin encontrar nada... si llegara encontrar algo lo pondre abajo... saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2541">quiro9</a> — Mar Feb 14, 2012 6:45 am</p><hr />
]]></content>
</entry>
</feed>