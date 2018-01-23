<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=575" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-06-16T13:33:32+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=575</id>
<entry>
<author><name><![CDATA[Nathaniel]]></name></author>
<updated>2009-06-16T13:33:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2605#p2605</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2605#p2605"/>
<title type="html"><![CDATA[[Pygame] Duda en un juego de memorizacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2605#p2605"><![CDATA[
Claaro, muchisimas gracias endaramiz ya veo el error =)<br /><br />El otro problema esta al poner el pygame.time.wait tan alto, al esperar cada vez que pasa el ciclo while hace que el script no funcione del todo bien, se bloquee, etc.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2061">Nathaniel</a> — Mar Jun 16, 2009 1:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-06-16T07:19:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2604#p2604</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2604#p2604"/>
<title type="html"><![CDATA[[Pygame] Duda en un juego de memorizacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2604#p2604"><![CDATA[
No sé muy bien, como es el juego (no me funciona el flash). Pero creo que quieres que se muestre un números detrás de otro. En tal caso, a priori, el problema está en que el tiempo de espera que estás haciendo, no afecta a la velocidad que se muestran los números.<br /><br />Prueba a poner:<br /><dl class="codebox"><dt>Code: </dt><dd><code>   def Mostrar_Numeros&#40;self,Posicion_array&#41;: #Funcion para mostrar los numeros a memorizar en una de las cuatro pantallas<br />      Screen.blit&#40;image_background,&#40;0,0&#41;&#41;<br />      random = randint&#40;0,3&#41;<br />      Screen.blit&#40;Font.render&#40;str&#40;self.Numeross&#91;Posicion_array&#93;&#41;,True,&#40;255,000,000&#41;&#41;,&#40;Posiciones&#91;random&#93;&#41;&#41;<br />      pygame.display.update&#40;&#41; #**<br />      pygame.time.wait&#40;100&#41; #**</code></dd></dl><br /><br />Si sigue sin funcionar, ya lo miraré con más calma.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Jun 16, 2009 7:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nathaniel]]></name></author>
<updated>2009-06-15T16:25:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2599#p2599</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2599#p2599"/>
<title type="html"><![CDATA[[Pygame] Duda en un juego de memorizacion]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=575&amp;p=2599#p2599"><![CDATA[
Hola, estoy creando una copia de este videojuego pero en Python: <!-- m --><a class="postlink" href="http://www.publijuegos.com/flash/supercerebro.htm">http://www.publijuegos.com/flash/supercerebro.htm</a><!-- m --><br /><br />Aun no he creado la funcion para que el usuario inserte los numeros memorizados, el problema lo tengo al mostrar los numeros a recordar.<br /><br />Tengo 2 problemas:<br />1. No se muestran todos los numeros de la array, tan solo el ultimo cada vez que se le añade, lo unico que se me ocurre es que al ser tan rapido tan solo se vea esta ultima y no las demas, probad de borrar el Screen.blit(background) y lo entendereis.<br />2. Si pongo el time.delay a un numero bajo me va demasiado rapido, pero si le pongo un numero alto consigo la velocidad deseada pero hace que se bloquee y cueste de cerrar.<br /><br /><!-- m --><a class="postlink" href="http://www.megaupload.com/?d=2MKHY4D0">http://www.megaupload.com/?d=2MKHY4D0</a><!-- m --><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#Supercerebro.py 1.0<br />#by Nathaniel<br />#Licencia GPL<br /><br />#Importamos los modulos necesarios<br />import pygame<br />from pygame.locals import *<br />from random import randint<br />pygame.init&#40;&#41;<br />pygame.mixer.init&#40;&#41;<br /><br />pygame.mouse.set_visible&#40;False&#41;<br /><br />#Definimos la ventana<br />Anchura, Altura = 687,461<br />Screen = pygame.display.set_mode&#40;&#40;Anchura,Altura&#41;&#41;<br />pygame.display.set_caption&#40;&quot;Supercerebro by Nathaniel&quot;&#41;<br /><br />#Cargamos la imagen de fondo<br />image_background = pygame.image.load&#40;&quot;Supercerebro_Background.jpg&quot;&#41;<br /><br />#Funcion para cargar la fuente<br />def Fuente&#40;&#41;:<br />   Font = pygame.font.Font&#40;&quot;dejavu.ttf&quot;,80&#41;<br />   return Font<br />   <br />class Numeros:<br />   def __init__&#40;self&#41;:<br />      self.Numeross = &#91;&#93;<br />   <br />   def Mostrar_Numeros&#40;self,Posicion_array&#41;: #Funcion para mostrar los numeros a memorizar en una de las cuatro pantallas<br />      Screen.blit&#40;image_background,&#40;0,0&#41;&#41;<br />      random = randint&#40;0,3&#41;<br />      Screen.blit&#40;Font.render&#40;str&#40;self.Numeross&#91;Posicion_array&#93;&#41;,True,&#40;255,000,000&#41;&#41;,&#40;Posiciones&#91;random&#93;&#41;&#41;<br /><br />   def Nuevo_Numero&#40;self&#41;: #Funcion para sumar un nuevo numero aleatorio entre el 0 y el 9.<br />      self.Numeross.append&#40;randint&#40;0,9&#41;&#41;<br />      for x in range&#40;0,len&#40;self.Numeross&#41;&#41;:<br />         self.Mostrar_Numeros&#40;x&#41;<br />      #Aqui funcion para que el usuario responda<br />   def Incorrecto&#40;self&#41;:<br />      print &quot;Incorrecto&quot;<br />      exit&#40;&#41;<br />   <br />Numeros= Numeros&#40;&#41;<br />Font = Fuente&#40;&#41;<br /><br />Posiciones = &#91;<br />   &#40;142,56&#41;,<br />   &#40;85,200&#41;,<br />   &#40;551,37&#41;,<br />   &#40;577,222&#41;<br />   &#93;<br />   <br />Running = True<br /><br />while Running:<br />   for event in pygame.event.get&#40;&#41;:<br />      if event.type == QUIT:<br />         Running = False<br />   Numeros.Nuevo_Numero&#40;&#41;<br />   pygame.display.update&#40;&#41;<br />   pygame.time.wait&#40;100&#41;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2061">Nathaniel</a> — Lun Jun 15, 2009 4:25 pm</p><hr />
]]></content>
</entry>
</feed>