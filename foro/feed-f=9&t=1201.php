<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1201" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-10T02:42:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1201</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-07-10T02:42:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5710#p5710</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5710#p5710"/>
<title type="html"><![CDATA[Re: Colisión linea - rectangulo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5710#p5710"><![CDATA[
Hola, hace tiempo que no comentaba pero he estado pendiente. mira te dejo un código que use para manejar colisiones con objetos que tienen forma arbitraria.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />//--------------------LineIntersection2D-------------------------<br />//<br />//   Given 2 lines in 2D space AB, CD this returns true if an<br />//   intersection occurs.<br />//<br />//-----------------------------------------------------------------<br />#include&lt;math_extra.h&gt;<br />#include&lt;vector&gt;<br />inline bool LineIntersection2D(punto A,<br />                               punto B,<br />                               punto C,<br />                               punto D)<br />{<br />  double rTop = (A.y-C.y)*(D.x-C.x)-(A.x-C.x)*(D.y-C.y);<br />  double sTop = (A.y-C.y)*(B.x-A.x)-(A.x-C.x)*(B.y-A.y);<br /><br />   double Bot = (B.x-A.x)*(D.y-C.y)-(B.y-A.y)*(D.x-C.x);<br /><br />  if (Bot == 0)//parallel<br />  {<br />    return false;<br />  }<br /><br />  double invBot = 1.0/Bot;<br />   double r = rTop * invBot;<br />   double s = sTop * invBot;<br /><br />   if( (r &gt; 0) &amp;&amp; (r &lt; 1) &amp;&amp; (s &gt; 0) &amp;&amp; (s &lt; 1) )<br />  {<br />    //lines intersect<br />    return true;<br />  }<br /><br />  //lines do not intersect<br />  return false;<br />}<br /><br /><br />inline bool ObjectIntersection2D(const std::vector&lt;punto&gt;&amp; object1,<br />                                 const std::vector&lt;punto&gt;&amp; object2)<br />{<br />  //test each line segment of object1 against each segment of object2<br />  for (unsigned int r=0; r&lt;object1.size()-1; ++r)<br />  {<br />    for (unsigned int t=0; t&lt;object2.size()-1; ++t)<br />    {<br />      if (LineIntersection2D(object2&#91;t&#93;,<br />                             object2&#91;t+1&#93;,<br />                             object1&#91;r&#93;,<br />                             object1&#91;r+1&#93;))<br />      {<br />        return true;<br />      }<br />    }<br />  }<br /><br />  return false;<br />}<br /><br />inline bool Pointinbox(punto point, punto p1, punto p2)<br />{<br /><br />  return (point.x&gt;p1.x &amp;&amp; point.x&lt;p2.x &amp;&amp; point.y&gt;p1.y &amp;&amp; point.y&lt;p2.y);<br /><br /><br /><br />}<br /></code></dd></dl><br />La estructura punto solo contiene 2 enteros X, Y. Fíjate que la función interesante aquí es la de ObjectIntersection2D pues determina si se produjo una colisión entre dos objetos, un objeto no es mas que un conjunto de puntos, así puedes definir una linea y un rectángulo, llamas a la función y te dirá si hubo colisión.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Jul 10, 2011 2:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[midder]]></name></author>
<updated>2011-07-05T19:03:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5703#p5703</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5703#p5703"/>
<title type="html"><![CDATA[Re: Colisión linea - rectangulo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5703#p5703"><![CDATA[
Bueno estuve trabajando un poco en el tema y he conseguido sacar algo, no saca todos los posibles casos, pero sí los que me hacen falta. <br /><pre class="prettyprint">def line_rectangle_collision&#40;self, line, rect&#41;:<br />        <br />        #Colisiones eje X<br />        #Atraviesa verticalmente el rectangulo, con los extremos fuera<br />        if &#40;min&#40;line.x1, line.x2&#41; &gt;= rect.x and min&#40;line.x1, line.x2&#41; &lt;= rect.x + rect.w&#41; and \<br />        &#40;min&#40;line.y1, line.y2&#41; &lt;= rect.y and max&#40;line.y1, line.y2&#41; &gt;= rect.y + rect.h&#41;:<br />            return True<br />        #Atraviesa verticalmente el rectangulo, con el extremo inferior fuera<br />        if &#40;min&#40;line.x1, line.x2&#41; &gt;= rect.x and min&#40;line.x1, line.x2&#41; &lt;= rect.x + rect.w&#41; and \<br />        &#40;min&#40;line.y1, line.y2&#41; &gt;= rect.y and min&#40;line.y1, line.y2&#41; &lt;= rect.y + rect.h&#41;:<br />            return True<br />        #Atraviesa verticalmente el rectangulo, con el extremo superior fuera<br />        if &#40;max&#40;line.x1, line.x2&#41; &gt;= rect.x and max&#40;line.x1, line.x2&#41; &lt;= rect.x + rect.w&#41; and \<br />        &#40;max&#40;line.y1, line.y2&#41; &gt;= rect.y and max&#40;line.y1, line.y2&#41; &lt;= rect.y + rect.h&#41;:<br />            return True<br />            <br />        #Colisiones eje Y<br />        #Atraviesa horizontalmente el rectangulo, con los dos extremos fuera<br />        if &#40;min&#40;line.y1, line.y2&#41; &gt;= rect.y  and min&#40;line.y1, line.y2&#41; &lt;= rect.y + rect.h&#41; and \<br />        &#40;min&#40;line.x1, line.x2&#41; &lt;= rect.x and max&#40;line.x1, line.x2&#41; &gt;= rect.x + rect.w&#41;:<br />            return True<br />        #Atraviesa horizontalmente el rectangulo, con el extremo derecho fuera<br />        if &#40;min&#40;line.y1, line.y2&#41; &gt;= rect.y  and min&#40;line.y1, line.y2&#41; &lt;= rect.y + rect.h&#41; and \<br />        &#40;min&#40;line.x1, line.x2&#41; &gt;= rect.x and min&#40;line.x1, line.x2&#41; &lt;= rect.x + rect.w&#41;:<br />            return True          <br />        #Atraviesa horizontalmente el rectangulo, con el extremo izquierdo fuera<br />        if &#40;max&#40;line.y1, line.y2&#41; &gt;= rect.y  and max&#40;line.y1, line.y2&#41; &lt;= rect.y + rect.h&#41; and \<br />        &#40;max&#40;line.x1, line.x2&#41; &gt;= rect.x and max&#40;line.x1, line.x2&#41; &lt;= rect.x + rect.w&#41;:<br />            return True<br /><br />        return False</pre><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2386">midder</a> — Mar Jul 05, 2011 7:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[midder]]></name></author>
<updated>2011-07-04T08:55:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5699#p5699</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5699#p5699"/>
<title type="html"><![CDATA[Colisión linea - rectangulo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1201&amp;p=5699#p5699"><![CDATA[
Muy buenas.<br /><br />Llevo tiempo siguiendo este foro y es la primera vez que escribo. Así que ahí va la duda:<br /><br />El caso es que tengo un tipo linea en la que almaceno los puntos de los extremos, en mi caso son (x1, y1) y (x2, y2). La duda me llega cuando quiero saber si esa linea esta colisionando con un rectángulo (tipo rect de pygame). He probado distintas formas de hacerlo, pero no doy con la clave.<br />Así que por aquí lo dejo a ver si a alguien se le ocurre.<br /><br />Muchas gracias, un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2386">midder</a> — Lun Jul 04, 2011 8:55 am</p><hr />
]]></content>
</entry>
</feed>