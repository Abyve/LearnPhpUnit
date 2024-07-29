<?php
    include('./Agence.php');
    include('./Employe.php');

    $e= new Employe('Bond','James','7','0','4500');
    $a=new Agence('rue la Boetie',1,$e);

    //echo 'Parcours de $e : <br /> ';
    echo 'le nom de l\'employe à l\'agence situé '.$a->getAdresse().' est : '.$e->getNom().' <br />';;
    echo 'le prenom de l\'employe à l\'agence situé '.$a->getAdresse().' est : '.$e->getPrenom().' <br />';;
    echo 'les heures travaillées sont de : '.$e->getHeureTravail().' <br />';
    echo 'les heures absentes sont de : '.$e->getHeureAbsence().' <br />';
    echo 'le salaire est de : '.$e->getSalaire().' <br />';