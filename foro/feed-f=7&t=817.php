<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=817" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-08T21:47:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=817</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-08T21:47:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3698#p3698</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3698#p3698"/>
<title type="html"><![CDATA[Re: Code::Blocks SDL, no veo los cout o los printf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3698#p3698"><![CDATA[
También es muy cierto lo que te comenta Geo, tendrías que decirle a tu IDE que tu<br />aplicación es de consola y no de ventanas. Creo que eso se logra quitando<br />la cadena &quot;-mwindows&quot; del linker...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 08, 2010 9:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-08T21:45:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3697#p3697</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3697#p3697"/>
<title type="html"><![CDATA[Re: Code::Blocks SDL, no veo los cout o los printf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3697#p3697"><![CDATA[
Sobre los mensajes de consola, en el siguiente artículo<br />hay una explicación de porqué SDL en windows genera<br />los archivos y cómo evitar que los genere:<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/instalar_devcpp">http://www.losersjuegos.com.ar/referenc ... lar_devcpp</a><!-- m --><br /><br />Tienes que ver la última parte del artículo, en la sección &quot;Mensajes de consola&quot;.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 08, 2010 9:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2010-08-08T19:57:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3695#p3695</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3695#p3695"/>
<title type="html"><![CDATA[Re: Code::Blocks SDL, no veo los cout o los printf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3695#p3695"><![CDATA[
Hola, me fije y los archivos stdout.txt y stderr.txt y si aparecen en el directorio donde se encuentra el ejecutable  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> , ahora no habra alguna forma de traer esos mensajes y que se muestren en una consola dentro del code::blocks??, ya que esos archivos por lo que vi son temporarios, cuando termina la ejecucion desaparecen, y si los abris para ver que dice y se sigue ejecutando la aplicacion, estos no se modifican al mismo tiempo que la aplicacion, o sea hay que cerrarlos y abrirlos cada vez que quieras ver los mensajes...<br />Igual lo de los archivos me ha servido bastante, pero si saben alguna otra forma para mejor comodidad mejor, gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Dom Ago 08, 2010 7:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-08-08T14:41:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3693#p3693</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3693#p3693"/>
<title type="html"><![CDATA[Re: Code::Blocks SDL, no veo los cout o los printf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3693#p3693"><![CDATA[
¿Te has fijado si en el directorio de ejecución se crean archivos denominados stdout.txt y stderr.txt?<br />El comportamiento &quot;normal&quot; de SDL en Windows es redirigir los mensajes de consola hacia esos dos archivos, esto es cuando creas una aplicación &quot;Windows&quot;, que imagino será lo que hace CodeBlocks por defecto. Para ver la consola, crea un proyecto de consola y agrega las opciones de enlazado manualmente, o, si CodeBlocks te lo permite, modifica el tipo de aplicación a &quot;Consola&quot; en lugar de &quot;Aplicación para Windows&quot;.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Dom Ago 08, 2010 2:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2010-08-08T04:54:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3691#p3691</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3691#p3691"/>
<title type="html"><![CDATA[Re: Code::Blocks SDL, no veo los cout o los printf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3691#p3691"><![CDATA[
Utilizando cerr, tampoco me andubo, voy a probar instalar todas las librerias y crearme un proyecto en consola en vez que en sdl para ver si puedo lograr ver los mensajes, alguien conoce algun tutorial para instalar las librerias sdl sobre code blocks en windows??<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Dom Ago 08, 2010 4:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-08T02:25:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3690#p3690</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3690#p3690"/>
<title type="html"><![CDATA[Re: Code::Blocks SDL, no veo los cout o los printf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3690#p3690"><![CDATA[
Yo usaría codelite, en vez de codeblocks, mucho mejor.<br /><br />En cuando a lo que dices, puedes solucionarlo sacando los mensajes por la salida estandard y no por la consola, usando cerr en lugar de cout.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Dom Ago 08, 2010 2:25 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-08-08T02:17:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3689#p3689</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3689#p3689"/>
<title type="html"><![CDATA[Re: Code::Blocks SDL, no veo los cout o los printf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3689#p3689"><![CDATA[
Hola, el problema es ese, que creaste un proyecto de sdl, la verdad es que nunca lo he hecho, he usado el code::blocks pero siempre pongo proyecto de consola independientemente de que tipo de aplicación aré, pero vas a tener que agregar las bibliotecas manualmente, te vas a las opciones del proyecto, a la ficha build target, das en el boton build options y despues a la ficha linker settings, y haí agregas las bibliotecas que uses en tu proyecto, en tu caso pondrias : -lSDL<br />y asi con las que uses. pero siento que es mas facil hacer un makefile, asi que no compilo desde el ide, lo hago desde la terminal<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Ago 08, 2010 2:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2010-08-08T00:10:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3684#p3684</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3684#p3684"/>
<title type="html"><![CDATA[Code::Blocks SDL, no veo los cout o los printf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=817&amp;p=3684#p3684"><![CDATA[
Buenas, hace poco estoy arrancando con sdl utilizando c/c++ sobre el ide code::blocks, mi problema es que puedo iniciar el video abrir la ventana de sdl, pero no puedo ver los mensajes por consola, cuando creo el proyecto lo creo con la opcion proyecto SDL que posee code::blocks y la ruta de sdl es la libreria. pero los cout o los printf no los puedo ver, o sea no veo los mensajes por consola, que estoy haciendo mal? hay alguna forma de agregar la consola a los proyectos sdl?? o alguna otra forma de trabajar con proyectos sdl?? en vez de crear proyecto sdl, crear uno en consola y trabajar con sdl eso se puede hacer'???<br /><br />Desde ya muchas gracias<br />Diego<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Dom Ago 08, 2010 12:10 am</p><hr />
]]></content>
</entry>
</feed>