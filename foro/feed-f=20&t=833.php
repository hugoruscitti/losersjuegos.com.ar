<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=20&amp;t=833" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-08T19:11:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=20&amp;t=833</id>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-08T19:11:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=4394#p4394</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=4394#p4394"/>
<title type="html"><![CDATA[Re: El obrero cooperativista en 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=4394#p4394"><![CDATA[
Perdonen. No es elx2egg ya que ese lo tengo. El que necesito es el Chicken no se qué que exporta de Blender a Panda3D. Sé que debes cargar el script del chicken desde blender3d. Como ya les dije no puedo descargar nada que sea de googlecode o de sourceforge, pero como este programa es opensource y ustedes son argentinos, no habrá problemas si me ponen una copia en este sitio o en cualquier otro server que no sean los antes mencionados, ni megaupload ni rapidshare. Por favor, aydenme en esto. Yo trataré de contactar con el Sr. Ruscitti para ver si puede ayudarme en esto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Lun Nov 08, 2010 7:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-05T19:36:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=4371#p4371</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=4371#p4371"/>
<title type="html"><![CDATA[Re: El obrero cooperativista en 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=4371#p4371"><![CDATA[
Hola muchachos. Supongo que si da gratis  algo que obtuvioste gratis no habrá problemas. Pasa que quiero ese x2egg ya que también tengo el Panda3D y el Blender3D. Pero Cuba está en una j***** lista y no podemos descargar nada desde sourceforge. Gracias a eso no me he podido bajar el irrlicht y otros engines opensource. Por eso ncesito un favor en nombre del free soft:<br />¿Podría alguien poner este programa en otra web o en otro servidor que no sea el de sourceforge para yo poder bajarlo? Como son unos pocos Kb no habría problema. Se los agradecería mucho, colegas programadores<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Vie Nov 05, 2010 7:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-19T14:51:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3778#p3778</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3778#p3778"/>
<title type="html"><![CDATA[Re: El obrero cooperativista en 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3778#p3778"><![CDATA[
Buenas endaramiz, gracias por tus comentarios.<br /><br />En el ejemplo de panda3d uso el formato .x porque según la documentación<br />de panda es uno de los formatos mejor soportados. Esto significa que<br />al pasar de blender a panda3d no pierdes información de las texturas o animaciones.<br /><br /><!-- m --><a class="postlink" href="http://www.panda3d.org/manual/index.php/Converting_from_Blender">http://www.panda3d.org/manual/index.php ... om_Blender</a><!-- m --><br /><br />Luego, panda viene con una herramienta llamada que optimiza los modelos<br />para leerlos desde panda mas rápido, ese es el otro formato de modelo que<br />estoy usando desde el código. Creo que esta herramienta se llama x2egg.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Ago 19, 2010 2:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-08-19T14:20:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3777#p3777</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3777#p3777"/>
<title type="html"><![CDATA[Re: El obrero cooperativista en 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3777#p3777"><![CDATA[
Gracias por compartir tus experiencias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> No es muy extenso, pero eso de los huesos puede ser útil para descargar un modelo de internet y modificarlo a tu manera para luego exportarlo y usarlo en aplicaciones.<br />Veo que en el artículo usas un modelo .obj, pero en ejemplo de Panda3D usas otro. ¿A qué se debe esto?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Jue Ago 19, 2010 2:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-08-18T15:51:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3770#p3770</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3770#p3770"/>
<title type="html"><![CDATA[El obrero cooperativista en 3D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=833&amp;p=3770#p3770"><![CDATA[
Saludos, este fin de semana escribí un artículo<br />explicando un poquito sobre render en blender.<br /><br />El artículo está acá:<br /><br /><!-- m --><a class="postlink" href="http://www.examplelab.com.ar/blender/cooperativista/cooperativista_3d.rst">http://www.examplelab.com.ar/blender/co ... sta_3d.rst</a><!-- m --><br /><br />espero les guste, saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ago 18, 2010 3:51 pm</p><hr />
]]></content>
</entry>
</feed>