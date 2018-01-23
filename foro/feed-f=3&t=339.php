<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=339" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-25T17:01:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=339</id>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2008-09-25T17:01:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1678#p1678</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1678#p1678"/>
<title type="html"><![CDATA[Mini RPG mejorado: Chrono trigger; Ayuda con FSM...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1678#p1678"><![CDATA[
Hace algun tiempo que no agarro pygame, y revisando<br />algunos ejemplos que tenia, vi una nueva versión de este<br />ejemplo, la hice hace un par de meses:<br /><br /><a href="http://www.hotlinkfiles.com/files/1884931_h5pxx/chrono-rpg.zip" class="postlink">http://www.hotlinkfiles.com/files/1884931_h5pxx/chrono-rpg.zip</a><br /><br />Las mejoras son las siguientes:<br /><br />IA.- Muy básica, Frog comienza a caminar solito y cuando<br />ve un gatito se acerca a el (pero el gato no desaparece).<br /><br />Música.- Inlcuye una cancion que no creo que sea libre  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /><br /><br />Cuando se encuentra con un obstaculo, frog toma otra<br />dirección, pero en ocasiones se atora y podemos cambiar<br />su dirección con el ratón (botón secundario).<br /><br />Por cierto, este ejemplo usa lo que aprendi acá:<br /><a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;highlight=" class="postlink">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;highlight=</a><br /><br />En fin, no tiene gran cosa el juego pero es una mejora.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Jue Sep 25, 2008 5:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thepoi]]></name></author>
<updated>2008-06-13T16:46:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1486#p1486</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1486#p1486"/>
<title type="html"><![CDATA[Mini RPG mejorado: Chrono trigger; Ayuda con FSM...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1486#p1486"><![CDATA[
Hola;<br /><br />Las maquinas de estados finitos, o tb conocidos como automatas finitos, son un modelo abstracto de computo, asi que son independientes del lenguaje. Es decir, que cualquier libro o tutorial que encuentre en internet sobre ellos te valdra.<br /><br />Realmente un automata no es mas que un &quot;ente&quot; que tiene estados, y se va moviendo por los estados segun la entrada que le llegue. Es decir, imagina que tenemos un automata que controla los estados de un personaje, e inicialmente esta en el estado &quot;PARADO&quot;, pues si le llega como entrada una pulsacion hacia abajo pasará al estado &quot;AGACHADO&quot;.<br /><br /><br />En este misma web hay una explicacion aplicada a los videojuegos :<br /><br /><!-- m --><a class="postlink" href="http://www.loosersjuegos.com.ar/referencia/articulos/automatas/automatas.php">http://www.loosersjuegos.com.ar/referen ... omatas.php</a><!-- m --><br /><br />Tendras que diseñar un automata adecuado a tu juego atendiendo a las acciones que quieres que realice tus personajes y el control o eventos asociado a cada una de ellas.<br /><br /><br />Respecto a la IA solo puedo decirte que desde mi punto de vista es la parte mas dificil de implementar en un videojuego. Todo depende de las restricciones que quieras imponer. Si te fijas la mayoria de juegos 2D que se suelen ver tienen una IA muy pobre.<br /><br />Podrias hacer que un enigo este quieto y si tu personaje se acerca lo suficiente este venga a atacarte por ej. Eso no es demasiado dificil.<br />Simplemente dejas al enemigo quieto y vas calculando la distancia entre su x,y y la de tu personaje, desde el moemento es que sea menor que un valor que a ti te guste pues le das una velocidad horizontal y vertical en la direccion en la que esta tu personaje.<br />Luego en el combate (suponiendo que sea un rpg por turnos) pues que realice los distintos ataques de forma aleatoria.<br /><br />Bueno, no se si te habre liado mas, espero que no ^^<br /><br />1 saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1943">thepoi</a> — Vie Jun 13, 2008 4:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2008-06-13T00:15:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1485#p1485</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1485#p1485"/>
<title type="html"><![CDATA[Mini RPG mejorado: Chrono trigger; Ayuda con FSM...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=339&amp;p=1485#p1485"><![CDATA[
Bien...<br />He estado revisando el código de varios juegos de este<br />web y de pygame.org, sobre todo el de Mini RPG pues<br />está en varias etapas, siendo más fácil de analizar…<br /><br />Comencé a estudiar el ejemplo y lo único<br />que le añadí fue la animación de frog caminando:<br /><br /><img src="http://www.hotlinkfiles.com/files/1884902_nwrto/chrono.png" alt="Imagen" /><br /><br />Esa fue la primer animación que hice, y me quedo bien chida  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><br />aunque no pueda utilizar los sprites mas que en estos ejemplos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> <br /><br />Ahora el problema:<br />Había estado leyendo el libro de Will McGugan,” beggining<br />game developement with python and pygame” y todo iba bien<br />hasta que el tipo paso de enseñarnos a controlar el teclado y<br />pintar imágenes a hacer una simulación de un hormiguero que<br />nomas me quede perdido y no pude seguir  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> ; que<br />maquinas de estados finitos, game entities, … me fue difícil<br />hacer una traza de lo que hace el juego pues no lo hace paso<br />a paso, sino que explica esta que esta parte de código hace<br />esto, esta otra hace esto…. Y la pregunta es:<br /><br />Alguien sabe de un tutorial sencillo que haya por ahí sobre<br />esto?? No he encontrado nada &quot;legible&quot; sobre IA, y lo que me<br />gustaría ahora seria hacer que frog camine solo, buscando<br />algo por el escenario, o siendo un contrincante para pelear.<br />Pero lo único que necesito algo muy básico, y no un “ejemplo”<br />de 500 líneas, podría alguien ayudarme...<br /><br />A, por cierto, el codigo del ejemplo aca:<br /><a href="http://www.hotlinkfiles.com/files/1884903_46qha/chrono.rar" class="postlink">http://www.hotlinkfiles.com/files/1884903_46qha/chrono.rar</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Vie Jun 13, 2008 12:15 am</p><hr />
]]></content>
</entry>
</feed>