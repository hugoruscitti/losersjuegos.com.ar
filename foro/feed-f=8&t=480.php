<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=480" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-13T14:25:10+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=480</id>
<entry>
<author><name><![CDATA[leo durandal]]></name></author>
<updated>2009-02-13T14:25:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2101#p2101</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2101#p2101"/>
<title type="html"><![CDATA[Dos dudas en python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2101#p2101"><![CDATA[
Muchas gracias por las respuestas, ya no tengo dudas respecto a esos dos temas.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2058">leo durandal</a> — Vie Feb 13, 2009 2:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-10T12:13:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2085#p2085</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2085#p2085"/>
<title type="html"><![CDATA[Dos dudas en python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2085#p2085"><![CDATA[
El for de python normalmente lo que hace es recorrer algo. El range es un rango de números (por ejemplo [3, 4, 5]). Entonces, simplificado sería:<br /><dl class="codebox"><dt>Code: </dt><dd><code>for i in &#91;3, 4, 5&#93;:<br />    print i<br />&#40;y devuelve&#41;<br />3<br />4<br />5<br /></code></dd></dl><br />En realidad esto se puede escribir con un while. El for ,en este caso, solo serviría para simplificar.<br /><dl class="codebox"><dt>Code: </dt><dd><code>i = 0<br />rango = &#91;3, 4, 5&#93;<br />tamanyo_rango = len&#40;rango&#41;<br />while i &lt; tamanyo_rango:<br />    print rango&#91;i&#93;<br />    i = i + 1 <br />&#40;y devuelve&#41;<br />3<br />4<br />5<br /></code></dd></dl><br /><br />Espero que te haya servido, saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Feb 10, 2009 12:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-10T09:57:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2080#p2080</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2080#p2080"/>
<title type="html"><![CDATA[Dos dudas en python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2080#p2080"><![CDATA[
En cuanto a lo del for..in:<br />Si has trabajado con otros lenguajes(pascal o visual basic...,cosas que enseñan en mi universidad por desgracia), lo habras visto del estilo for i:=1 to 20........(pascal)Esto lo que hace es repetir el código dentro del bucle tantas veces como tu le indiques en el parametro range:<br />Ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>for i in range&#40;3,6&#41;:<br />      print i<br /></code></dd></dl><br /><br />daria una salida en pantalla de: 3 4 5 6<br /><br />Espero haberlo explicado bien<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Feb 10, 2009 9:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-02-10T00:40:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2079#p2079</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2079#p2079"/>
<title type="html"><![CDATA[Dos dudas en python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2079#p2079"><![CDATA[
Ok, veré si puedo explicarte:<br /><dl class="codebox"><dt>Code: </dt><dd><code>def saludar&#40;tu_nombre&#41;<br />    print &quot;Hola&quot;, tu_nombre<br /></code></dd></dl><br />Cuando abres tu programa, estas lineas de código no se ejecutan,<br />Python solo revisa si no tienes errores de sintaxis, pero no las ejecuta.<br /><br />Para que la función se ejecute debes &quot;llamarla&quot; en alguna parte del<br />programa:<br /><br />&gt;&gt;&gt; saludar(&quot;Javier&quot;)<br />Hola Javier<br /><br />Lo que ocurrio fue:<br /><br />1.- El programa detuvo su ejecución y se regreso a la parte donde<br />tienes tu función.<br />2.- def saludar(tu_nombre) # La función pide que le pases al menos<br />un objeto, que podria ser un numero, cadena o lo que sea:<br />saludar(1), saludar([1, 2, 3]), etc<br />3.- Lo que le hayas puesto entre parentesis se almacena en una<br />variable &quot;desechable&quot;, en este caso se llamará tu_nombre, que pasa<br />a tomar el valor que hayas puesto entre los parentesis al momento<br />de llamar la función:<br />&gt;&gt;&gt; saludar(&quot;Javier&quot;), es como si hubieramos escrito &gt;&gt;&gt; tu_nombre = &quot;Javier&quot;<br />4.- Ya con sus variablers &quot;desechables&quot;, se ejecuta el resto del codigo de la funcion:<br />&gt;&gt;&gt; print &quot;Hola&quot;, tu_nombre # recuerda, tu_nombre = &quot;Javier&quot;<br />5.- Pues ya, se temina la ejecución de la función y regresamos a<br />ejecutar el programa desde donde se hizo la llamada<br /><br />Te recomiendo que aprendas Python con este manual:<br /><!-- m --><a class="postlink" href="http://marmota.dlsi.uji.es/MTP/pdf/python.pdf">http://marmota.dlsi.uji.es/MTP/pdf/python.pdf</a><!-- m --><br />Hace un año comenze sin saber nada sobre programación, y ahora<br />ya estoy haciendome unos programas bien chulos...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Mar Feb 10, 2009 12:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leo durandal]]></name></author>
<updated>2009-02-09T23:34:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2078#p2078</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2078#p2078"/>
<title type="html"><![CDATA[Dos dudas en python]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=480&amp;p=2078#p2078"><![CDATA[
Pues en mi aprendizaje de python me ha surgido la primera dudad, una muy importante. Y se trata de las funciones, pues no entiendo nada, no se que hacen las funciones y como usarlas.<br /><br />Pues en el libro aparece esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def mi_funcion&#40;param1, param2&#41;: <br />    print param1 <br />    print param2</code></dd></dl><br /><br />Que supongo que es una función pero sin nada configurado, pero la verdad no entiendo nada. Y la otra vez mi papa (que supo programar) me explico algo sobre esto pero no lo entendí.<br /><br />Y la otra duda es sobre el bucle &quot;for... in&quot;. Tampoco entiendo lo que hace ni como se usa. <br /><br />Esas son mis dos dudas, ya que sin saber esto no puedo avanzar mas en el tema. Espero que me puedan ayudar y gracias de antemano.<br /><br />Saludos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2058">leo durandal</a> — Lun Feb 09, 2009 11:34 pm</p><hr />
]]></content>
</entry>
</feed>