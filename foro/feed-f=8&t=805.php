<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=805" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-04T16:44:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=805</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-08-04T16:44:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3656#p3656</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3656#p3656"/>
<title type="html"><![CDATA[Re: Problema compilando en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3656#p3656"><![CDATA[
<blockquote class="uncited"><div><br />vale, como has comentado es debido a ese error. Quiero pensar que no eres tonto, porque entonces casi todos los que estamos aquí lo somos (muchas veces son cosas tan tontas que es dificil de ver).<br /></div></blockquote> secundo la moción! xD.<br />no hace falta que te trates asi Garolard...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié Ago 04, 2010 4:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-29T19:30:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3581#p3581</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3581#p3581"/>
<title type="html"><![CDATA[Re: Problema compilando en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3581#p3581"><![CDATA[
vale, como has comentado es debido a ese error. Quiero pensar que no eres tonto, porque entonces casi todos los que estamos aquí lo somos (muchas veces son cosas tan tontas que es dificil de ver). <br /><br />Para la proxima, un par de consejos:<br /><br />en los mensajes de error te aparece: el archivo donde da el error, la linea y el tipo de error. Normalmente el error estará en esa linea o la superior/es<br /><br />saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jul 29, 2010 7:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Garolard]]></name></author>
<updated>2010-07-29T17:16:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3580#p3580</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3580#p3580"/>
<title type="html"><![CDATA[Re: Problema compilando en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3580#p3580"><![CDATA[
Vale, soy subnormal chavales...... en el archivo de la aplicación, en la línea 108, en vez de escribir SDL_QUIT (todo en mayúsculas) he escrito SDL_Quit.... he probado a corregirlo y compilarlo con g++ y ahora va todo como la seda...<br /><br />soy tonto soy tonto soy tonto soy tonto soy tonto y ultra mega re tonto..................... podeis cerrar el post, perdón por hacer bulto U.U<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2155">Garolard</a> — Jue Jul 29, 2010 5:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Garolard]]></name></author>
<updated>2010-07-29T17:12:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3579#p3579</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3579#p3579"/>
<title type="html"><![CDATA[Problema compilando en C/C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=805&amp;p=3579#p3579"><![CDATA[
Hola chicos, ¿Cómo estais? Vereis, estoy intentando compilar un &quot;minijuego&quot; muy muy sencillo. El escenario es este: tengo un archivo de cabecera (.h) y su implementación (.cpp) en C++. Estos dos archivos los he compilado a parte para conseguir el código objeto (.o). Ahora, he querido hacer el videojuego en un solo archivo en C, queriendo usar algunas funciones y clases que he declarado en los dos primeros archivos. Pero el problema llega a la hora de compilar. Si lo compilo con g++ con el comando:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>g++ -o naves naves.c csprite.o</code></dd></dl><br /><br />Me suelta por respuesta lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>naves.c: In function ‘int init_sprites()’:<br />naves.c:64: aviso: conversión obsoleta de una constante de cadena a ‘char*’<br />naves.c:67: aviso: conversión obsoleta de una constante de cadena a ‘char*’<br />naves.c: In function ‘int main(int, char**)’:<br />naves.c:108: error: ISO C++ prohíbe la comparación entre puntero y entero</code></dd></dl><br /><br />Y si intento compilarlo con gcc con el comando:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>gcc -o naves naves.c csprite.o</code></dd></dl><br /><br />La respuesta es la siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>In file included from naves.c:4:<br />csprite.h:6: error: expected ‘=’, ‘,’, ‘;’, ‘asm’ or ‘__attribute__’ before ‘CFrame’<br />csprite.h:13: error: expected ‘=’, ‘,’, ‘;’, ‘asm’ or ‘__attribute__’ before ‘CSprite’<br />naves.c:11: error: expected ‘=’, ‘,’, ‘;’, ‘asm’ or ‘__attribute__’ before ‘fnave’<br />naves.c:12: error: expected ‘=’, ‘,’, ‘;’, ‘asm’ or ‘__attribute__’ before ‘fmalo’<br />naves.c:13: error: expected ‘=’, ‘,’, ‘;’, ‘asm’ or ‘__attribute__’ before ‘nave’<br />naves.c:14: error: expected ‘=’, ‘,’, ‘;’, ‘asm’ or ‘__attribute__’ before ‘malo’<br />naves.c: En la función ‘draw_scene’:<br />naves.c:28: error: ‘nave’ no se declaró aquí (primer uso en esta función)<br />naves.c:28: error: (Cada identificador no declarado solamente se reporta una vez<br />naves.c:28: error: para cada funcion en la que aparece.)<br />naves.c:40: error: ‘malo’ no se declaró aquí (primer uso en esta función)<br />naves.c: En la función ‘finalize’:<br />naves.c:59: error: ‘nave’ no se declaró aquí (primer uso en esta función)<br />naves.c:60: error: ‘malo’ no se declaró aquí (primer uso en esta función)<br />naves.c: En la función ‘init_sprites’:<br />naves.c:64: error: ‘fnave’ no se declaró aquí (primer uso en esta función)<br />naves.c:65: error: ‘nave’ no se declaró aquí (primer uso en esta función)<br />naves.c:67: error: ‘fmalo’ no se declaró aquí (primer uso en esta función)<br />naves.c:68: error: ‘malo’ no se declaró aquí (primer uso en esta función)<br />naves.c: En la función ‘main’:<br />naves.c:108: aviso: comparación entre puntero y entero<br /></code></dd></dl><br /><br />El archivo de cabecera es como sigue:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#ifndef CSPRITE_H_<br />#define CSPRITE_H_<br />#define TRUE 1<br />#define FALSE 0<br />// CFrame representa un frame independiente de un sprite.<br />class CFrame {<br />public:<br />   SDL_Surface *img;<br />   void load(char *path);<br />   void unload();<br />};<br />// La clase CSprite está formada por un array de frames;<br />class CSprite {<br />private:<br />   int posx,posy;<br />   int state;<br />   int nframes;<br />   int cont;<br />public:<br />   CFrame *sprite;<br />   CSprite(int nf);<br />   CSprite();<br />   void finalize();<br />   void addframe(CFrame frame);<br />   void selframe(int nf);<br />   int frames() {return cont;}<br />   void setx(int x) {posx=x;}<br />   void sety(int y) {posy=y;}<br />   void addx(int c) {posx+=c;}<br />   void addy(int c) {posy+=c;}<br />   int getx() {return posx;}<br />   int gety() {return posy;}<br />   int getw() {return sprite&#91;state&#93;.img-&gt;w;}<br />   int geth() {return sprite&#91;state&#93;.img-&gt;h;}<br />   void draw(SDL_Surface *superficie);<br />   int colision(CSprite sp);<br />};<br />#endif /* CSPRITE_H_ */<br /></code></dd></dl><br /><br />Os dejo también en pastebin la implementación:<br /><br /><!-- m --><a class="postlink" href="http://pastebin.org/428195">http://pastebin.org/428195</a><!-- m --><br /><br />Y el propio archivo de la aplicación:<br /><br /><!-- m --><a class="postlink" href="http://pastebin.org/428197">http://pastebin.org/428197</a><!-- m --><br /><br />(Los pongo en pastebin para que este post no sea inmenso.)<br /><br />Muchas gracias por anticipado por cualquier pista o ayuda. Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2155">Garolard</a> — Jue Jul 29, 2010 5:12 pm</p><hr />
]]></content>
</entry>
</feed>