<?php

// session_start();
// if(!isset($_SESSION['user'])){
//     header('location: index.php');
// }

include ('vendor/autoload.php');

use Helpers\Auth;

$auth = Auth::check();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .wrap{
            width: 600px;
            margin: 40px auto;
            /* background: rgba(0,0,0, 0.2); */
        }
        
        ul li{
            line-height: 40px;
            border: 5px solid #fff;
        }
    </style>
</head>
<body>

<div class="container wrap">

<?php if(isset($_GET['error'])): ?>
        <div class="alert alert-danger">
            Cannot upload file
        </div>
     <?php endif ; ?>


    <form action="_actions/upload.php" method="post" class="input-group" enctype="multipart/form-data">
        <input type="file" class="form-control w-50" name="photo">
        <input type="submit" class="form-control btn btn-primary" value="Upload Photo">
    </form>



    <?php if($auth->photo): ?>
    <div>
        <img src="_actions/photos/<?= $auth->photo ?>" class="img-thumbnail mt-3" width="200px" alt="">
    </div>
    <?php endif ?>

   
    <h2 class="mt-5"><?= $auth->name ?></h2>

    <ul class="list-unstyled mt-3 list-group">
        <li class="list-group-item">
        <b>Email:</b> <?= $auth->email ?>
        </li>
        <li class="list-group-item">
        <b>Phone:</b> <?= $auth->phone ?>
        </li>
        <li class="list-group-item">
        <b>Address:</b> <?= $auth->address ?>
        </li>
    </ul>

    <br>

    <a href="admin.php">Manage Users</a> |
    <a href="_actions/logout.php" class="text-danger">Logout</a>
</div> 



    
</body>
</html>