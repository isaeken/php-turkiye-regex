<?php


namespace IsaEken\TurkiyeRegex\Validators;


use IsaEken\PhpTcKimlik\Helpers;
use IsaEken\TurkiyeRegex\Validators\Validator as BaseValidator;
use IsaEken\TurkiyeRegex\Interfaces\ValidatorInterface;

class Identity extends BaseValidator implements ValidatorInterface
{
    /**
     * @param string $string
     * @return bool
     */
    protected static function isValid(string $string): bool
    {
        return Helpers::verifyIdentity($string);
    }
}
