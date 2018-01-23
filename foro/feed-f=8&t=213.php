<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=213" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2007-12-21T06:13:52+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=213</id>
<entry>
<author><name><![CDATA[cadrogui]]></name></author>
<updated>2007-12-21T06:13:52+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=780#p780</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=780#p780"/>
<title type="html"><![CDATA[Texto multilinea en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=780#p780"><![CDATA[
ok , la funcion terminada  funcionando..<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># FUNCION PARA DIBUJAR TEXTO EN PANTALLA.<br /># LISTA DE COLORES<br /># http://www.miliuco.net/docs/rgb.htm<br /><br />def DIB_TXT&#40;SCREEN, TEXT, TAMANO, X_COOR, Y_COOR, COLOR, FUENTE&#41;:<br />   <br />   if COLOR == 'NEGRO':<br />      COLOR_T = &#40;0,0,0&#41;<br />   elif COLOR == 'BLANCO':<br />      COLOR_T = &#40;255,255,255&#41;<br />   elif COLOR == 'ROJO':<br />      COLOR_T = &#40;255,0,0&#41;<br />   elif COLOR == 'VERRDE':<br />      COLOR_T = &#40;0,255,0&#41;<br />   elif COLOR == 'AZUL':<br />      COLOR_T = &#40;0,0,255&#41;<br />   elif COLOR == 'AMARILLO':<br />      COLOR_T = &#40;255,255,0&#41;<br />   elif COLOR == 'CYAN':<br />      COLOR_T = &#40;0,255,255&#41;<br />   elif COLOR == 'MAGNETA':<br />      COLOR_T = &#40;255,0,255&#41;<br />   <br />   # SELECCCIONAMOS LA FUENTE ELEGIDA.<br />   <br />   if FUENTE == 1:<br />      FUENTE_T = 'FGAaron.ttf'<br />   elif FUENTE == 2:<br />      FUENTE_T = 'font.ttf'<br />   elif FUENTE == 3:<br />      FUENTE_T = 'hak.ttf'<br />   elif FUENTE == 4:<br />      FUENTE_T = 'HermanDecanus.TTF'<br />   elif FUENTE == 5:<br />      FUENTE_T = 'horros.ttf'<br />   elif FUENTE == 6:<br />      FUENTE_T = 'Inhishan.ttf'<br />   elif FUENTE == 7:<br />      FUENTE_T = 'Inmyc.ttf'<br /><br />   # LOS TEXTOS SON RENDERIZADOS CON FUENTES TTF QUE DEBEN ESTAR UBICADAS EN<br />   # UNA CARPETA LLAMADA &quot;FUENTES&quot;, DONDE FONT.TTF ES EL ARCHIVO POR DEFECTO<br />   <br />   texto_en_lineas = TEXT.split&#40;'\n'&#41; <br /><br />      for linea in texto_en_lineas: <br />            <br />       ruta_ttf = os.path.join&#40;'fuentes', FUENTE_T&#41;<br />       fuente = pygame.font.Font&#40;ruta_ttf, TAMANO&#41;<br />       nueva = fuente.render&#40;linea, 1, COLOR_T&#41;             <br />           SCREEN.blit&#40;nueva, &#40;X_COOR,Y_COOR&#41;&#41;<br />       Y_COOR += nueva.get_height&#40;&#41;  <br /><br /></code></dd></dl><br /><br />gracias por la ayuda.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1855">cadrogui</a> — Vie Dic 21, 2007 6:13 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cadrogui]]></name></author>
<updated>2007-12-21T02:15:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=779#p779</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=779#p779"/>
<title type="html"><![CDATA[Texto multilinea en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=779#p779"><![CDATA[
super buena la funcion, funciona de maravilla, respecto del None, tenias razon estaba demas el Print.. jjejjeje<br /><br />salu2 y gracias.<br /><br />adapto el code y lo muestro.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1855">cadrogui</a> — Vie Dic 21, 2007 2:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-12-20T02:46:29+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=776#p776</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=776#p776"/>
<title type="html"><![CDATA[Texto multilinea en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=776#p776"><![CDATA[
<blockquote><div><cite>cadrogui escribió:</cite><br />gracias por la respuesta.  he escrito la siguiente funcion, y en la terminal me muestra &quot;none&quot; de forma infinita hasta q se cierra el programa, alguien sabe por que?<br /><br />...<br /></div></blockquote><br /><br /><br />Saludos, por lo que veo está faltando algo de código para ver el programa<br />funcionando (o ver si está fallando).<br /><br />Agregué algo de ese código que falta para ver tu función y note dos cosas<br />para comentar:<br /><br />1 - para invocar al código de una función alcanza con escribir su nombre<br />y los argumentos, en este caso: <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>DIB_TXT&#40;'Texto ...', ...&#41;</code></dd></dl><br /><br />en tu código escribes:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>print DIB_TXT&#40;'Texto ...', ...&#41;</code></dd></dl><br /><br />la sentencia &quot;print&quot; que está a la izquierda significa que le pides a<br />python que imprima por consola el retorno de la función &quot;DIB_TXT&quot;, y como<br />en el código de la función &quot;DIB_TXT&quot; no hay ningún retorno (usando &quot;return<br />algo&quot;, entonces python devuelve &quot;None&quot;.<br /><br />Como nos comentas que el programa imprime muchas veces &quot;None&quot;, seguramente<br />tu programa está dentro de un bucle (&quot;while&quot; por ejemplo), y eso hace<br />que python ejecute muchas veces la sentencia &quot;print&quot;... puedes quitar la <br />sentencia 'print' y listo.<br /><br />2 - Otro asunto es &quot;¿cual es el contexto de esa función?&quot;, es decir, <br />&quot;¿que hay alrededor de esa función?&quot;. Está bien el código de la función,<br />pero los cambios no se verán en pantalla hasta que ejecutes una sentencia<br />como &quot;pygame.display.flip()&quot;... ¿has colocado esta sentencia en alguna<br />parte del programa después de imprimir?, posiblemente ese sea el problema<br />original.<br /><br /><br />Luego estuve viendo como hacer para imprimir texto en varias lineas, y<br />escribí un código similar al tuyo añadiendo esta funcionalidad y quitando<br />otras:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20071219/imprimir_en_varias_lineas.png" alt="Imagen" /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code># -*- encoding: utf-8 -*-<br />import pygame<br /><br />def imprimir_texto&#40;screen, texto, x, y, color, fuente&#41;:<br />    # separa el texto en elementos de una lista<br />    # ejemplo: convierte &quot;hola \n mundo&quot; en &#91;&quot;hola &quot;, &quot; mundo&quot;&#93;<br />    texto_en_lineas = texto.split&#40;'\n'&#41;<br /><br />    # un bucle que itera por cada una de las lineas del texto<br />    for linea in texto_en_lineas:<br />        nueva = fuente.render&#40;linea, 1, color&#41;<br /><br />        # imprime en pantalla &#40;se debe ejecutar pygame.display.flip&#40;&#41; luego&#41;<br />        screen.blit&#40;nueva, &#40;x, y&#41;&#41;<br /><br />        # reduce la altura de la coordenada vertical, para luego volver<br />        # a imprimir la siguiente linea de texto mas abajo.<br />        y += nueva.get_height&#40;&#41;<br /><br /><br />def main&#40;&#41;:<br />    pygame.font.init&#40;&#41;<br />    screen = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br /><br />    fuente = pygame.font.Font&#40;None, 25&#41;<br />    verde = &#40;90, 255, 90&#41;<br />    texto = &quot; Hola, \n este es un texto \n escrito en varias lineas.&quot;<br />    imprimir_texto&#40;screen, texto, 10, 10, verde, fuente&#41;<br /><br />    # Importate: muestra los cambios en pantalla, sin esta sentencia<br />    # la pantalla permanecerá de color 'negro'.<br />    pygame.display.flip&#40;&#41;<br /><br />    # detiene el programa durante 4 segundos antes de cerrar la ventana.<br />    pygame.time.wait&#40;4000&#41;<br /><br /><br />if __name__ == '__main__':<br />    main&#40;&#41;<br /></code></dd></dl><br /><br />parece mucho código, pero gran parte de todo ello son comentarios...<br /><br /><br />Por último, quisiera hacer una recomendación general acerca del código: <br />Es una buena idea ir construyendo el programa<br />paso a paso, de lo mas simple a lo mas complejo. En este caso puedes<br />escribir primero una función que imprima texto en una sola linea y de<br />un solo color; luego, si funciona bien, agregarle la posibilidad de imprimir<br />en diferentes colores, y si funciona bien, agregar la posibilidad de alterar<br />la tipografía y así... luego podrás ir implementando muchas cosas mas.<br /><br />En tu función noté que tienes muchas cosas ya implementadas: colores,<br />tipografías y tamaños variables. El problema de hacer todo esto junto, está<br />en que si algo falla, te costará más tiempo saber &quot;qué&quot; está fallando.<br />En cambio, si haces la función paso por paso, probando los cambios cada vez,<br />encontrarás el motivo de cualquier fallo de manera inmediata. Python se adapta<br />muy bien a esta forma de trabajar: editar, probar, editar de nuevo...<br />inténtalo, es incluso mas divertido y constructivo que escribir todo el<br />código primero y luego ver que ocurre. Esto evita esa sensación de no <br />&quot;encontrar&quot; el motivo de un error durante mucho tiempo y detenerse.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Dic 20, 2007 2:46 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Dokan]]></name></author>
<updated>2007-12-18T21:15:07+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=772#p772</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=772#p772"/>
<title type="html"><![CDATA[Texto multilinea en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=772#p772"><![CDATA[
Prueba también con el formato habitual para textos multilínea de python, que son las comillas triples tal y como sigue:<br />&quot;&quot;&quot; este texto saldría por consola respetando<br /><br />todos los saltos de línea, así como  &quot;&quot; / @ # % etc (si no me equivoco)&quot;&quot;&quot;<br /><br />no se si te valdrá para lo que necesitas hacer en pygame, pero por probar...<br />si quieres más info echa un vistazo al <a href="http://pyspanishdoc.sourceforge.net/tut/node5.html#SECTION005120000000000000000" class="postlink">apartado 3.1.2</a> del <a href="http://pyspanishdoc.sourceforge.net/tut/tut.html" class="postlink">manual oficial de python</a>.<br />ya nos contarás si te sirve!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1853">Dokan</a> — Mar Dic 18, 2007 9:15 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cadrogui]]></name></author>
<updated>2007-12-18T21:07:14+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=771#p771</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=771#p771"/>
<title type="html"><![CDATA[Texto multilinea en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=771#p771"><![CDATA[
gracias por la respuesta.  he escrito la siguiente funcion, y en la terminal me muestra &quot;none&quot; de forma infinita hasta q se cierra el programa, alguien sabe por que?<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>def DIB_TXT&#40;TEXT, TAMANO, X_COOR, Y_COOR, COLOR, FUENTE&#41;:<br />   <br />   if COLOR == 'NEGRO':<br />      COLOR_T = &#40;0,0,0&#41;<br />   elif COLOR == 'BLANCO':<br />      COLOR_T = &#40;255,255,255&#41;<br />   elif COLOR == 'ROJO':<br />      COLOR_T = &#40;255,0,0&#41;<br />   elif COLOR == 'VERRDE':<br />      COLOR_T = &#40;0,255,0&#41;<br />   elif COLOR == 'AZUL':<br />      COLOR_T = &#40;0,0,255&#41;<br />   elif COLOR == 'AMARILLO':<br />      COLOR_T = &#40;255,255,0&#41;<br />   elif COLOR == 'CYAN':<br />      COLOR_T = &#40;0,255,255&#41;<br />   elif COLOR == 'MAGNETA':<br />      COLOR_T = &#40;255,0,255&#41;<br />   <br />   # SELECCCIONAMOS LA FUENTE ELEGIDA.<br />   <br />   if FUENTE == 1:<br />      FUENTE_T = 'FGAaron.ttf'<br />   elif FUENTE == 2:<br />      FUENTE_T = 'font.ttf'<br />   elif FUENTE == 3:<br />      FUENTE_T = 'hak.ttf'<br />   elif FUENTE == 4:<br />      FUENTE_T = 'HermanDecanus.TTF'<br />   elif FUENTE == 5:<br />      FUENTE_T = 'horros.ttf'<br />   elif FUENTE == 6:<br />      FUENTE_T = 'Inhishan.ttf'<br />   elif FUENTE == 7:<br />      FUENTE_T = 'Inmyc.ttf'<br /><br />   # LOS TEXTOS SON RENDERIZADOS CON FUENTES TTF QUE DEBEN ESTAR UBICADAS EN<br />   # UNA CARPETA LLAMADA &quot;FUENTES&quot;, DONDE FONT.TTF ES EL ARCHIVO POR DEFECTO<br />   <br />   pygame.font.init&#40;&#41;<br />   ruta_ttf = os.path.join&#40;'fuentes', FUENTE_T&#41;<br />   fuente = pygame.font.Font&#40;ruta_ttf, TAMANO&#41;<br />   texto = fuente.render&#40;TEXT, 1, COLOR_T&#41;<br />   screen.blit&#40;texto, &#40;X_COOR,Y_COOR&#41;&#41;<br /><br /><br />print DIB_TXT&#40;'Texto de prueba.', 28, 200, 430, 'BLANCO', 6&#41;<br /></code></dd></dl><br /><br />voy a trata de habilitar la opcion de dividir la cadena para q sea multilinea, o bien agregar las funcionalidades de mi funcion a la otra.<br /><br /><br />salu2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1855">cadrogui</a> — Mar Dic 18, 2007 9:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-12-18T19:00:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=770#p770</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=770#p770"/>
<title type="html"><![CDATA[Texto multilinea en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=770#p770"><![CDATA[
Saludos, existe una función externa a pygame que tal vez<br />te resulte útil para esto:<br /><br />   <!-- m --><a class="postlink" href="http://www.pygame.org/pcr/text_rect/index.php">http://www.pygame.org/pcr/text_rect/index.php</a><!-- m --><br /><br />la función se llama &quot;render_textrect&quot;, y además de interpretar<br />saltos de linea con &quot;\n&quot; ajusta tu texto al área de un rectángulo. <br />He aquí una imagen del programa funcionando:<br /><br /><img src="http://www.pygame.org/pcr/text_rect/textrect.gif" alt="Imagen" /><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Dic 18, 2007 7:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cadrogui]]></name></author>
<updated>2007-12-18T17:58:51+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=769#p769</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=769#p769"/>
<title type="html"><![CDATA[Texto multilinea en pygame]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=213&amp;p=769#p769"><![CDATA[
holas, estoy trabajando con pygame y encontre genial la implementacion que tiene para renderizar textos usando TTF, pero solamente he podido dibujar textos de una sola linea, alguien me podria ayudar a dibujar textos multilineas, he tratado de la siguiente manera:<br /><br />'una\ncadena'<br /><br />pero en el interprete python me funciona, pero en pygame no pasa nada, alguien me puede dar un cable por favor!!!!!<br /><br />salu2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1855">cadrogui</a> — Mar Dic 18, 2007 5:58 pm</p><hr />
]]></content>
</entry>
</feed>