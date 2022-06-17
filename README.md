## Información general

  ### ¿De qué se trata?

  **Cuatro en línea** es un proyecto de la materia Adaptación al Ambiente de Trabajo. Consiste en el clásico juego de cuatro en línea en el que dos jugadores compiten para ver quién es el primero en hacer una línea de cuatro "fichas" ininterrumpida.

  ### Tecnologías

  Está desarrollado en los lenguajes PHP y Blade, utilizando el framework de Laravel.

  ### Objetivo

  El objetivo del proyecto es ir mejorando las funciones del juego hasta llegar a un resultado satisfactorio y único, partiendo de la base establecida por la cátedra.

## Requerimientos

  DDEV es una herramienta de software libre que facilita la puesta en marcha de entornos de desarrollo PHP.

  Para levantar el proyecto, se recomienda instalar DDEV. Si nunca ha trabajado con este software, tenga en cuenta que deberá instalar también una plataforma que maneje contenedores virtualizados. Siga las instrucciones de instalación detalladas en [esta página](https://ddev.readthedocs.io/) correspondientes a su sistema operativo.

## Instalación y preparación

  Habiendo clonado/descargado los archivos del proyecto, siga los siguientes pasos en la consola para ponerlo en marcha y funcionando.

  1. Diríjase al directorio raíz o carpeta del proyecto (`cuatroenlinea`).

  2. Configure el proyecto con `ddev config`. Se le preguntarán el nombre del proyecto, la ubicación del directorio raíz del proyecto y el tipo de proyecto. No es necesario ingresar nada, la configuración será detectada.

  3. Es necesario instalar Composer, un sistema de gestión de paquetes, para incorporar las dependencias y librerías requeridas. Instálelo ingresando: `ddev composer install`.

  4. Para que funcione la aplicación, se requiere el archivo de configuración `.env`. El proyecto ya trae esta configuración en el archivo `.env.example`. Para aplicar esta configuración, copie el archivo `.env.example` en el mismo directorio, cambiándole el nombre a `.env`.

  5. Por último, va a necesitar crear una llave de aplicación para la seguridad de la sesión. Ingrese `ddev php artisan key:generate` para generarla.

  6. La aplicación está lista y funcionando. Ingrese `ddev launch` para abrirla en el navegador o utilice el URL proporcionado cuando se ingresó `ddev start`. Luego de haber configurado todo, lo único que necesitará hacer para levantar el proyecto será `ddev start`. Para parar el proyecto, ingrese `ddev stop`. 

## Cómo jugar

  Por ahora, para acceder al juego, añada `/jugar/#` al final del URL en el navegador, reemplazando el `#` por cualquier número del 1 al 7 (representan las columnas del juego). Podrá ver el tablero de juego y, para ingresar fichas sólo deberá clickear arriba de la columna deseada. El turno del jugador será indicado por el color del círculo que aparece al pasar el cursor por encima, que coincidirá con el color de las fichas ya colocadas.