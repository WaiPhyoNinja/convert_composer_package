<?php

namespace Wph\NumToBurmeseString;

interface ChangeInterface
{

    public function burmeseNumber($number);
    public function convertToEnglishNumber($number);
    public function convertToBurmeseWords($number, $wordType);
}
