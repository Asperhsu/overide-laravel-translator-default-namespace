<?php
namespace App\Translation;

use Illuminate\Translation\Translator as IlluminateTranslator;

class Translator extends IlluminateTranslator
{
    public function parseKey($key)
    {
        $segments = parent::parseKey($key);
        if ($segments[0] == '*') {
            $segments[0] = 'YOUR NAMESPACE';
        }

        return $segments;
    }
}
