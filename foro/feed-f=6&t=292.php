<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=292" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-14T17:03:23+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=292</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2009-07-14T17:03:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2742#p2742</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2742#p2742"/>
<title type="html"><![CDATA[me pasaba lo mismo]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2742#p2742"><![CDATA[
Hola, al principio me pasaba lo mismo no reproducia el mp3, estuve aciendo varias pruevas, y avia musica que si reproducioa y otra que no, lo que me llevo a la comclucion que tal ves sea el formato del archivo,no es mp3, no se si tengas una referencia de las variables que hacepta la funcion para iniciar el audio, mas especificamente el formato de audio, se refiere al tamaño de los datos, y llega hasta 16 bits, mi conclucion fue que si intentas reproducir un mp3 de 32 bits, no se va a poder. use un conversor de audio mp3, y converti una cancion que no reproduia, despues de convertirla, el programa la toco sin ni un problema<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Jul 14, 2009 5:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cypax]]></name></author>
<updated>2009-02-28T23:23:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2164#p2164</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2164#p2164"/>
<title type="html"><![CDATA[Problema con archivos .mp3]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2164#p2164"><![CDATA[
otro error que veo es este en donde especifiques los datos del audio a reproducir:<br />ejemplo:<br /><br />tu codigo:<br />if(Mix_OpenAudio(MIX_DEFAULT_FREQUENCY, MIX_DEFAULT_FORMAT, 1, 4096) &lt; 0)<br /><br />trata a cambiarle por esto:<br />  if (Mix_OpenAudio(44100, MIX_DEFAULT_FORMAT, 2,4096) == -1)<br /><br />ojo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /> <br />checa la diferencia de lo dos codigos<br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /> <br /><br />epero y te sirva a mi si me funciono<br /><br />suerte  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2075">cypax</a> — Sab Feb 28, 2009 11:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cypax]]></name></author>
<updated>2009-02-28T22:52:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2163#p2163</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2163#p2163"/>
<title type="html"><![CDATA[espero y te ayude esto]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=2163#p2163"><![CDATA[
en mi opinion te puedo decir que yo tengo tu codigo y a mi me funciono añadiendole la ruta completa donde se encuentra el archivo music.mp3<br /><br /><br />modificale esto:<br />ejemplo.<br />musica = Mix_LoadMUS(&quot;C:/carpeta/music.mp3&quot;); <br /><br />no lo reproduce por que no lo encuentra el programa,no te tira error por que es un error en tiempo de ejecucion del programa.<br /><br />si quieres que te tire los errores mas estrictamente utiliza las funciones de sdl_error.<br /><br />trata de indicarle la ruta completa donde se encuentra (music.mp3)<br /><br />espero y te ayude....... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2075">cypax</a> — Sab Feb 28, 2009 10:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2008-04-14T00:17:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1156#p1156</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1156#p1156"/>
<title type="html"><![CDATA[Problema con archivos .mp3]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1156#p1156"><![CDATA[
Pues no tengo mucha idea sobre el asunto, pero <a href="http://docs.taoframework.com/Tao.Sdl/Tao.Sdl.SdlMixer.Mix_LoadMUS.html" class="postlink">consultando aquí</a> me ha llamado la atención esto:<br /><span style="font-style: italic">this might be a critical error...</span><br /><br />No se cuan crítico será.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Lun Abr 14, 2008 12:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alex_13_estu]]></name></author>
<updated>2008-04-13T13:48:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1151#p1151</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1151#p1151"/>
<title type="html"><![CDATA[Problema con archivos .mp3]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1151#p1151"><![CDATA[
¡Hola! Gracias por tu ayuda, pero no solucioné nada con lo del volumen... De todas formas graias. Os pongo un código que hice ahora para probar:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;iostream&gt;<br />#include &lt;SDL/SDL.h&gt;<br />#include &lt;SDL/SDL_mixer.h&gt;<br />using namespace std;<br /><br />int main&#40;int argc, char *argv&#91;&#93;&#41;<br />&#123;<br />    SDL_Event event;<br />    Mix_Music *musica;<br />    SDL_Surface* pantalla;<br />    int done = 0;<br />    <br />    if&#40;SDL_Init&#40;SDL_INIT_VIDEO|SDL_INIT_AUDIO&#41; &lt; 0&#41;<br />    &#123;<br />            cout &lt;&lt; &quot;No se puede iniciar SDL: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />            return 1;<br />    &#125;<br />    <br />    if&#40;Mix_OpenAudio&#40;MIX_DEFAULT_FREQUENCY, MIX_DEFAULT_FORMAT, 1, 4096&#41; &lt; 0&#41;<br />    &#123;<br />            cout &lt;&lt; &quot;No se puede iniciar el audio: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />            return 1;<br />    &#125;<br />    pantalla = SDL_SetVideoMode&#40;128, 128, 24, SDL_HWSURFACE|SDL_DOUBLEBUF&#41;;<br />    if&#40;pantalla == NULL&#41;<br />    &#123;<br />            cout &lt;&lt; &quot;No se puede iniciar el modo de vídeo: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />            return 1;<br />    &#125;<br />    <br />    musica = Mix_LoadMUS&#40;&quot;music.mp3&quot;&#41;;<br />    if&#40;musica == NULL&#41;<br />    &#123;<br />            cout &lt;&lt; &quot;No se puede cargar el audio: &quot; &lt;&lt; SDL_GetError&#40;&#41; &lt;&lt; endl;<br />            return 1;<br />    &#125;<br />    Mix_PlayMusic&#40;musica, -1&#41;;<br />    <br />    while&#40;done == 0&#41;<br />    &#123;<br />            while&#40;SDL_PollEvent&#40;&amp;event&#41;&#41;<br />            &#123;<br />                if&#40;event.type == SDL_QUIT&#41;<br />                    done = 1;             <br />            &#125;<br />    &#125;<br />    Mix_HaltMusic&#40;&#41;;<br />    <br />    Mix_FreeMusic&#40;musica&#41;;<br />    SDL_Quit&#40;&#41;;<br />    return 0;<br />&#125;<br /></code></dd></dl><br /><br />Tengo un archivo que se llama &quot;music.mp3&quot; en el directorio del programa (o sea, que el archivo existe). y sin embargo, no me funciona el programa. PComo puse el mecanismo para comprobar si se podía cargar la música, obtuve en &quot;stdout.txt&quot; el siguiente testo:<br /><br /><blockquote class="uncited"><div><br />No se puede cargar el audio: Module format not recognized<br /></div></blockquote><br /><br /><span style="font-weight: bold">&quot;Module format not recognized&quot;</span>... ¡Qué mala espina me da eso! ¿Alguien que tenga Windows lo puede probar a ver si le pasa lo mismo? ¿Alguien conoce alguna solución?<br /><br />Muchas gracias. Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1909">Alex_13_estu</a> — Dom Abr 13, 2008 1:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2008-04-12T17:11:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1141#p1141</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1141#p1141"/>
<title type="html"><![CDATA[Problema con archivos .mp3]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1141#p1141"><![CDATA[
En el codigo que uses para reproducir la musica no se si habras puesto la musica a algun volumen o simplemente comienzas a reproducirla, si no le especificas ningun volumen prueba ha indicarle algun volumen despues de cargarla o despues de ponerla a reproducir, yo a la musica en un programa que hice le indique el volumen antes de ponerla a reproducir y me funciono, (aunque no se si funciona o tiene que funcionar sin indicarle un volumen pues nunca he puesto musica a reproducir sin indicarle volumen). Espero que sea algo del volumen y lo puedas solucionar.<br /><br />Te pego el codigo que use yo por si te ayuda:<br /><dl class="codebox"><dt>Code: </dt><dd><code>musica1 = Mix_LoadMUS&#40;ARCHIVO_MUSICA1&#41;;<br />if&#40;musica1 != NULL&#41;&#123;<br />Mix_VolumeMusic&#40;60&#41;;<br />Mix_FadeInMusic&#40;musica1, 1, 500&#41;;<br />SDL_Delay&#40;300&#41;;<br />&#125;<br />else&#123;<br />printf&#40;&quot;ECM - No se pudo cargar el archivo de musica musica1.mp3\n&quot;&#41;;<br />&#125;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Abr 12, 2008 5:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alex_13_estu]]></name></author>
<updated>2008-04-12T13:07:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1138#p1138</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1138#p1138"/>
<title type="html"><![CDATA[Problema con archivos .mp3]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=292&amp;p=1138#p1138"><![CDATA[
¡Hola! Mi consulta es breve, pero lleva comiéndome la cabeza un tiempo. Tengo un archivo .mp3 que quiero cargar con SDL_Mixer, pero por mucho que lo intento no soy capaz. El programa no da ningún erro del tipo &quot;no existe el archivo&quot; o &quot;no se pudo cargar&quot;, si no que simplemente, cuando lo tiene que reproducir no lo hace. y sigue la ejecución, pero sin música, es como si no fuese capaz de entender el archivo. Sin embargo, un archivo de música en formato .mid sí que lo reproduce. He probado con distintos .mp3 y nada, por más que lo intento no hay forma. Y el código que uso para cargar un .mp3 es el mismo que para un .mid, los cargo en un Mix_Music* musica y los reproduzco y paro con las funciones típicas: Mix_PlayMusic(musica, -1), Mix_HalthMusic()... ¿Qué es lo que pasa? Espero que me podáis ayudar porque estoy algo desesperado y no le veo salida por ningún lado.<br /><br />Un saludo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1909">Alex_13_estu</a> — Sab Abr 12, 2008 1:07 pm</p><hr />
]]></content>
</entry>
</feed>