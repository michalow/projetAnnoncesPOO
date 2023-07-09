<?php

require_once "models/MembersManager.php";


class MembersController
{
    private $memberManager;

    public function __construct()
    {
        $this->memberManager = new MembersManager();
        
    }
    
   public function allMembers()
    {
        $members = $this->memberManager->getAllMembers() ;
            require_once "views/members.php" ;
    }
}   

?>