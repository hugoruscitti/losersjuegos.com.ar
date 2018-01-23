<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=978" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-05T19:35:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=978</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-05T19:35:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4705#p4705</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4705#p4705"/>
<title type="html"><![CDATA[Re: problema con ejercicio python(archivos)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4705#p4705"><![CDATA[
creo que el problema se debe a que no introduces el salto de línea en el fichero (prueba a abrir el fichero creado y mira si tiene una o dos líneas). En caso de que este sea el error, se soluciona añadiendo al final de cada string que quieras escribir el salto de línea ( \n ). Ejemplo<br /><br />linea1 = &quot;Hola&quot; #no hay salto de linea<br />linea1 = &quot;Hola\n&quot; #hay salto de línea<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Ene 05, 2011 7:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-01-05T16:46:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4702#p4702</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4702#p4702"/>
<title type="html"><![CDATA[Re: problema con ejercicio python(archivos)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4702#p4702"><![CDATA[
Utiliza la función readlines que lee todo el fichero y almacena cada línea en un posición del array.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>archivo=open(&quot;noticias.txt&quot;, &quot;r&quot;)   #En realidad no es necesario poner &quot;r&quot; ya que es el modo en que se abre el fichero por defecto.<br />lineas=archivo.readlines()<br />archivo.close()<br /><br />y en la función buscar sustituyes:<br /><br />def buscar(terminos, lineas): <br />    mejor= &quot;&quot;<br />    puntos_mejor=0<br />    for linea in lineas:<br />    ...<br />    ...</code></dd></dl><br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mié Ene 05, 2011 4:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maier91]]></name></author>
<updated>2011-01-05T15:10:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4701#p4701</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4701#p4701"/>
<title type="html"><![CDATA[Re: problema con ejercicio python(archivos)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4701#p4701"><![CDATA[
Juanxo gracias por tu ayuda y siguiendo tus indicaciones he diseñado:<br /><dl class="codebox"><dt>Code: </dt><dd><code><br />fiche=open('noticias.txt','w')<br />linea1=&quot;la ONU adelantó ayer que la partida económica para ayudar a las víctimas del maremoto en el sur de Asia ascenderá a dos mil millones de dólares una cantidad que intentará atajar la grave situación que se vive en la zona donde los muertos pueden superar los ciento sesenta&quot;<br />fiche.write(linea1)<br />linea2=&quot;la incertidumbre volvía a cernirse ayer sobre el primer ministro israelí Ariel Sharon que sigue sin lograr formar una coalición de gobierno que le permita llevar a cabo su plan de desconexión de la franja de Gaza&quot;<br />fiche.write(linea2)<br />fiche.close()</code></dd></dl><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def buscar(terminos,archivo):<br />    <br />    mejor= &quot;&quot;<br />    puntos_mejor=0<br />    for linea in archivo:<br />        puntos_actual=0<br />        for termino in terminos:<br />            print('_buscando_',termino,'_en_',linea)<br />            puntos=linea.count(termino)<br />            print(&quot;_&quot;,str(puntos),&quot;_puntos_&quot;)<br />            puntos_actual +=puntos<br />        if puntos_actual&gt; puntos_mejor:<br />            mejor=linea<br />            puntos_mejor=puntos_actual<br />            <br />    return(mejor)<br /><br />archivo=open('noticias.txt','r')<br />termin=str(input(&quot;Introduce el/los termino/s que quieres buscar:&quot;))<br />terminos=termin.split()<br />resultado=buscar(terminos,archivo)<br />print(&quot;El resultado es:&quot;,resultado)<br />archivo.close()</code></dd></dl><br /><br />pero el problema que tengo es que no consigo que lea las lineas de 1 en 1. es decir si intriduzco como termino a buscar&quot;ayer&quot;(que solo esta en la 1º linea) me devuelve todo el texto tal vez me puedas ayudar a resolverlo.Gracias por tu ayuda!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2354">maier91</a> — Mié Ene 05, 2011 3:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-01T19:39:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4663#p4663</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4663#p4663"/>
<title type="html"><![CDATA[Re: problema con ejercicio python(archivos)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4663#p4663"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code>archivo=open('noticias.txt',&quot;r&quot;)<br />terminos=(str)(raw_input('dime las palabras: '))<br /><br />def buscar(a,f):<br />    mejor = &quot;&quot;<br />    puntos_mejor = 0<br />    for linea in archivo:<br />        puntos_actual = 0<br />        #contamos el numero de apariciones de cada termino de búsqueda en la linea<br />        for termino in a:<br />            puntos_actual += linea.count(termino)<br />        if puntos_actual &gt; puntos_mejor:<br />            mejor = linea<br />            puntos_mejor = puntos_actual<br />        <br />    return mejor<br /><br /><br />print(buscar(terminos, archivo))<br /><br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Ene 01, 2011 7:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maier91]]></name></author>
<updated>2011-01-01T11:30:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4662#p4662</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4662#p4662"/>
<title type="html"><![CDATA[Re: problema con ejercicio python(archivos)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4662#p4662"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code>archivo=open('noticias.txt',&quot;r&quot;)<br />lineas=open('noticias.txt').readlines()<br />a=(input('dime las palabras'))<br />print(busca(a,f)) <br />def buscar(a,f):<br />    b=&#91;&#93;<br />    for linea in archivo:<br />        for palabra in a:<br />            puntuaje&#91;lista&#93; +=linea.count(palabra)<br />            if p in l:<br />                b.append(l)<br />    return(b)</code></dd></dl><br /><br />pero no funciona bien por ello habia pensado hacer un sistema de &quot;puntajes&quot;. Cada línea arranca en 0, y por cada vez que se encuentre cada palabra buscada, se incrementa en 1 su puntaje. Luego simplemente se selecciona la línea cuyo puntaje sea el más alto.<br /><br />El cálculo puede ser algo así:<br />   <br />     <dl class="codebox"><dt>Code: </dt><dd><code> for linea in archivo:   <br />          for palabra in lista_de_palabras_buscadas:   <br />              puntaje&#91;linea&#93; += linea.count(palabra)</code></dd></dl><br />pero no se como:<br />- cómo inicializar el vector puntaje con todas sus entradas en 0<br />- cómo seleccionar al final el mayor puntaje y a partir de allí obtener la línea correspondiente<br />- cómo decicir en caso de empate<br /><br />se una forma simple puede ser leer el archivo con readlines(), crear el vector puntaje de tamaño len(lineas_del_archivo), pero no se como hacerlo.si me pudierais ayudar.Muchas gracias y feliz año nuevo!!!!!!!!!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2354">maier91</a> — Sab Ene 01, 2011 11:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maier91]]></name></author>
<updated>2010-12-23T18:24:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4637#p4637</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4637#p4637"/>
<title type="html"><![CDATA[problema con ejercicio python(archivos)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=978&amp;p=4637#p4637"><![CDATA[
tengo que hacer un problema sobre archivos pero como las horas lectivas no nos ha dado tiempo a que nos lo expliquen lo se por donde empezar si pudierais ayudar o recomendarm algo me seria de gran ayuda porque aunque me leido el manual de python lo me aclaro muy. bien.muchas gracias.<br />aqui os lo dejo:<br />Se propone construir un programa en Python que acceda a un fichero de texto e imprima la línea<br />más parecida a un conjunto de términos de búsqueda. Los términos de búsqueda serán especificados<br />en una única cadena q, utilizando el espacio en blanco como separador. La línea seleccionada podría<br />contener todos o tan sólo algunos de los términos de búsqueda. El fichero de texto objeto de las<br />búsquedas (noticias.txt) se adjunta a este enunciado. En todo caso, el programa debería funcionar<br />sobre cualquier fichero de texto<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2354">maier91</a> — Jue Dic 23, 2010 6:24 pm</p><hr />
]]></content>
</entry>
</feed>