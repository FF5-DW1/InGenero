# In Género
## Proyecto final Factoria F5
## Introducción:
* 	Día de comienzo: 26 de junio.
* 	Día de presentación de proyectos: 28 de julio.
* 	Proyecto para un cliente el cual necesita amadrinar para estudios de teatro y actuación, el cual se realizan obras de teatro con los participantes.
   
* La entidad solicita la creación de una herramienta desde la cual se pueda administrar y gestionar los perfiles de las actrices y actores que forman parte del grupo de teatro de In Género.
 
* Por un lado, la aplicación será un escaparatepara el proyecto y para los integrantes del mismo, pero también deberá llevar un historial de las personas que pasan por el programa, así como de las actividades que se van realizando.
 
* Será necesario además crear un apartado para “madrinas y padrinos”, ya que se intenta que actrices y actores famosos seconviertan en “madrinas y padrinos” y se dejen acompañar en la última etapa decada participante en eventos en los que participen las madrinas y padrinos.


 ## Requisitos Técnicos
 
*	Trabajar bajo el marco Scrum.
*	Hacer un CRUD para las actrices y actores.
*	Hacer un CRUD para las madrinas y padrinos, que luego se irán vinculando con uno o más perfiles de InGénero.
*	Configurar diferentes usuarios: admin y usuario registrado.
*	Crear una conexión segura (Tokens, Auth, etc…).
*	Hacer un modelado de datos óptimo en Base de Datos.
*	Usar SoftDelete para no borrar definitivamente ningún usuario, así poder mantener un histórico completo. Preguntar al stakeholder si es necesario implementar.
*  Hacer Testing (Postman, Jest, Cypress, Phpunit, Codeception).
*	Crear un Admin.: persona encargada de In Género, capaz de acceder a los datos de todos l@s participantes y editar cualquier dato.
*	Generar un histórico de los participantes en el programa, así como el estado final de cada uno, indicando si aún está en el programa o en qué época estuvo, qué madrina o padrino tuvo asignado, a qué eventos han asistido, etc… 
* El administrador puede crear nuevos usuarios participantes, no se podrá apuntar cualquiera, sino que serán los admins los que añadan nuevos participantes y estos recibirán un email y configurarán sus datos y su perfil una vez creada la cuenta.



## Tabla de contenido - [Instalación](#instalación) 

        
* Composer : https://getcomposer.org/download/
* Instalación Siga estos pasos para configurar el proyecto en su máquina local.
  * Laravel 1. Clone el repositorio: ```git@github.com:FF5-DW1/InGenero.git ```

    * 2. Instale las dependencias de Laravel: ```composer install ```
         
* 3. Cree una copia del archivo `.env.example` y cámbiele el nombre a `.env`.
Luego, genere una clave de aplicación: ```bash cp .env.example .env php crafty key:generate ```
o Genera una clave de aplicación:
```php artisan key:generate```

* 4. Configure los ajustes de su base de datos en el archivo `.env`.
* 5. Ejecuta las migraciones y los seeders:
```php artisan migrate --seed```
* 6. Instala las dependencias de JavaScript:
```npm install```
* 7. Compila los assets de JavaScript y CSS:
```npm run dev```

 ## Fuentes
* Laravel: https://laravel.com
* Docker: https://www.docker.com
* Bootstrap CSS: https://getbootstrap.com/docs/4.0/getting-started/download/

 ## Organización y diseño
 * Metodología SCRUM
 * Trello
 * Figma


## Stacks
* HTML
* Bootstrap (CSS)
* MySQL
* Docker
* Node.js
* Laravel (PHP)
* JavaScript

## Desarrolladorxs

[Pablo](https://github.com/Khodac)

[Ivon](https://github.com/ivon4)

[Patricia](https://github.com/pgmascarini)

[Eduardo](https://github.com/educarmas)

[Sabina](https://github.com/Sjuniperus)
