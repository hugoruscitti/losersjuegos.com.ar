<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=676" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-01-08T18:49:03+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=676</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-01-08T18:49:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3148#p3148</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3148#p3148"/>
<title type="html"><![CDATA[La mejor forma de poner en espara una funcion(retraso)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3148#p3148"><![CDATA[
yo creo que en ambos casos teneis vuestra parte de razón:<br /><br /> es cierto que nunca es bueno parar del todo el programa, pero siempre y cuando tenga cosas que hacer. El caso que te ponia endaramiz es totalmente válido.<br /> El te dice en el caso de que tu juego te interese que vaya a 30 fps, y resulta que en un determinado momento un frame va más rapido que esos 30 segundos, pues pausas el juego hasta que se ajuste a esos 30 fps. <br />Aunque endaramiz, es más correcto ajustar todo el juego a framerate variable (eso he leido) ya que así no estarás sujeto a limitaciones externas.<br />En cuanto a lo de usar time.h por ser estándar y no depender así de compatibilidades, normalmente si usas un api portable (como SDL) supongo que será más correcto usar los métodos de tiempo del API que estarán más orientados a juegos.<br /><br />Y sin más dejo de divagar<br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Ene 08, 2010 6:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-08T01:35:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3146#p3146</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3146#p3146"/>
<title type="html"><![CDATA[La mejor forma de poner en espara una funcion(retraso)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3146#p3146"><![CDATA[
yo uso SDL, de hecho las funciones que puse originalmente usan SDL_GetTicks() en ves de time(), pero quise ilustrar como seria sin una una biblioteca para videojuegos.<br />Ademas algunas funciones del tipo de sleep dependen del sistema operativo, por ejemplo Sleep es de windows.h, por lo que un programa no seria portable, en cambio time.h es estandar de C.<br />y por otro lado, he leido que no es nada recomendable parar por completo la ejecucion de tu programa<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Ene 08, 2010 1:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-07T20:23:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3143#p3143</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3143#p3143"/>
<title type="html"><![CDATA[Re: La mejor forma de poner en espara una funcion(retraso)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3143#p3143"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />El problema de esas funciones es que pausan la ejecucion del programa por completo,el SO deja e ponerle atencion, lo cual es un problema por que desperdicias tiempo de computo, muy preciado para los programadores de videojuegos.<br /></div></blockquote><br />No veo el problema de que pase eso.<br />Si  se sincroniza por framerate, hay que ponerlo a ese estado.<br />Y si se sincroniza por tiempo, yo siempre suelo añadirle un pequeño delay para que &quot;descanse un poco&quot; el procesador (ya que de momento no he hecho nada que requiera tanto potencial).<br /><br /><br />Por cierto, que bibliotecas usas para hacer videojuegos? Normalmente ofrecen facilidades para estos temas.<br /><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Ene 07, 2010 8:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-07T15:42:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3142#p3142</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3142#p3142"/>
<title type="html"><![CDATA[La mejor forma de poner en espara una funcion(retraso)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=676&amp;p=3142#p3142"><![CDATA[
Pues he visto en muchos foros esta pregunta, que no solo se hacen los programadores de videojuegos novatos, y resulta un dolor de cabeza, la mayoria conoze la funcion sleep de la biblioteca estandar de C y delay un poco menos conocida, y muchos creen que esto soluciona el problema, asi que voy a explicar una de las mejores formas de hacerlo.<br /><br />El problema de esas funciones es que pausan la ejecucion del programa por completo,el SO deja e ponerle atencion, lo cual es un problema por que desperdicias tiempo de computo, muy preciado para los programadores de videojuegos.<br />asi que vamos a usar la biblioteca time. veamos un ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include&lt;time&gt;<br />#include&lt;iostream&gt;<br />#include&lt;stdio&gt;<br />using namespace std;<br />int main&#40;&#41;<br />&#123;<br />   long int inicio,fin;<br />   time&#40;&amp;inicio&#41;;<br />   getchar&#40;&#41;;<br />   time&#40;&amp;fin&#41;;<br />   cout&lt;&lt;&quot;transcurrieron :&quot;&lt;&lt;fin-inicio&lt;&lt;&quot; segundos&quot;;<br /><br />&#125;</code></dd></dl><br /><br />es muy cencillo pero es la base del control del tiempo.<br />podriamos usar las siguientes funciones:<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>long int time_inicio, time_actual;  //variables globales<br /><br />void reset_time &#40;&#41;<br />&#123;<br /><br />    time&#40;&amp;time_inicio&#41;;<br />&#125;<br /><br />long int current_time &#40;&#41;<br />&#123;<br />    time&#40;&amp; time_actual&#41;;<br />    return time_actual - time_inicio;<br /><br />&#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Ene 07, 2010 3:42 pm</p><hr />
]]></content>
</entry>
</feed>