<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1528" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-28T22:01:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1528</id>
<entry>
<author><name><![CDATA[drog]]></name></author>
<updated>2012-07-28T22:01:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6981#p6981</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6981#p6981"/>
<title type="html"><![CDATA[Re: Imprimir mapa en sdl desde extension .tmx]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6981#p6981"><![CDATA[
He solucionado parcialmente el tema de las colisiones con la idea de esta pagina <a href="http://aventurapygame.blogspot.com.es/2011/10/colisiones-del-personaje-con-el-mapa.html" class="postlink">http://aventurapygame.blogspot.com.es/2011/10/colisiones-del-personaje-con-el-mapa.html</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2636">drog</a> — Sab Jul 28, 2012 10:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drog]]></name></author>
<updated>2012-07-26T20:46:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6963#p6963</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6963#p6963"/>
<title type="html"><![CDATA[Re: Imprimir mapa en sdl desde extension .tmx]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6963#p6963"><![CDATA[
Me respondo a mi mismo xD<br /><br />el error era en esta linea :                     tileRect.y = (TileId / tileH) *tilesize;<br />donde debia ser :                         tileRect.y = (TileId / tileW) *tilesize;<br /><br />PERO aun me queda un problema por si alguien me puede ayudar, como dibujar un mapa con tiles con espacio y margen.<br />Y tambien como ver el tema de las colisiones.<br /><br />Bueno aca les dejo el codigo porsi las moscas<br /><br /><br /><pre class="prettyprint">#include &lt;TmxParser/Tmx.h&gt;<br />#include &lt;SDL/SDL.h&gt; <br />#include &lt;SDL/SDL_image.h&gt;<br /><br />const short SCREEN_WIDTH = 555;<br />const short SCREEN_HEIGHT = 555;<br />const short DEPTH = 16;<br /><br />int main&#40;&#41; {<br /><br /><br />SDL_Surface* screen = NULL; /*pantalla*/<br />SDL_Init&#40; SDL_INIT_VIDEO &#41;;<br />bool gameover = false;<br />SDL_Event event;<br />/*SDL_SWSURFACE Crea superficie de video en memoria de sistema*/<br />screen = SDL_SetVideoMode&#40; SCREEN_WIDTH, SCREEN_HEIGHT, DEPTH, SDL_SWSURFACE &#41;; <br /><br /><br />Tmx::Map *map = new Tmx::Map&#40;&#41;;<br />map-&gt;ParseFile&#40;&quot;http://losersjuegos.com.ar/foro/example/untitled.tmx&quot;&#41;;<br /><br />if &#40;map-&gt;HasError&#40;&#41;&#41; {<br />printf&#40;&quot;error code: %d\n&quot;, map-&gt;GetErrorCode&#40;&#41;&#41;;<br />printf&#40;&quot;error text: %s\n&quot;, map-&gt;GetErrorText&#40;&#41;.c_str&#40;&#41;&#41;;<br />return map-&gt;GetErrorCode&#40;&#41;;<br />}<br /><br /><br />SDL_Rect tileRect;<br />SDL_Rect mapRect;<br /><br />const Tmx::Tileset *tileset;<br />for &#40;int i = 0; i &lt; map-&gt;GetNumTilesets&#40;&#41;; ++i&#41; {<br />tileset = map-&gt;GetTileset&#40;i&#41;;<br /><br />if &#40;tileset-&gt;GetTiles&#40;&#41;.size&#40;&#41; &gt; 0&#41; {<br />// Get a tile from the tileset.<br />const Tmx::Tile *tile = *&#40;tileset-&gt;GetTiles&#40;&#41;.begin&#40;&#41;&#41;;<br />}<br />}<br /><br />SDL_Surface *Image = IMG_Load&#40;tileset-&gt;GetImage&#40;&#41;-&gt;GetSource&#40;&#41;.c_str&#40;&#41;&#41;;     <br />int tilesize= tileset-&gt;GetTileWidth&#40;&#41;;<br />int img_W = tileset-&gt;GetImage&#40;&#41;-&gt;GetWidth&#40;&#41;;<br />int img_H = tileset-&gt;GetImage&#40;&#41;-&gt;GetHeight&#40;&#41;;<br />int tileW = img_W / tilesize;<br />int tileH = img_H / tilesize;<br />int tileMargin = tileset-&gt;GetMargin&#40;&#41;;<br />int tileSpace = tileset-&gt;GetSpacing&#40;&#41;;<br />int num_layers =map-&gt;GetNumLayers&#40;&#41;; <br /><br />for &#40;int i = 0; i &lt;num_layers ; ++i&#41; {<br />const Tmx::Layer *layer = map-&gt;GetLayer&#40;i&#41;;<br />int map_ancho=layer-&gt;GetWidth&#40;&#41;;<br />int map_alto=layer-&gt;GetHeight&#40;&#41;;<br />for &#40;int x = 0; x &lt; map_ancho; x++&#41; {<br />for &#40;int y = 0; y &lt; map_alto ; y++&#41; {<br />int TileId = layer-&gt;GetTileId&#40;x, y&#41;;<br />if&#40;TileId==0&#41;{<br />TileId--;<br />continue;<br />}<br />              <br />tileRect.x = &#40;TileId % tileW&#41; *tilesize;<br />tileRect.y = &#40;TileId / tileW&#41; *tilesize;<br />tileRect.w= tilesize;<br />tileRect.h= tilesize;<br /><br />mapRect.x= x* tilesize;<br />mapRect.y= y* tilesize;<br /><br />SDL_BlitSurface&#40; Image, &amp;tileRect, screen, &amp;mapRect &#41;;<br />SDL_UpdateRect&#40;screen,0,0,0,0&#41;;<br />}<br /><br />}<br />}<br /><br />while&#40;!gameover&#41;{<br />/* Verifica eventos */<br />if &#40;SDL_PollEvent&#40;&amp;event&#41;&#41; {<br />switch &#40;event.type&#41; {<br />case SDL_QUIT:<br />gameover = true;<br />break;<br />case SDL_KEYDOWN:<br />switch &#40;event.key.keysym.sym&#41; {<br />case SDLK_ESCAPE:<br />case SDLK_q:<br />gameover = true;<br />break;<br />}<br />break;<br />}<br />}<br /><br />}<br /><br />return 0;<br />}</pre><br />compilar en linux: g++ -o main TmxParser_Test.cpp -ltinyxml -lz -ltmxparser -lSDL -lSDL_image<br /><br /><br />Esta bastante desordenado y varias cosas se pueden optimizar pero lo hize para pruebas xD.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2636">drog</a> — Jue Jul 26, 2012 8:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drog]]></name></author>
<updated>2012-07-26T18:48:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6961#p6961</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6961#p6961"/>
<title type="html"><![CDATA[[SOLUCIONADO]Imprimir mapa en sdl desde extension .tmx]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1528&amp;p=6961#p6961"><![CDATA[
Hola les cuento, estoy tratando de imprimir un mapa desde un archivo tmx, buscando por internet vi que su engine pilas usa mapas tmx, pero a mi me interesa hacerlo desde c++ con sdl.<br /><br />Tengo el siguiente codigo<br /><br /><pre class="prettyprint">int tilesize= tileset-&gt;GetTileWidth&#40;&#41;;<br />int img_W = tileset-&gt;GetImage&#40;&#41;-&gt;GetWidth&#40;&#41;;<br />int img_H = tileset-&gt;GetImage&#40;&#41;-&gt;GetHeight&#40;&#41;;<br /><br />int tileW = img_W / tilesize;<br />int tileH = img_H / tilesize;<br />int tileMargin = tileset-&gt;GetMargin&#40;&#41;;<br />int tileSpace = tileset-&gt;GetSpacing&#40;&#41;;<br />int num_layers =map-&gt;GetNumLayers&#40;&#41;; <br /><br />                for &#40;int i = 0; i &lt;num_layers ; ++i&#41; {<br />const Tmx::Layer *layer = map-&gt;GetLayer&#40;i&#41;;<br />int map_ancho=layer-&gt;GetWidth&#40;&#41;;<br />int map_alto=layer-&gt;GetHeight&#40;&#41;;<br />for &#40;int x = 0; x &lt; map_ancho; ++x&#41; {<br />for &#40;int y = 0; y &lt; map_alto ; ++y&#41; {<br />const Tmx::Tileset *tileset = map-&gt;FindTileset&#40;layer-&gt;GetTileId&#40;x, y&#41;&#41;;<br />int TileId = layer-&gt;GetTileId&#40;x, y&#41;;<br />if&#40;TileId==0&#41;{<br />TileId++;<br />continue;<br />}<br />              <br />tileRect.x = &#40;TileId % tileW&#41; *tilesize;<br />tileRect.y = &#40;TileId / tileH&#41; *tilesize;<br />tileRect.w= tilesize;<br />tileRect.h= tilesize;<br /><br />mapRect.x= x* tilesize;<br />mapRect.y= y* tilesize;<br /><br />SDL_BlitSurface&#40; Image, &amp;tileRect, screen, &amp;mapRect &#41;;<br />SDL_UpdateRect&#40;screen,0,0,0,0&#41;;<br />}<br />}<br />}</pre><br /><br />El cual esta basado en las especificaciones de <a href="https://github.com/bjorn/tiled/wiki/TMX-Map-Format" class="postlink">https://github.com/bjorn/tiled/wiki/TMX-Map-Format</a> para obtener los datos.<br />y el algoritmo para obtener los tiles de la imagen lo base en varios ejemplo en la web, pero no he logrado imprimir el mapa perfectamente, y la verdad aun no logro apreciar cual es mi error.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2636">drog</a> — Jue Jul 26, 2012 6:48 pm</p><hr />
]]></content>
</entry>
</feed>