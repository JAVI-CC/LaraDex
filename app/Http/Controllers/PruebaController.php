<?php

namespace Laradex\Http\Controllers;

use Laradex\Http\Controllers\Controller;

class PruebaController extends Controller {
    public function javi($param){
            return 'Estoy dentro de PruebaController y recibi este parametro: '. $param;
    }
}