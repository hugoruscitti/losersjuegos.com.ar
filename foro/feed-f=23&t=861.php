<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=861" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-03T04:10:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=861</id>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-09-03T04:10:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=861&amp;p=4033#p4033</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=861&amp;p=4033#p4033"/>
<title type="html"><![CDATA[Re: Sistema de habilidades Pilas C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=861&amp;p=4033#p4033"><![CDATA[
Me agrada la idea, aunque me gustaría ver un ejemplo para verlo en funcionamiento <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br />Lo de las señales, ¿cuáles podrían ser? ¿OnInit, OnDraw, OnUpdate...?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Sep 03, 2010 4:10 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-02T15:02:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=861&amp;p=4029#p4029</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=861&amp;p=4029#p4029"/>
<title type="html"><![CDATA[Sistema de habilidades Pilas C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=861&amp;p=4029#p4029"><![CDATA[
Después de dedicarle bastante esfuerzo, el equipo de C++ hemos conseguido terminar un sistema de habilidades, que si bien no es igual que el de hugo, hemos intentado que se parezca lo más posible dentro de lo posible. <br /><br />Aquí está el código por si alguien quiere echarle un vistazo y tiene alguna sugerencia, o simplemente quiere alabar nuestras grandes virtudes de programador xD (Cartel de sarcasmo)<br /><br /><a href="http://pastebin.com/F8FZtssQ" class="postlink">Habilidades.h</a><br /><a href="http://pastebin.com/iq1mPYvg" class="postlink">Habilidades.cpp</a><br /><br />Básicamente lo que hemos buscado es la mayor facilidad de uso:<br />Ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>//Habilidades.txt<br />// Cada evento esta compuesto de dos indicadores de bloque (EVENTO y FINEVENTO, un nombre con el que registrarlo, y una lista de palabras reservadas de Pilas que representan los eventos posibles<br />EVENTO<br />Seguir_Raton<br />PILAS_RATONMOVIDO<br />PILAS_BOTONRATONPULSADO<br />FINEVENTO<br /><br />//En el juego, el usuario tendria que hacer lo siguiente<br />class Seguir_raton<br />{<br />  // La funcion siempre debe tener este prototipo<br />  void funcion_a_usar(vector_entidades objetos, sf::Event* evento)<br />  {<br />     ....<br />  }<br />}<br /><br />// Mismo nombre que en el fichero Habilidades.txt<br />Habilidades.registrar(&quot;Seguir_Raton&quot;, &amp;Seguir_raton::funcion_a_usar);<br /><br />// y si luego quiere enseñar una habilidad a un objeto, deberá:<br />Habilidades.enseniar(&quot;Seguir_Raton&quot;, mono)<br /><br /></code></dd></dl><br /><br />Además, existe la posibilidad de registrar habilidades enteras desde código, y tengo un par más de cosas pensadas. El tema de usar clases para las funciones, no es estrictamente necesario, pero es como lo tenía hugo en su diseño, y nos ha parecido una manera elegante de montarlo<br /><br />Aprovecho para hacer una pregunta de diseño: como veis el hecho de proporcionar una serie de funciones, que reciban callbacks o señales para inicializar el juego, crear el loop del juego, etc... al estilo de como funciona los programas de windows o la libreria GLUT ( OnInit(boost::signal&lt;void (int ancho, int alto, std:.string&amp; titulo)&gt; ) y cosas por el estilo)<br /><br />PD: Tengo que cambiar el nombre de EVENTO por HABILIDAD en los scripts, asi que no quiero comentarios ofensivos contra mi persona por esto xD. Comentarios de código son bienvenidos, pero la mayoria ya los he visto, solo que por pereza y por estar al comienzo del desarrollo, no he cambiado. Lo que más me interesa es ver si alguien tiene un enfoque diferente y que sea mejor, o este os parece bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Sep 02, 2010 3:02 pm</p><hr />
]]></content>
</entry>
</feed>