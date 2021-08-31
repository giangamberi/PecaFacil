<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="theme-color" content="#00688B">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/padrao.css">
  
  <link rel="stylesheet" href="./css/bootstrap-4.5.3-dist/css/bootstrap2.min.css" >
<link rel="stylesheet" href="./css/bootstrap-4.5.3-dist/css/bootstrap.css" >
  <link rel="stylesheet" href="./css/w3.css">
  <link rel="stylesheet"  href="./css/icones/font-awesome/css/font-awesome.min.css" media="screen"  >
  <title>Peça Facil</title>

  <link rel="shortcut icon" href="./img/icon.png">
</head>

<body>

<ul class="nav justify-content-end">
    
<H3 class="title">Peça Facil</H3>
<br>
<a href="index.php"><img src="./img/icon.png" width="40" style="text-align: center;margin-top: 6px;margin-left:5px;margin-right:10px" height="40"  ></a>
</ul>
<?php

include('./php/pass.php');
include('./php/funcao_geral.php');




if (!isset($_GET["view"])) {
  $_GET["view"] = "";
}
 $view = $_GET["view"];

if($view != ""){
  include "./views/$view.php";
}else{
  include('./views/home.php');
}

?>

</body>
<script src="./css/js/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="./css/js/popper.min.js"  crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="./css/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="./css/js/jquery-1.12.4.js"></script>
    <script src="./css/js/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>