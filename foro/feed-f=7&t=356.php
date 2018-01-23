<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=356" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-07-18T21:08:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=356</id>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-07-18T21:08:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=356&amp;p=1575#p1575</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=356&amp;p=1575#p1575"/>
<title type="html"><![CDATA[Caso extraño con Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=356&amp;p=1575#p1575"><![CDATA[
La verdad que es poco probable que  Dev-C++ sea el responsable de los errores. Posiblemente se deba al nuevo codigo que agregaste o bien, a un bug que existia de antemano. <br />Me ha pasado, que dado un programa, lo ejecuto y todo funciona bien, luego lo cierro y lo vuelvo a ejecutar y , magicamente, se cuelga. Esto se debia a que en una parte de mi programa habia un puntero que apuntaba a cualquier lugar (no inicializado). En ciertas ocaciones, el sistema operativo inicializaba el puntero a un lugar de la memoria que le pertenecia al mismo programa en ejecucion (y eso no producia error) pero otras veces, el sistema operativo inicializaba el puntero a un lugar de la memoria que le pertenecia a otro programa y eso abortaba la ejecucion.<br /><br />Al igual que a vos, me di cuenta al modificar el codigo fuente (y en un principio pense que se trataba de un error del nuevo codigo agregado) Pero luego note, que el bug aparecia algunas veces y otras veces no. <br />Te suguiero que inicies el programa y lo cierres y repitas el procedimiento varias veces para ver si tenes el mismo bug que yo tuve. <br /><br />Saludos<br /><br />Nota: el sistema operativo que use, en aquel momento fue Windows XP. Con Ubuntu no me sucedio tal bug (simplemente me daba un error en tiempo de ejecucion &quot;Segmentation Fault&quot;).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Jul 18, 2008 9:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2008-07-18T14:19:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=356&amp;p=1574#p1574</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=356&amp;p=1574#p1574"/>
<title type="html"><![CDATA[Caso extraño con Dev-C++]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=356&amp;p=1574#p1574"><![CDATA[
Hola a todos<br /><br />Tengo instalado la versión 5.9.9.2 y haciendo programas en C++ me han ocurrido un par de casos extraños:<br /><br />Haciendo un mini-juego con SDL, cuando ya lo tengo terminado y funcionado correctamente, decido añadirle un poco de código para medir los FPS a los que funciona el juego (no controlarlos, solo medirlos), muy poca cosa, un par de variables y 5 o 6 líneas de código para mostrar en el título de la ventana los FPS.<br /><br />Compila bien, pero cuando voy a ejecutar, falla, ni siquiera se muestra la ventana. Así que decido poner algunas lineas para imprimir el contenido de algunas variables y tratar de seguir la ejecución del programa a ver donde falla. Descubro que el código que acabo de añadir funciona bien, y que el fallo parece estar en la parte en la que se dibujan en pantalla los distintos personajes.<br /><br />Curioso, antes de añadir el código de los FPS funcionaba bien. Así que coloco por allí otras líneas para seguir la ejecución y, o sorpresa, ahora no da ningún error y se ejecuta sin problemas.<br /><br />Así que quito todas las líneas de seguimiento que puse, y compila y se ejecuta sin problemas, curioso, ni idea de donde pudo estar el fallo, no modifique ninguna sola línea de código.<br /><br />Y otro caso parecido, otro mini-juego que funciona sin problemas, le añado un poco de código (simplemente para mostrar en pantalla las vidas que le quedan al jugador) y compila bien, pero al ejecutarlo falla. En este caso, en vez de poner líneas para imprimir las variables y seguir por donde va la ejecución, decido usar la opción Debug de Deb-C++, y funciona, se ejecuta sin problemas, pruebo a ejecutarlo normalmente, y vuelve a fallar.<br /><br />Éste mini-juego no lo tengo aun terminado, así que después de esos fallos, he seguido añadiendo código y no me ha vuelto a dar errores, y no he modificado nada del código que ya tenia cuando fallaba.<br /><br />Dos casos curiosos, ¿es posible que esta versión que uso de Dev-C++ tenga algún bug o algo así? ¿habéis tenido algún error parecido?<br /><br />Estoy pensando en instalar code::blocks o algún otro a ver si me va mejor. También tengo previsto compilar ese mismo código bajo linux y con kdevelop a ver si me da problemas, pero la falta de tiempo me lo impide <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Vie Jul 18, 2008 2:19 pm</p><hr />
]]></content>
</entry>
</feed>