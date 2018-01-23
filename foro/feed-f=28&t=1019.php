<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=28&amp;t=1019" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-01-22T18:35:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=28&amp;t=1019</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-01-22T18:35:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4835#p4835</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4835#p4835"/>
<title type="html"><![CDATA[Re: Buscamos UI para pilas (ideas?)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4835#p4835"><![CDATA[
<blockquote><div><cite>pchack escribió:</cite><br />[...]<br />aqui va mi aporte:<br />un deslizador[...]<br /></div></blockquote><br /><br />Fua... está muy bueno, me gusta...<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20110122/deslizador.png" alt="Imagen" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ene 22, 2011 6:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-01-22T18:20:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4834#p4834</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4834#p4834"/>
<title type="html"><![CDATA[Re: Buscamos UI para pilas (ideas?)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4834#p4834"><![CDATA[
hola saludos a todos,<br /><br />Buenisimo Hugo, estan bastante buenos los 2 nuevos componentes para la GUI,<br />aqui va mi aporte:<br />un deslizador<br /><br />la gracia del deslizador es que podemos conectarle funciones con un valor como parametro,<br />este valor es un numero de 0.0 a 1.0  que varia a medida que deslizamos el controlador (el circulito)<br />ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>d = pilas.actores.Deslizador()<br /><br />def imprimir(valor):<br />   # imprimiria valores 0.1, 0.2,... 1<br />    print valor<br /><br />d.conectar(imprimir)<br /></code></dd></dl><br />y si queremos podemos maximizar ese valor multiplicandolo por algun valor<br /><dl class="codebox"><dt>Code: </dt><dd><code>print (valor * 100)<br /></code></dd></dl><br />lo que imprimiria valores de 0 a 100 segun la posicion de el circulito.<br /><br />es bastante util ese numerito porque no sirve, por ejemplo, si queremos mover un objeto, escalarlo, transparentarlo,<br />etc,etc,etc.<br /><br />para obtenerlo descargar la ultima version del Repositorio Oficial:<br /><a href="https://bitbucket.org/hugoruscitti/pilas" class="postlink">https://bitbucket.org/hugoruscitti/pilas</a><br /><br />y buscar en la seccion experimental/gui<br />(en donde esta este y otros componentes de GUI desarrollados por Mi (Pablo Garrido - pchack) y Hugo Ruscitti)<br /><br /><span style="font-weight: bold">pruebenlo y me cuentan.<br /><br />Saludos.</span><br /><br />PD. para modificar la posicion de el deslizador solo se puede llamando a los metodos: <br />    d.set_x(valor)<br />    d.ser_y(valor)<br />o al instanciarlo:<br />    d = pilas.actores.Deslizador(x = -100, y = 100)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Sab Ene 22, 2011 6:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-01-22T07:02:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4831#p4831</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4831#p4831"/>
<title type="html"><![CDATA[Re: Buscamos UI para pilas (ideas?)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4831#p4831"><![CDATA[
Bueno, efectivamente se puede hacer la GUI, es fácil, aunque<br />tiene sus limitaciones.<br /><br />Dejo un videito de lo que pude hacer: un selector y un campo<br />de texto.<br /><br /> <a href="http://www.youtube.com/v/bqESHKrxOcg"></param><param target="_blank"><strong>object</strong></a> <br /><br />PD: pchack, en el directorio &quot;experimental/gui/gui&quot; puse algunas<br />imagenes de prueba para los otros componentes.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ene 22, 2011 7:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-01-22T04:02:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4830#p4830</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4830#p4830"/>
<title type="html"><![CDATA[Re: Buscamos UI para pilas (ideas?)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4830#p4830"><![CDATA[
<blockquote><div><cite>pchack escribió:</cite><br />hola Hugo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> ,<br />Me gusta bastante la idea de hacer un sistema de GUI sencillo para pilas,<br />me gustaria ayudar en ello y tengo algunas ideas [...]<br /></div></blockquote><br /><br />Si, claro phack, por supuesto podemos hacer el sistema de GUI, y necesito<br />bastante ayuda con eso.<br /><br />En el directorio &quot;experimental&quot; del repositorio coloqué un directorio<br />llamado &quot;gui&quot;, ahí dentro podríamos comenzar a programar algo<br />y cuando tengamos la idea un poco mas definida la integramos. ¿Te parece<br />bien así?.<br /><br />Creo que todos los componentes de la interfaz podrían ser actores, solo<br />que tienen que heredar de un actor en particular, y con variables de clases<br />tendríamos que controlar que solo una de ellas tenga foco. En cuanto<br />pueda subo un ejemplo de lo que se me ocurrió.<br /><br />Yo podría hacer un elemento para representar un checkbox, si querés te dejo<br />el deslizador...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Ene 22, 2011 4:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-01-22T02:43:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4827#p4827</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4827#p4827"/>
<title type="html"><![CDATA[Re: Buscamos UI para pilas (ideas?)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4827#p4827"><![CDATA[
hola Hugo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> ,<br />Me gusta bastante la idea de hacer un sistema de GUI sencillo para pilas,<br />me gustaria ayudar en ello y tengo algunas ideas ,por ejemplo, Se me ha ocurrido desarrollar<br />un deslizador (o tambien en ingles horizontal slider), serviria por ejemplo si quieres manipular la escala de un objeto<br />o la posicion, etc.<br /><br />ya tengo gran parte del codigo desarrollado y va bastante bien.<br /><br />bueno cuentame que te parece la idea y que ideas tienes para desarrollar<br />en el sistema de GUI.<br /><br /><br />PD: me recuerdo que cree una vez un sistema de ventanas bastante sencillo con SDL <br />en donde podias crearlas dinamicamente, eran unos rectangulos con un area de colision superior y eran arrastrables.<br />no se si se podria tambien hacer algunas pruebas de aquello.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Sab Ene 22, 2011 2:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[danielpuch]]></name></author>
<updated>2011-01-21T22:28:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4826#p4826</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4826#p4826"/>
<title type="html"><![CDATA[Re: Buscamos UI para pilas (ideas?)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4826#p4826"><![CDATA[
Me gustan tambien los que son estilo &quot;Mac&quot;, Aqua, ipod, etc, etc...<br /><br />el que mas me gusto fue el primero de Android, tambien es onda &quot;aqua&quot;...<br /><br /><!-- m --><a class="postlink" href="http://www.matcheck.cz/androidguipsd/">http://www.matcheck.cz/androidguipsd/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2372">danielpuch</a> — Vie Ene 21, 2011 10:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-01-21T21:39:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4824#p4824</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4824#p4824"/>
<title type="html"><![CDATA[Re: Buscamos UI para pilas (ideas?)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4824#p4824"><![CDATA[
Saludos Hugo <br />encuentro buenisima idea lo de crear una gui,<br /><br />en particular me gusta un diseño de interface algo plateado como este:<br />&quot;Google Android GUI PSD&quot;<br /><!-- m --><a class="postlink" href="http://chrisbrummel.com/google-android-gui-psd">http://chrisbrummel.com/google-android-gui-psd</a><!-- m --><br /><br />o algo al estilo Mac OS:<br />&quot;Aqua GUI&quot;<br />&quot;Mac OS X Interface 2&quot;<br /><br /><br />Saludos a Todos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Vie Ene 21, 2011 9:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-01-21T21:13:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4823#p4823</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4823#p4823"/>
<title type="html"><![CDATA[Buscamos UI para pilas (ideas?)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1019&amp;p=4823#p4823"><![CDATA[
Buenas, quería comentarles que dentro de unos dias quiero<br />hacer un sistema de GUI sencillo para pilas, pero necesitaría elegir<br />un aspecto visual para las cajas de texto, botones y listas.<br /><br />¿que les parecen estos diseños de interfaces?:<br /><br /><!-- m --><a class="postlink" href="http://www.smashingmagazine.com/2010/08/27/free-wireframing-kits-ui-design-kits-pdfs-and-resources/">http://www.smashingmagazine.com/2010/08 ... resources/</a><!-- m --><br /><br />¿les gusta alguno de ellos en particular?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ene 21, 2011 9:13 pm</p><hr />
]]></content>
</entry>
</feed>