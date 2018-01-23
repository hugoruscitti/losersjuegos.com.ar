<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=580" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-23T22:39:52+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=580</id>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-07-23T22:39:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2806#p2806</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2806#p2806"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2806#p2806"><![CDATA[
Digamos que tenemos 3 vectores de la clase Vector y queremos hacer lo siguiente:<br /><dl class="codebox"><dt>Code: </dt><dd><code>v1 = v2 + v3</code></dd></dl><br />Sin embargo, en vez de operadores queremos usar funciones:<br /><br />Una opcion seria crear una funcion algo asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>Vector sumar&#40; Vector, Vector &#41;</code></dd></dl><br />y entonces obtendriamos:<br /><dl class="codebox"><dt>Code: </dt><dd><code>v1 = sumar&#40;v2, v3&#41;</code></dd></dl><br />Otra opcion, ya que estamos usando un lenguaje orientado a objetos es usar un metodo llamado &quot;sumar&quot; dentro de la clase Vector, resultando en:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class Vector &#123;<br />           ...<br />           Vector sumar&#40;Vector&#41;<br />           ...<br />&#125;</code></dd></dl><br />y luego:<br /><dl class="codebox"><dt>Code: </dt><dd><code>v1 = v2.sumar&#40;v3&#41;</code></dd></dl><br />Cual es la diferencia o cual es la correcta? Trabajando con un paradigma orientado a objetos, la opcion correcta es la segunda.<br />Pero entonces, por que existe la primera opcion, la de usar una funcion?<br /><br />Para atrapar el concepto, te propongo el siguiente ejemplo: se quiere realizar lo siguiente<br /><dl class="codebox"><dt>Code: </dt><dd><code>v1 = v2 * 3</code></dd></dl><br />Dado que estamos con objetos, deberiamos usar metodos. Entonces, dentro de la clase Vector ponemos:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class Vector &#123;<br />           ...<br />           Vector multiplicar&#40;int&#41;<br />           ...<br />&#125;</code></dd></dl><br />Entonces resulta en:<br /><dl class="codebox"><dt>Code: </dt><dd><code>v1 = v2.multiplicar&#40;3&#41;</code></dd></dl><br />Joya! Pero que pasa si quiero realizar lo siguiente:<br /><dl class="codebox"><dt>Code: </dt><dd><code>v1 = 3 * v2</code></dd></dl><br />Ups! El numero 3 es un int y no puedo agregarle un metodo &quot;multiplicar&quot; al numero 3!<br />Debido a este problema, C++ permite complementar la sobrecarga usando funciones auxiliares fuera de la clase Vector. O sea, deberemos crear una funcion:<br /><dl class="codebox"><dt>Code: </dt><dd><code>Vector multiplicar&#40;int, Vector&#41;</code></dd></dl><br />y ahora si se puede multiplicar<br /><dl class="codebox"><dt>Code: </dt><dd><code>v1 = multiplicar&#40;3, v2&#41;</code></dd></dl><br />Es por eso que C++ ofrece ambos mecanismos.<br /><br />Para simplificar el ejemplo, use nombres como &quot;sumar&quot; y &quot;multiplicar&quot;, pero el ejemplo tiene una traduccion inmediata a la sintaxis propia de C++, o sea operator+ y operator*.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Jue Jul 23, 2009 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-23T15:43:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2805#p2805</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2805#p2805"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2805#p2805"><![CDATA[
buenas:<br /><br />Estoy realizando un miniejemplo de billar para aclararme algunas cosas sobre sobrecarga de operadores.<br /><br />Investigando por ahí, he visto que algunos hacen:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> Vector2D&amp; operator + &#40;const Vector2D&amp; rightHandOperator&#41;</code></dd></dl><br /><br />y otros hacen:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Vector2D operator + &#40;const Vector2D&amp; leftHandOperator, const Vector2D&amp; rightHandOperator&#41;</code></dd></dl><br /><br />Yo creo que el primero es para sentencias del estilo vector1 = vector1 + vector2 y el segundo tiene pinta de ser más para sentencias del estilo vector1 = vector2 + vector3.<br /><br />¿Estoy en lo cierto? Esque cada uno lo hace de una manera distinta.<br /><br />Gracias por la ayuda<br /><br />Juanxo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jul 23, 2009 3:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-07-22T05:21:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2804#p2804</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2804#p2804"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2804#p2804"><![CDATA[
Estas dos son equivalentes:<br /><dl class="codebox"><dt>Code: </dt><dd><code>bool init&#40;SDL_Surface** screen, int screen_width, int screen_height, int bpp, Uint32 flags&#41;;<br />bool init&#40;SDL_Surface* &amp;screen, int screen_width, int screen_height, int bpp, Uint32 flags&#41;;<br /></code></dd></dl><br />La segunda te permite &quot;olvidarte&quot; un poco de la sintaxis de punteros y usar screen dentro del código sin tener que desreferenciarla.<br />El otro problema, ya lo explicó endaramiz <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Jul 22, 2009 5:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-21T09:56:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2796#p2796</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2796#p2796"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2796#p2796"><![CDATA[
gracias endaramiz.<br />Yo lo tenía (SDL_Surface* &amp;screen) pasado por referencia creo, el tema es que eso de ver * y &amp; juntos, me tiraba para atrás.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Jul 21, 2009 9:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-07-21T09:30:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2792#p2792</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2792#p2792"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2792#p2792"><![CDATA[
El puntero es &quot;una variable&quot; que contiene una dirección. Como ya sabrás, por defecto los parámetros en C son por copia (la función trabaja con una copia de lo que le entra como parámetro).<br />Cuando haces &quot;screen = SDL_SetVideoM...&quot; lo que estás haciendo es que &quot;la variable&quot; screen (que es una copia de la screen del main) pase a tener la dirección de la pantalla de SDL.<br /><br />Seguramente lo que te ha confundido es que si modificas la dirección a la que apunta el puntero, no tienes ningún problema. Ya que lo que haces es modificar directamente la memoria, no una copia de una variable. Ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />using namespace std;<br /><br />void f&#40;int* n&#41; &#123;<br />    *n = 5; //modifica la memoria<br />&#125;<br /><br />int main&#40;&#41; &#123;<br />    int a = 1;<br />    int* b = &amp;a;<br />    cout &lt;&lt; *b &lt;&lt; endl;<br />    f&#40;b&#41;;<br />    cout &lt;&lt; *b &lt;&lt; endl;<br />&#125;</code></dd></dl><br /><br />Sin embargo, lo que tú haces (que no funciona) es algo así:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />using namespace std;<br /><br />void f&#40;int* n&#41; &#123;<br />    int c = 5;<br />    n = &amp;c; //modifica la copia de &quot;la variable&quot; que le pasas como parametro<br />&#125;<br /><br />int main&#40;&#41; &#123;<br />    int a = 1;<br />    int* b = &amp;a;<br />    cout &lt;&lt; *b &lt;&lt; endl;<br />    f&#40;b&#41;;<br />    cout &lt;&lt; *b &lt;&lt; endl;<br />&#125;</code></dd></dl> Aunque se arregla simplemente pasando el puntero por referencia (&amp;). Mejor que con los dobles punteros (que son obligados en C), ya que el C++ te permite el paso por referencia. No lo desperdicies. <br /><br />Saludos y espero haberte ayudado ya que con lo de que el tema es un poco lioso y yo que no me explico muy bien...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Jul 21, 2009 9:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-07-20T19:18:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2791#p2791</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2791#p2791"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2791#p2791"><![CDATA[
Aprovecho este tema para postear otra duda y no llenar el foro de temas para pequeñas dudas:<br /><br />Estoy creando una función para que inicie SDL y no tener que escribirla cada vez. Pongo el código y luego comento mi duda:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;SDL/SDL.h&quot;<br />#include &quot;SDL/SDL_image.h&quot;<br />#include &quot;SDL/SDL_ttf.h&quot;<br />#include &lt;iostream&gt;<br /><br />bool init&#40;SDL_Surface** screen, int screen_width, int screen_height, int bpp, Uint32 flags&#41;<br />&#123;<br />    if&#40;SDL_Init&#40;SDL_INIT_VIDEO | SDL_INIT_TIMER | SDL_INIT_AUDIO&#41; == -1&#41;<br />    &#123;<br />        fprintf&#40;stderr, &quot;Unable to load SDL Systems: %s&quot;, SDL_GetError&#40;&#41;&#41;;<br />        return false;<br />    &#125;<br /><br />    atexit&#40;SDL_Quit&#41;;<br /><br />    if&#40;TTF_Init&#40;&#41; == -1&#41;<br />    &#123;<br />        fprintf&#40;stderr, &quot;Unable to load TTF System: %s&quot;, SDL_GetError&#40;&#41;&#41;;<br />        return false;<br />    &#125;<br />    atexit&#40;TTF_Quit&#41;;<br /><br />    *screen = SDL_SetVideoMode&#40;screen_width, screen_height, bpp, flags&#41;;<br />    if &#40;screen == NULL&#41;<br />    &#123;<br />        fprintf&#40;stderr, &quot;Unable to set the video mode: %s&quot;, SDL_GetError&#40;&#41;&#41;;<br />        return false;<br />    &#125;<br /><br />    return true;<br />&#125;<br /><br />int main&#40;int argc, char** argv&#41;<br />&#123;<br />    SDL_Surface* screen = NULL;<br />    SDL_Rect rect;<br />    SDL_Surface* image;<br />    SDL_Event event;<br /><br />    if &#40;init&#40;&amp;screen, 640, 480, 32, SDL_SWSURFACE | SDL_DOUBLEBUF&#41;&#41;<br /><br />...</code></dd></dl><br /><br />Mi duda es con respecto a screen en la función init.<br />si declaro el parámetro como SDL_Surface* screen y hago screen = SDL_SetVideo....... fuera de la función me dice que es NULL. No lo entiendo porque es un puntero.<br />Si hago la que esta puesta o pasando el parámetro como SDL_Surface* &amp;screen, es decir, pasando el parámetro como referencia, no me da ningún problema fuera de la función.<br /><br />¿Es correcta la forma? (mas bien, ¿es la mejor?). ¿En caso negativo, cual sería la correcta? ¿Por qué no funciona con SDL_Surface* screen?<br /><br />Gracias de antemano<br />Juanxo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Jul 20, 2009 7:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-24T12:22:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2636#p2636</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2636#p2636"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2636#p2636"><![CDATA[
Muchas gracias Geo.<br /><br />El problema era el que tu comentabas, que al parecer el compilador estaba viendo clases por todos los lados.<br /><br />He puesto esas directivas y ya funciona correctamente<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Jun 24, 2009 12:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-06-24T02:49:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2635#p2635</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2635#p2635"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2635#p2635"><![CDATA[
No hay ninguna diferencia entre las dos declaraciones que comentas, se trata más bien de cuestión de &quot;estilo&quot;.<br /><br />Hay quien argumenta que el * junto al nombre de la variable te deja ver claramente que se trata de una &quot;variable de tipo puntero&quot;, para otros les parece adecuado el * junto a tipo pues se expresa más claramente que se trata de &quot;un puntero a tipo&quot;, en fin, es lo mismo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br />Sobre lo segundo, por supuesto que es perfectamente posible definir clases en diferentes archivos, en todo caso el problema se deberá a otro detalle, si puedes poner el código para observarlo mejor <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br />Lo que por el momento se me ocurre es que estés incluyendo más de una vez la definición de la clase padre en el código, no que la clase hija sea una redefinición, sino que has colocado en el código nuevamente la declaración de la clase padre al hacer el #include &quot;padre.h&quot;.<br />Si este es el caso, para evitarlo, en el .h de la clase padre pon algo como esto al inicio:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#ifndef PADRE<br />#define PADRE</code></dd></dl><br /><br />y esto al final:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#endif</code></dd></dl><br />Esto es necesario para cada archivo en que realices definiciones de clases (.h), pues la instrucción #include lo que hace es insertar en el código el archivo que se le indica, por lo que si no se evita, con cada #include &quot;padre.h&quot; incluirías el código dentro del archivo padre.h. Lo que se hace es definir una macro (PADRE) al momento de incluir por primera vez el código, cuando en algún momento se haga una nueva referencia al código, al estar ya definida la macro, el código no se incluirá nuevamente.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié Jun 24, 2009 2:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-23T23:54:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2634#p2634</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2634#p2634"/>
<title type="html"><![CDATA[Duda en C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=580&amp;p=2634#p2634"><![CDATA[
Hola a todos. Estoy haciendome un ejemplillo de un pong, en el que estoy aplicando algunos conceptos de polimorfismo y herencia para comprenderlos un poco mejor.<br /><br />Mi duda es simplemente si hay alguna diferencia entre estas dos declaraciones:<br /><br />tipo* variable<br />tipo  *variable<br /><br />EDITO: Tengo otra duda.<br />Alguien sabe si se puede crear una clase padre y una clase hijo en dos archivos diferentes.<br />El caso es que yo creo la clase Stick con su .h y su .cpp, creo la clase Enemy, que deriva de Stick (class Enemy : public Stick), incluyo el .h de Stick y me dice que estoy redefiniendo una clase Stick.<br /><br />Un saludo y Gracias<br />Juanxo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Jun 23, 2009 11:54 pm</p><hr />
]]></content>
</entry>
</feed>