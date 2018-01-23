<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=1063" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-09-07T00:12:32+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=2&amp;t=1063</id>
<entry>
<author><name><![CDATA[Barajas]]></name></author>
<updated>2011-09-07T00:12:32+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5907#p5907</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5907#p5907"/>
<title type="html"><![CDATA[Re: Solicitud de tutorial o breve explicación]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5907#p5907"><![CDATA[
Bueno, utilizando la misma imagen...<br /><pre class="prettyprint linenums">#!/usr/bin/env python<br /># -*- coding: utf-8 -*-<br />Alto=400<br />Ancho=600<br />from coat import *<br />from pygame import *<br />#una función que carga las imagenes <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" /><br />def carga_imagen&#40;name, alfa=False, rect=False, colorkey=None&#41;:<br />    #crea una ruta a la carpeta de datos<br />    #al escribirlo de esa forma, nos aseguramos<br />    #de que pueda abrir en todos los S.O.<br />    #donde este instalado python<br />    fullname = os.path.join&#40;name&#41;<br />    #comprobamos si existe la imagen<br />    try:<br />        image = pygame.image.load&#40;fullname&#41;<br />    except pygame.error, message:<br />        print &#39;No se puede cargar la imagen: &#39;, fullname<br />        raise SystemExit, message<br />    #combierte la imagen para que pygame la pueda usar<br />    image = image.convert&#40;&#41;<br />    #En este punto asignamos el colorkey<br />    #es decir, un color de base al que se<br />    #borrara dejando solo el canal alfa &#40;transparencia&#41;<br />    if alfa:<br />        colorkey = image.get_at&#40;&#40;0, 0&#41;&#41;<br />        image.set_colorkey&#40;colorkey, RLEACCEL&#41;<br />    if not&#40;alfa&#41; and colorkey != None:<br />        image.set_colorkey&#40;colorkey, RLEACCEL&#41;<br />    #devuelve la imagen y la recta de la imagen<br />    if rect:<br />        return &#40;image, image.get_rect&#40;&#41;&#41;<br />    else:<br />        return &#40;image&#41;<br /><br />#este es  parte de unas clases que he<br /># desarrollado para manejar los sprites mejor<br />#aun esta &quot;verde&quot;, hay que añadir cosas... y mejor ducumentación<br />class AnimacionDeArchivo&#40;&#41;:<br />    def __init__&#40;self, Archivo, Tabla=None, Diccionario=None, Colorkey=None&#41;:<br />        #De lo UNICO que se encarga esta función es de regresar<br />        #las imagenes de animación y nada mas, lo de preguntar<br />        #rects le compete a la clase del sprite <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":&#41;" title="Smile" />.<br />        self.lista_frames = []<br />        #si no hay un color de trasparencia especifico, lo carga con el color<br />        #del pixel &#40;0,0&#41;<br />        if Colorkey == None:<br />            image = carga_imagen&#40;Archivo, alfa=True, rect=False, colorkey=None&#41;<br />        else:<br />            image = carga_imagen&#40;Archivo, alfa=False, rect=False, colorkey=Colorkey&#41;<br />        if Diccionario != None and Tabla != None:<br />            print &quot;No se pueden usar los parametros&#39;Tabla&#39; y &#39;Diccionario&#39; al mismo tiempo&quot;<br />            return False<br />        #partimos la imagen en filas y columnas<br />        if Tabla != None:<br />            columnas, filas = Tabla<br />            tile_w = image.get_width &#40;&#41; / columnas<br />            tile_h = image.get_height &#40;&#41; / filas<br />            for f in xrange &#40;filas&#41;:<br />                for c in xrange &#40;columnas&#41;:<br />                    rect = c * tile_w , f * tile_h , tile_w, tile_h<br />                    self.lista_frames.append&#40;image.subsurface&#40;rect&#41;.copy &#40;&#41;&#41;<br />        #o  en las cordenadas que marque un diccionario...<br />        if Diccionario != None:<br />            for llave in Diccionario:<br />                rect = Diccionario[Llave]<br />                ima = image.subsurface&#40;rect&#41;.copy &#40;&#41;<br />                self.lista_frames.append&#40;ima&#41;<br />        self._frame = 0<br />        self.inicio = pygame.time.get_ticks&#40;&#41;<br />        self._delay = 1000/15<br />        self.ultima_act = 0 #ultima<br />    #función para redimencionar todas las imagenes del sprite<br />    def redimencion&#40;self, dimencion&#41;:<br />        for i in range&#40;len&#40;self.lista_frames&#41;&#41;:<br />            frame_i = self.lista_frames[i]<br />            frame = pygame.transform.scale&#40;frame_i, dimencion&#41;<br />            self.lista_frames[i] = frame<br />    #función para hacer todas las imagenes con una trasparencia<br />    def set_alpha&#40;self, alpha&#41;:<br />        for i in range&#40;len&#40;self.lista_frames&#41;&#41;:<br />            frame_i = self.lista_frames[i]<br />            frame_i.set_alpha&#40;alpha&#41;<br />            self.lista_frames[i] = frame_i<br />    #la funcion que hace la magia <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /> <br />    def Frame_es&#40;self, Lista_anima = [0], Reset = False, Frame_return = False&#41;:<br />        if Reset:<br />            self._frame = 0<br />        if pygame.time.get_ticks&#40;&#41; - self.ultima_act &gt; self._delay:<br />            self._frame += 1<br />            if self._frame &gt;= len&#40;Lista_anima&#41;:<br />                self._frame = 0<br />            self.ultima_act = pygame.time.get_ticks&#40;&#41;<br />        if Frame_return:<br />            return self.lista_frames[ Lista_anima[self._frame] ], self._frame<br />        else:<br />            return self.lista_frames[ Lista_anima[self._frame] ]<br /><br />def Main&#40;&#41;:<br />    pygame.init&#40;&#41; #incializamos pygame<br />    #creamos abajo, una pantalla de dimenciones Ancho Alto<br />    pantalla=pygame.display.set_mode&#40;&#40;Ancho,Alto&#41;&#41;<br />    #le ponemos un titulo<br />    pygame.display.set_caption&#40;&quot;Animando un sprite&quot;&#41;<br />    #Inicializo la clase anima<br />    anima = AnimacionDeArchivo&#40;Archivo=&quot;havoc_basic_spritesheet_by_mrshackra-d3bezye.png&quot;,<br />                              Tabla = &#40;11,1&#41;&#41;<br />    anima.redimencion&#40;&#40;50,100&#41;&#41; #la hago mas grande<br />    continuar = True<br />    while continuar:<br />        for evento in pygame.event.get&#40;&#41;:<br />            if evento.type==pygame.QUIT:<br />                pygame.quit&#40;&#41;<br />                continuar=False<br />                sys.exit&#40;&#41;#creo que esto es redundante<br />        pantalla.fill&#40;&#40;250,250,250&#41;&#41;#rellenamos la pantalla de blanco<br />        #coloco la imagen en la mitad de pantalla<br />        pantalla.blit&#40;anima.Frame_es&#40;[10,9,8,7,6,5,4,3]&#41;, &#40;Ancho/2,Alto/2&#41;&#41;<br />        pygame.display.flip&#40;&#41;<br /><br />Main&#40;&#41;</pre><br /><br />Si tienes alguna duda, solo pregunta <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2345">Barajas</a> — Mié Sep 07, 2011 12:12 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-05-25T17:47:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5574#p5574</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5574#p5574"/>
<title type="html"><![CDATA[Re: Solicitud de tutorial o breve explicación]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5574#p5574"><![CDATA[
de nada!<br /><br />en el repositorio que hice varias semanas ya hay mas ejemplos, tambien Hugo ayudo confeccionando algunos ejemplos mas <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br />pondria el enlace al repositorio pero hoy parece que el servidor de Bitbucket.org esta caido :S<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Mié May 25, 2011 5:47 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gabofer82]]></name></author>
<updated>2011-05-23T00:34:21+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5567#p5567</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5567#p5567"/>
<title type="html"><![CDATA[Re: Solicitud de tutorial o breve explicación]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5567#p5567"><![CDATA[
Hola shackra!!<br /><br />Muchas gracias por tu tutorial!!<br /><br />Como estuve alejado de python y pilas por cuestiones laborales (lease mucho php, javascript y el resto de la pandilla) no te contesté antes.<br /><br />Voy a aprovechar tu material, despues te cuento.<br /><br />Saludos!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2390">gabofer82</a> — Lun May 23, 2011 12:34 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-03-11T23:03:30+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5203#p5203</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5203#p5203"/>
<title type="html"><![CDATA[Re: Solicitud de tutorial o breve explicación]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5203#p5203"><![CDATA[
bueno, como te prometí, te traje un código donde muestro como hacer una animación de sprites usando un spritesheet. Debo subir este ejemplo a Bitbucket.org, aun así, no puedo, así que mejor dejo el código aquí. <span style="text-decoration: underline">tomad en cuenta que este código esta hecho con PySFML</span>, aun así, podrías estudiarlo para adaptarlo a Pygame o en dado caso, mejor usas PySFML ~_~:<br /><br />spritesheet: <img src="http://fc07.deviantart.net/fs71/f/2011/070/2/6/havoc_basic_spritesheet_by_mrshackra-d3bezye.png" alt="Imagen" /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#! /usr/bin/env python<br />#-*- coding: utf-8 -*-<br /><br />from PySFML import sf<br /><br />class MySprite(sf.Sprite):<br />    &quot;&quot;&quot; extendemos la clase sf.Sprite para dotarla de nuevos atributos y funciones<br />    que necesitamos para trabajar mas comodamente para con nuestros personajes<br />    del juego. &quot;&quot;&quot;<br />    <br />    # quizás este sea el ejemplo con animación mas complejo que desarrollo<br />    # hasta el momento. De seguro existen mejores formas de animar un Sprite<br />    # con tantos frames y tan complejo, así que de seguro existirán maneras<br />    # mejores y mas elegantes de manejar animaciones que la que expondré acá<br />    # Usaremos a Havoc, del mitico juego Metal Warrior para Snes.<br />    <br />    def __init__(self, rejilla):<br />        # usamos la clase sf.Image para cargar una imagen dada por **rejilla**<br />        self.imagen = sf.Image()<br />        self.imagen.LoadFromFile(rejilla)<br />        # Hacemos el fondo transparente<br />        colorfondo  = self.imagen.GetPixel(0, 0)<br />        self.imagen.CreateMaskFromColor(colorfondo)<br />        # asignamos la imagen a nuestra clase MySprite<br />        sf.Sprite.__init__(self, self.imagen)<br />        # colocamos el Sprite a la mitad de la pantalla<br />        self.SetX(400)<br />        self.SetY(150)<br />        # creamos un par de atributos para recordar el orden de los frames de <br />        # animacion.<br />        # aunque tambien se podria diseñar un sistema de &quot;frame unico&quot; que seria<br />        # una identificacion para dado frame dentro del &quot;Sprite Sheet&quot;.<br />        # Se implentara esa tecnica en el proximo ejemplo.<br />        # (mejor ignoren esos comentarios, ni siquiera sé que estoy haciendo).<br />        self.frame_pos   = 0<br />        # para este ejemplo el Sprite no se movera a ningun lado<br />        # se quedara quieto en el centro de la pantalla.<br />        # cambiamos el nombre de un atributo, en lugar de self.cambia<br />        # usaremos self.tiempo que es mas adecuado.<br />        self.tiempo      = 0.0<br />        # con este atributo podemos asignar un numero a cierta coordenadas para<br />        # recortar la imagen del Sprite del Sprite Sheet<br />        self.coord_frm   = {}<br /><br />    def animar(self, ventana, orientacion, frames):<br />        &quot;&quot;&quot; anima el Sprite, no lo mueve (por el momento). &quot;&quot;&quot;<br />        self.FlipX(orientacion)<br />        <br />        # revisamos si la cantidad de tiempo transcurrido es mayor o igual a 30<br />        # cuadros de animacion o 1/30. si es asi, pasamos al siguiente frame,<br />        # obtenemos de vuelta las coordenas del rectangulo correspondiente a ese<br />        # cuadro de la animacion para que luego sea dibujado en pantalla... <br />        # asi sucesivamente.<br />        # Basicamente asi es una animacion de sprites, claro esta, existen muchas<br />        # variantes dependiendo de las necesidades del desarrollador.<br />        #<br />        # Mi necesidad en este codigo era la de desarrollar una animación parecida<br />        # a la del juego original, Metal Warrior para SNES.<br />        if self.tiempo &gt;= 1/30:<br />            self.frame_pos = self.frame_pos + 1<br />            try:<br />                coord = self.getframe(frames&#91;self.frame_pos&#93;)<br />                # sf.IntRect no acepta tuplas, por eso este raro hack...<br />                self.SetSubRect(sf.IntRect(coord&#91;0&#93;, coord&#91;1&#93;,\<br />                                           coord&#91;2&#93;, coord&#91;3&#93;))<br />            except IndexError:<br />                if self.tiempo &gt;= 1/30:<br />                    self.frame_pos = 0<br />        else:<br />            self.tiempo = self.tiempo + ventana.GetFrameTime()<br /><br />    def addframe(self, numero, left, top, right, bottom):<br />        &quot;&quot;&quot; añade un frame para la animacion.<br />        <br />        las coordenadas left, top, right, bottom, pertenecen al cuadro a recor<br />        tar del sprite sheet de nuestro sprite, asignarle un numero a esta coor<br />        denadas nos permite identificar y usar dicho frame para la animacion de<br />        nuestro Sprite. &quot;&quot;&quot;<br />        self.coord_frm&#91;numero&#93; = left, top, right, bottom<br />    <br />    def setframe(self, numero):<br />        &quot;&quot;&quot; inicia el primer frame de la animacion que vamos a hacer. &quot;&quot;&quot;<br />        self.frame = numero<br />        coord = self.getframe(self.frame)<br />        # sf.IntRect no acepta tuplas, por eso este raro hack...<br />        self.SetSubRect(sf.IntRect(coord&#91;0&#93;, coord&#91;1&#93;,\<br />                                   coord&#91;2&#93;, coord&#91;3&#93;))<br />           <br />    def getframe(self, numero):<br />        &quot;&quot;&quot; retorna las coordenadas del frame en el sprite sheet. &quot;&quot;&quot;<br />        try:<br />            return self.coord_frm&#91;numero&#93;<br />        except KeyError:<br />            print &quot;no existe coordenas para el frame {0}&quot;.format(numero)<br />            return 0, 0, 1, 1<br />        <br />if __name__ == &quot;__main__&quot;:<br />    # la sentencia de arriba previene que este codigo se ejecute cuando es<br />    # importado desde otro fichero de python por import<br />    <br />    # Como que me da mucha pereza usare los objetos de color de sf.Color,<br />    # Vamos a usar variables para esos objetos de color.<br />    Black   = sf.Color.Black<br /><br />    # Creamos la ventana del juego<br />    ventana = sf.RenderWindow(sf.VideoMode(800, 300), &quot;Prueba 7 de PySFML por Shackra&quot;)<br />    ventana.SetFramerateLimit(30)<br /><br />    # creamos una instancia de sf.Event para el manejo de los eventos del juego<br />    evento = sf.Event()<br /><br />    # obtenemos el input de los eventos de la ventana creada, mira sf.Input para mas informacion<br />    # parece ser que no es necesario declarar este objeto dentro del loop para actualizar su estado...<br />    entrada = ventana.GetInput()<br /><br />    # cargamos el SpriteSheet<br />    havocr = MySprite(&quot;havocr2.png&quot;)<br /><br />    # TODO: esto podria ir en el __init__ y no acá !!<br />    # cargamos los frames de havoc para la animacion de caminar<br />    #               frame, left, top, right, bottom<br />    havocr.addframe(1,      339,   0,   373,     45)<br />    havocr.addframe(2,      306,   0,   338,     45)<br />    havocr.addframe(3,      272,   0,   304,     45)<br />    havocr.addframe(4,      238,   0,   269,     45)<br />    havocr.addframe(5,      204,   0,   236,     45)<br />    havocr.addframe(6,      170,   0,   202,     45)<br />    havocr.addframe(7,      136,   0,   168,     45)<br />    havocr.addframe(8,      102,   0,   136,     45)<br /><br />    # seteamos el primer cuadro de la animacion para el Sprite<br />    havocr.setframe(1)<br /><br />    # variables para terminar el bucle del juego<br />    salir = False<br />    # bucle principal del juego<br />    while not salir:<br />        while ventana.GetEvent(evento):<br />            if evento.Type == sf.Event.Closed:<br />                salir = True<br />            <br />            if evento.Type == sf.Event.KeyPressed:<br />                if evento.Key.Code == sf.Key.Escape:<br />                    salir = True<br />                if evento.Key.Code == sf.Key.Right:<br />                    # movemos a havocr a la derecha<br />                    havocr.animar(ventana, False, &#91;1,2,3,4,5,6,7,8&#93;)<br />                if evento.Key.Code == sf.Key.Left:<br />                    # movemos a havocr a la izquierda<br />                    havocr.animar(ventana, True, &#91;1,2,3,4,5,6,7,8&#93;)<br />        <br />            # Limpiamos la ventana del juego<br />            ventana.Clear(Black)<br />            # dibujamos a Havocr<br />            ventana.Draw(havocr)<br />            # Cambiamos los buffers de video<br />            ventana.Display()<br />            <br />    # no olvides limpiar y cerrar con llave el local cuando termines de jugar :)<br />    ventana.Close()</code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Vie Mar 11, 2011 11:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2011-03-05T00:50:41+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5169#p5169</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5169#p5169"/>
<title type="html"><![CDATA[Re: Solicitud de tutorial o breve explicación]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5169#p5169"><![CDATA[
actualmente yo trabajo en un ejemplo de animación, pero con PySFML, aun no esta terminado y le falta mucho para estar listo... lo único que puedes hacer es esperar a que yo termine mi ejemplo <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_neutral.gif" alt=":-|" title="Neutral" />.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Sab Mar 05, 2011 12:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gabofer82]]></name></author>
<updated>2011-02-28T21:49:49+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5149#p5149</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5149#p5149"/>
<title type="html"><![CDATA[Solicitud de tutorial o breve explicación]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1063&amp;p=5149#p5149"><![CDATA[
Hola:<br /><br />Antes que nada quiero agradecer a los organizadores de este sitio por tan buen aporte que hacen a los colegas y a quienes empezamos con esto de la programación en Python. Felicitaciones!!!<br /><br />Ahora si dire mi solicitud:<br /><br />Me gustaría que pudieran hacer un tutorial o alguna explicación sobre como se realizan animaciones con spritesheets utilizando pygame, si ese tutorial existe por favor posteen la url, porque solo he encontrado sobre el tema en tutoriales sobre XNA.<br /><br />Así que muchas gracias a todos quienes me puedan ayudar o accedan a este pedido por cristiana caridad.<br /><br />Saludos a todos!!! <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" />  <img src="http://losersjuegos.com.ar/foro/images/smilies/icon_biggrin.gif" alt=":D" title="Very Happy" /><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2390">gabofer82</a> — Lun Feb 28, 2011 9:49 pm</p><hr />
]]></content>
</entry>
</feed>