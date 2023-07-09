<?php
class Game extends Model 
{
    private $id;
    private $title;
    private $year;
    private $platform ;

    public function __construct($id, $title, $year, $platform)
    {
        $this->id = $id ;
        $this->title = $title ;
        $this->year = $year ;
        $this->platform = $platform ;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year): void
    {
        $this->year = $year;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    public function setPlatform($platform): void
    {
        $this->platform = $platform;
    }
}