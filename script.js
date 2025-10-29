let cantidad = 0;

function agregarAlCarrito() {
  cantidad++;
  document.getElementById("cantidad-carrito").textContent = cantidad;
}
fetch('https://tuservidor.com/api/productos.php')
  .then(response => response.json())
  .then(data => {
    console.log(data);
  });



