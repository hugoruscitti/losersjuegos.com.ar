<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1130" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-05-19T23:58:56+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1130</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-05-19T23:58:56+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5563#p5563</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5563#p5563"/>
<title type="html"><![CDATA[Re: Borrar cola de eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5563#p5563"><![CDATA[
buenas, por lo que estoy leyendo, usando la funcion SDL_EnableKeyRepeat(0,0); al principio de mi codigo, despues de iniciar SDL se tendria que desactivar el keyRepeat pero no se por que no me funciona :S, he probado con otros valores y tampoco cambia nada, tambien con los deafult(SDL_DEFAULT_REPEAT_DELAY y SDL_DEFAULT_REPEAT_INTERVAL) y nada . <br />La funcion devuelve 0, y segun la wiki de sdl si devulve 0 esque todo a ido bien.<br /><br />Estoy haciendo algo mal?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue May 19, 2011 11:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-05-18T23:29:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5561#p5561</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5561#p5561"/>
<title type="html"><![CDATA[Re: Borrar cola de eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5561#p5561"><![CDATA[
Gracias geo, <br />ya he probado usando SDL_PollEvent() y la animacion se jecuta perfectamente, el problema es que a la hora de escribir algo(en un campo de texto del programa) me pilla varias pulsaciones de tecla, si intento escribir hola lo que es escribo es hhhhhhhhhhooooolllllllaaaaaa, por eso estaba usando SDL_WaitEvent(). <br />Voy a hechar un ojo por google sobre el SDL_KeyRepeat que me ha dicho Juanxo, cualquier cosa me paso por aqui, gracias a los dos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />)))<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié May 18, 2011 11:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-05-18T05:56:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5557#p5557</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5557#p5557"/>
<title type="html"><![CDATA[Re: Borrar cola de eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5557#p5557"><![CDATA[
No necesitas limpiar la cola de eventos, tu programa se detiene en espera de un evento porque tú le has indicado que lo haga, usando la función SDL_WaitEvent, en una aplicación que pretendes actualizar a cada momento no puedes detener el programa de esa forma, deberías en su lugar dejar que el programa corra siempre y reaccionar cuando ocurre el evento que deseas.<br /><br /><pre class="prettyprint">while&#40;!done&#41;<br />{<br />  while&#40; SDL_PollEvent&#40; &amp;evento &#41; &#41;<br />  {<br />    // Aquí actualizas lo necesario de acuerdo a la entrada del usuario<br />    // pulsación de teclado, botón del ratón, etc.<br />  }<br /><br />  // Aquí ejecutas la lógica de tu programa<br />  if&#40; condicion &amp;&amp; pasoTiempoSuficiente &#41; <br />  {<br />    actualizarImagen&#40;&#41;;<br />  }<br /><br />  // Dibujar<br />  SDL_BlitSurface&#40; imagenAnimacion, NULL, screen, rect &#41;;<br />}</pre><br />El primer ciclo while permite recorrer los eventos ocurridos que están en espera y reaccionar ante ellos. Pero el programa no se detiene allí, ya que inmediatamente después de atender los eventos continúa. En el ejemplo que te pongo, después de evaluar los eventos pendientes, se actualiza el índice de la imagen que deseas dibujar, aquí agrego una variable <span style="font-weight: bold">pasoTiempoSuficiente</span> que se pondría en verdadero cuando haya pasado el tiempo deseado entre transiciones de imágenes, de manera que puedas controlar la velocidad a la que se cambia la imagen.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Mié May 18, 2011 5:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-05-12T21:29:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5521#p5521</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5521#p5521"/>
<title type="html"><![CDATA[Re: Borrar cola de eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5521#p5521"><![CDATA[
buenas, lo siento por responder tan tarde pero he estado liado y no he tenido tiempo de ponerme a programar, te aclaro: <br />con boton pulsado me referia a un boton que yo mismo he programado(como el boton de minimizar o el de cerrar una ventana), la verdad es que no era muy claro el ejemplo que te he puesto <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />. <br /><br />El codigo es una animacion que muestra una imagen diferente en cada pasada del while, el problema es que para que la animacion se ejecute el programa tiene que recibir algun evento, sino se queda esperandolo y no avanza el while(creo que es eso, no estoy muy seguro jeje).<br /><pre class="prettyprint">int i = 0;<br />while&#40;!done&#41;<br />{<br />  SDL_WaitEvent&#40;&amp;evento&#41;;<br />  if&#40;condicion&#41; <br />  {<br />    imagenAnimacion = listaImagenesAnimacion[i];<br />    i++;<br />    if&#40;i == ultimoNumeroAnimacion&#41; i = 0;<br />  }<br />  //Demas eventos a manipular<br />  SDL_BlitSurface&#40;imagenAnimacion, NULL, screen, rect&#41;;<br />  //Demas imagenes a actualizar en la pantalla<br />}</pre><br /><br />Otra cosilla, el ejemplo que me has dado para organizar el codigo tendria que usarlo dentro del game loop no(no se si se llamara game loop en un programa que no sea un juego), algo asi no?<br /><br /><pre class="prettyprint">while&#40;!done&#41;<br />{<br />while&#40; SDL_PollEvent&#40;&amp;event&#41;&#41;<br />{<br />  if &#40;event.type == SDLK_LEFT&#41; done = true;<br />}<br />actualizarPantalla&#40;&#41;;<br />}</pre><br /><br />gracias juanxo por la ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue May 12, 2011 9:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2011-04-27T22:22:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5458#p5458</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5458#p5458"/>
<title type="html"><![CDATA[Re: Borrar cola de eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5458#p5458"><![CDATA[
buenas miguel:<br /><br />La verdad es que tu duda me deja un poco confuso. Puedes elaborar un poco más?<br /><br />botonPulsado:<br />- Qué botón?<br />- con pulsado te refieres a PRESSED, RELEASED, es decir, pulsar y soltar, al pulsar, al soltar?<br />- igual el problema es que tienes habilitado algo que se llamaba SDL_KeyRepeat, porque en teoría si pulsas una tecla solo debería generar un evento<br /><br />Además, me parece que la forma en la que lo estás organizando no es la más adecuada<br /><br /><pre class="prettyprint">while&#40; SDL_PollEvent&#40;&amp;event&#41;&#41;<br />{<br />  if &#40;event.type == SDLK_LEFT&#41;<br />    avanzarFrame&#40;&#41;<br />}<br /><br />drawFrame&#40;&#41;</pre><br /><br />yo lo he hecho así las veces que he tenido que hacer algo del estilo.<br /><br />Por favor, explica que pretendes hacer un poco más detallado y seguro que sacamos algo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mié Abr 27, 2011 10:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2011-04-27T21:56:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5457#p5457</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5457#p5457"/>
<title type="html"><![CDATA[Borrar cola de eventos en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1130&amp;p=5457#p5457"><![CDATA[
Buenas que tal?<br />Tengo un problemilla con el tema de los eventos y diria que la solucion es borrar la cola de eventos, me explico:<br />El programa en el que estoy trabajando es algo asi:<br /><pre class="prettyprint">int i = 0;<br />while&#40;!done&#41;<br />{<br />  SDL_WaitEvent&#40;&amp;evento&#41;;<br />  if&#40;botonPulsado&#41; <br />  {<br />    imagenAnimacion = listaImagenesAnimacion[i];<br />    i++;<br />    if&#40;i == ultimoNumeroAnimacion&#41; i = 0;<br />  }<br />  //Demas eventos a manipular<br />  SDL_BlitSurface&#40;imagenAnimacion, NULL, screen, rect&#41;;<br />  //Demas imagenes a actualizar en la pantalla<br />}</pre><br /><br />El problema que tengo es que la animacion no se ejecuta si no hay eventos(el loop no avanza por que se queda esperando al evento?).<br />He probado usando SDL_PollEvent() y la animacion funciona sin problemas, pero me surge otro problema, si pulso una tecla se almacenan varias pulsaciones(supongo que tiene que ver con el tiempo que pase la tecla pulsada). <br />He probado tambien añadiendo while(SDL_PollEvent(&amp;evento)) {} despues de manipular los eventos y tampoco funciona.<br /><br />Que puedo hacer para que funcione la animacion y no se repitan las pulsaciones de las teclas?<br />gracias de antemano:D<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Abr 27, 2011 9:56 pm</p><hr />
]]></content>
</entry>
</feed>