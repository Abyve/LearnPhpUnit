<?php //declare(strict_types=1);
include('./app/Formulaire.php');
use PHPUnit\Framework\TestCase;

final class FormulaireTest extends TestCase
{
    public function testgetForm(): void
    {
        $form= new Formulaire;

        $retourGetForm= $form->getForm();

        $form='
        <form  action="'.$_SERVER['PHP_SELF'].'" method="post" >
            <label> Votre pseudo : </label>
            <input type="text" name="pseudo" id ="pseudo" value="'.$pseudo.'" />
            <label> Votre mot de passe: </label>
            <input type="text" name="mdp" id ="mdp" value="'.$mdp.'" />
            <input type="submit" name="envoie" id="envoie" value="envoie" />
            <input type="reset" name="effacer" id="effacer" value="effacer" />
        </form>';

        $this->assertSame($form, $retourGetForm);
    }
    public function testgetAlert(): void {
        $form=new Formulaire;
        $retourAlert=$form->getAlert();
        $pseudoAlert='Veuillez remplir le champs pseudo svp ! <br />';
        $mdpAlert='Veuillez remplir le champs mot de passe svp ! <br /> ';
        //pas de mdp
        $this->assertSame($pseudoAlert,$retourAlert);
        //pas de pseudo
        $this->assertSame($mdpAlert,$retourAlert);
        //pas de pseudo ni de mdp;
        $this->assertSame($pseudoAlert.$mdpAlert,$retourAlert);
        //pseudo et mdp fournis
        $this->assertSame($pseudoAlert.$mdpAlert,$retourAlert);
    }



    

}
