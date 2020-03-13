<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>injecting</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username: </label>  
        <input type="text" name="username">
        <label for="password">Password: </label>  
        <input type="password" name="password">
        <input type="submit" value="new user" name="newuser">
        <input type="submit" value="get all users" name="getusers">
        <input type="submit" value="get userdata" name="getdata">
    </form>

<?php
    include_once "./classes/user.class.php";

    if(isset($_POST['newuser'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user0 = new User();
        var_dump($user0->newuser($username, $password));

    }

    if(isset($_POST['getdata'])){
        $username = $_POST['username'];

        $user1 = new User();
        $datauser = $user1->getdata($username);
        var_dump($datauser);

        $data = $datauser->fetchall();
        var_dump($data);

        foreach($data as $userinfo){
            echo "<p>name: ".$userinfo['username'].", password: ".$userinfo['password'].", rank: ".$userinfo['rank']."</p>";
        }

    }

    if(isset($_POST['getusers'])){

        $user2 = new User();
        $data = $user2->getusers();


        foreach($data as $userinfo){
            echo "<p>name: ".$userinfo['username'].", password: ".$userinfo['password'].", rank: ".$userinfo['rank']."</p>";
        }

    }

?>
</body>
</html>