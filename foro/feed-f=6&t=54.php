<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=54" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-02-26T20:55:03+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=54</id>
<entry>
<author><name><![CDATA[ByteFest]]></name></author>
<updated>2007-02-26T20:55:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=192#p192</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=192#p192"/>
<title type="html"><![CDATA[Dudas con manual de Daniel Acuña...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=192#p192"><![CDATA[
Hola rcaf, gracias por responder, por lo que me dices del orden, cree un proyecto nuevo en dev c++ y lo guardé en una carpeta llamada proyectos: &quot;C:\Dev-Cpp\proyectos\game...&quot;, no lo copie todo dentro la carpeta include, efectivamente faltaba colocar <span style="font-weight: bold">using namespace std</span> en el archivo <span style="font-weight: bold">actormanager.h</span> te estoy muy agradecido y si me permites te voy a estar molestando con el manual jaja, gracias.<br /><br />Saludos!!<br />[/i]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=709">ByteFest</a> — Lun Feb 26, 2007 8:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-02-26T20:36:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=191#p191</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=191#p191"/>
<title type="html"><![CDATA[Dudas con manual de Daniel Acuña...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=191#p191"><![CDATA[
Hola! Bienvenido al foro!<br /><br />Antes que todo, cualquier pregunta es bienvenida, esa es la idea acá, ayudar y ayudarnos entre todos.<br /><br />Bueno sobre tu consulta, podrías haber puesto un extracto del código fuente, donde ocurren los errores.<br /><br />Pero bueno, viendo el código y buscando esas líneas en el libro, me di cuenta de que primero en el archivo <span style="font-weight: bold">actor.h</span> que se encuentra en la página 42, la última línea del archivo actor.h es incorrecta ya que dice:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#endif ACTOR_H<br /></code></dd></dl><br /><br />lo correcto es simplemente colocar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#endif<br /></code></dd></dl><br /><br />ya que asi finalizamos el bloque.<br /><br />Por eso el warning: extra tokens at end of #endif directive <br /><br />En cuanto al error, en el archivo <span style="font-weight: bold">actormanager.h</span> (página 43) vemos que no se declaró el <span style="font-weight: bold">namespace std</span>, así que debemos escribir lo siguiente antes de la definición de la clase:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>using namespace std;<br /></code></dd></dl><br /><br />La otra solución es definir las listas de esta forma:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>std::list&lt;Actor*&gt; actors;<br />std::list&lt;Actor*&gt;::iterator actors_iter;<br /></code></dd></dl><br /> <br />Por último una recomendación, veo que copiaste todo el código del libro en el directorio include del DevC++, lo ideal seria que estuviera en un directorio separado, pero mejor aun, que fuera parte del directorio de tu proyecto. Es solo un tema de orden.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Lun Feb 26, 2007 8:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ByteFest]]></name></author>
<updated>2007-02-26T18:13:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=190#p190</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=190#p190"/>
<title type="html"><![CDATA[Dudas con manual de Daniel Acuña...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=54&amp;p=190#p190"><![CDATA[
Hola!, este es mi primer post en el foro y dejenme decirles que el sitio es increíble, da gusto participar en esta comunidad, pero bueno voy directamente al grano, estoy tratando de seguir el manual de programación con allegro, me resultó todo perfecto, instalé el devpack para dev c++ y logré hacer que una figura se mueva por pantalla, el problema surge cuando después de crear los archivos actor.cpp y actor.h agrego actormanager.cpp y el .h respectivo, dev c++ me arroja errores al compilar, por ejemplo:<br /><br />&quot;<span style="font-style: italic">In file included from actormanager.cpp:2:<br />C:/Dev-Cpp/include/actor.h:21:12: warning: extra tokens at end of #endif directive<br />In file included from actormanager.cpp:3:<br />C:/Dev-Cpp/include/actormanager.h:27: error: ISO C++ forbids declaration of `list' with no type<br /><br />C:/Dev-Cpp/include/actormanager.h:27: error: expected `;' before '&lt;' token</span>&quot;<br /><br />Me disculpo si la pregunta es muy de novatos (estoy estudiando hace un año y medio programación) pero siempre me interesó programar juegos, sin embargo, acá en Chile la información que hay al respecto es mínima, les agradecería si me pueden ayudar para poder seguir el manual que la verdad esta genial.<br /><br />Un saludo y gracias de antemano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=709">ByteFest</a> — Lun Feb 26, 2007 6:13 pm</p><hr />
]]></content>
</entry>
</feed>