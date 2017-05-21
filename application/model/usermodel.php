<?php


class UserModel{

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
	
	public function authenticate($email, $password){
        $sql = "SELECT user_id, user_first_name, user_email from user where user_email=:email and user_password=:password";
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

    public function findAllUsers($user_id){
        $sql = "SELECT user_id, user_first_name, user_last_name from user where user_id <> :user_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
    }
}