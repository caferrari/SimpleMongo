<?php

include_once 'src/SimpleMongo/Document.php';
include_once 'src/SimpleMongo/Collection.php';

use \SimpleMongo\Document as Document;
use \SimpleMongo\Collection as Collection;

class Amigo extends Document
{

}

$m = new Mongo();
$amigos = new Collection('Teste', 'Amigo', $m);

$l = $amigos->create(
		array(
			'nome'		=> 'flavio', 
			'telefone' 	=> '5555555', 
			'email' 	=> 'luanlmd@gmail.com', 
			'tags' 		=> array('php', 'python', 'java')
		)
	);

$l->insert();

die (var_dump($l));
