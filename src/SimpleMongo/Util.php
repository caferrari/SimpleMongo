<?php

namespace SimpleMongo;

class Util 
{
	
	public static array2object($array)
	{
		foreach ($array as $k => $v)
		{
			if (is_array($v)) 
				$array[$k] = array2object($v);
		}
		return (object)$array;	
	}

}
