<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=29&amp;t=1357" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-12-18T11:37:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=29&amp;t=1357</id>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-12-18T11:37:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6282#p6282</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6282#p6282"/>
<title type="html"><![CDATA[Re: Dudas con Javascript]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6282#p6282"><![CDATA[
A mi parecer no hay diferencia alguna entre llamar a la función o poner el código javascript directamente...<br /><br />Sólo aconsejarte que en un ejemplo tan pequeño es poco importante una opción u otra y ambas son totalmente válidas. Para proyectos más grandes lo mejor es que agrupes tu lógica en diferentes funciones, a poder ser usando objetos. La notación de javascript para la definición de &quot;clases&quot; es MUY estraña si comparas con cualquier otro lenguaje, pero al final te acostumbras incluso puede llegar a parecerte &quot;elegante&quot; <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Dom Dic 18, 2011 11:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-12-18T09:43:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6281#p6281</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6281#p6281"/>
<title type="html"><![CDATA[Re: Dudas con Javascript]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6281#p6281"><![CDATA[
Bien ya funciono!, y quedo asi:<br />index.html<br /><pre class="prettyprint">&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />&lt;head&gt;<br /><br />&lt;title&gt;&lt;/title&gt;<br /><br />&lt;script src=&quot;js/main.js&quot;&gt;&lt;/script&gt;<br />&lt;script&gt;<br />saludar&#40;&#41;;<br />&lt;/script&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />hola<br />&lt;/body&gt;<br />&lt;/html&gt;</pre><br /><br />main.js<br /><pre class="prettyprint">function saludar&#40;&#41;{<br />alert&#40;&quot;Hola Mundo&quot;&#41;;<br />}</pre><br />#################################################################################<br />Estaba leyendo y muchos cuando hacen el archivo js solo ponen alert(&quot;Lo que sea&quot;); y solo mandan a llamar con &lt;script src=&quot;js/main.js&quot;&gt;&lt;/script&gt;, ahora mi duda, ¿en html5 ya esa forma no es valida? ahora hay que hacer todo en funciones y mandar a llamarlas?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Dom Dic 18, 2011 9:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-12-18T09:31:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6280#p6280</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6280#p6280"/>
<title type="html"><![CDATA[Re: Dudas con Javascript]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6280#p6280"><![CDATA[
A miren, lo ando probando en la ultima version de Chrome ahi al cargar no pasa nada pero si dejo el código dentro del html si funciona checare lo que me dicen arriba de antemano gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Dom Dic 18, 2011 9:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2011-12-17T19:36:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6279#p6279</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6279#p6279"/>
<title type="html"><![CDATA[Re: Dudas con Javascript]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6279#p6279"><![CDATA[
Sería interesante que comentarais en que navegador da el fallo y en cual ha funcionado perfectamente, por como a veces pueden responder de forma distinta cada navegador segun que errores admiten y cuales no.<br /><br />Yo de entrada veo raro ese:<br /><pre class="prettyprint">&lt;meta /&gt;</pre><br /><br />El HTML5 es la evolución de HTML y XHTML anteriores, vamos, que, no hay XHTML ya, pero si sus buenas practicas siguen siendo recomendables, como cerrar etiquetas, pero me parece que ya no se admite el /&gt; como el que usas, prueba a cambiarlo por su etiqueta de cierre en HTML. Tambien me resulta raro el / primero en la ruta relativa, si bien no deberia darte fallo, si después de lo anterior el fallo persiste prueba a cambiar &quot;/js/main.js&quot; por &quot;js/main.js&quot;. Y si no te importa decirnos tu navegador, podemos probar tu código en el mismo navegador.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Sab Dic 17, 2011 7:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-12-17T19:25:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6278#p6278</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6278#p6278"/>
<title type="html"><![CDATA[Re: Dudas con Javascript]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6278#p6278"><![CDATA[
Hola Kyrian,<br /><br />He probado el código más o menos como tu lo has puesto y me ha funcionado perfectamente. <br /><br />Sólo te quería comentar una posible fuente de problemas, que sería el hecho de no tener el fichero en la raíz de tu servidor web, sino ser una ruta relativa etc etc.<br /><br />Este tipo de errores se ven muy bien con herramientas como Firebug para Firefox, que puedes descargar en<br /><br /><!-- m --><a class="postlink" href="http://getfirebug.com/">http://getfirebug.com/</a><!-- m --><br /><br />El resto de navegadores tienen sus propias herramientas de desarrollo integradas en el navegador. En Chrome, por ejemplo, se abren con Ctrl+Shift+I. Ahí tendrás una consola donde saldrán todos los errores, incluyendo errores a la hora de tomar recursos como tu script js/main.js.<br /><br />Espero que te ayude con tu problema.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab Dic 17, 2011 7:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Kyrian]]></name></author>
<updated>2011-12-17T17:16:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6276#p6276</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6276#p6276"/>
<title type="html"><![CDATA[Dudas con Javascript]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1357&amp;p=6276#p6276"><![CDATA[
Hola gente jajaja paresco un Luker solo entro cuando tengo dudas jajaja <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  Bueno tengo un problemita. Veran quiero dividir mi script en archivos .js<br /><br />tengo asi mi arbol de esta manera <br />Ceinso<br />          css<br />              style.css<br />          js<br />            main.js<br />            melon.js<br />index.html<br /><br />####################################<br />index. html<br /><pre class="prettyprint">&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />&lt;head&gt;<br />&lt;meta /&gt;<br />&lt;title&gt;Prueba&lt;/title&gt;<br /><br /><br />&lt;script src=&quot;/js/main.js&quot; type=&quot;application/javascript&quot;&gt;&lt;/script&gt;<br />&lt;script&gt;<br />saludar&#40;&#41;;<br />&lt;/script&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br /><br />&lt;/body&gt;<br />&lt;/html&gt;</pre><br /><br />main.js<br /><pre class="prettyprint">function saludar&#40;&#41;{<br />alert&#40;&quot;Hola Mundi&quot;&#41;<br />}</pre><br />el problema viene por que no aparece la alerta, lo prove en varios navegadores y tengo el mismo problema, ¿alguien sabe a que se debe?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2409">Kyrian</a> — Sab Dic 17, 2011 5:16 pm</p><hr />
]]></content>
</entry>
</feed>