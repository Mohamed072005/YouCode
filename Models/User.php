<?php
include_once "../config/DataBase.php";
class User extends DataBase
{
    private $user_id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $role_id;

    // public function __construct($user_id, $first_name, $last_name, $email, $password, $role_id) {
    //     $this->user_id = $user_id;
    //     $this->first_name = $first_name;
    //     $this->last_name = $last_name;
    //     $this->email = $email;
    //     $this->password = $password;
    //     $this->role_id = $role_id;
    // }

    public function getUserId(){
        return $this->user_id;
    }
    public function getFirstName(){
        return $this->first_name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRoleId(){
        return $this->role_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
    }
    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }

    public function setLastName($last_name){
        $this->last_name = $last_name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setRoleId($role_id){
        $this->role_id = $role_id;
    }

    public function getUser($user_email, $user_password){
        $query = "SELECT email, passwordd FROM users WHERE passwordd = '$user_password' AND email = '$user_email'";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        var_dump($stmt->execute());


        if($stmt->rowCount() > 0){
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                echo $row["email"] . "\n";
                echo $row["passwordd"] . "\n";
            }
            

        }else {
            echo "No Resulte";
        }
    }
}
?>