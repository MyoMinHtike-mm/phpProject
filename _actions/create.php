<?php

include ('../vendor/autoload.php');

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;



$table = new UsersTable(new MySQL());


$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'address' => $_POST['address'],
    'password' => md5($_POST['password']),
    'role_id' => rand(1,3)
];


if($table){
    $table->insert($data);
    // header('location: ../index.php?register=1');
    HTTP::redirect('/index.php', 'register=1');
}else{
    header('location: ../register.php');
}