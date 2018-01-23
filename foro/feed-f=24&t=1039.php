<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1039" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-02T20:42:19+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1039</id>
<entry>
<author><name><![CDATA[Alzacon]]></name></author>
<updated>2011-02-02T20:42:19+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5017#p5017</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5017#p5017"/>
<title type="html"><![CDATA[Re: pilas.inciar() problemas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5017#p5017"><![CDATA[
<blockquote><div><cite>hugoruscitti escribió:</cite><br />No es muy seguro llamar dos veces a iniciar(), en versiones viejas de pilas había un aviso que te<br />impedía llamar a la función dos veces, pero era un poco incómodo. A veces, si cerrás la ventana de<br />la aplicación, ejecutando nuevamente &quot;iniciar&quot; se vuelve a abrir.<br /><br />¿podrías listarnos los pasos que te lanzan errores?, tal vez viendo el paso a paso se me ocurra<br />una forma de mejorarlo para que no produzca errores.<br /></div></blockquote>Ya, pero lo encontre de esa manera tan tonta sin querer iniciar dos veces, porque en la primera al introducir usar_motor='pygame' no se abrio la ventana.<br /><br />Te pongo las capturas con indicaciones mejor:<br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_arrow.gif" alt=":arrow:" title="Arrow" /> <a href="http://s4.postimage.org/9kl7rjhp7/image.jpg" class="postlink">2 pilas.inicar(usar_motor='pygame') seguidos</a><br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_arrow.gif" alt=":arrow:" title="Arrow" /> <a href="http://s4.postimage.org/9klb2m6or/image.jpg" class="postlink">pilas.iniciar(usar_motor='pygame) y 2 pilas.iniciar() seguidos</a><br /><br /> <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_arrow.gif" alt=":arrow:" title="Arrow" /> <a href="http://s4.postimage.org/9kl4ggspn/image.jpg" class="postlink">2 pilas.iniciar() seguidos</a><br /><br />Yo también intentaré encontrar alguna forma de solucionarlo<br /><br /><blockquote><div><cite>hugoruscitti escribió:</cite><br />Porque todavía no lo arreglé... hace poco cambié la forma en que se importában los módulos<br />y me quedaron varias cosas duplicadas...<br /></div></blockquote>No lo sabía. Sólo lo he comentado porque sigo comentandome y recolocandome cosas del codigo para aprender y lo vi al abrir la nueva versión.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2379">Alzacon</a> — Mié Feb 02, 2011 8:42 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-02-02T19:31:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5016#p5016</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5016#p5016"/>
<title type="html"><![CDATA[Re: pilas.inciar() problemas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5016#p5016"><![CDATA[
<blockquote><div><cite>Alzacon escribió:</cite><br />No sé si en la nueva versión ocurre o no, pero como mi gráfica le queda poco para morir, use pilas.inciar(usar_motor='pygame') como no se creo la ventana, use el truquillo de reintroducir un codigo escrito en otra entrada de la IDLE y no me di cuenta de borrar lo de usar_motor y al lanzarlo se me reinicio la IDLE (o Python Shell). Y luego probando si fallaba de más formas, si se usa dos veces pilas.iniciar() lanza excepciones de esas.<br /></div></blockquote><br /><br />No es muy seguro llamar dos veces a iniciar(), en versiones viejas de pilas había un aviso que te<br />impedía llamar a la función dos veces, pero era un poco incómodo. A veces, si cerrás la ventana de<br />la aplicación, ejecutando nuevamente &quot;iniciar&quot; se vuelve a abrir.<br /><br />¿podrías listarnos los pasos que te lanzan errores?, tal vez viendo el paso a paso se me ocurra<br />una forma de mejorarlo para que no produzca errores.<br /><br /><blockquote><div><cite>Alzacon escribió:</cite><br />Ya aprovecho y pregunto otra cosa: ¿por qué en el nuevo archivo __init__.py de pilas importan muchos módulos 2 veces?<br /></div></blockquote><br /><br />Porque todavía no lo arreglé... hace poco cambié la forma en que se importában los módulos<br />y me quedaron varias cosas duplicadas...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mié Feb 02, 2011 7:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Alzacon]]></name></author>
<updated>2011-02-02T18:38:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5014#p5014</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5014#p5014"/>
<title type="html"><![CDATA[pilas.inciar() problemas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1039&amp;p=5014#p5014"><![CDATA[
No sé si en la nueva versión ocurre o no, pero como mi gráfica le queda poco para morir, use pilas.inciar(usar_motor='pygame') como no se creo la ventana, use el truquillo de reintroducir un codigo escrito en otra entrada de la IDLE y no me di cuenta de borrar lo de usar_motor y al lanzarlo se me reinicio la IDLE (o Python Shell). Y luego probando si fallaba de más formas, si se usa dos veces pilas.iniciar() lanza excepciones de esas.<br /><br />Ya aprovecho y pregunto otra cosa: ¿por qué en el nuevo archivo __init__.py de pilas importan muchos módulos 2 veces?<br /><br />Saludos  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_wink.gif" alt=":wink:" title="Wink" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2379">Alzacon</a> — Mié Feb 02, 2011 6:38 pm</p><hr />
]]></content>
</entry>
</feed>