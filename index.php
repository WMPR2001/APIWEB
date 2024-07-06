<?php
include_once('BaseDatos/conexion1.php');

$conexion = new Cconexion();
$conn = $conexion->Cconexionbd();

// Número de registros por página
$registrosPorPagina = 20;

// Obtener el número de página actual desde la URL
$paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Calcular el desplazamiento (offset) para la consulta
$offset = ($paginaActual - 1) * $registrosPorPagina;

// Consulta SQL con TOP y OFFSET para obtener los registros de la página actual
$sql = "SELECT * FROM (
            SELECT ROW_NUMBER() OVER (ORDER BY idProducto) AS RowNum, *
            FROM Productos
        ) AS RowConstrainedResult
        WHERE RowNum > $offset
        ORDER BY RowNum
        OFFSET 0 ROWS
        FETCH NEXT $registrosPorPagina ROWS ONLY";
$stmt = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
<script src="java.js"></script>
<!--<link href="baner/css/styles.css" rel="stylesheet" />-->
        <title>CybertGuard - Shop</title>

        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>


        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Cybert Guard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  



<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!--slide end--> 
        <!-- Section-->






<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            if ($stmt->rowCount() < 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  ?>
                  <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder"><?php echo htmlspecialchars($row['Descripcion']); ?></h5>
                                  <!-- Product price-->
                                  <?php echo "$ ",htmlspecialchars($row['Precio']); ?> <!-- Asumiendo que tienes una columna 'Precio' -->
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                             
                          <div class="text-center">
  <a class="btn btn-outline-dark mt-auto" href="ver_Prod/index.php?id=<?php echo $row['idProducto']; ?>">View options</a>
</div>
                          
                          
                          </div>
                      </div>
                  </div>
                  <?php
                }
            } else {
                echo "No se encontraron productos.";
            }
            ?>
        </div>

        <!-- Paginación -->
        <div class="row">
            <div class="col-12 text-center">
                <?php
                // Consulta para obtener el total de registros
                $sqlTotal = "SELECT COUNT(*) AS total FROM Productos";
                $stmtTotal = $conn->query($sqlTotal);
                $total = $stmtTotal->fetch(PDO::FETCH_ASSOC)['total'];

                // Calcular el número total de páginas
                $totalPaginas = ceil($total / $registrosPorPagina);

                // Enlaces de paginación
                echo "<nav aria-label='Paginación'>";
                echo "<ul class='pagination justify-content-center'>";

                // Enlace a la primera página
                echo "<li class='page-item" . ($paginaActual == 1 ? " disabled" : "") . "'>";
                echo "<a class='page-link' href='?pagina=1'>Primera</a>";
                echo "</li>";

                // Enlaces a las páginas anteriores
                $paginaAnterior = $paginaActual > 1 ? $paginaActual - 1 : 1;
                echo "<li class='page-item" . ($paginaActual == 1 ? " disabled" : "") . "'>";
                echo "<a class='page-link' href='?pagina=$paginaAnterior'>Anterior</a>";
                echo "</li>";

                // Enlaces a las páginas
                for ($pagina = 1; $pagina <= $totalPaginas; $pagina++) {
                    echo "<li class='page-item" . ($pagina == $paginaActual ? " active" : "") . "'>";
                    echo "<a class='page-link' href='?pagina=$pagina'>$pagina</a>";
                    echo "</li>";
                }

                // Enlaces a las páginas siguientes
                $paginaSiguiente = $paginaActual < $totalPaginas ? $paginaActual + 1 : $totalPaginas;
                echo "<li class='page-item" . ($paginaActual == $totalPaginas ? " disabled" : "") . "'>";
                echo "<a class='page-link' href='?pagina=$paginaSiguiente'>Siguiente</a>";
                echo "</li>";

                // Enlace a la última página
                echo "<li class='page-item" . ($paginaActual == $totalPaginas ? " disabled" : "") . "'>";
                echo "<a class='page-link' href='?pagina=$totalPaginas'>Última</a>";
                echo "</li>";

                echo "</ul>";
                echo "</nav>";
                ?>
            </div>
        </div>
    </div>
</section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
