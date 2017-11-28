<?php

class Edu extends Model
{

  private $id;
  public $name;
  public $user_id;
  public $type;

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
    $this->id = $row['id'];
    $this->name = $row['name'];
    $this->user_id = $row['user_id'];
    $this->type = $row['type'];
  }
}