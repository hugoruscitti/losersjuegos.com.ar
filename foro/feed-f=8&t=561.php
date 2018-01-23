<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=561" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2009-05-18T13:57:57+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=561</id>
<entry>
<author><name><![CDATA[johndoe90]]></name></author>
<updated>2009-05-18T13:57:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=561&amp;p=2550#p2550</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=561&amp;p=2550#p2550"/>
<title type="html"><![CDATA[LINK 2001]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=561&amp;p=2550#p2550"><![CDATA[
Solucionado.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2079">johndoe90</a> — Lun May 18, 2009 1:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[johndoe90]]></name></author>
<updated>2009-05-14T11:54:11+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=561&amp;p=2544#p2544</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=561&amp;p=2544#p2544"/>
<title type="html"><![CDATA[LINK 2001]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=561&amp;p=2544#p2544"><![CDATA[
Hola que tal?<br />Ahora no tengo un constructor en CProcess, pero si en pila, ya que lo necesito para crearla. <br />Porque me vuelve a dar este error si esta ya inicializada?<br /><br />Linking...<br />   Creating library Debug/CProcess.lib and object Debug/CProcess.exp<br />CProcess.exp : warning LNK4070: /OUT:CProcess.dll directive in .EXP differs from output filename &quot;Debug/CProcess.exe&quot;; ignoring directive<br />Debug/CProcess.exe : warning LNK4086: entrypoint &quot;_mainCRTStartup&quot; is not __stdcall with 12 bytes of arguments; image may not run<br />LIBCD.lib(crt0.obj) : error LNK2001: unresolved external symbol _main<br />Debug/CProcess.exe : fatal error LNK1120: 1 unresolved externals<br />Error executing link.exe.<br /><br />CProcess.exe - 2 error(s), 2 warning(s)<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>typedef char Tpalabra &#91;20&#93;;<br /> <br />class CProcess<br />{<br />private:<br />    Tpalabra imageName;<br />    float cpuUsage;<br />    int memUsage;<br /> <br />public:<br />    CProcess();<br />    void pon_imageName(char name&#91;20&#93;);<br />    char* dame_imageName();<br />    void pon_cpuUsage(float cpu);<br /> float dame_cpuUsage();<br />    void pon_memUsage(int mem);<br />    int dame_memUsage();<br />    float valor_inicial_cpu();<br />    int valor_inical_mem();<br />};</code></dd></dl><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;CProcess.h&quot;<br />#define MAXPILA 5<br /><br />class CPila<br />{<br />private:<br />   CProcess Vector&#91;MAXPILA&#93;;<br />   int CimPila;<br /><br />public:<br />    CPila(void);<br />   int PilaVacia(void);<br />   int PilaLlena(void);<br />   void PushPila(CProcess &amp;c);<br />   CProcess PopPila(void);<br />};</code></dd></dl><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;CProcess.h&quot;<br />#include &lt;string.h&gt;<br /><br />void CProcess::pon_imageName(Tpalabra name)<br />{<br />   strcpy(imageName,name);<br />}<br /><br />Tpalabra* CProcess::dame_imageName()<br />{<br />   return (&amp;imageName);<br />}<br /><br />void CProcess::pon_cpuUsage(float cpu)<br />{<br />   cpuUsage=cpu;<br />}<br /><br />float CProcess::dame_cpuUsage()<br />{<br />   return (cpuUsage);<br />}<br /><br />void CProcess::pon_memUsage(int mem)<br />{<br />   memUsage=mem;<br />}<br /><br />int CProcess::dame_memUsage()<br />{<br />   return (memUsage);<br />}</code></dd></dl><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;pila.h&quot;<br /><br />CPila::CPila(void)<br />{<br />   CimPila=-1;<br />}<br />int CPila::PilaVacia(void)<br />{<br />   return(CimPila==-1);<br />}<br />int CPila::PilaLlena(void)<br />{<br />   return(CimPila==MAXPILA-1);<br />}<br />void CPila::PushPila(CProcess &amp;p)<br />{<br />   Vector&#91;++CimPila&#93;=p;<br />}<br />CProcess CPila::PopPila(void)<br />{<br />   return(Vector&#91;CimPila--&#93;);<br />}</code></dd></dl><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &quot;Windows.h&quot;<br />#include &quot;pila.h&quot;<br /><br /><br />CProcess my_Process;<br />CPila mi_pila;<br /><br /><br /><br />int FAR PASCAL DLLanade_proceso(Tpalabra name, float cpu, int mem)<br />{<br />   CProcess c;<br /><br />   if (mi_pila.PilaLlena())<br />      return -1;<br />   else {<br />      c.pon_imageName(name);<br />      c.pon_cpuUsage(cpu);<br />      c.pon_memUsage(mem);<br /><br />      mi_pila.PushPila(c);<br />      return 0;<br />   }<br />}<br /><br />int FAR PASCAL DLLquita_proceso(Tpalabra name, float* cpu, int* mem)<br />{<br />   if (mi_pila.PilaVacia())<br />      return -1;<br />   else {<br />      CProcess c = mi_pila.PopPila();<br />      strcpy(name, *c.dame_imageName());<br />      *cpu = c.dame_cpuUsage();<br />      *mem = c.dame_memUsage();<br /><br />      return 0;<br />   }<br />}</code></dd></dl><br /><br />LIBRARY CProcess.dll<br />DESCRIPTION 'DLL cola de procesos'<br />HEAPSIZE 1024<br /><br />EXPORTS<br />DLLanade_proceso@1<br />DLLquita_proceso@2<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2079">johndoe90</a> — Jue May 14, 2009 11:54 am</p><hr />
]]></content>
</entry>
</feed>