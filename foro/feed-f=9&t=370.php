<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=370" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-07T05:33:07+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=370</id>
<entry>
<author><name><![CDATA[GsusKrist]]></name></author>
<updated>2008-09-07T05:33:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1639#p1639</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1639#p1639"/>
<title type="html"><![CDATA[Como logro organizar los sonidos en mi juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1639#p1639"><![CDATA[
Gracias por la ayuda, en especial por responder tan pronto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />   <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1973">GsusKrist</a> — Dom Sep 07, 2008 5:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-09-06T23:03:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1638#p1638</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1638#p1638"/>
<title type="html"><![CDATA[Re: Como logro organizar los sonidos en mi juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1638#p1638"><![CDATA[
<blockquote><div><cite>GsusKrist escribió:</cite><br /><dl class="codebox"><dt>Code: </dt><dd><code>  music = load_sound&#40;'background.wav'&#41;.play&#40;-1&#41;<br />shootsound = load_sound&#40;'Disparo.wav'&#41;<br />exp1 = load_sound&#40;'explosion.wav'&#41;<br />exp2 = load_sound&#40;'alien die2.wav'&#41;<br />exp3 = load_sound&#40;'boss die.wav'&#41;<br />exp3.set_volume&#40;0.6&#41;<br />start = load_sound&#40;'Inicio.wav'&#41;<br />start.set_volume&#40;0.6&#41;<br />start.play&#40;&#41;<br /></code></dd></dl><br /></div></blockquote><br /><br />por lo que veo, en la primer linea además de cargar<br />el sonido &quot;background.wav&quot; estás escribiendo &quot;play(-1)&quot;. Esa<br />función es la que comienza a reproducir el sonido, deberías<br />eliminar esa llamada.<br /><br />Igualmente, recuerda que pygame tiene un módulo especial<br />para gestionar música. Está definido en la siguiente página:<br /><br />   <!-- m --><a class="postlink" href="http://www.pygame.org/docs/ref/music.html">http://www.pygame.org/docs/ref/music.html</a><!-- m --><br /><br /><blockquote><div><cite>GsusKrist escribió:</cite><br />PD: si alguien puede y desea ayudarme (pues tengo otra inquietud) le agradezco de antemano por el interes prestado a esta misiva.<br />No obstante quisiera enviarle el codigo completo a kien desee ayudarme para comprenda a cavalidad lo que estoy preguntando.<br /></div></blockquote><br /><br />Sí, este foro es precisamente para ello, nos gusta ayudar y ver<br />que mas personas se animan a construir videojuegos.<br /><br />Si tienes otra consulta recuerda crear un nuevo mensaje, con<br />un título descriptivo así resulta mas sencillo explorar todo el<br />foro completo.<br /><br />Ah, y generalmente no ayuda mucho ver todo el código<br />completo, es mas fácil si nos planteas una consulta puntual<br />con un extracto pequeño de código, como has hecho aquí.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Sab Sep 06, 2008 11:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[GsusKrist]]></name></author>
<updated>2008-09-06T12:35:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1636#p1636</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1636#p1636"/>
<title type="html"><![CDATA[Como logro organizar los sonidos en mi juego?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=370&amp;p=1636#p1636"><![CDATA[
hola espero que se encuentren bien.<br />Hace un tiempo decidí realizar mi propia version de un juego de naves espaciales para comenzar en esto de la programacion de videojuegos (en especial sobre pyton y pygame).<br />He logrado aprender mucho lellendo la documentacion en pygame.org y analizando algunos codigos de ejemplos que he visto en esta pagina, el problema o la inquietud que tengo es la siguiente:<br />¿como logro hacer ke el sonido de fondo (background) del juego comienze ha sonar solo despues de 4 segundos de iniciar la partida? o sea de haver elejido en el menu de inicio del juego : &quot;jugar nuevo partida&quot;, pues en mi juego el sonido de fondo comienza junto con la aplicacion <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> <br />por ejemplo: en este fragmento cargo los sonidos ke usaré:<br /><dl class="codebox"><dt>Code: </dt><dd><code>class SONIDO:<br />    def play&#40;self&#41;: pass<br /><br />def load_sound&#40;file&#41;:<br />    if not pygame.mixer: return SONIDO&#40;&#41;<br />    file = os.path.join&#40;'data', 'sonido', file&#41;<br />    try:<br />        sound = pygame.mixer.Sound&#40;file&#41;<br />        return sound<br />    except pygame.error:<br />        print 'Precaucion, no se puede leer el audio,', file<br />    return SONIDO&#40;&#41;</code></dd></dl><br />Luego akí hago el llamado a la función:  <br /><dl class="codebox"><dt>Code: </dt><dd><code>  music = load_sound&#40;'background.wav'&#41;.play&#40;-1&#41;<br />    shootsound = load_sound&#40;'Disparo.wav'&#41;<br />    exp1 = load_sound&#40;'explosion.wav'&#41;<br />    exp2 = load_sound&#40;'alien die2.wav'&#41;<br />    exp3 = load_sound&#40;'boss die.wav'&#41;<br />    exp3.set_volume&#40;0.6&#41;<br />    start = load_sound&#40;'Inicio.wav'&#41;<br />    start.set_volume&#40;0.6&#41;<br />    start.play&#40;&#41;<br /></code></dd></dl><br /><br />en este otro fragmento ejecuto el sonido al iniciar el juego o la partida:<br /><dl class="codebox"><dt>Code: </dt><dd><code> if event.type == KEYDOWN and event.key == K_RETURN and LEVEL == 0:<br />            start.stop&#40;&#41;<br />            if MENU_OPTION == 1:<br />                init_level&#40;&#41;<br />                LEVEL = 1<br />                player = Ship&#40;&#41;<br />                LIVES = 4<br />                SCORE = 0<br />            if MENU_OPTION == 0:<br />                music.stop&#40;&#41;<br />                break<br /></code></dd></dl><br /><br />PD: si alguien puede y desea ayudarme (pues tengo otra inquietud) le agradezco de antemano por el interes prestado a esta misiva.<br />No obstante quisiera enviarle el codigo completo a kien desee ayudarme para comprenda a cavalidad lo que estoy preguntando.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1973">GsusKrist</a> — Sab Sep 06, 2008 12:35 pm</p><hr />
]]></content>
</entry>
</feed>