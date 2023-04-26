<?php

/**
 * Ce fichier contient la classe Validateur, qui fournit des fonctionnalités utiles.
 *
 * PHP Version 7
 *
 * @category Class_Validateur.
 * @package  MonPackage.
 * @author   donbeni imboyo <donblackimboyo@gmail.com>
 * @license  https://www.example.com/license/ M.
 * @link     https://pedag.u-picardie.fr/moodle/upjv/?redirect=0
 */

namespace Imboyo;

/**
 * Class Doc Comment
 *
 * @category Class_Validateur.
 * @package  MonPackage.
 * @author   donbeni imboyo <donblackimboyo@gmail.com>
 * @license  https://www.example.com/license/ M.
 * @link     https://pedag.u-picardie.fr/moodle/upjv/?redirect=0
 */


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