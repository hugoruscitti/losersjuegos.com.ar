<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1168" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-06T18:33:44+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=1168</id>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-06T18:33:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5622#p5622</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5622#p5622"/>
<title type="html"><![CDATA[Re: andar + sprite sheet - SDL - SOLUCIONADO!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5622#p5622"><![CDATA[
Me autorespondo, la funcion la realiza pero se puede mejorar muchisimo mas, lo dejo de ejemplo por si a alguien le pudiera hacer falta.<br />Si ha alguien le interesa podria subir la clase entera o el main.<br /><br />sprite.cpp<br /><pre class="prettyprint">sprite::sprite&#40;&#41;{<br />        ando=0;<br />        img=NULL;  // Del tipo SDL_Surface<br />        frame=1;<br />        partes=7; //numero de muñecos en la fila dentro del sprite sheet<br />        posx=0;<br />        speedx=4;<br />}<br />void sprite::estado&#40;char letter&#41;{<br />    if&#40;letter==&#39;r&#39;&#41;<br />        ando=1;<br />}<br />void sprite::avanzar&#40;&#41;{<br />    if&#40;ando&#41;{<br />        if&#40;frame&lt;partes&#41;{<br />            posx+=speedx;<br />            frame++;<br />        }<br />        else{<br />            frame=1;<br />            //ando=0;<br />        }<br />    }<br />}<br />void sprite::parar&#40;&#41;{<br />       ando=0;<br />       frame=1;<br />}<br />void sprite::pintar&#40;SDL_Surface *superficie&#41;{<br />    SDL_Rect ori,dest;<br /><br />    dest.x=posx;<br />    dest.y=posy;<br /><br />    ori.x=partw*&#40;frame-1&#41;;<br />    ori.y=filah;<br />    ori.w=partw;<br />    ori.h=parth;<br /><br />    SDL_BlitSurface&#40;img,&amp;ori,superficie,&amp;dest&#41;;<br />}</pre><br /><br />main.cpp<br /><pre class="prettyprint">{<br />//main<br />    LoadSprite&#40;&#41;;<br />    while&#40;!done&#41;{<br />           DibujaSprite&#40;ventana&#41;;<br />         <br />          if&#40;andando&#41;{<br />                personaje.avanzar&#40;&#41;;<br />                SDL_Delay&#40;15&#41;;<br />          }<br />          //eventos<br />          //KEYDOWN<br />          case SDLK_RIGHT:<br />                        personaje.estado&#40;&#39;r&#39;&#41;;<br />                        andando=true;<br />                        break;<br />          //KEYUP<br />          case SDLK_RIGHT:<br />                        andando=false;<br />                        personaje.parar&#40;&#41;;<br />                        break;<br />       }<br />DeleteSprite&#40;&#41;;<br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Lun Jun 06, 2011 6:33 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-05T15:30:58+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5620#p5620</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5620#p5620"/>
<title type="html"><![CDATA[Re: andar + sprite sheet - SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5620#p5620"><![CDATA[
pretendo realizar lo siguiente<br /> <a href="http://www.youtube.com/v/NtQFVjuhEMQ"></param><param target="_blank"><strong>object</strong></a> <p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Dom Jun 05, 2011 3:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-05T15:16:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5619#p5619</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5619#p5619"/>
<title type="html"><![CDATA[andar + sprite sheet - SDL - SOLUCIONADO !!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1168&amp;p=5619#p5619"><![CDATA[
Estoy intentando hacer que a la vez que ande mi personaje sobre el escenario, se mueva a la vez el muñeco, lo tengo en un spritesheet.<br />Lo tengo mas o menos implementado pero me funciona fatal, me lo realiza muy rapido. Os dejo el codigo:<br /><br />Edito: Esta solucionado en el ultimo post por si ha alguien le es de utilidad.<br /><br />sprite.cpp<br /><pre class="prettyprint">sprite::sprite&#40;&#41;{<br />    ando=0;<br />    posx=0;<br />    posy=0;<br />    //partw -&gt; ancho de cada imagen dentro del sprite sheet<br />    partw=60;<br />    parth=120;  // alto de cada dibujo del sprite sheet<br />}<br />void sprite::andar&#40;&#41;{<br />    ando=1;<br />}<br />void sprite::parar&#40;&#41;{<br />    ando=0;<br />    frame=0;<br />}<br />void sprite::avanzar&#40;&#41;{<br />    if&#40;ando&#41;{<br />        posx+=speedx;<br />        if&#40;frame&lt;2&#41;<br />            frame++;<br />        else{<br />            frame=0;<br />        }<br />    }<br />}<br />void sprite::pintar&#40;SDL_Surface *superficie&#41;{<br />    SDL_Rect ori,dest;<br /><br />    dest.x=posx+partw;<br />    dest.y=posy;<br /><br />    ori.x=partw*frame;<br />    ori.y=0;<br />    ori.w=partw;<br />    ori.h=parth;<br /><br />    SDL_BlitSurface&#40;img,&amp;ori,superficie,&amp;dest&#41;;<br />}</pre><br />main.cpp<br /><pre class="prettyprint">while&#40;!done&#41;{<br />    if&#40;andando&#41;{<br />         personaje.avanzar&#40;&#41;;<br />    }<br />    //...Eventos<br />    //KEYDOWN<br />    case SDLK_RIGHT:<br />        personaje.andar&#40;&#41;;<br />        andando=true;<br />        break;  <br />    //KEYUP<br />    case SDLK_RIGHT:<br />        personaje.parar&#40;&#41;;<br />        andando=false;<br />        break;</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Dom Jun 05, 2011 3:16 pm</p><hr />
]]></content>
</entry>
</feed>