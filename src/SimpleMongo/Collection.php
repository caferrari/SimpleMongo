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
	
	public function create($pars = array())
	{
		$obj = new $this->name($this);
		foreach ($pars as $k => $v) $obj->$k = $v;
		return $obj;
	}
	
	public function getCollection()
	{
		return $this->mongo->{$this->db}->{$this->name};
	}
		
}
