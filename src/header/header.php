<header>
  <nav class="navbar navbar-expand-lg navbar-dark static-top">
    <div class="container">
      <a class="mt-1" href="/">
        <p class="p-0 m-0 logo">Metal Slug</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          $urls = array(
            "Página inicial" => "/",
            "Tempo" => "/src/time_rank/time_rank.php",
            "Score" => "/src/score_rank/score_rank.php"
          );

          foreach ($urls as $name => $url) {
            print '<li class="nav-item"><a class="nav-link'.(($currentPage === $name) ? " active" : "\"").
              ' href="'.$url.'">'.$name.'</a></li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>