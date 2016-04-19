<?php
/**
 * Created by PhpStorm.
 * User: Dusan
 * Date: 19.4.2016.
 * Time: 15.19
 */
require_once "user.php";
$userAng = json_decode(file_get_contents('php://input'));

$mail=$userAng->mail;
$pass=$userAng->pass;

$user=User::findUser($mail,$pass);

if($user==null){
    print "error";
}
else {
    $fp = fopen('user.json', 'w');
    fwrite($fp, json_encode($user));
    fclose($fp);
    $_SESSION['user']=serialize($user);
    print "success";
}
?>