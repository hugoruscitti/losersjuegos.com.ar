<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=3008" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2014-10-22T14:51:54+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=12&amp;t=3008</id>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2014-10-22T14:51:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320"/>
<title type="html"><![CDATA[Re: Idea de juego en nube (es dificil describir en una frase]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9320#p9320"><![CDATA[
Esta idea que tuve hace algo más de un año por los estudios me esta llevando más tiempo del esperado pero también por falta de conocimientos, y sobre eso venia a consultar por este foro. Hasta ahora lo que habia hecho siempre eran cosas muy sencillas, en local para el usuario que ejecuta el juego, sin red de por medio ni multi jugador, y tener que controlar la posición, variación, colisión de multiples objetos. Por un lado tengo que si actualizo las posiciones en el momento que interactua el navegador con el servidor para pedir información o indicar acciones seguramente el servidor tarde más en responder al suario las consultas y se repitan a ritmo anormal segun cada navegador pida algo, y pense en la actualización de los objetos, simulacón, movimiento, estado, etc; dejarlo en manos de un proceso fuera de lo que es la comunicacion entre navegador y servidor que continuamente se ejecute y realice el trabajo de si un objeto tiene aceleración calcular la velocidad que le corresponde segun el tiempo transcurrido desde la ultima actualización, segun en que estado este el automata lo actualice al que corresponda luego, cambie la posición, calcule colisiones y actualice los estados, etc; y pensnado en eso se me ha presentado un problema que me imagino se resolvera con mucha matematica de geometria en el espacio pero que es bastante nuevo para mi. ¿Y si una vez calculada, por ejemplo, la posicion nueva que le corresponde a los objetos, resulta que en un punto intermedio entre ese calculo y el anterior, deberian haber colisionado? Por ejemplo un objeto que en el ciclo anterior del bucle se calcula que esta en (0, 0) y en el siguiente se calcula que esta en (2, 2) y por otro lado otro objeto que esta en (2, 0) en el ciclo anterior y en el siguiente esta en (0, 2) y obviamente deberian haber colisionado en (1, 1) suponiendo en el ejemplo que llevan misma velocidad aunque en diferente dirección. ¿Como se puede tener esto en cuenta al ir recalculando cada objeto? Aprovecho además para preguntar si conocen motores de fisica 3D que haga este tipo de calculos.<br /><br />El juego lo que es la parte grafica sera en 2D pero quiero qe en lo que es los objetos y la logica cuente ya con el eje z aunque solo se usen por ahora el x e y para los objetos tenerlos preparados para una vez este este listo poder reutilizar código para un intento de 3D cambiando unicamente la aprte de la interfaz, sin tocar la logica. Para soportar mejor multiples jugadores de la forma mas masiva que pueda habia pensado en usar REST en lugar de Websocket para así no gastar el maximo de conexiones que soporte el servidor ycon REST intercambiar el estado de los objetos JavaScript y Python.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Mié Oct 22, 2014 2:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2013-03-10T21:39:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9174#p9174</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9174#p9174"/>
<title type="html"><![CDATA[Re: Idea de juego en nube (es dificil describir en una frase]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9174#p9174"><![CDATA[
<blockquote><div><cite>Barajas escribió:</cite><br />muy interesante, pero como dicen &quot;dicho al hecho hay mucho trecho&quot;. No intento desanimarte al contrario todo estucha fantástico y espero verlo, dependerá eso de ti <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /></div></blockquote><br /><br />Ya, me imagino, como cualquier cosa, hay que ponerse ha hacerlo. Ahora mismo ya tengo la parte que va en el navegador acabada en el sentido que esta lista para comenzar a hacer pruebas, en vacio supera los 200 y 300 FPS, y con el websocket de ejemplo de ping pude probar al menos la aprte de la comunicación y que ejecute lo que reciva del servidor. En Erlang tengo ya hecho un servidor sencillo de archivos estaticos por HTTP y HTTPS, para servir el archivo de la terminal tonta, y ahora como ya más o menos vi como usar el SSL (al crear el servidor sencillo HTTPS) puedo adentrarme a programar un websocket, pues la parte del SSL es identica a la que ya tengo.<br /><br />De resto, ojala tenga buen rendimiento cuando tenga lo suficiente para las primeras pruebas.<br /><br /><blockquote><div><cite>Barajas escribió:</cite><br />La ventaja del 2D es que consumen menos recursos, los archivos que utilizas son mas pequeños (en teoría) lo que se traduce en menores tiempos de carga, es más fácil definir algunas cosas  y son menos difíciles<br /></div></blockquote><br /><br />Exactamente, por eso preferi empezar por 2D, eso y que al estar la mayor parte del peso en el servidor (empezare usando canvas 2D como no todas las tarjetas soportan WebGL, entre ellas la mia, y esta aun un tanto experimental. Tambien, aunque Erlang pueda paralelizar y distribuir si consigo alguna biblioteca en Erlang para aceleración por hardware seguramente ridna mejor.<br /><br /><blockquote><div><cite>Barajas escribió:</cite><br />Nuevamente, me disculpo por la tardanza en la respuesta.<br /></div></blockquote><br /><br />No pasa nada por tardar <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><br /><br />Gracias por tu opinion <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Dom Mar 10, 2013 9:39 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2013-03-10T07:49:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9172#p9172</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9172#p9172"/>
<title type="html"><![CDATA[Re: Idea de juego en nube (es dificil describir en una frase]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9172#p9172"><![CDATA[
Disculpa la tardanza, en mi opinión todo parece muy interesante, pero como dicen &quot;dicho al hecho hay mucho trecho&quot;. No intento desanimarte al contrario todo estucha fantástico y espero verlo, dependerá eso de ti <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" />.<br /><br /><blockquote><div><cite>jhg escribió:</cite><br />Y poco mas que comentar, que seria empezar con juegos en 2D, ya teniendo un juego se podria ver mejor el rendimiento de todo e intentar optimizarlo para poder soportar juegos que necesiten mas potencia, etc; o intentar pasar al 3D.<br /></div></blockquote><br /><br />La ventaja del 2D es que consumen menos recursos, los archivos que utilizas son mas pequeños (en teoría) lo que se traduce en menores tiempos de carga, es más fácil definir algunas cosas  y son menos difíciles de hacer que los juegos en 3D. Además, tienen el plus que cuando dominas su lógica, pasar a 3D es mucho más sencillo. <br /><br />Nuevamente, me disculpo por la tardanza en la respuesta.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Dom Mar 10, 2013 7:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[jhg]]></name></author>
<updated>2013-03-05T20:59:16+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9168#p9168</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9168#p9168"/>
<title type="html"><![CDATA[Idea de juego en nube (es dificil describir en una frase)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3008&amp;p=9168#p9168"><![CDATA[
Hola, llevo bastante tiempo sin pasarme por los foros entre el ciclo que ya acabe y cinco meses trabajando para un negrero amante de pagar poco y la ilegalidad (una larga historia), y vengo con una idea que comentarles a ver que opinan, si tienen ideas o sugerencias, y hablarlo un poco.<br /><br />He pensado en crear un servidor de juegos (para multiples juegos, no solo uno, tipo steam por hacer una anologia, o google play, etc; aunque no sea exactamente igual), la idea que luego el servidor funcione siempre y sin cortes ni siquiera para actualizaciones, etc; pero ademas que se pudiera jugar desde el ordenador propio de uno, o cuando no lo tenga a mano poder jugar desde otro ordenador pero sin instalaciones, pues cuando el ordenador no es de uno no siempre se puede estar instalando cosas, y que fuese multiplataforma los juegos. Además, pues, si son juegos online obviamente hay que evitar que se pueda toquetear demasiado, cosas que lo mismo en un juego de una persona da igual y hasta resulta interesante y queda como truco etc, pues en un juego multijugador pues lo mismo no hace tanta gracia que uno juegue limpiamente y aparezca uno en plan dar un click y pierdes asi por la cara.<br /><br />La idea basicamente viene a ser eso, y que el código sea software libre, y hasta pense en que hubiese juegos que ademas de libres sean gratis y otros de pago o con opciones premium de pago, para intentar darles rentabilidad a los juegos libres tambien. He pensado en tener en el navegador unicamente una especie de terminal tonto, 3 canvas para dibujar lo que le mande el servidor (con canvas 2D porque el webgl aun no es compatible con todas las tarjetas graficas, al menos no con la mia en mi linux mint probandolo desde chromium y desde firefox) (3 canvas para poder tener controles en primer plano y no estar todo el rato redibujando y lo mismo con el fondo y asi en el del medio poder dibujar solo lo que mas cambie, la idea es mejorar el rendimiento), el navegador los eventos de teclado y raton los envia al servidor de igual forma que recibe del servidor que tiene que hacer. La comunicación he pensado hacerla con WebSockets (estube probandolos con el servidor websocket de una aplicacion de ping que encontre y la verdad que parece buena la velocidad lograda). Para los graficos, he pensado tanto el enviar desde el servidor que puntos son los que han cambiado (esto es parecido a lo que hace VNC por lo que estuve leyendo en wikipedia) o en enviar la información de que imagenes o formas dibujar y que lo haga el navegador. Para el servidor, aunque tengo mas experiencia con php y python (en python con django) he pensado en hacerlo en erlang ya que asi podria por ejemplo actualizarlo en caliente aunque estubieran jugando en ese momento y tiene hilos propios en vez de los del sistema, con lo que los limites del sistema para evitar bombas fork o limites propios del hardware no le afectan, y que es facil conectar varias maquinas a ejecutar el servidor como un cluster.<br /><br />Hasta ahora unicamente tengo hecho la terminal tonta web donde se jugaria, y estoy usando el servidor de un ejemplo de ping con websocket que vi para hacer pruebas. La velocidad del websocket como ya dije parece buena por lo menos de momento, aun solo capturo y envio los eventos de raton y teclado aunque seria interesante capturar y enviar tambien los eventos touch para mejor compatibilidad con los moviles. En la terminal tonta tengo hechas funciones para descargar las imagenes desde javascript y el audio, y algunas funciones para dibujar el canvas de forma un poco optimizada, por ejemplo tengo una funcion para dibujar un trayecto a partir de un array de arrays que indiquen los puntos, una funcion para dibujar puntos, etc, y sigo intentando mejorar el rendimiento lo mas posible. Tambien hice unas funciones envoltorio para dibujar imagenes en el canvas que comprueba que esten ya descargadas, para evitar errores de javascript que pudieran parar todo el funcionamiento de la web.<br /><br />Del servidor, aun no lo he empezado (llevo solo dos dias con esta idea), pero estoy ya mirando como podria montar el servidor con SSL para que fuesen websockets seguros.<br /><br />Y poco mas que comentar, que seria empezar con juegos en 2D, ya teniendo un juego se podria ver mejor el rendimiento de todo e intentar optimizarlo para poder soportar juegos que necesiten mas potencia, etc; o intentar pasar al 3D.<br /><br />¿La idea que os parece?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2542">jhg</a> — Mar Mar 05, 2013 8:59 pm</p><hr />
]]></content>
</entry>
</feed>