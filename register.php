<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap{
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">


        <div class="wrap">
            <h1>Register</h1>

            <form action="_actions/create.php" method="post">
                <input type="text" name="name" class="form-control mb-2" placeholder="name" required>
                <input type="email" name="email" class="form-control mb-2" placeholder="email" required>
                <input type="text" name="phone" class="form-control mb-2" placeholder="phone" required>
                <textarea name="address" class="form-control mb-2" id="" cols="30" rows="10" placeholder="address" required></textarea>
                <input type="password" name="password" class="form-control mb-2" placeholder="password" required>
                <button class="w-100 btn btn-primary">Register</button>
            </form>
        </div>
</body>
</html>