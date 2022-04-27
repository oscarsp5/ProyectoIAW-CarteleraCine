<?php 

include('include_procesar_cookies.php');

?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sticky Footer Navbar Template · Bootstrap v5.1</title>


    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
<?php include('include_menu.php') ?>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    Esto es lo quenimporta en el index
  </div>
</main>

<?php include('include_mostrar_cookies.php') ?>

    <script src="js/bootstrap.min.js"></script>

      
  </body>
</html>
