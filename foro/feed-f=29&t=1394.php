<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=29&amp;t=1394" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-01-20T19:01:05+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=29&amp;t=1394</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-01-20T19:01:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6468#p6468</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6468#p6468"/>
<title type="html"><![CDATA[Re: Hostings para NodeJS y opiniones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6468#p6468"><![CDATA[
ah... excelente!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ene 20, 2012 7:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2012-01-20T17:22:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6465#p6465</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6465#p6465"/>
<title type="html"><![CDATA[Re: Hostings para NodeJS y opiniones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6465#p6465"><![CDATA[
Sí, socket.io funciona y muy bien, con una latencia muy baja a mi parecer. <br /><br />Al no poder utilizar Websockets, utiliza Comet. Comet tiene el problema (creo) de que ha de reestablecer la conexión cada vez que se termina un ciclo petición-respuesta. Con los Websockets se aprovecha la conexión mientras el usuario siga conectado a la web.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Vie Ene 20, 2012 5:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2012-01-20T15:43:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6464#p6464</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6464#p6464"/>
<title type="html"><![CDATA[Re: Hostings para NodeJS y opiniones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6464#p6464"><![CDATA[
Gracias Mightygaver por compartir esa experiencia!<br /><br />Aunque me quedó una duda, comentaste que la única contra de estos dos<br />servicios (heroku y fluxflex) no soportaban websockets, pero de todas forma<br />funciona socket.io?, es solo un tema de eficiencia cierto?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ene 20, 2012 3:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2012-01-20T12:12:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6462#p6462</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6462#p6462"/>
<title type="html"><![CDATA[Hostings para NodeJS y opiniones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1394&amp;p=6462#p6462"><![CDATA[
Bueno, tras comentar el asunto de los hostings, node.js y Websockets en el tema de la presentación de MultiTower, quería compartir la experiencia obtenida tras tratar de hacer funcionar todo por primera vez.<br /><br />Primero, aprendí un poco tanto sobre node.js como la librería socket.io. Me parecieron ambas tecnologías muy interesantes.  <br /><br />Las impresiones de socket.io es que es una tecnología que ofrece una gran compatibilidad con navegadores antiguos y ofrece una eficiencia que me dejó pasmado. Permite hacer broadcasts<br />a todos los clientes de la red a partir de distintas técnicas (Websockets, Comet, ...), eligiendo la más eficiente disponible. Supongo que debe de haber alguna manera de notificar eventos a un<br />sólo cliente, aunque de momento no la he descubierto.<br /><br />Una vez estuve un poco familiarizado con la tecnología, decidí desplegar la aplicación de prueba en fluxflex y en Heroku. <br /><br />Empecé con fluxflex y me llevé una decepción. Para Python y PHP siempre me funcionó todo OK. En cambio, al usar FastCGI se necesita utilizar un módulo de node.js para la compatibilidad. Eso <br />complicaba la posibilidad de que el desarrollo en mi máquina fuera el mismo que en la suya, además de que me empezó a dar errores en producción que no me daba en mi máquina.<br /><br />En cambio, Heroku me pareció supercómodo. Además de guiarme en las buenas prácticas de node.js todo funcionó perfecto y me permitía desarrollar y probar en mi máquina con<br />bastante mayor facilidad. La única restricción que encontré es que debes tener la misma versión de node, la v0.4.7.  <br /><br />La última pega de esta historia es que ni Heroku ni fluxflex soportan WebSockets. De todos modos, usar socket.io hace que, si algún día contratas un hosting que soporta Websockets y node.js<br />con cambiar cuatro parámetros de tu código (o incluso nada), tienes la eficiencia que los WebSockets aportan. <br /><br />En cuanto llegue a casa subiré la URL con la demo de &quot;chat&quot; que realicé subida a Heroku. Manteniendo diferentes pestañas de la aplicación se pueden ver como los eventos llegan a los distintos clientes.<br /><br />Espero que les sirva <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Edit, la URL: <!-- m --><a class="postlink" href="http://multitower.herokuapp.com/multi">http://multitower.herokuapp.com/multi</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Vie Ene 20, 2012 12:12 pm</p><hr />
]]></content>
</entry>
</feed>