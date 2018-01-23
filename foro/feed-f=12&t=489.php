<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=489" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-15T16:46:57+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=489</id>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-15T16:46:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2291#p2291</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2291#p2291"/>
<title type="html"><![CDATA[H2Omega Game Engine 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2291#p2291"><![CDATA[
Gracias lacabra25 me a quedado claro eso de las .dll, estaba algo perdido con respecto eso... <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Dom Mar 15, 2009 4:46 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-03-15T12:35:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2287#p2287</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2287#p2287"/>
<title type="html"><![CDATA[Re: Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2287#p2287"><![CDATA[
<blockquote><div><cite>sofoke escribió:</cite><br />... hacer una .dll necesita codigo exclusivo de windows ...<br /></div></blockquote><br /><br />Sofoke, en cierto modo estas en lo cierto ya que una DLL no es mas que una libreria dinamica que son trozos de instrucciones usadas por varios programas y que para economizar (memoria por ejemplo) lo que se hace es compilar las instrucciones en un archivo separado del programa que cuando se carga en memoria para un programa, si otro programa necesita la misma libreria dinamica la usaria estando ya en memoria, para esto pues si se necesita codigo que no es portable, pero si el codigo de la libreria dinamica es portable, para que un programa no tenga que incluir codigo no portable lo que se suele hacer es crear librerias estaticas de forma que el programa enlaza con la libreria estatica (esto si es multiplataforma) y la libreria estatica es la que enlaza con la dinamica (aqui la parte monoplataforma). Por ejemplo SDL tiene DLL para windows y librerias dinamicas para GNU/Linux, asimismo tienes librerias estaticas para windows y para GNU/Linux, un programa simplemente enlaza con la libreria estatica (ya sea compilado en GNU/Linux o en Windows) y esta se encarga de enlazar a la libreria dinamica, de este modo se mantiene portable, obviamente supone mas trabajo pues es necesario hacer una compilacion condicional en la libreria dinamica y diferentes librerias estaticas segun el sistema o una compilacion condicional si no es mucho lo que cambia de un sistema a otro.<br /><br />Espero haber podido ayudar si tenias cualquier duda respecto a esto Sofoke y estoi de acuerdo con lo que comentas, la actitud de raito en este tema abierto puede llegar a ser insultante, ya no solo por en un foro que fomenta el software libre presentarnos software privativo y encima pedir ayuda para mejorarlo, sino por que si ha estado viendo el codigo fuente de los ejemplos de la web y le ha gustado poder aprender del codigo de otros es una ironia negarselo a los demás, porque si ha estado viendo articulos de esta web y le ha gustado aprender, es una ironia negarselo a otros, porque si le ha gustado ser libre usando software libre es una hipocresia negarselo a otros.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Mar 15, 2009 12:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-03-15T04:16:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2286#p2286</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2286#p2286"/>
<title type="html"><![CDATA[Re: Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2286#p2286"><![CDATA[
Hay algo que yo todavia no comprendo (perdonen mi ignorancia)+<br /><blockquote><div><cite>Raito escribió:</cite><br />Con el tema de las librerias dinámicas lo he hecho así para poder mejorar el rendimiento en Windows y para evitar recompilar si hay que hacer modificaciones menores.<br /><br />Lo de portarlo a otros sistemas no es problemas, ya que el código es totalmente multiplataforma, pero no lo he compilado en sistemas UNIX o Mac debido a que no uso esos sistemas.<br /></div></blockquote><br />Hace mucho no programo en windows pero segun recuerdo para hacer una .dll necesita codigo exclusivo de windows de lo contrario podriamos tenerla en Linux Mac y etc...<br />si estoy en un error me disculpo, pues nunca hice una libreria dinamica... Creo que nunca me vi en la necesidad de semejante rriesgo (lo digo por que siento se aislaria mi codigo a un sistema)<br /><br />Ahora con lo respecto a si lo quieres liberar o no, y como dice el amigo = 'lacabra25' es irazional e incluso insultante (a mi modo de ver) que en un foro donde se fomenta el software libre des a conocer una libreria privatiba y pidas ayuda para mejorarla....<br />Lo que me suena mas ironico (que muchos lo hacen) es usar un IDE libre para programar un software privado... (no estoy diciendo que seas el unico, pero si que es algo raro...)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Dom Mar 15, 2009 4:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-03-15T00:19:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2284#p2284</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2284#p2284"/>
<title type="html"><![CDATA[H2Omega Game Engine 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2284#p2284"><![CDATA[
Raito, voi a decirte varias cosas y espero poder plasmarlas de forma ordenada y clara en este post sin que se entienda mal nada.<br /><br />Para empezar, eres libre de no compartir la filosofia del software libre si esa es la conclusion a la que has llegado despues de leerte el documento que ya te han recomendado, solo tengo una pregunta ¿podrias argumentarme que te ha llevado a esa conclusion? es mas que nada por curiosidad y por poder escribir mas en este tema abierto ya que no lo entiendo.<br /><br />Como veo que tu engine usa dll lo que llamais engine es de forma formal una libreria por lo que deberias ponerle una licencia en primer lugar (o por lo que he leido, un copyright en el que detalles las condiciones de uso).<br /><br />Como supongo que habras leido en la pagina de inicio de este sitio &quot;losersjuegos&quot;, es un grupo de programadores y artistas que hacen juegos bajo la licencia GPL por lo que si tu biblioteca no es libre, tiene poco sentido que la anuncies aqui ya que no es util a nadie de aqui que la quisiera usar para hacer un programa libre puesto que de nada sirve que el programa sea libre si para poderlo usar el usuario necesita una biblioteca privativa, es como decirle a una persona que es libre y no se la va a llevar a la carcel y ponerle unas esposas.<br /><br />Como no se nada de ti mas que lo que he leido en este tema hay algunas cosas que debo suponer y otras que dezconozco por completo sin poder suponerlas. ¿como has aprendido a programar?, ¿como crees que se aprende mejor a programar, leyendo mil y pico paginas de un libro y recibiendo durante semanas errores de un compilador o leyendo codigo de programas que funcionan y añadiendo pequeños cambio para asi aprender a programar codigo extenso aprendiendo primero a programar trozos pequeños? si tu elegcion es la segunda opcion a esta ultima pregunta, eso solo es posible con software libre; ¿te gustaria llegar a un restaurante y cuando preguntases que que lleva el plato que quieres pedir te dijeran &quot;no es asunto suyo, no tiene por que saber nada del plato, simplemente comaselo&quot;? imagina que eres diabetico o celiaco ¿te arriesgarias a pedir el plato? imagina que no te gusta el limon y el plato que quieres pedir lo contiene pero como no sabes que lo tiene lo pides, despues no te lo comes por que no te gusta y te lo cobran igual pero no era asunto tuyo saber que tiene el plato que pides, pues con el software es igual, las recetas son instrucciones para un cocinero y un programa instrucciones para un ordenador pero igual que como comensal es algo normal que si preguntas que lleva un plato te lo digan tambien deberia ser normal que si un usuario pregunta &quot;¿que coño hace este software?&quot; reciba como respuesta el codigo del programa. A cualquiera que le preguntes como se hace una tortilla (tortilla francesa, no se como se dira en tu pais) seguro que te dira que batiendo huevos echandole sal y cocinandola en una sarten (despues habra quien le eche alguna otra cosa...) ¿ves normal que todos tuviesemos que comernos la tortilla igual, huevos batidos y cocinados simplemente? ¿no te parece mas normal que si le quieres echar (por ejemplo) jamon o queso o un toque de pimienta pudieses hacerlo? pues con el software es igual, si es el usuario quien va a usar el software en su ordenador, ¿por que no puede cambiarlo para que se adapte a lo que necesita?. Ya que comentas que tu biblioteca usa SDL ¿que te parece SDL? supongo que lo suficiente buena como para usarla, como ya sabes SDL es software libre, ¿no te parece ironico, o por lo menos hipocrita, que no publiques tu biblioteca como software libre pero sin embargo uses una biblioteca que si es software libre?, ¿no crees que el que SDL sea software libre habra echo que diferentes personas la hayan podido ir mejorando aportando cada uno una parte de codigo y modificaciones?, ¿no te ha picado la curiosidad por aprender y has echado un vistazo al codigo de SDL nunca? ¿no te gustaria que si usas algo puedas aprender como funciona? ¿nunca de pequeño has cogido un despertador, ese coche radiocontrol que se te rompio o cualquier trasto asi y lo has abierto para ver como funciona por la curiosidad de aprender que hace que funcione? ¿nunca has querido cambiar algo de windows (digo windows por ser el sistema que tu usas) y cambiarlo por que no te gusta simplemente o por que crees que podrias mejorarlo? pues con software privativo no puedes saber como funcionan las cosas, no puedes cambiarlas, no tienes ninguna libertad sino que eres un simple esclavo; con el software libre eres libre.<br /><br />No se si lo sabras pero el software libre puede distribuirse ya sea gratuitamente o cobrando (por si es el dinero por lo que no te gusta el software libre).<br /><br />Has dicho que tu biblioteca solo la has compilado para windows y no la has compilado para otros sistemas por que no los usas, ¿que te hubiera parecido que SDL no estuviese compilada para windows y no te diesen el codigo fuente y te dijeran &quot;si quieres usar SDL usa GNU/Linux&quot;? ¿mal verdad? pues es lo que tu estas haciendo al no ser tu biblioteca software libre, nadie tiene tu codigo fuente y aunque lo tuviesen de que sirve si no podrian compilarlo y usarlo en otros sitemas, obligas a la gente a o usar el sistema que tu quieras o no usar tu biblioteca (como una dictadura, para que lo entiendas). Quieres que lo probemos para ir diciendote los fallos que le encontremos y que quieres encontrar gente que te ayude a mejorarlo ¿COMO SI NO DEJAS QUE SEAMOS LIBRES DE PODER AYUDARTE A MEJORARLO?, NO NOS DEJAS AYUDARTE A MEJORARLO sin el codigo fuente ES IMPOSIBLE que te podamos AYUDAR ademas de que me parece hipocrita que pidas ayuda para mejorar un software privativo aqui y encima eso, quieres ayuda para mejorarlo pero no aceptas que los demas lo puedan modificar y mejorar ni que puedan aprender de el, quieres ayuda pero no dar ayuda a la comunidad de la que puedes recibir ayuda.<br /><br />Yo estaria dispuesto a ayudarte a mejorarlo, tengo algunos codigos en C con los que obtener numeros aleatorios que podrian ser de utilidad para dar aleatoriedad y realismo por consiguiente al sistema de particulas, pero no puedo ayudar a un software privativo, tengo principios morales (eso a parte de que si tu no quieres mostrar tu codigo y permitir usarlo, modificarlo y distribuirlo ¿por que deberia dejarte yo hacerlo con mi codigo?). Ademas, para que ayudar si yo uso GNU/Linux y no podria usarlo ya no solo por el sistema sino por que no admito que me quieran esclavizar digitalmente.<br /><br />Disculpa si he podido ser algo duro en algunas ocasiones o si hay algo que se pueda malentender. Como ya te dije al principio si me dices que motivaciones tienes para no compartir la filosofia del software libre podria hablarte de forma mas clara y precisa y mantener una conversacion con menos supuestos. En cualquier caso piensa si a ti te gusta estar esclavizado y si quieres ser un tirano mas esclavizando usuarios.<br /><br />NOTA: ¿cuantos perifericos tienes en tu ordenador (externos e internos, ambos)?, te has leido la licencia de windows XP, no puedes tener más de 5 perifericos o la estarias incumpliendo (y no creo que la licencia del vista sea mas permisiva, mas bien al contrario) esto te lo digo para que veas como (aunque no lo sepas) el software privativo es una forma moderna de esclavizar.<br /><br />La libertad no hace libres a los hombres, sencillamente los hace hombres.<br />¡VIVA EL SOFTWARE LIBRE!, ¡A LA .... MIERDA EL SOFTWARE PRIVATIVO!<br /><br /><span style="font-weight: bold">EDITO:</span><br />Para resolver la duda creada entre Juan Carlos y Geo sobre si estas incumpliendo la licencia LGPL (por como tu al abrir el tema dijistes &quot;basado en las APIs gráficas SDL&quot;) he enviado un correo electronico a la Free Software Foundation planteandoles la cuestion para asi obtener una respuesta clara sobre si efectivamente incumples la licencia LGPL o no.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Mar 15, 2009 12:19 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Raito]]></name></author>
<updated>2009-02-27T23:34:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2160#p2160</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2160#p2160"/>
<title type="html"><![CDATA[Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2160#p2160"><![CDATA[
Hola.<br /><br />Jeje , no pensé que mi &quot;reveldía&quot; hacia las licencias causara tanto alboroto ....<br /><br />Me disculpo si he violado sus término y si es necesario voy a retirar los archivos para no causar más problemas.<br /><br />Con respecto a la documentación he estado flojo para escribirla ya que estoy con otro proyecto, pero por cualquier consulta te dejo mi mal: <!-- e --><a href="mailto:gastoncito_ngt@hotmail.com">gastoncito_ngt@hotmail.com</a><!-- e --><br /><br />Saludos !<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2064">Raito</a> — Vie Feb 27, 2009 11:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Geo]]></name></author>
<updated>2009-02-27T04:20:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2158#p2158</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2158#p2158"/>
<title type="html"><![CDATA[H2Omega Game Engine 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2158#p2158"><![CDATA[
No está incumpliendo la licencia. No se trata de un trabajo &quot;derivado&quot; de SDL, un trabajo derivado incluiría modificaciones al código fuente de SDL, o necesitaría recompilación de la librería por algún añadido.<br /><br />En fin, que ya estamos desviando el tema :p.<br /><br />Lamentablemente, por ahora no he tenido tiempo de darle un vistazo a la librería, quizá la próxima semana y con gusto trataré de comentar, gracias por la info, lo único es que espero que haya un poco de documentación sobre el uso <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=6">Geo</a> — Vie Feb 27, 2009 4:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-02-26T23:39:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2157#p2157</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2157#p2157"/>
<title type="html"><![CDATA[H2Omega Game Engine 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2157#p2157"><![CDATA[
Bien, buscando un poco de informacion en la web, encontre lo siguiente:<br /><br />La libreria SDL tiene licencia GNU LGPL. Dicha licencia establece que si un &quot;programa&quot; <span style="font-style: italic">USA</span> la libreria (como SDL), el programa NO esta bajo la licencia GNU LGPL.<br />Por ejemplo, cualquier juego que use la libreria SDL puede tener una licencia distinta a GNU LGPL, e incluso puede tener una licencia privativa.<br /><br />Sin embargo, la licencia en cuestion dice que si un &quot;programa&quot; es un <span style="font-style: italic">derivado</span> de una libreria (como SDL) este programa DEBE estar bajo la licencia GNU LGPL.<br />Un &quot;engine&quot; grafico, que tiene las mismas funcionalidades que SDL, evidentemente es un derivado de dicha libreria. Como por ejemplo la libreria &quot;pygame&quot; es un derivado de SDL. O la libreria &quot;cocos&quot; es un derivado de &quot;pyglet&quot;<br /><br />Formalmente, estarias incumpliendo la ley. Pero nadie de aqui piensa en denunciarte ni nada por el estilo.<br /><br />La pregunta es, y ahora que?. Bien, para tu engine no tengo idea, si no quieres liberar el codigo esta todo OK. (personalmente queria ver el codigo del manejador de particulas, pero no importa <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" />  )<br />Para tus futuros proyectos tal vez te interese leer las licencias Creative commons. Estas licencias son bastante adaptables y pueden ser de tu agrado.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Jue Feb 26, 2009 11:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Raito]]></name></author>
<updated>2009-02-26T12:24:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2153#p2153</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2153#p2153"/>
<title type="html"><![CDATA[Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2153#p2153"><![CDATA[
Hola.<br /><br />Con el tema de las librerias dinámicas lo he hecho así para poder mejorar el rendimiento en Windows y para evitar recompilar si hay que hacer modificaciones menores.<br /><br />Lo de portarlo a otros sistemas no es problemas, ya que el código es totalmente multiplataforma, pero no lo he compilado en sistemas UNIX o Mac debido a que no uso esos sistemas.<br /><br />Agradesco que me recomendarán el libro ('Software libre para una sociedad libre'), pero no comparto la filosofía del software libre.<br /><br />Saludos !<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2064">Raito</a> — Jue Feb 26, 2009 12:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-26T06:11:03+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2151#p2151</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2151#p2151"/>
<title type="html"><![CDATA[H2Omega Game Engine 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2151#p2151"><![CDATA[
Si es una lastima no hay codigo fuente y parece ser que depende de unas .dll exclusivas lo cual hace aun mas dificil poder portarlo a otros sistemas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Jue Feb 26, 2009 6:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-02-25T20:32:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2150#p2150</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2150#p2150"/>
<title type="html"><![CDATA[Re: Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2150#p2150"><![CDATA[
<blockquote><div><cite>Raito escribió:</cite><br />El codigo fuente del engine no lo publico<br /></div></blockquote> Lástima... entonces pierde casi toda la gracia. Mejor intentar crear uno yo, que al menos lo podré modificar a mi gusto y sabré lo que hace cada cosa.<br /><br />Yo también te recomendaría la GPL, en el libro 'Software libre para una sociedad libre' (se puede descargar desde esta web) se dan algunas buenas razones. Si no recuerdo mal, en las charlas del final, R. Stallman hace una especie de resumen.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mié Feb 25, 2009 8:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Raito]]></name></author>
<updated>2009-02-25T12:40:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2149#p2149</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2149#p2149"/>
<title type="html"><![CDATA[Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2149#p2149"><![CDATA[
El codigo fuente del engine no lo publico, pero si se encuentra el codigo fuente del ejemplo. Está el proyecto hecho en el IDE Dev C++.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2064">Raito</a> — Mié Feb 25, 2009 12:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-02-21T13:23:50+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2125#p2125</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2125#p2125"/>
<title type="html"><![CDATA[H2Omega Game Engine 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2125#p2125"><![CDATA[
Parece un buen engine, pero no hay codigo para leer. Solo hay cabezeras de funciones y metodos pero no hay codigo. <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /><br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Sab Feb 21, 2009 1:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Raito]]></name></author>
<updated>2009-02-20T17:11:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2122#p2122</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2122#p2122"/>
<title type="html"><![CDATA[Respuesta]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2122#p2122"><![CDATA[
Si, el código fuente del engine lo comencé yo desde 0, como así también el sistema para describir algunos objetos necesarios ( EasyDescription ).<br /><br />Con el tema de la licencia voy a leer en wikipedia para ver las diferencias entre las distintas licencias.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2064">Raito</a> — Vie Feb 20, 2009 5:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sofoke]]></name></author>
<updated>2009-02-20T03:03:34+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2116#p2116</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2116#p2116"/>
<title type="html"><![CDATA[H2Omega Game Engine 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2116#p2116"><![CDATA[
Bienvenido al foro...<br />Me preguntaba si el engenie (motor) lo hiciste tu?<br />Ahora yo te recomendaria una licencia GPL (pues aqui entre nos es la mejor en mi opinion) Esta licencia (segun entiendo) permite a todo que sepa y quiera programar en el lo puede hacer  respetando al creador y sus creditos...<br />lo checare suena muy interesante...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1535">sofoke</a> — Vie Feb 20, 2009 3:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Raito]]></name></author>
<updated>2009-02-20T00:35:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2115#p2115</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2115#p2115"/>
<title type="html"><![CDATA[H2Omega Game Engine 2D]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=489&amp;p=2115#p2115"><![CDATA[
Hola a todos.<br /><br />Soy nuevo en el foro y esta es la primera vez que escribo y les traigo un motor 2D hecho en C++ basado en las APIs gráficas SDL.<br /><br />El motor trae clases fáciles de utilizar para realizar animaciones, sistema de particulas, reproducir música y sonidos WAVs, manejo de joysticks, etc. También trae una clase para realizar mapas y para poder verificar colisiones en el mismo.<br /><br />Acá les dejo el link para descarga gratuita:<br /><br /><!-- m --><a class="postlink" href="http://rapidshare.com/files/200176892/H2Omega_Game_Engine_2D.zip.html">http://rapidshare.com/files/200176892/H ... D.zip.html</a><!-- m --><br /><br />Lamentablemente por falta de ganas no le he realizado una documentación, pero si he hecho un ejemplo de especie RPG para demostrar como utilizar los mapas y las animaciones, como así también el manejo de sonidos.<br /><br />Agradecería si lo pudieran probar y reportarme sobre fallas que vallan encontrando, como así también gente que estén dispuestas a ayudar para ir mejorandolo e ir implementando nuevas cosas como por ejemplo un render 3D.<br /><br />Con el tema de la licencia no he hecho nada al respecto ya que no entiendo muy bien los términos legales xD ( re pirata -.- )<br /><br />Gracias de antemano<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2064">Raito</a> — Vie Feb 20, 2009 12:35 am</p><hr />
]]></content>
</entry>
</feed>