<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=244" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-02-21T01:56:15+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=244</id>
<entry>
<author><name><![CDATA[sette]]></name></author>
<updated>2008-02-21T01:56:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=912#p912</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=912#p912"/>
<title type="html"><![CDATA[Problema con SDL!! No se encuentra el punto de entrada...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=912#p912"><![CDATA[
Hola, primero gracias por responder...<br />Segundo te queria comentar que pude resolver el problema, era eso de la versión, estaba usando la 1.2.8 y no se porque motivo tiraba ese error, ahora me baje la 1.2.13 de la web oficial y remplaze los .dll y los .h y anduvo... <br /><br />Muchas gracias por tu ayuda... <br />Sobre el tutorial no hay nada que comenta porque era error mio.<br /><br />A todos los que tengan el mismo problema que yo agan esto:<br />Si usan Dev-C++ (creo que con los otros es igual)<br />1- Fíjense la versión que están usando<br />2- Si ven que es muy vieja y no les anda (por algún motivo), reemplacen los archivos .dll de Windows/system (y también por las dudas de Windows/system32) y los archivos &quot;include&quot; (.h) de la carpeta SDL.<br />3- Si aun sigue sin andar también copien los archivos .dll a la carpeta bin de Dev-C++ (en el caso de que pida reemplazar, reemplacen) <br />4- Si todavia sigue sin andar copien los archivos .dll al directorio principal donde esta guardado el programa (en mi caso C:/Dev-C++/practica1)<br /><br />A mi me anduvo con todo eso, espero que al que tenga el mismo problema tambien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1821">sette</a> — Jue Feb 21, 2008 1:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-02-20T14:04:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=911#p911</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=911#p911"/>
<title type="html"><![CDATA[Problema con SDL!! No se encuentra el punto de entrada...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=911#p911"><![CDATA[
Puede que la biblioteca SDL.dll sea de otra versión diferente a la<br />que utilizas para compilar el programa. Verifica que ambas sean<br />la misma versión.<br /><br />Por cierto, sería bueno que nos comentes que pasos no funcionan<br />del tutorial de la web. Lo he seguido varias veces y no he encontrado<br />errores. Avisanos el sistema exacto que estás usando y una copia<br />del error que te informa el sistema. Así, podremos arreglar cualquier<br />problemilla del tutorial para ayudar a mas usuarios.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Feb 20, 2008 2:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sette]]></name></author>
<updated>2008-02-19T16:03:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=908#p908</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=908#p908"/>
<title type="html"><![CDATA[Problema con SDL!! No se encuentra el punto de entrada...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=244&amp;p=908#p908"><![CDATA[
Hola, amigos... tengo un problema con SDL, estoy usando Dev-C++ 4.9.9.1 y cuando intente instalar SDL 1.2.8 manualmente (con el manual de la página) no anduvo, me tiraba muchos errores y no compilaba el programa, así que leyendo en el foro encontré una página (<!-- w --><a class="postlink" href="http://www.devpaks.org">www.devpaks.org</a><!-- w -->) para instalarle los pack's al Dev... bueno me baje el pack de SDL y lo instale, todo bien porque  hasta ahora cuando compilo el programa no me tiro ningún error, pero al momento de ejecutarlo me da el siguiente error:<br /><br />&quot;No se encuentra el punto de entrada del procedimiento SDL_strlcat en la biblioteca de vínculos dinámicos SDL.dll&quot;<br /><br />NOTA: El archivo SDL.dll lo tengo instalada en windows/system, pero lei aca que por ahi tambien podia funcionar en windows/system32, asi que también lo instale ahi pero no funciono. Ah! otra cosa el código no tiene ningún error, es el del ejemplo de instalación de SDL que esta acá en la pagina, ademas probé con diversa cantidad de códigos y me da el mismo error. <br /><br />Les agradeceria mucho que me ayudaran porque sino me quedo trabado y no puedo continuar.<br />Desde ya muchas gracias.   <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1821">sette</a> — Mar Feb 19, 2008 4:03 pm</p><hr />
]]></content>
</entry>
</feed>