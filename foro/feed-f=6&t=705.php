<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=705" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-06-13T14:33:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=705</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-06-13T14:33:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3368#p3368</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3368#p3368"/>
<title type="html"><![CDATA[SMFL?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3368#p3368"><![CDATA[
<blockquote><div><cite>xeesar escribió:</cite><br />Otra cosa que no me gusta de pygame es que, al menos por lo que se refleja en la traducción de la api que hicisteis aquí, no ofrece funciones de red. Que por cierto, si alguien sabe de algún tutorial (en el idioma que sea) sobre la implementación de un sistema de red con SNL, SDL_Net o las funciones de red de SFML agradecería enormemente el link.<br /></div></blockquote><br /><br />Si, se habló hace un buen tiempo de eso en la lista de pygame, y por lo que<br />se comentó la recomendación es mas o menos así: pygame no tiene funciones<br />o modulos de red porque python las ofrece desde otras bibliotecas, incluso<br />hay funciones para redes desde la propia biblioteca estándar.<br /><br />Por eso, al menos a mí, me pareció una justificación válida, lástima que<br />no tengo conocimientos de esas otras libs para comentarte algún ejemplo, veré si<br />puedo investigarlo para dentro de unas semanas.<br /><br /><blockquote><div><cite>xeesar escribió:</cite><br />Una duda en cuanto a pyglet, ¿qué tal su rendimiento de ejecución? es que hace poco vi un tutorial de un juego sencillo hecho con pyglet que usaba sincronización por tiempo (ningún tipo de sincronización o limitación de los FPS) y aún así se ejecutaba a tan solo 30 FPS, tal vez por eso de que python no es el lenguaje más rápido y pyglet está escrita en python su rendimiento es menor que el de pygame o SFML escritas en C.<br /></div></blockquote><br /><br />que raro, 30 fps es muy poquito, ¿tienes la dirección web del tutorial para verlo?. Por<br />lo que tengo entendido pyglet evita imprimir en pantalla si no es necesario, pero<br />depende del juego. Por ejemplo, si haces una aplicación con pyglet y <br />no dibujas nada los FPS no se mantienen altos, solo cuando pones objetos a moverse<br />con los FPS aumentan.<br /><br />Pero bueno, depende del juego y habría que ver porqué pasa...<br /><br />PD: ya que estás evaluando bibiotecas para python, ¿has visto cocos2d?: <!-- m --><a class="postlink" href="http://cocos2d.org/">http://cocos2d.org/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Jun 13, 2010 2:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xeesar]]></name></author>
<updated>2010-06-13T10:43:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3367#p3367</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3367#p3367"/>
<title type="html"><![CDATA[SMFL?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3367#p3367"><![CDATA[
Hola! Gracias por vuestras respuestas, me han solventado muchas dudas.<br /><br />La verdad es que tengo ciertos conocimientos de Java y C así que lo de usar python no es por iniciarme en el mundillo éste sino por aprenderlo, por que pienso que es un requisito indispensable en la caché de cualquier programador, en principio no tengo pensado saltar a otro lenguaje hasta que halla adquirido un cierto dominio de python.<br /><br />Exactamente tal y como comenta Juanxo mi interés no es tanto dedicarme la producción de juegos sino aprender éste área de la programación, pero precisamente por eso si que me interesan temas como la acelaración por hardware, para aprender un poco más sobre su funcionamiento e implementación.<br /><br />Mi interés en las rotaciones viene de que le propuse a un amigo desarrollar un juego de ruleta de casino éste verano a modo de práctica y las funciones de transformación que ofrece pygame no me convencieron demasiado, la calidad de las rotaciones deja mucho que desear y en algunos casos (por el tema del rellenado) produce efectos totalmente inesperados, en cuanto a las transparecias resulta que solo sustituye el colorkey por una copia de esa zona de la imagen de fondo por lo que al aplicar rotaciones y zoom también se producen efectos indeseados.<br /><br />Otra cosa que no me gusta de pygame es que, al menos por lo que se refleja en la traducción de la api que hicisteis aquí, no ofrece funciones de red. Que por cierto, si alguien sabe de algún tutorial (en el idioma que sea) sobre la implementación de un sistema de red con SNL, SDL_Net o las funciones de red de SFML agradecería enormemente el link.<br /><br />Una duda en cuanto a pyglet, ¿qué tal su rendimiento de ejecución? es que hace poco vi un tutorial de un juego sencillo hecho con pyglet que usaba sincronización por tiempo (ningún tipo de sincronización o limitación de los FPS) y aún así se ejecutaba a tan solo 30 FPS, tal vez por eso de que python no es el lenguaje más rápido y pyglet está escrita en python su rendimiento es menor que el de pygame o SFML escritas en C.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2222">xeesar</a> — Dom Jun 13, 2010 10:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-06-12T03:51:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3366#p3366</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3366#p3366"/>
<title type="html"><![CDATA[SMFL?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3366#p3366"><![CDATA[
buenas xeesar:<br /><br />Lo primero, bienvenido. <br />Ahora vamos a lo que nos interesa a todos. Como siempre, hugo te ha dado detalles de calidad, nada que añadir aqui.<br /><br />Quizás, si acaso, plantearte una cuestion de futuro:<br />Piensas utilizar Python como plataforma de aprender a hacer juegos para luego saltar a otro lenguaje? (cosa que muchos de aqui hemos hecho)<br /><br />Basicamente lo digo porque si tu respuesta es afirmativa, quizás tiraría más por la vertiente de SFML, ya que en otros lenguajes, es más robusta que SDL (opinion personal), y conocer un poco la API de SFML te ayudaria. El tema de Aceleracion por hardware y demás aqui perderia un poco de relevancia, porque tu interes es aprender y no distribuir tus juegos.<br /><br /><br />PD: perdon por hacer off-topic en tema ajeno, pero solo un apunte al apunte de hugo acerca de UBUNTU: Visual Studio<br />El dia que haya algo parecido (codeblocks se acerca, pero visual studio + plugins aun esta lejos), juro que quemo mi copia de windows.......bueno, la dejare pa los juegos xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Sab Jun 12, 2010 3:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-06-10T13:50:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3365#p3365</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3365#p3365"/>
<title type="html"><![CDATA[SMFL?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3365#p3365"><![CDATA[
<blockquote><div><cite>xeesar escribió:</cite><br />Hola! soy nuevo en esto de la programación de juegos pero llevo un par de días dándole caña y empiezo a conseguir resultados interesantes, así que en cuanto acabe con los exámenes es probable que me empecéis a ver bastante por aquí. Bueno a parte de hacer mi presentación en sociedad quería preguntar unas cosillas:<br /><br />¿Qué diferencia hay entre pygame y pysmfl? ¿Cómo se instala pysmfl, con las indicaciones que dan en la pagina no me he aclarado mucho? ¿Son suficientemente buenas las funciones de rotación que ofrecen éstas librerías? me refiero para conseguir objetos puramente rotativos como ruletas o la bola que gira sobre la ruleta.<br /></div></blockquote><br /><br />Buenas, ante todo bienvenido!!.<br /><br />En sí, pygame y pysfml son muy similares. La diferencia principal es<br />cómo dibujan en pantalla. pygame accede a las funcionalidad de<br />video a través de la biblioteca SDL, que demuestra ser muy buena<br />para dibujar en dos dimensiones pero sin aceleración de video, es<br />decir, no tienes rotaciones perfectas ni transparencias alpha a<br />menos que lo trabajes por tu cuenta.<br /><br />En cambio pySFML utiliza a la biblioteca OpenGL para dibujar en pantalla,<br />lo que te permite mejor rendimiento en los equipos que tienen aceleracion<br />de video, es mas sencillo lograr rotaciones, escalados, efectos de<br />transparencias etc... <br /><br />Depende mucho de lo que quieras hacer, y del público al que apunta<br />tu juego. Si quieres que funcione en casi todos los equipos, incluso<br />los mas modestos, pygame te da esa posibilidad, pysfml solo funciona<br />bien en equipos mas nuevos que tengan una tarjeta de video aceleradora.<br /><br />Por lo que me comentas, si quieres hacer muchas rotaciones te recomendaria<br />que utilices SFML o pyglet.<br /><br />Ah, y por último, para instalar cualquiera de estas bibliotecas<br />en GNU/Linux te recomiendo utilizar la herramienta `apt-get`. Por<br />ejemplo:<br /><br />    apt-get install python-sfml<br />    apt-get install python-pyglet<br />    apt-get install python-pygame<br /><br /><br /><blockquote><div><cite>xeesar escribió:</cite><br />Por otro lado he visto que la librería pyglet está diseñada en python directamente por lo que no se necesita nada más para poder utilizar los juegos programados con ésta librería, pero entonces en el caso de librerías como pygame que más se necesita, yo solo descargue el interprete de python y la libreria pygame y me funciona todo perfecto.<br /></div></blockquote><br /><br />Si, pyglet utiliza OpenGL al igual de SFML, por lo que te permite hacer<br />rotaciones, transparencias etc... pero a diferencias de SFML tiene esta virtud que<br />comentas: no requiere instalación de muchas bibliotecas para funcionar.<br /><br />Igualmente, tanto pyglet como pygame y sfml tienen  muchas dependencias, en sistemas<br />como Ubuntu no es difícil instalarlas, y Windows está bastante extendido así que<br />tampoco es difícil encontrar instaladores para cada biblioteca.<br /><br />La diferencia de pyglet, en el tema de las dependencias, es que pyglet<br />cuando quiere hacer algo como cargar una imagen, busca las biliotecas que<br />tienes instaladas e intenta cargar la imagen con alguna de ellas. Por ejemplo, si<br />tienes gnome intenta cargar las imagenes con la biblioteca gtk, si tienes<br />la biblioteca PIL usa esa.. etc.<br /><br /><blockquote><div><cite>xeesar escribió:</cite><br />Se me olvidaba decir que uso Ubuntu... por si acaso tiene algo que ver xD<br /><br />1 saludo!!<br /></div></blockquote><br /><br />Si, gran sistema, a mi modo de ver es &quot;la&quot; herramienta para desarrollar<br />y aprender.<br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jun 10, 2010 1:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[xeesar]]></name></author>
<updated>2010-06-08T20:15:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3364#p3364</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3364#p3364"/>
<title type="html"><![CDATA[SMFL?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3364#p3364"><![CDATA[
Hola! soy nuevo en esto de la programación de juegos pero llevo un par de días dándole caña y empiezo a conseguir resultados interesantes, así que en cuanto acabe con los exámenes es probable que me empecéis a ver bastante por aquí. Bueno a parte de hacer mi presentación en sociedad quería preguntar unas cosillas:<br /><br />¿Qué diferencia hay entre pygame y pysmfl? ¿Cómo se instala pysmfl, con las indicaciones que dan en la pagina no me he aclarado mucho? ¿Son suficientemente buenas las funciones de rotación que ofrecen éstas librerías? me refiero para conseguir objetos puramente rotativos como ruletas o la bola que gira sobre la ruleta.<br /><br />Por otro lado he visto que la librería pyglet está diseñada en python directamente por lo que no se necesita nada más para poder utilizar los juegos programados con ésta librería, pero entonces en el caso de librerías como pygame que más se necesita, yo solo descargue el interprete de python y la libreria pygame y me funciona todo perfecto.<br /><br />Se me olvidaba decir que uso Ubuntu... por si acaso tiene algo que ver xD<br /><br />1 saludo!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2222">xeesar</a> — Mar Jun 08, 2010 8:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-03-11T20:24:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3304#p3304</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3304#p3304"/>
<title type="html"><![CDATA[SMFL?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3304#p3304"><![CDATA[
Yo estoy utilizando SFML desde python y me parece<br />genial. La verdad es que funciona muy bien y vale<br />la pena...<br /><br />de hecho, arme una clase para manejar grillas<br />de sprites por si te interesa:<br /><br />    <!-- m --><a class="postlink" href="http://www.sfml-dev.org/wiki/en/sources/spritesheets">http://www.sfml-dev.org/wiki/en/sources/spritesheets</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Mar 11, 2010 8:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-03-11T14:58:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3303#p3303</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3303#p3303"/>
<title type="html"><![CDATA[SMFL?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=705&amp;p=3303#p3303"><![CDATA[
Buenas a todos, he estado mirando un poco SMFL y pinta muy bien, Los que la hayais o la estéis utilizando la recomendaríais?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 11, 2010 2:58 pm</p><hr />
]]></content>
</entry>
</feed>