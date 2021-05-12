<!DOCTYPE html>
<html lang="en">
<?php
   include "_includes/header.php"

   ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Login Realizado com sucesso!</h1>
</body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="ny.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>The atmosphere in New York is lorem ipsum.</p>
      </div>
    </div>

    <div class="item">
      <img src="assets/img/portfolio/Hmb.jpg" alt="Hamburguer">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago - A night we won't forget.</p>
      </div>
    </div>

    <div class="item">
      <img src="la.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>LA</h3>
        <p>Even though the traffic was a mess, we had the best time.</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h1>Faça Seu Pedido!</h1>

<form action="/action_page.php">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> X-Burguer</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> X-Tudo</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> X-Bacon</label><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
</html>