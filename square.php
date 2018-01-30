<?php
/**
* 
*/
class Square extends Form
{
	private $cote = 4;
	public function area()
	{
		return $this->cote ** 2;
	}
}