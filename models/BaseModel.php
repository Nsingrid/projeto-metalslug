<?php
abstract class BaseModel
{
  public int $Id;
  public string $Name;

  public function __construct(int $id, string $name)
  {
    $this->Id = $id;
    $this->Name = $name;
  }

  public function getId(): int
  {
    return $this->Id;
  }

  public function setId(int $id)
  {
    $this->Id = $id;
  }

  public function getName(): string
  {
    return $this->Name;
  }

  public function setName(string $name)
  {
    $this->Name = $name;
  }
}
