<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=289" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-12T13:02:15+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=289</id>
<entry>
<author><name><![CDATA[Alex_13_estu]]></name></author>
<updated>2008-04-12T13:02:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1137#p1137</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1137#p1137"/>
<title type="html"><![CDATA[funcion sprintf();]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1137#p1137"><![CDATA[
¡Hola! Me alegro de que te sirviese la explicación, todavía soy novato en ésto y siempre  es bueno poder ayudar igual que me ayudaron (y espero que lo sigan haciendo) a mí. Pues sí, sí sé cuál es la librería, de hecho te lo quería poner en el anterior mensaje y se me pasó.... Lo siento, te lo digo ahora. Está en la librería ANSI C &quot;stdio.h&quot;, si usas C debes poner al comienzo del código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;</code></dd></dl><br /><br />Y si usas C++ pones:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;cstido&gt;</code></dd></dl><br /><br />Al menos eso es lo que hago yo, supongo que será igual en todos los compiladores... Bueno, espero haberte sido de utilidad.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1909">Alex_13_estu</a> — Sab Abr 12, 2008 1:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-12T12:58:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1136#p1136</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1136#p1136"/>
<title type="html"><![CDATA[funcion sprintf();]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1136#p1136"><![CDATA[
Alex_13_estu, efectivamente lo saque del pdf que dices, y gracias por la explicacion, ¿por casualidad no sabras en que libreria esta?, esque tengo varios #include y ya que se para que sive pues no estaria mal saber que libreria debo incluir la proxima vez que la quiera usar.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Abr 12, 2008 12:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alex_13_estu]]></name></author>
<updated>2008-04-12T12:40:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1135#p1135</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1135#p1135"/>
<title type="html"><![CDATA[funcion sprintf();]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1135#p1135"><![CDATA[
¡Hola! Jeje, creo que ya sé en qué PDF la has visto: en el manual de &quot;Programación de Videojuegos con SDL&quot; de A.G. Serrano, ¿me equivoco?. Yo también seguí ese manual y debo decirte que es muy bueno. Al grano: la función sprintf(); . Primero te cito lo que viene en una relación de librerías estándar de C/C++ de la página c.conclase.net (es realmente buena si quieres aprender todo sobre C++) y luego te lo explico más coloquial:<br /><br /><blockquote class="uncited"><div><br />int sprintf(char *cadena, const char *formato, ...);<br />Esta función es equivalente a fprintf, excepto que el argumento cadena especifica un array en el<br />cual la salida generada es para ser escrita, en vez de un stream. Un carácter nulo es escrito al final<br />de los caracteres escritos; no es contado como parte de la suma retornada. El comportamiento<br />acerca de copiando entre objetos que se superponen no está definido.<br />Valor de retorno:<br />La función sprintf retorna el número de caracteres escritos al array, sin contar el carácter nulo al<br />final.<br /></div></blockquote><br /><br />Menudo rollazo, ¿no? Ahora te lo explico a mi modo. Es muy simple, la función tiene dos argumentos básicos: el primero, que es una cadena de caracteres sobre la que se escribirá y el segundo, que es la cadena de caracteres a escribir sobre la primera. Es decir, que si tú pones:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>char auxiliar&#91;64&#93;;<br />char inicial&#91;16&#93; = &quot;Hola mundo!&quot;;<br /><br />sprintf&#40;auxiliar, inicial&#41;;</code></dd></dl><br /><br />O en su defecto pones:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>char auxiliar&#91;64&#93;;<br /><br />sprintf&#40;auxiliar, &quot;Hola mundo!&quot;&#41;;</code></dd></dl><br /><br />En ambos casos acabarás con una cadena &quot;auxiliar&quot; que tendrá en su interior la frase &quot;Hola mundo!&quot;. Es decir, que se copia lo que haya en el segundo argumento de la función al primero. Ahora bien, como verás en el prototipo, el número de argumentos es indefinido, puedes pasar los que tú quieras. ¿Para qué sirve eso? Pues imagínate que quieres cargar imágenes que tienen nombres iguales, tan sólo varía un nº para indicar que imagen es (tile1.bmp, tile2.bmp, tile3.bmp...). Pues en vez de ir poniendo esas cadenas a mano puedes, mediante sprintf hacerlo automático. Te pongo un ejemplo y luego lo comento:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>char auxiliar&#91;64&#93;;<br />SDL_Surface* img&#91;8&#93;;<br /><br />for&#40;int k = 0; k &lt; 8; k++&#41;<br />&#123;<br />    sprintf&#40;auxiliar, &quot;tile%d.bmp&quot;, k&#41;;<br />    img&#91;k&#93; = SDL_LoadBMP&#40;auxiliar&#41;;<br />&#125;</code></dd></dl><br /><br />Con éste código cargarías 8 imágenes en un array de superficies (lo siento si he puesto alguna aberración, estoy escribiendo a toda prisa). ¿Pero qué es ek &quot;%d&quot; que he puesto en la cadena del segundo argumento? Pues eso significa que después va a haber un tercer argumento de tipo int que la función debe colocar en el lugar de la cadena que se encuentra &quot;%d&quot;. En tu caso, en lugar de %d pone &quot;%s&quot;, esto significa que el argumento será una cadena de caracteres. Había más combinaciones de %+caracter, pero no las recuerdo porque casi no las uso...  Con lo cual el comportamiento de: tu código viene a ser copiar dentro de &quot;msg&quot; lo que hay dentro de la cadena &quot;texto&quot;. Por supuesto, puedes combinar varias opciones de las que te dije de esta forma:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>sprintf&#40;auxiliar, &quot;Hola %s, tienes %d anos&quot;, nombre, edad&#41;;</code></dd></dl><br /><br />Si suponemos que la cadena nombre es &quot;Pepe&quot; y que la variable int edad vale 28, pues la cadena auxiliar contendría algo así como:<br /><br />Hola Pepe, tienes 28 anos<br /><br />Espero que lo hayas entendido. Si he dicho algo mal, por favor, corregidme. No soy muy experto en estas cosas.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1909">Alex_13_estu</a> — Sab Abr 12, 2008 12:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-12T10:48:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1131#p1131</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1131#p1131"/>
<title type="html"><![CDATA[funcion sprintf();]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=289&amp;p=1131#p1131"><![CDATA[
Hola, he visto en un pdf la funcion sprintf() en un ejemplo, y quisiera saber que es lo que hace realmente, porque aunque por el contexto se pueda intuir algo me gustaria saber lo que hace exactamente.<br /><br />Hos pongo parte del ejemplo, donde sale:<br /><dl class="codebox"><dt>Code: </dt><dd><code>fuente = TTF_OpenFont&#40;&quot;ariblk.ttf&quot;,20&#41;;<br />fgcolor.r=200;<br />fgcolor.g=200;<br />fgcolor.b=10;<br />bgcolor.r=255;<br />bgcolor.g=0;<br />bgcolor.b=0;<br />sprintf&#40;msg,&quot;%s&quot;,texto&#41;;<br />ttext = TTF_RenderText_Shaded&#40;fuente,msg,fgcolor,bgcolor&#41;;<br />rectangulo.y=100;<br />rectangulo.x=100;<br />rectangulo.w=ttext-&gt;w;<br />rectangulo.h=ttext-&gt;h;<br />SDL_SetColorKey&#40;ttext,SDL_SRCCOLORKEY|SDL_RLEACCEL, SDL_MapRGB&#40;ttext-&gt;format,255,0,0&#41;&#41;;<br />SDL_BlitSurface&#40;ttext,NULL,screen,&amp;rectangulo&#41;;<br />TTF_CloseFont&#40;fuente&#41;;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Abr 12, 2008 10:48 am</p><hr />
]]></content>
</entry>
</feed>