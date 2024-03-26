<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>01 - Grid System - Boostrap Builder</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <style type="text/css">
    .main-menu {
      margin: 0;
    }

    .main-menu li {
      margin: 4px 25px;
      list-style: none;
    }

    .main-menu li a {
      padding: 4px 8px;
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="bg-danger">
    <!-- container-fluid -> 100% width !-->
    <div class="container">
      <div class="row">
        <div class="col-2">
          <h1><a href="#">LOGO</a></h1>
        </div>
        <div class="col-10 align-self-center">
          <nav>
            <ul class="d-flex justify-content-end main-menu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Quem Somos</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>



  <script src="_cdn/js/jquery.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>