<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=878" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-30T21:07:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=878</id>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2010-11-30T21:07:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4529#p4529</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4529#p4529"/>
<title type="html"><![CDATA[Re: ¿Que tan buenas son las colisiones de GameMaker?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4529#p4529"><![CDATA[
Yo lo sé ya que he usado game maker. Su deteccion de colisionbes es casi perfecta. POdríuas crear una imagen png con 5 personajes(los cinco en la misma imagen) y el game maker solo detecta la colision si tu sprite choca con uno de los personajes. O sea, gamemaker solo detecta colisiones en areas dibujadas y no en los espacios no dibujados.<br /><br />UNa mejor explicacion: Una vez hice un plataformas &quot;single-screen&quot; en el que mi personaje quedo enganchado por la barbilla. Sí, las detecciones de colisiones en GameMaker son simplemente geniales (y me disculpan todos) pero son superiores a las del pygame (y me disculpan otra vez, yo tambien soy un asiduo programador de pygame)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Mar Nov 30, 2010 9:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-18T05:15:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4131#p4131</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4131#p4131"/>
<title type="html"><![CDATA[Re: ¿Que tan buenas son las colisiones de GameMaker?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4131#p4131"><![CDATA[
Se puede asociar un evento de colicion entre dos objetos, por que en pilas hasta ahora no tiene modo grafico, pero con una linea de codigo se puede especificar que accion lanzar al colicionar dos entidades, lo de la mascara es lo mismo que yo uso, solo que yo lo tengo hecho para que se especifiquen los puntos, pues usar una mascara de la forma de la imagen es muy ineficiente, y preciso. Sin embargo es buena la idea de crear un editor de mascaras para los sprites, entonces ya tenemos solucionado el problema de como poner los puntos en pilascpp<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Sab Sep 18, 2010 5:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-18T03:29:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4130#p4130</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4130#p4130"/>
<title type="html"><![CDATA[Re: ¿Que tan buenas son las colisiones de GameMaker?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4130#p4130"><![CDATA[
<blockquote><div><cite>Geo escribió:</cite><br />Básicamente es así, si alguien está más fresco con GM que lo rectifique <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /></div></blockquote><br /><br />Muchas gracias Geo, me viene super bien tu explicación, gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Sep 18, 2010 3:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2010-09-18T03:14:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4129#p4129</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4129#p4129"/>
<title type="html"><![CDATA[Re: ¿Que tan buenas son las colisiones de GameMaker?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4129#p4129"><![CDATA[
En GameMaker, las colisiones se manejan como eventos, que se producen entre objetos. Cuando un pixel de un objeto coincide en posición con un pixel de otro, se produce un evento de colisión entre estos objetos. El usuario debe programar lo que el objeto hará en respuesta a este evento, recibiendo como parámetro el objeto con el cual colisionó.<br /><br />Los eventos se definen en el editor gráfico, al editar un objeto, se agrega un evento indicando el tipo, en este caso sería colisión, se indica el objeto con el que al colisionar se disparará el evento, y entonces se agregan las acciones (bloques arrastrables o código) a ejecutar.<br /><br />Para las colisiones, se detectan en base a los sprites asociados a los objetos, todos los sprites tienen una máscara de colisión, la forma o tipo de máscara depende de algunas opciones:<br /><br /><ul><li>Precise collision checking (por defecto), la máscara corresponde con toda la imagen (los pixeles no transparentes).</li><li>Bounding box, la máscara es una caja de colisión de diferentes formas regulares (rectángulo, disco, rombo) o una que se introduzca de manera manual (se dibuja sobre el editor de sprites).</li></ul><br />También, al editar los objetos, se puede indicar si se desea usar un sprite diferente al asignado para dibujar como máscara para colisión.<br /><br />Básicamente es así, si alguien está más fresco con GM que lo rectifique <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Sep 18, 2010 3:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-17T17:09:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4124#p4124</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4124#p4124"/>
<title type="html"><![CDATA[Re: ¿Que tan buenas son las colisiones de GameMaker?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4124#p4124"><![CDATA[
m... no me expliqué bien... no me refiero a &quot;cómo hacer las colisiones&quot; sino &quot;cómo se<br />usan&quot;, &quot;cual es la interfaz&quot;...<br /><br />Me gustaría ver código de cómo las usan los programadores y hacer algo<br />similar en pilas. Estoy pensando en un manual de cómo usarlas, la implementación<br />la puedo ajustar a eso...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Sep 17, 2010 5:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-17T16:10:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4122#p4122</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4122#p4122"/>
<title type="html"><![CDATA[Re: ¿Que tan buenas son las colisiones de GameMaker?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4122#p4122"><![CDATA[
Si, mi idea, es asociar un vector de puntos a cada entidad, esos puntos estan con respecto a la pocision inicial del cuadro de la imagen, estos puntos se mueven con la imagen y rotan, esto lo logre con tranformaciones de matrizes, ya lo probe y me da mucha esactitud con pocos puntos, pero esto requiere que a cada imagen de alguna forma se le especifiquen sus puntos, yo lo hice a mano dentro del codigo. Pero para no tener que poner los puntos a mano pense en la forma que el juego creara esos puntos, esto se puede hacer con algoritmo de reconocimiento de bordes, y de hecho tengo un algoritmo que nos podria servir, pero lo que no logramos solucionar es como elegir solo unos cuantos puntos. y de hecho solo en los que hay cambio de direccion.<br />Pero si se que existe tal algoritmo, lo bueno es que estoy llevando la materia de vision computacional y ya estare estudiando como se hace.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Sep 17, 2010 4:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-17T15:46:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4120#p4120</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4120#p4120"/>
<title type="html"><![CDATA[Re: ¿Que tan buenas son las colisiones de GameMaker?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4120#p4120"><![CDATA[
no conozco el tema del GameMaker, pero carlostex y yo estuvimos discutiendo de esto hace un tiempo e incluso llegamos a plantear un algoritmo (solo teórico) para calcular automaticamente una serie de puntos dentro de una imagen y utilizar un vector de puntos para las colisiones<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Sep 17, 2010 3:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2010-09-17T14:01:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4118#p4118</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4118#p4118"/>
<title type="html"><![CDATA[¿Que tan buenas son las colisiones de GameMaker?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=878&amp;p=4118#p4118"><![CDATA[
Buenas, quería preguntarles a quienes conocen GameMaker<br />sobre el sistema de colisiones. He buscado información del<br />tema pero solo dí con el wiki de GameMaker y no logré una<br />visión general del sistema de colisiones.<br /><br />Han comentado en otro mensaje del foro que el sistema<br />de colisiones de GameMaker está bueno, ¿pero cómo es?. Me<br />gustaría conocer un poco del tema para implementar algo<br />a la altura pero dentro de pilas.<br /><br />Gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Sep 17, 2010 2:01 pm</p><hr />
]]></content>
</entry>
</feed>