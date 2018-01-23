<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=81" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-05-11T23:17:29+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=81</id>
<entry>
<author><name><![CDATA[MalcolmX]]></name></author>
<updated>2007-05-11T23:17:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=305#p305</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=305#p305"/>
<title type="html"><![CDATA[Empezando tropezando :/]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=305#p305"><![CDATA[
No puedo crear nuevo tema, lo siento<br /><br />Buenas noches... como digo, estoy empezando con el tema de SDL en MacOS X y descargando el SDL.dmg, SDL-Extra.dmg, SDL_image.dmg, SDL_mixer.dmg, al intentar compilar el codigo de <a href="http://www.losersjuegos.com.ar/referencia/articulos/instalar_sdl/instalar_sdl.php" class="postlink">http://www.losersjuegos.com.ar/referencia/articulos/instalar_sdl/instalar_sdl.php</a> la terminal me devuelve los siguientes errores:<br /><br />/usr/bin/ld: can't locate file for: -lSDL_mixer<br />collect2: ld returned 1 exit status<br /><br />con la orden: gcc -o test main.c -lSDL -lpthread -lSDL_mixer -lSDL_image<br /><br />La verdad ya no se que provar y que buscar en google para solucionar el tema. Gracias por su ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1402">MalcolmX</a> — Vie May 11, 2007 11:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-04-27T20:22:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=284#p284</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=284#p284"/>
<title type="html"><![CDATA[Por favor ayuda con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=284#p284"><![CDATA[
Saludos, ¿has intentado ejecutar el siguiente comando?:<br /><br />   sudo apt-get install -f<br /><br />Si tu problema aún continúa comunicate a mi dirección de correo<br />electrónico y permiteme acceso a tu equipo con &quot;ssh&quot;, de forma<br />que puede resolver tu problema de manera remota. Necesitaría <br />que tu equipo esté accesible desde una IP pública.<br /><br />Mi dirección de correo figura al pie de la siguiente página:<br /><br />  <!-- m --><a class="postlink" href="http://www.losersjuegos.com.ar/comunidad/contactenos/contactenos.php">http://www.losersjuegos.com.ar/comunida ... ctenos.php</a><!-- m --><br /><br />Buena suerte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Abr 27, 2007 8:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shadow_of__soul]]></name></author>
<updated>2007-04-27T02:46:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=283#p283</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=283#p283"/>
<title type="html"><![CDATA[Por favor ayuda con SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=81&amp;p=283#p283"><![CDATA[
hi,<br /><br />soy programador y despues de muchos años con win hice una migracion total a kubuntu. mi problema surge al querer instalar los paquetes de las librerias sdl para desarrollo, en adept me tira error, que no la puede instalar, por consola y synaptic lo mismo, tengo actualizado el sistema hasta 6.10, he cambiado una y troa vez de repositorio, hasta con los de debian y nada, hasta he bajado desde el repositorio el paquete y me tira este error:<br /><br />s1hadow@s1hadow-desktop:~/Desktop$ sudo dpkg -i  libsdl1.2-dev_1.2.11-7ubuntu1_i386.deb<br />(Leyendo la base de datos ...<br />134767 ficheros y directorios instalados actualmente.)<br />Desempaquetando libsdl1.2-dev (de libsdl1.2-dev_1.2.11-7ubuntu1_i386.deb) ...<br />dpkg: error al procesar libsdl1.2-dev_1.2.11-7ubuntu1_i386.deb (--install):<br /> intentando sobreescribir `/usr/share/man/man3/SDL_AddTimer.3.gz', que está también en el paquete sdl-devel<br />dpkg-deb: el subproceso paste fue terminado por la señal (Tubería rota)<br />Se encontraron errores al procesar:<br /> libsdl1.2-dev_1.2.11-7ubuntu1_i386.deb<br /><br /><br />la verdad no se que mas hacer, por favor denme una mano a ver si las puedo istalar de una vez.<br />como acotacion estan instaladas las librerias sdl de amarok aunque no creoq ue sea problema <br /><br />desde ya muchas gracias por todo y su atencion<br /><br />By Shadow<br /><br />PD:aca esta el log del apt, tambien he limpiado la cache y registro  y tengo el mismo problema<br /><br />s1hadow@s1hadow-desktop:~/Desktop$ sudo apt-get install libsdl1.2-dev<br />Leyendo lista de paquetes... Hecho<br />Creando árbol de dependencias<br />Leyendo información de estado... Hecho<br />Los siguientes paquetes fueron instalados automáticamente y ya no son necesarios:<br />  supertux-data libopenal0a libdc1394-13 libgadu3 libavformat0d gaim-data libphysfs-1.0-0 libmjpegtools0c2a libzipios++0c2a libavcodec0d<br />  libmeanwhile1 filezilla-common libquicktime0 enigma-data libxerces27<br />Use «apt-get autoremove» para desinstalarlos.<br />Se instalarán los siguientes paquetes NUEVOS:<br />  libsdl1.2-dev<br />0 actualizados, 1 se instalarán, 0 para eliminar y 121 no actualizados.<br />Se necesita descargar 0B/726kB de archivos.<br />Se utilizarán 2822kB de espacio de disco adicional después de desempaquetar.<br />(Leyendo la base de datos ...<br />134767 ficheros y directorios instalados actualmente.)<br />Desempaquetando libsdl1.2-dev (de ..http://losersjuegos.com.ar/foro/libsdl1.2-dev_1.2.10-3ubuntu2_i386.deb) ...<br />dpkg: error al procesar /var/cache/apt/archives/libsdl1.2-dev_1.2.10-3ubuntu2_i386.deb (--unpack):<br /> intentando sobreescribir `/usr/share/aclocal/sdl.m4', que está también en el paquete sdl-devel<br />dpkg-deb: el subproceso paste fue terminado por la señal (Tubería rota)<br />Se encontraron errores al procesar:<br /> /var/cache/apt/archives/libsdl1.2-dev_1.2.10-3ubuntu2_i386.deb<br />E: Sub-process /usr/bin/dpkg returned an error code (1)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=53">shadow_of__soul</a> — Vie Abr 27, 2007 2:46 am</p><hr />
]]></content>
</entry>
</feed>