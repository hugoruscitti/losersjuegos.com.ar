<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1572" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-11-08T14:04:45+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1572</id>
<entry>
<author><name><![CDATA[kenedy332]]></name></author>
<updated>2012-11-08T14:04:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7192#p7192</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7192#p7192"/>
<title type="html"><![CDATA[Re: Ayuda con Python. Programa Tres en raya.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7192#p7192"><![CDATA[
Muchas gracias kaiser!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2681">kenedy332</a> — Jue Nov 08, 2012 2:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2012-11-08T13:31:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7191#p7191</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7191#p7191"/>
<title type="html"><![CDATA[Re: Ayuda con Python. Programa Tres en raya.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7191#p7191"><![CDATA[
<pre class="prettyprint">def creartablero&#40;filas, columnas&#41;:<br />    tablero = []<br />    for fila in range&#40;filas&#41;:<br />        tablero.append&#40;[0]*columnas&#41;<br />    return tablero<br /><br />def escribetablero&#40;tablero&#41;:<br />    for fila in range&#40;len&#40;tablero&#41;&#41;:<br />        for casilla in range&#40;len&#40;tablero[fila]&#41;&#41;:<br />            print&#40;tablero[fila][casilla]&#41;,<br />        print&#40;&quot;&quot;&#41;</pre><br /><br />Bienvenido y ánimo! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue Nov 08, 2012 1:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kenedy332]]></name></author>
<updated>2012-11-08T12:41:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7190#p7190</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7190#p7190"/>
<title type="html"><![CDATA[Ayuda con Python. Programa Tres en raya.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1572&amp;p=7190#p7190"><![CDATA[
Hola a todos.<br /><br />Estoy iniciandome en el lenguaje python, y quisiera crear el juego tres en raya en python. Estoy intentando hacer una funcion que dando como parametro un tablero(FxC) me lo escriba en el formato correcto, pero no se como crearlo ya que no tengo muchos conocimientos... ¿Me podrian ayudar? Les envio el codigo de lo que llevo del programa.<br /><br />Gracias para las personas que quieran colaborar.<br /><br />Codigo:<br /><pre class="prettyprint">def creartablero&#40;f,c&#41;:<br />    &quot;&quot;&quot;<br />    Retorna la matriz representada en forma de tablero, en una llista de filas y columnas, de dimensiones fxc con todas las posiciones 0.<br />    &gt;&gt;&gt; creartablero&#40;3,3&#41;:<br />    [[0,0,0],[0,0,0],[0,0,0]]<br />    &gt;&gt;&gt; creartablero&#40;0,0&#41;:<br />    []<br />    &quot;&quot;&quot;<br />    resultado = []<br />    for i in range&#40;f&#41;:<br />        resultado = resultado + [[0]*c]<br />    return resultado<br />def escribetablero&#40;t&#41;:<br />    &quot;&quot;&quot;<br />    Muestra el tablero en un formato adecuado.<br />    &gt;&gt;&gt; escribetablero&#40;[[0, 0, 0, 0, 0], [0, 0, 0, 0, 0], [0, 0, 0, 0, 0],[0, 0, 0, 0, 0], [0, 0, 0, 0, 0]]&#41;<br />    El tablero del juego<br />    0 1 2 3 4<br />    ----------------------------------------<br />    0 --&gt; 0 0 0 0 0<br />    1 --&gt; 0 0 0 0 0<br />    2 --&gt; 0 0 0 0 0<br />    3 --&gt; 0 0 0 0 0<br />    4 --&gt; 0 0 0 0 0<br />    &quot;&quot;&quot;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2681">kenedy332</a> — Jue Nov 08, 2012 12:41 pm</p><hr />
]]></content>
</entry>
</feed>