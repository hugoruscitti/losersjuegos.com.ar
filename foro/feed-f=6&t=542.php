<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=542" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-04-16T17:04:02+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=542</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-04-16T17:04:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2439#p2439</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2439#p2439"/>
<title type="html"><![CDATA[Duda, texto con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2439#p2439"><![CDATA[
Si lo haces con una imagen con todas la letras, tienes la ventaja de que dependes de una biblioteca menos (aunque SDL_TTF es bastante usada...) y puedes hacer las funciones de forma más personalizada (por ejemplo el efecto de que aparecen las letras poco a poco una detrás de otra). Pero claro, para hacer eso, tendrás que escribir más código.<br /><br />Si quieres tener una caja de texto abajo, de esas que salen, por ejemplo, en el Pokemon. Yo haría una clase que se encargase de hacer el efecto de escribir, calcular saltos de linea si la frase es larga, scroll... Para estas cosas sería mejor utilizar la grilla de letras. Si prefieres hacer algo más sencillo, quizás sería mejor utilizar las SDL_TTF.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Abr 16, 2009 5:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-04-16T04:00:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2435#p2435</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2435#p2435"/>
<title type="html"><![CDATA[Duda, texto con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2435#p2435"><![CDATA[
Yo te recomiendo con SDL_TTF aun que ya depende de ti. puesto que solo tu sabes lo que enverdad necesitas..<br />Yo en lo personal prefiero TFF puesto es mas simple a mi punto de vista<br />aun que tiene un pequeño inconveniente con los saltos de linea<br />pero si es como dices (un poco simple) con varias superficies podrias resolver eso...<br />suerte...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Abr 16, 2009 4:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2009-04-15T19:44:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2431#p2431</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2431#p2431"/>
<title type="html"><![CDATA[Duda, texto con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=542&amp;p=2431#p2431"><![CDATA[
Hola a todos<br /><br />Tengo una duda, a ver si me echáis una manita:<br /><br />Estoy empezando a hacer un pequeño jueguecito, con C++ y SDL, estilo a las aventuras gráficas de antes.<br /><br />El caso es que voy a tener que mostrar bastantes textos por pantalla, y mi duda es si me conviene hacerlo con SDL_ttf o mejor me creo una superficie con todas las letras y las voy mostrando con SDL_BlitSurface .<br /><br />Aunque por la simplicidad del juego, no creo que tenga problemas de rendimiento, pero ya que me pongo, me gustaría hacerlo de la mejor forma posible.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Mié Abr 15, 2009 7:44 pm</p><hr />
]]></content>
</entry>
</feed>