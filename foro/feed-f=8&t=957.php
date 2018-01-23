<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=957" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-12T23:04:52+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=957</id>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-12T23:04:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4574#p4574</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4574#p4574"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4574#p4574"><![CDATA[
De nada que para eso estamos, ni molestia ni tontería, todos hemos aprendido a programar alguna vez. A demás es bonito sudar un poco intentando sacar el código y cuando por fin lo ejecutas y todo funciona te sientes NINJA!<br /><br />De todas formas yo investigaría un poco el código, según las normas de tabulación de python no es tan trivial que ese else esté ahí xDD.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Dom Dic 12, 2010 11:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[alfredo23]]></name></author>
<updated>2010-12-12T22:57:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4573#p4573</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4573#p4573"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4573#p4573"><![CDATA[
epa que despiste jaaj ya sient el molestart con esta tonterias y muchas gracias por todo tio.salu2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2343">alfredo23</a> — Dom Dic 12, 2010 10:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-12T22:43:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4572#p4572</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4572#p4572"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4572#p4572"><![CDATA[
No, el problema está en que has cambiado el else del if num % div == 0. Fijate que yo lo tengo puesto a la altura (tabulación) del for y tu lo has tabulado a la altura del if. Cambia completamente el sentido del código xDD.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Dom Dic 12, 2010 10:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-12T22:36:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4571#p4571</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4571#p4571"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4571#p4571"><![CDATA[
creo que se porque falla:<br /><br />for div in (primos[1:]):<br /><br />esto hace que itere saltandose el primero, ya que no tiene sentido comprobar si es divisible por 1<br /><br />Pero el problema es que hace que, como nunca llegue a entrar en el segundo for (primos[1:] devuelve la lista vacia siempre) pues no se actualizan los valores<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Dic 12, 2010 10:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[alfredo23]]></name></author>
<updated>2010-12-12T20:19:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4569#p4569</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4569#p4569"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4569#p4569"><![CDATA[
gracias kaisere la verdad es que tu programa es mas comprensible para el nivel de programacion que yo tengo pero el resultado que me da no es lo que yo quiero y no entiendo porque , te pongo a continuacion que muestra en mi ordenador :<br /><br />Introduzca el final del intervalo13<br />Los nº primos del intervalo son: [1]<br />La suma de los mismos es: 1<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def numeros_primos(n):<br />    primos=&#91;1&#93;<br />    suma=1<br />    for num in range(2,(n+1)):<br />        for div in (primos&#91;1:&#93;):<br />            if num % div==0:<br />                break<br />            else:<br />                primos.append(num)<br />                suma += num<br />    return(primos,suma)<br /><br /><br />n=int(input(&quot;Introduzca el final del intervalo&quot;))<br />(primos,suma)=numeros_primos(n)<br />print(&quot;Los nº primos del intervalo son:&quot;,primos)<br />print(&quot;La suma de los mismos es:&quot;,suma)</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2343">alfredo23</a> — Dom Dic 12, 2010 8:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-12T00:59:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4565#p4565</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4565#p4565"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4565#p4565"><![CDATA[
En realidad solo es necesario dividir entre los números primos inferiores a la raíz de n. Aquí dejo mi pequeña (15 líneas) aportación:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def buscar_sumar_primos(n):<br />    lista_primos = &#91;1&#93;<br />    sum = 1<br />    for num in range(2, n + 1):<br />        for div in (lista_primos&#91;1:&#93;):<br />            if num % div == 0:<br />                break<br />        else:<br />            lista_primos.append(num)<br />            sum += num<br />    return lista_primos, sum<br /><br />(lista_primos, suma)=buscar_sumar_primos(int(raw_input(&quot;Introduzca el final del intervalo: &quot;)))<br />print(&quot;Los números primos encontrados son:&quot;), lista_primos, (&quot;\nEl sumatorio es:&quot;), suma</code></dd></dl><br /><br />El código de Juanxo es fácil aunque raro si no se conoce esa expresión. Es una expresión del tipo A si C sino B, es decir si se cumple C se devuelve A sino se devuelve B. En éste caso si maximo &gt; 2 entonces j = 2, sino j = maximo. En el bucle while utiliza dos condiciones, que j no llegue al final (j &lt; maximo) o que el número sea primo i % j != 0, en el if de la línea siguiente hace la comprobación, si j ha llegado al final j == maximo significa que el número es primo y lo añade, si j != maximo es que el bucle se ha &quot;roto&quot; antes de llegar al final (por culpa de la segunda condición) lo que significa que el número no es primo.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Dom Dic 12, 2010 12:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[alfredo23]]></name></author>
<updated>2010-12-11T23:50:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4564#p4564</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4564#p4564"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4564#p4564"><![CDATA[
Muchas gracias ya lo entendido el proceso y voy a intentar hacerlo por mi cuenta de una forma mas simple solo hay una parte que no tengo muy clara ojala me la pudieras esplicar un poco.sinto tanta molestia<br /><dl class="codebox"><dt>Code: </dt><dd><code> j = 2 if maximo &gt; 2 else maximo<br />    while ( j &lt; maximo and (( i % j) != 0 )):<br />      j = j + 1</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2343">alfredo23</a> — Sab Dic 11, 2010 11:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-11T20:50:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4563#p4563</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4563#p4563"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4563#p4563"><![CDATA[
varias cosas:<br /> para calcular si un número es primo no hace falta comprobar si es divisible por numeros desde 2 a n, basta con llegar hasta la raiz de n, porque de ahí en adelante te van a salir resultados repetidos.<br /><br /> yo creo que lo más sencillo es que te pasen un rango y crear una lista como lo estás haciendo, pero creo que tienes problemas en el primos:<br /><br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import math<br />from math import * <br /><br /><br />def numeros_primos(n):<br />  <br />  primos = &#91;&#93;<br />  suma = 0<br />  for i in range(2, n):<br />    maximo = int(math.sqrt(i)) + 1<br />    j = 2 if maximo &gt; 2 else maximo<br />    while ( j &lt; maximo and (( i % j) != 0 )):<br />      j = j + 1<br />    if ( j == maximo ):<br />      primos.append( i )<br />      suma += i<br />  return primos, suma<br /><br />n=int(input(&quot;Introduzca el intervalo n&quot;))<br />primos, suma = numeros_primos(n)<br /><br />print &quot;Los numeros primos son&quot;, primos<br />print &quot;La suma es: &quot;, suma<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Dic 11, 2010 8:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[alfredo23]]></name></author>
<updated>2010-12-11T19:26:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4562#p4562</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4562#p4562"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4562#p4562"><![CDATA[
muchas gracias por tu atencion o he intentado hacer de otra manera siguiendo el manual de python pero tampoco consigo nada , si puderas indicRME LOS ERROR Y AYUDARME..<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def primos(n):<br />    for i in range(2,n):<br />        for x in range(2,i):<br />            if i%x==0:<br />                break<br />            else:<br />                return(i)<br />            <br />def sumadig(n):<br />    nstr=str(n)<br />    lista=&#91;&#93;<br />    for i in range (len(nstr)):<br />        lista.append(nstr&#91;i&#93;)<br /><br />    suma=0<br />    for i in lista:<br />        suma +=int(i)<br />    return(suma)  <br /><br /><br />n=int(input(&quot;Introduzca el intervalo n&quot;))<br />print(&quot;El resultado es:&quot;,sumadig(n))</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2343">alfredo23</a> — Sab Dic 11, 2010 7:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-12-11T01:09:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4560#p4560</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4560#p4560"/>
<title type="html"><![CDATA[Re: problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4560#p4560"><![CDATA[
buenas alfredo:<br /><br />lo primero de todo corrige si puedes el tema de las etiquetas code: la primera está bien colocada, pero la segunda, la que lleva &quot;/&quot; tienes que ponerla donde termian el código<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Dic 11, 2010 1:09 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[alfredo23]]></name></author>
<updated>2010-12-10T20:59:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4559#p4559</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4559#p4559"/>
<title type="html"><![CDATA[problema con python cuestion nº primos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=957&amp;p=4559#p4559"><![CDATA[
tengo q implementar unprograma que me de una lista de numeros primos existentes en un intervalo y el sumatorio de los mismo . he pensado hacer 2 funciones , una que me diga si el nº es primo o no y otra que imprime pero nose como unir ambas ni como hacer el sumatorio de los numeros de la lista. aqui os dejo lo que he hecho por si alguien me puediera ayudar.Muchas gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def primo(x):<br />    if x==2:<br />        return(True)<br />    if x%2==0:<br />        return(False)<br />    i=3<br />    while i**2&lt;=0:<br />        if x%1==0:<br />            return(False)<br />    i=i+2<br />    return(True)<br /><br />def lista_primos(n):<br />    while primo(x)==True:<br />        for x in range(2,n):<br />            return(x)</code></dd></dl><br />        <br />    <br />print(&quot;Vamos a calcular los numeros primos de un intervalo&quot;)   <br />n=int(input(&quot;Introduce el numero&quot;))<br />print(&quot;El resultado es:&quot;,lista_primos(n))<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2343">alfredo23</a> — Vie Dic 10, 2010 8:59 pm</p><hr />
]]></content>
</entry>
</feed>