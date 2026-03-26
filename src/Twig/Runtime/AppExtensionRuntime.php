<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function customCapitalize($value)
    {
        for ($i = 0; $i < strlen($value); $i++){
            if ($i % 2) {
                $value[$i] = strtolower($value[$i]);
            } else {
                $value[$i] = strtoupper($value[$i]);
            }
        }

        return $value;
    }
}
