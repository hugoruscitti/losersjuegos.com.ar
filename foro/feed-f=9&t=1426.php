<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1426" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-03-04T23:51:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1426</id>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-03-04T23:51:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6565#p6565</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6565#p6565"/>
<title type="html"><![CDATA[Re: Problema de encapsulado con python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6565#p6565"><![CDATA[
Quedo muy agradecido Mightygaver.<br /><br />Con la explicación que me diste me quedó perfectamente claro, la verdad, nunca se me ocurrió pensar que el problema venía por ese lado, en especial por que no se usa ninguna palabra reservada ni nada que te haga tomar conciencia de la diferencia de comportamiento.<br /><br />Sobre static, yo tengo entendido que es porque la variable se mantiene estática en la memoria y puede ser accedida independiente del lugar donde se cargue la instancia al objeto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Dom Mar 04, 2012 11:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2012-03-04T22:53:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6564#p6564</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6564#p6564"/>
<title type="html"><![CDATA[Re: Problema de encapsulado con python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6564#p6564"><![CDATA[
Hola Hechelion,<br /><br />El motivo principal por el que no te funcionaba la primera solución, es que estabas declarando las variables en un espacio común para todas las instancias de la clase. <br /><br />No sé si estarás familiarizado con Java, C++ o PHP. Todos estos lenguajes también permiten utilizar variables compartidas para todas las instancias de una misma clase, pero la diferencia principal es que en ellos se ha de poner la palabra clave <span style="font-weight: bold">static</span> con lo que queda más claro que no son variables para cada instancia. Las variables que utilizaste en la primera solución eran de este tipo.<br /><br />En cambio, la segunda solución es la manera correcta, utilizando <span style="font-style: italic">self</span> para agregar dinámicamente los campos que quieras poner al objeto al que self hace referencia.  <br /><br />Espero haberlo explicado correctamente, aunque no se me ocurre ninguna manera diferente de explicar los miembros estáticos sin hacer analogía de otros lenguajes, ya que personalmente nunca entendí porqué se llaman <span style="font-weight: bold">static</span>  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Dom Mar 04, 2012 10:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-03-04T20:10:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6563#p6563</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6563#p6563"/>
<title type="html"><![CDATA[Re: Problema de encapsulado con python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6563#p6563"><![CDATA[
Luego de una buena lucha, se me ocurrió probar algo que funciona.<br />moví la creación de las variables al método __init__ de esa forma pude anteponer el &quot;self&quot; antes de &quot;definir&quot; las propiedades y ahora está funcionando bien (una lista por objeto). Pero sigo con la duda de por que fallaba de la otra forma.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>    def __init__(self):<br />        self.cadena = &#91;&#93;<br />        self.nombre = &quot;&quot;<br /></code></dd></dl><br /><br />Mis disculpas por postear seguido, pero hasta hace unos minutos no lograba encontrar ninguna solución (luego de dos días tratando de resolverlo) y de pronto se me ocurrió probar esa opción. Por cierto, si alguien sabe por qué no funciona la forma anterior, le agradecería si me lo explica.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Dom Mar 04, 2012 8:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-03-04T19:39:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6562#p6562</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6562#p6562"/>
<title type="html"><![CDATA[Problema de encapsulado con python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1426&amp;p=6562#p6562"><![CDATA[
Saludos, voy a ver si ahora tengo más suerte con alguna respuesta, ya que acá hay más gente que use python.<br /><br />Tengo un problema muy extraño con python, creé una clase y dentro de la clase una lista (yo espero que la lista sea local a la clase y por ende, tener una lista por cada objeto creado)<br /><br />El problema viene, por que estoy creando objetos de forma dinámica en tiempo de ejecución según sean los dato que leo de un archivo y los agrego a un diccionario. El problema, es que cuando agrego los datos a la lista interna de cada objeto, es como si esa lista fuese una sola variable global para todos los objetos, en vez de ser una variable única e independiente para cada objeto.<br /><br />Tengo un archivo de texto donde almaceno unos datos:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>cabecera<br />linea_1 ;;;;;ID_0;;;;;;;;;<br />linea_2 ;;;;;ID_1;;;;;;;;;<br />linea_3 ;;;;;ID_0;;;;;;;;;<br />linea_4 ;;;;;ID_2;;;;;;;;;<br />linea_5 ;;;;;ID_1;;;;;;;;;<br /></code></dd></dl><br /><br />Creé el siguiente programa en python, para agrupar los datos (o lineas) según sea el ID.<br /><dl class="codebox"><dt>Code: </dt><dd><code>import struct<br />import sys<br />import glob<br />import os<br />import types<br />import binascii<br />import re<br /><br />class ClsPJ:<br />    #Clase para almacenar los datos de cada PJ<br />    cadena = &#91;&#93;    <br />    nombre = &quot;&quot;<br />    <br />    def __init__(self):<br />        pass<br />    <br />    def AddDato(self, dato):<br />        self.cadena.append(dato)<br />    <br />    def printDato(self):<br />        for linea in self.cadena:<br />            print(linea)<br /><br /><br />def leerArchivo(ruta):<br />    #Desglosa un archivo de log<br />    log = open(ruta,'r')<br />    for linea in log.readlines()&#91;1:&#93;: #Recorrermos el log, menos la primera l?nea que es la cabecera<br />        campos = linea.split(&quot;;&quot;) #cortamos la linea en sus respectivos campos<br />        if not campos&#91;5&#93; in lstPJ: #Si la key no existe en el diccionario<br />            lstPJ&#91;campos&#91;5&#93;&#93; = ClsPJ() #Creamos una entrada nueva en el diccionario<br />            lstPJ&#91;campos&#91;5&#93;&#93;.nombre = campos&#91;5&#93; #escribimos la key en el objeto<br />        lstPJ&#91;campos&#91;5&#93;&#93;.AddDato(linea) #agregamos el dato al objeto<br /><br /><br />lstPJ = {} #creamos el diccionario que contendr? los datos<br />leerArchivo(&quot;output.txt&quot;) #Leemos el archivo de prueba<br /><br />for k, v in lstPJ.iteritems(): #imprimimos los datos para probar<br />    print(v.nombre)<br />    v.printDato()<br /></code></dd></dl><br /><br />El problema lo tengo al momento de agregar el dato a cada objeto, yo espero que la línea<br />&quot; lstPJ[campos[5]].AddDato(linea) #agregamos el dato al objeto&quot; agregue una línea a un objeto y esperaría la siguiente salida de mi programa (cada línea estaría agrupada):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>ID_0<br />linea_1 ;;;;;ID_0;;;;;;;;;<br />linea_3 ;;;;;ID_0;;;;;;;;;<br /><br />ID_1<br />linea_2 ;;;;;ID_1;;;;;;;;;<br />linea_5 ;;;;;ID_1;;;;;;;;;<br /><br />ID_2<br />linea_4 ;;;;;ID_2;;;;;;;;;<br /></code></dd></dl><br /><br /><br />Sin embargo, la salida actual de mi programa es la siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>ID_0<br />linea_1 ;;;;;ID_0;;;;;;;;;<br />linea_2 ;;;;;ID_1;;;;;;;;;<br />linea_3 ;;;;;ID_0;;;;;;;;;<br />linea_4 ;;;;;ID_2;;;;;;;;;<br />linea_5 ;;;;;ID_1;;;;;;;;;<br /><br />ID_1<br />linea_1 ;;;;;ID_0;;;;;;;;;<br />linea_2 ;;;;;ID_1;;;;;;;;;<br />linea_3 ;;;;;ID_0;;;;;;;;;<br />linea_4 ;;;;;ID_2;;;;;;;;;<br />linea_5 ;;;;;ID_1;;;;;;;;;<br /><br />ID_2<br />linea_1 ;;;;;ID_0;;;;;;;;;<br />linea_2 ;;;;;ID_1;;;;;;;;;<br />linea_3 ;;;;;ID_0;;;;;;;;;<br />linea_4 ;;;;;ID_2;;;;;;;;;<br />linea_5 ;;;;;ID_1;;;;;;;;;<br /><br /></code></dd></dl><br /><br />Como ven, por algún extraño motivo que no he logrado comprender, me crea bien los 3 objetos dentro del diccionario, pero a cada objeto le está agregando las 5 líneas en vez de agregar solo la línea que corresponde.<br /><br /><br />Por lo que entiendo, luego de hacer un montón de pruebas, es como si la variable &quot;cadena&quot; no fuera local y única a cada objeto, si no, que fuera una única variable global y todos los objetos apuntan a la misma lista.<br />No me cuadra, como puede pasar eso, si &quot;cadena&quot; fue definida dentro de la clase (el programa es todo lo que hay ahí). En especial, si la propiedad &quot;nombre&quot; funciona bien, por lo cual sé que tengo 3 objetos diferentes, pero desconozco por que tengo solo una lista global en vez de tener 3 listas independientes.<br />¿Alguna idea?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Dom Mar 04, 2012 7:39 pm</p><hr />
]]></content>
</entry>
</feed>