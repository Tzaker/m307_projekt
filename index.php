<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Vidicted Videoverleih</title>
    <link rel="stylesheet" href="public/css/app.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add">Ausleihe erfassen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="edit">Ausleihe bearbeiten</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show">Ausleihen anzeigen</a>
      </li>
    </ul>
  </div>
</nav>

<?php

require 'core/bootstrap.php';

require 'routes.php';

$uri = $_GET['uri'] ?? '';

require $router->parse($uri);

?>

<script src="public/js/app.js"></script>
</body>
</html>