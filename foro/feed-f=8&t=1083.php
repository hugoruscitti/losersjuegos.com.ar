<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1083" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-23T20:05:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1083</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-23T20:05:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5324#p5324</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5324#p5324"/>
<title type="html"><![CDATA[Re: Nueva clase al pulsar un boton]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5324#p5324"><![CDATA[
Ah no sabia que se podia poner tambien un 0 en lugar del \0. Pues perfecto entonces, a programarrrr <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Mar 23, 2011 8:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-03-17T22:40:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5270#p5270</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5270#p5270"/>
<title type="html"><![CDATA[Re: Nueva clase al pulsar un boton]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5270#p5270"><![CDATA[
otro problema típico con los char[]: acuerdate siempre de que el ultimo carácter tiene que ser nulo ( o 0 o '\0') puesto que es la manera que tiene C de marcar el final de una cadena, y algunas funciones y algoritmos tienen este detalle en cuenta<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 17, 2011 10:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-17T22:24:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5268#p5268</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5268#p5268"/>
<title type="html"><![CDATA[Re: Nueva clase al pulsar un boton]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5268#p5268"><![CDATA[
No habia visto la nueva etiqueta, asi da gusto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />Voy a tener que usar la funcion strcpy que me decias, por que durante todo el programa he estado manipulando las cadenas casilla por casilla, en plan: <br /><pre class="prettyprint">if&#40;teclaAPulsada&#41;<br />{<br />cadena[letraActual] = &#39;a&#39;;<br />}</pre><br />Pero lo tendre muy en cuenta en el futuro, por que no veas la de problemas que he tenido con los char [] xDDD<br />Gracias de nuevo tio <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Mar 17, 2011 10:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-03-17T20:26:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5263#p5263</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5263#p5263"/>
<title type="html"><![CDATA[Re: Nueva clase al pulsar un boton]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5263#p5263"><![CDATA[
yo que tu me hacía un favor y cambiaba todos a std::string, te vas a quitar muchos problemas tontos.<br /><br />PD:<br />En cuanto a tus problemas:<br /><pre class="prettyprint">char titulo[255];<br />titulo = &quot;lo que introduzca el usuario&quot;;</pre><br /><br />aqui no estás asignando como tu crees. Lo que haces es:<br />- Reservo 255 caracteres<br />- Borro los 255 caracteres<br />- Reservo longitud de &quot;lo que introduzca el usuario&quot; caracteres y se lo asigno a titulo<br /><br /><pre class="prettyprint">tareas[numTarea]-&gt;titulo = titulo; //Aqui me tira un error que dice, no se puede realizar la conversión de &#39;char *&#39; a &#39;char [255]&#39;</pre><br />Aquí supongo que quieres copiar los datos al titulo de la clase. El problema es que tu titulo internamente no es más que un puntero, por eso te da el error de que no puede convertir tipos<br />Con cadenas de arrays, deberías hacer algo así como strcpy(titulo, tareas[indice]-&gt;titulo, 255);<br /><br />Como ves, es un coñazo trabajar con este tipo de cadenas. Hay juegos que lo usan, ya que puede llegar a ser más eficiente, pero te recomiendo que cambies todo a la clase string. Para que veas un ejemplo: <br /><br /><pre class="prettyprint">#include &lt;string&gt;<br /><br />class tarea<br />{<br />public:<br />std::string titulo;<br />//Y demas miembros<br />} ;<br /><br /><br />std::string titulo = &quot;lo que introduzca el usuario&quot;;<br /><br />if&#40;botonPulsado&#41;<br />{<br />tareas[numTarea] = new tarea&#40;&#41;; //No se que compilador estarás usando, pero la mayoría te exigen los parentesis después de los constructores. Es mejor ponerlos siempre<br />tareas[numTarea]-&gt;titulo = titulo; // Aquí ya no debería tirarte error<br />}</pre><br /><br />PD de la PD: hugo se ha currado una nueva etiqueta que se llama codigo. Es preferible usar esta, ya que te colorea el código y queda mejor<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 17, 2011 8:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-17T15:04:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5262#p5262</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5262#p5262"/>
<title type="html"><![CDATA[Re: Nueva clase al pulsar un boton]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5262#p5262"><![CDATA[
gracias juanxo, ya no me tira el error de compilacion. Una preguntita, para referirme a los miembros de la clase, simplemente tengo que usar el operador -&gt; en lugar del .?<br />Esque tengo un problemilla a la hora de dar valor a una cadena de la clase, <br />tengo la clase tarea, qeu seria algo asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class tarea<br />{<br />public:<br />char titulo&#91;255&#93;;<br />//Y demas miembros<br />} ;</code></dd></dl><br />Y simplemente quiero darle a la cadena de la clase el valor que haya escrito el usuario anteriormente en otra cadena:<br /><dl class="codebox"><dt>Code: </dt><dd><code>char titulo&#91;255&#93;;<br />titulo = &quot;lo que introduzca el usuario&quot;;<br /><br />if(botonPulsado)<br />{<br />tareas&#91;numTarea&#93; = new tarea;<br />tareas&#91;numTarea&#93;-&gt;titulo = titulo; //Aqui me tira un error que dice, no se puede realizar la conversión de 'char *' a 'char &#91;255&#93;'<br />}</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Mar 17, 2011 3:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-03-16T16:09:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5255#p5255</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5255#p5255"/>
<title type="html"><![CDATA[Re: Nueva clase al pulsar un boton]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5255#p5255"><![CDATA[
buenas miguel:<br /><br />No ibas mal encaminado del todo, pero el problema es que has intentado instanciar (crear con memoria dinámica) sobre un array estático ( ya le has dicho en tiempo de compilación cual es su tamaño, así que no puedes cambiar eso)<br /><br />En su lugar tendrías que hacer esto:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>tarea* tareas&#91;10&#93;;<br /><br />for (int i = 0; i &lt; 10 ; ++i)<br />  tareas&#91;i&#93; = new tarea(&quot;Soy la nueva tarea i&quot;);<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Mar 16, 2011 4:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-03-16T04:22:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5254#p5254</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5254#p5254"/>
<title type="html"><![CDATA[Nueva clase al pulsar un boton]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1083&amp;p=5254#p5254"><![CDATA[
buenas, estoy programando un gestor de tareas y estoy atascado con un tema de punteros, aver si me podeis hechar una manito con esto:<br />El tema es que tengo un clase llamada tarea y quiero que al pulsar un boton, se inicialice la clase. Y al pulsar otra vez el boton se inicialice otra nueva clase.<br /><br />Habia pensado en esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class tarea<br />{<br />    //miembros<br />    //metodos<br />};<br /><br />int numeroTareas = 0;<br />tarea * tareaActiva&#91;10&#93;; //Para poder activar un maximo de 10 tareas<br /><br />int main()<br />{<br />     if(botonPulsado)<br />     {<br />           tarea * tarea&#91;numeroTareas&#93; = new tarea;<br />           numeroTareas++;<br />     }<br />}<br /></code></dd></dl><br />Pero me da un error de sintaxis en la linea de &quot;tarea * tarea[numeroTareas] = new tarea;&quot;, como puedo hacerlo sin complicar mucho el codigo? Es la primera vez que uso memoria dinamica y punteros a arrays y no me aclaro mucho :S<br /><br />gracias por la ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Mar 16, 2011 4:22 am</p><hr />
]]></content>
</entry>
</feed>