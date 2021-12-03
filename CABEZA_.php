<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-with,initial-scale=1.0">
        <title>Tiendita</title>

        <!--Librerias-->
        <!--CNDs-->
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!--Owl Carousel-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        

        <!--Iconos-->
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--Estilos Perosnales-->
        <link rel="stylesheet" href="Estilo.css">

        
        <?php
          //Conectrar a Base de Datos
          require ('ConexionBD.php');
        ?>

        
    </head>

    <body>
        <!--Encabesado-->
        <header id="encabezado">
            <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
                <div class="font-rale font-size-14">
                    <a href="#" class="px-3 border-right border-reft text-dark">Iniciar Sesion</a>
                </div>
            </div>

            <!--Barra de Navegacion-->
            <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Tiendita de Dany</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-roboto">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Categorias <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Productos <i class="fas fa-chevron-down"></i></a>
                      </li>
                    </ul>
                    <!--Carrito-->
                    <form action="#">
                      <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                      </a>
                    </form>
                  </div>
                </div>
              </nav>
        </header>

        <!--Contenido-->
        <main id="cuerpazo">
