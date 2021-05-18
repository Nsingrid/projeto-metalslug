<?php
  require_once('../../models/ScoreModel.php');

  $listTest = array();
  for ($i = 1; $i <= 10; $i++) {
    $listTest[] = new ScoreModel($i, "Nome Teste".$i, $i * $i);
  }

  $json = json_encode($listTest);

  echo $json;
?>