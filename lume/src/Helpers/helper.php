<?php

class Safe
{

    /**
     *  Supprime les espaces autour du texte, et empêche l'injection de script
     * 
     * @return input|string Version nettoyé de l'input
     * 
     */
    public static function input($string): string
    {
        if (!empty($string)) {
            $input = trim($string);
            $input = htmlspecialchars($input);
            return $input;
        }
        return '';
    }
}


class Helpers
{

    /**
     *  Formate une date pour afficher le nombre de temps écoulés en heures ou en jours
     * 
     * @return string Résultat de la date "il y a 11 jours/heures"
     * 
     */
    public static function difference_date($date): string
    {
        $ago = new DateTime($date);
        $now = new DateTime();

        $diffInSeconds = $now->getTimestamp() - $ago->getTimestamp();
        $diffInHours = $diffInSeconds / 3600;

        if ($diffInHours < 1) {
            return "à l'instant";
        } else if ($diffInHours < 48) {
            return "il y a " . (int)$diffInHours . " heure" . ($diffInHours > 1 ? "s" : "");
        } else {
            $diffInDays = (int)($diffInHours / 24);
            return "il y a $diffInDays jour" . ($diffInDays > 1 ? "s" : "");
        }
    }
}
