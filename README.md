# Formulario Gym

Este proyecto es una aplicación web sencilla para la gestión de inscripciones a un gimnasio. Utiliza PHP para la lógica del backend y HTML/CSS para la interfaz de usuario. El flujo de la aplicación y el uso de Docker están pensados para facilitar el desarrollo y despliegue en cualquier entorno.

## Flujo de la Aplicación

1. **Página de Inicio** (`src/index.html`):
   - El usuario accede a un formulario donde ingresa sus datos personales para inscribirse en el gimnasio.
   - Al enviar el formulario, los datos se procesan y se redirige al usuario a una página de bienvenida.

2. **Procesamiento y Bienvenida** (`src/bienvenida.php`):
   - El backend PHP recibe los datos del formulario, los valida y muestra un mensaje personalizado de bienvenida al usuario.

3. **Estilos** (`src/styles.css`):
   - Se aplican estilos para mejorar la experiencia visual del usuario.

## Uso de Docker para el Equipo de Desarrollo

Docker permite que todo el equipo trabaje en un entorno idéntico, evitando problemas de configuración local. A continuación, se describen los comandos y el flujo recomendado:


### 1. Construir y Levantar el Entorno

```bash
docker compose up --build
```
- Este comando construye las imágenes necesarias (si es la primera vez o hay cambios en el Dockerfile) y levanta los contenedores definidos en `docker-compose.yml`.

### 1.1. Probar la aplicación en el navegador

Una vez que el entorno esté levantado, abre tu navegador y accede a:

```
http://localhost
```

La aplicación está disponible en el puerto 80, por lo que no es necesario especificar el puerto en la URL. Aquí podrás ver el formulario de inscripción y probar el flujo completo de la aplicación.


### 2. Detener el Entorno

```bash
docker compose down
```
- Detiene y elimina los contenedores, redes y volúmenes creados por Docker Compose.

### 2.1. Volver a Levantar el Entorno en Otro Momento

Cuando quieras volver a trabajar en el proyecto después de haberlo detenido con `docker compose down`, **no es necesario usar siempre `--build`**.

Usa normalmente:

```bash
docker compose up
```

Esto levantará el entorno usando las imágenes ya construidas.

Solo usa `--build` si realizaste cambios en el `Dockerfile` o en las dependencias y necesitas reconstruir la imagen:

```bash
docker compose up --build
```

### 3. Ver Logs de la Aplicación

```bash
docker compose logs
```
- Permite ver los registros de los servicios para depuración.

### 4. Acceder a un Contenedor en Ejecución

```bash
docker compose exec <servicio> bash
```
- Reemplaza `<servicio>` por el nombre del servicio definido en `docker-compose.yml` (por ejemplo, `web` o `php`).
- Permite ejecutar comandos dentro del contenedor, útil para depuración avanzada.

## Buenas Prácticas
- Realizar cambios en el código fuente dentro de la carpeta `src/`.
- Usar siempre Docker para pruebas y desarrollo, evitando diferencias entre entornos locales.
- Consultar los logs ante cualquier error.

## Requisitos Previos
- Tener instalado Docker y Docker Compose en el equipo.

---

¡Listo! Con este flujo y comandos, el equipo puede desarrollar, probar y desplegar la aplicación de manera eficiente y consistente.