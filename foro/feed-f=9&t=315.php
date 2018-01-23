<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=315" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-05-05T00:35:58+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=315</id>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2008-05-05T00:35:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1328#p1328</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1328#p1328"/>
<title type="html"><![CDATA[Ayuda con movimiento usando vectores :. Haciendo un RTS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1328#p1328"><![CDATA[
Hum, me lo imagine, entonces lo que hare sera que cuando la<br />magnitud del vector(distancia al puto de destino) sea pequeña,<br />le pongo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>if magnitud&#40;AB&#41; &lt; 7: # si la distancia es poca puej.<br />    posicion = destino<br />    velocidad_o_direccion = 0<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Lun May 05, 2008 12:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-05-04T23:36:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1327#p1327</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1327#p1327"/>
<title type="html"><![CDATA[Ayuda con movimiento usando vectores :. Haciendo un RTS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1327#p1327"><![CDATA[
Saludos, posiblemente el objeto no se detenga porque la condición que<br />utilizas para detenerlo es muy exacta. Por ejemplo tu quieres detener<br />el objeto cuando su posición x sea 300 y el objeto avanza de a 7 píxeles, <br />en ese caso puede que nunca llegue a valer exactamente 300, podría valer<br />290, 297, 304 ... etc.<br /><br />Una buena forma de evitar esos inconvenientes es detener el objeto en<br />base a una distancia (como has comentado antes). Por ejemplo si mueves<br />el objeto a una velocidad de 7 píxeles, podrías comprobar en cada<br />movimiento si el objetivo está a una distancia menor a 7 píxeles. En cuyo<br />caso no tendrías que avanzar los 7 píxeles sino menos, para colocar<br />el objeto en el punto exácto a donde quieres llegar.<br /><br />Por cierto, algo similar ocurre cuando quieres que un personaje de juego de<br />plataformas pueda &quot;saltar&quot; y detenerce justo cuando toca una plataforma con<br />los pies. En la web hay un artículo que explica esta dificultad de las<br />plataformas:<br /><br />    <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/referencia/articulos/plataformas/plataformas.php">http://www.losersjuegos.com.ar/referenc ... formas.php</a><!-- m --><br /><br />Saludos, y bienvenido.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom May 04, 2008 11:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2008-05-04T21:52:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1325#p1325</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1325#p1325"/>
<title type="html"><![CDATA[Ayuda con movimiento usando vectores :. Haciendo un RTS]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=315&amp;p=1325#p1325"><![CDATA[
Pues este es mi primer tema, espero pueda alguien ayudarme. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Estuve leyendo un libro sobre programación de juegos con pygame<br />y en un ejercicio hice una animación de una pelota que se dirige hacia<br />donde haces clic con el ratón, como en un juego de estrategia.<br /><br /><img src="http://hacervideojuegos.com/losersjuegos/vectores.png" alt="Imagen" /><br />hacervideojuegos.com/losersjuegos/vectores.png<br /><br />El programa funciona bien e incluso muestra información acerca<br />de las coordenadas de la pelota y el lugar hacia donde se dirige, pero<br />esta no se detiene en su destino, sino que sigue en esa dirección<br />hasta que con el ratón le indicamos que vaya hacia otro lado.<br />Intenté solucionarlo comparando si su posición es igual a las<br />coordenadas de destino:<br /><br />If posición == destino:<br /><br />Pero nomas no funciono, y creo que podría arreglarlo checando<br />si su distancia hacia la posición de destino es poca, para que se<br />detenga cuando la magnitud del vector sea 0 o algo asi, pero<br />preferiría que se detuviera exactamente en la posición de destino,<br />pero nomas no supe como hacerlo.<br /><br />El archivo con el código fuente y algúna información útil:<br /><a href="http://uploading.com/files/b26ede7b/vectores.zip#downloadform" class="postlink">http://uploading.com/files/b26ede7b/vectores.zip#downloadform</a><br /><br />Veran que el panel azul de abajo podría servir para mostrar información<br />de unidades, minimapas y esas cosas de los juegos de estrategia, que<br />seria lo que quiero hacer, apenas sepa como detener la unidad cuando<br />llegue a donde le indico.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Dom May 04, 2008 9:52 pm</p><hr />
]]></content>
</entry>
</feed>