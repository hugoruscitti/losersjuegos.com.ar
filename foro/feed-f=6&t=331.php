<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=331" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-06-07T19:13:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=331</id>
<entry>
<author><name><![CDATA[thepoi]]></name></author>
<updated>2008-06-07T19:13:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1472#p1472</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1472#p1472"/>
<title type="html"><![CDATA[[SDL] Duda sobre mantener tecla pulsada o no]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1472#p1472"><![CDATA[
Lo que pasa es que el &quot;juego&quot; para el que use los eventos estos era mi primera toma de contacto con la SDL, iba copiando cosas de libros y tutoriales para irme familiarizando.<br /><br />LLegado un momento me aburrí de él y lo dejé aparcado con cosas a medio hacer y el codigo muy sucio.<br /><br />El juego del otro post mio no tiene nada que ver con este, el del otro post es en el q estoy trabajando ahora mismo y se podria decir que es el primer juego que estoy haciendo, ya que el otro es mas bien un aborto xdd.<br /><br />En cuanto tengo algo potable no dudaré en enseñarlo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1943">thepoi</a> — Sab Jun 07, 2008 7:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-06-07T18:13:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1471#p1471</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1471#p1471"/>
<title type="html"><![CDATA[[SDL] Duda sobre mantener tecla pulsada o no]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1471#p1471"><![CDATA[
jajaja yo te decia que pongas el codigo entero... o sea, que presentes lo que llevas hecho xD<br /><br />Por lo menos a mi me gusta curiosear, ademas si esta relacionado con tu otro post abierto se ve muy interesante.<br />Saludos Lucesita<br /><br />EDIT: te invito a que te animes tambien a pasar por el canal de jabberes, busca en los otros post la forma de conectarte, yo se que casi nunca hay nadie, pero es una herramienta muy interesante<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Sab Jun 07, 2008 6:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thepoi]]></name></author>
<updated>2008-06-07T13:19:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1470#p1470</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1470#p1470"/>
<title type="html"><![CDATA[[SDL] Duda sobre mantener tecla pulsada o no]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1470#p1470"><![CDATA[
Mmm no hice nada demasiado especial, simplemente capturar los eventos, ver si se trataba de una pulsacion de tecla, y si era asi ver que tecla era. Luego simplemente actuar en consecuencia con la tecla pulsada. Muy parecido a lo que proponia Alex_13_estu<br /><br />Algo asi<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Event event;<br /><br />while&#40;SDL_PollEvent&#40;&amp;event&#41;&#41;<br />&#123;<br />    if&#40;event.type == SDL_KEYDOWN&#41;<br />    &#123;<br />        if&#40;event.key.keysym.sym == SDLK_a&#41;<br />        &#123;<br />             //disparar<br />         &#125;<br />        if&#40;event.key.keysym.sym == SDLK_UP&#41;<br />        &#123;<br />             //saltar<br />         &#125;<br />    &#125;<br />&#125;</code></dd></dl><br /><br />y asi sucesivamente para todas las acciones que uno quiera.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1943">thepoi</a> — Sab Jun 07, 2008 1:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lucesita]]></name></author>
<updated>2008-06-06T19:39:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1465#p1465</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1465#p1465"/>
<title type="html"><![CDATA[[SDL] Duda sobre mantener tecla pulsada o no]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1465#p1465"><![CDATA[
y esto en que ah quedado, pudiste implementarlo? que tal te quedo? te funciona bien el metodo que te comento alex?<br /><br />de todos modos tienes otra manera, haciendolo como lo hiciste vos, pero con un timer.<br /><br />pseudocode:<br /><br />Inicia un timer<br /><br />GameLoop   <br />Lee estado del teclado<br />si esta apretada<br />{<br />    if(timer &gt; 80)  //el numero es en MS<br />    {<br />        Ejecuta la animacion<br />        ReseteaTimer<br />    }<br />}<br />    <br />no se... se me ocurrio eso por asi decirlo, esto lo que te va a hacer es tirarte cada 80 MiliSegundos una bola de fuego.<br /><br />pero me gustaria que comentes como lo resolviste, ya que estoy seguro que a mas de uno nos interesa jajaja.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1905">lucesita</a> — Vie Jun 06, 2008 7:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thepoi]]></name></author>
<updated>2008-06-06T16:51:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1463#p1463</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1463#p1463"/>
<title type="html"><![CDATA[[SDL] Duda sobre mantener tecla pulsada o no]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1463#p1463"><![CDATA[
con eventos si funciona, lo &quot;malo&quot; es que tuve que cambiar todo el sistema de movimiento del personaje a eventos, pq si mezclaba ambas formas no funcionaba demasiado bien<br /><br />gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1943">thepoi</a> — Vie Jun 06, 2008 4:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alex_13_estu]]></name></author>
<updated>2008-06-03T13:37:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1449#p1449</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1449#p1449"/>
<title type="html"><![CDATA[[SDL] Duda sobre mantener tecla pulsada o no]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1449#p1449"><![CDATA[
¡Hola! Te recomiendo que, si lo que quieres es captar sólo el evento de pulsación de la tecla &quot;A&quot;, uses eventos y no compruebes el estado del teclado. Esto sería algo así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Event event;//Eventos<br /><br />while&#40;SDL_PollEvent&#40;&amp;event&#41;&#41;//Mientras haya eventos<br />&#123;<br />    if&#40;event.type == SDL_KEYDOWN&#41;//Si se pulsa na tecla<br />    &#123;<br />        if&#40;event.key.keysym.sym == SDLK_a&#41;//Si es la tecla a<br />        &#123;<br />             //AQUI PONES EL CODIGO QUE QUIERAS PARA LA PULSACIÓN DE &quot;A&quot;<br />         &#125;<br />    &#125;<br />&#125;</code></dd></dl><br /><br />Básicamene ese sería el código. No lo he probado, pero creo que está bien. La variable <span style="font-style: italic">&quot;SDL_Event event&quot;</span> es una variable que almacena los eventos de SDL. Simplemente pon donde te indico el código y conseguirás que se ejecute sólamente una vez, al pulsar la tecla.<br /><br />Espero haberte ayudado.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1909">Alex_13_estu</a> — Mar Jun 03, 2008 1:37 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thepoi]]></name></author>
<updated>2008-06-02T19:16:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1447#p1447</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1447#p1447"/>
<title type="html"><![CDATA[[SDL] Duda sobre mantener tecla pulsada o no]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=331&amp;p=1447#p1447"><![CDATA[
Hola;<br />Estoy haciendo un primer videojuego para irme familiarizando con la SDL.<br /><br />Mi intencion es queque cuando pulso la tecla &quot;a&quot; el personaje debe disparar una bola de fuego, el problema es que ,curiosamente, si mantengo pulsada la tecla &quot;a&quot; dispara 200 bolas de fuego seguidas en cuestion de milisegundos. (provocando un error de segmentacion, ya que<br />el array de bolas no es tan grande).<br /><br />Lo que me gustaria saber es como implementar que si la tecla es pulsada dispare, pero no vuelva a disparar hasta que suelten la tecla y la vuelvan a pulsar para así eliminar el efecto &quot;ametralladora&quot; que se esta produciendo.<br /><br />La seccion del codigo donde compruebo si se pulsa la tecla a:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>   if &#40;key&#91;SDLK_a&#93;&#41;  &#123;<br />     unsigned ind = buscar &#40;&#41;; //buscamos la primera bola libre<br />     bolas&#91;ind&#93;.x_ = x_; //posicion bola = posicion personaje<br />     bolas&#91;ind&#93;.y_ = y_;<br />     bolas&#91;ind&#93;.estado_ = estado_;//sentido bola = direccion personaje<br />     std::cout &lt;&lt; &quot;bola &quot; &lt;&lt; ind &lt;&lt; std::endl;<br />    &#125;<br /></code></dd></dl><br /><br />Y llamo a la funcion que comprueba si el usuario pulsa la tecla &quot;a&quot; una vez<br />por iteracion de game loop.<br /><br /><br />Que deberia modificar? Que deberia añadir?<br /><br />Espero no haber resultado muy lioso.<br /><br />1 saludo y muchas gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1943">thepoi</a> — Lun Jun 02, 2008 7:16 pm</p><hr />
]]></content>
</entry>
</feed>