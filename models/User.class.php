<?php

class User extends Model{
    private $id;
    private $username;
    private $email;
    private $pwd;
    private $statut;
    private $dateInscrip;

    public function __construct($id, $username, $email, $pwd, $statut, $dateInscrip){
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->statut = $statut;
        $this->dateInscrip = $dateInscrip;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pwd
     */ 
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     *
     * @return  self
     */ 
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of dateInscrip
     */ 
    public function getDateInscrip()
    {
        return $this->dateInscrip;
    }

    /**
     * Set the value of dateInscrip
     *
     * @return  self
     */ 
    public function setDateInscrip($dateInscrip)
    {
        $this->dateInscrip = $dateInscrip;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}

?>