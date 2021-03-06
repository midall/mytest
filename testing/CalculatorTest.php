<?php

declare( strict_types = 1 );

// Load all the packages
require '../vendor/autoload.php';

// Load class file to test
require '../classes/Calculator.php';

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
	/**
	 * @test
	 */
	public function testObjects()
	{
		$x = 5;
		$y = 4;
		$calc1 = new Calculator( $x, $y );
		$calc2 = new Calculator( $x, $y );
		$this->assertEquals( $calc1, $calc2 );
		$this->assertFalse( $calc1 === $calc2 );
	}

	/**
	 * @test
	 */
	public function testAddInteger()
	{
		$x = 5;
		$y = 4;
		$calc = new Calculator( $x, $y );
		$this->assertEquals( 9, $calc->add() );
		$this->assertFalse( 8 == $calc->add() );
		$this->assertGreaterThan( $x, $calc->add());
		$this->assertGreaterThan( $y, $calc->add());
		$this->assertInternalType( 'int', $calc->add() );
	}

	/**
	 * @test
	 */
	public function testAddFloat()
	{
		$x = 5.2;
		$y = 4.9;
		$calc = new Calculator( $x, $y );
		$this->assertEquals( 10.1, $calc->add() );
		$this->assertFalse( 11.9 == $calc->add() );
		$this->assertGreaterThan( $x, $calc->add());
		$this->assertGreaterThan( $y, $calc->add());
		$this->assertInternalType( 'float', $calc->add() );
	}

	/**
	 * @test
	 */
	public function testSubtractionInteger()
	{
		$x = 5;
		$y = 4;
		$calc = new Calculator( $x, $y );
		$this->assertEquals( 1, $calc->subtraction() );
		$this->assertFalse( 5 == $calc->subtraction() );
		$this->assertInternalType( 'int', $calc->subtraction() );
	}

	/**
	 * @test
	 */
	public function testSubtractionFloat()
	{
		$x = 5.9;
		$y = 4.8;
		$calc = new Calculator( $x, $y );
		$this->assertEquals( 1.1, $calc->subtraction() );
		$this->assertFalse( 2.3 == $calc->subtraction() );
		$this->assertInternalType( 'float', $calc->subtraction() );
	}

	/**
	 * @test
	 */
	public function testMultiplicationInteger()
	{
		$x = 11;
		$y = 2;
		$calc = new Calculator( $x, $y );
		$this->assertEquals( 22, $calc->multiplication() );
		$this->assertFalse( 55 == $calc->multiplication() );
		$this->assertGreaterThanOrEqual( $x, $calc->multiplication() );
		$this->assertGreaterThanOrEqual( $y, $calc->multiplication() );
		$this->assertInternalType( 'int', $calc->multiplication() );
	}

	/**
	 * @test
	 */
	public function testMultiplicationCouple()
	{
		$x = 94;
		$y = 35;
		$calc1 = new Calculator( $x, $y );
		$result1 = $calc1->multiplication();
		$calc2 = new Calculator( $y, $x );
		$result2 = $calc2->multiplication();
		$this->assertTrue( $result1 == $result2 );
	}

	/**
	 * @test
	 */
	public function testMultiplicationFloat()
	{
		$x = 11.1;
		$y = 2.2;
		$calc = new Calculator( $x, $y );
		$this->assertEquals( 24.42, $calc->multiplication() );
		$this->assertFalse( 23.58 == $calc->multiplication() );
		$this->assertGreaterThanOrEqual( $x, $calc->multiplication() );
		$this->assertGreaterThanOrEqual( $y, $calc->multiplication() );
		$this->assertInternalType( 'float', $calc->multiplication() );
	}

	/**
	 * @test
	 */
	public function testDivisionIneger()
	{
		$x = 20;
		$y = 5;
		$calc = new Calculator( $x, $y );
		$this->assertEquals( 4, $calc->division() );
		$this->assertFalse( 8 == $calc->division() );
		$this->assertLessThanOrEqual( $x, $calc->division() );
		$this->assertInternalType( 'int', $calc->division() );
		
	}

	/**
	 * @test
	 */
	public function testDivisionFloat()
	{
		$x = 18.4;
		$y = 2.3;
		$calc = new Calculator( $x, $y );
		$this->assertEquals( 8, $calc->division() );
		$this->assertFalse( 2.5 == $calc->division() );
		$this->assertInternalType( 'float', $calc->division() );
	}

	/**
	 * @test
	 */
	public function testDivisionZero()
	{
		$x = 86;
		$y = 0;
		$calc = new Calculator( $x, $y );
		$result = $calc->division();
		$this->assertNull( $result );
	}
}
?>
