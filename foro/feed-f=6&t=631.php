<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=631" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-10-08T15:46:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=631</id>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-10-08T15:46:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2961#p2961</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2961#p2961"/>
<title type="html"><![CDATA[Re: Problemas con el movimiento del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2961#p2961"><![CDATA[
Hola una vez más:<br /><br />Bueno, gracias a que no me deje caer obtube la respuesta al problema que tenían con el procesamiento a eventos del mouse motion.<br /><br />Gracia le doy al administrador por responderme tan atentamente y veloz, esto demuestra que los encargados si que están puestos para el buen funcionamiento del foro, gracias.<br /><br />Bueno, admin, la verdad que tienes razón en lo que me explicas, y como me dices es así como lo hago, de manera más precisa y óptima para el programa. Pero aunque lo tenía hecho de la manera más inteligente posible continuaba con el problema, que hice, pues utilice la función <br /> <br />Uint8 SDL_GetMouseState(int &amp;x, int &amp;y);<br /><br />y actualizando los dispositivos con la función <br /><br />SDL_PumEvents();<br /><br />cada vez que el ciclo da una vuelta esto me funciona de maravillas.<br /><br />muchas gracias, ahora el problema que tengo es otro y ese si que es viejo pero lo publicare por fuera en este mismo foro.<br /><br />muchas gracias admin.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Jue Oct 08, 2009 3:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-10-07T23:59:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2953#p2953</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2953#p2953"/>
<title type="html"><![CDATA[Problemas con el movimiento del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2953#p2953"><![CDATA[
Si, tal como indicas los eventos que genera la aplicación<br />se almacenan en una pila a medida que llegan, si demoras<br />mucho en atender cada uno de ellos es probable que se<br />acumulen mas rápido de lo que se consumen.<br /><br />La clave está en atenderlos lo mas rápido posible, por ejemplo, <br />si llega un evento de movimiento de mouse solamente mover<br />el cursor en pantalla y una vez que recorriste todos los eventos<br />de la aplicación recién ahí evaluar si el mouse ha quedado<br />sobre un componente (como un botón).<br /><br />Un problema frecuente al atender los eventos es hacerlo de<br />a uno por ciclo de bucle. Por ejemplo el siguiente ejemplo<br />funcionaría muy lento, y los eventos se acumularán:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>while 1<br />     evento = obtener_un_evento_de_la_cola&#40;&#41;<br />     print evento<br />     procesar_evento &#40;evento&#41;<br />     procesar_coordenadas_sobre_objetos_de_la_interfaz&#40;event&#41;<br />     imprimir_pantalla&#40;&#41;<br /></code></dd></dl><br /><br />¿por que sería lento?, primero, independientemente el lenguaje<br />que utilices, imprimir en consola con print o printf o cout ... es<br />muy lento, porque el programa realiza una operación de<br />entrada/salida y pierde mucho rendimiento. Segundo, no tiene<br />mucho sentido imprimir la pantalla cada vez que llega un evento,<br />sería mejor procesar los eventos y solo cuando terminen todos<br />recién ahí imprimir la pantalla.<br /><br />Esta es una versión mejorada de lo anterior:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>while 1<br />     while existan_eventos_en_cola:<br />           evento = obtener_un_evento_de_la_cola&#40;&#41;<br />           procesar_evento &#40;evento&#41;<br />     <br />     procesar_coordenadas_sobre_objetos_de_la_interfaz&#40;&#41;<br />     imprimir_pantalla&#40;&#41;<br /></code></dd></dl><br /><br />Aunque, esto es generalizando, puede que tu código sea un<br />poco diferente. Cualquier cosa avisanos, la clave es no imprimir<br />en pantalla y vaciar la cola de eventos antes de imprimir...<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Oct 07, 2009 11:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[leonel06033]]></name></author>
<updated>2009-10-07T20:46:39+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2949#p2949</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2949#p2949"/>
<title type="html"><![CDATA[Problemas con el movimiento del mouse]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=631&amp;p=2949#p2949"><![CDATA[
Hola a todos:<br /><br />bueno, soy nuevo en esto, pero estoy haciendo un pacman para linux, este va a ser mi primer juego.<br /><br />La cuestion es que en la pantalla de presentación del pacman, se muestran varias optiones que van a ser seleccionadas por el uso del mouse, que hago a para logar esto.<br /><br />Bueno, tomo el evento motion que genera el mouse al moverse y voy analizando su posicion (x,y) y voy comparando esta con la posición que ocupan las imagenes que representan las opciones del game, todo hasta aqui perfecto, pero es que se demora mucho en tomar las coordenadas y si muevo mucho el mouse por fuera de una opción cuando el mismo entra en el rango de una imgen, se me demora mucho en darse cuanta que ya esta en esa posición, es como si se fueran acomulando todas las coordenadas en una pila y el programa le valla dando tratamiento a cada una hasta llegar a la ultima, pero lo hace de forma muy lenta.<br /><br />que podra ser eso amigo, si alguien tiene respuesta para eso, por favor respondan rapido puesto que estoy parado por eso.<br /><br />saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2103">leonel06033</a> — Mié Oct 07, 2009 8:46 pm</p><hr />
]]></content>
</entry>
</feed>