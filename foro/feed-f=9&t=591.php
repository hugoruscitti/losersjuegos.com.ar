<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=591" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-16T21:01:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=591</id>
<entry>
<author><name><![CDATA[baco]]></name></author>
<updated>2009-07-16T21:01:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2768#p2768</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2768#p2768"/>
<title type="html"><![CDATA[Problema con punteros... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2768#p2768"><![CDATA[
Gracias. Yo confundía la propia variable con el puntero<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1988">baco</a> — Jue Jul 16, 2009 9:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-07-14T06:06:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2738#p2738</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2738#p2738"/>
<title type="html"><![CDATA[Problema con punteros... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2738#p2738"><![CDATA[
<blockquote><div><cite>baco escribió:</cite><br />PD: Si alguien me explica porque no he podido pasar el parámetro por referencia (con el &amp;) se lo agadecería<br /></div></blockquote><br />Los punteros son variables que almacenan la dirección de la variable a la cual apuntan. De esta forma, podríamos considerar que una dirección de memoria es un puntero.<br /><br />Como la variable pantalla ya ha sido declarada como un puntero a SDL_Surface:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* pantalla;</code></dd></dl><br /><br />La función imprimirBaldosas espera como primer parámetro un puntero a SDL_Surface. Sin embargo, al intentar hacerlo de esta forma:<br /><dl class="codebox"><dt>Code: </dt><dd><code>imprimirBaldosas&#40; &amp;pantalla... &#41;;</code></dd></dl><br />estás intentando pasar la dirección de la variable pantalla, dicha variable es un puntero y, por tanto, contiene una dirección que apunta a un tipo SDL_Surface. Es decir, estás usando dos direcciones: la dirección de la variable pantalla (&amp;pantalla), y la dirección que contiene la variable pantalla (los punteros almacenan direcciones).<br />Como dijimos antes, una dirección de memoria es un puntero y, por lo tanto, estás creando un doble puntero a SDL_Surface, por ello te lanza el error, intentas pasar un SDL_Surface** (puntero doble) cuando la función espera recibir un SDL_Surface* (puntero simple).<br /><br />Resumiendo, para una función que espera recibir un puntero como parámetro:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void funcion&#40; tipo* parametro &#41;;</code></dd></dl><br />Estas son las diferentes formas posibles de pasar un parámetro a dicha función:<br /><dl class="codebox"><dt>Code: </dt><dd><code>algo var1;<br />tipo* var2;<br /><br />funcion&#40; &amp;var1 &#41;;  // correcto, pasa la dirección de var1<br />funcion&#40; var2 &#41;;  // correcto, var2 ya es una dirección<br />funcion&#40; var1 &#41;;  // incorrecto, intenta pasar un valor, no una dirección<br />funcion&#40; &amp;var2 &#41;;  // incorrecto, intenta pasar un doble puntero<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Jul 14, 2009 6:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-13T23:01:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2734#p2734</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2734#p2734"/>
<title type="html"><![CDATA[Problema con punteros... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2734#p2734"><![CDATA[
Es que en el tema de punteros, ese operador hace referencia a la direccion de memoria a la que apunta, no es que pases el parámetro como tal por referencia(puedes cambiar la direcciona la que apunta pantalla, pero no los valores de pantalla)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Jul 13, 2009 11:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baco]]></name></author>
<updated>2009-07-13T18:29:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2733#p2733</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2733#p2733"/>
<title type="html"><![CDATA[Problema con punteros... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2733#p2733"><![CDATA[
Al final si que era un '&amp;' (en realidad dos). El que decías y el de pantalla.<br /><br />Ahora cambiando:<br /><dl class="codebox"><dt>Code: </dt><dd><code>imprimirBaldosas&#40;&amp;pantalla, &amp;baldosasSueloAmpliada, j, i, 0, 1&#41;;</code></dd></dl><br /><br />por<br /><dl class="codebox"><dt>Code: </dt><dd><code>imprimirBaldosas&#40;pantalla, baldosasSueloAmpliada, j, i, 0, 1&#41;;</code></dd></dl><br /><br />Ya compila y se ejecuta bien.<br /><br />Gracias  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><br /><br />PD: Si alguien me explica porque no he podido pasar el parámetro por referencia (con el &amp;) se lo agadecería<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1988">baco</a> — Lun Jul 13, 2009 6:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baco]]></name></author>
<updated>2009-07-12T20:10:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2728#p2728</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2728#p2728"/>
<title type="html"><![CDATA[Problema con punteros... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2728#p2728"><![CDATA[
Nada, me da mas errores.<br /><br />Como el código que tengo todavía es pequeño casi que lo pego entero por si es de otro punto:<br /><br /><span style="font-weight: bold">main.cpp</span><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;SDL/SDL.h&gt;             // Incluimos la librería SDL<br /><br />/**********************************************/<br />/* añadiendo librerias adicionales          */<br />/**********************************************/<br />#include &lt;SDL/SDL_image.h&gt;<br />#include &lt;SDL/SDL_rotozoom.h&gt;<br /><br />/**********************************************/<br />/* definiendo las opciones de la ventana    */<br />/**********************************************/<br />#define VENTANA_ANCHO 800 // 640<br />#define VENTANA_ALTO 600 // 480<br />#define VENTANA_PROFUNDIDAD_COLOR 24 // 8=256 colores, 16, 24=color real y 32=se destinan a canales alfa<br />#define VENTANA_PARAMETROS_ADICIONALES SDL_HWSURFACE|SDL_DOUBLEBUF // SDL_FULLSCREEN=pantalla completa |SDL_FULLSCREEN<br />#define VENTANA_NOMBRE &quot;Imagenes sobre el fondo&quot;<br />#define VENTANA_RATON_VER 1 // 1=si; 0=no<br /><br />/**********************************************/<br />/* caracteristicas de las baldosas          */<br />/**********************************************/<br />#define BALDOSA_ANCHO 32 // 32<br />#define BALDOSA_ALTO 32 // 32<br />#define BALDOSA_AMPLIAR 2.0 // 2.0<br />#define BALDOSA_ROTAR 0.0 // 0.0<br />#define BALDOSA_AREA_ANCHO 19<br />#define BALDOSA_AREA_ALTO 15<br /><br />SDL_Surface * iniciar_sdl&#40;&#41;;<br />void  cargarImagenes&#40;SDL_Surface **imagen, const char *ruta&#41;;<br />void error&#40;int error&#41;;<br />void imprimirBaldosas&#40;SDL_Surface *pantalla, SDL_Surface *title, Uint8 mapaColumna, Uint8 mapaFila, Uint8 titleColumna, Uint8 titleFila&#41;;<br /><br />int main&#40;&#41; &#123;<br /><br />    SDL_Surface *pantalla;       // Definimos una superficie<br />    SDL_Event evento;            // Definimos una variable de eventos<br /><br />    // Inicializamos SDL<br />    pantalla = iniciar_sdl&#40;&#41;;<br />    if &#40;pantalla == NULL&#41; return 1;<br /><br />   // cargamos la iamgen de prueba<br />   SDL_Surface *baldosasSuelo;<br />   cargarImagenes&#40;&amp;baldosasSuelo, &quot;imagenes/tiles/modificado.png&quot;&#41;; <br /><br />       // Establecemos el color de la transparencia<br />   SDL_SetColorKey&#40;baldosasSuelo, SDL_SRCCOLORKEY|SDL_RLEACCEL,\<br />          SDL_MapRGB&#40;baldosasSuelo-&gt;format, 0, 255, 0&#41;&#41;;<br />  <br />    //ampliada BALDOSA_AMPLIAR y giro 0.0 grados con smooth<br />    SDL_Surface *baldosasSueloAmpliada;<br /><br />   baldosasSueloAmpliada=rotozoomSurface&#40;baldosasSuelo,BALDOSA_ROTAR,BALDOSA_AMPLIAR,1&#41;;<br />          <br />    int i, j;<br />    for&#40;i=0;i&lt;BALDOSA_AREA_ALTO;i++&#41;<br />          &#123;<br />          for&#40;j=0;j&lt;BALDOSA_AREA_ANCHO;j++&#41;<br />             &#123;<br />         // imprimir mapa en el buffer<br />         imprimirBaldosas&#40;&amp;pantalla, &amp;baldosasSueloAmpliada, j, i, 0, 1&#41;;<br />             &#125;<br />          &#125;<br />    // Mostramos la pantalla &quot;oculta&quot; del búffer<br />    SDL_Flip&#40;pantalla&#41;;<br /><br />    // Bucle infinito<br />    for&#40;;;&#41; &#123;<br />    // Consultamos los eventos<br />   while&#40;SDL_PollEvent&#40;&amp;evento&#41;&#41; &#123;<br />       if&#40;evento.type == SDL_QUIT&#41; // Si es de salida<br />      return 0;<br />      <br />      // se activa cuando pulsamos una tecla<br />      if&#40;evento.type == SDL_KEYDOWN&#41; &#123;    <br />         if&#40;evento.key.keysym.sym==SDLK_ESCAPE&#41; // salimos al pulsar la tecla ESC<br />            &#123;<br />            return 0;<br />            &#125;<br />         &#125;<br />      &#125;<br />    &#125;<br /><br />&#125;<br /><br />            /**********************************************/<br />            /* arrea para las funciones             */<br />/*************************************************************************************/<br /><br />// inicializar SDL       <br />SDL_Surface * iniciar_sdl&#40;&#41;<br />   &#123;<br />   SDL_Surface * pantalla;<br /><br />   if&#40;SDL_Init&#40;SDL_INIT_VIDEO&#41; &lt; 0&#41;<br />      &#123;<br />      // En caso de error<br />      error&#40;1&#41;;<br />      &#125;<br /><br />    atexit&#40;SDL_Quit&#41;; // Al salir, cierra SDL<br />    <br />   // Establecemos el modo de pantalla<br />   pantalla = SDL_SetVideoMode&#40;VENTANA_ANCHO, VENTANA_ALTO, VENTANA_PROFUNDIDAD_COLOR, VENTANA_PARAMETROS_ADICIONALES&#41;;<br />   <br />   if&#40;pantalla == NULL&#41;<br />      &#123;<br />      // Si no hemos podido inicializar la superficie<br />      error&#40;2&#41;; <br />      &#125;<br /><br />   // Personalizamos el título de la ventana<br />   SDL_WM_SetCaption&#40;VENTANA_NOMBRE, NULL&#41;;<br />   <br />   // oculta el raton<br />   if&#40;!VENTANA_RATON_VER&#41; SDL_ShowCursor &#40;SDL_DISABLE&#41;;<br /><br />   return pantalla;<br />&#125;<br />       <br />// cargar imagenes<br />void  cargarImagenes&#40;SDL_Surface **imagen, const char * ruta&#41;<br />   &#123;<br />   *imagen = IMG_Load&#40;ruta&#41;;<br /><br />   if &#40;*imagen == NULL&#41;<br />      &#123;<br />      error&#40;3&#41;;<br />      &#125;<br />   &#125;<br /><br />// escribe en un archivo de texto plano el error que ha salido<br />void error&#40;int error&#41;<br />   &#123;<br />   FILE *archivo;<br />     archivo=fopen&#40;&quot;error.log&quot;, &quot;w&quot;&#41;;<br />     <br />   switch&#40;error&#41;<br />      &#123;<br />      case 1:<br />         &#123;<br />         fprintf&#40;archivo, &quot;Error al inicializar SDL: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />         break;<br />         &#125;<br />      case 2:<br />         &#123;<br />         fprintf&#40;archivo, &quot;Error al crear la superficie: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />         break;<br />         &#125;<br />      case 3:<br />         &#123;<br />         fprintf&#40;archivo, &quot;Error al cargar la imagen: %s\n&quot;, SDL_GetError&#40;&#41;&#41;;<br />         break;<br />         &#125;<br />      default:<br />         &#123;<br />         fprintf&#40;archivo, &quot;%s\n&quot;, SDL_GetError &#40;&#41;&#41;;<br />         break;<br />         &#125;<br />      &#125;<br />   <br />     fclose&#40;archivo&#41;;<br />          <br />   exit&#40;1&#41;; <br />   &#125;<br /><br />// imprimir el mapa<br />void imprimirBaldosas&#40;SDL_Surface *pantalla, SDL_Surface *title, Uint8 mapaColumna, Uint8 mapaFila, Uint8 titleColumna, Uint8 titleFila&#41;<br />   &#123;<br />   // establezco el cuadrado donde se pegara la baldosa<br />   SDL_Rect posicionEnPantalla;<br />   posicionEnPantalla.x = mapaColumna * BALDOSA_ANCHO;<br />       posicionEnPantalla.y = mapaFila * BALDOSA_ALTO;<br />       posicionEnPantalla.w = VENTANA_ANCHO;<br />       posicionEnPantalla.h = VENTANA_ALTO;<br />       <br />       <br />   // establezco el trozo de la imagen que se vera<br />   SDL_Rect trozoImagen;<br />   trozoImagen.x = BALDOSA_ANCHO * titleColumna; // 4 + <br />   trozoImagen.y = BALDOSA_ALTO * titleFila;<br />   trozoImagen.w = BALDOSA_ANCHO;<br />   trozoImagen.h = BALDOSA_ALTO;<br />   <br />   // Copiamos la imagen en la superficie principal<br />   SDL_BlitSurface&#40;title, &amp;trozoImagen, pantalla, &amp;posicionEnPantalla&#41;;<br />   &#125;</code></dd></dl><br /><br />PD: Cuando lo ejecutaba sin funciones (todo el código revuelto) funcionaba pero al ir 'ordenándolo' y llegar a 'imprimirBaldosas()' se ha jodido<br />PD2: Lo compilo en Ubuntu usando:<dl class="codebox"><dt>Code: </dt><dd><code>g++ -o main main.cpp -lSDL -lSDL_image -lSDL_ttf -lSDL_mixer -lSDL_net -lSDL_gfx</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1988">baco</a> — Dom Jul 12, 2009 8:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-12T18:26:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2726#p2726</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2726#p2726"/>
<title type="html"><![CDATA[Problema con punteros... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2726#p2726"><![CDATA[
buenas baco:<br /><br />A lo mejor estoy equivocado, pero en mi opinión el error no está en ese punto, si no en tu definición de la carga de imagenes. No se a ciencia cierta, pero creo que te sobra un '*' en la surface que tienes puesta en la funcion: SDL_Surface *imagen.<br />Otra manera si no, sería quitarle el &amp; al parametro baldosaSueloAmpliada en la llamada a la función. Creo que con alguna de esas dos cosas debería funcionar<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Jul 12, 2009 6:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baco]]></name></author>
<updated>2009-07-12T17:28:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2724#p2724</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2724#p2724"/>
<title type="html"><![CDATA[Problema con punteros... creo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=591&amp;p=2724#p2724"><![CDATA[
Hola:<br /><br />Hace mucho que no me pasaba por aqui pero tocaba antes intentar aprender como funciona SDL xD<br /><br />Tengo un problema que creo que es de punteros (aunque no estoy muy seguro ya que voy aprendiendo todo sobre la marcha)<br /><br />El error que me da al compilar es:<br /><dl class="codebox"><dt>Code: </dt><dd><code>error: no se puede convertir 'SDL_SUrface**' a 'SDL_Surface*' para el argumento '1' para 'void imprimirBaldosas&#40;SDL_Surface *, SDL_Surface *, Uint8, Uint8, Uint8, Uint8&#41;'</code></dd></dl><br /><br />Y aqui parte del codigo relacionado:<br /><dl class="codebox"><dt>Code: </dt><dd><code>void  cargarImagenes&#40;SDL_Surface ** imagen, const char *ruta&#41;;<br />void imprimirBaldosas&#40;SDL_Surface *pantalla, SDL_Surface *title, Uint8 mapaColumna, Uint8 mapaFila, Uint8 titleColumna, Uint8 titleFila&#41;;<br /><br />int main&#40;&#41; &#123;<br /><br />    SDL_Surface *pantalla;       // Definimos una superficie<br /><br />    SDL_Surface *baldosasSuelo;<br />   cargarImagenes&#40;&amp;baldosasSuelo, &quot;imagenes/tiles/modificado.png&quot;&#41;;<br /><br />    SDL_Surface *baldosasSueloAmpliada;<br /><br />    baldosasSueloAmpliada=rotozoomSurface&#40;baldosasSuelo,BALDOSA_ROTAR,BALDOSA_AMPLIAR,1&#41;;<br /><br /><br />    int i, j;<br />    for&#40;i=0;i&lt;BALDOSA_AREA_ALTO;i++&#41;<br />          &#123;<br />          for&#40;j=0;j&lt;BALDOSA_AREA_ANCHO;j++&#41;<br />             &#123;<br />         // imprimir mapa en el buffer<br />         imprimirBaldosas&#40;&amp;pantalla, &amp;baldosasSueloAmpliada, j, i, 0, 1&#41;; // &lt;--- la linea del error es esta<br />             &#125;<br />          &#125;<br /><br />&#125;<br /><br />// funciones<br />void  cargarImagenes&#40;SDL_Surface ** imagen, const char * ruta&#41;<br />   &#123;<br />   *imagen = IMG_Load&#40;ruta&#41;;<br /><br />   if &#40;*imagen == NULL&#41;<br />      &#123;<br />      error&#40;3&#41;;<br />      &#125;<br />   &#125;<br /><br />void imprimirBaldosas&#40;SDL_Surface *pantalla, SDL_Surface *title, Uint8 mapaColumna, Uint8 mapaFila, Uint8 titleColumna, Uint8 titleFila&#41;<br />   &#123;<br />   // establezco el cuadrado donde se pegara la baldosa<br />   SDL_Rect posicionEnPantalla;<br />   posicionEnPantalla.x = mapaColumna * BALDOSA_ANCHO;<br />       posicionEnPantalla.y = mapaFila * BALDOSA_ALTO;<br />       posicionEnPantalla.w = VENTANA_ANCHO;<br />       posicionEnPantalla.h = VENTANA_ALTO;<br />       <br />       <br />   // establezco el trozo de la imagen que se vera<br />   SDL_Rect trozoImagen;<br />   trozoImagen.x = BALDOSA_ANCHO * titleColumna; // 4 + <br />   trozoImagen.y = BALDOSA_ALTO * titleFila;<br />   trozoImagen.w = BALDOSA_ANCHO;<br />   trozoImagen.h = BALDOSA_ALTO;<br />   <br />   // Copiamos la imagen en la superficie principal<br />       SDL_BlitSurface&#40;title, &amp;trozoImagen, pantalla, &amp;posicionEnPantalla&#41;;<br />   &#125;<br /></code></dd></dl><br /><br />Si compilo comentando la linea de error<dl class="codebox"><dt>Code: </dt><dd><code>imprimirBaldosas&#40;&amp;pantalla, &amp;baldosasSueloAmpliada, j, i, 0, 1&#41;; // &lt;--- la linea del error es esta </code></dd></dl> deja de dar el error<br /><br />¿Alguna ayuda para que esa funcion deje de tirar error?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1988">baco</a> — Dom Jul 12, 2009 5:28 pm</p><hr />
]]></content>
</entry>
</feed>