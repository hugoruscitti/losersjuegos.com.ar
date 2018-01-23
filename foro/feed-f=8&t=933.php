<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=933" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-19T19:07:32+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=933</id>
<entry>
<author><name><![CDATA[alfredo23]]></name></author>
<updated>2010-11-19T19:07:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=933&amp;p=4437#p4437</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=933&amp;p=4437#p4437"/>
<title type="html"><![CDATA[metodo de newton-raphson]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=933&amp;p=4437#p4437"><![CDATA[
Escribe un programa en python iterativo que aproxime el valor (m)*1/2, para un valor de m introducido<br />por el usuario, mediante el cálculo de las raíces de la función f(x) = x2 .. m utilizando<br />el método de Newton-Raphson. El punto de partida será x0 = 1 y el número de iteraciones a<br />realizar 5. sabiendo que:<br />mcd(a,b)=mcd(b,a%b)<br />Modifica el programa para que el número de iteraciones que se realicen sean las necesarias<br />para asegurar que el resultado en una iteración es muy similar al de la iteración anterior. Entenderemos<br />que dos resultados son muy similares entre sí, si se cumple jxn ..xn..1j &lt; 0;000001.<br />Utiliza la función abs() de python para calcular el valor absoluto.<br /><br />####Soy nuevo en en esto de programar y no se como reali9zar el progrAMA ojala alguien me pudiera ayudar. muchisimas graxcias e tratado de hacerlo pero me acaba de cuadrar bien.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def raiz(m):<br />    <br />    n=1<br />    x=1<br />    <br />    while n&lt;=inter:<br />        y=x-(((x**2)-m)/(2*x))<br />        y=x<br />        n=n+1<br />    return(x)    <br /><br />print(&quot;Vamos a aproximar el valor de la raiz de un numero cualquiera utilizando el metodo de newton-rapshon&quot;)<br />m=float(input(&quot;Introduce el valor que quires aproximar&quot;))<br />inter=int(input(&quot;Introduce el numero de interacciones que quieres realizar&quot;))<br />print(&quot;El resultado es&quot;)<br />print(raiz(m))</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2343">alfredo23</a> — Vie Nov 19, 2010 7:07 pm</p><hr />
]]></content>
</entry>
</feed>