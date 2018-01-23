<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=581" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-06-28T14:35:49+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=581</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-06-28T14:35:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2657#p2657</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2657#p2657"/>
<title type="html"><![CDATA[Error OpenGL - glutCreateWindow called without first calling]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2657#p2657"><![CDATA[
<blockquote><div><cite>lacabra25 escribió:</cite><br />Como veo que me he enrrollado un poco, resumo, ¿algun manual, ejemplo, o algo de informacion con lo que empezar a usar OpenGL y SDL juntos?<br /></div></blockquote>Yo solo miro los códigos adaptados de NeHe. Así que no están pensados para SDL. Si encuentras algo, ya lo publicarás.<br /><br /><blockquote><div><cite>lacabra25 escribió:</cite><br />¿se puede tener varias superficies con contexto OpenGL y dibujar en una o en otra con OpenGL, de forma analoga a como copiamos una superficie a una u otra superficie?<br /></div></blockquote>Hay un Flag de Surface que se llama SDL_OPENGLBLIT que no he tenido tiempo de probar. Tiene buena pinta, pero no he encontrado mucha info y encima está deprecated. Si te animas a investigar...<br /><br /><blockquote><div><cite>lacabra25 escribió:</cite><br />tengo entendido que modelos echos con programas como blender pueden cargarse y usarse ¿sabes de algun manual para cargarlos y usarlos y moverlos y todo eso?<br /></div></blockquote> Aun no he comenzado a mirar esos temas, pero en el número 25 de NeHe hace algo de eso. Aunque no sé si Blender puede exportar a ese formato. Otra opción sería mirar algún engine que supongo que hará cosas de esas de forma más sencilla.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Dom Jun 28, 2009 2:35 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-28T10:50:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2656#p2656</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2656#p2656"/>
<title type="html"><![CDATA[Error OpenGL - glutCreateWindow called without first calling]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2656#p2656"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br />Ya sé que no es una respuesta adecuada y que puede que lo sepas. Pero, para crear la pantalla y gestionar eventos, puedes utilizar SDL.<br /><br />Yo también empiezo este verano con OpenGL, pero usaré SDL para así poderme centrarme en lo que más me interesa. En los tutoriales de NeHe tampoco lo utilizan, pero suele haber un port en las descargas.<br /><br />Saludos.<br /></div></blockquote><br /><br />Si, sabia que SDL puede crear superficies con contexto GL pero como como has mencionado en los tutoriales de NeHe no lo usan, ni tampoco en ninguno de los tutoriales que he conseguido, todos los tutoriales que tengo usan la dichosa GLUT, yo tambien preferiria usar SDL ya no solo por los eventos, sino por que para dibujar las partes 2D tengo ya practica con SDL que con GLUT no la tengo, lo que no se es, una vez creada la superficie con el contexto GL, como hacer para que todo se dibuje en la superficie sin problemas y eso, si tienes algun manual que usen OpenGL junto con SDL te lo agradeceria, o algo de ayuda para al menos comenzar a usarlos juntos. Una pregunta ¿con SDL y OpenGL podria tener dos superficies (sin ser la pantalla) con contexto GL y dibujar con OpgnGL en una o en otra? no se si me explico bien, dibujar con OpenGL pero no solo en una superficie, sino en varias superficies y despues mostrarlas por pantalla, lo digo por que se me ocurrio (pensando en las peliculas estas 3D que se ven con las gafas anaglifo) en que si se podia usar OpenGL en dos superficies de SDL con camaras desde distintos puntos de vista despues se podria mezclar los bytes de las imagenes de forma adecuada en una tercera superficie y tener un videojuego en 3D que se viese con las gafas de anaglifo.<br /><br />Como veo que me he enrrollado un poco, resumo, ¿algun manual, ejemplo, o algo de informacion con lo que empezar a usar OpenGL y SDL juntos?, ¿se puede tener varias superficies con contexto OpenGL y dibujar en una o en otra con OpenGL, de forma analoga a como copiamos una superficie a una u otra superficie?, tengo entendido que modelos echos con programas como blender pueden cargarse y usarse ¿sabes de algun manual para cargarlos y usarlos y moverlos y todo eso?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Dom Jun 28, 2009 10:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-06-27T14:17:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2650#p2650</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2650#p2650"/>
<title type="html"><![CDATA[Error OpenGL - glutCreateWindow called without first calling]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2650#p2650"><![CDATA[
Ya sé que no es una respuesta adecuada y que puede que lo sepas. Pero, para crear la pantalla y gestionar eventos, puedes utilizar SDL.<br /><br />Yo también empiezo este verano con OpenGL, pero usaré SDL para así poderme centrarme en lo que más me interesa. En los tutoriales de NeHe tampoco lo utilizan, pero suele haber un port en las descargas.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Sab Jun 27, 2009 2:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-06-24T15:48:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2637#p2637</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2637#p2637"/>
<title type="html"><![CDATA[Error OpenGL - glutCreateWindow called without first calling]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=581&amp;p=2637#p2637"><![CDATA[
Hola, hoy me he puesto a comenzar a aprender un poco de OpenGL y cuando intentaba compilar un ejemplo que creaba una ventana y dibujaba un triangulo aunque compila bien al ejecutarlo me da el siguiente error:<br /><br />freeglut  ERROR:  Function &lt;glutCreateWindow&gt; called without first calling 'glutInit'.<br /><br />Este es el codigo:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;GL&gt;<br />#include &lt;stdio&gt;<br />#include &lt;stdlib&gt;<br /><br />void display&#40;void&#41;;<br /><br />int main&#40;int argc, char *argv&#91;&#93;&#41;&#123;<br />glutInitDisplayMode&#40;GLUT_SINGLE | GLUT_RGBA&#41;;<br />glutInitWindowPosition&#40;20,20&#41;;<br />glutInitWindowSize&#40;500,500&#41;;<br />glutCreateWindow&#40;argv&#91;0&#93;&#41;;<br />glutDisplayFunc&#40;display&#41;;<br />glutMainLoop&#40;&#41;;<br />return 0;<br />&#125;<br /><br />void display&#40;void&#41;&#123;<br />glClearColor&#40;0.0,0.0,0.0,0.0&#41;;<br />glClear&#40;GL_COLOR_BUFFER_BIT&#41;;<br />glMatrixMode&#40;GL_PROJECTION&#41;;<br />glLoadIdentity&#40;&#41;;<br />glOrtho&#40;-1.0,1.0,-1.0,1.0,-1.0,1.0&#41;;<br />glMatrixMode&#40;GL_MODELVIEW&#41;;<br />glBegin&#40;GL_TRIANGLES&#41;;<br />/*Dibujamos un triángulo*/<br />   glColor3f&#40;1.0,0.0,0.0&#41;;<br />   glVertex3f&#40;0.0,0.8,0.0&#41;;<br />   glColor3f&#40;0.0,1.0,0.0&#41;;<br />   glVertex3f&#40;-0.6,-0.2,0.0&#41;;<br />   glColor3f&#40;0.0,0.0,1.0&#41;;<br />   glVertex3f&#40;0.6,-0.2,0.0&#41;;<br />glEnd&#40;&#41;;<br />glFlush&#40;&#41;;<br />sleep&#40;10&#41;;<br />exit&#40;0&#41;;<br />&#125;</code></dd></dl><br /><br /><span style="font-weight: bold">Edito:</span> ya consegui solucionar el problema, solo faltaba en el ejemplo llamar a la funcion glInit al comienzo del programa:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;GL&gt;<br />#include &lt;stdio&gt;<br />#include &lt;stdlib&gt;<br /><br />void display&#40;void&#41;;<br /><br />int main&#40;int argc, char *argv&#91;&#93;&#41;&#123;<br />glutInit&#40;&amp;argc, argv&#41;;<br />glutInitDisplayMode&#40;GLUT_SINGLE | GLUT_RGBA&#41;;<br />glutInitWindowPosition&#40;20,20&#41;;<br />glutInitWindowSize&#40;500,500&#41;;<br />glutCreateWindow&#40;argv&#91;0&#93;&#41;;<br />glutDisplayFunc&#40;display&#41;;<br />glutMainLoop&#40;&#41;;<br />return 0;<br />&#125;<br /><br />void display&#40;void&#41;&#123;<br />glClearColor&#40;0.0,0.0,0.0,0.0&#41;;<br />glClear&#40;GL_COLOR_BUFFER_BIT&#41;;<br />glMatrixMode&#40;GL_PROJECTION&#41;;<br />glLoadIdentity&#40;&#41;;<br />glOrtho&#40;-1.0,1.0,-1.0,1.0,-1.0,1.0&#41;;<br />glMatrixMode&#40;GL_MODELVIEW&#41;;<br />glBegin&#40;GL_TRIANGLES&#41;;<br />/*Dibujamos un triángulo*/<br />   glColor3f&#40;1.0,0.0,0.0&#41;;<br />   glVertex3f&#40;0.0,0.8,0.0&#41;;<br />   glColor3f&#40;0.0,1.0,0.0&#41;;<br />   glVertex3f&#40;-0.6,-0.2,0.0&#41;;<br />   glColor3f&#40;0.0,0.0,1.0&#41;;<br />   glVertex3f&#40;0.6,-0.2,0.0&#41;;<br />glEnd&#40;&#41;;<br />glFlush&#40;&#41;;<br />sleep&#40;10&#41;;<br />exit&#40;0&#41;;<br />&#125;</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Mié Jun 24, 2009 3:48 pm</p><hr />
]]></content>
</entry>
</feed>