<?php
//declaration d'une classe mère' Heritage'
class Automobile
{
private $categorie;
private $plaque;
private $marque;
private $couleur;


//declaration d'un constructeur

public function __construct($categorie,$plaque,$marque,$couleur){

    $this->categorie=$categorie;
    $this->plaque=$plaque;
    $this->marque=$marque;
    $this->couleur=$couleur;
    }
    //declararion d'un destructeur
public function destruct(){
      #code..   
    }
}















?>