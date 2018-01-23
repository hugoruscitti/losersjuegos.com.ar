<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=314" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-05-05T19:39:18+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=314</id>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-05-05T19:39:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1337#p1337</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1337#p1337"/>
<title type="html"><![CDATA[Funciones Lambda?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1337#p1337"><![CDATA[
Muchas gracias, ahora entiendo, entonces, solo es por comodidad, aunque no veo que te ahora demasiadas molestias la verdad.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Lun May 05, 2008 7:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-05-04T23:12:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1326#p1326</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1326#p1326"/>
<title type="html"><![CDATA[Funciones Lambda?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1326#p1326"><![CDATA[
<blockquote><div><cite>Nato escribió:</cite><br />Gracias Mindro, pero ya había leído eso, y no sea que se refiere en lo de &quot;no puede contener ordenes y ni más de una expresión&quot;, ahí específicamente esta mi duda, también me gustaría que me dijerais, porque usar una función lambda y no una normal.<br /></div></blockquote><br /><br />Como seguramente has observado, el concepto de funciones lambda es bastante<br />importante para muchos lenguajes... pero en Python el concepto de función<br />lambda no es tan crucial; lambda se utiliza en Python principalmente para<br />definir funciones en una sola linea y sin nombre. Un atajo ideal para<br />casos donde no necesitas re-utilizar código.<br /><br />Te doy un ejemplo: Imagina que tienes un conjunto de números en una lista,<br />pero solo deseas conoces los números pares de esa lista. Una forma de<br />seleccionarlos es mediante la función &quot;filter&quot; y una función tradicional:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def es_par&#40;x&#41;:<br />    return x % 2 == 0<br /><br />numeros = &#91;1, 2, 3, 4, 5, 6&#93;<br />print filter&#40;es_par, numeros&#41;</code></dd></dl><br /><br />pero, ¿como hacer esto con una función lambda?:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>numeros = &#91;1, 2, 3, 4, 5, 6&#93;<br /><br />print filter&#40;lambda x: x % 2 == 0, numeros&#41;</code></dd></dl><br /><br />en muchos casos esta segunda forma es la preferida solo por comodidad, ese<br />es el motivo para usar funciones 'lambda' en python, una cuestión de<br />comodidad.<br /><br />Ten en cuenta que en Python esta contrucción lambda es muy<br />simple, no permite anidar condiciones &quot;if&quot; o similares.<br /><br />Saludos.<br /><br />pd: en el ejemplo anterior se podría usar una lista por comprensión, pero me<br />ha parecido mas ilustrativo usar 'filter'.<br /><br /><br /><blockquote><div><cite>Nato escribió:</cite><br />EDIT<br /><br />Se me olvidaba, en Ubuntu siempre tengo que poner la dirección completa de un archivo externo? es que si por ejemplo tengo un archivo python que llama a una imagen en el mismo directorio, no me basta solo con poner el nombre de la imagen, si no que tengo que poner toda la ruta hasta la imagen.<br /></div></blockquote><br /><br />no, debería funcionar correctamente de las dos formas. Tanto<br />en Ubuntu como en cualquier otro GNU/Linux. Sería bueno que<br />generes un nuevo mensaje con tu consulta y un programa de <br />ejemplo, seguramente el problema esté en otro lado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom May 04, 2008 11:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-05-04T13:48:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1323#p1323</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1323#p1323"/>
<title type="html"><![CDATA[Funciones Lambda?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1323#p1323"><![CDATA[
Gracias Mindro, pero ya había leído eso, y no sea que se refiere en lo de &quot;no puede contener ordenes y ni más de una expresión&quot;, ahí específicamente esta mi duda, también me gustaría que me dijerais, porque usar una función lambda y no una normal.<br /><br />EDIT<br /><br />Se me olvidaba, en Ubuntu siempre tengo que poner la dirección completa de un archivo externo? es que si por ejemplo tengo un archivo python que llama a una imagen en el mismo directorio, no me basta solo con poner el nombre de la imagen, si no que tengo que poner toda la ruta hasta la imagen.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Dom May 04, 2008 1:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mindro]]></name></author>
<updated>2008-05-04T13:40:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1322#p1322</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1322#p1322"/>
<title type="html"><![CDATA[Funciones Lambda?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1322#p1322"><![CDATA[
<blockquote class="uncited"><div><br />En general, una función lambda es una función que toma cualquier número de argumentos (incluso argumentos opcionales) y devuelve el valor de una expresión simple. Las funciones lambda no pueden contener órdenes, y no pueden contener tampoco más de una expresión. No intente exprimir demasiado una función lambda; si necesita algo más complejo, defina en su lugar una función normal y hágala tan larga como quiera.<br /></div></blockquote><br /><br />Sacado de <a href="http://es.diveintopython.org/apihelper_lambda.html" class="postlink">http://es.diveintopython.org/apihelper_lambda.html</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1899">Mindro</a> — Dom May 04, 2008 1:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-05-03T20:27:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1316#p1316</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1316#p1316"/>
<title type="html"><![CDATA[Funciones Lambda?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=314&amp;p=1316#p1316"><![CDATA[
He estado buscando información acerca de que son las funciones lambda, pero no me ha aclarado nada, no entiendo lo que dicen, es un poco lioso, alguien me lo explica de forma sencilla? yo lo quiero saber para Python ya que he visto que también están en Lisp, no se si difieren en algo, pero lo aclaro por si acaso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Sab May 03, 2008 8:27 pm</p><hr />
]]></content>
</entry>
</feed>