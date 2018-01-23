<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=505" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-06T08:27:52+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=505</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-03-06T08:27:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2229#p2229</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2229#p2229"/>
<title type="html"><![CDATA[Matrices y pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2229#p2229"><![CDATA[
Hola, sería conveniente que pusieras el texto entre las etiquetas 'code'.<br />He visto que en el código especificas un máximo a la pila. Quizás te interese esto: <!-- m --><a class="postlink" href="http://c.conclase.net/edd/index.php?cap=000">http://c.conclase.net/edd/index.php?cap=000</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Vie Mar 06, 2009 8:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-03-06T02:50:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2227#p2227</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2227#p2227"/>
<title type="html"><![CDATA[Matrices y pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2227#p2227"><![CDATA[
Hola,<br /><br />En el codigo de la funcion pop, hay una sentencia que disminuye el contador pero dicha sentencia esta por debajo del return, haciendo que esa linea no se ejecute (y el contador no disminuya) Una posible solucion seria:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int poppila&#40;Tpila *pila&#41;<br />&#123;<br />  --pila-&gt;cimpila;<br />  return pila-&gt;pilavector&#91;pila-&gt;cimpila+1&#93;;<br />&#125;<br /></code></dd></dl><br /><br />Para hacer una pila de matrices debes cambiar esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int pilavector &#91;MAXPILA&#93;; </code></dd></dl><br /><br />por esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>MATRIZ pilavector &#91;MAXPILA&#93;; </code></dd></dl><br /><br />donde MATRIZ es el tipo de tu matriz. <br /><br />Existe otras formas para crear pilas totalmente genericas utilizando &quot;punteros a void&quot;, o usando templates (solo para C++).<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Mar 06, 2009 2:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johndoe90]]></name></author>
<updated>2009-03-05T23:15:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2225#p2225</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2225#p2225"/>
<title type="html"><![CDATA[Matrices y pilas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=505&amp;p=2225#p2225"><![CDATA[
Hola, estoy estudiando este interesante tema de pilas y colas. He hecho un ejercicio que devuelve al revés una seria de numeros, me gustaria saber si esta bien, en especial las funciones. Adjunto el codigo en C. Gracias.<br /><br />#include &lt;stdio.h&gt;<br />#define MAXPILA 5<br /><br />typedef struct<br />{<br />int pilavector[MAXPILA];<br />int cimpila;<br />}Tpila;<br /><br />void crear_pila(Tpila *pila)<br />{<br />pila-&gt;cimpila=-1;<br />}<br /><br />int pila_vacia(Tpila pila)<br />{<br />if (pila.cimpila=-1)<br />{<br />return 1;<br />}<br />else<br />{<br />return 0;<br />}<br />}<br /><br />int pila_llena(Tpila pila)<br />{<br />return (pila.cimpila==MAXPILA-1);<br />}<br /><br /><br />void pushpila(Tpila *pila, int n)<br />{<br />pila-&gt;pilavector [++pila-&gt;cimpila] = n;<br />}<br /><br />int poppila(Tpila *pila)<br />{<br />return pila-&gt;pilavector[pila-&gt;cimpila];<br />pila-&gt;pilavector[--pila-&gt;cimpila];<br />}<br /><br /><br /><br />void main ()<br />{<br />Tpila mi_pila;<br />int n;<br /><br />crear_pila (&amp;mi_pila);<br />printf (&quot;Escribe el primer número de la secuencia\n&quot;);<br />scanf (&quot;%d&quot;,&amp;n);<br />while (n!=0)<br />{<br />if (!pila_llena (mi_pila))<br />pushpila (&amp;mi_pila,n);<br />else<br />printf (&quot;La pila ya está llena\n&quot;);<br />printf (&quot;Escribe el siguiente número de la secuencia\n&quot;);<br />scanf (&quot;%d&quot;,&amp;n);<br />}<br />printf(&quot;Ahora los números al revés\n&quot;);<br />while (!pila_vacia (mi_pila))<br />{<br />poppila(&amp;mi_pila);<br />printf (&quot;%d&quot;,&amp;n);<br />}<br />}<br /><br />Tengo otra duda, para meter matrices de este tipo en una pila como podria ser? Adjunto la siguiente estructura con la que trabajo.<br /><br />#include&lt;stdio.h&gt;<br />#define MAXF 5<br />#define MAXC 5<br />#define MAXP 20<br />#define MAXD 10<br />#define MAXPILA 5<br /><br /><br />typedef char Tpalabra[MAXP];<br />typedef char Tcarnet[MAXD];<br /><br />typedef struct<br />{<br />Tpalabra nombre;<br />int edad;<br />Tcarnet dni;<br />}Tpersona;<br /><br />typedef struct<br />{<br />Tpersona persona[MAXF][MAXC];<br />float porciento;<br />Tpalabra id;<br />}Ttren;<br /><br />typedef struct<br />{<br />int pilavector [MAXPILA];<br />int cimpila;<br />}Tpila;<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2079">johndoe90</a> — Jue Mar 05, 2009 11:15 pm</p><hr />
]]></content>
</entry>
</feed>