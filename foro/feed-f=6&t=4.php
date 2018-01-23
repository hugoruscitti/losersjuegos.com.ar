<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=4" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2006-08-15T10:24:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=4</id>
<entry>
<author><name><![CDATA[Requeteguay]]></name></author>
<updated>2006-08-15T10:24:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=15#p15</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=15#p15"/>
<title type="html"><![CDATA[SDL - soltar pulsación de teclas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=15#p15"><![CDATA[
Hola Hugo,<br /><br />Al final lo he hecho con el control de corte. <br /><br />En todos los sitios recomiendan usar la forma en la que SDL controla cuando se suelta una tecla, pero en este caso he adaptado la explicación que me has dado al código que tengo actualmente y todo está OK.<br /><br />Gracias por todo, espero que pronto pueda enseñaros los resultados de lo que estoy haciendo partiendo del código de Volleyball xD.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=5">Requeteguay</a> — Mar Ago 15, 2006 10:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2006-08-13T22:21:43+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=14#p14</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=14#p14"/>
<title type="html"><![CDATA[Re: SDL - soltar pulsación de teclas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=14#p14"><![CDATA[
<blockquote><div><cite>Requeteguay escribió:</cite><br />Deseaba que el pingüiino saltase una sóla ocasión por cada pulsación de la tecla de salto en vez de saltar continuamente mientras se tiene pulsada la tecla.<br /></div></blockquote><br /><br />Seguramente existen muchas formas de lograrlo, aunque pensando en el código de ese juego pienso que la forma mas práctica de hacerlo es ampliando las condiciones a la hora de inicial el salto.<br />Cuando el personaje está &quot;parado&quot; o &quot;caminando&quot; se realiza una verificación en los controles del usuario para &quot;impulsar&quot; el salto.<br />Por ejemplo, en la función &quot;personaje_parado&quot; de &quot;personaje.c&quot; encontré:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        if &#40;control_pulso &#40;data-&gt;control, UP&#41;&#41;<br />        &#123;<br />                personaje_cambiar_estado &#40;data, personaje_iniciar_salto,<br />                        personaje_saltando&#41;;<br />        &#125;<br /></code></dd></dl><br /><br />Es decir, el único requisito para comenzar a &quot;saltar&quot; es la pulsación de la tecla &quot;UP&quot;. Dejar pulsada la tecla es equivalente a pulsarla reiteradas veces.<br />Encontré dos posibles formas de resolver esto, la primera consiste en llamar a la función &quot;control_pulso_sin_repeticion&quot; en lugar de &quot;control_pulso&quot;.<br />Quedaría:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        if &#40;control_pulso_sin_repeticion &#40;data-&gt;control, UP&#41;&#41;<br />        &#123;<br />                personaje_cambiar_estado &#40;data, personaje_iniciar_salto,<br />                        personaje_saltando&#41;;<br />        &#125;<br /></code></dd></dl><br /><br />Otra posibilidad, algo mas compleja, consiste en ampliar la condición de salto.<br />Podrías incluir otro atributo en la estructura del personaje que indique si se está pulsado la tecla &quot;UP&quot; a causa de un salto:<br />Por ejemplo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>struct personaje<br />&#123;<br />        int x;<br />        int y;<br />        int saltado; /* Nuevo atributo, campo o variable */<br /></code></dd></dl><br /><br />Esa variable tomaría el valor 0 o 1, indicando si el usuario comenzó a saltar o no. Así, la variable serviría como condición de &quot;corte&quot; evitando que el usuario pueda dejar pulsada la tecla de salto.<br />Veamos como se podría manipular:<br /><br />Cuando el módulo se inicia (función &quot;personaje_iniciar&quot;) la variable tendría que tener el valor 0. Cuando el personaje está &quot;parado&quot; o &quot;caminando&quot; se debe iniciar el &quot;salto&quot; solo si la variable &quot;saltando&quot; lo permite (esa es la condición de corte a la que me refería):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        if &#40;control_pulso &#40;data-&gt;control, UP&#41; &amp;&amp; data-&gt;saltando == 0&#41;<br />        &#123;<br />                personaje_cambiar_estado &#40;data, personaje_iniciar_salto,<br />                        personaje_saltando&#41;;<br /><br />                data-&gt;saltando = 1;<br />        &#125;<br /></code></dd></dl><br /><br />Hasta aquí, el personaje solo saltaría una sola vez. La variable tomó el valor 1 y eso imposibilita cualquier otro salto.<br />Como queremos que el personaje pueda saltar nuevamente, pero solo después de soltar y pulsar nuevamente la tecla, podemos devolver el valor 0 a la variable &quot;saltando&quot; solo cuando el usuario deje de pulsar la tecla UP:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>        if &#40;data-&gt;saltando == 1 &amp;&amp; ! control_pulso &#40;data-&gt;control, UP&#41;&#41;<br />        &#123;<br />                printf &#40;&quot;El personaje había saltado. Como ahora soltó la &quot;&#41;;<br />                printf &#40;&quot;tecla UP, podemos permitirle saltar nuevamente \n&quot;&#41;;<br /><br />                data-&gt;saltando = 0;<br />        &#125;<br /></code></dd></dl><br /><br />Esa porción de código debería evaluarse constantemente, se podría añadir en la función &quot;personaje_actualizar&quot;.<br />En fin, esas son dos soluciones que podrían funcionar (creo).<br /><br />Saludos y mucha suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Ago 13, 2006 10:21 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Requeteguay]]></name></author>
<updated>2006-08-13T11:41:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=13#p13</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=13#p13"/>
<title type="html"><![CDATA[SDL - soltar pulsación de teclas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=4&amp;p=13#p13"><![CDATA[
Hola a tod@s,<br /><br />Estaba experimentando con el código del juego Volleyball y me he encontrado un pequeño problema que me gustaría explicaros.<br /><br />Deseaba que el pingüiino saltase una sóla ocasión por cada pulsación de la tecla de salto en vez de saltar continuamente mientras se tiene pulsada la tecla.<br /><br />De arrancada este problema lo he resuelto añadiendo el código que voy a ponerles, pero estoy me ha causado un problema que ya no he sabido solucionar.<br /><br />Dentro de util.c he añadido este código al método &quot;procesar_eventos&quot;:<br /><br />int procesar_eventos (void)<br />{<br />static SDL_Event event;<br /><br />while (SDL_PollEvent (&amp;event))<br />{<br /><br />if (event.type == SDL_QUIT)<br />return 0;<br /><br />//comprueba procesos de pulsación de teclas<br />if (event.type == SDL_KEYDOWN)<br />{<br />switch (event.key.keysym.sym)<br />{<br />case SDLK_ESCAPE:<br />return 0;<br />break;<br /><br />default:<br />break;<br />}<br />}<br /><br />//comprueba procesos cuando se sueltan las teclas<br />if (event.type == SDL_KEYUP)<br />{<br />switch (event.key.keysym.sym)<br />{<br />case SDLK_n:<br />printf(&quot;Se ha soltado la tecla de golpe del personaje 1\n&quot;);<br />break;<br />}<br />}<br />}<br /><br />return 1;<br />}<br /><br />Bien. Mi intención es sustituir la instrucción &quot;printf(&quot;Se ha soltado la tecla de golpe del personaje 1\n&quot;);&quot; por otra que consiga pasarle a la estructura &quot;personaje&quot; un valor para una de sus propiedades. Algo así:<br /><br />Estructura personaje -&gt;<br /><br />typedef struct Personaje<br />{<br />SDL_Surface * imagen;<br />SDLKey tecla_derecha;<br />SDLKey tecla_izquierda;<br />SDLKey tecla_arriba;<br />SDLKey tecla_abajo;<br />SDLKey tecla_saltar;<br />SDLKey tecla_golpe;<br />enum estados estado;<br />int x;<br />int y;<br />int z;<br />int limite_izquierdo;<br />int limite_derecho;<br />int limite_arriba;<br />int limite_abajo;<br />int lado; //hacia donde mira el personaje...<br />int posicion_salto; //guardo la coordenada x donde se encuentra el jugador<br />float velocidad_salto;<br />int saltando;<br />int pulsado;<br />int soltar_tecla;<br />int paso;<br />int cuadro;<br />int delay;<br />int delay_golpe;<br />enum golpes golpe;<br />} Personaje;<br /><br />Y donde tengo el printf de util.c pasarle algo así:<br /><br />personaje-&gt;soltar_tecla=1;<br /><br />Siento lo extenso de mi post. Si no se me ha entendido bien intentaré exponerlo de alguna otra manera.<br /><br />Muchas gracias!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=5">Requeteguay</a> — Dom Ago 13, 2006 11:41 am</p><hr />
]]></content>
</entry>
</feed>