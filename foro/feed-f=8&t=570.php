<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=570" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-06-13T17:02:09+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=570</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-13T17:02:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2590#p2590</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2590#p2590"/>
<title type="html"><![CDATA[Duda sobre eficiencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2590#p2590"><![CDATA[
Efectivamente, Python no tiene punteros y tiene su propio recolector de basura, el no tener punteros al estar acostumbrado a usarlos me limita. Ya que Python esta orientado a objetos se me ocurre que si lo que el enemigo necesita es la posicion del personaje para perseguirlo en lugar de pasarla como un argumento podria el enemigo obtenerla accediendo a las propiedades de la clase del personaje, es decir, si hay una clase enemigo que se usa para crear varios enemigos y una clase personaje que se usa para crear un unico personaje principal se puede hacer que la propiedad posicion de el personaje sea publica podiendo acceder a la posicion del personaje todos los enemigos de forma que no necesitases pasarla como un argumento del metodo persecucion de los enemigos, espero que esto te sea de utilidad, de todas formas puede que otro con mas experiencia en lenguajes orientados a objetos pueda tener alguna solucion mejor.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Jun 13, 2009 5:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-12T18:18:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2589#p2589</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2589#p2589"/>
<title type="html"><![CDATA[Duda sobre eficiencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2589#p2589"><![CDATA[
Gracias por responder lacabra.<br />Mi problema, como bien has comentado es que quiero acceder a la posicion del personaje en las funciones de los enemigos( que se encargan de gestionar el comportamiento y la imagen a mostrar). Para que quede más claro todo, ahí va un ejemplo de estado.<br /><br />Por cierto, es en python/pygame, en el que creo que no existen punteros  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>class Patrullar&#40;Estado&#41;:<br /><br />    def __init__&#40;self,enemigo, pt1, pt2, personaje&#41;:<br />        Estado.__init__&#40;self, enemigo&#41;<br />        self.enemigo.animacion.poner_imagenes&#40;&#91;1,0&#93;&#41;<br />        self.pt1 = pt1<br />        self.pt2 = pt2<br />        self.destino = pt1<br />        self.personaje = personaje<br /><br />    def update&#40;self&#41;:<br /><br />        <br />        if self.enemigo.rect.x &lt; self.destino:<br />            self.enemigo.invertir&#40;True&#41;<br />            self.enemigo.rect.move_ip&#40;2,0&#41;<br />        elif self.enemigo.rect.x == self.destino:<br />            origen = self.destino<br />            self.destino = self.cambiar_destino&#40;&#41;<br />            self.enemigo.cambiar_estado&#40;Ojear&#40;self.enemigo, self.destino, origen, self.personaje&#41;&#41;<br />        else:<br />            self.enemigo.rect.move_ip&#40;-2,0&#41;<br />            self.enemigo.invertir&#40;False&#41;</code></dd></dl><br /><br />Esto se encarga de mover de un punto a otro el enemigo, como si estuviera patrullando, &quot;echando una ojeada&quot; alrededor cuando llega al destino.<br />Si te fijas, el atributo personaje no lo utilizo en la clase, únicamente lo necesito para hacer la llamada a ojear, que comprueba si el enemigo está visible.<br /><br />Creo que en esta ocasión mi explicación ha sido algo más clara, espero que ahora se me haya entendido.<br /><br />En cuanto a lo de la solución que tu has comentado de actualizar en el personaje en vez de en el enemigo, estaríamos quizás en las mismas creo yo.<br /><br />Pero de todas formas gracias por la ayuda, como siempre<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Jun 12, 2009 6:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-12T12:05:20+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2587#p2587</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2587#p2587"/>
<title type="html"><![CDATA[Duda sobre eficiencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2587#p2587"><![CDATA[
Hola, como no estoy seguro de que lo que he entendido sea el problema que tienes primero voy a comentarte lo que he entendido a ver si he entendido bien el problema y despues abordare el problema y la soluciones que te pueda dar:<br /><br />Si no te he entendido mal tienes un protagoonista con funciones que solo usas con el protagonista, y varios enemigos con funciones que usas para todos los enemigos, a una funcion de los enemigos no necesitas pasarle un parametro pero esta llama a otra funcion de los enemigos que si necesita un parametro y quieres no tener que pasarle el argumento a la primera funcion para que pueda llamar a la segunda que es la que necesita el argumento en cuestion.<br /><br />Bueno, si es eso, seria util saber si estas en Python, C o C++ y si el personaje y los enemigos son una estructura que modificas con las funciones con las que tienes el problema de los argumentos y ese tipo de detalles. Como el tema de las variables ya lo habras pensado y preferiras no usarlas como la mayoria de los que programamos pasare directamente a otras soluciones mejores, si el argumento que necesita la funcion (por ejemplo la funcion perseguir) es la posicion del protagonista podrias hacer una funcion que guardase el puntero a la estructura del protagonista como una variable static y asi puedas cambiarlo cuando creas el personaje y acceder a el desde la funcion perseguir llamando a la funcion para que te lo devuelva y acceder al personaje (es parecido a usar variables globales pero sin que sean globales, otra opcion es que localizado no llame a perseguir es decir que la persecucion no la inicies cuando estas actualizando el estado de los enemigos sino cuando actualizas el estado del protagonista de forma que los enemigos los pones en estado de localizado en esa ejecucion del bucle del juego y en la siguiente cuando estas actualizando al protagonista puedes llamar a perseguir para todos los enemigos que se encuentren en el estado de localizado pasandole el argumento (estoy suponiendo que el argumento es la situacion del protagonista para que lo persigan) de este modo pasas a todos los enemigos que esten en localizado a perseguir y continuas actualizando el estado del protagonista (por ejemplo para que haga una animacion de que lo estan persiguiendo y quiere huir o cualquier otra cosa que hagas en el juego) en resumen solo cambia desde que parte del juego llamas a la funcion que necesita el argumento.<br /><br />Espero haber sido de ayuda y haberme podido explicar bien.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Vie Jun 12, 2009 12:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-06-11T00:05:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2583#p2583</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2583#p2583"/>
<title type="html"><![CDATA[Duda sobre eficiencia]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=570&amp;p=2583#p2583"><![CDATA[
Buenas a todos.<br />Estoy desarrollando un juego estilo plataformas, MarioBros y demás y me encuentro con un problemilla.<br />Tengo dos archivos cada uno con los estados del personaje(saltar, pegar, correr,....) y otro con los de los enemigos( ojear, patrullar, localizado, perseguir, etc).<br />Pero me encuentro con un problema:<br />En algunos de los estados, principalmente los de los enemigos, me encuentro con que en estados como localizado( que ejecuta una animacion cuando ve al personaje) no necesito un parámetro en la función que me represente al personaje, pero si que lo necesito para hacer la llamada desde Localizado al estado Perseguir( no se si se me entiende bien <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_sad.gif" alt=":(" title="Sad" /> ).<br />La pregunta era, hay alguna manera más eficiente de poder acceder al personaje sin tener que pasar un parámetro a todas las funciones de estados??<br /><br />Perdón por la explicación<br />Juanxo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jun 11, 2009 12:05 am</p><hr />
]]></content>
</entry>
</feed>