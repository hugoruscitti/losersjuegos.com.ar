<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=524" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-08-28T14:36:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=524</id>
<entry>
<author><name><![CDATA[yasser_001200]]></name></author>
<updated>2009-08-28T14:36:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2848#p2848</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2848#p2848"/>
<title type="html"><![CDATA[El 3d y pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2848#p2848"><![CDATA[
¿Me podrían decir como hago para hacer juegos 3d con pygame usando modelos 3d animados?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1935">yasser_001200</a> — Vie Ago 28, 2009 2:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-25T23:17:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2356#p2356</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2356#p2356"/>
<title type="html"><![CDATA[Varias dudas pygame y clases]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2356#p2356"><![CDATA[
gracias endaramiz.<br />Probaré lo del contador. En cuanto a lo de los grupos, era lo que me esperaba(un for sprite in range(Grupo.sprites)). Lo de las clases, quería algo para entender los conceptos de herencia y demás. Por ejemplo, quiero hacer un tipo de personaje que sea igual al original, pero sin movimiento, y no se si haciendo un personaje base, sin movimiento y luego creando una clase que herede esa base, podría meterle una función update para meterle movimiento y cosas del estilo...<br /><br />Gracias por responder<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Mar 25, 2009 11:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-03-25T21:50:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2355#p2355</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2355#p2355"/>
<title type="html"><![CDATA[Varias dudas pygame y clases]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2355#p2355"><![CDATA[
1) Jeje yo no sabía hacerlo al principio y hice un cronómetro de &quot;segundos espaciales&quot;  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br /><dl class="codebox"><dt>Code: </dt><dd><code>t0 = pygame.time.get_ticks&#40;&#41;<br />t = &#40;pygame.time.get_ticks&#40;&#41; - t0&#41;/1000<br /></code></dd></dl>La primera linea se pondría al iniciar el contador y la segunda sería para saber los segundos que han pasado desde t0. El /1000 es porque get_ticks() te da le tiempo en milisegundos.<br /><br />2) Siempre puedes hacer una lista en vez de un Group. Si no quieres/puedes implementar algunas cosas que te facilita Group, también puedes obtener la lista de un Group llamando a Group.sprites().<br />A simple vista, la primera opción parece más eficiente. Pero, como pygame tiene fragmentos en C, no te lo puedo asegurar.<br />Una vez tienes una lista de Sprites, solo tienes que recorrerla con un for y llamar a las funciones que quieras de los Sprites.<br /><br />3) Yo lo leí de la <a href="http://pyspanishdoc.sourceforge.net/tut/node11.html" class="postlink">documentación de python</a>. Aunque solo me enteré de la primera parte, luego se complica.<br /><br />Prueba buscando por programación modular y orientada a objetos, pero es posible que te salgan tochos de 300 pag. Aunque si recién comienzas con la clases, no te aconsejaría un libro de esos hasta no estar familiarizado. Seguramente acabarás entendiendo los conceptos básicos por experiencia (un personaje es un muy buen ejemplo de clase). <br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Mar 25, 2009 9:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-25T16:05:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2354#p2354</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2354#p2354"/>
<title type="html"><![CDATA[Varias dudas pygame y clases]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=524&amp;p=2354#p2354"><![CDATA[
Buenas a todos:<br /><br />Tengo una serie de dudillas. Ahi van:<br /><br />1.-Como puedo hacer un crono en pygame(se hacer texto y demás, lo que no se hacer es manejar el contador para que funcione como un reloj real.<br /><br />2.-Con los grupos de sprites, hay alguna manera de llamar a metodos de los sprites diferentes de update, draw y demás. Es decir, tengo una función cambiar estado, y tengo varios personajes. Tendría que poner algo estilo Grupo.cambiar_estado, o tendría que iterar dentro del grupo e ir haciendo personaje.cambiar:_estado.<br /><br />3.-Conoceis de algún libro para aprender los fundamentos de las clases(que no esté enfocado a ningún lenguaje, o en su defecto, a python??<br /><br />Muxas gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Mar 25, 2009 4:05 pm</p><hr />
]]></content>
</entry>
</feed>