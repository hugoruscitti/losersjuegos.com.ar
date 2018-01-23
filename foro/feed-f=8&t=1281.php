<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1281" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-17T10:01:31+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1281</id>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-10-17T10:01:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6109#p6109</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6109#p6109"/>
<title type="html"><![CDATA[Re: ¿Y qué hay de D?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6109#p6109"><![CDATA[
dmd, el compilador &quot;oficial&quot; de Digital Mars funciona perfectamente en mi GNU/Linux amd64. De momento no puede enlazar bibliotecas dinámicas y tienes que trabajar con el enlazador manualmente, pero apenas es complicado. Existe otro compilador basado en gcc para D llamado gdc, que funciona casi igual de bien que dmd pero sirve igualmente para producción. No te preocupes por la instalación, configuración y todas esas cosas porque se hace automágicamente (paquetes para Debian).<br /><br />Piensa en como empezaron C y C++...Pienso que D es la verdadera evolución de C y no un &quot;C con orientación a objetos&quot;.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Lun Oct 17, 2011 10:01 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-10-15T22:46:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6106#p6106</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6106#p6106"/>
<title type="html"><![CDATA[Re: ¿Y qué hay de D?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6106#p6106"><![CDATA[
Como me gustaría tener tu optimismo con que D se implantara por encima de C++/C y demás lenguajes compilados que empiezan a quedar algo anticuados...<br /><br />Le echaré un ojo a ver si tengo un rato, y veré como está el tema de D en GNU/Linux que, la verdad, es el único punto que me preocupa, su facilidad de configuración, instalación y uso en Linux.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Sab Oct 15, 2011 10:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[.teri]]></name></author>
<updated>2011-10-15T20:35:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6105#p6105</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6105#p6105"/>
<title type="html"><![CDATA[Re: ¿Y qué hay de D?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=6105#p6105"><![CDATA[
El lenguaje de programación D, la versión 2, a fecha de hoy está listo para producción. La versión 1 está para mantenimiento y para el nuevo programador que use D debe usar D2. D tiene total compatibilidad binaria con C y parcialmente con C++, esto es, usando la bibliotecas y código objeto compilados de código fuente escrito en C/C++. Así que con esto se puede usar OpenGL, OpenAL y más bibliotecas exportando sus funciones y demás a D.<br /><br /><a href="http://d-programming-language.org/" class="postlink">D programming language</a><br /><br />Si te doy mi opinión D es un lenguage de programación mejor diseñado que C++, aún con C++11. Están &quot;parcheando&quot; C++. Es cuestión de tiempo que D se haga popular y más si está listo para producción. Kenta Cho ya hizo juegos en D con OpenGL y SDL aún cuendo el lenguaje estaba en su versión 1. Busca por google los juegos de Kenta Cho.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=34">.teri</a> — Sab Oct 15, 2011 8:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2011-09-27T17:09:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=5994#p5994</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=5994#p5994"/>
<title type="html"><![CDATA[Re: ¿Y qué hay de D?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=5994#p5994"><![CDATA[
Respecto a D, la verdad es que sus problemas, o almenos los que yo me encontré, fueron la &quot;complejidad&quot; de instalación y el soporte sólo a la arquitectura 32 bits, poco relevante para un compilador de hoy día, donde 64 bits ya es la arquitectura más usada, almenos en los PCs.<br /><br />Pero, sí que vi que el lenguaje tiene muy buena pinta. Se puede hacer código muy limpio y, evidentemente, muy rápido ya que es compilado. El problema es que es un lenguaje poco conocido, y que no se le da demasiado bombo desde ningún medio principal.<br /><br />Si me equivoco o tienes algún buen recurso para utilizar D, estaré encantado de darle un ojo, ya que me pareció mucho mejor lenguaje que C++.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Mar Sep 27, 2011 5:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Cukta]]></name></author>
<updated>2011-09-27T00:45:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=5990#p5990</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=5990#p5990"/>
<title type="html"><![CDATA[¿Y qué hay de D?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1281&amp;p=5990#p5990"><![CDATA[
Todo comenzó con la clásica pregunta, ¿Python o C++? Pero... por qué no D. Sí por que no tener lo mejor de los dos mundos, o por lo menos lo mejor de C++  sin lo peor de C++. Bueno la principal razón para no usar D a mi parecer es la falta de librerías (en el pasado también la inestabilidad), pero a lo que esta pagina concierne, es posible desarrollar juegos en D con derelict, un binding a diferentes librerías multimedia como; OpenAL; OpenGL; GLWF; SDL; y SFML.<br /><br />D apareció hace 10 años como una versión depurada de C++, pero que jamas salio de las sombras, de echo he leído por ahí que para que un lenguaje comience a ser popular se necesitan 10 años, lo que esta sucediendo con D, sobre todo por que acaba de salir la nueva versión, D2, de hecho subió 10 lugares en la lista de popularidad de <a href="http://www.tiobe.com/index.php/content/paperinfo/tpci/index.html" class="postlink">TIOBE</a> lo que me parece increíble, pero tal vez todo solo sea pasajero.<br /><br />Ustedes qué opinan, ¿alguna vez se sintieron atraídos por este lenguaje? En mi caso sí.<br /><br />¡Pero!...<br /><br />Este mismo año también salio el nuevo estándar C++11, y aunque se que todavía es muy temprano, la verdadera pregunta es ¿Qué tan cercano sera ó es C++ a D2? Esto es más bien una pregunta retorica, así que por el momento me quedo con D.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2510">Cukta</a> — Mar Sep 27, 2011 12:45 am</p><hr />
]]></content>
</entry>
</feed>