<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=74" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-06-28T10:58:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=74</id>
<entry>
<author><name><![CDATA[blito83]]></name></author>
<updated>2007-06-28T10:58:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=423#p423</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=423#p423"/>
<title type="html"><![CDATA[librerias y funciones ya hechas para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=423#p423"><![CDATA[
rcaf ( me acabo de dar cuenta de que empece en SDL con un tuto tuyo de 2 capitulos ).<br /><br />Parece bastante sencillo usar opengl para 2d, aunque por otra parte se que me voy a complicar la vida porque querre explotarla al maximo.<br /><br />Bueno, me voy a poner a ello, cuando me haya quedado claro lo basico volvere a la carga con mas dudas.<br /><br />Muchas gracias y un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1090">blito83</a> — Jue Jun 28, 2007 10:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-06-26T01:47:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=419#p419</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=419#p419"/>
<title type="html"><![CDATA[librerias y funciones ya hechas para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=419#p419"><![CDATA[
<blockquote><div><cite>blito83 escribió:</cite><br />Cual es la idea? pasarle surfaces de sdl a opengl como textura para rectangulos?<br /></div></blockquote><br /><br />Claro asi es, con SDL, mas específicamente con SDL_image cargaríamos una imagen en una superficie (SDL_Surface) y luego crearíamos una textura en OpenGL a partir de los datos de cada uno de los pixeles que forman la superficie.<br /><br /><blockquote><div><cite>blito83 escribió:</cite><br />Las funciones de bliteo de sdl dejan de tener sentido?<br /></div></blockquote><br /><br />Claramente dejan de tener sentido, ya que no haremos uso de los blittings de SDL ni el Page Flipping implementado por este, ya que ahora tenemos que dibujar con las funciones de OpenGL. <br /><br />Como estamos trabajando con imagenes 2D, asociaremos a un rectángulo (GL_Quads) en OpenGL la textura cargada anteriormente, y luego con la dupla glBegin/glEnd dibujaremos la imagen (textura) en pantalla, pero siempre utilizando funciones de OpenGL. <br /><br />Antes de dibujar haríamos las rotaciones o escalados correspondientes con las funciones glRotate y glScale o aplicar  efectos de Alpha blending con glColor.<br /><br />Si te das cuenta, como decía anteriomente, SDL solo cumpliría la función de iniciar un modo de video en una ventana y manejar eventos, el trabajo duro de renderizado lo haría OpenGL.<br /><br />Esto ya lo había respondido hace un tiempo en el grupo de SDL, míralo acá:<br /><br /><!-- m --><a class="postlink" href="http://groups.google.com/group/sdl-es/browse_thread/thread/227dce04d9a5ba53/afb9995df362bb2b?lnk=gst&amp;q=opengl&amp;rnum=3#afb9995df362bb2b">http://groups.google.com/group/sdl-es/b ... 5df362bb2b</a><!-- m --><br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Mar Jun 26, 2007 1:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blito83]]></name></author>
<updated>2007-06-25T23:26:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=417#p417</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=417#p417"/>
<title type="html"><![CDATA[librerias y funciones ya hechas para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=417#p417"><![CDATA[
Saludos a todos !<br />Rcaf me convencio con su respuesta y he estado urgando por internet un poco. He encontrado pocos tutoriales sobre como utilizar opengl con sdl.<br />No digo que no los haya, pero suelen contarte como inicializarlo, pero no dean claro su uso ( perdonad, por el plural, es a mi a quien no le queda claro)<br /><br />Cual es la idea? pasarle surfaces de sdl a opengl como textura para rectangulos? <br /><br />Las funciones de bliteo de sdl dejan de tener sentido?<br /><br />hasta pronto!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1090">blito83</a> — Lun Jun 25, 2007 11:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-04-05T02:02:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=257#p257</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=257#p257"/>
<title type="html"><![CDATA[librerias y funciones ya hechas para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=257#p257"><![CDATA[
Claro quizás para SDL no existan tantas funciones de ese estilo (efectos como los que mencionas). Por ejemplo para Allegro hay muchas más (muchos add-ons).<br /><br />En realidad hacer todo este tipo de efectos con SDL sería poco óptimo, y la velocidad que se podría lograr no sería muy aceptable.<br /><br />Es preferible utilizar OpenGL para todo el manejo gráfico e implementar los efectos con texturas y aprovechar las características de aceleración por hardware de tu tarjeta de video.<br /><br />Todo lo referente a transformaciones (traslación, rotación, escalado) en OpenGL va muy rápido, no así en SDL, que para lograrlo deberíamos usar SDL_rotozoom o implementar estas transformaciones nosotros mismos.<br /><br />En fin, creo que si quieres usar SDL úsalo como base para manejo de eventos (que es bastante completo), manejo de timers, threads y tal vez sonido/música también (aunque prefiero FMOD!), red (SDL_net), fuentes (SDL_ttf), etc y renderizar todos los gráficos con OpenGL.<br /><br />Saludos y bienvenido al foro! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Jue Abr 05, 2007 2:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blito83]]></name></author>
<updated>2007-04-04T23:41:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=256#p256</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=256#p256"/>
<title type="html"><![CDATA[librerias y funciones ya hechas para SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=74&amp;p=256#p256"><![CDATA[
Hola a todos, me estoy introduciendo a esto de SDL y no encuentro demasiadas funciones ya creadas.<br />Es una biblioteca de uso extendido y aun asi, a parte SDL_gfx no encuentro funciones para SDL.<br />me refiero a cosas como por ejemplo modificar una imagen en tiempo real para que parezca que ondula (efecto agua) o un algoritmo para resaltar el borde de un sprite... cosillas asi que luego usamos en nustros proyectos y que bueno, yo pense que ya estarian colgadas..<br />Soy nuevo en el foro, asi que un saludo a todos y encantado de leeros.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1090">blito83</a> — Mié Abr 04, 2007 11:41 pm</p><hr />
]]></content>
</entry>
</feed>