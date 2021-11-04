<?php

namespace App\Repositories;


class RomanNumbersRepository
{
    private $numbers = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    private $separate_numbers = [
        ["letter" => 'I', "number" => 1],
        ["letter" => 'V', "number" => 5],
        ["letter" => 'X', "number" => 10],
        ["letter" => 'L', "number" => 50],
        ["letter" => 'C', "number" => 100],
        ["letter" => 'D', "number" => 500],
        ["letter" => 'M', "number" => 1000],
        ["letter" => '0',   "number" => 0]
    ];

    function romanNumberToNumber(string $roman): int
    {
        $arabic = 0;
        $state = 0;
        $len = strlen($roman);

        while ($len >= 0) {
            $i = 0;
            $sidx = $len;

            while ($this->separate_numbers[$i]['number'] > 0) {
                if (strtoupper(@$roman[$sidx]) == $this->separate_numbers[$i]['letter']) {
                    if ($state > $this->separate_numbers[$i]['number']) {
                        $arabic -= $this->separate_numbers[$i]['number'];
                    } else {
                        $arabic += $this->separate_numbers[$i]['number'];
                        $state = $this->separate_numbers[$i]['number'];
                    }
                }
                $i++;
            }
            $len--;
        }

        return($arabic);
    }


    function numberToRomanNumber(int $num): string
    {
        $n = intval($num);
        $res = '';

        foreach ($this->numbers as $roman => $number)
        {
            $matches = intval($n / $number);
            $res .= str_repeat($roman, $matches);
            $n = $n % $number;
        }

        return $res;
    }
}
