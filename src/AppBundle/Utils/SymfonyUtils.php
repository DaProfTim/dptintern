<?php

namespace AppBundle\Utils;

use Symfony\Component\Form\FormInterface;

/**
 * Util-Funktionen rund um Symfony.
 */
class SymfonyUtils
{
    /**
     * Liefert ein Error-String-Array zum uebergebenen Formular, bei dem die Fehlermeldungen ueber den Array-Index den jeweiligen Feldern zugeordnet sind.
     *
     * @param FormInterface $form Form
     * @return string[]
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    public static function getErrorStringArray($form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$form->getName() . '[' . $child->getName() . ']'] = self::getErrorStringArray($child);
            }
        }

        return $errors;
    }
}
