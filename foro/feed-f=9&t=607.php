<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=607" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-08-01T00:53:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=607</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-08-01T00:53:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=607&amp;p=2823#p2823</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=607&amp;p=2823#p2823"/>
<title type="html"><![CDATA[Consultar entrada estandar(teclado)(no bloqueante)(estandar)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=607&amp;p=2823#p2823"><![CDATA[
Hola a todos, ya tengo una solucion para la lectura del teclado de forma no bloqueante es una mezcla de cambiar algunos aspectos de la configuracion de la terminal (de lo ke no tengo ni idea ya ke parte del codigo es sacado de ejemplos que encontre que no funcionaban del todo bien) y un poco de codigo igual que el que tuve que usar al programar SNL para los grupos de conexiones de sockets. Segun estuve leyendo de donde obtuve el codigo de los ejemplos el cambio en la configuracion de la terminal es por que la terminal en GNU/Linux por defecto trabaja de forma bloqueante, trabaja normal y cuando necesita algo se para para que el usuario escriba o pulse alguna tecla, por lo que hace es obtener la configuracion de la terminal, cambiar las opciones de la terminal para que trabaje de forma no bloqueante, con grupos de sockets y la funcion select se comprueba si la entrada estandar tiene algun caracter pendiente o a sucedido algo, obtiene el caracter de la tecla pulsada, comprueba que se obtuvo el caracter de forma correcta y restaura la terminal a su configuracion anterior. El codigo que encontre fallaba en que despues del select no comprobaba que fuese la entrada estandar la que verdaderamente tuviese algun caracter pendiente o algun suceso despues del select y en que no comprobaba que la funcion select no devolviese -1 y que read devolviese 1. Os dejo la funcion que he escrito finalmente con la que leer una tecla de forma no bloqueante:<br /><dl class="codebox"><dt>Code: </dt><dd><code>char tecla_pulsada&#40;void&#41;&#123;<br />char t='\0';<br />static struct termios oldconsola,consola;<br />fd_set rfd;<br />struct timeval timeout;<br />/* Leer los parametros asociados a la consola */<br />if &#40;tcgetattr&#40;STDIN_FILENO,&amp;consola&#41;==-1&#41; &#123;<br />   t= '\0';<br />&#125;else&#123;<br />   /* Almacenar parametros para su posterior recuperacion*/<br />   oldconsola = consola;<br />   /* Cambiar parametros */<br />   consola.c_cc&#91;VMIN&#93;=1;<br />   consola.c_lflag&amp;=~&#40;ECHO|ICANON&#41;;  <br />   if&#40;tcsetattr&#40;STDIN_FILENO,TCSANOW,&amp;consola&#41;==-1&#41;&#123;<br />      t= '\0';<br />   &#125;else&#123;<br />      timeout.tv_sec  = 0;<br />      timeout.tv_usec = 10000;<br />      FD_ZERO&#40;&amp;rfd&#41;;<br />      FD_SET&#40;STDIN_FILENO,&amp;rfd&#41;;<br />      if&#40;select&#40;STDIN_FILENO+1,&amp;rfd,NULL,NULL,&amp;timeout&#41; != -1&#41;&#123;<br />         if&#40;FD_ISSET&#40;STDIN_FILENO, &amp;rfd&#41;&#41;&#123;<br />            read&#40;STDIN_FILENO,&amp;t,1&#41;;<br />         &#125;<br />      &#125;else&#123;<br />         t= '\0';<br />      &#125;<br />      /*recuperando la terminal anterior*/<br />      tcsetattr&#40;STDIN_FILENO,TCSANOW,&amp;oldconsola&#41;;<br />   &#125;<br />&#125;<br />return t;<br />&#125;</code></dd></dl><br /><br />Aprovecho tambien para dejaros un poco de codigo con el que se puede mostrar una barra &quot;/&quot; girando mientras el programa espera o hace cualquier cosa esperando a que el usuario pulse alguna tecla. El codigo que se pone donde se quiera escribir la barra girando es:<br /><dl class="codebox"><dt>Code: </dt><dd><code>printf&#40;&quot;%c&quot;, barra_girando&#40;&#41;&#41;;<br />printf&#40;&quot;%c&#91;1D&quot;, 27&#41;;</code></dd></dl><br /><br />Y el codigo de la funcion barra_girando(), que es la funcion que devuelve el caracter apropiado para hacer la animacion de la barra girando:<br /><dl class="codebox"><dt>Code: </dt><dd><code>char barra_girando&#40;void&#41;&#123;<br />static unsigned int f=0;<br />char s=' ';<br />if&#40;f == 0&#41;&#123;<br />   s= '\\';<br />&#125;else if&#40;f == 1&#41;&#123;<br />   s= '|';<br />&#125;else if&#40;f == 2&#41;&#123;<br />   s= '/';<br />&#125;else if&#40;f == 3&#41;&#123;<br />   s= '-';<br />&#125;<br />f++;<br />f= f%4;<br />return s;<br />&#125;</code></dd></dl><br /><br />Se que esto no tiene valor cuando se programa usando bibliotecas graficas como SDL, pero se puede usar por ejemplo para juegos en modo texto, para programar un servidor para un juego y cualquier otra cosa que se os ocurra.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Sab Ago 01, 2009 12:53 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-07-28T21:20:17+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=607&amp;p=2819#p2819</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=607&amp;p=2819#p2819"/>
<title type="html"><![CDATA[Consultar entrada estandar(teclado)(no bloqueante)(estandar)]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=607&amp;p=2819#p2819"><![CDATA[
Hola a todos, estoy intentando poder consultar si se ha pulsado alguna tecla para en dicho caso poder obtenerla y si no se ha pulsado ninguna tecla continuar con la ejecucion del programa. Si usara getchar la ejecucion se quedaria a la espera de que se pulse alguna tecla, pero necesito que no se quede a la espera sino que si no se pulsa una tecla continue la ejecucion.<br /><br />Si es posible prefiero una solucion que use las bibliotecas estandar y que de ese modo sea portable y pueda usarla en GNU/Linux asi como en Windows (pero principalmente en GNU/Linux).<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mar Jul 28, 2009 9:20 pm</p><hr />
]]></content>
</entry>
</feed>