<?php

use PHPUnit\Framework\TestCase;
use Useless;
/**
 * Sample for PHP Unit tests
 */
class PhpunitTest extends TestCase
{

	public static function setUpBeforeClass()
	{
		echo 'FOO_STATIC'.PHP_EOL;
	}

	public function setUp()
	{
		echo 'FOO'.PHP_EOL;
	}

	public function tearDown()
	{
		echo 'foo'.PHP_EOL;
	}
	public function test_unusefull_get_foo()
	{
		$uuf = new Useless\Unusefull();
		$this->assertEquals($uuf->getFoo(),0);
		$this->assertNull(null);
		$this->assertTrue(true);
		$this->assertInstanceOf(
			Useless\Pointless::class,
			$uuf
		);
		// And many more ...
		$uuf->setFoo(42);
		return $uuf;
	}

	/**
	 * @depends test_unusefull_get_foo
	 */
	public function test_unusefull_set_foo($uuf)
	{
		$this->assertEquals($uuf->getFoo(),84);
	}

	/**
	 * @dataProvider numbers
	 * mutually exclusive with (at)depends
	 */
	public function test_unusefull_set_foo_datap($in, $out)
	{
		$uuf = new Useless\Unusefull();
		$uuf->setFoo($in);
		$this->assertEquals($uuf->getFoo(),$out);
	}

	/**
	 * @expectedException \Exception
	 */
	public function test_exception()
	{
		throw new \Exception('fake');
		$this->assertTrue(true);
	}

	public function numbers() 
	{
		return [
			[1,2],
			[3,6],
			[-7,-14]
		];
	}


	/**
	 * @group goldenesHerz
	 */
	public function test_pointless_mock()
	{
		$pm = $this->createMock(Useless\Pointless::class);
		$pm->method('nonsenseOwn')
			->willReturn('a_string');
		$pm->expects($this->once())
			->method('nonsenseOwn');
		$uuf = new Useless\Unusefull();
		$this->assertEquals($uuf->nonsenseOther($pm),'a_string');
	}

	public static function tearDownAfterClass()
	{
		echo 'foo_static'.PHP_EOL;
	}
}




















