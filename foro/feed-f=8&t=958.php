<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=958" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-12-15T20:25:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=958</id>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-15T20:25:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4598#p4598</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4598#p4598"/>
<title type="html"><![CDATA[Re: problema con 1 ejercicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4598#p4598"><![CDATA[
Las clases particulares España - América van a ser un poco complicadas xD, pero aquí estamos en el foro para lo que quieras, así que no dudes en preguntar. De hecho creo que tu código no es correcto ya que si te fijas haces lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>while dif&gt;0.000001:<br />       <br />        y=x-(((x**2)-m)/(2*x))<br />        x=y<br />        dif=abs(x-y)</code></dd></dl><br /><br />es decir primero haces x=y y luego restas x-y, por lo que el resultado siempre va a ser 0 y el while solo se ejecutará una vez, mejor haz la asignación x=y después de calcular dif:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def aproximar(m):<br />    x = 1.0<br />    dif = 1<br />    while dif &gt; 0.000001:<br />        y = x-(((x**2)-m)/(2*x))<br />        dif = abs(x-y)<br />        x = y<br />    return(x)<br /><br />sol = aproximar(int(raw_input(&quot;Introduzca el número cuya raíz desea aproximar: &quot;)))<br />print &quot;El resultado es:&quot;, sol</code></dd></dl><br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mié Dic 15, 2010 8:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maier91]]></name></author>
<updated>2010-12-15T19:52:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4597#p4597</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4597#p4597"/>
<title type="html"><![CDATA[Re: problema con 1 ejercicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4597#p4597"><![CDATA[
XD pues no te diria que no a no de las claees porq ando bastant deseperada con esto de la programacion jajaj. Ya terminado la funcion y ya me sale aqui te lo dejo . gracias por todo<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def raiz(m):<br />    <br />    n=1<br />    x=1<br />    <br />    while n&lt;=inter:<br />        y=x-(((x**2)-m)/(2*x))<br />        x=y<br />        n=n+1<br />    return(x)    <br /><br />print(&quot;Vamos a aproximar el valor de la raiz de un numero cualquiera utilizando el metodo de newton-rapshon&quot;)<br />m=float(input(&quot;Introduce el valor que quires aproximar&quot;))<br />inter=int(input(&quot;Introduce el numero de interacciones que quieres realizar&quot;))<br />print(&quot;El resultado es&quot;)<br />print(raiz(m))<br /><br /><br />def aproximar(m):<br />    x=1<br />    dif=100<br />    <br />    while dif&gt;0.000001:<br />        <br />        y=x-(((x**2)-m)/(2*x))<br />        x=y<br />        dif=abs(x-y)<br />        <br />    <br />        <br />    return(x)<br /><br />m=float(input(&quot;Introduce el valor que quires aproximar&quot;))<br />print(&quot;El resultado es:&quot;,aproximar(m))<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2354">maier91</a> — Mié Dic 15, 2010 7:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-12T20:52:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4570#p4570</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4570#p4570"/>
<title type="html"><![CDATA[Re: problema con 1 ejercicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4570#p4570"><![CDATA[
Ah que eres una chica, haber empezado por ahí, si quieres te doy clases particulares de programación o lo que sea... buff no me hagas caso, que es que en telemática nos faltan muchas chicas xDD.<br /><br />Vas bastante bien encaminada solo que:<br /><br />- Te falta un 0 en 0.00001, sería 0.000001 según el enunciado.<br />- El while sería &gt; 0.000001, no &lt;.<br />- Tienes que retornar x no n.<br />- Puedes borrar todas las n que usas.<br /><br />Te dan una pista del mcd, que todavía no se para que sirve en el código, asi que no sé si habrá que implementar algo del mcd en el código o no. Ya lo miraré con más detenimiento.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Dom Dic 12, 2010 8:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maier91]]></name></author>
<updated>2010-12-12T20:13:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4568#p4568</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4568#p4568"/>
<title type="html"><![CDATA[Re: problema con 1 ejercicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4568#p4568"><![CDATA[
gracias por resolverme el problema, la parte deabajo podria ser algo asi o voy muy desencaminada:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def aproximar(m):<br />    x=1<br />    y=0<br />    n=1<br />    while abs(x-y)&lt;0.00001:<br />        y=x-(((x**2)-m)/(2*x))<br />        x=y<br />        n=n+1<br />        <br />    return(n)<br /><br />m=float(input(&quot;Introduce el valor que quires aproximar&quot;))<br />print(&quot;El resultado es:&quot;,aproximar(m))</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2354">maier91</a> — Dom Dic 12, 2010 8:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2010-12-12T19:51:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4567#p4567</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4567#p4567"/>
<title type="html"><![CDATA[Re: problema con 1 ejercicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4567#p4567"><![CDATA[
Tu único problema es que dentro del bucle while has hecho y=x en lugar de x=y. Aquí te dejo mi código (que es un poco más compacto) para el primer apartado del ejercicio. Intenta hacer tu el segundo, que lo bonito de programar es pensar.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def raiz(m):<br />   x = 1.0<br />   for j in range(1, 6):<br />      x = x -(((x**2)-m)/(2*x))<br />   return x<br /><br />sol = raiz(int(raw_input(&quot;Introduzca el número cuya raíz desea aproximar: &quot;)))<br />print &quot;El resultado es: &quot;, sol</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Dom Dic 12, 2010 7:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maier91]]></name></author>
<updated>2010-12-12T18:02:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4566#p4566</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4566#p4566"/>
<title type="html"><![CDATA[problema con 1 ejercicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=958&amp;p=4566#p4566"><![CDATA[
tENGO que escibir  un programa en python iterativo que aproxime el valor (m)*1/2, para un valor de m introducido<br />por el usuario, mediante el cálculo de las raíces de la función f(x) = x2 .. m utilizando<br />el método de Newton-Raphson. El punto de partida será x0 = 1 y el número de iteraciones a<br />realizar 5. sabiendo que:<br />mcd(a,b)=mcd(b,a%b)<br />Modifica el programa para que el número de iteraciones que se realicen sean las necesarias<br />para asegurar que el resultado en una iteración es muy similar al de la iteración anterior. Entenderemos<br />que dos resultados son muy similares entre sí, si se cumple jxn ..xn..1j &lt; 0;000001.<br />Utiliza la función abs() de python para calcular el valor absoluto. ESto es lo q hecho pero no me sale si alguien me puede ayudar<br /><br />  <dl class="codebox"><dt>Code: </dt><dd><code>def raiz(m):<br />       <br />        n=1<br />        x=1<br />       <br />        while n&lt;=inter:<br />            y=x-(((x**2)-m)/(2*x))<br />            y=x<br />            n=n+1<br />        return(x)   <br /><br />    print(&quot;Vamos a aproximar el valor de la raiz de un numero cualquiera utilizando el metodo de newton-rapshon&quot;)<br />    m=float(input(&quot;Introduce el valor que quires aproximar&quot;))<br />    inter=int(input(&quot;Introduce el numero de interacciones que quieres realizar&quot;))<br />    print(&quot;El resultado es&quot;)<br />    print(raiz(m))</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2354">maier91</a> — Dom Dic 12, 2010 6:02 pm</p><hr />
]]></content>
</entry>
</feed>