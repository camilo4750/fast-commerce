<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Fast Commerce

Aplicacion que contiene el backEnd y frontEnd de Fast commerce

## Arquitectura

- Se implementan metodologías utilizando los patrones Service y Repository, desacoplando la lógica de negocio y el acceso a datos mediante el uso de interfaces,
  facilitando así la mantenibilidad, escalabilidad y pruebas del sistema.
- Para el desarrollo se aplica una arquitectura en capas
- Para facilitar la configuración del entorno, asegurar la portabilidad, se utilizó Docker como herramienta de virtualización ligera.
```plaintext
Fast-commerce/
│
├── app/
│   ├── Dto/                     # Objetos de transferencia de datos (Data Transfer Objects)
│   ├── Entities/                # Entidades del dominio
│   ├── Exceptions/              # Excepciones personalizadas
│   ├── Http/
│   │   └── Controllers/         # Controladores HTTP
│   ├── Interfaces/
│   │   ├── Repositories/        # Interfaces para los Repositorios
│   │   └── Services/            # Interfaces para los Servicios
│   ├── Mappers/                 # Mapeadores de datos (DTO)
│   ├── Repository/              # Implementaciones de Repositorios
│   └── Services/                # Implementaciones de Servicios
│
└── tests/
    ├── Feature/                 # Pruebas funcionales de alto nivel
    ├── Integration/             # Pruebas de integración
    │   ├── Repositories/        # Pruebas específicas de Repositorios
    │   └── Services/            # Pruebas específicas de Servicios
```
  
- Se definieron contenedores separados para los servicios clave: PHP (Laravel), PostgreSQL (Base de datos), Nginx o Apache (Servidor web)
- Toda la configuración se maneja a través de archivos Dockerfile y docker-compose.yml
```plaintext
.devops/
  └── docker/
      └── develop/
          ├── Dockerfile
          └── docker-compose.yml
```


## Technologias

- Larave/php
- Vue3.js
- Toast.js
- Bootstrap 5

## BD

Se usa una Base de Datos Postgres con la cual se realiza la consulta y persistencia de datos.

# ESpecificacion entorno

## Desarrollo
Para inicializar composer
```plaintext
docker exec -it fast-commerce composer install
 ```

Para desplegar el entorno ejecutar el comando
```plaintext
docker compose -f .devops/docker/develop/docker-compose.yml -f .devops/docker/develop/docker-compose.override.yml up
```

Para bajar contenedor Docker
```plaintext
sudo docker compose -f .devops/docker/develop/docker-compose.yml -f .devops/docker/develop/docker-compose.override.yml down
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
