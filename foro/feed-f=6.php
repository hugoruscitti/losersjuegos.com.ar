<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-12-18T02:49:16+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-12-18T02:49:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9312#p9312</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9312#p9312"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: SDL]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9312#p9312"><![CDATA[
Saludos!<br /><br />Bueno, primero que nada, SDL no esta muy orientado a objetos (Clases, como dices) que digamos. Se puede hacer si tu haces tus propias clases y por dentro escribes el código SDL respectivo. Yo en lo personal te recomiendo que te pases a <a href="http://www.sfml-dev.org/" class="postlink">SFML</a> que esta pensado para usarse en C++ (y esta orientado a objetos). El procedimiento seria similar, escribes tus propias clases y usas composición (composición antes que usar herencia, como dicen) para juntar SFML con el código de tu juego.<br /><br />Me encantaría ayudarte con algo concreto, pero mi C++ es aun algo verde (aunque estoy trabajando para madurarlo). Pero como dices, te gustaría saber sobre clases menejadores de Sprites, frames (ni idea como pretendes manejar un frame...) y personaje. Bueno, la programación orientada a objetos te permite abstraer tu problema a conceptos. Por ejemplo, una clase que se encargue en el manejo de los sprites podría llamarse <span style="font-weight: bold">Escena</span>, ella se encargaría de la creación y eliminación de sprites en el mapa/escenario de tu juego. Una forma de ir poniendo los sprites dentro de una instancia de Escena seria usando un <span style="font-weight: bold">vector</span>, el objeto vector te permitiría guardar las instancias del objetos Sprite tan fácil como hacer <span style="font-style: italic">mivector.push_back(enemigo1)</span>, por supuesto que tendrás que estudiar la biblioteca STL de C++ para que te familiarices con la mayoría de los objetos que se ofrecen y así resuelvas el problema que te planteas de la mejor forma según tus requerimientos.<br /><br />También no estaría mal familiarizarse con la colección de bibliotecas Boost, su biblioteca signals2 se ve muy interesante y te permitirá implementar el patrón de diseño Observer, ideal para enviar eventos a diferentes objetos sin mucho trajín (y es usado actualmente en el motor Pilas)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Dic 18, 2013 2:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Franjabube]]></name></author>
<updated>2013-11-14T06:30:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9307#p9307</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9307#p9307"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • SDL]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3043&amp;p=9307#p9307"><![CDATA[
Hola a todos!<br /><br />Mi nombre es Francisco, actualmente estoy comenzando a practicar en SDL, tengo un pequeño proyecto para practicar, &quot;soki&quot;, no es nada especial jajaja, solo mi primer programatia en SDL<br /><br />Quisiera saber como podría mejorar mi codigo? Especialmente, en como utilizar <span style="font-weight: bold">Clases</span> para el manejo de Frames, Sprites, Personaje..no se exactamente como es el pseudo codigo, digamos, para realizar cada uno, como debería organizarse cada uno<br /><br />Ajunto mi pequeño proyecto para que lo vean, y su codigo.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;SDL/SDL.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;iostream&gt;<br /><br />int main()<br />{<br />   SDL_Init( SDL_INIT_EVERYTHING );<br /><br />SDL_Surface *ventana, *soki, *suelo, *fondo;<br />SDL_Event tecla;<br />SDL_Rect posicion_soki = {0, 152};<br />SDL_Rect posicion_recorte = {0, 0, 40, 40};<br />//SDL_Rect posicion_suelo = {0, 240};<br />SDL_Rect posicion_fondo = {0, 0};<br /><br /><br />int done = 0;<br /><br />            ventana = SDL_SetVideoMode( 800, 400, 32, SDL_SWSURFACE | SDL_ASYNCBLIT | SDL_DOUBLEBUF);<br />               if( ventana == NULL)<br />                  {   fprintf (stderr, &quot;No se pudo mostrar el modo de video 800x600: %s\n&quot;, SDL_GetError());<br />                        exit(1);<br />                  }<br />               <br />               //Titulo de la ventana                  <br />               SDL_WM_SetCaption(&quot;Soki&quot;, NULL);<br /><br />            soki = SDL_LoadBMP(&quot;soki.bmp&quot;);<br />               if( soki == NULL)<br />                  {   fprintf (stderr, &quot;No se pudo mostrar el grafico: %s\n&quot;, SDL_GetError()); <br />                        exit(1);<br />                  }<br /><br />               //suelo = SDL_LoadBMP(&quot;suelo.bmp&quot;);<br /><br />               fondo = SDL_LoadBMP(&quot;fondo.bmp&quot;);<br /><br />               //De la imagen soki, no pintar el color violeta (255,0,150)<br />               SDL_SetColorKey(soki,SDL_SRCCOLORKEY|SDL_RLEACCEL,SDL_MapRGB(soki-&gt;format,255,0,150));<br />//Repeticion de tecla<br />SDL_EnableKeyRepeat(SDL_DEFAULT_REPEAT_DELAY,SDL_DEFAULT_REPEAT_INTERVAL);<br /><br />            while(true)<br />            {<br />               while ( SDL_PollEvent(&amp;tecla))<br />                        {<br />                           if(tecla.type==SDL_QUIT){<br />                              exit(0);}<br />                           if(tecla.type==SDL_KEYDOWN)<br />                             switch(tecla.key.keysym.sym)<br />                              {<br /><br />                           case SDLK_LEFT: posicion_soki.x-=5.5;<br />                                       posicion_recorte.x-=40;<br /><br />                              if(posicion_recorte.x&lt;0)<br />                                    {<br />                                       posicion_recorte.x=360;<br />                                    } <br />                              if(posicion_soki.x&lt;0)<br />                                    {<br />                                       posicion_soki.x=0;<br />                              }   <br />                                                    <br />                                             break; //Break, para detener loop en la instruccion<br />                           <br /><br />                           <br />                           case SDLK_RIGHT: posicion_soki.x+=5.5;<br />                                        posicion_recorte.x+=40;<br />                              <br />                              if(posicion_recorte.x&gt;360)<br />                                    {<br />                                       posicion_recorte.x=0;<br />                                    } <br />                              if(posicion_soki.x&gt;760)  //No se puede usar 800 como limite, porque la distancia entre soki y el borde del cuadrado es de 40 pixeles<br />                                    {<br />                                       posicion_soki.x=760;<br />                                    }<br />                                             break;<br /><br /><br />                           case SDLK_UP: posicion_soki.y-=10;<br />                                    posicion_recorte.x-=40;<br />                              <br />                              if(posicion_recorte.x&lt;0)<br />                                    {<br />                                       posicion_recorte.x=360;<br />                                    } <br />                              if(posicion_soki.y&lt;0)<br />                                    {<br />                                       posicion_soki.y=0;<br />                                    }<br />                                             break;//Break, para detener loop en la instruccion<br />                           case SDLK_ESCAPE: return 0;<br /><br />                           case SDLK_DOWN: posicion_soki.y+=10;<br />                              if(posicion_soki.y&gt;148)<br />                                    {<br />                                       posicion_soki.y = 148;  //Limita el movimiento de soki hasta 400 en y<br />                                    }<br /><br /><br />                           posicion_recorte.x+=40;<br />                              if(posicion_recorte.x&gt;360)<br />                                    {<br />                                       posicion_recorte.x=0;<br />                                    } <br />                                             break;<br />                           }<br />            }<br /><br />            //Pintar sobre pantalla, el siguiente color<br />            SDL_FillRect(ventana, 0, SDL_MapRGB(ventana-&gt;format, 80, 80, 80));<br />            //Dibujar nave en pantalla, en la posicion &amp;posicion_nave<br />            //SDL_BlitSurface(suelo, NULL, ventana, &amp;posicion_suelo);<br />            SDL_BlitSurface(fondo, NULL, ventana, &amp;posicion_fondo);<br />            SDL_BlitSurface(soki, &amp;posicion_recorte, ventana, &amp;posicion_soki);         <br />            //Mostrar ventana<br />            SDL_Flip( ventana );<br />            }<br /><br />//Liberar superficie<br />SDL_FreeSurface ( ventana );<br />return 0;<br />}</code></dd></dl><br /><br />Básicamente quiero aprendear el manejo de Sprites y Frames corréctamente, eh leído sobre esto en varios libros y tutoriales, pero cada uno, lamentablemente estan adjudican sus descripciones únicamente a sus ejemplos, por lo tanto me cuesta lograr entenderlos de manera efectiva.<br /><br /><br />LINK de descarga de mi proyecto (450kb) : <!-- m --><a class="postlink" href="https://mega.co.nz/#!9whwxaTT!Sz5YE3gIujRWgFdTfWDL9U-tWo8E56pWHmoRphH7t5k">https://mega.co.nz/#!9whwxaTT!Sz5YE3gIu ... moRphH7t5k</a><!-- m --><br /><br />Saludos a todos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3151">Franjabube</a> — Jue Nov 14, 2013 6:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[SebasCabeza]]></name></author>
<updated>2013-11-14T04:56:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Problema Camara SDL2]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306"><![CDATA[
Hola, gente estoy en las primeras etapas de un proyecto de un plataformero, y estoy teniendo problemas con la camara, eh probado la forma de LAzy foo, sin resultados, eh probado otras formas pero tambien sin resultados, creo que mi problema es mas de entendimiento que de otra cosa, el concepto que tengo es el siguiente. Creo un SDL_Rect (camara) por ejemplo, yo a ese rectangulo le sumo la posicion del personaje en los ejes X e Y y despues en (W/H) el ancho y largo deseado de la camara, despues lo renderizo en pantalla de la siguiente forma SDL_RenderCopy(renderer,NULL,NULL,&amp;camara), despues les seteo los parametros para que no salga del ancho y largo del nivel, pero es lo mismo que nada, no funciona. Si alguien me podria orientar se lo agradeceria inmensamente. Dejo el codigo que tengo hasta ahora. <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void Jug::Draw()<br />  {<br /><br />      posicion.x = rect.x+*CameraX;<br />      posicion.y = rect.y+*CameraY;<br />      posicion.w = rect.w;<br />      posicion.h = rect.h;<br /><br /><br /><br />      SDL_RenderCopy (renderer,texture,&amp;crop,&amp;posicion);<br /><br /><br />  }<br /><br />  void Jug::SetCamera()<br />  {<br /><br />      camara.x = (*CameraX+100/2)-1440/2;<br />      std::cout&lt;&lt;camara.x&lt;&lt;std::endl;<br />      camara.y = (*CameraY+100/2)-900/2;<br />      std::cout&lt;&lt;camara.y&lt;&lt;std::endl;<br />      camara.w = 500;<br />      camara.h = 500;<br /><br />      if( camara.x &lt; 0 )<br />            {<br />               camara.x = 0;<br />            }<br />            if( camara.y &lt; 0 )<br />            {<br />               camara.y = 0;<br />            }<br />            if( camara.x &gt; 1440 - camara.w )<br />            {<br />               camara.x = 1440 - camara.w;<br />            }<br />            if( camara.y &gt; 900 - camara.h )<br />            {<br />               camara.y = 900 - camara.h;<br />            }<br /><br />      SDL_RenderCopy(renderer,texture,NULL,&amp;camara);<br /><br /><br />  }</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3144">SebasCabeza</a> — Jue Nov 14, 2013 4:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CorEduard]]></name></author>
<updated>2013-10-15T00:50:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9292#p9292</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9292#p9292"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: SDL Framework (SDLFW) with LUA binding]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9292#p9292"><![CDATA[
Hola shackra<br /><br />Conozco SFML <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> y me parece una muy buena librería aunque yo nunca la he usado por ahora, aun así yo me decidí por SDL 1.2 debido a que es la librería mas chica y la mas fácil y rápido para hacer un LUA binding.<br /><br />También para poder empezar a desarrollar algunos juegos que quiero hacer en 2D mientras que al mismo tiempo y gracias a SDLFW también sigo avanzando y mejorando el sistema de scripting para el otro motor que tengo.<br /><br />En estos momentos estoy desarrollando la versión 1.6 de SDLFW y ya me falta unas pocas versiones mas para empezar con SDLFW 2 el binding a LUA de SDL 2.0 <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3146">CorEduard</a> — Mar Oct 15, 2013 12:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-10-12T19:23:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9291#p9291</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9291#p9291"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: SDL Framework (SDLFW) with LUA binding]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9291#p9291"><![CDATA[
Y no te llama la atención <a href="http://sfml-dev.org/" class="postlink">SFML</a>?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Oct 12, 2013 7:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2013-10-09T14:47:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3036&amp;p=9290#p9290</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3036&amp;p=9290#p9290"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: image en pygame (problema)]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3036&amp;p=9290#p9290"><![CDATA[
Hola Fabian!, en pygame es bastante sencillo, en la página de ejemplos de losersjuegos<br />hay un programa llamado &quot;cofre&quot; que tiene justo lo que necesitas:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><br /><br />Ten en cuenta que también hay varios artículos en losersjuegos que muestran como<br />implementar grillas, que si bien lo explican en C, también pueden servirte para pygame<br />haciendo algunos ajustes:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos">http://www.losersjuegos.com.ar/referencia/articulos</a><!-- m --><br /><br />Abrazo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Oct 09, 2013 2:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[fabian7593]]></name></author>
<updated>2013-10-09T14:35:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3036&amp;p=9289#p9289</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3036&amp;p=9289#p9289"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • image en pygame (problema)]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3036&amp;p=9289#p9289"><![CDATA[
hola soy nuevo en pygame y en el foro, tengo un poco de exp en SDL c++, mas quiero preguntar algo que puede hacerse en sdl, q es cargar una imagen entera (con un sprite en distintas posiciones), dividir la imagen en el mismo programa , y asi tener todos los movimientos de un mismo sprite en una sola imagen, en tutoriales de python e visto que por cada &quot;movimiento&quot;,hay que usar una imagen distinta, sera que alguien tiene algun ejemplo o sabe si se puede dividir la imagen y trasnformarla en varias o no?? ...<br />e visto un poco lo que es fromstring(),o frombuffer, no los e entendido muy bien pero talves pueda servir...<br />gracias :3<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3145">fabian7593</a> — Mié Oct 09, 2013 2:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CorEduard]]></name></author>
<updated>2013-10-08T04:33:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9288#p9288</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9288#p9288"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • SDL Framework (SDLFW) with LUA binding]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3035&amp;p=9288#p9288"><![CDATA[
Hola a todos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Estoy haciendo un framework de SDL 1.2 (Cuando cumpla con todos los objetivos porto el proyecto a SDL 2.0).<br />Es multi-plataforma funciona en Windows y Linux (Mac no porque no tengo una Mac <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> ).<br />Es fácil de usar, es Open-Source y Esta orientado para desarrollar juegos en 2D programándolos en LUA.<br /><br />Este proyecto deriva del sistema de scripting de otro motor que tengo.<br /><br />Acabo de publicar la versión 1.1 con soporte a SDL_image, el próximo mes publicaré la siguiente versión con soporte a SDL_ttf.<br /><br />Si alguien quiere donarme 1 dólar es libre de hacerlo, yo no tengo ni trabajo ni dinero y 1 dólar son como 5 pesos y me ayudaría muchísimo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Bueno, ojalá les guste este proyecto, Saludos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><!-- m --><a class="postlink" href="http://SDLFW.sf.net">http://SDLFW.sf.net</a><!-- m --><br /><br /><img src="http://i1-linux.softpedia-static.com/screenshots/SDL-Framework_1.jpe" alt="Imagen" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3146">CorEduard</a> — Mar Oct 08, 2013 4:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[AlexRam]]></name></author>
<updated>2013-09-20T23:47:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9287#p9287</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9287#p9287"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: Como ignorar pulsaciones de teclado?]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9287#p9287"><![CDATA[
Saludos de nuevo.<br /><br />Con la novedad de que mi problemilla con los KEYDOWN ha sido resuelto.<br /><br />Me encontre con este hilo y la solución que da Hugo funciona de maravilla.<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=8&amp;t=894">viewtopic.php?f=8&amp;t=894</a><!-- l --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3132">AlexRam</a> — Vie Sep 20, 2013 11:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[AlexRam]]></name></author>
<updated>2013-09-20T06:06:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9286#p9286</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9286#p9286"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Como ignorar pulsaciones de teclado?]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3034&amp;p=9286#p9286"><![CDATA[
Bien, cada que presionamos una tecla se generan varios eventos KEYDOWN. Aunque lo hagamos por un periodo pequeñisimo de tiempo, aunque sea un ligero toquecito a la tecla, se genera más de un evento KEYDOWN.<br /><br />Lo que yo quiero hacer es que sólo se tome en cuenta un KEYDOWN y los demás que salen involuntariamente sean ignorados.<br />Como logro eso??<br /><br />En el juego que estoy elaborando, mi idea es que si presiono la tecla Z, el personaje se oculte. Si presiono Z otra vez se deberá desocultar. Pero debido al problema de los KEYDOWN repetidos, mi personaje se oculta y desoculta muchas veces seguidas pudiendo quedar finalmente oculto o no.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Perro(Sprite):<br />   def __init__(self):<br />      self.oculto=True<br />      self.salud=100<br /><br />   def ocultar(self):<br />      tecla=pygame.key.get_pressed()<br />      if tecla&#91;K_z&#93;:<br />            self.oculto=not self.oculto<br /></code></dd></dl><br /><br />Aunque ese no es todo el código, creo que es suficiente y se entiende.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3132">AlexRam</a> — Vie Sep 20, 2013 6:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dimoni73]]></name></author>
<updated>2013-09-16T17:36:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9285#p9285</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9285#p9285"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: pygame android eventos desde el teclado]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9285#p9285"><![CDATA[
Gracias por tu ayuda compi, estoy flipando desde hace tres días estoy repasando los apuntes que hice en su día de c++ y haciendo algún programilla <span style="font-weight: bold">el código me sale solo SE QUE PYTHON ESTÁ programado en C++ pero no sabia que HABIA TANTA SIMILITUD</span><br />te recomiendo que veas este tutorial de Pau Fernández es profe de universidad español que es una caña:<br />[url]<br /><!-- m --><a class="postlink" href="https://www.youtube.com/watch?v=i0dovsDUndo&amp;list=PL2855019A8E1C4583">https://www.youtube.com/watch?v=i0dovsD ... 9A8E1C4583</a><!-- m -->[/url]<br />APRENDERÁS MUCHO......<br />UN SALUDO.....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3136">dimoni73</a> — Lun Sep 16, 2013 5:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-09-13T03:03:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9284#p9284</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9284#p9284"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: pygame android eventos desde el teclado]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9284#p9284"><![CDATA[
Si quieres retomar C++, yo te recomendaría leer <a href="http://www.etnassoft.com/biblioteca/pensar-en-c-plus-plus/" class="postlink">Pensar en C++ Volumen I</a>, yo estoy por el capitulo 3 haciendo los ejercicios <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Sep 13, 2013 3:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dimoni73]]></name></author>
<updated>2013-09-12T11:19:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9283#p9283</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9283#p9283"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: pygame android eventos desde el teclado]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9283#p9283"><![CDATA[
Gracias shackra por tú consejo en realidad cuando empezé en el mundo de la programación el C++ fué el primer idioma que estudié, pero <span style="font-weight: bold">al descubrir Python lo dejé</span>, <span style="font-weight: bold">en realidad quería volver a estudiarlo cuando tuviese un nivel más avanzado en Python   para no liarme</span>, tengo un amigo que domina 4 lenguajes y aveces cuando estamos haciendo alguna prueba en python se le vá la cabeza sin querer mete algún código de Java, Perl, ect...<br /><br />Ojala<span style="font-weight: bold"> no hubiese dejado de programar en el BASIC de mi Spectrum 64k en los 80 </span>ya sabría unos cuantos lenguajes.<br /><br />GRACIAS POR TU CONSEJO.<br /><br />UN SALUDO....<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3136">dimoni73</a> — Jue Sep 12, 2013 11:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-09-12T03:15:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9281#p9281</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9281#p9281"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: pygame android eventos desde el teclado]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9281#p9281"><![CDATA[
<blockquote><div><cite>dimoni73 escribió:</cite><br />sé que Pygame Android <span style="font-weight: bold">NO ES COMPATIBLE CON</span> Python For Android.[/b]<br /></div></blockquote><br /><br />Quizas sea eso precisamente el problema que te esta matando. Yo te recomendaria estudiar C++ y escribir juegos con Cocos2D-X, eso es lo que estoy haciendo yo (estudiar C++).<br /><br />A veces es necesario meditar si una forma de hacer las cosas es mejor que las demás formas de hacer las cosas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Sep 12, 2013 3:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dimoni73]]></name></author>
<updated>2013-09-11T11:38:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9280#p9280</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9280#p9280"/>
<title type="html"><![CDATA[Sobre las bibliotecas multimedia • Re: pygame android eventos desde el teclado]]></title>

<category term="Sobre las bibliotecas multimedia" scheme="http://losersjuegos.com.ar/foro/viewforum.php?f=6" label="Sobre las bibliotecas multimedia"/>
<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3031&amp;p=9280#p9280"><![CDATA[
Ante todo gracias por responder, respecto a tu pregunta proviene del <span style="font-weight: bold">dispositivo android</span>, te explico tengo instalado python 2.6 y el 2.7, el primero 2.6 tengo instalado el <span style="font-weight: bold">modulo android</span> este lo utilizo para trabajar con SL4A - Python For Android donde interactuo desde el pc con el dispositivo.El segundo el 2.7 lo utilizo para Pygame - pgs4a-0.9.4 he intentado instalar en este también el<span style="font-weight: bold"> módulo android</span> pero al importarlo me lanzaba errores,  me he dado cuenta que es por que android.py ya está en pgs4a-0.9.4 ya que dentro de esta carpeta si que lo importa pero <span style="font-weight: bold">NO SON LOS MISMOS MODULOS ANDROID</span>. Los juegos los creo fuera de la carpeta pgs4a-0.9.4 por eso no puede provenir  del 2.7, no se si abré respondido a tú pregunta.<br />¿Que debo hacer?<br /><br />Si no lo entiendes pruguntame por favor estoy  un poco confuso con los módulos, sé que Pygame Android <span style="font-weight: bold">NO ES COMPATIBLE CON</span> Python For Android.<br /><br />Ayuda Por Favor.<br /><span style="font-weight: bold">UN SALUDO COMPI...</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3136">dimoni73</a> — Mié Sep 11, 2013 11:38 am</p><hr />
]]></content>
</entry>
</feed>