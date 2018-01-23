<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=303" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-07-29T01:46:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=303</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-07-29T01:46:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1583#p1583</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1583#p1583"/>
<title type="html"><![CDATA[Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1583#p1583"><![CDATA[
ah, sí. La función &quot;raw_input&quot; es un poco diferente a &quot;input&quot;, dado que<br />&quot;raw_input&quot; siempre devuelve una cadena de texto... recuerda <br />ejecutar &quot;help(input)&quot; y &quot;help(raw_input)&quot; en caso de dudas para<br />recibir una descripción detallada de cada función.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Jul 29, 2008 1:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-07-28T19:37:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1582#p1582</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1582#p1582"/>
<title type="html"><![CDATA[Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1582#p1582"><![CDATA[
gracias por la respuestas, no se porque, pero había quitado el &quot;raw_&quot; delante del input y yo dándole vueltas a la cabeza, pensaba que era un error de sintaxis.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Lun Jul 28, 2008 7:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-07-28T00:30:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1581#p1581</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1581#p1581"/>
<title type="html"><![CDATA[Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1581#p1581"><![CDATA[
<blockquote><div><cite>Nato escribió:</cite><br />[..]no se porque pero al elegir cualquier opción sale del programa, es como si las tres diesen la salida[...]<br /></div></blockquote><br /><br />Sí, resulta que en el código la función &quot;input&quot; retorna un valor<br />numérico, por lo tanto la comparación con una cadena siempre<br />será falsa, aunque el usuario pulse la tecla 1 y luego<br />Enter. Por ejemplo, sería como comparar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if 1 == '1':<br />     pass<br /></code></dd></dl><br /><br />Por ello, sería bueno convertir el valor que ingresa el usuario antes<br />de compararlo, las funciones &quot;int(x)&quot; y &quot;str(x)&quot; sirven para entre<br />números y cadenas.<br /><br />También aprovecho este mensaje para comentar que la función<br />&quot;type(x)&quot; de python te informa sobre el tipo de dato de cualquier<br />referencia, algo similar ocurre con &quot;help(x)&quot;, por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&gt;&gt;&gt; numero = '1'<br />&gt;&gt;&gt; type&#40;numero&#41;<br />&lt;type 'str'&gt;<br />&gt;&gt;&gt; numero_entero = int&#40;numero&#41;<br />&gt;&gt;&gt; type&#40;numero_entero&#41;<br />&lt;type 'int'&gt;<br />&gt;&gt;&gt; 1 == numero_entero<br />True<br />&gt;&gt;&gt; 1 == numero<br />False<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Jul 28, 2008 12:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-07-27T16:43:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1580#p1580</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1580#p1580"/>
<title type="html"><![CDATA[Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1580#p1580"><![CDATA[
después de mucho tiempo quise ampliar el código, pero tengo un problema, no se porque pero al elegir cualquier opción sale del programa, es como si las tres diesen la salida, aquí dejo el código.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#!/usr/bin/env python<br /># -*- coding: utf-8 -*-<br /><br />try:<br />    import sys<br />    from math import pi<br />except ImportError, error:<br />    print &quot;No se pudo cargar el modulo: %s&quot; % &#40;error&#41;<br />    sys.exit&#40;2&#41;<br /><br />#===============================================================================<br /><br />def area_circunferencia&#40;radio&#41;:<br />    return &#40;pi*radio&#41;**2<br /><br />def perimetro_circunferencia&#40;radio&#41;:<br />    return 2*pi*radio<br /><br />def area_cuadrado&#40;lado&#41;:<br />    return lado**2<br /><br />def perimetro_cuadrado&#40;lado&#41;:<br />    return lado+lado+lado+lado<br /><br />def calcultar_area_circun&#40;&#41;:<br />    radio = input&#40;&quot;Cual es el radio de la circunferencia?: &quot;&#41;<br /><br />    if radio &gt; 0:<br />        print &quot;Area de la circunferencia: &quot;, area_circunferencia&#40;radio&#41;<br />    else:<br />        print &quot;Error, debes introducir un numero superior a 0.&quot;<br /><br />def calcular_perimetro_circun&#40;&#41;:<br />    radio = input&#40;&quot;Cual es el radio de la circunferencia?: &quot;&#41;<br /><br />    if radio &gt; 0:<br />        print &quot;Perimetro de la circunferencia: &quot;, perimetro_circunferencia&#40;radio&#41;<br />    else:<br />        print &quot;Error, debes introducir un numero superior a 0.&quot;<br /><br />def calcultar_area_cua&#40;&#41;:<br />    radio = input&#40;&quot;Cual es el lado del cuadrado?: &quot;&#41;<br /><br />    if radio &gt; 0:<br />        print &quot;Area del cuadrado: &quot;, area_cuadrado&#40;lado&#41;<br />    else:<br />        print &quot;Error, debes introducir un numero superior a 0.&quot;<br /><br />def calcular_perimetro_cua&#40;&#41;:<br />    radio = input&#40;&quot;Cual es el lado del cuadrado?: &quot;&#41;<br /><br />    if radio &gt; 0:<br />        print &quot;Perimetro del cuadrado: &quot;, perimetro_cuadrado&#40;lado&#41;<br />    else:<br />        print &quot;Error, debes introducir un numero superior a 0.&quot;<br /><br />#===============================================================================<br /><br />quit = False<br /><br />while not quit:<br />    print &quot;GEOMETRÍA\n&quot;<br />    seleccion = input&#40;&quot;Que quieres hacer, calcular area&#40;1&#41;, perimetro&#40;2&#41; o salir&#40;3&#41;? &quot;&#41;<br /><br />    if seleccion == &quot;1&quot;:<br />        seleccion1 = input&#40;&quot;Que area quieres calcular, circunferencia&#40;1&#41;, cuadrado&#40;2&#41;? &quot;&#41;<br />        if seleccion1 == &quot;1&quot;:<br />            calcultar_area_circun&#40;&#41;<br />        elif seleccion1 == &quot;2&quot;:<br />            calcular_area_cua&#40;&#41;<br />    if seleccion == &quot;2&quot;:<br />        seleccion2 = input&#40;&quot;Que perimetro quieres calcular, circunferencia&#40;1&#41;, cuadrado&#40;2&#41;? &quot;&#41;<br />        if seleccion2 == &quot;1&quot;:<br />            calcultar_perimetro_circun&#40;&#41;<br />        elif seleccion2 == &quot;2&quot;:<br />            calcular_perimetro_cua&#40;&#41;<br />    else:<br />        quit = True</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Dom Jul 27, 2008 4:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-29T00:10:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1264#p1264</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1264#p1264"/>
<title type="html"><![CDATA[Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1264#p1264"><![CDATA[
<blockquote><div><cite>Nato escribió:</cite><br />[...] cual es la diferencia entre este e input a secas?<br /></div></blockquote><br /><br />La diferencia está en el tipo de objeto que devuelven, &quot;input&quot; intenta<br />evaluar lo que le escribes: si escribes un número intenta devolver<br />un objeto de tipo entero, si ingresas un nombre intenta retornar<br />la variable que tiene ese nombre, etc. Mientras que &quot;raw_input&quot; <br />siempre devuelve una cadena con todo lo que escribas.<br /><br />En python puedes conocer el tipo de dato de los objetos usando<br />la función &quot;type&quot;.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Abr 29, 2008 12:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-04-28T19:41:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1259#p1259</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1259#p1259"/>
<title type="html"><![CDATA[Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1259#p1259"><![CDATA[
Voy a estudiar tu código Hugo a ver si aprendo algo, se ve muy limpio, eres un crack, estaba buscando la forma de implementar lo que dices del raw_input, cual es la diferencia entre este e input a secas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Lun Abr 28, 2008 7:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-28T01:42:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1255#p1255</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1255#p1255"/>
<title type="html"><![CDATA[Re: Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1255#p1255"><![CDATA[
<blockquote><div><cite>Nato escribió:</cite><br />[...] quiero que critiquen todo lo que puedan para intentar mejorar dichos aspectos del código y como programador si se puede.<br /></div></blockquote> Para mí está muy bién, sobretodo si es tu primer<br />programa en python.<br /><br />Aún así, para mejorarlo aún más sería bueno crear funciones para<br />hacer mas sencilla su lectura.<br /><br />Muchas técnicas y recomendaciones sobre programación suelen<br />ir en dirección a hacer mas sencilla la lectura y seguimiento de los<br />programas. En tu código resulta un poco difícil saber &quot;donde&quot; se<br />está ejecutando el código. Debido a los bucles while, que cuesta<br />seguirlos cuando se anidan.<br /><br />Considera la siguiente modificación de tu programa:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: utf-8 -*-<br />from math import pi<br /><br />def area_circunferencia&#40;radio&#41;:<br />    return &#40;pi*radio&#41; ** 2<br /><br />def perimetro_circunferencia&#40;radio&#41;:<br />    return 2*pi*radio<br /><br />def calcultar_area&#40;&#41;:<br />    &quot;Permite calcular el area de una circunferencia en base a su radio.&quot;<br /><br />    radio = input&#40;&quot;Cual es el radio de la circunferencia?: &quot;&#41;<br /><br />    if radio &gt; 0:<br />        print &quot;Área de la circunferencia:&quot;, area_circunferencia&#40;radio&#41;<br />    else:<br />        print &quot;Error, debes introducir un número superior a 0.&quot;<br /><br />def calcular_perimetro&#40;&#41;:<br />    &quot;Permite calcular el perímetro de una circunferencia.&quot;<br /><br />    radio = input&#40;&quot;Cual es el radio de la circunferencia?: &quot;&#41;<br /><br />    if radio &gt; 0:<br />        print &quot;Perímetro de la circunferencia:&quot;, perimetro_circunferencia&#40;radio&#41;<br />    else:<br />        print &quot;Error, debes introducir un número superior a 0.&quot;<br /><br /># Programa principal<br /><br />quit = False<br /><br />while not quit:<br />    print &quot;&quot;<br />    seleccion = raw_input&#40;&quot;¿Que quieres hacer, calcular área&#40;1&#41;, perímetro&#40;2&#41; o salir&#40;3&#41;? &quot;&#41;<br /><br />    if seleccion == '1':<br />        calcultar_area&#40;&#41;<br />    elif seleccion == '2':<br />        calcular_perimetro&#40;&#41;<br />    else:<br />        quit = True</code></dd></dl><br /><br />viendo la última parte del código se puede ver como agregar<br />nueva funcionalidad, por ejemplo yo añadí la funcionalidad de <br />&quot;salir&quot;, que si bien es sencilla no fue difícil añadirla.<br /><br />En fin, algunas cosas las modifiqué sin reparar en detalles, como<br />usar &quot;raw_input&quot; (que evita que el programa falle si pulsan &quot;a&quot; por<br />ejemplo). Cualquier cosa preguntanos.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Abr 28, 2008 1:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2008-04-22T23:16:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1227#p1227</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1227#p1227"/>
<title type="html"><![CDATA[Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1227#p1227"><![CDATA[
¿Cómo aprovecharías eso en otro programa? No lo pregunto por nada, sólo para que te calientes la cabeza un poco más.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mar Abr 22, 2008 11:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-04-22T20:29:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1225#p1225</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1225#p1225"/>
<title type="html"><![CDATA[Mi primer codigo en Python (calculo con circunferencias)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=303&amp;p=1225#p1225"><![CDATA[
No se si es que no envié el otro mensaje, o que paso, pero bueno, lo escribo de nuevo que de todas formas tenia que corregir alguna cosas.<br /><br />Aquí les presento mi primer código en Python, es un &quot;programa&quot; que halla el área y el perímetro de una circunferencia, es bastante sencillo, pero quería probar hacer un código completo por mi y es lo primero que se me ocurrió, quiero que critiquen todo lo que puedan para intentar mejorar dichos aspectos del código y como programador si se puede.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: utf-8 -*-<br /><br />###########################################<br />#Proyecto: Geometría.<br />#Autor: Nato.<br />#Version: 0.1.<br />#####################<br /><br />#importar el valor de pi desde el modulo math<br />from math import pi<br /><br />#crear la variable para activar o desactivar el bucle principal<br />nuevo_valor=1<br /><br />#presentación.<br />print &quot;########################&quot;<br />print &quot;     CIRCUNFERENCIA&quot;<br />print &quot;########################\n&quot;<br /><br />#bucle principal<br />while &#40;nuevo_valor == 1&#41;:<br /><br />    seleccion = input&#40;&quot;Que quieres hallar, área&#40;1&#41; o perímetro &#40;2&#41;? &quot;&#41;<br />    print &quot;&quot;<br />   <br />    #si el valor de &quot;selección&quot; retorna 1 se inicia el bucle del área<br />    while &#40;seleccion == 1&#41;:<br /><br />        print &quot;Hallar área&quot;<br /><br />        r_circun = input&#40;&quot;Cual es el radio de la circunferencia?: &quot;&#41;<br /><br />        #calcula área de una circunferencia.<br />        def area_circunferencia&#40;radio&#41;:<br />            return pi*radio**2<br />       <br />        if r_circun &lt; &#40;0.000000000001&#41;:<br />            print &quot;Error, debes introducir un numero superior a 0&quot;<br />        else:<br />            print &quot;Área de la circunferencia: &quot;+str&#40;area_circunferencia&#40;r_circun&#41;&#41;+&quot;\n&quot;<br /><br />        break<br />    #si el valor de &quot;selección&quot; retorna 2 se inicia el bucle del perímetro<br />    while &#40;seleccion == 2&#41;:<br />       <br />        print &quot;Hallar perímetro&quot;<br /><br />        r_circun = input&#40;&quot;Cual es el radio de la circunferencia?: &quot;&#41;<br /><br />        #calcula perímetro de una circunferencia<br />        def perimetro_circunferencia&#40;radio&#41;:<br />            return 2*pi*radio<br /><br />        if r_circun &lt; &#40;0.000000000001&#41;:<br />            print &quot;Error, debes introducir un numero superior a 0&quot;<br />        else:<br />            print &quot;Perímetro de la circunferencia: &quot;+str&#40;perimetro_circunferencia&#40;r_circun&#41;&#41;+&quot;\n&quot;<br /> <br />        break</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Mar Abr 22, 2008 8:29 pm</p><hr />
]]></content>
</entry>
</feed>