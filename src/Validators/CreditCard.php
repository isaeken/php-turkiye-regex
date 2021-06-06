<?php


namespace IsaEken\TurkiyeRegex\Validators;


use IsaEken\TurkiyeRegex\Validators\Validator as BaseValidator;
use IsaEken\TurkiyeRegex\Interfaces\ValidatorInterface;
use Spatie\Regex\Regex;

class CreditCard extends BaseValidator implements ValidatorInterface
{
    /**
     * @param string $string
     * @return bool
     */
    protected static function isValid(string $string): bool
    {
        return Regex::match("/^([0-9]{4})\s?([0-9]{4})\s?([0-9]{4})\s?([0-9]{4})$/", $string)->hasMatch();
    }
}
