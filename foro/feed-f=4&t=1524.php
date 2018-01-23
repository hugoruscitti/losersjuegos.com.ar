<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1524" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-07-29T06:15:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=1524</id>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-29T06:15:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6982#p6982</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6982#p6982"/>
<title type="html"><![CDATA[Re: Ayuda con posible bug de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6982#p6982"><![CDATA[
Bueno, vuelvo a postear para dar noticias sobre el supuesto bug:<br /><br /><br /><br /><br />He intentado eso de poner else para que imprima siempre una instruccion en pantalla, pero no va igualmente, intente eso de que imprima en un archivo externo las variables para ver si alguna fallaba y saliese el fallo, pero loas variables despues del bug siguen valiendo lo mismo, asi que tampoco es eso.<br /><br />Aparte, me he dado cuenta de que el fallo lo tengo desde el principio del proyecto, porque he testeado versiones anteriores del juego y tambien falla.<br /><br /><br /><br />Ah si, aparte de las variables que pase, tambien el ttf dibujaba los nombres de los bichos enemigos encima de ellos, y, segun el color de la fuente, indicaba su estado de salud, prove quitar ese complemento al juego para ver si fallaba por eso y paso, de fallar a los (aproximadamente) 230 sec a los 3200 sec, parece que cuanto menos se utilice la libreria, mas tarda en salir el bug<br /><br /><br /><br />PD: pero yo no uso fprintf sino sprintf, que me elimina lo anterior por lo nuevo, por lo que veo en los archivos de texto que me imprime el juego<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Dom Jul 29, 2012 6:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2012-07-26T04:45:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6956#p6956</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6956#p6956"/>
<title type="html"><![CDATA[Re: Ayuda con posible bug de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6956#p6956"><![CDATA[
Bueno ya viendo el código, el uso de la funcion fprintf me causa duda, la verdad nunca la he usado, pero viendo <a href="http://www.cplusplus.com/reference/clibrary/cstdio/fprintf/" class="postlink">http://www.cplusplus.com/reference/clibrary/cstdio/fprintf/</a> nos da alguna idea, es importante verificar el comportamiento de las funciones que usamos. No se como tengas declarada la variable x que usas como buffer, como dijiste que todo esta en un main muy grande supongo que esa variable no se borra en cada vez que se ejecuta la parte de código que mostraste, y como se puede ver el el link que te puse, la funcion agrega los caracteres al buffer, es decir, si la llamas y haces que escriba &quot;hola&quot; en 'x' y la vuelves a llamar y haces que escriba &quot;hola&quot; en 'x' de nuevo, lo que tendrás en 'x' sera &quot;holahola&quot;.<br />no se si estés tomando eso en cuenta. Prueba poner a ceros la variable 'x' usando la función memset.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Jue Jul 26, 2012 4:45 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-25T18:34:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6954#p6954</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6954#p6954"/>
<title type="html"><![CDATA[Re: Ayuda con posible bug de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6954#p6954"><![CDATA[
<blockquote><div><cite>Faqndo escribió:</cite><br />puede un dato nulo de una variable, afectar a todas las demas variables?<br /></div></blockquote><br /><br />Sí <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Bueno, leyendo el código y achacando algunos problemas sobre la claridad del nombre de algunas variables, parece que no hay nada mal.<br /><br />Aun que... ¿Solid es una variable constante que nunca se toca?, y si se toca para modificar su valor... ¿ese valor esta dentro de las opciones de la función drawtext ? <br /><br />Me inclino mas a eso, ya que es el único caso en el cual no regresa una imagen tu función, yo sugeriría remplazar el ultimo else if de la función por un simple else para un &quot;valor por defecto&quot;.... y revisar también si en algún momento la cadena de texto es nula.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Jul 25, 2012 6:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-25T07:15:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6952#p6952</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6952#p6952"/>
<title type="html"><![CDATA[Re: Ayuda con posible bug de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6952#p6952"><![CDATA[
Bueno, he estado haciendo unas pruebas, quitando funciones y complementos del juego, y el error persiste, pero varia el tiempo del fallo segun le quito cosas, cuantas mas cosas le quite (poderes, ataques especiales, etc...) mas tarda en fallar.<br /><br /><br />Yo lo achacaria a un problema de paso nulo de datos, pero, puede un dato nulo de una variable, afectar a todas las demas variables?<br /><br /><br />una parte de lo que desaparece lo meto asi:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>posicion_letras.y =  10;<br />        text_surface = drawtext(fuente, 0, 0, 0, 0, 0, 0, 0, 0, x, solid);<br />        SDL_BlitSurface(text_surface, NULL, screen, &amp;posicion_letras);<br />        posicion_letras.y =  30;<br />        text_surface = drawtext(fuente, 0, 0, 0, 0, 0, 0, 0, 0, y, solid);<br />        SDL_BlitSurface(text_surface, NULL, screen, &amp;posicion_letras);<br />        sprintf(x ,&quot;%d&quot;,limite_disparos );<br />        text_surface = drawtext(fuente, 0, 0, 0, 0, 0, 0, 0, 0, x, solid);<br />        dibujaImagen(screen, text_surface, 770,30 );<br />        sprintf(x ,&quot;%d&quot;,velocidad_disparo );<br />        text_surface = drawtext(fuente, 0, 0, 0, 0, 0, 0, 0, 0, x, solid);<br />        dibujaImagen(screen, text_surface, 770,55 );<br />        sprintf(x ,&quot;%d&quot;,h-&gt;ataque );<br />        text_surface = drawtext(fuente, 0, 0, 0, 0, 0, 0, 0, 0, x, solid);<br />        dibujaImagen(screen, text_surface, 770,80 );<br />        sprintf(x ,&quot;%d&quot;,puntuacion_final_nivel );<br />        text_surface = drawtext(fuente, 0, 0, 0, 0, 0, 0, 0, 0, x, solid);<br />        dibujaImagen(screen, text_surface, 770,105 );<br /></code></dd></dl><br /><br />y para hacer esto utilizo la funcion:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>enum textquality {solid, shaded, blended};<br /><br />  SDL_Surface *drawtext(TTF_Font *fonttodraw, char fgR, char fgG, char fgB, char fgA,<br />  char bgR, char bgG, char bgB, char bgA, char text&#91;&#93;, textquality quality)<br />  {<br />    SDL_Color tmpfontcolor = {fgR,fgG,fgB,fgA};<br />    SDL_Color tmpfontbgcolor = {bgR, bgG, bgB, bgA};<br />    SDL_Surface *resulting_text;<br /><br />    if (quality == solid) resulting_text = TTF_RenderText_Solid(fonttodraw, text, tmpfontcolor);<br />    else if (quality == shaded) resulting_text = TTF_RenderText_Shaded(fonttodraw, text, tmpfontcolor, tmpfontbgcolor);<br />    else if (quality == blended) resulting_text = TTF_RenderText_Blended(fonttodraw, text, tmpfontcolor);<br /><br />    return resulting_text;<br />  }<br /><br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Mié Jul 25, 2012 7:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2012-07-25T00:03:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6951#p6951</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6951#p6951"/>
<title type="html"><![CDATA[Re: Ayuda con posible bug de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6951#p6951"><![CDATA[
Desaparecen en el mismo momento siempre? desaparecen cuando algún objeto se pinta en un determinado lugar?<br />Son mis dudas, a simple vista no te puedo decir nada mas, lo que si, es que dudo muchísimo que sea un bug de la biblioteca.<br />tambien checa cuanta memoria esta consumiendo el juego.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Jul 25, 2012 12:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-07-24T22:05:46+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6950#p6950</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6950#p6950"/>
<title type="html"><![CDATA[Re: Ayuda con posible bug de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6950#p6950"><![CDATA[
Bueno, primero que nada, creo que lo mas apropiado es intentar averiguar que sucede en el momento en el cual dejan de parecer el puntage, podría ser que la función comienza a recibir argumentos nulos, podría ser que la condición no se cumple adecuadamente, o un verdadero bug en la librería...<br /><br />Te sugiero mandar a la terminal lo que en teoría debería de recibir la función, eso podría servir para empezar...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mar Jul 24, 2012 10:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Faqndo]]></name></author>
<updated>2012-07-24T06:41:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6949#p6949</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6949#p6949"/>
<title type="html"><![CDATA[Ayuda con posible bug de SDL_ttf]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1524&amp;p=6949#p6949"><![CDATA[
Buenas, estoy teniendo un problema del que me di cuenta de que estaba casi 1 mes despues de que apareciera, el problema es tal que asi:<br /><br /><br />Tengo en proyecto un juego hack and slash isometrico, donde vas matando bichitos por el mapa, el juego estaba bastante avanzado y estaba a punto de terminar de diseñar graficamente el juego y empezar la fase de puesta de sonido, pero me aparecio el problema de que, cuando pasa un tiempo despues de que empieze la partida, los indicadores de atauqe, defensa, velocidad y todo lo que muestre numeros, desaparece y no vuelve a aparecer, lo cual me esta trayendo de cabeza porque no tengo ni idea de porque lo hace, ya que, los blit_surfaces de dibujo de las letras estan con el mismo if que las demas cosas que si que se muestran, como monstruos o el mapa.<br /><br /><br /><br />Alguien tiene idea asi a primera vista de lo que le podria pasar?, <br /><br />PD:pondria el codigo entero, pero son 3600 lineas de codigo el main y claro, mas de uno se perderia porque hay implementadas muchas cosas.<br /><br /><br /><br />PD2: ahora me he dado cuenta de que el post esta en mal lugar, si algun admin puede moverlo se lo agradeceria mucho<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2607">Faqndo</a> — Mar Jul 24, 2012 6:41 am</p><hr />
]]></content>
</entry>
</feed>