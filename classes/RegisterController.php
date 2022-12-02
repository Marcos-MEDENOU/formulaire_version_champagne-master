<?php

/**
 * Classe qui permet de valider les informations 
 * de l'utilisateur
 */
class RegisterController {
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $password;
    private $passwordConfirm;

    public function __construct($firstname, $lastname, $username, $email, $password, $passwordConfirm) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirm = $passwordConfirm;

    }

    public function valideInput() {
       echo $this->emptyInputs();
       echo  $this->validateUsername();
       echo  $this->validateEmail();
       echo  $this->pwdMatch();
    }

    /**
     * Vérifie si les inputs sont renseignés
     * @return boolean
     */
    public function emptyInputs() {
        // votre code
        if(empty($this->firstname) 
        || empty($this->lastname) 
        || empty($this->username) 
        || empty($this->email) 
        || empty($this->password) 
        || empty($this->passwordConfirm))
        {
            //header("Location:../vue/Sig_up.php");
            echo "INPUTS EMPTY";
        }else{
            return false;
        }
    }

    /**
     * Vérifie si le username est renseigné 
     * @return boolean
     */
    public function validateUsername() {
        // correspond à un username commençant par un caractère alphabétique suivi d'un ou plusieurs caractères alphabétique|nombres|@|_|-
        if(!ctype_alnum($this->username)) {
            //header("Location: ../index.php?msg=username");
            echo "USER NAME NOT MATCH";
        }
        return false;
    }

    /**
     * Vérifie si le email est renseigné et valide 
     * @return boolean
     */
    public function validateEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            // header("Location: ../index.php?msg=invalidEmail");
            echo "EMAIL NOT MATCH";
        }
        return false;
    }

    /**
     * Vérifie si les mots de passes renseignés sont identiques 
     * @return boolean
     */
    public function pwdMatch() {
       if ($this->password !== $this->passwordConfirm) {
        //header("Location: ../index.php?msg=passwordNotMatch");
        echo "PWD NOT MATCH";
       }
       return false;
    }
}