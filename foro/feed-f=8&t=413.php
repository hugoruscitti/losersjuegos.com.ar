<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=413" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-03-13T21:01:04+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=413</id>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-03-13T21:01:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2277#p2277</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2277#p2277"/>
<title type="html"><![CDATA[Python 2.5 vs. Python 3.0 : O_o]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2277#p2277"><![CDATA[
Completando un poco lo anterior, les paso un extracto del archivo README que viene con el codigo fuente de python 3.0 (este es el archivo al que me referia en mi post anterior)<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>Installing multiple versions<br />----------------------------<br /><br />On Unix and Mac systems if you intend to install multiple versions of Python<br />using the same installation prefix &#40;--prefix argument to the configure script&#41;<br />you must take care that your primary python executable is not overwritten by<br />the installation of a different version.  All files and directories installed<br />using &quot;make altinstall&quot; contain the major and minor version and can thus live<br />side-by-side.  &quot;make install&quot; also creates $&#123;prefix&#125;/bin/python which refers<br />to $&#123;prefix&#125;/bin/pythonX.Y.  If you intend to install multiple versions using<br />the same prefix you must decide which version &#40;if any&#41; is your &quot;primary&quot;<br />version.  Install that version using &quot;make install&quot;.  Install all other<br />versions using &quot;make altinstall&quot;.<br /><br />For example, if you want to install Python 2.5, 2.6 and 3.0 with 2.6 being the<br />primary version, you would execute &quot;make install&quot; in your 2.6 build directory<br />and &quot;make altinstall&quot; in the others.</code></dd></dl><br /><br />En resumen, instala tu version de python &quot;primaria&quot; con el comando &quot;make install&quot; y el resto de las version con el comando &quot;make altinstall&quot;<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Vie Mar 13, 2009 9:01 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2009-03-12T02:23:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2264#p2264</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2264#p2264"/>
<title type="html"><![CDATA[Python 2.5 vs. Python 3.0 : O_o]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2264#p2264"><![CDATA[
Hola, al bajarse el codigo fuente, hay un archivo que dice como compilar e instalar el interprete de Python. En dicho archivo se especifica una &quot;opcion&quot; de instalacion que permite compilar el interprete pero no &quot;instalarlo&quot; (lo que implicaria un borrado de un Python anterior)<br /><br />Personalmente tengo Python 2.5 que lo compile normalmente y luego compile Python 3 con dicha opcion especial (que no recuerdo).<br /><br />Al ejecutar el comando &quot;python&quot; en la consola (o linea de comandos), se abre el interprete 2.5. Para acceder al interprete 3.0 debo acceder a la carpeta donde se encuentra instalado y abrir el interprete manualmente (dirigirme al directorio donde esta guardado y luego ejecutarlo)<br /><br />Esto es importante por que el comando &quot;python&quot; es un comando que lo puedo ejecutar desde cualquier lado de mi computadora (desde cualquier carpeta). Esto tambien significa que para mi PC, el comando &quot;python&quot; hace referencia a un unico programa Python 2.5. <br /><br />En otras palabras, al ejecutar cualquier codigo python, el sistema operativo llamara al interprete 2.5. Para usar el 3.0 se debe especificar al momento de ejecutar dicho codigo.<br /><br />Muchos programas (y su codigo) se basan en Python 2.x por lo tanto es mejor NO instalar Python 3.0 de la forma convencional sino, &quot;instalarlo&quot; con la opcion especial para que la PC continue creyendo que solo hay un unico Python, el 2.x asociado al comando &quot;python&quot;.<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Jue Mar 12, 2009 2:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-10T18:34:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2257#p2257</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2257#p2257"/>
<title type="html"><![CDATA[Python 2.5 vs. Python 3.0 : O_o]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2257#p2257"><![CDATA[
Siempre y cuando los instales en directorios diferentes creo que no debería dar problemas. No es seguro<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Mar Mar 10, 2009 6:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2009-03-10T01:58:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2254#p2254</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2254#p2254"/>
<title type="html"><![CDATA[Python 2.5 vs. Python 3.0 : O_o]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2254#p2254"><![CDATA[
Al parecer no habrá Pygame para Python 3, y se esta realizando una versión completamente nueva para este lenguaje:<br />&quot;<span style="color: blue">http://www.pygame.org/wiki/FrequentlyAskedQuestions#Does Pygame work with Python 3?</span>&quot;<br />¿Existe alguna forma de tener los dos Python corriendo en la misma maquina? El 2.6 para Blender y Pygame y el 3.0 para pruebas O_o<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Mar Mar 10, 2009 1:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2009-03-08T03:17:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2245#p2245</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2245#p2245"/>
<title type="html"><![CDATA[Python 2.5 vs. Python 3.0 : O_o]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2245#p2245"><![CDATA[
Buenas.<br /><br />Juan Carlos, no se si no te has fijado, pero en la pagina de pygame, en las descargas, aparece version para 2.6 como mucho, y no se si está funcionará en la 3.0 de pygame<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Dom Mar 08, 2009 3:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2009-03-03T13:20:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2177#p2177</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2177#p2177"/>
<title type="html"><![CDATA[Python 2.5 vs. Python 3.0 : O_o]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=2177#p2177"><![CDATA[
¿Alguien sabe que beneficio trae la 3.0?<br />Buscaré información, me acabo de enterar de que ha salido ya... xD<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mar Mar 03, 2009 1:20 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juan Carlos]]></name></author>
<updated>2008-12-09T00:49:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=1791#p1791</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=1791#p1791"/>
<title type="html"><![CDATA[Python 2.5 vs. Python 3.0 : O_o]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=1791#p1791"><![CDATA[
Con respecto a lo de python, tengo entendido que los cambios fuertes son a nivel de implementacion y no deberian afectar mucho al programador. <br /><br />Uno de los cambios mas importantes es el uso de las clases. En la version 2.6 existen dos tipos de clases &quot;el viejo estilo&quot; (por default) y &quot;el nuevo estilo&quot;. En la version 3 de python, el tipo de clase &quot;el viejo estilo&quot; desaparece y &quot;el nuevo estilo&quot; queda como default.<br /><br />Esa es una de las grandes novedades a tener en cuenta.<br /><br />Yo personalmente pienso seguir usando (aprendiendo) la version 2.6<br /><br />Saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1787">Juan Carlos</a> — Mar Dic 09, 2008 12:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Metator de Arkalot]]></name></author>
<updated>2008-12-04T21:10:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=1783#p1783</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=1783#p1783"/>
<title type="html"><![CDATA[Python 2.5 vs. Python 3.0 : O_o]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=413&amp;p=1783#p1783"><![CDATA[
Veo que ayer salio por fin la nueva version de python, aunque<br />dice no ser compatible con las versiones anteriores, asi que<br />tengo la duda entre quedarme con la version 2.5 o migrarme<br />a la 3.0. Decir que llevo un año aprendiendo python y pues ya<br />me habia familizarizado con el <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />. No se que tanto haya<br />cambiado esta ultima version. ¿será necesario cambiarse?<br />Ahora recuerdo que hasta en pygame.org nos sugieren usar<br />la version para Python 2.5 instead de la 3.0 y asi evitar la<br />incompatibilidad con versiones antiguas de winblos <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_eek.gif" alt=":shock:" title="Shocked" /><br /><br /><span style="font-style: italic">saliendome del tema:</span><br />Y ya que estoy hablando de programación, veo que este foro<br />es tambien para C, C++ y Java. Pues estaba pensando hacer<br />algo en flash, como animaciones para el web o algun jueguillo,<br />cuando pense en la maquina virtual de java. ¿Es como programar<br />en python y usar un interprete (JRE) pero que pueda incrustarse<br />en el navegador?. Esto me surgio porque habia pensado empotrar<br />un jueguillo de pygame en el navegador (creo haber visto el ejemplo<br />de &quot;pegale al mono&quot; en la web de pygame), pero me dijeron que no<br />era posible asi que pense en Java, Lo que tengo pensado hacer es<br />unos graficos de Forex que se puedan ver online ¿que opinan?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1921">Metator de Arkalot</a> — Jue Dic 04, 2008 9:10 pm</p><hr />
]]></content>
</entry>
</feed>