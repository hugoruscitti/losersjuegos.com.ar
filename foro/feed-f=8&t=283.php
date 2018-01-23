<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=283" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-04-10T01:07:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=283</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-04-10T01:07:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1107#p1107</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1107#p1107"/>
<title type="html"><![CDATA[Re: Llamar codigo desde archivo principal PYTHON]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1107#p1107"><![CDATA[
<blockquote><div><cite>Nato escribió:</cite><br />[...]luego quiero llamar otro código en el cual quiero controlar unos gráficos mediante pygame, pero no se como hacerlo (lo de importar el otro código)<br /></div></blockquote><br /><br />Saludos, la sentencia que te permite incorporar módulos a tu programa<br />es &quot;import&quot;, y funciona tanto para incorporar bibliotecas como para<br />incorporar rutinas de archivos propios.<br /><br />Por ejemplo, imagina que tienes 2 archivos en tu programa, &quot;main.py&quot; con<br />el programa principal y &quot;utils.py&quot; donde defines algunas funciones<br />adicionales:<br /><br /><span style="font-weight: bold">main.py</span><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import utils<br /><br />utils.mostrar_sistema_operativo&#40;&#41;<br /></code></dd></dl><br /><br /><br /><span style="font-weight: bold">utils.py</span><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import sys<br /><br />def mostrar_sistema_operativo&#40;&#41;:<br />    sistema = sys.platform<br />    print &quot;Usted utiliza el sistema&quot;, sistem<br /></code></dd></dl><br /><br />Veamos, el archivo &quot;utils.py&quot; usa un módulo de la biblioteca estándar de<br />python llamado &quot;sys&quot;, y a su vez define una función que imprime una frase<br />en la pantalla del programa. Desde el archivo &quot;main.py&quot; se incorporan<br />todas las definiciones de este archivo &quot;utils.py&quot; usando &quot;import&quot;.<br /><br />No hay necesidad de indicarle a python si lo que queremos incorporar es un<br />archivo propio o una biblioteca; la sentencia &quot;import&quot; simplemente busca<br />un archivo .py dentro del directorio del programa en primer lugar, y si<br />no lo encuentra va a buscar a los directorios de sistema. Todo lo que<br />sepas de módulos te sirve aquí, solo recuerda almacenar todos tus archivos<br />.py en el mismo directorio (o leer mas documentación si necesitas conocer<br />otras formas).<br /><br /><br /><blockquote><div><cite>Nato escribió:</cite><br />De paso otras preguntas.<br />¿como hago para que la ventana este maximizada?<br />¿y para que al pulsar en salir me salga una elección de si o no, que si hago click en si salga y en no, pues no, evidentemente?<br /></div></blockquote><br /><br />Lo primero es leer la documentación sobre la función &quot;set_mode&quot; de pygame, y<br />lo segundo es hacer pruebas mas pequeñas... te sugiero, si me lo permites,<br />que no intentes escribir esas rutinas ahora (confirmación de salida o pantalla<br />completa), es mejor hacer algo mas sencillo, ganar confianza en el manejo<br />de la biblioteca y leer, por sobre todo leer código de juegos y ejemplos (aquí<br />en losersjuegos hay varios). Solo ahí notarás cuan sencillo es realizar lo<br />que necesitas... de otra forma es difícil.<br /><br />Por aquí encontrarás la documentación de &quot;set_mode&quot;:<br /><br />   <!-- m --><a class="postlink" href="http://www.pygame.org/docs/ref/display.html#pygame.display.set_mode">http://www.pygame.org/docs/ref/display. ... y.set_mode</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Abr 10, 2008 1:07 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2008-04-09T23:23:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1105#p1105</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1105#p1105"/>
<title type="html"><![CDATA[Llamar codigo desde archivo principal PYTHON]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1105#p1105"><![CDATA[
Contestando a la primera pregunta, debes importar tu código igual que importas os o tkinter. Ahora no recuerdo muy bien si puedes hacerlo sin más o tal vez tengas que agregar la carpeta donde está incluido tu código a la lista de carpetas en las que por defecto busca el sistema.<br />Otra forma es incluir el código en el mismo archivo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mié Abr 09, 2008 11:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2008-04-08T21:11:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1097#p1097</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1097#p1097"/>
<title type="html"><![CDATA[Llamar codigo desde archivo principal PYTHON]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=283&amp;p=1097#p1097"><![CDATA[
EDITO que ahora me puedo explicar mejor ya que tengo tiempo.<br /><br />Estoy trabajando en python pero me ha surgido una duda que no he logrado resolver.<br /><br />Tengo un archivo llamado main.py, que es un archivo que importa la librería os y tkinter, en ella creo una ventana con las opciones que quiero, luego quiero llamar otro código en el cual quiero controlar unos gráficos mediante pygame, peor no se como hacerlo (lo de importar el otro código)<br /><br />main.py<br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- coding: utf-8 -*-<br /><br />import os<br /><br />from Tkinter import *<br />import tkCommonDialog<br />import tkMessageBox<br /><br />root = Tk&#40;&#41;<br /><br />def _acerca&#40;&#41;:<br />    tkMessageBox.showinfo&#40;&quot;Acerca de Proyecto.&quot;,<br />                          &quot;Proyecto\nVersión: 0.0.1\n&quot;<br />                          &quot;\nCreado por: Nato&quot;&#41;<br />def _salir&#40;&#41;:<br />    tkMessageBox.showwarning&#40;&quot;Salir de Proyecto.&quot;,&quot;¿Estas seguro que deseas salir de Proyecto?&quot;&#41;<br /><br />root.minsize&#40;640,480&#41;<br />root.title&#40;&quot;Proyecto v0.0.1&quot;&#41;<br /><br />menu = Menu&#40;root&#41;<br />root.config&#40;menu=menu&#41;<br /><br />menuarchivo = Menu&#40;menu&#41;<br />menu.add_cascade&#40;label=&quot;Archivo&quot;, menu=menuarchivo&#41;<br />menuarchivo.add_command&#40;label=&quot;Salir&quot;, command=_salir&#41;<br /><br />menuayuda = Menu&#40;menu&#41;<br />menu.add_cascade&#40;label=&quot;Ayuda&quot;, menu=menuayuda&#41;<br />menuayuda.add_command&#40;label=&quot;Acerca de Proyecto&quot;, command=_acerca&#41;<br /><br />mainloop&#40;&#41;</code></dd></dl><br /><br />De paso otras preguntas.<br />¿como hago para que la ventana este maximizada?<br />¿y para que al pulsar en salir me salga una elección de si o no, que si hago click en si salga y en no, pues no, evidentemente?<br /><br />Bueno eso es todo por ahora, gracias con antelación.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Mar Abr 08, 2008 9:11 pm</p><hr />
]]></content>
</entry>
</feed>