<?php require_once("BaseModel.php") ?>

<?php
class ScoreModel extends BaseModel
{
  public int $Score = 0;

  public function __construct(int $id, string $name, int $score)
  {
    $this->Score = $score;
    parent::__construct($id, $name);
  }

  function getScore()
  {
    return $this->Score;
  }

  function setScore($score)
  {
    $this->Score = $score;
  }
}
?>