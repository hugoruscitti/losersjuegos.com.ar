<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1154" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-17T18:30:18+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1154</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-05-17T18:30:18+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1154&amp;p=5554#p5554</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1154&amp;p=5554#p5554"/>
<title type="html"><![CDATA[Re: Comportamientos de Actores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1154&amp;p=5554#p5554"><![CDATA[
Buenas Carla, hay dos formas de lograr lo que quieres.<br /><br />Podrías usar comportamientos, que son tareas que se pueden<br />encadenar una debajo de otra.<br /><br /><pre class="prettyprint">import pilas<br /><br />pilas.iniciar&#40;&#41;<br />mono = pilas.actores.Mono&#40;&#41;<br /><br />pasos = 3<br /><br />mono.x = -50<br />mono.y = -50<br /><br />mono.hacer_luego&#40;pilas.comportamientos.Avanzar&#40;90, pasos&#41;&#41;<br />mono.hacer_luego&#40;pilas.comportamientos.Girar&#40;180, 10&#41;&#41;<br />mono.hacer_luego&#40;pilas.comportamientos.Avanzar&#40;180, pasos&#41;&#41;<br />mono.hacer_luego&#40;pilas.comportamientos.Girar&#40;360, 10&#41;&#41;<br />mono.hacer_luego&#40;pilas.comportamientos.Avanzar&#40;5, pasos&#41;&#41;<br />mono.hacer_luego&#40;pilas.comportamientos.Girar&#40;180, 10&#41;&#41;<br />                                                                                <br />pilas.avisar&#40;&quot;Movimiento mediante comportamientos.&quot;&#41;<br />pilas.ejecutar&#40;&#41;</pre><br /><br />Incluso puedes ver cómo escribir tus propios comportamientos<br />ejecutando &quot;pilas.ver(pilas.comportamientos)&quot;.<br /><br /><br />Otra posibilidad es usar una función cómo<br />&quot;pilas.mundo.agregar_tarea_una_vez&quot; que adminte como argumento<br />el tiempo que tiene que esperar, una funcion y algunos argumentos.<br /><br />Por ejemplo, para hacer que aparezca un personaje luego de<br />esperar 4 segundos podemos hacer:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />def crear_personaje&#40;&#41;:<br />     m = pilas.actores.Mono&#40;&#41;<br /><br />pilas.mundo.agregar_tarea_una_vez&#40;4, crear_personaje&#41;</pre><br /><br />Esta segunda forma es mas sencilla, pero solo tienes que<br />saber exactamente cuanto esperar para hacer cada cosa y expresarlo<br />en segundos.<br /><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar May 17, 2011 6:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-05-17T15:38:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1154&amp;p=5552#p5552</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1154&amp;p=5552#p5552"/>
<title type="html"><![CDATA[Comportamientos de Actores]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1154&amp;p=5552#p5552"><![CDATA[
<span style="font-weight: bold">Buenos Dias chicos</span><br /><br />en esta oportunidad les escribo ya que tengo una duda!!<br /><br />como puedo hacer para que un actor aparezca o haga algo LUEGO de que otro actor termine su accion??<br /><br />ejemplo:<br /><br />presiono un actor-&gt; ese actor hace cierta animación y desaparece-&gt; luego quiero que aparezca otro actor en en centro de la pantalla<br /><br />porque lo que pasa es que pongo las acciones una debajo de la otra, y se ejecutan al mismo tiempo..<br /><br />podrían ayudarme por favor?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mar May 17, 2011 3:38 pm</p><hr />
]]></content>
</entry>
</feed>