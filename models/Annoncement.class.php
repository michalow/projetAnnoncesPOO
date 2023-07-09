<?php

class Annoncement extends Model
{
    private $id;
    private $dateCreation;
    private $title;
    private $description;
    private $duration;
    private $priceProduct;
    private $priceAnnoncement;
    private $dateValidate;
    private $endOfPublication;
    private $dateSale;
    private $state;
    private $buyer;
    private $idPhoto;
    private $url;
    private $main;
    private $legende;

public function __construct($id,$title,$description,$priceAnnoncement,$url,$state)
{
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
    $this->priceAnnoncement = $priceAnnoncement;
    $this->url = $url;
    $this->state = $state;
}

public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getDateCreation(){
    return $this->dateCreation;
}

public function setDateCreation($dateCreation){
    $this->dateCreation = $dateCreation;
}

public function getTitle(){
    return $this->title;
}

public function setTitle($title){
    $this->title = $title;
}

public function getDescription(){
    return $this->description;
}

public function setDescription($description){
    $this->description = $description;
}

public function getDuration(){
    return $this->duration;
}

public function setDuration($duration){
    $this->duration = $duration;
}

public function getPriceProduct(){
    return $this->priceProduct;
}

public function setPriceProduct($priceProduct){
    $this->priceProduct = $priceProduct;
}

public function getPriceAnnoncement(){
    return $this->priceAnnoncement;
}

public function setPriceAnnoncement($priceAnnoncement){
    $this->priceAnnoncement = $priceAnnoncement;
}

public function getDateValidate(){
    return $this->dateValidate;
}

public function setDateValidate($dateValidate){
    $this->dateValidate = $dateValidate;
}

public function getEndOfPublication(){
    return $this->endOfPublication;
}

public function setEndOfPublication($endOfPublication){
    $this->endOfPublication = $endOfPublication;
}

public function getDateSale(){
    return $this->dateSale;
}

public function setDateSale($dateSale){
    $this->dateSale = $dateSale;
}

public function getState(){
    return $this->state;
}

public function setState($state){
    $this->state = $state;
}

public function getBuyer(){
    return $this->buyer;
}

public function setBuyer($buyer){
    $this->buyer = $buyer;
}

public function getIdPhoto(){
    return $this->idPhoto;
}

public function setidPhoto($idPhoto){
    $this->idPhoto = $idPhoto;
}

public function getUrl(){
    return $this->url;
}

public function setUrl($url){
    $this->url = $url;
}

public function getMain(){
    return $this->main;
}

public function setMain($main){
    $this->main = $main;
}

public function getLegende(){
    return $this->legende;
}

public function setLegende($legende){
    $this->legende = $legende;
}

/**
     * Get the value of table
     */ 
  /*   public function getTable()
    {
        return $this->table;
    }

    /**
     * Set the value of table
     *
     * @return  self
     */ 
  /*   public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }  */
}
?>