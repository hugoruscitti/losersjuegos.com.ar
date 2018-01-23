<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=682" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-01-27T21:27:51+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=682</id>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2010-01-27T21:27:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3222#p3222</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3222#p3222"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3222#p3222"><![CDATA[
<blockquote><div><cite>Juanxo escribió:</cite><br />En este <a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=627&amp;highlight=opengl" class="postlink">post</a> salen algunas paginas que te pueden ayudar con estos temas<br /></div></blockquote><br /><br />Muchas gracias por el link me ha sido de mucha ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Mié Ene 27, 2010 9:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-01-26T14:38:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3220#p3220</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3220#p3220"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3220#p3220"><![CDATA[
En este <a href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=627&amp;highlight=opengl" class="postlink">post</a> salen algunas paginas que te pueden ayudar con estos temas<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Ene 26, 2010 2:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2010-01-26T10:51:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3219#p3219</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3219#p3219"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3219#p3219"><![CDATA[
Muchas grácias por vuestras respuestas me han sido de mucha ayuda.<br /><br />Entonces intentaré usar OpenGL sobre SDL.<br /><br />¿ Alguien sabe donde puedo encontrar un ejemplo bien comentado sobre el uso de OpenGL sobre SDL para linux o un manual?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Mar Ene 26, 2010 10:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2010-01-26T00:15:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3217#p3217</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3217#p3217"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3217#p3217"><![CDATA[
<blockquote><div><cite>carlostex escribió:</cite><br />Entonces ¿SDL no tiene aceleración por hardware?,, he visto que tiene la opción de pasarle SDL_HWSURFACE entonces que hace esa función?.<br /><br />de todas formas no te preocupes tanto, de lo que si estoy seguro es que no es tiempo perdido haber aprendido SDL, pues se suele usar junto con GL, de esa forma GL se usa para los gráficos dado que no tiene el soporte que tiene SDL para multimedia.<br /></div></blockquote><br /><br />SDL_HWSURFACE lo unico que hace es indicar a SDL que una determinada superficie (ya sea la pantalla u otra superficie) se guarde en la memoria de video, la memoria que incorpora la tarjeta grafica, en lugar de en la memoria RAM normal del ordenador, esto si no recuerdo mal se hace para las superficies que vamos a usar con frecuencia para que el tiempo necesario para trabajar con ellas sea menor al estar en la memoria de video, pero el motivo de escoger entre guardar la superficie entre la memoria normal o la memoria dedicada seguramente otro pueda explicarlo mejor que yo.<br /><br />Efectivamente aprender SDL no es en absoluto una perdida de tiempo, GL es mucho mas potente en cuanto a graficos, pero es un estandar que define una API unicamente para los graficos, no da soporte a el resto de multimedia y tampoco a las ventanas, necesita de SDL o de alguna API que le proporcione una ventana, una superficie en la que poder &quot;dibujar&quot;, asi como SDL es con la que podremos detectar los diferentes eventos, GL no puede.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mar Ene 26, 2010 12:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-25T03:39:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3215#p3215</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3215#p3215"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3215#p3215"><![CDATA[
Entonces ¿SDL no tiene aceleración por hardware?,, he visto que tiene la opción de pasarle SDL_HWSURFACE entonces que hace esa función?.<br /><br />de todas formas no te preocupes tanto, de lo que si estoy seguro es que no es tiempo perdido haber aprendido SDL, pues se suele usar junto con GL, de esa forma GL se usa para los gráficos dado que no tiene el soporte que tiene SDL para multimedia.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Lun Ene 25, 2010 3:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2010-01-24T19:54:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3212#p3212</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3212#p3212"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3212#p3212"><![CDATA[
Entonces si quiero crear un juego con estas características mejor me busco otra API como por ejemplo OPENGL ya que parece que SDL no tiene tanta potencia.<br /><br />Muchas grácias por vuestras respuestas.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Dom Ene 24, 2010 7:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2010-01-24T17:58:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3211#p3211</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3211#p3211"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3211#p3211"><![CDATA[
Es normal que vaya lento. Si vas a hacer un scroll (en algunos casos podrías hacer optimizaciones bastante buenas), en cada frame tienes que copiar altura*anchura*BitsPerPixel bits como mínimo. En tu caso son 1024*800*24 = 19660800 bits que son algo más de 2MB (si mis cálculos rápidos no me fallan). <br />La fórmula tiene 3 variables, si quieres mantener la altura y la anchura, puedes cambiar los BitsPerPixel. Yo he probado con 8 y me ha pasado de 33FPS a 67FPS.<br />Como te comentaban antes, otra opción es bajar la altura y la anchura. Deberías plantearte seriamente si es necesaria una resolución tan grande. Porque otra opción que se me ocurre es usar otra API que tenga aceleración por hardware.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Ene 24, 2010 5:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-01-24T17:51:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3210#p3210</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3210#p3210"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3210#p3210"><![CDATA[
Hola, estuve haciendo pruebas con mi código, el mio solo dibuja un rectángulo para el fondo y luego pone tres imágenes pequeñas en un tamaño de 1280 x 800 hace 25 FPS.<br />Entonces le quite que dibuje el rectángulo de fondo y corrió a 40 FPS. Una de las formas de optimizar el bliting es solo copiar las partes necesarias, en mi ejemplo solo dibujo tres objetos, lo que podría hacer en ves de dibujar todo el rectángulo dibujaría un rectángulo del tamaño de la imagen en la posición donde estaba de tal forma que se borre y no deje el rastro. pero si tu juego usa un scroll continuo no hay forma de hacer eso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Dom Ene 24, 2010 5:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2010-01-23T19:27:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3209#p3209</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3209#p3209"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3209#p3209"><![CDATA[
Tengo este portatil:<br /><br /><a href="http://www.audiotronics.es/product.aspx?imageid=1&amp;productid=43432" class="postlink">http://www.audiotronics.es/product.aspx?imageid=1&amp;productid=43432</a><br /><br />Estoy programando sobre Ubuntu.<br /><br />Prueba tu el código si no te importa y me dices a cuantos frames te va a ti.<br /><br />Muchas gracias por tu ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Sab Ene 23, 2010 7:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metalero]]></name></author>
<updated>2010-01-22T23:41:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3204#p3204</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3204#p3204"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3204#p3204"><![CDATA[
Mmmm... ahi veo aparentemente todo bien, con la excepcion de:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>fondo = IMG_Load&#40;&quot;fondo.png&quot;&#41;;<br />fondo = SDL_DisplayFormat&#40;fondo&#41;; <br /></code></dd></dl><br /><br />que deberia ser:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_Surface *tmp =  IMG_Load&#40;&quot;fondo.png&quot;&#41;;<br />fondo = SDL_DisplayFormat&#40;tmp&#41;;<br />SDL_FreeSurface&#40;tmp&#41;; <br /></code></dd></dl><br /><br />Que computadora tenes?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2158">Metalero</a> — Vie Ene 22, 2010 11:41 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2010-01-22T16:06:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3203#p3203</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3203#p3203"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3203#p3203"><![CDATA[
Mira un ejemplo simple que tengo hecho que simplemente dibuja un fondo que se va moviendo en una ventana de 1024x800 funciona como mucho a 35 fps así que en cuanto le pongo más cosas se suben mucho los frames.<br /><br />El código es:<br /><br />#include &lt;stdio&gt;<br />#include &lt;stdlib&gt;<br />#include &lt;SDL&gt;<br />#include &lt;iostream&gt;<br />using namespace std;<br /><br />#define An 1024<br />#define Al 800<br /><br />Uint32 ini_milisegundos, fin_milisegundos, frametime;<br /><br />void ResetTimeBase()<br />{<br />  ini_milisegundos = SDL_GetTicks();<br />}<br /><br />int CurrentTime()<br />{<br />  fin_milisegundos = SDL_GetTicks();<br />  return fin_milisegundos - ini_milisegundos;<br />}<br /><br />int main(int argc, char **argv)<br />{<br />int i, j, cont = 0, salir = 0;<br /><br />SDL_Surface *screen, *fondo;<br />SDL_Rect rect;<br />SDL_Event event;<br /><br />if(SDL_Init(SDL_INIT_VIDEO | SDL_INIT_JOYSTICK) &lt; 0)<br />    {<br />      printf(&quot;No se pudo iniciar SDL: %s\n&quot;,SDL_GetError());<br />      return 1;<br />    }<br />  <br />    screen = SDL_SetVideoMode(An,Al,24,SDL_HWSURFACE);<br />    <br />    if(screen == NULL)<br />    {<br />      printf(&quot;No se puede inicializar el modo gráfico: \n&quot;,SDL_GetError());<br />      return 1;<br />    }<br /><br />fondo = IMG_Load(&quot;fondo.png&quot;);<br />fondo = SDL_DisplayFormat(fondo);<br /><br />while(!salir)<br />{<br />ResetTimeBase();<br /><br />for(i=0;i&lt;Al;i+=64)<br />{<br />for(j=0;j&lt;An;j+=64)<br />{<br />rect.x = j;<br />rect.y = (i + cont) % Al ;<br /> <br />SDL_BlitSurface(fondo, NULL, screen, &amp;rect);<br />}<br />}<br /><br />cont++;<br /><br />SDL_Flip(screen);<br /><br />while(SDL_PollEvent(&amp;event))<br />{<br />  if(event.type == SDL_QUIT)<br />    salir = 1;<br />}<br /><br />frametime = CurrentTime();<br />cout&lt;&lt;&quot;F:&quot;&lt;&lt;1000/frametime&lt;&lt;endl;<br />}<br />}<br /><br />La imagen que uso es (64x64): <br /><br /><a href="http://www.subirimagenes.com/fondosycapturas-fondo-3933841.html" class="postlink"><img src="http://s3.subirimagenes.com:81/fondosycapturas/previo/thump_3933841fondo.png" alt="Imagen" /></a><br /><br />Espero que me podais ayudar.<br /><br />Muchas gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Vie Ene 22, 2010 4:06 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metalero]]></name></author>
<updated>2010-01-22T01:35:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3200#p3200</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3200#p3200"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3200#p3200"><![CDATA[
Mira, el desmepeño va a depender mucho de la maquina que tengas, de la complejidad de lo que estas mostrando en pantalla, y que tan optimizado esta.<br /><br />Recien hice una prueba como para darte algunon numeros, y mira:<br /> <br />Mi PC es una AMD Phenom X4 (2.33Ghz x 4) + 2 Gb RAM + ATI Radeon HD 4300.<br /><br />Probe mi proyecto (que estoy haciendo en SDL) con un rasolucion de 1280 x 1024, sacandole el limitador de FPS, y segun la &quot;fase del juego hay muchas variaciones, que van entre los 180 y los 70 FPS (excepto una parte que realmente esta bastante &quot;fea&quot; en cuanto a la programacion y los FPS caen a 20)<br /><br />Pero para que des una idea, la parte mas jodida, es el mapa, que dibuja por cada frame (a 1280 x 1024):<br /><br />320 Tiles de 64x64 + 4 avion (aprox 100 * 200)  + algunas balas (5 x 8 )<br /><br />Y el mapa me anda en un rango de 100 - 70 FPS<br /><br />Como veras, estando el codigo optimizado, (y contando con una PC buena) podes tener buenos FrameRates.<br /><br />Si el problema es la PC, o estas dibujando algo demasiado complejo (rotaciones/escalado multiples, etc), lo mejor seria (antes que anda optimiar todo al palo) usar una resolucion mas baja (como 800 x 600, que es lo que pienso usar yo en mi juego, o 640 x 480) y usar la funcion de la SDL para hacer FULLSCREEN, con lo que cambia la resolucion del monitor a la resolucion del juego, obteniendo mayor performance, y una imagen grande.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2158">Metalero</a> — Vie Ene 22, 2010 1:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[drinor]]></name></author>
<updated>2010-01-22T00:41:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3199#p3199</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3199#p3199"/>
<title type="html"><![CDATA[SDL con resoluciones altas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=682&amp;p=3199#p3199"><![CDATA[
Hola buenas,<br /><br />El problema que tengo es que cuando creo un juego con una resolución mayor de 800x600 y actualizo toda la pantalla (el fondo completo y las demás imágenes) tarda demasiado en realizar esta operación y se bajan los frames por segundo a menos de 30.<br /><br />Ya he probado con varios ejemplos y siempre me ocurre lo mismo.<br /><br />Espero que me digais si es que SDL no es capaz de dibujar una pantalla completa de 1024x800 o 1280x800 a una velocidad alta o que yo cometo algún error.<br /><br /><br />Muchar gracias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2147">drinor</a> — Vie Ene 22, 2010 12:41 am</p><hr />
]]></content>
</entry>
</feed>