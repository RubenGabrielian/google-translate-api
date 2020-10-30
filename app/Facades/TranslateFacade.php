<?php

namespace App\Facades;
use Stichoza\GoogleTranslate\GoogleTranslate;

use Illuminate\Support\Facades\Facade;

class TranslateFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'translate-logic';
    }

    public function translation ($text) {
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $tr->setTarget('hy');
        return $tr->translate($text);

    }
}
