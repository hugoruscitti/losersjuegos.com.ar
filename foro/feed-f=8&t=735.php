<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=735" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2010-07-16T06:29:25+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=8&amp;t=735</id>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-07-16T06:29:25+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3430#p3430</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3430#p3430"/>
<title type="html"><![CDATA[Problema con punteros en luabind]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3430#p3430"><![CDATA[
OK, muchas gracias, ya vere que sucede.<br />saludos<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Vie Jul 16, 2010 6:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Juanxo]]></name></author>
<updated>2010-07-15T18:23:57+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3429#p3429</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3429#p3429"/>
<title type="html"><![CDATA[Problema con punteros en luabind]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3429#p3429"><![CDATA[
buenas carlos<br />estoy investigando el error, pero aun no lo encuentro.<br />para sacar mayor informacion de porque es este error, prueba a añadir un try..catch y ver que te dice:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>try  &#123;<br />30.    ResourceManager MyResourceManager;<br />31. <br />32.    // Assign MyResourceManager to a global in lua<br />33.    luabind::globals&#40;myLuaState&#41;&#91;&quot;MyResourceManager&quot;&#93; = &amp;MyResourceManager;<br />34. <br />35.    // Execute a script to load some resources<br />36.    luaL_dostring&#40;<br />37.      myLuaState,<br />38.      &quot;MyResourceManager:loadResource&#40;\&quot;abc.res\&quot;&#41;\n&quot;<br />39.      &quot;MyResourceManager:loadResource&#40;\&quot;xyz.res\&quot;&#41;\n&quot;<br />40.      &quot;\n&quot;<br />41.      &quot;ResourceCount = MyResourceManager.ResourceCount\n&quot;<br />42.    &#41;;<br />43. <br />44.    // Read a global from the lua script<br />45.    size_t ResourceCount = luabind::object_cast&lt;size_t&gt;&#40;<br />46.      luabind::globals&#40;myLuaState&#41;&#91;&quot;ResourceCount&quot;&#93;<br />47.    &#41;;<br />48.    cout &lt;&lt; ResourceCount &lt;&lt; endl;<br />49.  &#125;<br />50.  catch&#40;const std::exception &amp;TheError&#41; &#123;<br />51.    cerr &lt;&lt; TheError.what&#40;&#41; &lt;&lt; endl;<br />52.  &#125;<br /></code></dd></dl><p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2057">Juanxo</a> — Jue Jul 15, 2010 6:23 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[carlostex]]></name></author>
<updated>2010-07-14T06:03:55+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3428#p3428</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3428#p3428"/>
<title type="html"><![CDATA[Problema con punteros en luabind]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=735&amp;p=3428#p3428"><![CDATA[
Que tal, Pues les traigo una duda que intente resolver pero por mas que hice no funcionó, primero el codigo:<br /><dl class="codebox"><dt>Code: </dt><dd><code>#include &lt;luabind/luabind.hpp&gt;<br />#include &lt;luabind/adopt_policy.hpp&gt;<br />#include&lt;iostream&gt;<br />using namespace std;<br /><br />extern &quot;C&quot; &#123;<br />   #include &quot;lua.h&quot;<br />   #include &quot;lualib.h&quot;<br />   #include &quot;lauxlib.h&quot;<br />&#125;<br /><br />void pt&#40;int *p&#41;<br />&#123;<br />   cout&lt;&lt;*p&lt;&lt;endl;<br />&#125;<br /><br /><br />class nume<br />&#123;<br />   <br />   public:<br />   int *n;<br />   nume&#40;&#41;&#123;&#125;;<br />   void set&#40;int i&#41;&#123;n=new int; *n=i;&#125;<br />   int *get&#40;&#41;&#123;return n;&#125;<br />   <br />&#125;;<br /><br />int  main&#40;int argc,char* argv&#91;&#93;&#41; &#123;<br />   <br />   <br />   <br /> // Create a new lua state<br />   lua_State *L = lua_open&#40;&#41;;<br /> <br />  // Connect LuaBind to this lua state<br />   luabind::open&#40;L&#41;;<br />   luaL_openlibs&#40;L&#41;;//load basic libs<br /> <br />   using namespace luabind;<br />      <br />   module&#40;L&#41;<br />   &#91;<br />      def&#40;&quot;pt&quot;, &amp;pt&#41;<br />   &#93;;     <br />   <br />   module&#40;L&#41;<br />    &#91;<br />         class_&lt;nume&gt;&#40;&quot;nume&quot;&#41;<br />         .def&#40;constructor&lt;&gt;&#40;&#41;&#41;<br />         .property&#40;&quot;n&quot;,&amp;nume::set, &amp;nume::get,luabind::detail::null_type&#40;&#41;, adopt&#40;result&#41;&#41;<br />   &#93;;<br />   <br />   <br />   luaL_dostring&#40;<br />   L,<br />   &quot;a=nume&#40;&#41;\n&quot;<br />   &quot;a:set&#40;2&#41;\n&quot;<br />    &quot;print&#40;2&#41;\n&quot;<br />   &#41;;<br /> <br /><br />   lua_close&#40;L&#41;;<br /><br /><br />&#125;</code></dd></dl><br /><br />Comando para compilar: g++ -I http://losersjuegos.com.ar/foro/ -I/usr/local/include -I/usr/include/lua5.1 -lluabind -llua5.1 -ldl -o test test.cpp<br /><br />OK, bueno pues se supone que lo que debe hacer es devolverme un apuntador a un entero de c++, y que dentro le lua lo pueda volver a enviar a una funcion de c++, pero no funciona, Cuando llamo a a:set(2) no se ejecuta el script por que tiene un error, Si lo quito ya se ejecuta.<br /><br />Hay poca documentacion de esto en la web y por eso me ha costado trabajo, ya logre exportar funciones y clases, y lo pude ejecutar bien, pero nececito los apuntadores, espero que alguien sepa del tema.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2124">carlostex</a> — Mié Jul 14, 2010 6:03 am</p><hr />
]]></content>
</entry>
</feed>