<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Services\Helpers;
use AppBundle\Modelos\Entity\Saludo;

class SaludoController extends Controller{

public function saludoAction(Request $request){
	
	$saludo = new Saludo('Hola','Natalia','Rosero');
	 var_dump($saludo);
	 die();
}	

}