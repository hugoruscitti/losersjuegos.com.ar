<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1214" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-22T03:04:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1214</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-07-22T03:04:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5749#p5749</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5749#p5749"/>
<title type="html"><![CDATA[Re: Fricción?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5749#p5749"><![CDATA[
sip... es cierto!, ahora lo voy a arreglar. mil gracias por el dato.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Jul 22, 2011 3:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cosarara97]]></name></author>
<updated>2011-07-21T22:39:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5747#p5747</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5747#p5747"/>
<title type="html"><![CDATA[Re: Fricción?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5747#p5747"><![CDATA[
Si, funciona <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />, gracias por la ayuda!<br />Y ya que estamos, creo que habría que actualizar la segunda parte del tutorial aceitunas vs bombas, porque el ejemplo de codigo para las &quot;bombas_con_movimiento&quot; es este:<br /><pre class="prettyprint">class BombaConMovimiento&#40;Bomba&#41;:<br /><br />    def __init__&#40;self, x=0, y=0&#41;:<br />        Bomba.__init__&#40;self, x, y&#41;<br /><br />        <span style="font-weight: bold">self.circulo = pilas.fisica.Circulo&#40;x, y, 20, restitucion=1, friccion=0&#41;</span><br />        self.imitar&#40;self.circulo&#41;<br /><br />        self._empujar&#40;&#41;<br /><br />    def _empujar&#40;self&#41;:<br />        dx = 1<br />        dy = 1<br />        self.circulo.impulsar&#40;dx * 100000, dy * 100000&#41;</pre><br />Y, claro, las bombas acaban paradas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2469">cosarara97</a> — Jue Jul 21, 2011 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-07-21T15:33:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5746#p5746</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5746#p5746"/>
<title type="html"><![CDATA[Re: Fricción?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5746#p5746"><![CDATA[
Buenas, como estas?<br /><br />Te comento que para hacer constante el movimiento tendrías que definir<br />también la amortiguación. Porque eso le resta enegía en las colisiones.<br /><br />Por ejemplo,basado en tu código anterior, al crear la circunferencia probá<br />haciendo algo como esto:<br /><br /><pre class="prettyprint">circulo1 = pilas.fisica.Circulo&#40;10, 200, 20, restitucion=1, friccion=0, amortiguacion=0&#41;</pre><br /><br />Avisanos si te sirve la solución. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Jul 21, 2011 3:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cosarara97]]></name></author>
<updated>2011-07-21T11:30:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5745#p5745</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5745#p5745"/>
<title type="html"><![CDATA[Fricción?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1214&amp;p=5745#p5745"><![CDATA[
Ok, otro problema!<br />Tengo esto:<br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;gravedad=&#40;0, 0&#41;&#41;<br />circulo1 = pilas.fisica.Circulo&#40;10, 200, 50, restitucion=1, friccion=0&#41;<br />circulo1.definir_velocidad_lineal&#40;1000, 1000&#41;<br />pilas.ejecutar&#40;&#41;</pre><br />Yo creo que con esto debería aparecer un circulo invisible (que podríamos ver con F11) que rebotaría por la pantalla hasta que cerráramos el programa. Y no es exactamente lo que pasa. El circulo empieza a moverse rápido, pero va frenando poco a poco hasta quedar parado del todo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br />Supongo que esto sería normal si hubiera fricción, pero no la hay, y creo que restitución 1 significa que rebota con la misma fuerza que llega a la pared (aunque no estoy muy seguro <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />).<br />Entonces hago 2 preguntas:<br />¿Porqué se para?<br />¿Como lo hago para que no se pare?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2469">cosarara97</a> — Jue Jul 21, 2011 11:30 am</p><hr />
]]></content>
</entry>
</feed>