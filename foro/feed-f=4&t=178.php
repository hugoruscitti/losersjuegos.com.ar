<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=178" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-07-14T16:53:26+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=4&amp;t=178</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2009-07-14T16:53:26+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=2741#p2741</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=2741#p2741"/>
<title type="html"><![CDATA[Libreria en ves de conio]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=2741#p2741"><![CDATA[
Hola que tal, estuve desarrollando el juego snake, que requiere que pueda pocisionar el cursor en donde yo quiera, y tambien tiene colores, pero me sucedio lo mismo, solo trabajo en linux y pense que nunca iva a poder hacer lo que hacia esa libreria, pero me encontre con una libreria muy buena y mas completa que conio, se llama ncurses, existe documentacion en internet y es facil de usar, se las recomiendo para sus proximos proyectos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mar Jul 14, 2009 4:53 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-10-19T20:31:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=633#p633</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=633#p633"/>
<title type="html"><![CDATA[Juego muy facil]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=633#p633"><![CDATA[
<blockquote><div><cite>pedroqv escribió:</cite><br />Si pues yo uso el compilador dev-cpp y al instalar conio.h me dice que tengo que dirigirme a el como si fuera conio2.h pero pues no mas es cuestion de quitarle el 2<br /></div></blockquote><br /><br />Si, si. Es cierto, pero solo en el sistema Windows. &quot;conio.h&quot; era<br />originaria de la compañia Borland (creo que de uno de <br />sus productos, &quot;turbo C&quot;). Luego se desarrolló &quot;conio2&quot; para<br />devcpp.<br /><br />Mi comentario es que no existe conio2.h ni conio.h para el<br />sistema operativo GNU/Linux. Muchas personas usamos ese<br />sistema. Y puede que la versión en python les resulte de utilidad.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Oct 19, 2007 8:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pedroqv]]></name></author>
<updated>2007-10-19T19:52:09+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=631#p631</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=631#p631"/>
<title type="html"><![CDATA[Juego muy facil]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=631#p631"><![CDATA[
Si pues yo uso el compilador dev-cpp y al instalar conio.h me dice que tengo que dirigirme a el como si fuera conio2.h pero pues no mas es cuestion de quitarle el 2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1832">pedroqv</a> — Vie Oct 19, 2007 7:52 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2007-10-18T19:57:23+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=627#p627</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=627#p627"/>
<title type="html"><![CDATA[Juego muy facil]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=627#p627"><![CDATA[
Hola, gracias por aportar el ejemplo de tu juego, me parece<br />una buena idea.<br /><br />Lamentablemente algunos usuarios de GNU/Linux no podemos<br />ver tu ejemplo en funcionamiento, ocurre que no tenemos acceso<br />a la biblioteca &quot;conio2&quot;. En fin, dado que tu programa se puede<br />leer, gracias a que lo has hecho muy prolijo, me tomé el atrevimiento<br />de hacer una versión del mismo en python. El programa se ve<br />así:<br /><br /><img src="http://www.losersjuegos.com.ar/incoming/descargas/20071018/laberinto.png" alt="Imagen" /><br /><br />No requiere de otras bibliotecas, excepto pygame, y se puede<br />ejecutar a partir del siguiente código:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import pygame<br />from pygame.locals import K_LEFT, K_RIGHT, K_UP, K_DOWN, QUIT<br /><br />COLUMNAS=40<br />FILAS=17<br /><br />mapa = &quot;&quot;&quot;<br />****************************************<br />*                   *                  *<br />******* *********** *****************  *<br />*       *              *               *<br />* ******************** ***** ********* *<br />*    *                     *         * *<br />****** ***************** *********** * *<br />*      *     *         *             * *<br />* ******** * ************************* *<br />*          *       *                   *<br />******************** *******************<br />*          *       *                   *<br />************ ************************* *<br />*            *                         *<br />* *** ******** *************************<br />*     *      *                        F*<br />****************************************<br />&quot;&quot;&quot;<br /><br />mapa = mapa&#91;1:-1&#93;<br />mapa = mapa.split&#40;'\n'&#41;<br />pos_x = 1<br />pos_y = 1<br /><br />def mostrar_mapa&#40;screen, mapa&#41;:<br />    screen.fill&#40;&#40;0, 0, 0&#41;&#41;<br /><br />    for f in xrange&#40;FILAS&#41;:<br />        for c in xrange&#40;COLUMNAS&#41;:<br />            if mapa&#91;f&#93;&#91;c&#93; == '*':<br />                imprimir_bloque&#40;screen, f, c&#41;<br /><br /><br />def imprimir_bloque&#40;screen, fila, columna&#41;:<br />    x = columna * 8<br />    y = fila * 14<br />    color = &#40;100, 255, 100&#41;<br />    <br />    screen.fill&#40;color, &#40;x, y, 8, 14&#41;&#41;<br /><br /><br />def imprimir_personaje&#40;screen&#41;:<br />    color = &#40;255, 255, 255&#41;<br />    pos = &#40;pos_x * 8 + 4, pos_y * 14 + 8&#41;<br /><br />    pygame.draw.circle&#40;screen, color, pos, 3&#41;<br /><br />def mover_personaje&#40;screen, mapa&#41;:<br />    global pos_x, pos_y<br />    teclas = pygame.key.get_pressed&#40;&#41;<br /><br />    if teclas&#91;K_RIGHT&#93; and celda_libre&#40;mapa, pos_x + 1, pos_y&#41;:<br />        pos_x += 1<br />    elif teclas&#91;K_LEFT&#93; and celda_libre&#40;mapa, pos_x - 1, pos_y&#41;:<br />        pos_x -= 1<br /><br />    if teclas&#91;K_UP&#93; and celda_libre&#40;mapa, pos_x, pos_y - 1&#41;:<br />        pos_y -= 1<br />    elif teclas&#91;K_DOWN&#93; and celda_libre&#40;mapa, pos_x, pos_y + 1&#41;:<br />        pos_y += 1<br /><br />def celda_libre&#40;mapa, x, y&#41;:<br />    &quot;Informa si una celda del mapa se puede ocupar con el personaje&quot;<br />    return mapa&#91;y&#93;&#91;x&#93; == ' '<br /><br />def main&#40;&#41;:<br />    salir = False<br />    screen = pygame.display.set_mode&#40;&#40;320, 240&#41;&#41;<br /><br />    # bucle principal<br />    while not salir:<br />        # verifica si se cierra la ventana<br />        for e in pygame.event.get&#40;&#41;:<br />            if e.type == QUIT:<br />                salir = True<br /><br />        mostrar_mapa&#40;screen, mapa&#41;<br />        mover_personaje&#40;screen, mapa&#41;<br />        imprimir_personaje&#40;screen&#41;<br />        pygame.display.flip&#40;&#41;<br />        pygame.time.wait&#40;10&#41;<br /><br />if __name__ == &quot;__main__&quot;:<br />    main&#40;&#41;</code></dd></dl><br /><br />Intenté mantener el código del programa lo mas parecido al<br />original que realizó &quot;pedroqv&quot;, pero me faltó el mensaje de<br />nivel completado y algunas otras cosas. Por el momento solo<br />se puede realizar movimientos por el escenario.<br /><br />Para verlo en funcionamiento pueden guardar el contenido<br />de este código en un archivo de texto simple, por <br />ejemplo &quot;laberinto.py&quot;, y luego ejecutar <br />&quot;python laberinto.py&quot;... también pueden hacer &quot;doble<br />click&quot; sobre el archivo y Python lo ejecutará.<br /><br />Saludos y gracias nuevamente por el aporte.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Jue Oct 18, 2007 7:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pedroqv]]></name></author>
<updated>2007-10-18T06:13:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=621#p621</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=621#p621"/>
<title type="html"><![CDATA[Juego muy facil]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=178&amp;p=621#p621"><![CDATA[
<span style="color: red"><br />Se trata de resolver un laberinto, asi que nomas copien y peguen <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_cool.gif" alt="8)" title="Cool" /> <br /></span><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;conio2.h&gt;<br /><br />#define COLUMNA 40<br />#define RENGLON 17<br /><br />int mostrarMapa&#40;void&#41;;<br />int movimientos&#40;void&#41;;<br />int terminar&#40;void&#41;;<br /><br />char mapa&#91;RENGLON&#93;&#91;COLUMNA&#93; = &#123;&quot;****************************************&quot;,<br />                               &quot;*                   *                  *&quot;,<br />                               &quot;******* *********** *****************  *&quot;,<br />                               &quot;*       *              *               *&quot;,<br />                               &quot;* ******************** ***** ********* *&quot;,<br />                               &quot;*    *                     *         * *&quot;,<br />                               &quot;****** ***************** *********** * *&quot;,<br />                               &quot;*      *     *         *             * *&quot;,<br />                               &quot;* ******** * ************************* *&quot;,<br />                               &quot;*          *       *                   *&quot;,<br />                               &quot;******************** *******************&quot;,<br />                               &quot;*          *       *                   *&quot;,<br />                               &quot;************ ************************* *&quot;,<br />                               &quot;*            *                         *&quot;,<br />                               &quot;* *** ******** *************************&quot;,<br />                               &quot;*     *      *                        F*&quot;,<br />                               &quot;****************************************&quot;&#125;;<br /><br />int mostrarMapa&#40;void&#41;<br />&#123;    <br />    int i;<br />    int j;<br />    int textura;    <br />    <br />    for&#40; i=0; i&lt;RENGLON; i++ &#41;<br />    &#123;<br />         for &#40; j=0; j&lt;COLUMNA; j++ &#41;<br />         &#123;<br />             if&#40; mapa&#91;i&#93;&#91;j&#93;==42 &#41;<br />                 textura = 178;<br />             else if&#40; mapa&#91;i&#93;&#91;j&#93;==70 &#41;<br />                 textura = 3;<br />             else<br />                 textura = 32;<br />             <br />             printf&#40;&quot;%c&quot;,textura&#41;;       <br />         &#125;<br />         printf&#40;&quot;\n&quot;&#41;;<br />    &#125;<br />    return 1;<br />&#125;                               <br /><br />int movimientos&#40;void&#41;<br />&#123;<br />    char tecla;<br />    int r=2;<br />    int c=2;<br />    long ciclos=0;<br />    <br />    gotoxy&#40;c,r&#41;;<br />    textcolor&#40;15&#41;;<br />    printf&#40;&quot;%c&quot;,2&#41;;<br />    while&#40; 1 &#41;<br />    &#123;           <br />           gotoxy&#40;1,25&#41;;<br />           textcolor&#40;15&#41;;<br />           printf&#40;&quot;Movimientos: %d&quot;,ciclos&#41;;          <br />           <br />           tecla = getch&#40;&#41;;<br />           gotoxy&#40;c,r&#41;;                                    <br />           switch&#40; tecla &#41;<br />           &#123;                      <br />              case 56: //arriba 8<br />                   if&#40; r&gt;2 &amp;&amp; mapa&#91;r-2&#93;&#91;c-1&#93;!='*' &#41;<br />                   &#123;                       <br />                       printf&#40;&quot; &quot;&#41;;<br />                       r--;<br />                       ciclos++;<br />                   &#125;<br />                   break;               <br />              case 50: //abajo 2<br />                   if&#40; r&lt;RENGLON &amp;&amp; mapa&#91;r&#93;&#91;c-1&#93;!='*' &#41;<br />                   &#123;<br />                       printf&#40;&quot; &quot;&#41;;                       <br />                       r++;<br />                       ciclos++;<br />                   &#125;<br />                   break;<br />              case 52: //izquierda 4<br />                   if&#40; c&gt;2 &amp;&amp; mapa&#91;r-1&#93;&#91;c-2&#93;!='*' &#41;<br />                   &#123;<br />                       printf&#40;&quot; &quot;&#41;;<br />                       c--;<br />                       ciclos++;<br />                   &#125;<br />                   break;<br />              case 54: //derecha 6<br />                   if&#40; c&lt;COLUMNA &amp;&amp; mapa&#91;r-1&#93;&#91;c&#93;!='*' &#41;<br />                   &#123;<br />                       printf&#40;&quot; &quot;&#41;;<br />                       c++;<br />                       ciclos++;<br />                   &#125;<br />                   break;                     <br />           &#125;<br />           if&#40; c==38 &amp;&amp; r==16 &#41;<br />               return 1;<br />           <br />           gotoxy&#40;c,r&#41;; <br />           textcolor&#40;15&#41;;          <br />           printf&#40;&quot;%c&quot;,2&#41;;                               <br />    &#125;<br />&#125;<br /><br />int terminar&#40;void&#41;<br />&#123;<br />    gotoxy&#40;1,20&#41;;<br />    textcolor&#40;14&#41;;<br />    printf&#40;&quot;Laberinto terminado\n&quot;&#41;;<br />    printf&#40;&quot;&lt;presione Q para salir&gt;\n&quot;&#41;;<br />    while&#40; getch&#40;&#41;!='q' &#41;<br />    &#123;&#125;<br />&#125;<br /><br />int main&#40;void&#41;<br />&#123;    <br />    mostrarMapa&#40;&#41;;<br />    movimientos&#40;&#41;;<br />    terminar&#40;&#41;;    <br />&#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1832">pedroqv</a> — Jue Oct 18, 2007 6:13 am</p><hr />
]]></content>
</entry>
</feed>