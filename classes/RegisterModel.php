<?php
class RegisterModel extends Connection {
    private $lastname;
    private $firstname;
    private $username;
    private $email;
    private $password;
    
    public function __construct($firstname, $lastname, $username, $email, $password) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
        public function registerUser() {
        // Connection à la BDD
        try {
            //code...
            $conn = $this->connect();
            $sql = "INSERT INTO 
            `db`.userss VALUES ( NULL,
            :userlastname, :userfirstname, :username, :userpassword, :useremail)";
            $stmt = $conn->prepare($sql);
            $stmt = $stmt->execute([
                ":userlastname" => $this->lastname,
                ":userfirstname" => $this->firstname,
                ":username" => $this->username,
                ":useremail" => $this->email,
                ":userpassword" => password_hash($this->password, PASSWORD_DEFAULT),
            ]);
        } catch (PDOException $e) {
            //throw $th;
           echo $e->getMessage();        
        }    
    }
}