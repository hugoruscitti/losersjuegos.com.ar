<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=898" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-10-03T14:01:36+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=898</id>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-10-03T14:01:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4220#p4220</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4220#p4220"/>
<title type="html"><![CDATA[Re: [SDL]mejor forma de mover objetos en milisegundos?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4220#p4220"><![CDATA[
muchas gracias che, voy a aplicar el método a ver que sale<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Dom Oct 03, 2010 2:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-10-03T07:31:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4218#p4218</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4218#p4218"/>
<title type="html"><![CDATA[Re: [SDL]mejor forma de mover objetos en milisegundos?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4218#p4218"><![CDATA[
Creo que cualquier programador se a preguntado eso y es un tema básico de animaciones.<br />El caso es que ni una de las dos formas te sirve.<br />para empezar dividiría el problema en dos partes, primero hacer que se mueva con una velocidad fijada y la otra parte seria checar cuanta distancia ya recorrió si es mayor a la que le pasaste lo detienes.<br />Yo tengo hecho toda una clase para animaciones pero el núcleo son las siguientes funciones;<br /><dl class="codebox"><dt>Code: </dt><dd><code><br />float d_vt(float velocidad, Uint32 tiempo)<br />{<br />    return velocidad*tiempo/1000.0;<br /><br />}<br /><br />//Calcula la posicion de un punto al haber transcurrido time_trans (ms), con respecto a su posicion actual<br />//es decir la posicion no depende de los FPS.<br />float next_point(punto &amp;posicion,punto posicion_inicio, Vector velocidad, int time_trans)<br />{<br />    punto aux=posicion;<br />    posicion.x=posicion_inicio.x+d_vt(velocidad.magnitud, time_trans)*cos(to_rad(velocidad.angulo));<br />    posicion.y=posicion_inicio.y-d_vt(velocidad.magnitud, time_trans)*sin(to_rad(velocidad.angulo));<br />    return dist_2puntos(aux,posicion);<br />}<br /></code></dd></dl><br /><br />el funcionamiento es que tu le envias la posicion actual por ejemplo(1,1), la velocidad en forma vectorial, y el tiempo que transcurrio desde que llamaste a la función, asi si la velocidad es 1 con 0 grados que es 1 en x y 0 en y en un segundo va avanzar un píxel. lo que regresa es la magnitud del vector de posición, pero como conoces el ángulo en el que se mueve solo haces las proyecciones en los ejes x e y y es lo que le sumas a la posición actual, y así vas llamando en cada ciclo a esta función.<br />Nunca he visto como hacen los demás para hacer algo así, pero esta función esta fundamentada en el calculo integral.<br />nada mas que esto calcula los pequeños pedazos de la curva, si sumas todos te va a dar la longitud de la curva.<br />y si vas pegando cada pedazo con el ángulo respectivo se crea la forma de la curva.<br />las diferencias de tiempo son las dt. Esto permite ir cambiando el ángulo para cada llamada a la función<br />el único detalle es que si llamas a la función en tiempos muy cortos mientras cambias el ángulo casi no va a avanzar debido a que la pantalla tiene posiciones discretas.<br /><br />No supongas que en cualquier maquina el framerate va a ser el mismo.<br /><br />Yo uso un framerate semi estable, fijo un framerate por ejemplo 30, y se va a tratar de mantener los 30 fps, pero puede variar, podría disminuir a 28 si hay que hacer algún calculo pesado, pero eso no afectara las posiciones de la animación, por que dependen del tiempo, no del framerate.incluso por alguna razón aveces aumenta a 34, por eso digo que es semi.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Oct 03, 2010 7:31 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2010-10-03T06:08:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4217#p4217</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4217#p4217"/>
<title type="html"><![CDATA[[SDL]mejor forma de mover objetos en milisegundos?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=898&amp;p=4217#p4217"><![CDATA[
Hola, me presento, soy baigos de Corrientes Capital Nacional de los bulones. <br />Ando programando algunas cosas en C + SDL, y resulta que lo que quiero hacer es hacer una funcion mas o menos de este tipo:<br />void moverobjeto(SDL_Surface *img, Uint16 tiempo, int cantidad_a_mover_en_x)<br /><br />donde yo le doy un cierto intervalo de milisegundos, y una cantidad en pixeles a desplazar en ese tiempo. La velocidad sería calculada segun los parametros. El tema es como hacerlo, se me ocurrieron 2 ideas:<br /><br />-Tengo el framerate fijado en 60 cuadros, con lo cual cada 17 ms (aproximadamente) dibujo un cuadro. Entonces hago (17 ms x cantidad_a_mover)/tiempo en ms y obtengo la cantidad de pixeles que debo mover cada 17 ms (o el intervalo de dibujado que le asigne en ms).<br /><br />-Divido el tiempo en ms por la cantidad de pixeles a mover, y obtengo un intervalo de dibujado en milisegundos.<br /><br />La primer solucion es la que tengo mas accesible, el tema es que SDL_Rect al tener x e y en Sint16 no es preciso, y no llega a la cantidad de pixeles fijada (o se pasa).<br />En la segunda se me arma un quilombo con los timers, y tampoco es precisa. Ademas como fijo un framerate, tengo un problema alli tambien.<br /><br />He visto que stepmania implementa algunas funciones similares, pero el codigo fuente del stepmania es mas intrincado que la vida de ricardo fort.<br /><br />Si alguien aporta alguna idea bienvenida será, y asi podremos mover una superficie conteniendo a zulma lobato en milisegundos bla bla bla...el sueño de todo ser humano...bla bla bla<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Dom Oct 03, 2010 6:08 am</p><hr />
]]></content>
</entry>
</feed>