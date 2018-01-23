<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=874" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-19T05:58:21+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=874</id>
<entry>
<author><name><![CDATA[blogmaster765]]></name></author>
<updated>2010-09-19T05:58:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4138#p4138</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4138#p4138"/>
<title type="html"><![CDATA[Re: guardar datos del juego para posterior uso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4138#p4138"><![CDATA[
bueno gracias por el dato carlos voy a ver como lo soluciono<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2327">blogmaster765</a> — Dom Sep 19, 2010 5:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-19T05:21:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4137#p4137</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4137#p4137"/>
<title type="html"><![CDATA[Re: guardar datos del juego para posterior uso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4137#p4137"><![CDATA[
Solo como comentario, los videjuegos se pueden escribir en muchos lenguajes, los que dominamos aca son python y C/C++, Hubieras puesto desde el principio que leguaje usas y la primera respuesta seria la hacertada.Bueno, al caso.<br /><br />En C++ existen dos formas de leer un archivo, modo de texto plano y binario, usarias el texto plano para txt, xml, y en general es cualquier archivo que los editores de texto pueden abrir. Los archivos binarios son escritos por las funciones de C++ en conjuntos bytes,incluso los archivos planos son escritos asi, pero el texto plano tiene una forma conocida de ser leido, miestras que los binarios no pueden ser abiertos por los editores, pues solo el programador conoce su estructura. Si yo quisera guardar los datos de una cliente haria una estructura asi:<br /><dl class="codebox"><dt>Code: </dt><dd><code>struct cliente<br />{<br />     int ID;<br />     char *nombre;<br />     int telefono;<br />      char *direccion;<br />};<br /><br /></code></dd></dl><br /><br />Este es un curso donde hablan de archivos <a href="http://c.conclase.net/curso/index.php?cap=039#inicio" class="postlink">http://c.conclase.net/curso/index.php?cap=039#inicio</a><br /><br />En el curso muestran que solo le pasas la referencia de la estructura y se guarda, pero no siempre es facil, es la <br />estructura anterior nombre es una direccion de memoria y no en si el nombre, y asi no lo podras guardar, para eso se usa una <br />escritura secuencial, en general toda estructura que sea dinamica tendras que usar escritura secuencial, es la unica forma que conozco, y siempre me ha funcionado bien.<br /><br />En este caso, el usuario no podra acceder tan facil a la informacion del archivo, pero si que se puede, con un editor hexadecimal, sin embargo seria dificil hayar la estructura del archivo para interpretarla, <br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Sep 19, 2010 5:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blogmaster765]]></name></author>
<updated>2010-09-19T03:36:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4134#p4134</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4134#p4134"/>
<title type="html"><![CDATA[Re: guardar datos del juego para posterior uso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4134#p4134"><![CDATA[
mmm si pero phyton es un lenguaje que todavia no he aprendido mas alla de que es muy potente yo estoy trabajando con c++ me gusto eso del txt aunque seria muy facil de modificar desde afuera o sea por otra persona o me equivoco,pero tambien me parece mas practico y facil gracias por las repuesta y ustedes que dicen que me conviene....????<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2327">blogmaster765</a> — Dom Sep 19, 2010 3:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-14T19:55:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4106#p4106</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4106#p4106"/>
<title type="html"><![CDATA[Re: guardar datos del juego para posterior uso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4106#p4106"><![CDATA[
Cierto, depende del lenguaje que utilices. En python una forma sencilla<br />es tener los datos en memoria y luego usar cpickle para volcarlos<br />o leerlos desde disco:<br /><br /><!-- m --><a class="postlink" href="http://mundogeek.net/archivos/2008/05/20/python-serializacion-de-objetos/">http://mundogeek.net/archivos/2008/05/2 ... e-objetos/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Sep 14, 2010 7:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-09-14T13:54:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4104#p4104</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4104#p4104"/>
<title type="html"><![CDATA[Re: guardar datos del juego para posterior uso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4104#p4104"><![CDATA[
pues depende del lenguaje y como lo quieras guardar, por ejemplo pickle de python (creo que esta en C también) sirve para guardar variables en un fichero. Pero puedes usar XML, txt, etc.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Mar Sep 14, 2010 1:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[blogmaster765]]></name></author>
<updated>2010-09-14T03:45:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4103#p4103</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4103#p4103"/>
<title type="html"><![CDATA[guardar datos del juego para posterior uso]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=874&amp;p=4103#p4103"><![CDATA[
<span style="color: #FF0000">bueno la cosa es haci quisiera saber como se guardan los datos por ejemplo puntajes o cosas haci la progrmacion del juego y los graficos mas o menos los manejo pero no se como guardar datos si alguien me ayudara se lo agraceria</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2327">blogmaster765</a> — Mar Sep 14, 2010 3:45 am</p><hr />
]]></content>
</entry>
</feed>