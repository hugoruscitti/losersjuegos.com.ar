<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1156" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-24T23:58:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1156</id>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2011-05-24T23:58:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1156&amp;p=5570#p5570</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1156&amp;p=5570#p5570"/>
<title type="html"><![CDATA[Re: opengl + sdl y rotaciones en perpectiva]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1156&amp;p=5570#p5570"><![CDATA[
solucioné el problema momentaneamente modificando el znear y el zfar<br />glOrtho(0, (GLdouble)SCREEN_WIDTH, (GLdouble)SCREEN_HEIGHT, 0, -1000, 1000);<br /><br />le puse unos valores mas altos, asi me permite hacer rotaciones en x e y.<br /><br />ahora el tema es usar las coordenadas normales de pantalla (estilo sdl) con perspectiva. Hay algunas soluciones que estuve viendo, como calcular una matriz de proyeccion nueva. Tambien tengo que ver si se puede usar gluunproject para este caso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Mar May 24, 2011 11:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2011-05-18T15:23:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1156&amp;p=5558#p5558</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1156&amp;p=5558#p5558"/>
<title type="html"><![CDATA[opengl + sdl y rotaciones en perpectiva]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1156&amp;p=5558#p5558"><![CDATA[
Estoy boludeando un poco con sdl y opengl, empecé utilizando glOrtho, pero este me limita las rotaciones en perspectiva, por lo cual solo en z podemos rotar realmente. <br />Queria saber si es posible crear una textura en glOrtho y despues volver al modo normal o setear gluPerspective, y ahi rotar en x o en y.<br />De que manera podría trabajar en coordenadas ortogonales, pero a la vez tener rotaciones en perspectiva?<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Mié May 18, 2011 3:23 pm</p><hr />
]]></content>
</entry>
</feed>