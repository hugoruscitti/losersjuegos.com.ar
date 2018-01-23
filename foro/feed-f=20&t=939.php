<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=20&amp;t=939" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-12-27T22:20:17+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=20&amp;t=939</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-12-27T22:20:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=6322#p6322</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=6322#p6322"/>
<title type="html"><![CDATA[Re: models para panda3d]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=6322#p6322"><![CDATA[
Eso también me pasaba, hasta que lo traforme a .egg.<br /><br />de hecho, con panda vine incluido un conversor a .egg desde un .x; pero es una lastima que sea desde consola:<br /><br /><pre class="prettyprint">x2egg  nombre_del_archivo.x nombre_con_el_que_quieres_que_salga.egg</pre><br /><br />o, si el archivo de destino existe, escribes:<br /><br /><pre class="prettyprint">x2egg -o  nombre_con_el_que_quieres_que_salga.egg nombre_del_archivo.x</pre><br /><br />De cualquier forma, si ese no es el error, podrías ver si esta la textura aplicada en blender (si presionando F-12 en blender, el modelo sale con la textura)<br /><br />o agregarla al principio del .egg en la etiqueta que dice textura:<br /><br /><pre class="prettyprint">&lt;Texture&gt; tref1 {<br />  nombre_image_textura.png<br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Dic 27, 2011 10:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-26T20:30:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4489#p4489</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4489#p4489"/>
<title type="html"><![CDATA[Re: models para panda3d]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4489#p4489"><![CDATA[
Veras, ruscitti. Aquí dejo un compactado donde está mi modelo en .x, la imagen de mi mkodelo en jpg que es como debería verse y el archivo .py a compilar con panda3D para que vea como pierde la textura y se torna blanco brilloso. <br /><br /><a href="http://www.2shared.com/fadmin/17319193/13518574/pandatar.gz.html" class="postlink">http://www.2shared.com/fadmin/17319193/13518574/pandatar.gz.html</a><br /><br />el modelo hay que rotarlo hasta que logres verlo bien. Analiza y luego me dices en qué me estoy equivocando<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Vie Nov 26, 2010 8:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-11-24T14:59:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4464#p4464</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4464#p4464"/>
<title type="html"><![CDATA[Re: models para panda3d]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4464#p4464"><![CDATA[
<blockquote><div><cite>yasser_001200 escribió:</cite><br />Supongamos que ya tengo el modelo, por ejemplo, un campesino (sí por que si ya tiene al constructor solo falta el campesino jajajaja)  con oberol naranja, camisa azul, sobrero de paja amarillo y de piel marron así medio mulato. Lo he hecho en blender y luego lo exporto a .x y lo convierto a egg con el x2egg. ¿Tengo que hacer un UV Mapping de la textura para luego aplicársela dentro del panda3D? ¿Los archivos .x  conservan la textura del modelo original sin que se vean en &quot;solid mode&quot;? Esa es mi pregunta ya que es lo que me ha pasado con algunos ejemplos hechos por mí en panda3d. Es altamente necesario el Chicken Exporter, por que yo estoy imposibilitado de bajarlo de sourceforge<br /></div></blockquote><br /><br />Buenas, el formato .x tiene todo los que necesitas, modelo, textura aplicada, animaciones etc...<br /><br />yo lo usé en el ejemplo del cooperativista que puedes<br />ver en la página de ejemplos de losersjuegos:<br /><br />        <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/ejemplos">http://www.losersjuegos.com.ar/referencia/ejemplos</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Nov 24, 2010 2:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-24T14:40:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4462#p4462</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4462#p4462"/>
<title type="html"><![CDATA[models para panda3d]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=939&amp;p=4462#p4462"><![CDATA[
Supongamos que ya tengo el modelo, por ejemplo, un campesino (sí por que si ya tiene al constructor solo falta el campesino jajajaja)  con oberol naranja, camisa azul, sobrero de paja amarillo y de piel marron así medio mulato. Lo he hecho en blender y luego lo exporto a .x y lo convierto a egg con el x2egg. ¿Tengo que hacer un UV Mapping de la textura para luego aplicársela dentro del panda3D? ¿Los archivos .x  conservan la textura del modelo original sin que se vean en &quot;solid mode&quot;? Esa es mi pregunta ya que es lo que me ha pasado con algunos ejemplos hechos por mí en panda3d. Es altamente necesario el Chicken Exporter, por que yo estoy imposibilitado de bajarlo de sourceforge<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mié Nov 24, 2010 2:40 pm</p><hr />
]]></content>
</entry>
</feed>