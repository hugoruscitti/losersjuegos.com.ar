<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=563" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-18T00:35:00+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=563</id>
<entry>
<author><name><![CDATA[deagleparty]]></name></author>
<updated>2009-07-18T00:35:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2775#p2775</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2775#p2775"/>
<title type="html"><![CDATA[problema con sqrt y con math.h]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2775#p2775"><![CDATA[
El problema es que estan definidas en la libmath (no en libc), y gcc no las incluye por defecto, mientras que g++ lo hace automaticamente.<br /> <br />Si utilizas gcc, deberias ejecutar:  <br />         gcc -o test test.c -lm<br /><br />Si usas g++, no hace falta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2126">deagleparty</a> — Sab Jul 18, 2009 12:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-05-22T23:20:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2555#p2555</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2555#p2555"/>
<title type="html"><![CDATA[problema con sqrt y con math.h]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2555#p2555"><![CDATA[
Cuando un problema como este ocurre, una<br />buena idea es probar con un ejemplo mas<br />pequeño.<br /><br />Te dejo un programa que usa &quot;sqrt&quot; y es mas<br />pequeño y fácil de probar. Si este programa te<br />funciona, tendrías que ver alterar tu directiva<br />&quot;include&quot; o el tipo de dato que le envías a la<br />función.<br /><br />Bueno, te dejo el código (archivo test.cc):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;math&gt;<br />#include &lt;stdio&gt;<br /><br />int main&#40;int argc, char const* argv&#91;&#93;&#41;<br />&#123;<br />    double a = 4;<br /><br />    printf&#40;&quot;La raiz cuadrada de %f es %f\n&quot;, a, sqrt&#40;a&#41;&#41;;<br /><br />    return 0;<br />&#125;<br /></code></dd></dl><br /><br />su makefile, para que compilar sea mas sencillo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>CC=g++<br /><br />test:test.o<br /></code></dd></dl><br /><br />y lo que imprime el programa en pantalla cuando<br />lo ejecutas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>La raiz cuadrada de 4.000000 es 2.000000<br /></code></dd></dl><br /><br />Espero te sirva la prueba, sino avisanos y lo<br />veo de nuevo.<br /><br />PD: por favor la próxima vez intenta incluir la función<br />&quot;main&quot; y el mensaje de error, así todos podemos ver<br />el problema con mayor facilidad.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie May 22, 2009 11:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-05-22T06:01:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2554#p2554</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2554#p2554"/>
<title type="html"><![CDATA[problema con sqrt y con math.h]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2554#p2554"><![CDATA[
¿Estarás intentando utilizar &lt;math&gt; o &lt;cmath&gt;?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie May 22, 2009 6:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-05-14T18:25:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2546#p2546</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2546#p2546"/>
<title type="html"><![CDATA[problema con sqrt y con math.h]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=563&amp;p=2546#p2546"><![CDATA[
hola, estoy escribiendo algunas funciones y estructuras de vectores con las que usar vectores en los juegos despues sin tener que preocuparme con las operaciones con los vectores, el problema esta en que necesito hacer una raiz cuadrada, intento hacerlo con la funcion sqrt que segun tengo entendido esta definida en el include math.h pero al compilar me dice que es la primera referencia a sqrt y que no esta definida previamente, el codigo es el siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;vectores.h&quot;<br />#include &lt;math&gt;<br /><br />int componentes_vector&#40;vector *a&#41;&#123;<br />   register long int i=0;<br />   for&#40;i=0; i&lt;3&gt;tipo == entero&#41;&#123;<br />         a-&gt;array.componentes&#91;i&#93;= &#40;a-&gt;array.extremo&#91;i&#93; - a-&gt;array.origen&#91;i&#93;&#41;;<br />      &#125;else&#123;<br />         a-&gt;array_decimal.componentes&#91;i&#93;= &#40;a-&gt;array_decimal.extremo&#91;i&#93; - a-&gt;array_decimal.origen&#91;i&#93;&#41;;<br />      &#125;<br />   &#125;<br />   return 0;<br />&#125;<br /><br />double modulo_vector&#40;vector *a&#41;&#123;<br />register float r=0;<br />if&#40;a-&gt;tipo == entero&#41;&#123;<br />   register long int x, y, z;<br />   x= &#40;a-&gt;coordenadas.componentes.x * a-&gt;coordenadas.componentes.x&#41;;<br />   y= &#40;a-&gt;coordenadas.componentes.y * a-&gt;coordenadas.componentes.y&#41;;<br />   z= &#40;a-&gt;coordenadas.componentes.z * a-&gt;coordenadas.componentes.z&#41;;<br />   r= sqrt&#40;x+y+z&#41;;<br />&#125;else&#123;<br />   register float x, y, z;<br />   x= &#40;a-&gt;coordenadas_decimal.componentes.x * a-&gt;coordenadas_decimal.componentes.x&#41;;<br />   y= &#40;a-&gt;coordenadas_decimal.componentes.y * a-&gt;coordenadas_decimal.componentes.y&#41;;<br />   z= &#40;a-&gt;coordenadas_decimal.componentes.z * a-&gt;coordenadas_decimal.componentes.z&#41;;<br />   r= sqrt&#40;x+y+z&#41;;<br />&#125;<br />return r;<br />&#125;</code></dd></dl><br /><br />¿cual es el problema de este error y como puedo evitar este problema?<br /><br />Edito: El error lo da solamente cuando escribo en la terminal cada linea necesaria para compilar el codigo a mano, si la misma linea para compilarlo esta en un makefile lo cimpila sin dar error ¿a que se debe esto?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Jue May 14, 2009 6:25 pm</p><hr />
]]></content>
</entry>
</feed>