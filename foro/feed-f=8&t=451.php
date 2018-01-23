<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=451" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-01-18T15:56:00+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=451</id>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2009-01-18T15:56:00+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1921#p1921</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1921#p1921"/>
<title type="html"><![CDATA[PyOpenGL en Ubuntu?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1921#p1921"><![CDATA[
Me sale &quot;Fallo de segmentacion&quot; y nada mas, no se intenta abrir ni una ventana ni nada, mediante synaptic, tengo instalado Python, Pygame, PyopenGl, libglut3, libglut3-dev... pero aun asi me falla cualquier codigo en pyopengl.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Dom Ene 18, 2009 3:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2009-01-16T19:17:04+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1917#p1917</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1917#p1917"/>
<title type="html"><![CDATA[PyOpenGL en Ubuntu?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1917#p1917"><![CDATA[
¿podrías indicarnos el error que aparece?.<br /><br />Por si sola, la biblioteca pyopengl, no te permite<br />crear aplicaciones completas. Necesitas algo como<br />pygame o glut para gestionar los eventos de ventana<br />y muchas otras cosas.<br /><br />Realiza la siguiente prueba, ejecuta este script con<br />python (si tienes glut instalado debería funcionar):<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import sys<br />import time<br /><br />from OpenGL.GL import *<br />import OpenGL.GLUT as glut<br />import OpenGL.GLU as glu<br /><br />def display&#40;&#41;:<br />    glClearColor&#40;1, 1, 1, 1&#41;<br />    glClear&#40;GL_COLOR_BUFFER_BIT&#41;<br /><br />    glMatrixMode&#40;GL_PROJECTION&#41;<br />    glLoadIdentity&#40;&#41;<br /><br />    glu.gluPerspective&#40;40, 1.0, 1.0, 100.0&#41;<br />    glMatrixMode&#40;GL_MODELVIEW&#41;<br /><br />    glPushMatrix&#40;&#41;<br />    glTranslatef&#40;1.9, 0.1, -10.0&#41;<br />    glColor&#40;0, 0.5, 1&#41;<br />    glut.glutSolidCube&#40;2&#41;<br />    glPopMatrix&#40;&#41;<br /><br />    glFlush&#40;&#41;<br />    glut.glutSwapBuffers&#40;&#41;<br /><br /><br />def update&#40;&#41;:<br />    glRotated&#40;1, 0, 0, 1&#41;<br />    glut.glutPostRedisplay&#40;&#41;<br />    time.sleep&#40;0.01&#41;<br /><br /><br />if __name__ == '__main__':<br />    glut.glutInit&#40;&#41;<br />    glut.glutInitDisplayMode&#40;glut.GLUT_DOUBLE | glut.GLUT_RGBA&#41;<br />    glut.glutInitWindowPosition&#40;100, 100&#41;<br />    glut.glutCreateWindow&#40;sys.argv&#91;0&#93;&#41;<br /><br />    glut.glutDisplayFunc&#40;display&#41;<br />    glut.glutIdleFunc&#40;update&#41;<br />    glut.glutMainLoop&#40;&#41;</code></dd></dl><br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Vie Ene 16, 2009 7:17 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Nato]]></name></author>
<updated>2009-01-16T18:49:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1916#p1916</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1916#p1916"/>
<title type="html"><![CDATA[PyOpenGL en Ubuntu?]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=451&amp;p=1916#p1916"><![CDATA[
He estado bastante tiempo probando PyOpenGL en ubuntu pero no he conseguido arrancarlo, alguien me expllica como se hace? tengo instalado Python (que viene por defecto en Ubuntu) y PyOpenGL que instale desde Synaptic, pero al ejecutar cualquier codigo me da error.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1795">Nato</a> — Vie Ene 16, 2009 6:49 pm</p><hr />
]]></content>
</entry>
</feed>