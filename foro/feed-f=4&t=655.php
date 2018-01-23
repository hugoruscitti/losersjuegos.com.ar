<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=655" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-11-14T00:19:32+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=655</id>
<entry>
<author><name><![CDATA[Facon]]></name></author>
<updated>2009-11-14T00:19:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=655&amp;p=3039#p3039</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=655&amp;p=3039#p3039"/>
<title type="html"><![CDATA[Pinocho - Just Another Chip8 Emulator]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=655&amp;p=3039#p3039"><![CDATA[
Bueno veréis hace poco he estado trabajando en el desarrollo de un emulador en C puro, y vaya si lo he logrado <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> , el problema que le veo es que es bastante lento ha pesar de que lo probe con la optimización -O3.<br /><br />Si le echáis un vistazo al código veréis que no es precisamente claro, a pesar de haber documentado todo lo mejor posible, también hago uso bastante de variables globales, en general, no es lo mejor que uno podría esperar.<br /><br />Características relevantes:<br /><ul><li>Reescalado desde 1x a INFx, antes del compilado. Eso sí tardara aun más en hacer las operaciones.</li><li>Multiplataforma (Windows, *NIX, Mac OS X, y todas los SO que soporte SDL, así como también otras arquitecturas).</li><li>Teclado:<br />1 2 3 4<br />q w e r<br />a s d f<br />z x c v<br /><a href="http://devernay.free.fr/hacks/chip8/C8TECH10.HTM#keyboard" class="postlink">Teclado original</a></li></ul><br /><br />Documentación:<br /><br /><!-- m --><a class="postlink" href="http://devernay.free.fr/hacks/chip8/C8TECH10.HTM#0.0">http://devernay.free.fr/hacks/chip8/C8TECH10.HTM#0.0</a><!-- m --><br /><br />Descarga:<br /><br /><!-- m --><a class="postlink" href="http://www.mediafire.com/?mmmj3nzuqzd">http://www.mediafire.com/?mmmj3nzuqzd</a><!-- m --><br /><br />A lo mejor me podéis ayudar a mejorar el código de la representación en pantalla.<br /><br />Un Saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2116">Facon</a> — Sab Nov 14, 2009 12:19 am</p><hr />
]]></content>
</entry>
</feed>