<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller{
	public function prueba($parametro){
		return 'Estoy dentro de PruebaController :D y recibí este parametro'.$parametro;
	}
}