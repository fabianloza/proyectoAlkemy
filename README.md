Prueba simple para probar la api

1. Clonar el repositorio
2. En cmd posicionarse en la carpeta del proyecto
3. Correr "composer install" para instalar todas las dependencias
4. Correr "php artisan passport:install" para generar las claves de passport
5. iniciar xamp con apache y mysql
6. Correr "php artisan serve" para levantar el contexto de laravel
7. Desde postman
    a. acceder a /register y despues a /login con la información del usuario
    b. /carritos para crear un carrito con el usuario logueado
    c. /pedidos para crear un pedido al carrito actual con el producto elegido
    e. agregar pedidos y verificar que el importe del carrito sea correcto
    d. /carritos/listado para ver todos los productos
    f. /ordenes para generar una orden con el carrito del usuario actual
    d. Verificar que el carrito de la orden se encuentra finalizado

link del postman:
https://www.postman.com/alkemyphp/workspace/publiclaraveltest/collection/30159349-c5c27233-e3d5-4a1d-9d3f-b172e72c0c78?action=share&creator=30159349&active-environment=30159349-2b796bf4-736b-4768-82a2-b1ca81af6863