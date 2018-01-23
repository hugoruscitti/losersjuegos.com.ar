<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=3039" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-11-12T23:16:50+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=3039</id>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2013-11-12T23:16:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305"/>
<title type="html"><![CDATA[Re: No reproduce el sonido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9305#p9305"><![CDATA[
<blockquote><div><cite>Natalia escribió:</cite><br />No, ya esta. <br />Era asi:<br /><pre class="prettyprint">musica=pilas.musica.cargar&#40;&quot;tangananica.mp3&quot;&#41;<br />musica.reproducir&#40;repetir=True&#41;<br />musica.detener&#40;&#41;</pre><br /></div></blockquote><br /><br />Creo que ya lo descubriste jejej.<br /><br />Que bien que funcionó.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Mar Nov 12, 2013 11:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-12T23:10:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9304#p9304</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9304#p9304"/>
<title type="html"><![CDATA[Re: No reproduce el sonido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9304#p9304"><![CDATA[
No, ya esta. <br />Era asi:<br /><pre class="prettyprint">musica=pilas.musica.cargar&#40;&quot;tangananica.mp3&quot;&#41;<br />musica.reproducir&#40;repetir=True&#41;<br />musica.detener&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Mar Nov 12, 2013 11:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-12T22:19:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9303#p9303</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9303#p9303"/>
<title type="html"><![CDATA[Re: No reproduce el sonido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9303#p9303"><![CDATA[
Hola IrvingProg, Muchas gracias por responder y...¡Funcionó! Muchisimas gracias,  ¿pero me podrias ayudar en una cosita mas? ¿Cual es el codigo para detener la musica? Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Mar Nov 12, 2013 10:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[IrvingProg]]></name></author>
<updated>2013-11-09T10:11:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9301#p9301</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9301#p9301"/>
<title type="html"><![CDATA[Re: No reproduce el sonido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9301#p9301"><![CDATA[
Hola Natalia.<br /><br />Es muy probable que sea por la librería que utiliza el motor para reproducir el sonido por defecto. Realicé unas pruebas sin mover nada de parametros y tampoco puedo reproducir mp3 u Ogg. <br /><br />Me funcionó de esta manera:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;audio=&quot;phonon&quot;&#41;<br /><br />sonido = pilas.musica.cargar&#40;&quot;/home/irving/algo.mp3&quot;&#41;<br />sonido.reproducir&#40;repetir=True&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Te recomiendo intentar modificando el parametro audio, puede recibir los valores: &quot;phonon&quot;, &quot;pygame&quot; o &quot;gst&quot;.<br /><br />Por cierto, si tienes mas dudas de Pilas, también de podemos ayudar por este foro: <!-- m --><a class="postlink" href="http://foro-pilasengine.com.ar/">http://foro-pilasengine.com.ar/</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2369">IrvingProg</a> — Sab Nov 09, 2013 10:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-06T22:41:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9296#p9296</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9296#p9296"/>
<title type="html"><![CDATA[No reproduce el sonido]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3039&amp;p=9296#p9296"><![CDATA[
Hola a todos!<br />Le quise poner una música de inicio a mi juego para el menú pero no reproduce nada. Ya cambie el mp3 a ogg y a wav y nada. Utilice también<br />cargar sonido y cargar musica y nada.<br /><pre class="prettyprint">music=pilas.musica.cargar&#40;&quot;menu.mp3&quot;&#41;<br /> music.reproducir&#40;repetir=True&#41;</pre><br /> Adios. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Mié Nov 06, 2013 10:41 pm</p><hr />
]]></content>
</entry>
</feed>