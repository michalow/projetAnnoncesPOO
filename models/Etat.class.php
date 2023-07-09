<?php

class Etat extends Model
{
    private $id;
    private $nameState;
    private $description;

    public function __construct($id, $nameState=null)
    {
        if ($nameState === null)
        {
            $this->fetch($id);
        } else {        
            $this->id = $id;
            $this->nameState = $nameState; 
        }
    }   


    // Cette méthode aurait pu être dans un manager car on fait appel à la base de donénes. Néanmoins, comme son rôle est simplement
    // de remplir l'id et le title de la plateforme, c'est plus propre/pratique de mettre la méthode directement ici
    // Dans notre cas de figure, nous n'aurons d'ailleurs pas besoin d'un manager car les manipulations sur les plateformes sont limitées
    // (tout passe en réalité par les jeux)
    private function fetch($id)
    {
            $req = $this->getDatabase()->prepare("SELECT * FROM etats where id = ?");
            $req->execute([$id]);
            $results = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

        foreach ($results as $etat) {
            $this->id = $etat['id'];
            $this->nameState = $etat['nom'];
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getNameState()
    {
        return $this->nameState;
    }

    public function setNameState($nameState): void
    {
        $this->nameState = $nameState;
    }

    /**
     * Get the value of table
     */ 
   /*  public function getTable()
    {
        return $this->table;
    } */

    /**
     * Set the value of table
     *
     * @return  self
     */ 
/*     public function setTable($table)
    {
        $this->table = $table;

        return $this;
    } */

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}