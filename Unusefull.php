<?php

namespace Useless;

class Unusefull
implements Pointless
{
	public function nonsenseOwn() : string
	{
		return 'unusefull_return';
	}
	public function nonsenseOther(Pointless $other) : string
	{
		return $other->nonsenseOwn();
	}
	protected $foo = 0;
	public function setFoo(int $foo)
	{
		$this->foo = $foo;
	}
	public function getFoo() : int
	{
		return 2*$this->foo;
	}
}