<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=490" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-26T06:30:27+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=490</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-26T06:30:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2152#p2152</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2152#p2152"/>
<title type="html"><![CDATA[Duda sobre SDL_Surface*]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2152#p2152"><![CDATA[
<blockquote class="uncited"><div><br />for( int cont = 0; cont &lt; 10; cont++ )<br />    mensaje[ cont ] = SDL_CreateRGBSurface( SDL_SWSURFACE, 10, 10, 8, 0, 0, 0, 0 );<br /></div></blockquote><br />Tienes razon el error radicaba en esa seccion... Ya que yo no incluia ninguna que se encargara de reservarla...<br />Muchas gracias a ambos por las respuestas me ayudan mucho...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Feb 26, 2009 6:30 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-02-23T04:29:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2141#p2141</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2141#p2141"/>
<title type="html"><![CDATA[Duda sobre SDL_Surface*]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2141#p2141"><![CDATA[
Bien, un array de SDL_Surface es perfectamente posible.<br /><br />El problema con tu ejemplo es que intentas liberar memoria no reservada anteriormente, si pruebas reservando antes verás la diferencia:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />#include &lt;cstdlib&gt;<br />#include &lt;SDL/SDL.h&gt;<br /><br />using namespace std;<br /><br />int main&#40; int argc, char *argv&#91;&#93; &#41;&#123;<br />   SDL_Surface* mensaje&#91;10&#93;;<br /><br />  for&#40; int cont = 0; cont &lt; 10; cont++ &#41;<br />    mensaje&#91; cont &#93; = SDL_CreateRGBSurface&#40; SDL_SWSURFACE, 10, 10, 8, 0, 0, 0, 0 &#41;;<br /><br />   for&#40; int cont = 0; cont &lt; 10; cont++ &#41;<br />      SDL_FreeSurface&#40; mensaje&#91; cont &#93; &#41;;<br /><br />   return 0;<br />&#125;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Lun Feb 23, 2009 4:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-23T01:05:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2139#p2139</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2139#p2139"/>
<title type="html"><![CDATA[Duda sobre SDL_Surface*]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2139#p2139"><![CDATA[
el codigo que hice prueba es sumamente sencillo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />#include &lt;cstdlib&gt;<br />#include &lt;SDL/SDL.h&gt;<br /><br />using namespace std;<br /><br />int main&#40; int argc, char *argv&#91;&#93; &#41;&#123;<br />   SDL_Surface* mensaje&#91;10&#93;;<br />   for&#40; int cont = 0; cont &lt; 10; cont++ &#41;<br />      SDL_FreeSurface&#40; mensaje&#91; cont &#93; &#41;;<br />   return 0;<br />&#125;</code></dd></dl><br />y el error que me tira (es el ya famoso):<br /><dl class="codebox"><dt>Code: </dt><dd><code>Violación de segmento</code></dd></dl><br />No se si sea yo o el compilador...<br />ahora estoy tratando como me comentavan mas arriba<br /><blockquote class="uncited"><div><br />typedef struct{<br />   SDL_Surface *surface;<br />}surface_t;<br /></div></blockquote><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Lun Feb 23, 2009 1:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-02-22T06:03:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2130#p2130</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2130#p2130"/>
<title type="html"><![CDATA[Re: Duda sobre SDL_Surface*]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2130#p2130"><![CDATA[
<blockquote><div><cite>sofoke escribió:</cite><br />Tengo una duda quiero crea unos efectos usando SDL_ttf y fuentes claro...<br />pero me preguntaba si puedo hacer que una array, digamos asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>char&#91;&#93; = &quot;HOLA&quot;;</code></dd></dl><br />y como crear un array de SDL_Surface*, digamos asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* mensaje&#91;10&#93;;</code></dd></dl><br />Por que segun parece no puedo...<br />ahora no lo quiero hacer asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* Uno, Dos, Tres;</code></dd></dl><br />por que quiero crear arrays de texto sin definir su tamaño y hacerlo mediante reserva dinamica de memoria y sobre la ejecucion aplicar una superficie a cada letra del array de caracteres...<br />Espero me haya dado a explicar...<br /></div></blockquote><br />¿Con qué compilador estás trabajando? ¿Tienes problemas al compilar?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Feb 22, 2009 6:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Raito]]></name></author>
<updated>2009-02-20T17:02:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2119#p2119</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2119#p2119"/>
<title type="html"><![CDATA[Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2119#p2119"><![CDATA[
Una solución poco profesional pero simple para usar array de surface es hacer una estructura/clase con un miembro surface.<br /><br />Ej:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>typedef struct&#123;<br />   SDL_Surface *surface;<br />&#125;surface_t;<br /><br />//luego haces el arreglo ya dimensionado o si lo preferís lo dimensionás luego<br /><br />surface_t array_surface1&#91; n &#93;;<br /><br />// o<br /><br />surface_t *array_surface2 = new surface_t&#91; n &#93;;<br /><br />//entonces desde este ejemplo se puede utilizar varias surfaces como array<br /><br />array_surface1&#91; 0 &#93;.surface  = IMG_Load&#40; &quot;image0.png&quot; &#41;;<br />array_surface1&#91; 1 &#93;.surface  = IMG_Load&#40; &quot;image1.png&quot; &#41;;<br />...<br />array_surface1&#91; N &#93;.surface  = IMG_Load&#40; &quot;imageN.png&quot; &#41;;<br /><br /></code></dd></dl><br /><br />Nota: Si utilizaras una clase en cambio de una estructura podrías hacer una sobrecarga del operador '=' para decir que devuelva su miembro SDL_Surface*<br /><br />Espero que te sirva<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2064">Raito</a> — Vie Feb 20, 2009 5:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-20T03:10:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2117#p2117</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2117#p2117"/>
<title type="html"><![CDATA[Duda sobre SDL_Surface*]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=490&amp;p=2117#p2117"><![CDATA[
Tengo una duda quiero crea unos efectos usando SDL_ttf y fuentes claro...<br />pero me preguntaba si puedo hacer que una array, digamos asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>char&#91;&#93; = &quot;HOLA&quot;;</code></dd></dl><br />y como crear un array de SDL_Surface*, digamos asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* mensaje&#91;10&#93;;</code></dd></dl><br />Por que segun parece no puedo...<br />ahora no lo quiero hacer asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface* Uno, Dos, Tres;</code></dd></dl><br />por que quiero crear arrays de texto sin definir su tamaño y hacerlo mediante reserva dinamica de memoria y sobre la ejecucion aplicar una superficie a cada letra del array de caracteres...<br />Espero me haya dado a explicar...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Vie Feb 20, 2009 3:10 am</p><hr />
]]></content>
</entry>
</feed>