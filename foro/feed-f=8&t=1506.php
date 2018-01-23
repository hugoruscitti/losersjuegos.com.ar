<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1506" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-05T17:59:04+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=1506</id>
<entry>
<author><name><![CDATA[ROBERWEB]]></name></author>
<updated>2012-07-05T17:59:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1506&amp;p=6892#p6892</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1506&amp;p=6892#p6892"/>
<title type="html"><![CDATA[EVENTOS EN PYGAME:]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1506&amp;p=6892#p6892"><![CDATA[
Os voy a poner algunos elemplos de eventos, por ejemplo las teclas:<br />1º/Primero hay que decirle a pygame que vamos a pulsar alguna tecla:<br /><br /><pre class="prettyprint">for event in pygame.event.get&#40;&#41;:<br />    if event.type == pygame.QUIT:<br />sys.exit&#40;&#41;<br />    elif event.type == pygame.KEYDOWN:</pre><br />2º/Hay que decirle que tecla o teclas quieres que pulse:<br /><br /><pre class="prettyprint">if event.key == pygame.K_a:<br />                print &quot;Has pulsado la tecla a&quot;<br />    if event.key == pygame.K_b:<br />        print &quot;Has pulsado la tecla b&quot;<br />    if event.key == pygame.K_c:<br />print &quot;Has pulsado la tecla c&quot;<br />    if event.key == pygame.K_d:<br />                print &quot;Has pulsado la tecla d&quot;</pre><br /><br />3º/Hay muchos más ejemplos en:<br /><!-- m --><a class="postlink" href="http://www.pygame.org/docs/ref/key.html">http://www.pygame.org/docs/ref/key.html</a><!-- m --><br /><br />Mi blog es:<br /><!-- m --><a class="postlink" href="http://roberweb.wordpress.com/">http://roberweb.wordpress.com/</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2627">ROBERWEB</a> — Jue Jul 05, 2012 5:59 pm</p><hr />
]]></content>
</entry>
</feed>