<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1507" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-07T05:11:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1507</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2012-07-07T05:11:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6903#p6903</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6903#p6903"/>
<title type="html"><![CDATA[Re: Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6903#p6903"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br />Solo una duda de estilo...<br />¿Que tan recomendable es hacer funciones &quot;in line&quot;?<br /></div></blockquote><br /><br />Lo dejare un poco a tu criterio explicandote para que sirve por si no lo sabes. Cuando a una funcion le pones in line lo que hace el compilador es poner el codigo en donde la llamaste, es decir copia el código en el lugar donde llamaste a la función. Entonces si tu funcion es grande no vale la pena usarlo, por que el programa se hara mas grande, por lo general se usa en funciones chicas, sin embargo han sido pocas las veces en donde he visto que se use, se usa con mas frecuencia las macros.<br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Jul 07, 2012 5:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-06T06:14:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6902#p6902</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6902#p6902"/>
<title type="html"><![CDATA[Re: Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6902#p6902"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />y la salida es la misma. Saludos<br /></div></blockquote><br /><br />Sí, también me he dado cuenta de eso <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br /><blockquote><div><cite>kingwar escribió:</cite><br /><blockquote class="uncited"><div>Sé que no es posible tener como atributo de una clase a otra clase, pero también si se puede tener como atributo un apuntador a clase, así que se me ocurrió esto...<br /></div></blockquote><br /><br />¿Cómo que no se puede tener como miembro una clase? ¡Claro que sí! en C++ como ya te dijo carlostex todo es una clase... </div></blockquote><br /><br /><img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> bueno, como me había dado error asumí eso (mea culpa, mea culpa ) <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> . <br /><br /><blockquote><div><cite>kingwar escribió:</cite><br />Quítale los paréntesis, esto <span style="font-weight: bold">no es python</span>. Pónselos solo cuando le pases argumentos al constructor.<br /></div></blockquote><br /><br />Apenas llevo unos días con C++ y me estoy acostumbrando a un par de cosas con su orientado a objetos jeje, y es algo difícil olvidar las costumbres de python (y más si en apariencia no causan ningún conflicto XD )<br /><br />Tomare en cuenta sus observaciones para la escritura de mi código en C++.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Solo una duda de estilo...<br />¿Que tan recomendable es hacer funciones &quot;in line&quot;?<br /><br />Muchas gracias. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Jul 06, 2012 6:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kingwar]]></name></author>
<updated>2012-07-06T02:21:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6901#p6901</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6901#p6901"/>
<title type="html"><![CDATA[Re: Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6901#p6901"><![CDATA[
Voy citando y comentando <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br /><br /><blockquote class="uncited"><div><br />Sé que no es posible tener como atributo de una clase a otra clase, pero también si se puede tener como atributo un apuntador a clase, así que se me ocurrió esto...<br /></div></blockquote><br /><br />¿Cómo que no se puede tener como miembro una clase? ¡Claro que sí! en C++ como ya te dijo <span style="font-weight: bold">carlostex</span> todo es una clase... <br /><br />Ejemplo:<br /><br /><pre class="prettyprint">#include &lt;cstdlib&gt;<br />#include &lt;iostream&gt;<br /><br />using namespace std;<br /><br />class Libro{<br />      public:<br />          void mostrar&#40;&#41;{<br />              cout &lt;&lt; &quot;Soy un libro =&#41;!!!&quot;&lt;&lt;endl;<br />          }<br />};<br /><br />class Contenedora{<br />      public:<br />         void mostrar_libro&#40;&#41;{<br />              calculo.mostrar&#40;&#41;;<br />          }<br />      private:<br />          Libro calculo;<br />};<br /><br />int main&#40;int argc, char *argv[]&#41;<br />{<br />    Contenedora stant;<br />    stant.mostrar_libro&#40;&#41;;<br />    <br />    system&#40;&quot;PAUSE&quot;&#41;;<br />    return EXIT_SUCCESS;<br />}</pre><br /><br />Cuando declaras una clase como atributo de otra se hace sin argumentos...<br />(...)<br /><span style="font-weight: bold">public:</span><br />claseAtributo objeto;<br />(...)<br /><br />Así el constructor de la clase necesite argumentos no se ponen ahí...<br />Para inicializar el objeto con sus respectivos argumentos, se hace en el constructor de la clase que lo contiene, de esta manera:<br /><br />(...)<br />NombreClase<span style="font-weight: bold">::</span>NombreClase(Argumentos)<span style="font-weight: bold">:</span><br />    objeto(Argumento1,Argumento2,...,ArgumentoN) , otroObjeto(Argumento1,Argumento2,...,ArgumentoN){<br />    <br />    Inicializaciones de la clase contenedor<br />}<br />(...)<br /><blockquote class="uncited"><div><br />class Clase_2{<br />    Clase_1 * ejemp;<br />    public:<br />    Clase_2(){<br />        //inicializo el atributo ejemp, que es una clase<br />        ejemp = new Clase_1();<br />        };<br /></div></blockquote><br /><br />Quítale los paréntesis, esto <span style="font-weight: bold">no es python</span>. Pónselos solo cuando le pases argumentos al constructor.<br />Otra cosa... siempre cuando creas algo con el operador <span style="font-weight: bold">new</span> , debes borrar la memoria asignada con <span style="font-weight: bold">delete</span>, si llamas <span style="font-weight: bold">n</span> veces a <span style="font-weight: bold">new </span>llama <span style="font-weight: bold">n</span> veces a <span style="font-weight: bold">delete</span>.<br /><br /><blockquote class="uncited"><div><br />class Clase_2{<br />        Clase_1 ejemp;<br />        public:<br />        Clase_2(){<br />            //inicializo el atributo ejemp, que es una clase<br />            this-&gt;ejemp = Clase_1();<br />            };<br />        ~Clase_2(){};<br /></div></blockquote><br /><br />Si ya le reservaste memoria para que haces:<br /><pre class="prettyprint">this-&gt;ejemp = Clase_1&#40;&#41;;</pre> //Error logico, ya <span style="font-weight: bold">ejemp </span>estaba referenciado a una instancia<br />Si lo que querías es pasarles argumentos al constructor ya te dije como hacerlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2414">kingwar</a> — Vie Jul 06, 2012 2:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2012-07-06T02:19:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6900#p6900</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6900#p6900"/>
<title type="html"><![CDATA[Re: Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6900#p6900"><![CDATA[
Te pongo dos ejemplos que probe:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include&lt;iostream&gt;<br /><br />using namespace std;<br /><br />class Clase_1<br />{<br />   int a;<br />   public:<br />   Clase_1(int _a):a(_a){}<br />   Clase_1(){}<br />   void funcion_algo()<br />   {<br />      cout&lt;&lt;&quot;Funcion algo &quot;&lt;&lt;a&lt;&lt;endl;<br />      <br />   }<br />   <br />   <br />   <br />};<br />class Clase_2{<br />   <br />            Clase_1 ejemp;<br />            public:<br />            Clase_2(){<br />                //inicializo el atributo ejemp, que es una clase<br />                this-&gt;ejemp = Clase_1(10);<br />                }<br />            ~Clase_2(){};<br />            void funcion_algo(void){<br />                //llamo a un método proio de la Clase_1 que es atributo<br />                //que es atributo de la Clase_2, de esta manera<br />                this-&gt;ejemp.funcion_algo();<br />                }<br />};<br />            <br />int main()<br />{<br />   <br />   Clase_2 a;<br />   <br />   a.funcion_algo();<br />   <br />}</code></dd></dl><br /><br />La salida es: Funcion algo 10<br /><br />y aqui usando los apuntadores:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include&lt;iostream&gt;<br /><br />using namespace std;<br /><br />class Clase_1<br />{<br />   int a;<br />   public:<br />   Clase_1(int _a):a(_a){}<br />   Clase_1(){}<br />   void funcion_algo()<br />   {<br />      cout&lt;&lt;&quot;Funcion algo &quot;&lt;&lt;a&lt;&lt;endl;<br />      <br />   }<br />   <br />   <br />   <br />};<br />class Clase_2{<br />   <br />            Clase_1 *ejemp;<br />            public:<br />            Clase_2(){<br />                //inicializo el atributo ejemp, que es una clase<br />                this-&gt;ejemp = new Clase_1(10);<br />                }<br />            ~Clase_2(){};<br />            void funcion_algo(void){<br />                //llamo a un método proio de la Clase_1 que es atributo<br />                //que es atributo de la Clase_2, de esta manera<br />                this-&gt;ejemp-&gt;funcion_algo();<br />                }<br />};<br />            <br />int main()<br />{<br />   <br />   Clase_2 a;<br />   <br />   a.funcion_algo();<br />   </code></dd></dl><br /><br />y la salida es la misma. Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Jul 06, 2012 2:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-06T00:33:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6899#p6899</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6899#p6899"/>
<title type="html"><![CDATA[Re: Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6899#p6899"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />Me gustaria ver un ejemplo donde esto no funciona, por que no debería tener ni un problema, en C++ todo es una clase: int, char etc. entonces perfectamente puedes usar apuntadores a esas clases, creo que el error esta aquí: ejemp = new Clase_1();<br />Por que cuando el constructor no tiene parámetros la llamada correcta es así: ejemp = new Clase_1;<br /></div></blockquote><br /><br />Bueno, parece que el errores que me mandaba  había sido por un un error de dedo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /><br /><br />Pero eso si, al declararlo de la forma &quot;ejemp = new Clase_1()&quot; funciona para inicializar el objeto, incluso puedo darle parámetros.... <br /><br />Lo corregí tomando el cuenta lo que dices de que en C++ todo es una clase (aun que tengo mis dudas XD ) para que fuera algo de la siguiente forma...<br /><br /><pre class="prettyprint linenums">class Clase_2{<br />        Clase_1 ejemp;<br />        public:<br />        Clase_2&#40;&#41;{<br />            //inicializo el atributo ejemp, que es una clase<br />            this-&gt;ejemp = Clase_1&#40;&#41;;<br />            };<br />        ~Clase_2&#40;&#41;{};<br />        void funcion_algo&#40;void&#41;{<br />            //llamo a un método proio de la Clase_1 que es atributo<br />            //que es atributo de la Clase_2, de esta manera<br />            this-&gt;ejemp.funcion_algo&#40;&#41;;<br />            };<br />        };</pre><br /><br />Pero, <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> al terminar el programa....<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>*** glibc detected *** http://losersjuegos.com.ar/foro/ejem: double free or corruption (out): 0x099305d8 ***<br />======= Backtrace: =========<br />/lib/i386-linux-gnu/libc.so.6(+0x73e42)&#91;0x304e42&#93;<br />/usr/lib/i386-linux-gnu/libSDL-1.2.so.0(SDL_FreeSurface+0x100)&#91;0x938590&#93;<br />http://losersjuegos.com.ar/foro/ejem&#91;0x8049b40&#93;<br />http://losersjuegos.com.ar/foro/ejem&#91;0x8049f67&#93;<br />http://losersjuegos.com.ar/foro/ejem&#91;0x804981d&#93;<br />/lib/i386-linux-gnu/libc.so.6(__libc_start_main+0xf3)&#91;0x2aa4d3&#93;<br />http://losersjuegos.com.ar/foro/ejem&#91;0x8048be1&#93;<br />======= Memory map: ========<br />(aquí hay un numero exagerado de lineas  )<br /></code></dd></dl><br /><br /> y este error no sucede si lo hago de la primera forma....<br />aun así, resulta basten curiosa esta forma de hacer una clase el atributo de otra... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Jul 06, 2012 12:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2012-07-05T23:08:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6898#p6898</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6898#p6898"/>
<title type="html"><![CDATA[Re: Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6898#p6898"><![CDATA[
Me gustaria ver un ejemplo donde esto no funciona, por que no debería tener ni un problema, en C++ todo es una clase:  int, char etc. entonces perfectamente puedes usar apuntadores a esas clases, creo que el error esta aquí:  ejemp = new Clase_1();<br />Por que cuando el constructor no tiene parámetros la llamada correcta es así: ejemp = new Clase_1;<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Jul 05, 2012 11:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-05T20:16:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6897#p6897</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6897#p6897"/>
<title type="html"><![CDATA[Re: Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6897#p6897"><![CDATA[
Muchas gracias hugoruscitti  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Ahora solo queda la primera que es para mi curiosidad <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Jul 05, 2012 8:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-07-05T20:07:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6896#p6896</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6896#p6896"/>
<title type="html"><![CDATA[Re: Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6896#p6896"><![CDATA[
Buenas Barajas!<br /><br />Lo segundo creo que se logra cambiando los flags de compilación y<br />la función principal del programa (main). En este artículo hay<br />una sección, casi al final, que explica cómo hacerlo. está bajo el título<br />&quot;mensajes de consola&quot;:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/instalar_devcpp">http://www.losersjuegos.com.ar/referenc ... lar_devcpp</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jul 05, 2012 8:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-05T19:19:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6894#p6894</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6894#p6894"/>
<title type="html"><![CDATA[Un par de dudas con c++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1507&amp;p=6894#p6894"><![CDATA[
Hola.<br /><br />Esta ves estaba empezando a desarrollar un juego con SDL y c++, y mientras escribía código, me surgieron un par de dudas....<br /><br /><span style="font-weight: bold">1° ¿Es posible hacer esto de otra manera? o ¿Por qué aveces no funciona?</span><br /><br />Sé que no es posible tener como atributo de una clase a otra clase, pero también si se puede tener como atributo un apuntador a clase, así que se me ocurrió esto...<br /><br /><pre class="prettyprint linenums">class Clase_2{<br />    Clase_1 * ejemp;<br />    public:<br />    Clase_2&#40;&#41;{<br />        //inicializo el atributo ejemp, que es una clase<br />        ejemp = new Clase_1&#40;&#41;;<br />        };<br />    ~Clase_2&#40;&#41;{};<br />    void funcion_algo&#40;void&#41;{<br />        //llamo a un método proio de la Clase_1 que es atributo<br />        //que es atributo de la Clase_2, de esta manera<br />        this-&gt;ejemp-&gt;funcion_algo&#40;&#41;;<br />        };<br />    };</pre><br /><br />Pero esto algunas veces no me funciona para mandar a llamar algunos métodos de una clase definida como atributo ¿Por qué?<br /><br /><span style="font-weight: bold">2° ¿Cómo quito el &quot;simbolo del sistema&quot;? </span><br /><br />Cuando compilo un programa gráfico en Windows con SDL, cuando lo ejecuto siempre sale la terminal, aun que no se le mande nada. ¿Como evito eso?<br /><br />La primera es mas que nada una duda existencial y la otra es una practica XD<br />Bueno, de antemano , gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Jul 05, 2012 7:19 pm</p><hr />
]]></content>
</entry>
</feed>