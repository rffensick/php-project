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

  static public function getOne($id)
  {
      $database = new DataBase();
      $database->prepare('SELECT * FROM ' . static::tableName() . ' WHERE ID = ' . $id);
      $database->execute();
      $usersData = $database->resultset();

      return $usersData;
  }

  static public function delete($id)
  {
      $database = new DataBase();
      $database->prepare('DELETE FROM ' . static::tableName() . ' WHERE ID = ' . $id);
      $database->execute();
  }

//  static public function update($id, )
//  {
////      $database = new DataBase();
////      $database->prepare();
////      $database->execute();
////      $usersData = $database->resultset();
//  }

    static public function update($id, $fields)
    {
        $set = '';
        $x = 1;

        foreach($fields as $name => $value) {
            $set .= "{$name} = \"{$value}\"";
            if($x < count($fields)) {
                $set .= ',';
            }
            $x++;
        }

        $sql = "UPDATE " . static::tableName() . " SET {$set} WHERE id = {$id}";


        $database = new DataBase();
        $database->prepare($sql);
        $database->execute();
    }

    static public function add($fname, $sname, $lname = null, $dob)
    {
        $sql = "INSERT INTO " . static::tableName() . " (f_name, s_name, l_name, dob) VALUES (\"{$fname}\", \"{$sname}\", \"{$lname}\", \"{$dob}\")";

        $database = new DataBase();
        $database->prepare($sql);
        $database->execute();
    }

  /**
   * get table name
   *
   * @return string
   */
  abstract static public function tableName();

  abstract protected function fillData($row);

}