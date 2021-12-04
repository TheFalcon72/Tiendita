<?php
  $producto_obtension = $producto->getDatos();
?>

<!--Mas Vendido-->
<section id="mejores-ventas">
  <div class="container py-5">
    <h4 class="font-timmana font-size-20">Mas Vendido</h4>
    <hr>
    <!--Carrusel de lo mas vendido-->
    <div class="owl-carousel owl-theme">
      <?php foreach ($producto_obtension as $articulo){ ?>
      <div class="item py-2">
        <div class="product font-roboto">
          <!--Imagen de Producto-->
          <a href="<?php printf('%s?ProductoID=%s','Producto.php', $articulo['ProductoID']);?>"><img src="<?php echo $articulo['ProductoImagen'] ??"./assets/productos/1.pg"?>" alt="Producto 1"></a>
          <div class="text-center">
            <!--Nombre de Producto-->
            <h6><?php echo $articulo['ProductoNombre'] ??"Desconosido"?></h6>
            <!--Rating en Nekooooooos!!!!!-->
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-cat"></i></span>
              <span><i class="fas fa-cat"></i></span>
              <span><i class="fas fa-cat"></i></span>
              <span><i class="fas fa-cat"></i></span>
              <span><i class="far fa-circle"></i></span>
            </div>
            <!--Precio-->
            <div class="price py-2">
            <span>$<?php echo $articulo['ProductoPrecio'] ??"0"?></span>
            </div>
            <button type="submit" class="btn btn-success font-size-12">Agregar a Carrito</button>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>