<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=238" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-06-15T16:59:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=238</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2009-06-15T16:59:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=2601#p2601</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=2601#p2601"/>
<title type="html"><![CDATA[¿como muevo todo el escenario?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=2601#p2601"><![CDATA[
eso es parecido a mi problema.<br />buscare mas sobre el &quot;Scroll&quot; para pygame!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Jun 15, 2009 4:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-01-02T18:59:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=1837#p1837</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=1837#p1837"/>
<title type="html"><![CDATA[¿como muevo todo el escenario?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=1837#p1837"><![CDATA[
Pensaba abrir un tema nuevo, pero vi que este ya estaba <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><br /><br />Mi juego tiene un sistema de scroll como el descrito aquí, solo<br />que es un mapa MUY grande, y crear una Surface con pygame<br />toma mucho tiempo y memoria. Intentado solucionar esto pensé<br />en otra forma de lograr el scroll:<br /><br />Revisar la posición de las unidades, así como de los tiles alrededor<br />de la pantalla y llamar a una función blit() que los pinte en la posición<br />correcta (restando a su posicion original la posición de camará), en<br />lugar de crear una superficie completa y tomar una parte.<br /> ventaja: Como quiero hacer un juego en red, se podria enviar al jugador<br />solamente la información del entorno cercano, unidades y demás.<br /> desventaja: hum, quiza algun efecto, como una explosión ocurriendo<br />fuera de pantalla, pero que arroje fuego o algo, no sería visible al jugador<br />a menos que se desplaze hacia alli.<br /><br />Que les parece, el juego que estoy haciendo es de estrategia por turnos,<br />y cada casilla tiene sus propiedades, como la imágen a mostrar y las<br />unidades que en ese momento se encuentran en ellas, así solo revisaria<br />las casillas vecinas en lugar de revisar toda la lista de unidades <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Vie Ene 02, 2009 6:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-11T13:51:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=884#p884</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=884#p884"/>
<title type="html"><![CDATA[¿como muevo todo el escenario?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=884#p884"><![CDATA[
Hola, entiendo que tu apreciación es correcta. El efecto de mostrar un<br />escenario amplio con desplazamiento se suele denominar &quot;Scroll&quot;, muchos<br />juegos lo tienen y hay muchas formas de lograrlo.<br /><br />Pygame no cuenta con una clase específica para lograrlo, dado que el<br />efecto de &quot;scroll&quot; es casi exclusivo de cada juego, y en esos casos<br />es mejor que el mismo programador implemente el scroll que necesita.<br /><br />Para empezar te recomiendo que uses la idea que nos comentas<br />anteriormente: imprimir el escenario en diferentes posiciones<br />simulando el efecto de cámara, e imprimiendo solo lo que se ve<br />en pantalla. Para esto te será especialmente útil el tercer<br />parámetro opcional de la función 'blit':<br /><br />    <!-- m --><a class="postlink" href="http://www.pygame.org/docs/ref/surface.html#Surface.blit">http://www.pygame.org/docs/ref/surface. ... rface.blit</a><!-- m --><br /><br />En la web tienes un ejemplo de scroll pero realizado en C con<br />SDL, se llama desplazamiento suave y está en la siguiente<br />dirección:<br /><br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos/ejemplos.php">http://www.losersjuegos.com.ar/referenc ... emplos.php</a><!-- m --><br /><br />Puedes usarlo como referencia si te parece bien. O si tienes<br />dificultades para interpretarlo avísame y lo re-escribo pero<br />para python y pygame.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Feb 11, 2008 1:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gatsu]]></name></author>
<updated>2008-02-11T06:08:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=882#p882</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=882#p882"/>
<title type="html"><![CDATA[¿como muevo todo el escenario?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=238&amp;p=882#p882"><![CDATA[
Hola a todos.<br /><br />Mi problema es el siguiente:<br /><br />     - Quiero hacer un videojuego en el que un personaje se desplace por un escenario bastante amplio<br /><br />     - No  pienso mostrar el escenario  completo, sino solo la zona por donde transita el personaje.<br /><br />     He pensado que para lograr esto debo mover el escenario completo y solo ir dibujando lo que se vaya necesitando.<br /><br />     Ahora bien, lo que les quiero preguntar es: ¿Mi apreciación es correcta? ¿existe alguna función/clase en pygame que me apoye con esto?<br /><br />     Agradeceria mucho que me dieran su opinion.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1887">gatsu</a> — Lun Feb 11, 2008 6:08 am</p><hr />
]]></content>
</entry>
</feed>