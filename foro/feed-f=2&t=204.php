<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=204" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-12-12T19:43:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=204</id>
<entry>
<author><name><![CDATA[uguru]]></name></author>
<updated>2007-12-12T19:43:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=737#p737</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=737#p737"/>
<title type="html"><![CDATA[[Solicitud] Ejemplo de escalado o stretching]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=737#p737"><![CDATA[
Alguna idea  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1829">uguru</a> — Mié Dic 12, 2007 7:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[uguru]]></name></author>
<updated>2007-12-08T12:17:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=729#p729</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=729#p729"/>
<title type="html"><![CDATA[[Solicitud] Ejemplo de escalado o stretching]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=729#p729"><![CDATA[
Buscaba algo mas básico, y en C a ser posible, por el momento he venido usando esta función pero no me funciona bien en todos los casos<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void PutImage_fit&#40;void&#41;<br />&#123;<br />  int x_d, x_s;<br />  int y_d, y_s;<br />  int y;<br />  Uint16 *ptr_dst = &#40;Uint16 *&#41;screen-&gt;pixels;<br />  Uint16 *ptr_src = XBuf;<br /><br />  for  &#40;y = 0; y &lt; DST_HEIGHT; y++&#41; &#123;<br />    y_s = &#40;&#40;SRC_HEIGHT * y&#41; / DST_HEIGHT&#41;;<br />    y_s = y_s  * SRC_WIDTH;<br />    y_d = y * SCR_WIDTH;<br />    for &#40;x_d = 0; x_d &lt; DST_WIDTH; x_d++&#41; &#123;<br />      x_s = 16 + &#40;&#40;&#40;x_d &lt;&lt; 1&#41; + x_d&#41; &gt;&gt; 2&#41;;<br />      ptr_dst&#91;y_d + x_d&#93; = ptr_src&#91;y_s + x_s&#93;;<br />    &#125;<br />  &#125;<br />&#125;<br /><br /></code></dd></dl><br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1829">uguru</a> — Sab Dic 08, 2007 12:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-12-07T14:06:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=724#p724</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=724#p724"/>
<title type="html"><![CDATA[[Solicitud] Ejemplo de escalado o stretching]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=724#p724"><![CDATA[
Saludos, aún no me queda muy clara tu necesidad, pero si lo que estás<br />buscando es escalar superficies, puedes utilizar bibliotecas que realicen<br />esa tarea. Usar bibliotecas suele ser una buena idea porque utilizas<br />rutinas rápidas y estables.<br /><br />En python y pygame las transformaciones mas sencillas se pueden realizar<br />utilizando el módulo &quot;transform&quot;:<br /><br /><!-- m --><a class="postlink" href="http://www.pygame.org/docs/ref/transform.html">http://www.pygame.org/docs/ref/transform.html</a><!-- m --><br /><br />Por ejemplo, para duplicar el tamaño de una superficies puedes hacer lo<br />siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&#91;...&#93;<br />personaje = pygame.image.load&#40;&quot;mono.png&quot;&#41;<br />personaje_escalado = pygame.transform.rotozoom&#40;personaje, 0, 2&#41;<br /><br /># Se imprime la superficie generada<br />screen.blit&#40;personaje_escalado, &#40;0, 0&#41;&#41;<br />&#91;...&#93;<br /></code></dd></dl><br /><br /><br />En caso de utilizar el lenguaje de programación C y SDL, tendrías que instalar<br />una biblioteca adicional llamada SDL_gfx. Esta biblioteca incluye funciones<br />para escalar superficies, crear primitivas gráficas (círculos, cuadrados,<br />polígonos...) y otras cosas mas. Te dejo la dirección de su sitio:<br /><br />    <!-- m --><a class="postlink" href="http://www.ferzkopp.net/joomla/content/view/19/14/">http://www.ferzkopp.net/joomla/content/view/19/14/</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Dic 07, 2007 2:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[uguru]]></name></author>
<updated>2007-12-07T09:15:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=723#p723</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=723#p723"/>
<title type="html"><![CDATA[[Solicitud] Ejemplo de escalado o stretching]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=204&amp;p=723#p723"><![CDATA[
Hola!<br /><br />Este es mi primer mensaje por este foro, aunque visito la página desde hace algún tiempo. Un saludo a todos.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /> <br /><br />Hace tiempo que busco la forma de pasar una una imagen almacenada e un array a una SDL_Surface, ambos de distinto tamaño, y que esta se encuadre en el tamaño de la superficie. <br /><br />Dicha funcion seria llamada con asiduidad asi que habría de ser rápida.<br /><br />A ver si alguien me puede echar una mano.<br /><br />Gracias por anticipado.<br /><br />Un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1829">uguru</a> — Vie Dic 07, 2007 9:15 am</p><hr />
]]></content>
</entry>
</feed>