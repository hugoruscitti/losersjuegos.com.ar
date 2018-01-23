<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=721" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-05-20T23:12:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=721</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-05-20T23:12:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3358#p3358</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3358#p3358"/>
<title type="html"><![CDATA[Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3358#p3358"><![CDATA[
<a href="http://www.losersjuegos.com.ar/referencia/articulos/menu" class="postlink">Ejemplo menu</a>. En este ejemplo lo unico que hace cuando pulsas espacio es imprimir una cosa, pero para un menu de verdad, podrias hacer lo siguiente.<br /><br />No se como andas de Programacion con Objetos, pero el tema es el siguiente:<br /><br />Te podrías crear una jerarquia de clases, donde tienes tu menu basico que seria como una plantilla para las clases hijas y cada menu que te quieras hacer seria una clase hija, entonces tu te puedes hacer un objeto menu, y si pulsas la opcion creditos por ejemplo, cambiar tu menu a creditos<br /><br />Todo se reduce mas o menos a una &quot;super maquina de estados&quot; la que se encarga de controlar todo.<br /><br />Este concepto lo podrías ampliar a todas las escenas, creando te un Director (creo que asi es como estaba creado el asadetris, que quizas hugo tenga por ahí) que se encarga de manejar cada pantalla<br /><br />Por ejemplo. Si estas en la pantalla inicial y pulas enter sobre jugar, te cambia de pantalla a la de juego, etc...<br /><br />Un saludo y perdon por escribir tanto<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue May 20, 2010 11:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kefren]]></name></author>
<updated>2010-05-20T16:57:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3357#p3357</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3357#p3357"/>
<title type="html"><![CDATA[Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3357#p3357"><![CDATA[
Hola a todos, gracias por la respuesta Juanxo. Me ha sido útil esa apreciación tuya, por lo que se me ocurrió colocar una variable de control.<br /><br />Ahora al pulsar espacio, sí cambia y aparece el mapa del juego, pero no se mueve el personaje. Supongo que será porque la función <span style="font-weight: bold">menu()</span> la llamo fuera del bucle <span style="font-style: italic">while</span> de la función <span style="font-weight: bold">main()</span>, y por eso no se repite constantemente.<br /><br />Sólo coloca las imágenes y listo, bueno, es un paso jajaja. No encuentro el ejemplo ese que dices. ¿En qué sección está?<br /><br />¡Un saludo a todos!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2214">kefren</a> — Jue May 20, 2010 4:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-05-20T11:47:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3356#p3356</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3356#p3356"/>
<title type="html"><![CDATA[Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3356#p3356"><![CDATA[
buenas kefren<br /><br />tu ejemplo si que llama a las funciones, pero fijate que al final siempre acabas con: <br /><dl class="codebox"><dt>Code: </dt><dd><code>      screen.blit&#40;fondo, &#40;0, 0&#41;&#41;<br />      screen.blit&#40;titulo, &#40;270, 180&#41;&#41;<br />      screen.blit&#40;opcion_1, &#40;320, 300&#41;&#41;<br />      screen.blit&#40;opcion_2, &#40;370, 350&#41;&#41; <br /></code></dd></dl><br /><br />por lo que siempre estas dibujando el menu al final. Si no me equivoco, en la seccion de ejemplos de losersjuegos, tienes un ejemplo de un menu que hizo Hugo usando una maquina de estados. Puede que eso resuelva tus dudas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue May 20, 2010 11:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kefren]]></name></author>
<updated>2010-05-20T03:41:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3355#p3355</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3355#p3355"/>
<title type="html"><![CDATA[Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3355#p3355"><![CDATA[
Muy buenas a todos. Perdonad si escribo poco, ando muy muy muy justo de tiempo. Al final opté por el juego de laberintos, pero tengo un pequeño problema.<br /><br />He realizado un menú para el juego en sí, sólo consta de 2 opciones. <span style="font-weight: bold">Iniciar partida</span> y <span style="font-weight: bold">Salir</span>. Lo que quiero es que cuando el usuario esté sobre una opción y pulse la tecla <span style="font-weight: bold">espacio</span>, pues que haga algo.<br /><br />O se salga, o inicie la partida, el problema es que no hace nada de nada. Agradecería una pequeña ayuda, muchas gracias.<br /><br />Adjunto el código de la función.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def menu&#40;&#41;:<br /><br />   fondo = pygame.image.load&#40;&quot;fondo_menu.png&quot;&#41;<br /><br />   fuente1 = pygame.font.Font&#40;&quot;fnt.ttf&quot;, 70&#41;<br />   fuente2 = pygame.font.Font&#40;&quot;fnt.ttf&quot;, 30&#41;<br /><br />   titulo = fuente1.render&#40;'Labyrinth', 1, &#40;255, 0, 0&#41;&#41;<br />   opcion_1 = fuente2.render&#40;'Iniciar partida', 1, &#40;255, 255, 255&#41;&#41;<br />   opcion_2 = fuente2.render&#40;'Salir', 1, &#40;0, 255, 0&#41;&#41;<br /><br />   opcion_actual = 1<br /><br />   while 1:<br />      for event in pygame.event.get&#40;&#41;:<br />      <br />         if event.type == pygame.QUIT:<br />            sys.exit&#40;&#41;<br /><br />      tecla = pygame.key.get_pressed&#40;&#41;<br /><br />      if tecla&#91;K_DOWN&#93;:<br />         opcion_1 = fuente2.render&#40;'Iniciar partida', 1, &#40;0, 255, 0&#41;&#41;<br />         opcion_2 = fuente2.render&#40;'Salir', 1, &#40;255, 255, 255&#41;&#41;<br />         opcion_actual = 2<br />      <br />      elif tecla&#91;K_UP&#93;:<br />         opcion_1 = fuente2.render&#40;'Iniciar partida', 1, &#40;255, 255, 255&#41;&#41;<br />         opcion_2 = fuente2.render&#40;'Salir', 1, &#40;0, 255, 0&#41;&#41;<br />         opcion_actual = 1<br /><br />      if tecla&#91;K_SPACE&#93;:<br />         if opcion_actual == 1:<br />            preparar_mapa&#40;screen&#41;<br />            preparar_personaje&#40;&#41;<br />         elif opcion_actual == 2:<br />            pygame.QUIT            <br /><br />      screen.blit&#40;fondo, &#40;0, 0&#41;&#41;<br />      screen.blit&#40;titulo, &#40;270, 180&#41;&#41;<br />      screen.blit&#40;opcion_1, &#40;320, 300&#41;&#41;<br />      screen.blit&#40;opcion_2, &#40;370, 350&#41;&#41;<br />      pygame.display.flip&#40;&#41;</code></dd></dl><br /><br />Lo que quiero es, que llame a la función <span style="font-weight: bold">preparar_mapa()</span> y <span style="font-weight: bold">preparar_personaje()</span>, que al parecer no lo hace, porque el menú no se quita de la pantalla. No sé si es que tengo que limpiarla o algo.<br /><br />Muchas gracias  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2214">kefren</a> — Jue May 20, 2010 3:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-05-12T20:36:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3351#p3351</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3351#p3351"/>
<title type="html"><![CDATA[Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3351#p3351"><![CDATA[
Me parece buena idea un juego de laberintos. Seguramente, un Pong sería más fácil, pero quizás sería demasiado sencillo para un proyecto.<br /><br />Suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié May 12, 2010 8:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kefren]]></name></author>
<updated>2010-05-12T13:28:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3350#p3350</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3350#p3350"/>
<title type="html"><![CDATA[Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3350#p3350"><![CDATA[
Hola, en primer lugar muchas gracias a los dos, en segundo lugar, pedir perdón por la tardanza en responder, ya que he estado unos días sin internet en casa. Bueno, el viernes estuve en clase, hablando con el profesor y eso, y me dio una idea fantástica.<br /><br />Realizar un juego de laberintos, ¿qué os parece? Por mi parte lo veo bastante más viable que uno de plataformas, ya por lo menos, muevo una imagen sobre un fondo realizado con sprites, es un avance la verdad jejeje.<br /><br />Ahora, debería centrarme en estudiar las colisiones e idear los mapas ¿no? Otra cosa que me gustaría saber, es cómo hacer para que el personaje al moverse cambie de sprite. Sé que en el juego de plataformas del alien rojo viene muy bien ejemplificado, pero agradecería que alguno de ustedes me detallara un poco como realizarlo.<br /><br />Ahora mismo en España son las 15:27, esta noche publico el código que llevo, o mejor, lo subo a cualquier servidor de descarga directa con las imágenes y todo.<br /><br />¡Un saludo!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2214">kefren</a> — Mié May 12, 2010 1:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-05-07T05:03:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3348#p3348</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3348#p3348"/>
<title type="html"><![CDATA[Re: Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3348#p3348"><![CDATA[
<blockquote><div><cite>kefren escribió:</cite><br />- ¿Es buena idea hacer algo de plataformas para el poco tiempo que tengo?<br /></div></blockquote><br /><br />Creo que hacer un juego de plataformas desde cero te llevará<br />un poco mas de tiempo, de todas formas podrías plantear<br />si te permiten comenzar con un ejemplo ya creado. Por ejemplo, <br />el juego de plataformas de la web es GPL, podrías usarlo como<br />base para crear tu trabajo (eso sí, consulta antes).<br /><br />Además, piensa que al hacer un trabajo tu juego necesitará<br />estar completo, tener una presentación, menú y tal vez<br />una final.<br /><br /><blockquote><div><cite>kefren escribió:</cite><br />- Me gustaría que me dijérais las funciones principales en las que debo centrarme, obviando algunas que me puedan liar y que no sean necesarias para el desarrollo del juego.<br /></div></blockquote><br /><br />Depende mucho del juego, pero creo que las principales<br />son el manejo de teclado y cómo imprimir en pantalla.<br /><br />Luego, si haces en realidad otro juego, no uno de plataformas,<br />intenta usar el mouse para interactuar con el usuario en lugar<br />del teclado. Suele ser mas sencillo de manejar, bah a mi modo<br />de ver.<br /><br /><blockquote><div><cite>kefren escribió:</cite><br />Seguramente me surgirán más dudas que iré comentando por aquí, serán referentes al código y demás.<br /></div></blockquote><br /><br />Si, tranquilo, aquí estamos para contestar tus dudas lo<br />antes posible.<br /><br />Ah, por cierto, se me ocurre un juego que puede ser mas<br />sencillo. ¿Has visto alguna vez los juegos de memoria?: <br /><br />    <!-- m --><a class="postlink" href="http://www.muchosjuegos.net/jugar.php?jota=juegos-flash-memoria_animal.swf">http://www.muchosjuegos.net/jugar.php?j ... animal.swf</a><!-- m --><br /><br />si haces uno de esos juegos puede que te resulte mas sencillo<br />complir con el plazo, y será un juego al que puedes<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie May 07, 2010 5:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-05-07T04:29:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3347#p3347</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3347#p3347"/>
<title type="html"><![CDATA[Re: Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3347#p3347"><![CDATA[
<blockquote><div><cite>kefren escribió:</cite><br />- ¿Es buena idea hacer algo de plataformas para el poco tiempo que tengo?<br /></div></blockquote><br />De que se puede, se puede, pero yo optaría por algo más sencillo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie May 07, 2010 4:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kefren]]></name></author>
<updated>2010-05-07T01:52:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3346#p3346</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3346#p3346"/>
<title type="html"><![CDATA[Hola, necesito consejos :-)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=721&amp;p=3346#p3346"><![CDATA[
Muy buenas a todos, llevo un tiempo visitando la página y el foro. El motivo no es otro que el desarrollo de un juego sencillo usando Python y Pygame.<br /><br />Soy estudiante de Grado Medio de Informática en España, y quiero realizar de proyecto final un videojuego. El problema viene, en que el tiempo se me acaba, lo he ido dejando y ahora sólo me quedan 15 días xD.<br /><br />No es por ser vago, es porque apenas tengo tiempo, duermo poco, realizo las prácticas en empresa y me estoy preparando la prueba de acceso al Grado Superior, y ahora encima, el proyecto.<br /><br />Estoy un poco ofuscado, pero bueno, me veo capaz de hacer algo decente en el tiempo que me queda. Bueno, voy al grano...<br /><br />Quiero realizar un pequeño juego de plataformas, sencillo, mediante sprites y demás, con dos o tres mapas cortitos. Para ello, estoy aprendiendo sobre colisiones.<br /><br />Me estoy basando en un par de ejemplos de la página, &quot;Ejemplo de plataformas&quot;, &quot;Cars, maneja un automóvil&quot; y &quot;Pygame: ¡Ayuda!, ¿Como muevo una imagen?&quot;<br /><br />Creo que se me olvida alguno, pero bueno. Mis dudas son por ahora generales, son básicamente:<br /><br />- ¿Es buena idea hacer algo de plataformas para el poco tiempo que tengo?<br /><br />- Me gustaría que me dijérais las funciones principales en las que debo centrarme, obviando algunas que me puedan liar y que no sean necesarias para el desarrollo del juego.<br /><br />Seguramente me surgirán más dudas que iré comentando por aquí, serán referentes al código y demás.<br /><br />Muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2214">kefren</a> — Vie May 07, 2010 1:52 am</p><hr />
]]></content>
</entry>
</feed>