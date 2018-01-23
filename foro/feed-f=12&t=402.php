<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=402" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-25T01:24:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=402</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-01-25T01:24:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=402&amp;p=1955#p1955</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=402&amp;p=1955#p1955"/>
<title type="html"><![CDATA[juego educativo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=402&amp;p=1955#p1955"><![CDATA[
Empezando por el tema de la música, espero que tengas un amigo músico o que se te de bien la musica (más que nada para que te evites cualquier problemas con los derechos de autor). La interfaz con menu no te deberia dar problemas si sabes como mostrar los graficos por pantalla (inclullendo escribir en la pantalla las preguntas y respuestas junto a los graficos) y si sabes manejar los eventos del raton en python (sobre los eventos de raton me parece que hay un tema en el foro sobre un tres en raya que han escrito algo de codigo para los eventos o algo asi; tambien creo que hay algun ejemplo en la web pero ahora mismo no lo se seguro.<br />En cuanto a las preguntas y respuestas necesitaras una estructura para guardar la pregunta, la respuesta correcta y las respuestas incorrectas y que puedas hacer una lista dinamica con dicha estructura, tambien seria adecuado añadir un flag con el que marcar una pregunta que ya se hubiese usado para no repetirla, como supongo que las preguntas las quieres hacer de forma aleatoria necesitaras una funcion que obtenga un numero aleatorio bastante grande (pues una lista dinamica podria hacerse muy grande (sobretodo si cada elemento pesa poco) y el programa debera estar preparado para ello, y con dicho numero aleatorio calculado deberas recorer en la lista tantos elementos que no esten ya usados como indique el numero. Cuando el programa no se este ejecutando las preguntas deberan estar en un archivo, dependiendo de el tiempo que le quieras dedicar a la funcion para cargar las preguntas, la habilidad que tengas programando y el futuro que le veas al programa (futuros usos y cosas asi) podria recomendarte guardar las preguntas en un documento XML (de forma que seria posible usarlo en mas aplicaciones aparte de el el juego interactivo o incluso añadirle otras propiedades y caracteristicas en el futuro con mayor facilidad (esta opcion seria la mas complicada de programar al principio, yo la he tomado como opcion en algunos programas de forma que ademas de usar el archivo para el programa con una XLS puedo mostrar los datos del archivo en un navegador como firefox como si se tratase de una pagina xhtml); la otra opcion, mas sencilla de programar y algo mas compleja de modificar si se quieren añadir demasiadas funciones y caracteristicas nuevas en el futuro al formato del archivo, es un csv, es una simple tabla con el formato:<br /><br />pregunta ; respuestaok ; respuestamal ; respuestamal ; respuestamal<br />pregunta2 ; respuestaok ; respuestam ; respuestam ; respuestam<br /><br />Esta son los dos formatos que te propongo, ahora tu deberas mirar que formato es el mas adecuado para el juego.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Ene 25, 2009 1:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mauruz]]></name></author>
<updated>2008-11-13T17:36:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=402&amp;p=1738#p1738</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=402&amp;p=1738#p1738"/>
<title type="html"><![CDATA[juego educativo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=402&amp;p=1738#p1738"><![CDATA[
Holas!<br />necesito hacer un juego para alumnos con actividades<br />&gt; educativas. El juego se basa en el programa &quot;quién quiere ser<br />&gt; millonario&quot;.  Usaré python y pygame.<br /><br /> Mis objetivos son:<br />&gt;                * una base de datos con preguntas y 4 respuestas solamente una es<br />&gt; correcta.<br />&gt;                * una interfaz con menu.<br />&gt;                * musica.<br />&gt;                * una escala de puntuacion.<br />&gt;                * ayuda con diccionario,manual y comodin.<br />&gt;                * niveles (1 2 3).(opcional)<br />&gt;                * multijugador.(opcional)<br />&gt;<img src="http://peoresnada.com/img/t_millonario.jpg" alt="Imagen" /><br />&gt; Pues cualquier orientacion, ayuda o manual me vendria muy bien. Muchas gracias<br />&gt; de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2019">mauruz</a> — Jue Nov 13, 2008 5:36 pm</p><hr />
]]></content>
</entry>
</feed>