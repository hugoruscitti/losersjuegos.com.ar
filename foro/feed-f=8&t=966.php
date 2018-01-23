<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=966" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-18T18:01:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=966</id>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-18T18:01:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4619#p4619</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4619#p4619"/>
<title type="html"><![CDATA[Re: AYUDA CON  EJERCICIOS DE PHYTON!!AÑO BISIESTO]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4619#p4619"><![CDATA[
O_o<br /><br />Espera un momento que voy a meterme una sobredosis de pastillas a ver si alcanzo a entender que clase de desajuste neuronal te ha llevado a escribir ese código...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Sab Dic 18, 2010 6:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[alfredo23]]></name></author>
<updated>2010-12-18T17:15:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4618#p4618</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4618#p4618"/>
<title type="html"><![CDATA[Re: AYUDA CON  EJERCICIOS DE PHYTON!!AÑO BISIESTO]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4618#p4618"><![CDATA[
esta funcion podria estar bien los resultados me cuadran pero no estoy seguro.gracias<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def es_bisiesto(n):<br />    while n%4==0:<br />        if (n%100!=0 and n%400==0) or(n%100==0 and n%400==0):<br />            return(&quot;es bisiesto&quot;)<br />        elif n%100!=0:<br />            return(&quot;es bisiesto&quot;)<br />        else :<br />            return(&quot;NO es bisiesto&quot;)<br />    <br />               <br />    return(&quot;No es bisiesto&quot;)   <br />n=int(input(&quot;Introduce el año&quot;))<br />print(&quot;El año es:&quot;,es_bisiesto(n))<br />def devuelve_dias(n):<br />    if es_bisiesto(n):<br />        return(&quot;366 dias&quot;)<br />    else:<br />        return(&quot;365 dias&quot;)<br /><br /><br />print(&quot;El nº de dias son:&quot;,devuelve_dias(n))<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2343">alfredo23</a> — Sab Dic 18, 2010 5:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-18T12:36:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4617#p4617</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4617#p4617"/>
<title type="html"><![CDATA[Re: AYUDA CON  EJERCICIOS DE PHYTON!!AÑO BISIESTO]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4617#p4617"><![CDATA[
cierto, quería poner x % y == 0, pero se me paso ponerlo al final<br /><br />Y lo de poner tanto nombre de variable era para aclarar. Lo mejor es lo que comentabas, partir los enunciados en puntos (más o menos como requisitos) y programar cada punto<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Dic 18, 2010 12:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-18T11:41:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4616#p4616</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4616#p4616"/>
<title type="html"><![CDATA[Re: AYUDA CON  EJERCICIOS DE PHYTON!!AÑO BISIESTO]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4616#p4616"><![CDATA[
Hola Alfredo, es cuestión de coger lápiz y papel y ponerse a desenredar el enunciado, y básicamente nos queda que un año es bisiesto en 2 situaciones:<br /><br />-Si es divisible por 4 Y por 100 Y por 400, ésto se puede simplificar ya que si es divisible por 400 también lo va ser por 4 y por 100, así que solo es necesario comprobar que sea divisible por 400 (primera condición del if).<br /><br />-Si es divisible por 4 Y NO es divisible por 100 (segunda condición del if).<br /><br />Solo queda poner un or entre las dos condiciones para comprobar que la primera es cierta O la segunda es cierta.<br /><br />Hola Juanxo, si te fijas esDivisiblePorX vale 0 cuando es divisible, al evaluar el 0 en el if, dará false, por lo que es necesario negar los valores antes de asignarlos para que el código se ejecute correctamente.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>anio=int(raw_input(&quot;Introduzca un año: &quot;))<br /><br />esDivisiblePor4 = not(anio % 4)<br />esDivisiblePor100 = not(anio % 100)<br />esDivisiblePor400 = not(anio % 400)<br /><br />if (esDivisiblePor400 or (esDivisiblePor4 and not esDivisiblePor100)):<br />  print 'Es bisiesto.'<br />else:<br />  print 'No es bisiesto.'</code></dd></dl><br /><br />y aquí dejo el código compacto como a mi me gusta xD:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>anio = int(raw_input(&quot;Introduzca un año: &quot;))<br /><br />print &quot;Es bisiesto.&quot; if (anio%400==0 or (anio%4==0 and anio%100!=0)) else &quot;No es bisiesto.&quot;</code></dd></dl><br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Sab Dic 18, 2010 11:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-18T00:00:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4615#p4615</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4615#p4615"/>
<title type="html"><![CDATA[Re: AYUDA CON  EJERCICIOS DE PHYTON!!AÑO BISIESTO]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4615#p4615"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code><br />esDivisiblePor4 = anio % 4<br />esDivisiblePor100 = anio % 100<br />esDivisiblePor400 = anio % 400<br /><br />if (esDivisiblePor400 or (esDivisiblePor4 and not esDivisiblePor100):<br />  print 'Es bisiesto'<br />else:<br />  print 'No es bisiesto'<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Dic 18, 2010 12:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[alfredo23]]></name></author>
<updated>2010-12-17T20:21:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4614#p4614</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4614#p4614"/>
<title type="html"><![CDATA[AYUDA CON  EJERCICIOS DE PHYTON!!AÑO BISIESTO]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=966&amp;p=4614#p4614"><![CDATA[
Muy buenas:<br /><br /><br /><br />La verdad no entiendo muy bien lo de los años bisiestos en Python. Parece una función muy compleja y larga de hacer.<br /><br />Un abrazo.<a href="http://www.subeimagenes.com/img/gdfghfhfghgj-7784.jpg" class="postlink">http://www.subeimagenes.com/img/gdfghfhfghgj-7784.jpg</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2343">alfredo23</a> — Vie Dic 17, 2010 8:21 pm</p><hr />
]]></content>
</entry>
</feed>