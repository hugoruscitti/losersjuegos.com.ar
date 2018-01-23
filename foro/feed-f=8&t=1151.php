<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1151" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-15T12:35:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1151</id>
<entry>
<author><name><![CDATA[elzorro]]></name></author>
<updated>2011-05-15T12:35:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5547#p5547</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5547#p5547"/>
<title type="html"><![CDATA[Re: lista de listas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5547#p5547"><![CDATA[
wiii <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> gracias la verdad no se usar for entonces solo uso while y condicionales xD pero por lo menos ya podre dormir sin pensar en eso <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2434">elzorro</a> — Dom May 15, 2011 12:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-05-14T22:03:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5546#p5546</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5546#p5546"/>
<title type="html"><![CDATA[Re: lista de listas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5546#p5546"><![CDATA[
En realidad es un pequeño error de sintaxis.<br /><br />El código que creo que tú querías escribir era el siguiente.<br /><br /><pre class="prettyprint linenums">def flatten&#40;l&#41;:<br />    a=0<br />    b=[]<br />    while a&lt;len&#40;l&#41;:<br />        if l[a]!=[]:<br />            b=b+l[a]<br />        a=a+1<br />    return b</pre><br /><br />En este caso accedes a la lista contenida en el índice a. Al usar el operador +, estás sumando ambas listas.<br />Con ello, las unes y consigues que los elementos de ambas listas estén en la misma.<br />El error que cometías era crear una lista con el elemento del índice a, por lo que era una lista de listas lo que sumabas.<br /><br />Además, también me he dado cuenta de que no te hace falta comprobar si la lista está vacía. En el caso en el que l[a]<br />esté vacía, b quedará como estaba.<br /><br />Como consejo personal, te aconsejo que utilices bucles for para iterar la secuencia, el<br />código suele acabar en código más entendible.<br /><br /><pre class="prettyprint linenums">def flatten&#40;seq&#41;:<br />    b = []<br />    for s in seq:<br />        for e in s:<br />            b.append&#40;e&#41;<br />    return b</pre><br /><br />Y bueno, bienvenido al foro, espero que la pases bien y con esta comunidad <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab May 14, 2011 10:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[elzorro]]></name></author>
<updated>2011-05-14T20:40:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5545#p5545</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5545#p5545"/>
<title type="html"><![CDATA[lista de listas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1151&amp;p=5545#p5545"><![CDATA[
Hola de nuevo comunidad del foro jeje ahora tengo otra pregunta pero es algo mas sencillo, hace tiempo en la clase nos dieron un taller para realizar y me falto realizar solo un punto :S el tema es listas y ahora vemos matrices pero aun no he podido resolver el problema:<br /><br />Desarrollar una funcion que tome una lista de listas y retorne una lista sencilla con todos los elementos que<br /><br />flatten([[1], [2]]) retorna [1,2].<br /><br />bueno pues yo como soy novatisimo pense que las otras listas que estan dentro y no tienen nada son listas vacias [] y hice esto:<br /><pre class="prettyprint linenums">def flatten&#40;l&#41;:<br />    a=0<br />    b=[]<br />    while a&lt;len&#40;l&#41;:<br />        if l[a]!=[]:<br />            b=b+[l[a]]<br />        a=a+1<br />    return b</pre><br /><br />undi f5 para probar mi programa y puse el ejemplo y retorno lo mismo D:<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2434">elzorro</a> — Sab May 14, 2011 8:40 pm</p><hr />
]]></content>
</entry>
</feed>