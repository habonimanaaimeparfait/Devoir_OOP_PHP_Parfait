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
//Notion d'heritage classes fille exends la classe mère Automobile

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

//Notion d'heritage classes fille exends la classe mère Automobile

class Voiture extends Automobile{
    protected $carte_rose;
   
    public function AfficheVoiture(){
       echo $this->$carte_rose; 
   
           }
   
          
      }
      
      $voiture=new voiture();
   
      echo $voiture->$categorie='arion';
      echo $voiture->$plaque=AB344;
      echo $voiture->$marque='toyota';
      echo $voiture->$couleur='rouge';

      //Classe Fille Moto
      class Moto extends Automobile {
        protected $roues;
        public function AfficheMoto(){
            echo $this->$roues; 
        }  
        }

        $moto=new moto();
    echo $moto->$categorie='suzuki';
    echo $moto->$plaque=AB34;
    echo $moto->$marque='miti';
    echo $moto->$couleur='bleu';

    class Tukutuku extends Automobile{
        protected $nplace;
       
        public function AfficheVoiture(){
           echo $this->$$nplace; 
       
               }
         
            }

            $tukutuku=new voiture();
       
          echo $tukutuku->$categorie='premier';
          echo $tukutuku->$plaque=AB34;
          echo $tukutuku->$marque='Tsinda';
          echo $tukutuku->$couleur='jaune';
   //Declaration d'une vriable 
       define('AGE',30);   
        
 class Remorque extends Automobile{
  
   public function add(){

        echo'VARIABLE AGE ='.AGE;


   }
}
          














?>