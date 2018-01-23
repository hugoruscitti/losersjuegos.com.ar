<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1041" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-03T21:09:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1041</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-02-03T21:09:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5037#p5037</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5037#p5037"/>
<title type="html"><![CDATA[Re: sf.Clock para manejar el tiempo en animacion?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5037#p5037"><![CDATA[
es que lo de 30 o 60 es porque en 3D cuando se guarda una animación se guarda una &quot;pose&quot; cada 1/30 segundos o 1/60 segundos, pero no se si en 2D también valdrá este ajuste<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Feb 03, 2011 9:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-02-03T19:22:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5035#p5035</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5035#p5035"/>
<title type="html"><![CDATA[Re: sf.Clock para manejar el tiempo en animacion?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5035#p5035"><![CDATA[
ah, ya veo, SFML Rulez! xD<br />asi que debo de cambiar de frame cada 1/30... segundo? o sea, 0.0333333333333333 segundos existen entre frame y frame, eso claro, suponiendo que el framerate sea de 30 o 60.<br /><br />vale, comprendo, investigare un poco mas, subo resultados (si son satisfactorios) y posteo por acá <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Feb 03, 2011 7:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-02-03T12:29:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5030#p5030</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5030#p5030"/>
<title type="html"><![CDATA[Re: sf.Clock para manejar el tiempo en animacion?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5030#p5030"><![CDATA[
se puede hacer con sf.Clock como dices, pero el programador de SFML ya tuvo esto en cuenta. Si te fijas, en la clase window, tienes un método que es GetElapsedTime que te devuelve el número de segundos que han pasado desde el frame anterior. Este tiempo debes hacerselo llegar a las animaciones.<br /><br />Por lo general la mayoría de las animaciones se toman a 30 o 60 frames, por lo que deberás cambiar de frame cada 1/30 o 1/60 segundos<br /><br />Nota: lo de las velocidades de las animaciones es sobretodo en 3D, no se como será en el 2D<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Feb 03, 2011 12:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-02-03T04:25:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5024#p5024</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5024#p5024"/>
<title type="html"><![CDATA[sf.Clock para manejar el tiempo en animacion?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1041&amp;p=5024#p5024"><![CDATA[
hola! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />sucede que estoy atascado con esto de la animación de sprites, no veo como pueda manejar el tiempo que existe entre un frame y otro, en especial cuando el personaje camina. Parece que algunos programadores de por acá usan Timers o algo similar en SDL o similares, yo encontre en PySFML que es posible usar un objeto llamado sf.Clock para manejar el tiempo entre la ultima llamada a Reset (clock.GetElapsedTime()) y es posible resetear el tiempo del objeto de tipo sf.Clock, aun así, quiero escuchar opiniones y/o técnicas de manejo del tiempo orientado a la animacion de sprites, explicados en lenguaje natural o en pseudocódigo de ser posible.<br /><br />este tema tiene que ver con el sexto ejemplo que esta en el repositorio de ejemplos de PySFML (<!-- m --><a class="postlink" href="https://bitbucket.org/shackra/ejemplos-pysfml">https://bitbucket.org/shackra/ejemplos-pysfml</a><!-- m -->) ya que aun no sé como lograr una animación menos &quot;redbull&quot; y mas &quot;suave&quot;.<br /><br />gracias! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Feb 03, 2011 4:25 am</p><hr />
]]></content>
</entry>
</feed>