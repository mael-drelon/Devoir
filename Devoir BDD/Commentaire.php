<?php
class commentaire{

    private $_pseudo;
    private $_ID;

public function __construct($IDcommentaire){
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=localhost; dbname=livresdevoir; charset=utf8','root','root');
    
}
catch (Exception $erreur)
{
    echo 'Erreur : '.$erreur->getmessage();
}



    $this->_ID = $IDcommentaire;
}
    public function getnom()
    {
        return $this->_pseudo;
    }     
    public function getID()
    {
        return $this->_ID;
    }

    public function AfficherCommentaire()
    {
    echo  '<p> le commentaire a etait ecrit par  '.$this->_pseudo.'</p>';
    }
   
}           //fin de la class commentaire
?>