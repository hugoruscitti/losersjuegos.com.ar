<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=380" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-09-17T18:44:53+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=380</id>
<entry>
<author><name><![CDATA[j4xl]]></name></author>
<updated>2008-09-17T18:44:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1673#p1673</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1673#p1673"/>
<title type="html"><![CDATA[[SDL] Problemas con SDL_FreeSurface() y/o SDL_SetColorKey()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1673#p1673"><![CDATA[
Hugo, permiteme que te diga que eres un crack... yo estaba desesperado porque no podía hacerlo y vas tu y me iluminas. Yo creía que esos dos bucles, con tanto volcado de superficies, en cada una de las iteraciones del &quot;bucle principal&quot; seria un desparramo de CPU pero resulta que después de implementar lo que me sugerías, el consumo tanto de RAM como de CPU a bajado, de forma bastante significativa de un 18-20% de CPU a un 10% y de 20.500kB de RAM a tan solo 8.000kB.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> tengo que mirar porqué, pero supongo que una superficie de unos 272 * 1000 px será muy pesada de hay lo de la RAM...<br /><br />Explico un poco lo que he hecho, yo antes dibujaba en dos superficies &quot;Grandes&quot; el Nivel y los Objetos y dependiendo de una variable &quot;Pos&quot; que me indica en que posición del nivel se encuentra el personaje la imprimía en Pantalla (ya tenia implementado el scroll del nivel y del fondo, uno mas rápido que el otro de esta forma parece que hay perspectiva). Después de leer este consejo he eliminado la superficie de los Objetos y ahora Dibujo en cada iteración los objetos, pero solo lo que se encuentran a la vista del Jugador el resto no. Y todo va mucho mejor, ahora miraré si es plausible hacer lo mismo con el nivel... por probar, no pasa nada, si veo que los recursos vuelven a bajar... todo ira mejor, sino pues lo dejaré tal cual.<br /><br /><br />PD:Una cosa que no había comentado es que mi idea es hacer este Juego para portarlo después a PSP, y, teniendo en cuenta la bajada de consumo, ahora estoy un poco menos preocupado...<br /><br />Pues lo dicho Gracias por el consejo.<br />DW<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1983">j4xl</a> — Mié Sep 17, 2008 6:44 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2008-09-17T00:59:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1669#p1669</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1669#p1669"/>
<title type="html"><![CDATA[Re: [SDL] Problemas con SDL_FreeSurface() y/o SDL_SetColorKe]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1669#p1669"><![CDATA[
Por lo visto no hay problemas ahí, si tengo la posibilidad de<br />tiempo voy a hacer un ejemplo pequeño a ver si me ocurre<br />lo mismo (solo si tengo tiempo).<br /><br /><blockquote><div><cite>j4xl escribió:</cite><br />¿Me proponeis alguna alternativa?<br /></div></blockquote><br /><br />Sí, en general no se imprimen los personajes (animados) de<br />un juego en otra superficie que no sea la pantalla. Debido a<br />que un nivel puede tener un tamaño muy grande, y no es<br />necesario imprimir y limpiar una superficie del tamaño del<br />nivel completo, si es que la pantalla es mas pequeña.<br /><br />En su lugar, se suele almacenar en una variable la posición de<br />la cámara, alcanza con una sola variable que indique cuanto se<br />ha desplazado el nivel. Luego imprimes el fondo, la capa que le<br />sigue y por último lees uno a uno los elementos animados del<br />juego y los imprimes desplazados tanto como te indique la<br />variable que tiene el desplazamiento de la cámara.<br /><br />De esta forma, no es necesario limpiar una superficie, todo lo<br />que haces sobre la pantalla se limpia cuando imprimes <br />nuevamente el fondo del escenario.<br /><br />El juego Chanta Clauss tiene un desplazamiento con cámara<br />que te puede servir, cualquier cosa nos avisas.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Sep 17, 2008 12:59 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[j4xl]]></name></author>
<updated>2008-09-16T10:11:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1665#p1665</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1665#p1665"/>
<title type="html"><![CDATA[[SDL] Problemas con SDL_FreeSurface() y/o SDL_SetColorKey()]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=380&amp;p=1665#p1665"><![CDATA[
Hola a todos los integrantes del foro, mi nombre es Jairo tengo 20 años y soy estudiante de Ingeniería Informática de Sistemas. (Una pequeña presentación para ser/parecer un poco formal).<br />    Estoy haciendo un juego estilo Mario con SDL, empece en Junio se puso peleón y lo dejé ahora lo he retomado, siempre que he buscado algo referente a SDL (desde como instalarlo para Devc++, hasta algunas dudas) el resultado estaba en esta pagina por eso he decidido formar parte de ella.<br /><br />    Bien ahora mi duda/trauma/frustración (porque me frustra... en serio) el Juego gráficamente consta de tres capas (SDL_Surface) una es el fondo, la segunda es el &quot;nivel&quot;, que se construye a partir de un fichero de texto con tiles de 16*16px, y la tercera son los &quot;objetos&quot;, es decir aquello con lo que interactuas también construida de la misma forma que el nivel.<br />    El fondo es una imagen cargada directamente con <span style="color: red">IMG_Load().</span><br />    Para el Nivel y los Objetos creo dos superficies con <span style="color: red">SDL_CreateRGBSurface() </span>sobre las cuales voy poniendo las tiles.<br /><br />    El Nivel una vez creado no cambia para nada, pero en cambio los objetos si lo hacen y ademas resulta que es la capa de mas al frente (la puedo poner detras del nivel pero no detrás del fondo) para cambiarlo lo borro con <span style="color: red">SDL_FillRect()</span> con un color negro puro y después vuelvo a dibujar las tiles con los cambios realizados, así una vez hecho esto hago <span style="color: red">SDL_SetColorKey()</span> con el mismo negro, la misma profundidad... y se supone que debería hacerlo transparente, pero no, lo deja negro así que no veo el fondo ni el nivel.<br />    Con la desesperación he intentado copiar la superficie, crearla de nuevo y después liberar la copia (no es copia profunda sino la copia de la dirección mediante los punteros) pero al hacer <span style="color: red">SDL_FreeSurface()</span> me peta (en windows... en linux no aunque en linux tengo otros problemas.... XD)<br /><br />Para ayudar un poco hago un &quot;croquis&quot; del codigo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>void CNivel::CargarObjetos&#40;char *ObjFile&#41;&#123;<br />     //....<br />     //leo un fichero y lo cargo en memoria TxtObjetos&#91;y&#93;&#91;x&#93;<br />     //....<br />     //Creo la Superficie de los objetos<br />     ImgObjetos = SDL_CreateRGBSurface&#40;SDL_SWSURFACE, 16*ANivel, 272, 32, 0xff000000, 0x00ff0000, 0x0000ff00, 0x000000ff&#41;;<br />     DibujarObjetos&#40;&#41;;<br />&#125;<br /><br />void CNivel::DibujarObjetos&#40;&#41;&#123;<br />    int i, j;<br />    SDL_FillRect&#40;ImgObjetos, NULL,  SDL_MapRGB&#40;ImgObjetos-&gt;format,0,0,0&#41;&#41;;<br />    for&#40;i=0;i&lt;17;i++&#41;&#123;//Doble bucle for que se encarga de leer TxtObjetos de memoria y dibujar en ImgObjetos<br />        for&#40;j=0;j&lt;ANivel;j++&#41;&#123;<br />            switch&#40;TxtObjetos&#91;i&#93;&#91;j&#93;&#41;&#123;<br />                case 'a':<br />                    Objetos&#91;0&#93;.SetX&#40;j*16&#41;;<br />                    Objetos&#91;0&#93;.SetY&#40;i*16&#41;;<br />                    Objetos&#91;0&#93;.Mostrar&#40;ImgObjetos&#41;;<br />                    break;<br />                case 'b':<br />                    Objetos&#91;1&#93;.SetX&#40;j*16&#41;;<br />                    Objetos&#91;1&#93;.SetY&#40;i*16&#41;;<br />                    Objetos&#91;1&#93;.Mostrar&#40;ImgObjetos&#41;;<br />                    break;<br />                case 'c':<br />                    Objetos&#91;2&#93;.SetX&#40;j*16&#41;;<br />                    Objetos&#91;2&#93;.SetY&#40;i*16&#41;;<br />                    Objetos&#91;2&#93;.Mostrar&#40;ImgObjetos&#41;;<br />                    break;<br />                case 'd':<br />                    Objetos&#91;3&#93;.SetX&#40;j*16&#41;;<br />                    Objetos&#91;3&#93;.SetY&#40;i*16&#41;;<br />                    Objetos&#91;3&#93;.Mostrar&#40;ImgObjetos&#41;;<br />                    break;<br />                case 'e':<br />                    Objetos&#91;4&#93;.SetX&#40;j*16&#41;;<br />                    Objetos&#91;4&#93;.SetY&#40;i*16&#41;;<br />                    Objetos&#91;4&#93;.Mostrar&#40;ImgObjetos&#41;;<br />                    break;<br />                default:<br />                    break;<br />            &#125;<br />        &#125;<br />    &#125;<br />    if&#40;SDL_SetColorKey&#40;ImgObjetos, SDL_SRCCOLORKEY|SDL_RLEACCEL, SDL_MapRGB&#40;ImgObjetos-&gt;format,0,0,0&#41;&#41;==-1&#41;&#123;<br />        printf&#40;&quot;Error al aplicar Transparencias.\n&quot;&#41;;<br />    &#125;<br />&#125;<br /><br />//Funcion que se llama cada vez que se toca un objeto y se tiene que &quot;quitar&quot;<br />void CNivel::QuitarObjeto&#40;int x, int y&#41;&#123;<br />    TxtObjetos&#91;y&#93;&#91;x&#93;=0; //Pone a 0 el punto donde a partir de ahora no se dibujara nada<br />    DibujarObjetos&#40;x, y&#41;; //Vuelvo a redibujar la superficie<br /><br />&#125;<br /></code></dd></dl><br /><br />¿Hay algun tipo de incompatibilidad entre <span style="color: red">SDL_CreateRGBSurface()</span> y <span style="color: red">SDL_SetColorKey()</span>?<br /><br />Todas las superficies tienen una profundidad de 32bpp ya que uso png's por tanto no creo que sea problema de la profundidad del color...<br /><br />¿Me proponeis alguna alternativa?<br /><br />Gracias.<br /><br />DEW<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1983">j4xl</a> — Mar Sep 16, 2008 10:11 am</p><hr />
]]></content>
</entry>
</feed>