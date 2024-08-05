<?php

class Formulaire {

    private $alert;
    private $form;

    function __construct()
    {
        $this->alert='';
        $this->form='';
    }
    function getalert() {
        $pseudoAlert='';
        $mdpAlert='';
        if (isset($_POST['pseudo'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']) ;
        }
        else {
            $pseudoAlert= 'Veuillez remplir le champs pseudo svp ! <br />';
        }
        if (isset ($_POST['mdp'])) {
            $mdp=htmlspecialchars($_POST['mdp']);
           
        }
        else {
            $mdpAlert='Veuillez remplir le champs mot de passe svp ! <br /> ';
        }
    
        return $pseudoAlert.$mdpAlert;
    }
    

    function getForm():string {
        

       
      
        $form='
        <form  action="'.$_SERVER['PHP_SELF'].'" method="post" >
            <label> Votre pseudo : </label>
            <input type="text" name="pseudo" id ="pseudo" value="" />
            <label> Votre mot de passe: </label>
            <input type="text" name="mdp" id ="mdp" value="" />
            <input type="submit" name="envoie" id="envoie" value="envoie" />
            <input type="reset" name="effacer" id="effacer" value="effacer" />
        </form>';
        $this->form=$form;
        return $this->form;
    } 
    
    }  



















