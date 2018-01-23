<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1050" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-14T23:51:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1050</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-02-14T23:51:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5098#p5098</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5098#p5098"/>
<title type="html"><![CDATA[Re: Curiosidad Pygame-Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5098#p5098"><![CDATA[
esto esta genial, vere si puedo hacer una copia del documento y ponerlo en el grupo de losersjuegos en gNewBook <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />gracias por el dato!! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Feb 14, 2011 11:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alzacon]]></name></author>
<updated>2011-02-13T13:40:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5091#p5091</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5091#p5091"/>
<title type="html"><![CDATA[Re: Curiosidad Pygame-Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5091#p5091"><![CDATA[
Muchas gracias por la aclaración.<br /><br />Cuando vi que se usaba ese módulo fui a la documentación de python, pero el inglés no es mi fuerte y menos si esta repleto de términos técnicos, lo entidía muy por encima.<br /><br />Por suerte encontre un sitio donde comentan su funcionamiento con ejemplos, que es lo que a mi me falta muchas veces para terminar de enterarme, dejo el enlace por si a alguien le interesa <!-- m --><a class="postlink" href="http://chuwiki.chuidiang.org/index.php?title=Hilos_en_python#M.C3.B3dulo_threading">http://chuwiki.chuidiang.org/index.php? ... _threading</a><!-- m --><br /><br />También encontre un artículo de la revista PET hablando de un módulo 'similar' pero mejor según el autor del artículo--&gt; <!-- m --><a class="postlink" href="http://revista.python.org.ar/1/html/processing.html">http://revista.python.org.ar/1/html/processing.html</a><!-- m --><br /><br />Saludos y gracias hugo por la aclaración <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2379">Alzacon</a> — Dom Feb 13, 2011 1:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-02-12T20:11:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5090#p5090</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5090#p5090"/>
<title type="html"><![CDATA[Re: Curiosidad Pygame-Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5090#p5090"><![CDATA[
Si, efectivamente threading es el módulo de python que<br />le permite a pilas tener el interprete interactivo funcionando<br />mientras la ventana muestra a los actores y corre el bucle del<br />juego.<br /><br />El concepto que implementa este modulo es el de hilos. Si quieres<br />investigar hay un monton de informacion en la web.<br /><br />Igualmente, threading solo se usa cuando estas en idle u otro<br />interprete pero en modo iteractivo. Si escribes tu programa<br />en un archivo .py no se usan hilos...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Feb 12, 2011 8:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alzacon]]></name></author>
<updated>2011-02-12T17:10:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5088#p5088</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5088#p5088"/>
<title type="html"><![CDATA[Curiosidad Pygame-Pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1050&amp;p=5088#p5088"><![CDATA[
No estoy seguro si este es el lugar adecuado, espero que si.<br /><br />Aún sigo investigando sobre Pygame y Pilas para aprender. Y he visto en Pilas cuando se inicia tenemos la ventana y podemos continuar escribiendo en la IDLE, mientras que si se intenta hacer con Pygame con el bucle 'while...', cuando tenemos la ventana no podemos continuar escribiendo. He visto que importa el modulo threading y no sé si tiene algo que ver o no para poder seguir usando la IDLE.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2379">Alzacon</a> — Sab Feb 12, 2011 5:10 pm</p><hr />
]]></content>
</entry>
</feed>