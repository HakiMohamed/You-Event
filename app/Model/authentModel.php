<?php

namespace App\Model;

use App\Database\Database;
use PDO ;

class AuthentModel {
    private $db;

    protected $name;
    protected $email;
    protected $password;
    protected $id_role;

    public function __construct() {
        $this->db = new Database();
    }

    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getIdRole(){
        return $this->id_role=$id_role;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    } 
    public function setPassword($password) {
        $this->password = $password;
    }
    public function setIdRole($id_role){
        $this->id_role=$id_role;
    }


    public function register(){
        $query= "INSERT INTO utilisateurs(name,email,password,id_role) VALUES (?,?,?,?)";
        $stmt = $this->db->getConnection()->prepare($query);
        stms ->execute([$this->name,$this->email,$this->password,$this->id_role]);
        return $stmt;
     
    }



    // public function register($nom, $prenom, $email, $password, $id_role) {
    //     $query = 'INSERT INTO utilisateurs (nom, prenom, email, password, id_role) VALUES (?, ?, ?, ?, ?)';
    //     $stmt = $this->connection->prepare($query);
    //     $stmt->execute([$nom, $prenom, $email, password_hash($password, PASSWORD_DEFAULT), $id_role]);
    //     return $stmt;
    // }
   


 


}