<?php
namespace AppBundle\Modelos\Entity;
/**
 * 
 */
class Saludo
{
	//Atributo que representa el nombre de la persona
	public $nombre;

	//Atributo que representa el apellido de la persona

	public $apellido;

	//Atributo que representa un saludo
	public $saludo;

	//Metodo contructor de la clase Saludo, los atributos de la clase se igualaran a los parametros del metodo 

	public function __construct($saludo, $nombre, $apellido){
		$this->saludo=$saludo;
		$this->nombre = $nombre;
		$this->apellido=$apellido;
		
	}
	
}