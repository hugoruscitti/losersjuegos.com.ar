<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1571" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-11-11T18:27:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1571</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2012-11-11T18:27:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7194#p7194</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7194#p7194"/>
<title type="html"><![CDATA[Re: SDL_Surface (error violacion acceso en memoria)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7194#p7194"><![CDATA[
&quot;python&quot;! xd<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Dom Nov 11, 2012 6:27 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-11-07T08:36:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7189#p7189</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7189#p7189"/>
<title type="html"><![CDATA[Re: SDL_Surface (error violacion acceso en memoria)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7189#p7189"><![CDATA[
Bien, por lo que leo, parece que no hay ningún error obvio. Bueno, sdl_freesurface no recibe como argumento un apuntador a SDL_Surface, pero no creo que este sea el error, (pero no esta de más hacer una prueba con SDL_FreeSurface(<span style="font-weight: bold">&amp;</span>img); -notase el ampersand para trasformar a puntero -).<br /><br />O podrías intentar crear un método publico que te de la imagen, ejemplo:<br /><br /><pre class="prettyprint linenums">//asumimos que imagen es privado y que es del tipo SDL_Surface *<br />class CFrame{<br />     private:<br />     SDL_Surface *image;<br />     /*todo el código restante de la clase aquí...*/<br />}<br /><br />SDL_Surface* CFrame::GetIma&#40;void&#41;<br />{ <br />return this-&gt;image;<br />}<br />void CFrame::unload&#40;&#41;<br />{<br />SDL_FreeSurface&#40;this-&gt;GetIma&#40;&#41;&#41;;<br />}</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Nov 07, 2012 8:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[setupybios]]></name></author>
<updated>2012-11-06T19:13:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7188#p7188</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7188#p7188"/>
<title type="html"><![CDATA[SDL_Surface (error violacion acceso en memoria)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1571&amp;p=7188#p7188"><![CDATA[
Hola amigos, Tengo un inconveniente en SDL con el metdo SDL_FreeSurface que libera las imagenes cargdas, estoy trabajando con visual Studio y m tira un error de acceso invalido en memoria(adjunto imagen de error) les cuento que creo un array d Sprites que tienen un metodo finalize q llama a SDL_FreeSurface, he mirado paso a paso como envia cada uno d los elementos del array y lo hace correctamente pero igual me tira el error en ese metodo de SDL. a ver si me pueden tirar un salvavidas y sino voy a tener que dejar sin liberar la memoria jeje, que no creo que sea lo mejor. Saludos y desde ya muchas gracias( adjunto el codigo)<br /><br /><span style="text-decoration: underline">Metodo de la clase CSprite q libera la imagen:</span><br /><br />void CSprite::finalize()<br />{<br />for (int i = 0; i &lt; cont; i++)<br />sprite[i].unload();   //El sprite puede tener varios frames cargados por eso es el for<br /><br />}<br /><br /><span style="text-decoration: underline">Metodo que llama a SDL_FreeSurface:</span> (De otra clase frame que guarda la imagen)<br /><br />void CFrame::unload()<br />{<br />SDL_FreeSurface(img);  //img es del tipo SDL_Surface y es quien almacena la imagen<br />}<br /><br /><span style="text-decoration: underline">Este es el codigo para finalizar los sprites:</span><br />for (int i = 0; i &lt; 5; i++)<br />menu[i].finalize();   //menu es del tipo CSprite<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2680">setupybios</a> — Mar Nov 06, 2012 7:13 pm</p><hr />
]]></content>
</entry>
</feed>