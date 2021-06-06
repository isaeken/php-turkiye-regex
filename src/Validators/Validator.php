<?php


namespace IsaEken\TurkiyeRegex\Validators;


use InvalidArgumentException;
use IsaEken\TurkiyeRegex\Interfaces\ValidatorInterface;

class Validator implements ValidatorInterface
{
    /**
     * @param string $string
     * @return bool
     */
    protected static function isValid(string $string): bool
    {
        return is_string($string);
    }

    /**
     * @inheritDoc
     */
    public static function validate(string|array $validate): bool
    {
        if (is_array($validate)) {
            foreach ($validate as $item) {
                if (! is_string($item)) {
                    throw new InvalidArgumentException;
                }

                if (! static::isValid($item)) {
                    return false;
                }
            }

            return true;
        }
        else if (is_string($validate)) {
            return static::isValid($validate);
        }

        throw new InvalidArgumentException;
    }
}
