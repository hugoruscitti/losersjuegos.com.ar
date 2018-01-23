<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1297" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-10-11T06:14:18+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1297</id>
<entry>
<author><name><![CDATA[kiketom]]></name></author>
<updated>2011-10-11T06:14:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6089#p6089</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6089#p6089"/>
<title type="html"><![CDATA[Re: Dos pequeñas dudas.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6089#p6089"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Buenas  MrBB4,<br /><br />para completar lo que te comentó barajas del object, decir que el hecho de que creara una clase inicial con todos los métodos vacíos, no era por orden, si no para poder hacer uso del polimorfismo.<br /><br />Si te fijas en el main y en el gameManager, verás que excepto en el menustate.MenuState(), en ningún otro lado distingue el tipo de gameState que se trata ( menuState, optionState), pero ese código se ejecutaría para cualquiera de los 2 estados. De esta manera, conseguimos que, mediante una interfaz común (gameState), definimos unos &quot;requisitos mínimos&quot; que todos los gameState deberán cumplir para poder funcionar en el gameManager. Si creamos una clase que herede de gameState y cambiamos esas funciones, ya tendremos un nuevo estado que podrá funcionar sin problemas con gameManager, y ni hemos tocado el gameManager.<br /><br /><br /><br />Esto es una explicación bastante burda de lo que es el polimorfismo, pero en internet seguro que te lo explican mejor que yo<br /></div></blockquote><br /><br />Exacto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><br />Yo no lo hubiera explicado mejor  jejejejeejej <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368">kiketom</a> — Mar Oct 11, 2011 6:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-10-11T01:35:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6088#p6088</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6088#p6088"/>
<title type="html"><![CDATA[Re: Dos pequeñas dudas.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6088#p6088"><![CDATA[
Muchisimas gracias, se entendío perfectamente lo del polimorfismo. De hecho hasta ahora no me habia dado cuenta de que se pudiera utilizar de esa manera. Muy util. Denuevo gracias.<br /><br />Saludos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Oct 11, 2011 1:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-10-11T01:08:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6086#p6086</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6086#p6086"/>
<title type="html"><![CDATA[Re: Dos pequeñas dudas.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6086#p6086"><![CDATA[
Buenas  MrBB4,<br /><br />para completar lo que te comentó barajas del object, decir que el hecho de que creara una clase inicial con todos los métodos vacíos, no era por orden, si no para poder hacer uso del polimorfismo.<br /><br />Si te fijas en el main y en el gameManager, verás que excepto en el menustate.MenuState(), en ningún otro lado distingue el tipo de gameState que se trata ( menuState, optionState), pero ese código se ejecutaría para cualquiera de los 2 estados. De esta manera, conseguimos que, mediante una interfaz común (gameState), definimos unos &quot;requisitos mínimos&quot; que todos los gameState deberán cumplir para poder funcionar en el gameManager. Si creamos una clase que herede de gameState y cambiamos esas funciones, ya tendremos un nuevo estado que podrá funcionar sin problemas con gameManager, y ni hemos tocado el gameManager.<br /><br /><br /><br />Esto es una explicación bastante burda de lo que es el polimorfismo, pero en internet seguro que te lo explican mejor que yo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Oct 11, 2011 1:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-10-04T12:16:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6038#p6038</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6038#p6038"/>
<title type="html"><![CDATA[Re: Dos pequeñas dudas.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6038#p6038"><![CDATA[
Ganial!  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> Ahora tengo todo claro. Muchas gracias Barajas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Oct 04, 2011 12:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-10-04T01:53:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6036#p6036</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6036#p6036"/>
<title type="html"><![CDATA[Re: Dos pequeñas dudas.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6036#p6036"><![CDATA[
Sobre la primera duda, es muy simple.<br />Según la documentación oficial de pygame (<a href="http://www.pygame.org/docs/ref/display.html" class="postlink">http://www.pygame.org/docs/ref/display.html</a>); las dos funciones hacen lo mismo, pero de formas diferentes.<br /><blockquote class="uncited"><div><br />pygame.display.flip() : This will update the contents of the entire display. If your display mode is using the flags pygame.HWSURFACE and pygame.DOUBLEBUF, this will wait for a vertical retrace and swap the surfaces. If you are using a different type of display mode, it will simply update the entire contents of the surface.<br /><br />When using an pygame.OPENGL display mode this will perform a gl buffer swap.<br /></div></blockquote><br /><br />Esto se traduce como: <br /><br /><blockquote class="uncited"><div><br />pygame.display.flip() : Esto actualizara el contenido de toda la pantalla. Si utilizas las banderas pygameHWSURFACE y pygame.DOUBLEBUF, esto esperara por un retraso vertical y el intercambio de las superficies.  Si utilizas un modo de visualización diferente (sin usar las banderas), eso simplemente actualizara el contenido por completo de la superficie.<br /><br />Cuando se usa la bandera del modo de visualización, pygame.OPENGL , esto llevara un intercambio del buffer gl (la parte de OpenGL dedicada al movimiento de vértices)<br /></div></blockquote><br /> Mientras que pygame.dysplay.update()...<br /><br /><blockquote class="uncited"><div><br />update portions of the screen for software displays<br />pygame.display.update(rectangle=None): return None<br />pygame.display.update(rectangle_list): return None<br /><br />This function is like an optimized version of pygame.display.flip - update the full display Surface to the screen for software displays. It allows only a portion of the screen to updated, instead of the entire area. If no argument is passed it updates the entire Surface area like pygame.display.flip - update the full display Surface to the screen.<br /><br />You can pass the function a single rectangle, or a sequence of rectangles. It is more efficient to pass many rectangles at once than to call update multiple times with single or a partial list of rectangles. If passing a sequence of rectangles it is safe to include None values in the list, which will be skipped.<br /><br />This call cannot be used on pygame.OPENGL displays and will generate an exception.<br /></div></blockquote><br /><br />Traducido:<br /><br /><blockquote class="uncited"><div><br />Actualiza porciones de la pantalla por visualización de software.<br /><br />Esta función es parecida y optimizada de pygame.display.flip(). Actualiza por completo la pantalla para visualizaciones de software. Esto permite solo la actualización de una parte de la pantalla, en lugar de toda la zona. <span style="font-weight: bold">Si no revise argumentos, se actualiza toda la superficie como pygame.display.flip()</span> (lo que sigue es un resumen de lo que hace flip ...)<br /><br />Puedes pasar la función de un rectángulo, o una serie de rectángulos. Es más eficiente pasar rectángulos al mismo tiempo, que a llamar a la actualización varias veces que solo con una lista parcial de los rectángulos. Si se pasa una secuencia de rectángulos que es seguro incluye un valor None (nulo) en la lista, que eso sera evitado.<br /><br />Esto no se usara con la bandera pygame.OPENGL, eso generara una excepción<br /></div></blockquote><br /><br />No sé si esto responda la primera duda, o la revuelva mas...<br /><br />Sobre la segunda, &quot;object&quot; es solo una palabra reservada para las clases nuevo estilo en Python, son clases que buscan evitan las relaciones en diamante (<a href="http://es.wikipedia.org/wiki/Problema_del_diamante" class="postlink">http://es.wikipedia.org/wiki/Problema_del_diamante</a>) en la herencia múltiple....<br /><br />Espero que esto sea lo que buscas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Oct 04, 2011 1:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-10-04T01:14:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6034#p6034</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6034#p6034"/>
<title type="html"><![CDATA[Re: Dos pequeñas dudas.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6034#p6034"><![CDATA[
Otra preguntita  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_mrgreen.gif" alt=":mrgreen:" title="Mr. Green" /> <br />¿Como hago para importar un modulo que está en un paquete superior? Ley que dos puntos <span style="font-style: italic">&quot;..&quot;</span> equivaldría al paquete anterior, pero no logro hacerlo.<br /><br />Gracias otra ves, y espero no ser de mucha molestia.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Mar Oct 04, 2011 1:14 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MrBB4]]></name></author>
<updated>2011-10-03T20:58:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6031#p6031</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6031#p6031"/>
<title type="html"><![CDATA[Dos pequeñas dudas.]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1297&amp;p=6031#p6031"><![CDATA[
Hola LosersJuegos =D<br /><br />Hoy vengo con Dos pequeñas dudas.<br /><br />La primera es en relación a pygame. Desde que comencé a utilizar pygame, en los diversos libros y tutoriales me he encontrado en que al momento de mostrar la imagen en pantalla hay dos funciones que todos utilizan: <span style="font-style: italic">pygame.display.flip()</span> y <span style="font-style: italic">pygame.display.update()</span>. Por definición hacen cosas distintas pero al parecer hay algo que no estoy entendiendo porque para mi el resultado es siempre el mismo, no veo diferencia alguna. ¿Que ventajas tiene usar una o la otra? ¿Que desventajas?<br /><br />Pasando a mi segunda duda. ¿Que una clase herede de la clase <span style="font-style: italic">object()</span> es solo una formalidad o sirve para algo más?<br />Y ya que estamos con lo de <span style="font-style: italic">object()</span>, leyendo un post de un blog que <a href="http://www.losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2368" class="postlink">@kiketon</a> señaló hace un par de días (<a href="http://aventurapygame.blogspot.com/2011/02/estados-del-juego.html" class="postlink">Link</a>). me encontré con que el autor del post primero creó una clase que heredaba de <span style="font-style: italic">object()</span> y que tenía todas la funciones bacías. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" />  Esta hacía de guión para subclases de la misma, pero en todas las subclases redefinió todas sus funcionen, la única similitud entre las subclases eran los nombres de las funciones y que todas heredarían de object(). ¿Algún comentario para que pueda entender la utilidad de esto? me imagino que lo hará por una cuestión de orden, pero me parece demasiado.<br /><br />Les agradezco de antemano y les deseo la mejor de las suertes <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=";)" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2357">MrBB4</a> — Lun Oct 03, 2011 8:58 pm</p><hr />
]]></content>
</entry>
</feed>