<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=1&amp;t=536" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-03T14:31:06+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=1&amp;t=536</id>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-07-03T14:31:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2674#p2674</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2674#p2674"/>
<title type="html"><![CDATA[Repositorio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2674#p2674"><![CDATA[
Para lo de subirla al repositorio, ya te envié un correo explicandote la situación. He preguntado como va la cosa y he dicho que tengo un paquete para subir, pero aún no contestaron.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Vie Jul 03, 2009 2:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-09T00:48:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2577#p2577</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2577#p2577"/>
<title type="html"><![CDATA[Sitio de SNL al fin en internet y primera version de SNL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2577#p2577"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br />No sé si a alguien más le pasa pero a mí en Ubuntu 8.4 (llevo tiempo queriendo instalar una versión más reciente) me da un error al abrir el primer paquete de la lista (.tar.gz).<br />También creo que sería interesante que pusieras algún ejemplo, a parte de la documentación. Y si haces un tutorial explicando como funciona, ya sería genial. Puede que para una persona que entienda del tema, ver la documentación de las funciones le sea suficiente. Pero yo, que no tengo ni idea, me he quedado igual. Aunque tampoco me imagino aprender SDL mirando solamente la &quot;api reference&quot; (claro que SDL es más grande que SNL... ).<br /><br />Saludos.<br /></div></blockquote><br /><br />Hola, voy a aprovechar este tema en lugar de crear otro para anunciaros la nueva version de SNL, la version 0.0.1, he añadido a la documentacion 2 ejemplos, uno usando TCP como cliente y otro como servidor, os dejo el enlace de la web <a href="http://www.snl.ya.st/" class="postlink">http://www.snl.ya.st/</a> nuevamente para que podais descargar los que querais la nueva version de SNL <a href="http://snl.netii.net/index.php?id=descargas" class="postlink">http://snl.netii.net/index.php?id=descargas</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mar Jun 09, 2009 12:48 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-04-26T00:07:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2473#p2473</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2473#p2473"/>
<title type="html"><![CDATA[Sitio de SNL al fin en internet y primera version de SNL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2473#p2473"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br />No sé si a alguien más le pasa pero a mí en Ubuntu 8.4 (llevo tiempo queriendo instalar una versión más reciente) me da un error al abrir el primer paquete de la lista (.tar.gz).<br /></div></blockquote><br />Pues sinceramente es el primer caso del que me entero, yo el .tar.gz lo he creado desde Ubuntu 8.10 por lo que no se si sera que no tengas algún paquete que si este en la versión 8.10 pues a mi mismo no me da error al abrirlo. De todos modos, el .tar.bz2 y el .tar.lzma tienen el mismo contenido que el .tar.gz por lo que supongo que habras descargado alguno de esos dos que te he nombrado. (Como has dicho &quot;al abrir&quot; he supuesto que lo descargas sin errores, si el error fuese al descargar corrigeme).<br /><blockquote><div><cite>endaramiz escribió:</cite><br />También creo que sería interesante que pusieras algún ejemplo, a parte de la documentación.<br /></div></blockquote><br />Puse un pequeño ejemplo junto al codigo fuente de la biblioteca (dentro de la carpeta &quot;test&quot;) que basicamente y de forma resumida, se conecta a google, envia unos datos (intentando usar el protocolo http, que aun no lo tengo muy mirado y no lo manejo del todo bien el protocolo http) y google manda otros datos en respuesta, el programa usando los grupos de conexiones (con los que agrupar los sockets para evitar que se queden bloqueados esperando respuesta, que es lo que pasa si se comprueban los sockets de forma individual) comprueba si el servidor de google ha enviado datos y los va mostrando por la pantalla. Tengo pensado hacer algunos ejemplos más desarrollados, pero estoy esperando a alcanzar la versión 0.0.1 para presentar junto con la siguiente versión los ejemplos. La versión 0.0.1 espero tenerla acabada (junto con algún que otro ejemplo bien desarrollado) para antes del verano o inicios de este, y en ella habra basicamente el mismo código que en la versión actual pero con algunos cambios para optimizarlo y que se ejecute más rapido y tenga un aspecto más limpio y ordenado, además de alguna mejora menor de las funciones que se encargan de que la biblioteca se ejecute correctamente y de tratar los errores que puedan efectuarse en tiempo de ejecución (como los errores por falta de memoria).<br /><blockquote><div><cite>endaramiz escribió:</cite><br />Y si haces un tutorial explicando como funciona, ya sería genial.<br /></div></blockquote><br />En realidad, la documentación sera el tutorial al que te refieres pero tengo que trabajar más en la documentación, por el momento apenas lista las funciones existentes con sus argumentos y los códigos de errores de la biblioteca ya que la escribi un poco a la prisa para que la biblioteca tubiese una documentación aunque esta fuese mínima, pero mi intención es de que la documentación recoja desde ejemplos cortos de cada función hasta ejemplos de mayor extensión con varias de las funciones, explicaciones del funcionamiento de las redes y de los protocolos TCP y UDP, y de IPv4 e IPv6; pero es algo para lo que necesito tiempo y ahora con los estudios tengo poco, de ahí que la siguiente versión la tenga pensada para comienzos del verano.<br /><blockquote><div><cite>endaramiz escribió:</cite><br />Puede que para una persona que entienda del tema, ver la documentación de las funciones le sea suficiente. Pero yo, que no tengo ni idea, me he quedado igual. Aunque tampoco me imagino aprender SDL mirando solamente la &quot;api reference&quot; (claro que SDL es más grande que SNL... ).<br /></div></blockquote><br />Las funciones están pensadas para que usarlas sea algo fácil, y una vez se entienden es fácil usar la biblioteca, pero como ya he comentado aun tengo que ponerme a escribir más la documentación, pero aun no he tenido tiempo para poder desarrollar más la documentación, pero como ya he comentado cuando este lista la versión 0.0.1 tendré lista también la documentación.<br /><br />Gracias por el interés en la biblioteca.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Abr 26, 2009 12:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-04-24T18:55:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2466#p2466</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2466#p2466"/>
<title type="html"><![CDATA[Sitio de SNL al fin en internet y primera version de SNL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2466#p2466"><![CDATA[
No sé si a alguien más le pasa pero a mí en Ubuntu 8.4 (llevo tiempo queriendo instalar una versión más reciente) me da un error al abrir el primer paquete de la lista (.tar.gz).<br />También creo que sería interesante que pusieras algún ejemplo, a parte de la documentación. Y si haces un tutorial explicando como funciona, ya sería genial. Puede que para una persona que entienda del tema, ver la documentación de las funciones le sea suficiente. Pero yo, que no tengo ni idea, me he quedado igual. Aunque tampoco me imagino aprender SDL mirando solamente la &quot;api reference&quot; (claro que SDL es más grande que SNL... ).<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Vie Abr 24, 2009 6:55 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-04-08T13:58:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2401#p2401</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2401#p2401"/>
<title type="html"><![CDATA[Tutorial de empaquetado]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2401#p2401"><![CDATA[
En este enlace te explican como empaquetarlo en un deb según las normas de Debian. <!-- m --><a class="postlink" href="http://www.debian.org/devel/#packaging">http://www.debian.org/devel/#packaging</a><!-- m --> Si lo empaquetas en un deb, puedes pasarmelo y yo me encargaría de subirlo al repositorio y de declararme como mantenedor del paquete. Es decir, que si algún usuario del  repositorio encontrara un error en el paquete, es decir en la librería, me lo reportaría a mí, yo te lo reportaría a ti, tu lo corregirías y así generarías un nuevo paquete como actualización, o en caso de que fuera un error muy grave como nueva versión.<br />¿Qué te parece?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mié Abr 08, 2009 1:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-04-08T10:23:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2400#p2400</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2400#p2400"/>
<title type="html"><![CDATA[Re: Repositorio Debian]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2400#p2400"><![CDATA[
<blockquote><div><cite>rafahack95 escribió:</cite><br />Yo estoy trabajando para crear un repositorio oficial para Debian, cuando esté listo, si quieres puedo subirlo, eso sí, tienes que empaquetarlo en un deb...<br /></div></blockquote><br /><br />Por ahora no he empaquetado en un .deb nunca, aunque llevo tiempo pensando en empaquetar en .deb y ponerme a aprender probando a empaquetar pero aun no me he puesto, la verdad que empaquetarla como .deb seria bueno ya no solo para que la pudieses subir al repositorio, sino para quienes usan debian o distribuciones deribadas (como yo, ubuntu) para que fuese mas facil de instalar. Pues ya que lo mencionastes cuando tenga tiempo me pongo a mirar para empaquetarla como .deb<br /><br /><blockquote><div><cite>rafahack95 escribió:</cite><br />...Por cierto, me encantó el diseña de la web, ¿con que la hiciste?<br /></div></blockquote><br /><br />Pues las imagenes con varios programas, el logotipo SNL con Inkscape, lo exporte a png y con gimp las imagenes que aparece en la seccion de descargas despues de haber echo algunas capturas de pantalla (las saque del tema de iconos que estoi usando basicamente). En lo que al codigo se refiere lo hice a mano, cualquier editor de textos (yo use el editor de gnome gedit) y a escribir el codigo PHP que genera el codigo XHTML al ser llamado el script PHP.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mié Abr 08, 2009 10:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-04-08T08:54:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2399#p2399</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2399#p2399"/>
<title type="html"><![CDATA[Repositorio Debian]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2399#p2399"><![CDATA[
Yo estoy trabajando para crear un repositorio oficial para Debian, cuando esté listo, si quieres puedo subirlo, eso sí, tienes que empaquetarlo en un deb.<br />Saludos y enhorabuena. Por cierto, me encantó el diseña de la web, ¿con que la hiciste?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Mié Abr 08, 2009 8:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-04-07T20:37:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2397#p2397</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2397#p2397"/>
<title type="html"><![CDATA[Sitio de SNL al fin en internet y primera version de SNL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=536&amp;p=2397#p2397"><![CDATA[
Hola, hace un par de minutos subi el sitio completo que he estado creando en estos dos ultimos dias para la biblioteca SNL a un servidor gratuito y he creado un subdominio para el mismo, tengo ya acabada la documentacion de SNL en pdf y odt y la biblioteca tambien esta acabada y lista para descargarse en diferentes formatos.<br /><br /><a href="http://snl.ya.st/" class="postlink">http://snl.ya.st/</a><br /><br />Como algunos ya sabreis, y lo repito para los que no lo sepais, SNL son las siglas de Simple Network Library y es una biblioteca con funciones para la comunicacion a traves de redes (como por ejemplo internet), es sencilla de utilizar y esta en español tanto la biblioteca como la documentacion. La biblioteca es software libre bajo la licencia GPL.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mar Abr 07, 2009 8:37 pm</p><hr />
]]></content>
</entry>
</feed>