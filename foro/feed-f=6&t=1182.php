<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1182" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-06-28T14:59:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1182</id>
<entry>
<author><name><![CDATA[kingwar]]></name></author>
<updated>2011-06-28T14:59:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5688#p5688</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5688#p5688"/>
<title type="html"><![CDATA[Re: duda sobre juego en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5688#p5688"><![CDATA[
si pudieras poner el codigo completo te lo agradeceria, asi no se ve error aparente a lo mejor sea un error logico. pero necesitaria ver tu codigo. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2414">kingwar</a> — Mar Jun 28, 2011 2:59 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2011-06-18T05:49:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5670#p5670</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5670#p5670"/>
<title type="html"><![CDATA[Re: duda sobre juego en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5670#p5670"><![CDATA[
<blockquote><div><cite>d00ze escribió:</cite><br />veo que aumenta el consumo de RAM de dicho proceso, osea que lo achaco a que no estoy liberando bien la memoria<br /></div></blockquote><br />Es lo más probable, sin embargo, con lo que pones es muy difícil saber en qué parte de la aplicación es donde está fallando la administración de memoria.<br />De hecho, si la reserva de memoria la haces antes de iniciar el ciclo/bucle principal del juego, y la liberas hasta que este ha terminado, no deberías tener problemas con la memoria, los cuales deben estar apareciendo porque dentro del ciclo del juego estás reasignando o reservando memoria.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Sab Jun 18, 2011 5:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[d00ze]]></name></author>
<updated>2011-06-16T16:29:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5665#p5665</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5665#p5665"/>
<title type="html"><![CDATA[duda sobre juego en SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1182&amp;p=5665#p5665"><![CDATA[
Tengo desarrollado un juego con SDL, y al ejecutarlo cada vez que pasa el tiempo como que va mas despacio, luego mirando en los procesos, veo que aumenta el consumo de RAM de dicho proceso, osea que lo achaco a que no estoy liberando bien la memoria, os pongo un esquema de como tengo el juego, para ver si me podeis hechar una mano para solucionarlo.<br /><br />  librerias<br />  variables globales<br /><br />  main(){<br />    Inicio modulo SDL de video<br />    Creao la superficie principal  //SDL_SetVideoMode(800,600,24,SDL_HWSURFACE|SDL_DOUBLEBUF);<br /><br />    Cargo los sprites   //img=IMG_Load(archivo);   // cargo varios sprites<br /><br />    Bucle infinito{<br />      dibujo los sprites en la ventana  // SDL_BlitSurface  y SDL_Flip<br />      consulto el estado del teclado<br /><br />      bucle{  //recoge los eventos<br />keydown{<br />  //accciones<br />}<br />keyup{<br />         //acciones<br />}<br />    } <br />    Elimino los sprites cargados  //aqui es donde libero la memoria SDL_FreeSurface  // lo hago uno por cada sprite que tengo<br />  }<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2447">d00ze</a> — Jue Jun 16, 2011 4:29 pm</p><hr />
]]></content>
</entry>
</feed>