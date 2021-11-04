<?php

use App\Repositories\RomanNumbersRepository;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class AlgarismoRomanoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testReturnFormValue1()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->numberToRomanNumber(1);

        $this->assertEquals('I', $expect);
    }

    public function testReturnFormValue2()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->numberToRomanNumber(2);

        $this->assertEquals('II', $expect);
    }

    public function testReturnFormValue4()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->numberToRomanNumber(4);

        $this->assertEquals('IV', $expect);
    }

    public function testReturnFormValue17()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->numberToRomanNumber(17);

        $this->assertEquals('XVII', $expect);
    }

    public function testReturnFormValue49()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->numberToRomanNumber(49);

        $this->assertEquals('XLIX', $expect);
    }

    public function testReturnFormValue232()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->numberToRomanNumber(232);

        $this->assertEquals('CCXXXII', $expect);
    }

    public function testReturnFormValue401()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->numberToRomanNumber(401);

        $this->assertEquals('CDI', $expect);
    }

    public function testReturnFormValue1904()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->numberToRomanNumber(1904);

        $this->assertEquals('MCMIV', $expect);
    }

    public function testReturnFormValueVI()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->romanNumberToNumber('VI');

        $this->assertEquals(6, $expect);
    }

    public function testReturnFormValueXCVIII()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->romanNumberToNumber('XCVIII');

        $this->assertEquals(98, $expect);
    }

    public function testReturnFormValueCCCXXIX()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->romanNumberToNumber('CCCXXIX');

        $this->assertEquals(329, $expect);
    }

    public function testReturnFormValueCDXCIV()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->romanNumberToNumber('CDXCIV');

        $this->assertEquals(494, $expect);
    }

    public function testReturnFormValueMCMLXXXII()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->romanNumberToNumber('MCMLXXXII');

        $this->assertEquals(1982, $expect);
    }

    public function testReturnFormValue0()
    {
        $class = new RomanNumbersRepository();
        $expect = $class->romanNumberToNumber('0');
        $expect2 = $class->romanNumberToNumber('0');

        $this->assertEquals(0, $expect);
        $this->assertEquals(0, $expect2);
    }
}
