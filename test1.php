<?php
// $users = [
//     'admin' => 'admin123',
//     'user1' => 'user111',
//     'user2' => 'user222',
// ];
include "read_user.php";

$user = $_POST['username'];
$password = $_POST['password'];

if(array_key_exists($user, $users) && $users[$user] == $password){
    echo"Welcome $user";
}
else{
    echo"Wrong user name or password";
}
?>
