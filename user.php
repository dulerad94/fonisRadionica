<?php
/**
 * Created by PhpStorm.
 * User: Dusan
 * Date: 19.4.2016.
 * Time: 14.41
 */
require_once "connection.php";
class User{
    public $id;
    public $name;
    public $surname;
    public $mail;
    public $pass;
    public $dayOfBirth;
    public $photo;



    /**
     * User constructor.
     * @param $id
     * @param $name
     * @param $surname
     * @param $mail
     * @param $pass
     * @param $dayOfBirth
     * @param $photo
     */
    public function __construct($id, $name, $surname, $mail, $pass, $dayOfBirth, $photo)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->pass = $pass;
    //    $this->dayOfBirth=DateTime::setTimeStamp($dayOfBirth);
        $this->photo = $photo;
    }
    function createUserInDatabase(){
        global $conn;
        $timestamp=$this->dayOfBirth->getTimestamp();
        $sql="Insert into User values(null,$this->name,$this->surname,$this->mail,$this->pass,$timestamp,$this->photo)";
        $conn->query($sql);
    }
    static function findUser($mail,$pass){
        global $conn;
        $sql="Select * from User where Mail='$mail' and Pass='$pass'";

        $result=$conn->query($sql);
        if($result) {
            $row = $result->fetch_assoc();
            return new User($row['UserID'], $row['Name'], $row['Surname'], $row['Mail'], $row['Pass'], $row['DayOfBirth'], $row['Photo']);
        }
        return null;

    }
    function changeData($data){
        global $conn;
        $sql="UPDATE User set Name=".$data['name'].",Surname=".$data['surname'].",Pass=".$data['pass'].
            ",DayOfBirth=".$data['dayOfBirth'].",photo=".$data['photo']."where UserId=".$data['userID'];
        $conn->query($sql);
    }


}


?>