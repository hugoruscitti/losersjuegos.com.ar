<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=810" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-08-02T15:22:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=810</id>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-02T15:22:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=810&amp;p=3636#p3636</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=810&amp;p=3636#p3636"/>
<title type="html"><![CDATA[Re: [pygame] Problemas con Group]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=810&amp;p=3636#p3636"><![CDATA[
Nada, solucionado. Un fallo en el constructor:<br /><br />def __init(self, map, f, c):<br /><br />falta los __ de cierre.<br /><br />Pueden cerrar esto.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Lun Ago 02, 2010 3:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adrigm77]]></name></author>
<updated>2010-08-02T15:07:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=810&amp;p=3635#p3635</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=810&amp;p=3635#p3635"/>
<title type="html"><![CDATA[[pygame] Problemas con Group]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=810&amp;p=3635#p3635"><![CDATA[
Estoy tratando de añadir un Sprite a un Grupo de pygame, pero me da el siguiente error:<br /><dl class="codebox"><dt>Code: </dt><dd><code>Traceback (most recent call last):<br />  File &quot;C:\Users\Adrian\Desktop\pyIA\src\main.py&quot;, line 17, in &lt;module&gt;<br />    main()<br />  File &quot;C:\Users\Adrian\Desktop\pyIA\src\main.py&quot;, line 11, in main<br />    scene = scene_game.SceneGame(dir)<br />  File &quot;C:\Users\Adrian\Desktop\pyIA\src\scene_game.py&quot;, line 24, in __init__<br />    self.containers = containers.Containers(self.map)<br />  File &quot;C:\Users\Adrian\Desktop\pyIA\src\containers.py&quot;, line 21, in __init__<br />    sp = sp_wall.Wall(map, 0, 0)<br />  File &quot;c:\Python26\lib\site-packages\pygame\sprite.py&quot;, line 114, in __init__<br />    if groups: self.add(groups)<br />  File &quot;c:\Python26\lib\site-packages\pygame\sprite.py&quot;, line 129, in add<br />    else: self.add(*group)<br />  File &quot;c:\Python26\lib\site-packages\pygame\sprite.py&quot;, line 129, in add<br />    else: self.add(*group)<br />TypeError: add() argument after * must be a sequence, not instance<br /></code></dd></dl><br /><br />EL código relevante es el siguiente:<br /><dl class="codebox"><dt>Code: </dt><dd><code># El Sprite, como ven hereda de Sprite y demas:<br />class Wall(pygame.sprite.Sprite):<br />    &quot;&quot;&quot;Sprite que representa a una pared solida en el juego&quot;&quot;&quot;<br />    def __init(self, map, f, c):<br />         pygame.sprite.Sprite.__init__(self)<br />         self.fil = f<br />         self.col = c<br />         self.image = map.tileset&#91;3&#93;<br />         self.rect = self.image.get_rect()<br />         self.rect.top = f*16<br />         self.rect.left = c*16<br /><br /># Ahora creo la clase container:<br /><br />class Containers():<br />    &quot;&quot;&quot;Crea diferentes containers para los Sprites&quot;&quot;&quot;<br />    def __init__(self, map):<br />        self.extras = pygame.sprite.Group()<br />        self.walls = pygame.sprite.Group() # Creo un grupo<br /><br />        sp = sp_wall.Wall(map, 0, 0) # Creo un sprite<br />        self.walls.add(sp) # se lo añado al grupo<br />        print self.walls.sprites()</code></dd></dl><br /><br />¿Alguna idea?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2296">adrigm77</a> — Lun Ago 02, 2010 3:07 pm</p><hr />
]]></content>
</entry>
</feed>