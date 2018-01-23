<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=405" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-11-20T00:08:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=405</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-11-20T00:08:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1751#p1751</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1751#p1751"/>
<title type="html"><![CDATA[retraso de sonido en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1751#p1751"><![CDATA[
Saludos, ahí pude solucionar el problema de sonido en mi equipo<br />luego de la actualización a Ubuntu 8.10.<br /><br />Resulta que algunos equipos tienen un problema con el sistema de<br />sonido &quot;pulseaudio&quot;; entonces, deshabilitar este servicio y habilitar<br />ALSA en su lugar lo soluciona.<br /><br />Te comento los pasos que seguí para que funcione correctamente:<br /><br /><br />1 - Ir al menú &quot;Sistema -&gt; Preferencias -&gt; Sonido&quot;.<br />2 - Seleccionar &quot;ALSA - Advance...&quot; en todas las opciones de reproducción.<br />3 - Ir a consola y ejecutar:<br /><br />        alsa force-reload<br /><br />Ahora los programas no deberían tener ese retardo al reproducir audio,<br />toma recado de verificar eso antes de reiniciar el equipo.<br /><br />Luego, si todo funciona como esperas, los cambios se perderán al reiniciar<br />el equipo, por lo que puedes ejecutar unos comandos para que se guarden<br />los cambios:<br /><br />    sudo rm /etc/X11/Xsession.d/70pulseaudio<br />    sudo killall pulseaudio<br />    sudo apt-get remove pulseaudio<br /><br />Ya está, al menos en mi caso ahora el sonido en Ubuntu 8.10 va perfecto. Cualquier cosa me avisas, saludos torres.<br /><br />PD: es super raro que falle lo mismo en Windows... si no se<br />       soluciona publica al menos uno de los sonidos que te fallan, <br />       tal vez sea algo relacionado con esos archivos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Nov 20, 2008 12:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[torres]]></name></author>
<updated>2008-11-19T14:02:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1747#p1747</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1747#p1747"/>
<title type="html"><![CDATA[retraso de sonido en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1747#p1747"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />Estoy teniendo el mismo problema luego de actualizar<br />Ubuntu a la version 8.10, anterirmente no me<br />ocurria eso con la version 8.04.<br /><br />En cuanto tenga una forma de solucionarlo te aviso. Saludos.<br /></div></blockquote><br /><br /><br />Yo también uso ubuntu, pero para comprobar si era linux instalé python + pygame en windows y me daba el mismo retraso... no sabia que e la versión 8.04 no se da.<br /><br />Gracias por el interés, si encontrara solución tambien la postearia.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2022">torres</a> — Mié Nov 19, 2008 2:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-11-19T01:05:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1746#p1746</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1746#p1746"/>
<title type="html"><![CDATA[retraso de sonido en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1746#p1746"><![CDATA[
Estoy teniendo el mismo problema luego de actualizar<br />Ubuntu a la version 8.10, anterirmente no me<br />ocurria eso con la version 8.04.<br /><br />En cuanto tenga una forma de solucionarlo te aviso. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Nov 19, 2008 1:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[torres]]></name></author>
<updated>2008-11-18T20:48:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1745#p1745</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1745#p1745"/>
<title type="html"><![CDATA[retraso de sonido en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=405&amp;p=1745#p1745"><![CDATA[
Saludos (mi primer post <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" />)<br /><br />ando enfrascado en un proyecto personal, un juego de plataformas, con pygame, el caso es que al intruducirle sonido noto un retraso, Explico, tengo un sonido que se tendria que reproducir mientras el el personaje salta pulsando k_up pero para cuando se reproduce el personaje ya ha vuelto a tocar el suelo. Noté que los ejemplos de la web, digase colision de bolas o el juego del monotambién experimentan ese retraso.<br /><br />ahí va la pregunta:<br /><br />¿hay alguna forma de solucionar ese retraso?<br /><br />muchas gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2022">torres</a> — Mar Nov 18, 2008 8:48 pm</p><hr />
]]></content>
</entry>
</feed>