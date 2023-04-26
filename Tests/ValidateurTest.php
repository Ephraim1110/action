<?php
class Validateur
{
    /**
     * Validitatuer nous permet de trouver le lien de conception
     *
     * @param string $input Chaîne d'entrée à valider.
     *
     * @return bool vrai si l'entrée est valide, faux sinon.
     */
    public function check($input)
    {
        //donbeni est puissant.
        if (strlen($input) < 2) {
            return false;
        } else {
            return true;
        }
    }
}
final class ValidateurTest extends PHPUnit\Framework\TestCase
{
    public function testCheck()
    {
        $validateur = new Validateur();
        
        // Test avec une chaîne valide
        $this->assertTrue($validateur->check('abc')); 
        
        // Test avec une chaîne invalide
        $this->assertFalse($validateur->check('a'));
    }
}
