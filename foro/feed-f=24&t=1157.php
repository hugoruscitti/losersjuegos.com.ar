<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1157" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-07-20T22:03:39+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1157</id>
<entry>
<author><name><![CDATA[cosarara97]]></name></author>
<updated>2011-07-20T22:03:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5738#p5738</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5738#p5738"/>
<title type="html"><![CDATA[Re: tiempo en juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5738#p5738"><![CDATA[
Pues a mi también me ha ayudado, porque en el juego asteroides, en el archivo escena_juego.py pone &quot;pilas.mundo.agregar_tarea&quot; en lugar de &quot;pilas.mundo.agregar_tarea_<span style="font-weight: bold">siempre</span>&quot;, cosa que hace que el juego no empiece  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> , pero lo he cambiado por &quot;pilas.mundo.agregar_tarea_siempre&quot; y ya funciona <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> (Aunque con tantos asteroides en pantalla al final empieza a quedarse pillado...)<br /><br />Así que... Muchas gracias!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2469">cosarara97</a> — Mié Jul 20, 2011 10:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-26T20:39:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5583#p5583</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5583#p5583"/>
<title type="html"><![CDATA[Re: tiempo en juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5583#p5583"><![CDATA[
Hola Buenas Tardes!!!<br /><br />muchisimas gracias!!!!!<br /><br /><br />me sirvió bastante!! thanks por la  idea!!!<br /><br />que tengas un buen día!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Jue May 26, 2011 8:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-05-25T23:42:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5577#p5577</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5577#p5577"/>
<title type="html"><![CDATA[Re: tiempo en juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5577#p5577"><![CDATA[
Que Tal!,<br /><br />Mira una alternativa es dentro de la llamada que se ejecuta cada 1 segundo (el método <span style="color: #FF0000">&quot;avanzar_un_segundo()&quot;</span>)<br />tu puedes colocar una variable que controle el estado del cronometro, si esta variable esta encendida (en 1) entonces incrementa la variable <span style="font-weight: bold">tiempo</span> y si esta en 0 no hace nada. Así puedes controlar el tiempo de mejor manera y enviar mensajes según el tiempo que quieras, ya que si llega a un tiempo límite puedes dejar la variable que controla el estado en 0 y quedara pausado.<br /><br />Aquí el codigo:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />tiempo = 0<br />cronometro_on = 1<br /><br />limite_tiempo = 10<br /><br />cronometro = pilas.actores.Texto&#40;str&#40;tiempo&#41;&#41;<br /><br /><br /><br />def pausar_cronometro&#40;&#41;:<br />    global cronometro_on<br />    cronometro_on = 0<br /><br />def reaunudar_cronometro&#40;&#41;:<br />    global cronometro_on<br />    cronometro_on = 1<br /><br />def reiniciar_cronometro&#40;&#41;:<br />    global tiempo<br />    tiempo = 1<br />    cronometro.texto = str&#40;tiempo&#41;<br /><br /><br /><br />def avanzar_un_segundo&#40;&#41;:<br />    global tiempo<br />    global limite_tiempo<br />    <br />    if cronometro_on == 1:<br />        tiempo += 1<br />        cronometro.texto = str&#40;tiempo&#41;<br />        <br />    <br />    if tiempo == limite_tiempo:<br />        pausar_cronometro&#40;&#41;<br />        pilas.avisar&#40;&quot;se te acabo el tiempo !&quot;&#41;<br />    <br />    <br /><br />pilas.mundo.agregar_tarea_siempre&#40;1, avanzar_un_segundo&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br /><br />Espero que te sirva.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mié May 25, 2011 11:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-25T19:21:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5575#p5575</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5575#p5575"/>
<title type="html"><![CDATA[Re: tiempo en juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5575#p5575"><![CDATA[
<span style="font-weight: bold">Hola Pchack</span><br /><br />muchas gracias por tu ayuda!!!!<br /><br />peeero tengo una duda; como hago si en cierto momento quiero que se detenga, y diga: &quot;se te acabo el tiempo&quot; por ejemplo ???<br /><br />gracias de antemano!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mié May 25, 2011 7:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-05-23T03:21:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5568#p5568</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5568#p5568"/>
<title type="html"><![CDATA[Re: tiempo en juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5568#p5568"><![CDATA[
Saludos,<br />Que tal! je je je no soy Hugo, pero tratare de responder tu pregunta.<br /><br />Pilas no tiene un cronómetro pero si lo puedes hacer tu, <br />existe en pilas un método:<br /><br /><pre class="prettyprint">pilas.mundo.agregar_tarea_siempre&#40;1, metodo_a_ejecutar&#41;</pre><br /><br />Esta línea lo que hace es ejecutar el método &quot;metodo_a_ejecutar&quot; cada 1 segundo (se pude modificar ese tiempo, ejemplo para que se ejecute cada 2, 3, 100 segundo, etc.).<br /><br />Esto te serviría para controlar el tiempo. Ejemplo cuando inicias la aplicación creas un contador que se sume 1 por cada segundo y sabrías cuanto tiempo lleva ejecutada tu aplicación.<br /><br />Aquí te doy una demostración con un texto que cada 1 segundo se cambia, sumándole 1 cada vez.<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />tiempo = 0<br /><br />cronometro = pilas.actores.Texto&#40;str&#40;tiempo&#41;&#41;<br /><br />def avanzar_un_segundo&#40;&#41;:<br />    global tiempo<br />    tiempo += 1<br />    cronometro.texto = str&#40;tiempo&#41;<br />    <br /><br />pilas.mundo.agregar_tarea_siempre&#40;1, avanzar_un_segundo&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Eso seria, espero que te sea útil la respuesta.<br /><br />Y como dice Hugo.<br /><br />Salute.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Lun May 23, 2011 3:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-22T22:11:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5566#p5566</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5566#p5566"/>
<title type="html"><![CDATA[tiempo en juegos]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1157&amp;p=5566#p5566"><![CDATA[
<span style="font-weight: bold">Buenas Tardes Hugo!!</span><br /><br />Te escribo para saber si pilas tiene algún componente para trabajar con TIEMPO en juegos. como un cronómetro.. si me entiendes?<br /><br />Avísame por favor!<br /><br /><span style="font-style: italic">pd: recuerda colocar lo de las grillas con varias filas y varias columnas, en el manual....</span> <br /><br />Saludos!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Dom May 22, 2011 10:11 pm</p><hr />
]]></content>
</entry>
</feed>