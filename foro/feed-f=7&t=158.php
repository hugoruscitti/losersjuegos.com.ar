<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=158" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-09-19T11:43:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=158</id>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2007-09-19T11:43:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=543#p543</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=543#p543"/>
<title type="html"><![CDATA[¿Que herramientas usais?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=543#p543"><![CDATA[
Amigo Hugo, te ha salido un tutorial sobre VIM estupendo.<br /><br />Como usuario de linux desde hace varios años, sí que conozco éste programa, lo suelo usar a menudo, pero nunca lo he usado para programar, y eso que conocía alguna de sus características como el resaltado de la sintaxis, pero después de leer tu mensaje voy a probarlo más a fondo, que me has dejado impresionado.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Mié Sep 19, 2007 11:43 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-09-19T02:38:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=542#p542</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=542#p542"/>
<title type="html"><![CDATA[¿Que herramientas usais?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=542#p542"><![CDATA[
Hola, ¿que tal?. Creo que todos utilizamos herramientas diferentes, pero<br />bueno, yo te puedo comentar acerca del editor que me gusta.<br /><br />Utilizo un editor de textos llamado VIM. Este es muy particular,<br />porque no solo me resulta útil para programar, también lo utilizo para<br />editar este mensaje, escribir tutoriales y modificar la Web.<br /><br />Te comento algunas de las características que utilizo con frecuencia:<br /><br />- VIM soporta auto-completado inteligente de código, por lo tanto puedes <br />escribir el nombre de un módulo en python, o una estructura en C, y el <br />editor te sugiere todos los atributos que tienes disponibles, ocurre<br />lo mismo con las funciones:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20070918/omni.png" alt="Imagen" /><br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20070918/omni2.png" alt="Imagen" /><br /><br />para activar el auto-completado de código puedes utilizar la combinación<br />de teclas CTRL+X CTRL+O. Aunque existen muchas formas de auto-completar, por<br />ejemplo si pulsas CTRL+N podrás auto-completar palabras simples (como nombres<br />de variables y funciones).<br /><br />Luego puedes definir atajos mas accesibles, pero en principio las<br />conbinaciones son así... ah, CTRL-x CTRL-f autocompleta nombres de<br />directorio.<br /><br />- Con vim puedes observar varios archivos a la vez, esto es útil<br />cuando construyes programas en C, donde utilizas un archivo .h para declarar<br />estructuras o funciones y un archivo .c para implementar el código de <br />cada función. Es fácil copiar y pegar entre archivos, de hecho es útil<br />para comparar distintas versiones de archivos:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20070918/ventanas.png" alt="Imagen" /><br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20070918/diff.png" alt="Imagen" /><br /><br />utiliza los comandos &quot;:split&quot;, &quot;:vsplit&quot; o &quot;:Explore&quot; para verlo en <br />funcionamiento.<br /><br />- Es fácil invocar a comandos externos, como un compilador por ejemplo. <br />Solo debes escribir el nombre de comando con un signo de <br />interrogación: &quot;:!comando&quot;. <br /><br />También puedes leer la salida del comando ejecutado y colocarlo en el<br />archivo actual: por ejemplo &quot;:r !date&quot; coloca la fecha actual del <br />sistema en tu pantalla y &quot;:r !ls&quot; una lista de todos los archivos<br />del directorio.<br /><br />En GNU/Linux casi-todo se puede hacer mediante comandos, de ahí la <br />utilidad de poder combinar todo esto con VIM.<br /><br />- Se puede configurar para hacer mas eficiente tu trabajo, por ejemplo, a mí<br />me resulta útil tener un atajo de teclado para probar programas escritos<br />en python. Con otros editores necesito: grabar el archivo, salir del <br />programa, ir a un terminal y ejecutar &quot;python mi_archivo.py&quot;. En VIM solo<br />pulso la tecla F3 y todo esto se hace solo. Lo único que he configurado<br />en mi archivo &quot;.vimrc&quot; con las siguientes lineas:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>augroup filetypedetect<br />    au BufNewFile,BufRead *.py map &lt;F3&gt; :w&lt;CR&gt;:!clear; python %&lt;CR&gt;<br />augroup END</code></dd></dl><br /><br />también puedo autocomentar texto mediante la tecla TAB con las siguientes<br />sentencias (también en vimrc):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&quot;Autocompletado de palabras mas accesible con la tecla &lt;TAB&gt;&quot;<br />function InsertTabWrapper&#40;&#41;<br />    let col = col&#40;'.'&#41; - 1<br />    if !col || getline&#40;'.'&#41;&#91;col - 1&#93; !~ '\k'<br />        return &quot;\&lt;tab&gt;&quot;<br />    else<br />        return &quot;\&lt;c-p&gt;&quot;<br />    endif<br />endfunction</code></dd></dl><br /><br />VIM tiene muchas mas características, pero aquí solo indico las que mas<br />utilizo.<br /><br />Con respecto a los proyectos grandes, sobretodo si se trata de proyectos <br />en lenguaje C, creo que te resultará útil comenzar a utilizar la <br />herramienta &quot;Make&quot;. Su funcionamiento es muy sencillo, simplemente <br />utilizas un archivo llamado &quot;Makefile&quot; para definir los archivos de tu <br />proyecto y los parámetros del compilador (bibliotecas, dependencias, etc).<br /><br />Por ejemplo, imagina que tengo un proyecto que utiliza SDL/SDL_TTF y<br />está compuesto de 3 archivos: &quot;main.c&quot;, &quot;util.c&quot; y &quot;sprite.c&quot;. Un<br />posible archivo Makefile para este proyecto es:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>CFLAGS=`sdl-config --cflags`<br />LDFLAGS=`sdl-config --libs` -lSDL_ttf<br /><br />main: main.o util.o sprite.o<br /></code></dd></dl><br /><br />ahora, para compilar debes escribir el comando &quot;make&quot; y ya está, en pantalla<br />observarás lo siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>cc `sdl-config --cflags`   -c -o main.o main.c<br />cc `sdl-config --cflags`   -c -o util.o util.c<br />cc `sdl-config --cflags`   -c -o sprite.o sprite.c<br />cc `sdl-config --libs` -lSDL_ttf  main.o util.o sprite.o   -o main<br /></code></dd></dl><br /><br />es decir, &quot;make&quot; escribió todo eso por nosotros, y si lo llamamos nuevamente<br />&quot;make&quot; solo &quot;compilará&quot; los archivos que has modificado, no todos.<br /><br />Hay buenos tutoriales de Make en Internet, pero esto es lo mas básico que<br />puede hacer (y no es poco).<br /><br />Cabe decir que también puedes llamar a &quot;make&quot; desde VIM. Esto facilita mucho<br />tu tarea, dado que si tu programa tiene algún error al compilar, VIM te<br />llevará directamente a la linea en la que te has equivocado...<br /><br /><br />En fin, todo esto tiene una desventaja importante, VIM es un herramienta<br />muy poderosa o por ello se debe aprender a utilizar con mucha paciencia.<br />Si escribes mucho &quot;texto&quot; frente a la computadora, te recomiendo buscar <br />tutoriales en Internet sobre el tema, hay muchos y muy buenos.<br /><br />PD: Dentro de unos días daré una charla sobre este editor en el evento<br />    CaFeCONF. Intentaré hacer un resumen de la misma para compartirlo con<br />    quienes no puedan asistir...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Sep 19, 2007 2:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2007-09-18T18:26:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=541#p541</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=541#p541"/>
<title type="html"><![CDATA[¿Que herramientas usais?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=158&amp;p=541#p541"><![CDATA[
Después de la pregunta sobre kdevelop que he hecho, se me ha ocurrido preguntaros que herramientas usáis para crear los juegos.<br /><br />Yo hasta ahora venía usando el editor kate (uso kubuntu), que aparte de resaltar el código con diferentes colores, incluye una consola, por lo que editar y compilar es muy cómodo.<br /><br />Hasta ahora sólo he hecho pequeñas cosas, el problema es que al hacer proyectos más grandes, el número de archivos crece y se hace más engorroso, por eso he buscado una herramienta más completa, y kdevelop, que se instala sin problemas en kubuntu, me ha parecido una buena opción.<br /><br />Y vosotros, ¿Que usáis?<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Mar Sep 18, 2007 6:26 pm</p><hr />
]]></content>
</entry>
</feed>