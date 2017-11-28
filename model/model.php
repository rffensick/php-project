<?php
/**
 * Created by PhpStorm.
 * User: fromkeks
 * Date: 11/27/17
 * Time: 3:32 PM
 */


abstract class Model
{
  static public function getAll()
  {
    $database = new DataBase();
    $database->prepare('SELECT * FROM ' . static::tableName());
    $database->execute();
    $usersData = $database->resultset();


    $users = [];
    foreach ($usersData as $row) {
      $user = new static();
      $user->fillData($row);
      $users[] = $user;
    }

    return $users;
  }

  static public function getOne()
  {
  }

  static public function update()
  {
  }

  /**
   * get table name
   *
   * @return string
   */
  abstract static public function tableName();

  abstract protected function fillData($row);

}