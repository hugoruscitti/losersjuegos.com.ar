<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=645" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-20T15:51:22+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=645</id>
<entry>
<author><name><![CDATA[Lalo]]></name></author>
<updated>2011-01-20T15:51:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4805#p4805</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4805#p4805"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4805#p4805"><![CDATA[
Hola soy nuevo en este foro (y tambien en panda jojo) mmm a lo mejor es muy basica la pregunta pero aun no la contesto alguien sabe como se puede rotar un objeto al momento de importarlo?? ocupo blender para hacer mis modelos y los exporto a .egg pero necesito hacer la insercion del mismo objeto rotado varias veces si alguien tiene idea y me quiere ayudar estare muy agradecido <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2376">Lalo</a> — Jue Ene 20, 2011 3:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-15T19:46:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4596#p4596</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4596#p4596"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4596#p4596"><![CDATA[
<blockquote><div><cite>yasser_001200 escribió:</cite><br />Hola, hugo. ya respondí en otrom tema, creo saber como hacer para que se me vea la textura del modelo. ¿Usaste el chicken exporter en el cooperativista3d o convertiste de x a egg y como mhaces para que un modelo o actor rote en su eje?<br /></div></blockquote><br /><br />No, directamente guardé el modelo en formato .x desde blender y luego lo convertí. Nunca usé el<br />chicken exporter...<br /><br />Con respecto al giro, usé un intervalo de movimiento y lo convertí en<br />una secuencia infinita. Es algo mas simple de lo que parece, pero tendrías que<br />ver el manual de panda para comprenderlo en profundidad. El código<br />que hace eso es el siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>positions = actor.hprInterval(10, Point3(0, -75, 0), startHpr=Point3(0, -75, 360))<br />rotate_motion = Sequence(positions)<br />rotate_motion.loop()<br /></code></dd></dl><br /><br />Insisto, es mas fácil de lo que parece al principio, en el manual está<br />muy bien explicado. Te enseñan a mover un oso panda de un lado a otro<br />en la pantalla.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Dic 15, 2010 7:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-12-15T19:20:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4595#p4595</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4595#p4595"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4595#p4595"><![CDATA[
Hola, hugo. ya respondí en otrom tema, creo saber como hacer para que se me vea la textura del modelo. ¿Usaste el chicken exporter en el cooperativista3d o convertiste de x a egg y como mhaces para que un modelo o actor rote en su eje?<br /><br />Gracias por la ayuda que me has brindado hasta ahora. <br /><br /><br />A los demás:<br />Necesito tutoriales, en inglés o español, pero que me expliquen bien como usar el motor de juegos del blender<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mié Dic 15, 2010 7:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-12-15T01:58:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4588#p4588</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4588#p4588"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4588#p4588"><![CDATA[
<blockquote><div><cite>yasser_001200 escribió:</cite><br />Me ocurrió lo mismo en el Blitz3D. Exporto mi modelo con textura a .X y luego lo cargo pero me sale sin la textura. Igual en Panda. Me gustaría saber como hago para rotar un modelo en panda como se hace en el cooperativista3d. Sigo sin entender. ¿Se puede cargar el modelo .x directo desde panda3d?<br /></div></blockquote><br /><br />Tengo algunos problemitas para hacer andar blender en mi arch linux (casi que me<br />quiero cambiar de distribucion). Pero lo que recuerdo es que primero tenias que exportar<br />el archivo .x al mismo directorio en donde están las texturas, es muy importante<br />que hagas esto porque las texturas las tiene que ver el mismo modelo.<br /><br />Luego hay una herramienta de panda3d que te convierte el modelo de .x a .egg, y con<br />ello tendrás tu modelo listo para usar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Dic 15, 2010 1:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-12-14T18:32:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4587#p4587</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4587#p4587"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4587#p4587"><![CDATA[
Me ocurrió lo mismo en el Blitz3D. Exporto mi modelo con textura a .X y luego lo cargo pero me sale sin la textura. Igual en Panda. Me gustaría saber como hago para rotar un modelo en panda como se hace en el cooperativista3d. Sigo sin entender. ¿Se puede cargar el modelo .x directo desde panda3d?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mar Dic 14, 2010 6:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-30T14:48:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4522#p4522</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4522#p4522"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4522#p4522"><![CDATA[
<blockquote><div><cite>yasser_001200 escribió:</cite><br />hugo. en laseccion de 3D donde hablan del panda3D y de como cargar modelos puse una respuesta donde le muestro que la textura de mi modelo no se carga cuando cargo el modelo .x ¿Acaso debo guardar  la textura del personaje aparte y luego unirla al modelo en panda3d o es que los .x cargan con texturado y todo lo demás?<br /></div></blockquote><br /><br />Buenas, ahora no tengo blender en este equipo. Pero en cuanto llegue a mi casa<br />lo pruebo y te digo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Nov 30, 2010 2:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-30T14:30:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4519#p4519</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4519#p4519"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4519#p4519"><![CDATA[
hugo. en laseccion de 3D donde hablan del panda3D y de como cargar modelos puse una respuesta donde le muestro que la textura de mi modelo no se carga cuando cargo el modelo .x ¿Acaso debo guardar  la textura del personaje aparte y luego unirla al modelo en panda3d o es que los .x cargan con texturado y todo lo demás?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mar Nov 30, 2010 2:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-11T20:00:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4415#p4415</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4415#p4415"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4415#p4415"><![CDATA[
Los 2D siguen siendo y seguirán siendo divertidos y adictivos(en el buen sentido). Es esa la razon por la cual sigo pegado al GameMaker y al Pygame. Pero si quisiera hacer un hack n slash o un FPS o un juego de carreras, para eso uso Blender, Panda3D o 3D Game Studio. Creeme, soy un fiel defensor del 2D, e incluso prefiero el 2.5 como alternativa al 3D para no meterme en eso de animar y modelar en 3D. Pero siempre es bueno experimentar.<br /><br />  HUgo:<br />   Usted, tiene razón. Probaré y experimentaré con el .x antes de hacer fijación con el Chicken Exporter<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Jue Nov 11, 2010 8:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-11-07T03:45:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4379#p4379</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4379#p4379"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4379#p4379"><![CDATA[
pienso igual que carlostex, los juegos &quot;dos dé&quot; no dejan de ser divertidos, pero a mi parecer existen cosas que el 2D no puede hacer que si haria el 3D: animaciones independientes de los modelos y personalizacion de personajes!.<br /><br />por cierto, hola a todos, me perdi un tiempo del foro, huh? xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Nov 07, 2010 3:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-11-04T04:44:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4357#p4357</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4357#p4357"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4357#p4357"><![CDATA[
Programar videojuegos 3D es independiente de aprender a manejar un modelador. Los juegos en 3D son mas laboriosos por el modelado, pero en cuanto a programación es casi lo mismo, solo tienes que considerar que tienes un eje( en algunas ocaciones), mas para las animaciones, puedes entrar al 3D bajándote modelos en internet, sin embargo no se si te pase lo mismo que a mí, yo empecé a aprender Opengl y con modelos md2, abundan mucho en internet, pero no encontré un tema para un juego, no le vi mucho sentido hacer un juego en 3D que puedo hacer en 2D y sigue siendo divertido hacerlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Nov 04, 2010 4:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-03T17:48:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4354#p4354</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4354#p4354"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4354#p4354"><![CDATA[
<blockquote><div><cite>yasser_001200 escribió:</cite><br />Quiero incursionar en esto de los juegos 3D. Para eso estoy aprendiendo Blender y 3D studio max 9.0. Pasa que no sé conqué Engine puedo hacer un videojuego 3D en 3ra persona usando mis propios modelos sin que estos pierdan la textura como pasa con los archivos .3ds en Blitz3D. Blender incorpora un Engine en python(el cual también aprendo a usar). Tengo el Panda3D pero no me puedo bajar el Chicken (covierte de Blender a EGG para panda3d) ya que estoy en la lista de países baneados por sourceforge(Cuba)<br /><br />¿Dónde puedo encontrar más tutoriales de modelado y sobre el motor de videojuegos de blender?<br /></div></blockquote><br /><br />Buenas, con respecto a los modelos y panda3d. Mi recomendación es que exportes<br />los modelos desde blender usando el formato .x, esto te permite incorporalos a<br />programas realizados con panda3d sin perder texturas, ni animaciones, etc... es un formato<br />bastante bueno para modelos de juegos.<br /><br />En la sección de ejemplos de la web hay un programa que carga un modelo y lo<br />muestra en pantalla, está hecho con panda3d y usa el modelo creado con blender:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><br /><br /><img src="http://www.losersjuegos.com.ar/_media/referencia/ejemplos/cooperativista3d/captura.png" alt="Imagen" /><br /><br />También sería bueno que mires la página de sugerencias de panda3d para<br />desarrollar modelos, acá también recomiendan el formato .x:<br /><br /><!-- m --><a class="postlink" href="http://www.panda3d.org/manual/index.php/Converting_from_Blender">http://www.panda3d.org/manual/index.php ... om_Blender</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Nov 03, 2010 5:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-03T17:33:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4353#p4353</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4353#p4353"/>
<title type="html"><![CDATA[Re: Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=4353#p4353"><![CDATA[
Quiero incursionar en esto de los juegos 3D. Para eso estoy aprendiendo Blender y 3D studio max 9.0. Pasa que no sé conqué Engine puedo hacer un videojuego 3D en 3ra persona usando mis propios modelos sin que estos pierdan la textura como pasa con los archivos .3ds en Blitz3D. Blender incorpora un Engine en python(el cual también aprendo a usar). Tengo el Panda3D pero no me puedo bajar el Chicken (covierte de Blender a EGG para panda3d) ya que estoy en la lista de países baneados por sourceforge(Cuba)<br /><br />¿Dónde puedo encontrar más tutoriales de modelado y sobre el motor de videojuegos de blender?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mié Nov 03, 2010 5:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2009-10-30T21:35:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=3015#p3015</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=3015#p3015"/>
<title type="html"><![CDATA[Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=3015#p3015"><![CDATA[
buen aporte!... yo usaria Ogre3D, pero modelaria con blender que es muy util!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Oct 30, 2009 9:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[XD YO]]></name></author>
<updated>2009-10-30T01:43:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=3013#p3013</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=3013#p3013"/>
<title type="html"><![CDATA[Como utilizar Blender para juegos 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=645&amp;p=3013#p3013"><![CDATA[
Blender es una poderosoa herramienta open source para modelado en 3D, pero va mas aya permitiendonos poder hacer peliculas y juegos, sí, juegos en 3D<br /><br />Hoy les traigo esta pagina a los interesados,sobre como utilizar el Blender para crear un juego en 3D.<br /><br />Aqui se abordan dede los temas basicos de juegos con el motor de blender (aunque se asume que ya se sabe lo basico de la interfas y botones de Blender  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" />,  pero para los que empiezan con Blender, aqui una pagina para descargar un exelente tutorial sobre su uso en pdf: <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_arrow.gif" alt=":arrow:" title="Arrow" /> <a href="http://www.lugsaju.com.ar/2007/12/libro-aprende-blender-yafray-en-24.html" class="postlink">http://www.lugsaju.com.ar/2007/12/libro-aprende-blender-yafray-en-24.html</a> )<br /><br />Aqui la pagina para hacer juegos:<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_arrow.gif" alt=":arrow:" title="Arrow" /> <a href="http://fisicomolon.blogspot.com/2009/06/curso-creacion-de-videojuegos-en.html" class="postlink">http://fisicomolon.blogspot.com/2009/06/curso-creacion-de-videojuegos-en.html</a><br /><br />Y aqui el foro de la misma pagina:<br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_arrow.gif" alt=":arrow:" title="Arrow" /> <a href="http://fisicomolon.host56.com/phpBB3/index.php" class="postlink">http://fisicomolon.host56.com/phpBB3/index.php</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2140">XD YO</a> — Vie Oct 30, 2009 1:43 am</p><hr />
]]></content>
</entry>
</feed>