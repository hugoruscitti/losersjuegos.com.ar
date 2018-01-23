<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=264" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-03-19T21:35:38+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=7&amp;t=264</id>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-03-19T21:35:38+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1014#p1014</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1014#p1014"/>
<title type="html"><![CDATA[SDL_gfx-2.0.1.6 duda noob]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1014#p1014"><![CDATA[
muchisimas gracias por la respuesta.<br />la verdad es que todavia no me he metido con openGL y me da un poco de miedo :$. he creado ya un juego de aviones 2D con SDL y pretendia seguir usandolo, pero si openGL resuleve todo esto mejor, pues habra que seguir investigando. no es viable en mi caso tener distintos graficos para cada direccion, porque tengo bastantes personajes (aventura grafica) y ademas, tengo el caminar en profundidad, donde tendre que redimensionar mis graficos para dar impresion de acercamiento o alejamiento, entonces crei que SDL_gfx seria lo mejor, pero si me recomiendas openGL, mañana mismo me pondre a investigar.<br /><br />muchas gracias por tomarte la molestia de responder y por tus consejos<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Mié Mar 19, 2008 9:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kittie4man]]></name></author>
<updated>2008-03-19T02:21:45+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1010#p1010</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1010#p1010"/>
<title type="html"><![CDATA[SDL_gfx-2.0.1.6 duda noob]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1010#p1010"><![CDATA[
Mira, si no me equivoco es una libreria pensada principalmente para GNU/Linux. <br />Yo en windows tuve el mismo problema que vos, consegui todo compilado pero segui teniendo problemas. En linux andubo de 1 y 10 ptos.<br />De aca saque todo compilado, chekea a ver si a vos te sirve.<br /><!-- m --><a class="postlink" href="http://www.gamedev.net/community/forums/topic.asp?topic_id=381879">http://www.gamedev.net/community/forums ... _id=381879</a><!-- m --><br /><br />La verdad no le di mucha bola a usarla porque era para probar el rendimiento de esos efectos sin OpenGL.<br /><br />Ahora, para hacer un flip no es necesario usar una libreria externa.<br />Podes usar 2 imagenes (una mirando a la derecha y otra a la izq) y cambiarlas segun la dirección. <br />Si tu intencion es usar rotaciones y escalados busca info sobre OpenGL para 2D que anda mucho mejor con ese tipo de efectos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1866">kittie4man</a> — Mié Mar 19, 2008 2:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[maije]]></name></author>
<updated>2008-03-18T12:17:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1006#p1006</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1006#p1006"/>
<title type="html"><![CDATA[SDL_gfx-2.0.1.6 duda noob]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=264&amp;p=1006#p1006"><![CDATA[
hola a tod@s. soy un poco noob asi que aqui va una duda de noob. <br />estoy haciendo un videojuego y por supuesto tengo pj's que quiero hacer que caminen, para caminar de izda a dcha tengo que hacer un flip vertical de la imagen (imagen espejo en horizontal) y en este foro lei a un compañero que lo explicaba realmente bien, que la biblioteca SDL_gfx incluia funciones bastante utiles de manejo de imagenes, entre las que estaba rotar o redimensionar, entonces me digo, esta biblioteca la quiero para mi, pero aqui esta mi problema de noob. tengo instaladas y listas para usar las extensiones mas comunes de SDL como image, ttf, mixer y net, pero todas ellas, al bajarlas tenian una carpetita muy mona llamada &quot;include&quot; y otra mas mona aun llamada &quot;libs&quot; entonces, arrastrando a mi proyecto las *.lib, copiando las *.dll's en la carpeta donde hago el desarrollo y añadiendo a mi proyecto las carpetas include que necesitara, todo funcionaba perfectamente, pero la SDL_gfx no tiene esas carpetas, parece que no esta ni compilada y no se compilarla para mi VC++ 2005 Express. <br />he visto que hay una carpeta dentro del archivo que te bajas que se llama &quot;other builds&quot;, y uno de los zip dentro de esa carpeta se llama VisualC6, que supuse que seria la mia, la descomprimi, abri el proyecto que me aparecio dentro de la carpeta e intente compilarlo pero me da error y no se que estoy haciendo mal, si tengo que copiar el proyecto en alguna otra carpeta o como se hace :$...etc etc y una vez que lo tenga compilado, como usarlo (incluirlo) dentro de mi proyecto.<br /><br />muchas gracias de antemano<br />atentamente<br />maije<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1862">maije</a> — Mar Mar 18, 2008 12:17 pm</p><hr />
]]></content>
</entry>
</feed>