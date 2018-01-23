<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=458" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-26T15:59:10+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=458</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-01-26T15:59:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1963#p1963</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1963#p1963"/>
<title type="html"><![CDATA[ventana centra (splash)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1963#p1963"><![CDATA[
el codigo que has puesto, por lo que he entendido es para introducirlo en una terminal, se crea la variable de entorno y ya todas las ventanas creadas con SDL aparecerian centradas ¿no?.<br /><br />Pero el problema es que solo ncesito centrar una ventana, la primera sin borde, despues de un tiempo cerrar dicha ventana y abrir ya la definitiva del programa. La idea es hacerlo desde dentro del programa, sin que para despues usar el programa en otro ordenador tenga que definir otra vez variables de entorno.<br /><br />Si SDL no presenta una capa para esta accion de mover una capa, ¿como se podria realizar en diferentes sistemas, y asi hago un .h y un .c con el codigo con copilacion condicional en funcion del sistema y arreglado?<br /><br />Una vez deje de necesitar la ventana sin borde centrada, ¿se puede eliminar (cerrar) dicha ventana para abrir ya la definitiva en la que se trabajara?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Lun Ene 26, 2009 3:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-26T15:31:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1962#p1962</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1962#p1962"/>
<title type="html"><![CDATA[ventana centra (splash)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1962#p1962"><![CDATA[
Saludos, SDL no provee una capa para hacer esto<br />de manera compatible en varios sistemas. Por eso<br />creo que tendrías que realizar algo como lo que<br />comentas: una compilación condicional para cada<br />plataforma.<br /><br />En el caso de GNU/Linux, para centrar la pantalla<br />tienes que definir la variable de entorno<br />SDL_VIDEO_CENTERED. Por ejemplo, si ejecutas<br />desde una consola:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>export SDL_VIDEO_CENTERED=1</code></dd></dl><br /><br />al crear una ventana con SDL, o incluso pygame, la<br />ventana siempre aparecerá en el centro de pantalla.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Ene 26, 2009 3:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-01-25T22:57:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1961#p1961</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1961#p1961"/>
<title type="html"><![CDATA[ventana centra (splash)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=458&amp;p=1961#p1961"><![CDATA[
Hola, en un programa estoi intentando hacer que al iniciarse un programa aparezca una imagen sin borde (sin ventana) centrada en la ventana pero sobre el escritorio, como una ventana sin borde centrada; el problema es que, por propia experiencia, se que al crear una ventana con SDL esta se crea en un punto cualquiera del escritorio (no se si aleatorio o no) y no se como mover esa ventana para que aparezca centrada en el escritorio, se como crear la ventana si el borde en SDL, pero ademas de eso necesitaria centrarla. A ser posible seria interesante que la solucion fuese portable entre sistemas.<br /><br />El lenguaje con el que estoi programando es C, y estoi en un sistema GNU/Linux (pero repito que prefiero usar codigo portable que codigo que solo funcione en un sistema, si no fuese posible necesitaria saber como hacerlo en linux y en windows y ya arreglaria la portabilidad con una compilacion condicional).<br /><br />Gracias de antemano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Ene 25, 2009 10:57 pm</p><hr />
]]></content>
</entry>
</feed>