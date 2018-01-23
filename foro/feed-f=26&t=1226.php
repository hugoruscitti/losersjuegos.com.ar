<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=1226" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-09-22T14:08:37+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=26&amp;t=1226</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-09-22T14:08:37+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5972#p5972</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5972#p5972"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5972#p5972"><![CDATA[
m... puede que el problema sea el directorio donde estas parado (o no..., no estoy seguro)<br /><br />Intenta lo siguiente, ingresa en el directorio principal de pilas, donde esta<br />el archivo README y los otros. Y luego, ejecuta estos comandos:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>hg pull<br />hg update<br />hg status</code></dd></dl><br /><br />puede que no traiga el cambio por algun tipo de conflicto, pero si<br />todo sale bien, cuando ejecutes este comando:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>hg log -l 3</code></dd></dl><br /><br />tendrian que mostrarse los ultimos cambios del repositorio:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>changeset:   923:dc568f9cbbf3<br />tag:         tip<br />user:        Hugo Ruscitti &lt;hugoruscitti@gmail.com&gt;<br />date:        Wed Sep 21 01:01:24 2011 -0300<br />summary:     documentando el nuevo cuerpo fisico poligono.<br /><br />changeset:   922:99848c628943<br />user:        Hugo Ruscitti &lt;hugoruscitti@gmail.com&gt;<br />date:        Tue Sep 20 20:47:55 2011 -0300<br />summary:     creando bosquejo de figura poligono.<br /><br />changeset:   921:7ebc5c4746c9<br />user:        Hugo Ruscitti &lt;hugoruscitti@gmail.com&gt;<br />date:        Mon Sep 19 18:14:05 2011 -0300<br />summary:     reparando el ejemplo scroll parallax de pablo garrido.</code></dd></dl><br /><br />(el ultimo es el arreglo que te comentaba).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Sep 22, 2011 2:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-09-22T01:11:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5968#p5968</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5968#p5968"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5968#p5968"><![CDATA[
Ok voy a leerlo a ver que tal, y bueno primero hice un &quot;hg pull pilas&quot; y me dice:<br />pulling from pilas<br />searching for changes<br />no changes found<br /><br />es decir, no se encuentran cambios.<br /><br />y si tecleo &quot;hg update pilas&quot; me dice:<br />abort: unknown revision 'pilas'!<br /><br />De todas manera voy a leer esa guia de programando en pilas y te cuento.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Jue Sep 22, 2011 1:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-09-21T22:30:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5966#p5966</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5966#p5966"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5966#p5966"><![CDATA[
Buenas, buenisimo que estás avanzando con los cambios. Con<br />respecto a mercurial y bitbucket, en la página de pilas<br />escribí un texto para explicar un poco el concepto:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/pilas_desarrolladores/pilas_desarrolladores.rst">http://www.pilas-engine.com.ar/doc/tuto ... adores.rst</a><!-- m --><br /><br />La idea hacer cambios lo mas fácil posible, y para ello usamos<br />el concepto de forks y pull request (que son bastante fáciles<br />de usar con la práctica).<br /><br />Con respecto al scroll de pablo, ¿probaste ejecutar 'hg pull' antes<br />de 'hg update'?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Sep 21, 2011 10:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-09-21T19:09:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5963#p5963</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5963#p5963"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5963#p5963"><![CDATA[
Que bien que te halla gustado, segui programandolo y ya se puede colocar cualquiera de los cuatro sentidos: norte, sur, este y oeste. Ahora viene lo mas dificil que es enlazarlo con un actor, pero bueno voy paso a paso. Lo que me gustaria hacer tambien es colocar entre los parametros una opcion para que el parallax sea de tipo mosaico o lineal.<br /><br />En cuanto a lo de mercuarial y bitbucket, de este ultimo se que es una especie de ropositorio en linea o algo asi, con mercurial si se trabajar pero muy basicamente, es decir, se clonar un repositorio (hg clone) que lo aprendi de lo que me explicaste en los mensajes de arriba, verificar el estado de cierto repositorio (hg status) y actualizarlo (hg update, aunque este no me sirve, ya te explico mas abajo xq), mas de hay no tengo conocimientos. Tengo instalado tortoisehg, cloné el repositorio de pilas y ya me cree una cuenta en bitbucket, y ahora? Como hago para integrar el parallax al repositorio de pilas en bitbucket?, no entiendo  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_confused.gif" alt=":?" title="Confused" /> <br /><br />Y en cuanto al parallax de pablo, intente actualizar el repositorio con hg update pensando que se actualizaria el parallax pero me sigue saliendo el &quot;float division&quot;.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Mié Sep 21, 2011 7:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-09-19T21:23:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5957#p5957</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5957#p5957"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5957#p5957"><![CDATA[
Hola programx, ví tu ejemplo de scroll y me gustó<br />mucho, está muy interesante y me funciona bien rápido... excelente.<br /><br />Por cierto, sabes usar mercurial?, tienes una cuenta en bitbucket?, te<br />consulto porque me gustaría incluir tu scroll en pilas y si usas<br />el repositorio es mas fácil integrarlo.<br /><br />Por cierto, solucioné el problema del scroll. Efectivamente había sido<br />un bug mio cuando cambié una parte de pilas que gestionaba tareas. Ya<br />lo resolví...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Lun Sep 19, 2011 9:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-09-19T04:05:53+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5950#p5950</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5950#p5950"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5950#p5950"><![CDATA[
Bueno aqui vengo con el primer adelanto del scroll parallax que estoy desarrollando, funciona bastante bien aunque solo de forma automatica y puede tomar unicamente los sentidos este y oeste (derecha e izquierda).<br /><br />Enlace: <a href="http://www.mediafire.com/?l4vl7uzfuytbl79" class="postlink">http://www.mediafire.com/?l4vl7uzfuytbl79</a><br /><br />Para trabajar con esta API basta con crear un objeto de la clase Parallax junto con sus parametros para especificar como debe ser el scroll parallax:<br /><br /><span style="color: #FF0040"><dl class="codebox"><dt>Code: </dt><dd><code>parallax1 = Parallax(<br />    imagen=&quot;fondo1.png&quot;,<br />    capa=1,<br />    velocidad=2,<br />    sentido=&quot;este&quot;<br />)</code></dd></dl></span><br /><br />Podemos especificar las capas, la 1 va a ser la capa mas al fondo, la 2 la que esta encima de esta y asi sucesivamente. El parametro velocidad es la velocidad de desplazamiento y el sentido es, bueno, todos ya lo saben jeje. <br /><br />Como se daran cuenta, no desperdicia recursos ya que solo existe lo que se ve, es decir, fondo que sale de la pantalla se elimina y se crea otro en el borde opuesto (lo explique en el mensaje anterior), y cree un for para calcular el numero de imagenes que deben duplicarse para abarcar la pantalla, asi que puede modificarse la resolucion de la pantalla libremente sin que esto afecte al parallax.<br /><br />Cuando pueda continuo con el desarrollo para conseguir que se puedan eligir cualquiera de los cuatro sentidos (norte, sur, este, oeste) y un modo manual para hacerla funcionar junto con un actor.<br /><br />Descarguenla y me dicen que les parece <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" /><br /><br />Por cierto hugo, lograste solucionar lo de &quot;float division&quot; en la API de Pablo?.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Lun Sep 19, 2011 4:05 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-09-18T20:38:48+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5947#p5947</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5947#p5947"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5947#p5947"><![CDATA[
Hola programx, buenisimo que estés desarrollando algo para pilas, en<br />cuanto tengas algo para mostrar avisanos...<br /><br />El ejemplo paralax scroll de pablo funcionaba bien, aunque luego<br />de los cambios que hice al motor de pilas para usar qt4 tal vez<br />hallan ocasionado algún error... lo voy a revisar ahora...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Dom Sep 18, 2011 8:38 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-09-18T02:23:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5943#p5943</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5943#p5943"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5943#p5943"><![CDATA[
Ok, ya instale todo, descargue los repositorio y entre a la carpeta experimental (use un programa llamado tortoiseHg), vi la api de parallax que hizo Pablo Garrido pero tiene unos defectos, el primero, cuando pongo el parallax en modo automatico, la consola lanza un &quot;float division&quot; que ahi ni idea, el segundo es cuando le colocas una imagen pequeña que no abarque toda la pantalla; en este caso se puede ver que la imagen se repite pero solo en el centro de la pantalla, es decir, solo un pedazo en el centro y no alcanza a ocupar toda la pantalla.<br /><br />En estos momentos estoy trabajo en una api de parallax para pilas y me esta dando muy buenos resultados. Basicamente consiste en una lista (pilas.grupo.Grupo()) a la que se le añade y elimina constantemente la imagen asignada, con la siguiente logica: si una imagen de la lista toca uno de los bordes de la pantalla (izquierdo, derecho, arriba o abajo, dependiendo del sentido que le demos al parallax) esta se elimina de la lista e inmediatamente se agrega otra al final (o principio) de la lista, creando el efecto parallax.<br /><br />Cuando la termine la publico a ver que les parece  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Dom Sep 18, 2011 2:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-09-02T18:36:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5893#p5893</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5893#p5893"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5893#p5893"><![CDATA[
Hola programx, para acceder al repositorio experimental puedes ejecutar<br />estos dos comandos:<br /><br />hg clone <!-- m --><a class="postlink" href="http://bitbucket.org/hugoruscitti/pilas">http://bitbucket.org/hugoruscitti/pilas</a><!-- m --><br />cd pilas/experimental<br /><br />(el primer comando demora un monton... porque descarga todo el repositorio<br />completo).<br /><br />Hay mas informacion de instalacion en el tutorial de la web:<br /><br /><!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar/doc/tutoriales/pilas_desde_repositorio/pilas_desde_repositorio.rst">http://www.pilas-engine.com.ar/doc/tuto ... itorio.rst</a><!-- m --><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Sep 02, 2011 6:36 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2011-09-02T12:53:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5892#p5892</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5892#p5892"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5892#p5892"><![CDATA[
El repositorio experimental de pilas es un repositorio distinto al repositorio estándar de pilas, por lo tanto debes descargarlo y usarlo por separado. Lo mejor es que descargues el repositorio experimental e intentes añadir las funciones que te interesen a tu repositorio local (el que usas para ejecutar pilas).<br /><br />Un Saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Vie Sep 02, 2011 12:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-09-02T06:33:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5891#p5891</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5891#p5891"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5891#p5891"><![CDATA[
Genial, acabo de ver los avances de pchack del scroll parallax y están bastante bien, sencillo de entender, pero tengo una pregunta ahora: donde esta el directorio experimental de pilas? Xq me e cansado de buscar en /usr/local/lib/python2.7/dist-packages/pilas-0.58-py2.7.egg/pilas (el cual creo que es el directorio principal) y no lo encuentro.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_exclaim.gif" alt=":!:" title="Exclamation" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_question.gif" alt=":?:" title="Question" /> <br /><br />Uso Tuquito (distro de argentina) xq si acaso.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Vie Sep 02, 2011 6:33 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-08-03T21:14:05+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5812#p5812</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5812#p5812"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5812#p5812"><![CDATA[
 <a href="http://www.youtube.com/v/http://www.youtube.com/watch?v=38DMtdrgja0"></param><param target="_blank"><strong>object</strong></a> <p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ago 03, 2011 9:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-08-03T20:11:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5811#p5811</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5811#p5811"/>
<title type="html"><![CDATA[Re: Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5811#p5811"><![CDATA[
Hey, está interesante la api para manejar scroll. Ahora que lo pienso bien, phack<br />había realizado una muy buena demo sobre scroll:<br /><br /><!-- l --><a class="postlink-local" href="http://www.losersjuegos.com.ar/foro/viewtopic.php?f=23&amp;t=1020&amp;p=4841&amp;hilit=scroll#p4841">viewtopic.php?f=23&amp;t=1020&amp;p=4841&amp;hilit=scroll#p4841</a><!-- l --><br /><br />Está en el directorio experimental de pilas, me parece que voy a trabajar en llevar<br />su demo al directorio principal de pilas que estába muy bien...<br /><br />Con eso tendriamos paralax scroll en pilas!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Ago 03, 2011 8:11 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[programx]]></name></author>
<updated>2011-08-03T19:27:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5810#p5810</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5810#p5810"/>
<title type="html"><![CDATA[Acerca del PARALLAX y el VIEWPORT!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1226&amp;p=5810#p5810"><![CDATA[
Hugo y demas programadores de pilas, el siguiente codigo es una clase simplificada en el lenguaje Ruby donde quiero mostrar basicamente dos funcionalidades de la libreria Chingu (basada en Gosu), las cuales son el VIEWPORT y el PARALLAX. Si quieren saber lo que significan, vean mi post &quot;Algunas dudas! &quot; en la seccion de Consultas y problemas.<br /><br />El codigo esta bastante facil de entender ya que si se dan cuenta, es bastate similar a python con pygame. Lo comente para mayor comprension (lineas en mayuscula depues de un #). Esta clase lleva mas codigo como el crear el personaje, los enemigos, los eventos de teclado, etc., pero para no enredarse extraje nada mas el codigo referente al viewport y al parallax.<br />Mi objetivo con esto aportar al menos una idea para seguir mejorando pilas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> . Saludos!<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Level1 &lt; GameState<br />  #ALGUNAS FUNCIONALIDADES COMO EL VIEWPORT SE DEBEN<br />  #IMPORTARANTES DE USAR.<br />  traits :viewport<br /><br />  #METODO INICIALIZADOR (CONSTRUCTOR):<br />  def initialize(options = {})<br />    super<br />    #ASIGNANDO LOS PARAMETROS AL AREA O VIEWPORT: &#91;x, y, ancho, alto&#93;<br />    self.viewport.game_area = &#91;0, 0, 1280, 800&#93;<br />    #CREANDO UN PARALLAX DONDE SE TOMA COMO REFERENCIA LA<br />    #ESQUINA SUPERIOR IZQUIERDA Y SE DIBUJA DESDE ALLI MISMO (x=0, y=0).<br />    @parallax = Parallax.new(:x =&gt; 0, :y =&gt; 0, :rotation_center =&gt; :top_left)<br />    #ADAPTANTE UNA CAPA AL PARALLAX, EN ESTE CASO UN FONDO DEL ESPACIO.<br />    #NOTAR QUE SE REPITE CONSTANTEMENTE DE<br />    #FORMA HORIZONTAL (REPEAT_X = TRUE)<br />    #Y NO SE REPETIRA VERTICALMENTE (REPEAT_Y = FALSE)<br />    @parallax.add_layer(<br />      :image =&gt; 'space.jpg',<br />      :repeat_x =&gt; true,<br />      :repeat_y =&gt; false,<br />      :damping =&gt; 1<br />    )<br />  end<br /><br />  #METODO ACTUALIZAR:<br />  def update<br />    super<br />    #LA CAMARA SEGUIRA AL PERSONAJE<br />    self.viewport.center_around(@player)<br />    #CONFIGURADO DE ACUERDO A UN PLATAFORMAS ESTILO MARIO BROS.<br />    @parallax.camera_y = self.viewport.y<br />    @parallax.camera_x += 20<br />    @parallax.update<br />    #CUALQUIER OBJETO (EXCEPTO EL JUGADOR) SE DESTRUIRA SI SE<br />    #SALE DEL VIEWPORT<br />    game_objects.destroy_if{|game_object|<br />         self.viewport.outside_game_area?(game_object)<br />    }<br />  end<br /><br />  #METODO DIBUJAR:<br />  def draw<br />    @parallax.draw<br />    super<br />  end<br />end</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2473">programx</a> — Mié Ago 03, 2011 7:27 pm</p><hr />
]]></content>
</entry>
</feed>