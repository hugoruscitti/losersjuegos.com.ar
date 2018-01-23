<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=913" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-10-26T03:07:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=913</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-10-26T03:07:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4318#p4318</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4318#p4318"/>
<title type="html"><![CDATA[Re: puntero a array]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4318#p4318"><![CDATA[
Bueno a mi me enseñaron otra forma de manejar array multidimencionales, que es declarar un solo puntero, y hacer unas conversiones para transformar de una notación n-dimencional a la del array.<br />Explico con un ejemplo<br /><dl class="codebox"><dt>Code: </dt><dd><code>int filas=3, cols=2;<br />int *matriz;<br />matriz=new int&#91;filas*cols&#93;;<br />for(int x=0;x&lt;cols;x++)<br />    {<br />    for(int y=0;y&lt;filas;y++)<br />          {<br />              int num=matriz&#91;y*cols+x&#93;;//Accede a la coordenada x,y<br /><br />           }<br />     }<br /></code></dd></dl><br /><br />Si quisieras hace lo contrario, partir del índice y obtener las coordenada, solo hay que hacer una divisiones:<br />x=i%cols;<br />y=i/cols;<br /><br />donde i es el índice al que deseas acceder.<br /><br />Al principio puede parecer tedioso, pero en realidad es muy fácil una vez que te acostumbras.<br />El hecho de manejarlo así es que cuando se declara int **matriz; y les asignas memoria en realidad se crean varias filas de memoria que pueden estar en distintos lados y esto hace que el acceso sea mas lento, en cambio al declararlo todo junto es mas rápido, también depende de como lo uses por que hacer esas divisiones puede tomas el mismo tiempo que acceder a los bloques de memoria por separado, pero bueno, por alguna razón, en los motores gráficos usan arrays y no matrices para guardar píxeles.<br />Si usas c++ para hacer lo que comentaste con memoria dinámica, los operadores new y delete te facilitan mucho la vida.<br />y en realidad apuntadores es fácil una ves que entiendes que son.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Oct 26, 2010 3:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-10-22T14:23:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4308#p4308</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4308#p4308"/>
<title type="html"><![CDATA[Re: puntero a array]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4308#p4308"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />cuando haces *array_mapa, estás accediendo al primer valor. Tu lo que quieres es acceder al valor i, por lo que tienes que cambiar *array_mapa + i, ya que te lo esta procesando como *(array_mapa) + i, lo que sería el VALOR de la posicion 0 + i. Cambialo por *(array_mapa+i), lo que sería como acceder al valor en la posicion &quot;i&quot;. Pero no se porque no usas [i], que da el mismo resultado y es mucho más claro.<br /></div></blockquote><br />De hecho estaba usando [i] pero no queria dejarlo sin saber que pasaba con la otra manera.<br /><br />Pues si que es sencillo de la manera que dices, madre mia como me he liado. <br />Lo habia completado usando una funcion que devolviera true o false para para verificar cada pared: <br /><dl class="codebox"><dt>Code: </dt><dd><code>char* generar_mapa( int alto, int ancho )<br />{<br />   int area = alto * ancho;<br />   char* array_mapa = new char&#91;area&#93;;<br /><br />   for(int i=0; i &lt; area; i++)<br />   {<br />      if(p_arriba(alto, ancho, i)) array_mapa&#91;i&#93; = '-';<br />      else if (p_abajo(alto, ancho, i, area)) array_mapa&#91;i&#93; = '-';<br />      else if (p_izquierda(alto, ancho, i)) array_mapa&#91;i&#93; = '|';<br />      else if (p_derecha(alto, ancho, i)) array_mapa&#91;i&#93; = '|';<br />      else array_mapa&#91;i&#93; = ' '; <br />   }<br /><br />   return array_mapa;<br />}</code></dd></dl><br /><br />muchas gracias de nuevo juanxo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Oct 22, 2010 2:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-10-22T13:40:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4305#p4305</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4305#p4305"/>
<title type="html"><![CDATA[Re: puntero a array]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4305#p4305"><![CDATA[
buenas miguel:<br /><br />vayamos por partes. El primer error que te tira es por lo siguiente:<br /><br />cuando haces *array_mapa, estás accediendo al primer valor. Tu lo que quieres es acceder al valor i, por lo que tienes que cambiar *array_mapa + i, ya que te lo esta procesando como *(array_mapa) + i, lo que sería el VALOR de la posicion 0 + i. Cambialo por *(array_mapa+i), lo que sería como acceder al valor en la posicion &quot;i&quot;. Pero no se porque no usas [i], que da el mismo resultado y es mucho más claro.<br /><br />Aunque tengas un array unidimensional, existe la opción de recorrerlo con un bucle doble de una manera más simple:<br /><dl class="codebox"><dt>Code: </dt><dd><code>// Por lo que he visto, quieres tener un mapa tal que:<br />----------<br />|         |<br />|         |<br />----------<br /></code></dd></dl><br />Para ello hacemos:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>    char* generar_mapa( int alto, int ancho )<br />    {<br />       int area = alto * ancho;<br />       char* array_mapa = new char&#91;area&#93;;<br /><br />       for(int i=0; i &lt; alto; i++)<br />       {<br />         int pos_fila = i * altura; // así calculamos la posicion dentro del array en el que empieza  la fila<br />         for (int j = 0; j &lt; ancho; j++)<br />         {<br />            int pos = pos_fila + j;<br />            if ( i == 0 || i == (alto - 1) ) // Estamos en una de las paredes horizontales<br />               array_mapa&#91;pos&#93; = '-';<br />            else if ( j == 0 || j == (ancho - 1) ) // Estamos en una pared<br />               array_mapa&#91;pos&#93; = '|'<br />            else // Estamos en un lugar vacío<br />               array_mapa&#91;pos&#93; = ' ';<br />         }<br />       }  <br />       return array_mapa;<br />    }<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Oct 22, 2010 1:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-10-22T12:26:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4304#p4304</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4304#p4304"/>
<title type="html"><![CDATA[Re: puntero a array]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4304#p4304"><![CDATA[
Ahh pensaba que se con un puntero a array podia crear arrays dinamicos multidimensionales.<br />Por lo que he mirado en google, tu solucion es usar punteros dobles no? Te agradezco la ayuda pero no entiendo ni papa del codigo que me has escrito, de hecho estaba haciendo este ejercicio para practicar el tema de la memoria dinamica, y me da la sensacion de que si me pongo con los punteros dobles me voy a hacer un buen lio xdd. <br /><br />Visto lo visto estoy intentado hacer lo mismo pero con un array unidimensional, calculado el area del mapa ( ancho * alto ) este es el nuevo codigo, que me tira errores cuando intento darle un valor a las &quot;paredes&quot; del mapa:  <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>char* generar_mapa( int alto, int ancho )<br />{<br />   int area = alto * ancho;<br />   char* array_mapa = new char&#91;area&#93;;<br /><br />   for(int i=0; i &lt; area; i++)<br />   {<br />      if( i &gt;= 0 &amp;&amp; i &lt;= ancho-1) *array_mapa+i = '-';<br />      else if( i &gt;= ((area-1) -(ancho-1)) &amp;&amp; i &lt;= area-1) *array_mapa+i = '-';  /* error C2106: '=' : el operando izquierdo debe ser valor L -&gt;&gt;&gt; edito: solo me salta el error si lo hago de esta forma, con array_mapa&#91;i&#93; no me aparece dicho error*/<br />      else <br />      {<br />         for(int j=1; j&lt;= alto-2; j++)<br />         {<br />            if( i == ancho*j )  /*/////////////////////por otro lado.. tengo un pequeño problema para organizar el codigo, aqui necesito un else if, para seguir descartando posibilidades en la siguiente verificacion y tener un ultimo else para dar el valor espacio(&quot; &quot;) a las casillas que no sean paredes, pero necesito tambien el bucle for, como puedo hacer esto? */<br />            {<br />               *array_mapa+i = '|';<br />               break;<br />            }<br />         }<br />      }<br />      for(int j=2; j&lt;= alto-1; j++)<br />         {<br />            if( i == ancho*j-1 ) <br />            {<br />               *array_mapa+i = '|';<br />               break;<br />            }<br />         }<br />   }<br /><br />   return array_mapa;<br />}</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Oct 22, 2010 12:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-10-21T19:59:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4302#p4302</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4302#p4302"/>
<title type="html"><![CDATA[Re: puntero a array]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4302#p4302"><![CDATA[
cuidao. La variable que estás declarando es un puntero, por lo que solo puede tomar arrays unidimensionales. Para crear en tiempo de ejecución arrays bidimiensionales, sería así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>char** mapa = new char*&#91;alto&#93;;<br />for (int i = 0; i &lt; alto; ++i)<br />  mapa&#91;i&#93; = new char&#91;ancho&#93;;<br /></code></dd></dl><br /><br />Y para acceder, puedes usar una manera mucho más simple<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>for (int i = 0; i &lt; alto; ++i)<br />{<br />  for (int j = 0; j &lt; ancho; ++j)<br />    std::cout &lt;&lt; mapa&#91;i&#93;&#91;j&#93;;<br />}<br /></code></dd></dl><br /><br />Hay una manera que suele ser más eficiente, sobre todo cuando tratamos con tipos que no sean básicos(es decir, tipos que sean clases o structs)<br /><dl class="codebox"><dt>Code: </dt><dd><code>char** puntero_a_fila = mapa;<br />for (int i = 0; i &lt; alto; ++i, ++puntero_a_fila)<br />{<br />  char* puntero_a_columna = *puntero_a_fila;<br />  for (int j = 0; j &lt; ancho; ++j, ++puntero_a_columna)<br />    std::cout &lt;&lt; *puntero_a_columna;<br />}<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Oct 21, 2010 7:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-10-21T18:45:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4301#p4301</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4301#p4301"/>
<title type="html"><![CDATA[puntero a array]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=913&amp;p=4301#p4301"><![CDATA[
buenas, estoy haciendo una funcion para generar un mapa en consola solo tengo esto y no se seguir: <br /><dl class="codebox"><dt>Code: </dt><dd><code>char* generar_mapa( int alto, int ancho )<br />{<br />   char* array_mapa = new char&#91;alto&#93;&#91;ancho&#93;;<br /><br />   for(int i=0; i&lt;alto; i++)<br />   {<br />      for(int j=0; j&lt;ancho; j++)<br />/////////////////////////////////////////////////&gt;&gt;&gt;&gt; Segun he leido tengo que escribir &quot;*array_mapa&quot; para acceder al primer elemento, *array_mapa +1 para acceder al segundo, etc. pero el unico ejemplo que tengo es de un array unidimensional. Como lo hago con uno de dos?? <br /><br /><br /><br />   }<br />}<br /></code></dd></dl><br /><br />gracies<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Oct 21, 2010 6:45 pm</p><hr />
]]></content>
</entry>
</feed>