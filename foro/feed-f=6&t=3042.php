<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=3042" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-11-14T04:56:00+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=3042</id>
<entry>
<author><name><![CDATA[SebasCabeza]]></name></author>
<updated>2013-11-14T04:56:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306"/>
<title type="html"><![CDATA[Problema Camara SDL2]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=3042&amp;p=9306#p9306"><![CDATA[
Hola, gente estoy en las primeras etapas de un proyecto de un plataformero, y estoy teniendo problemas con la camara, eh probado la forma de LAzy foo, sin resultados, eh probado otras formas pero tambien sin resultados, creo que mi problema es mas de entendimiento que de otra cosa, el concepto que tengo es el siguiente. Creo un SDL_Rect (camara) por ejemplo, yo a ese rectangulo le sumo la posicion del personaje en los ejes X e Y y despues en (W/H) el ancho y largo deseado de la camara, despues lo renderizo en pantalla de la siguiente forma SDL_RenderCopy(renderer,NULL,NULL,&amp;camara), despues les seteo los parametros para que no salga del ancho y largo del nivel, pero es lo mismo que nada, no funciona. Si alguien me podria orientar se lo agradeceria inmensamente. Dejo el codigo que tengo hasta ahora. <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>void Jug::Draw()<br />  {<br /><br />      posicion.x = rect.x+*CameraX;<br />      posicion.y = rect.y+*CameraY;<br />      posicion.w = rect.w;<br />      posicion.h = rect.h;<br /><br /><br /><br />      SDL_RenderCopy (renderer,texture,&amp;crop,&amp;posicion);<br /><br /><br />  }<br /><br />  void Jug::SetCamera()<br />  {<br /><br />      camara.x = (*CameraX+100/2)-1440/2;<br />      std::cout&lt;&lt;camara.x&lt;&lt;std::endl;<br />      camara.y = (*CameraY+100/2)-900/2;<br />      std::cout&lt;&lt;camara.y&lt;&lt;std::endl;<br />      camara.w = 500;<br />      camara.h = 500;<br /><br />      if( camara.x &lt; 0 )<br />            {<br />               camara.x = 0;<br />            }<br />            if( camara.y &lt; 0 )<br />            {<br />               camara.y = 0;<br />            }<br />            if( camara.x &gt; 1440 - camara.w )<br />            {<br />               camara.x = 1440 - camara.w;<br />            }<br />            if( camara.y &gt; 900 - camara.h )<br />            {<br />               camara.y = 900 - camara.h;<br />            }<br /><br />      SDL_RenderCopy(renderer,texture,NULL,&amp;camara);<br /><br /><br />  }</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3144">SebasCabeza</a> — Jue Nov 14, 2013 4:56 am</p><hr />
]]></content>
</entry>
</feed>