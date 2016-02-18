<?php
    require_once 'src/NumbersToWords.php';

    class NumbersToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_numbersToWords_oneDigit()
        {
            $test_numbersToWords_oneDigit = new NumbersToWords;
            $input = "1";

            $result = $test_numbersToWords_oneDigit->convertToWords($input);

            $this->assertEquals("One", $result);
        }
    }
?>
