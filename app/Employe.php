<?php

class Employe 
{
    private string $nom;
    private string $prenom;
    private  $heureTravail;
    private  $heureAbsence;
    private  $salaire;

    public function __construct(string $nom, string $prenom, $heureTravail, $heureAbsence, float $salaire)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->heureTravail= $heureTravail;
        $this->heureAbsence = $heureAbsence;
        $this->salaire = $salaire;
    }

    //getters
    public function getNom() {
        return $this->nom ;
    }
    public function getPrenom() {
        return $this->prenom ;
    }
    public function getHeureTravail() {
        return $this->heureTravail ;
    }
    public function getHeureAbsence() {
        return $this->heureAbsence ;
    }
    public function getSalaire() {
        return $this->salaire ;
    }

    //setters

    public function setNom(string $nom) {

        $this->nom=$nom;
    }
    public function setPreom(string $prenom) {

        $this->prenom=$prenom;
    }
    public function setHeureTravail($heureTravail) {

        $this->HeureTravail=$heureTravail;
    }
    public function setHeureAbsence($heureAbsence) {

        $this->heureAbsence=$heureAbsence;
    }
    public function setSalaire( $salaire) {

        $this->salaire=$salaire;
    }
}