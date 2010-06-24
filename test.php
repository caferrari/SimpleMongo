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

$l = $amigos->create();
$l->nome = 'luan';
$l->telefone = '987654321';
$l->email = 'luanlmd@asdd.com';
$l->tags = array('php', 'python', 'java');

$l->insert();

die (var_dump($l));
