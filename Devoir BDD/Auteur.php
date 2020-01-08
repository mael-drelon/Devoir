<?php
class Auteur{

    private $_nom;
    private $_ID;

public function __construct($IDauteur){
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=localhost; dbname=livresdevoir; charset=utf8','root','root');
  
}
catch (Exception $erreur)
{
    echo 'Erreur : '.$erreur->getmessage();
}
    $this->_ID = $IDauteur;
}
    public function getnom()
    {
        return $this->_nom;
    }     
    public function getID()
    {
        return $this->_ID;
    }

    public function AfficherAuteur()
    {
    echo  '<p> le titre du livre est '.$this->_auteur.'  a ecrit  '.$this->_livre. '</p>';
    }
   
}           //fin de la class auteur
?>