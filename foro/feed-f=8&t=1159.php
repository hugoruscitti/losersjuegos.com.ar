<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1159" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-26T11:12:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1159</id>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-05-26T11:12:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5579#p5579</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5579#p5579"/>
<title type="html"><![CDATA[Re: hice un juego en C++, lo migre a phyton y pilas y ahora?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5579#p5579"><![CDATA[
Hola luisalbert! En primer lugar que yo sepa no hay juegos basados en pilas portados a celular, principalmente porque pilas se basa en un montón de librerías las cuales no están disponibles para celulares (empezando por SFML).<br /><br />En segundo lugar si quieres que una aplicación que usa unas determinadas herramientas corra en una máquina necesitas, obviamente, que dicha máquina disponga de las herramientas. En el caso de una aplicación python necesitas tener instalado el intérprete de python (en linux viene por defecto en windows te lo puedes bajar de la página oficial).<br /><br />El IDLE es un IDE para python, una herramienta para escribir la aplicación no para ejecutarla, por lo tanto no necesitas que esté instalado para poder utilizar la aplicación.<br /><br />Si tu juego utiliza una librería, como pilas, necesitarás que dicha librería esté disponible en la máquina. Lo contrario sería como querer ejecutar un juego que usa directx en una máquina que no tiene instalado directx. De hecho todos los juegos que usan directx lo traen dentro del disco de instalación para que lo instales en caso de no tenerlo instalado ya.<br /><br />En caso de quieras distribuir tu aplicación basada en pilas a usuarios de linux puedes instalar pilas en el mismo directorio del juego de ésta manera los usuarios no tendrán que descargarse y/o instalar nada ya que tú mismo les estás pasando la librería junto con el juego.<br /><br />En el caso de windows no sé si existe esa posibilidad o tendrás que pedirles que se instalen todo.<br /><br />Como ya te han comentado puedes evitar que los usuarios se tengan que descargar el intérprete de python convirtiendo tu aplicación .py en un .exe con algún script como py2exe.<br /><br />En cualquier caso échale un vistazo a la documentación de la página oficial de pilas <a href="http://www.pilas-engine.com.ar" class="postlink">http://www.pilas-engine.com.ar</a> donde hay tutoriales sobre los diferentes modos de instalar pilas y como hacerlo en las diferentes plataformas.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue May 26, 2011 11:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[angelus_ira]]></name></author>
<updated>2011-05-25T21:39:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5576#p5576</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5576#p5576"/>
<title type="html"><![CDATA[Re: hice un juego en C++, lo migre a phyton y pilas y ahora?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5576#p5576"><![CDATA[
Requerimiento de la máquina donde vayan a jugar, exactamente los mismos que pilas engine +pilas.<br />Como es un lenguaje interpretado, va a ser necesario que la máquina donde se juegue tenga Python y pilas.<br />Si llegas a querer hacerlo ejecutable, existen programas como py2exe y otros. Ejemplo:<br /><a href="http://cx-freeze.sourceforge.net/" class="postlink">http://cx-freeze.sourceforge.net/</a><br />Sinceramente no he probado a cx-freeze, pero  he visto varios proyectos usarlo y andando bastante bien<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2230">angelus_ira</a> — Mié May 25, 2011 9:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[luisalbert]]></name></author>
<updated>2011-05-25T17:00:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5572#p5572</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5572#p5572"/>
<title type="html"><![CDATA[hice un juego en C++, lo migre a phyton y pilas y ahora?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1159&amp;p=5572#p5572"><![CDATA[
resulta que el juego de atrapame si puedes que hice para mi curso de programación dos de la universidad me ha dejado un sabor raro <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> , quise montarlo en un celular, pero, y eso como se hace <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> ?, vi que pilas ha ayudado a realizar juegos para celular así que dije, <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_idea.gif" alt=":idea:" title="Idea" />  migremos de C++ a phyton el juego, entonces maravilla ya logro hacer que funcionen dos que tres cosas,  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> pero....<br /><br />y ahora como creo un ejecutable o similar?<br /><br />Phyton es un lenguaje que no requiere compilación, sino que se ejecuta linea a linea y aquí es donde me siento corto en conocimiento, en C++ leo como leía en el jardín infantil  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" /> , pero  Phyton, lo simple que es, lo hace hermoso, pero,  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> como se hace para ejecutarlo en una maquina nueva, es decir lo llevo a otro computador y que tengo que instalar o correr o hacer que?<br /><br />como se han dado cuenta, pese a que vengo por acá seguido poco escribo, me gusta mas, leer y llegar con alguna duda real y no por pereza, pero, no le voy a instalar a mi juego el IDLE para que el usuario importe pilas y lo inicie y... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> <br /><br />por favor una ayuda con esto<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2423">luisalbert</a> — Mié May 25, 2011 5:00 pm</p><hr />
]]></content>
</entry>
</feed>