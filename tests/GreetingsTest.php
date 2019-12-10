<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase
{
	public function testHelloWorld()
	{
		$this->assertEquals('Hello World', Greetings::sayHelloWorld());
	}
}