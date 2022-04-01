<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Educação Publica</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <h3>
              Educação pública
            </h3>
            <span> Santo André</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>




<?php

$indexActive = ($_SERVER["REQUEST_URI"] == "/index.php") ? "active" : "";
$contatoActive = ($_SERVER["REQUEST_URI"] == "/contato.php") ? "active" : "";
$autoresActive = (substr ($_SERVER["REQUEST_URI"], 0, 8) == "/autores") ? "active" : "";
$artigosActive = (substr ($_SERVER["REQUEST_URI"], 0, 8) == "/artigos") ? "active" : "";
$olivroActive = ($_SERVER["REQUEST_URI"] == "/olivro.php") ? "active" : "";

$indexSronly = ($_SERVER["REQUEST_URI"] == "/index.php") ? "<span class=\"sr-only\">(current)</span>" : "";
$autoreSronly = ($_SERVER["REQUEST_URI"] == "/autores.php") ? "<span class=\"sr-only\">(current)</span>": "";
$artigoSronly = ($_SERVER["REQUEST_URI"] == "/artigos.php") ? "<span class=\"sr-only\">(current)</span>": "";
$contatoSronly = ($_SERVER["REQUEST_URI"] == "/contato.php") ? "<span class=\"sr-only\">(current)</span>": "";
$olivroSronly = ($_SERVER["REQUEST_URI"] == "/olivro.php") ? "<span class=\"sr-only\">(current)</span>": "";
?>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            
          <ul class="navbar-nav  ml-auto">
              <li class="nav-item <?=$indexActive?>">
                <a class="nav-link" href="/index.php"> Sobre <?=$indexSronly?> </a>
              </li>
              <li class="nav-item <?=$olivroActive?>">
                <a class="nav-link" href="/olivro.php"> Como tudo começa <?=$olivroSronly?> </a>
              </li>
              <li class="nav-item <?=$autoresActive?>">
                <a class="nav-link" href="/autores.php"> Autores  <?=$autoreSronly?></a>
              </li>
              <li class="nav-item <?=$artigosActive?>">
                <a class="nav-link" href="/artigos.php"> Artigos <?=$artigoSronly?></a>
              </li>
              <li class="nav-item <?=$contatoActive?>">
                <a class="nav-link" href="/contato.php">Entre em contato <?=$contatoSronly?></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>