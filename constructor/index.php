<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR CONSTRUCTOR</title>
</head>
<body>
    <h1>
        DATA USER
    </h1>
    <?php
    // memanggil / mengggunakan class User.php
    require 'User.php';

    // melakukan intansiasi class-object
    
    $user = new User(2, "Afdul", "afdulabu@example.com", "bogor", "admin");
    // memberi nilai / assignment value
    $user->id = 2;
    $user->name = "Afdul";
    $user->email = "afdulabu@example.com";
    $user->address = "Bogor";
    $user->role = "admin";
    ?>
    <ul>
        <li> <?php echo $user->id; ?></li>
        <li> <?php echo $user->name; ?></li>
        <li> <?php echo $user->email; ?></li>
        <li> <?php echo $user->address; ?></li>
        <li> <?php echo $user->role; ?></li>
    </ul>
</body>
</html>