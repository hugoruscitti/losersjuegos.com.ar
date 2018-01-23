<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=548" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-11-26T16:13:06+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=548</id>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2009-11-26T16:13:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=3055#p3055</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=3055#p3055"/>
<title type="html"><![CDATA[clases y pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=3055#p3055"><![CDATA[
Esto no tiene nada que ver con el post pero quiero ahorrar espacio sin ncesecidad de asuntos innecesarios, perdón si esto causa algún problema. Miren este ejemplo:<br /><br />import sys,os,pygame<br />from pygame.locals import *<br /><br />def LoadImage(img,nombre):<br />    img=pygame.image.load(nombre)<br />    return img, img.get_rect()<br /><br />class Yasser(pygame.image):<br />  #*********inicia instancia**************<br />  def __init__(self):<br />    pygame.image.__init__(self)<br />  #*********Carga IMagen******************  <br />  def cargaImagen(self,snombre):<br />      self.snombre=snombre<br />      recta=LoadImage(self.image, self.snombre)<br />      print recta<br />  #********Actualizar y redibujar*********************    <br />  def Flipa(self):<br />      pygame.display.flip()<br />  # *******dibujarla en la pantalla***********************    <br />  def Dibuja(self,pantalla,x,y):<br />      self.x=x<br />      self.y=y<br />      self.pantalla=pantalla<br />      self.pantalla.blit(self.image,(x,y))<br />  #********salir del programa****************************    <br />  def VeteACasa(self):<br />       print &quot;Ya me voy amigos&quot;<br />       sys.exit(0)<br />       quit()<br /><br />pygame.init()<br />yassergamer=Yasser()<br />screen=pygame.display.set_mode((800,600))<br />pygame.display.set_caption('Clases con python y pygame')<br />yassergamer.Flipa()<br />yassergamer.cargaImagen('cap1.jpg')<br />recta=yassergamer._getBounds()<br />print recta<br />yassergamer.Dibuja(screen,0,0)<br />while True:<br />      yassergamer.Flipa()<br />      for eventos in pygame.event.get():<br />             if eventos.type==pygame.QUIT:<br />                yassergamer.VeteACasa()<br /><br /><br /><br />Me da este error:<br />Traceback (most recent call last):<br />  File &quot;C:\Documents and Settings\yasser\Escritorio\setup.py&quot;, line 8, in &lt;module&gt;<br />    class Yasser(pygame.image):<br />TypeError: Error when calling the metaclass bases<br />    module.__init__() takes at most 2 arguments (3 given)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Jue Nov 26, 2009 4:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2009-09-03T18:01:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2862#p2862</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2862#p2862"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2862#p2862"><![CDATA[
MI problema es el siguiente:<br /><br />obtengo el ancho y alto de la imagen pero no sé cómo dársela a la pantalla principal.<br />O sea. Quiero que la pantalla o formulario tenga las mismas dimensiones que la imagen que he cargado<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Jue Sep 03, 2009 6:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-04-29T21:50:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2494#p2494</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2494#p2494"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2494#p2494"><![CDATA[
Prueba especificando la ruta completa desde c:, por ejemplo 'c:/Mis documentos/ball.png'.<br />Si no funciona busca más información sobre como interactúa python en windows con las carpetas y las rutas, y haz pruebas, muchas pruebas.<br />Ánimo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mié Abr 29, 2009 9:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-04-27T15:29:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2487#p2487</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2487#p2487"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2487#p2487"><![CDATA[
Buenas, parece mu raro.... prueba a ver si descargando juegos de otras personas te da tambien error al cargar las imagenenes de los juegos.<br /><br /><br /><blockquote class="uncited"><div><br />File: &quot;C:/Python24/x2py&quot;,line 8, in -toplevel-<br />ball=pygame.display.load('Mis documentos/ball.png')<br /></div></blockquote><br /><br />Fijate que estas dos rutas son distintas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Abr 27, 2009 3:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Xisco]]></name></author>
<updated>2009-04-27T09:26:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2482#p2482</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2482#p2482"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2482#p2482"><![CDATA[
Hola a todos, he probado a abrir el archivo por ejemplo ball.png<br /><br />  con diferentes formas de codigo y no lo he conseguido.<br /><br />       He guardado el codigo y despues he puesto el archivo de la imagen<br /><br />  ball.png dentro de la misma carpeta, he probado donde lo guarda<br /><br />  python por defecto o sea en la misma carpeta python 2.4.1, he guardado<br /><br />  el programa en el escritorio y al lado he puesto la imagen y tampoco.<br /><br />      He intentado especificar la ruta hacia mis documentos y no la carga<br /><br />      He utilizado el sistema sys,path.append y no la carga.<br /><br />      Lo he intentado desde py.scripter y tampoco.<br /><br /><br />      Creo que debe de haber algún problema sencillo de que no me<br /><br />   haya dado cuenta.<br /><br />      el codigo escrito es:<br /><br /><br />        desde la idle y desde pyscripter:<br /><br /><br />         &gt;&gt;&gt; import pygame<br />         &gt;&gt;&gt;pygame.init()<br />  <br />         &gt;&gt;&gt;size=400,400<br /> <br />         &gt;&gt;&gt;screen=pygame.display.set_mode(size)<br /><br />         &gt;&gt;&gt;ball=pygame.image.load(&quot;ball.png&quot;)<br /><br />        Ahora le doy a guardar y junto a este archivo guardado<br /><br />       coloco la imagen 'ball.png' y sin embargo no la carga:<br /><br /><br />           Traceback (most recent call last):<br />      File: &quot;C:/Python24/x2py&quot;,line 8, in -toplevel-<br />         ball=pygame.display.load('Mis documentos/ball.png')<br />      error: Couldn't  open Mis documentos /ball.png<br /><br />         Se que es un poco complicado desde fuera, pero bueno de todas<br /><br />     formas muchas gracias por el interes de todos. Supongo que<br /><br />    ya lo sacaré con el tiempo, revisaré toda la imformación que me<br /><br />    habeis dado haber si doy con el tema.<br /><br /><br />                                                Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2095">Xisco</a> — Lun Abr 27, 2009 9:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-04-26T17:54:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2481#p2481</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2481#p2481"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2481#p2481"><![CDATA[
Si estás haciendo pruebas desde el intérprete, que me parece que ese es el problema por el que no acabas de comprender lo que te dicen los compañeros prueba a poner rutas completas. Para que te sirva de ejemplo acabo de hacer una prueba en el intérprete desde linux:<br /><dl class="codebox"><dt>Code: </dt><dd><code>user@Desktop:~$ python<br />Python 2.6.2 &#40;release26-maint, Apr 19 2009, 01:58:18&#41; <br />&#91;GCC 4.3.3&#93; on linux2<br />Type &quot;help&quot;, &quot;copyright&quot;, &quot;credits&quot; or &quot;license&quot; for more information.<br />&gt;&gt;&gt; import pygame<br />&gt;&gt;&gt; imagen = pygame.image.load&#40;'SANY0001.JPG'&#41;<br />Traceback &#40;most recent call last&#41;:<br />  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;<br />pygame.error: Couldn't open SANY0001.JPG<br />&gt;&gt;&gt; imagen = pygame.image.load&#40;'/home/user/Desktop/100SANYO/SANY0001.JPG'&#41;<br />&gt;&gt;&gt; import sys<br />&gt;&gt;&gt; import base<br />Traceback &#40;most recent call last&#41;:<br />  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;<br />ImportError: No module named base<br />&gt;&gt;&gt; sys.path.append&#40;'/home/user/programacion/python'&#41;<br />&gt;&gt;&gt; import base<br />&gt;&gt;&gt; <br /></code></dd></dl><br /><br />Como ves sólo ha funcionado cuando he utilizado la ruta completa, que en sistemas basados en msdos como windows es completamente diferente a linux (si no recuerdo mal 'c:/Mis documentos/Mis imágenes/ball.png').<br />Si guardas todo el código en un archivo de texto plano (como cualquier archivo.txt) y le das la extensión al guardar de python (archivo.py) puedes importarlo desde el intérprete agregando la carpeta donde se encuentra el archivo a la ruta de busqueda de «import» (tal como he hecho para el archivo /home/user/programacion/python/base.py) para hacer las pruebas que quieras. De esta forma es suficiente con guardar la imagen en el mismo directorio del archivo.py y hacer lo que te dicen endaramiz y Nato para importar la imagen. Para más info sobre la ruta de búsqueda de «import» mira <a href="http://www.gulic.org/almacen/diveintopython-5.4-es/getting_to_know_python/everything_is_an_object.html#d0e2051" class="postlink">este capítulo del libro «Inmersión en Python»</a>.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Dom Abr 26, 2009 5:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-04-26T10:53:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2479#p2479</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2479#p2479"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2479#p2479"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br />Hola, lo más fácil es que pongas la imagen en la misma carpeta donde tengas el archivo. Luego la puedes cargar sin poner la ruta:<br /><dl class="codebox"><dt>Code: </dt><dd><code>imagen = pygame.image.load&#40;&quot;ball.png&quot;&#41;</code></dd></dl><br /></div></blockquote><br />Quizás no haya expresado con claridad: Lo más fácil es que pongas la imagen en la misma carpeta donde tengas el archivo con el código que estás programando (donde escribes lo de pygame.image.load...) de extensión .py.<br />Para hacer esto, tienes que crear un archivo .py con el código del juego y luego ejecutarlo.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Abr 26, 2009 10:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2009-04-26T10:16:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2478#p2478</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2478#p2478"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2478#p2478"><![CDATA[
Tienes que poner la imagen en la misma carpeta donde esta el codigo que la importa y pones imagen=pygame.image.load(&quot;ball.png&quot;) pygame empieza a uscar desde la carpeta donde esta el codigo osea que si haces imagen=pygame.image.load(&quot;Mis documentos/ball.png&quot;) buscara en &quot;Ruta donde se haya el codigo/Mis documentos/ball.png&quot;<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Dom Abr 26, 2009 10:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Xisco]]></name></author>
<updated>2009-04-26T07:44:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2477#p2477</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2477#p2477"/>
<title type="html"><![CDATA[Cargar imagen pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2477#p2477"><![CDATA[
Ya, pero el tema que no se donde colocar la imagen, dentro de la<br /><br />  carpeta de python 2.4 o dentro de C:,<br /><br /><br />       Cuando escribo:<br /><br />      imagen=pygame.image.load(&quot;ball.png&quot;)<br /><br />      no la importa<br /><br />      y cuando escribo<br /><br />     imagen=pygame.image.load(&quot;Mis documentos/&quot;ball,png&quot;)<br /><br />     tampoco<br /><br />     en el primer caso pongo la imagen dentro de la carpeta de python 2.4<br /><br />     en el segundo dentro de Mis documentos<br /><br />           <br />       Como escribir el codigo es facil, pero entender donde lo busca<br /><br />     todavia no controlo.<br /><br />           Gracias por tu ayuda, a ver si puedo verlo mejor<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2095">Xisco</a> — Dom Abr 26, 2009 7:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-04-25T19:25:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2472#p2472</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2472#p2472"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2472#p2472"><![CDATA[
Hola, lo más fácil es que pongas la imagen en la misma carpeta donde tengas el archivo. Luego la puedes cargar sin poner la ruta:<br /><dl class="codebox"><dt>Code: </dt><dd><code>imagen = pygame.image.load&#40;&quot;ball.png&quot;&#41;</code></dd></dl><br /><br />Si quieres tener las imágenes metidas en una carpeta llamada img, dentro de la misma carpeta que el código. Se hace con:<br /><dl class="codebox"><dt>Code: </dt><dd><code>imagen = pygame.image.load&#40;&quot;img/ball.png&quot;&#41;</code></dd></dl><br /><br />Primero prueba con el caso sencillo y, si sale bien, luego pruebas la otra forma.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Abr 25, 2009 7:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Xisco]]></name></author>
<updated>2009-04-25T18:12:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2471#p2471</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2471#p2471"/>
<title type="html"><![CDATA[Cargar imagen con pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=548&amp;p=2471#p2471"><![CDATA[
Hola me gustaria saber donde poner la imagen en este caso<br /><br />  &quot;ball.png&quot; dentro de Windows, para que pigame la detecte.<br /><br />     Directamente no la reconoce y si pongo la ruta po eje.<br /><br />     &quot;Mis documentos/&quot;ball.png&quot;    tampoco la reconoce.<br /><br /><br /><br />                    Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2095">Xisco</a> — Sab Abr 25, 2009 6:12 pm</p><hr />
]]></content>
</entry>
</feed>