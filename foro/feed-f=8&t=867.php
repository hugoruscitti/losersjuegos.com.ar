<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=867" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-09-07T14:22:45+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=867</id>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-07T14:22:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4077#p4077</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4077#p4077"/>
<title type="html"><![CDATA[Re: Duda con la instruccion break;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4077#p4077"><![CDATA[
entiendo, aunque para mi gusto pierde en claridad el codigo, supongo que sera cosa de acostumbrarse a verlo asi. Gracias por el consejo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Mar Sep 07, 2010 2:22 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-06T18:29:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4067#p4067</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4067#p4067"/>
<title type="html"><![CDATA[Re: Duda con la instruccion break;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4067#p4067"><![CDATA[
es que en realidad un break se usa siempre que se da una condicion. en tu caso si quedaba alguna. Asi que en vez de recorrer todo y en caso de que se de la condicion salgo, recorro solo mientras que no se de la condicion.<br /><br />En cuanto a lo de mezclar, no es bueno si tienes pensado utilizar un compilador de C terminos y funciones de C++, pero si utilizas algun compilador de C++ no pasa nada. Y aunque no puedes utilizar bool en C, el tema de false y true es lo mismo (false = 0, true = resto de numeros), asi que te puedes evitar la comparacion adicional (hay_posibilidad == 0) -&gt; (!hay_posibilidad)<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Sep 06, 2010 6:29 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-06T17:12:22+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4066#p4066</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4066#p4066"/>
<title type="html"><![CDATA[Re: Duda con la instruccion break;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4066#p4066"><![CDATA[
Ah entonces no se suele usar break,  yo lo uso mucho XD. Pues nada a evitarlo.<br />Antes usaba bool para ese tipo de cosas pero me comentaron que mejor usar int por el tema de no mezclar c y c++. Realmente no se si lo que uso es c o c++, pero valla diria que la mayoria de funciones que suelo usar son de c(sino son todas).<br /><br />Por cierto he terminado con la IA del tres en ralla, bastante basica pero  almenos esta acabado el jueguecillo.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Lun Sep 06, 2010 5:12 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-09-06T16:34:36+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4064#p4064</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4064#p4064"/>
<title type="html"><![CDATA[Re: Duda con la instruccion break;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4064#p4064"><![CDATA[
No, soio &quot;rompe&quot; el bucle en el que estas, aunke normalmente un break suele ponerse ya que no se ha definido bien la condicion o no se ha elegido el tipo de bucle, y por lo tanto puede evitarse:<br /><br />[code]<br />bool hay_jugadas = true;<br />int i = 0;<br />while(hay_jugadas &amp;&amp; i &lt; 3)<br />{<br />  int j = 0;<br />  while(hay_jugadas &amp;&amp; j &lt; 3)<br />  {<br />    hay_jugadas = tablero[i][j] != 'O' &amp;&amp; tablero[i][j] != 'X';<br />    j++;<br />  }<br />  i++;<br />}<br /><br />if (!hay_jugadas)<br />  quien_gana = 3;<br /><br />intenta usar bool en vez de enteros para cosas como hay jugadas o cosas que sean si/no. Y en los condicionales no hace falta que preguntes por hay_jugada == 0, sino que en C++, false = 0, true = cualquier otro numero, asi que puedes preguntar directamente if hayjugada.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Lun Sep 06, 2010 4:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[migueleitorone]]></name></author>
<updated>2010-09-06T15:46:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4063#p4063</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4063#p4063"/>
<title type="html"><![CDATA[Duda con la instruccion break;]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=867&amp;p=4063#p4063"><![CDATA[
hola, estoy haciendo un 3 en ralla muy bonito y tengo una duda sobre la instruccion break. Sale de TODOS los bucles?<br /><br />EDITO:<br />Mi problema realmente esta aqui: <br /><dl class="codebox"><dt>Code: </dt><dd><code>///////////VERIFICAR EMPATES////////////////////////////////<br />if(quien_gana == 0) /////////Entra al if mientras no haya un ganador<br />      {<br />         hay_jugadas = 0; // Se da por hecho que no hay jugadas posibles<br />         for(int i=0; i&lt;3; i++)<br />         {<br />            for(int j=0; j&lt;3; j++)<br />            {<br />               if(tablero&#91;i&#93;&#91;j&#93; != 'O' &amp;&amp; tablero&#91;i&#93;&#91;j&#93; != 'X') //casilla por casilla se verifica que su contenido no sea 'X' o 'O'<br />               {<br />                  hay_jugadas = 1; // Por lo tanto quedan jugadas posibles y se sale del bucle<br />                  break;  ///////////////////////////////////////----&gt; Esto no me funciona, siguen entrando en el for una vez confirmado que quedan jugadas<br />               }<br />               <br />            }<br />         }<br />         if (hay_jugadas == 0) <br />         {<br />            quien_gana = 3;<br />            break;<br />         }<br />      }</code></dd></dl><br /><br />gracias <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />:D<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2313">migueleitorone</a> — Lun Sep 06, 2010 3:46 pm</p><hr />
]]></content>
</entry>
</feed>