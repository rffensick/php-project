<?php

class Users extends Model
{
  public $id;
  public $f_name;
  public $s_name;
  public $l_name;
  public $date;



  protected function fillData($row)
  {
    $this->id     = $row['id'];
    $this->f_name = $row['f_name'];
    $this->s_name = $row['s_name'];
    $this->l_name = $row['l_name'];
    $this->date   = $row['dob'];
  }


  /**
   * get table name
   *
   * @return string
   */
  static public function tableName()
  {
    return 'users';
  }
}


//
//$userObj = [];
//
//foreach ($users as $user) {
//  $user = new Users($user);
//  $userObj[] = $user;
//}
//
//vb($userObj);{}