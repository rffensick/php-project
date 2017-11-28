<?php

/**
 * custom methods.
 */
include 'config/cus_methods/methods.php';

/**
 * @return $users;
 * DataBase
 */
require_once 'config/db.php';
include 'controller/init_controller.php';

$users_db = Users::getAll();

$user = new Users();
$lol = 'lol';
$user->{$lol} = 'LOOOL';
vd($user);

