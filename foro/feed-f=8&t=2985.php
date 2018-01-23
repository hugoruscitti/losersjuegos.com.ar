<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=2985" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2013-01-28T02:44:42+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=2985</id>
<entry>
<author><name><![CDATA[shackra]]></name></author>
<updated>2013-01-28T02:44:42+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9114#p9114</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9114#p9114"/>
<title type="html"><![CDATA[Re: Ayuda con python!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9114#p9114"><![CDATA[
por favor, usar los tags [python] que da cáncer de ojo ver ese código así :-/<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2114">shackra</a> — Lun Ene 28, 2013 2:44 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[crispin-cross]]></name></author>
<updated>2013-01-08T11:16:31+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9100#p9100</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9100#p9100"/>
<title type="html"><![CDATA[Re: Ayuda con python!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9100#p9100"><![CDATA[
he encontrado esto,¿serviria para algo?<br /><br />un saludo<br /><br /><pre class="prettyprint">from pprint import pprint<br />import random<br />import sys<br /><br />def main&#40;&#41;:<br /><br />aircraft_carrier = []<br />battle_ship = []<br />submarine = []<br />destroyer = []<br />patrol_boat = []<br /><br />def new_board&#40;rows = 10, columns = 10, default_value = 0&#41;:<br />board = []<br />for i in xrange&#40;rows&#41;:<br />board.append&#40;[default_value] * columns&#41;<br />return board<br /><br />def fire_shot&#40;&#41;:<br />print &quot;Select x, y coordinates to fire a shot.&quot;<br /><br />fire =  input&#40;&#39;You may fire when ready: &#39;&#41;<br /><br />x = fire[0]<br />y = fire[1]<br /><br />if battleship[x][y] == 1:<br />print &quot;\033[95m&quot; + &quot;hit!&quot; + &quot;\033[0m&quot;<br />battleship[x][y] = 5<br />viewer[x][y] = 5<br />elif battleship[x][y] == 5:<br />print &quot;\033[91m&quot; + &quot;already hit there!&quot; + &quot;\033[0m&quot;<br />else:<br />print &quot;\033[93m&quot; + &quot;miss!&quot; + &quot;\033[0m&quot;<br />battleship[x][y] = 7<br />viewer[x][y] = 7<br /><br />track_hits&#40;x, y&#41;<br />pprint&#40;viewer&#41;<br />fire_shot&#40;&#41;<br /><br />def track_hits&#40;x, y&#41;:<br />all_ships = [aircraft_carrier] + [battle_ship] + [submarine] + [destroyer] + [patrol_boat]<br />if battleship[x][y] == 5:<br />for ship in all_ships:<br />for spot in ship:<br />if spot == [x, y]:<br />ship.remove&#40;spot&#41;<br /><br />for ship in all_ships:<br />if len&#40;ship&#41; == 0:<br />if all_ships.index&#40;ship&#41; == 0:<br />print &quot;You sunk the aircraft carrier!&quot;<br />break<br />elif all_ships.index&#40;ship&#41; == 1:<br />print &quot;You sunk the battle ship!&quot;<br />break<br />elif all_ships.index&#40;ship&#41; == 2:<br />print &quot;You sunk the submarine!&quot;<br />break<br />elif all_ships.index&#40;ship&#41; == 3:<br />print &quot;You sunk the destroyer!&quot;<br />break<br />elif all_ships.index&#40;ship&#41; == 4:<br />print &quot;You sunk the patrol boat!&quot;<br />break<br /><br />if len&#40;all_ships&#41; == 0:<br />print &quot;You Win!&quot;<br />sys.exit&#40;&#41;<br /><br />def find_open_spot&#40;row, row_number, required_number, num_repeats, stop_after_match=True&#41;:<br />i = random.randrange&#40;0, 9 - num_repeats&#41;<br /><br />while i &lt; len&#40;row&#41;:                   <br />if [required_number]*num_repeats == row[i:i + num_repeats]:<br />row[i:i+num_repeats] = [1]*num_repeats                  <br /><br />placement = [k for k in range&#40;len&#40;row&#41;&#41; if row[k] == &#39;1&#39;]<br /><br />if num_repeats == 5:<br />for coords in xrange&#40;5&#41;:<br />aircraft_carrier.append&#40;[row_number, i+coords]&#41;<br />elif num_repeats == 4:<br />for coords in xrange&#40;4&#41;:<br />battle_ship.append&#40;[row_number, i+coords]&#41;<br />elif num_repeats == 3:<br />if len&#40;submarine&#41; &lt; 3:<br />for coords in xrange&#40;3&#41;:<br />submarine.append&#40;[row_number, i+coords]&#41;<br />else:<br />for coords in xrange&#40;3&#41;:<br />destroyer.append&#40;[row_number, i+coords]&#41;<br />elif num_repeats == 2:<br />for coords in xrange&#40;2&#41;:<br />patrol_boat.append&#40;[row_number, i+coords]&#41;<br /><br />i += num_repeats                                                  <br />if stop_after_match:<br />break<br />else:<br />i += 1<br /><br />return row<br /><br />def transform_board&#40;battleship, ship_length&#41;:<br />a = battleship<br />battleship = new_board&#40;&#41;<br />for i in xrange&#40;10&#41;:<br />for j in xrange&#40;10&#41;:<br />battleship[i][j] = a[j][i]<br /><br />for i in aircraft_carrier:<br />i.reverse&#40;&#41;<br /><br />for i in battle_ship:<br />i.reverse&#40;&#41;<br /><br />for i in submarine:<br />i.reverse&#40;&#41;<br /><br />for i in destroyer:<br />i.reverse&#40;&#41;<br /><br />for i in patrol_boat:<br />i.reverse&#40;&#41;<br /><br />return battleship<br /><br />def place_ship&#40;ship&#41;:<br />i = random.randrange&#40;0, 10&#41;<br />row = battleship[i]<br />add_ship = find_open_spot&#40;row, i, 0, ship&#41;<br />battleship[i] = add_ship<br />return battleship<br /><br />#init battleship board<br />battleship = new_board&#40;10, 10&#41;<br /><br />#init viewers board<br />viewer = new_board&#40;10, 10&#41;<br /><br />#init ships to be placed<br />ships = [5, 4, 3, 3, 2]<br /><br />for i in xrange&#40;5&#41;:<br />battleship = place_ship&#40;ships[i]&#41;<br />if &#40;int&#40;round&#40;random.random&#40;&#41;&#41;&#41; == 1&#41;:<br />battleship = transform_board&#40;battleship, i&#41;<br /><br /># debugging<br />#print &#39;aircraft carrier&#39;, aircraft_carrier<br />#print &#39;battle ship&#39;, battle_ship<br />#print &#39;submarine&#39;, submarine<br />#print &#39;destroyer&#39;, destroyer<br />#print &#39;patrol boat&#39;, patrol_boat<br /><br />pprint&#40;viewer&#41;<br />fire_shot&#40;&#41;<br /><br />if __name__ == &quot;__main__&quot;:<br />print &#39;Directions: Game board is 10 zero indexed rows, 10 zero indexed columns. Enter x, y coordinates to fire a shot. A hit is indicated by 5, a miss by 7.&#39;<br />main&#40;&#41;<br /><br /># left to do<br /># game over is not working<br /># displaying the sunk ship seems to not work<br /># add error handling for wrong user input<br /># eventually support AI from computer<br /># add x, y numbers to help with coordinate selection</pre><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3090">crispin-cross</a> — Mar Ene 08, 2013 11:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kaiser]]></name></author>
<updated>2013-01-05T10:49:47+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9098#p9098</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9098#p9098"/>
<title type="html"><![CDATA[Re: Ayuda con python!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9098#p9098"><![CDATA[
Hola crispin. Lo primero, bienvenido a la comunidad.<br /><br />Perdóname si me equivoco, pero tu petición suena mucho a &quot;En el colegio me han pedido que haga una práctica de programación con un juego de hundir la flota en python. ¿Me lo hacéis?&quot;. No es que vea nada malo en ello, pero estaría bien que lo trabajes un poco por tu cuenta y uses el foro para hacer preguntas más concretas tipo ¿Cómo se manejan arrays en python? o ¿Cómo podría implementar esta estrategia?.<br /><br />Mientras tanto, aquí te dejo un buen libro para empezar con python (<a href="http://www.losersjuegos.com.ar/_media/referencia/libros/python_para_todos/python_para_todos.pdf" class="postlink">http://www.losersjuegos.com.ar/_media/referencia/libros/python_para_todos/python_para_todos.pdf</a>) y la API de pygame traducida por esta comunidad (<a href="http://www.losersjuegos.com.ar/traducciones/pygame" class="postlink">http://www.losersjuegos.com.ar/traducciones/pygame</a>).<br /><br />Que lo disfrutes y un saludo!<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2347">kaiser</a> — Sab Ene 05, 2013 10:49 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[crispin-cross]]></name></author>
<updated>2013-01-04T12:26:27+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9096#p9096</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9096#p9096"/>
<title type="html"><![CDATA[Ayuda con python!!!]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=2985&amp;p=9096#p9096"><![CDATA[
Hola buenas,necesito ayuda con el juego &quot;hundir la flota&quot; o &quot;el juego de los barcos&quot; para hacerlo con python,si alguien lo tiene o lo sabria hacer,estaria agradecido de que me ayudase.<br /><br /><br />gracias,un saludo<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=3090">crispin-cross</a> — Vie Ene 04, 2013 12:26 pm</p><hr />
]]></content>
</entry>
</feed>