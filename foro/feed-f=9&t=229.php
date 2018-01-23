<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=229" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-01-18T04:03:06+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=229</id>
<entry>
<author><name><![CDATA[LhaN]]></name></author>
<updated>2008-01-18T04:03:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=851#p851</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=851#p851"/>
<title type="html"><![CDATA[Tengo un problemas con clases y Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=851#p851"><![CDATA[
Ya lo solucione... es que soy un tarado, en el .h yo ponia<br /><dl class="codebox"><dt>Code: </dt><dd><code>class clssClase<br />&#123;<br />    ...<br />    public:<br />    ...<br />        inline void actualizar&#40;&#41;;<br />    ....<br />&#125;</code></dd></dl><br />y en el .cpp o...<br /><blockquote class="uncited"><div><br />1.- NO DEFINIA EL actualizar... lo hacia en una clase derivada pero no en la clase base...<br /><br />2.- ponia solamente void actualizar sin el &quot;inline&quot;<br /></div></blockquote><br />Para mi primer error... ya que la clase base no hace nada en el actualizar hay que... o hacerla virtual pura osea...<br /><dl class="codebox"><dt>Code: </dt><dd><code>virtual void actualizar&#40;&#41;=0;</code></dd></dl><br /><br />o definirla en el cpp así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>inline clssClase::actualizar&#40;&#41;&#123;&#125;;</code></dd></dl><br /><br />Fijate si tu problema no es uno de estos. Saludos. Suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1872">LhaN</a> — Vie Ene 18, 2008 4:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kittie4man]]></name></author>
<updated>2008-01-17T18:07:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=850#p850</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=850#p850"/>
<title type="html"><![CDATA[Tengo un problemas con clases y Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=850#p850"><![CDATA[
ese mismo problema tengo yo, es por un tema de linkeo entre las clases, fijate como lo estas compilando y si estas agregando bien los .h, etc.<br /><br />Estaria bueno que alguien que sepa mas pudiera dar una referencia de includes y clases en un proyecto.<br /><br />Salu2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1866">kittie4man</a> — Jue Ene 17, 2008 6:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[LhaN]]></name></author>
<updated>2008-01-16T01:51:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=849#p849</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=849#p849"/>
<title type="html"><![CDATA[Tengo un problemas con clases y Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=849#p849"><![CDATA[
Bueno... he avanzado un montón, mi problema era que estaba usando solo cpp, repartí todo en .h y .cpp y se solucionó el problema, pero me ha saltado otro error.<br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;Linker error&#93; undefined reference to `clssActorManager::agregar&#40;clssActor*&#41;'</code></dd></dl><br />me tira ese error para varios métodos de distintas clases, en 2 constructores y en un destructor.<br />Disculpen si estoy siendo molesto, pero es que he decidido dejar el .NET y ponerme con c++ puro y duro. Y de paso cañaso, usar un IDE libre y no el de guindou. Gracias desde ya. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1872">LhaN</a> — Mié Ene 16, 2008 1:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[LhaN]]></name></author>
<updated>2008-01-15T16:53:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=846#p846</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=846#p846"/>
<title type="html"><![CDATA[Tengo un problemas con clases y Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=846#p846"><![CDATA[
Del detalle del <dl class="codebox"><dt>Code: </dt><dd><code>using namespace std;</code></dd></dl>ya me había dado cuenta, pero el problema con mis clases persiste... creía que se había solucionado al agregar lo que agregue... pero en vez de estarme declarando la clase me la redefine y luego ya no sirve lo demás... <br />Error 1<br /><blockquote class="uncited"><div><br />29 D:\Mis Documentos\Proyectos C++\Libreria para Juegos Dev\stagemanager.cpp ISO C++ forbids declaration of `clssGame' with no type<br />29 D:\Mis Documentos\Proyectos C++\Libreria para Juegos Dev\stagemanager.cpp expected `;' before '*' token<br /></div></blockquote><br />el VC 6.0 con sp6 me tira el error<blockquote class="uncited"><div><br />d:\mis documentos\proyectos c++\libreria para juegos vc++\stagemanager.cpp(29) : error C2143: syntax error : missing ';' before '*'<br /></div></blockquote>que es el mismo que me tira el Dev-C++ supongo.<br />Ese error es para el siguiente código:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;SDL/SDL.h&quot;<br /><br />#include &quot;game.cpp&quot;<br />#include &quot;actor.cpp&quot;<br /><br />class clssStageManager<br />&#123;<br />   private:<br />      void limpiarPantalla&#40;&#41;;<br />   <br />   protected:<br />      clssGame *game;//ERROR</code></dd></dl><br /><br />Error 2 (Cuando le digo que clssGame es una clase, esto lo hice por que lo leí en algun lado que alguen había solucionado el error, pero a mi no me ha servido)<br /><br /><blockquote class="uncited"><div><br />68 D:\Mis Documentos\Proyectos C++\Libreria para Juegos Dev\stagemanager.cpp 'class clssGame' has no member named 'actorManager'<br /></div></blockquote><br />Claro que actorManager no es un miembro de la clase, eso que agregue me la esta redefiniendo.<br />Acá está lo que le agrege:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class clssGame&#123;&#125;;//AGREGADO<br /><br />class clssStageManager<br />&#123;<br />   private:<br />      void limpiarPantalla&#40;&#41;;<br />   <br />   protected:<br />      clssGame *game;<br />      SDL_Surface *buffer;<br />      int   ancho,<br />         alto;<br /><br />   public:<br />      inline clssStageManager&#40;clssGame *g, int ancho, int alto, int bpp, int porHardware&#41;;<br />      ~clssStageManager&#40;&#41; &#123; SDL_FreeSurface&#40;buffer&#41;; &#125;<br />      SDL_Surface *obtenerBuffer&#40;&#41; &#123; return buffer; &#125;<br />      void actualizar&#40;&#41; &#123; dibujar&#40;&#41;; &#125;<br />      void dibujar&#40;&#41;;<br />&#125;;<br /><br />clssStageManager::clssStageManager&#40;clssGame *g, int ancho, int alto, int bpp, int porHardware&#41;<br />&#123;<br />   game = g;<br />   if&#40;porHardware&#41;<br />      buffer = SDL_SetVideoMode &#40;ancho, alto, bpp, SDL_HWSURFACE | SDL_DOUBLEBUF | SDL_NOFRAME&#41;; //Por Hardware<br />   else<br />      buffer = SDL_SetVideoMode &#40;ancho, alto, bpp, SDL_SWSURFACE | SDL_NOFRAME&#41;; //Por Software<br />&#125;<br /><br />void clssStageManager::limpiarPantalla&#40;&#41;<br />&#123;<br />   SDL_Rect area;<br />   area.x = 0;<br />   area.y = 0;<br /><br />   area.w = buffer-&gt;w;<br />   area.h = buffer-&gt;h;<br /><br />   SDL_FillRect &#40;buffer, &amp;area, SDL_MapRGB &#40;buffer-&gt;format, 0, 0, 0&#41;&#41;;<br />&#125;<br /><br />void clssStageManager::dibujar&#40;&#41;<br />&#123;<br />   clssActor *actorTemporal;<br />   game-&gt;actorManager-&gt;revobinar&#40;&#41;;//ERROR</code></dd></dl><br />Lo segundo es lo que yo creía que había solucionado... pero el error 1 es el importante... no me esta reconociendo la clase clssGame. Pero por si las dudas acá está el código del game.cpp:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;string&gt;<br /><br />#include &quot;SDL/SDL.h&quot;<br /><br />#include &quot;stagemanager.cpp&quot;<br />#include &quot;actormanager.cpp&quot;<br />#include &quot;actor.cpp&quot;<br /><br />class clssGame<br />&#123;<br />   private:<br />      void empezar&#40;&#41;;<br />      void finalizar&#40;&#41;;<br />      void crearActorManager&#40;&#41;&#123; actorManager = new clssActorManager&#40;this&#41;; &#125;<br />      void crearStageManager&#40;&#41;&#123; stageManager = new clssStageManager&#40;this, 640, 480, 24&#41;; &#125;<br />      <br />   protected:<br />      void actualizar&#40;&#41;;<br />   <br />   public:<br />      string nombre;<br />      <br />      clssActorManager *actorManager;<br />      clssStageManager *stageManager;<br />      <br />      clssGame&#40;&#41; &#123; actorManager = NULL; stageManager = NULL; &#125;<br />      ~clssGame&#40;&#41;;<br />      <br />      void iniciar&#40;&#41;;<br />      int main&#40;int argc, char *argv&#91;&#93;&#41;;<br />&#125;;<br /><br />int clssGame::iniciar&#40;&#41;//Lo ideal seria que tomara los valores desde un archivo .ini<br />&#123;<br />   //Inicia los subsistemas<br />   if &#40;SDL_Init&#40;SDL_INIT_VIDEO&#41; &lt; 0&#41;<br />      return 0;<br />   atexit&#40;SDL_Quit&#41;;<br />   <br />   crearActorManager&#40;&#41;;<br />   crearStageManager&#40;&#41;;<br />   <br />   empezar&#40;&#41;;<br />   return 1;<br />&#125;<br /><br />void clssGame::empezar&#40;&#41;<br />&#123;<br />   main&#40;&#41;;<br />   finalizar&#40;&#41;;<br />&#125;<br /><br />void clssGame::finalizar&#40;&#41;<br />&#123;<br />   delete actorManager;<br />   delete stageManager;<br />&#125;<br /><br />void clssGame::actualizar&#40;&#41;<br />&#123;<br />   actorManager-&gt;actualizar&#40;&#41;;<br />   stageManager-&gt;actualizar&#40;&#41;;<br />&#125;</code></dd></dl><br /><br />No se que es lo que esta mal <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" />. A ver si me pueden ayudar. Gracias desde ya.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1872">LhaN</a> — Mar Ene 15, 2008 4:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2008-01-15T06:28:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=841#p841</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=841#p841"/>
<title type="html"><![CDATA[Tengo un problemas con clases y Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=841#p841"><![CDATA[
Te estás enfrentando al manejo de espacios de nombre (namespaces) del C++ estándar <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br />En donde tienes esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;list&gt;<br /></code></dd></dl><br />Pon esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;list&gt;<br />using std::list;<br /></code></dd></dl><br />o esto:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;list&gt;<br />using namespace std;<br /></code></dd></dl><br />La segunda forma es más fácil para cuando incluyes varias librerías estándar. La primera es explícita y la tendrías que poner por cada elemento de la librería estándar que quieras usar, por ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />using std:cin;<br />using std:cout;<br />using std:endl;<br /><br />//...<br />cout &lt;&lt; &quot;Hola :&#41;&quot; &lt;&lt; endl;<br /><br />// O así:<br />#include &lt;iostream&gt;<br />using namespace std;<br /><br />// ...<br />cout &lt;&lt; &quot;Hola :&#41;&quot; &lt;&lt; endl;<br /></code></dd></dl><br /><br />Si no lo haces así, tendrías que escribir std::list en todas las partes de tu código donde necesites declarar una variable de este tipo, algo así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br /><br />//...<br />std::cout &lt;&lt; &quot;Hola :&#41;&quot; &lt;&lt; std::endl;<br /></code></dd></dl><br /><br />Suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mar Ene 15, 2008 6:28 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[LhaN]]></name></author>
<updated>2008-01-15T00:08:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=839#p839</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=839#p839"/>
<title type="html"><![CDATA[Tengo un problemas con clases y Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=229&amp;p=839#p839"><![CDATA[
Estoy con pequeño problema, resulta que a cada clase el Dev-C++ no me las reconoce, ni las mías, ni las estándar.<br />Por ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>..http://losersjuegos.com.ar/foro//Codigo sin importancia<br />#include &lt;list&gt;<br /><br />#include &quot;game.cpp&quot;<br /><br />class clssGame;//Esto lo tuve que agregar para que clssGame *game no me de el error<br /><br />class clssActorManager<br />&#123;<br />   protected:<br />      clssGame *game;//aca daba el error<br />      list &lt;clssActor*&gt; actores;//aca da el error!<br />... //continua el codigo<br />&#125;<br /></code></dd></dl><br /><br />En dicha línea me tira el error<br /><blockquote class="uncited"><div><br />25 D:\Mis documentos\Proyectos C++\Libreria para Juegos\actormanager.cpp ISO C++ forbids declaration of `list' with no type <br />25 D:\Mis documentos\Proyectos C++\Libreria para Juegos\actormanager.cpp expected `;' before '&lt;' token<br /></div></blockquote><br /><br />Cual es el problema?<br /><br />Gracias desde ya. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1872">LhaN</a> — Mar Ene 15, 2008 12:08 am</p><hr />
]]></content>
</entry>
</feed>