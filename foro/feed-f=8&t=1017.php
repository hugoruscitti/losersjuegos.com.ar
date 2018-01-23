<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1017" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-03T02:40:46+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1017</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-02-03T02:40:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=5022#p5022</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=5022#p5022"/>
<title type="html"><![CDATA[Re: error LNK2019: símbolo externo _main sin resolver]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=5022#p5022"><![CDATA[
Ok mersi ya me queda mas claro<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Feb 03, 2011 2:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-27T01:50:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4903#p4903</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4903#p4903"/>
<title type="html"><![CDATA[Re: error LNK2019: símbolo externo _main sin resolver]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4903#p4903"><![CDATA[
básicamente son para coger los parametros de la línea de comandos<br /><br />argc, el numero de parametros pasados<br />argv, los propios parámetros<br /><br />El porque se debe a que windows tiene una función específica winmain que te exige dichos parámetros. Como SFML hace uso de esa función en windows, tienes que usar este formato. Fijate que en linux ni siquiera existe SFML-Main, que es la encargada de este tema en windows.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Ene 27, 2011 1:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-26T14:52:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4893#p4893</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4893#p4893"/>
<title type="html"><![CDATA[Re: error LNK2019: símbolo externo _main sin resolver]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4893#p4893"><![CDATA[
Ah ok gracias, era por lo del int main(int argc, char* argv[]), por cierto, que son esos parametros y por que hay que ponerlos?<br />gracias de nuevo juanxo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Ene 26, 2011 2:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-01-20T16:15:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4806#p4806</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4806#p4806"/>
<title type="html"><![CDATA[Re: error LNK2019: símbolo externo _main sin resolver]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4806#p4806"><![CDATA[
parece que no tienes bien linkados las librerías de SDL<br /><br />por cierto, parece una xorrada, pero:<br /><br />int main(int argc, char* argv[]) es distinto de int main() en windows. Y SDL y SFML tiran errores por esto<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Ene 20, 2011 4:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-01-20T13:36:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4802#p4802</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4802#p4802"/>
<title type="html"><![CDATA[error LNK2019: símbolo externo _main sin resolver]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1017&amp;p=4802#p4802"><![CDATA[
Buenaas! tengo un problema con un codigo que no me deja compilar :S Y diria que no hay nada raro, almenos yo no lo veo.<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;conio.h&gt;<br />#include &quot;SDL.h&quot;<br />#include &quot;SDL_image.h&quot;<br /><br />int main()<br />{<br />   getch();<br />   return 0;<br />}<br /></code></dd></dl><br /><br /> El error es este: <br />1&gt;MSVCRTD.lib(crtexe.obj) : error LNK2019: símbolo externo _main sin resolver al que se hace referencia en la función ___tmainCRTStartup<br />1&gt;C:\Users\Administrador\Documents\Visual Studio 2008\Projects\PRUEBAS SDL\Debug\Mouse y teclado.exe : fatal error LNK1120: 1 externos sin resolver<br /><br /><br />EDITO: Me tira el mismo error tambien con cualquier funcion de SDL.. que esta pasando aqui?!:S<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Ene 20, 2011 1:36 pm</p><hr />
]]></content>
</entry>
</feed>