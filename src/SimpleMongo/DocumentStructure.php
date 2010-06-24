<?php

namespace SimpleMongo;

include_once 'interfaces/Documentable.php';

class DocumentStructure implements Documentable
{
	public function __set($p, $v){
		$this->$p = is_array($v) ? (object)$v : $v;
	}
	
	public function __get($p){
		if (!isset($this->$p)) $this->$p = new DocumentStructure();
		return $this->$p;
	}
}

