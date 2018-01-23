<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=671" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-01-30T21:48:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=671</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-01-30T21:48:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3229#p3229</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3229#p3229"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3229#p3229"><![CDATA[
Buenas, yo estuve avanzado un poco con mi implementacion<br />de bones2d:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20100130/tai.png" alt="Imagen" /><br /><br />Aunque lamentablamente tiene un Bug que se ve cuando<br />conecto tres piezas (o mas) y las hago rotar.<br /><br />Grabé un video donde se puede ver este bug:<br /><br />&lt;object width="425" height="344"&gt;&lt;param name="movie" value="http://www.youtube.com/v/k__hCXv4zhQ&amp;hl=es&amp;fs=1"&gt;&lt;/param&gt;&lt;param name="allowFullScreen" value="true"&gt;&lt;/param&gt;&lt;param name="allowscriptaccess" value="always"&gt;&lt;/param&gt;&lt;embed src="http://www.youtube.com/v/k__hCXv4zhQ&amp;hl=es&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"&gt;&lt;/embed&gt;&lt;/object&gt;<br /><br /><br />El código fuente del programa está en la siguiente<br />dirección:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/incoming/descargas/20100130/bones2d.tar.gz">http://www.losersjuegos.com.ar/incoming ... s2d.tar.gz</a><!-- m --><br /><br />Espero solucionar este bug en cuanto tenga un poquito<br />mas de tiempo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ene 30, 2010 9:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-16T14:44:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3192#p3192</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3192#p3192"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3192#p3192"><![CDATA[
<blockquote><div><cite>Juan Carlos escribió:</cite><br />He visto el demo de JumpingJack y esta muy bueno. Creo que le faltaria un boton que sacara unas fotografias para obtener los fotogramas.<br /></div></blockquote><br />El código es de dominio público, así que puedes animarte y intentar hacerlo. La gracia sería calcular la bounding box. Aunque de esta manera se desaprovecharía la técnica de bones en el juego y los dibujos serían más rápidos de hacer, pero de peor calidad que a mano. Igualmente a lo mejor lo intento hacer para aprender como funciona el código.<br /><br /><blockquote><div><cite>Juan Carlos escribió:</cite><br />Nota personal: Con respecto al libro <span style="font-style: italic">Core Techniques and Algorithms in<br />Game Programming</span> yo lo he leido y la verdad es que no lo recomiendo. <br />Para mi gusto, abarca demasiados temas, que van desde historia a estructuras de datos, y luego a graficos 2/3D,  y solo profundiza algunos parrafos por cada tema.<br /></div></blockquote>Lo encuentro normal, la programación de videojuegos abarca muchos temas. A partir de una base, se puede profundizar en los temas que más interesen (como pasa en la universidad).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Ene 16, 2010 2:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2010-01-15T18:18:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3191#p3191</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3191#p3191"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3191#p3191"><![CDATA[
He visto el demo de JumpingJack y esta muy bueno. Creo que le faltaria un boton que sacara unas fotografias para obtener los fotogramas.<br /><br />Me explico, supongamos que quiero hacer una animacion de Jack corriendo, abro el programa y pongo a Jack en una posicion inicial usando los controles y luego saco una fotografia (fotograma 1).<br />Muevo levemente las piernas de Jack y saco otra fotografia (fotograma 2). <br />Nuevamento muevo a Jack y repito el proceso.<br />El programa deberia ser capaz de almacenar los fotogramas para luego exportarlo en forma de animacion.<br /><br />Nota personal: Con respecto al libro <span style="font-style: italic">Core Techniques and Algorithms in<br />Game Programming</span> yo lo he leido y la verdad es que no lo recomiendo. <br />Para mi gusto, abarca demasiados temas, que van desde historia a estructuras de datos, y luego a graficos 2/3D,  y solo profundiza algunos parrafos por cada tema.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Ene 15, 2010 6:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-01-13T22:48:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3190#p3190</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3190#p3190"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3190#p3190"><![CDATA[
jajajaja si es que al final....<br /><br />te puedes creer que yo también estoy pensando en irme a la Pompeu. Estoy en la misma que tu (Politécnica), que tiene nombre, pero la verdad es que para mi deja bastante que desear. Lo que pasa es que para mi seria un cambio bastante gordo, pero lo pensaré.<br /><br />A ver si a partir del 20, que tengo tres semanas de vacaciones (el grado es lo que tiene), me pongo de nuevo con OpenGL y le damos a los Bones<br /><br />Me alegro de que te pongas con el ingles. Por si surge cualquier duda, pregunta si quieres.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Ene 13, 2010 10:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-13T22:11:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3189#p3189</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3189#p3189"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3189#p3189"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />@endaramiz: como veo que te va gustando este temilla, te voy a recomendar un libro, y especialmente un autor. <br /><br />Core Techniques and Algorithms in Game Programming. Su autor es un &quot;vecino&quot; tuyo: Daniel Sánchez Crespo-Dalmau, profesor de la Pompeu y del master de juegos de la Pompeu. No se si por allí podrás conseguir una copia que este en español, pero espero que la consigas porque viene muy bien explicado esto, y todo lo demás. Además, utiliza OpenGL en sus ejemplos, o pseudocodigo.<br /><br />Si no puedes o no tienes ganas de buscarlo, cuando termine los examenes te puedo hacer un mini-resumen del tema de animacion, en el que trata bastante lo de bones y cinemáticas<br /></div></blockquote><br />Pues que casualidad que el otro día estuve mirando su excelente currículum. A parte de ser mi &quot;vecino&quot;, resulta que estudió en la misma facultad que yo. Solo que después se pasó a la &quot;competencia&quot;. Aunque es probable que yo haga lo mismo, solo que como alumno y no de profesor. Volviendo al tema: Gracias! La verdad es que lo miré mientras descansaba de estudiar y luego seguí estudiando y no le presté toda la atención que se merecía ese libro. Tiene muy buena pinta. Intentaré conseguirlo cuanto antes, aunque tengo cierto libro rojo a medias y a su compañero naranja sin comenzar. Lo &quot;bueno&quot; es que seguramente tenga bastante tiempo libre durante unos meses: al final me paso a grado y no me puedo coger muchas asignaturas por lo de las convalidaciones.<br />Veo que te acuerdas de mis dificultades con el inglés. Pero últimamente he mejorado mucho y me atreveré con la versión en inglés. Aunque en su web pone que tiene intención de traducirlo y no la descarto por si no me queda claro algún concepto.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Ene 13, 2010 10:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2010-01-13T16:25:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3185#p3185</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3185#p3185"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3185#p3185"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />...haora entiendo, la forma en la que funciona GL se parece al lenguaje logo cuando dibujas con la tortuga(para quienes lo conoscan), y veo que es mas facil hacer esas transformaciones de esta manera, por lo que vale la pena aprender GL...<br /></div></blockquote><br /><br />Nunca lo habia visto asi, pero si, se parece en cierto modo a la fora de dibujar en Logo (yo tambien lo use hace algunos años), la diferencia esta en que en Logo primero tiene uno que mover la tortuga y luego dibujar, en GL es al reves, primero dices que quieres dibujar y luego lo mueves del origen de cordenadas a donde quieras. Si, vale la pena aprender GL, para graficos 3D en software libre es, a mi criterio, la mejor opcion.<br /><br /><blockquote><div><cite>carlostex escribió:</cite><br />...haré una implementación usando solo SDL, buen articulo el que citaste, algunas ideas que tengo en mente son las que explica el articulo, así que pondré en practica lo que aprendí de álgebra y calculo vectorial...<br /></div></blockquote><br /><br />Si, con algebra y calculo vectorial se pueden hacer todos los calculos matematicos necesarios y luego dibujarlos con SDL, por poder se podria incluso calcular graficos 3D proyectados sobre un plano y dibujar con SDL graficos en 3D, lo unico es que seria mas lento de lo que lo haria GL, GL realiza todos esos calculos matematicas para poder dibujar lo unico es que si la tarjeta grafica lo admite en lugar de esos calculos realizarlos la CPU los realizaria la GPU, el chip de la tarjeta grafica realiza los calculos mas rapido ya que su unica funcion es realizar esos calculos (no tiene que procesar un SO y todos los programas en ejecucion, con lo que GL es mejor opcion en la practica (aunque el ejemplo, o el juego, sea en 2D) ya que los calculos con matrices GL los aria usando la GPU.<br /><br />Enderamiz, ¡buen ejemplo!, hace un tiempo que tengo apartado a un lado el aprender GL por los estudios, a ver si cuando pueda vuelvo a ponerme, por que esto la verdad es que es bastante interesante para los juegos, ya no solo para los juegos 3D, sino incluso para los 2D.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mié Ene 13, 2010 4:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-01-13T16:13:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3184#p3184</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3184#p3184"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3184#p3184"><![CDATA[
buenas a todos:<br /><br />@endaramiz: como veo que te va gustando este temilla, te voy a recomendar un libro, y especialmente un autor. <br /><br />Core Techniques and Algorithms in Game Programming. Su autor es un &quot;vecino&quot; tuyo: Daniel Sánchez Crespo-Dalmau, profesor de la Pompeu y del master de juegos de la Pompeu. No se si por allí podrás conseguir una copia que este en español, pero espero que la consigas porque viene muy bien explicado esto, y todo lo demás. Además, utiliza OpenGL en sus ejemplos, o pseudocodigo.<br /><br />Si no puedes o no tienes ganas de buscarlo, cuando termine los examenes te puedo hacer un mini-resumen del tema de animacion, en el que trata bastante lo de bones y cinemáticas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Ene 13, 2010 4:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-13T14:56:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3182#p3182</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3182#p3182"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3182#p3182"><![CDATA[
Ummh está muy bien, yo diría que incluso demasiado. ¿Ahora cual es el plan? Se podría empezar desde cero sin mirar el código, mirar el código y mejorarlo...<br /><br />Partiendo de ese código (creo que para publicarlo en la web tiene que ser libre) se podría trabajar un poco el tema de animaciones con posiciones clave y cinemática inversa. Que trata de ir guardando ciertas posiciones de la animación y que las otras se calculen automáticamente. Como todo el sistema de huesos está implementado, ya está la mitad del trabajo hecho. Aunque habría que mejorar algunas cosas como ángulos máximo y mínimo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Ene 13, 2010 2:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-01-09T23:07:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3159#p3159</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3159#p3159"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3159#p3159"><![CDATA[
Buscando ejemplos en la pagina de pygame.org encontré<br />un código que me pareció bastante interesante. Sobretodo<br />porque es muy interactivo: no solo te permite girar<br />y mover piezas sino que también da la posibilidad<br />de cambiar el eje de rotación de cada una:<br /><br />El ejemplo está en la siguiente página:<br /><br /> <!-- m --><a class="postlink" href="http://www.pygame.org/project-JumpingJack-412-.html">http://www.pygame.org/project-JumpingJack-412-.html</a><!-- m --><br /><br />Y esta es una captura de pantalla del ejemplo funcionando:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20100109/jump.png" alt="Imagen" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ene 09, 2010 11:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-05T12:25:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3132#p3132</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3132#p3132"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3132#p3132"><![CDATA[
Ok. He estado leyendo y pensando sobre animación esqueletal y creo que antes de tener un personaje corriendo y saltando, habría que pasar por este paso para editar los movimientos. Me parece bien tener como objetivo este punto ya que a lo mejor con algo más complejo se complicaba demasiado para un ejemplo. Y, además, si luego se ve que esto ha sido fácil y rápido, se puede ampliar un poco más. <br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Ene 05, 2010 12:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-01-04T11:49:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3126#p3126</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3126#p3126"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3126#p3126"><![CDATA[
Hey, buenisimo....<br /><br />Por mi parte trataré de hacer algo también, estuve viendo<br />que hay algo llamado &quot;títeres de palo o varilla&quot; que se podría<br />simular como un esqueleto en dos dimensiones.<br /><br />No se si alguno de ustedes de chico vió algo así, pero es<br />lo mas parecido a un bones 2d en la vida real... o eso creo...<br /><br /><img src="http://h20424.www2.hp.com/campaign/kungfupanda/ap/en/activitycentre/images_oov/Puppet_TaiLung_400x400.jpg" alt="Imagen" /><br /><br />Esta imagen la encontré en una campaña<br />de HP y kung fu panda:<br /><br /><!-- m --><a class="postlink" href="http://h20424.www2.hp.com/campaign/kungfupanda/ap/en/activitycentre/KFP_Puppets.asp">http://h20424.www2.hp.com/campaign/kung ... uppets.asp</a><!-- m --><br /><br />Mi idea sería tratar de hacer un personaje así con python<br />y alguna biblioteca como pygame o pySFML para que<br />mediante el mouse o alguna tecla se puedan rotar las<br />piezas de un personaje.<br /><br />Les dejo un ejemplo de animacion estilo flash<br />donde se puede ver algo similar pero en movimiento:<br /><br />&lt;object width="425" height="344"&gt;&lt;param name="movie" value="http://www.youtube.com/v/hUz0ZYwFGCg&amp;hl=es_ES&amp;fs=1&amp;"&gt;&lt;/param&gt;&lt;param name="allowFullScreen" value="true"&gt;&lt;/param&gt;&lt;param name="allowscriptaccess" value="always"&gt;&lt;/param&gt;&lt;embed src="http://www.youtube.com/v/hUz0ZYwFGCg&amp;hl=es_ES&amp;fs=1&amp;" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"&gt;&lt;/embed&gt;&lt;/object&gt;<br /><br />lo te tengo en mente es algo mucho mas simple, eso si...<br /><br />¿Que les parece?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ene 04, 2010 11:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-04T01:47:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3125#p3125</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3125#p3125"/>
<title type="html"><![CDATA[Les propongo un desafio: 2d Bones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3125#p3125"><![CDATA[
Trabajaré en ello, haré una implementación usando solo SDL, buen articulo el que citaste, algunas ideas que tengo en mente son las que explica el articulo, así que pondré en practica lo que aprendí de álgebra y calculo vectorial y en cuanto lo tenga codificado lo comparto con ustedes. saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Ene 04, 2010 1:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-04T01:04:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3124#p3124</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3124#p3124"/>
<title type="html"><![CDATA[Re: Haura entiendo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3124#p3124"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />Solo me queda una duda, esas son lineas que se dibujan de un punto a otro, cada vez que se llama a la funcion dubujar, pero si fueran imagenes, por ejemplo la de un huezo, como le aplicarias las tranformaciones, por que ya no puedes dar puntos de donde empieza y termina, habria que girar la imagen cierto angulo con respecto a un eje de rotacion cituado en uno de sus extremos, existe algo asi en GL?<br /></div></blockquote> Si que se puede, usando el mismo método de antes. Primero hay que realizar una translación de manera que el eje quede en el punto (0,0) y a continuación aplicar la rotación. Luego se podrían seguir aplicando transformaciones.<br /><br />He encontrado un articulo muy bueno donde explica la teoría. Esto sería útil conocerlo incluso si no se usa openGL.<br /><br /><!-- m --><a class="postlink" href="http://www.docstoc.com/docs/282412/transformaciones-geometricas-2D-Graficacion">http://www.docstoc.com/docs/282412/tran ... raficacion</a><!-- m --><br /><br /><br />Por cierto, intenta cuidar un poco más la escritura, que me he liado un poco leyendo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Ene 04, 2010 1:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-03T21:48:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3123#p3123</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3123#p3123"/>
<title type="html"><![CDATA[Haura entiendo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3123#p3123"><![CDATA[
Muchas gracias endemariz por explicarlo, haora entiendo, la forma en la que funciona GL se parece al lenguaje logo cuando dibujas con la tortuga(para quienes lo conoscan), y veo que es mas facil hacer esas transformaciones de esta manera, por lo que vale la pena aprender GL.<br />Solo me queda una duda, esas son lineas que se dibujan de un punto a otro, cada vez que se llama a la funcion dubujar, pero si fueran imagenes, por ejemplo la de un huezo, como le aplicarias las tranformaciones, por que ya no puedes dar puntos de donde empieza y termina, habria que girar la imagen cierto angulo con respecto a un eje de rotacion cituado en uno de sus extremos, existe algo asi en GL?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Ene 03, 2010 9:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-03T17:05:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3122#p3122</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3122#p3122"/>
<title type="html"><![CDATA[Re: Buen comienzo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=671&amp;p=3122#p3122"><![CDATA[
Gracias, me alegro que os guste. Y gracias Hugo por el trabajo de subir el video y lo de como compilarlo (se me olvidó).<br /><br /><br /><blockquote><div><cite>carlostex escribió:</cite><br />glTranslatef(m_px, m_py, 0.0f);<br />glVertex2f(0.0f, 0.0f); <br />glRotatef(deg(m_brazo.angulo),0,0,1); <br /><br />y como hiciste para rotar las lineas con el eje en uno de sus extremos, ¿OpenGL te da una funcion para poner un eje de rotacion?<br /></div></blockquote><br />La verdad es que openGL funciona de manera bastante distinta a Pygame/SDL. Cuando se hace un glBegin(&quot;primitiva&quot;) pasa al ESTADO de dibujar primitivas (en este caso lineas y un punto) a medida que le pasas vertices (que se representan con glVertex). En el caso de las lineas hay que pasar 2 vertices y en el caso del punto solo 1.  Y con glEnd() se le dice que, de momento, ya no se quiere dibujar más.<br />Las transformaciones se van acumulando y tienen efecto en orden de abajo hacia arriba. Por ejemplo:<br />girar (90º)<br />mover (+5, 0)<br />dibujar punto en (0,0)<br />Lo que haría es dibujar un punto en (0,0) pero luego se movería 5 unidades en el eje de las x por lo tanto pasaría a estar en (5,0) y finalmente se rotaría todo 90º desde el centro (0,0) por lo tanto el punto pasaría a estar en (0,5). Si la rotación y la translación estuviesen en orden inverso, la rotación no tendría efecto (ya que es un punto en (0,0)) y con la translación quedaría dibujado en (5,0).<br />Con glLoadIdentity() se le dice que quieres parar de acumular transformaciones y comenzar de nuevo. Y con glPushMatrix/glPopMatrix se puede &quot;guardar/cargar&quot; el estado de las transformaciones.<br />Si se han hecho transformaciones con matrices en álgebra, seguro que esto resulta muy familiar. Sino es difícil de explicar, yo lo hice durante semanas en clase. A ver si alguien encuentra un tutorial.<br /><br />Utilizando solamente SDL se puede llegar a hacer, pero la manera con la que openGL trata las transformaciones, simplifica los cálculos (aun más si se rotan imágenes y no rectas) y le da cierta elegancia (que puede o no gustar).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Ene 03, 2010 5:05 pm</p><hr />
]]></content>
</entry>
</feed>