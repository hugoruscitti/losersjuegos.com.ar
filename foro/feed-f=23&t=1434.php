<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=1434" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-04-02T01:29:28+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=23&amp;t=1434</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-04-02T01:29:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6600#p6600</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6600#p6600"/>
<title type="html"><![CDATA[Re: Nuevo video de pilas engine]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6600#p6600"><![CDATA[
<blockquote><div><cite>MrBB4 escribió:</cite><br />Aparte de eso, querría preguntante si me podrias explicar o hacer un post aparte sobre como hicieron para que el programa de pilas no fuera más que un programa en terminal que recibe input escrita. Osea una terminal dentro de otra <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /><br /></div></blockquote><br /><br />Sí, originalmente pilas usába algo llamado &quot;threads&quot; (o hilos), que sirven para crear programas<br />que hacen varias cosas al mismo tiempo, sin bloquease. De esa forma, el programa principal<br />&quot;leía&quot; lo que el usuario escribía y un hilo independiente dibujaba la ventana.<br /><br />Luego, en las versiones mas nuevas de pilas, ese trabajo de dividir la ejecución del<br />programa en dos partes la realiza la biblioteca Qt por su cuenta.<br /><br />El concepto de &quot;hilos&quot; es toda la clave aquí, si quieres investigarlo vas a encontrar<br />un montón de información en la web. Algunas cosas muy bien explicadas y otras no tanto... es<br />un concepto medio difícil al principio, pero cuando lo investigues vas a descubrir que<br />los hilos están en casi todos los programas que usamos !!!<br /><br />Por cierto, luego de que investigues algo de hilos, te recomiendo<br />un texto de uno de mis ídolos de la programación, roberto alsina:<br /><br /><!-- m --><a class="postlink" href="http://pet.tzulberti.com.ar/1/html/processing.html">http://pet.tzulberti.com.ar/1/html/processing.html</a><!-- m --><br /> <br /><blockquote><div><cite>MrBB4 escribió:</cite><br />Ademas, abrir una conversación sobre como se creó pilas sería muy interesante, hay varias dudas que me surgieron sobre el funcionamiento del motor durante el video.<br /></div></blockquote><br /><br />Sí, está buena la idea. Podemos armar un post de consultas nuevo a algo así no?.<br /><br />De todas formas, en el sitio de pilas hay documentación sobre cómo funciona<br />pilas por dentro:<br /><br /><!-- m --><a class="postlink" href="http://readthedocs.org/docs/pilas/en/latest/como_funciona_pilas_por_dentro.html">http://readthedocs.org/docs/pilas/en/la ... entro.html</a><!-- m --><br /><br />algunas cositas de ese texto necesitan una actualización, pero en general<br />está bien para comenzar.<br /><br />Me gustó tu sugerencia, voy a tratar de armar una charla o tutorial sobre<br />ese tema. Aunque no lo prometo porque ando con poquito tiempo...<br /><br />Si quieres armar un nuevo post con preguntas sobre el motor bienvenido, a parte<br />a mí me ayudaría mucho para actualizar la documentación que te pasé.<br /><br /><blockquote><div><cite>MrBB4 escribió:</cite><br />Felicitaciones de nuevo y espero que (talvez) en algun momento tambien yo pueda aportar mi granito al proyecto.<br /></div></blockquote><br /><br />Ojalá, me gustaría mucho que el equipo de pilas sea mas grande !!!<br /><br /><blockquote><div><cite>MrBB4 escribió:</cite><br />PD: no estaría nada mal un corrector de ortografía en el foro xD<br /></div></blockquote><br /><br />Firefox viene que uno integrado <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Abr 02, 2012 1:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-03-30T20:00:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6597#p6597</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6597#p6597"/>
<title type="html"><![CDATA[Re: Nuevo video de pilas engine]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6597#p6597"><![CDATA[
<blockquote><div><cite>MrBB4 escribió:</cite><br />Aparte de eso, querría preguntante si me podrias explicar o hacer un post aparte sobre como hicieron para que el programa de pilas no fuera más que un programa en terminal que recibe input escrita.<br /></div></blockquote><br /><br />Ahora que lo pienso bien eso es algo que nunca aprendí por ningún lado pero que considero extremandamente basico, aunque que no sepa hacerlo. Más que nada siempre he querido saber como hacen para que lo que uno estaba escribiendo no se quede atras cuando el programa escribe algo en pantalla. No se me ocurre ninguna forma practica de hacerlo. Esto es basicamente porque siempre tuve un enfoque solo hacia los juegos entonces hay cosas que no he aprendido sobre los programas que no sean juegos.<br /><br />Solo quería aclarar. Espero tu respuesta o la de cualquier otro que me pueda responder.<br />Gracias de antemano.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Vie Mar 30, 2012 8:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2012-03-30T19:52:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6596#p6596</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6596#p6596"/>
<title type="html"><![CDATA[Re: Nuevo video de pilas engine]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6596#p6596"><![CDATA[
La verdad es que, aunque yo nunca usaría Pilas, es un proyecto genial que ayudará mucho a la gente a integrarse en la programación de una forma más dinamica. De hecho mucha gente se interesa en la progamacion empezando con juegos que pueden ser modificados con comandos como pasa con Quake2 o Counter Strike. Y aunque la primera ves que oí algo sobre pilas no me convencía, pero esta ves me convenciste de lo bueno que es. Aunque la verdad me intriga más el como hiciste el motor que para que lo podría usar. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br /><br />Aparte de eso, querría preguntante si me podrias explicar o hacer un post aparte sobre como hicieron para que el programa de pilas no fuera más que un programa en terminal que recibe input escrita. Osea una terminal dentro de otra <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /> no se si ese sería lo correcto a decir, pero es que hace poco empecé a jugar en un MUD y los progamas clientes que existen no me gustan así que estaba pensando talves hacer uno propio. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" />  no se si me explico. Pero confio en que tú entenderas =P Ademas, abrir una conversación sobre como se creó pilas sería muy interesante, hay varias dudas que me surgieron sobre el funcionamiento del motor durante el video.<br /><br />Felicitaciones de nuevo y espero que (talvez) en algun momento tambien yo pueda aportar mi granito al proyecto.<br />Saludos y suerte en todo. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><br /><br />PD: no estaría nada mal un corrector de ortografía en el foro xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Vie Mar 30, 2012 7:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-03-27T18:45:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6591#p6591</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6591#p6591"/>
<title type="html"><![CDATA[Nuevo video de pilas engine]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1434&amp;p=6591#p6591"><![CDATA[
saludos a todos, hace unos días estuve en la ciudad de México, mas precisamente<br />en el DF con los chicos de python-méxico.<br /><br />Presenté pilas-engine y algo del videojuego shaolin blind fury. Si quieren ver<br />el video lo subí a vimeo:<br /><br /><!-- m --><a class="postlink" href="https://vimeo.com/39027425">https://vimeo.com/39027425</a><!-- m --><br /><br />El video no se ve muy bien, pero de todas formas lo subí porque muestro algunas<br />cosas nuevas de pilas.<br /><br />Saludos a todos!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Mar 27, 2012 6:45 pm</p><hr />
]]></content>
</entry>
</feed>