<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=582" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-09-03T18:16:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=582</id>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2009-09-03T18:16:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2863#p2863</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2863#p2863"/>
<title type="html"><![CDATA[Re: Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2863#p2863"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br /><blockquote><div><cite>Juanxo escribió:</cite>Además, otro pequeño error es que cuando detecta una colisión con las paredes de la pantalla, he de modificar la posición de la bola un pixel, haciendo que deje de estar en contacto con la pared, porque si no se queda constantemente modificando la velocidad. Alguien sabe como subsanarlo.<br /></div></blockquote><br />A ver si así te funciona:<br /><dl class="codebox"><dt>Code: </dt><dd><code>if &#40;rect.y + vy &gt;= 0 and rect.y + rect.y + vy &lt; SCREEN_H&#41; rect.y += vy;<br />else vy = -vy;</code></dd></dl><br />De esta manera también se evita un efecto no deseado al hacer el blit, que modifica el rectángulo.<br />Faltaría mirar si sale por la izquierda o por la derecha, pero como eso incrementa los puntos, ya es otra cosa.<br /><br />Saludos.</div></blockquote><br /><br /><br />NO sería mejor sumar la posición y con el alto y la posición x con el ancho, asi:<br />rect.y+rect.h+vy&lt;SCREEN_H<br /><br />Si se tratase de colisión con las paredes sería:<br /><br />if rect.x&lt;=0 then<br /> vy=vy*-1 <br />Asi la velocidad sería negativa y la bola iría al lado contrario.<br />En flash me sale así y me va bien. El problema es cuando aumenta la velocidad<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Jue Sep 03, 2009 6:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-07-05T15:01:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2682#p2682</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2682#p2682"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2682#p2682"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br /><dl class="codebox"><dt>Code: </dt><dd><code>juanxo@Juanxo:~/Pruebas/pruebas$ g++ -o main -pg main.cpp<br />juanxo@Juanxo:~/Pruebas/pruebas$ http://losersjuegos.com.ar/foro/main<br />juanxo@Juanxo:~/Pruebas/pruebas$ gprof main<br /></code></dd></dl><br /><br />Problemas: A pesar de tenerlo linkado en el proyecto del codeblocks, al compilar en la consola me da un error como que no reconoce las funciones de SDL.<br /></div></blockquote><br />Si el código que has puesto utiliza SDL, no te olvides de poner el -lSDL:<br /><dl class="codebox"><dt>Code: </dt><dd><code>g++ -o main -pg main.cpp -lSDL </code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Jul 05, 2009 3:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-04T17:10:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2680#p2680</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2680#p2680"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2680#p2680"><![CDATA[
gracias por lo del String. Lo miraré haber que tal.<br /><br /><blockquote class="uncited"><div><br />Espero que cuando le encuentres (o alguien más comente) lo compartas<br /></div></blockquote><br /><br />jajaja. Pues lo encontré. Haber, la manera de conseguir ejecutar el profiler en modo consola es el siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>juanxo@Juanxo:~/Pruebas/pruebas$ g++ -o main -pg main.cpp<br />juanxo@Juanxo:~/Pruebas/pruebas$ http://losersjuegos.com.ar/foro/main<br />juanxo@Juanxo:~/Pruebas/pruebas$ gprof main<br /></code></dd></dl><br /><br />la primera linea genera la salida del programa en el archivo que va a continuación del parámetro -o. -pg indica al compilador que ejecute el profiler cuando compile y finalmente ponemos el nombre del archivo a compilar.<br /><br />en la segunda linea ejecutamos el archivo de salida y nos muestra la salida del programa.<br />y por último, ejecutamos el profiler en el archivo de salida y se nos mostrará las estadísticas.<br /><br />Problemas: A pesar de tenerlo linkado en el proyecto del codeblocks, al compilar en la consola me da un error como que no reconoce las funciones de SDL.<br /><br />Seguiré estudiandolo.<br /><br /><blockquote class="uncited"><div><br />Aaah, y otra cosa, la mejor manera de agradecer es compartiendo, y cuando sea el turno, te toca echar la mano Very Happy.<br /></div></blockquote><br /><br />Temer el día en que eso ocurra, porque para que yo os pueda ayudar en algo el mundo se tendría que haber vuelto loco xD (esperemos que no sea cierto)  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Jul 04, 2009 5:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-07-04T03:24:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2676#p2676</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2676#p2676"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2676#p2676"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br /><blockquote class="uncited"><div>¿Te refieres al tamaño con que declaras la variable? Claro, aprovecha que estás en C++ y usa la clase string<br /></div></blockquote><br /><br />Si, me refería al tamaño de posiciones del array. Para que cupiesen dos numeros (enteros de 16bits, necesito 2 enteros = 32 bits).<br /><br />En cuanto a lo de string, esque no sabía si funcionaría, porque el tipo que acepta SDL es const char* y no se si no habría problemas con los tipos.<br />Probaré haber.<br /></div></blockquote><br />Recuerda que la clase string tiene el método c_string() que te devuelve un puntero a char para usar con funciones que esperan cadenas &quot;tipo C&quot;.<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />En cuanto a lo de Profile, me refería a usar el profiler de gcc, que te muestra estadísticas del tiempo empleado en funciones y demás, para ver en que puntos puedo intentar atacar más la optimización<br /></div></blockquote><br />Aaah, ya entendí <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />. No se, eso lo hago con Visual Studio <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />. Espero que cuando le encuentres (o alguien más comente) lo compartas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />Gracias por todo Geo.<br /></div></blockquote><br />Por nada, recuerda que estamos para compartir <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br />Aaah, y otra cosa, la mejor manera de agradecer es compartiendo, y cuando sea el turno, te toca echar la mano <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Jul 04, 2009 3:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-03T11:29:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2672#p2672</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2672#p2672"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2672#p2672"><![CDATA[
<blockquote class="uncited"><div><br />¿Te refieres al tamaño con que declaras la variable? Claro, aprovecha que estás en C++ y usa la clase string<br /></div></blockquote><br /><br />Si, me refería al tamaño de posiciones del array. Para que cupiesen dos numeros (enteros de 16bits, necesito 2 enteros = 32 bits).<br /><br />En cuanto a lo de string, esque no sabía si funcionaría, porque el tipo que acepta SDL es const char* y no se si no habría problemas con los tipos.<br />Probaré haber.<br /><br />En cuanto a lo de Profile, me refería a usar el profiler de gcc, que te muestra estadísticas del tiempo empleado en funciones y demás, para ver en que puntos puedo intentar atacar más la optimización<br /><br />Gracias por todo Geo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jul 03, 2009 11:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-07-03T03:39:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2671#p2671</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2671#p2671"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2671#p2671"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Gracias Geo, he hecho lo que me has comentado( al final los he hecho de 32) y ahora si han funcionado.<br />Lo único que esta manera me parece un poco rebuscada. Es la única o se puede hacer de una manera mejor?<br /></div></blockquote><br />¿Te refieres al tamaño con que declaras la variable? Claro, aprovecha que estás en C++ y usa la clase <span style="font-weight: bold">string</span> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />. Otra forma, es hacer un estimado del número de dígitos que necesitarás de acuerdo al número de bytes de la variable. Un ejemplo muy malo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>char msg&#91; sizeof&#40; int &#41; * 3 + 1 &#93;;</code></dd></dl><br />Con sizeof se obtiene el número de bytes del tipo int, se multiplica por 3 considerando que por cada byte haremos uso de tres dígitos, se suma 1 para garantizar que tenemos espacio para el caracter de fin de cadena, es una aproximación que puede servir:<br /><br />1 byte: 255 =&gt; 3 dígitos (se reservan 4 caracteres)<br />2 bytes: 65536 =&gt; 5 dígitos (7)<br />3 bytes: 16,777,216 =&gt; 8 dígitos (10)<br />4 bytes: 4,294,967,296 =&gt; 10 dígitos (13)<br /><br />Ahora, cuidado con el caso de 1 byte para cuando sean variables con signo, podría usar un dígito más y no alcanzar. Debe haber una forma más efectiva (&quot;elegante&quot;) de calcular cuántos dígitos se tienen para X bytes, pero ahorita no la recuerdo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />Por cierto, alguien que este con linux y me diga como hacer el profile de un proyecto SDL en el gcc. Me da error ya dice que no encuentra las funciones de SDL, pero yo lo he probado con el codeblocks(ahi es donde programo) y lo ejecuta sin ningún problema.<br /></div></blockquote><br />¿Profile? ¿a qué te refieres?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Jul 03, 2009 3:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-02T15:47:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2665#p2665</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2665#p2665"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2665#p2665"><![CDATA[
Gracias Geo, he hecho lo que me has comentado( al final los he hecho de 32) y ahora si han funcionado.<br />Lo único que esta manera me parece un poco rebuscada. Es la única o se puede hacer de una manera mejor?<br /><br />Por cierto, alguien que este con linux y me diga como hacer el profile de un proyecto SDL en el gcc. Me da error ya dice que no encuentra las funciones de SDL, pero yo lo he probado con el codeblocks(ahi es donde programo) y lo ejecuta sin ningún problema.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jul 02, 2009 3:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-07-01T17:10:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2664#p2664</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2664#p2664"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2664#p2664"><![CDATA[
¿De qué tipo es N1? A primera vista, la variable msg no podrá contener lo que quieras copiarle con sprintf pues la has declarado de un solo caracter ¿?, por ejemplo, si N1 se trata de un entero, probablemente sea de 16 bits o, incluso de 32, eso definitivamente no cabrá en la variable msg, intenta darle más espacio:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>char msg&#91; 16 &#93;;</code></dd></dl><br />Ten en cuenta el número de dígitos que puede tener tu variable N1 (contando el signo, si es el caso), además del espacio que utilizas en la llamada a sprintf, como mínimo deberías tener esos caracteres + uno para el caracter de fin de cadena.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Jul 01, 2009 5:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-01T15:52:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2663#p2663</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2663#p2663"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2663#p2663"><![CDATA[
Buenas:<br /><br />Gracias endaramiz por las soluciones. Ya he conseguido que todo funcione.<br /><br />Ahora estoy tratando de hacer un marcador, pero me da error de segmentacion cuando intento hacer el render.<br /><br />La verdad es que he probado bastantes cosas para ver si funcionaba char, char [] const char*, con sprintf, pero me sigue dando el mismo error.<br /><br />Si me podéis guiar un poco os lo agradecería, porque he estado mirando ejemplos en internet, pero todos o casi todos son de texto, no de números<br /><br />El código de la función es:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void Score::RenderText&#40;&#41;<br />&#123;<br /><br />    //Create the text<br />    char msg&#91;1&#93;;<br />    sprintf&#40;msg, &quot; %d&quot; , N1&#41;;<br /><br />    //Render to surface<br />    S1 = TTF_RenderText_Shaded&#40;Font,msg,TColor,BColor&#41;;<br />    //Optimize the image, assigning the same format that the screen<br /><br />    Rect1.w = S1 -&gt; w;<br />    Rect1.h = S1 -&gt; h;<br /><br />    //Apply colorkey<br />    SDL_SetColorKey&#40;S1,SDL_SRCCOLORKEY|SDL_RLEACCEL, SDL_MapRGB&#40;S1-&gt;format,0,0,0&#41;&#41;;<br /><br />&#125;<br /></code></dd></dl><br /><br />N1, S1, Font, TColor, BColor y Rect son miembros de la clase<br /><br />Gracias<br />Juanxo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Jul 01, 2009 3:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-06-27T20:41:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2655#p2655</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2655#p2655"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2655#p2655"><![CDATA[
Si si, exacto. Lo había escrito con un poco de prisa.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Jun 27, 2009 8:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-27T15:27:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2653#p2653</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2653#p2653"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2653#p2653"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code>rect.y + rect.y + vy</code></dd></dl><br /><br />uno de estos es rect,w no? esque si no no entiendo porque lo haces<br /><br />Gracias de todas formas, lo voy a mirar<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Jun 27, 2009 3:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-06-27T14:07:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2649#p2649</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2649#p2649"/>
<title type="html"><![CDATA[Re: Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2649#p2649"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Además, otro pequeño error es que cuando detecta una colisión con las paredes de la pantalla, he de modificar la posición de la bola un pixel, haciendo que deje de estar en contacto con la pared, porque si no se queda constantemente modificando la velocidad. Alguien sabe como subsanarlo.<br /></div></blockquote><br />A ver si así te funciona:<br /><dl class="codebox"><dt>Code: </dt><dd><code>if &#40;rect.y + vy &gt;= 0 and rect.y + rect.y + vy &lt; SCREEN_H&#41; rect.y += vy;<br />else vy = -vy;</code></dd></dl><br />De esta manera también se evita un efecto no deseado al hacer el blit, que modifica el rectángulo.<br />Faltaría mirar si sale por la izquierda o por la derecha, pero como eso incrementa los puntos, ya es otra cosa.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Jun 27, 2009 2:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-25T23:38:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2646#p2646</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2646#p2646"/>
<title type="html"><![CDATA[Pong C++/SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=582&amp;p=2646#p2646"><![CDATA[
Buenas a todos:<br /><br />He hecho un pong en C++/ SDL para conocer un poco todo el tema de SDL en C++ y cosas así (yo hasta ahora solo conocía pygame), pero tengo un problemilla.<br />Todo funciona más o menos, excepto las colisiones stick-ball ( definidas en Ball.h y Ball.cpp) en las que he empleado la función de la siguiente <a href="http://softwarelibre.uca.es/wikijuegos/Colisiones#Detecci.C3.B3n_de_colisiones_de_superficie_.C3.BAnica" class="postlink">página</a><br /><br />Además, otro pequeño error es que cuando detecta una colisión con las paredes de la pantalla, he de modificar la posición de la bola un pixel, haciendo que deje de estar en contacto con la pared, porque si no se queda constantemente modificando la velocidad. Alguien sabe como subsanarlo.<br /><br />El archivo lo podéis descargar de <a href="http://www.megaupload.com/?d=25W45HQ5" class="postlink">aquí</a><br /><br />Un saludo y gracias a todos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jun 25, 2009 11:38 pm</p><hr />
]]></content>
</entry>
</feed>