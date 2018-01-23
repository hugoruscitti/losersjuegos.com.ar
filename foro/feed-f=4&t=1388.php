<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1388" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-01-19T00:22:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1388</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-01-19T00:22:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6452#p6452</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6452#p6452"/>
<title type="html"><![CDATA[Re: Problema con ruta de archivos..]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6452#p6452"><![CDATA[
Hugo es un master xD <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Ene 19, 2012 12:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-01-18T02:23:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6445#p6445</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6445#p6445"/>
<title type="html"><![CDATA[Re: Problema con ruta de archivos..]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6445#p6445"><![CDATA[
Genial diego!, si, me interesa. Te paso mi mail: <img src="http://www.examplelab.com.ar/images/mi_correo.png" alt="Imagen" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ene 18, 2012 2:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2012-01-17T23:34:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6441#p6441</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6441#p6441"/>
<title type="html"><![CDATA[Re: Problema con ruta de archivos..]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6441#p6441"><![CDATA[
hugoruscitti: Sos un GRANDE!!!, me solucionaste el problema, realmente te agradezco el tiempo que te tomaste para explicarlo y con el detalle y calidad que lo hiciste!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> , muchas gracias!.<br />Ya de paso te cuento que estoy realizando un &quot;mini motor&quot; que puede ser configurado mediante un XML, para mi proyecto de grado, el motivo de este proyecto es aprender a desarrollar videojuegos y por eso propuse la idea. Esta pagina me ha servido muchísimo y he sacado varios ejemplos y también me han solucionado varios problemas como este mismo, por eso mismo ni bien termine el proyecto quisiera aportar a LoserJuegos, subiendo a esta pagina el proyecto ya que lo estoy haciendo comentando TODO el código, es prácticamente un Tutorial el código, es mucho mas comentario que código y explico en cada paso que es lo que estoy haciendo y para que sirve, creo que es un ejemplo muy bueno a seguir si alguien esta comenzando en este mundo, como te digo el fin del proyecto es aprender, por eso quisiera luego ponerme en contacto contigo para ver como podemos hacer para subir el juego (si es que esta apto y tu lo apruebas) una vez terminado (mas o menos por abril) y que quede de ayuda y ejemplo para las personas que están comenzando en este mundo.. No se si puede pasarme tu mail para contactarnos mas adelante.<br /><br />Saludos<br />Diego<br />Muchas Gracias y estamos en contacto!.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mar Ene 17, 2012 11:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-01-17T16:50:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6437#p6437</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6437#p6437"/>
<title type="html"><![CDATA[Re: Problema con ruta de archivos..]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6437#p6437"><![CDATA[
Hola Diego, estuve investigando el tema de tu consulta y me parece que hay<br />dos cosas para tener en cuenta.<br /><br />Las rutas que estás usando son relativas, es decir, dependen del lugar<br />en donde está corriendo el script. Por ejemplo, si yo hago &quot;pygame.mixer.music.load('musica.wav')&quot;<br />el archivo se va buscar en la carpeta en la que estoy parado, independientemente de donde<br />esté mi juego.<br /><br />Por ejemplo, si estoy en &quot;/home/hugoruscitti&quot; (o en windows &quot;C:\&quot; es indistinto) pygame<br />va a buscar el archivo &quot;/home/hugoruscitti/musica.wav&quot; (o en windows, por ejemplo, si estába<br />en &quot;c:\&quot; pygame va a buscar &quot;C:\musica.wav).<br /><br />¿Cual es la solución?, tu programa debería ser independiente a donde estés parado, solamente<br />tendría que depender de dónde esté tu programa.<br /><br />Para eso existe una variable en pygame llamada __file__, que te puede servir para conocer la ruta<br />al programa y poder cargar.<br /><br />Te recomiendo tener una función como la siguiente:<br /><br /><pre class="prettyprint">import os<br /><br />def obtener_ruta&#40;archivo&#41;:<br />    &quot;&quot;&quot;Busca la ruta absoluta a un archivo.<br /><br />        archivo: es la ruta relativa al programa &#40;no al directorio actual&#41;.     <br />    &quot;&quot;&quot;<br /><br />    path = os.path.dirname&#40;os.path.abspath&#40;__file__&#41;&#41;<br />    print &quot;El directorio de este script es: &quot;, path<br />    ruta_absoluta = os.path.join&#40;path, archivo&#41;<br />    print &quot;La ruta completa al archivo es: &quot;, ruta_absoluta<br /><br />    return ruta_absoluta</pre><br /><br />Con esta función, las rutas dejan de ser tan cambiantes, de hecho, puse unas<br />sentencias &quot;print&quot; para que veas de dónde se quieren cargar los archivos<br />exactamente.<br /><br />Este es un ejemplo de cómo podrías usar esa función:<br /><br /><pre class="prettyprint">pygame.mixer.music.load&#40;obtener_ruta&#40;&#39;sonidos/musicaFondo.ogg&#39;&#41;&#41;</pre><br /><br />Esto se usa en muchos juegos, incluso se suele poner dentro las funciones<br />básicas de un motor de juegos. Por ejemplo, pilas-engine tiene una función muy similar<br />llamada &quot;obtener_ruta_al_archivo&quot;:<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/src/ed8897e4e9c4/pilas/utils.py">https://bitbucket.org/hugoruscitti/pila ... s/utils.py</a><!-- m --><br /><br />Lo diferente, es que pilas no te pide que llames a esa función directamente, sino que lo<br />hace por vos, por ejemplo si haces &quot;pilas.imagenes.cargar&quot;, se llama a la función &quot;obtener_ruta_al_archivo&quot;:<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/src/ed8897e4e9c4/pilas/imagenes.py">https://bitbucket.org/hugoruscitti/pila ... magenes.py</a><!-- m --><br /><br /><br />Otra cosa que noté, es que estás utilizando la barra invertida para subir de directorios (osea &quot;..\..&quot;), no se si esto<br />funciona bien en windows y linux a la vez. ¿Podrías probar con una barra normal &quot;.http://losersjuegos.com.ar/foro/..&quot; o bien &quot;..\\..&quot;?, también mirá que<br />la función &quot;os.path.join&quot; se usa para eso mismo:<br /><br /><!-- m --><a class="postlink" href="http://stackoverflow.com/questions/2422798/python-os-path-join-on-windows">http://stackoverflow.com/questions/2422 ... on-windows</a><!-- m --><br /><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Ene 17, 2012 4:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2012-01-17T03:00:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6433#p6433</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6433#p6433"/>
<title type="html"><![CDATA[Re: Problema con ruta de archivos..]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6433#p6433"><![CDATA[
Bueno pude solucionar provisoriamente el problema que tengo pero no he llegado a la solución correcta, explico que hice y pongo codigo, espero no extenderme demasiado:<br /><br />Mi proyecto se compone de la siguiente manera:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>src<br />|<br />+- Proyecto A (package)<br />                    |<br />                    +-Logica (package)<br />                             |<br />                             +- main() ----&gt; del proyectoA (Es el que ejecuto para iniciar)<br />|<br />+- Proyecto B (package)<br />                    |<br />                    +- Motor (package)<br />                    |        |                   <br />                    |        +- Clase que llama a: rutaSonido = os.path.join (self.config.DIR_SONIDOS, nombreMusicaFondo) <br />                    |                                       pygame.mixer.music.load(rutaSonido) <br />                    |                                       Donde rutaSonido seria &quot;Sonidos\musicaFondo.ogg'&quot;<br />                    +- Sonidos (carpeta)<br />                    |        |<br />                    |        +- musicaFondo.ogg<br />                    |<br />                    +- main() --&gt; del proyectoB</code></dd></dl><br /><br />Cuando ejecutaba el main del proyecto A, me daba el error que les comente, lo que hice fue mover la carpeta Sonidos del proyecto B al proyecto A dentro del package Logica (que es quien tiene a la clase main que ejecuto), Ahi se arreglo el problema, pero en realidad esta mal!, porque yo no quiero tener la carpeta Sonido en el proyecto A, sino en el B, y tampoco quiero duplicar la misma, ya que son dos cosas distintas. Porque pasa esto de que si ejecuto en proyecto A la carpeta debe estar en A, y si ejecuto en B debe estar en B,. Recuerdo que cuando me dirijo a proyecto en realidad son dos packages que dividen dos logicas distintas (pygtk y pygame), el proyecto en si es uno solo.<br /><br />Saludos <br />Diego<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mar Ene 17, 2012 3:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-01-17T01:28:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6431#p6431</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6431#p6431"/>
<title type="html"><![CDATA[Re: Problema con ruta de archivos..]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6431#p6431"><![CDATA[
creo que te podriamos ayudar mejor si nos muestras el codigo fuente ._.<br /><br />aunque suponiendo un poco por lo que hablas, imagino que la disposicion real de las carpetas en tu proyecto es la siguiente<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>src<br /> |<br />+- Proyecto A (package)<br /> |<br />+- Proyecto B (package)<br />                    |<br />                    +- Sonidos<br />                             |<br />                             +- musicaFondo.ogg</code></dd></dl><br /><br />pero ahora que leo con mas detenimiento, dices que trataste de subir uno o varios niveles e igualmente no sirvió... en Windows se puede usar rutas como &quot;..\..\&quot;?<br /><br />Deberías comprobar la estructura de archivos de tu Proyecto B.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mar Ene 17, 2012 1:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2012-01-16T23:08:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6429#p6429</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6429#p6429"/>
<title type="html"><![CDATA[Problema con ruta de archivos..]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1388&amp;p=6429#p6429"><![CDATA[
Buenas tengo el siguiente problema.. estoy tratando de llamar a un proyecto desde otro proyecto, o sea tengo un proyecto A (en pygtk) (que es el primero que ejecuto), que llama al proyecto B (en pygame) (en determinado momento o Action de un boton).<br />La estructura de mi proyecto esta compuesta de la siguiente forma<br />src<br />------ Proyecto A (package)<br />------ Proyecto B (package)<br /><br />El problema es el siguiente, cuando ejecuto el proyecto B por separado no tengo ningún problema, me funciona perfecto, carga imagenes del disco, sonidos, etc, pero cuando llamo al mismo proyecto desde el proyecto A, me tira que no encuentra los archivos en disco para cargar, por ejemplo el de la musica, este es el msj de error:<br /><br />pygame.mixer.music.load(rutaSonido)<br />pygame.error: Couldn't read from 'Sonidos\musicaFondo.ogg'<br /><br />He probado con subir niveles (..\ Ruta) y sigo con el mismo msj:  <br /><br />pygame.mixer.music.load(rutaSonido)<br />pygame.error: Couldn't read from '<span style="font-weight: bold">..\Sonidos</span>\musicaFondo.ogg'<br /><br />pygame.mixer.music.load(rutaSonido)<br />pygame.error: Couldn't read from '<span style="font-weight: bold">..\..\Sonidos</span>\musicaFondo.ogg'<br /><br />Realmente no entiendo el funcionamiento de esto, ya que hace 2 días hice la misma prueba y funciono correctamente, y ahora no. <br /><br />Gracias y saludos Diego!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Lun Ene 16, 2012 11:08 pm</p><hr />
]]></content>
</entry>
</feed>