<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=572" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-06-15T16:15:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=572</id>
<entry>
<author><name><![CDATA[Nathaniel]]></name></author>
<updated>2009-06-15T16:15:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=572&amp;p=2596#p2596</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=572&amp;p=2596#p2596"/>
<title type="html"><![CDATA[RPG Tux se cambia de ropa xD]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=572&amp;p=2596#p2596"><![CDATA[
Metiendome en la programación de videojuegos RPG con Pygame he elaborado mi primer script, se llama RPG Tux Transformer. Se basa en un pequeño escenario en 3D donde nuestro querido Tux al pasar por la estrella se cambiará de ropa xD<br /><br />A mejorar:<br />- Tan sólo tengo especificada una coordenada para las estrellas cuando el Tux pise, tengo que mejorar esto haciendolo un rectangulo, es un poco difícil de explicar.<br />- Música!<br />- Más imágenes de Tux<br />- Movimiento de Tux más elegante<br />- Efectos de cámara<br />- etc.<br /><br /><img src="http://imageshacking.webcindario.com/imagenes/tux_transformer.png" alt="Imagen" /><br /><br /><!-- m --><a class="postlink" href="http://www.megaupload.com/?d=6OHBI1E0">http://www.megaupload.com/?d=6OHBI1E0</a><!-- m --><br /><!-- m --><a class="postlink" href="http://www.filefactory.com/file/af72bbb/n/Tux_Tansformer_tar_gz">http://www.filefactory.com/file/af72bbb ... mer_tar_gz</a><!-- m --><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#Importamos los modulos necesarios<br />import pygame<br />from pygame.locals import *<br />from random import randrange<br />pygame.init&#40;&#41;<br /><br /><br />class Personaje&#40;pygame.sprite.Sprite&#41;:<br />   def __init__&#40;self,Screen&#41;:<br />      pygame.sprite.Sprite.__init__&#40;self&#41;<br />      self.Screen = Screen<br />      self.image = pygame.image.load&#40;'ima/Tux.png'&#41;.convert_alpha&#40;&#41;<br />      self.rect = self.image.get_rect&#40;&#41;<br />      self.rect.x = 300<br />      self.rect.y = 100<br />   def Update&#40;self&#41;:<br />      self.rect.clamp_ip&#40;&#40;0,0,700,275&#41;&#41; #Delimitamos la zona por la que se podra mover el personaje x=700,y=275<br />      key = pygame.key.get_pressed&#40;&#41;<br />      if key&#91;K_UP&#93;:<br />         self.rect.y -= 6<br />      elif key&#91;K_DOWN&#93;:<br />         self.rect.y += 6<br />      elif key&#91;K_RIGHT&#93;:<br />         self.rect.x += 6<br />      elif key&#91;K_LEFT&#93;:<br />         self.rect.x -= 6<br />      <br />      if self.rect.x == 150 and self.rect.y == 160:<br />         self.Metamorfosis&#40;&#41;<br />         <br />      elif self.rect.x == 498 and self.rect.y == 160:<br />         self.Metamorfosis&#40;&#41;<br />         <br />      self.Screen.blit&#40;self.image,&#40;self.rect.x,self.rect.y&#41;&#41;<br />      <br />   def Metamorfosis&#40;self&#41;:<br />      Tux_array = &#91;&#93;<br />      Number_of_Tux = 8<br />      for Numero in range&#40;1,Number_of_Tux&#41;:<br />         Tux_array.append&#40;pygame.image.load&#40;&quot;ima/Tux/%d.png&quot; %Numero&#41;.convert_alpha&#40;&#41;&#41;<br />         <br />      Tux_Number = randrange&#40;Number_of_Tux&#41;<br />      print Tux_Number<br />      self.image = Tux_array&#91;Tux_Number-1&#93;<br />      self.Update&#40;&#41;<br />      <br />      <br />         <br /><br />#La clase para la pantalla principal, la cual no se movera en la version 1.<br />def Escenario&#40;Screen&#41;:<br />   Numero_Bloques = Cargar_imagen_Bloques&#40;&#41;<br />   Archivo = open&#40;&quot;Arrays.txt&quot;,&quot;r&quot;&#41;<br />   Contenido = Archivo.readlines&#40;&#41;<br />   Archivo.close&#40;&#41;<br />   <br />   #Determinamos el numero de Filas y el numero de Columnas a traves del Array.txt<br />   Filas = len&#40;Contenido&#41;<br />   Columnas = len&#40;Contenido&#91;0&#93;&#41; -1 # -1 por el salto de linea.<br />   <br />   #Este ciclo de fors es para imprimir en pantalla todas las columnas y lineas, no os preocupeis<br />   #hasta a mi me cuesta un poco de entender xD<br />   for Fila in range&#40;Filas&#41;:<br />      for Columna in range&#40;Columnas&#41;:<br />         indice = int&#40;Contenido&#91;Fila&#93;&#91;Columna&#93;&#41;<br />         x = Columna * 50<br />         y = Fila * 31<br />         Screen.blit&#40;Numero_Bloques&#91;indice&#93;, &#40;x,y&#41;&#41;<br /><br />def Cargar_imagen_Bloques&#40;&#41;:<br />   Numero_Bloques = &#91;&#93;<br />   <br />   #Este ciclo for carga las tres imagenes distintas y las almacena en una array.<br />   for Bloques in range&#40;5&#41;:<br />      Numero_Bloques.append&#40;pygame.image.load&#40;&quot;ima/%d.png&quot; %Bloques&#41;.convert_alpha&#40;&#41;&#41;<br />      <br />   return Numero_Bloques<br />   <br />            <br />def main&#40;&#41;:<br />   #Definimos la pantalla y iniciamos el ciclo infinito para empezar el juego<br />   Screen = pygame.display.set_mode&#40;&#40;700,340&#41;&#41;<br />   pygame.display.set_caption&#40;&quot;Mi primer RPG&quot;&#41;<br />   <br />   Sky = pygame.image.load&#40;&quot;ima/Sky.jpg&quot;&#41;<br />   Personaje1 = Personaje&#40;Screen&#41;<br />   <br />   Running = True<br />   while Running:<br />      for event in pygame.event.get&#40;&#41;:<br />         if event.type == pygame.QUIT:<br />            Running = False<br />      Screen.blit&#40;Sky,&#40;0,0&#41;&#41;<br />      Escenario&#40;Screen&#41;<br />      Personaje1.Update&#40;&#41;<br />      pygame.time.wait&#40;100&#41;<br />      pygame.display.flip&#40;&#41;<br />      <br /><br />if __name__ == '__main__':<br />   main&#40;&#41;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2061">Nathaniel</a> — Lun Jun 15, 2009 4:15 pm</p><hr />
]]></content>
</entry>
</feed>