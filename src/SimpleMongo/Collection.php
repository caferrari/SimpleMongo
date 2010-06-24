<?php

namespace SimpleMongo;

class Collection 
{

	private $recordset;
	private $mongo;
	private $db;
	private $name;
	
	public function __construct($db, $name, \Mongo $m){
		$this->recordset 	= array();
		$this->mongo 		= $m;
		$this->db 			= $db;
		$this->name			= $name;
	}
	
	public function create()
	{
		return new $this->name($this);
	}
	
	public function getCollection()
	{
		return $this->mongo->{$this->db}->{$this->name};
	}
		
}
