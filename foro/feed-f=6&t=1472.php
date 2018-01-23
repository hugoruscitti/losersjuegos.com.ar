<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1472" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-06-30T21:17:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1472</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2012-06-30T21:17:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6887#p6887</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6887#p6887"/>
<title type="html"><![CDATA[Re: Generar disparos usando SDL y C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6887#p6887"><![CDATA[
Hola, al principio había entendido otra cosa, en el efecto al que te refieres efectivamente las balas salen de un un punto con direcciones diferentes y mantienen un vector fijo, pero mas adelante en el video vi que las balas se movían con una trayectoria curva y suave, eso quiere decir que el vector no es fijo, lo cual da un efecto mas interesante, no se si a eso te referías, pero te explico como lo haría:<br /><br />En la clase tienes dos valores que indican la velocidad, los cuales tiene un valor inicial cuando empieza el disparo, lo que tienes que hacer es cambiar esos valores una vez que el disparo esta en ejecución, pero el tener la velocidad descrita de esa forma no te sirve mucho para esto, lo mejor es que lo tengas en forma de vector, con velocidad y ángulo, esas serán las nuevas variables en ves de velx y vely, entonces al actualizar el disparo solo has la conversión del vector a coordenadas, es decir posx+=velocidad*cos(angulo); <br />Ahora en cada actualización del disparo si pones una linea como ángulo+=.3; veras que el disparo describe una trayectoria curva.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Jun 30, 2012 9:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-06-26T23:40:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6878#p6878</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6878#p6878"/>
<title type="html"><![CDATA[Re: Generar disparos usando SDL y C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6878#p6878"><![CDATA[
Me respondo a mi mismo pues he logrado ver el error que tenia...<br />Era muy simple el tipo de dato que tenia tanto para la posicion como para la velocidad la tenia:<br /><dl class="codebox"><dt>Code: </dt><dd><code>short int</code></dd></dl><br />eh ahi el error lo cambie a:<br /><dl class="codebox"><dt>Code: </dt><dd><code>float</code></dd></dl><br /><br />Y asi he logrado solucionar el problema de que no me generaba el efecto correctamente <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<br />Gracias por la ayuda me ha servido de mucho.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mar Jun 26, 2012 11:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-06-20T19:13:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6876#p6876</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6876#p6876"/>
<title type="html"><![CDATA[Re: Generar disparos usando SDL y C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6876#p6876"><![CDATA[
Hola de nuevo.<br />Bueno por fin he tenido algo de tiempo para intentar lo que me comentaste.<br />el codigo me quedo de la siguiente forma:<br /><dl class="codebox"><dt>Code: </dt><dd><code>short int balastotales = 0;<br />    for( counta = 1; counta &lt; MAXBALLSSATELIE; counta++){<br />        if( totBallsSatelite&#91;counta&#93;.activa == false ){<br />            totBallsSatelite&#91;counta&#93;.posx = x;<br />            totBallsSatelite&#91;counta&#93;.posy = y;<br />            totBallsSatelite&#91;counta&#93;.velx = cos( balastotales * (2*M_PI/10) )*2;<br />            totBallsSatelite&#91;counta&#93;.vely = sin( balastotales * (2*M_PI/10) )*2;<br />            totBallsSatelite&#91;counta&#93;.activa = true;<br />            balastotales += 1;<br />            if( balastotales &gt;= 10 ){<br />                counta += counta+MAXBALLSSATELIE;<br />                balastotales = 0;<br />            }<br />        }<br />    }<br />    return;<br /></code></dd></dl><br />Con esta funcion busca en una estructura que almacena la informacion de las balas, 10 espacios vacios para poder usar para crear el efecto que quiero. Las variables x, y son variables que recibe la funcion para indicar claro el puntos (x,y)<br /><dl class="codebox"><dt>Code: </dt><dd><code>for( counta = 1; counta &lt; MAXBALLSSATELIE; counta++){<br />        if( totBallsSatelite&#91;counta&#93;.activa == true ){<br />            totBallsSatelite&#91;counta&#93;.posx += totBallsSatelite&#91;counta&#93;.velx;<br />            totBallsSatelite&#91;counta&#93;.posy += totBallsSatelite&#91;counta&#93;.vely;<br />        }<br />    }<br /></code></dd></dl><br />Esta segunda funcion se encarga solo de mover las balas que esten actibas<br />El caso es que imaginemos que mi estructura es solo de 10 <br /><dl class="codebox"><dt>Code: </dt><dd><code>#define MAXBALLSSATELIE 10</code></dd></dl><br />pero cuando ejecuto el ejemplo me sale algo mas o menos asi:<br />.....*..*..*<br />..*...........*<br />.....*..*..*<br />Los asteriscos son las balas los puntos espacios vacios<br />con respecto al punto central, por lo que veo no me esta creando las 10 que necesito; que estare haciendo mal? habra forma de crear un circulo? (claro no necesariamente tienen que ser 10 balas para generar el circulo pueden ser mas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Jun 20, 2012 7:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-19T04:47:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6765#p6765</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6765#p6765"/>
<title type="html"><![CDATA[Re: Generar disparos usando SDL y C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6765#p6765"><![CDATA[
Me parece una muy buena idea probare a teclear un poco de codigo y estare comentando que tal los resultados, muchas gracias por la idea; me encanto  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Sab May 19, 2012 4:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-05-17T04:33:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6762#p6762</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6762#p6762"/>
<title type="html"><![CDATA[Re: Generar disparos usando SDL y C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6762#p6762"><![CDATA[
No sé a que te refieres exactamente con tener programado el movimiento, tal vez nos referimos a lo mismo pero con diferentes palabras, por las dudas te voy a explicar paso a paso como yo lo haría, ahí vez que parte te sirve y que parte descartas.<br /><br />Como no sé que lenguaje usas, voy a exponer la idea en forma similar a pseudocódigo.  <br /><br />Lo primero, es tener una clase para las balas, la cual, para la parte de movimiento deberá tener 4 variables (PosX - PosY - VelX -VelY).<br />La clase bala, solo necesita una única función para moverse, la cual, lo único que debe hacer es sumar a su posición , la variable velocidad.<br /><dl class="codebox"><dt>Code: </dt><dd><code>Public Class ClsBala{<br />...Public PosX<br />...Public PosY<br />...Public VelX<br />...Public VelY<br /><br />...Refrescar{<br />......PosX = PosX + VelX<br />......PosY = PosY + VelY<br />...}<br /><br />...SetDireccion (Angulo, Velocidad){<br />......VelX = Coseno(Angulo) * Velocidad<br />......VelY = Seno(Angulo) * Velocidad<br />...}<br />}<br /></code></dd></dl><br /><br />Con eso, la dirección de cada bala queda determinado solo como un par de números (los VelX y VelY), y hemos creado una función que permite generar esos valores a partir de un ángulo.<br /><br />Ahora, generar 10 balas que formen un circulo es solo cosa de un bucle.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>for (i = 0, i &lt; 10, i++){<br />...ListaBalas(i).PosX = 400<br />...ListaBalas(i).PosY = 300<br />...ListaBalas(i).SetDireccion( i * (2*pi/10), 2)<br /> }  <br /></code></dd></dl><br /><br />En ese ejemplo, todas las balas saldrán del punto (400, 300) al mismo tiempo pero en diferentes direcciones.<br />La dirección de salida está expresada como una formula en radianes (la unidad de trabajo habitual en los entornos de programación), donde 2*Pi [Rad]. = 360º<br /><br />Para que las balas se muevan, solo necesitas recorrer la lista de balas e ir actualizando su posición.<br /><dl class="codebox"><dt>Code: </dt><dd><code>for (i = 0, i &lt; 10, i++){<br />...ListaBalas(i).Refrescar<br /> }  <br /></code></dd></dl><br /><br />Espero no haber sido muy confuso y que la explicación sirviera para orientarte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Jue May 17, 2012 4:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-17T01:57:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6761#p6761</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6761#p6761"/>
<title type="html"><![CDATA[Re: Generar disparos usando SDL y C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6761#p6761"><![CDATA[
Gracias por responder tan rapido.<br />Con respecto al movimiento recto puedo generarlo sin problemas, el problema viene cuando intento hacer un circulo de objetos y moverlos independientemente sin antes haber programado el movimiento de cada uno de ellos, por eso decia yo que quiza se puede generar con alguna formula y asi evitar hacer que el codigo sea tan grande.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue May 17, 2012 1:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-05-17T01:32:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6760#p6760</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6760#p6760"/>
<title type="html"><![CDATA[Re: Generar disparos usando SDL y C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6760#p6760"><![CDATA[
Si tienes un objeto, este debe tener una posición y una velocidad.<br />Cuando actualices el movimiento te queda:<br />posición = posición + velocidad.<br /><br />De esta forma, la dirección de cada objeto queda determinado por el vector velocidad.<br /><br />En el caso de las balas que no suelen cambiar su dirección tienen una velocidad constante, por consiguiente el problema se reduce a generar la velocidad inicial.<br /><br />Ahora voy de salida pero llegando a la casa te puedo dar una mano con las formulas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Jue May 17, 2012 1:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2012-05-17T00:08:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6759#p6759</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6759#p6759"/>
<title type="html"><![CDATA[Generar disparos usando SDL y C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1472&amp;p=6759#p6759"><![CDATA[
Hola, aqui yo de nuevo...<br />Tengo una duda, sobre disparos de los personajes en concreto el siguiente efecto:<br /><a href="http://www.youtube.com/watch?v=7ySvfqN4gto&amp;feature=related" class="postlink">http://www.youtube.com/watch?v=7ySvfqN4gto&amp;feature=related</a><br />Para ser especificos un efecto como el que comienza en el segundo 28.<br />Mi pregunta es: Como se logra que realize disparos en un circulo de 360º y esos mismos disparos se muevan, se expandan y continuen moviendose hasta que salgan de pantalla o hasta que colisionen con un objetivo?<br />Imagino que se logra haciendo una clase que por ejemplo 10 disparos los acomode de cierto modo hasta cerrar el circulo. Ahora el problema es que imagino se hace con alguna ecuacion o algo por el estilo, pero; ni idea con que se pueda.<br />Pues hacer que cada disparo se mueva segun un movimiento prediseñado seria muy tardado en cuanto a programarlo, de ahi que imagino con una ecuacion que los acomode automaticamente seria mas rapido y una respuesta mejor.<br />Alguien tiene alguna idea?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue May 17, 2012 12:08 am</p><hr />
]]></content>
</entry>
</feed>