<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=182" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-10-25T17:35:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=182</id>
<entry>
<author><name><![CDATA[damian]]></name></author>
<updated>2007-10-25T17:35:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=653#p653</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=653#p653"/>
<title type="html"><![CDATA[Anjuta 2.2.0 y librerias SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=653#p653"><![CDATA[
Hola a todos de nuevo.<br /><br />Lo consegui pero de otra forma...en el wizard para crear un nuevo proyecto en el último paso hay un botón que pone configurar paquetes externos...le puse a &quot;Si&quot;, me pregunto el nombre de los paquetes y con eso sobro. Aunque creo que hace lo mismo que tu me has dicho.<br /><br />Un saludo y muchas gracias por todo compañero!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1835">damian</a> — Jue Oct 25, 2007 5:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-10-24T18:18:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=648#p648</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=648#p648"/>
<title type="html"><![CDATA[Anjuta 2.2.0 y librerias SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=648#p648"><![CDATA[
Saludos, instalé la versión nueva de Anjuta (2.2.0) y creo haber<br />encontrado donde vincular la biblioteca.<br /><br />Al parecer Anjuta utiliza &quot;automake&quot; y &quot;autoconf&quot; junto al <br />comando &quot;pkg-config&quot; para gestionar el uso de bibliotecas... <br />Así que necesitas especificar las dependencias de tu programa<br />a estas herramientas, en lugar de especificarlas<br />directamente al compilador.<br /><br />Te comento los pasos que he seguido:<br /><br />Seleccioné &quot;Archivo -&gt; Nuevo -&gt; Proyecto&quot; y luego &quot;Generic C++&quot; (entiendo<br />que buscabas hacer un proyecto en C++).<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20071024/proyecto_1.png" alt="Imagen" /><br /><br />Luego ingresé en el menú &quot;Proyecto -&gt; Propiedades&quot; y en la sección<br />paquetes. Ahí seleccioné &quot;Añadir paquete&quot; y luego &quot;sdl&quot;.<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20071024/proyecto_3.png" alt="Imagen" /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20071024/proyecto_4.png" alt="Imagen" /><br /><br />Luego hay que pulsar &quot;Cerrar&quot;, ir al menú &quot;construir&quot; y seleccionar<br />la opción &quot;construir&quot;.<br /><br />Ten encuenta que en la parte inferior de la pantalla hay una ventana que<br />indica &quot;Asistente de creación de proyectos&quot;. Al menos en mi caso, esta<br />ventana indicaba que aún no tenía todas las bibliotecas necesarias para<br />construir el proyecto. Solo cuando está todo correcto aparece un texto<br />que indica &quot;Now type 'make' to compile&quot;.<br /><br />otra forma de construir el proyecto es ir al directorio donde se guardan<br />tus trabajos y ejecutar el programa &quot;http://losersjuegos.com.ar/foro/autogen.sh&quot;.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Oct 24, 2007 6:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[damian]]></name></author>
<updated>2007-10-24T10:39:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=645#p645</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=645#p645"/>
<title type="html"><![CDATA[Anjuta 2.2.0 y librerias SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=182&amp;p=645#p645"><![CDATA[
He estado intentando crear un proyecto usando las librerias SDL en C++ con la nueva versión de Anjuta (2.2.0) y no veo forma de indicarle al compilador que enlace con esas librerias...antes tenía opciones de compilador y enlazador pero en esta versión no lo encuentro por ninguna parte....he probado con el browser symbol agregando SDL pero tampoco chuta. <br /><br />Si el proyecto es en C con SDL no hay problema, por que han incluido una plantilla en el Wizard para crear este tipo de proyectos...pero para C++ no veo forma...si alguien me pudiera iluminar. ¿No tendré que modificar el make a manita?<br /><br />Uso Anjuta 2.2.0 en Ubuntu Gutsy Gibbon y tengo instaladas correctamente las librerias SDL...<br /><br />Un saludo y gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1835">damian</a> — Mié Oct 24, 2007 10:39 am</p><hr />
]]></content>
</entry>
</feed>