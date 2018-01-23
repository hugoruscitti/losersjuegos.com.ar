<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=326" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-05-18T02:56:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=326</id>
<entry>
<author><name><![CDATA[KANJI]]></name></author>
<updated>2008-05-18T02:56:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1407#p1407</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1407#p1407"/>
<title type="html"><![CDATA[Mover imagen en plano 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1407#p1407"><![CDATA[
La verdad no quisiera usar mas librerias aparte de SDL, ya que he logrado hacer el cubo en 3D con solo lineas y quizas la textura del mismo pero no tengo idea de como pasar la imagen. <br /><br />He tratado tomando cada pixel de la imagen aplicandole la formula de proyeccion pero aún asi cuando aumento la imágen esta se desvanece. De todas formas gracias por la respuesta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1846">KANJI</a> — Dom May 18, 2008 2:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-05-18T00:52:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1406#p1406</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1406#p1406"/>
<title type="html"><![CDATA[Mover imagen en plano 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1406#p1406"><![CDATA[
Para escenarios 2D, SDL se maneja de manera espectacular. Pero para 3D, SDL se queda corto. La libreria auxiliar SDL_glx permite ciertos trucos adicionales que la libreria estandar no tiene (como rotar imagenes). Con estas herramientas (en teoria) se podria hacer lo que dices (ese cubo que rota)<br /><br />Pero para cosas mas avanzadas (y posiblemente mas faciles de hacer) deberias usar otra libreria grafica como OpenGL y seguir usando SDL para las tareas de manejo de eventos y otras cosas.<br /><br />Ademas de OpenGL hay otras librerias graficas, puedes consultar en la internet.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Dom May 18, 2008 12:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[KANJI]]></name></author>
<updated>2008-05-16T22:29:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1402#p1402</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1402#p1402"/>
<title type="html"><![CDATA[Mover imagen en plano 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=326&amp;p=1402#p1402"><![CDATA[
<span style="color: darkblue">hola, si me pueden ayudar, lo que estoy tratando de hacer es cargar un bitmap para luego poder darle proyeccion o rotarlo en un espacio 3D, como si fuera una textura para un cubo. Uso SDL, gracias</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1846">KANJI</a> — Vie May 16, 2008 10:29 pm</p><hr />
]]></content>
</entry>
</feed>