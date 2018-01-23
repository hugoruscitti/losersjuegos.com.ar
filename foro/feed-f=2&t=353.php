<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=353" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-08-03T00:02:24+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=353</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-08-03T00:02:24+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6991#p6991</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6991#p6991"/>
<title type="html"><![CDATA[Re: Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6991#p6991"><![CDATA[
<blockquote class="uncited"><div><br />que coincidencia, yo estaba (o estoy actualmente) desarrollando algunas funciones para imprimier caracteres en la pantalla usando pygame para una Engine en la que estoy trabajando. para hacer WarHacks :p (o un juego de guerra de hackers) llamado Le Chocolat<br /></div></blockquote><br /><br />Nunca terminé el motor xd.<br />Pero ahora que tengo más experiencia, puede que retome el proyecto desde 0 <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Ago 03, 2012 12:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nico.decara]]></name></author>
<updated>2012-07-15T05:19:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6919#p6919</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6919#p6919"/>
<title type="html"><![CDATA[Re: Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6919#p6919"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br /><blockquote><div><cite>nico.decara escribió:</cite>Hola Barajas, hice lo que me dijiste, pero si cambio el orden, me aparece la pantalla negra con lo que escribo. la imagen de fondo nunca aparece :S<br /></div></blockquote><br /><br />Eso es por que en el método draw tienes:<br /><br /><pre class="prettyprint linenums">def draw&#40;self, screen&#41;:<br />        print self.strings<br />        screen.fill&#40;&#40;0, 0, 0&#41;&#41; #&lt;&lt;&lt;&lt;&lt;&lt; Llena la pantalla de negro....<br />        for line in range&#40;len&#40;self.strings&#41;&#41;:<br />            img_line = self.font.render&#40;self.strings[line], 1, &#40;255, 255, 255&#41;&#41;<br />            screen.blit&#40;img_line, &#40;self.ipos_x, self.ipos_y + self.dist * line&#41;&#41;</pre><br /><br />Y en el orden en el que ocurren seria algo así<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Dibujamos imagen al fondo<br />Dibujamos Texto con draw<br />    draw nos dice que primero llenemos el fondo de negro, y después dibujemos el texto<br /></code></dd></dl><br /><br /><br />Para arreglarlo, solo borra la linea en draw que dibuja en negro, <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />. No me había fijado en ese detalle; detalles que a uno se le escapan  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> .<br />Un consejo, para prevenir estos errores es revisa el flujo en el que suceden las cosas en tus programas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /></div></blockquote><br /><br />MUCHAS GRACIAS!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2624">nico.decara</a> — Dom Jul 15, 2012 5:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-14T00:38:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6918#p6918</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6918#p6918"/>
<title type="html"><![CDATA[Re: Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6918#p6918"><![CDATA[
<blockquote><div><cite>nico.decara escribió:</cite><br />Hola Barajas, hice lo que me dijiste, pero si cambio el orden, me aparece la pantalla negra con lo que escribo. la imagen de fondo nunca aparece :S<br /></div></blockquote><br /><br />Eso es por que en el método draw tienes:<br /><br /><pre class="prettyprint linenums">def draw&#40;self, screen&#41;:<br />        print self.strings<br />        screen.fill&#40;&#40;0, 0, 0&#41;&#41; #&lt;&lt;&lt;&lt;&lt;&lt; Llena la pantalla de negro....<br />        for line in range&#40;len&#40;self.strings&#41;&#41;:<br />            img_line = self.font.render&#40;self.strings[line], 1, &#40;255, 255, 255&#41;&#41;<br />            screen.blit&#40;img_line, &#40;self.ipos_x, self.ipos_y + self.dist * line&#41;&#41;</pre><br /><br />Y en el orden en el que ocurren seria algo así<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Dibujamos imagen al fondo<br />Dibujamos Texto con draw<br />    draw nos dice que primero llenemos el fondo de negro, y después dibujemos el texto<br /></code></dd></dl><br /><br /><br />Para arreglarlo, solo borra la linea en draw que dibuja en negro, <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />. No me había fijado en ese detalle; detalles que a uno se le escapan  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /> .<br />Un consejo, para prevenir estos errores es revisa el flujo en el que suceden las cosas en tus programas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Sab Jul 14, 2012 12:38 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nico.decara]]></name></author>
<updated>2012-07-13T19:56:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6917#p6917</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6917#p6917"/>
<title type="html"><![CDATA[Re: Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6917#p6917"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br /><blockquote><div><cite>nico.decara escribió:</cite>Hola, me resulto muy util el codigo, pero tengo un problema, no puedo hacer que lo que se escriba<br /></div></blockquote><br /><br />Bueno, en tu código veo esto:<br /><br /><pre class="prettyprint linenums">escritura.update&#40;events&#41;<br />escritura.draw&#40;screen&#41;<br />screen.blit&#40;pantallaBase,&#40;0,0&#41;&#41;</pre><br /><br />Resumiendo, lo que haces es:<br /><br />    Actualizo los eventos de escritura....<br />    Dibujo la escritura<br />    <span style="font-weight: bold">Dibujo la pantalla sobre todo lo demás</span><br /><br />Solo hay que cambiar el orden y ya esta <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /></div></blockquote><br /><br />Hola Barajas, hice lo que me dijiste, pero si cambio el orden, me aparece la pantalla negra con lo que escribo. la imagen de fondo nunca aparece :S<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2624">nico.decara</a> — Vie Jul 13, 2012 7:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-12T13:25:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6916#p6916</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6916#p6916"/>
<title type="html"><![CDATA[Re: Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6916#p6916"><![CDATA[
<blockquote><div><cite>nico.decara escribió:</cite><br />Hola, me resulto muy util el codigo, pero tengo un problema, no puedo hacer que lo que se escriba<br /></div></blockquote><br /><br />Bueno, en tu código veo esto:<br /><br /><pre class="prettyprint linenums">escritura.update&#40;events&#41;<br />escritura.draw&#40;screen&#41;<br />screen.blit&#40;pantallaBase,&#40;0,0&#41;&#41;</pre><br /><br />Resumiendo, lo que haces es:<br /><br />    Actualizo los eventos de escritura....<br />    Dibujo la escritura<br />    <span style="font-weight: bold">Dibujo la pantalla sobre todo lo demás</span><br /><br />Solo hay que cambiar el orden y ya esta <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Jue Jul 12, 2012 1:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nico.decara]]></name></author>
<updated>2012-07-11T22:21:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6908#p6908</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6908#p6908"/>
<title type="html"><![CDATA[Re: Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=6908#p6908"><![CDATA[
Hola, me resulto muy util el codigo, pero tengo un problema, no puedo hacer que lo que se escriba, aparezca arriba de una imagen, las letras las carga en la lista, pero no las muestra en pantalla. Aca abajo les dejo el codigo a ver si me pueden ayudar.<br />Gracias y saludos!<br /><br /><pre class="prettyprint">import pygame, sys<br />from pygame.locals import *<br /><br />class Escritura&#40;&#41;:<br />    def __init__&#40;self&#41;:<br />        self.line = 0<br />        self.strings = [&#39;&#39;,]<br />        self.font = pygame.font.Font&#40;None, 28&#41;        <br />        self.dist = 20<br />        self.ipos_x = 300<br />        self.ipos_y = 300<br />        <br />    def update&#40;self, events&#41;:<br />        for event in events:<br />            if event.type == KEYDOWN:<br />                if event.key == K_RETURN:<br />                    self.strings.append&#40;&#39;&#39;&#41;<br />                    self.line += 1<br />                elif event.key == K_ESCAPE:<br />                    sys.exit&#40;&#41;<br />                else:<br />                    self.strings[self.line] = str&#40;self.strings[self.line] + event.unicode&#41;<br />                    <br />    def draw&#40;self, screen&#41;:<br />        print self.strings<br />        screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br />        for line in range&#40;len&#40;self.strings&#41;&#41;:<br />            img_line = self.font.render&#40;self.strings[line], 1, &#40;255, 255, 255&#41;&#41;<br />            screen.blit&#40;img_line, &#40;self.ipos_x, self.ipos_y + self.dist * line&#41;&#41;<br />            <br />def main&#40;&#41;:<br />    pygame.init&#40;&#41;<br />    screen = pygame.display.set_mode&#40;&#40;700, 600&#41;&#41;<br />    imagen=pygame.image.load&#40;&quot;previa.png&quot;&#41;<br />    screen.blit&#40;imagen,&#40;0,0&#41;&#41;<br />    pantallaBase= screen.copy&#40;&#41;<br />    salir = False<br />    escritura = Escritura&#40;&#41;<br />    while salir == False:<br />        events = pygame.event.get&#40;&#41;<br />        for event in events:<br />            if event.type == QUIT:<br />                salir = True<br />        escritura.update&#40;events&#41;<br />        escritura.draw&#40;screen&#41;<br />        screen.blit&#40;pantallaBase,&#40;0,0&#41;&#41;<br />        pygame.display.update&#40;&#41;<br />if __name__ == &#39;__main__&#39;: <br />    main&#40;&#41;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2624">nico.decara</a> — Mié Jul 11, 2012 10:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-11-16T10:19:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=3046#p3046</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=3046#p3046"/>
<title type="html"><![CDATA[Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=3046#p3046"><![CDATA[
Que curioso, no sabía que existía ese tipo de juegos.<br />Si tienes alguna duda con el código, no dudes en preguntar. Aunque ahora me he puesto a mirarlo un poco y he notado que tengo algo olvidado python. Pero bueno, a lo mejor hay alguien que lo tiene más fresco y te puede ayudar.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Nov 16, 2009 10:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2009-11-14T20:34:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=3043#p3043</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=3043#p3043"/>
<title type="html"><![CDATA[Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=3043#p3043"><![CDATA[
que coincidencia, yo estaba (o estoy actualmente) desarrollando algunas funciones para imprimier caracteres en la pantalla usando pygame para una Engine en la que estoy trabajando. para hacer WarHacks :p (o un juego de guerra de hackers) llamado <span style="color: brown"><span style="font-weight: bold">Le Chocolat</span></span><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Nov 14, 2009 8:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ingemar]]></name></author>
<updated>2008-07-17T04:08:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1566#p1566</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1566#p1566"/>
<title type="html"><![CDATA[Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1566#p1566"><![CDATA[
muchas gracias<span style="font-weight: bold"> DVD</span>  ese ejemplo esta super fino sera que me lo puedes explicar linea por linea o decirme un enlace de donde yo pueda saber como hiciste todo eso que significa y todo...<br /><br />en resumen saber hacer todo ese codigo yo solo sabien lo que hago como hago que lee para poder aprender hacer eso <br /><br />GRACIAS POR TU AYUDA<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1911">ingemar</a> — Jue Jul 17, 2008 4:08 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-07-16T23:19:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1563#p1563</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1563#p1563"/>
<title type="html"><![CDATA[Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1563#p1563"><![CDATA[
Gracias Hugo por tu consejo, la verdad es que es un engorro tener que ir a descargarte una fuente para probar un ejemplo. Si lo hice de esa manera, es por desconocimiento de lo de la fuente predeterminada. En realidad, ahora me suena, pero no me acordaba (Tendría que repasarme un poco la documentación, al menos la parte de font que la tengo bastante descuidada).<br /><br />No me gusta editar los mensajes, pero, en esta ocasión, creo que es la mejor opción, por ser el cambio muy pequeño (una sola linea). Igualmente, la linea anterior no la borro, solo la comento.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Jul 16, 2008 11:19 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-07-16T16:22:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1557#p1557</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1557#p1557"/>
<title type="html"><![CDATA[Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1557#p1557"><![CDATA[
Me gusta, está muy interesante.<br /><br />Y como sugerencia, tal vez sea mas sencillo de probar si colocas<br />&quot;pygame.font.Font(None, 32)&quot; en la inicialización de la tipografía, <br />dado que usando &quot;None&quot; como primer parámetro pygame usa<br />una fuente predeterminada y eso no requiere de un archivo<br />.ttf en particular.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Jul 16, 2008 4:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-07-16T10:03:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1554#p1554</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1554#p1554"/>
<title type="html"><![CDATA[Escritura en pantalla (pygame)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=353&amp;p=1554#p1554"><![CDATA[
Este ejemplo tiene la función de escribir en pantalla lo que se pulsa en teclado. Algunas techas son excepciones ya que están asignadas a una función: Enter inserta un salto de línea, Retroceso borra el último carácter y Escape cierra el programa.<br />(*1) En el ejemplo se utiliza la fuente dejavu.ttf que se puede obtener del artículo sobre el menú de esta misma web. Aunque el tipo de fuente es lo de menos.<br /><br />El código está bajo la licencia GNU GPL v3 siendo yo el autor.<br /><dl class="codebox"><dt>Code: </dt><dd><code>import sys<br /><br />import pygame<br />from pygame import *<br /><br /><br />class Escritura&#40;&#41;:<br />    def __init__&#40;self&#41;:<br />        self.line = 0<br />        self.strings = &#91;'',&#93;<br />        #self.font = pygame.font.Font&#40;'dejavu.ttf', 12&#41; #&#40;*1&#41;<br />        self.font = pygame.font.Font&#40;None, 28&#41;<br />        <br />        self.dist = 20<br />        self.ipos_x = 50<br />        self.ipos_y = 50<br />        <br />    def update&#40;self, events&#41;:<br />        for event in events:<br />            if event.type == KEYDOWN:<br />                if event.key == K_RETURN:<br />                    self.strings.append&#40;''&#41;<br />                    self.line += 1<br />                elif event.key == K_ESCAPE:<br />                    sys.exit&#40;&#41;<br />                elif event.key == K_BACKSPACE:<br />                    if self.strings&#91;self.line&#93; == '' and self.line &gt; 0:<br />                        self.strings = self.strings&#91;0:-1&#93;<br />                        self.line -= 1<br />                    else:<br />                        self.strings&#91;self.line&#93; = self.strings&#91;self.line&#93;&#91;0:-1&#93;<br />                else:<br />                    self.strings&#91;self.line&#93; = str&#40;self.strings&#91;self.line&#93; + event.unicode&#41;<br />                    <br />    def draw&#40;self, screen&#41;:<br />        print self.strings<br />        screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br />        for line in range&#40;len&#40;self.strings&#41;&#41;:<br />            img_line = self.font.render&#40;self.strings&#91;line&#93;, 1, &#40;255, 255, 255&#41;&#41;<br />            screen.blit&#40;img_line, &#40;self.ipos_x, self.ipos_y + self.dist * line&#41;&#41;<br />            <br />def main&#40;&#41;:<br />    pygame.init&#40;&#41;<br />    screen = pygame.display.set_mode&#40;&#40;600, 600&#41;&#41;<br />    salir = False<br />    escritura = Escritura&#40;&#41;<br />    while salir == False:<br />        events = pygame.event.get&#40;&#41;<br />        for event in events:<br />            if event.type == QUIT:<br />                salir = True<br />        escritura.update&#40;events&#41;<br />        escritura.draw&#40;screen&#41;<br />        display.update&#40;&#41;<br /><br />if __name__ == '__main__': main&#40;&#41;</code></dd></dl><br /><br />Como siempre: acepto críticas y/o comentarios.<br />Saludos.<br /><br />Edit:<br />(*1)  Ver siguiente mensaje de hugoruscitti<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Jul 16, 2008 10:03 am</p><hr />
]]></content>
</entry>
</feed>