<!DOCTYPE html>
<html>
<head>
	 <link href=" <?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
   <style> 
    .h4{

        collor: #fff;
    }
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container" style ="color:bar">
      <a class="navbar-brand" href="#">Artsport</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"> <?php echo $name?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php base_url('index.php/login/deslogar')?>">Contratar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav">
          <li class="nav-item active">
            <a style = "color:white;">Olá <?php echo "$variavel |"?></a>
          </li>
          <li class="nav-item active">
          <a style = "color:white;" href="<?php echo base_url('index.php/login/deslogar')?>"> | Deslogar<a>
          </li>
    </div>
  </nav>
