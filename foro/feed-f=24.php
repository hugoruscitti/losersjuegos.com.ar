<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-11-12T23:16:50+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24</id>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2013-11-12T23:16:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: No reproduce el sonido]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305"><![CDATA[
<blockquote><div><cite>Natalia escribió:</cite><br />No, ya esta. <br />Era asi:<br /><pre class="prettyprint">musica=pilas.musica.cargar&#40;&quot;tangananica.mp3&quot;&#41;<br />musica.reproducir&#40;repetir=True&#41;<br />musica.detener&#40;&#41;</pre><br /></div></blockquote><br /><br />Creo que ya lo descubriste jejej.<br /><br />Que bien que funcionó.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Mar Nov 12, 2013 11:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-12T23:10:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9304#p9304</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9304#p9304"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: No reproduce el sonido]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9304#p9304"><![CDATA[
No, ya esta. <br />Era asi:<br /><pre class="prettyprint">musica=pilas.musica.cargar&#40;&quot;tangananica.mp3&quot;&#41;<br />musica.reproducir&#40;repetir=True&#41;<br />musica.detener&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Mar Nov 12, 2013 11:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-12T22:19:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9303#p9303</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9303#p9303"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: No reproduce el sonido]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9303#p9303"><![CDATA[
Hola IrvingProg, Muchas gracias por responder y...¡Funcionó! Muchisimas gracias,  ¿pero me podrias ayudar en una cosita mas? ¿Cual es el codigo para detener la musica? Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Mar Nov 12, 2013 10:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2013-11-09T10:11:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9301#p9301</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9301#p9301"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: No reproduce el sonido]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9301#p9301"><![CDATA[
Hola Natalia.<br /><br />Es muy probable que sea por la librería que utiliza el motor para reproducir el sonido por defecto. Realicé unas pruebas sin mover nada de parametros y tampoco puedo reproducir mp3 u Ogg. <br /><br />Me funcionó de esta manera:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;audio=&quot;phonon&quot;&#41;<br /><br />sonido = pilas.musica.cargar&#40;&quot;/home/irving/algo.mp3&quot;&#41;<br />sonido.reproducir&#40;repetir=True&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Te recomiendo intentar modificando el parametro audio, puede recibir los valores: &quot;phonon&quot;, &quot;pygame&quot; o &quot;gst&quot;.<br /><br />Por cierto, si tienes mas dudas de Pilas, también de podemos ayudar por este foro: <!-- m --><a class="postlink" href="http://foro-pilasengine.com.ar/">http://foro-pilasengine.com.ar/</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Sab Nov 09, 2013 10:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-07T21:32:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9299#p9299</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9299#p9299"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: Ayuda - Problema con mi juego]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9299#p9299"><![CDATA[
Hola, gracias por responder. Me sirvio de mucho tu respuesta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Jue Nov 07, 2013 9:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2013-11-07T08:34:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9297#p9297</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9297#p9297"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: Ayuda - Problema con mi juego]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9297#p9297"><![CDATA[
Hola Natalia, bienvenida a la comunidad!<br /><br />En el sitio oficial de pilas-engine aparecen varios ejemplos en los que se emplean disparos. Echa un vistazo a la documentación que aparece aquí: <a href="http://pilas-engine.com.ar/docs.html" class="postlink">http://pilas-engine.com.ar/docs.html</a><br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue Nov 07, 2013 8:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-06T22:41:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9296#p9296</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9296#p9296"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • No reproduce el sonido]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9296#p9296"><![CDATA[
Hola a todos!<br />Le quise poner una música de inicio a mi juego para el menú pero no reproduce nada. Ya cambie el mp3 a ogg y a wav y nada. Utilice también<br />cargar sonido y cargar musica y nada.<br /><pre class="prettyprint">music=pilas.musica.cargar&#40;&quot;menu.mp3&quot;&#41;<br /> music.reproducir&#40;repetir=True&#41;</pre><br /> Adios. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Mié Nov 06, 2013 10:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-06T22:40:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9295#p9295</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9295#p9295"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Ayuda - Problema con mi juego]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9295#p9295"><![CDATA[
Holis a todos! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  Resulta que tengo un codigo  (usando pilas) en el que intento que un personaje RPG (shooter) dispare, y tengo la textura del personaje a la que le agregue unos cuadros en el que aparece quieto y listo para disparar. Pero no se como agregarle en el codigo que dispare:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br /><br />mapa = pilas.actores.MapaTiled&#40;&#39;mapas\mapa1.tmx&#39;&#41;<br /><br />class jugador&#40;pilas.actores.Actor&#41;:<br />    def __init__&#40;self&#41;:<br />        pilas.actores.Actor.__init__&#40;self&#41;<br />        <br />        #Aparicion del actor<br />        self.player=pilas.actores.personajes_rpg.Maton&#40;mapa&#41;<br />        <br />        #Carga de textura del actor<br />        self.player.imagen = pilas.imagenes.cargar_grilla&#40;&quot;tiles\player.png&quot;, 3,5&#41;<br /><br />        #Prueba:<br />        teclas = {pilas.simbolos.a: &#39;izquierda&#39;, pilas.simbolos.d: &#39;derecha&#39;,pilas.simbolos.n:&#39;disparo&#39;}<br />        self.player.mandos=pilas.control.Control&#40;pilas.escena_actual&#40;&#41;, teclas&#41;<br />        self.aprender&#40;pilas.habilidades.MoverseConElTeclado,control=self.player.mandos&#41;<br />        <br />        #Definicion del cuadro de textura del actor<br />        self.player.imagen.definir_cuadro&#40;4&#41;<br />        <br />        #Definicion de posicion del actor<br />        self.player.x=-872<br />        self.player.y=770<br />        <br />        #Habilidades del actor<br />        self.player.aprender&#40;pilas.habilidades.SiempreEnElCentro&#41;<br /><br />    def disparar&#40;self&#41;:<br />        pass<br />player=jugador&#40;&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br />Espero que puedan aydudarme, y gracias. Cualquier cosa doy mas detalles<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Mié Nov 06, 2013 10:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-05-03T01:17:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9227#p9227</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9227#p9227"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: ¿Se puede instalar Pilas como un módulo mas?]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9227#p9227"><![CDATA[
Por general los módulos en python se pueden instalar siguiendo las instrucciones del modulo, también recuerda que pilas tiene muchas dependencias...<br /><br />Puedes ver este vídeo. sobre como instalar paquetes (ojo, esta en ingles)<br /><!-- m --><a class="postlink" href="http://www.youtube.com/watch?v=ddpYVA-7wq4">http://www.youtube.com/watch?v=ddpYVA-7wq4</a><!-- m --><br /><br />Cualquier duda pregunta <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie May 03, 2013 1:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[McNulty]]></name></author>
<updated>2013-05-01T16:32:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9226#p9226</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9226#p9226"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: ¿Se puede instalar Pilas como un módulo mas?]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9226#p9226"><![CDATA[
Pues he intentado llamar Pilas desde el IDLE de Python. Pero creo que no lo instalo bien. Tengo Windows 7. Y no se en que directorio poner a Pilas para que me lo reconozca como un modulo el Python Shell ¿Podría alguien poner todos los pasos para su correcta instalación?<br /><br />Gracias...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2539">McNulty</a> — Mié May 01, 2013 4:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[McNulty]]></name></author>
<updated>2013-05-01T10:50:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9225#p9225</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9225#p9225"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: ¿Se puede instalar Pilas como un módulo mas?]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9225#p9225"><![CDATA[
<blockquote><div><cite>fsalamero escribió:</cite><br />En la web de pilas hemos colgado más tutoriales y tanto éstos como otros de pygame los puedes encontrar en<br /><br /><a href="http://www.slideshare.net/fsalamero" class="postlink">http://www.slideshare.net/fsalamero</a><br /><br />o en <br /><br /><a href="http://pythonwiki.wikispaces.com/" class="postlink">http://pythonwiki.wikispaces.com/</a><br /><br />Saludos.<br /></div></blockquote><br /><br />¡Muchas gracias! No conocía esa pythonwiki. Y salen ejemplos muy interesantes sobre el desarrollo de juegos con Python. Sobre todo, la creación de una aventura conversacional. Una gran idea dar a conocer la programación en los institutos. El conocer algoritmia es mas importante de lo que se pueda pensar. Se pueden resolver problemas de manera mas eficaz en la vida 'real'. Y que mejor aprender programación que con el desarrollo de vídeo juegos. <br /><br />Un saludo. Iré visitando vuestra página. Los tutoriales de Pilas ya los conocía de la web de Hugo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2539">McNulty</a> — Mié May 01, 2013 10:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[fsalamero]]></name></author>
<updated>2013-04-29T20:50:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9224#p9224</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9224#p9224"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: ¿Se puede instalar Pilas como un módulo mas?]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9224#p9224"><![CDATA[
En la web de pilas hemos colgado más tutoriales y tanto éstos como otros de pygame los puedes encontrar en<br /><br /><a href="http://www.slideshare.net/fsalamero" class="postlink">http://www.slideshare.net/fsalamero</a><br /><br />o en <br /><br /><a href="http://pythonwiki.wikispaces.com/" class="postlink">http://pythonwiki.wikispaces.com/</a><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2660">fsalamero</a> — Lun Abr 29, 2013 8:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[McNulty]]></name></author>
<updated>2013-04-29T19:32:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9223#p9223</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9223#p9223"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: ¿Se puede instalar Pilas como un módulo mas?]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9223#p9223"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br />Sí, si se puede, de hecho aquí esta en el &quot;Python Package Index&quot; <a href="https://pypi.python.org/pypi/pilas/0.78" class="postlink">https://pypi.python.org/pypi/pilas/0.78</a><br /><br />Recuerda tener los módulos que son dependencias de Pilas.<br /></div></blockquote><br /><br />Gracias Barajas. Cómo todavía estoy en fase de aprendizaje de Python (No lo puedo hacer de forma continuada como me gustaría). Dejaré la opción con su instalador. Más adelante ya iré probando poder llamar a Pilas desde nuestro editor favorito.<br /><br /><br />Por cierto, es una lástima que no se hagan mas tutoriales de Pilas en YouTube. Es decir, como realizar juegos básicos (que luego nosotros podemos ampliar). Ya sé que esto sale en la documentación de Pilas. Pero con Pygame pasa igual. No sé por que este lenguaje no tiene tanta aceptación. Quizás se trate de marketing. Pero libros en castellano...pocos, la verdad.<br /><br />Un saludo ¡Forza Python y Pilas!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2539">McNulty</a> — Lun Abr 29, 2013 7:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-04-29T02:13:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9220#p9220</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9220#p9220"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • Re: ¿Se puede instalar Pilas como un módulo mas?]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9220#p9220"><![CDATA[
Sí, si se puede, de hecho aquí esta en el &quot;Python Package Index&quot; <a href="https://pypi.python.org/pypi/pilas/0.78" class="postlink">https://pypi.python.org/pypi/pilas/0.78</a><br /><br />Recuerda tener los módulos que son dependencias de Pilas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Lun Abr 29, 2013 2:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[McNulty]]></name></author>
<updated>2013-04-28T14:58:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9219#p9219</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9219#p9219"/>
<title type="html"><![CDATA[Consultas, problemas o bugs. • ¿Se puede instalar Pilas como un módulo mas?]]></title>

<category term="Consultas, problemas o bugs." scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=24" label="Consultas, problemas o bugs."/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3019&amp;p=9219#p9219"><![CDATA[
Hola!<br /><br />Pues eso...<br /><br />Tengo descargada la biblioteca Pilas. Y claro, se instala con vuestro instalador. La duda es si se puede instalar como hace Pygame u otro módulo. Es decir, que se puede llamar desde nuestro editor favorito o el IDLE que trae Python. O en todo caso, si es mejor trabajar siempre con el vuestro. Que como comenté, daba problemas con el <span style="font-weight: bold"><span style="font-style: italic">raw_input</span></span>. <br /><br />Supongo, que si la instalación de Pilas la hacemos 'a mano' nosotros, deberemos instalar mas cosas ¿Verdad? E igual es un engorro. <br /><br />Resumo:<br /><br />¿Es mejor programar siempre con el instalador que trae Pilas por defecto?<br /><br />Gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2539">McNulty</a> — Dom Abr 28, 2013 2:58 pm</p><hr />
]]></content>
</entry>
</feed>