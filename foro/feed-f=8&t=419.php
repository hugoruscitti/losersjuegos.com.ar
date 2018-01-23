<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=419" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-12-16T23:17:20+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=419</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-12-16T23:17:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=419&amp;p=1812#p1812</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=419&amp;p=1812#p1812"/>
<title type="html"><![CDATA[Traductor de numeros a ingles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=419&amp;p=1812#p1812"><![CDATA[
jeje curioso, está bien! He visto que utilizas el módulo. Es un arma bastante potente. En concreto, se puede utilizar para dividir un número en dígitos. En tu caso:<br /><dl class="codebox"><dt>Code: </dt><dd><code>uno = numero%10<br />numero /= 10<br />cero = numero</code></dd></dl><br />No se... a mí me parece más elegante. Pero me gustaría que lo confirmase alguien con más experiencia en la programación.<br />Igualmente está bien saber las dos maneras.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Dic 16, 2008 11:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ingemar]]></name></author>
<updated>2008-12-15T01:54:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=419&amp;p=1805#p1805</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=419&amp;p=1805#p1805"/>
<title type="html"><![CDATA[Traductor de numeros a ingles]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=419&amp;p=1805#p1805"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code>np=&#91;&quot;Zero&quot;,&quot;One&quot;,&quot;Two&quot;,&quot;Three&quot;,&quot;Four&quot;,&quot;Five&quot;,&quot;Six&quot;,&quot;Seven&quot;,&quot;Eight&quot;,&quot;Nine&quot;,&quot;Ten&quot;&#93;<br />nd=&#91;&quot;None&quot;,&quot;Eleven&quot;,&quot;Twelve&quot;,&quot;Thriteen&quot;,&quot;Fourteen&quot;,&quot;Fifteen&quot;,&quot;Sixteen&quot;,&quot;Seventeen&quot;,&quot;Eighteen&quot;,&quot;Nineteen&quot;&#93;<br />ns=&#91;&quot;None&quot;,&quot;None&quot;,&quot;Twenty&quot;,&quot;Thrity&quot;,&quot;Fourty&quot;,&quot;Fifty&quot;,&quot;Sixty&quot;,&quot;Seventy&quot;,&quot;Eighty&quot;,&quot;Ninety&quot;,&quot;One-Hundred&quot;&#93;<br />print &quot;NUMEROS En INGLES&quot;<br />numero=input&#40;&quot;digite un Numero entre&#91;0-100&#93;: &quot;&#41;<br />if numero&gt;=0 and numero&lt;=10:<br />    print &quot;el numero en ingles es: &quot;, np&#91;numero&#93;<br />elif numero&gt;=11 and numero&lt;=19:<br />    numero%=10<br />    print &quot;el numero en ingles es: &quot;, nd&#91;numero&#93;<br />elif numero&gt;=20 and numero&lt;=100:<br />    if numero!=100:<br />        a=str&#40;numero&#41;<br />        cero=int&#40;a&#91;0&#93;&#41;<br />        uno=int&#40;a&#91;1&#93;&#41;<br />        print &quot;el numero en ingles es: &quot;, ns&#91;cero&#93;,&quot; &quot;,np&#91;uno&#93;<br />    else:<br />        numero/=10<br />        print &quot;el numero en ingles es: &quot;, ns&#91;numero&#93;<br />else:<br />    print &quot;no es ningun numero dentro del rango!!!&quot;</code></dd></dl><br /><br />quetal como la ven?  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1911">ingemar</a> — Lun Dic 15, 2008 1:54 am</p><hr />
]]></content>
</entry>
</feed>