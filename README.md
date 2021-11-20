<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Creación de tablas desde Sistema.

Tablas creadas con su respectiva migración:

- Tabla de artículos
- Tabla de géneros
- Tabla pivote artículo_genero
- Tabla comentarios

## Creación de datos de prueba o catálogos.

- ArticuloFactory: Genera datos aleatorios para el articulo desde la librería faker.
- ArticuloGeneroSeeder: Llena la tabla de articulo_genero con datos para que los artículos generados desde el factory tengan géneros asignados desde un principio.
- ArticuloSeeder: Genera artículos con datos asignados por mí mismo.
- GeneroSeeder: Genera los géneros los cuales serán asignados a los artículos en una relación muchos a muchos.
- DatabaseSeeder: Se llama al user_factory para generar usuarios de prueba, así como generar un usuario tipo administrador y un tipo usuario con datos asignados por mí.

## Implementar borrado lógico de registros.

Se utilizan el softDelete en mi modelo artículo, de esta manera no desaparece de todo el articulo al borrarlo.

### Registro o creación de cuenta de usuario y autenticación.

Los usuarios tienen la oportunidad de hacer login en la plataforma y sus datos se guardan en la tabla user. El sistema de usuarios funciona mediante Jetstream.

## Restringir, permitir o modificar el comportamiento, opciones o acciones en funciones al tipo de usuario o condiciones.

Los usuarios que no son tipo administrador tienen restringido la creación, actualización o eliminación de artículos, por otro lado, el usuario administrador tiene el permiso de realizar todas estas opciones.
Los usuarios solo pueden eliminar los comentarios que ellos mismos hayan creado.

## Validación de formularios.

Los formularios de creación y actualización de artículos están validados, así como el formulario para generar un comentario. Estos formularios muestran mensajes de error en caso de algún dato erróneo.

## Tema responsivo.

Se utilizo una plantilla responsiva, así como elementos del kit de herramientas de css Bootstrap. En la pantalla principal se muestra la opción de realizar un logout para salir del sistema. Así como menús de navegación y breadcrumbs para una fácil navegación.

## Uso de ORM.

Se utilizó Eloquent para hacer las consultas, creacion y actualizacion a la base de datos mediante los modelos necesarios (artículos, géneros, comentarios).

## CRUD.

El controlador del artículo es un controller de tipo resuorce en el cual se pueden realizar las operaciones de creación, lectura, actualización y borrado de los artículos. 

## Archivos.

Se implemento la opción de subir una fotografía para el artículo, esta misma se muestra y lista en varias listas por ejemplo para mostrar todos los artículos, así como mostrar uno solo.

## Relaciones.

- Se implemento la relación uno a muchos entre el articulo y los comentarios.
- Se implemento la relación muchos a muchos entre los artículos (discos de música) y los géneros (musicales).

## Enviar correo electrónico.

Se envía un correo de verificación al usuario al momento de registrarse en la plataforma.

## Registro con GitHub.

Se implemento el registro de usurarios con la plataforma GitHub.

## License.

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
