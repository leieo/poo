<?php

// la classe A est parente.
class A
{
	public function tata()
	{
		echo "Je suis la méthode tata appelée depuis la classe A." . PHP_EOL;
	}
}

// la classe B hérite de la classe A, elle est fille.
class B extends A
{
	public function toto()
	{
		parent::tata();
		echo "Je suis la méthode toto appelée depuis la classe B." . PHP_EOL;
	}
}

(new B)->toto();