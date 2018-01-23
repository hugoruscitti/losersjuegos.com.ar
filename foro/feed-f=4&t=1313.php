<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1313" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-14T16:18:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1313</id>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-10-14T16:18:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6098#p6098</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6098#p6098"/>
<title type="html"><![CDATA[Re: ImportError: No module named miClase - Linux]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6098#p6098"><![CDATA[
Bueno hice unas pruebas para determinar bien cual había sido el problema. Me da error cuanto tengo una clase con letras en Mayúsculas, por ejemplo XML, FPS, etc, cuando la clase se compone en su totalidad por letras en Mayúscula, linux fedora (sugar) da el error<span style="font-weight: bold"> ImportError: No module named NOMBRECLASE</span>, por lo tanto las solución solo es cambiar el nombre y evitar que esten todas las letras en Mayúscula, por eje Xml, Fps. <br />El error no da en linux ubuntu, ni en Windos, solo en linux fedora (sugar) <br /><br />Saludos<br />Diego<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Vie Oct 14, 2011 4:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-10-13T01:53:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6095#p6095</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6095#p6095"/>
<title type="html"><![CDATA[Re: ImportError: No module named miClase - Linux]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6095#p6095"><![CDATA[
Bueno por fin pude arreglar el error!!!  gracias por la ayuda!!<br /><br />El problema se arreglo cuando le cambie el nombre a mi clase, de XML.py a datosXml.py esta clase paso a estar en orden alfabético arriba de todas en mi package. Luego cuando probé en linux mágicamente funciono!! <br />No puedo encontrar una explicación lógica a como se soluciono, pero pude notar los siguientes cambios, <br /><br />01- el nombre de mi clase no estaba mas con todas Mayúsculas o sea de XML a datosXml, no creo que importe pero fue uno de los cambios. <br />02 - El orden en el package cambio, de estar ultima a estar primera, esto es lo que mas pinta le veo a que halla hecho un efecto, ya que creo q el problema podía residir en que quería importar un modulo que no estaba creado antes por un tema de orden o algo? ya que antes estaba al final del package y ahora al principio.<br /><br />Bueno realmente no se técnicamente por que funciono pero por las dudas les comente lo que cambie para que funcione y los cambios que vi reflejados.<br /><br />Saludos y gracias por la ayuda!! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Jue Oct 13, 2011 1:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-10-12T23:50:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6094#p6094</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6094#p6094"/>
<title type="html"><![CDATA[Re: ImportError: No module named miClase - Linux]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6094#p6094"><![CDATA[
Hola probe con lo que me dijiste y no funciono, Te comento con mas detalle que me esta pasando: <br />El error que sale por consola es el siguiente:<br />ImportError: No module named miClase.<br /><br />Esto pasa cuando realizo un import de una de mis clases que se encuentra en mi package (nombre &quot;Motor&quot;), en alguna de mis clases que están dentro del package que tengo (se entiende?), paso a detallar un poco mas:<br /><br />El main que se encuentra en la raiz (src), tiene el siguiente código:<br /><br /># ------------- INICIO IMPORT ------------- #<br />from Motor.VentanaPrincipal import VentanaPrincipal<br />import logging<br /># -------------- FIN IMPORT --------------- #<br /><br /><br />if __name__ == '__main__':<br /><br />logging.basicConfig(filename='logMotor.log',level= logging.DEBUG)<br />logging.info('Se inicia el archivo EjecutarAplicacion Correctamente')<br /><br />venPrin = VentanaPrincipal ()<br />logging.info('Se Crea la ventana principal Correctamente') <br /><br />Hasta aquí todo bien!, el import lo hace correcto y sigue ejecutando el main (comprobado por el archivo log), luego cuando se crea venPrin se llama a la clase VentanaPrincipal que se encuentra en el package &quot;Motor&quot;, y el código de la clase ventanaPrincipal es el siguiente:<br /><br /># ------------- INICIO IMPORT ------------- #<br />import pygame<br />from pygame.locals import *<br />from Motor.XML import XML<br /># -------------- FIN IMPORT --------------- #<br /><br />Pongo solo el import porque comprobe mediante un log que se cae cuando realiza el import from Motor.XML import XML, además del obvio msj que me aparece en consola que todo indica que es cuando realiza el import de la clase XML. (aclaro que tengo otras clases ademas de XML y alterne el orden para ver si el problema era una clase en especifico, pero no, ya que cuando explota cuando llama a cualquiera de mis clases)<br /><br />Me esta dando el error de ImportError: No module named XML, o sea no puede importar la clase XML que se encuentra en el mismo package que VentanaPrincipal. <br /><br />La estructura de mi proyecto es la siguiente:<br />-- src<br />-----main.py (ubicado en src)<br />---------- Motor (package)<br />----------------------- XML.py (dentro de Motor)<br />----------------------- VentanaPrincipal.py (dentro de Motor)<br /><br />Lo que pude ver es que no tengo problema cuando realizo un import desde fuera del package, como te comente la clase main hace un import de VentanaPrincipal (from Motor.VentanaPrincipal import VentanaPrincipal) y no hay problema, es mas sigue ejecutando el código, pero el problema aparece cuando dentro del package hago un impor de una clase que también esta en el package (from Motor.XML import XML), acá explota.!! Por ahí viene el problema pero no me doy cuenta bien porque pasa esto?, ya que en Windows funciona sin problemas pero en linux no. <br /><br />Otra cosa que probe y no funciono fue realizar el impor sin especificar el package (ya que estoy dentro de el) o sea asi <span style="font-weight: bold">from XML import XML</span><br />Tampoco funciono!!, realmente no se que pasa! debe ser algo simple porq no funciona en linux (fedora - Sugar) y si en windows. Hay que configurar algo en linux? algun path¿, etc para que reconozca el package mio?<br /><br />Espero haberme explicado mejor, gracias por la ayuda!! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mié Oct 12, 2011 11:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-10-12T07:47:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6091#p6091</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6091#p6091"/>
<title type="html"><![CDATA[Re: ImportError: No module named miClase - Linux]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6091#p6091"><![CDATA[
Dentro de la carpeta packageUNO, crea un archivo __init__.py y dentro escribes...<br /><br />__all__ = [&quot;miClase&quot;]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Mié Oct 12, 2011 7:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[diego_g_09]]></name></author>
<updated>2011-10-12T03:40:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6090#p6090</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6090#p6090"/>
<title type="html"><![CDATA[ImportError: No module named miClase - Linux]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1313&amp;p=6090#p6090"><![CDATA[
Buenas, estoy teniendo un problema al ejecutar mi aplicación en linux. Cuando la ejecuto en Windows no tengo problemas me funciona perfectamente, pero cuando la ejecuto en linux me da el siguiente error.. <br /><span style="font-weight: bold">ImportError: No module named miClase</span><br /><br />Realmente no se que puede ser, repito en windows funciona y cuando le ejecuto el comando<span style="font-weight: bold"> python main.py</span> me da el error que les mencione. No se que es lo que no funciona. <br /><br />La estructura del proyecto es la siguiente<br /><br />src<br />------ packageUNO<br />---------------- miClase.py (dentro de packageUNO)<br /><br />main.py (ubicado en src)<br /><br />Otro dato es que pude ejecutar un ejemplo que baje de esta pagina (el ejemplo platforms) y anduvo perfecto!! tanto en windows como en linux, pero con mi proyecto no se cual es el problema, he visto el codigo una y otra vez para ver si encuentro algo distinto cuando hace los import, pero la verdad que no encontre diferencias, realmente no se que puede ser!!<br /><br />Saludos!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2303">diego_g_09</a> — Mié Oct 12, 2011 3:40 am</p><hr />
]]></content>
</entry>
</feed>