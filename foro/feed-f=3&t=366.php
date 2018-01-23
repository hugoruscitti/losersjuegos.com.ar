<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=366" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2008-08-26T11:20:01+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=3&amp;t=366</id>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2008-08-26T11:20:01+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=366&amp;p=1611#p1611</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=366&amp;p=1611#p1611"/>
<title type="html"><![CDATA[Bug en Mini RPG]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=366&amp;p=1611#p1611"><![CDATA[
Puede que se hayan dado cuenta de un error en el ejemplo de Mini<br />RPG y que no esté corregido porque no es de mucha importancia <br />(bueno, supongo que es un error porque provoca un<br />comportamiento bastante extraño).<br />El error se encuentra en el método <span style="font-style: italic">puede_pisar_en</span> de la<br />clase <span style="font-style: italic">Escenario</span>:<dl class="codebox"><dt>Code: </dt><dd><code>def puede_pisar_en&#40;self, x, y&#41;:<br />        &quot;Informa si se puede pisar sobre un bloque del escenario.&quot;<br /><br />        fila = &#40;y&#41; / 40<br />        columna = x / 50<br /><br />        try:<br />            celda = int&#40;self.grilla&#91;fila&#93;&#91;columna&#93;&#41;<br />        except:<br />            # si no puede obtener la celda prohibe pisar ahí<br />            return False<br /><br />        if celda in &#91;0, 1, 2&#93;:<br />            return True<br /><br />        return False</code></dd></dl> El error consiste en que cuando el<br />personaje intenta salir por abajo hay un error <span style="font-style: italic">index out of<br />range</span> y por lo tanto se cumple la excepción <span style="font-style: italic">return false</span>.<br />Sin embargo, al salir por arriba no se produce el <span style="font-style: italic">index out of<br />range</span> ya que list[-1] devuelve el último valor. Por la izquierda<br />y por la derecha tampoco se puede salir porque el valor devuelto<br />es <span style="font-style: italic">'\n'</span>.<br /><br />Hugo, aprovecho para felicitarte por este estupendo ejemplo<br />porque es de gran ayuda.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Mar Ago 26, 2008 11:20 am</p><hr />
]]></content>
</entry>
</feed>