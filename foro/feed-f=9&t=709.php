<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=709" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-04-11T21:56:49+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=709</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2010-04-11T21:56:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3330#p3330</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3330#p3330"/>
<title type="html"><![CDATA[Varias dudas sobre pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3330#p3330"><![CDATA[
<blockquote class="uncited"><div><br />3)¿Cómo trabajar con los distintos mapas del juego? (¿Guardan cada uno en un módulo diferente?)<br /><br />4)¿Cómo &quot;teletransportar&quot; al persona a otra pantalla del juego?<br /></div></blockquote><br /><br />3) no hace falta que escribas un mapa diferente en un modulo diferente, o todos en un mismo modulo. puedes guardar la informacion de un mapa como un archivo de texto, utilizando codigos como &quot;a01 a05 b04&quot; por ejemplo para indicar el tipo de title que debe ser usado para el escenario/mapa<br /><br />4) si te referis con digamos, que el personaje suba a un avion y luego aparesca en una playa paradisiaca. pues solo usa tu imaginacion ;D, cuando suba al avion pinta una sexy cortinita negra que poco a poco no deje ver nada en la pantalla del juego y luego haz que tu juego ponga el clasico &quot;Now Loading...&quot; mientras lees el mapa de la playa paradisiaca y cuando todos los recursos estan cargados en sus respectivas variables/referencias bliteas el mapa, el personaje y los NPC mientras quitas la sexy cortinita negra ;D.<br />teletransportar no existe, existe Now Loading..., pero si te referis con cambiar su posicion en el mapa, pues solo modifica sus coordenadas X y Y y que la camara lo siga.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Abr 11, 2010 9:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-04-05T00:02:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3318#p3318</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3318#p3318"/>
<title type="html"><![CDATA[Varias dudas sobre pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3318#p3318"><![CDATA[
1) Con OpenGL sería más fácil manejar este tipo de cosas, aunque si comenzáis no te lo aconsejo. Así pues, solo se me ocurren dos alternativas. La primera, que creo que no es bien bien lo que queríais, es que el juego solo funcione en fullscreen ya que de este modo se reescalará al tamaño de la pantalla. La segunda es que tengáis las mimas imágenes guardadas en diferentes resoluciones y que luego trabajéis en los cálculos del juego con unas coordenadas imaginarias que habría que convertir, dependiendo de la resolución, a la hora de dibujar en pantalla.<br /><br />2) La idea sería tener una imagen gigante y con el blit seleccionar el rectángulo apropiado. Para ver como hacer una cámara que se mueve, puedes mirar el ejemplo de RPG.<br /><br />3, 4) Dependen mucho de la estructura del juego y el tema ese habría que pensarlo durante días antes de ponerse a programar.<br /><br />5) Hay que programarla &quot;a pelo&quot;, pero podrías reaprovechar código. Por ejemplo, en el ejemplo de plataformas, hay un módulo encargado de eso, podrías mirarlo a ver si sacas ideas.<br /><br />6) El módulo está traducido en esta web. En la documentación oficial, puedes encontrar muchos ejemplos en los comentarios. <br /><!-- m --><a class="postlink" href="http://www.pygame.org/docs/ref/mouse.html#pygame.mouse.get_pos">http://www.pygame.org/docs/ref/mouse.ht ... se.get_pos</a><!-- m --><br /><br />Espero haberte orientado un poco, si al mirarte lo que te he comentado te surgen nuevas dudas más concretas, pregunta de nuevo a ver si entre todos conseguimos ayudarte.<br /><br />Saludos y suerte con tus dos aventuras.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Abr 05, 2010 12:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lienard]]></name></author>
<updated>2010-03-30T11:43:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3312#p3312</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3312#p3312"/>
<title type="html"><![CDATA[Varias dudas sobre pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=709&amp;p=3312#p3312"><![CDATA[
Hola, al final he empezado a adrentarme en el mundo de pygame, he reunido un pequeño grupo de personas y vamos a intentar desarrollar una aventura gráfica (que creo que es algo bastante sencillo para comenzar).<br /><br />Bueno, he buscado por internet, me he mirando un par de tutoriales y más o menos voy pillando como funciona el pygame pero tengo bastantes dudas de como hacer funcionar cierto tipos de cosas que a continuación plantearé, espero que me puedan ayudar.<br /><br />1)¿Cómo ajustar las imágenes al tamaño de la pantalla si ésta la usamos de forma dinámica para proporcionar al usuario varios tamaños?<br /><br />2)¿Cómo (respetando lo anterior) podemos implementar un fondo el cual el largo se saldrá de la pantalla y queremos que al mover (por ejemplo, hacia la derecha) se mueva la pantalla con el jugador?<br /><br />3)¿Cómo trabajar con los distintos mapas del juego? (¿Guardan cada uno en un módulo diferente?)<br /><br />4)¿Cómo &quot;teletransportar&quot; al persona a otra pantalla del juego?<br /><br />5)¿Hay alguna manera de dotar de animación al personaje cuando camina de una manera rápida con alguna función de pygame o hay que hacerlo &quot;a pelo&quot;?<br /><br />6)Por último, ¿algún consejo sobre como usar el módulo &quot;mouse&quot; de pygame?<br /><br />¡Saludos y gracias!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2166">lienard</a> — Mar Mar 30, 2010 11:43 am</p><hr />
]]></content>
</entry>
</feed>