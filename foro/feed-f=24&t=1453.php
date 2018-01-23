<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1453" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-21T15:05:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1453</id>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-04-21T15:05:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6685#p6685</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6685#p6685"/>
<title type="html"><![CDATA[Re: Actualizar en una Escena]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6685#p6685"><![CDATA[
Ok, pensaba que estaba hacia algo mal <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br />Gracias Hugo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Sab Abr 21, 2012 3:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-04-21T14:09:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6684#p6684</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6684#p6684"/>
<title type="html"><![CDATA[Re: Actualizar en una Escena]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6684#p6684"><![CDATA[
Si, evidentemente es un bug.... ahora lo voy a cargar en el bugtracker.<br /><br />Por lo pronto, creo que podrías desconectar la señal en el método &quot;terminar&quot;<br />de la escena, que se llama automáticamente cuando pilas quita la escena<br />de ejecución.<br /><br />Igual, es un bug, lo voy a investigar...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Abr 21, 2012 2:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2012-04-20T20:15:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6683#p6683</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6683#p6683"/>
<title type="html"><![CDATA[Actualizar en una Escena]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1453&amp;p=6683#p6683"><![CDATA[
¿Como puedo tener un método en una Escena que se ejecute en cada actualización?<br />Esto es lo que tengo.<br /><pre class="prettyprint">class MiEscena&#40;Normal&#41;:<br />    def __init__&#40;self&#41;:<br />        Normal.__init__&#40;self&#41;<br />        pilas.eventos.actualizar.conectar&#40;self.actualizar&#41;<br /><br />    def actualizar&#40;self.evento&#41;:<br />        pass</pre><br /><br />El problema es que si cambio de escena los eventos asignados a la escena permanecen.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Vie Abr 20, 2012 8:15 pm</p><hr />
]]></content>
</entry>
</feed>