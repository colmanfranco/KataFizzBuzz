<?php

namespace FizzBuzz;
colmanfranco/KataFizzBuzz.git
git push -u origin master

class Kata
{
    private $num;
    private $div1 = 3;
    private $div2 = 5;

    public function kataFizzBuzz($num)
    {
        $fizz = "Fizz";
        $buzz = "Buzz";
        $fizzBuzz = "FizzBuzz";
        $key1 = $num % $this->div1;
        $key2 = $num % $this->div2;
        $correct = 0;

        if($key1==$correct && $key2==$correct)
        {
            return $fizzBuzz;
        }
        
        if($key1==$correct)
        {
            return $fizz;
        }

        if($key2==$correct)
        {
            return $buzz;
        }

        return $num;
    }

}

?>