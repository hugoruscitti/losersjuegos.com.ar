<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1204" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-15T03:58:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1204</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-07-15T03:58:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5721#p5721</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5721#p5721"/>
<title type="html"><![CDATA[Re: Ingreso de Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5721#p5721"><![CDATA[
ah... ya se... estamos usando versiones distintas...<br /><br />No te preocupes, esta es la version adaptada del nuevo control<br />de texto para la version que estás usando:<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/src/4e413791649f/pilas/interfaz/ingreso_de_texto.py">https://bitbucket.org/hugoruscitti/pila ... e_texto.py</a><!-- m --><br /><br />por cierto, para los que quieran seguir los últimos cambios en el repositorio, yo<br />estoy mucho mas metido en el branch &quot;motorqt4&quot;:<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/changesets">https://bitbucket.org/hugoruscitti/pilas/changesets</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Jul 15, 2011 3:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-07-15T01:22:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5720#p5720</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5720#p5720"/>
<title type="html"><![CDATA[Re: Ingreso de Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5720#p5720"><![CDATA[
que bueno Hugo!!!!!!! <br /><br />me alegra que hayas tomado en cuenta mi requerimiento..<br /><br />copie y pegué el codigo que cambiaste y me aparece lo siguiente cuando ejecuto el programa:<br /><pre class="prettyprint">File &quot;/home/Proyecto/DisGame/IQ/escena_aritmetica.py&quot;, line 79, in iniciar_juego<br />    self.entrada = pilas.interfaz.IngresoDeTexto&#40;ancho = 100&#41;<br />  File &quot;/home/carla/pilas/pilas/interfaz/ingreso_de_texto.py&quot;, line 18, in __init__<br />    self._cargar_lienzo&#40;ancho&#41;<br />  File &quot;/home/carla/pilas/pilas/interfaz/ingreso_de_texto.py&quot;, line 64, in _cargar_lienzo<br />    self.imagen = pilas.imagenes.cargar_superficie&#40;ancho, 30&#41;<br />AttributeError: &#39;module&#39; object has no attribute &#39;cargar_superficie&#39;</pre><br /><br />por que será???<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Vie Jul 15, 2011 1:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-07-14T22:04:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5719#p5719</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5719#p5719"/>
<title type="html"><![CDATA[Re: Ingreso de Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5719#p5719"><![CDATA[
Ahí lo implementé!! quedó bien:<br /><br /> <a href="http://www.youtube.com/v/oo0fG1YEMxs"></param><param target="_blank"><strong>object</strong></a> <br /><br /><!-- m --><a class="postlink" href="http://youtu.be/oo0fG1YEMxs">http://youtu.be/oo0fG1YEMxs</a><!-- m --><br /><br />El código que modifiqué es de la clase &quot;IngresoDeTexto&quot;: <br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/changeset/67cf46e5f557">https://bitbucket.org/hugoruscitti/pila ... cf46e5f557</a><!-- m --><br /><br />Si me hago un tiempo el fin de semana, después de la charla<br />de pilas que doy el sábado, me pongo a mejorar un poco<br />los ejemplos para mostrar estas nuevas funcionalidades.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jul 14, 2011 10:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-07-14T15:06:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5718#p5718</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5718#p5718"/>
<title type="html"><![CDATA[Re: Ingreso de Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5718#p5718"><![CDATA[
Hola Hugo!!!<br /><br />a recortar me refiero con el tamaño de la caja de texto, ya que si uno la necesita solo para escribir 2 caracteres entonces es una caja muy grande.. <br /><br />y con respecto a las validaciones, debería tener métodos que ayuden a especificar qué tipo de datos va a aceptar la caja de texto. <br /><span style="font-weight: bold"><span style="text-decoration: underline">ejemplo</span></span>: si solo quiero que en la caja se escriban numeros, podria haber un metodo algo asi como: <pre class="prettyprint">cajadeTexto.numerica&#40;&#41;</pre> o si solo quiero que acepte letras entonces: <pre class="prettyprint">cajadeTexto.alfabetica&#40;&#41;</pre><br /><br />y tambien se podrian hacer metodos para validar la cantidad de caracteres que se pueden ingresar: <pre class="prettyprint">cajadeTexto.max_caracteres = 5</pre> ==&gt; solo permite hasta 5 caracteres....<br /><br />me entiendes???<br /><br /> si lo implementas me avisas para incluirlo en mi trabajo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Jue Jul 14, 2011 3:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-07-11T17:45:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5712#p5712</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5712#p5712"/>
<title type="html"><![CDATA[Re: Ingreso de Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5712#p5712"><![CDATA[
no... por el momento no se puede... pero podríamos implementarlo.<br /><br />¿a que te refieres exactamente con acortar?, ¿es el tamaño de la fuente<br />o el area rectángular?.<br /><br />¿y validaciones de que tipo? ¿me podrías dar un ejemplo?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Jul 11, 2011 5:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-07-11T14:51:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5711#p5711</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5711#p5711"/>
<title type="html"><![CDATA[Ingreso de Texto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1204&amp;p=5711#p5711"><![CDATA[
<span style="font-weight: bold">Buenos Dias chicos</span><br /><br />espero que esten bien...<br /><br />unas preguntas: <br />     ¿hay alguna forma de acortarle el tamaño al IngresoDeTexto? <br />     ¿hay algun metodo para validar lo que se ingrese?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Jul 11, 2011 2:51 pm</p><hr />
]]></content>
</entry>
</feed>