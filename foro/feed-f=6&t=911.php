<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=911" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-10-20T00:56:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=911</id>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-10-20T00:56:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4293#p4293</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4293#p4293"/>
<title type="html"><![CDATA[Re: dividir una imagen en varias texturas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4293#p4293"><![CDATA[
acabo de enterarme de que pueden ser texturas rectangulares -potencia de 2 por supuesto-, asi que mejor jor. Muy buenas ideas, encontré algo de código en el source del supertux para manejar texturas potencia de 2 y esas cosas, asi que me viene muy bien las respuestas. Gracias che.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Mié Oct 20, 2010 12:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-10-20T00:04:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4292#p4292</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4292#p4292"/>
<title type="html"><![CDATA[Re: dividir una imagen en varias texturas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4292#p4292"><![CDATA[
No lo he hecho y por tanto no puedo ayudar con código para generar las texturas, pero si que se puede hacer la separación de una cantidad par en sus potencias de dos, por ejemplo podrías descomponer la textura en muchas texturas de 2x2 <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" />.<br /><br />Con este programa podrías encontrar las potencias de dos que componen un número par, después sería la generación de las subtexturas, aunque no se hasta qué punto podrías estar aumentando el número de texturas porque, como dije, no lo he hecho.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;cstdio&gt;<br />#include &lt;cstdlib&gt;<br />#include &lt;iostream&gt;<br />using std::cout;<br />using std::cin;<br />using std::endl;<br /><br />bool es_par( int n );<br />bool es_potencia_de_2( int n );<br />int potencia_mas_cercana( int n );<br /><br />int main( int argc, char* argv&#91;&#93; ) {<br />    if ( argc &lt; 2 ) {<br />        cout &lt;&lt; &quot;Uso: &quot; &lt;&lt; endl;<br />        cout &lt;&lt; &quot;potencia2 &#91;PARAM&#93;&quot; &lt;&lt; endl &lt;&lt; endl;<br />        cout &lt;&lt; &quot;&#91;PARAM&#93; debe ser un número positivo par&quot; &lt;&lt; endl;<br />        exit( 1 );<br />    }<br /><br />    int param = atoi( argv&#91; 1 &#93; );<br /><br />    if ( ( param &lt;= 0 ) ) {<br />        cout &lt;&lt; &quot;Error: el parámetro debe ser mayor que 0.&quot; &lt;&lt; endl;<br />    }<br /><br />    if ( !es_par( param ) ) {<br />        cout &lt;&lt; &quot;Error: el parámetro debe ser par.&quot; &lt;&lt; endl;<br />        exit( 1 );<br />    }<br /><br />    if ( !es_potencia_de_2( param ) ) {<br />        cout &lt;&lt; &quot;El número &quot; &lt;&lt; param &lt;&lt; &quot; NO es potencia de 2,&quot; &lt;&lt; endl<br />            &lt;&lt; &quot;se expresará en una suma de potencias de 2: &quot;;<br />        int copia = param;<br />        while( copia &gt; 2 &amp;&amp; copia &gt;= 0 ) {<br />            int cercana = potencia_mas_cercana( copia );<br />            cout &lt;&lt; cercana &lt;&lt; &quot; + &quot;;<br />            copia = copia - cercana;<br />        }<br />        cout &lt;&lt; copia &lt;&lt; endl;<br />    }<br />    else<br />        cout &lt;&lt; &quot;El número &quot; &lt;&lt; param &lt;&lt; &quot; SI es potencia de 2.&quot; &lt;&lt; endl;<br /><br />    return 0;<br />}<br /><br />bool es_par( int n ) {<br />    return ( n % 2 == 0 ) ? true : false;<br />}<br /><br />bool es_potencia_de_2( int n ) {<br />    int temp = 2;<br />    <br />    while( temp &lt; n ) {<br />        temp = temp * 2;<br />    }<br />    if ( temp == n ) return true;<br />    else return false;<br />}<br /><br />int potencia_mas_cercana( int n ) {<br />    while ( !es_potencia_de_2( n ) ) {<br />        n = n - 2;<br />    }<br />    <br />    return n;<br />}<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Oct 20, 2010 12:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-10-19T20:46:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4291#p4291</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4291#p4291"/>
<title type="html"><![CDATA[Re: dividir una imagen en varias texturas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4291#p4291"><![CDATA[
buenas baigos:<br /><br />el problema que le veo a lo que propones es que una potencia es, una serie de multiplicaciones, por lo que básicamente para que al dividir te quede algo que sea potencia de 2, ha de ser potencia de 2 originalmente. Además de que estarías aumentando el número de texturas necesarias por modelo, así como tener que subdividir aún más las mallas3d, ya que habitualmente cada una utiliza un conjunto de material/textura.<br /><br />Yo creo que la solución que se suele emplear en estos casos es utilizar una textura que su tamaño si sea potencia de 2, centrando la textura anterior en la nueva. Gastas algo de memoria de video, pero es más simple. Otra forma, sobre todo si tienes muchas de estas texturas, es utilizar texture atlas (atlas de texturas).<br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Oct 19, 2010 8:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-10-19T17:30:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4290#p4290</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4290#p4290"/>
<title type="html"><![CDATA[dividir una imagen en varias texturas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=911&amp;p=4290#p4290"><![CDATA[
La cuestion es esta, como podria hacer para cargar una imagen rectangular -cuyo tamaño no es potencia de 2- y dividirla a varias texturas cuyas dimensiones son potencia de 2. <br />Busco algun ejemplo, source, o documentacion que explique como hacerlo en opengl, aunque la verdadera intención es utilizar la api powervr de dreamcast.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Mar Oct 19, 2010 5:30 pm</p><hr />
]]></content>
</entry>
</feed>