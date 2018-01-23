<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=481" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-02-11T00:16:25+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=481</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-11T00:16:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2090#p2090</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2090#p2090"/>
<title type="html"><![CDATA[Problema con tileset]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2090#p2090"><![CDATA[
El problema que tengo es que estoy probando con animaciones y estoi probando aver como hacer para que cuando un soldadito atake a otro, este ultimo se caiga.<br />Las animaciones por separado ya las tengo, pero si hiciera un simple rectcollide, chocarían a mucha distancia entre si los muñecos, porque los rectangulos del tile son grandecitos en comparación con los muñecos.<br /><br />Gracias por la función, voy a probarla<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Feb 11, 2009 12:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-11T00:11:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2089#p2089</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2089#p2089"/>
<title type="html"><![CDATA[Problema con tileset]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2089#p2089"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Esto no tiene demasiado que ver con lo anterior, pero veo tonteria abrir nuevo tema para ello.<br /></div></blockquote><br />Yo creo que es mejor crear un nuevo tema porque así, a la hora de buscar información en el foro, es más fácil.<br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />Si yo hago una imagen con colorkey para solo ver al muñeco, si hago un image.get_rect()de esa imagen,toma como referencia todo(incluido sobre lo que he hecho colorkey), o solo toma los pixels con color??<br />En caso de que tome todo, ai alguna manera de conseguir que tome solo lo que yo kiero??<br /></div></blockquote>Bueno... la respuesta es bien sencilla, solo tienes dibujar varias imágenes y hacer un print rect.<br />Con el colorkey, simplemente le dices a pygame que color no quieres que se copie a la hora de hacer un blit, pero lo que es el mapa de bits, sigue intacto.<br /><br /><br /><blockquote><div><cite>Juanxo escribió:</cite><br />En caso de que tome todo, ai alguna manera de conseguir que tome solo lo que yo kiero??<br /></div></blockquote><br />Pues sinceramente, no se me ocurre ningún caso en el que sea necesario. ¿A ti sí?¿En qué consiste?<br />Igualmente he creado una función ya que me resultaba interesante el tema (nunca lo había tratado). Utilizo un algoritmo bastante lento aunque lo he conseguido optimizar un poco a base de escribir líneas.<br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame import *<br /><br />def diferentes&#40;color1, color2&#41;:<br />    for i in range&#40;3&#41;:<br />        if color1&#91;i&#93; != color2&#91;i&#93;:<br />            return True<br />    return False<br /><br />def minrect&#40;surface&#41;:<br />    colork = surface.get_colorkey&#40;&#41;<br />    array = pygame.surfarray.pixels3d&#40;surface&#41;<br /><br />    encontrado = False<br />    i1 = 0<br />    while not encontrado and i1 &lt; len&#40;array&#41;:<br />        j1 = 0<br />        while not encontrado and j1 &lt; len&#40;array&#91;0&#93;&#41;:<br />            if &#40;diferentes&#40;array&#91;i1&#93;&#91;j1&#93;, colork&#41;&#41;:<br />                encontrado = True<br />            else:<br />                j1 += 1<br />        if not encontrado:<br />             i1 += 1<br />    if not encontrado:<br />        return pygame.Rect&#40;&#40;0,0,0,0&#41;&#41;<br /><br />    encontrado = False<br />    i2 = len&#40;array&#41;-1<br />    while not encontrado and i2 &gt; 0:<br />        j2 = 0<br />        while not encontrado and j2 &lt; len&#40;array&#91;0&#93;&#41;:<br />            if &#40;diferentes&#40;array&#91;i2&#93;&#91;j2&#93;, colork&#41;&#41;:<br />                encontrado = True<br />            else:<br />                j2 += 1<br />        if &#40;not encontrado&#41;:<br />             i2 -= 1<br /><br />    encontrado = False<br />    j3 = 0<br />    while not encontrado and j3 &lt; len&#40;array&#91;0&#93;&#41;:<br />        i3 = i1<br />        while not encontrado and i3 &lt;= i2:<br />            if &#40;diferentes&#40;array&#91;i3&#93;&#91;j3&#93;, colork&#41;&#41;:<br />                encontrado = True<br />            else:<br />                i3 += 1<br />        if &#40;not encontrado&#41;:<br />             j3 += 1<br /><br />    encontrado = False<br />    j4 = len&#40;array&#91;0&#93;&#41;-1<br />    while not encontrado and j4 &gt; 0:<br />        i4 = i1<br />        while not encontrado and i4 &lt;= i2:<br />            if &#40;diferentes&#40;array&#91;i4&#93;&#91;j4&#93;, colork&#41;&#41;:<br />                encontrado = True<br />            else:<br />                i4 += 1<br />        if &#40;not encontrado&#41;:<br />             j4 -= 1<br /><br />    return pygame.Rect&#40;i1, j3, i2-i1+1, j4-j3+1&#41;<br /><br />def main&#40;&#41;:<br />    image = pygame.Surface&#40;&#40;30,30&#41;&#41;<br />    image.fill&#40;&#40;255,255,0&#41;&#41;<br />    image.fill&#40;&#40;255,0,0&#41;, &#40;10,11,12,13&#41;&#41;<br />    #image.fill&#40;&#40;255,0,0&#41;, &#40;10,11,1,2&#41;&#41;<br />    image.set_colorkey&#40;&#40;255,255,0&#41;&#41;<br />    rect = minrect&#40;image&#41;<br />    print rect<br /><br />if __name__ == '__main__':<br />    main&#40;&#41;<br /></code></dd></dl><br /><br />Al ser un tema que no había tratado, y que me he complicado un poco con el algoritmo, es probable que haya errores. Avisar si notáis algo raro.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Feb 11, 2009 12:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-10T14:56:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2086#p2086</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2086#p2086"/>
<title type="html"><![CDATA[Problema con tileset]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2086#p2086"><![CDATA[
Esto no tiene demasiado que ver con lo anterior, pero veo tonteria abrir nuevo tema para ello.<br />Si yo hago una imagen con colorkey para solo ver al muñeco, si hago un image.get_rect()de esa imagen,toma como referencia todo(incluido sobre lo que he hecho colorkey), o solo toma los pixels con color??<br />En caso de que tome todo, ai alguna manera de conseguir que tome solo lo que yo kiero??<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Feb 10, 2009 2:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-10T12:07:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2084#p2084</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2084#p2084"/>
<title type="html"><![CDATA[Problema con tileset]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2084#p2084"><![CDATA[
Tio,Endaramiz, te debo una(más bien unas cuantas).No me hace falta ningún ejemplo, ya lo conseguí.El problema es que yo miraba la doc de rect e image, no sabía que se modificaba al imprimir<br /><br />Gracias<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Feb 10, 2009 12:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-10T11:56:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2083#p2083</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2083#p2083"/>
<title type="html"><![CDATA[Re: Problema con tileset]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2083#p2083"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />Buenas!!<br />Estoy tratando de aprender ha hacer algo de animaciones con tiles en python-pygame. Para ello tngo un tileset(o grilla como dice hugo), pero no consigo recortar el cuadrado que quiero, sino que solo mueve la imagen entera.He estado mirando por ahí pero no encontre nada.Si alguno tiene algo de código para hacer este tipo de cosas os agradecería que me lo postearais.<br /><br />Gracias<br /><br />PD:ya mire el artículo de hugo en la sección referencias, pero no se como hacerlo en python<br /></div></blockquote><br />Como pygame está basado en SDL, es bastante parecido. Ahora no tengo tiempo para hacer un ejemplo.<br />La clave para resolver el problema se encuentra en el tercer parámetro del blit (source area). Que es el rectángulo que representa el tile que quieres mostrar del tileset.<br /><br /><!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/traducciones/pygame/surface#blit">http://www.losersjuegos.com.ar/traducci ... rface#blit</a><!-- m --><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Feb 10, 2009 11:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-02-10T11:06:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2081#p2081</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2081#p2081"/>
<title type="html"><![CDATA[Problema con tileset]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=481&amp;p=2081#p2081"><![CDATA[
Buenas!!<br />Estoy tratando de aprender ha hacer algo de animaciones con tiles en python-pygame. Para ello tngo un tileset(o grilla como dice hugo), pero no consigo recortar el cuadrado que quiero, sino que solo mueve la imagen entera.He estado mirando por ahí pero no encontre nada.Si alguno tiene algo de código para hacer este tipo de cosas os agradecería que me lo postearais.<br /><br />Gracias<br /><br />PD:ya mire el artículo de hugo en la sección referencias, pero no se como hacerlo en python<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Feb 10, 2009 11:06 am</p><hr />
]]></content>
</entry>
</feed>