<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1040" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-15T06:08:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1040</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-15T06:08:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5100#p5100</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5100#p5100"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5100#p5100"><![CDATA[
perfecto era por eso, pense que simplemente habia que pasarle enteros :S.<br /><br />muchas gracias chicos ya puedo seguir con esto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mar Feb 15, 2011 6:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-02-11T11:38:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5087#p5087</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5087#p5087"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5087#p5087"><![CDATA[
<dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * capa2 = SDL_CreateRGBSurface(SDL_HWSURFACE, 1000, 1000, 32, 255, 255, 255, 255);<br /></code></dd></dl><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * capa2 = SDL_CreateRGBSurface(SDL_HWSURFACE, 1000, 1000, 32, NULL, NULL, NULL, 0);<br /></code></dd></dl><br />:S ¿Esto qué es??<br />Tendrías que dar formato de esta forma. Debería de funcionar:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * capa2 = SDL_CreateRGBSurface(SDL_HWSURFACE, 1000, 1000, 32, 0xff000000, 0x00ff0000, 0x0000ff00, 0x000000ff);<br /></code></dd></dl><br /><br />Y ya conviertes la superficie al formato de la pantalla. Debe de funcionar.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Vie Feb 11, 2011 11:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-02-11T04:23:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5086#p5086</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5086#p5086"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5086#p5086"><![CDATA[
<blockquote><div><cite>migueleitorone escribió:</cite><br />Te refieres a esta?<br /><br />Código: Seleccionar todo<br />    SDL_Surface * capa2 = SDL_CreateRGBSurface(SDL_HWSURFACE, 1000, 1000, 32, 255, 255, 255, 255);<br /><br /><br />Por que es incorrecta? 255, 255, 255, 255 es un color mas de los que acepta con 32 bits no?<br /></div></blockquote><br />Digo que es correcta, por que una imagen de 32 bits tiene 4 canales(si se trabaja con canales de 8 bits siendo este el caso)<br /><br />Si actualizas una capa al final vas a tener que copiar todas a la superficie, por que sdl únicamente copia la superficie declarada cuando pediste el video al hacer flip, y de hecho es mayor el gasto de copiar 3 superficies de 1000 x 1000 px que copiar solo las imágenes. Hay dos formas de hacer esto, una la que te digo, que te ará mas fácil la organización para la pc va a ser lo mismo, y la otra es actualizar los rectángulos que cambiaron, para eso existe la función updaterect que únicamente envía al vídeo el rectángulo que le hayas dicho lo que va a ahorrar tiempo. Yo trabajo con 32 bits y de hecho es mas rápido que en otro formato la razón es que el procesador puede mover los 32 bits de un solo golpe, así que mi recomendación es que intentes implementar eso de las capas virtuales será mas rápido.<br /><br />Para hacer lo de las capas vituales se me viene a la mente usar mapas, pues mantienen ordenada una lista y son sumamente rápidas al agregar objetos, definirías como clave el numero del mapa donde quieres que valla y el contenido sería un apuntador a tu clase actor o lo que hayas definido que tenga una función draw que copie la imagen de tu actor a una superficie, así, en el bucle recorres todo el mapa y vas llamando a la función drawn, el mapa es solo para invocar la función eso no te debe afectar en como tengas declarada tu clase o con las propiedades de tu actor, ya sea un enemigo, un disparo etc, por eso separo lo que es actores del sistema que maneja gráficos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Feb 11, 2011 4:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-11T02:38:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5085#p5085</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5085#p5085"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5085#p5085"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />Hay dos cosas que se me hacen raras, en dos de las llamadas a SDL_BlitSurface no le pasas el parámetro de la ubicación donde lo colocará, no se si SDL lo ponga por default en 0,<br /></div></blockquote><br />Si, el default es 0, por eso no lo pongo. Bueno, eso creo, pero diria que si no defino la posicion en donde lo quiero simplemente lo pone en las cordenadas 0.0.<br /><br /><blockquote><div><cite>carlostex escribió:</cite><br />y la otra es que si declaras una superficie de 32 bits, tienes que definir colores de 32 bits, así que la segunda forma con la que inicializas la superficie sería la correcta.<br /></div></blockquote><br />Te refieres a esta?<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * capa2 = SDL_CreateRGBSurface(SDL_HWSURFACE, 1000, 1000, 32, 255, 255, 255, 255);</code></dd></dl><br />Por que es incorrecta? 255, 255, 255, 255 es un color mas de los que acepta con 32 bits no?<br /><br /><blockquote><div><cite>carlostex escribió:</cite><br />Para que usas las capas? Es decir, por que no usas una sola superficie y vas copiando las cosas haí<br /></div></blockquote><br />Lo de las capas es mas que nada por organizacion, y para no tener que estar actualizando todo todo el rato. En este caso, lo que queria hacer era una mirilla que fuera disparando y marcando cada disparo en la imagen de fondo.<br />Por tanto tendria 3 capas:<br />capa1 : imagen de fondo<br />capa2 : imagenes disparos<br />capa3 : imagen mirilla<br /><br />Entonces, si muevo la mirilla, solo tendria que cambiar la capa 3, si disparo, solo tengo que añadir una imagen a la capa 2 y al final de cada loop actualizar la pantalla pasandole las capas por orden. Nose, me parece una manera bastante mas intuitiva que sin usar capas. <br /><br /><blockquote class="uncited"><div><br />lo que puedes hacer son capas virtuales, defines en que capa quieres que se dibuje cada imagen, al copiar todo primero empiezas por lo que tengas en la capa 1 y así te vas con las demás,<br /></div></blockquote><br />Bueno eso es lo que quiero hacer, pero no se como xddddd<br /><br />gracias por vuestro tiempo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Feb 11, 2011 2:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-02-11T01:45:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5084#p5084</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5084#p5084"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5084#p5084"><![CDATA[
Hay dos cosas que se me hacen raras, en dos de las llamadas a SDL_BlitSurface no le pasas el parámetro de la ubicación donde lo colocará, no se si SDL lo ponga por default en 0, y la otra es que si declaras una superficie de 32 bits, tienes que definir colores de 32 bits, así que la segunda forma con la que inicializas la superficie sería la correcta.<br />Para que usas las capas? Es decir, por que no usas una sola superficie y vas copiando las cosas haí, lo que puedes hacer son capas virtuales, defines en que capa quieres que se dibuje cada imagen, al copiar todo primero empiezas por lo que tengas en la capa 1 y así te vas con las demás, mientras mas superficies grandes y de mas canales mas lento será el copiado y mas memoria usarás.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Feb 11, 2011 1:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-11T01:27:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5083#p5083</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5083#p5083"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5083#p5083"><![CDATA[
La funcion la estoy usando asi, antes que nada aclarar esto: &quot;fondo&quot; es la surface donde esta la imagen de fondo, agujero_amarillo.png es una imagen de un balazo en la pared, y capa2, donde quiero ir almacenando todos esos balazos: <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />        SDL_Surface * capa2 = SDL_CreateRGBSurface(SDL_HWSURFACE, 1000, 1000, 32, NULL, NULL, NULL, 0);<br />   <br />   SDL_Surface * agujero_a = IMG_Load(&quot;agujero_amarillo.png&quot;);<br />   <br />   SDL_Rect rect;<br />   rect.x = 300;<br />   rect.y = 300;<br /><br />   SDL_BlitSurface(agujero_a, NULL, capa2, &amp;rect);<br /><br />   <br />   SDL_BlitSurface(fondo, NULL, screen, NULL);<br />   SDL_BlitSurface(capa2, NULL, screen, NULL);<br />   SDL_Flip(screen);</code></dd></dl><br /><br />Quiza esto sirva de algo, con estos parametros en la funcion:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * capa2 = SDL_CreateRGBSurface(SDL_HWSURFACE, 1000, 1000, 32, NULL, NULL, NULL, 0);</code></dd></dl><br />el resultado es este:<br /><img src="http://img97.imageshack.us/i/sintrasparenciacolornor.png/" alt="Imagen" /><br /><br />con estos otros parametros:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * capa2 = SDL_CreateRGBSurface(SDL_HWSURFACE, 1000, 1000, 32, 255, 255, 255, 255);</code></dd></dl><br />el resultado es este:<br /><img src="http://img228.imageshack.us/i/transparenciaconcolorra.png/" alt="Imagen" /><br /><br />Aver si alguno me ilumina, que he probado mil convinaciones con los parametros y, o no logro que se vean las trasparencias, o me cambia el color de la imagen :s<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Feb 11, 2011 1:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-02-10T13:40:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5081#p5081</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5081#p5081"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5081#p5081"><![CDATA[
Si creas una capa con SDL_CreateRGBSurface si no me equivoco es que no tiene un canal alpha. Acuérdate de convertirlo al formato de la pantalla y ya le das transparencia, color clave o ambas cosas según lo que te interese. También estaría bien que escribieses cómo estas creando la superficie.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Jue Feb 10, 2011 1:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-10T04:03:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5080#p5080</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5080#p5080"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5080#p5080"><![CDATA[
buff llevo toda la noche probando movidas y no logro hacer lo que queria, tengo el mismo problema que al principio: Creo la capa2 con SDL_CreateRGBSurface, pero me crea una surface pintada de negro que me tapa la capa1. He estado buscando en google y parece que no es facil crear una superficie transparente. Alguien me ayuda? No puede ser tan dificil T_T<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Feb 10, 2011 4:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-10T02:27:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5079#p5079</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5079#p5079"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5079#p5079"><![CDATA[
era lo que estaba haciendo hasta ahora pero va mejor trabajar con capas, asi cada movimiento de tu personaje, por ejemplo, no afecta en la imagen del mapa. Bueno, almenos ahora pienso que va mejor, no se como se trabajara mas profesionalmente xdd.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Feb 10, 2011 2:27 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pablo9891]]></name></author>
<updated>2011-02-09T21:04:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5076#p5076</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5076#p5076"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5076#p5076"><![CDATA[
No estoy demasiado interiorizado acerca de la funcion que te estan recomendando, particularmente utilizo una sola superficie y una vez que hago eso, voy colocando todas las imagenes sobre la misma superficie<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2172">pablo9891</a> — Mié Feb 09, 2011 9:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-03T07:30:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5026#p5026</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5026#p5026"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5026#p5026"><![CDATA[
aah entonces no es que se tape lo de la capa1 sino que estoy reiniciando la ventana no? <br />Voy a mirarme esa funcion que me has dicho aver si puedo hacer lo que queria, gracias geo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Feb 03, 2011 7:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-02-03T05:56:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5025#p5025</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5025#p5025"/>
<title type="html"><![CDATA[Re: Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5025#p5025"><![CDATA[
SDL_SetVideoMode no crea superficies cada que la llamas, cada llamada a SDL_SetVideoMode establece el modo de video para toda la aplicación, y siempre devuelve un puntero a la superficie de video que se muestra en pantalla. Es decir, cada que utilizas la función SDL_SetVideoMode estableces o cambias el modo de video de toda la aplicación.<br /><br />Si deseas tener dos superficies diferentes para dibujar sobre ellas, puedes crearlas con <a href="http://sdl.beuc.net/sdl.wiki/SDL_CreateRGBSurface" class="postlink">SDL_CreateRGBSurface</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Jue Feb 03, 2011 5:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-03T01:41:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5021#p5021</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5021#p5021"/>
<title type="html"><![CDATA[Trabajar con capas sdl]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1040&amp;p=5021#p5021"><![CDATA[
Buenas noches, estaba haciendo pruebas con sdl y he pensado en mostrar las imagenes por capas, capa1 para el fondo del juego, y capa2 para los personajes y objetos e ir actualizando las dos capas por cada pasada del game looop. <br />He probado con este codigo, el problema es que me crea la segunda capa con un fondo negro y me tapa la primera, hay alguna forma de hacer que me cree la segunda capa en trasnparente? O como lo haceis vosotros para tener el fondo independiente de los personajes y los objetos? <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface * capa1 = SDL_SetVideoMode(200, 200, 32, SDL_NOFRAME | SDL_HWSURFACE);<br />SDL_BlitSurface(fondo, NULL, capa1, NULL);<br />SDL_Surface* capa2 = SDL_SetVideoMode(200, 200, 32, SDL_NOFRAME | SDL_HWSURFACE);<br />SDL_BlitSurface(personaje, NULL, capa2, NULL);<br />SDL_BlitSurface(objeto, NULL, capa2, NULL);<br />SDL_Flip(capa1);<br />SDL_Flip(capa2);<br /></code></dd></dl><br /><br />graciass<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Feb 03, 2011 1:41 am</p><hr />
]]></content>
</entry>
</feed>