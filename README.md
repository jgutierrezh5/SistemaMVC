# Sistema MVC

Proyecto académico para demostrar la arquitectura Modelo-Vista-Controlador (MVC) y el uso de Bootstrap en una aplicación web.

## Módulos

- Marcas
- Productos
- Clientes

## Tecnologías utilizadas

- PHP
- MySQL
- HTML
- Bootstrap 5
- PDO

## Estructura

El proyecto está separado en:

- `modelo/`: clases encargadas de los datos y operaciones con la base de datos.
- `vista/`: interfaces que observa el usuario.
- `controlador/`: recibe las peticiones y comunica el modelo con la vista.
- `config/`: configuración y conexión a la base de datos.
- `database/`: script para crear la base de datos.

## Instalación

1. Copiar la carpeta `SistemaMVC` dentro de `htdocs` si se utiliza XAMPP.
2. Crear la base de datos ejecutando `database/sistema_mvc.sql` en MySQL.
3. Revisar usuario y contraseña de MySQL en `config/config.php`.
4. Abrir en el navegador:

`http://localhost/SistemaMVC/`

## Video de demostración

Agregar aquí el enlace del video de máximo 2 minutos antes de entregar.

## Autor

Proyecto realizado para práctica académica de Programación.
