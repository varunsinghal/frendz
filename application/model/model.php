<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

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

    public function findGroupByMemberId($user_id){
        $sql = "SELECT gd.group_id, gd.group_name, gd.group_description from group_detail AS gd inner join group_member where user_id=:user_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);
        $query->execute($parameters);
        return $query->fetchAll();
    }

    public function findGroupByName($group_name){
        $sql = "SELECT group_name, count(group_id) AS count_groups from group_detail where group_name=:group_name group by group_name";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_name' => $group_name);
        $query->execute($parameters);
        return $query->fetch();
    }


    public function createGroup($group_name, $group_des, $created_by){
        $sql = "INSERT INTO group_detail (group_name, group_description, group_created_by) VALUES (:group_name, :group_des, :created_by)";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_name' => $group_name, ':group_des' => $group_des, ':created_by' => $created_by);
        $query->execute($parameters);
        $group_id = $this->db->lastInsertId();
        $sql = "INSERT INTO group_member (group_id, user_id, is_admin) VALUES (:group_id, :user_id, 1)";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_id' => $group_id, ':user_id' => $created_by);
        $query->execute($parameters);
    }

    public function findgroupById($group_id){
        $sql = "SELECT * FROM group_detail WHERE group_id=:group_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':group_id' => $group_id);
        $query->execute($parameters);
        print_r($query->fetchObject('GroupEntity', ['1',$this->group_name,'1','1','1','1']));
    }

    /**
     * Get all songs from database
     */
    public function getAllSongs()
    {
        $sql = "SELECT id, artist, track, link FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * Add a song to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addSong($artist, $track, $link)
    {
        $sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a song from database
     */
    public function getSong($song_id)
    {
        $sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }
}
