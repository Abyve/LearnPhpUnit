<?php
    include('./Agence.php');
    include('./Employe.php');
    include('./Formulaire.php');
    $e= new Employe('Bond','James','7','0','4500','jim','mdp');
    
    $a=new Agence('rue la Boetie',1,$e);

    //echo 'Parcours de $e : <br /> ';
    echo 'le nom de l\'employe à l\'agence situé '.$a->getAdresse().' est : '.$e->getNom().' <br />';;
    echo 'le prenom de l\'employe à l\'agence situé '.$a->getAdresse().' est : '.$e->getPrenom().' <br />';;
    echo 'les heures travaillées sont de : '.$e->getHeureTravail().' <br />';
    echo 'les heures absentes sont de : '.$e->getHeureAbsence().' <br />';
    echo 'le salaire est de : '.$e->getSalaire().' <br />';

    $e2 = new Employe('Trufaz', 'Eric', '7', '0', '3000','tic','mdp');
    $a->setEmploye(array ($e,$e2));
    echo $a->toString();

    //afficher le formulaire

    $f=new Formulaire();
    $form=$f->getForm();
    $alert=$f->getPseudoAlert().$f->getMdpAlert();
    echo $form;
    echo $alert;

