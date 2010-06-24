<?php

namespace SimpleMongo;

include_once 'DocumentStructure.php';
include_once 'interfaces/Documentable.php';

class Document extends DocumentStructure implements Documentable
{
	
	private $_document;
	private $_collection;

	public function __construct(Collection $c){
		$this->_document 	= new DocumentStructure();
		$this->_collection 	= $c;
	}
	
	public function __set($p, $v){
		if ($p{0}==='_' && isset($this->$p)) return $this->$p = $v;
		$this->_document->$p = $v;
	}
	
	public function __get($p){
		if ($p{0}==='_' && isset($this->$p)) return $this->$p;
		return $this->_document->$p;
	}
	
	public function insert(){
		$this->_document = $this->_collection->getCollection()->insert($this->_document);
	}

}
