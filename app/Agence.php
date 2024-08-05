<?php

class Agence 
{

    private string $adresse;
    private $ouverture;
    private $employe=array();

    public function __construct($adresse, $ouverture, $employe)
    {

        $this->adresse = $adresse;
        $this->ouverture = $ouverture;
        $this->employe = $employe;


    }
    //getters
    public function getAdresse() {

        return $this->adresse;
    }
    public function getOuverture() {

        return $this->ouverture;
    }
    public function getEmploye(){

        return $this->employe;
    }
    //setters
    public function setAdresse($nouvelleAdresse) {

        $this->adresse=$NouvelleAdresse;

    }
    public function setOuverture($majOuverture) {

        $this->ouverture=$majOuverture;


    }
    public function setEmploye(array $employe) {

        $this->employe=$employe;



    }

    public function toString() {

        foreach ($this->employe as $key => $valeur)
        {
            echo ' Employé numéro : '.$key.'<br />'.'est : <br />'.$valeur->toString().' <br />';





        }

    }


}