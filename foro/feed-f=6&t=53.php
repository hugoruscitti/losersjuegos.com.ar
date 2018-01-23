<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=53" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-03-03T03:11:21+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=53</id>
<entry>
<author><name><![CDATA[ligo]]></name></author>
<updated>2007-03-03T03:11:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=204#p204</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=204#p204"/>
<title type="html"><![CDATA[equivocacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=204#p204"><![CDATA[
hola, hugo me anuncio de un problema en mi código...<br />ya lo corregí, solo fue que no pase a presionar una tecla, haci que ahora les funciona de maravilla...<br /><br />gracias por esta exelente comunidad...<br /><br />Rodrigo Castillo<br /><br />(voten si les funciono el metodo modificado)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=341">ligo</a> — Sab Mar 03, 2007 3:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ligo]]></name></author>
<updated>2007-02-28T18:12:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=200#p200</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=200#p200"/>
<title type="html"><![CDATA[respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=200#p200"><![CDATA[
Ok hare lo que me dijeron... pero insisto que el codigo que e escrito funciona perfectamente...<br />de echo adelante pruebenlo.<br /><br />(este texto fue escrito con faltas pero solo por que uso un teclado en ingles y nose repetira, adios)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=341">ligo</a> — Mié Feb 28, 2007 6:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-02-28T18:04:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=199#p199</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=199#p199"/>
<title type="html"><![CDATA[Re: Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=199#p199"><![CDATA[
Ligo, he leído el comentario de Cristian varias veces y me parece correcto, <br />creo que ha hecho varias observaciones útiles y que merecen tu atención. No lo <br />tomes a mal, pero coincido en gran parte con lo que ha escrito y he notado<br />que su intensión es constructiva y respetuosa. <br /><br /><blockquote class="uncited"><div><br />1)sobre la ortografía:<br />no todos escriben perfecto...<br /></div></blockquote><br /><br />Veamos en estos términos: tu escribes un mensaje en uno o dos minutos pero<br />luego lo leerán muchas personas, durante mucho tiempo. Si tu no tomas en <br />cuenta al público de tus mensajes las personas lo notarán. Toma en <br />cuenta las opiniones de los demás, para eso existe el foro, para <br />comunicarnos.<br /><br />Pienso que la sugerencia de Cristian no busca que tu mensaje sea perfecto, <br />simplemente que lo redactes con mayor cuidado.<br /><br />Permite que realice otra sugerencia: puedes escribir el mensaje en un editor <br />de textos, que tenga un corrector ortográfico incluido (como openoffice), y <br />luego 'copiar'/'pegar' el texto escrito en el formulario del navegador. Así <br />es como hacemos muchos usuarios...<br /><br />Lo mismo se puede hacer con el código fuente del programa, generalmente <br />los programadores acostumbramos a 'compilar' el programa antes de publicarlo <br />en un foro o correo electrónico. <br /><br /><blockquote class="uncited"><div><br />es solo para saber si les resulto ya que haci si hay lago mal les aviso,<br />ademas si algo me sale mal puede ser solo por que lo escribo directamente<br />desde el post...<br /></div></blockquote><br /><br />Piensa que algunas personas conocerán la biblioteca Allegro por medio de este <br />mensaje, y cuando noten que el ejemplo publicado no funciona posiblemente <br />perderán el interés en ello; todo lo contrario a lo que buscamos en este <br />proyecto.<br /><br /><br />Nota que Cristian también hace un comentario sobre 'identación', esto es <br />importante dado que al leer el código de un programa se tiene que poder<br />observar los aspectos mas relevantes del programa, las estructuras de control <br />involucradas y como influyen en el mismo programa. Existe un texto muy<br />interesante al respecto en la siguiente web:<br /><br />   <!-- m --><a class="postlink" href="http://www.cs.famaf.unc.edu.ar/so2004/CodingStyle.html">http://www.cs.famaf.unc.edu.ar/so2004/CodingStyle.html</a><!-- m --><br /><br />Esta es una versión de tu programa corregido y probado siguiendo un estilo de <br />programación:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;allegro.h&gt;<br /><br />void inicio_de_juego&#40;&#41;<br />&#123;<br />    allegro_init&#40;&#41;;<br />    install_keyboard&#40;&#41;;<br /><br />    set_color_depth&#40;32&#41;;<br />    set_gfx_mode&#40;GFX_AUTODETECT, 640, 480, 0, 0&#41;;<br />&#125;<br /><br />void terminar&#40;&#41;<br />&#123;<br />    allegro_exit&#40;&#41;;<br />&#125;<br /><br />int main&#40;&#41;<br />&#123;<br />    inicio_de_juego&#40;&#41;;<br />    readkey&#40;&#41;;<br />    terminar&#40;&#41;;<br />    return 0;<br />&#125;<br /></code></dd></dl><br /><br />Luego, para generar un programa ejecutable desde el intérprete<br />de órdenes de GNU se puede ejecutar:<br />    <br />    gcc -o ejecutable ejemplo.c `allegro-config --libs --cflags`<br /><br />asumiendo que el programa está guardado en el directorio <br />actual bajo el nombre 'ejemplo.c'.<br /><br />Al intentar compilar el programa original noté varios detalles para <br />corregir, detalles que a primera vista no los había advertido. Por ejemplo <br />la función 'inicio_de_juego' llama a 'allegro_exit()' lo cual no termina <br />inmediatamente con el programa. Este es uno de los motivos por el cual <br />sería deseable que analices el programa con un compilador antes de publicarlo.<br /><br /><blockquote class="uncited"><div><br />haci que si quieres, no comparto mas solo dilo, ok?<br /></div></blockquote><br /><br />Insisto, es solo una sugerencia, pero creo que sería un gesto muy respetuoso<br />de tu parte que revises el mensaje una vez mas y realices algunas correcciones <br />a lo escrito.<br /><br />Cristian, a mi entender, ha sido respetuoso y ha redactado varias sugerencias<br />constructivas. Piensa que ambos se han inscripto hace muy poco tiempo y esta <br />no es forma de recibirnos, debemos ser mas cordiales.<br /><br />Buscamos una comunidad ¿no?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Feb 28, 2007 6:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ligo]]></name></author>
<updated>2007-02-24T18:48:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=189#p189</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=189#p189"/>
<title type="html"><![CDATA[Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=189#p189"><![CDATA[
Con mucho respeto Don Cristian...<br /><br />1)sobre la ortografía:<br /><br />no todos escriben perfecto...<br /><br />2)¿Copia de otra web?:<br /><br />yo programo allegro y antes SDL, y esto lo e puesto ya que hugo, me a dicho que es bueno compartir...<br /><br />3)sobre la encuesta:<br /><br />es solo para saber si les resulto ya que haci si hay lago mal les aviso, ademas si algo me sale mal puede ser solo por que lo escribo directamente desde el post...<br /><br />haci que si quieres, no comparto mas solo dilo, ok?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=341">ligo</a> — Sab Feb 24, 2007 6:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cristian]]></name></author>
<updated>2007-02-24T06:36:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=187#p187</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=187#p187"/>
<title type="html"><![CDATA[Una ventana en allegro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=187#p187"><![CDATA[
Don Ligo, algunas críticas constructivas:<br /><br />1) Cuida la ortografía cuando escribas algo. La redacción, los tildes y todo eso. Se ve bastante feo cuando se lee un texto con tanta falta de ortografía!<br /><br />2) Veo que has estado colocando encuestas con código. Primero SDL y ahora Allegro. No le veo mucho sentido a esto, estas copiando y pegando código de otros sitios. Además ni siquiera los copias bien, ya que las funciones están mal escritas, algunas. Y nada nuevo, eso lo podemos encontrar en los tutoriales que están en este sitio, y en todo Internet. <br />Creo que ví ese mismo código o algo similar en la ayuda que trae la librería o biblioteca para los más puristas. Lo mismo en SDL, parece extraído de la misma documentación, más encima mal escrito.<br /><br />3) El código se ve demasiado desordenado. Falta una buena identación.<br /><br />4) Se nota que el código ni siquiera ha sido probado ni compilado, o sino no habrían tantos detalles o cosas mal escritas. ¬¬<br /><br />5) Eso de recomendar una cosa, cuando la otra no te funcionó. Hay que estar seguro de lo que se escribe. Nada de profesionalismo acá!.<br /><br />6) Revisa bien los enlaces antes de postear.<br /><br />7) Por último, el lenguaje que utilizas digamos que no es muy adhoc. Siempre con un tono un poco subido, es decir, como tratando de mandar a la gente a que haga algo, o tratando de imponer alguna cosa.<br /><br /><span style="font-weight: bold">Consejo:</span> Cuando preguntes algo en la red, en foros, listas, grupos, etc. trata de hacerlo de forma respetuosa, y con una buena redacción. Y nunca en mayúsculas (o sino pareciera que estuvieras gritando). <br /><br />Si lo haces como te de la gana, la gente no tendrá ánimo de responderte, menos aun si escribes mal y con un tono bastante irrespetuoso. <br /><br />Además lo vuelvo a reiterar, cuida la ortografía. Y escribe con un tono más humilde.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=597">cristian</a> — Sab Feb 24, 2007 6:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ligo]]></name></author>
<updated>2007-02-24T00:46:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=186#p186</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=186#p186"/>
<title type="html"><![CDATA[Una ventana en allegro]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=53&amp;p=186#p186"><![CDATA[
Bueno e empesado a programar en allegro, de veras la encontre genial, no solo por que es multiplataforma sino por que es mas simple XD...<br />He aprendido mucho de aquel libro que esta en losers, o ademas ingresen a <!-- m --><a class="postlink" href="http://gda.utp.edu.coy">http://gda.utp.edu.coy</a><!-- m --> ahi muy buenos tutoriales, eso si muy cortos...<br />bueno entonces hagamos lo nuestro<br /><blockquote class="uncited"><div><br />/*Insertamos lo tipico que son las librerias para poder 'cargar' Allegro*/<br />#include&lt;stdio.h&gt;<br />#include&lt;stdlib.h&gt;<br />/*y cargamos allegro XD*/<br />#include&lt;allegro.h&gt;<br />/*Pues el metodo que ahora enseño es para que quede mas ordenado, entonces escrivimos*/<br />int inicio_de_juego()<br />{<br />        allegro_init(); /*Abrimos allegro*/<br />        install_keyboard();/*empesamos a instalar lo recomendado*/<br />        install_mouse();<br />        install_timer();<br />        /*ahora bien haremos al definir los bits de nuestra aplicacion                                           en este caso 32, para una mejor nitides en nuestro juego*/<br />        set_color_depth(32);<br />        /*y dibujamos la ventana*/<br />        set_gfx_mode(GFX_AUTODETECT,639,479,0,0);<br />        allegro_exit();<br /><br />}<br /><br />void terminar(); /*ahora esta funcion sera la que hace cerrar allegro*/<br />{<br />       allegro_exit();<br />}<br /><br />int main()/*Por ultimo, lo que se mostrara en pantalla*/<br />{<br />    /*Y insertamos nuestros 'respaldos'*/<br />      inicio_de_juego();<br />      /*Y por ultimo un extra, se trata de que cuando uno aprete una tecla(en este caso ESCAPE) salga de la aplicacion en cualquier lado donde este, pero igual sirve con cada funcion independiente*/<br />      while(!key[KEY_ESC])<br />      {<br />      }<br />     terminar();<br />}<br />/*Y terminasmos nuestra ventana con ademas un sistema de salida XD*/<br /></div></blockquote><br /><br />Y para compilar: <br /><br />en GNU:<br /><br />con anjuta:<br /><br />vete al menu Opciones, en la barra, luego a Opciones del compilador y enlazador..., luego en opciones escrive:<br /><br />`allegro-config --cflags` `allegro-config --libs`<br /><br />en flags de compilador...<br /><br />En GCC escribe:<br /><br />gcc miventanaallegro -o miventana `allegro-config --cflags` `allegro-config --libs`<br /><br />(yo lo recomiendo en anjuta, ya que en el g++ ya sea desde el kate, me envia un error)<br />y eso es todo...<br />bueno espero que les haya gustado...<br /><br />Rodrigo Castillo 100% Chileno...<br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=341">ligo</a> — Sab Feb 24, 2007 12:46 am</p><hr />
]]></content>
</entry>
</feed>