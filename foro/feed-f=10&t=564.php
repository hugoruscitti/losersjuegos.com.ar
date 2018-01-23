<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=564" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-03T14:26:04+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=10&amp;t=564</id>
<entry>
<author><name><![CDATA[algarafa]]></name></author>
<updated>2009-07-03T14:26:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2673#p2673</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2673#p2673"/>
<title type="html"><![CDATA[Particiones]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2673#p2673"><![CDATA[
Bueno, en esto si que te voy a poder ayudar. Yo tengo 3 So en mi pc  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> .<br />A ver yo lo que haría sería instalar Windows Vista en la primaera partición, y marcar esta como booteable. Luego en la segunda partición, pondría 50 Gb para guardar tus datos, y la pondría con el sistema de ficheros fat, para que te lo lean ambos SO. Y luego lo que haría sería crear una partición extendida con tres subparticiones. La primera de ellas para la raíz '/', la segunda para /home y la tercera para swap (intercambio). Y Windows XP, lo instalaría en una máquina virtual, bien en Windows Vista o en GNU/Linux.<br />La cosa quedaría así:<br />[list=]1ª partición 40 Gb: Windows Vista (está partición con marca de arranque)<br />2ª partición 50 Gb: Siatema de ficheros fat (aquí guardas peliculas, documentos, proyectos, las fotos de tu familia...)<br />3ª partición extendida de 30 Gb (vamos lo que queda), esta se subdiviría en:<br />3.1ª subpartición de 4Gb para la raíz<br />3.2ª subpartición de 25.5 Gb para /home<br />3.3ª subpartición de 0.5 GB para swap[/list]<br />Pos supuesto se pueden hacer las particiones de los SO más pequeñas y hacer la partición común más grande, pero te sobra espacio, así que no pasa nada.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2006">algarafa</a> — Vie Jul 03, 2009 2:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-09T00:40:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2576#p2576</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2576#p2576"/>
<title type="html"><![CDATA[Varios OS en el mismo equipo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2576#p2576"><![CDATA[
<blockquote><div><cite>Metator de Arkalot escribió:</cite><br />Hola de nuevo<br />Ya pude instalar los dos O.S en la misma maquina, pero no<br />encontre drivers para mi tarjeta de video <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" />, el administrador<br />de software privativo no me sirvio de nada.<br />Como sea, ya de ultimo momento me surgio una duda. He visto<br />que se puede &quot;instalar&quot; una distribución linux en un drive usb, pero<br />que se copea el contenido del cd y se hace boteable, pero... ¿de esta<br />manera se pueden instalar/quitar programas o configurarlo y que se<br />guarden los cambios en la usb para el siguiente boot? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /><br /></div></blockquote><br /><br />En teoria, y si se hace correctamente, si se pueden instalar y desinstalar programas y todo como si estuviera instalado en el disco duro, solo un detalle, si es para usarlo en un portatil no tiene sentido, eso se hace cuando quieres poder tener GNU/Linux en el Instituto (colegio, universidad o similares), en el trabajo, o en casa de un amigo esclavizado por Mocosoft , pero si con el portatil ya puedes llevarte tu sistema alla donde estes ¿que sentido tiene llevarlo en una memoria USB? para eso yo no te lo recomendaria, instala el XP cogiendose todo el disco (elimina cualquier particion que tenga si es necesario), instala el Vista particionando para que tengas XP y Vista y por ultimo instala la distribucion de GNU/Linux que más te guste usando un particionado guiado (que te sera más fácil de hacer que si lo hicieses manualmente), asi tendras los tres sistemas donde estes en tu portatil, si aun despues de desaconsejarte lo del USB teniendo el portatil quieres hacerlo en google hay muchos resultados donde lo explican paso por paso, y ubuntu ahora trae un programa para hacerlo sin tener que estar copiando archivos de forma manual, no lo he probado pero si lo han programado sera que funciona. Solo una ultima cosa, si el XP y el Vista los instalas para usar los programas de windows (ejecutar los .exe) eso tambien puedes hacerlo con Wine, y en lugar de tener instalados el XP y el Vista puedes usar una maquina virtual, de forma que no tengas que salir de GNU/Linux para cualquier prueba que tengas que hacer con 'el ventanas'.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mar Jun 09, 2009 12:40 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-06-08T03:23:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2572#p2572</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2572#p2572"/>
<title type="html"><![CDATA[Varios OS en el mismo equipo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2572#p2572"><![CDATA[
Hola de nuevo<br />Ya pude instalar los dos O.S en la misma maquina, pero no<br />encontre drivers para mi tarjeta de video <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cry.gif" alt=":cry:" title="Crying or Very sad" />, el administrador<br />de software privativo no me sirvio de nada.<br />Como sea, ya de ultimo momento me surgio una duda. He visto<br />que se puede &quot;instalar&quot; una distribución linux en un drive usb, pero<br />que se copea el contenido del cd y se hace boteable, pero... ¿de esta<br />manera se pueden instalar/quitar programas o configurarlo y que se<br />guarden los cambios en la usb para el siguiente boot? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Lun Jun 08, 2009 3:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-05-21T13:57:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2553#p2553</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2553#p2553"/>
<title type="html"><![CDATA[Como distribuir particiones...]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2553#p2553"><![CDATA[
Juanxo ya planteó una duda parecida en el foro, te recomiendo que leas lo que se comentó para ir cogiendo ritmo en esto de particionar. (<a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=478&amp;postdays=0&amp;postorder=asc&amp;highlight=particion&amp;start=15" class="postlink">link</a>)<br />Es importante saber para que es cada cosa, por ejemplo '/home' será donde se guarden todos los archivos y configuraciones de los usuarios menos el superusuario, si le dedicas una partición no tendrás que formatearla si en un futuro decides que la distribución de linux que has instalado no te gusta, formateando sólo la partición donde está la raíz del sistema '/'.<br />Infórmate un poco más sobre eso preguntandole a google por ejemplo.<br />¿Para qué quieres WinXP y WinVista? En mi opinión tienes poco espacio para tanto sistema operativo, yo elegiría uno u otro. Si ya tienes WinVista porque te vino con el ordenador pues sólo tendrás que partir el disco y crear las particiones de linux. Ves a lo fácil para empezar.<br />Te aconsejo una distribución de las particiones parecida a esta:<br />La mitad del disco duro para WinVista/WinXP, mínimo 50Gb. Ten en cuenta que podrás acceder a esta partición desde linux y podrás acceder a ella si quieres guardar algo aquí porque no te cabe en otro sitio, pero al revés no podrás, es decir, no podrás acceder a las particiones de linux desde Win.<br />21Gb para linux en '/', más que suficiente, incluso demasiado.<br />100Mb para Grub (el gestor de arranque) en '/boot', esto tiene su gracia, pero si quieres saber más preguntale a google.<br />1Gb para Swap o si tienes más de 2Gb de memoria ram no hace falta.<br />El resto de espacio para los usuarios de linux en '/home'.<br /><br />Ésto son sólo unas pautas, ya sabes que no está de más dedicarle un rato a informarse bien antes de hacer nada.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Jue May 21, 2009 1:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-05-20T14:36:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2552#p2552</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2552#p2552"/>
<title type="html"><![CDATA[Varios OS en el mismo equipo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2552#p2552"><![CDATA[
Hola, con respecto a instalar Windows XP y Windows Vista, no puedo ayudarte por que no tengo ni idea de como se instala el Vista.<br /><br />Sin embargo, para instalar XP y linux, creo que puedo ayudarte.<br /><br />La idea es primero particionar el disco:<br /><br />Una particion para XP (que debe ser la primera particion o sino esto no va a funcionar!!!)<br /><br />Otra particion para linux (digamos uno 4 GB, depende de que distribucion de linux quieras instalar)<br />Otra particion, de unos 500 MB para que linux use como memoria &quot;swap&quot;.<br />Y por ultimo, otra particion ( /home ) donde estaran tus archivos. Tengo entendido (nunca lo probe) que esta particion no seria necesaria. Bien podrias poner tus archivos en la misma particion donde esta instalado linux (obviamente, en este caso deberas poner mas que 4 GB a la particion).<br /><br />Como vez, no puse nada sobre el Vista.<br /><br />Una vez que hayas decidido que particionados necesitas, usas algun programa a tu gusto para ello. Yo suelo usar el programa particionador/formateador que viene con el LiveCD de Ubuntu. Esto es a tu gusto.<br /><br />Una vez listas las particiones, pones el cd de XP, y lo instalas en la primera particion reservada para él. Luego instalas linux.<br /><br />Si el orden de instalacion es al revez, no podras arrancar linux. Esto se debe a que la computadora tiene un sistema de arranque que sabe que Sistemas Operativos hay en tu pc. Cuando instalas XP, este borra todo lo que hay en el sistema de arranque, mientras que linux, no. Es por eso que el orden de instalacion es importante. (ojo, si el orden es incorrecto no es el fin del mundo, basta solo con reinstalar el sistema de arranque, pero es un poco mas complicado).<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mié May 20, 2009 2:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-05-20T10:24:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2551#p2551</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2551#p2551"/>
<title type="html"><![CDATA[Varios OS en el mismo equipo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=564&amp;p=2551#p2551"><![CDATA[
Hola <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />, acabo de comprarme una laptop compaq muy buena ñ_ñ<br />y ahora que tengo más espacio en disco (mi pc tenia 20 GB) pues<br />queria instalarle un linux + winblows xp + winblo$ vista (de verás)<br /><br />Pues como me recomiendan administrar las particiones ¿?, lei<br />que linux necesita al menos 3 (lo de /home no lo entiendo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" />),<br />y por ahi también me entere de que hay que instalar windows xp<br />primero, porque se &quot;adueña&quot; de la maquina.<br /><br />El disco duro es de 120 GB<br />Quiero instalar: Windows XP ; Partición de Datos ; Windows Vista ; <br />Linux (ubuntu, o el dvd de losers ñ_ñ)<br />Esta bien en ese orden <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /> ¿no se producira algun error que me<br />obligue a instalar todo de nuevo?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Mié May 20, 2009 10:24 am</p><hr />
]]></content>
</entry>
</feed>