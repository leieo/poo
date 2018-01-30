<?php

class A
{
	private static $attribut1 = 8;
	// protected static $attribut1 = 8;
	// ou
	// public static $attribut1 = 8;
	//
	// si on utilise static au lieu de self, changer "private" pour que cela fonctionne.

	public function methode1()
	{
		echo self::$attribut1;
		// echo static::$attribut1;
		// -> donne une erreur alors que "self" fonctionne.
	}
}

class B extends A
{
	public function methode1()
	{
		parent::methode1();
	}
}

(new B)->methode1();