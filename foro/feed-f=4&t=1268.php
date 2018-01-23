<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1268" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-09-09T12:28:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1268</id>
<entry>
<author><name><![CDATA[fede_19xx]]></name></author>
<updated>2011-09-09T12:28:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5919#p5919</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5919#p5919"/>
<title type="html"><![CDATA[Re: Arrastar una imagen con el puntero del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5919#p5919"><![CDATA[
Muchas gracias, me abrió el panorama.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2495">fede_19xx</a> — Vie Sep 09, 2011 12:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-08T16:05:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5916#p5916</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5916#p5916"/>
<title type="html"><![CDATA[Re: Arrastar una imagen con el puntero del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5916#p5916"><![CDATA[
Yo uso SFML en lugar de SDL pero seguro que las dos librerías tienen funciones parecidas así que voy a intentar explicarte de forma genérica como lo haría yo.<br /><br />- En primer lugar debes detectar que has hecho clic y obtener las coordenadas del cursor en el momento del clic.<br />- En segundo lugar compara las coordenadas del cursor con las coordenadas de las imágenes del scroll. Así sabrás si has hecho clic sobre una imagen o sobre otra zona del juego, y en caso de haber cliqueado sobre una imagen sabrás cuál es. Para comparar las coordenadas debes saber cuál es el centro de la imagen y su tamaño (altura y anchura). Ten en cuenta que por defecto una imagen tiene su centro en la esquina superior izquierda. Si has hecho clic sobre una imagen activa el flag <span style="font-style: italic">arrastrar</span> y &quot;recuerda&quot; (en otra variable) que imagen has seleccionado. El flag <span style="font-style: italic">arrastrar</span> puede ser un booleano o un int.<br />- Para que la imagen siga al cursor deberás detectar cualquier movimiento del cursor (sus nuevas coordenadas) y decirle a SDL que dibuje la imagen en las mismas coordenadas que el cursor mientras el flag <span style="font-style: italic">arrastrar</span> esté activado.<br />- Por último para que la imagen se quede donde hagas clic simplemente vuelve a detectar que has hecho clic y si el flag <span style="font-style: italic">arrastrar</span> está activado dile a SDL que dibuje la imagen ahí y desactiva el flag.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue Sep 08, 2011 4:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[fede_19xx]]></name></author>
<updated>2011-09-08T14:20:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5915#p5915</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5915#p5915"/>
<title type="html"><![CDATA[Arrastar una imagen con el puntero del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1268&amp;p=5915#p5915"><![CDATA[
Hola como va, estoy programando un juego en c++ con SDL, estoy en la parte en la que tengo que diseñar un escenario, la idea es la siguiente, cuento con un fondo verde y desde un scroll que contiene imagenes de 30x30px (arboles, arbustos, cosas que desearia agregar al escenario de fondo) debo hacer clic sobre algunas de ellas, que la imagen siga al puntero del mouse y donde vuelva a hacer clic debe caer la imagen.<br />Alguien podria orientarme un poco sobre esto, gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2495">fede_19xx</a> — Jue Sep 08, 2011 2:20 pm</p><hr />
]]></content>
</entry>
</feed>