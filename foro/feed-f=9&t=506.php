<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=506" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-07T16:19:11+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=506</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-07T16:19:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2243#p2243</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2243#p2243"/>
<title type="html"><![CDATA[Tamaño de la interfaz gráfica del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2243#p2243"><![CDATA[
<blockquote class="uncited"><div><br />Si puedo utilizar resoluciones cuanto más pequeñas mejor, para cargar en memoria menos Kb.<br /></div></blockquote><br />Como comentaban mas arriba es tu primer juego sera mejor que lo crees sin preocuparte tanto por la ram ya que si en tu primer juego intentas maximizarlo (por decirlo de alguna manera) mucho puede que solo te frustres...<br />Alguien me comentaba una vez que es mejor primero crear lo que uno quiere y despues optimizarlo... pues al intentar hacerlo al mismo tiempo que se programa suele ser muy dificil e inclusvie frustrante...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Sab Mar 07, 2009 4:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-03-07T16:09:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2242#p2242</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2242#p2242"/>
<title type="html"><![CDATA[Re: Tamaño de la interfaz gráfica del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2242#p2242"><![CDATA[
<blockquote><div><cite>postit escribió:</cite><br />Estoy haciéndolo para 640x480 pero me gustaría permitir fullscreen. Entonces ¿cómo sería mejor hacer las imágenes, a qué resolución? Ahora estoy armándolas pensando en la resolución por defecto de 640x480 pero me preocupa que a la hora de ponerlo en pantalla completa las imágenes no se vean bien <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br />¿Hago bien al diseñar para 640x480 o cambio de resolución?<br /></div></blockquote><br /><br />Hola, esa está bien, aunque a lo mejor funciona a 800x600. Pero intenta poner una resolución no demasiado grande ya que puedes tener problemas, a la hora de hacer el blit, porque sea demasiado lento. Aunque al ser un Tetris, si te lo montas bien, puedes optimizar bastante. Por ejemplo, haciendo el blit de la interfaz gráfica solamente una vez al iniciar el programa.<br /><br /><blockquote><div><cite>postit escribió:</cite><br />Si puedo utilizar resoluciones cuanto más pequeñas mejor, para cargar en memoria menos Kb.<br /></div></blockquote><br />Si no vas programar para un dispositivo portátil, no creo que ese sea un problema. Ya que los ordenadores normalitos tienen memoria de sobras para un Tetris.<br /><br />Igualmente, si es de tus primeros pasos por este mundo, intenta no preocuparte por estos temas. Primero acabalo y luego ya lo mejorarás.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Mar 07, 2009 4:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-03-07T14:09:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2241#p2241</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2241#p2241"/>
<title type="html"><![CDATA[Tamaño de la interfaz gráfica del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2241#p2241"><![CDATA[
El detalle es que también depende de la resolución del monitor del usuario, puede ser que en la gran mayoría se escale perfectamente (800x600, 1024x768, etc.), pero en monitores wide-screen es donde se notará más la diferencia. Afortunadamente, SDL normalmente se encarga de esta parte en cierta forma (cuando no encuentra una escala adecuada, &quot;crea&quot; una similar en el monitor del usuarioy trabaja sobre ella.<br /><br />Al final, sin embargo, la única forma de saber si las cosas se verán como deseas es probando, en diferentes equipos con diferentes resolución :p.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Mar 07, 2009 2:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[postit]]></name></author>
<updated>2009-03-07T08:39:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2240#p2240</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2240#p2240"/>
<title type="html"><![CDATA[Tamaño de la interfaz gráfica del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2240#p2240"><![CDATA[
Hola sofoke gracias por tu ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Lo que haré es probarlo sí, a ver qué tal se comporta en fullscreen para varias resoluciones de pantalla que pruebe.<br /><br />Si pierdo definición no me importa. Claro, siempre y cuando la imagen se siga viendo bien y no algo completamente pixelado que el usuario se de cuenta de que se ve mal.<br /><br />Si puedo utilizar resoluciones cuanto más pequeñas mejor, para cargar en memoria menos Kb.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2068">postit</a> — Sab Mar 07, 2009 8:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-06T19:39:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2235#p2235</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2235#p2235"/>
<title type="html"><![CDATA[Tamaño de la interfaz gráfica del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2235#p2235"><![CDATA[
Pues haces bien si estas pensando solo usar esas imagenes a esa resolucion...<br />Ahora por las experiencias que he tenido creo que con esa resolucion al hacer un fullscreen se distorcionan un poco.<br />yo te recomendaria algo simple... que crearas solo una imagen y la probaras en fullscreen y trataras de adaptar un buen tamaño para pantalla completa... o si quieres ambas encontrar un tamaño que se mantenga en ambos modos...<br />asi un tamaño seria para ambos modos...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Vie Mar 06, 2009 7:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[postit]]></name></author>
<updated>2009-03-06T17:31:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2233#p2233</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2233#p2233"/>
<title type="html"><![CDATA[Tamaño de la interfaz gráfica del juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=506&amp;p=2233#p2233"><![CDATA[
Hola. Estoy haciendo un juego simple y me surge una duda a la hora de crear la interfaz gráfica con la que se jugará. Imaginaos un tetris, con su tablero e iconos que te indican número de líneas, de tipos de pieza caídas, un marcador de tiempo y todo eso.<br /><br />Estoy haciéndolo para 640x480 pero me gustaría permitir fullscreen. Entonces ¿cómo sería mejor hacer las imágenes, a qué resolución? Ahora estoy armándolas pensando en la resolución por defecto de 640x480 pero me preocupa que a la hora de ponerlo en pantalla completa las imágenes no se vean bien <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br />¿Hago bien al diseñar para 640x480 o cambio de resolución?<br /><br />GRACIAS; un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2068">postit</a> — Vie Mar 06, 2009 5:31 pm</p><hr />
]]></content>
</entry>
</feed>