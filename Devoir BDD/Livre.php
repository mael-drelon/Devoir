<?php
class livre{

    private $_nom;
    private $_auteur;
    private $_genre;
    private $_id;

public function __construct($IDlivre){
     try{
    //execution du code sur la BDD 
    $BDD = new PDO('mysql:host=localhost; dbname=livresdevoir; charset=utf8','root','root');
  
}
catch (Exception $erreur)
{
    echo 'Erreur : '.$erreur->getmessage();
}

$reponse = $BDD->query('SELECT titre FROM livre');

while ($donnees = $reponse->fetch())
{
	echo $donnees['Titre'].' appartient à '.$_auteur['Nom'];
}
$_auteur = $BDD->query('SELECT Nom, auteur FROM auteur');
}
    public function getnom()
    {
        return $this->_nom;
    }   
    public function getauteur()
    {
        return $this->_auteur;
    }   
    public function getID()
    {
        return $this->_id;
    }
    public function getgenre()
    {
        return $this->_genre;
    }


    public function Afficherlivre()
    {
    echo  '<p> le titre du livre est '.$this->_nom.' est a etait ecrit par '.$this->_auteur. '</p>';
    }
   
}           //fin de la class livre
?>