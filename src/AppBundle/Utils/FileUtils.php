<?php

namespace AppBundle\Utils;

class FileUtils
{
    /**
     * Gibt einen sicheren Dateinamen ohne Umlaute, Leer- oder Sonderzeichen zurueck.
     *
     * @author Alex Schnelle <aschnelle@npo-applications.de>
     * @param string $str Dateiname
     * @return string neuer Dateiname
     */
    public static function getValidFilename($str)
    {
        $escaped = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $str);
        return $escaped;
    }
}
