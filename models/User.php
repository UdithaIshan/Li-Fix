<?php
namespace models;
require_once "Database.php";

class User extends Database
{

    
    public function CreateUser($username,$name,$role,$phone,$pass)
    {
        $query="INSERT INTO user(`username`, `Name`, `phone` , `occuFlag`, `statusFlag`,`password`) VALUES ('$username','$name', '$phone','$role',0,'$pass')";
        $this->conn->query($query);
        return $this->conn->insert_id;
    }

    public function isUsernameAvailable($username)
    {
        $q = "SELECT `username` FROM `user` WHERE `username`='$username' ";
        $result = $this->conn->query($q);
        if ($result->num_rows > 0) 
            return false;
        else
        return true;
        
    }

    public function getUser($username,$pass)
    {
        
        $q = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$pass'  ";
        // $q = "SELECT `userId`, `Name` FROM `user` WHERE `occuFlag`='$type' AND `statusFlag`= 1";
        $list =   $this->conn->query($q);
        return $list;
      
    }

    
    public function getUsers($type)
    {
        $q = "SELECT `userId`, `Name` FROM `user` WHERE `occuFlag`='$type' ";
        // $q = "SELECT `userId`, `Name` FROM `user` WHERE `occuFlag`='$type' AND `statusFlag`= 1";
        $list =   $this->conn->query($q);
        return $list;
    }
   
    public function getUserById($id)
    {
        $q = "SELECT `userId`, `Name` FROM `user` WHERE userId='$id'";
        // $q = "SELECT `userId`, `Name` FROM `user` WHERE `occuFlag`='$type' AND `statusFlag`= 1";
        $list =   $this->conn->query($q);
        return $list->fetch_assoc();
    }
    public function getNameById($id)
    {
        $q = "SELECT `userId`, `Name` FROM `user` WHERE userId='$id'";
        // $q = "SELECT `userId`, `Name` FROM `user` WHERE `occuFlag`='$type' AND `statusFlag`= 1";
        $list =   $this->conn->query($q);
        $list = $list->fetch_assoc();
        return $list['Name'];
    }





    



}

