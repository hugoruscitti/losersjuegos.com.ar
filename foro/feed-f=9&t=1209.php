<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1209" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-20T10:59:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1209</id>
<entry>
<author><name><![CDATA[Altair]]></name></author>
<updated>2011-07-20T10:59:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5734#p5734</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5734#p5734"/>
<title type="html"><![CDATA[Re: Problema con el algoritmo advance]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5734#p5734"><![CDATA[
Entiendo el ejemplo que pones, que ya es mucho decir en mi caso, y me sirve para algunas cosas.<br /><br />De todas formas, como tengo previsto sacar la version 0.2 de mi proyecto pronto, pondre un archivo explicando exactamente lo que necesito, a ver si alguno de los que controlais las matematicas podeis implementarlo. Asi son las cosas conmigo y las matematicas, al que se le dan mal, se le dan mal.<br /><br />Os adelanto que esta version le da al tema de funciones graficas avanzadas: distintos tipos de lineas, circulos, cuadrados, arcos, etc. He dividido los tutoriales en 12 secciones, para que los conceptos sean mas sencillos. Luego estan los capitulos, que explican para que sirve cada cosa. Por ultimo esta la documentacion &quot;tecnica&quot; que indica los parametros de cada funcion.<br /><br />Solo me queda terminar de arreglar eso y ya esta<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=9">Altair</a> — Mié Jul 20, 2011 10:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-07-19T12:40:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5729#p5729</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5729#p5729"/>
<title type="html"><![CDATA[Re: Problema con el algoritmo advance]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5729#p5729"><![CDATA[
Si quieres que el objeto avance 100px en un ángulo de 80º simplemente calcula lo siguiente:<br /><br />Coordenada X --&gt; cos(80º) = 0.1736, lo multiplicamos por 100 que es la cantidad de px que queremos avanzar --&gt; 17.36px.<br />Coordenada Y --&gt; sen(80º) = 0.9848 lo multiplicamos por 100 que es la cantidad de px que queremos avanzar --&gt; 98.48px.<br /><br />Con el teorema de Pitágoras se puede comprobar que efectivamente la distancia recorrida es de 100px, además avanzamos mucho en el eje Y y muy poco en el X, lo que concuerda con los 80º.<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Mar Jul 19, 2011 12:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Altair]]></name></author>
<updated>2011-07-19T07:36:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5728#p5728</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5728#p5728"/>
<title type="html"><![CDATA[Re: Problema con el algoritmo advance]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5728#p5728"><![CDATA[
No estoy muy seguro de que sea una animacion. Yo lo entiendo asi, estoy cambiando las coordenadas XY de un objeto, desde sus coordenadas iniciales a las finales. No me importan las coordenadas XY intermedias que hay por medio.<br /><br />Por ejemplo, con estos datos:<br />ob.x=0<br />ob.y=0<br />ob.angle=0<br /><br />lo hago avanzar 100 pixels en X, se que quedan asi las coordenadas XY<br />ob.x=100<br />ob.y=0<br /><br />Por otra parte he hecho un sistema, un tanto cutre, pero que parece funcionar:<br /><br />El eje X es horizontal y es positivo hacia la derecha<br />El eje Y es vertical y es positivo hacia abajo<br />Los 0 grados estan en el eje X positivo y crecen en sentido horario<br /><br />   x=0<br />   y=0<br />   distancia=100<br />   angulo=80<br /><br />Esto nos pone un objeto en las coordenadas X e Y indicadas, que avanzara 100 pixels con un angulo de 80 grados. Teniendo en cuenta como van los angulos, eso indica que va hacia abajo casi en linea recta, un poco a la derecha del eje Y positivo.<br /><br />   Finales teoricos:<br />   x=0+100=100<br />   y=0+100=100<br /><br />Teniendo en cuenta solamente las coordenadas X e Y y la distancia, las coordenadas destino quedarian asi.<br /><br />   Lado X:<br />   100 -&gt; 100%<br />   X -&gt; 10 grados<br />   X= 100*10/100=1000/100=10<br />   x=0+10=10<br /><br />Si avanzamos un 100%, recorremos 100 pixels.<br />El lado opuesto del angulo tiene 10 grados (recordemos que tenemos un giro de 80 grados, 90-80=10) y tenemos que calcular los pixels correspondientes.<br />Haciendo una regla de tres, nos da que tenemos una &quot;ganancia&quot; de 10 pixels.<br /><br />   Lado Y:<br />   100 -&gt; 100%<br />   Y -&gt; 80 grados<br />   y=100*80/100=8000/100=80<br />   y=0+80=80<br /><br />Muy parecido a lo de antes.<br />Si avanzamos un 100%, recorremos 100 pixels.<br />El lado opuesto del angulo tiene ahora 80 grados (90-10).<br />Hacemos regla de tres y sale una ganancia en Y de 80 pixels<br /><br />   Coordenadas finales<br />   x=0+10=10<br />   y=0+80=80<br /><br />A la coordenada X original (0) le sumamos la &quot;ganancia&quot; en X (10).<br />Hacemos lo mismo con la coordenada Y.<br /><br />Lo que me tiene un tanto escamado es que 10+80 no suman 100 (la distancia que buscamos recorrer). Creo que eso indica que este metodo puede ser valido pero que falta pulirlo de alguna forma.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=9">Altair</a> — Mar Jul 19, 2011 7:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2011-07-18T18:41:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5727#p5727</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5727#p5727"/>
<title type="html"><![CDATA[Re: Problema con el algoritmo advance]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5727#p5727"><![CDATA[
El problema esta en que estas tratando al objeto como si fuera estático, cuando lo que tu quieres hacer es que se mueva. la distancia al ser pequeña hará que que los cambios sean pequeños, la solución es que tienes que combinar trigonometría con física pues estas realizando una animación, debes definir una velocidad, por ejemplo 3 pixeles/seg, y la distancia va a ser el tiempo que transcurre entre cada frame por la velocidad, de esa forma veras un resultado mejor.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Jul 18, 2011 6:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Altair]]></name></author>
<updated>2011-07-18T15:34:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5726#p5726</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5726#p5726"/>
<title type="html"><![CDATA[Re: Problema con el algoritmo advance]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5726#p5726"><![CDATA[
En efecto da resultados muy pequeños.<br /><br />Lo malo es que no parece que pasar obj.x y obj.y a float solucione nada, porque son las coordenadas X e Y en pantalla.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=9">Altair</a> — Lun Jul 18, 2011 3:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-07-18T13:46:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5725#p5725</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5725#p5725"/>
<title type="html"><![CDATA[Re: Problema con el algoritmo advance]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5725#p5725"><![CDATA[
buenas altair,<br /><br />como comentabas se tienen que usar funciones de trigonometría, específicamente seno y coseno.<br /><br />Tu tienes la longitud de la distancia que quieres mover &quot;d&quot;<br />Para hallar las componentes x e y de &quot;d&quot;, tienes que hacer lo siguiente:<br /><br /> - Si multiplicas la longitud de un vector(&quot;d&quot;) por el coseno del angulo que forma (angulo), tienes la componente X de ese vector d.x<br />obj.x += distancia * cos(angulo);<br /><br />- Si multiplicas la longitud de un vector(&quot;d&quot;) por el seno del ángulo que forma (ángulo), tienes la componente Y<br />obj.y += distancia * sin(angulo)<br /><br />Pero tu problema creo que radica aquí:<br />Los senos y cosenos están delimitados al rango [-1,1], por lo que el producto de distancia * sin ( o cos), va a ser generalmente pequeño, y encima vas a perder los decimales por ser obj.x y obj.y integers. Mira a ver si los puedes pasar a float<br /><br />Prueba a imprimir distancia * sin(angulo) y verás como seguramente será cercano a 0<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Jul 18, 2011 1:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Altair]]></name></author>
<updated>2011-07-18T11:05:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5722#p5722</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5722#p5722"/>
<title type="html"><![CDATA[Problema con el algoritmo advance]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1209&amp;p=5722#p5722"><![CDATA[
Muy buenas,<br /><br />usando C/C++ intento implementar esto: tenemos un objeto en las coordenadas X e Y, dado un angulo &quot;angle&quot; queremos que avance una DISTANCIA determinada en pixels. Una vez haya avanzado esa distancia en dicha direccion, en las variables X e Y estaran las nuevas coordenadas.<br /><br />Informacion util:<br />objeto.x; // int<br />objeto.y; //  int<br />objeto.angle; // float<br /><br />Escenario:<br />objeto.x=50;<br />objeto.y=60;<br />objeto.angle=25.35;<br /><br />Creo que esto se hace con alguna formula de trigonometria, estoy probando con estas formulas pero no me funciona, y las matematicas se me dan bastante mal  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /> <br /><br />radian=(float)(3.1415926535897931/180)*angulo; // Pasamos el angulo a radianes.<br />entity_id-&gt;x=entity_id-&gt;x+(distance*cos(radian));<br />entity_id-&gt;y=entity_id-&gt;y+(distance*sin(radian));<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=9">Altair</a> — Lun Jul 18, 2011 11:05 am</p><hr />
]]></content>
</entry>
</feed>