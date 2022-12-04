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
            :userlastname, :userfirstname, :username, :useremail, :userpassword)";
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



    // public function emailuserDB()
    // {
    //     try {
    //         $conn = $this->connect();
    //         $sql = "SELECT * FROM userss WHERE useremail=:mail";
    //         $stmt = $conn->prepare($sql);
    //         // $stmt1 = $conn->prepare($sql1);
    //         $stmt->execute([':mail' => $this->emailuser,]);
    //         $user = $stmt->fetch(PDO::FETCH_ASSOC);
    //         if ($user && password_verify($this->passworduser, $user['userpassword'])) {
    //             $userfirstname= $user['userfirstname'];
    //              $userlastname= $user['userlastname'];
    //              $username= $user['username'];
    //              $password=$user['userpassword'];
    //             header("location:../views/Dashboard.php?msg=userinformations&userfirstname=$userfirstname&userlastname=$userlastname&username=$username&passcrypt=$password&end");

    //         } else {
    //            // header("location:../views/Dashboard.php?msg=userinformations&userfirstname");
    //             header("location: ../views/Sig_in.php?msg=inavlid&usermail=$this->emailuser"); 

    //         }
    //         $stmt->closeCursor();//Interrompre la recherche 
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //     }
    // }