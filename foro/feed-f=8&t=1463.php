<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1463" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-05-11T17:03:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1463</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-11T17:03:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6750#p6750</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6750#p6750"/>
<title type="html"><![CDATA[Re: Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6750#p6750"><![CDATA[
Entonces prácticamente lo que hacia yo era apuntar a esa cadena? Era lo que pensaba.<br />Con respecto a tu duda, me decia la maestra de ética <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> : Copiar, puesto que copear es de brindar  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" />.<br />Gracias por la ayuda me has salvado la vida y bastante de mi cabello...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Vie May 11, 2012 5:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-05-11T04:50:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6749#p6749</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6749#p6749"/>
<title type="html"><![CDATA[Re: Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6749#p6749"><![CDATA[
Sí el asunto era copear una sola cadena, creo que te hubiese sido mas útil el utilizar la función strcpy... bueno, ya que XD.<br /><br />Sobre el problema de copear cadenas de la forma que lo hacías, es que técnicamente no copeas la cadena, mas bien haces referencia a esa cadena en especifico o algo así....<br /><br />Me alegro que ya funcione <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />ahora tengo una duda existencial sobre si se escribe copear o copiar... XD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie May 11, 2012 4:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-10T19:01:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6741#p6741</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6741#p6741"/>
<title type="html"><![CDATA[Re: Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6741#p6741"><![CDATA[
<img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" />  Wow! parece que ya quedo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br />El código me quedo de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>    long long longitud = sizeof( room_inst );<br />    room = (unsigned char*) malloc( sizeof(unsigned char)*longitud );<br />    for( int i = 0 ; i &lt;= longitud; i++ ){<br />        room&#91;i&#93; = (unsigned char) room_inst&#91;i&#93;;<br />    }</code></dd></dl><br />Ahora ya quedo al hacer:<br /><dl class="codebox"><dt>Code: </dt><dd><code>case (0xC3):<br />                SP = (int)  room&#91; PC+1 &#93;;<br />                PC = (int) SP;<br />                break;</code></dd></dl><br />Hace exactamente lo que necesito guarda en <span style="font-weight: bold">PC</span> el valor <span style="font-weight: bold">50</span> (que solo es un ejemplo) o el valor que encuentre en el archivo y <span style="font-weight: bold">PC</span> sigue siendo valido para el for y continua haciendo todo.<br />Ahora no entiendo el por que del error, podrías decirme por que no se hace la copia como lo hice yo?<br />Muchas gracias por la ayuda ya puedo continuar con mi pequeño proyecto  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue May 10, 2012 7:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-05-10T16:41:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6740#p6740</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6740#p6740"/>
<title type="html"><![CDATA[Re: Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6740#p6740"><![CDATA[
Disculpa la tardanza <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Bien, ahora, una observación:<br /><br />no se copean cadenas de esa forma<br /><blockquote><div><cite>sofoke escribió:</cite><br />Esta variable room es una copia de room_inst que hice de la siguiente manera:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>    room = (unsigned char*) room_inst;</code></dd></dl><br /></div></blockquote><br /><br />Daria lo mismo que utilizaras directamente room_inst...<br /><br />Ahora, lo que se me ocurre que puedes hacer es, crear un array de enteros y recorrer la longitud de room_inst.<br /><br /><pre class="prettyprint">#include &lt;string.h&gt;<br /><br />int long = strlen&#40;room_inst&#41;;<br />unsigned short* room_integer = &#40;unsigned short*&#41;malloc&#40;sizeof&#40;unsigned short&#41;*long&#41;; //creamos un array de enteros para guardar los valores<br />int i;<br />for&#40;i=0;i&lt;=long;i++&#41;{<br />    room_integer[i] = &#40;unsigned short&#41;room_inst[i];<br />    };</pre><br /><br />Aun que estoy un poco oxidado en c  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" />, así que esa seria solo una idea... no sé si te sea útil...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue May 10, 2012 4:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-09T20:23:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6739#p6739</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6739#p6739"/>
<title type="html"><![CDATA[Re: Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6739#p6739"><![CDATA[
Aqui un poco de codigo.<br />Comenzando por el codigo que se encarga de leer un archivo de texto en modo binario de lectura:<br /><dl class="codebox"><dt>Code: </dt><dd><code>    strcat( (char*) room_inst&#91; count &#93;, (char*) &quot;&quot; );<br />    do{<br />        fscanf( room, &quot;%c&quot;, &amp;leido );<br />        sprintf( (char*) &amp;room_inst&#91; count &#93;, &quot;%c&quot; , (char*) leido );<br />        count+=1;<br />    }while( !feof(room) );</code></dd></dl><br />Con este codigo lo que hago el leer el archivo hasta el final e ir guardando los datos dentro de la variable <span style="font-weight: bold">room_inst</span> que es un arreglo de punteros de tipo <span style="font-weight: bold">unsigned char</span>.<br />Al hacer una prueba con:<br /><dl class="codebox"><dt>Code: </dt><dd><code>printf(&quot;\n%x\n&quot;, room_inst&#91;1&#93; );</code></dd></dl><br />Me imprime el valor 50<br />Ahora el archivo binario abierto se ve de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>C3 50 01 FF FF<br />00 00 00 C3 00<br /></code></dd></dl><br />Esto de modo grafico lo que significaria en hexadecimal:<br /><dl class="codebox"><dt>Code: </dt><dd><code>0 1 2 3 4<br />5 6 7 8 9</code></dd></dl><br />Y en decimal seria lo siguiente:<br /><dl class="codebox"><dt>Code: </dt><dd><code>195 80 1 255 255<br />0 0 0 195 80<br /></code></dd></dl><br />Ahora como vemos el archivo trae un valor <span style="font-weight: bold">50</span> que en <span style="font-weight: bold">decimal</span> es <span style="font-weight: bold">80</span> y su posicion segun los valores <span style="font-weight: bold">hexadecimales</span> es <span style="font-weight: bold">1</span>... (En este ejemplo claro)<br />Ahora lo que quiero es poder jalar ese 50 a una variable <span style="font-weight: bold">unsigned short</span>.<br />El siguiente codigo es:<br /><dl class="codebox"><dt>Code: </dt><dd><code>for( ; PC &lt;= 600 ;  ){<br />    opCode = room&#91;PC&#93;;<br />    switch( opCode ){<br />        case (0xC3):<br />                break;<br />       default:<br />             PC+=1;<br />            break;<br />    }<br />}<br /></code></dd></dl><br />Especificamente en ese case es donde necesito hacer la asignacion del valor <span style="font-weight: bold">50</span> (que es el que tiene el archivo que lei en forma binaria) a la variable <span style="font-weight: bold">PC</span> que como comento es <span style="font-weight: bold">unsigned short</span>, puesto que sigo necesitando que se pueda usar tanto en el for como indice del arreglo de punteros.<br />Esta variable <span style="font-weight: bold">room</span> es una copia de <span style="font-weight: bold">room_inst</span> que hice de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>room = (unsigned char*) room_inst;<br /></code></dd></dl><br />Lo hice por que se encuentran en clases diferentes.<br />Casi lo olvido el archivo lo abro de la siguiente manera:<br /><span style="font-weight: bold">FILE* room = fopen(path, &quot;rb&quot;);</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié May 09, 2012 8:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-05-09T00:28:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6738#p6738</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6738#p6738"/>
<title type="html"><![CDATA[Re: Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6738#p6738"><![CDATA[
Que extraño, usualmente funcionaria... primero seria revisar si verdaderamente el dato al que le das cast. Aun que seria bueno poder ver un poco mas del código donde esta el error.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié May 09, 2012 12:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-07T23:05:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6731#p6731</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6731#p6731"/>
<title type="html"><![CDATA[Re: Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6731#p6731"><![CDATA[
En realidad lo asigno de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>...<br />fscanf( rFile, &quot;%c&quot;, &amp;leido );<br />sprintf( (char*) &amp;room&#91; count &#93;, &quot;%c&quot; , (char*) leido );<br />...</code></dd></dl><br />Donde:<br /><span style="font-weight: bold">room</span> es un puntero a una variable de tipo <span style="font-weight: bold">unsigned char</span>, y <span style="font-weight: bold">leido</span> es una variable de tipo <span style="font-weight: bold">unsigned char</span>.<br />Lo tengo de este modo puesto que leo un archivo con información en hexadecimal.<br />Por eso al hacer:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>a = (unsigned short) room&#91;10&#93;;</code></dd></dl><br /><br />No me genera error de compilacion pero como <span style="font-weight: bold">a</span> lo quiero usar en un <span style="font-weight: bold">for</span>, cuando da una vuelta al <span style="font-weight: bold">for</span> e intenta generar otra vuelta no se que sucede; pero el programa simplemente se cuelga como si el <span style="font-weight: bold">for</span> no tuviera fin o algo por el estilo.<br />Ahora que veo el codigo pudo hacer que <span style="font-weight: bold">a</span> no sea necesariamente <span style="font-weight: bold">unsigned short</span> aun que lo quiero usar así por cuestión de ahorro de recursos.<br />Aun no se por que sucede eso :S.<br /><br />Edito: Olvide comentar que <span style="font-weight: bold">a</span> comienza con un valor <span style="font-weight: bold">0x00</span> y al hacer algunas vueltas en el <span style="font-weight: bold">for</span> al encontrarse con lo que comento ya no vuelve a hacer lo que normalmente debe hacer es como si tomara otro valor o el <span style="font-weight: bold">for</span> no tuviera fin la verdad no se como explicarlo es raro :S...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Lun May 07, 2012 11:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-05-07T21:33:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6730#p6730</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6730#p6730"/>
<title type="html"><![CDATA[Re: Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6730#p6730"><![CDATA[
solo una duda, exactamente como estas asignando el valor de &quot;50&quot; al carácter.<br />En teoria no marca error al hacerlo... :<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;<br />int main(void){<br />    unsigned char r;<br />    unsigned short a;<br />    r = 'a';  /*asignamos el carácter*/<br />    a = (unsigned short) r;  /*transformamos el tipo...*/<br />    printf(&quot;%d\n&quot;, a);/*imprime 97 que es el valor entero de 'a' */<br />    return 0;<br />};<br /></code></dd></dl><br /><br />Creo que el error esta en como asignas el valor a r... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun May 07, 2012 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-07T04:35:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6726#p6726</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6726#p6726"/>
<title type="html"><![CDATA[Conversion de datos en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1463&amp;p=6726#p6726"><![CDATA[
Hola, buenas noches a todos en el foro.<br />Alguien podria ayudarme con la conversion de tipos en C/C++?<br />Lo que sucede es que tengo una variable:<br /><dl class="codebox"><dt>Code: </dt><dd><code>unsigned char r;</code></dd></dl><br />con un valor igual a 50, y este valor lo quiero pasar a una variable<br /><dl class="codebox"><dt>Code: </dt><dd><code>unsigned short a;</code></dd></dl><br />pero al hacer algo asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>a = (unsigned short) r;</code></dd></dl><br />o al hacer simplemente:<br /><dl class="codebox"><dt>Code: </dt><dd><code>a = r;</code></dd></dl><br />no me da lo que necesito, puesto que la variable <span style="font-weight: bold">a</span> la necesito para un <span style="font-weight: bold">for</span>, pero no se que pasa incluso ya intente con la funcion atoi y no he logrado pasar ese valor :S<br />Desgraciadamente necesito que esas variables sean necesariamente de ese tipo. Si alguien puede ayudarme les estaria muy agradecido.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Lun May 07, 2012 4:35 am</p><hr />
]]></content>
</entry>
</feed>