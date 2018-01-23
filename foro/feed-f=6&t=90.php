<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=90" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-05-22T16:40:13+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=90</id>
<entry>
<author><name><![CDATA[Shock]]></name></author>
<updated>2007-05-22T16:40:13+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=324#p324</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=324#p324"/>
<title type="html"><![CDATA[Al rotar con SDL_rotozoomSurface desaparece]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=324#p324"><![CDATA[
Aiya!<br /><br />No hay manera... he mirado por todos lados y no encuentro ningún error. Además de girar con el centro, se desplaza hacia arriba-izquierda cada vez que se mueve. Vamos a ver paso por paso:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Cannon::Cannon&#40;&#41; &#123;<br />superficie=Gestor::ElGestor&#40;&#41;-&gt;CargarImagen&#40;&quot;img/cannon.bmp&quot;,1&#41;;<br />   superficie_orig=superficie;<br />   <br />   dest.x=320;<br />   dest.y=240;<br />   dest.w=0;<br />   dest.h=0;<br />&#125;</code></dd></dl><br /><br />Este es el constructor de la clase Cannon, que tiene una instancia cannon. Es un cañón que gira dándole a los lados. dest es un SDL_Rect, como pos en tu código.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void Cannon::Mover&#40;bool dir&#41; &#123;<br />   switch&#40;dir&#41; &#123;<br />      case 0: // Gira izquierda<br />         superficie=rotozoomSurface&#40;superficie_orig,10.0,1.0,1&#41;;<br />         break;<br />      case 1: // Gira derecha<br />         superficie=rotozoomSurface&#40;superficie_orig,-10.0,1.0,1&#41;;<br />         break;<br />   &#125;<br />   <br />   dest.x-=&#40;superficie-&gt;w-superficie_orig-&gt;w&#41;/2;<br />   dest.y-=&#40;superficie-&gt;h-superficie_orig-&gt;h&#41;/2;<br />&#125;<br /></code></dd></dl><br /><br />Según la dirección a la que se mueve, se mueve 10 o -10 grados... no veo ningún error... al final he añadido lo del centro.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_BlitSurface&#40;cannon.Superficie&#40;&#41;,NULL,Gestor::ElGestor&#40;&#41;-&gt;Pantalla&#40;&#41;,&amp;cannon.dest&#41;;<br /></code></dd></dl><br /><br />El blitting... no tiene mucho secreto. cannon.Superficie() devuelve la variable superficie.<br /><br />Me estoy desesperando porque no encuentro el fallo... ¿Alguna idea? ¿Algo? Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.[/code]<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1463">Shock</a> — Mar May 22, 2007 4:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-05-18T23:53:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=314#p314</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=314#p314"/>
<title type="html"><![CDATA[Al rotar con SDL_rotozoomSurface desaparece]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=314#p314"><![CDATA[
Mira el código de arriba de nuevo, lo actualicé. <br /><br />Me faltaba el código donde se modifica la posición de la imagen, de esta forma la rotación es con respecto al centro de la imagen.<br /><br />S2!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Vie May 18, 2007 11:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shock]]></name></author>
<updated>2007-05-18T19:00:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=313#p313</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=313#p313"/>
<title type="html"><![CDATA[Al rotar con SDL_rotozoomSurface desaparece]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=313#p313"><![CDATA[
Aiya!<br /><br />Gracias, ya sí la veo, qué torpe <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br />Ahora me pasa otra cosa. Al rotar, además de rotar, se traslada, es decir, cuando le doy a izquierda o a derecha, además de rotar, se mueve hacia abajo-derecha. He visto el ejemplo de rotar y escalar que ponéis y no pasa eso, he revisado el código pero no veo la diferencia. ¿Qué pasa?<br /><br />EDITO: Ahora que lo pienso debe de ser un problema externo a eso, ya que parece que afecta al rectángulo de destino, no a la superficie... Voy a ver.<br /><br />EDITO 2: Pues parece que no es de los rectángulos destino... la verdad, no sé de qué es ._.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1463">Shock</a> — Vie May 18, 2007 7:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rcaf]]></name></author>
<updated>2007-05-18T18:46:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=312#p312</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=312#p312"/>
<title type="html"><![CDATA[Al rotar con SDL_rotozoomSurface desaparece]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=312#p312"><![CDATA[
El problema está en el valor del parámetro zoom que le pasas a la función rotozoomSurface, recuerda que su prototipo es:<br /><br /><span style="font-weight: bold">SDL_Surface * rotozoomSurface (SDL_Surface *src, double angle, double zoom, int smooth);<br /></span><br /><br />Por lo tanto para no hacer zoom y mantener el tamaño original debes pasar el valor 1.0 en el parámetro zoom, y no 0 (por eso no la ves!), es decir:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>// Girado 10 grados y tamaño original<br />superficie2=rotozoomSurface&#40;superficie, 10, 1.0, 0&#41;;<br /></code></dd></dl><br /><br />Otro consejo, la superficie que devuelve la función rotozoomSurface guardala en otra superficie.<br /><br />La función que utilizo para dibujar imagenes rotadas o escalas en tiempo real es la siguiente:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void DrawSurface&#40;SDL_Surface *src, int x, int y, float zoomx, float zoomy, float angle&#41;<br />&#123;<br />    // Superficie temporal con las modificaciones correspondientes<br />    SDL_Surface *tmp;<br /><br />    // Posición donde dibujaremos la superficie en pantalla<br />    SDL_Rect pos=&#123;x, y, 0, 0&#125;;<br /><br />    // Creamos superficie rotada y/o escalada sin anti-aliasing<br />    tmp=rotozoomSurfaceXY&#40;src, angle, zoomx, zoomy, 0&#41;;<br /><br />    // Arreglo posición de la imagen ya que la rotación<br />    // es con respecto al centro de la imagen<br />    pos.x -= &#40;tmp-&gt;w - src-&gt;w&#41; / 2;<br />    pos.y -= &#40;tmp-&gt;h - src-&gt;h&#41; / 2;<br /><br />    // Dibujamos en pantalla la nueva superficie<br />    // Nota: screen es la variable que nos devolvió<br />    // la función SDL_SetVideoMode<br />    SDL_BlitSurface&#40;tmp, NULL, screen, &amp;pos&#41;;<br /><br />    // Eliminamos de la memoria la superficie temporal<br />    SDL_FreeSurface&#40;tmp&#41;;<br />&#125; <br /></code></dd></dl><br /><br />Ojo, que la función anterior puede bajar el rendimiento si es llamada demasiadas veces dentro del game loop, ya que estamos realizando constantemente cálculos de rotación y escalado, y además creando y liberando memoria para superficies.<br /><br />Una posible optimización al utilizar muchas transformaciones (rotación, escalado) en un juego,  es generarlas antes del ciclo y almacenarlas en varias superficies.<br /><br />Saludos!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=8">rcaf</a> — Vie May 18, 2007 6:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Shock]]></name></author>
<updated>2007-05-18T18:18:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=310#p310</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=310#p310"/>
<title type="html"><![CDATA[Al rotar con SDL_rotozoomSurface desaparece]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=90&amp;p=310#p310"><![CDATA[
Aiya!<br /><br />Antes de todo aiya, soy nuevo aquí. Os encontré buscando info de SDL_gfx. Parecéis un grupo interesante, y sabéis lo que estáis haciendo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" />.<br /><br />Bueno, estoy haciendo mi primer jueguecillo con SLD. El caso es que quiero rotar una imagen al pulsar una tecla, y esto es lo que he hecho.<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void Cannon::Mover&#40;bool dir&#41; &#123;<br />   switch&#40;dir&#41; &#123; <br />      case 0: // Gira izquierda<br />         superficie=rotozoomSurface&#40;superficie,10,0,0&#41;;<br />         break;<br />      case 1: // Gira derecha<br />         superficie=rotozoomSurface&#40;superficie,-10,0,0&#41;;<br />         break;<br />   &#125;<br />&#125;<br /></code></dd></dl><br /><br />Es decir, se movería 10 grados al tocar una tecla. Pero la cosa es que, en vez de girar, la imagen desaparece completamente... el blitting es así:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>SDL_BlitSurface&#40;cannon.Superficie&#40;&#41;,NULL,Gestor::ElGestor&#40;&#41;-&gt;Pantalla&#40;&#41;,&amp;cannon.Destino&#40;&#41;&#41;;</code></dd></dl><br /><br />¿Qué estoy haciendo mal? Gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1463">Shock</a> — Vie May 18, 2007 6:18 pm</p><hr />
]]></content>
</entry>
</feed>