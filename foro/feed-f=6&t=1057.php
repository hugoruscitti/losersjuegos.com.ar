<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="es">
<link rel="self" type="application/atom+xml" href="http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1057" />

<title>LosersJuegos</title>
<subtitle>Desarrollando videojuegos libres</subtitle>
<link href="http://losersjuegos.com.ar/foro/index.php" />
<updated>2011-02-17T18:19:33+00:00</updated>

<author><name><![CDATA[LosersJuegos]]></name></author>
<id>http://losersjuegos.com.ar/foro/feed.php?f=6&amp;t=1057</id>
<entry>
<author><name><![CDATA[baigos]]></name></author>
<updated>2011-02-17T18:19:33+00:00</updated>
<id>http://losersjuegos.com.ar/foro/viewtopic.php?t=1057&amp;p=5108#p5108</id>
<link href="http://losersjuegos.com.ar/foro/viewtopic.php?t=1057&amp;p=5108#p5108"/>
<title type="html"><![CDATA[sdl + opengl y transparencia en pngs]]></title>

<content type="html" xml:base="http://losersjuegos.com.ar/foro/viewtopic.php?t=1057&amp;p=5108#p5108"><![CDATA[
hola, estaba tratando de cargar imágenes en sdl + opengl, y el primer problema que habia tenido era que me tomaba ciertas imágenes correctamente (texturas de 32 bits), las otras me las mostraba distorsionadas. Lo solucioné utilizando el código que viene en los ejemplos de sdl, más precisamente el testgl.c.<br />El tema ahora es que no puedo hacer que me tome las transparencias de un png. Este es mi código.<br /><dl class="codebox"><dt>Code: </dt><dd><code>GLuint loadTexture(SDL_Surface *surface)<br />{<br />   GLuint texture;<br />   int w, h;<br />   SDL_Surface *image;<br />   SDL_Rect area;<br />   Uint32 saved_flags;<br />   Uint8  saved_alpha;<br /><br />   //verifica si el ancho de la imagen es potencia de 2<br />   if(powerof2(surface-&gt;w) == 0) printf(&quot;warning: image width is not a power of 2\n&quot;);<br />       //verifica si el alto de la imagen es potencia de 2<br />   if(powerof2(surface-&gt;h) == 0) printf(&quot;warning: image height is not a power of 2\n&quot;);<br /><br />   w = surface-&gt;w;<br />   h = surface-&gt;h;<br />   <br />   <br />   image = SDL_CreateRGBSurface(<br />         SDL_SWSURFACE,<br />         w, h,<br />         32,<br />#if SDL_BYTEORDER == SDL_LIL_ENDIAN /* OpenGL RGBA masks */<br />         0x000000FF, <br />         0x0000FF00, <br />         0x00FF0000, <br />         0xFF000000<br />#else<br />         0xFF000000,<br />         0x00FF0000, <br />         0x0000FF00, <br />         0x000000FF<br />#endif<br />             );<br />   if ( image == NULL ) {<br />      return 0;<br />   }<br /><br />   /* Save the alpha blending attributes */<br />   saved_flags = surface-&gt;flags&amp;(SDL_SRCALPHA|SDL_RLEACCELOK);<br />   saved_alpha = surface-&gt;format-&gt;alpha;<br />   if ( (saved_flags &amp; SDL_SRCALPHA) == SDL_SRCALPHA ) {<br />      SDL_SetAlpha(surface, 0, 0);<br />   }<br /><br />   /* Copy the surface into the GL texture image */<br />   area.x = 0;<br />   area.y = 0;<br />   area.w = surface-&gt;w;<br />   area.h = surface-&gt;h;<br />   SDL_BlitSurface(surface, &amp;area, image, &amp;area);<br /><br />   /* Restore the alpha blending attributes */<br />   if ( (saved_flags &amp; SDL_SRCALPHA) == SDL_SRCALPHA ) {<br />      SDL_SetAlpha(surface, saved_flags, saved_alpha);<br />   }<br /><br />   /* Create an OpenGL texture for the image */<br />   glGenTextures(1, &amp;texture);<br />   glBindTexture(GL_TEXTURE_2D, texture);<br />   glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MAG_FILTER, GL_NEAREST);<br />   glTexParameteri(GL_TEXTURE_2D, GL_TEXTURE_MIN_FILTER, GL_NEAREST);<br />   glTexImage2D(GL_TEXTURE_2D,<br />           0,<br />           GL_RGBA,<br />           w, h,<br />           0,<br />           GL_RGBA,<br />           GL_UNSIGNED_BYTE,<br />           image-&gt;pixels);<br />   SDL_FreeSurface(image); /* No longer needed */<br /><br />   return texture;<br /><br /><br />}<br /></code></dd></dl><br /><br />Para la inicialización del opengl arme esta función:<br /><dl class="codebox"><dt>Code: </dt><dd><code><br />int initgraphics()<br />{<br /><br />   if((SDL_Init( SDL_INIT_VIDEO )) &lt; 0 )<br />   {<br />      printf(&quot;error, no inicia video&quot;);<br />      return 0;<br />   }<br />   <br /><br />   SDL_GL_SetAttribute(SDL_GL_DOUBLEBUFFER,1);<br /><br />   <br />   if((screen = SDL_SetVideoMode(SCREEN_WIDTH,SCREEN_HEIGHT,SCREEN_BPP,SDL_OPENGL)) &lt; 0)<br />   {<br />      printf(&quot;error, no inicia modo gráfico&quot;);<br />      return 0;<br />   }<br />   <br /><br />   glClearColor(0.0f, 0.0f, 1.0f, 0.0f);<br /><br />   glPushAttrib(GL_ENABLE_BIT);<br />   glDisable(GL_DEPTH_TEST);<br />   glDisable(GL_CULL_FACE);<br />   glEnable( GL_TEXTURE_2D );<br /><br />   /* This allows alpha blending of 2D textures with the scene */<br />   glEnable(GL_BLEND);<br />   glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);<br /><br />   <br />   glViewport( 0, 0, SCREEN_WIDTH, SCREEN_HEIGHT);<br /><br />   glMatrixMode( GL_PROJECTION );<br />   glPushMatrix();<br />   glLoadIdentity();<br /><br />   glOrtho( 0.0, (GLdouble)SCREEN_WIDTH, (GLdouble)SCREEN_HEIGHT, 0.0, 0.0, 1.0 );<br />    <br />   glMatrixMode( GL_MODELVIEW );<br />   glPushMatrix();<br />   glLoadIdentity();<br /><br />   glTexEnvf(GL_TEXTURE_ENV, GL_TEXTURE_ENV_MODE, GL_DECAL);<br /><br />   return 1;<br />   <br />}<br /></code></dd></dl><br /><br />Si alguien tiene alguna idea, bienvenida sea, aunque sea otro método diferente.<p>Estadísticas: Publicado por <a href="http://losersjuegos.com.ar/foro/memberlist.php?mode=viewprofile&amp;u=2334">baigos</a> — Jue Feb 17, 2011 6:19 pm</p><hr />
]]></content>
</entry>
</feed>