<?php


class Platform extends Model
{
    private $id;
    private $name;

    public function __construct($id, $name=null)
    {
        if ($name === null)
        {
            $this->fetch($id) ;
        }
        else{
            $this->id = $id ;
            $this->name = $name ;
        }
    }


    // Cette méthode aurait pu être dans un manager car on fait appel à la base de donénes. Néanmoins, comme son rôle est simplement
    // de remplir l'id et le title de la plateforme, c'est plus propre/pratique de mettre la méthode directement ici
    // Dans notre cas de figure, nous n'aurons d'ailleurs pas besoin d'un manager car les manipulations sur les plateformes sont limitées
    // (tout passe en réalité par les jeux)
    private function fetch($id)
    {
            $req = $this->getDatabase()->prepare("SELECT * FROM platforms where id = ?");
            $req->execute([$id]);
            $results = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

        foreach ($results as $platform) {
            $this->id = $platform['id'];
            $this->name = $platform['title'];
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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }
}