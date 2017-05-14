<?php

require APP . 'core/model.php';

class UserModel extends Model {
	
	public function authenticate($email, $password){
        $sql = "SELECT user_id, user_first_name from user where user_email=:email and user_password=:password";
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email, ':password' => $password);
        $query->execute($parameters);
        return $query->fetch();   
    }

    public function findByEmail($email){
        $sql = "SELECT user_email, count(user_id) AS count_users from user where user_email=:email group by user_email";
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function insertUser($first_name, $last_name, $email, $password){
        $sql = "INSERT INTO user (user_first_name, user_last_name, user_email, user_password) VALUES(:first_name, :last_name, :email, :password)";
        $query = $this->db->prepare($sql);
        $parameters = array(':first_name' => $first_name, ':last_name' => $last_name, ':email' => $email, ':password' => $password);
        $query->execute($parameters);
    }
}