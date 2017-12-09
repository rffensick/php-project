<?php

class Edu extends Model
{

  private $id;
  public $user_id;
  public $place;
  public $type;
  public $date_from;
  public $date_to;

  /**
   * get table name
   *
   * @return string
   */
  static public function tableName()
  {
    return 'edu';
  }

  protected function fillData($row)
  {
    $this->id           = $row['id'];
    $this->user_id      = $row['user_id'];
    $this->place        = $row['place'];
    $this->type         = $row['type'];
    $this->date_from    = $row['date_from'];
    $this->date_to      = $row['date_to'];
  }
}