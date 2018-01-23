<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1082" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-03-17T22:39:10+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1082</id>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-03-17T22:39:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5269#p5269</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5269#p5269"/>
<title type="html"><![CDATA[Re: Nave no dispara en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5269#p5269"><![CDATA[
tienes montado algo bastante raro en mi opinión:<br /><br />cuando pulsas espacio, posicionas la bala( que por cierto, siempre es la misma) y luego haces un while hasta que salga de la pantalla. Pero ten en cuenta que hasta que no salga de la pantalla, va a quedarse estancado ahí, haciendo el blit (pero no el pygame.display.flip() que hace que se redibuje la pantalla) . Unicamente saldrá de ese bucle cuando la bala haya salido de la pantalla, por eso seguramente no la ves.<br /><br />En la sección de ejemplos de la web hay un space invaders que hice con ayuda de hugo, y creo que rafa tenía otro juego similar en algún post del foro<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Mar 17, 2011 10:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-03-17T21:48:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5266#p5266</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5266#p5266"/>
<title type="html"><![CDATA[Re: Nave no dispara en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5266#p5266"><![CDATA[
podrías dejar un fichero comprimido (en el formato que mas te venga en gana,<span style="font-weight: bold"> menos en rar please</span>!) para poder correr el juego y mirar que sucede? yo soy mas de probar y luego de leer código que solo de leer... aunque ya te digo que la bala no ira a ningún lado si solo le sumas la posición X y Y de la nave mas 70 px una sola vez :-/, deberías de encerrarlo en un bucle <span style="font-weight: bold">while</span> y hasta que alcance cierta distancia o tiempo (como mas desees) haga desaparecer la bala o deje de moverla.<br /><br />al menos eso es lo que me viene a la cabeza sin poder correr el juego (me hace falta las imágenes del mismo).<br /><br />saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Jue Mar 17, 2011 9:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[SirArDheL]]></name></author>
<updated>2011-03-16T01:41:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5253#p5253</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5253#p5253"/>
<title type="html"><![CDATA[Nave no dispara en Pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1082&amp;p=5253#p5253"><![CDATA[
Bueno después de tanto buscar ejemplos y tutoriales por todos lados, no he podido encontrar una solución al problema que tengo. No consigo hacer que mi nave dispare. Este es el código:<br /><pre class="prettyprint"># Modulos<br />import pygame<br />from pygame.locals import*<br />import sys<br /><br /># Constantes<br />WIDTH = 640<br />HEIGHT = 480<br /><br /># Clases<br /># ---------------------------------------------------------------------<br />class Bala:<br />    def __init__&#40;self, xBala, yBala&#41;:<br />        self.xBala = xBala<br />        self.yBala = yBala<br />    <br />    def disparar&#40;self&#41;:<br />        self.yBala -= 1<br />        return self.yBala<br /><br /># ---------------------------------------------------------------------<br /><br /># Funciones<br /># ---------------------------------------------------------------------<br /><br />def cargarImagen&#40;nombreArchivo, transparente=False&#41;:<br />    try: imagen = pygame.image.load&#40;nombreArchivo&#41;<br />    except pygame.error, message:<br />        raise SystemExit, message<br />    imagen = imagen.convert&#40;&#41;<br />    if transparente:<br />        color = imagen.get_at&#40;&#40;0,0&#41;&#41;<br />        imagen.set_colorkey&#40;color, RLEACCEL&#41;<br />    return imagen<br /><br /># ---------------------------------------------------------------------<br /><br />def main&#40;&#41;:<br />    screen = pygame.display.set_mode&#40;&#40;WIDTH, HEIGHT&#41;&#41;<br />    pygame.display.set_caption&#40;&quot;Aviones&quot;&#41;<br /><br />    miBala = Bala&#40;0, 0&#41;<br /><br />    imagenFondo = cargarImagen&#40;&#39;imagenes/fondo.jpg&#39;&#41;<br />    naveSprite = cargarImagen&#40;&#39;imagenes/nave.bmp&#39;, True&#41;<br />    naveRect = naveSprite.get_rect&#40;&#41;<br />    yNave = 400<br />    xNave = 320<br />    balaSprite = cargarImagen&#40;&#39;imagenes/bala.bmp&#39;, True&#41;<br /><br />    while True:<br />        for eventos in pygame.event.get&#40;&#41;:<br />            if eventos.type == QUIT:<br />                sys.exit&#40;&#41;<br />        <br />        teclaPres = pygame.key.get_pressed&#40;&#41;<br />        <br />        if teclaPres[K_UP]:<br />            yNave -= 1<br /><br />        if teclaPres[K_DOWN]:<br />            yNave += 1<br /><br />        if teclaPres[K_LEFT]:<br />            xNave -= 1<br /><br />        if teclaPres[K_RIGHT]:<br />            xNave += 1<br /><br />        if teclaPres[K_SPACE]:<br />            miBala.xBala = xNave+70<br />            miBala.yBala = yNave+70<br />            while miBala.yBala &gt; 0:<br />                screen.blit&#40;balaSprite, &#40;miBala.xBala, miBala.disparar&#40;&#41;&#41;&#41;<br />                <br />            <br /><br />        screen.blit&#40;imagenFondo, &#40;0, 0&#41;&#41;<br />        screen.blit&#40;naveSprite, &#40;xNave, yNave&#41;&#41;<br />        pygame.display.flip&#40;&#41;<br />    return 0<br /> <br />if __name__ == &#39;__main__&#39;:<br />    pygame.init&#40;&#41;<br />    main&#40;&#41;</pre><br /><br />El problema que tengo está en esta parte:<pre class="prettyprint">if teclaPres[K_SPACE]:<br />            miBala.xBala = xNave+70<br />            miBala.yBala = yNave+70<br />            while miBala.yBala &gt; 0:<br />                screen.blit&#40;balaSprite, &#40;miBala.xBala, miBala.disparar&#40;&#41;&#41;&#41;</pre><br /> He probado distintas formas de implementarlo, de hecho tengo varias versiones del mismo código, pero no consigo hacer que funcione. Si alguien pudiese darme una mano estaría muy agradecido. Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2398">SirArDheL</a> — Mié Mar 16, 2011 1:41 am</p><hr />
]]></content>
</entry>
</feed>