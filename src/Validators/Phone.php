<?php


namespace IsaEken\TurkiyeRegex\Validators;


use IsaEken\TurkiyeRegex\Validators\Validator as BaseValidator;
use IsaEken\TurkiyeRegex\Interfaces\ValidatorInterface;
use Spatie\Regex\Regex;

class Phone extends BaseValidator implements ValidatorInterface
{
    /**
     * @param string $string
     * @return bool
     */
    protected static function isValid(string $string): bool
    {
        return Regex::match("/^(0)([0-9]{3})\s?([0-9]{3})\s?([0-9]{2})\s?([0-9]{2})$/", $string)->hasMatch();
    }
}
