# InGenero
## Proyecto final Factoria F5
## Introducción:
* 	Día de comienzo: 26 de junio. Hemos presentado los proyectos a los coders y creado los equipos. 
* 	Día de presentación de proyectos: 28 de julio
* 	Proyecto para un cliente el cual se necesita amadrines para estudios de teatro y actuación, el cual se realizan obras de teatro con los participantes.
   
* La entidad solicita la creación de una herramienta desde la cual se pueda administrar y gestionar los perfiles de las actrices y actores que forman parte del grupo de teatro de InGénero.
 
* Por un lado, la aplicación será un escaparatepara el proyecto y para los integrantes del mismo, pero también deberá llevar un historial de las personas que pasan por el programa, así como de las actividades que se van realizando.
 
* Será necesario además crear un apartado para“madrinas y padrinos”, ya que se intenta que actrices y actores famosos seconviertan en “madrinas y padrinos” y se dejen acompañar en la última etapa decada participante en eventos en los que participen las madrinas y padrinos.
 ## Requisitos Técnicos
 
*	Se DEBE trabajar bajo el marco Scrum.
*	Se DEBE hacer un CRUD para las actrices y actores.
*	Se DEBE hacer un CRUD para las madrinas y padrinos, que luego se irán vinculando con uno o más perfiles de InGénero.
*	SE DEBEN configurar diferentes usuarios: admin y usuario registrado.
*	La conexión DEBE ser segura (Tokens, Auth, etc…).
*	Se DEBE hacer Testing (postman, Jest, Cypress, Phpunit, Codeception).
*	Se DEBE de hacer un modelado de datos óptimo en BD.
*	Se DEBE usar SoftDelete para no borrar definitivamente ningún usuario, así poder mantener un histórico completo. Preguntar al stakeholder si es necesario implementar.

*	Se DEBE realizar dos tipos de usuarios:
*	Admin.: encargados de InGenero, capaz de acceder a los datos de todos lxs participantes y editar cualquier dato.
*	Usuario: registrado como actor o actriz, puede ver y modificar sus datos.

*	DEBE generar un histórico de los participantes en el programa, así como el estado final de cada uno, indicando si aún está en el programa o en qué época estuvo, qué madrina o padrino tuvo asignado, a qué eventos han asistido, etc… 

* Además los administradores DEBERÁN poder crear nuevos usuarios participantes, no se podrá apuntar cualquiera, sino que serán los admins los que añadan nuevos participantes y estos recibirán un email y configurarán sus datos y su perfil una vez creada la cuenta.
Usuario: una vez registrado, DEBE poder añadir sus datos personales y todos los datos personales necesarios, así como las fotografías e incluso enlaces de video a YouTube con sus propias presentaciones.   

  


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

## Requisitos Previos
* PHP o Docker
* MySQL o XAMPP
* Composer o Docker
* Node.js
* Laravel
* JavaScript
## Desarrolladores

[Pablo](https://github.com/Khodac)

[Ivon](https://github.com/ivon4)

[Patricia](https://github.com/pgmascarini)

[Eduardo](https://github.com/educarmas)

[Sabina](https://github.com/Sjuniperus)
