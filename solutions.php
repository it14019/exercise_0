<?php

/** PROBLEM 1 */

function findOddEvenPair(array $numbers): int
{
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        if (($numbers[$i] % 2 == 0 && $numbers[$i + 1] % 2 != 0) || ($numbers[$i + 1] % 2 == 0 && $numbers[$i] % 2 != 0)) {
            $res = $numbers[$i];
            $key = array_search($res, $numbers);
            return $key;
        }
    }

    throw new InvalidArgumentException('Wrong argument passed/passed only one number/identical numbers were passed!'); //without says 'missing return statement'. what is better solution?
}

echo findOddEvenPair([1, 5, 4, 6, 3]);

/** PROBLEM 2 */

class SummationService
{
    private $data;
    private $a;
    private $b;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function sum(int $a, int $b): int
    {
        $this->a = $a;
        $this->b = $b;
        return array_sum(array_slice($this->data, $a, $b - $a + 1));

    }
}

$service = new SummationService([-1, 0, 2, 7, -15]);
echo $service->sum(2, 4) . PHP_EOL;

/** PROBLEM 3 */

function longestSubstr(string $text): string
{
    for ($i = 0; $i < strlen($text); $i++) {

        $position = strrpos($text, $text[$i]);
        return substr($text, 0, $position);
    }
}

echo longestSubstr('aZaZaZ') .PHP_EOL;

