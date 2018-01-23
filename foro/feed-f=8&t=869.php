<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=869" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-08T14:49:55+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=869</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-08T14:49:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4084#p4084</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4084#p4084"/>
<title type="html"><![CDATA[Re: Saltar un getch() si no se pulsa la tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4084#p4084"><![CDATA[
A que te refieres con usar un hilo?<br />No sabia como llamar a mi problema, buscare sobre gestion de eventos en c, aver si encuentro algo interesante.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mié Sep 08, 2010 2:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-09-08T13:43:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4083#p4083</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4083#p4083"/>
<title type="html"><![CDATA[Re: Saltar un getch() si no se pulsa la tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4083#p4083"><![CDATA[
La funcion sleep se puede usar en gnu/linux, la de win tiene mayuscula. Puedes usar directivas del preposesador para que se use la funcion dependiendo del SO<br /><br />Cuando hice un snake use un hilo para leer el teclado, claro que existe la forma de hacerlo sin el hilo, tal vez consultando los eventos directamente al SO, pero no <br />se como.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Sep 08, 2010 1:43 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-07T14:28:40+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4078#p4078</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4078#p4078"/>
<title type="html"><![CDATA[Saltar un getch() si no se pulsa la tecla]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=869&amp;p=4078#p4078"><![CDATA[
hola de nuevo. Estoy programando un snake y ya he hecho que un caracter se desplace por la pantalla automaticamente. El problema viene con el tema de hacer que cambie de direccion, ya que si uso cualquier funcion de entrada el programa se para hasta que pulse una tecla y el tema seria que sino pulsas la tecla simplemente se salte la instruccion. Alguna idea?<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;stdio.h&gt;<br />#include &lt;stdlib.h&gt;<br />#include &lt;time.h&gt;<br />#include &lt;windows.h&gt;<br />#include &lt;conio.h&gt;<br /><br />int main()<br />{<br />   ///////////////VARIABLES///////////////////////////////////////////////////////////////////////////<br />   //////////////////////////////////////////////////////////////////////////////////////////////////<br />   srand(time(NULL));<br />   char tablero&#91;30&#93;&#91;60&#93;;<br />   int i_aleatoria, j_aleatoria;<br />   int has_perdido = 0;<br />   char movimiento_automatico; //r = derecha, l = izquierda u= arriba d= abajo <br /><br />   /////////////DOY VALOR A CADA CASILLA DEL TABLERO//////////////////////////////////////////////////<br />   ///////////////////////////////////////////////////////////////////////////////////////////////////<br />   for(int i=0; i&lt;30; i++)<br />   {<br />      for(int j=0; j&lt;60; j++)<br />      {<br />         if(i == 0) tablero&#91;i&#93;&#91;j&#93; = 'o';<br />         else if(j == 0) tablero&#91;i&#93;&#91;j&#93; ='o';<br />         else if(j == 59) tablero&#91;i&#93;&#91;j&#93; ='o';<br />         else if(i == 29) tablero&#91;i&#93;&#91;j&#93; ='o';<br /><br />         if(tablero&#91;i&#93;&#91;j&#93; == 'o') continue;<br />         else tablero&#91;i&#93;&#91;j&#93; = ' ';<br /><br />      }<br />   }<br /><br />   ///////////POSICION INICIAL DEL CARACTER//////////////////////////////////////////////////////////<br />   //////////////////////////////////////////////////////////////////////////////////////////////////<br />   i_aleatoria = (rand() % 28)+1;<br />   j_aleatoria = (rand() % 58)+1;<br />   tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = '+';<br />   <br />   ///////////MOVIMIENTO AUTOMATICO INICIAL DEL CARACTER/////////////////////////////////////////////////////<br />   //////////////////////////////////////////////////////////////////////////////////////////////////<br />   if(j_aleatoria &lt; 30) movimiento_automatico = 'r';<br />   else movimiento_automatico = 'l';<br />   <br />   //////////ACTUALIZAR TABLERO//////////////////////////////////////////////////////////////////////<br />   /////////////////////////////////////////////////////////////////////////////////////////////////<br />   do<br />   {<br />      system(&quot;cls&quot;);<br />      for(int i=0; i&lt;30; i++)<br />      {<br />         for(int j=0; j&lt;60; j++)<br />         {<br />            printf(&quot;%c&quot;, tablero&#91;i&#93;&#91;j&#93;);<br />         }<br />         printf(&quot;\n&quot;);<br />      }<br />      <br />      /////////MOVIMIENTO AUTOMATICO/////////////////////////////////////////////////////////////////////<br />      ///////////////////////////////////////////////////////////////////////////////////////////////////<br />      if(movimiento_automatico == 'r') <br />      {<br />         tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = ' ';<br />         j_aleatoria++;<br />         if(tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; == 'o') has_perdido = 1;<br />         else tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = '+';<br />      }<br />      else if(movimiento_automatico == 'l') <br />      {<br />         tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = ' ';<br />         j_aleatoria--;<br />         if(tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; == 'o') has_perdido = 1;<br />         else tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = '+';<br />      }<br />      else if(movimiento_automatico == 'u') <br />      {<br />         tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = ' ';<br />         i_aleatoria--;<br />         if(tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; == 'o') has_perdido = 1;<br />         else tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = '+';<br />      }<br />      else if(movimiento_automatico == 'd') <br />      {<br />         tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = ' ';<br />         i_aleatoria++;<br />         if(tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; == 'o') has_perdido = 1;<br />         else tablero&#91;i_aleatoria&#93;&#91;j_aleatoria&#93; = '+';<br />      }<br />      Sleep(250);<br />   <br />   }while(has_perdido == 0);<br /><br />   printf(&quot;Has perdido hermano&quot;);<br />   getch();<br /><br />   return 0;<br />}</code></dd></dl><br /><br />Por otro lado deduzco que la funcion sleep() no es portable por que esta incluida en windows.h, hay alguna alternativa multiplataforma?<br />gracias de nuevo por la ayuda <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mar Sep 07, 2010 2:28 pm</p><hr />
]]></content>
</entry>
</feed>