<?php

use FizzBuzz\Kata;
use PHPUnit\Framework\TestCase;


class KataTest extends TestCase
{
function testSiDevuelveUnNumeroCuandoNoEsDivisibleNiPor3Ni5()
    {
        //Definir el escenario del test
        $num = 1;
        $kata = new Kata();
        //Ejecuto el escenario
        $numeric = $kata->kataFizzBuzz($num);
        //Compruebo mi assertion
        $this->assertIsNumeric($numeric);
    }

    function testSiDevuelveUnEntero()
    {
        //Definir el escenario del test
        $num = 1.2;
        $kata = new Kata();
        //Ejecuto el escenario
        $int = $kata->kataFizzBuzz($num);
        //Compruebo mi assertion
        $this->assertIsInt($int);
    }

    function testSiEsDivisiblePor3DevuelveFizz()
    {
        //Definir el escenario del test
        $num = 3;
        $expected = "Fizz";
        $kata = new Kata();
        //Ejecuto el escenario
        $fizz = $kata->kataFizzBuzz($num);
        //Compruebo mi assertion
        $this->assertEquals($expected, $fizz);
    }

    function testSiEsDivisiblePor5DevuelveBuzz()
    {
        //Definir el escenario del test
        $num = 5;
        $expected = "Buzz";
        $kata = new Kata();
        //Ejecuto el escenario
        $fizz = $kata->kataFizzBuzz($num);
        //Compruebo mi assertion
        $this->assertEquals($expected, $fizz);
    }

    function testSiEsDivisiblePor3y5DevuelveFizzBuzz()
    {
        $num = 15;
        $expected = "FizzBuzz";
        $kata = new Kata();
        //Ejecuto el escenario
        $fizzBuzz = $kata->kataFizzBuzz($num);
        //Compruebo mi assertion
        $this->assertEquals($expected, $fizzBuzz);

    }
}


?>