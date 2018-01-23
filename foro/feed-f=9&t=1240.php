<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1240" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-08-24T02:34:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1240</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-08-24T02:34:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5848#p5848</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5848#p5848"/>
<title type="html"><![CDATA[Re: [AYUDA]Matriz de numeros]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5848#p5848"><![CDATA[
Ya veo lo que quieres hacer, y es el mismo algoritmo que te mostró Hugo, pero en tu aplicación tiene un inconveniente que se prueba 2 veces cada colisión veo que tienes una condición donde se prueba quien es mayor, eso causara que aun que se pruebe dos veces cada rectángulo solo se disminuirá una ves la velocidad, y funciona pero se puede hacer mejor, en el segundo for pon que el indice comience con el índice del for anterior así:<br /><br />for(int p = 0;p&lt; MAX-1;p++){<br />                               for(int i = p+1;i&lt;MAX;i++){<br />}<br />}<br /><br />esto causara que si tienes una lista<br />l=[1,2,3,4]<br />se comprobara así:<br />1-2<br />1-3<br />1-4<br />2-3<br />2-4<br />3-4<br /><br />Esto produce menos comparaciones y que el algoritmo sea mas rápido.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Ago 24, 2011 2:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-08-23T13:52:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5846#p5846</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5846#p5846"/>
<title type="html"><![CDATA[Re: [AYUDA]Matriz de numeros]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5846#p5846"><![CDATA[
Es cierto, no está claro... ¿será un for anidado?...<br /><br />Por ejemplo, el siguiente programa:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>lista = &#91;1, 2, 3, 4&#93;<br /><br />for x in lista:<br />    for y in lista:<br />        if x != y:<br />            print &quot;%s-%s&quot; %(x, y)</code></dd></dl><br /><br />produce este resultado:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>1-2<br />1-3<br />1-4<br />2-1<br />2-3<br />2-4<br />3-1<br />3-2<br />3-4<br />4-1<br />4-2<br />4-3</code></dd></dl><br /><br />¿es algo lo que estás buscando?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Ago 23, 2011 1:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-08-23T02:45:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5845#p5845</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5845#p5845"/>
<title type="html"><![CDATA[Re: [AYUDA]Matriz de numeros]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1240&amp;p=5845#p5845"><![CDATA[
Pero no entiendo, quieres hacer un programa? y si quieres hacer una formula, que es lo que quieres obtener al compararlos? cual sera el resultado?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Ago 23, 2011 2:45 am</p><hr />
]]></content>
</entry>
</feed>