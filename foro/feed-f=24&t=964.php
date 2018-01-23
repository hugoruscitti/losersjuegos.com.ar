<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=964" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-17T04:58:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=964</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-17T04:58:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4611#p4611</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4611#p4611"/>
<title type="html"><![CDATA[Re: [CONSULTA] Tuto sobre manejo de Grilla de imagenes en pi]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4611#p4611"><![CDATA[
Buenas lukasgaleano !, recien modifiqué el manual de pilas<br />donde se habla de animaciones y grillas para completarlo y explicarlo<br />mejor:<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/raw/d0ea45b7c384/doc/Pilasengine.pdf">https://bitbucket.org/hugoruscitti/pila ... engine.pdf</a><!-- m --><br /><br />El capítulo que modifiqué es el que llama &quot;manejo de imágenes&quot;, es el capítulo<br />6 (página 19 creo...)<br /><br />Avisame que te parece y si los ejemplos te resultan útiles.<br /><br />Ah, otra posibilidad que tenés con pilas es usar la sentencia:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>pilas.iniciar()<br />pilas.ver(pilas.actores.Nave)<br /></code></dd></dl><br /><br />y ver en pantalla todo el código que hace funcionar a la nave, de ahí<br />podés investigar cómo funcionan las animaciones.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Dic 17, 2010 4:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2010-12-16T19:24:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4608#p4608</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4608#p4608"/>
<title type="html"><![CDATA[Re: [CONSULTA] Tuto sobre manejo de Grilla de imagenes en pi]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4608#p4608"><![CDATA[
Hola Hugo:<br /><br />De especifico te preguntraria como crear una clase que contega una grilla de imagenes X,  generar movimiento de la imagen que sea constante, es decir un ejemplo: (parpadeo de una personaje o la animación de los motores de la nave actor en pilas) y también como poder asignarle atributos a las animaciones para que respondan con las señales del teclado o el mouse (seria bueno como ejemplo el personaje Pingu). Algo similar al videotutorial donde mostras la creación de una personaje atraves de una imagen cualquiera, estaría bueno otro asi pero con una grilla.<br /><br />Mis personajes que he creado son simples, utilizan grillas de 1 filas x n columnas,  no se trabajar todavía con  grillas con mas de una fila.<br /><br />GRACIAS!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Jue Dic 16, 2010 7:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-16T14:06:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4604#p4604</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4604#p4604"/>
<title type="html"><![CDATA[Re: [CONSULTA] Tuto sobre manejo de Grilla de imagenes en pi]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4604#p4604"><![CDATA[
<blockquote><div><cite>lukasgaleano escribió:</cite><br />hola que tal a todos!!!!<br /><br />felicitaciones por este magnifico proyecto (pilas-engine) creo que es un trabajo excelente muchachos. Les cuento que no hace mas de un mes, empecé a utilizar pilas, para poder hacer algunos proyectitos de juegos educativos, que con gusto les pasare toda la data cuando lo termine, por ahora están quedando muy bien, el área especifica es matemáticas. <br />Les pediría un favor,  si podrían subir algo mas de información sobre trabajo con animaciones en pilas, es decir (Grilla de imágenes y como generar movimiento en una imagen); el motivo es simple, si bien yo no soy ningún ducho programando, la documentación esta muy bien hecha y es de mucha ayuda, me costo un poco manejar ese tema en especial, por que se me hace que falta algo mas de contenido en cuanto a manejo de grilla, animaciones, como crearlas y darles propiedades. <br /> Estaria bueno que me pudieran ayudar en ese temita, ustedes que saben mas del tema. yo desde mi humilde lugar prometo colaborar y apoyar a full este proyecto.<br /><br />muchas gracias!!!! <br />saludos a todos desde Formosa capital (Argentina)<br /></div></blockquote><br /><br />Sí, es cierto que no tenemos mucha data de las animaciones con pilas, esta noche o<br />mañana voy a escribir algunos ejemplos mas en la documentación y te aviso.<br /><br />¿te gustaría ver algún ejemplo en particular en la documentación?, ¿que clase de animaciones<br />estás haciendo?, ¿son muchos cuadros o algo así?. Comentame un poco así uso esas<br />ideas para mejorar la documentación.<br /><br /><br /><blockquote><div><cite>lukasgaleano escribió:</cite><br />pd: en un par de horas subiré la info sobre este proyecto a este blog <!-- m --><a class="postlink" href="http://www.forsol.org.ar">http://www.forsol.org.ar</a><!-- m --> ,que es donde estoy colaborando como miembro.<br /></div></blockquote><br /><br />Buenisimo, avisanos así te damos una mano también.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Dic 16, 2010 2:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2010-12-16T05:12:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4603#p4603</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4603#p4603"/>
<title type="html"><![CDATA[[CONSULTA] Tuto sobre manejo de Grilla de imagenes en pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=964&amp;p=4603#p4603"><![CDATA[
hola que tal a todos!!!!<br /><br />felicitaciones por este magnifico proyecto (pilas-engine) creo que es un trabajo excelente muchachos. Les cuento que no hace mas de un mes, empecé a utilizar pilas, para poder hacer algunos proyectitos de juegos educativos, que con gusto les pasare toda la data cuando lo termine, por ahora están quedando muy bien, el área especifica es matemáticas. <br />Les pediría un favor,  si podrían subir algo mas de información sobre trabajo con animaciones en pilas, es decir (Grilla de imágenes y como generar movimiento en una imagen); el motivo es simple, si bien yo no soy ningún ducho programando, la documentación esta muy bien hecha y es de mucha ayuda, me costo un poco manejar ese tema en especial, por que se me hace que falta algo mas de contenido en cuanto a manejo de grilla, animaciones, como crearlas y darles propiedades. <br /> Estaria bueno que me pudieran ayudar en ese temita, ustedes que saben mas del tema. yo desde mi humilde lugar prometo colaborar y apoyar a full este proyecto.<br /><br />muchas gracias!!!! <br />saludos a todos desde Formosa capital (Argentina)<br /><br />pd: en un par de horas subiré la info sobre este proyecto a este blog <!-- m --><a class="postlink" href="http://www.forsol.org.ar">http://www.forsol.org.ar</a><!-- m --> ,que es donde estoy colaborando como miembro.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Jue Dic 16, 2010 5:12 am</p><hr />
]]></content>
</entry>
</feed>