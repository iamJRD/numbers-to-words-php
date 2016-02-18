<?php
    class NumbersToWords
    {
        function convertToWords($input_number)
        {
            $onesPlace = array(
                "1" => "One",
                "2" => "Two",
                "3" => "Three",
                "4" => "Four",
                "5" => "Five",
                "6" => "Six",
                "7" => "Seven",
                "8" => "Eight",
                "9" => "Nine"
                );

            return $onesPlace[$input_number];
        }
    }

?>
