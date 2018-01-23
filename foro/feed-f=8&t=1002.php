<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1002" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-10T08:09:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1002</id>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2011-01-10T08:09:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4749#p4749</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4749#p4749"/>
<title type="html"><![CDATA[Re: Números aleatorios en Python y funciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4749#p4749"><![CDATA[
Gracias phack<br /><br />Lo return era lo que me hacia falta <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />, ya había leído sobre eso en el manual, pero no pense que se usara en estos casos, sinceramente no la recordaba.<br /><br />El no almacenar el raw_input en una variable, fue error de copypaste en mi propio código jeje. Por cierto seria int(raw_input(&quot;introduce..&quot;)) para que el valor se tome como entero.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Lun Ene 10, 2011 8:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-01-10T07:55:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4748#p4748</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4748#p4748"/>
<title type="html"><![CDATA[Re: Números aleatorios en Python y funciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4748#p4748"><![CDATA[
saludos IrvingProg<br /><br />al parecer no utilizaste la palabra clave <span style="font-weight: bold">return</span><br />esta se utiliza en una funcion cuando quieres devolver algun valor obtenido<br />y utilizarlo fuera.<br /><br />en este caso en particular en la asignacion siguiente<br />num_a1 y num_a2 no toman ningun valor porque la funcion no retorna ninguno.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>num_a1 = num_aleatorio1()<br />num_a2 = num_aleatorio2()<br /></code></dd></dl><br /><br />se soluciona escribiendo lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def num_aleatorio1():<br />   num = random.randint(1,99)<br />   print num<br />   # la sentencia &quot;return  num&quot; envia el resultado contenido en num hacia la variable que queramos.   <br />   return num<br /></code></dd></dl><br /><br />otra cosa que falto, es cuando introduces el resultado de la suma( o resta) en la consola este se debe<br />almacenar en una variable para que luego podamos compararlo con la suma( o resta) correcta.<br /><br /> <span style="font-weight: bold">entrada = </span>raw_input(&quot;introduce la resta de los numeros: &quot;)<br /><br /><br />aqui dejo el codigo con los cambios anteriormente mencionados.<br /><dl class="codebox"><dt>Code: </dt><dd><code>#!/usr/bin/python<br /><br />import random<br /><br />def sumar(num1,num2):<br />   suma=int(num1) + int(num2)<br />   print &quot;suma&quot;, num1, &quot;y&quot;, num2<br />   entrada = raw_input(&quot;introduce la suma de los numeros: &quot;)<br /><br />   if suma == int(entrada):<br />      print &quot;correcto, el numero es&quot;,suma<br />   else:<br />      print &quot;Error, pasemos a la siguente operacion&quot;<br /><br /><br />def restar(num1, num2):<br />   resta = int(num1) - int(num2)<br />   <br />   entrada = raw_input(&quot;introduce la resta de los numeros: &quot;)<br /><br />   if resta == int(entrada):<br />      print &quot;correcto, el numero es&quot;,resta<br />   else:<br />      print &quot;Error, pasemos a la siguente operacion&quot;<br /><br />def num_aleatorio1():<br />   num = random.randint(1,99)<br />   print num<br />   return num<br /><br />def num_aleatorio2():<br />   num = random.randint(1,99)<br />   print num<br />   return num<br /><br />   <br />num_a1 = num_aleatorio1()<br />num_a2 = num_aleatorio2()<br /><br />restar(num_a1, num_a2)<br /></code></dd></dl><br /><br />Saludos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> .<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Lun Ene 10, 2011 7:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2011-01-10T06:56:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4747#p4747</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4747#p4747"/>
<title type="html"><![CDATA[Números aleatorios en Python y funciones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1002&amp;p=4747#p4747"><![CDATA[
Hola.<br />Estoy desarrollando una pequeña aplicación que pienso convertir en un juego &quot;rapidez mental&quot;,por el momento quiero que la aplicación funcione en consola para después portarla a alguna librería de juegos.<br /><br />Mi código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#!/usr/bin/python<br /><br />import random<br /><br />def sumar(num1,num2):<br />   suma=int(num1) + int(num2)<br />   print &quot;suma&quot;, num1, &quot;y&quot;, num2<br />   raw_input(&quot;introduce la suma de los numeros: &quot;)<br />   if suma == entrada:<br />      print &quot;correcto, el numero es&quot;,suma<br />   else:<br />      print &quot;Error, pasemos a la siguente operacion&quot;<br /><br /><br />def restar(num1,num2):<br />   resta = int(num1) - int(num2)<br />   raw_input(&quot;introduce la resta de los numeros: &quot;)<br />   if resta == entrada:<br />      print &quot;correcto, el numero es&quot;,resta<br />   else:<br />      print &quot;Error, pasemos a la siguente operacion&quot;<br /><br />def num_aleatorio1():<br />   num = random.randint(1,99)<br />   print num<br /><br />def num_aleatorio2():<br />   num = random.randint(1,99)<br />   print num<br /><br />   <br />num_a1 = num_aleatorio1()<br />num_a2 = num_aleatorio2()<br /><br />restar(num_a1,num_a2)</code></dd></dl><br /><br />El código es bastante simple, lo que he hecho es declarar dos funciones, suma y resta, después otras dos donde genero dos números aleatorios.<br /><br />El problema es, que no puedo pasar esos números aleatorios como parámetros a alguna de las funciones que realizan las operaciones de sumar o restar. Quisiera me dijeran como los puedo pasar como parámetros, y si el código va bien <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Saludos. Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Lun Ene 10, 2011 6:56 am</p><hr />
]]></content>
</entry>
</feed>