<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=209" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-12-17T19:17:48+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=209</id>
<entry>
<author><name><![CDATA[uguru]]></name></author>
<updated>2007-12-17T19:17:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=756#p756</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=756#p756"/>
<title type="html"><![CDATA[Archivo de cabeceras]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=756#p756"><![CDATA[
Respecto al archivo csprite.h, se me ocurren 2 posibilidades para quitar el error que te da al compilar:<br /><br />- ha de estar en el mismo directorio o que el resto del código.<br />- Que le indiques la ruta en la linea #include &quot;ruta/csprite.h&quot;<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1829">uguru</a> — Lun Dic 17, 2007 7:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ominae]]></name></author>
<updated>2007-12-16T13:58:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=748#p748</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=748#p748"/>
<title type="html"><![CDATA[Archivo de cabeceras]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=748#p748"><![CDATA[
csprite.h no se trata de nada relacionado con SDL, se supone que es alguna implementación tuya... Si sigues un tutorial, mira si antes habla de programar una clase CSprite.<br /><br />Un saludo!<br />Jaime Forcada Balaguer<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=11">ominae</a> — Dom Dic 16, 2007 1:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2007-12-16T02:22:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=746#p746</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=746#p746"/>
<title type="html"><![CDATA[Archivo de cabeceras]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=746#p746"><![CDATA[
<blockquote class="uncited"><div><br />Cannot open include file: 'csprite.h': No such file or directory<br /></div></blockquote><br />literalmente: no se puede abrir el archivo incluido: 'csprite.h': no exite el archivo o directorio.<br /><br />como dices es un problema de cabeceras. corregirme si me equivoco, cabeceras son los archivos que incluyes con la orden 'include archivo.h' al principio del programa para utilizar sus funciones. ese error probablemente quiere decirte que no encuentra el archivo porque no existe o tal vez el nombre no es correcto o puede que la ruta no sea correcta, asegurate de que ese archivo está donde tiene que estar.<br />te aconsejo que empieces buscando en las carpetas donde busca tu compilador dichos archivos.h para asegurarte de que ese archivo existe y si está en la carpeta adecuada, no se cuales son esas carpetas, busca en google.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Dom Dic 16, 2007 2:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[intrepido]]></name></author>
<updated>2007-12-14T21:57:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=744#p744</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=744#p744"/>
<title type="html"><![CDATA[Archivo de cabeceras]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=209&amp;p=744#p744"><![CDATA[
Buenas Tardes.<br />Agradecería mucho a quien pueda ayudarme con esta inquietud.<br />He comenzado a repasar un tutorial sobre DSL; en este momento voy en las colisiones y he copiado el cçodigo, pero me sale un error al compilarlo: [color=red]fatal error C1083: Cannot open include file: 'csprite.h': No such file or directory<br /><br />En el manual dice algo sobre archivo de cabeceras pero realmente no entiendo como se maneja.<br />Agradezco de nuevo a quien me pueda decir como manejo esta parte.<br /><br />Walter <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1859">intrepido</a> — Vie Dic 14, 2007 9:57 pm</p><hr />
]]></content>
</entry>
</feed>