<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=210" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-12-20T12:04:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=210</id>
<entry>
<author><name><![CDATA[uguru]]></name></author>
<updated>2007-12-20T12:04:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=777#p777</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=777#p777"/>
<title type="html"><![CDATA[problemas inclusion de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=777#p777"><![CDATA[
Alguna novedad  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /> <br /><br />Como lib para fuentes suelo usar SDL_gfx.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1829">uguru</a> — Jue Dic 20, 2007 12:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shellman]]></name></author>
<updated>2007-12-18T16:23:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=768#p768</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=768#p768"/>
<title type="html"><![CDATA[problemas inclusion de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=768#p768"><![CDATA[
Por su puesto que tenia que ser error de la versión de VC ya que todo aquello relacionado con windows, microsoft y Bill Gates presenta incompatibilidades entre versiones, así que la próxima primero revisen bien las versiones de sus archivos para que no les suceda esto.<br /><br /><span style="font-weight: bold">PD: Creo que se notó un poco mi decepción con todo lo relacionado a Microsoft y su monopolio, prefiero el software libre. XD</span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=439">Shellman</a> — Mar Dic 18, 2007 4:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[uguru]]></name></author>
<updated>2007-12-18T13:19:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=764#p764</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=764#p764"/>
<title type="html"><![CDATA[problemas inclusion de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=764#p764"><![CDATA[
Échale on ojo a esto <!-- m --><a class="postlink" href="http://www.javielinux.com/articulos/sdln1/sdl-n1/x94.html">http://www.javielinux.com/articulos/sdl ... 1/x94.html</a><!-- m --> por se comenta algun detalle o ves algo en las capturas que pueda ayudarte.<br /><br />En win salvo en Cygwin, no tengo experiencia. <br /><br />Mucho ánimo a ver si lo consigues.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1829">uguru</a> — Mar Dic 18, 2007 1:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2007-12-17T20:52:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=759#p759</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=759#p759"/>
<title type="html"><![CDATA[problemas inclusion de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=759#p759"><![CDATA[
vale, ya lo consegui. no era lo de .a, pero muchisimas gracias por responder tan rapido. de hecho y por si alguien busca mas adelante, no encontre ningun archivo .a en las librerias que me descargue, asi que supongo que sera exclusivo de sistemas unix <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" />.<br />el problema estaba en la version que me descargue de la url oficial: <br /><br /><!-- m --><a class="postlink" href="http://www.libsdl.org/projects/SDL_ttf/">http://www.libsdl.org/projects/SDL_ttf/</a><!-- m --><br /><br />el tema es que me baje en un principio el codigo para compilarlo y crearme un paquete multiplataforma que instalara todas las librerias SDL necesarias para hacer cualquier cosa en cualquier plataforma, pero he desistido por mi inexperiencia todavia, lo dejo como proyecto pendiente <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />. luego me baje el binary win32, pero me baje el primero, que no me funciono. en un vistazo mas detenido, me parecio que eso de VC8 podia tener que ver con mi entorno de desarrollo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /> y efectivamente, copie las dll al directorio del programa, añadi las carpetas include de la SDL, la SDL_ttf y la freetype-2.3.5 que segun dice en la web oficial de antes, es necesaria para que funcione la libreria... ahora ya no me da errores de linkeo, pero me ha dado otro tipo de error, a ver si alguien sabe que es y termino de dar la coña con estas cosas y puedo aportar por lo menos ejemplos chorras que prepare. aqui esta el error:<br /><br />Excepción no controlada en 0x6f4c237b en fuente.exe: 0xC0000005: Infracción de acceso al leer la ubicación 0x00000000.<br /><br />me da en esta linea<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>ttext = TTF_RenderText_Shaded&#40;fuente,msg,fgcolor,bgcolor&#41;;</code></dd></dl><br /><br />que pertenece al:<br /> Ejemplo4_1<br />(C) 2003 by Alberto Garcia Serrano<br />Programación de videojuegos con SDL<br /><br />dentro del eBook: Programacion de videojuegos con SDL.pdf , paginas 65-66. es un hola mundo normal y corriente y todavia no logre hacerlo funcionar <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />.<br /><br />a ver si alguien puede echarme un cablecillo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":-)" title="Smile" /><br />muchas gracias por adelantado y gracias a uguru en particular<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Lun Dic 17, 2007 8:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[uguru]]></name></author>
<updated>2007-12-17T19:36:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=758#p758</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=758#p758"/>
<title type="html"><![CDATA[problemas inclusion de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=758#p758"><![CDATA[
hola!<br /><br />Parece que no linka bien, te suena haber copiado unos archivos con externsión .a? <br /><br />No se recuerdo bien  como va la cosa en windows, pero me suena que las dll las utilizaba solo para la ejecución, para linkar utilizaba los archivos con extensión .a<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1829">uguru</a> — Lun Dic 17, 2007 7:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2007-12-17T18:51:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=754#p754</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=754#p754"/>
<title type="html"><![CDATA[problemas inclusion de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=210&amp;p=754#p754"><![CDATA[
en primer lugar, hola a todo el mundo, este es mi primer post y espero que con tiempo y aprendiendo un poco mas, pueda empezar a ayudar a los mas novatos, como yo ahora.<br /><br />en segundo aqui va la duda: estoy empezando con SDL. he hecho una aplicacion un tanto chorras de PONG, con temas de angulos de rebote, deteccion de colisiones, inteligencia artificial cutre para la barrita &quot;manejada por el ordenador&quot; y control de la barra del jugador con varios modos de juego: pc vs pc y humano vs pc (el pc vs pc era para probar si la IA era falible en los casos extremos para que no fuera ni muy tonta ni infalible <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> ), control de velocidades tanto de barra como de pelota, etc.... <br /><br />el tema es que yo ahora quiero hacer mas cositas y me he bajado una serie de manuales MUY interesantes de la web losersjuegos. he ledio un par y ahora con el tercero, cuando me he metido realmente en harina a programar, me he encontrado con el primer obstaculo: no consigo que me funcione la libreria SDL_ttf ... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" />. utlizo Visual C++ 2005 express version 8.0.50727. <br /><br />utilizar la libreria SDL.h fue &quot;relativamente&quot; facil: <br />1º copie SDL.dll en el directorio del proyecto<br />2º arrastre los archivos .lib de la carpeta libs hasta mi proyecto, en la carpeta &quot;Archivos de recursos&quot;<br />3º en propiedades de proyecto, c/c++, general, Directorios de inclusion adicionales, inclui la ruta de la carpeta include del SDL<br /><br />**si os preguntais porque he puesto todo ese rollo, es para por si a alguien le soluciona algun tema buscando por la red y para saber si hago algo mal tambien <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> **<br /><br />todo funcionaba como debia, hice mi pong, todo mono y listo. ahora quiero usar la SDL_ttf y me digo: se hara igual. copiar el SDL.dll a la carpeta, incluir los directorios de include al proyecto (los de SDL y los de SDL_ttf), arrastrar las .lib al arbol y listo. pues nop <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br />he probado a descomprimir un zip que viene en el paquete que se llama visualC y que tiene una *.lib, un directorio de include y tal, pero nada. he probado a copiar ese contenido dentro de la carpeta principal del SDL_ttf, pero tampoco...muchas mas pruebas despues ... muchas busquedas por internet y la MSDN despues ... sigue saliendo en el mejor de los casos siempre lo mismo:<br /><br />main.obj : error LNK2019: símbolo externo _TTF_CloseFont sin resolver al que se hace referencia en la función _SDL_main<br />main.obj : error LNK2019: símbolo externo _TTF_RenderText_Shaded sin resolver al que se hace referencia en la función _SDL_main<br />main.obj : error LNK2019: símbolo externo _TTF_OpenFont sin resolver al que se hace referencia en la función _SDL_main<br />main.obj : error LNK2019: símbolo externo _TTF_Quit sin resolver al que se hace referencia en la función _SDL_main<br />main.obj : error LNK2019: símbolo externo _TTF_Init sin resolver al que se hace referencia en la función _SDL_main<br /><br />temo que me haya confundido y la libreria haya que compilarla antes o algo asi, he intentado compilarla varias veces (los dos proyectos que incluye: showFont y glFont) pero no se como hacerlo y siempre me da fallos: no me encuentra &quot;afxres.h&quot; y ese archivo no lo encuentro en ninguna de las librerias... <br /><br />no se, estoy dando palos de ciego a ver si suena la flauta. si alguien ha tenido este problema y/o tiene un poquito de tiempo para responder, le estaria muy agradecido.<br /><br />gracias por adelantado<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Lun Dic 17, 2007 6:51 pm</p><hr />
]]></content>
</entry>
</feed>