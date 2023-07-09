<?php
require_once "Model.class.php";
require_once "Member.class.php";
require_once "User.class.php";

class MembersManager extends Model
{
    private $memberManager;

    public function getAllMembers() {
       $results=array();

        $req = $this->getDatabase()->prepare("SELECT * FROM membres ORDER BY date_inscription LIMIT 10");
        $req->execute();
        $members = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

     foreach ($members as $member) {
            $newMember = new Member(
                $member['id'],
                $member['username'],
                $member['nom'],
                $member['prenom'],
                $member['email'],
                $member['password'],
                $member['is_admin'],
                $member['date_inscription'],    
                $member['adresse'],
                $member['code_postal'],
                $member['ville']
            );
            array_push($results, $newMember);
        }
        return $results;
    }
}    