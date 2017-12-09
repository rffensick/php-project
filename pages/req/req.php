<?php
/**
 * Created by PhpStorm.
 * User: ilyas
 * Date: 04.12.2017
 * Time: 22:43
 */

require '../../config/db.php';
require '../../model/init_controller.php';
require_once 'simple_html_dom.php';

$data = $_POST;

if (isset($data['do_add'])) {
	Users::add($data['f_name'], $data['s_name'], $data['l_name'], $data['dob']);
	header('Location: /index.php');
}


if (isset($data['do_edit'])) {
	Users::update($data['id_user'], [
		'f_name' 	=> $data['f_name'],
		's_name' 	=> $data['s_name'],
		'l_name' 	=> $data['l_name'],
		'dob' 		=> $data['dob']
	]);

	header('Location: /index.php');
}

if (isset($data['do_delete'])) {
	Users::delete($data['id_user']);

	header('Location: /index.php');
}

