<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1568" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-01-04T17:44:14+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1568</id>
<entry>
<author><name><![CDATA[blacklotus.938]]></name></author>
<updated>2013-01-04T17:44:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9097#p9097</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9097#p9097"/>
<title type="html"><![CDATA[Re: Eliminar procesos o sprites SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9097#p9097"><![CDATA[
Oh gracias colega perdon por no responderte antes es que estaba de vacaciones jeje  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />. En fin eh encontrado por hay varios metodos para hacer lo que quiero hacer pero tengo que analizar a ver como funcionan.No pude compilar el codigo que pusistes hay , pero de todos modos gracias colega  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2677">blacklotus.938</a> — Vie Ene 04, 2013 5:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-12-25T21:25:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9056#p9056</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9056#p9056"/>
<title type="html"><![CDATA[Re: Eliminar procesos o sprites SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9056#p9056"><![CDATA[
<blockquote><div><cite>blacklotus.938 escribió:</cite><br />Ahora BRARAJAS me dijiste que aprovechara las ventajas de POO pero es que yo apenas estoy empezando en la programacion y no entiendo mucho de clases , por eso ves que los programas que hago las funciones y todo eso estan por su parte, to davia no profundizo con el tema de las clases <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> .<br /></div></blockquote><br /><br />Bueno, en ese caso, te recomiendo que busques un libro llamado &quot;el lenguaje de programación c&quot;, de Kernighan y Ritchie, y veas la sección sobre estructuras. (Entender estructuras te hara mucho más sencillo entender los objetos.)<br /><br />Las estructuras (&quot;structs&quot;), te permiten empaquetar datos de diferentes tipos, incluso otras estructuras, y para trabajar con ellas utilizas funciones.<br /><br /><blockquote><div><cite>blacklotus.938 escribió:</cite><br />hora el codigo que pusiste no lo logro entender bien, intente implementar la clase vector en mi codigo pero no me funcionaba <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> . Si pudieras decirme un metodo para eliminar la estructura que define las dimensiones del enemigo sin utilizar la clase vector<br /></div></blockquote><br /><br />La razón para utilizar vector, es que me evita tener que reintentar la rueda implementando una lista (y no es que sea difícil implementar una lista, el problema es que eso aumentaría el código y su dificultad).<br /><br />Pero bueno, si tienes dudas sobre como funciona vector puedes ver la referencia de todo lo que puede hacer (en ingles) <a href="http://www.cplusplus.com/reference/vector/vector/" class="postlink">http://www.cplusplus.com/reference/vector/vector/</a><br /><br /><blockquote><div><cite>blacklotus.938 escribió:</cite><br />Si pudieras decirme un metodo para eleminar la estructura que define las dimensiones del enemigo sin utilizar la clase vector ya no te pediria mas o podrias modificar el codigo agregandole la clase vector:<br /></div></blockquote><br /><br />Y si no quieres usar vetor, ni implementar tu propia lista, puedes usar un array de tamaño fijo, y todo tenga una bandera logica si es &quot;visible o invisible&quot;. Por suerte, tengo un ejemplo de eso.. <br /><br /><a href="http://db.tt/FUaPUReV" class="postlink">http://db.tt/FUaPUReV</a><br /><br />Espero que te sea útil.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Dic 25, 2012 9:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blacklotus.938]]></name></author>
<updated>2012-12-23T15:29:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9054#p9054</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9054#p9054"/>
<title type="html"><![CDATA[Re: Eliminar procesos o sprites SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=9054#p9054"><![CDATA[
Hola colegas , como dije , subi el codigo de mi propia version de &quot;eleminar enemigos&quot; , si lo compilan todo parece estar bien a simple vista pero no es asi, cuando el PJ colisiona con los enemigos el &quot;grafico&quot; de este desaparece pero el rectangulo que define al enemigo sigue hay, si descomentan la linea de codigo que esta en donde se comprueba la colision ( la linea de codigo hace que se detenga el PJ) veran que el grafico desaparece pero el PJ no se puede mover por que ahi, era en done estaba el rectangulo. Creo que este es el problema al que se referia el colega BARAJAS. Ahora BRARAJAS me dijiste que aprovechara las ventajas de POO pero es que yo apenas estoy empezando en la programacion y no entiendo mucho de clases , por eso ves que los programas que hago las funciones y todo eso estan por su parte, to davia no profundizo con el tema de las clases  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" />  . Ahora el codigo que pusiste no lo logro entender bien, intente implementar la clase vector en mi codigo pero no me funcionaba  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" />  . Si pudieras decirme un metodo para eleminar la estructura que define las dimensiones del enemigo sin utilizar la clase vector ya no te pediria mas o podrias modificar el codigo agregandole la clase vector:<br /><br /><pre class="prettyprint">#include &lt;stdio.h&gt; <br />#include &lt;iostream&gt; <br />#include &lt;time.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;SDL.h&gt;<br /><br />typedef struct enemigo<br />{<br />SDL_Rect sprite;<br />int enemigo_vivo;<br /><br /><br />}Enemigo;<br /><br />void Teclado&#40;&#41;;<br />bool colision&#40; SDL_Rect A, SDL_Rect B &#41;; <br /><br />const int PANTALLA_ANCHO = 800; <br />const int PANTALLA_ALTO = 600; <br />const int VEL_MAX = 3;<br />const int MAX_ENEMIGOS = 15;<br /><br />SDL_Surface *pantalla; <br />SDL_Rect pantalla_rect;<br />SDL_Rect PJ;<br />Enemigo enemigo[MAX_ENEMIGOS];<br />SDL_Event evento; <br /><br />bool salir = false; <br />char TITULO[]=&quot;PROGRAMA DE MANEJO DE PROCESOS 23-DIC-2012&quot;; <br /><br />int vel_x;<br />int vel_y;<br /><br />using namespace std;<br /><br />int main&#40; int argc, char *argv[] &#41; <br />{ <br /><br />   SDL_Init&#40; SDL_INIT_VIDEO &#41;; <br />   SDL_WM_SetCaption&#40; TITULO, NULL &#41;; <br />   pantalla = SDL_SetVideoMode&#40;PANTALLA_ANCHO,PANTALLA_ALTO,24,SDL_HWSURFACE&#41;; <br /><br />   srand&#40;time&#40;NULL&#41;&#41;;<br /><br />   pantalla_rect.x = 0;<br />   pantalla_rect.y = 0;<br />   pantalla_rect.w = PANTALLA_ANCHO;<br />   pantalla_rect.h = PANTALLA_ALTO;<br /><br />   PJ.x = 0;<br />   PJ.y = 0;<br />   PJ.w = 50;<br />   PJ.h = 50;<br /><br />   for&#40; int i = 0; i&lt;MAX_ENEMIGOS;i++&#41;<br />   {<br /><br /><br />   enemigo[i].sprite.x = rand&#40;&#41;%801;<br />   enemigo[i].sprite.y = rand&#40;&#41;%601;<br />   enemigo[i].sprite.w = 50;<br />   enemigo[i].sprite.h = 50;<br />   enemigo[i].enemigo_vivo = 1;<br /><br />   }<br /><br />   <br /><br />   while&#40; salir==false&#41; <br />   { <br /><br />      while&#40; SDL_PollEvent&#40; &amp;evento &#41; &#41; <br />        { <br />          <br /> Teclado&#40;&#41;;<br />         if&#40; evento.type == SDL_QUIT &#41;{ salir = true; } <br />         if&#40;evento.key.keysym.sym == SDLK_ESCAPE &#41;{ salir = true;} <br /><br />      } <br /><br />  PJ.x += vel_x; <br />      PJ.y += vel_y; <br /><br />  //if&#40; colision&#40;PJ,enemigo[3] &#41;&#41;{ PJ.x -= vel_x;  PJ.y -= vel_y;  }<br /><br />  for&#40;int i = 0; i&lt;MAX_ENEMIGOS;i++&#41;<br />  {<br /><br />  if&#40;colision&#40;PJ,enemigo[i].sprite&#41;&#41;<br />  {<br />  enemigo[i].enemigo_vivo = 0;<br />  //PJ.x -= vel_x;<br />  //PJ.y -= vel_y;<br />  cout &lt;&lt; &quot;El PJ colisiono con el enemigo # &quot; &lt;&lt; i &lt;&lt; endl;<br />  }<br /><br />  }<br /><br />  <br />      <br />      if&#40;PJ.x&lt;0&#41;PJ.x=0; <br />      if&#40;PJ.x+50&gt;PANTALLA_ANCHO&#41;PJ.x-= vel_x; <br />      if&#40;PJ.y&lt;0&#41;PJ.y=0; <br />      if&#40;PJ.y+50&gt;PANTALLA_ALTO&#41;PJ.y-= vel_y; <br /><br />      SDL_FillRect&#40;pantalla,&amp;pantalla_rect,SDL_MapRGB&#40;pantalla-&gt;format,255,255,255&#41;&#41;; <br />  SDL_FillRect&#40;pantalla,&amp;PJ,SDL_MapRGB&#40;pantalla-&gt;format,92,163,99&#41;&#41;; <br /><br />  for&#40;int i = 0; i&lt;MAX_ENEMIGOS;i++&#41;<br />  {<br />  if&#40;enemigo[i].enemigo_vivo == 1&#41;<br />  {<br />  SDL_FillRect&#40;pantalla,&amp;enemigo[i].sprite,SDL_MapRGB&#40;pantalla-&gt;format,241,80,88&#41;&#41;; <br /><br /><br />  }<br />  }<br />  <br />  SDL_Flip&#40; pantalla &#41;;<br /><br />   } <br /><br />   SDL_Quit &#40;&#41;; <br />   return 0; <br />} <br /><br />void Teclado&#40;&#41;{ <br /><br />if&#40; evento.type == SDL_KEYDOWN &#41; <br />    { <br />        switch&#40; evento.key.keysym.sym &#41; <br />        { <br />case SDLK_UP: vel_y -= VEL_MAX; break; <br />            case SDLK_DOWN: vel_y += VEL_MAX; break; <br />            case SDLK_LEFT: vel_x -= VEL_MAX; break; <br />            case SDLK_RIGHT: vel_x += VEL_MAX; break; <br />      } <br />    } <br />    <br />    else if&#40; evento.type == SDL_KEYUP &#41; <br />    { <br />        switch&#40; evento.key.keysym.sym &#41; <br />        { <br />            case SDLK_UP: vel_y += VEL_MAX; break; <br />            case SDLK_DOWN: vel_y -= VEL_MAX; break; <br />            case SDLK_LEFT: vel_x += VEL_MAX; break; <br />            case SDLK_RIGHT: vel_x -= VEL_MAX; break; <br />      } <br />    } <br /><br />} <br /><br />bool colision&#40; SDL_Rect A, SDL_Rect B &#41; <br />{ <br />    //Lados de los rectangulos <br />    int leftA, leftB; <br />    int rightA, rightB; <br />    int topA, topB; <br />    int bottomA, bottomB; <br /><br />    //Calcular los lados del rectangulo A <br />    leftA = A.x; <br />    rightA = A.x + A.w; <br />    topA = A.y; <br />    bottomA = A.y + A.h; <br /><br />    //calcular los lados del rectangulo B <br />    leftB = B.x; <br />    rightB = B.x + B.w; <br />    topB = B.y; <br />    bottomB = B.y + B.h; <br /><br />    //Si alguno de los lados de A esta fuera de B <br />    if&#40; bottomA &lt;= topB &#41;{ return false; } <br />   if&#40; topA &gt;= bottomB &#41;{ return false; } <br />   if&#40; rightA &lt;= leftB &#41;{ return false; } <br />   if&#40; leftA &gt;= rightB &#41;{ return false; } <br /><br />    //Si ninguno de los lados de A esta fuera de B <br />    return true; <br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2677">blacklotus.938</a> — Dom Dic 23, 2012 3:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blacklotus.938]]></name></author>
<updated>2012-11-04T01:57:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7184#p7184</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7184#p7184"/>
<title type="html"><![CDATA[Re: Eliminar procesos o sprites SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7184#p7184"><![CDATA[
wauuuuu men gracias te lo agredasco mucho , sobre todo por sacar de tu tiempo para hacer este codigo. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  hay unas cosas que no entiendo pero empezare a investigarlas  desde hoy  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" />  , gracias por tu atencion, te lo agradesco mucho personas como tu que ayuden a la gente son las que necesita este mundo. si logro hacer mi propia version de tu codigo lo subire aqui para que todos lo vean gracias men. te avisare si me funciona . estare en contacto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2677">blacklotus.938</a> — Dom Nov 04, 2012 1:57 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-11-03T04:43:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7181#p7181</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7181#p7181"/>
<title type="html"><![CDATA[Re: Eliminar procesos o sprites SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7181#p7181"><![CDATA[
Bien, aquí esta lo que te comentaba de utilizar al máximo las bondades del orientado a objetos y del tipo vector de c++, pero creo que solo tendrás que cambiar la parte en que se incluye la librería SDL.<br /><br />Dudas, pregunta <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br /><pre class="prettyprint">using namespace std;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;stdio.h&gt;<br />#include &lt;iostream&gt;<br />#include &lt;math.h&gt;<br />#include &lt;vector&gt;<br />#include &lt;time.h&gt; //para la semilla aleatoria...<br />/*El tamaño de la ventana...*/<br />#define screenWidth 256<br />#define screenHeight 256<br />/* Defino algunos colores que utilizare */<br />SDL_Color GRIS = {155,155,155};<br />SDL_Color VERDE = {0,255,0};<br />SDL_Color AZUL = {0,0,255};<br />SDL_Color ROJO = {255,0,0};<br />//*<br />/* Primero los prototipos de función, por qué, es una buena practica */<br />//inicializar a SDL<br />SDL_Surface * inicia&#40;int,int,int,const char*,const char*&#41;;<br />//llenar una superficie...<br />void fill&#40;SDL_Surface *, SDL_Color&#41;; //como amo la sobrecarga de operadores <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />void fill&#40;SDL_Surface *, SDL_Color, SDL_Rect&#41;;<br />/******************************************************************************/<br />//Defino las clases de nuestros personajes... primero, un objeto sprite...<br />class Sprite{<br />    SDL_Rect persona;<br />    SDL_Color color;<br />    public:<br />    Sprite&#40;void&#41;{<br />         this-&gt;SetPersona&#40;0,0,32,32&#41;;<br />         this-&gt;SetColor&#40;ROJO&#41;;<br />         this-&gt;SetPos&#40;10,10&#41;;<br />         };<br />    ~Sprite&#40;void&#41;{};<br />    SDL_Rect GetPersona&#40;void&#41;{<br />        return this-&gt;persona;<br />        };<br />    void SetPersona&#40;int px, int py, int pw, int ph&#41;{<br />        this-&gt;persona.x = px;<br />        this-&gt;persona.y = py;<br />        this-&gt;persona.w = pw;<br />        this-&gt;persona.h = ph;<br />        }<br />    void SetColor&#40;SDL_Color color&#41;{<br />        this-&gt;color = color;<br />        }<br />    void SetPos&#40;int px, int py&#41;{<br />        this-&gt;persona.x = px;<br />        this-&gt;persona.y = py;<br />        }<br />    virtual void update&#40;void&#41;{<br />         };<br />    void dibujar&#40;SDL_Surface * pantalla&#41;{<br />         fill&#40;pantalla,this-&gt;color,this-&gt;GetPersona&#40;&#41;&#41;;<br />         };<br />    /**colisión resive un sprite y revisa si choco con el mismo...*/<br />    bool colision&#40;Sprite sprite_a&#41;{<br />        //obtenemos la rects de los sprites...<br />        SDL_Rect a = sprite_a.GetPersona&#40;&#41;;<br />        SDL_Rect b = this-&gt;GetPersona&#40;&#41;;<br />        return &#40;&#40;a.x &lt; b.x + b.w&#41; &amp;&amp; &#40;b.x &lt; a.x + a.w&#41; &amp;&amp; &#40;a.y &lt; b.y + b.h&#41; &amp;&amp; &#40;b.y &lt; a.y + a.h&#41;&#41;;<br />        }<br />    };<br />//ahora defino a los personajes, en este caso... nuestro heroe...<br />class Heroe:public Sprite{<br />    int pos_x, pos_y;<br />    public:<br />    Heroe&#40;void&#41;{<br />         this-&gt;SetPersona&#40;0,0,32,32&#41;;<br />         this-&gt;SetColor&#40;VERDE&#41;;<br />         pos_x=100;<br />         pos_y=100;<br />         this-&gt;SetPos&#40;pos_x,pos_y&#41;;<br />         };<br />    ~Heroe&#40;void&#41;{};<br />    //**Solo definimos el metodo update, dibujar lo heredan de Sprite...<br />    void update&#40;&#41;{<br />         Uint8 *keys;<br />         keys=SDL_GetKeyState&#40;NULL&#41;;<br />         if &#40;keys[SDLK_LEFT] == 1&#41;{<br />             pos_x-=5;<br />             }<br />         else if &#40;keys[SDLK_RIGHT] == 1&#41;{<br />             pos_x+=5;<br />             }<br />         if &#40;keys[SDLK_UP] == 1&#41;{<br />             pos_y-=5;<br />             }<br />         else if &#40;keys[SDLK_DOWN] == 1&#41;{<br />             pos_y+=5;<br />             }<br />         this-&gt;SetPos&#40;pos_x,pos_y&#41;;<br />         }<br />    };<br />//Defino los items...<br />class Item:public Sprite{<br />    int pos_x, pos_y;<br />    int buf, delta;<br />    public:<br />    Item&#40;int x, int y&#41;{<br />         this-&gt;SetColor&#40;AZUL&#41;;<br />         pos_x=x;<br />         pos_y=y;<br />         delta = 1;<br />         buf = 16;<br />         this-&gt;SetPersona&#40;0,0,buf,buf&#41;;<br />         this-&gt;SetPos&#40;pos_x,pos_y&#41;;<br />         };<br />    ~Item&#40;void&#41;{};<br />    void update&#40;&#41;{<br />         if &#40;buf &gt; 20 || buf &lt; 16 &#41;{<br />             delta = -delta;<br />             }<br />         buf += delta;<br />         this-&gt;SetPersona&#40;0,0,buf,buf&#41;;<br />         this-&gt;SetPos&#40;pos_x,pos_y&#41;;<br />         }<br />    };<br />/******************************************************************************/<br />//La función principal...<br />/******************************************************************************/<br />int main&#40; int argc, char *argv[] &#41;{<br />    SDL_Surface *screen;<br />    screen = inicia&#40;screenWidth,screenHeight,0,&quot;Manejo sprites&quot;,&quot;Nullo&quot;&#41;;<br />    //defino variables para manejar el tiempo...<br />    Uint32 waittime = 1000/30; // fijo a 30 fps<br />    Uint32 framestarttime = 0;<br />    Sint32 delaytime;<br />    //defino las variables para la entrada...<br />    Uint8 *keys;<br />    SDL_Event event;<br /><br />    //defino al heroe...<br />    Heroe heroe = Heroe&#40;&#41;;<br />    <br />    //creo los grupos<br />    //*definimos un vector que contendra Items...<br />    vector&lt;Item&gt; GItems;<br />    //* y un que contendra nuestro heroe...<br />    vector&lt;Heroe&gt; GHeroe;<br />    <br />    GHeroe.push_back&#40;heroe&#41;;<br />    //creo 5 items y los agrego a la lista...<br />    int i;<br />    srand &#40; time&#40;NULL&#41; &#41;;<br />    for&#40;i=0;i&lt;10;i++&#41;{<br />        //colocamos los items de manera aleatoria...<br />        Item it&#40;Item&#40;10+&#40;rand&#40;&#41;%screenHeight-20&#41;, //pos en x<br />                       10+&#40;rand&#40;&#41;%screenHeight-20&#41;&#41;&#41;; // pos en y<br />        GItems.push_back&#40;it&#41;;<br />        }<br />    // una variable que sostiene el bucle...<br />    bool jugar = 1;<br />    while&#40;jugar&#41;{<br />        //lo siguiente mantiene el framerate constante...<br />        delaytime = waittime - &#40;SDL_GetTicks&#40;&#41; - framestarttime&#41;;<br />        if&#40;delaytime &gt; 0&#41;{<br />            SDL_Delay&#40;&#40;Uint32&#41;delaytime&#41;;}<br />        framestarttime = SDL_GetTicks&#40;&#41;;<br />        fill&#40;screen,GRIS&#41;;<br />        <br />        //dibujo todos los objetos contenidos en el grupo GItems...<br />        for&#40;i=0;i&lt;GItems.size&#40;&#41;;i++&#41;{<br />            GItems[i].update&#40;&#41;;<br />            GItems[i].dibujar&#40;screen&#41;;<br />            //si hay una colisión con el heroe, removemos el item de la lista...<br />            if &#40;GItems[i].colision&#40;heroe&#41;&#41;{<br />                cout &lt;&lt; &quot;colision con item &quot; &lt;&lt; endl;<br />                GItems.erase&#40;GItems.begin&#40;&#41;+i&#41;;<br />                }<br />            }<br />        /*<br />        actualizamos y dibujamos al heroe....<br />        */<br />        heroe.dibujar&#40;screen&#41;;<br />        heroe.update&#40;&#41;;<br />        <br />        SDL_Flip&#40;screen&#41;;<br />        //y esto revisa los eventos de las teclas y eventos<br />        keys=SDL_GetKeyState&#40;NULL&#41;;<br />        while &#40; SDL_PollEvent&#40;&amp;event&#41; &#41; {<br />            //si se presiona la tecla escape, o hay un evento de cierre...<br />            if &#40; &#40;event.type == SDL_KEYDOWN &amp;&amp; keys[SDLK_ESCAPE] == 1&#41; || &#40;event.type == SDL_QUIT&#41; &#41;{<br />                jugar = 0; //cerrara el programa<br />                }<br />            }<br />        //termina el bucle de juego...<br />        }<br />    //limpiamos la casa...<br />    SDL_Quit&#40;&#41;;<br />    //...salimos.<br />    return 0;<br />    };<br />/******************************************************************************/<br />/**<br />    Las funciones las suelo declarar después del main....<br />**/<br />/******************************************************************************/<br />SDL_Surface * inicia&#40;int W, int H,int Full, const char *title,const char *ico&#41;{<br />    // Iniciar SDL<br />    SDL_Surface *temp;<br />    if &#40;SDL_Init&#40;SDL_INIT_VIDEO&#41; &lt; 0&#41; {<br />        exit&#40;1&#41;;<br />        }<br />    // Activamos modo de video<br />    if&#40;Full&#41;{ }<br />    else{<br />        temp = SDL_SetVideoMode&#40;W,H,32,SDL_HWSURFACE&#41;;<br />        if &#40;temp == NULL&#41; {<br />            exit&#40;1&#41;;<br />            }<br />        }<br />    SDL_WM_SetCaption&#40;title, ico&#41;;<br />    return temp;<br />    }<br />//------<br />void fill&#40;SDL_Surface * surf, SDL_Color color&#41; {<br />    //cout &lt;&lt; &quot;&gt;&gt; La imagen se llena de color &quot; &lt;&lt; surf-&gt;w &lt;&lt; endl;<br />    SDL_Rect Rect = {0,0,surf-&gt;w,surf-&gt;h};<br />    SDL_FillRect&#40;surf, &amp;Rect, SDL_MapRGBA&#40;surf-&gt;format,color.r,color.g,color.b,255&#41; &#41;;<br />    };<br />void fill&#40;SDL_Surface * surf, SDL_Color color, SDL_Rect rect&#41;{<br />    SDL_FillRect&#40;surf, &amp;rect, SDL_MapRGBA&#40;surf-&gt;format,color.r,color.g,color.b,255&#41; &#41;;<br />    };<br />//------</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Nov 03, 2012 4:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blacklotus.938]]></name></author>
<updated>2012-10-31T22:37:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7178#p7178</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7178#p7178"/>
<title type="html"><![CDATA[Re: Eliminar procesos o sprites SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7178#p7178"><![CDATA[
O_o gracias.por tu ayuda colega <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> voy ha intentar hacer lo que pusiste aqui, pero estoy dispuesto a esperar a que me dejes un ejemplo practico  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> . si logro hacer que funcione lo que me dices entoces publicare el codigo aqui en el foro. gracias¡¡¡ <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2677">blacklotus.938</a> — Mié Oct 31, 2012 10:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-10-31T21:16:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7177#p7177</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7177#p7177"/>
<title type="html"><![CDATA[Re: Eliminar procesos o sprites SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7177#p7177"><![CDATA[
Hay dos forma de hacer que el objeto &quot;desaparezca&quot;. <br /><br />Imagina que los sprites están contenidos en una lista especifica. Una lista para items como monedas, una lista para enemigos, y una para el personaje-personajes.<br /><br />Lo que se suele hacer es que cuando digamos, un personaje colisione con item, es retirar ese item de las listas en las que esta contenido, o dejar de llamar a sus metodos. En pseudo código esto serie algo como esto:<br /><br /><pre class="prettyprint">Creo lista de items<br />Creo lista del heroe.<br />Mientras jugar:<br />    if heroe choca con items:<br />        ver con que item esta chocando.<br />        contador_items += valor_del_item.<br />        retirar item de la lista.<br />    dibujar todo lo que esta en la lista items<br />    actualizar todo lo que esta en la lista items //esto puede ser su animación o movimiento<br />    dibujar todo lo que esta en la lista del heroe // que es el heroe<br />    actualizar al heroe<br />    ...</pre> <br /><br />La segunda forma es asumiendo que es un objeto y que cuando lo tocas, lo borras de la faz de la tierra, pero esto no es recomendable...<br /><br />Además, no te preocupes por la implementación de la lista, en c++ existe el tipo de dato &quot;vector&quot; y te hace la vida mucho mas fácil, solo búscalo en google. <br /><br />Y recuerda, estas usando c++, aprovecha las clases y las ventajas del orientado a objetos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />. Mira cada sprite como un objeto con métodos dibujar y actualizar. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br />Te complicas mucho las colisiones, me gusta más esta función para ver colisiones entre dos rects en SDL, es menos intuitiva a primera vista, pero mas corta y rápida.<br /><br /><pre class="prettyprint">//regresa verdadero si existe una colisión entre dos rects <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br />int colision&#40;SDL_Rect rect_a,SDL_Rect rect_b&#41;{<br />    return &#40;<br />        &#40;rect_a.x &lt; rect_b.x + rect_ b.w&#41; &amp;&amp;<br />        &#40;rect_b.x &lt; rect_a.x + rect_a.w&#41; &amp;&amp;<br />        &#40;rect_a.y &lt; rect_b.y + rect_b.h&#41; &amp;&amp;<br />        &#40;rect_b.y &lt; rect_a.y + rect_a.h&#41;&#41;;<br />    };</pre><br /><br />De hecho si me esperas podría darte un ejemplo practico de como se hace, pero ahora no tengo mucho tiempo jeje.<br /><br />Espero que te sea útil.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Oct 31, 2012 9:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blacklotus.938]]></name></author>
<updated>2012-10-31T14:40:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7176#p7176</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7176#p7176"/>
<title type="html"><![CDATA[Eliminar procesos o sprites SDL C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1568&amp;p=7176#p7176"><![CDATA[
Hola colegas,soy nuevo en este foro me acabo de registrar hoy ,espero que puedan ayudarme con mi problemita. Hace un mes que empeze a programar con sdl y hacia programas (no puedo decir que son juegos si no tienen todas las caracteristicas para llamarlo asi). En este hay un sprite (cuadrado gris) que colisiona con un rectangulo negro,lo que quiero hacer es que cuando el sprite colisione con el rectangulo el sprite desaparesca.Un ejemplo de esto es el clasico mario bros, que cuando mario salta para coger una moneda ,el hud que indica cuantas monedas llevo se incrementa dependiendo el numero de monedas que coja mario y luego las monedas desaparecen.Lo que quiero hacer es que el objeto que valla a coger desaparesca al momento de ser tocado por el sprite. he intentando buscar algo sobre esto pero  no he encontrado nada y tampoco tengo ni idea de como hacer esto. Si hay alguien que sepa como hacer esto por favor que me de un ejemplo o alguna pagina en donde pueda encontrar esto, aqui les dejo un codigo fuente traducido en español basado en los tutoriales de un colega gringo :<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code><br />#include &lt;stdio.h&gt;<br />#include &lt;iostream&gt;<br />#include &lt;SDL.h&gt;<br /><br />void teclado();<br />bool colision( SDL_Rect A, SDL_Rect B );<br /><br />SDL_Surface *pantalla;<br /><br />SDL_Rect rectangulo_1;<br />SDL_Rect rectangulo_2;<br />SDL_Rect pantalla_r;<br /><br />SDL_Event evento;<br /><br />bool salir = false;<br />char TITULO&#91;&#93;=&quot;PROGRAMA DE MANEJO DE PROCESOS 30-OCT-2012&quot;;<br />int vel_x;<br />int vel_y;<br />int vel = 3;<br /><br />const int PANTALLA_ALTO = 800;<br />const int PANTALLA_ANCHO = 600;<br /><br />int main( int argc, char *argv&#91;&#93; )<br />{<br /><br />   SDL_Init( SDL_INIT_VIDEO );<br />   SDL_WM_SetCaption( TITULO, NULL );<br />   pantalla = SDL_SetVideoMode(PANTALLA_ALTO,PANTALLA_ANCHO,24,SDL_HWSURFACE);<br /><br />   rectangulo_1.x = 0;<br />   rectangulo_1.y = 0;<br />   rectangulo_1.w = 50;<br />   rectangulo_1.h = 50;<br /><br />   rectangulo_2.x = 350;<br />   rectangulo_2.y = 300;<br />   rectangulo_2.w = 300;<br />   rectangulo_2.h = 50;<br /><br />   pantalla_r.x = 0;<br />   pantalla_r.y = 0;<br />   pantalla_r.w = pantalla-&gt;w;<br />   pantalla_r.h = pantalla-&gt;h;<br /><br /><br /><br />   while( salir==false)<br />   {<br /><br />      while( SDL_PollEvent( &amp;evento ) )<br />        {<br />         <br />         teclado();<br />         if( evento.type == SDL_QUIT ){ salir = true; }<br />         if(evento.key.keysym.sym == SDLK_ESCAPE ){ salir = true;}<br /><br />      }<br /><br />      rectangulo_1.x += vel_x;<br />      rectangulo_1.y += vel_y;<br /><br />      if ( colision( rectangulo_1, rectangulo_2 ) ){ rectangulo_1.x -= vel_x; rectangulo_1.y -= vel_y; }<br />      if(rectangulo_1.x&lt;0)rectangulo_1.x=0;<br />      if(rectangulo_1.x+50&gt;PANTALLA_ALTO)rectangulo_1.x-= vel_x;<br />      if(rectangulo_1.y&lt;0)rectangulo_1.y=0;<br />      if(rectangulo_1.y+50&gt;PANTALLA_ANCHO)rectangulo_1.y-= vel_y;<br /><br />      SDL_FillRect(pantalla,&amp;pantalla_r,SDL_MapRGB(pantalla-&gt;format,255,255,255));<br />      SDL_FillRect(pantalla,&amp;rectangulo_1,SDL_MapRGB(pantalla-&gt;format,128,128,128));<br />      SDL_FillRect(pantalla,&amp;rectangulo_2,SDL_MapRGB(pantalla-&gt;format,60,60,60));<br />      SDL_Flip(pantalla);<br /><br /><br />   }<br /><br />   SDL_Quit ();<br />   return 0;<br />}<br /><br />void teclado(){<br /><br />if( evento.type == SDL_KEYDOWN )<br />    {<br />        switch( evento.key.keysym.sym )<br />        {<br />            case SDLK_UP: vel_y -= vel; break;<br />            case SDLK_DOWN: vel_y += vel; break;<br />            case SDLK_LEFT: vel_x -= vel; break;<br />            case SDLK_RIGHT: vel_x += vel; break;<br />      }<br />    }<br />    <br />    else if( evento.type == SDL_KEYUP )<br />    {<br />        switch( evento.key.keysym.sym )<br />        {<br />            case SDLK_UP: vel_y += vel; break;<br />            case SDLK_DOWN: vel_y -= vel; break;<br />            case SDLK_LEFT: vel_x += vel; break;<br />            case SDLK_RIGHT: vel_x -= vel; break;<br />      }<br />    }<br /><br />}<br /><br />bool colision( SDL_Rect A, SDL_Rect B )<br />{<br />    //Lados de los rectangulos<br />    int leftA, leftB;<br />    int rightA, rightB;<br />    int topA, topB;<br />    int bottomA, bottomB;<br /><br />    //Calcular los lados del rectangulo A<br />    leftA = A.x;<br />    rightA = A.x + A.w;<br />    topA = A.y;<br />    bottomA = A.y + A.h;<br /><br />    //calcular los lados del rectangulo B<br />    leftB = B.x;<br />    rightB = B.x + B.w;<br />    topB = B.y;<br />    bottomB = B.y + B.h;<br /><br />    //Si alguno de los lados de A esta fuera de B<br />    if( bottomA &lt;= topB ){ return false; }<br />   if( topA &gt;= bottomB ){ return false; }<br />   if( rightA &lt;= leftB ){ return false; }<br />   if( leftA &gt;= rightB ){ return false; }<br /><br />    //Si ninguno de los lados de A esta fuera de B<br />    return true;<br />}<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2677">blacklotus.938</a> — Mié Oct 31, 2012 2:40 pm</p><hr />
]]></content>
</entry>
</feed>