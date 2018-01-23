<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=205" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-12-11T20:09:41+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=205</id>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2007-12-11T20:09:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=735#p735</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=735#p735"/>
<title type="html"><![CDATA[sintaxis de dokuwiki...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=735#p735"><![CDATA[
pues yo ya estaba traduciendo <a href="http://www.losersjuegos.com.ar/dev/doku.php/pygame/index" class="postlink">el índice de contenidos</a> de pygame, porque me oriento mejor, de un vistazo encuentro lo que busco (¡¡aunque luego no me aclaro de como funciona!! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" /> ). <br />pero veo que ya no hace falta traducirlo, así ahorramos trabajo, así que seguiré por otro lado a partir del próximo día.<br />para la versión definitiva del indexado hay que poner una breve descripción de cada sección junto al nombre, que para <span style="font-style: italic">pygame.display</span> no hace falta, pero por ejemplo para métodos más concretos siempre viene bien tener una pequeña referencia.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mar Dic 11, 2007 8:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-12-11T18:27:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=734#p734</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=734#p734"/>
<title type="html"><![CDATA[sintaxis de dokuwiki...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=734#p734"><![CDATA[
<blockquote><div><cite>Dokan escribió:</cite><br />una duda que tengo es si ponemos los módulos base de pygame en <a href="http://www.losersjuegos.com.ar/dev/doku.php/pygame/pygame" class="postlink">esta página del docuwiki</a> y dejamos el índice como referencia o si hacemos otra página para los siete modulos base de pygame (<a href="http://www.pygame.org/docs/ref/pygame.html#pygame" class="postlink">así está en pygame.org</a>).<br /></div></blockquote><br /><br />Personalmente prefiero un índice de contenidos que solo enumere los<br />módulos principales. Algo como:<br /><br />  * image - descripción<br />  * sprite - descripción<br />  * etc.<br /><br />creo que de esta forma es mas sencillo acceder al contenido de la<br />biblioteca.<br /><br />Luego, si queremos mostrar todas las funciones y módulos en una<br />sola página, porque algunos usuarios lo prefieren así, podemos<br />generar un listado de la biblioteca de forma automática.<br /><br />Vean el código de la siguiente página:<br /><br />   <a href="http://www.losersjuegos.com.ar/dev/doku.php/playground/playground" class="postlink">http://www.losersjuegos.com.ar/dev/doku.php/playground/playground</a><br /><br />Es esa página se muestra un índice de contenidos completo;<br />lo interesante es que se construye y actualiza de manera<br />automática, leyendo cada una de las secciones y mostrando<br />los titulares mas importantes. El complemento que permite<br />realizar esta tarea se llama <span style="font-weight: bold">nstoc</span>, y pueden encontrar<br />mas información de él en la siguiente dirección:<br /><br />   <a href="http://wiki.splitbrain.org/plugin:nstoc" class="postlink">http://wiki.splitbrain.org/plugin:nstoc</a><br /><br />Tengo que hacer algunas modificaciones para que se 'vea' mejor,<br />pero la idea es la misma: hacer un listado completo de forma<br />automática.<br /><br />Este complemento también lo podemos utilizar para generar un<br />mapa del sitio web completo.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Dic 11, 2007 6:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2007-12-08T20:40:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=732#p732</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=732#p732"/>
<title type="html"><![CDATA[sintaxis de dokuwiki...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=732#p732"><![CDATA[
es q nunca habia editado un wiki, y siempre pensé que sería con formato html, por eso me ofusqué un poco, pero ahora ya está todo más claro.<br />de momento he ampliado un poco (poco) el index y he añadido la página de funciones locales de pygame.<br />como pediste la portada la dejé como estaba, sólo he añadido un vinculo a la nueva página.<br /> a partir de ahora irá todo más rodado <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Sab Dic 08, 2007 8:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ominae]]></name></author>
<updated>2007-12-08T12:30:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=730#p730</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=730#p730"/>
<title type="html"><![CDATA[sintaxis de dokuwiki...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=730#p730"><![CDATA[
<blockquote><div><cite>Dokan escribió:</cite><br />pues creo q más o menos empieza a parecer algo, <a href="http://www.losersjuegos.com.ar/dev/doku.php/pygame/index" class="postlink">echad un vistazo al índice de pygame</a>.<br /></div></blockquote><br />Muy bien! No creas que necesitas tutoriales muy avanzados para editar el wiki, yo me aclaré mirando el código de Hugo... En realidad es poco lo que has de aprender!<br /><blockquote><div><cite>Dokan escribió:</cite><br />una duda que tengo es si ponemos los módulos base de pygame en <a href="http://www.losersjuegos.com.ar/dev/doku.php/pygame/pygame" class="postlink">esta página del docuwiki</a> y dejamos el índice como referencia o si hacemos otra página para los siete modulos base de pygame (<a href="http://www.pygame.org/docs/ref/pygame.html#pygame" class="postlink">así está en pygame.org</a>).<br /></div></blockquote><br />Creo que me gusta más como está ahora, la documentación de pygame original me resulta algo caótica... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br /><br />Un saludo!<br />Jaime Forcada Balaguer<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=11">ominae</a> — Sab Dic 08, 2007 12:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2007-12-08T00:56:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=728#p728</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=728#p728"/>
<title type="html"><![CDATA[sintaxis de dokuwiki...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=728#p728"><![CDATA[
ooops!<br />Gracias!!<br />Creo q con el tutorial del dokuwiki ya tengo para entretenerme de momento. A ver si le pillo el truco.<br /><br /><span style="font-weight: bold">EDIT</span><br /><br />pues creo q más o menos empieza a parecer algo, <a href="http://www.losersjuegos.com.ar/dev/doku.php/pygame/index" class="postlink">echad un vistazo al índice de pygame</a>.<br /><br />una duda que tengo es si ponemos los módulos base de pygame en <a href="http://www.losersjuegos.com.ar/dev/doku.php/pygame/pygame" class="postlink">esta página del docuwiki</a> y dejamos el índice como referencia o si hacemos otra página para los siete modulos base de pygame (<a href="http://www.pygame.org/docs/ref/pygame.html#pygame" class="postlink">así está en pygame.org</a>).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Sab Dic 08, 2007 12:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-12-07T19:30:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=727#p727</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=727#p727"/>
<title type="html"><![CDATA[Re: sintaxis de dokuwiki...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=727#p727"><![CDATA[
<blockquote><div><cite>Dokan escribió:</cite><br />Quería darle una distribución lo más parecida a la web de pygame pero no se como se vincula en el wiki lo que en html se hace así:<br />&lt;a name=&quot;pygame.init&quot;&gt;<br />y luego para referenciarlo desde otro punto de la web:<br />&lt;a href=&quot;pygame.html#pygame.init&quot;&gt;<br /><br />Quien sepa la sintaxis de docuwiki que tire la primera piedra...<br /></div></blockquote><br /><br />Saludos, las referencias a secciones internas en dokuwiki se realizan<br />de manera muy similar a HTML. Tienes que colocar un numeral (#) <br />seguido de la sección interna dentro del vínculo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Este es un vinculo a la sección &#91;&#91;pygame:pygame#init | dos&#93;&#93;</code></dd></dl><br /><br />Puedes ver un ejemplo aquí:<br /><br />   <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/dev/doku.php/playground/playground">http://www.losersjuegos.com.ar/dev/doku ... playground</a><!-- m --> <br /><br />O en un tutorial de dokuwiki:<br /><br />    <!-- m --><a class="postlink" href="http://mundogeek.net/wiki/doku.php?id=wiki:syntax#internal">http://mundogeek.net/wiki/doku.php?id=w ... x#internal</a><!-- m --><br /><br />Es interesante ver que el mismo motor de dokuwiki se encarga de colocar<br />la referencia (&lt;a name=&quot;...&quot;/&gt;) a cada título. De forma que te resultará<br />mucho mas sencillo que hacerlo en HTML.<br /><br /><blockquote><div><cite>Dokan escribió:</cite><br />Por otro lado, leyendo el código fuente de la documentación de la web de <a href="http://www.pygame.org/docs/ref/index.html" class="postlink">pygame</a> (en firefox para ver el código fuente haz CTRL+U) se me ha ocurrido que para conservar una relación de distribución lo más parecida posible con la web original en inglés podríamos literalmente copiar el formato  desde &lt;html&gt; hasta &lt;/html&gt; obviando JS y CSS, y solo traducir los textos. ¿Para qué reinventar la rueda?<br />Dejen su opinión al salir...<br /></div></blockquote><br /><br />Hay muy pocos proyectos de traducción que trabajan traduciendo texto dentro<br />de elementos HTML. Creo que utilizar un wiki es mas adecuado, porque contamos<br />con un control de versiones, por cada cambio queda registrado el nombre de <br />quien lo realiza y con ello se reconoce el crédito de haber ayudado, no tenemos<br />problemas de versiones y se puede modificar con facilidad.<br />De otra forma, con HTML resultaría mas complejo y generaría menos participación.<br /><br />Creo que el wiki se tornará mas interesante en la medida que empecemos a<br />utilizarlo mas, este verano me gustaría mucho mejorar la integración del wiki<br />a la web.<br /><br />A medida que lo utilicemos, vamos a ir mejorando nuestra  forma de participar.<br />Por dar un ejemplo, existe un complemento para Firefox que te<br />permite utilizar el editor de textos que mas te guste para editar el wiki;<br />personalmente me siento mucho mas cómodo escribiendo texto en VIM con<br />resaltado de sintaxis:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20071207/vim.png" alt="Imagen" /><br /><br />el complemento se llama &quot;It's all text&quot;:<br /><br />   <!-- m --><a class="postlink" href="https://addons.mozilla.org/es-ES/firefox/addon/4125">https://addons.mozilla.org/es-ES/firefox/addon/4125</a><!-- m --><br /><br />y los archivos necesarios para el resaltado de sintaxis está en:<br /><br />   <!-- m --><a class="postlink" href="http://www.chimeric.de/projects/dokuwiki/vimsyntax">http://www.chimeric.de/projects/dokuwiki/vimsyntax</a><!-- m --><br /><br />también existe un complemento que muestra errores de ortografía en el mismo<br />navegador:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20071207/faltas.png" alt="Imagen" /><br /><br /><br /><blockquote><div><cite>Dokan escribió:</cite><br />De todos modos más información sobre la sintaxis de docuwiki es imprescindible para que éste crezca con esta y otras documentaciones y/o traducciones.<br /></div></blockquote><br /><br />Sí, es cierto. Con el tiempo lo iremos realizando, es una buena idea.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Dic 07, 2007 7:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2007-12-07T18:01:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=725#p725</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=725#p725"/>
<title type="html"><![CDATA[sintaxis de dokuwiki...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=205&amp;p=725#p725"><![CDATA[
<blockquote class="uncited"><div><br /><span style="font-weight: bold">A futuro</span><br /><br />Crear una página que explique la sintaxis de dokuwiki.<br /></div></blockquote><br /><br />Estaba editando en el wiki para ampliar un poquillo la sección 'index' de pygame hasta que he visto que necesito una referencia para darle formato al tema y lo he dejado... (la verdad es q me han llamado para salir a cenar <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /> ).<br />Quería darle una distribución lo más parecida a la web de pygame pero no se como se vincula en el wiki lo que en html se hace así:<br />&lt;a name=&quot;pygame.init&quot;&gt;<br />y luego para referenciarlo desde otro punto de la web:<br />&lt;a href=&quot;pygame.html#pygame.init&quot;&gt;<br /><br />Quien sepa la sintaxis de docuwiki que tire la primera piedra...<br /><br />Por otro lado, leyendo el código fuente de la documentación de la web de <a href="http://www.pygame.org/docs/ref/index.html" class="postlink">pygame</a> (en firefox para ver el código fuente haz CTRL+U) se me ha ocurrido que para conservar una relación de distribución lo más parecida posible con la web original en inglés podríamos literalmente copiar el formato  desde &lt;html&gt; hasta &lt;/html&gt; obviando JS y CSS, y solo traducir los textos. ¿Para qué reinventar la rueda?<br />Dejen su opinión al salir...<br />De todos modos más información sobre la sintaxis de docuwiki es imprescindible para que éste crezca con esta y otras documentaciones y/o traducciones.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Vie Dic 07, 2007 6:01 pm</p><hr />
]]></content>
</entry>
</feed>