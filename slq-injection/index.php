<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=sql_injection', 'root', '');



if(isset($_POST['email'])){


    $email = $_POST['email'];


//    $userQuery = $con->query("SELECT * FROM users WHERE email = '$email' ");


    $userQuery = $con->prepare("SELECT * FROM users WHERE email = :email ");


    $userQuery->execute([

        'email'=> $email


    ]);





    if($userQuery->rowCount()){

        echo "WE FOUND A USER";


    }



}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="" method="post" autocomplete="off">

    <label for="name">

        Name
        <input type="text" name="name">

    </label>


    <label for="name">

        Email
        <input type="text" name="email">

    </label>


    <input type="submit" >



</form>





</body>
</html>

