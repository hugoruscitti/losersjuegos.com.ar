<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=649" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-11-03T16:25:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=649</id>
<entry>
<author><name><![CDATA[Garolard]]></name></author>
<updated>2009-11-03T16:25:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3021#p3021</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3021#p3021"/>
<title type="html"><![CDATA[Función kill() matar navecita [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3021#p3021"><![CDATA[
Si ya decía yo que sería alguna tontería xd....<br /><br />Efectivamente como has dicho Juanxo, ya funciona perfecto. Mil gracias por compensar mi torpeza xd un saludos a todos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2155">Garolard</a> — Mar Nov 03, 2009 4:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-11-02T20:14:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3020#p3020</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3020#p3020"/>
<title type="html"><![CDATA[Función kill() matar navecita [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3020#p3020"><![CDATA[
Creo que el problema radica en el momento de la comparacion. Tu haces if nave.top == HEIGHT/2. Esto solo va a ser verdadero cuando sean exactamente iguales,  cosa muy improbable<br />Prueba a hacer if nave.top &lt;= HEIGHT/2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Nov 02, 2009 8:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Garolard]]></name></author>
<updated>2009-11-02T19:10:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3019#p3019</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3019#p3019"/>
<title type="html"><![CDATA[Función kill() matar navecita [Pygame]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=649&amp;p=3019#p3019"><![CDATA[
Hola d enuevo gente. Vengo con otra consulta que haceros. En el jueguito que intento hacer, al terminar de matar las navecitas enemigas me gustaría que la nave del jugador se moviese hasta arriba para pasar de nivel. Quiero que al tocar la parte de arriba de la pantalla de juego se elimine el sprite que uso para representar la navecita y he intentado usar la función kill() para matar el sprite pero no se porqué extraña razón no muere y me estoy imaginando que será una tontería supina pero aún así no consigo verlo. Aer si alguien me puede ayudar, el código es el siguiente:<br /><br />EDIT: No se que pasa que al querer pegar el texto se pega mal y unas partes sobre otras, lo dejo en pastebin: <!-- m --><a class="postlink" href="http://pastebin.com/mf9f0da7">http://pastebin.com/mf9f0da7</a><!-- m --><br /><br />He intentado usando kill() tanto en el update() del propio sprite como en el main() usando un if que comprueba si la parte superior de la nave llega a 0, pero ninguna de las dos cosas ha funcionado.<br />De nuevo gracias de antemano a quien se tome la molestia de echarle un vistazo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2155">Garolard</a> — Lun Nov 02, 2009 7:10 pm</p><hr />
]]></content>
</entry>
</feed>