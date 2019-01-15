<?php declare(strict_types = 1);

namespace Useless;

interface Pointless
{
	public function nonsenseOwn() : string;
	public function nonsenseOther(Pointless $other) : string;
}