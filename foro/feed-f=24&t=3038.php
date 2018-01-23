<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=3038" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-11-07T21:32:30+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=3038</id>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-07T21:32:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9299#p9299</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9299#p9299"/>
<title type="html"><![CDATA[Re: Ayuda - Problema con mi juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9299#p9299"><![CDATA[
Hola, gracias por responder. Me sirvio de mucho tu respuesta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Jue Nov 07, 2013 9:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2013-11-07T08:34:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9297#p9297</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9297#p9297"/>
<title type="html"><![CDATA[Re: Ayuda - Problema con mi juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9297#p9297"><![CDATA[
Hola Natalia, bienvenida a la comunidad!<br /><br />En el sitio oficial de pilas-engine aparecen varios ejemplos en los que se emplean disparos. Echa un vistazo a la documentación que aparece aquí: <a href="http://pilas-engine.com.ar/docs.html" class="postlink">http://pilas-engine.com.ar/docs.html</a><br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Jue Nov 07, 2013 8:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Natalia]]></name></author>
<updated>2013-11-06T22:40:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9295#p9295</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9295#p9295"/>
<title type="html"><![CDATA[Ayuda - Problema con mi juego]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3038&amp;p=9295#p9295"><![CDATA[
Holis a todos! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  Resulta que tengo un codigo  (usando pilas) en el que intento que un personaje RPG (shooter) dispare, y tengo la textura del personaje a la que le agregue unos cuadros en el que aparece quieto y listo para disparar. Pero no se como agregarle en el codigo que dispare:<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br /><br />mapa = pilas.actores.MapaTiled&#40;&#39;mapas\mapa1.tmx&#39;&#41;<br /><br />class jugador&#40;pilas.actores.Actor&#41;:<br />    def __init__&#40;self&#41;:<br />        pilas.actores.Actor.__init__&#40;self&#41;<br />        <br />        #Aparicion del actor<br />        self.player=pilas.actores.personajes_rpg.Maton&#40;mapa&#41;<br />        <br />        #Carga de textura del actor<br />        self.player.imagen = pilas.imagenes.cargar_grilla&#40;&quot;tiles\player.png&quot;, 3,5&#41;<br /><br />        #Prueba:<br />        teclas = {pilas.simbolos.a: &#39;izquierda&#39;, pilas.simbolos.d: &#39;derecha&#39;,pilas.simbolos.n:&#39;disparo&#39;}<br />        self.player.mandos=pilas.control.Control&#40;pilas.escena_actual&#40;&#41;, teclas&#41;<br />        self.aprender&#40;pilas.habilidades.MoverseConElTeclado,control=self.player.mandos&#41;<br />        <br />        #Definicion del cuadro de textura del actor<br />        self.player.imagen.definir_cuadro&#40;4&#41;<br />        <br />        #Definicion de posicion del actor<br />        self.player.x=-872<br />        self.player.y=770<br />        <br />        #Habilidades del actor<br />        self.player.aprender&#40;pilas.habilidades.SiempreEnElCentro&#41;<br /><br />    def disparar&#40;self&#41;:<br />        pass<br />player=jugador&#40;&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br />Espero que puedan aydudarme, y gracias. Cualquier cosa doy mas detalles<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3148">Natalia</a> — Mié Nov 06, 2013 10:40 pm</p><hr />
]]></content>
</entry>
</feed>