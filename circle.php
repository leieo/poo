<?php
/**
* 
*/
class Circle extends Form
{
	private $rayon = 3;
	public function area() 
	{
		return pi() * $this->rayon * $this->rayon;
		// OU  return M_PI * $this->rayon ** 2;
	}
}