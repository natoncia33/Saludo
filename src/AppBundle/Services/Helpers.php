<?php
namespace AppBundle\Services;


class Helpers{

	public $manager;

	public function __construct( $manager){
		$this->manager = $manager;
	}

	public function json($data){	

		//normaliza la información que llega
		$normalizers = array(new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer());
		//Codifica la información
		$encoders = array("json" => new \Symfony\Component\Serializer\Encoder\JsonEncoder());
		$serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
		$json = $serializer->serialize($data,'json');

		//hace una respuesta http
		$response = new \Symfony\Component\HttpFoundation\Response();
		$response->setContent($json);
		$response->headers->set('Content-Type','application/json');
		 
		return $response;

	}
}