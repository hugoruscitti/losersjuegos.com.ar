<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=576" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-06-23T09:29:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=576</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-23T09:29:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2625#p2625</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2625#p2625"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2625#p2625"><![CDATA[
Gracias por la informacion Geo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mar Jun 23, 2009 9:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-06-21T17:13:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2622#p2622</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2622#p2622"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2622#p2622"><![CDATA[
<blockquote><div><cite>lacabra25 escribió:</cite><br />Entiendo, sobrecarga de operadores solo en C++, solo una cosa, ¿seria posible tener la parte de los vectores junto con la sobrecarga de operadores en C++ y usarlo en codigo en C haciendo un includo de la cabecera C++ de los vectores y asi usarlos en otra parte de codigo que este en C (mezclar C con C++ en definitiva)?<br /></div></blockquote><br />No, no es posible. Aunque la programación orientada a objetos es posible en C, no lo es la adición de nuevos &quot;tipos&quot; como en C++. Puedes incluir código C en C++, pero no a la inversa.<br /><br /><blockquote><div><cite>lacabra25 escribió:</cite><br />y ¿como se realizaria la sobrecarga de operadores en C++?<br /></div></blockquote><br />Se realiza de manera similar a una función, con la característica particular de que se hace uso de la palabra <span style="font-weight: bold">operator</span>, algo como esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void operator*&#40; int escalar, MiVector&amp; v &#41; &#123;<br />   for &#40; int i = 0; i &lt; v.tamanio; i++ &#41; &#123;<br />      v.valores&#91; i &#93; *= escalar;<br />   &#125;<br />&#125;</code></dd></dl><br />En este caso, se ha sobrecargado el operador * para el caso en que tenga como parámetros un int y un tipo MiVector.<br /><br />Algunos detalles sobre la sobrecarga de operadores: Las funciones de sobrecarga pueden declararse como funciones miembro de una clase, o como funciones externas a la clase (funciones no miembro).<br />Cuando el tipo que se está definiendo (la clase), se empleará como parámetro izquierdo del operador (operadores binarios como +, -, *), puede ser una función miembro o no, mientras que, si será un parámetro del lado derecho, debe declararse como una función no miembro (externa a la clase).<br />En el código que puse, se trata de una función externa a la clase MiVector, pues el tipo MiVector se recibe como parámetro del lado derecho (escalar*MiVector), las variables tamanio y valores son miembros de la clase MiVector, siendo la primera un entero que indica el número de valores y la segunda un puntero a los valores de MiVector.<br />Debido a que las funciones que no son miembro de una clase no pueden acceder directamente a las variables miembro de dicha clase, si ambas variables (tamanio y valores) fueron declaradas como privadas en la clase MiVector, la función sobrecargada debe declararse como &quot;amiga&quot; de la clase para poder acceder a ellas como se está haciendo en el código que puse.<br /><br />Con variables privadas, la declaración de la clase MiVector sería más o menos así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class MiVector &#123;<br />   // la función debe ser &quot;amiga&quot; para poder acceder a las variables<br />   // miembro<br />   friend void operator*&#40; int escalar, MiVector&amp; v &#41;;<br /><br />private:<br />   int* valores;<br />   int tamanio;<br />&#125;;<br /></code></dd></dl><br />Y de esta forma con variables públicas:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class MiVector &#123;<br />   // las variables son públicas, no se necesita ninguna declaración<br />   // especial para que la función de sobrecarga acceda a las variables<br /><br />public:<br />   int* valores;<br />   int tamanio;<br />&#125;;<br /></code></dd></dl><br />Por supuesto, la declaración de la clase está incompleta, espero que se entienda el ejemplo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />Ahora, con la función de sobrecarga que escribimos, esto es válido:<br /><dl class="codebox"><dt>Code: </dt><dd><code>MiVector v;<br />int escalar = 2;<br /><br />escalar * v;<br /></code></dd></dl><br />pero esto no:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>v * escalar;</code></dd></dl><br /><br />Esto porque no se ha sobrecargado el operador * para que reciba un tipo MiVector como parámetro izquierdo y un int como parámetro derecho. Es decir, hay que sobrecargar dos veces el operador si deseamos que su funcionamiento sea conmutativo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />En internet hay muchos recursos para leer sobre sobrecarga de operadores, por ejemplo en C con clase: <!-- m --><a class="postlink" href="http://c.conclase.net/curso/index.php?cap=035">http://c.conclase.net/curso/index.php?cap=035</a><!-- m --><br /><br />Yo tengo un libro que recomiendo mucho para quienes deseamos aprender C++: C++ Cómo programar de Deitel, yo tengo la cuarta edición, que me gusta mucho pues la primera parte está dedicada a la programación estructurada (&quot;el C en C++&quot;), para luego continuar con las clases y la orientación a objetos (en la quinta edición cambió el enfoque, aunque no he tenido oportunidad de revisarla).<br /><br />Por último, yo también estoy aprendiendo y no manejo estos temas a la perfección, pero estamos aquí para compartir y echarnos la mano <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Jun 21, 2009 5:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-20T10:29:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2618#p2618</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2618#p2618"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2618#p2618"><![CDATA[
Entiendo, sobrecarga de operadores solo en C++, solo una cosa, ¿seria posible tener la parte de los vectores junto con la sobrecarga de operadores en C++ y usarlo en codigo en C haciendo un includo de la cabecera C++ de los vectores y asi usarlos en otra parte de codigo que este en C (mezclar C con C++ en definitiva)? y ¿como se realizaria la sobrecarga de operadores en C++?<br /><br />Gracias a todos por la ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Jun 20, 2009 10:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-06-20T04:42:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2617#p2617</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2617#p2617"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2617#p2617"><![CDATA[
Todo lo que has mencionado al principio, son algunas de las cosas que se consideraron para agregar al lenguaje C++ y hacerlo un C &quot;mejorado&quot;.<br /><br /><blockquote><div><cite>lacabra25 escribió:</cite><br />Ya, entonces en C no se podria sino solo en C++, lo que tambien se me ha ocurrido es si se podria imitar la sobrecarga de operadores con las macros con algo como:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#define X+Y funcion&#40;X,Y&#41;</code></dd></dl><br /><br />Lo que no se es si funcionara bien.<br /></div></blockquote><br />No funcionará, debido a que estás intentando utilizar un operador (+) en la definición del texto que representa la macro. Haciéndolo al contrario (simulando una función) si funcionaría:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#define suma&#40;a,b&#41; a+b<br /></code></dd></dl><br />Debido a que la &quot;macro&quot; es un texto que será sustituido por lo que se encuentre a la derecha, pero no puede incluir operadores ya definidos, pues esto confundiría fácilmente al compilador, ¿debería ejecutar una suma a+b o buscar una sustitución? O más aún, ¿por qué tratar en el código &quot;a+b&quot; como una macro y &quot;c+d&quot; como una operación suma?<br /><br />Ahora, un detalle que quizá ya observaste, el código de una macro debe poder ejecutarse, es decir, la operación debe ya estar definida. En el ejemplo, a y b deben ser de tipo conocido y/o que para ellos esté ya definida la operación +. La sobrecarga de operadores se introdujo para poder hacer uso de los operadores del lenguaje con nuevos tipos definidos por el usuario, de manera que se tuviera una forma &quot;más natural&quot; de trabajar con estos nuevos tipos.<br /><br />Si por alguna razón necesitas hacer uso de la sobrecarga de operadores, fácilmente puedes pasarte a C++ y usarlo como un C &quot;ampliado&quot; <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Jun 20, 2009 4:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-06-19T14:21:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2615#p2615</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2615#p2615"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2615#p2615"><![CDATA[
Hola, bueno, aclarando un par de dudas:<br /><br />En C no hay sobrecarga, mientras que en C++ si. Hay que aclarar que la sobrecarga no es necesaria definirla en una clase, bien podria definirse afuera, como una simple funcion de C.<br /><br />Respecto a como pasar por referencia, hay que usar un operador especial propio de C++ (no existe en C) y es llamado operador de referencia.<br /><br />Vemos, un ejemplo en C:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void funcion&#40;int a, int *b&#41; &#123;<br />          a = a+1;<br />          *b = *b +1;<br />&#125;<br /><br />int a = 0;<br />int b = 0;<br /><br />funcion&#40;a, &amp;b&#41;;<br /><br />//Ahora, a == 0 y b == 1<br /></code></dd></dl><br /><br />Ahora,un ejemplo de C++:<br /><dl class="codebox"><dt>Code: </dt><dd><code>void funcion&#40;int a, int &amp;b&#41; &#123;<br />          a = a+1;<br />          b = b +1;<br />&#125;<br /><br />int a = 0;<br />int b = 0;<br /><br />funcion&#40;a,b&#41;;<br /><br />//Ahora, a == 0 y b == 1<br /></code></dd></dl><br /><br />En ambos casos, pido disculpas si la sintaxis no es correcta, hace unos cuantos meses que no programo en C++. Sin embargo, lo mas importante es la diferencia de los dos ejemplos.<br /><br />En C, se necesita un operador de puntero ( *b en la definicion de la funcion), un operador de dereferencia ( *b al momento de hacer &quot; *b=*b+1&quot;) y por ultimo un operador de direccion ( &amp;b al momento del llamado)<br /><br />Mientras, en C++ se simplifica usando el operador de referencia ( &amp;b en la definicion de la funcion), ninguna otra sintaxis adicional es requerida.<br /><br />Hay un par de cosas mas sobre la sobrecarga, pero dado que no recuerdo la sintaxis exacta, no lo puedo explicar sin ejemplos. Te recomiendo el Thinking in C++ de (esta en ingles y hay una version en castellano) donde explica muy bien la sobrecarga, no solo de operadores basicos como +,*, sino tambien otros operadores.<br /><br />Saludos[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Jun 19, 2009 2:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-19T13:58:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2614#p2614</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2614#p2614"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2614#p2614"><![CDATA[
Buenas lacabra:<br />A lo mejor funciona, pero lo que yo creo es que no podrá ser así, porque &quot;x+y&quot; sería como una string, no como variable x + variable y, no se si me explico<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jun 19, 2009 1:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-19T12:10:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2613#p2613</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2613#p2613"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2613#p2613"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Buenas lacabra:<br />Yo no es que sea un gran entendido de c/c++, pero lo que tengo entendido es que la sobrecarga de operadores se realiza dentro de las clases, ergo......<br /></div></blockquote><br />Ya, entonces en C no se podria sino solo en C++, lo que tambien se me ha ocurrido es si se podria imitar la sobrecarga de operadores con las macros con algo como:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#define X+Y funcion&#40;X,Y&#41;</code></dd></dl><br /><br />Lo que no se es si funcionara bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Jun 19, 2009 12:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-19T11:29:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2611#p2611</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2611#p2611"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2611#p2611"><![CDATA[
Buenas lacabra:<br />Yo no es que sea un gran entendido de c/c++, pero lo que tengo entendido es que la sobrecarga de operadores se realiza dentro de las clases, ergo......<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jun 19, 2009 11:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-19T09:52:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2610#p2610</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2610#p2610"/>
<title type="html"><![CDATA[Sobrecargando operadores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=576&amp;p=2610#p2610"><![CDATA[
Hola, tengo entendido que en C++ se pueden sobrecargar operadores para en lugar de llamar a la funcion, por ejemplo, &quot;sumarvectores(a,b)&quot; se pueda hacer &quot;a+b&quot;, lo que no se es si se puede hacer tambien en C ¿puede sobrecargarse operadores en C? ¿como se sobrecargan los operadores?. Otra cosa, quiero sobrecargar operadores para una funcion en la que multiplico un escalar por una estructura vector que he echo en la que el escalar se pasa como argumento pero el vector pasa por referencia y no se si se podra sobrecargar los operadores para que poniendo &quot;a*b&quot; siendo por ejemplo a el vector la sobrecarga de operadores se encargue de poner &quot;&amp;a*b&quot; ya que la funcion debe ser llamada como &quot;multiplica_escalar_vector(b,&amp;a)&quot;, no se si me explico. La idea es que el trabajo con los vectores sea igual que si fuesen los tipos con los que C trabaja en lugar de tener que estar recordando las funciones para operar con ellos, pero las funciones necesitan los vectores pasados por su puntero.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Jun 19, 2009 9:52 am</p><hr />
]]></content>
</entry>
</feed>