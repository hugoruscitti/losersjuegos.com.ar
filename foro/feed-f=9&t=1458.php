<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1458" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-09-13T21:33:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1458</id>
<entry>
<author><name><![CDATA[orenji]]></name></author>
<updated>2012-09-13T21:33:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=7080#p7080</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=7080#p7080"/>
<title type="html"><![CDATA[Re: Preguntas de rendimiento]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=7080#p7080"><![CDATA[
<blockquote><div><cite>hechelion escribió:</cite><br />Gracias Kaiser.<br /><br />Lo del rendimiento lo tengo claro, a lo que iba un poco es que sé que en windows con directX puede llegar a eso y mantener el juego jugable a 30FPS, por lo cual, esperaría tener el mismo rendimiento en Linux o por lo menos similar y es un poco lo que estoy buscando, no tanto para poder dibujar 2000 tiles al mismo tiempo, si no, por que me queda la seguridad que (mejorando el diseño del nivel) aún tengo capacidad para meter partículas  y otras cosas que mejoren el juego gráficamente.<br /><br />Tal como dices, creo que tendré que irme a C o C++, en este momento le he puesto los ojos a una librería llamada CMR32pro que funciona como wrapper para SDL y OpenGL aunque igual le voy a dar una mirada a SMFL y ver como anda con python ya que por mi experiencia personal prefiero trabajar con python (tengo más experiencia con python que con c++, así que me sería más fácil desarrollar en el primero).<br /><br />Gracias por la recomendación.<br /></div></blockquote><br /><br />Saludos hechelion<br /><br /><br />Antes que nada quiero decirte que me gusta el arte/diseño 3d de tu personaje, así que bien por ti  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> .<br /><br />Otra cosa que te quería mencionar es que no soy un experto en programación, solo se lo básico pero intentare dar lo mejor, si me equivoco en algo soy todo oidos. ahi vamos.<br /><br />Según tengo entendido los tiles son pedacitos de gráficos que juntos forman una imagen. Si no equivoco esto era para ahorrar memoria. Ahora bien no tengo idea cuantos tiles usara un juego moderno en 2d comercial para tener idea mas o menos de un promedio normal de tiles usados en los juegos, esos que vienen para las consolas.<br /><br />Quizás a ti te convenga usar menos tiles, si es posible, y usar una imagen entera mas grande en aquellos lugares donde no importa si es un tile o que. De esta manera creo que podríamos ahorrar un poco de recursos de cpu. Aunque creo que aumentaría la cantidad de memoria, pero quizás el aumento no fuera tan grande, creo que es cuestión de probar.<br /><br />Bueno esta fue mi humilde aportación. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2653">orenji</a> — Jue Sep 13, 2012 9:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-09-13T05:42:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=7079#p7079</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=7079#p7079"/>
<title type="html"><![CDATA[Re: Preguntas de rendimiento]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=7079#p7079"><![CDATA[
Primero que nada, creo que portaras el juego al sistema operativo <span style="font-weight: bold">GNU/Linux</span>, ya que no creo que el <span style="font-weight: bold">kernel Linux</span> pueda hacer algo con algo que no sea un modulo.<br /><br />Segundo, hay mil kilometros de diferencia entre 2000~ titles y 2000~ sprites, de que puedes dibujar 2000~ titles en Python con pygame o PySFML puedes hacerlo, pero debes manejar la tecnica de <span style="font-weight: bold">screen scrolling</span> para recortar el mapa de 2000 rectangulos que dibujaste al tamaño de la pantalla del jugador o la memoria de la computadora del mismo terminara explotando.<br /><br />Sí en todo caso quieres usar OpenGL, puedes darte una vuelta y mirar Pyglet o Cocos2D...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Sep 13, 2012 5:42 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-04-30T20:54:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6708#p6708</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6708#p6708"/>
<title type="html"><![CDATA[Re: Preguntas de rendimiento]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6708#p6708"><![CDATA[
Gracias Kaiser.<br /><br />Lo del rendimiento lo tengo claro, a lo que iba un poco es que sé que en windows con directX puede llegar a eso y mantener el juego jugable a 30FPS, por lo cual, esperaría tener el mismo rendimiento en Linux o por lo menos similar y es un poco lo que estoy buscando, no tanto para poder dibujar 2000 tiles al mismo tiempo, si no, por que me queda la seguridad que (mejorando el diseño del nivel) aún tengo capacidad para meter partículas  y otras cosas que mejoren el juego gráficamente.<br /><br />Tal como dices, creo que tendré que irme a C o C++, en este momento le he puesto los ojos a una librería llamada CMR32pro que funciona como wrapper para SDL y OpenGL aunque igual le voy a dar una mirada a SMFL y ver como anda con python ya que por mi experiencia personal prefiero trabajar con python (tengo más experiencia con python que con c++, así que me sería más fácil desarrollar en el primero).<br /><br />Gracias por la recomendación.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Lun Abr 30, 2012 8:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2012-04-30T09:35:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6707#p6707</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6707#p6707"/>
<title type="html"><![CDATA[Re: Preguntas de rendimiento]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6707#p6707"><![CDATA[
Hola hechelion, me gusta mucho tu proyecto tiene muy buena pinta. A ver si finalmente te animas a portarlo a Linux. Sinceramente pienso que dibujar 2000 tiles en pantalla es tremendamente ineficiente tal vez deberías darle prioridad a encontrar una forma mejor de hacerlo. En cualquier caso mientras eso siga así no te recomiendo usar python, a mi en un Core 2 Duo a 2.2GHz menos de 3000 sprites en pantalla ya me consumían el 100% del procesador, tal vez deberías probar otros lenguajes más rápidos como C.<br /><br />En cuanto a que librería usar bueno, pilas es una librería de alto nivel construida sobre un lenguaje de muy alto nivel (python), está muy bien para crear juegos rápidamente pero no creo que sea lo mejor si buscas la máxima eficiencia. pygame es la versión (más técnicamente binding o wrap) para python de SDL, son lo mismo solo que SDL se escribe en C/C++ y pygame en python. SFML es una librería muy parecida a SDL pero implementa aceleración por hardware, la versión para python se llama pySFML.<br /><br />Espero haberte ayudado.<br /><br />Un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Lun Abr 30, 2012 9:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-04-30T04:52:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6706#p6706</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6706#p6706"/>
<title type="html"><![CDATA[Re: Preguntas de rendimiento]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6706#p6706"><![CDATA[
He escuchado bastante sobre SDL y he visto algunas cosas bien interesantes que han hecho con SDL, pero si no estoy mal se programa desde C++ y para meter aceleración por hardware también hay que meterse a estudiar OpenGL o ¿estoy mal?.<br />Además, creo que no es tan fácil hacerlo multiplataforma o ¿cómo va la mano por ese lado?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Lun Abr 30, 2012 4:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hechelion]]></name></author>
<updated>2012-04-29T18:24:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6701#p6701</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6701#p6701"/>
<title type="html"><![CDATA[Preguntas de rendimiento]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1458&amp;p=6701#p6701"><![CDATA[
Saludos a todos.<br /><br />No sé si recordaran el proyecto en el cual estaba trabajando con cara a presentarlo en el concurso. un plataforma 2D llamado Dhu Nun <br /><!-- m --><a class="postlink" href="http://www.youtube.com/watch?v=AIIfh09skbs">http://www.youtube.com/watch?v=AIIfh09skbs</a><!-- m --><br /><br />Por temas que no vienen al caso, no alcancé a presentarlo para el concurso y como ahora no tengo una fecha limite, me gustaría reenfocar el proyecto y hacerlo compatible con Linux (originalmente el proyecto es para windows con DirectX) y es donde me surgen algunas dudas de novatillo. <br /><br />Pensaba reprogramar el juego en python, para lo cual había pensado en pygames o incluso en pilas, pero por lo que he estado leyendo tendría problemas de rendimiento en ambos, de partida pygames no soporta aceleración por hardware y si le agrego pyOpenGL tengo el temor de complicarme innecesariamente con OpenGL, ya que por un lado no quiero programar a un nivel tan bajo y por lo que he leído hay ciertos problemas debido a las diferencias entre tarjetas de vídeo.<br /><br />Pilas me parece la mejor opción, ya que permite aceleración por hardware sin tener que aprender OpenGL, pero mientras leía me di con un post que habla de un redimiendo de 6 FPS con un tilemapa de 2 layer a 40*40 tiles y eso me asustan bastante, pues el alpha de Dhu nun que sale en el vídeo tiene 10 layer de 256*64 tiles; en promedio, en pantalla en un instante dado se dibujan unos 2000 tiles y eso sin contar con la GUI del juego, las animaciones del personaje y de las criaturas más su AI y todo eso (sin optimizar, es el alpha) me da 30 FPS en un netbook (CPU atom 270, 1GB de ram) (en mi PC normal, lo puedo correr a 60 FPS) con lo cual creo que quedaré horriblemente lento si lo intento migrar a Pilas.<br /><br />También pensaba en implementar el juego sobre Panda3D, pero al ser una librería 3D, pues creo que sería matar moscas a cañonazos.<br /><br />Por estos motivos quería pedir vuestras opiniones, sé que Loserjuegos se centra principalmente en Pilas, pero también es una comunidad de programación de videjuegos en general y me gustaría saber que me recomiendan, ya que como comentaba, me interesa mucho que Dhu Nun se pueda jugar en Linux, pero hasta el momento no veo ninguna solución que me permita migrar el proyecto sin necesidad de invertir una gran cantidad de horas aprendiendo nuevas técnicas (como OpenGL) y aunque estoy dispuesto a invertirlas no quiero hacerlo con un lenguaje que a mitad de camino me voy a topar con que no me sirve o es horriblemente complicado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2554">hechelion</a> — Dom Abr 29, 2012 6:24 pm</p><hr />
]]></content>
</entry>
</feed>