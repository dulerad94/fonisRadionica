<?php
/**
 * Created by PhpStorm.
 * User: Dusan
 * Date: 19.4.2016.
 * Time: 17.16
 */

require_once "user.php";
$userAng = json_decode(file_get_contents('php://input'));
$user=unserialize($_SESSION['user']);
$user->changeData($userAng);


