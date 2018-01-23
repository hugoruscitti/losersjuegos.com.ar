<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=545" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-04-18T22:11:22+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=545</id>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-04-18T22:11:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=545&amp;p=2447#p2447</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=545&amp;p=2447#p2447"/>
<title type="html"><![CDATA[Forma correcta de usar TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=545&amp;p=2447#p2447"><![CDATA[
Hola, si el primer texto no te sirve, entonces tenes que liberar la memoria con SDL_FreeSurface. En cambio, si necesitas los dos textos, vas a necesitar dos punteros (dos superficies) distintas.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Sab Abr 18, 2009 10:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carleto]]></name></author>
<updated>2009-04-18T20:43:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=545&amp;p=2446#p2446</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=545&amp;p=2446#p2446"/>
<title type="html"><![CDATA[Forma correcta de usar TTF]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=545&amp;p=2446#p2446"><![CDATA[
Hola a todos<br /><br />Bueno, al final me he decidido por usar SDL_ttf (<!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?t=542">http://www.losersjuegos.com.ar/foro/viewtopic.php?t=542</a><!-- m -->), va a ser una cosa sencilla, si efectos especiales ni nada, simplemente con mostrar texto me vale, si veo que me queda bien, ya probaré ha hacer algo más elaborado.<br /><br />Pues bien, haciendo algunos ejemplos para familiarizarme con SDL_ttf me surgió una duda sobre su uso, lo voy a explicar mejor si pongo un pequeño ejemplo:<br /><br />suponemos que quiero imprimir varias cadenas de texto, cadena1, cadena2:<br /><br />si hago lo siguiente:<br /><br />sup = TTF_RenderText_Blended(tipoletra, cadena1, color_texto);<br />SDL_BlitSurface(sup, NULL, pantalla, &amp;pos);<br /><br />sup = TTF_RenderText_Blended(tipoletra, cadena2, color_texto);<br />SDL_BlitSurface(sup, NULL, pantalla, &amp;pos);<br /><br />Si se hace así al hacer el Render de la segunda cadena, ¿que ocurre con la que había echo antes? ¿se sobrescribe o el puntero apunta a otra zona de memoria, quedando la anterior perdida (no liberada)?<br /><br />¿mejor liberar (SDL_FreeSurface(sup)) antes de hacer el segundo render? ¿o es mejor usar dos superficies diferentes?<br /><br />En fin, seguro que son cosas básicas, pero es lo primero que hago con SDL_ttf<br /><br />Saludos a todos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1805">carleto</a> — Sab Abr 18, 2009 8:43 pm</p><hr />
]]></content>
</entry>
</feed>