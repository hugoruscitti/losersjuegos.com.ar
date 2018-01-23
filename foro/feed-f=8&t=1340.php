<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1340" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-12-01T18:29:14+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1340</id>
<entry>
<author><name><![CDATA[McNulty]]></name></author>
<updated>2011-12-01T18:29:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6220#p6220</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6220#p6220"/>
<title type="html"><![CDATA[Re: ¿Deberían las funciones de Python ser reservadas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6220#p6220"><![CDATA[
Muchas gracias MrBB4 por la respuesta. Bueno, esos tutoriales que comentas ya los he imprimido. Aunque ya te digo que se avanza mas rápido con vídeo tutoriales. Yo estoy con el tutorial de &quot;Python para todos&quot; y &quot;Aprenda a pensar como un programador con Python&quot;. Y me apoyo con los vídeos del canal de YouTube &quot;ChelinTutorials&quot;.<br /><br /><br />Bueno, pues ya me he dado cuenta de eso de las funciones. Es decir, que aunque vienen predefinidas por Python les podemos asignar nosotros otro valor. Habrá que ir con cuidado... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br /><br />Salu2  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2539">McNulty</a> — Jue Dic 01, 2011 6:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-12-01T03:29:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6218#p6218</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6218#p6218"/>
<title type="html"><![CDATA[Re: ¿Deberían las funciones de Python ser reservadas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6218#p6218"><![CDATA[
Buenas.<br />Pues si, resulta que en python, a diferenica de la mayoria de los lenguajes de programación, todas las funciones son por default habiertas. Si tu intención es crear una función cerrada basta con que su nombre icluya dos guíones bajos (_) al principio del nombre. Como por ejemplo :<br /><pre class="prettyprint">def __funciónCerrada&#40;&#41;:<br />    pass</pre><br />Aún así, esto solo evitará que se utilice desde fuera de la clase a la que pertenece, pues todavía se podrá reemplazar la función por una variable cualquiera. Pero esto no es ninguna molestia pues si se te olvida el nombre de una función que es utilizada en alguna parte del codigo y sin querer la reemplazas por quien sabe que, el interprete te lanzará un error de syntaxis y esto se arregla facilmente.<br /><br /><span style="font-size: 85%; line-height: 116%;">PD: Ahora que lo pienso, lo primero que puse no tiene nada que ver con tu pregunta pero aún así es bueno saber</span> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />Ya que estás recien empezando con python te recomiendo leer <a href="http://greenteapress.com/thinkpython/thinkCSpy/" class="postlink">How To Think Like A Computer Scientist: Learning With Python</a>. El problema de este es que la traducción al español solo está hasta la midad y ha estado así desde el 2006, pero te recomiendo que lo leas porque está muy bien explicado, y si no te complica el ingles mejor aún, porque así podes leer la versión entera. Tambien te aconsejo leer <a href="http://launchpadlibrarian.net/18980633/Python%20para%20todos.pdf" class="postlink">Python Para Todos</a>, que sí está todo en español y tambien está muy bueno. Y por ultimo <a href="http://inventwithpython.com/IYOCGwP_book1.pdf" class="postlink">Invent Your Own Computer Games With Python</a>, que está todo en ingles pero ayuda un montón. Que no te asusten tantos textos porque la verdad es que los tres hablan casi de lo mismo, pero cada uno tiene algo que el otro no asi que  te ayudará mucho leerlos todos. Y además no es nada con todo lo que tendrás que leer a futuro si en verdad te interesa el mundo de la programación.<br /><br />Un Abrazo y te deseo suerte en tu camino de desarrollador de Juegos/Programas/Otros <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Jue Dic 01, 2011 3:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[McNulty]]></name></author>
<updated>2011-11-30T20:13:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6217#p6217</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6217#p6217"/>
<title type="html"><![CDATA[¿Deberían las funciones de Python ser reservadas?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1340&amp;p=6217#p6217"><![CDATA[
Hola a todos,<br /><br />No he encontrado el hilo para presentarme en este foro y aprovecho para hacerlo aquí  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br /><br />Bueno, estoy empezando a estudiar Python de forma autodidacta con vídeos de YouTube (Gracias a muchos argentinos que veo dominan este lenguaje a la perfección) y tutoriales de la red. Bueno, pues en lo mas básico me asalta una duda...<br /><br />(He de decir que tengo instalada la versión 2.7.2 para aprovechar toda la documentación mas extensa en esta versión)<br /><br />Pues mirando el tema de la sintaxis y las palabras reservadas en Python ( print, for, While, etc... ) creía yo, que las funciones también lo estaban. Y veo que no. Es decir, si uso la función <span style="font-weight: bold">len</span> para leer la longitud de una cadena, veo que puedo tratarla como una variable. Osea, puedo definir <span style="font-weight: bold">len=1</span> y toma ese valor. Con la consiguiente perdida de esa función en todo el código creado posteriormente ¿Esto no es malo para programar? ¿Que pasa si la gente se olvida del nombre de una función y le asigna valor de variable? <br /><br />Quizás es una duda muy básica. Pero yo vengo del Basic de hace algún tiempo donde todo era reservado.<br /><br />Muchas gracias y espero aprender un monton con vuestra ayuda... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2539">McNulty</a> — Mié Nov 30, 2011 8:13 pm</p><hr />
]]></content>
</entry>
</feed>