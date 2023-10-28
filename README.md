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
<div class="postman-run-button"
data-postman-action="collection/fork"
data-postman-visibility="public"
data-postman-var-1="30159349-c5c27233-e3d5-4a1d-9d3f-b172e72c0c78"
data-postman-collection-url="entityId=30159349-c5c27233-e3d5-4a1d-9d3f-b172e72c0c78&entityType=collection&workspaceId=5b06d36a-6a81-4929-b233-c0454e81faca"
data-postman-param="env%5BNew%20Environment%5D=W3sia2V5IjoidXJsIiwidmFsdWUiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiLCJlbmFibGVkIjp0cnVlLCJ0eXBlIjoiZGVmYXVsdCIsInNlc3Npb25WYWx1ZSI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCIsInNlc3Npb25JbmRleCI6MH0seyJrZXkiOiJ0b2tlbiIsInZhbHVlIjoiIiwiZW5hYmxlZCI6dHJ1ZSwidHlwZSI6ImRlZmF1bHQiLCJzZXNzaW9uVmFsdWUiOiIiLCJzZXNzaW9uSW5kZXgiOjF9XQ=="></div>
<script type="text/javascript">
  (function (p,o,s,t,m,a,n) {
    !p[s] && (p[s] = function () { (p[t] || (p[t] = [])).push(arguments); });
    !o.getElementById(s+t) && o.getElementsByTagName("head")[0].appendChild((
      (n = o.createElement("script")),
      (n.id = s+t), (n.async = 1), (n.src = m), n
    ));
  }(window, document, "_pm", "PostmanRunObject", "https://run.pstmn.io/button.js"));
</script>