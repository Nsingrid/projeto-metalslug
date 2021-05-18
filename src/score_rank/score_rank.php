<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Metal Slug</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script language="javascript">
    $(document).ready(() => {
      $.ajax({
        url: "score_rank_service.php",
        type: "get", //request type,
        dataType: "json",
        success: function(result) {
          $('#table_score_rank tbody').empty();

          $.each(result, (index, value) => {
            $("#table_score_rank tbody").append(
                "<tr>" +
                `<td scope='row' class='table-radius-left'>${value.Name}</td>` +
                `<td class='table-radius-right'>${value.Score}</td>` +
                "</tr>"
            );
          });
        }
      });
    });
  </script>
</head>

<?php $currentPage = "Score"; ?>

<?php require_once("../../models/ScoreModel.php") ?>

<body>
  <!-- Navigation -->
  <?php include('../header/header.php'); ?>

  <section class="score score-rank">
    <div class="container">
      <div class="row py-5">
        <div class="col-md-8">
          <h6>SCORE RANKING</h6>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et dolore magna aliquyam erat.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md">
          <table class="table table-hover" id="table_score_rank">
            <thead>
              <tr>
                <th width="85%" scope="col" class="table-radius-left">Usuário</th>
                <th scope="col" class="table-radius-right">Score</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row" class="table-radius-left">Mark</td>
                <td class="table-radius-right">2.574.541.859</td>
              </tr>
              <tr>
                <td scope="row" class="table-radius-left">Jacob</td>
                <td class="table-radius-right">1.235.448.955</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-8">
          <h2>Como funciona o score?</h2>
          <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua.
          </p>
          <p>
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
            duo dolores et ea rebum.
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php include('../footer/footer.php'); ?>
</body>

</html>