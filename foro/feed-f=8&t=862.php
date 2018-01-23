<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=862" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-04T13:58:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=862</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-04T13:58:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4045#p4045</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4045#p4045"/>
<title type="html"><![CDATA[Re: Usar funciones de c, en c++?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4045#p4045"><![CDATA[
perfecto, eso era lo que necesitaba, si trabajo con windows la constante WIN_32 ya esta definida verdad?<br />gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />DDDD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Sab Sep 04, 2010 1:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-09-03T18:57:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4040#p4040</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4040#p4040"/>
<title type="html"><![CDATA[Re: Usar funciones de c, en c++?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4040#p4040"><![CDATA[
No mencionas en qué sistema operativo estás trabajando, esto sería lo adecuado:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br /><br />void limpia_pantalla() {<br />  #ifdef WIN_32<br />    // Windows<br />    system( &quot;cls&quot; );<br />  #else<br />    // Otro (funciona en Linux)<br />    system( &quot;clear&quot; );<br />  #endif<br />}<br /><br />int main() {<br />   limpia_pantalla();<br />   return 0;<br />}<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Sep 03, 2010 6:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-03T16:16:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4039#p4039</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4039#p4039"/>
<title type="html"><![CDATA[Re: Usar funciones de c, en c++?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4039#p4039"><![CDATA[
jaja no se me habia ocurrido gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />EDIT: no me sirve esta forma de hacerlo, ya que me simplemente me deja un gran espacio vacio entre el codigo anterior y lo siguiente.<br />Con system(&quot;cls&quot;), borra la pantalla y empieza el codigo siguiente al principio. Alguna otra forma?<br />He visto que existe esta funcion: clrscr(), de conio.h, pero al usarla me dice que el identificador no esta declarado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Sep 03, 2010 4:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-03T14:25:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4037#p4037</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4037#p4037"/>
<title type="html"><![CDATA[Re: Usar funciones de c, en c++?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4037#p4037"><![CDATA[
jajaja una muy simple:<br /><br />[code]<br />for (int i = 0; i &lt; 10; i++)<br />  std::cout &lt;&lt; std::endl &lt;&lt; std::endl &lt;&lt; std::endl;<br /><br />Hay tienes 30 saltos de linea, supongo que serán suficientes xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Sep 03, 2010 2:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-03T14:12:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4036#p4036</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4036#p4036"/>
<title type="html"><![CDATA[Re: Usar funciones de c, en c++?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4036#p4036"><![CDATA[
oks, intentare no mezclar entonces. Mirando por google he visto un post que explicaba por que no mezclar los lenguajes pero me ha parecido bastante avanzado asi que me are la pregunta mas adelante. Otra cosilla, para no abrir otro post, hay alguna funcion como system(&quot;cls&quot;), que me permita portabilidad del programa?<br />gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Sep 03, 2010 2:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-03T13:39:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4035#p4035</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4035#p4035"/>
<title type="html"><![CDATA[Re: Usar funciones de c, en c++?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4035#p4035"><![CDATA[
Y no es recomendable hacerlo. En realidad tienen casi la misma funcionalidad.<br /><br />Un apunte: si vas a incluir algo de C (stdlib, etc) usa las nuevas cabeceras: #include &lt;cstdlib&gt; en vez de #include &lt;stdlib.h&gt;<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Sep 03, 2010 1:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-03T13:00:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4034#p4034</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4034#p4034"/>
<title type="html"><![CDATA[Usar funciones de c, en c++?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=862&amp;p=4034#p4034"><![CDATA[
Hola, tengo una preguntita rapida, se pueden usar funciones de c, en c++, como por ejemplo printf() en vez de cout.<br />Trabajo en visual c++ y si me lo permite, pero tendre algun problema mas adelante mezclando los dos lenguajes? (por lo que tengo entendido c++ ya incluye la mayor parte de c, pero me comentaron que no se deverian mezclar)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Sep 03, 2010 1:00 pm</p><hr />
]]></content>
</entry>
</feed>