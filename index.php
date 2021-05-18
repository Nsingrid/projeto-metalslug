<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Metal Slug</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<?php
  $currentPage = 'Página inicial';
?>

<body>
  <!-- Navigation -->
  <?php include('./src/header/header.php'); ?>

  <section class="hero">
    <div class="container">
      <div class="row py-5">
        <div class="col-lg-6 py-5">
          <h6>RANKEAMENTO</h6>
          <h1 class="pt-2">Provavelmente um titulo bacana!</h1>
          <p class="pt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
            invidunt ut labore
            et dolore magna aliquyam erat.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="cards-links">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pb-5">
          <div class="card">
            <div class="card-img-top card-left"></div>
            <div class="card-body">
              <h5 class="card-title">Score Ranking</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor invidunt ut.</p>
              <a href="./src/score_rank/score_rank.php" class="btn btn-primary">Ver ranking</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-5">
          <div class="card">
            <div class="card-img-top card-right"></div>
            <div class="card-body">
              <h5 class="card-title">Time Ranking</h5>
              <p class="card-text">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                gubergren, no sea takimata sanctus est.</p>
              <a href="./src/time_rank/time_rank.php" class="btn btn-primary">Ver ranking</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sobre-nos">
    <div class="container">
      <div class="row py-5">
        <div class="col-md-6">
          <h2>Sobre o projeto</h2>
          <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et dolore magna aliquyam erat, sed diam voluptua.
          </p>
          <p>
            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
            sanctus est.
          </p>
          <p>
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
            duo dolores et ea rebum.
          </p>
        </div>
        <div class="col-md-6 align-self-center">
          <img src="./imgs/image.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <?php include('./src/footer/footer.php'); ?>
</body>

</html>