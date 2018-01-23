<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=482" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-13T05:16:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=482</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-13T05:16:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2098#p2098</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2098#p2098"/>
<title type="html"><![CDATA[Error de main con g++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2098#p2098"><![CDATA[
muchas gracias por la respuesta...<br />era error mio en la declaración del main como dices...<br /><blockquote class="uncited"><div><br />pero la declaración correcta de main es:<br /><br />Código:<br />int main(int argc, char *argv [])<br /></div></blockquote><br />de cualquier forma decidí mejor usar el g++-4.1 como compilador por defecto. no se si te entendí bien...<br /><blockquote class="uncited"><div><br />ah, y con respecto al compilador por defecto, el comando gcc es<br />solo un enlace simbólico al compilador por defecto, si quieres<br />cambiarlo solo es cuestión de borrar el enlace y hacer uno nuevo<br />apuntando al compilador que quier<br /></div></blockquote><br />pero yo lo hice de la siguiente manera<br /><dl class="codebox"><dt>Code: </dt><dd><code>export CXX=g++-4.1</code></dd></dl><br />No se si esa sea la manera correcta de hacerlo...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Vie Feb 13, 2009 5:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-02-11T20:08:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2097#p2097</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2097#p2097"/>
<title type="html"><![CDATA[Error de main con g++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2097#p2097"><![CDATA[
pero la declaración correcta de main es:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>int main&#40;int argc, char *argv &#91;&#93;&#41;</code></dd></dl><br /><br />seguramente gcc 4 no te indique el error porque no estás<br />utilizando la opción -Wall al compilar, esta opción te<br />advierte cualquier tipo de inconsistencia... aunque no sea<br />algo realmente imporatante.<br /><br />ah, y con respecto al compilador por defecto, el comando gcc es<br />solo un enlace simbólico al compilador por defecto, si quieres<br />cambiarlo solo es cuestión de borrar el enlace y hacer uno nuevo<br />apuntando al compilador que quieras.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Feb 11, 2009 8:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-11T05:15:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2093#p2093</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2093#p2093"/>
<title type="html"><![CDATA[Error de main con g++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2093#p2093"><![CDATA[
Bueno aqui respondiendome solo...  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> <br />Segun entendi (y no se si estoy en lo correcto) el error biene solo por que uso g++-4.3 por alguna extraña razon esta version da problemas (o al menos a mi) con esta linea...<br />cuando compilo usando g++-4.0 main.cpp -c y ya saben el resto.... compila perfecto<br />Ahora mi pregunta es alguien sabe como hacer que el compilador 4.0 sea por defecto el que use sin necesidad de estar teclenado g++-4.0 ¿?<br />De antemano gracias y pido disculpas por la confucion que pueda dar...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Feb 11, 2009 5:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-11T04:39:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2091#p2091</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2091#p2091"/>
<title type="html"><![CDATA[Error de main con g++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=482&amp;p=2091#p2091"><![CDATA[
Tratando de compilar unos ejemplos que cree en otra distro me da un error al compilar...<br /><dl class="codebox"><dt>Code: </dt><dd><code>main.cpp:4: error: first argument of 'int main&#40;int*, char**&#41;' should be 'int'<br />make: *** &#91;compile&#93; Error 1</code></dd></dl><br />el main.cpp es asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />#include &lt;cstdlib&gt;<br />using namespace std;<br />int main&#40; int *argc, char *argv&#91;&#93; &#41;&#123;<br />      return 0;<br />&#125;<br /></code></dd></dl><br />La verdad no tengo ni idea de que es lo que esta pasando...<br />De antemano gracias...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Mié Feb 11, 2009 4:39 am</p><hr />
]]></content>
</entry>
</feed>