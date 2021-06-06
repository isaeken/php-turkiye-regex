<?php


namespace IsaEken\TurkiyeRegex\Validators;


use IsaEken\TurkiyeRegex\Validators\Validator as BaseValidator;
use IsaEken\TurkiyeRegex\Interfaces\ValidatorInterface;
use Spatie\Regex\Regex;

class Date extends BaseValidator implements ValidatorInterface
{
    /**
     * @param string $string
     * @return bool
     */
    protected static function isValid(string $string): bool
    {
        return Regex::match("/^([1-9]|[12][0-9]|3[01])(\/?\.?\-?\s?)(0[1-9]|1[12])(\/?\.?\-?\s?)(19[0-9][0-9]|20[0][0-9]|20[1][0-8])$/", $string)->hasMatch();
    }
}
