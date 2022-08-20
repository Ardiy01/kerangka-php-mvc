<?php

class user_models{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' .$this->table);
        return $this->db->resultAll();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE  id_user = :id' );
        $this->db->bind('id', $id);

        return $this->db->resultSingle();
    }

    public function daftarUser($data)
    {   
        $query = "INSERT INTO users VALUES ('', :nama, :username, :pass)";

        $this->db->query($query);
        
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM users WHERE id_user = :id";

        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function loginUser($data)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username AND pass = :pass');
        
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', md5($data['pass']));
        
        return $this->db->resultSingle();
        return true;
    }

    public function userLogin()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user = :id');
        
        $this->db->bind('id_user', $_SESSION['login']['id']);
        
        return $this->db->resultSingle();
    }

    public function dataUserLog($data)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE  id_user = :id' );
        $this->db->bind('id', $data);

        return $this->db->resultSingle();
    }
}