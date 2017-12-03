<?php

/**
 * custom methods.
 */
include 'config/cus_methods/methods.php';

/**
 * @return model
 */
include 'model/model.php';

/**
 * DataBase
 */
require_once 'config/db.php';
include 'controller/init_controller.php';

include 'pages/main.php';


Users::update(3, [
    'f_name' => 'c4',
    's_name' => 'bomba'
]);


$_GET['name'];

