<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1101" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-04-12T23:24:12+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=24&amp;t=1101</id>
<entry>
<author><name><![CDATA[hugoruscitti]]></name></author>
<updated>2011-04-12T23:24:12+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5407#p5407</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5407#p5407"/>
<title type="html"><![CDATA[Re: Ayuda con Piezas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5407#p5407"><![CDATA[
Buenas Carla, creo que podrías usar el objeto botón con distintas imágenes, y asignarles<br />alguna función de acuerdo a si están bien o mal seleccionadas.<br /><br />También creo que se podría usar el objeto inventario que armó Pablo Garrido (pchack), podríamos<br />preguntarle a el si lo ve aplicable ahí, yo creo que si...<br /><br />Te paso dos enlaces a código que tienen algo como lo que buscas:<br /><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/src/609999ad3245/ejemplos/boton.py">https://bitbucket.org/hugoruscitti/pila ... s/boton.py</a><!-- m --><br /><!-- m --><a class="postlink" href="https://bitbucket.org/hugoruscitti/pilas/src/609999ad3245/experimental/gui/test_inventario.py">https://bitbucket.org/hugoruscitti/pila ... entario.py</a><!-- m --><br /><br />¿Tienes una copia del repositorio de pilas?, así es mas<br />fácil de probar...<br /><br />Ah, y contanos un poco mas de esa idea, en otro mensaje del foro si puede<br />ser, así trato de escribir un ejemplo sencillo para que te puedas dar una<br />idea de como usar el actor Boton.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3">hugoruscitti</a> — Mar Abr 12, 2011 11:24 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-04-12T20:57:06+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5406#p5406</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5406#p5406"/>
<title type="html"><![CDATA[Re: Ayuda con Piezas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5406#p5406"><![CDATA[
<span style="font-weight: bold">hooola hugo!!!!!!</span><br /><br />espero que estés muy bien!!<br /><br />tenia dias sin escribir!<br />en esta oportunidad te escribo a que quisiera tu ayuda en lo siguiente:<br /><br />necesito hacer un juego que muestre una imagen incompleta (ejemplo: una casa sin techo) y en un panel se muestren las posibles opciones para completar la figura (un techo, una puerta, una ventana, un perro, en fin). peeero no sé cuales funciones podría utilizar con pilas. Será posible que me puedas orientar en este desarrollo??<br /><br />agradecería muchísimo tu ayuda!!!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Mar Abr 12, 2011 8:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[pchack]]></name></author>
<updated>2011-03-29T00:52:44+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5348#p5348</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5348#p5348"/>
<title type="html"><![CDATA[Re: Ayuda con Piezas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5348#p5348"><![CDATA[
Saludos!,<br />Cuando ejecutas el siguiente código puedes ver el ejemplo de las Piezas:<br /><br /><pre class="prettyprint">import pilas<br />pilas.iniciar&#40;&#41;<br /><br />juego_piezas = pilas.ejemplos.Piezas&#40;&#41;<br /><br />pilas.ejecutar&#40;&#41;</pre><br /><br />Lo que hace este código es instanciar la clase Piezas,<br />esta clase hereda de &quot;pilas.escenas.Normal&quot; ya que esto permite que cuando creemos una instancia podamos ver<br />el ejemplo piezas en nuestra ventana, ahora para poder ver el codigo de la clase &quot;Piezas&quot;  solo busca en<br />&quot;carpeta_que_contiene_pilas/pilas/ejemplos/Piezas.py&quot; y si no lo encuentras aquí te lo dejo:<br /><br /><pre class="prettyprint"># -*- encoding: utf-8 -*-<br /># pilas engine - a video game framework.<br />#<br /># copyright 2010 - hugo ruscitti<br /># license: lgplv3 &#40;see <!-- m --><a class="postlink" href="http://www.gnu.org/licenses/lgpl.html&amp;#41;">http://www.gnu.org/licenses/lgpl.html&amp;#41;</a><!-- m --><br />#<br /># website - <!-- m --><a class="postlink" href="http://www.pilas-engine.com.ar">http://www.pilas-engine.com.ar</a><!-- m --><br /><br />import pilas<br />import random<br /><br /><br />class Piezas&#40;pilas.escenas.Normal&#41;:<br />    &quot;&quot;&quot;Representa la escena de rompecabezas.<br /><br />    La escena comienza con una imagen que se descompone en muchos<br />    actores Pieza.<br />    &quot;&quot;&quot;<br /><br />    def __init__&#40;self, ruta_a_la_imagen=&quot;ejemplos/data/piezas.png&quot;, filas=4, columnas=4&#41;:<br />        pilas.actores.utils.eliminar_a_todos&#40;&#41;<br />        pilas.escenas.Normal.__init__&#40;self, pilas.colores.grisoscuro&#41;<br />        grilla = pilas.imagenes.cargar_grilla&#40;ruta_a_la_imagen, columnas, filas&#41;<br />        self.crear_piezas&#40;grilla, filas, columnas&#41;<br />        self.pieza_en_movimiento = None<br /><br />        pilas.eventos.click_de_mouse.conectar&#40;self.al_hacer_click&#41;<br />        pilas.eventos.termina_click.connect&#40;self.al_soltar_el_click&#41;<br />        pilas.eventos.mueve_mouse.connect&#40;self.al_mover_el_mouse&#41;<br /><br />        self.sonido_tick = pilas.sonidos.cargar&#40;&quot;tick.wav&quot;&#41;<br /><br />    def crear_piezas&#40;self, grilla, filas, columnas&#41;:<br />        &quot;Genera todas las piezas en base al tamaño del constructor.&quot;<br />        self.piezas = []<br />        self.grupos = {}<br /><br />        for x in range&#40;filas * columnas&#41;:<br />            self.grupos[x] = set&#40;[x]&#41;<br />            pieza = Pieza&#40;self, grilla, x, filas, columnas&#41;<br />            self.piezas.append&#40;pieza&#41;<br />            pieza.x = random.randint&#40;-200, 200&#41;<br />            pieza.y = random.randint&#40;-200, 200&#41;<br /><br /><br />    def al_hacer_click&#40;self, evento&#41;:<br />        &quot;Atiente cualquier click que realice el usuario en la pantalla.&quot;<br />        x, y = evento.x, evento.y<br />        pieza_debajo_de_mouse = pilas.actores.utils.obtener_actor_en&#40;x, y&#41;<br /><br />        if pieza_debajo_de_mouse and isinstance&#40;pieza_debajo_de_mouse, Pieza&#41;:<br />            self.pieza_en_movimiento = pieza_debajo_de_mouse<br />            self.pieza_en_movimiento.mostrar_arriba_todas_las_piezas&#40;&#41;<br /><br />    def al_soltar_el_click&#40;self, evento&#41;:<br />        if self.pieza_en_movimiento:<br />            self.pieza_en_movimiento.soltar_todas_las_piezas_del_grupo&#40;&#41;<br />            self.pieza_en_movimiento.mostrar_abajo_todas_las_piezas&#40;&#41;<br />            self.pieza_en_movimiento = None<br /><br />    def al_mover_el_mouse&#40;self, evento&#41;:<br />        if self.pieza_en_movimiento:<br />            self.pieza_en_movimiento.x += evento.dx<br />            self.pieza_en_movimiento.y += evento.dy<br />            <br />    def conectar&#40;self, pieza_a, pieza_b&#41;:<br />        a = pieza_a.numero<br />        b = pieza_b.numero<br /><br />  <br />        if a in self.grupos[b]:<br />            #Evita contectar mas de una vez a dos piezas.<br />            return<br /><br />        &quot;&quot;&quot;Inicialmente comienzo con::<br /><br /><br />            0: [0, 1, 2]<br />            1: [0, 1, 2]<br />            2: [0, 1, 2]<br />            3: [3]<br /><br />        ¿y si conecto la pieza 3 con la 2?<br /><br />        - tendría que obtener todas las piezas que conoce 2.<br />        <br />        - iterar en ese grupo y decirle a cada pieza que sume a 3 en su grupo::<br /><br />            0: [0, 1, 2, 3]<br />            1: [0, 1, 2, 3]<br />            2: [0, 1, 2, 3]<br /><br />        - luego solo me falta tomar a uno de esos grupos actualizados<br />          y decirle a 3 que ese será su grupo::<br /><br />            3: [0, 1, 2, 3]<br />        &quot;&quot;&quot;<br />        <br />        grupo_nuevo = set&#40;self.grupos[a]&#41;.union&#40;self.grupos[b]&#41;<br /><br />        for pieza in grupo_nuevo:<br />            self.grupos[pieza] = grupo_nuevo <br /><br />        self.sonido_tick.reproducir&#40;&#41;<br />        <br />class Pieza&#40;pilas.actores.Animado&#41;:<br />    &quot;&quot;&quot;Representa una pieza del rompecabezas.<br /><br />    Esta pieza se puede arrastrar con el mouse y cuando se suelta<br />    intentará conectarse con las demás.&quot;&quot;&quot;<br /><br />    def __init__&#40;self, escena_padre, grilla, cuadro, filas, columnas&#41;:<br />        &quot;Genera la pieza que representa una parte de la imagen completa.&quot;<br />        self.escena_padre = escena_padre<br />        self.numero = cuadro<br />        pilas.actores.Animado.__init__&#40;self, grilla&#41;<br /><br />        self.z_de_la_pieza_mas_alta = 0<br />        self.asignar_numero_de_piezas_laterales&#40;cuadro, columnas&#41;<br /><br />        self.definir_cuadro&#40;cuadro&#41;<br /><br />        self.radio_de_colision = self.obtener_ancho&#40;&#41; / 2 + 12<br />        self.piezas_conectadas = []<br /><br />    def asignar_numero_de_piezas_laterales&#40;self, cuadro, columnas&#41;:<br />        &quot;Guarda el numero de las piezas que se pueden conectar en sus bordes.&quot;<br />        self.numero_arriba = cuadro - columnas<br />        self.numero_abajo = cuadro + columnas<br /><br />        if cuadro % columnas == 0:<br />            self.numero_izquierda = -1<br />        else:<br />            self.numero_izquierda = cuadro - 1<br /><br />        if cuadro % columnas == columnas -1:<br />            self.numero_derecha = -1<br />        else:<br />            self.numero_derecha = cuadro + 1<br /><br />    def soltar_todas_las_piezas_del_grupo&#40;self&#41;:<br />        for numero in self.escena_padre.grupos[self.numero]:<br />            pieza = self.escena_padre.piezas[numero]<br />            pieza.soltar&#40;&#41;<br /><br />    def soltar&#40;self&#41;:<br />        # Busca todas las colisiones entre esta pieza<br />        # que se suelta y todas las demás.<br />        colisiones = pilas.colisiones.obtener_colisiones&#40;self, self.escena_padre.piezas&#41;<br /><br />        for x in colisiones:<br />            self.intentar_conectarse_a&#40;x&#41;<br /><br />    def se_pueden_conectar_los_bordes&#40;self, borde1, borde2&#41;:<br />        distancia = pilas.utils.distancia&#40;borde1, borde2&#41;<br />        return  distancia &lt; 12<br /><br />    def intentar_conectarse_a&#40;self, otra&#41;:<br />        &quot;Intenta vincular dos piezas, siempre y cuando coincidan en sus bordes.&quot;<br /><br />        # Intenta conectar los bordes laterales<br />        if self.numero_derecha == otra.numero:<br />            if self.se_pueden_conectar_los_bordes&#40;self.derecha, otra.izquierda&#41;:<br />                otra.izquierda = self.derecha<br />                otra.arriba = self.arriba<br />                self.conectar_con&#40;otra&#41;<br /><br />        elif self.numero_izquierda == otra.numero:<br />            if self.se_pueden_conectar_los_bordes&#40;self.izquierda, otra.derecha&#41;:<br />                otra.derecha = self.izquierda<br />                otra.arriba = self.arriba<br />                self.conectar_con&#40;otra&#41;<br /><br />        # Intenta conectar los bordes superior e inferior<br />        if self.numero_abajo == otra.numero:<br />            if self.se_pueden_conectar_los_bordes&#40;self.abajo, otra.arriba&#41;:<br />                otra.arriba = self.abajo<br />                otra.izquierda = self.izquierda<br />                self.conectar_con&#40;otra&#41;<br /><br />        elif self.numero_arriba == otra.numero:<br />            if self.se_pueden_conectar_los_bordes&#40;self.arriba, otra.abajo&#41;:<br />                otra.abajo = self.arriba<br />                otra.izquierda = self.izquierda<br />                self.conectar_con&#40;otra&#41;<br /><br /><br />    def conectar_con&#40;self, otra_pieza&#41;:<br />        self.escena_padre.conectar&#40;self, otra_pieza&#41;<br /><br /><br />    def __repr__&#40;self&#41;:<br />        return &quot;&lt;&lt;Pieza %d&gt;&gt;&quot; %&#40;self.animacion.obtener_cuadro&#40;&#41;&#41;<br /><br /><br />    def set_x&#40;self, x&#41;:<br />        &quot;A diferencia de los actores normales, las piezas tienen que mover a todo su grupo.&quot;<br />        dx = x - self.x<br /><br />        for numero in self.escena_padre.grupos[self.numero]:<br />            try:<br />                pieza = self.escena_padre.piezas[numero]<br />                pieza.definir_posicion&#40;pieza.x + dx, pieza.y&#41;<br />            except IndexError:<br />                pass<br /><br />    def set_y&#40;self, y&#41;:<br />        &quot;A diferencia de los actores normales, las piezas tienen que mover a todo su grupo.&quot;<br />        dy = y - self.y<br /><br />        for numero in self.escena_padre.grupos[self.numero]:<br />            try:<br />                pieza = self.escena_padre.piezas[numero]<br />                pieza.definir_posicion&#40;pieza.x, pieza.y + dy&#41;<br />            except IndexError:<br />                pass<br /><br />    def get_x&#40;self&#41;:<br />        x, y = self.obtener_posicion&#40;&#41;<br />        return x<br /><br />    def get_y&#40;self&#41;:<br />        x, y = self.obtener_posicion&#40;&#41;<br />        return y<br /><br />    x = property&#40;get_x, set_x, doc=&quot;Define la posición horizontal.&quot;&#41;<br />    y = property&#40;get_y, set_y, doc=&quot;Define la posición vertical.&quot;&#41;<br /><br />    def mostrar_arriba_todas_las_piezas&#40;self&#41;:<br />        for numero in self.escena_padre.grupos[self.numero]:<br />            pieza = self.escena_padre.piezas[numero]<br />            pieza.z = -1<br /><br />    def mostrar_abajo_todas_las_piezas&#40;self&#41;:<br />        for numero in self.escena_padre.grupos[self.numero]:<br />            pieza = self.escena_padre.piezas[numero]<br />            pieza.z = 0</pre><br /><br />En el ejemplo de las piezas también puedes escoger imágenes que tú quieras y el tamaño de sus piezas,<br />pero si quieres crear tu propio sistemas de piezas adelante y espero que te sirva la respuesta.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2355">pchack</a> — Mar Mar 29, 2011 12:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlachacon]]></name></author>
<updated>2011-03-28T21:00:35+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5347#p5347</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5347#p5347"/>
<title type="html"><![CDATA[Ayuda con Piezas]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1101&amp;p=5347#p5347"><![CDATA[
<span style="font-weight: bold">Hoola Chicos!!!!</span><br /><br />les escribo ya que voy a hacer un juego como el del ejemplo de Piezas, y quería saber si había la posibilidad de que me proporcionaran el código del ejemplo para tener una idea de lo que voy a utilizar....<br /><br />Espero su respuesta...<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2384">carlachacon</a> — Lun Mar 28, 2011 9:00 pm</p><hr />
]]></content>
</entry>
</feed>