<?php
/**
* 
*/
class Triangle extends Form 
{
	private $base = 4;
	private $hauteur = 2;

	public function area()
	{
		return ($this->base * $this->hauteur) / 2;
	}
}