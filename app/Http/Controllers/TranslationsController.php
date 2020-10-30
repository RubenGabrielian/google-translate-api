<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslationsController extends Controller
{
    protected $customLogic;

    public function __construct(\CustomLogic $customLogic)
    {
        $this->customLogic = $customLogic;
    }

    public function translate (Request $request) {
        return $this->customLogic->translation($request->name);
    }
}
