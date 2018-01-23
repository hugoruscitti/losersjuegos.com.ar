<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1116" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-18T17:38:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1116</id>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-04-18T17:38:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5415#p5415</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5415#p5415"/>
<title type="html"><![CDATA[Re: Consulta - Por ultima vez y me arreglo solo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5415#p5415"><![CDATA[
Excelente Hugo Gracias!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Lun Abr 18, 2011 5:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-04-18T14:13:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5414#p5414</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5414#p5414"/>
<title type="html"><![CDATA[Re: Consulta - Por ultima vez y me arreglo solo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5414#p5414"><![CDATA[
Hola lucas, antetodo por favor no te preocupes                                                                   <br />por consultar, el foro es para eso... y los que<br />visitamos el foro queremos ver mas y mas preguntas<br />para ayudar.<br /><br />Con respecto al ejemplo que colocaste, yo lo haría<br />un poquito diferente, si lo que quieres es hacer<br />que el actor pelota reaccione ante el click del mouse, podrías<br />modificar la función que se ejecuta al pulsar un click. No<br />hace falta la otra función.<br /><br />Por ejemplo, la lógica sería así: si detecto un click del mouse<br />en la pantalla, veo si está justo sobre la pelota, y si lo está, la<br />elimino.<br /><br />Modifiqué un poquito tu código para mostrar una<br />manera distinta de hacerlo:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />class Winbola&#40;pilas.actores.Actor&#41;:<br />    def __init__&#40;self, x=0, y=0&#41;:<br />        pilas.actores.Actor.__init__&#40;self, &quot;pelota.png&quot;, x, y&#41;<br />        self.y = 200<br />        <br />    def cuando_la_seleccionan&#40;self&#41;:<br />        print &quot;Me han seleccionado, a desaparecer...&quot;<br />        self.escala = [0]<br /><br />class Mira&#40;pilas.actores.Actor&#41;:<br /><br />    def __init__&#40;self, x=0, y=0&#41;:<br />        pilas.actores.Actor.__init__&#40;self, &quot;cursordisparo.png&quot;, x, y&#41;<br />        self.radio_de_colision = 10<br />        self.aprender&#40;pilas.habilidades.SeguirAlMouse&#41;<br /><br />a = Winbola&#40;&#41;<br />b = Mira&#40;&#41;<br /><br />def cuando_se_hace_click&#40;evento&#41;:<br />    # Obtengo la posicion del mouse.<br />    x, y = evento.x, evento.y<br /><br />    # Esta colisionando con la pelota?                                                                           <br />    if a.colisiona_con_un_punto&#40;x, y&#41;:<br />        a.cuando_la_seleccionan&#40;&#41;<br /><br /><br />pilas.eventos.click_de_mouse.conectar&#40;cuando_se_hace_click&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br />Tu código anterior está muy bien, te felicito, solo tenía<br />ese detalle de la colisión, pero estába muy bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Abr 18, 2011 2:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lukasgaleano]]></name></author>
<updated>2011-04-18T04:46:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5413#p5413</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5413#p5413"/>
<title type="html"><![CDATA[Consulta - Por ultima vez y me arreglo solo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1116&amp;p=5413#p5413"><![CDATA[
Que tal gente, disculpen que sea tan molesto pero cuando me surge un drama soy así.<br /><br />Mi consulta es como crear señales de selección de una actor, para así asignarle algún evento, es decir:<br /><br />Quiero hacer que una bola de un grupo, sea seleccionado con el puntero del mouse y con la señal del click hacer que desaparezca, mientras este tenga el puntero encima.<br /><br />Aquí un ejemplo de lo que he intentado hacer:<pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />class Winbola&#40;pilas.actores.Actor&#41;:<br />    def __init__&#40;self, x=0, y=0&#41;:<br />        pilas.actores.Actor.__init__&#40;self, &quot;winbola.png&quot;, x, y&#41;<br />        self.y = 200<br />        <br />    def Presionado&#40;Winbola&#41;:<br />        presionado = True<br />        print &quot;En la Mira&quot;<br /><br />class Mira&#40;pilas.actores.Actor&#41;:<br /><br />    def __init__&#40;self, x=0, y=0&#41;:<br />        pilas.actores.Actor.__init__&#40;self, &quot;cursor.png&quot;, x, y&#41;<br />        self.radio_de_colision = 10<br />        self.aprender&#40;pilas.habilidades.SeguirAlMouse&#41;<br />        <br /><br />a = Winbola&#40;&#41;<br /><br />b = Mira&#40;&#41;<br /><br /><br />def senalar&#40;a, b&#41;:<br />    a.Presionado&#40;&#41;<br />    <br />pilas.colisiones.agregar&#40;a, b, senalar&#41;<br /><br />def boom&#40;evento&#41;:<br />    if &#40;a.Presionado&#40;&#41;&#41;:<br />        a.eliminar&#40;&#41;<br />        print &quot;bola eliminada&quot;<br />    else:<br />        print &quot;Fallaste&quot;<br /><br /><br /><br /><br />pilas.eventos.click_de_mouse.conectar&#40;boom&#41;</pre><br /><br />Disculpen mi ignorancia soy nuevo en python y pilas.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2351">lukasgaleano</a> — Lun Abr 18, 2011 4:46 am</p><hr />
]]></content>
</entry>
</feed>