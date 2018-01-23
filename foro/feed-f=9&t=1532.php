<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1532" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2012-08-10T00:56:59+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=9&amp;t=1532</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2012-08-10T00:56:59+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1532&amp;p=7006#p7006</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1532&amp;p=7006#p7006"/>
<title type="html"><![CDATA[Re: Establecer tiempo entre imagenes SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1532&amp;p=7006#p7006"><![CDATA[
<blockquote><div><cite>Max03 escribió:</cite><br />un sprite está compuesto por dos imágenes y necesito establecer cierto tiempo entre ambas para que cuando pulse la tecla de movimiento, la imágen del personaje quieto y la de cuando mueve la pierna se vean con cierto tiempo entre ambas, ya que sin tiempo entre ellas, parpadean ambas en la pantalla sin lógica.<br /></div></blockquote><br />No entiendo muy bien lo que quieres decir, ¿Podrías ser un poco mas claro? <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Bueno, si te refieres a la animación, esta clase te puede ser útil:<br /><br /><pre class="prettyprint">//Aquí la clase<br />class Aniframe{<br />    int frame;<br />    int inicio;<br />    float delay;<br />    int ultima_act;<br />    int * lista_anima;<br />    int largo;<br />    public:<br />    Aniframe&#40;int * l&#41;{<br />        frame = 0;<br />        inicio = SDL_GetTicks&#40;&#41;;<br />        delay = 1000/15;<br />        ultima_act = 0; //ultima<br />        lista_anima = l;<br />        /*<br />        int *IntPtr = &amp;lista_anima[0];<br />        while&#40; *IntPtr &gt;= 0 &#41;{<br />             IntPtr++;<br />             largo++;<br />             };*/<br />        largo = 0;<br />        while&#40;lista_anima[largo]&gt;=0&#41;{<br />            largo++;<br />            };<br />        };<br />    ~Aniframe&#40;&#41;{};<br />    int Frame_es&#40;bool Reset = 0&#41;{<br />        if &#40;Reset&#41;{<br />            this-&gt;frame = 0;<br />            };<br />        if &#40;&#40;SDL_GetTicks&#40;&#41; - this-&gt;ultima_act&#41; &gt; this-&gt;delay&#41;{<br />            this-&gt;frame ++;<br />            if &#40;this-&gt;frame &gt;= this-&gt;largo&#41;{<br />                this-&gt;frame = 0;<br />                }<br />            this-&gt;ultima_act = SDL_GetTicks&#40;&#41;;<br />            };<br />        return lista_anima[this-&gt;frame];<br />        };<br />    };</pre><br /><br />Por ejemplo, imagina que tienes una lista de las imágenes que utilizas, y estas tienen una animación entre ellas, asi que un  ejemplo de su uso seria:<br /><br /><pre class="prettyprint">//tengo un array de Surfaces, o rectas... bueno...<br />int animacion[] = {1,2,1,2,1,2,-1}; //creo un array del numero de las imágenes que utilizare<br />//creo el objeto <br />Aniframe anima = Aniframe&#40;animacion&#41;;<br /><br />//estamos en el bucle del juego...<br />    mi_imagen_actual = mi_lista_de_imagenes[  anima.Frame_es&#40;&#41;  ]</pre><br /><br />pero no creo que esto sea lo que buscas...  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_rolleyes.gif" alt=":roll:" title="Rolling Eyes" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Vie Ago 10, 2012 12:56 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Max03]]></name></author>
<updated>2012-08-09T13:31:54+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1532&amp;p=7002#p7002</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1532&amp;p=7002#p7002"/>
<title type="html"><![CDATA[Establecer tiempo entre imagenes SDL]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1532&amp;p=7002#p7002"><![CDATA[
Hola, tengo un juego en C++ y SDL en el que un sprite está compuesto por dos imágenes y necesito establecer cierto tiempo entre ambas para que cuando pulse la tecla de movimiento, la imágen del personaje quieto y la de cuando mueve la pierna se vean con cierto tiempo entre ambas, ya que sin tiempo entre ellas, parpadean ambas en la pantalla sin lógica. El echo es que creo haber visto que se puede usar SDL_GetTicks, pero no se si este detiene todas las operaciones del juego o no.<br />Alguien sabe como puedo hacer que este sprite con dos imágenes se vea con tiempo entre ambas? También me interesaría saber si hay alguna otra forma posible que valga la pena.<br />Sería de agradecer algun ejemplo usando SDL_GetTicks, para establecer el tiempo entre el sprite formado por dos imágenes que empiezan a moverse al pulsar una tecla. <br />Gracias y Saludos.  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2640">Max03</a> — Jue Ago 09, 2012 1:31 pm</p><hr />
]]></content>
</entry>
</feed>