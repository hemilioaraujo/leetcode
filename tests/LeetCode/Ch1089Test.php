<?php

use App\LeetCode\Ch1089;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Ch1089Test extends TestCase
{
    private Ch1089 $object;

    protected function setUp(): void
    {
        parent::setUp();
        $this->object = new Ch1089();
    }

    public static function dataSetsTest(): array
    {
        return [
            'teste 1' => [[1, 0, 2, 3, 0, 4, 5, 0], [1, 0, 0, 2, 3, 0, 0, 4]],
            'teste 2' => [[1, 2, 3], [1, 2, 3]],
            'teste 3' => [[0, 1, 7, 6, 0, 2, 0, 7], [0, 0, 1, 7, 6, 0, 0, 2]]
        ];
    }

    #[DataProvider('dataSetsTest')]
    public function test_solution1_is_correct(array $input, array $expected)
    {
        $this->object->duplicateZeros1($input);

        $this->assertEquals($expected, $input);
    }

    #[DataProvider('dataSetsTest')]
    public function test_solution2_is_correct(array $input, array $expected)
    {
        $this->object->duplicateZeros2($input);

        $this->assertEquals($expected, $input);
    }
}
