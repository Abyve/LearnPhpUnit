<?php

class Employe 
{
    private string $nom;
    private string $prenom;
    private  $heureTravail;
    private  $heureAbsence;
    private  $salaire;
    private string $pseudo;
    private string $mdp;

    public function __construct(string $nom, string $prenom, $heureTravail, $heureAbsence, $salaire, $pseudo, $mdp)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->heureTravail= $heureTravail;
        $this->heureAbsence = $heureAbsence;
        $this->salaire = $salaire;
        $this->pseudo = $pseudo;
        $this->mdp = $mdp;
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
    public function getPseudo() {
        return $this->pseudo ;
    }
    public function getMdp() {
        return $this->mdp ;
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
    public function setPseudo( $pseudo) {

        $this->pseudo=$pseudo;
    }
    public function setMdp( $salaire) {

        $this->mdp=$mdp;
    }

    //methode toString

    public function toString():string {

        $s= 'nom : '.$this->nom.' prenom : '.$this->prenom.' <br /> '.
        'horaires : '.($this->heureTravail-$this->heureAbsence).' heures. <br />';
        
        ;
        return $s;


    }



}