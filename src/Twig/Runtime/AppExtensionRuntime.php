<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    /**
     * On parcours tout le tableau et on check pour que chaque index soit par ou impair
     * @param $value - La chaine de caractère que l'on souhaite modifier
     */
    public function customCapitalize($value, $bool = true)
    {
        if ($bool){ 
            for ($i = 0; $i < strlen($value); $i++){
                if ($i % 2) {
                    $value[$i] = strtolower($value[$i]);
                } else {
                    $value[$i] = strtoupper($value[$i]);
                }
            }
        } else {
            for ($i = 0; $i < strlen($value); $i++){
                if ($i % 2) {
                    $value[$i] = strtoupper($value[$i]);
                } else {
                    $value[$i] = strtolower($value[$i]);
                }
            }
        }

        return $value;
    }
}
