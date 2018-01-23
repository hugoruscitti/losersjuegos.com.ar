<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1470" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-12T04:54:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1470</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-09-12T04:54:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=7077#p7077</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=7077#p7077"/>
<title type="html"><![CDATA[Re: Problema con orientacion de disparo.SDL[C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=7077#p7077"><![CDATA[
Matematicas, que chiva!! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />.<br />.<br />.<br />.<br />.<br />.<br />~_~<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Sep 12, 2012 4:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-05-18T19:29:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6764#p6764</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6764#p6764"/>
<title type="html"><![CDATA[Re: Problema con orientacion de disparo.SDL[C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6764#p6764"><![CDATA[
Este artículo que me paso Hugo me sirvió para entender algunas cosas.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br /><a href="http://www.losersjuegos.com.ar/referencia/articulos/seno_coseno" class="postlink">http://www.losersjuegos.com.ar/referencia/articulos/seno_coseno</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Vie May 18, 2012 7:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kingwar]]></name></author>
<updated>2012-05-18T03:02:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6763#p6763</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6763#p6763"/>
<title type="html"><![CDATA[Re: Problema con orientacion de disparo.SDL[C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6763#p6763"><![CDATA[
es incrible ver la cantidad de veces que repiten la misma pregunta en varios foros...<br />este pregunto lo mismo en 3 foros...incluyendo este buehh igual por aqui le &quot;respondimos&quot; en realidad no ayude xD...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2414">kingwar</a> — Vie May 18, 2012 3:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2012-05-14T10:49:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6755#p6755</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6755#p6755"/>
<title type="html"><![CDATA[Re: Problema con orientacion de disparo.SDL[C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6755#p6755"><![CDATA[
Gracias por la aclaración sofoke. Lo había dado por sentado y por eso no lo he dicho pero lo que yo hago es almacenar la rotación, es decir, calculamos la rotación solo al generar el disparo y luego aplicamos los siguientes cálculos<br /><br /><pre class="prettyprint">proyectilX += math.cos&#40;math.radians&#40;rotacion&#41;&#41; * 10<br />proyectilY -= math.sin&#40;math.radians&#40;rotacion&#41;&#41; * 10</pre><br /><br />El 10 es la cantidad que queremos aumentar la posición, se puede cambiar según quieras que vaya más rápido o más despacio. Las coordenadas X e Y y la rotación las almaceno en un array.<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Lun May 14, 2012 10:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-14T00:53:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6753#p6753</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6753#p6753"/>
<title type="html"><![CDATA[Re: Problema con orientacion de disparo.SDL[C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6753#p6753"><![CDATA[
Como dato extra, pues veo que <span style="font-weight: bold">kaiser</span> da una buena idea y un excelente codigo, creo que para que los disparos no se muevan junto con el cursor una vez creados, seria guardar en la misma estructura que la que contiene la posicion en X e Y del disparo las coordenadas X e Y del cursor en el momento que fue creado el disparo. Asi; de este modo el disparo seguira su trayectoria sin importar si el mouse siguie o no en esas coordenadas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Lun May 14, 2012 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2012-05-13T22:58:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6752#p6752</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6752#p6752"/>
<title type="html"><![CDATA[Re: Problema con orientacion de disparo.SDL[C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6752#p6752"><![CDATA[
Para que el disparo empiece justo donde está el personaje simplemente haz que al crear el disparo sus coordenadas X e Y sean las del personaje. Para que el disparo avance en la dirección del cursor tienes que calcular la rotación relativa entre el cursor y el personaje. Aquí te dejo el código en python:<br /><br /><pre class="prettyprint">distancia = math.sqrt&#40;&#40;ratonX - personajeX&#41;**2 + &#40;ratonY - personajeY&#41;**2&#41;<br />if distancia == 0: distancia = 1<br />rotacion = math.degrees&#40;math.asin&#40;&#40;personajeY - ratonY&#41; / distancia&#41;&#41;<br />if ratonX &lt; personajeX: rotacion = -&#40;180 + rotacion&#41;</pre><br /><br />En la primera línea calculamos la distancia entre el personaje y el cursor (ratón). En la segunda línea nos aseguramos de que la distancia nunca es cero para evitar una división por cero. En la tercera línea calculamos la rotación verticalmente, es decir, calculamos como de &quot;arriba&quot; o &quot;abajo&quot; estamos apuntando pero no sabemos si estamos apuntando hacia la derecha o hacia la izquierda. En la cuarta línea calculamos si estamos apuntando a la derecha o a la izquierda.<br /><br />Espero que este código se pueda traducir a C fácilmente y te ayude. Cualquier otra duda sigue preguntando xD<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Dom May 13, 2012 10:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-05-13T16:38:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6751#p6751</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6751#p6751"/>
<title type="html"><![CDATA[Problema con orientacion de disparo.SDL[C++]]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1470&amp;p=6751#p6751"><![CDATA[
Buenas comunidad, tengo un problemilla que me corroe y no me deja avanzar en mi proposito de hacer un juego de tematica parecida al the abinding of isaac, tengo en mente crear un primer nivel que sea como un survival donde me saldran cada vez mas enemigos. <br /><br /><br />Tengo creados los enemigos en una clase, al igual que el disparo y el player, el problema viene cuando quiero que el disparo que hago, salga de mi pesonaje, pase por la posicion que tenia el raton al apretar para disparar y que siga hasta salir de la pantalla, he intentado hacer una triangulacion de trigonometria con la posicion del player respecto a la de la posicion del raton pero no acaba de salir. <br /><br /><br />A alguien le ha pasado y lo ha solucionado?. <br /><br />Gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Dom May 13, 2012 4:38 pm</p><hr />
]]></content>
</entry>
</feed>