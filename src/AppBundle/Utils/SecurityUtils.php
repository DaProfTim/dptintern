<?php

namespace AppBundle\Utils;

/**
 * Stellt diverse Sicherheitsfunktionen bereit.
 *
 * @copyright 2014 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class SecurityUtils
{
    /**
     * Hasht das uebergebene Klartext-Passwort und gibt den Hashwert zurueck.
     *
     * @param string $password Passwort
     * @return string Passwort-Hash
     */
    public static function hashPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
    }

    /**
     * Verifiziert das uebergebene Klartext-Passwort mit dem uebergebenen
     * Hashwert.
     *
     * @param string $password Klartext-Passwort
     * @param string $hash Hashwert
     * @return boolean true, wenn Passwort mit dem Hashwert uebereinstimmt
     */
    public static function verifyPassword($password, $hash)
    {
        return password_verify($password, $hash);
    }

    /**
     * Prueft, ob das uebergebene Passwort den Passwort-Richtlinien entspricht.
     *
     * @param string $password Klartext-Passwort
     * @return boolean true, wenn das Passwort den Richtlinien entspricht
     */
    public static function checkPasswordPolicy($password)
    {
        $matchCounter = 0;
        if (preg_match("/[0-9]/", $password)) {
            $matchCounter++;
        }
        if (preg_match("/[A-Z]/", $password)) {
            $matchCounter++;
        }
        if (preg_match("/[a-z]/", $password)) {
            $matchCounter++;
        }
        if (preg_match("/[" . preg_quote("!§$()=?*+-_.,;:") . "]/", $password)) {
            $matchCounter++;
        }

        return strlen($password) >= 8 && $matchCounter >= 3;
    }

    /**
     * Generiert ein Passwort.
     *
     * @param int $length Laenge
     * @return string Passwort
     */
    public static function getPassword($length = 16)
    {
        $printable = "!$()=?*+--_.,;:ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

        return \PasswordGenerator::getCustomPassword(str_split($printable), $length);
    }

    /**
     * Generiert ein Reset-Token.
     *
     * @param int $length Laenge des Reset Token, default = 16
     * @return string Reset-Token
     */
    public static function getResetToken($length = 16)
    {
        return \PasswordGenerator::getAlphaNumericPassword($length);
    }
}
