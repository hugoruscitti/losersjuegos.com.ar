<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=551" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-04-27T22:10:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=551</id>
<entry>
<author><name><![CDATA[lacabra25]]></name></author>
<updated>2009-04-27T22:10:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2493#p2493</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2493#p2493"/>
<title type="html"><![CDATA[En Visual Basic obtengo: error 49]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2493#p2493"><![CDATA[
<blockquote><div><cite>endaramiz escribió:</cite><br />No creo que VB sea la mejor opción para aprender a programar videojuegos.<br /></div></blockquote><br /><br />Endaramiz, creo que este tema no va precisamente de videojuegos, leeyo lenguajes y puso aqui el mensaje sin pensar que si el foro trataba sobre la programación de videojuegos lo mas apropiado era ponerlo en fuera de topico, es algo que puede pasar por error al principio. Si algun moderador o administrador del foro lee esto, por favor que elimine uno de los dos temas que estan duplicados y que mueva este, si se puede, a fuera de topico. También, Johndoe90, deberias de intentar ser algo más expresivo en el titulo del tema &quot;error 49&quot; no dice nada de que lenguaje es sobre el que consultas, ni bibliotecas ni en que te ha aparecido el error, la unica informacion que da es que es un error que tiene algo que ver con el numero 49; ya sea como codigo de error del compilador o interprete, de la biblioteca o a saber de que.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1912">lacabra25</a> — Lun Abr 27, 2009 10:10 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[endaramiz]]></name></author>
<updated>2009-04-27T19:23:08+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2491#p2491</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2491#p2491"/>
<title type="html"><![CDATA[En Visual Basic obtengo: error 49]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2491#p2491"><![CDATA[
No creo que VB sea la mejor opción para aprender a programar videojuegos. Si no sabes C/C++ te aconsejo comenzar por Python+Pygame y si ya te manejas con soltura en C/C++, SDL.<br /><br />Saludos.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=1809">endaramiz</a> — Lun Abr 27, 2009 7:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johndoe90]]></name></author>
<updated>2009-04-27T11:18:02+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2485#p2485</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2485#p2485"/>
<title type="html"><![CDATA[En Visual Basic obtengo: error 49]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=551&amp;p=2485#p2485"><![CDATA[
Hola, estoy intentando hacer un programa en VB a partir de una dll hecha con C++ en objetos. El programa consiste en introducir el nombre, uso de cpu y memoria de un proceso, y luego mostrarlo, todo va bien hasta que se le da a mostrar, entonces me sale el error 49: &quot;La convencion de llamadas a DLL es incorrecta&quot;. Alguien sabria decirme donde esta el fallo?<br /><br />Gracias.<br /><br />Adjunto código.<br /><br />CProcess.h<br /><br />typedef char Tpalabra [20];<br /><br />class CProcess<br />{<br />private:<br />Tpalabra imageName;<br />float cpuUsage;<br />int memUsage;<br /><br />public:<br />CProcess();<br />void pon_imageName(Tpalabra name);<br />Tpalabra* dame_imageName();<br />void pon_cpuUsage(float cpu);<br />float dame_cpuUsage();<br />void pon_memUsage(int mem);<br />int dame_memUsage();<br />float valor_inicial_cpu();<br />int valor_inical_mem();<br />};<br /><br />CProcess.cpp<br /><br />#include &quot;CProcess.h&quot;<br />#include &lt;string.h&gt;<br /><br />Tpalabra newProc;<br /><br />CProcess::CProcess()<br />{<br />strcpy(imageName,newProc);<br />cpuUsage=0.0;<br />memUsage=0;<br />}<br /><br />float CProcess::valor_inicial_cpu()<br />{<br />return cpuUsage;<br />}<br /><br />int CProcess::valor_inical_mem()<br />{<br />return memUsage;<br />}<br /><br /><br />void CProcess::pon_imageName(Tpalabra name)<br />{<br />strcpy(imageName,name);<br />}<br /><br />Tpalabra* CProcess::dame_imageName()<br />{<br />return (&amp;imageName);<br />}<br /><br />void CProcess::pon_cpuUsage(float cpu)<br />{<br />cpuUsage=cpu;<br />}<br /><br />float CProcess::dame_cpuUsage()<br />{<br />return (cpuUsage);<br />}<br /><br />void CProcess::pon_memUsage(int mem)<br />{<br />memUsage=mem;<br />}<br /><br />int CProcess::dame_memUsage()<br />{<br />return (memUsage);<br />}<br /><br />DLLCProcess.cpp<br /><br />#include &quot;Windows.h&quot;<br />#include &quot;CProcess.h&quot;<br /><br />CProcess my_Process;<br /><br />void FAR PASCAL DLLpon_imageName(Tpalabra name)<br />{<br />my_Process.pon_imageName(name);<br />}<br /><br />void FAR PASCAL DLLdame_imageName(Tpalabra name)<br />{<br />strcpy(name,*my_Process.dame_imageName());<br />}<br /><br />void FAR PASCAL DLLpon_cpuUsage(float cpu)<br />{<br />my_Process.pon_cpuUsage(cpu);<br />}<br /><br />float FAR PASCAL DLLdame_cpuUsage()<br />{<br />return my_Process.dame_cpuUsage();<br />}<br /><br />void FAR PASCAL DLLpon_memUsage(int mem)<br />{<br />my_Process.pon_memUsage(mem);<br />}<br /><br />int FAR PASCAL DLLdame_memUsage()<br />{<br />return my_Process.dame_memUsage();<br />}<br /><br /><br />CProcess.def<br /><br />LIBRARY CProcess.dll<br />DESCRIPTION 'Dll CProcess'<br />HEAPSIZE 4024<br /><br />EXPORTS<br />      DLLpon_imageName   @1<br />      DLLdame_imageName  @2<br />      DLLpon_cpuUsage    @3<br />      DLLdame_cpuUsage   @4<br />      DLLpon_memUsage    @5<br />      DLLdame_memUsage   @6<br /><br /><br />VB<br /><br />Form 1<br /><br />Option Explicit<br /><br /><br />Private Sub Command1_Click()<br />Dim name As String<br />Dim cpu As Single<br />Dim mem As Long<br /><br />name = &quot;                    &quot;<br />name_in.Text = name<br />cpu_in.Text = cpu<br />mem_in.Text = mem<br /><br />DLLpon_imageName (name)<br />DLLpon_cpuUsage (cpu)<br />DLLpon_memUsage (mem)<br />MsgBox &quot;Datos introducidos correctamente&quot;<br /><br /><br />End Sub<br /><br />Private Sub Command2_Click()<br />Dim palabra As String<br />Dim cpuUsage As Single<br />Dim memUsage As Long<br />palabra = &quot;                  &quot;<br /><br />DLLdame_imageName palabra<br />DLLdame_cpuUsage cpuUsage<br />DLLdame_memUsage memUsage<br /><br />name_out.Text = palabra<br />cpu_out.Text = cpuUsage<br />mem_out.Text = memUsage<br /><br />End Sub<br /><br />Module1 <br /><br />Option Explicit<br /><br />Public Declare Function DLLpon_imageName _<br />Lib &quot;CProcess.dll&quot; _<br />(ByVal name As String) _<br />As Long<br /><br />Public Declare Function DLLdame_imageName _<br />Lib &quot;CProcess.dll&quot; _<br />(ByVal imageName As String) _<br />As Long<br /><br />Public Declare Function DLLpon_cpuUsage _<br />Lib &quot;CProcess.dll&quot; _<br />(ByVal cpu As Single) _<br />As Long<br /><br />Public Declare Function DLLdame_cpuUsage _<br />Lib &quot;CProcess.dll&quot; _<br />(ByVal cpuUsage As Single) _<br />As Long<br /><br />Public Declare Function DLLpon_memUsage _<br />Lib &quot;CProcess.dll&quot; _<br />(ByVal mem As Long) _<br />As Long<br /><br />Public Declare Function DLLdame_memUsage _<br />Lib &quot;CProcess.dll&quot; _<br />(ByVal memUsage As Long) _<br />As Long<br /><br /><br /><br />PD: Hay alguna manera de no meter un codigo tan largo en un post? Comprimirlo o algo asi?<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2079">johndoe90</a> — Lun Abr 27, 2009 11:18 am</p><hr />
]]></content>
</entry>
</feed>