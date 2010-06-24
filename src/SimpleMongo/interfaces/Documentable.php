<?php

namespace SimpleMongo;

interface Documentable
{
	public function __set($p, $v);
	public function __get($p);
}
