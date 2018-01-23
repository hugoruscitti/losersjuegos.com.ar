<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=922" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-11-26T04:35:45+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=922</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-11-26T04:35:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4483#p4483</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4483#p4483"/>
<title type="html"><![CDATA[Re: Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4483#p4483"><![CDATA[
Si seria buena la ayuda en pilasCpp, y aunque no te metas tanto, ten la confianza de descargarte el código y postear preguntas con respecto al código, intentamos que el código sea legible y que hallan comentarios, hacer un motor de videojuegos implica también diseño y podrás ir viendo como evoluciona. Por ahora lo que llevamos es poco, pero ahora que ya vienen las vacaciones nos pondremos a ello y avanzaremos mas rápido, por eso puedes empezar a checar el código.<br />Acerca de leer código sí tienes que tener experiencia en el lenguaje y las bibliotecas que use cada programador, pero hay pequeñas partes de las que puedes sacar ideas, aunque la evolución de mismo código,  que escribe uno mismo deja mucho aprendizaje como comentas, sigue así, lo importante es intentarlo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Nov 26, 2010 4:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-11-15T13:57:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4425#p4425</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4425#p4425"/>
<title type="html"><![CDATA[Re: Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4425#p4425"><![CDATA[
pues me parece muy interesante, por que precisamente eso es lo que me suele pasar, que al implementar algo nuevo me cargo lo anterior.<br />Le hechare un vistazo aver si veo como usarlo aunque este en ingles(no es que no lo entienda pero se me hace bastante mas pesado de leer que en español)<br /><br />Gracias y felicidades por el proyecto pilas. Espero poder ayudar en eso mas adelante <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_razz.gif" alt=":P" title="Razz" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Lun Nov 15, 2010 1:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-11-12T00:51:15+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4420#p4420</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4420#p4420"/>
<title type="html"><![CDATA[Re: Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4420#p4420"><![CDATA[
buenas miguel:<br /><br />unittest es una herramienta que te permite establecer test que se ejecutarán de forma automática, y podrás comprobar si los cambios que realizaste desde la última vez han &quot;roto&quot; algo de lo que ya tenías.<br />En pilasC++ los estamos usando. puedes descargarte el código si quieres echarle un vistazo<br /><br />Te pongo aquí un ejemplo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;Pilas/habilidades.h&gt;<br />#include &lt;Pilas/entidad_base.h&gt;<br />#include &lt;Pilas/actores.h&gt;<br />#include &lt;Pilas/texto.h&gt;<br />#include &lt;Pilas/tipo_habilidades.h&gt;<br />#include &lt;iostream&gt;<br />#include &lt;UnitTest++.h&gt;<br /><br />void funcion_test( Pilas::vector_entidades objetos, sf::Event&amp; evento )<br />{<br />  std::cout &lt;&lt; &quot;funcion de prueba&quot; &lt;&lt; std::endl;<br />}<br /><br />struct Habilidades_fixture<br />{<br />  Habilidades_fixture(): nombre(&quot;funcion_test&quot;), habilidades()<br />  {<br />    habilidades.registrar(nombre, &amp;funcion_test);<br />  }<br />  std::string nombre;<br />  Pilas::Habilidades habilidades;<br />};<br /><br />SUITE( PILAS_HABILIDADES )<br />{<br />  TEST( CARGAR_FICHERO )<br />  {<br />    Pilas::Habilidades habilidades( &quot;.http://losersjuegos.com.ar/foro/tests/habilidades.txt&quot; );<br />    int  resul = habilidades.numero_habilidades();<br />    CHECK_EQUAL( 6, resul );<br />  }<br /><br />  TEST_FIXTURE(Habilidades_fixture, REGISTRAR_FUNCION )<br />  {<br />    int resul = habilidades.numero_habilidades();<br />    CHECK_EQUAL( 6, resul );<br /><br />  }<br /><br />  TEST_FIXTURE(Habilidades_fixture, NUMERO_OBJETOS_POR_DEFECTO)<br />  {<br />    int num_objetos = habilidades.numero_objetos( nombre );<br />    CHECK_EQUAL( 0, num_objetos );<br />  }<br /><br />  TEST_FIXTURE(Habilidades_fixture, REGISTRAR_HABILIDAD_REPETIDA )<br />  {<br /><br />    int resul = habilidades.numero_habilidades();<br />    CHECK_EQUAL( 6, resul );<br />    habilidades.registrar( nombre, &amp;Pilas::SeguirAlMouse::mover );<br />    resul = habilidades.numero_habilidades();<br />    CHECK_EQUAL( 6, resul );<br />  }<br /><br />  TEST_FIXTURE(Habilidades_fixture, ENSENIAR_HABILIDADES )<br />  {<br /><br />    Pilas::Entidad_base* objeto = NULL;<br />    habilidades.enseniar(nombre, objeto);<br />    int resul = habilidades.numero_objetos(nombre);<br />    CHECK_EQUAL(1, resul);<br />  }<br /><br />}<br /></code></dd></dl><br /><br />Suponte que ahora cambio algo de la clase habilidades, y al ejecutar los test me dice que ha habido errores. Esto me indicaría que lo que acabo de cambiar a tocado algo que no debería.<br /><br />En proyectos pequeños a lo mejor no supone una gran ventaja, pero son cosas que a mi me gusta conocer para el día de mañana, donde probablemente la empresa donde trabajes, si que lo podría utilizar. Pero si no llevas demasiado bien el inglés, no te recomendaría su uso, ya que casi toda la documentación está en inglés. Pero ten en cuenta que sin poder leer bien en inglés, te estás perdiendo el 90% de la información que hay ahí fuera.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Vie Nov 12, 2010 12:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-11-12T00:22:28+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4419#p4419</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4419#p4419"/>
<title type="html"><![CDATA[Re: Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4419#p4419"><![CDATA[
Buenas, gracias por responder, me ha sido de ayuda. Ahora ya tengo un caracter que se mueve por un mapa y viaja entre mapas y la verdad que bastante bien ordenado y hasta ahora no he tenido problema a la hora de implementar nuevas clases y funciones.<br /><br />He hecho lo que me decia Juanxo, he leido la informacion del juego que tenia sobre papel y de ahi he ido sacando y clases con sus metodos y sus miembros (data members lo llaman en ingles,imagino que esa sera la traduccion xdd)y no veas como cambia teniendo la idea bien clara.<br /><br />Sobre lo de leer codigos, lo he intentado alguna vez, y yo no se si sera que he escojido codigos mal hechos o mi falta de experiencia, pero se me ha hecho muy dificil entenderlo. Me parece increible lo &quot;rapido&quot; que aprende uno de los errores, por que intente hacer lo del caracter que se mueve por el mapa y me salio una birria de codigo, en cambio en el segundo intento me ha salido muy bien, dentro de lo que cabe jeje.<br /><br />de nuevo, muchas gracias por la ayuda, por cierto juanxo, para que sirve unitest? por que en google me salen tests de embarazos o informacion en ingles y no me entero mucho :S<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Vie Nov 12, 2010 12:22 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-11-05T03:03:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4367#p4367</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4367#p4367"/>
<title type="html"><![CDATA[Re: Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4367#p4367"><![CDATA[
Hacer buenos códigos que sean legibles y robustos también se logra con la práctica, podrías empezar haciendo algo pequeño para que vallas viendo las partes cruciales del software que haces, aunque ya sepas mucho del lenguaje no implica que puedas hacer un proyecto grande, por que implica diseño. otra forma de aprender es leyendo código, algunas de las cosas que se de diseño de software y optimización de código las aprendí viendo otros códigos de juegos, pero mas el hecho que fue evolucionando mientras veía como lo podía hacer mejor.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Nov 05, 2010 3:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-11-04T14:02:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4362#p4362</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4362#p4362"/>
<title type="html"><![CDATA[Re: Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4362#p4362"><![CDATA[
generalmente lo que se suele hacer en diseño e ingeniería del software es el documento de requisitos. Pero estoy de acuerdo en que lleva demasiado tiempo, y las grandes empresas lo hacen porque no pueden tomar demasiados riesgos de fallar.<br /><br />Pero una versión simplificada que suele utilizarse también es leerse la historia dle juego que tienes y empezar a sacar características y clases de ahí. Aunque no te hagas un diagrama de clase completo, tener anotadas las cosas que crees que vas a ir necesitando te ayuda mucho.<br /><br />Otra cosa es hacer el diseño y la programación de arriba a abajo. Con esto me refiero a escribir primero las partes grandes del programa, como por ejemplo como vas a usar el sistema de animaciones. Y una vez que esté hecho, fijarte en que cosas necesita tener el propio sistema de animaciones. Un ejemplo sería escribir primero como vamos a ejecutar o como vamos a cambiar entre los frames de las animaciones, y una vez que veamos como queremos que se haga, hacemos un sistema que se acople a esto.<br /><br />Para estas cosas viene genial utilizar bibliotecas de testeo unitario, como <a href="http://unittest-cpp.sourceforge.net/UnitTest++.html" class="postlink">unittest++</a><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Nov 04, 2010 2:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-11-04T13:13:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4361#p4361</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4361#p4361"/>
<title type="html"><![CDATA[Re: Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4361#p4361"><![CDATA[
muchas gracias por responder Mightygaver,  la verdad es que lo que me comentas lo tengo en mente, y de hecho lo llevo a la practica mucho mejor programa a programa, aunque yo me referia a la parte previa a escribir el codigo.<br /><br />De momento tengo escrito sobre papel la historia del juego y el sistema de combate y dialogo. Algo en principio sencillito y facil de hacer, pero que entre mas lo pienso mas complejo lo veo. Lo que no se es como desarroyar la idea sobre el papel de una forma mas cercana al codigo final. Como lo haceis vosotros? por que me imagino que no es poneis a programar sobre la marcha (lo que he estado haciendo hasta ahora).<br />Gracias de nuevo y toda ayuda es bienvenida <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Nov 04, 2010 1:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Mightygaver]]></name></author>
<updated>2010-11-04T12:09:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4360#p4360</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4360#p4360"/>
<title type="html"><![CDATA[Re: Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4360#p4360"><![CDATA[
No soy ningun experto en la matería pero creo que para conseguir llegar a una buena organización de tu código hace falta que antes pases por esa fase que has comentado, la de hacerte un lío de programa.<br /><br />Para conseguir hacer más simple un proyecto, siempre recuerdo las &quot;consignas&quot; de la programación orientada a objetos.<br />La encapsulación es crucial. Trata que tu programa principal se base en llamadas a las funciones de tus clases o módulos<br />haciéndolo más legible y apartándolo del nivel de detalle que esas funciones encapsularán.<br /><br />Otra es el aprovechamiento de código. Siempre que veas código duplicado, piensa en como podrías hacer de ello una función, o un método de una clase que haga más sencillo su uso. Piensa, que te haces más fácil la vida a tí mismo.<br /><br />Si aún así tienes problemas mira algo de ingeniería del software por encima, no al nivel de especificación de requisitos, ni análisis, sino sobre nuevas tendencias que tratan de hacer el código más legible y, sobretodo, más mantenible.<br /><br />Y bueno, evidentemente con la práctica se llega a dominar un poco estas técnicas. La verdad que yo he programado un poquillo durante mis años estudiando la carrera y, a pesar de ello, sigo siendo algo desastre, por eso digo que no soy un buen ejemplo a seguir, pero sé que estas son algunas de las recetas que debes tener en mente.<br /><br />En fin, mucha suerte con tu proyecto y a ver si esto te ha servido de algo XD.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2319">Mightygaver</a> — Jue Nov 04, 2010 12:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-11-04T10:50:10+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4359#p4359</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4359#p4359"/>
<title type="html"><![CDATA[Como organizar un proyecto?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=922&amp;p=4359#p4359"><![CDATA[
Buenos dias! <br />Ahora que he aprendido a usar clases y punteros me gustaria hacer un juego dentro de lo que cabe complejo -almenos para mi nivel- y practicar lo estudiado. <br />El problema es que las veces que he intentado hacer algo &quot;grande&quot; siempre a sido un caos e incluso me he llegado a cargar lo que tenia hasta el momento por intentar implementar algo.<br /><br />He buscado por google como diseñar un software pero todo lo que encuentro es bastante avanzado y me imagino que con la practica se aprenden estas cosas, pero si para empezar me pudierais dar unas pautas a seguir, me iria de maravilla. <br />Como planteo el problema? Por donde empiezo? nose, lo que podais explicarme me servira ;D<br /><br />Muchas gracias de antemano <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Jue Nov 04, 2010 10:50 am</p><hr />
]]></content>
</entry>
</feed>