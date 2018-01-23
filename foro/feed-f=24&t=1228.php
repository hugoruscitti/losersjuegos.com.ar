<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1228" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-08-26T03:30:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1228</id>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-08-26T03:30:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5858#p5858</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5858#p5858"/>
<title type="html"><![CDATA[Re: Programacion del tiempo (Animaciones y Acciones)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5858#p5858"><![CDATA[
Gracias por responder!, y en cuanto a lo de la documentacion, bueno una doc que e visto bastante organizada y completa es la de rubygame:<br /><!-- m --><a class="postlink" href="http://docs.rubygame.org/rdoc/current/">http://docs.rubygame.org/rdoc/current/</a><!-- m --><br />aunque es un poco confusa. Por cierto, acabo de ver la doc que estas haciendo (<!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/html/referencia.html">http://www.pilas-engine.com.ar/doc/html/referencia.html</a><!-- m -->) y me parece un muy buen trabajo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Vie Ago 26, 2011 3:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-08-10T01:24:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5821#p5821</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5821#p5821"/>
<title type="html"><![CDATA[Re: Programacion del tiempo (Animaciones y Acciones)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5821#p5821"><![CDATA[
<blockquote><div><cite>programx escribió:</cite><br />Buenas, esta vez vengo con mas dudas:<br /><br />¿Como hago para programar la velocidad de avance de una animacion?, es decir,<br />si quiero que pilas pase de un cuadro a otro de la grilla muy lentamente o<br />rapidamente.<br /></div></blockquote><br /><br />Para animaciones podrías usar muchas estrategias<br />distintas, una de ellas es crear un actor<br />y escribirle el método ``update`` para poner la lógica<br />de la animación ahí:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br /><br />class ExplosionContinua&#40;pilas.actores.Actor&#41;:<br /><br />    def __init__&#40;self&#41;:<br />        pilas.actores.Actor.__init__&#40;self&#41;<br />        self.imagen = pilas.imagenes.cargar_grilla&#40;&quot;explosion.png&quot;, 7&#41;<br />        <br />    def actualizar&#40;self&#41;:<br />        termina = self.imagen.avanzar&#40;&#41;<br />        <br />        if termina:<br />            # si termina es True, significa que animacion termino...                             <br />            pass<br />            <br />            <br />ExplosionContinua&#40;&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br /><br />Otra forma es hacer una función para cambiar el<br />cuadro de animación usando tareas (lo que te voy a contar<br />en la siguiente respuesta):<br /><br /><br /><blockquote><div><cite>programx escribió:</cite><br />¿Existe en pilas un metodo como &quot;cada_cierto_tiempo_hacer(accion, tiempo)? por<br />ejemplo si quiero que una nave enemiga dispare todo el tiempo en intervalos de<br />4 segundos.<br /></div></blockquote><br /><br />Sí, existen varios métodos dentro del objeto Mundo<br />para crear llamadas a funciones con temporizadores.<br /><br />Una de estas funciones es &quot;agregar_tarea_siempre&quot;, a la<br />que le puedes dar una función y un indicador de tiempo<br />que tiene que llamar siempre.<br /><br />Este código, por ejemplo, agrega un nuevo actor<br />en la escena cada dos segundos:<br /><br /><pre class="prettyprint">import pilas                                                                                     <br /><br />pilas.iniciar&#40;&#41;<br /><br />def crear_pelota&#40;&#41;:<br />    p = pilas.actores.Pelota&#40;&#41;<br /><br />pilas.mundo.agregar_tarea_siempre&#40;2, crear_pelota&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br /><br /><br />También hay otras funciones cómo: &quot;agregar_tarea&quot; y<br />&quot;agregar_tarea_una_vez&quot; que a diferencia de la primera, se<br />detienen.<br /><br /><br /><blockquote><div><cite>programx escribió:</cite><br />¿Existe una documentacion donde pueda ver ordenadamente todas las clases,<br />metodos con sus paramentros y atributos de pilas?.<br /><br />Eso es todo, Saludos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /><br /></div></blockquote><br /><br />m... no por el momento, solo tenemos una cartilla de referencias<br />reducida en la sección de documentación. Pero no está completa, es<br />solo para los primeros pasos.<br /><br /><!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas/raw/tip/refcard/pilas.pdf">http://bitbucket.org/hugoruscitti/pilas ... /pilas.pdf</a><!-- m --><br /><br /><br />Sería bueno tener un documento con todas las funciones de pilas a modo<br />de referencias, voy a tratar de hacer un script para eso el fin<br />de semana. Si tengo éxito lo anunciaré en el foro de anuncios.<br /><br />¿Tienes algún documento así de otra biblioteca que me sirva de inspiración?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ago 10, 2011 1:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-08-08T01:44:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5820#p5820</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5820#p5820"/>
<title type="html"><![CDATA[Programacion del tiempo (Animaciones y Acciones)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1228&amp;p=5820#p5820"><![CDATA[
Buenas, esta vez vengo con mas dudas:<br /><br />¿Como hago para programar la velocidad de avance de una animacion?, es decir, si quiero que pilas pase de un cuadro a otro de la grilla muy lentamente o rapidamente.<br /><br />¿Existe en pilas un metodo como &quot;cada_cierto_tiempo_hacer(accion, tiempo)? por ejemplo si quiero que una nave enemiga dispare todo el tiempo en intervalos de 4 segundos.<br /><br />¿Existe una documentacion donde pueda ver ordenadamente todas las clases, metodos con sus paramentros y atributos de pilas?.<br /><br />Eso es todo, Saludos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Lun Ago 08, 2011 1:44 am</p><hr />
]]></content>
</entry>
</feed>