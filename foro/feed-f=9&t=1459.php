<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1459" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-06-04T20:52:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1459</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-06-04T20:52:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1459&amp;p=6821#p6821</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1459&amp;p=6821#p6821"/>
<title type="html"><![CDATA[Re: Clase genérica tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1459&amp;p=6821#p6821"><![CDATA[
<blockquote><div><cite>robloz escribió:</cite><br />¿Se os ocurre alguna alternativa?<br /></div></blockquote><br />Heeemm... usar ¿<a href="http://sfml-dev.org/" class="postlink">SFML</a>? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Jun 04, 2012 8:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[robloz]]></name></author>
<updated>2012-04-29T22:41:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1459&amp;p=6702#p6702</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1459&amp;p=6702#p6702"/>
<title type="html"><![CDATA[Clase genérica tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1459&amp;p=6702#p6702"><![CDATA[
Hola quiero implementar una clase abstracta en c++ que contenga la interfaz para manejar el teclado, de forma que sea independiente de la librería que utilice.<br />El diagrama de clases sería este<br />Tecla<br /><img src="http://es.zimagez.com/miniature/sinttulo132.png" alt="Imagen" /><br /><br />La interfaz tendría esta interfaz<br /><br /><pre class="prettyprint">class Tecla<br />{<br />public:<br />Tecla&#40;&#41;=0;<br />~Tecla&#40;&#41;=0;<br />void leerTeclas&#40;&#41;=0;<br />bool EstadoDown&#40;int tecla&#41;=0;<br />void DesactivarTeclas&#40;&#41;=0;<br />};</pre><br /><br />Mi problema reside en como insertar el parámetro tecla en al función 'bool EstadoDown(int tecla)'.<br />Ya que si me creo otro fichero para la clase Tecla_SDL y creo #define Tecla_a = SDL_key_a; y defino el mismo define en la clase Tecla_Allegro voy a tener conflicto.<br />Tampoco me termina de convencer crear variables públicas dentro de la clase Tecla para que las clases de las que herede le asigne los valores correspondientes<br /><pre class="prettyprint">Tecla{<br />public:<br />         int Tecla_a;<br />         int Tecla_b;<br />..........<br />}<br />.............<br />Tecla_SDL::Tecla_SDL&#40;&#41;{<br />       Tecla_a = SDL_key_a;<br />}<br />.............<br />Tecla_Allegro::Tecla_Allegro&#40;&#41;{<br />       Tecla_a = Allegro_key_a;<br />}</pre><br /><br />¿Se os ocurre alguna alternativa?<br /><br />Gracias!!! xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=92">robloz</a> — Dom Abr 29, 2012 10:41 pm</p><hr />
]]></content>
</entry>
</feed>