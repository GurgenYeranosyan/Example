<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LoloController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function lolo(){
        return 45;
    }

    public function polo(){
        return 13;
    }
}
