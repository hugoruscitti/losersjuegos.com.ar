<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1433" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-03-25T00:55:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1433</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-03-25T00:55:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6590#p6590</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6590#p6590"/>
<title type="html"><![CDATA[Re: Cargar todo al inicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6590#p6590"><![CDATA[
Bueno, respondiendo la primera duda, me parece que cargar &quot;TODO&quot; al inicio, es algo... bueno, torpe en el sentido de que se tarda mas tiempo en el momento de cargara, pero las tienes &quot;a la mano&quot; cuando las necesitas y no pierdes tiempo. Yo honestamente, prefiero cargar cuando lo necesito (aun a sabiendas del costo de procesamiento... ).<br /><br />Sobre los tiempos de carga, creo que podrías hacer crear una variable que aumente conforme se cargan:<br /><br /><pre class="prettyprint">carga = 0<br />cargar_imagen_1&#40;&#41;<br />cargar_imagen_2&#40;&#41;<br />carga += 1<br />....<br />if carga == 100:<br />    termina_y_comienza_el_juego&#40;&#41;</pre><br /><br />En otras palabras, lo mismo que sugería Hugo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br /><br />Sobre la segunda, el programa cargado en partes, python es un lenguaje de scrip, es decir, todo se ejecuta como se &quot;lee&quot;.<br /><br />Solo un consejo sobre eso; Si las imágenes las cargas en otro archivo, asegúrate de que el modulo de pygame este iniciado, o marcara un error, y puedes llamar las imágenes con el nombre con el que las cargaste en el modulo solo si lo importaste de la forma:<br /><br /><pre class="prettyprint">pygame.init&#40;&#41; #el modulo de pygame esta inicializado.<br />from mi_modulo_de_carga_imagenes import *</pre><br /><br />Aun que también podrías hacerlo de la otra forma, considerando el inconveniente...<br /><br /><pre class="prettyprint">import mi_modulo_de_carga_imagenes<br />mi_modulo_de_carga_imagenes.nombre_imagen_uno #este es el inconveniente....</pre> <br /><br />No sé si esto te sirva, pero espero que si <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Mar 25, 2012 12:55 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-03-24T23:09:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6586#p6586</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6586#p6586"/>
<title type="html"><![CDATA[Re: Cargar todo al inicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6586#p6586"><![CDATA[
Hola!,<br /><br />nunca hice algo así, pero creo que se puede hacer lo que dicen<br />en este mensaje de stackoverflow:<br /><br /><!-- m --><a class="postlink" href="http://stackoverflow.com/questions/8668793/loading-bar-pygame">http://stackoverflow.com/questions/8668 ... bar-pygame</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Mar 24, 2012 11:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d0hk0o]]></name></author>
<updated>2012-03-24T16:58:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6584#p6584</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6584#p6584"/>
<title type="html"><![CDATA[Cargar todo al inicio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1433&amp;p=6584#p6584"><![CDATA[
Buenas,<br /><br />quisiera que me ayuden en un problema técnico... Mi juego está hecho en pygame. Tengo una clase llamada corregir y en el __init__ cargo imágenes; por eso cada vez que la llamo se demora (los fps bajan a 7 cuando todo mi juego va a 30)...<br /><br />Cómo puedo hacer para cargar todas las imágenes al inicio del juego y que salga una barra que indique el avance... por ejemplo:<br /><!-- m --><a class="postlink" href="http://3.bp.blogspot.com/-c5OYKn69Rbg/TzUVXBRN3qI/AAAAAAAABMQ/aSNYRyqKVJo/s1600/cargando.gif">http://3.bp.blogspot.com/-c5OYKn69Rbg/T ... rgando.gif</a><!-- m --><br /><br />P.D.: Tengo dudas de cuándo un programa ejecuta ciertas partes. Por ejemplo, si todas mis imágenes se cargan en carga.py (ima = pygame.image.load('ima.png')...), siempre que utilice import carga.py en otro módulo, ¿se cargarán las imágenes? ¿Si es así, no hay una forma de que se carguen una sola vez?<br /><br />Espero me haya dejado entender u_u<br /><br />Saludos y gracias...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2403">d0hk0o</a> — Sab Mar 24, 2012 4:58 pm</p><hr />
]]></content>
</entry>
</feed>