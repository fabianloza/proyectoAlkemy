## Participantes del proyecto

### **Lorente Jorge - Monti Alen - Loza Fabian**

## Instalacion

1. Clonar el repositorio 
```
git clone https://github.com/fabianloza/proyectoAlkemy.git
```
2. Abrir una consola de comandos y posicionarse en la carpeta del proyecto e instalar dependencias con el comando
```
composer install
```
3. Generar las claves de passport
```
php artisan passport:install
```
4. iniciar `XAMPP` con apache y mysql
5. Tener creada una base de datos o crear una en [phpMyAdmin](http://localhost/phpmyadmin)
6. Dentro del proyecto, en la raiz crear un archivo de nombre `.env`, copiar el contenido del archivo `.env.example` y completar con los datos de su base de datos
7. Levantar el servidor de laravel
```
php artisan serve
```
8. Crear las tablas y poblarlas con datos en la base de datos
```
php artisan migrate
```
```
php artisan db:seed
```
## Pruebas desde Postman

1. Acceder a `/register` y crear un usuario llenando los campos `nombre`, `email`, `contrasena`, `telefono` (formato JSON)
2. Acceder a `/login` y colocar `email` y `contrasena` (formato JSON)
3. Acceder a `/carritos` para crear un carrito con el usuario logueado
4. Acceder a `/pedidos` para crear un pedido al carrito actual con el producto elegido
5. Agregar pedidos y verificar que el importe del carrito sea correcto
6. Acceder a `/carritos/listadoProductos` para ver todos los productos
7. Acceder a `/ordenes(store)` para generar una orden con el carrito del usuario actual
8. Verificar que el carrito de la orden se encuentra finalizado

[Link del postman](https://www.postman.com/alkemyphp/workspace/publiclaraveltest/collection/30159349-c5c27233-e3d5-4a1d-9d3f-b172e72c0c78?action=share&creator=30159349&active-environment=30159349-2b796bf4-736b-4768-82a2-b1ca81af6863)