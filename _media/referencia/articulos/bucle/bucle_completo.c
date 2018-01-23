#include <SDL/SDL.h>
#include <stdio.h>

struct spelota
{
	int x;
	int y;
	int dx;
	int dy;
	SDL_Surface *ima;
};


int init (SDL_Surface **screen);
void procesar_eventos (int *salir);
void imprimir (SDL_Surface *screen, struct spelota pelota);
int iniciar_pelota (struct spelota *pelota);
void actualizar(struct spelota *pelota);
void imprimir_fps (int frames);


int main (void)
{
	SDL_Surface *screen;
	int salir = 0;
	struct spelota pelota;
	int tl; // ultimo tick logico y grafico
	int t_fps; // valor de tick cuando se informó los cuadros por segundo
	int t; //tick actual;
	int rep;
	int i;
	int frames = 0;
	
	if (init(&screen))
		return 1;

	if (iniciar_pelota(&pelota))
		return 1;
	
	tl = t_fps = SDL_GetTicks();
	
	while (! salir) {

		t = SDL_GetTicks();
		
		if (t - tl >= 10) {

			rep = (t - tl) / 10;

			for (i=0; i<rep; i++)
				actualizar(&pelota);
			
			tl += 10*rep;

			imprimir(screen, pelota);
			frames ++;

			// pasó un segundo
			// debe informar el rendimiento (fps)

			if (t - t_fps >= 1000) {
				imprimir_fps(frames);
				frames = 0;
				t_fps += 1000;
			}
		
			procesar_eventos(&salir);
		}
		else
			SDL_Delay( 10 - (t-tl) );
		
	}
	
	
	SDL_Quit();
	return 0;
}


/*
 * Inicializa la biblioteca SDL y genera la pantalla principal
 */
int init (SDL_Surface **screen)
{
	if (SDL_Init(SDL_INIT_VIDEO) == -1) {
		printf("Error: %s\n", SDL_GetError());
		return 1;
	}

	*screen = SDL_SetVideoMode(320, 200, 16, SDL_DOUBLEBUF | SDL_HWSURFACE);
	
	if (screen == NULL) {
		printf("Error: %s\n", SDL_GetError());
		return 1;
	}
	
	SDL_WM_SetCaption("Bucle completo : FPS (espere)", NULL);
	
	return 0;
}


/*
 * Informa si el programa debe terminar
 */
void procesar_eventos (int *salir)
{
	SDL_Event event;

	while (SDL_PollEvent(&event)) {
		
		if (event.type == SDL_QUIT)
			*salir = 1;

		if (event.type == SDL_KEYDOWN)
			*salir = 1;
	}
}

/*
 * Imprime la ventana
 */
void imprimir (SDL_Surface *screen, struct spelota pelota)
{
	SDL_Rect dst;
	
	dst.x = pelota.x;
	dst.y = pelota.y;

	SDL_FillRect(screen, NULL, SDL_MapRGB(screen->format, 150, 150, 150));
	SDL_BlitSurface(pelota.ima, NULL, screen, &dst);
	
	SDL_Flip(screen);
}


/*
 * Genera el objeto pelota
 */
int iniciar_pelota (struct spelota *pelota)
{
	pelota->x = 150;
	pelota->y = 100;
	pelota->dx = 1;
	pelota->dy = 1;

	pelota->ima = SDL_LoadBMP("ima.bmp");

	if (pelota->ima == NULL) {
		printf("Error al cargar imagen: %s\n", SDL_GetError());
		return 1;
	}

	return 0;
}


/*
 * Modifica la posicion de la pelota
 */
void actualizar(struct spelota *pelota)
{
	pelota->x += pelota->dx;
	pelota->y += pelota->dy;

	if (pelota->x > 320 - 32)
		pelota->dx = -1;

	if (pelota->y > 200 - 32)
		pelota->dy = -1;

	if (pelota->x < 0)
		pelota->dx = 1;

	if (pelota->y < 0)
		pelota->dy = 1;
}



void imprimir_fps (int frames)
{
	char cadena[50];

	sprintf(cadena, "Bucle completo : FPS %d", frames);
	
	SDL_WM_SetCaption(cadena, NULL);
}
