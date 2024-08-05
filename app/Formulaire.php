<?php

class Formulaire {

    private $pseudoAlert;
    private $mdpAlert;
    private $form;

    function __construct()
    {
        $this->pseudoAlert='';
        $this->mdpAlert='';
        if (isset($_POST['pseudo'])) {
            $this->pseudo = htmlspecialchars($_POST['pseudo']) ;
        }
        else
        {
        $this->pseudo='';
        }
        if (isset ($_POST['mdp'])) {
            $this->mdp=htmlspecialchars($_POST['mdp']);
        }
        else
        {
        $this->mdp='';
        }
    }
    function getPseudoAlert() {
        if ($this->pseudo==='') { $this->pseudoAlert= 'Veuillez remplir le champs pseudo svp ! <br />';}
        return $this->pseudoAlert;
    }
    function getMdpAlert() {
        if ($this->mdp===''){ $this->mdpAlert='Veuillez remplir le champs mot de passe svp ! <br /> ';}
        return $this->mdpAlert;
    }
    

    function getForm():string {
        

       
      
        $form='
        <form  action="'.$_SERVER['PHP_SELF'].'" method="post" >
            <label> Votre pseudo : </label>
            <input type="text" name="pseudo" id ="pseudo" value="'.$this->pseudo.'" />
            <label> Votre mot de passe: </label>
            <input type="text" name="mdp" id ="mdp" value="'.$this->mdp.'" />
            <input type="submit" name="envoie" id="envoie" value="envoie" />
            <input type="reset" name="effacer" id="effacer" value="effacer" />
        </form>';
        $this->form=$form;
        return $this->form;
    } 
    
    }  



















