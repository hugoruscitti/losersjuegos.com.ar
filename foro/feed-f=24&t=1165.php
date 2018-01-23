<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1165" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-01T16:28:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1165</id>
<entry>
<author><name><![CDATA[kerveros]]></name></author>
<updated>2011-06-01T16:28:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5608#p5608</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5608#p5608"/>
<title type="html"><![CDATA[Re: Posible Bug al asignar imagen a un actor]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5608#p5608"><![CDATA[
Nuevamente Gracias.<br />Aplicare el método de la clase.<br /><br />nuevamente mil gracias.<br /><br /><blockquote><div><cite>pchack escribió:</cite><br />Existen varias formas de hacer lo que dices, explicare 2:<br />La primera es entregándole un argumento a la función fabricar y la segunda es creando una clase personalizada de Actor.<br /><br />Explico la primer:<br />Cuando llamas al método pilas.atajos.fabricar(pilas.actores.Actor, 15) tu puedes entregarle un argumento para que este sea entregado al metodo __init__ de la clase Actor que a su vez carga la imagen.<br /><br /><pre class="prettyprint">grupo = pilas.atajos.fabricar&#40;pilas.actores.Actor, 15, imagen = &quot;ruta_imagen&quot;&#41;</pre><br />El argumeno imagen se entrega a la clase Actor y es como decir:<br /><pre class="prettyprint">pilas.actores.Actor&#40;imagen = &quot;ruta_imagen&quot;&#41;</pre><br /><br />Y quedaría solucionado.<br /><br />La segunda forma es crear un actor persolanizado y se hace así:<br /><br /><pre class="prettyprint">import pilas<br />from pilas.actores import Actor<br /><br />pilas.iniciar&#40;&#41;<br /><br />class actor_personalizado&#40;Actor&#41;:<br />    def __init__&#40;self, x = 0, y = 0&#41;: <br />        imagen = pilas.imagenes.cargar&#40;&#39;ruta_imagen&#39;&#41;<br />        Actor.__init__&#40;self, imagen, x=x, y=y&#41;<br /><br /><br />grupo = pilas.atajos.fabricar&#40;actor_personalizado, 15&#41;<br /><br /><br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Eso seria, Saludos.<br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2444">kerveros</a> — Mié Jun 01, 2011 4:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-06-01T16:08:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5607#p5607</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5607#p5607"/>
<title type="html"><![CDATA[Re: Posible Bug al asignar imagen a un actor]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5607#p5607"><![CDATA[
Existen varias formas de hacer lo que dices, explicare 2:<br />La primera es entregándole un argumento a la función fabricar y la segunda es creando una clase personalizada de Actor.<br /><br />Explico la primer:<br />Cuando llamas al método pilas.atajos.fabricar(pilas.actores.Actor, 15) tu puedes entregarle un argumento para que este sea entregado al metodo __init__ de la clase Actor que a su vez carga la imagen.<br /><br /><pre class="prettyprint">grupo = pilas.atajos.fabricar&#40;pilas.actores.Actor, 15, imagen = &quot;ruta_imagen&quot;&#41;</pre><br />El argumeno imagen se entrega a la clase Actor y es como decir:<br /><pre class="prettyprint">pilas.actores.Actor&#40;imagen = &quot;ruta_imagen&quot;&#41;</pre><br /><br />Y quedaría solucionado.<br /><br />La segunda forma es crear un actor persolanizado y se hace así:<br /><br /><pre class="prettyprint">import pilas<br />from pilas.actores import Actor<br /><br />pilas.iniciar&#40;&#41;<br /><br />class actor_personalizado&#40;Actor&#41;:<br />    def __init__&#40;self, x = 0, y = 0&#41;: <br />        imagen = pilas.imagenes.cargar&#40;&#39;ruta_imagen&#39;&#41;<br />        Actor.__init__&#40;self, imagen, x=x, y=y&#41;<br /><br /><br />grupo = pilas.atajos.fabricar&#40;actor_personalizado, 15&#41;<br /><br /><br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Eso seria, Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mié Jun 01, 2011 4:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kerveros]]></name></author>
<updated>2011-06-01T15:22:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5606#p5606</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5606#p5606"/>
<title type="html"><![CDATA[Re: Posible Bug al asignar imagen a un actor]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5606#p5606"><![CDATA[
el problema surge cuando quieres hacer actores en grupo asi:<br /><br /><pre class="prettyprint">def creaobjetos&#40;&#41;:<br />        ## Klingon Bird Of Prey ##<br />        kbop = pilas.atajos.fabricar&#40;pilas.actores.Actor, 15&#41;<br />        for i in range&#40;15&#41;:<br />                kbop[i].imagen = &quot;imagenes/bop.png&quot;<br />                kbop[i].centro = &#40;&quot;centro&quot;,&quot;centro&quot;&#41;</pre><br /><br />si lo creas asi no puedes definirle la imagen en la creación del grupo, cuando lo intente me genero un error, por que fabricar, no acepta métodos, solo objetos. <br /><br /><blockquote><div><cite>pchack escribió:</cite><br />Creo que si se podria hacer lo que tu dices pero no creo que sea necesario. En pilas tu puedes crear un actor con una imagen que tu decidas de la siguiente forma:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />imagen = pilas.imagenes.cargar&#40;&quot;ruta_imagen&quot;&#41;<br />actor = pilas.actores.Actor&#40;imagen&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br /><br />Esta forma es la más común de crear un actor nuevo con imagen personalizada, en este caso el centro se configura automático.<br /><br />Saludos.<br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2444">kerveros</a> — Mié Jun 01, 2011 3:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-06-01T13:32:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5605#p5605</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5605#p5605"/>
<title type="html"><![CDATA[Re: Posible Bug al asignar imagen a un actor]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5605#p5605"><![CDATA[
Creo que si se podria hacer lo que tu dices pero no creo que sea necesario. En pilas tu puedes crear un actor con una imagen que tu decidas de la siguiente forma:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />imagen = pilas.imagenes.cargar&#40;&quot;ruta_imagen&quot;&#41;<br />actor = pilas.actores.Actor&#40;imagen&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br /><br />Esta forma es la más común de crear un actor nuevo con imagen personalizada, en este caso el centro se configura automático.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mié Jun 01, 2011 1:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kerveros]]></name></author>
<updated>2011-06-01T04:48:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5604#p5604</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5604#p5604"/>
<title type="html"><![CDATA[Re: Posible Bug al asignar imagen a un actor]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5604#p5604"><![CDATA[
Mil gracias, claro que me sirvió tu explicación, deberíamos proponer a Hugo la ejecución de esa función automáticamente al momento de definir una nueva imagen para un actor.<br /><br />Nuevamente mil gracias<br /><br /><blockquote><div><cite>pchack escribió:</cite><br />Que tal kerveros!,<br /><br />Este problema ocurre debido a que cuando creas un actor sin argumentos:<br /><pre class="prettyprint">nave = pilas.actores.Actor&#40;&#41;</pre><br />por defecto se inicializa la imagen siguiente:<br />sin_imagen.png<br /><br />Y el centro se establece para esta imagen por lo que al cambiar la imagen sigue teniendo el mismo centro esto se corrige agregando lo siguiente:<br /><br /><pre class="prettyprint">nave.centro = &#40;&quot;centro&quot;, &quot;centro&quot;&#41;</pre><br /><br />Lo que hace definir el centro del actor respecto a las proporciones de la nueva imagen.<br /><br />código completo corregido:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br />eje = pilas.actores.Ejes&#40;&#41; #linea para mostrar el plano cartesiano<br />nave = pilas.actores.Actor&#40;&#41;<br /><br />imagen_nave = pilas.imagenes.cargar&#40;&quot;ruta_imagen.extension&quot;&#41;<br />nave.imagen = imagen_nave<br /><br />nave.centro = &#40;&quot;centro&quot;, &quot;centro&quot;&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Eso es, espero que sirva la explicación.<br /><br />Saludos.<br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2444">kerveros</a> — Mié Jun 01, 2011 4:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-06-01T04:05:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5603#p5603</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5603#p5603"/>
<title type="html"><![CDATA[Re: Posible Bug al asignar imagen a un actor]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5603#p5603"><![CDATA[
Que tal kerveros!,<br /><br />Este problema ocurre debido a que cuando creas un actor sin argumentos:<br /><pre class="prettyprint">nave = pilas.actores.Actor&#40;&#41;</pre><br />por defecto se inicializa la imagen siguiente:<br />sin_imagen.png<br /><br />Y el centro se establece para esta imagen por lo que al cambiar la imagen sigue teniendo el mismo centro esto se corrige agregando lo siguiente:<br /><br /><pre class="prettyprint">nave.centro = &#40;&quot;centro&quot;, &quot;centro&quot;&#41;</pre><br /><br />Lo que hace definir el centro del actor respecto a las proporciones de la nueva imagen.<br /><br />código completo corregido:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br />eje = pilas.actores.Ejes&#40;&#41; #linea para mostrar el plano cartesiano<br />nave = pilas.actores.Actor&#40;&#41;<br /><br />imagen_nave = pilas.imagenes.cargar&#40;&quot;ruta_imagen.extension&quot;&#41;<br />nave.imagen = imagen_nave<br /><br />nave.centro = &#40;&quot;centro&quot;, &quot;centro&quot;&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Eso es, espero que sirva la explicación.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mié Jun 01, 2011 4:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kerveros]]></name></author>
<updated>2011-06-01T01:41:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5602#p5602</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5602#p5602"/>
<title type="html"><![CDATA[Posible Bug al asignar imagen a un actor]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1165&amp;p=5602#p5602"><![CDATA[
Hola a todos.<br />Este posible bug ocurre cuando se quiere crear un actor de la siguiente manera:<br /><dl class="codebox"><dt>Code: </dt><dd><code>import pilas<br />pilas.iniciar()<br />eje = pilas.actores.Ejes() #linea para mostrar el plano cartesiano<br />nave = pilas.actores.Actor()<br />imagen_nave = pilas.imagenes.cargar(&quot;ruta_de_su_imagen&quot;)<br />nave.imagen = imagen_nave<br /></code></dd></dl><br /><br />En teoría esto debería posicionar el actor con su imagen en el centro del plano cartesiano, pero no. <br />Cuando se crea un actor asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>nave = pilas.actores.Actor(&quot;ruta_de_su_imagen&quot;)<br /></code></dd></dl><br />funciona perfectamente, comentenme si a ustedes también les ocurre o es solo a mi.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2444">kerveros</a> — Mié Jun 01, 2011 1:41 am</p><hr />
]]></content>
</entry>
</feed>