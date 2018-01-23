<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=3017" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-04-24T12:06:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=3017</id>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-04-24T12:06:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9217#p9217</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9217#p9217"/>
<title type="html"><![CDATA[Re: Problema: usar función de una clase en una librería diná]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9217#p9217"><![CDATA[
Ya encontré el problema, era causado por una pequeña linea del código:<br /><pre class="prettyprint">dlclose&#40;lib&#41;;</pre><br />Eso hacia que la memoria de la librería quedara inaccesible.<br />Ahora moví la linea de lugar para que se llame solo al cambiar de sala o al salir del programa.<br /><br />Gracias por intentar ayudarme Barajas  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> .<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Mié Abr 24, 2013 12:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-04-24T11:02:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9216#p9216</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9216#p9216"/>
<title type="html"><![CDATA[Re: Problema: usar función de una clase en una librería diná]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9216#p9216"><![CDATA[
Mi problema no es como usar &quot;virtual&quot; o como redefinir funciones así.<br />Mi problema es que usando librerías dinámicas (Los &quot;.so&quot;) intento redefinir una función que se encuentra dentro de mi código.<br />Una cosa que intente fue intentar hacer un puntero a una función del .so en mi programa pero al momento de llamar la función, la memoria a la que apuntaba el puntero se volvió inaccesible.<br /><br />Lo que quiero es definir como actúan los enemigos desde fuera del programa, así pueden hacer variedad de cosas, la memoria solo carga lo necesario y el ejecutable queda pequeño.<br /><br /><blockquote><div><cite>Barajas escribió:</cite><br />(además, no es por ofender, pero tu código es muy jeroglífico  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  )<br /></div></blockquote><br /><br />Jajaja, yo lo entiendo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> .<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Mié Abr 24, 2013 11:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-04-24T02:48:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9215#p9215</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9215#p9215"/>
<title type="html"><![CDATA[Re: Problema: usar función de una clase en una librería diná]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9215#p9215"><![CDATA[
<blockquote><div><cite>Ezequiel Pereira escribió:</cite><br />El ejecutable de mi juego usa librerías dinámicas para ahorrar peso en el ejecutable y que sea fácil de editar.<br />Pero en una librería necesito usar clases, derivar de las mismas y re-definir una función para hacer personajes &quot;vivos&quot; en mi juego pero tengo un problema.<br /></div></blockquote><br /><br />Eso se llama programación dinámica, es decir, crear cosas en tiempo de ejecución, si, entiendo, es un problema común, y más por que para hacerlo se tienen que utilizar punteros...<br /><br /><blockquote><div><cite>Ezequiel Pereira escribió:</cite><br />No logro solucionarlo con nada y con GDB no encuentro nada raro, lo único que encuentro es que el error esta en la linea 523 de util.h.<br /></div></blockquote><br /><br />Eso es por que intentas acceder a lugares &quot;oscuros&quot; de la memoria. (a eso se le conoce como &quot;segmentation fault (core dumped) &quot;/&quot;Fallo de segmentación (nucleo volcado)&quot; )  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br /><br />Aquí dejare un ejemplo de código que yo he hecho, utilizando vector y que permite utilizar la herencia, si tienes dudas, pregunta.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> <br /><br />(además, no es por ofender, pero tu código es muy jeroglífico  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  )<br /><br /><pre class="prettyprint">#include &lt;vector&gt;<br /><br />//creo un vector que contiene apuntadores a la clase Sprite.<br />//es un apuntador para permitir utilizar la herencia...<br />//typedef es un viejo truco en c que permite utilizar un alias, en lugar de escribir vector&lt;Sprite*&gt;<br />//puedo escribir SpriteGrup, que es mucho mas intuitivo. Pero esto solo aplica a tipos de datos.<br /><br />typedef vector&lt;Sprite*&gt; SpriteGrup;<br /><br /><br />//creamos un iterador, permite hacer algunos bucles más fáciles...<br />SpriteGrup::iterator it;<br /><br /><br />//creo una función para limpiarlo, recuerda, que los punteros no liberan memoria en automático...<br />void limpia_grupo&#40;SpriteGrup Grupo&#41;{<br />    int i;<br />    for&#40;i = 0; i &lt; Grupo.size&#40;&#41;; ++i&#41; delete Grupo[i];<br />    };<br /><br /><br />//defino un grupo para poder trabajar con los Enemigos...<br />SpriteGrup ENEMIGOS;<br />//también creo un puntero que me permitirá usar la magia de la herencia de forma dinamica<br />Enemigo *   SPR_ENEMIGO;<br /><br />//los Enemigos heredan directamente de los Sprites<br />//pero como los Enemigos siguen siendo Sprites, podemos meterlos en un grupo de Sprites<br />//de esta manera...<br /><br />ENEMIGOS.push_back&#40; new Enemigo&#40;&#41; &#41;;<br /><br />//o de esta otra...<br /><br />Enemigo * temp = new Enemigo&#40;&#41;;<br />ENEMIGOS.push_back&#40; temp &#41;;<br /><br /><br />//ya en el juego...<br />for&#40;i=0;i&lt;ENEMIGOS.size&#40;&#41;;i++&#41;{<br />     ENEMIGOS[i]-&gt;update&#40;&#41;;<br />      //update es un método virtual de la clase Sprite. Todos los hijos de Sprite la pueden usar...<br />     //pero enemigo lo redefine, por esto es que esta definida como virtual <br />     <br />     //pero para las cosas que solo puede hacer el sus hijos &#40;en este caso, la clase Enemigo *&#41;<br />     //hay que hacer un &quot;cast&quot; &#40;en español seria algo así como &quot;lanzar&quot;, &quot;arrojar&quot;&#41;<br />     //es decir, indicarle a ese Sprite* que debe convertirse en la clase Enemigo*<br />     SPR_ENEMIGO = &#40;Enemigo *&#41;ENEMIGOS[i]; //recordemos que ENEMIGOS[i] es un Sprite*<br />     <br />    //una vez terminado, podemos llamar a los métodos que solo puede usar la clase Enemigo<br />     SPR_ENEMIGO-&gt;Hacer_Algo_Que_Solo_Puede_Hacer_El_Enemigo&#40;&#41; ;<br />     }<br /><br />//mas adelante...<br />//la razón del iterador...<br />for &#40;it = ENEMIGOS.begin&#40;&#41;; it != ENEMIGOS.end&#40;&#41;; it++&#41; &#40;*it&#41;-&gt;draw_center&#40;pantalla&#41;;<br />//nos ahorra lineas, recordemos que ENEMIGOS contiene Sprites* y &quot;draw_center&quot;<br />//ese es un método de los Sprites<br />//lamentablemente, con el iterador no podemos hacer cast para utilizar la herencia.</pre><br /><br />Espero haber sido lo bastante claro, si no, pregunta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Abr 24, 2013 2:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ezequiel Pereira]]></name></author>
<updated>2013-04-23T00:28:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9214#p9214</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9214#p9214"/>
<title type="html"><![CDATA[Problema: usar función de una clase en una librería dinámica]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3017&amp;p=9214#p9214"><![CDATA[
El ejecutable de mi juego usa librerías dinámicas para ahorrar peso en el ejecutable y que sea fácil de editar.<br />Pero en una librería necesito usar clases, derivar de las mismas y re-definir una función para hacer personajes &quot;vivos&quot; en mi juego pero tengo un problema.<br />Carga la librería y se almacena en una lista un objeto que representa a un personaje sin problemas pero al intentar llamar la función &quot;update&quot; de este, el programa falla.<br />Yo creo que el problema es el &quot;virtual&quot; con el que defino la función pero sin él, update es lo mismo que la nada.<br /><br />No logro solucionarlo con nada y con GDB no encuentro nada raro, lo único que encuentro es que el error esta en la linea 523 de util.h.<br /><br /><a href="https://docs.google.com/file/d/0B9fGBUPoau1_RUJhUF9UMlIya3c/edit?usp=sharing" class="postlink">Ver/Descargar código fuente</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3088">Ezequiel Pereira</a> — Mar Abr 23, 2013 12:28 am</p><hr />
]]></content>
</entry>
</feed>